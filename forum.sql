CREATE DATABASE forum;

CREATE TABLE author (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthdate DATE,
    CONSTRAINT username_unique UNIQUE (username)
);

CREATE TABLE article(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(45) NOT NULL,
    text TEXT(1000) NOT NULL,
    id_author INT NOT NULL,
    CONSTRAINT fk_id_author FOREIGN KEY (id_author) REFERENCES
     author(id)
);

INSERT INTO author
VALUES (null, 'Milona Viccy', 'milo48@outlook.com', '1234', '2008-12-23'), (null, 'Jocelyn Brisson', 'jojo25@gmail.com', '1234', '1993-06-15'), (null, 'Marilou Binette', 'loulou27@gmail.com', '1234', '2003-01-19');

Insert Into article
VALUES (null, 'Bonjour la vie', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ut pariatur deserunt quam in nesciunt quasi iusto, eligendi laudantium. Unde, animi. In delectus error tenetur!', 3),(null, "C\'était le bon temps", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ut pariatur deserunt quam in nesciunt quasi iusto, eligendi laudantium. Unde, animi. In delectus error tenetur!', 1), (null, 'Mademoiselle Météo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ut pariatur deserunt quam in nesciunt quasi iusto, eligendi laudantium. Unde, animi. In delectus error tenetur!', 2), (null, 'Mon opinion à matin', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ut pariatur deserunt quam in nesciunt quasi iusto, eligendi laudantium. Unde, animi. In delectus error tenetur!', 3);


