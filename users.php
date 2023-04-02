<?php 

session_start();
if(!isset($_SESSION['unique_id'])) {
      header("location: login.php");
}

?>

<?php include_once("header.php") ?>
<body>
     <div class="wrapper">
            <div class="users">
                  <header>
                        <?php 
                        include_once("php/config.php");
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                        if(mysqli_num_rows($sql) > 0) {
                              $row = mysqli_fetch_assoc($sql);
                        }

                        ?>
                        <div class="content">
                              <img src="php/images/<?php echo $row['image'] ?>" alt="">
                              <div class="details">
                                    <span><?php echo $row['name'] ?></span>
                                    <p><?php echo $row['status'] ?></p>
                              </div>
                        </div>
                        <a href="" class="logout btn btn-dark">Logout</a>
                  </header>
                  <div class="search">
                        <span class="text">Select an user to start chat</span>
                        <input type="text" placeholder="Search for users...">
                        <button><i class="fa fa-search"></i></button>
                  </div>

                  <div class="users-list">
                        
                      
                  </div>
            </div>
     </div> 

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="javascript/users.js"></script>
</body>
</html>