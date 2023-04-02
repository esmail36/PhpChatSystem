<?php 
      session_start();
      $outgoing_id = $_SESSION['unique_id'];
      include_once("config.php");
      $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
      $output = "";
      $sql = mysqli_query($conn, "SELECT * from users  WHERE NOT unique_id = {$outgoing_id} AND (name LIKE '%{$searchTerm}%')");

      if(mysqli_num_rows($sql) > 0 ) {
            include "data.php";
      }
      else {
            $output .= "No users found to chat with";
      }
      
      echo $output;