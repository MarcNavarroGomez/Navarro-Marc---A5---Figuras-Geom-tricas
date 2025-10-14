CREATE DATABASE whatsapp;
USE whatsapp;

-- Tabla de usuarios
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(45) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  nombre VARCHAR(45) NOT NULL,
  apellido VARCHAR(45) NOT NULL,
  fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


-- Tabla de solicitudes de amistad
CREATE TABLE solicitudes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_enviar INT NOT NULL,
  user_recibir INT NOT NULL,
  estado ENUM('pendiente','aceptada','rechazada') NOT NULL DEFAULT 'pendiente',
  fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  fecha_edit DATETIME NULL,
  FOREIGN KEY (user_enviar) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (user_recibir) REFERENCES users(id) ON DELETE CASCADE
);

-- Tabla de chats (uno a uno)
CREATE TABLE chats (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user1 INT NOT NULL,
  user2 INT NOT NULL,
  fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user1) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (user2) REFERENCES users(id) ON DELETE CASCADE,
  UNIQUE KEY unique_chat (user1, user2)
);

-- Tabla de mensajes
CREATE TABLE mensajes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  chat_id INT NOT NULL,
  emisor_id INT NOT NULL,
  mensaje TEXT NOT NULL,
  fecha_envio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  fecha_edit DATETIME NULL,
  editado BOOLEAN NOT NULL DEFAULT FALSE,
  FOREIGN KEY (chat_id) REFERENCES chats(id) ON DELETE CASCADE,
  FOREIGN KEY (emisor_id) REFERENCES users(id) ON DELETE CASCADE
);