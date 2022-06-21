-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2021 às 00:20
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aplicar`
--

CREATE TABLE `aplicar` (
  `usuario_id` int(10) NOT NULL,
  `data_cambio` date NOT NULL,
  `tipo_cambio` varchar(50) NOT NULL,
  `criptoativos_id` int(10) NOT NULL,
  `investimentos_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bloqueado`
--

CREATE TABLE `bloqueado` (
  `duracao` varchar(50) NOT NULL,
  `taxa_juros` varchar(50) NOT NULL,
  `data_reembolso` date NOT NULL,
  `poupanca_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cambio`
--

CREATE TABLE `cambio` (
  `usuario_id` int(10) NOT NULL,
  `criptoativos_id` int(10) NOT NULL,
  `data` date NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ceder`
--

CREATE TABLE `ceder` (
  `usuario_id` int(10) NOT NULL,
  `criptoativos_id` int(11) NOT NULL,
  `data_cambio` date NOT NULL,
  `tipo_cambio` varchar(50) NOT NULL,
  `emprestimo_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conter`
--

CREATE TABLE `conter` (
  `usuario_id` int(10) NOT NULL,
  `data_cambio` date NOT NULL,
  `tipo_cambio` varchar(50) NOT NULL,
  `criptoativos_id` int(10) NOT NULL,
  `poupanca_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `criptoativos`
--

CREATE TABLE `criptoativos` (
  `criptoativos_id` int(10) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `nome_moeda` varchar(100) NOT NULL,
  `simbolo_moeda` varchar(10) NOT NULL,
  `contrato_moeda` varchar(200) NOT NULL,
  `rede_moeda` varchar(100) NOT NULL,
  `preco` varchar(3000) NOT NULL,
  `carteira` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `emprestimo_id` int(10) NOT NULL,
  `quantia` varchar(100) NOT NULL,
  `taxa_de_juros` varchar(50) NOT NULL,
  `endereco_cobranca` varchar(50) NOT NULL,
  `categoria_criptoativos` varchar(50) NOT NULL,
  `categoria_dinheiro` varchar(50) NOT NULL,
  `taxa_adesao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `flexivel`
--

CREATE TABLE `flexivel` (
  `juros_acumulados` varchar(50) NOT NULL,
  `resgate` date NOT NULL,
  `poupanca_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `investimento`
--

CREATE TABLE `investimento` (
  `investimento_id` int(10) NOT NULL,
  `taxa_de_lucro` varchar(100) NOT NULL,
  `quantia` varchar(100) NOT NULL,
  `categoria` char(50) NOT NULL,
  `forma_investimento_criptoativos` varchar(100) NOT NULL,
  `forma_investimento_dinheiro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `pagamentos_id` int(11) NOT NULL,
  `codigo_pagamento` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `nota_fiscal` varchar(100) NOT NULL,
  `tipo_pagamento_pix` varchar(50) NOT NULL,
  `tipo_pagamento_deposito` varchar(50) NOT NULL,
  `tipo_pagamento_boleto` varchar(50) NOT NULL,
  `tipo_pagamento_credito` varchar(50) NOT NULL,
  `tipo_pagamento_debito` varchar(50) NOT NULL,
  `quantia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `poupanca`
--

CREATE TABLE `poupanca` (
  `poupanca_id` int(10) NOT NULL,
  `moeda` varchar(100) DEFAULT NULL,
  `quantia` varchar(100) DEFAULT NULL,
  `apy` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `usuario_id` int(10) NOT NULL,
  `criptoativos_id` int(10) NOT NULL,
  `data_cambio` date NOT NULL,
  `tipo_cambio` varchar(50) NOT NULL,
  `pagamentos_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` char(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `email`, `telefone`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `data_cadastro`) VALUES
(13, 'Pedro', 'd3ce9efea6244baa7bf718f12dd0c331', 'Pedro Dutra', 'pedrodutra@gmail.com', '(11) 94214-1999', '13220240', 'Rua Caetano José de Oliveira', 188, 'Jardim Primavera', 'Várzea Paulista', 'SP', '2021-11-21 17:10:06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aplicar`
--
ALTER TABLE `aplicar`
  ADD PRIMARY KEY (`usuario_id`,`data_cambio`,`tipo_cambio`,`criptoativos_id`,`investimentos_id`);

--
-- Índices para tabela `bloqueado`
--
ALTER TABLE `bloqueado`
  ADD PRIMARY KEY (`poupanca_id`);

--
-- Índices para tabela `cambio`
--
ALTER TABLE `cambio`
  ADD PRIMARY KEY (`criptoativos_id`,`usuario_id`,`data`,`tipo`);

--
-- Índices para tabela `ceder`
--
ALTER TABLE `ceder`
  ADD PRIMARY KEY (`usuario_id`,`criptoativos_id`,`data_cambio`,`tipo_cambio`,`emprestimo_id`);

--
-- Índices para tabela `conter`
--
ALTER TABLE `conter`
  ADD PRIMARY KEY (`usuario_id`,`data_cambio`,`tipo_cambio`,`criptoativos_id`,`poupanca_id`);

--
-- Índices para tabela `criptoativos`
--
ALTER TABLE `criptoativos`
  ADD PRIMARY KEY (`criptoativos_id`),
  ADD KEY `fk_UsuCrip` (`usuario_id`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`emprestimo_id`);

--
-- Índices para tabela `flexivel`
--
ALTER TABLE `flexivel`
  ADD PRIMARY KEY (`poupanca_id`);

--
-- Índices para tabela `investimento`
--
ALTER TABLE `investimento`
  ADD PRIMARY KEY (`investimento_id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`pagamentos_id`);

--
-- Índices para tabela `poupanca`
--
ALTER TABLE `poupanca`
  ADD PRIMARY KEY (`poupanca_id`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`usuario_id`,`criptoativos_id`,`data_cambio`,`tipo_cambio`,`pagamentos_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bloqueado`
--
ALTER TABLE `bloqueado`
  MODIFY `poupanca_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ceder`
--
ALTER TABLE `ceder`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `criptoativos`
--
ALTER TABLE `criptoativos`
  MODIFY `criptoativos_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `emprestimo_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `flexivel`
--
ALTER TABLE `flexivel`
  MODIFY `poupanca_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `investimento`
--
ALTER TABLE `investimento`
  MODIFY `investimento_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `pagamentos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `poupanca`
--
ALTER TABLE `poupanca`
  MODIFY `poupanca_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `criptoativos`
--
ALTER TABLE `criptoativos`
  ADD CONSTRAINT `fk_UsuCrip` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
