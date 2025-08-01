
CREATE DATABASE IF NOT EXISTS portal;
USE portal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('student', 'teacher') NOT NULL
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender VARCHAR(50),
    receiver VARCHAR(50),
    message TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student VARCHAR(50),
    file VARCHAR(255),
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample Users
INSERT INTO users (username, password, role) VALUES 
('student1', 'studentpass', 'student'),
('teacher1', 'teacherpass', 'teacher');
