<?php
header('Content-Type: text/html; charset=utf8'); // це потрібно вказувати найпершим у файлі
?>
<?php

   include('includes/db.php'); // підключення файлу бази даних

   $result = mysqli_query($connection, "SELECT * FROM `articles_categories` ");

   /* /// перший варіант
   //$result1 = mysqli_fetch_assoc($result); // дістаємо дані із сутності яку сформувало читання із бази даних

   //print_r($result1);

   //проходимося по всіх записах у базі даних
   while($record = mysqli_fetch_assoc($result)){
      print_r($record);
      echo "<br>";
   }

   // після роботи з БД закрити з'єднання
   mysqli_close($connection);*/


?>

<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf8" >
      <title></title>
   </head>

   <body>
   <?php
   echo 'Записів знайдено ' . mysqli_num_rows($result) . '<br>';
   ?>
   <ul>
      <?php

         while($category = mysqli_fetch_assoc($result)){
            //для визначення кількості записив у певній категорії (метод туже тормозний)
            //$articles_count = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = " . $category['id']);

            //не тормозний метод
            $articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categories_id` = " . $category['id']);
            $articles_count_result = mysqli_fetch_assoc($articles_count);
            echo '<li>' . $category['title'] .' ('. $articles_count_result['total_count'] . ') '. '</li>';
         }
      ?>
   </ul>

   <form method="POST" action = "/handle.php"> <!-- // передаємо дані для обробки в інший файл ПХП !-->
         <hr>
         <input type="text" placeholder="Ваш логін" name="login">
         <input type="text" placeholder="Ваш пароль" name="password">
         <hr>
         <input type="submit" value="Відправити">
   </form>

   </body>
</html>
<!DOCTYPE html>

<?php
   // після роботи з БД закрити з'єднання
   mysqli_close($connection);
?>
