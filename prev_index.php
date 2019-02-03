<html>
   <head>
      <title>16.01.2019 input and label</title>
      
      <?php
         //post method sends data though header 
         $value_fname = $_POST['fname']; // get value from input 'fname' 
         print($value_fname);
         
         echo "<br>";
         
         $value_lname = $_POST['lname'];
         print($value_lname);

      ?>

   </head>
   
   <body>
      <form method="post" action="" >
        First name: <input type="text" name="fname" value="First name"/><br>
        Last name: <input type="text" name="lname" value="Last name"/><br>
        <input type="submit" name="submit"/>
      </form>
      <hr>
      
   </body>
</html>