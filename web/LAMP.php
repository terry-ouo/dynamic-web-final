<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<strong style="position: fixed;top: 200px;font-size: 20px;">
    <ul>
        <a href="#apache">
            <li>apache</li>
        </a><br>
        <a href="#mariadb">
            <li>mariadb</li>
        </a><br>
        <a href="#php">
            <li>php</li>
        </a><br>
        <a href="#PHPMyAdmin">
            <li>PHPMyAdmin</li>
        </a><br>
    </ul>
</strong>
<?php include("model.php") ?>
<div style="width: 400px;margin-left: 500px">
    <h1 >建立LAMP / ubuntu version 18.04</h1>
    <h5> tags: `linux`</h5>
    <h3 id="apache">Apache</h3>
    sudo apt update
    sudo apt-get install apache2
    sudo ufw app list
    <img src="https://i.imgur.com/wYekOD7.png" alt="apache">
    <h3 id="mariadb">MariaDB</h3>
    sudo apt-get install mariadb-server
    sudo mysql_secure_installation

    <h3>Create account and database</h3>
    sudo mysql -u root
    create database <i>database</i>;
    show databases;
    create user '<i>user</i>'@localhost identified by '<i>password</i>';
    select user from mysql.user;
    grant all privileges on *.* to '<i>user</i>'@localhost;
    flush privileges;
    show grants for '<i>user</i>'@localhost;
    <img src="https://i.imgur.com/xDNSOHm.png" alt="example">
    <h3 id="php">PHP</h3>
    sudo apt-install php libapache2-mod-php php-mysql

    <h3>Changing Apache’s Directory Index (Optional)</h3>
    sudo vim /etc/apache2/mods-enabled/dir.conf
    <img src="https://i.imgur.com/SaMOMc5.png" alt="secure">

    sudo systemctl restart apache2
    sudo systemctl status apache2

    <h3 id="PHPMyAdmin">PHPMyAdmin</h3>
    sudo apt install phpmyadmin php-mbstring php-gettext
    sudo phpenmod mbstring
    sudo systemctl restart apache2
    <h4>參考文件</h4>
    <a target="_blank"
       href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04">LAMP</a><br>
    <a target="_blank"
       href="https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04">phpMyAdmin</a><br>
    <a target="_blank"
       href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04">MariaDB</a><br>

</div>


</body>
</html>