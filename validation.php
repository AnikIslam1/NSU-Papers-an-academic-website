<?php
if (!empty($_POST)){   
    $email=$_POST['email'];
    $pass=$_POST['pass'];
   
    
    $conn=mysqli_connect("localhost","root","","nsumail");
    // Check connection
    if (mysqli_connect_errno()){
        //echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   

    $sqlUser="SELECT * from register where email='$email'&& pass='$pass'";
    $result=mysqli_query($conn,$sqlUser); 
    if (mysqli_connect_errno()){
        echo "Failed to retrieve data: " . mysqli_connect_error();
    }
    $num=mysqli_num_rows($result);
    if($num==1){
        

        echo "<script>window.location.href='index.php'</script>";
    }else{
        
        header('location:log.php');
        }
}


?>