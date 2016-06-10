<?
require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/DanfeNFePHP.class.php');
require_once PATH_ROOT.'webservicos/NfePhp/classes/libs/Common/PdfNFePHP.class.php';
require_once(PATH_ROOT.'webservicos/NfePhp/PHPMailer/class.phpmailer.php');

function enviar_email_emissao($cnpj_empresa,$chave, $autorizar, $ambiente, $tpproc, $aConfig = '', $cancelada = 0) {
	$sAmb = ($ambiente == '2') ? 'homologacao' : 'producao';
	$modnfe = substr($chave, 20,2);
	
	if ($modnfe == 65) return true;

	if ($autorizar == 1) {
		$chave_nfs     = $chave.'.xml';
		$arquivo = PATH_ARQS.$sAmb.'/entradas/'.$chave_nfs;
	} else {
		$chave_nfs = $chave.'-prot.xml';
		$arquivo = PATH_ARQS.$sAmb.'/enviadas/aprovadas/'.$chave_nfs;
	}

	if (!file_exists($arquivo)) {
		return false;
	}
	
	$emit      = array();
	$enderEmit = array();
	$dest      = array();
	$enderDest = array();
	$xml = simplexml_load_string(file_get_contents($arquivo));
	if ($autorizar == 1) {
		foreach ($xml as $key=>$dados) {
			foreach ($dados as $key=>$lancar) {
				if ($key == 'emit') {
					$emit['CNPJ']  = $lancar->CNPJ;
					$emit['xNome'] = $lancar->xNome;
					$enderEmit['fone'] = $lancar->enderEmit->fone;
					$enderEmit['CEP']  = $lancar->enderEmit->CEP;
					$enderEmit['xLgr'] = $lancar->enderEmit->xLgr;
					$enderEmit['nro']  = $lancar->enderEmit->nro;
					$enderEmit['xBairro'] = $lancar->enderEmit->xBairro;
					$enderEmit['xMun'] = $lancar->enderEmit->xMun;
					$enderEmit['UF'] = $lancar->enderEmit->UF;
				}
				if ($key == 'dest') {
					$dest['CNPJ']  = $lancar->CNPJ;
					$dest['xNome'] = $lancar->xNome;
					$dest['email'] = $lancar->email;
					$email_dest    = $lancar->email;
				}

				if ($key == 'infProt') {
					$protocolo  = $lancar->nProt;
				}
			}
		}
	} else {
		foreach ($xml as $key=>$arq) {
			foreach ($arq as $key=>$dados) {
				foreach ($dados as $key=>$lancar) {
					if ($key == 'ide') {
						$nfe['numero']  = $lancar->nNF;
						$nfe['serie'] = $lancar->serie;
					}
					
					if ($key == 'emit') {
						$emit['CNPJ']  = $lancar->CNPJ;
						$emit['xNome'] = $lancar->xNome;
						$enderEmit['fone'] = $lancar->enderEmit->fone;
						$enderEmit['CEP']  = $lancar->enderEmit->CEP;
						$enderEmit['xLgr'] = $lancar->enderEmit->xLgr;
						$enderEmit['nro']  = $lancar->enderEmit->nro;
						$enderEmit['xBairro'] = $lancar->enderEmit->xBairro;
						$enderEmit['xMun'] = $lancar->enderEmit->xMun;
						$enderEmit['UF'] = $lancar->enderEmit->UF;
					}
					if ($key == 'dest') {
						$dest['CNPJ']  = $lancar->CNPJ;
						$dest['xNome'] = $lancar->xNome;
						$dest['email'] = $lancar->email;
						$email_dest    = $lancar->email;
					}
					if ($key == 'nProt') {
						$protocolo  = $lancar;
					}
					if ($key == 'dhRecbto') {
						$dhRecbto  = $lancar;
					}
				}
			}
		}
	}
	
	define('PATH_ROOT',$_SERVER['DOCUMENT_ROOT']."/webservices/");
	define('PATH_ARQS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/Ws_Servidor/NfeXml/");
	define('PATH_PDF',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/Ws_Servidor/danfe/");
	$sAmb = ($ambiente == '2') ? 'homologacao' : 'producao';
	if ($autorizar == 2) {
		$dir = PATH_ARQS.'/'.$sAmb.'/enviadas/aprovadas/';
		$chave_nfe = $chave.'-prot';
	} else {
		$dir = PATH_ARQS.'/'.$sAmb.'/entradas/';
		$chave_nfe = $chave;
	}

	$cnpj = mostra_cnpj($emit['CNPJ']);
	$fone = mostra_fone($enderEmit['fone']);
	$cep  = mostra_cep($enderEmit['CEP']);

	$subject = 'Notificação de Emissão de Nota Fiscal Eletrônica';
	$msg = $emit['xNome']." <br>
				CNPJ:".$cnpj."	Telefone: ".$fone." <br>
				Rua: ".$enderEmit['xLgr'].", ".$enderEmit['nro']." - ".$enderEmit['xBairro']." - CEP: ".$cep." <br>
				".$enderEmit['xMun']." - ".$enderEmit['UF']."<br><br>
				Sr(a).: ".$dest['xNome'].", esta mensagem refere-se à emissão da Nota Fiscal Eletrônica Numero: ".$nfe['numero'].' - Serie:'.$nfe['serie'].". <br><br>
				Para Validar à Nota Fiscal Eletronica junto a Receita Federal acesse:<br>
				http://www.nfe.fazenda.gov.br/PORTAL/consulta.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8= <br>
				
				Chave de Acesso da NF-e: ".$chave."<br>
				Data: ".$dhRecbto."<br>
				Protocolo: ".$protocolo."<br><br>
				
				Segue em Anexo o Arquivo XML da NF-e para seu controle....<br><br><br>
				Este e-mail foi gerado automaticamente, favor não responder.";
	
	
	$lnPdf = PATH_PDF.'pdf/';
	$link = $dir.$chave_nfe.'.xml';
	$docxml = file_get_contents($link);
	$danfe = new DanfeNFePHP($docxml, 'P', 'A4', $logomarca,$cancelada, 'I', '');
	$id = $danfe->montaDANFE();
	$texto = $danfe->printDANFE($lnPdf.$id.'.pdf', 'F');
	$arqpdf = $lnPdf.$id.'.pdf';

	$dest['email'] = 'paulorobto11@gmail.com';
	
	$mail= new PHPMailer;
	$mail->IsSMTP();        // Ativar SMTP
	$mail->SMTPDebug = false;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;     // Autenticação ativada
	$mail->SMTPSecure = 'ssl';  // SSL REQUERIDO pelo GMail
	$mail->Host = $aConfig['Host'];
	$mail->Port = $aConfig['Port'];;
	$mail->Username = $aConfig['Username'];
	$mail->Password = $aConfig['Password'];
	$mail->SetFrom($aConfig['Username'], $emit['xNome']);
	$mail->addAddress($dest['email'],$dest['xNome']);
	$mail->Subject=($subject);
	$mail->msgHTML($msg);
	$mail->AddAttachment($arquivo);      // attachment
	$mail->AddAttachment($arqpdf);      // attachment
	if ($mail->send()){
		return true;
	}else{
		return false;
	}
}

?>