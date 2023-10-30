CREATE TABLE medico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    especialidade VARCHAR(255) NOT NULL,
    contato VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    endereco VARCHAR(255), -- Tamanho ajustável conforme necessário
    cidade VARCHAR(100) NOT NULL,
    estado CHAR(2) NOT NULL,
    pais VARCHAR(50) NOT NULL
);
