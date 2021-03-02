<?php
if (isset($_POST['submit_x']) && $_POST['submit_x'] !='' ) {
  include_once 'db.php';

  $email = $_POST['email'];
  $datetime = date_create()->format('Y-m-d H:i:s');
  $exploded = explode(".", $email);
  if(empty($email) == true){
    header("Location: ../index.php?signup=empty");
  }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
      if($exploded[1] == 'co'){
        var_dump($exploded);
        header("Location: ../index.php?signup=colombia");
      }else{
        header("Location: ../index.php?signup=invalid");
      }
  }else{
      $sql = "INSERT INTO email (email, date) VALUES ('$email', '$datetime')";
      mysqli_query($conn, $sql);

      header("Location: ../success.php?signup=success");
  }
}
?>
