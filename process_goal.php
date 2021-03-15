<?php include 'connection.php';

$id=$_SESSION['email'];
$goalname=$_POST['goalname'];
$months=$_POST['months'];
$c_bal=$_POST['c_bal'];
$e_bal=$_POST['e_bal'];

$sql_goal = "INSERT INTO crt_goals (goalname,months,c_bal,e_bal,username)
                                VALUES ('$goalname','$months','$c_bal','$e_bal','$id')";
if ($conn->query($sql_goal) === TRUE) {}
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
  <div class="conatiner-fluid align-items-center">
    <div class="container-fluid align-items -center">
      <div class="row align-items-center">
        <div class="margin jumbotron-text main align-items-center" data-aos="fade-up-right">
<h2>Congratulations!! You have created a new goal. Wish you luck :)</h2>
    <?php
    $installment_amt = $e_bal/$months;
   
    echo "<h1>Your Goal- ".$goalname."</h1>";
    echo "<br>Target Amount :  ".$e_bal;
    echo "<br>Installment Amount :  ".$installment_amt;
    echo "<br>Total Months :  ". $months;
    echo "<br>Accumulated Capital :  ". $c_bal;
    if($e_bal<=$c_bal)
                echo "<br>Yay!!! Your goal of ".$goalname." has been achieved.<br>You have ".($c_bal-$e_bal)." additional amount in your savings other than your target.";
    else{
        echo "<br>Required Amount to complete the goal:  ".$reqd."<br> You have deposited your savings for ".($c_bal/$installment_amt). " months.<br>You can complete your target in ".($reqd/$installment_amt). " months. All the best!!!";
    }
    ?>
    <br>
</div>


    <a href="welcome.php" class="btn btn-dark">Back</a>
    </div>
</div>
</div>
</body>
</html>