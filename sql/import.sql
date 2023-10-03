-- Use the database
USE haarlem_zoo;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL
);

-- Insert sample data into the users table
INSERT INTO users (email, password, firstname, lastname)
VALUES
    ('email1@example.com', 'hashed_password_1', 'John', 'Doe'),
    ('email2@example.com', 'hashed_password_2', 'Jane', 'Smith');


-- Create the confirmation_keys table
CREATE TABLE confirmation_keys (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    confirmation_key VARCHAR(255) NOT NULL,
    is_confirmed BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- Insert sample data into the confirmation_keys table
INSERT INTO confirmation_keys (user_id, confirmation_key)
VALUES
    (1, 'foTvHbuI6ku0m9CgIFXJ',1),
    (2, 'R5hpVOGRgf10AUqHaA2Z',0);
