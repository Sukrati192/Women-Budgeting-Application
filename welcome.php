    <!-- This page is the front-end page which will be shown to user after register/login -->

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
    <div class="conatiner-fluid align-items-center">
    <div class="container-fluid align-items -center">
      <div class="row align-items-center">
        <div class="jumbotron-text align-items-center">
          <div class="row main align-items-center">
        <?php 
    include 'connection.php';
        /*
            This Page is session protected as you can see the following code checks
                whether there is any session variable known as name is set or not. 
                    As If not set that means user have to login/register first 
        */
    if(!isset($_SESSION["firstname"]))
    {
        header("Location: index.php");
        die();
    }
           echo "<h1>Welcome ".$_SESSION["firstname"]."</h1>
            <h2> Your Contact Number: ".$_SESSION['phone']."</h2>
            <h2> Your Email: ".$_SESSION['email']."</h2>"; ?>
            <div class="row align-items-center" data-aos="fade-right">
              <p>This is your budgeting app dashboard where you can manage your money and tune your finances by creating goals setting budgets and contributing in small amount towards the goals.</p>
              <p data-aos="fade-left">Enjoy your journey :}</p>
            </div>
  </div>
    </div><br><br><br>
    <div class="row align-items-center">
        <div class="col-12 col-sm-4 offset-1">
         <a data-bs-toggle="modal" data-bs-target=".goalform" class="btn-lg btn-dark " data-aos="flip-left">Create Goal</a>
         <div class="modal fade goalform" tabindex="-1" role="dialog" aria-labelledby="goal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                  <h3 class="modal-title text-light" id="goal">Set Your Goal</h3>
                  <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="process_goal.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="goalname" class="required col-12 col-form-label">What is your goal?</label>
                      <div class="col-12">
                          <input type="text" class="form-control" id="goalname" name="goalname" placeholder="Enter your goal" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="months" class=" required col-12 col-form-label">Till how many months you want to save your money?</label>
                      <div class="col-12">
                          <input type="number" class="form-control" id="months" name="months" placeholder="Enter the number of months" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="c_bal" class="required col-12 col-form-label">How much money you want to save initially?</label>
                    <div class="col-12">
                        <input type="number" class="form-control" id="c_bal" name="c_bal" placeholder="Enter your initial amount" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="e_bal" class="required col-12 col-form-label">How much money you want to save for your goal in the whole duration?</label>
                    <div class="col-12">
                        <input type="number" class="form-control" id="e_bal" name="e_bal" placeholder="Enter your expected savings" required>
                    </div>
                </div>
              <div class="form-group row">
                <div class="col-12">
                    <br><button type="submit" class="btn-lg btn-dark">Create</button>
                </div>
            </div>
              </form>
              </div>
            </div>
            </div>
          </div>
</div>
        <div class="col-12 col-sm-5">
         <a class="btn-lg btn-dark " href="mange_goal.php" data-aos="flip-left">Manage Goal</a>
</div>
<div class="col-12 col-sm-1">
         <a class="btn-lg btn-dark " href="signout.php" data-aos="flip-left">Signout</a>
</div>
  </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>