<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cadpro. */ 
class CadproDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cadpro ('; 
		 $sql .= 'codemp,';
		 $sql .= 'codpro,';
		 $sql .= 'refer_produto,';
		 $sql .= 'codigo_barras,';
		 $sql .= 'nome_produto,';
		 $sql .= 'cod_fornecedor,';
		 $sql .= 'cod_tippro,';
		 $sql .= 'cod_categoria,';
		 $sql .= 'cod_linha,';
		 $sql .= 'conteudo,';
		 $sql .= 'tipo_uso,';
		 $sql .= 'caracteristica,';
		 $sql .= 'cfop,';
		 $sql .= 'vlr_compra,';
		 $sql .= 'vlr_venda,';
		 $sql .= 'margem,';
		 $sql .= 'perc_descto,';
		 $sql .= 'vlr_descto,';
		 $sql .= 'tp_tributacao,';
		 $sql .= 'icms,';
		 $sql .= 'ipi,';
		 $sql .= 'pis,';
		 $sql .= 'cofins,';
		 $sql .= 'tipo_venda,';
		 $sql .= 'estoque_ini,';
		 $sql .= 'estoque_entrada,';
		 $sql .= 'estoque_saida,';
		 $sql .= 'estoque_atual,';
		 $sql .= 'data_cadastro,';
		 $sql .= 'observacao,';
		 $sql .= 'alterado,';
		 $sql .= 'preco_base,';
		 $sql .= 'foto_produto1,';
		 $sql .= 'foto_produto2';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getCodpro()?$obj->getCodpro():0).',';
		 $sql .= '\''.$obj->getRefer_produto().'\',';
		 $sql .= '\''.$obj->getCodigo_barras().'\',';
		 $sql .= '\''.$obj->getNome_produto().'\',';
		 $sql .= ($obj->getCod_fornecedor()?$obj->getCod_fornecedor():0).',';
		 $sql .= ($obj->getCod_tippro()?$obj->getCod_tippro():0).',';
		 $sql .= ($obj->getCod_categoria()?$obj->getCod_categoria():0).',';
		 $sql .= ($obj->getCod_linha()?$obj->getCod_linha():0).',';
		 $sql .= '\''.$obj->getConteudo().'\',';
		 $sql .= '\''.$obj->getTipo_uso().'\',';
		 $sql .= '\''.$obj->getCaracteristica().'\',';
		 $sql .= ($obj->getCfop()?$obj->getCfop():0).',';
		 $sql .= ($obj->getVlr_compra()?$obj->getVlr_compra():0).',';
		 $sql .= ($obj->getVlr_venda()?$obj->getVlr_venda():0).',';
		 $sql .= ($obj->getMargem()?$obj->getMargem():0).',';
		 $sql .= ($obj->getPerc_descto()?$obj->getPerc_descto():0).',';
		 $sql .= ($obj->getVlr_descto()?$obj->getVlr_descto():0).',';
		 $sql .= ($obj->getTp_tributacao()?$obj->getTp_tributacao():0).',';
		 $sql .= ($obj->getIcms()?$obj->getIcms():0).',';
		 $sql .= ($obj->getIpi()?$obj->getIpi():0).',';
		 $sql .= ($obj->getPis()?$obj->getPis():0).',';
		 $sql .= ($obj->getCofins()?$obj->getCofins():0).',';
		 $sql .= ($obj->getTipo_venda()?$obj->getTipo_venda():0).',';
		 $sql .= ($obj->getEstoque_ini()?$obj->getEstoque_ini():0).',';
		 $sql .= ($obj->getEstoque_entrada()?$obj->getEstoque_entrada():0).',';
		 $sql .= ($obj->getEstoque_saida()?$obj->getEstoque_saida():0).',';
		 $sql .= ($obj->getEstoque_atual()?$obj->getEstoque_atual():0).',';
		 $sql .= '\''.$obj->getData_cadastro().'\',';
		 $sql .= '\''.$obj->getObservacao().'\',';
		 $sql .= ($obj->getAlterado()?$obj->getAlterado():0).',';
		 $sql .= ($obj->getPreco_base()?$obj->getPreco_base():0).',';
		 $sql .= '\''.$obj->getFoto_produto1().'\',';
		 $sql .= '\''.$obj->getFoto_produto2().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE cadpro SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'codpro = '.($obj->getCodpro()?$obj->getCodpro():0).',';
		 $sql .= 'refer_produto = '.'\''.$obj->getRefer_produto().'\' ,';
		 $sql .= 'codigo_barras = '.'\''.$obj->getCodigo_barras().'\' ,';
		 $sql .= 'nome_produto = '.'\''.$obj->getNome_produto().'\' ,';
		 $sql .= 'cod_fornecedor = '.($obj->getCod_fornecedor()?$obj->getCod_fornecedor():0).',';
		 $sql .= 'cod_tippro = '.($obj->getCod_tippro()?$obj->getCod_tippro():0).',';
		 $sql .= 'cod_categoria = '.($obj->getCod_categoria()?$obj->getCod_categoria():0).',';
		 $sql .= 'cod_linha = '.($obj->getCod_linha()?$obj->getCod_linha():0).',';
		 $sql .= 'conteudo = '.'\''.$obj->getConteudo().'\' ,';
		 $sql .= 'tipo_uso = '.'\''.$obj->getTipo_uso().'\' ,';
		 $sql .= 'caracteristica = '.'\''.$obj->getCaracteristica().'\' ,';
		 $sql .= 'cfop = '.($obj->getCfop()?$obj->getCfop():0).',';
		 $sql .= 'vlr_compra = '.($obj->getVlr_compra()?$obj->getVlr_compra():0).',';
		 $sql .= 'vlr_venda = '.($obj->getVlr_venda()?$obj->getVlr_venda():0).',';
		 $sql .= 'margem = '.($obj->getMargem()?$obj->getMargem():0).',';
		 $sql .= 'perc_descto = '.($obj->getPerc_descto()?$obj->getPerc_descto():0).',';
		 $sql .= 'vlr_descto = '.($obj->getVlr_descto()?$obj->getVlr_descto():0).',';
		 $sql .= 'tp_tributacao = '.($obj->getTp_tributacao()?$obj->getTp_tributacao():0).',';
		 $sql .= 'icms = '.($obj->getIcms()?$obj->getIcms():0).',';
		 $sql .= 'ipi = '.($obj->getIpi()?$obj->getIpi():0).',';
		 $sql .= 'pis = '.($obj->getPis()?$obj->getPis():0).',';
		 $sql .= 'cofins = '.($obj->getCofins()?$obj->getCofins():0).',';
		 $sql .= 'tipo_venda = '.($obj->getTipo_venda()?$obj->getTipo_venda():0).',';
		 $sql .= 'estoque_ini = '.($obj->getEstoque_ini()?$obj->getEstoque_ini():0).',';
		 $sql .= 'estoque_entrada = '.($obj->getEstoque_entrada()?$obj->getEstoque_entrada():0).',';
		 $sql .= 'estoque_saida = '.($obj->getEstoque_saida()?$obj->getEstoque_saida():0).',';
		 $sql .= 'estoque_atual = '.($obj->getEstoque_atual()?$obj->getEstoque_atual():0).',';
		 $sql .= 'data_cadastro = '.'\''.$obj->getData_cadastro().'\' ,';
		 $sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ,';
		 $sql .= 'alterado = '.($obj->getAlterado()?$obj->getAlterado():0).',';
		 $sql .= 'preco_base = '.($obj->getPreco_base()?$obj->getPreco_base():0).',';
		 $sql .= 'foto_produto1 = '.'\''.$obj->getFoto_produto1().'\' ,';
		 $sql .= 'foto_produto2 = '.'\''.$obj->getFoto_produto2().'\' ';
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM cadpro WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM cadpro WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodpro()) { 
			$sql .= " AND codpro = '".$obj->getCodpro()."'";
		} 
		if ($obj->getRefer_produto()) { 
			$sql .= " AND upper(refer_produto)  like ('%".strtoupper($obj->getRefer_produto())."%')";
		} 
		if ($obj->getCodigo_barras()) { 
			$sql .= " AND upper(codigo_barras)  like ('%".strtoupper($obj->getCodigo_barras())."%')";
		} 
		if ($obj->getNome_produto()) { 
			$sql .= " AND upper(nome_produto)  like ('%".strtoupper($obj->getNome_produto())."%')";
		} 
		if ($obj->getCod_fornecedor()) { 
			$sql .= " AND cod_fornecedor = '".$obj->getCod_fornecedor()."'";
		} 
		if ($obj->getCod_tippro()) { 
			$sql .= " AND cod_tippro = '".$obj->getCod_tippro()."'";
		} 
		if ($obj->getCod_categoria()) { 
			$sql .= " AND cod_categoria = '".$obj->getCod_categoria()."'";
		} 
		if ($obj->getCod_linha()) { 
			$sql .= " AND cod_linha = '".$obj->getCod_linha()."'";
		} 
		if ($obj->getConteudo()) { 
			$sql .= " AND upper(conteudo)  like ('%".strtoupper($obj->getConteudo())."%')";
		} 
		if ($obj->getTipo_uso()) { 
			$sql .= " AND tipo_uso = '".$obj->getTipo_uso()."'";
		} 
		if ($obj->getCaracteristica()) { 
			$sql .= " AND upper(caracteristica)  like ('%".strtoupper($obj->getCaracteristica())."%')";
		} 
		if ($obj->getCfop()) { 
			$sql .= " AND cfop = '".$obj->getCfop()."'";
		} 
		if ($obj->getVlr_compra()) { 
			$sql .= " AND vlr_compra = '".$obj->getVlr_compra()."'";
		} 
		if ($obj->getVlr_venda()) { 
			$sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
		} 
		if ($obj->getMargem()) { 
			$sql .= " AND margem = '".$obj->getMargem()."'";
		} 
		if ($obj->getPerc_descto()) { 
			$sql .= " AND perc_descto = '".$obj->getPerc_descto()."'";
		} 
		if ($obj->getVlr_descto()) { 
			$sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
		} 
		if ($obj->getTp_tributacao()) { 
			$sql .= " AND tp_tributacao = '".$obj->getTp_tributacao()."'";
		} 
		if ($obj->getIcms()) { 
			$sql .= " AND icms = '".$obj->getIcms()."'";
		} 
		if ($obj->getIpi()) { 
			$sql .= " AND ipi = '".$obj->getIpi()."'";
		} 
		if ($obj->getPis()) { 
			$sql .= " AND pis = '".$obj->getPis()."'";
		} 
		if ($obj->getCofins()) { 
			$sql .= " AND cofins = '".$obj->getCofins()."'";
		} 
		if ($obj->getTipo_venda()) { 
			$sql .= " AND tipo_venda = '".$obj->getTipo_venda()."'";
		} 
		if ($obj->getEstoque_ini()) { 
			$sql .= " AND estoque_ini = '".$obj->getEstoque_ini()."'";
		} 
		if ($obj->getEstoque_entrada()) { 
			$sql .= " AND estoque_entrada = '".$obj->getEstoque_entrada()."'";
		} 
		if ($obj->getEstoque_saida()) { 
			$sql .= " AND estoque_saida = '".$obj->getEstoque_saida()."'";
		} 
		if ($obj->getEstoque_atual()) { 
			$sql .= " AND estoque_atual = '".$obj->getEstoque_atual()."'";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		if ($obj->getAlterado()) { 
			$sql .= " AND alterado = '".$obj->getAlterado()."'";
		} 
		if ($obj->getPreco_base()) { 
			$sql .= " AND preco_base = '".$obj->getPreco_base()."'";
		} 
		if ($obj->getFoto_produto1()) { 
			$sql .= " AND foto_produto1 = '".$obj->getFoto_produto1()."'";
		} 
		if ($obj->getFoto_produto2()) { 
			$sql .= " AND foto_produto2 = '".$obj->getFoto_produto2()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setCodpro(mysql_result($rs, 0, 'codpro')); 
			 $obj->setRefer_produto(mysql_result($rs, 0, 'refer_produto')); 
			 $obj->setCodigo_barras(mysql_result($rs, 0, 'codigo_barras')); 
			 $obj->setNome_produto(mysql_result($rs, 0, 'nome_produto')); 
			 $obj->setCod_fornecedor(mysql_result($rs, 0, 'cod_fornecedor')); 
			 $obj->setCod_tippro(mysql_result($rs, 0, 'cod_tippro')); 
			 $obj->setCod_categoria(mysql_result($rs, 0, 'cod_categoria')); 
			 $obj->setCod_linha(mysql_result($rs, 0, 'cod_linha')); 
			 $obj->setConteudo(mysql_result($rs, 0, 'conteudo')); 
			 $obj->setTipo_uso(mysql_result($rs, 0, 'tipo_uso')); 
			 $obj->setCaracteristica(mysql_result($rs, 0, 'caracteristica')); 
			 $obj->setCfop(mysql_result($rs, 0, 'cfop')); 
			 $obj->setVlr_compra(mysql_result($rs, 0, 'vlr_compra')); 
			 $obj->setVlr_venda(mysql_result($rs, 0, 'vlr_venda')); 
			 $obj->setMargem(mysql_result($rs, 0, 'margem')); 
			 $obj->setPerc_descto(mysql_result($rs, 0, 'perc_descto')); 
			 $obj->setVlr_descto(mysql_result($rs, 0, 'vlr_descto')); 
			 $obj->setTp_tributacao(mysql_result($rs, 0, 'tp_tributacao')); 
			 $obj->setIcms(mysql_result($rs, 0, 'icms')); 
			 $obj->setIpi(mysql_result($rs, 0, 'ipi')); 
			 $obj->setPis(mysql_result($rs, 0, 'pis')); 
			 $obj->setCofins(mysql_result($rs, 0, 'cofins')); 
			 $obj->setTipo_venda(mysql_result($rs, 0, 'tipo_venda')); 
			 $obj->setEstoque_ini(mysql_result($rs, 0, 'estoque_ini')); 
			 $obj->setEstoque_entrada(mysql_result($rs, 0, 'estoque_entrada')); 
			 $obj->setEstoque_saida(mysql_result($rs, 0, 'estoque_saida')); 
			 $obj->setEstoque_atual(mysql_result($rs, 0, 'estoque_atual')); 
			 $obj->setData_cadastro(mysql_result($rs, 0, 'data_cadastro')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
			 $obj->setAlterado(mysql_result($rs, 0, 'alterado')); 
			 $obj->setPreco_base(mysql_result($rs, 0, 'preco_base')); 
			 $obj->setFoto_produto1(mysql_result($rs, 0, 'foto_produto1')); 
			 $obj->setFoto_produto2(mysql_result($rs, 0, 'foto_produto2')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM cadpro WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodpro()) { 
			$sql .= " AND codpro = '".$obj->getCodpro()."'";
		} 
		if ($obj->getRefer_produto()) { 
			$sql .= " AND upper(refer_produto)  like ('%".strtoupper($obj->getRefer_produto())."%')";
		} 
		if ($obj->getCodigo_barras()) { 
			$sql .= " AND upper(codigo_barras)  like ('%".strtoupper($obj->getCodigo_barras())."%')";
		} 
		if ($obj->getNome_produto()) { 
			$sql .= " AND upper(nome_produto)  like ('%".strtoupper($obj->getNome_produto())."%')";
		} 
		if ($obj->getCod_fornecedor()) { 
			$sql .= " AND cod_fornecedor = '".$obj->getCod_fornecedor()."'";
		} 
		if ($obj->getCod_tippro()) { 
			$sql .= " AND cod_tippro = '".$obj->getCod_tippro()."'";
		} 
		if ($obj->getCod_categoria()) { 
			$sql .= " AND cod_categoria = '".$obj->getCod_categoria()."'";
		} 
		if ($obj->getCod_linha()) { 
			$sql .= " AND cod_linha = '".$obj->getCod_linha()."'";
		} 
		if ($obj->getConteudo()) { 
			$sql .= " AND upper(conteudo)  like ('%".strtoupper($obj->getConteudo())."%')";
		} 
		if ($obj->getTipo_uso()) { 
			$sql .= " AND tipo_uso = '".$obj->getTipo_uso()."'";
		} 
		if ($obj->getCaracteristica()) { 
			$sql .= " AND upper(caracteristica)  like ('%".strtoupper($obj->getCaracteristica())."%')";
		} 
		if ($obj->getCfop()) { 
			$sql .= " AND cfop = '".$obj->getCfop()."'";
		} 
		if ($obj->getVlr_compra()) { 
			$sql .= " AND vlr_compra = '".$obj->getVlr_compra()."'";
		} 
		if ($obj->getVlr_venda()) { 
			$sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
		} 
		if ($obj->getMargem()) { 
			$sql .= " AND margem = '".$obj->getMargem()."'";
		} 
		if ($obj->getPerc_descto()) { 
			$sql .= " AND perc_descto = '".$obj->getPerc_descto()."'";
		} 
		if ($obj->getVlr_descto()) { 
			$sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
		} 
		if ($obj->getTp_tributacao()) { 
			$sql .= " AND tp_tributacao = '".$obj->getTp_tributacao()."'";
		} 
		if ($obj->getIcms()) { 
			$sql .= " AND icms = '".$obj->getIcms()."'";
		} 
		if ($obj->getIpi()) { 
			$sql .= " AND ipi = '".$obj->getIpi()."'";
		} 
		if ($obj->getPis()) { 
			$sql .= " AND pis = '".$obj->getPis()."'";
		} 
		if ($obj->getCofins()) { 
			$sql .= " AND cofins = '".$obj->getCofins()."'";
		} 
		if ($obj->getTipo_venda()) { 
			$sql .= " AND tipo_venda = '".$obj->getTipo_venda()."'";
		} 
		if ($obj->getEstoque_ini()) { 
			$sql .= " AND estoque_ini = '".$obj->getEstoque_ini()."'";
		} 
		if ($obj->getEstoque_entrada()) { 
			$sql .= " AND estoque_entrada = '".$obj->getEstoque_entrada()."'";
		} 
		if ($obj->getEstoque_saida()) { 
			$sql .= " AND estoque_saida = '".$obj->getEstoque_saida()."'";
		} 
		if ($obj->getEstoque_atual()) { 
			$sql .= " AND estoque_atual = '".$obj->getEstoque_atual()."'";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		if ($obj->getAlterado()) { 
			$sql .= " AND alterado = '".$obj->getAlterado()."'";
		} 
		if ($obj->getPreco_base()) { 
			$sql .= " AND preco_base = '".$obj->getPreco_base()."'";
		} 
		if ($obj->getFoto_produto1()) { 
			$sql .= " AND foto_produto1 = '".$obj->getFoto_produto1()."'";
		} 
		if ($obj->getFoto_produto2()) { 
			$sql .= " AND foto_produto2 = '".$obj->getFoto_produto2()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM cadpro WHERE 1=1 ';  


		 if ($obj->getCodpro()) { 
			 $sql .= 	 "AND codpro = '".$obj->getCodpro()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM cadpro WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getCodpro()) { 
			 $sql .= " AND codpro = '".$obj->getCodpro()."'";
 				} 
		if ($obj->getRefer_produto()) { 
			 $sql .= " AND upper(refer_produto)  like ('%".strtoupper($obj->getRefer_produto())."%')";
 				} 
		if ($obj->getCodigo_barras()) { 
			 $sql .= " AND upper(codigo_barras)  like ('%".strtoupper($obj->getCodigo_barras())."%')";
 				} 
		if ($obj->getNome_produto()) { 
			 $sql .= " AND upper(nome_produto)  like ('%".strtoupper($obj->getNome_produto())."%')";
 				} 
		if ($obj->getCod_fornecedor()) { 
			 $sql .= " AND cod_fornecedor = '".$obj->getCod_fornecedor()."'";
 				} 
		if ($obj->getCod_tippro()) { 
			 $sql .= " AND cod_tippro = '".$obj->getCod_tippro()."'";
 				} 
		if ($obj->getCod_categoria()) { 
			 $sql .= " AND cod_categoria = '".$obj->getCod_categoria()."'";
 				} 
		if ($obj->getCod_linha()) { 
			 $sql .= " AND cod_linha = '".$obj->getCod_linha()."'";
 				} 
		if ($obj->getConteudo()) { 
			 $sql .= " AND upper(conteudo)  like ('%".strtoupper($obj->getConteudo())."%')";
 				} 
		if ($obj->getTipo_uso()) { 
			 $sql .= " AND tipo_uso = '".$obj->getTipo_uso()."'";
 				} 
		if ($obj->getCaracteristica()) { 
			 $sql .= " AND upper(caracteristica)  like ('%".strtoupper($obj->getCaracteristica())."%')";
 				} 
		if ($obj->getCfop()) { 
			 $sql .= " AND cfop = '".$obj->getCfop()."'";
 				} 
		if ($obj->getVlr_compra()) { 
			 $sql .= " AND vlr_compra = '".$obj->getVlr_compra()."'";
 				} 
		if ($obj->getVlr_venda()) { 
			 $sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
 				} 
		if ($obj->getMargem()) { 
			 $sql .= " AND margem = '".$obj->getMargem()."'";
 				} 
		if ($obj->getPerc_descto()) { 
			 $sql .= " AND perc_descto = '".$obj->getPerc_descto()."'";
 				} 
		if ($obj->getVlr_descto()) { 
			 $sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
 				} 
		if ($obj->getTp_tributacao()) { 
			 $sql .= " AND tp_tributacao = '".$obj->getTp_tributacao()."'";
 				} 
		if ($obj->getIcms()) { 
			 $sql .= " AND icms = '".$obj->getIcms()."'";
 				} 
		if ($obj->getIpi()) { 
			 $sql .= " AND ipi = '".$obj->getIpi()."'";
 				} 
		if ($obj->getPis()) { 
			 $sql .= " AND pis = '".$obj->getPis()."'";
 				} 
		if ($obj->getCofins()) { 
			 $sql .= " AND cofins = '".$obj->getCofins()."'";
 				} 
		if ($obj->getTipo_venda()) { 
			 $sql .= " AND tipo_venda = '".$obj->getTipo_venda()."'";
 				} 
		if ($obj->getEstoque_ini()) { 
			 $sql .= " AND estoque_ini = '".$obj->getEstoque_ini()."'";
 				} 
		if ($obj->getEstoque_entrada()) { 
			 $sql .= " AND estoque_entrada = '".$obj->getEstoque_entrada()."'";
 				} 
		if ($obj->getEstoque_saida()) { 
			 $sql .= " AND estoque_saida = '".$obj->getEstoque_saida()."'";
 				} 
		if ($obj->getEstoque_atual()) { 
			 $sql .= " AND estoque_atual = '".$obj->getEstoque_atual()."'";
 				} 
		if ($obj->getData_cadastro()) { 
			 $sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
 				} 
		if ($obj->getObservacao()) { 
			 $sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
 				} 
		if ($obj->getAlterado()) { 
			 $sql .= " AND alterado = '".$obj->getAlterado()."'";
 				} 
		if ($obj->getPreco_base()) { 
			 $sql .= " AND preco_base = '".$obj->getPreco_base()."'";
 				} 
		if ($obj->getFoto_produto1()) { 
			 $sql .= " AND foto_produto1 = '".$obj->getFoto_produto1()."'";
 				} 
		if ($obj->getFoto_produto2()) { 
			 $sql .= " AND foto_produto2 = '".$obj->getFoto_produto2()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cadpro(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setCodpro(mysql_result($rs, $i, 'codpro')); 
			 $obj->setRefer_produto(mysql_result($rs, $i, 'refer_produto')); 
			 $obj->setCodigo_barras(mysql_result($rs, $i, 'codigo_barras')); 
			 $obj->setNome_produto(mysql_result($rs, $i, 'nome_produto')); 
			 $obj->setCod_fornecedor(mysql_result($rs, $i, 'cod_fornecedor')); 
			 $obj->setCod_tippro(mysql_result($rs, $i, 'cod_tippro')); 
			 $obj->setCod_categoria(mysql_result($rs, $i, 'cod_categoria')); 
			 $obj->setCod_linha(mysql_result($rs, $i, 'cod_linha')); 
			 $obj->setConteudo(mysql_result($rs, $i, 'conteudo')); 
			 $obj->setTipo_uso(mysql_result($rs, $i, 'tipo_uso')); 
			 $obj->setCaracteristica(mysql_result($rs, $i, 'caracteristica')); 
			 $obj->setCfop(mysql_result($rs, $i, 'cfop')); 
			 $obj->setVlr_compra(mysql_result($rs, $i, 'vlr_compra')); 
			 $obj->setVlr_venda(mysql_result($rs, $i, 'vlr_venda')); 
			 $obj->setMargem(mysql_result($rs, $i, 'margem')); 
			 $obj->setPerc_descto(mysql_result($rs, $i, 'perc_descto')); 
			 $obj->setVlr_descto(mysql_result($rs, $i, 'vlr_descto')); 
			 $obj->setTp_tributacao(mysql_result($rs, $i, 'tp_tributacao')); 
			 $obj->setIcms(mysql_result($rs, $i, 'icms')); 
			 $obj->setIpi(mysql_result($rs, $i, 'ipi')); 
			 $obj->setPis(mysql_result($rs, $i, 'pis')); 
			 $obj->setCofins(mysql_result($rs, $i, 'cofins')); 
			 $obj->setTipo_venda(mysql_result($rs, $i, 'tipo_venda')); 
			 $obj->setEstoque_ini(mysql_result($rs, $i, 'estoque_ini')); 
			 $obj->setEstoque_entrada(mysql_result($rs, $i, 'estoque_entrada')); 
			 $obj->setEstoque_saida(mysql_result($rs, $i, 'estoque_saida')); 
			 $obj->setEstoque_atual(mysql_result($rs, $i, 'estoque_atual')); 
			 $obj->setData_cadastro(mysql_result($rs, $i, 'data_cadastro')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $obj->setAlterado(mysql_result($rs, $i, 'alterado')); 
			 $obj->setPreco_base(mysql_result($rs, $i, 'preco_base')); 
			 $obj->setFoto_produto1(mysql_result($rs, $i, 'foto_produto1')); 
			 $obj->setFoto_produto2(mysql_result($rs, $i, 'foto_produto2')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
