
USE mdc_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (email, password_hash) VALUES ('kien.trankien@mdc.edu.vn', '12345');
INSERT INTO users (email, password_hash) VALUES ('tran.trankien@mdc.edu.vn', '54321');
INSERT INTO users (email, password_hash) VALUES ('trung.trankien@mdc.edu.vn', 'kien');
INSERT INTO users (email, password_hash) VALUES ('Kien24@mdc.edu.vn', 'tran');
INSERT INTO users (email, password_hash) VALUES ('kien49@mdc.edu.vn', 'trung');