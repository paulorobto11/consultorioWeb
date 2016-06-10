-- ---------------------------------------------------------------------------
-- Arquivo que contém os scripts das alterações realizadas no banco de dados
-- ---------------------------------------------------------------------------

-- Exemplo
-- @Jonathan 2016-01-26
-- ALTER TABLE `tabela_x` ADD COLUMN `nova_coluna` VARCHAR(45) NOT NULL AFTER `coluna_y`;

-- -------------------------------------------------------------------------------------------------------------
-- Jonathan Fernando 2016-01-31
-- FK empresa na tabela cargo
-- Tabela: cargo
-- -------------------------------------------------------------------------------------------------------------

ALTER TABLE `gercpn_dev`.`cargo` 
ADD COLUMN `empresa_id` INT(11) NOT NULL AFTER `ativo`,
ADD INDEX `idx_cargo_empresa` (`empresa_id` ASC);
ALTER TABLE `gercpn_dev`.`cargo` 
ADD CONSTRAINT `fk_cargo_empresa`
  FOREIGN KEY (`empresa_id`)
  REFERENCES `gercpn_dev`.`empresa` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
 

-- -------------------------------------------------------------------------------------------------------------
-- Paulo Santos 2016-01-27
-- Criação de Tabela de Notas Fiscais --
-- Tabelas: NotaFiscal e DetNotaFiscal
-- -------------------------------------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `notafiscal` (
  `codemp` int(11) NOT NULL,
  `id_nota` int(6) NOT NULL,
  `data_nota` date NOT NULL,
  `id_fornecedor` int(3) NOT NULL,
  `id_custo` int(3) NOT NULL,
  `nro_nota` int(11) DEFAULT NULL,
  `serie_nota` varchar(10) DEFAULT NULL,
  `modelo` int(2) DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `cfop` int(2) DEFAULT NULL,
  `qtde_lctos` int(3) DEFAULT NULL,
  `base_icms` decimal(14,2) DEFAULT NULL,
  `valor_icms` decimal(14,2) DEFAULT NULL,
  `base_substit` decimal(14,2) DEFAULT NULL,
  `valor_substit` decimal(14,2) DEFAULT NULL,
  `valor_frete` decimal(14,2) DEFAULT NULL,
  `valor_seguro` decimal(14,2) DEFAULT NULL,
  `valor_despesas` decimal(14,2) DEFAULT NULL,
  `valor_outros` decimal(14,2) DEFAULT NULL,
  `valor_ipi` decimal(14,2) DEFAULT NULL,
  `valor_bruto` decimal(14,2) DEFAULT NULL,
  `valor_descto` decimal(14,2) DEFAULT NULL,
  `valor_nota` decimal(14,2) DEFAULT NULL,
  `tipo_pgto` int(1) DEFAULT NULL,
  `qtde_parcela` int(11) NOT NULL,
  `local_pagamento` int(3) DEFAULT NULL,
  `id_conta` int(11) DEFAULT NULL,
  `id_boleto` varchar(20) DEFAULT NULL,
  `chave_danfe` varchar(50) DEFAULT NULL,
  `xml_nota` varchar(255) DEFAULT NULL,
  `dados_complementares` varchar(255) DEFAULT NULL,
  `situacao` int(1) NOT NULL,
  PRIMARY KEY (`codemp`,`id_nota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `detnotafiscal` (
  `codemp` int(11) NOT NULL,
  `id_nota` int(6) NOT NULL,
  `seq_lcto` int(3) NOT NULL,
  `id_produto` int(6) DEFAULT NULL,
  `vlr_unit` decimal(14,2) DEFAULT NULL,
  `qtde_lcto` int(6) DEFAULT NULL,
  `vlr_bruto` decimal(14,2) DEFAULT NULL,
  `tpdesc` int(1) DEFAULT NULL,
  `vlr_desc` decimal(14,2) DEFAULT NULL,
  `vlr_total` decimal(14,2) DEFAULT NULL,
  `dif_base` decimal(14,2) DEFAULT NULL,
  `vlr_icms` decimal(6,2) DEFAULT NULL,
  `vlr_ipi` decimal(6,2) DEFAULT NULL,
  `vlr_subst` decimal(6,2) DEFAULT NULL,
  `cfop` int(4) DEFAULT NULL,
  `estoque` int(1) DEFAULT NULL,
  `etiquetas` int(1) DEFAULT NULL,
  `atualiza` int(1) DEFAULT NULL,
  `classific` bigint(15) DEFAULT NULL,
  `cst` int(3) DEFAULT NULL,
  `csosn` int(3) DEFAULT NULL,
  `garantia` int(3) DEFAULT NULL,
  PRIMARY KEY (`codemp`,`id_nota`,`seq_lcto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
<<<<<<< HEAD


-- Paulo Santos 2016-02-10
-- Criação e Alterações de Tabelas  --

Da tabela antiga                                                                Para Tabela Nova

CREATE TABLE  `gercpn_dev`.`detnotafiscal` (                                    CREATE TABLE IF NOT EXISTS `detnotafiscal` ( 
  `codemp` int(11) NOT NULL,													  `codemp` int(11) NOT NULL,                 
  `id_nota` int(6) NOT NULL,													  `id_nota` int(6) NOT NULL,                 
  `seq_lcto` int(3) NOT NULL,													  `seq_lcto` int(3) NOT NULL,                
  `id_produto` int(6) DEFAULT NULL,												  `id_produto` varchar(20) DEFAULT NULL,     
  `vlr_unit` decimal(14,2) DEFAULT NULL,										  `unid` varchar(10) DEFAULT NULL,           
  `qtde_lcto` int(6) DEFAULT NULL,												  `vlr_unit` decimal(14,4) DEFAULT NULL,     
  `vlr_bruto` decimal(14,2) DEFAULT NULL,										  `qtde_lcto` decimal(14,4) DEFAULT NULL,    
  `tpdesc` int(1) DEFAULT NULL,													  `vlr_bruto` decimal(14,2) DEFAULT NULL,    
  `vlr_desc` decimal(14,2) DEFAULT NULL,										  `tpdesc` int(1) DEFAULT NULL,              
  `vlr_total` decimal(14,2) DEFAULT NULL,										  `vlr_desc` decimal(14,2) DEFAULT NULL,     
  `dif_base` decimal(14,2) DEFAULT NULL,										  `vlr_total` decimal(14,2) DEFAULT NULL,    
  `vlr_icms` decimal(6,2) DEFAULT NULL,											  `dif_base` decimal(14,2) DEFAULT NULL,     
  `vlr_ipi` decimal(6,2) DEFAULT NULL,											  `vlr_icms` decimal(6,2) DEFAULT NULL,      
  `vlr_subst` decimal(6,2) DEFAULT NULL,										  `vlr_ipi` decimal(6,2) DEFAULT NULL,       
  `cfop` int(4) DEFAULT NULL,													  `vlr_subst` decimal(6,2) DEFAULT NULL,     
  `estoque` int(1) DEFAULT NULL,												  `cfop` int(4) DEFAULT NULL,                
  `etiquetas` int(1) DEFAULT NULL,												  `estoque` int(1) DEFAULT NULL,             
  `atualiza` int(1) DEFAULT NULL,												  `etiquetas` int(1) DEFAULT NULL,           
  `classific` bigint(15) DEFAULT NULL,											  `atualiza` int(1) DEFAULT NULL,            
  `cst` int(3) DEFAULT NULL,													  `classific` bigint(15) DEFAULT NULL,       
  `csosn` int(3) DEFAULT NULL,													  `cst` int(3) DEFAULT NULL,                 
  `garantia` int(3) DEFAULT NULL,												  `csosn` int(3) DEFAULT NULL,               
  PRIMARY KEY (`codemp`,`id_nota`,`seq_lcto`)									  `garantia` int(3) DEFAULT NULL,            
) ENGINE=MyISAM DEFAULT CHARSET=latin1;											  `inf_adicional` varchar(255) DEFAULT NULL, 
																				  PRIMARY KEY (`codemp`,`id_nota`,`seq_lcto`)
																				) ENGINE=MyISAM DEFAULT CHARSET=latin1;


Da tabela antiga                                                                Para Tabela Nova

CREATE TABLE  `gercpn_dev`.`movimento_bancario` (                               CREATE TABLE IF NOT EXISTS `movimento_bancario` (
  `codemp` int(11) NOT NULL,                                                      `codemp` int(11) NOT NULL,                     
  `seq_movto` int(5) NOT NULL,                                                    `seq_movto` int(5) NOT NULL,                   
  `data_movimento` datetime NOT NULL,                                             `data_movimento` datetime NOT NULL,            
  `id_conta` int(11) DEFAULT NULL,                                                `id_conta` int(11) DEFAULT NULL,               
  `id_histbco` int(3) DEFAULT NULL,                                               `id_histbco` int(3) DEFAULT NULL,              
  `id_custo` int(11) DEFAULT NULL,                                                `id_custo` int(11) DEFAULT NULL,               
  `id_conta_despesa` int(11) DEFAULT NULL,                                        `id_conta_despesa` int(11) DEFAULT NULL,       
  `id_boleto` int(11) NOT NULL,                                                   `id_boleto` int(11) NOT NULL,                  
  `hist_complem` varchar(250) DEFAULT NULL,                                       `hist_complem` varchar(250) DEFAULT NULL,      
  `tipo_movimento` int(1) DEFAULT NULL,                                           `tipo_movimento` int(1) DEFAULT NULL,          
  `valor_movimento` decimal(11,2) DEFAULT NULL,                                   `valor_movimento` decimal(11,2) DEFAULT NULL,  
  `valor_cpmf` decimal(10,2) DEFAULT NULL,                                        `valor_cpmf` decimal(10,2) DEFAULT NULL,       
  `valor_debito` decimal(10,2) DEFAULT NULL,                                      `valor_debito` decimal(10,2) DEFAULT NULL,     
  `valor_credito` decimal(10,2) DEFAULT NULL,                                     `valor_credito` decimal(10,2) DEFAULT NULL,    
  `nr_documento` varchar(10) DEFAULT NULL,                                        `nr_documento` varchar(10) DEFAULT NULL,       
  `data_documento` datetime DEFAULT NULL,                                         `data_documento` datetime DEFAULT NULL,        
  `tipo_documento` int(1) DEFAULT NULL,                                           `tipo_documento` int(1) DEFAULT NULL,          
  `id_documento` int(11) DEFAULT NULL,                                            `id_documento` int(11) DEFAULT NULL,           
  `movcxa` int(1) DEFAULT NULL,                                                   `movcxa` int(1) DEFAULT NULL,                  
  `id_histcxa` int(3) DEFAULT NULL,                                               `id_histcxa` int(3) DEFAULT NULL,              
  `conciliado` int(1) DEFAULT NULL,                                               `movbco` int(1) DEFAULT NULL,                  
  `dtconc` datetime DEFAULT NULL,                                                 `id_contabco` int(11) DEFAULT NULL,            
  `favorecido` varchar(50) DEFAULT NULL,                                          `id_histmovbco` int(3) DEFAULT NULL,           
  `nr_cheque` varchar(7) DEFAULT NULL,                                            `conciliado` int(1) DEFAULT NULL,              
  `id_usuario` int(6) DEFAULT NULL,                                               `dtconc` datetime DEFAULT NULL,                
  PRIMARY KEY (`codemp`,`seq_movto`)                                              `favorecido` varchar(50) DEFAULT NULL,         
) ENGINE=InnoDB DEFAULT CHARSET=utf8;                                             `nr_cheque` varchar(7) DEFAULT NULL,           
                                                                                  `id_usuario` int(6) DEFAULT NULL,              
                                                                                  PRIMARY KEY (`codemp`,`seq_movto`)             
                                                                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                                                                                
                                                                                
Da tabela antiga                                                                Para Tabela Nova

                                                                                
CREATE TABLE  `gercpn_dev`.`conta_receber` (                                    CREATE TABLE IF NOT EXISTS `conta_receber` (        
  `id` int(11) NOT NULL AUTO_INCREMENT,                                           `codemp` int(11) NOT NULL,                        
  `documento` varchar(10) CHARACTER SET latin1 NOT NULL,                          `id_fatura` int(11) NOT NULL,                     
  `data_emissao` date NOT NULL,                                                   `id_cliente` int(11) NOT NULL,                    
  `cliente_id` int(11) NOT NULL,                                                  `data_emissao` date NOT NULL,                     
  `forma_pagamento` varchar(3) CHARACTER SET latin1 NOT NULL,                     `nr_pedido` int(11) DEFAULT NULL,                 
  `nota_fiscal_origem` varchar(9) CHARACTER SET latin1 DEFAULT NULL,              `nr_documento` varchar(20) DEFAULT NULL,          
  `centro_custo_id` int(11) NOT NULL,                                             `nr_nfs` varchar(9) DEFAULT NULL,                 
  `data_vencimento` date NOT NULL,                                                `nr_bordero` varchar(8) DEFAULT NULL,             
  `valor_divida` decimal(11,2) NOT NULL,                                          `forma_pagamento` int(3) DEFAULT NULL,            
  `local_pagamento` tinyint(1) NOT NULL,                                          `id_custo` int(11) NOT NULL,                      
  `banco_movimentado_id` int(11) DEFAULT NULL,                                    `id_conta_despesa` int(11) NOT NULL,              
  `numero_pedido` varchar(6) CHARACTER SET latin1 DEFAULT NULL,                   `data_vencto` date NOT NULL,                      
  `dados_complementares` text CHARACTER SET latin1,                               `valor_fatura` decimal(14,2) NOT NULL,            
  `data_pagamento` date DEFAULT NULL,                                             `qtde_parcela` int(11) NOT NULL,                  
  `valor_total_pago` decimal(11,2) DEFAULT NULL,                                  `local_pagamento` int(3) DEFAULT NULL,            
  `valor_ultimo_pagamento` decimal(11,2) DEFAULT NULL,                            `id_conta` int(11) DEFAULT NULL,                  
  `juros_recebidos` decimal(11,2) DEFAULT NULL,                                   `id_boleto` varchar(20) DEFAULT NULL,             
  `desconto_concedido` decimal(11,2) DEFAULT NULL,                                `id_adm_cartao` int(11) DEFAULT NULL,             
  `situacao_baixa` varchar(22) CHARACTER SET latin1 DEFAULT NULL,                 `data_antecipado` date DEFAULT NULL,              
  `situacao_divida` varchar(9) CHARACTER SET latin1 DEFAULT NULL,                 `descto_antecipado` decimal(10,2) DEFAULT NULL,   
  `saldo_pagar` decimal(11,2) DEFAULT NULL,                                       `data_pagamento` date DEFAULT NULL,               
  `bordero` varchar(8) CHARACTER SET latin1 DEFAULT NULL,                         `dados_complementares` varchar(255) DEFAULT NULL, 
  `boleto` varchar(20) CHARACTER SET latin1 DEFAULT NULL,                         `situacao_baixa` varchar(22) DEFAULT NULL,        
  `codigo_barras` varchar(100) CHARACTER SET latin1 DEFAULT NULL,                                                                   
  `linha_digitavel` varchar(100) CHARACTER SET latin1 DEFAULT NULL,                                                                 
  `agencia_cedente` varchar(30) CHARACTER SET latin1 DEFAULT NULL,                                                                  
  `data_remessa` date DEFAULT NULL,                                                                                                 
  `situacao_remessa` tinyint(1) DEFAULT NULL,                                                                                       
  `p1a_instrucao` varchar(2) CHARACTER SET latin1 DEFAULT NULL,                                                                     
  `p2a_instrucao` varchar(2) CHARACTER SET latin1 DEFAULT NULL,                                                                     
  `carteira` varchar(3) CHARACTER SET latin1 DEFAULT NULL,                                                                          
  `codigo_remessa` varchar(2) CHARACTER SET latin1 DEFAULT NULL,                                                                    
  `parcela` tinyint(3) DEFAULT NULL,                                                                                                
  `serie` varchar(3) CHARACTER SET latin1 DEFAULT NULL,                                                                             
  `comissao_vendedor` decimal(10,2) DEFAULT NULL,                                                                                   
  `especie_cobranca` varchar(2) CHARACTER SET latin1 DEFAULT NULL,                                                                  
  `controle_exp_txt` tinyint(1) DEFAULT NULL,                                                                                       
  `deconto_pgto_antecipado` decimal(10,2) DEFAULT NULL,                                                                             
  `pagamento_ate` date DEFAULT NULL,                                                                                                
  `conta_despesa_id` int(11) DEFAULT NULL,                                                                                          
  `periodo_prev` varchar(7) CHARACTER SET latin1 DEFAULT NULL,                                                                      
  `administradora_cartao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_conta_receber_cliente` (`cliente_id`),
  KEY `idx_conta_receber_centro_custo` (`centro_custo_id`),
  KEY `idx_conta_receber_administradora_cartao` (`administradora_cartao_id`),
  KEY `idx_conta_receber_conta_despesa` (`conta_despesa_id`),
  CONSTRAINT `fk_conta_receber_administradora_cartao` FOREIGN KEY (`administradora_cartao_id`) REFERENCES `administradora_cartao_credito` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_receber_centro_custo` FOREIGN KEY (`centro_custo_id`) REFERENCES `centro_custo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_receber_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_receber_conta_despesa` FOREIGN KEY (`conta_despesa_id`) REFERENCES `conta_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  
Da tabela antiga                                                                Para Tabela Nova  
 CREATE TABLE  `gercpn_dev`.`conta_pagar` (                                      CREATE TABLE IF NOT EXISTS `conta_pagar` (         
  `id` int(11) NOT NULL AUTO_INCREMENT,											  `codemp` int(11) NOT NULL,                       
  `documento` varchar(10) CHARACTER SET latin1 NOT NULL,						  `id_fatura` int(11) NOT NULL,                    
  `fornecedor_id` int(11) NOT NULL,												  `id_fornecedor` int(11) NOT NULL,                
  `data_emissao` date NOT NULL,													  `data_emissao` date NOT NULL,                    
  `nota_fiscal` varchar(9) CHARACTER SET latin1 DEFAULT NULL,					  `nr_nota` int(11) DEFAULT NULL,                  
  `valor_divida` decimal(11,2) NOT NULL,										  `nr_documento` varchar(20) DEFAULT NULL,         
  `centro_custo_id` int(11) NOT NULL,											  `forma_pagamento` int(3) NOT NULL,               
  `data_pagamento` date DEFAULT NULL,											  `id_custo` int(11) NOT NULL,                     
  `valor_pago_acumulado` decimal(11,2) DEFAULT NULL,							  `id_conta_despesa` int(11) NOT NULL,             
  `valor_ultimo_pagamento` decimal(11,2) DEFAULT NULL,							  `data_vencto` date NOT NULL,                     
  `condicao_baixa` varchar(23) CHARACTER SET latin1 DEFAULT NULL,				  `valor_fatura` decimal(14,2) NOT NULL,           
  `saldo_pagar` decimal(11,2) DEFAULT NULL,										  `qtde_parcela` int(11) NOT NULL,                 
  `dados_complementares` text CHARACTER SET latin1,								  `local_pagamento` int(3) NOT NULL,               
  `conta_despesa_id` int(11) NOT NULL,											  `id_conta` int(11) DEFAULT NULL,                 
  `numero_cp` varchar(8) CHARACTER SET latin1 NOT NULL,							  `id_boleto` varchar(20) DEFAULT NULL,            
  `especie_documento` varchar(10) CHARACTER SET latin1 NOT NULL,				  `id_adm_cartao` int(11) DEFAULT NULL,            
  `periodo_prev` varchar(7) CHARACTER SET latin1 DEFAULT NULL,					  `data_antecipado` date DEFAULT NULL,             
  `data_cadastro` datetime NOT NULL,											  `descto_antecipado` decimal(10,2) DEFAULT NULL,  
  `usuario_cadastro` int(11) NOT NULL,											  `data_pagamento` date DEFAULT NULL,              
																				  `dados_complementares` varchar(255) DEFAULT NULL,
																				  `situacao_baixa` varchar(22) DEFAULT NUL                                                                                                                                                                               
 
   PRIMARY KEY (`id`),
  KEY `idx_conta_pagar_fornecedor` (`fornecedor_id`),
  KEY `idx_conta_pagar_centro_custo` (`centro_custo_id`),
  KEY `idx_conta_pagar_conta_despesa` (`conta_despesa_id`),
  CONSTRAINT `fk_conta_pagar_centro_custo` FOREIGN KEY (`centro_custo_id`) REFERENCES `centro_custo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_pagar_conta_despesa` FOREIGN KEY (`conta_despesa_id`) REFERENCES `conta_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_pagar_fornecedor` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



Da tabela antiga                                                                Para Tabela Nova
CREATE TABLE  `gercpn_dev`.`centro_custo` (                                     CREATE TABLE IF NOT EXISTS `centro_custo` (
  `id` int(11) NOT NULL COMMENT 'PK auto incremento\n',                           `codemp` int(11) NOT NULL,               
  `descricao` varchar(45) NOT NULL COMMENT 'Nome do centro de custo',             `id` int(11) NOT NULL AUTO_INCREMENT,    
  `ativo` int(11) NOT NULL DEFAULT '1' COMMENT 'Flag ativo (1) inativo (0)',      `descricao` varchar(45) NOT NULL,        
  `empresa_id` int(11) NOT NULL COMMENT 'Empresa relacionada ao registro.         `situacao` int(1) DEFAULT NULL,          
  PRIMARY KEY (`id`),                                                             PRIMARY KEY (`id`)                       
                                                                                ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;   
                                                                                

Da tabela antiga                                                                Para Tabela Nova
CREATE TABLE  `gercpn_dev`.`conta_despesa` (                                    CREATE TABLE IF NOT EXISTS `conta_despesa` (                                                                                           
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK auto incremento',              `codemp` int(11) NOT NULL,                                                                      
  `nome_conta` varchar(45) NOT NULL COMMENT 'Nome da conta',                      `id` int(11) NOT NULL,                                                                          
  `ativo` tinyint(4) NOT NULL COMMENT 'Flag ativo (1) inativo (0)',               `nome_conta` varchar(45) NOT NULL,                                                              
  `empresa_id` int(11) NOT NULL COMMENT 'Empresa relacionada ao registro. 		  `situacao` int(1) DEFAULT NULL,
             
  PRIMARY KEY (`id`),                                                                                                                 
  KEY `idx_conta_despesa_empresa` (`empresa_id`),                                                                                     
  CONSTRAINT `fk_conta_despesa_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


Da tabela antiga                                                                Para Tabela Nova

CREATE TABLE  `gercpn_dev`.`contador` (                                         CREATE TABLE IF NOT EXISTS `contador` (             
  `codemp` int(11) NOT NULL,                                                      `codemp` int(11) NOT NULL,                        
  `id_contador` int(10) NOT NULL,                                                 `id_contador` int(10) NOT NULL,                   
  `nome_contador` varchar(255) NOT NULL,                                          `nome_contador` varchar(255) NOT NULL,            
  `cpf_contador` bigint(11) DEFAULT NULL,                                         `tipo` int(1) DEFAULT NULL,                       
  `crc_contador` bigint(15) DEFAULT NULL,                                         `cpf_contador` bigint(11) DEFAULT NULL,           
  `cnpj` bigint(14) DEFAULT NULL,                                                 `crc_contador` varchar(20) DEFAULT NULL,          
  `logradouro` varchar(255) DEFAULT NULL,                                         `cnpj` bigint(14) DEFAULT NULL,                   
  `nroend` varchar(10) DEFAULT NULL,                                              `logradouro` varchar(255) DEFAULT NULL,           
  `complemento` varchar(60) DEFAULT NULL,                                         `nroend` varchar(10) DEFAULT NULL,                
  `bairro` varchar(60) DEFAULT NULL,                                              `complemento` varchar(60) DEFAULT NULL,           
  `cep` int(8) DEFAULT NULL,                                                      `bairro` varchar(60) DEFAULT NULL,                
  `id_cidade` int(11) DEFAULT NULL,                                               `cep` int(8) DEFAULT NULL,                        
  `id_estado` int(11) DEFAULT NULL,                                               `id_cidade` int(11) DEFAULT NULL,                 
  `fone` varchar(11) DEFAULT NULL,                                                `cidade` varchar(255) DEFAULT NULL,               
  `email` varchar(255) DEFAULT NULL,                                              `id_estado` int(11) DEFAULT NULL,                 
  PRIMARY KEY (`codemp`,`id_contador`)                                            `estado` varchar(2) DEFAULT NULL,                 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;                                             `fone` varchar(11) DEFAULT NULL,                  
                                                                                  `email` varchar(255) DEFAULT NULL,                
                                                                                  PRIMARY KEY (`codemp`,`id_contador`)              
                                                                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;               
                                                                                                                                                                
- Tabelas Novas.

CREATE TABLE IF NOT EXISTS `nfservicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nr_nfs` int(11) NOT NULL,
  `sr_nfs` int(11) NOT NULL,
  `data_nfs` datetime NOT NULL,
  `id_registro` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `servico` varchar(5) DEFAULT NULL,
  `discriminacao` varchar(1500) NOT NULL,
  `data_vencto` datetime DEFAULT NULL,
  `valor_servico` decimal(11,2) DEFAULT NULL,
  `valor_desconto` decimal(11,2) DEFAULT NULL,
  `valor_nota` decimal(11,2) DEFAULT NULL,
  `vlr_iss` decimal(11,2) DEFAULT NULL,
  `vlr_deducoes` decimal(11,2) DEFAULT NULL,
  `vlr_ir` decimal(11,2) DEFAULT NULL,
  `vlr_pis` decimal(11,2) DEFAULT NULL,
  `vlr_cofins` decimal(11,2) DEFAULT NULL,
  `vlr_csll` decimal(11,2) DEFAULT NULL,
  `vlr_liquido` decimal(11,2) DEFAULT NULL,
  `xml_nota` varchar(100) DEFAULT NULL,
  `usuario` varchar(12) DEFAULT NULL,
  `data_pagto` datetime DEFAULT NULL,
  `vlr_juros` decimal(11,2) DEFAULT NULL,
  `vlr_pago` decimal(11,2) DEFAULT NULL,
  `situacao` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;


CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codserv` int(4) NOT NULL,
  `atividade` varchar(20) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  `vlr_iss` decimal(6,2) DEFAULT NULL,
  `situacao` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `faturas_pagar` (
  `codemp` int(11) NOT NULL,
  `seq_id` int(11) NOT NULL,
  `id_fatura` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `id_conta` int(11) DEFAULT NULL,
  `id_remessa` int(11) DEFAULT NULL,
  `tipo_fatura` int(1) DEFAULT NULL,
  `valor_fatura` decimal(14,2) DEFAULT NULL,
  `data_vencimento` date NOT NULL,
  `nr_parcela` int(3) NOT NULL,
  `valor_parcela` decimal(14,2) DEFAULT NULL,
  `valor_juros` decimal(11,2) DEFAULT NULL,
  `valor_desconto` decimal(11,2) DEFAULT NULL,
  `valor_pago` decimal(14,2) DEFAULT NULL,
  `data_pagamento` date DEFAULT NULL,
  `situacao` int(1) DEFAULT NULL,
  PRIMARY KEY (`codemp`,`seq_id`,`id_fatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




-- ALTERAÇÕES NO BANCO DE DADOS.
15/02/2016 - PAULO SANTOS.

-- Alteração na tabela de empresa_config.
-- Dados necessarios para nota fiscal eletronica.

ALTER TABLE  `empresa_config`
ADD  `codcnae` INT( 7 )  NULL AFTER  `crt` ,
ADD  `cUF` INT( 2 ) NOT NULL AFTER  `ambiente_nfe` ,
ADD  `cMunFG` INT( 7 ) NOT NULL AFTER  `cUF` ,
ADD  `verProc` VARCHAR( 10 ) NOT NULL AFTER  `cMunFG` ,
ADD  `versaoNfe` VARCHAR( 10 ) NOT NULL AFTER  `verProc`

