CREATE DATABASE IF NOT EXISTS role_db;

USE role_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    usertype ENUM('admin', 'user', 'manager') NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    registration_datetime DATETIME NOT NULL,
    phone_number VARCHAR(20) NOT NULL
);