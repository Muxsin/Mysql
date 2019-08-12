CREATE TABLE users (
    user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_first varchar(255) NOT NULL,
    user_last varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL UNIQUE,
    user_uid varchar(255) NOT NULL UNIQUE,
    user_pwd varchar(255) NOT NULL
)