CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID int PRIMARY KEY AUTO_INCREMENT,
  Nama varchar(100),
  Alamat varchar(100),
  Jabatan varchar(100)
);

INSERT INTO users (Nama, Alamat, Jabatan)
VALUES
  ('User 1', 'Address 1', 'Manager'),
  ('User 2', 'Address 2', 'Developer'),
  ('User 3', 'Address 3', 'Technician'),
  ('User 4', 'Address 4', 'Assistant'),
  ('User 5', 'Address 5', 'Secretary'),
  ('User 6', 'Address 6', 'Treasurer');
