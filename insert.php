        <!-- This file is to Insert the data in DB -->
<?php include 
'connection.php';
    // checks whether there is any empty data or not
    if(!empty($_POST["phone"]) && !empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
    {    
        //extracting data in variables
        $fname=$_POST['firstname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];    
        $password=$_POST['password'];
        // initializing the flag (will be used later)
        $flag=0;
        // code to check whether user with the same email already exist or not
        $sql = "SELECT id,email FROM register";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $email2=$row['email'];
                if($email==$email2)
                    { ?>
                        <!-- alerting error using js -->
                        <script type="text/javascript">
                            alert('User already exists with the same email');
                            window.location.href='index.php;
                        </script>
                    <?php
                        // updating flag if user already exist 
                        $flag=1;
                    }
                }
            }
            
        if($flag==0){
            $sql = "INSERT INTO register (username,password,email,phone)
                                VALUES ('$fname','$password','$email','$phone')";
            if ($conn->query($sql) === TRUE) {
                //move to welcome.php
                header("Location: welcome.php");
                /*
                    setting session-parameter known as name,
                        which will be used at welcome.php to display the name of logged in user
                */
                $_SESSION['firstname'] = $fname;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;
                die();
            }
        }

    }
?>