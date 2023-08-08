CREATE DATABASE exercicios_MsCode;

use exercicios_MsCode;

CREATE table produtos (
id INT AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(50),
	pagamento DATETIME,
    valor DECIMAL(10, 2)
    );
    
    
INSERT INTO produtos (titulo, pagamento, valor)
VALUES ('canetas', '2019-07-05', 180),
	   ('notebook', '2019-07-01', 1200),
       ('macbook', '2019-07-02', 2100),
       ('microfone', '2019-07-05', 90),
       ('matricula aluna', '2019-07-09', 900),
       ('gasolina reembolso diretor', '2019-06-10', 200);
       
SELECT * FROM produtos;