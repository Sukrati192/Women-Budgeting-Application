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
        <div class="main jumbotron-text align-items-center" data-aos="fade-up-right">
<?php include 
        'connection.php';

$goal_id = $_REQUEST['goal'];

$view_sql = "SELECT * FROM `crt_goals` where goal_id='$goal_id'";

$result = $conn->query($view_sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $goalname=$row["goalname"];
                    $months=$row["months"];
                    $c_bal=$row["c_bal"];
                    $e_bal=$row['e_bal'];
                    $goal_date=$row['goal_date'];
                }
                $installment_amt = $e_bal/$months;
                $reqd=$e_bal-$c_bal;
                echo "<h1>Details about your goal- ".$goalname."</h1>";
                echo "<divYou started your savings for ".$goalname." at ".$goal_date;
    echo "<br>You have to save at least ".$e_bal." rupees to complete your goal.";
    echo "<br>You have to save at least ".$installment_amt." rupees every month to achieve the goal.";
    echo "<br>You have to achieve your goal in ". $months." months.";
    echo "<br>Your accumulated capital is ". $c_bal." rupees.";
    if($e_bal<=$c_bal)
                echo "<br>Yay!!! Your goal of ".$goalname." has been achieved.<br>You have ".($c_bal-$e_bal)." additional amount in your savings other than your target.";
    else{
        echo "<br>Required Amount to complete the goal:  ".$reqd."<br> You have deposited your savings for ".($c_bal/$installment_amt). " months.<br>You can complete your target in ".($reqd/$installment_amt). " months. All the best!!!";
    }
?>
</div>
</div>
</div>
</div>
<div class="col align-items-center">
    <a href="mange_goal.php" class="btn-lg btn-dark">Back</a>
</div>
</body>
</html>