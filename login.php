<?php include_once("header.php") ?>
  <body>
      <div class="wrapper">
            
            <div class="form login">
                  <header>Realtime Chat App Login</header>
                  
                  <form action="" method="POST" enctype="multipart/form-data" class="form">
                        <div class="error-text">This is an error message!</div>
                        <div class="field input">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="field input">
                              <label for="email">Password</label>
                              <div class="pass">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                    <i class="far fa-eye"></i>
                              </div>
                        </div>

                        <button type="submit" class="btn btn-dark button" style="width: 100%;">Continue to Caht</button>
                  </form>

                  <p class="text-center">Dont't have an account ? <a href="index.php">create one</a></p>
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="javascript/pass-show-hide.js"></script>
      <script src="javascript/login.js"></script>

  </body>
</html>
