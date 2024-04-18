-- Copiando estrutura do banco de dados para SCSFM
CREATE DATABASE IF NOT EXISTS `SCSFM`;
USE `SCSFM`;

-- Copiando estrutura para tabela SCSFM.Departamentos
CREATE TABLE IF NOT EXISTS `Departamentos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela SCSFM.ItensPedido
CREATE TABLE IF NOT EXISTS `ItensPedido` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_Pedido` int NOT NULL,
  `ID_Produto` int NOT NULL,
  `Quantidade` int NOT NULL,
  `Preco_Unitario` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela SCSFM.Pedido
CREATE TABLE IF NOT EXISTS `Pedido` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Data_Criacao` date NOT NULL,
  `Data_Vencimento` date NOT NULL,
  `Vlr_Total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ID_Usuario_Driacao` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela SCSFM.Produtos
CREATE TABLE IF NOT EXISTS `Produtos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(150) NOT NULL DEFAULT '',
  `Preco` decimal(10,2) NOT NULL,
  `Unidade` varchar(4) NOT NULL,
  `Quantidade_Minima` decimal(10,2) NOT NULL,
  `Quantidade_Atual` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- Copiando estrutura para tabela SCSFM.Usuarios
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `ID_Departamentos` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=INNODB;

