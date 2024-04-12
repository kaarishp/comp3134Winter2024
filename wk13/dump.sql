CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255),
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    active TINYINT(1)
);

INSERT INTO users (username, email, firstname, lastname, active) VALUES
('kaarish', 'k.siva@example.com', 'kaarish', 'parameswaran', 1),
('ben', 'ben@example.com', 'prof', 'ben', 1),