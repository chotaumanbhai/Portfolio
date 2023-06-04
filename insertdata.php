<?php
// $showAlert=false;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Autorization, X-Requested-width ");
include('./partials/dbconn.php');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

    if($name != "" && $email != ""  && $message != ""){

        // $sql = "INSERT  INTO `contact` (`name`, `email`, `message`)
        //  VALUES
        // ('$name', '$email',  '$message')";
        $sql = "INSERT INTO `contact` (`name`,`email`,`message`) Values ('$name','$email','$message')";
        $result = mysqli_query($conn,$sql);
        if($result){

            // echo  "Successfully";
            session_start();
            $showAlert = true;
           $_SESSION['message'] = 
           "<div id='success'> Your Query  Added Successfully
           <button id='function' onclick='myFunction2()' style='cursor: pointer;'> x </button> </div>";
           header("location:index.php?message='success'");
        }
        
        else{
        echo "data was not inserted successfully " . mysqli_connect_error($conn);
        }

        }
        else{
        
            echo "please insert data";
        }
    }



?>