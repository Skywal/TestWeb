<?php  // файл підключення до бази даних
  header('Content-Type: text/html; charset=utf8');

  //підключення до бази даних
  $connection = mysqli_connect('localhost', 'root', 'linuxconfig.org', 'test_db');
  //команда верне булевне значення якщо їй не вдалося підключитися
  if($connection == false){
     echo 'не вдалося підключитися до бази даних<br>';
     echo mysqli_connect_error(); //комадна повертає причину чому не вдалося підключитися до бази даних
     exit(); // зупинка виконання скріпта або die()
  }
  mysqli_set_charset($connection, 'utf8'); //для правильного відображення кодування БД
  // echo "приєднання до БД успішне<br>";
?>
