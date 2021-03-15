<?php
include 'connection.php';
/*
        This Page is session protected as you can see the following code checks
                whether there is any session variable known as name is set or not. 
                    As If not set that means user have to login/register first 
    */
    if(isset($_SESSION["firstname"]))
    {
        header("Location: welcome.php");
        die();
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Women Budgeting Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="g.jfif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@800&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  </head>
  <body>
    <script>AOS.init();</script>
    

    <div class="container-fluid">

      <!-- HEADER -->
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 col-sm-7 mr-auto main align-content-center rounded-bottom rounded-top">
          <div class="jumbotron-text text-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h1>Women<br>Budgeting<br>Application</h1>
            <p>App for women and ladies that encourages them to save at small capital amount towards personal goals. Show the accumulated capital for specific goals in life i.e. Daughters marriage, Family emergencies etc. and help them predict if they would be meeting their goals.</p>
          </div>
          <div id="down-arrow">
            <a href="#about"><i class="fa fa-chevron-down fa-lg text-light" aria-hidden="true" id="down-arrow"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm last">
          <form  action="logincheck.php" method="POST" enctype="multipart/form-data" data-aos="fade-up">
            <div class="form-group row">
                <label for="mail" class="required col-12 col-sm-3 col-md-3 col-form-label">Email</label>
                <div class="col-sm-9 col-md-9">
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter your email" required>
                </div>
            </div><br>
            <div class="form-group row">
              <label for="mail" class="required col-12 col-sm-3 col-md-3 col-form-label">Password</label>
              <div class="col-sm-9 col-md-9">
                  <input type="password" class="form-control" id="pass" name="pass" required>
              </div><br><br>
          </div>
            <div class="form-group row">
                <div class="offset-md-3 col-md-9">
                    <button type="submit" class="btn-lg btn-dark">Login</button>
                </div>
            </div><br>
        </form>
        <span class="offset-md-2 sign">
          Don't have an account? Want to <a data-bs-toggle="modal" data-bs-target=".signup">sign up</a>?
        </span>
          <div class="modal fade signup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                  <h3 class="modal-title text-light" id="exampleModalLabel">Sign Up</h3>
                  <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="firstname" class="required col-md-3 col-form-label">Your Name</label>
                      <div class="col">
                          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your Name" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="phone" class=" required col-md-3 col-form-label">Contact Number</label>
                      <div class="col-md">
                          <input type="tel" pattern="[7-9]{1}[0-9]{9}" minlength="10" maxlength="10" class="form-control" id="phone" name="phone" placeholder="Contact Number" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="required col-12 col-md-3 col-form-label">Email</label>
                    <div class="col-sm col-md">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="required col-12 col-md-3 col-form-label control-label" for="passwordinput">Password <span id="popover-password-top" class="hide pull-right block-help"><i class="fa fa-info-circle text-danger" aria-hidden="true"></i></span></label>
                  <div class="col-sm col-md">
                      <input id="password" maxlength="8" minlength="6" name="password" type="password" placeholder="" class="form-control input-md" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true" required>
                      <div id="popover-password">
                          <p>Password Strength: <span id="result"> </span></p>
                          <div class="progress">
                              <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                              </div>
                          </div>
                          <ul class="list-unstyled">
                              <li class=""><span class="low-upper-case"><i class="fa fa-times" aria-hidden="true"></i></span>&nbsp; 1 lowercase &amp; 1 uppercase</li>
                              <li class=""><span class="one-number"><i class="fa fa-times" aria-hidden="true"></i></span> &nbsp;1 number (0-9)</li>
                              <li class=""><span class="one-special-char"><i class="fa fa-times" aria-hidden="true"></i></span> &nbsp;1 Special Character (!@#$%^&*).</li>
                              <li class=""><span class="eight-character"><i class="fa fa-times" aria-hidden="true"></i></span>&nbsp; Min 6 Characters and Max 8 Characters</li>
                          </ul>
                      </div>
                  </div>
                </div>
              <div class="form-group row">
                <div class="offset-md-3 col-md-9">
                    <button type="submit" class="btn-lg btn-dark">Sign Up</button>
                </div>
            </div>
              </form>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script  src="function.js"></script>
     </body>
     </html>

