<?php
session_start();
include_once "config.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($name) && !empty($email) && !empty($password)) {

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // check if the email is already exists
            $sql = mysqli_query($conn, "SELECT email from users WHERE email = '{$email}'");

            if (mysqli_num_rows($sql) > 0) { // if email already exist

                  echo "$email - This email is already exist";
            } else {

                  // check file upload (image)
                  if (isset($_FILES['image'])) {

                        $img_name = $_FILES['image']['name']; // user uploaded image name
                        // $img_type = $_FILES['image']['type']; // type of image uploaded (jpg, png...)
                        $tmp_name = $_FILES['image']['tmp_name']; // temp name for img

                        // expload image and get the extention
                        $img_explode = explode('.', $img_name); // separate img from extention
                        $img_ext = end($img_explode); // getting the end of the var above(ext)

                        $extentions = ['jpg', 'jpeg', 'png', 'webp'];

                        if (in_array($img_ext, $extentions) == true) {

                              $time = time();

                              $new_img_name = $time . $img_name;

                              if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {

                                    $status = "Active now";
                                    $rand_id = rand(time(), 10000000);

                                    $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, name, email, password, image, status)
                                          VALUES ('{$rand_id}', '{$name}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                                    if ($sql2) {

                                          $sql3 = mysqli_query($conn, "SELECT * from users WHERE email = '{$email}'");

                                          if (mysqli_num_rows($sql3) > 0) {

                                                $row = mysqli_fetch_assoc($sql3);

                                                $_SESSION['unique_id'] = $row['unique_id'];
                                                echo "success";
                                          }
                                    } else {

                                          echo "Somthing went wrong";
                                    }
                              }
                        } else {

                              echo "Please enter a valid image";
                        }
                  }
            }
      } else {

            echo "$email . is not a valid email";
      }
} else {

      echo "All inputs are required";
}
