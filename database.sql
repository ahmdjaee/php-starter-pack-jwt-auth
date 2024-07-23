-- Active: 1711665667615@@127.0.0.1@3306@bookstore_mvc_test
CREATE DATABASE login_management DEFAULT CHARACTER SET = 'utf8mb4';

USE login_management;

CREATE TABLE users (
    username VARCHAR(255) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE sessions (
    id VARCHAR(255) PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    FOREIGN KEY (username) REFERENCES users(username)
);