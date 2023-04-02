<?php 

session_start();
if(!isset($_SESSION['unique_id'])) {
      header("location: login.php");
}

?>

<?php include_once("header.php") ?>
<body>
     <div class="wrapper">
            <div class="chat-area">
                  <header>
                  <?php 
                        include_once("php/config.php");
                        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                        if(mysqli_num_rows($sql) > 0) {
                              $row = mysqli_fetch_assoc($sql);
                        }

                        ?>
                        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <img src="php/images/<?php echo $row['image'] ?>" alt="">
                        <div class="details">
                              <span><?php echo $row['name'] ?></span>
                              <p><?php echo $row['status'] ?></p>
                        </div>
                  </header>
                  <div class="chat-box">
                        
                        
                        
                  </div>
                  <form action="" method="POST" class="typing-area" enctype="multipart/form-data">
                        <input type="text" value="<?php echo $_SESSION['unique_id'] ?>" name="outgoing_id" hidden>
                        <input type="text" value="<?php echo $user_id ?>" name="incoming_id" hidden>
                        <input type="text" name="message" class="form-control input-field" placeholder="Type a message here...">
                        <button class="message-btn"><i class="fab fa-telegram-plane"></i></button>
                  </form>
            </div>
     </div> 

      <script src="javascript/chat.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>