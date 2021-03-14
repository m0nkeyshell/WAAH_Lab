# WAAH_Lab setup manual

 ### Create mysql user
Run the following commands in mysql
```
CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
```

Mysql new user credentils will be `user/password`

### Configuration in config.php
 Replace mysql credentials with your credentials
 ```
 <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'user');
    define('DB_PASSWORD', 'password');
    define('DB_DATABASE', 'demo');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 ?>
 ```

### setup database
```
root@kali:/var/www/html# service mysql start
root@kali:/var/www/html# mysql -u root -p -e "create database demo"
root@kali:/var/www/html# mysql -u root -ptoor < demo.sql
```
