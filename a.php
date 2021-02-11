<?php      
    include('config.php');  
    if(isset($_POST['login']))
    {
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from admin where USERNAME = '$username' and PASSWORD = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> alert('Login successful') </center></h1>";  
            header("Location: https://www.irctc.co.in/nget/train-search");
        }  
        else{  
            header("Location: http://localhost/login/");
       }   }     
       if(isset($_POST['forgot']))
       {
        header("Location: http://localhost/forgotpassword/");
       }
       if(isset($_POST['register']))
       {
        header("Location: http://localhost/register/");
       }
       if(isset($_POST['contact']))
       {
        header("Location: http://localhost/support/");
       }
     
?>  