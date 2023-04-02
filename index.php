<?php include_once("header.php") ?>
  <body>
      <div class="wrapper">
            
            <div class="form register">
                  <header>Realtime Chat App Register</header>
                  
                  <form action="" method="POST" class="form" enctype="multipart/form-data" autocomplete="off">
                        <div class="error-text"></div>
                        <div class="field input">
                              <label for="name">Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="field input">
                              <label for="email">Email</label>
                              <input type="email" name="email" id="email"  class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="field input">
                              <label for="password">Password</label>
                              <div class="pass">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                                    <i class="far fa-eye"></i>
                              </div>
                        </div>
                        
                        <div class="field input">
                              <label for="email">Image</label>
                              <input type="file" name="image" id="image" class="form-control" placeholder="Enter your email" required>
                        </div>
                        

                        <button type="submit" class="btn btn-dark button" style="width: 100%;">Continue to Caht</button>
                  </form>
                  <p class="text-center">Already signed up ? <a href="login.php">Login here</a></p>
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="javascript/pass-show-hide.js"></script>
      <script src="javascript/signup.js"></script>

  </body>
</html>
