CREATE USER 'charlie'@'localhost' IDENTIFIED BY 'charlie';
GRANT ALL PRIVILEGES ON * . * TO 'charlie'@'localhost'; FLUSH PRIVILEGES;
CREATE DATABASE wordpress;
