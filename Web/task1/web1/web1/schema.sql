-- Create database (run once, or create manually):
-- CREATE DATABASE web1_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  role ENUM('admin','user') NOT NULL DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERT INTO users (username, password_hash, role) VALUES
--   ('admin', '$2y$10$BaX8mU6J6z1o7dYz0o3VjOZqgk8uJq5jvQn1yXx0v8b2N8m5xY3a2', 'admin'),
--   ('user', '$2y$10$8yq.0o7JH5y3YkN6h8e7Oe2QKq1bEo8xYg6s1d9Xo9m4n3K2j5wJu', 'user');


