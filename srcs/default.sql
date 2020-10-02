CREATE DATABASE wordpress;
CREATE USER 'charlie'@'localhost' IDENTIFIED BY 'charlie';
GRANT ALL PRIVILEGES ON * . * TO 'charlie'@'localhost'; 
FLUSH PRIVILEGES;
