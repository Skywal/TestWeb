<?php
  header('Content-Type: text/html; charset=utf8');

  include('includes/db.php'); // підключення файлу бази даних

  // $_GET якщо вказали у формі метод запросу GET
  echo "Ваш логін " . $_POST['login'] . "<br>";
  echo "Ваш пароль " . $_POST['password'] . "<br>";

  $login = $_POST['login'];
  $password = $_POST['password'];

  $count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");

  // exit ("SELECT * FROM `users` WHERE `login`=`$login` AND `password`=`$password`");
  echo mysqli_num_rows($count) . "<br>";

  if(mysqli_num_rows($count) == 0){
    echo "Ви не зареєстровані!";
  } else {
    echo "Привіт " . $login . "!" . "<br>";
  }
?>
