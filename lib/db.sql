-- COMMENTS DONT WORK ON PHPMYADMIN
-- REMOVE COMMENTS BEFORE INITI

-- DATABASE WITH USERS & STAFF, COMMENTS, MESSAGES, ARTICLES
CREATE DATABASE IF NOT EXISTS arcadia;
USE arcadia;

-- machine cannot CREATE nor DROP.
-- machine will only UPDATE, INSERT, DELETE, READ
CREATE USER 'arcadia_machine'@'localhost' IDENTIFIED BY '1234';
GRANT SELECT, INSERT, UPDATE, DELETE ON arcadia.* TO 'arcadia_machine'@'localhost';

CREATE TABLE users(
    user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(40) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL, -- to be hashed beforehand by the web app
    is_veterinary BOOLEAN DEFAULT FALSE,
    is_mod BOOLEAN DEFAULT FALSE,
    is_admin BOOLEAN DEFAULT FALSE
);

CREATE TABLE comments(
    comment_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED,
    comment_type INT NOT NULL, -- 1 comment awaiting approval, 2 validated comment, 3 message
    comment_text TEXT,
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE services(
    service_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE sectors (
    sector_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    content TEXT NOT NULL,
    image_path VARCHAR(255)
);

CREATE TABLE animals (
    animal_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    sector_id INT UNSIGNED,
    first_name VARCHAR(50) NULL,
    race VARCHAR(50),
    image_url VARCHAR(255),
    FOREIGN KEY (sector_id) REFERENCES sectors(sector_id)
);

CREATE TABLE animal_logs (
    animal_log_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    animal_id INT UNSIGNED,
    views INT UNSIGNED NOT NULL DEFAULT 0,
    visited DATE,
    state VARCHAR(225),
    state_detail TEXT,
    food TEXT ,
    food_weight TEXT,
    FOREIGN KEY (animal_id) REFERENCES animals(animal_id)
);

CREATE TABLE reviews (
    review_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    content TEXT NOT NULL,
    UNIQUE (username)
);

CREATE TABLE images (
    image_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL
);

CREATE TABLE service_images (
    service_id INT UNSIGNED,
    image_id INT UNSIGNED,
    FOREIGN KEY (service_id) REFERENCES Services(service_id),
    FOREIGN KEY (image_id) REFERENCES Images(image_id),
    PRIMARY KEY (service_id, image_id)
);

CREATE TABLE sector_images (
    sector_id INT UNSIGNED,
    image_id INT UNSIGNED,
    FOREIGN KEY (sector_id) REFERENCES Sectors(sector_id),
    FOREIGN KEY (image_id) REFERENCES Images(image_id),
    PRIMARY KEY (sector_id, image_id)
);

CREATE TABLE animal_images (
    animal_id INT UNSIGNED,
    image_id INT UNSIGNED,
    FOREIGN KEY (animal_id) REFERENCES Animals(animal_id),
    FOREIGN KEY (image_id) REFERENCES Images(image_id),
    PRIMARY KEY (animal_id, image_id)
);