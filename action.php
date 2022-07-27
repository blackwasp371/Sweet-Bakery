<?php
session_start();
include("db.php");
if(isset($_POST['register'])){
$username = md5($_POST['name']);
$email = $_POST['email'];
//$password = ($_POST['password'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query = "insert into Project(id,name,email,subject,message)
values(NULL,'$username','$email','$subject','$message')";
$conn->query($query);
header("location:index.html");
}
/*
//login code
if(isset($_post['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from project where email='$email' and password='password'"
    $conn->query($query);

    
    $userdata = $result->fetch_assoc();
    $count = $result->num_rows;

    

    if($count==0){
        echo"Invalid login";
    }
    else{
        echo "login successful"
        $_SESSION['ticket']= ='ok';
        $_SESSION['userid'] = $userdata('id');

        header('location:index.html');
    }
    }


    <?php
    session_start();if(!$_SESSION['ticket']){
        header('location:login.php');
    }
    ?>
    }
    
}
enctype="multipart/form-data" for image


echo $_FILES['file']['filekoname,size'];



$query = "insert into user(id,username,password,email,address,country)
values 



move_uploaded_file($_FILES['pimage']['tmpimage'], "uploads/ram.jpg")




$conn->query($query);





<a href="#"Delete</a>
<a href="update.php?id=1">Update</a>
<a href="update.php?id=<?php echo $data['id'];?>Update</a>

print_r($data)j=
classs='form-control" name="Username"value="?php echo $data['pname';?>


//add product form naya banauney ani varney
if(isset($_POST['productadding'])){



    if(isset($_POST['updateproduct'])){
        $us = $_POST['username'];

        $q = "update tbl_nameset pname= '$pname', price ='$price', qty ='$qty'"
    }
*/
}