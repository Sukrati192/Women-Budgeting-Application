<?php include 'connection.php';
$gid=$_REQUEST['goal_id'];

// $goalname=$_REQUEST['goalname'];
// $months=$_REQUEST['months'];
// $c_bal=$_REQUEST['c_bal'];
$a_bal=$_REQUEST['a_bal'];

$add_sql = "UPDATE `crt_goals` SET c_bal=(c_bal+'$a_bal') WHERE goal_id='$gid'";
if ($conn->query($add_sql) === TRUE) {
}
?>
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
    <h1 class="main" data-aos="fade-up-left">Congratulations!!! Amount has been added to your savings successfully :)</h1>
    <a href="mange_goal.php" class="btn-lg btn-dark" data-aos="flip-up">Back</a>
</body>
</html>