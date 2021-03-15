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
        <div class="main jumbotron-text align-items-center">
        <h1>Your Goals</h1>
          <div class="row align-items-center">
            

        <?php
        include 
        'connection.php';
        
        $id=$_SESSION['email'];
        
        
        $mnge_sql = "SELECT * FROM crt_goals WHERE username='$id' ";
        $rs = $conn->query($mnge_sql);
        if ($rs->num_rows > 0)
        {
            while($row = $rs->fetch_assoc()) {
                echo '
                                <div class="card" data-aos="flip-right" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">'.$row['goalname'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Target Period: '.$row['months'].'</li>
                    <li class="list-group-item">Accumulated Capital: '.$row['c_bal'].'</li>
                    <li class="list-group-item">Target Savings: '.$row['e_bal'].'</li>
                </ul>
                <div class="card-body">
                <a href="amnt_dep.php?goal='.$row['goal_id'].'" class="btn btn-dark">Deposit Amount</a>
                <a href="view_goal.php?goal='.$row['goal_id'].'" class="btn btn-dark">View</a>
                </div>
                </div>';
            }
        } 
        else{
            echo "Oops!!! You do not have any goals :(";
        }     
  ?>
  </div>
  </div> 
  <div class="row align-items-center" >
  <a href="welcome.php" class="btn-lg btn-dark">Back</a>  
    
    </div>
  </div>
  </div>
  </div> 
</body>
</html>