CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeUser VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    senhaSegura VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dataNascimento DATE,
    sexo VARCHAR(10),
    cep VARCHAR(10),
    endereco VARCHAR(255),
    medicamento ENUM('sim', 'nao'),
    qualMedicamento VARCHAR(255),
    tipoSanguineo VARCHAR(5),
    plano VARCHAR(50),
    fotoUser VARCHAR(255),
    fotoDoc VARCHAR(255)
);