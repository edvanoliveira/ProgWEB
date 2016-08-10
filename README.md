# Como Utilizar?

Crie o banco de dados "test" e importe os seguintes dados:

CREATE TABLE `exercicio2` (
`nome` varchar(45) NOT NULL,
`sexo` varchar(10) NOT NULL,
`comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
`usuario` varchar(6) NOT NULL,
`senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`usuario`, `senha`) VALUES
('demo', 'demo');
