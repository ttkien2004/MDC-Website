
USE mdc_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (email, password_hash) VALUES ('kien.trankien@mdc.edu.vn', '$2y$10$w3LaL49TpBgGN6Vlb3QIru5pAKyLnLmR9m0H9qZY6En2amvA1FoTG');
INSERT INTO users (email, password_hash) VALUES ('admin', '$2y$10$RF5tGh03ZpOyUNHenRrsReu4mbVkGh4EDctfAdrC5gQIM8P.Mg40O');