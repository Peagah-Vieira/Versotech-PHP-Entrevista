CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    color_id FOREIGN KEY (color_id) REFERENCES colors (id)
);