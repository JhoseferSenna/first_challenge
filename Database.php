<?php
<<<<<<< HEAD
=======

>>>>>>> 4946b1a10ef3166f7ba0ee73dbaabc34166addff
try {
  $conn = new PDO('mysql:host=localhost;dbname=first_challange', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
<<<<<<< HEAD
=======

>>>>>>> 4946b1a10ef3166f7ba0ee73dbaabc34166addff
