

<?php
if(isset($_GET['file'])){
    show_source(__FILE__); 
}
?> 
<?php
  // collect value of input field
  $sname= "localhost";

  $unmae= "root";
  
  $password = "";
  
  $db_name = "test";
  
  $conn = mysqli_connect($sname, $unmae, $password, $db_name);
  
  if (!$conn) {
      echo "Connection failed!";
  }

  // ' OR password LIKE '%2%' OR password='
  // ' OR password BETWEEN '1' AND '9999999' OR password='
  if (isset($_POST['email']) && isset($_POST['password'])) {
      echo "OK<br>";
      $email = $_POST['email'];
      $password = $_POST['password'];
      
    
      echo "Email: ". $email . " Password: " . $password . "<br>";

      $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) === 1) {
          echo "Logged In";
          header("Location: index.php?success=Successfully LoggedIn!&pass_query=$sql");
            // FOR Production:
        //   $row = mysqli_fetch_assoc($result);
        //   if ($row['email'] === $email && $row['password'] === $password) {
        //     echo "loged in!";
        //     header("Location: index.php?success=Successfully LoggedIn!");
        //   }
      }else{
            echo "no account found";
            header("Location: index.php?error=Username or Password Incorrect!");
      }
  }else{
      echo "not ok";
  }

?>