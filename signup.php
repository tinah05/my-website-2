<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FBS &mdash; Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
        background-color: pink;
      }
    </style>
  </head>

  <body>
  
    <div class="site-wrap">
      <div class="site-section">
        <div class="container">

          <!-- My Header Part -->
          <div class="row justify-content-center mb-2">
            <div class="col-md-12">
              <p class="text-center">
                <strong><br/>
                  <a href="index.html" class="text-danger">HOME</a> |
                  <a href="aboutus.html" class="text-danger">ABOUT US</a> |
                  <a href="services.html" class="text-danger">SERVICES</a> |
                  <a href="signup.php" class="text-danger">SIGN UP</a> |
                  <a href="contact.html" class="text-danger">CONTACT</a> |
                  <a href="signin.php" class="text-danger">SIGNIN</a>
                </strong>
              </p>
              <h2 class="font-weight-light text-black text-center"><strong style="font-weight:800;"> FAUSTINAH BUSINESS SOLUTIONS </strong></h2>
              <h6 class="font-weight-light text-danger text-center" style="font-size:2.2rem;"><strong> Tinah Beauty Parlor </strong></h6>
              <p class="text-center"> 
                <br/> You are welcome expect the best from us. <br/>
                This is a good saloon where they mind your beauty. <br/><br/>
              </p>
            </div>
          </div>
          <!-- My Header Part -->


          <!-- Content Area -->
          <hr/>
          <h5 class="site-section-heading font-weight-light text-danger text-center" style="font-size:2.2rem;"> <strong> Sign Up </strong> </h5>
          <p class="text-center"> 
            Please fill in this form to create an account.
          </p>

          <div class="row justify-content-center">
            <div class="col-md-7">
              <form method="post" action="signup.php" class="p-5 bg-white">
                <strong class="text-primary"> </strong>

                <div class="row form-group">   
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                  </div>
                </div>

                <div class="row form-group">  
                  <div class="col-md-12">
                    <label class="text-black" for="password">Password</label> 
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                  </div>
                </div>

                <div class="row form-group">  
                  <div class="col-md-12">
                    <label class="text-black" for="repeat_password">Repeat Password</label> 
                    <input type="password" id="repeat_password"name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label>
                      <input type="checkbox" style="margin-bottom:15px"> Remember me
                    </label>
                    <p> <em> When you creat an account with us you agree to our <a href="#" class="text-danger">Terms &amp; Privacy</a>. </em> </p>
                
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="button" value="Cancel" class="btn btn-outline-danger py-2 px-4">
                    <input type="submit" name="reg_user" value="Sign Up" class="btn btn-danger py-2 px-4 text-white">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Content Area -->


          <!-- My Footer -->
          <div class="row justify-content-center mb-2">
            <div class="col-md-12">
              <h6 class="font-weight-light text-danger text-center" style="font-size:2.2rem;"><strong> Tinah Beauty Parlor </strong></h6>
              <hr/><p class="text-center"> 
                <br/> You are welcome to our saloon, feel at home <br/>
                Here we mind your beauty because we believe that your beauty is your pride. <br/>
              </p>
              <p class="text-center">
                <strong>
                  <a href="signin.html" class="btn btn-danger px-4 py-2 text-white" style="border-radius:25px;"> signup now </a> <br/>
                  <a href="index.html" class="text-danger">HOME</a> |
                  <a href="aboutus.html" class="text-danger">ABOUT US</a> |
                  <a href="services.html" class="text-danger">SERVICES</a> |
                  <a href="signup.php" class="text-danger">SIGN UP</a> |
                  <a href="contact.html" class="text-danger">CONTACT</a> |
                  <a href="signin.php" class="text-danger">SIGN IN</a>
                </strong>
              </p>
            </div>
          </div>
          <!-- My Footer -->

        </div>
      </div>
    </div>
    
  </body>
</html>