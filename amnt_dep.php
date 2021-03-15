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
    <form action="amnt_dep_process.php" data-aos="fade-down-left">
    <h2>Add Savings For Your Goal</h2>
    <table>
   <!-- <tr>
    <td>Name :</td>
    <td><input type="text" name="goalname" required></td>
   </tr>
   <tr>
    <td>Months :</td>
    <td><input type="number" name="months" required></td>
   </tr> -->
   <tr>
   <?php
   $gid = $_REQUEST['goal'];
   ?>
   <input type="hidden" name="goal_id" value="<?= $gid ?>">
    <td class="required">Saving amount :</td>
    <td><input type="number" name="a_bal" required></td>
   </tr> 
   <tr>
    <td><input type="submit" class="btn-lg btn-dark" value="Save"></td>
   </tr>
  </table>
    </form>
</body>
</html>