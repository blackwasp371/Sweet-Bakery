<?phpsession_start();
if(!$SESSION['ticket']){
    header(!location:'contact.html');
}
?>

<div class="container">
    <div class="row">

userid = $_SESSION['userid'];
include('database.php');
$query = "select * from user where id='$userid'";
$result = $conn->query($query);
$datauser = $user->fetch_assoc();


?>
$query = "select * from query 



<?php echo $datauser['name'];?>


<!-- Navbarma add garney log out 

login ma register hatauney
topma session start
session_()
login user ley herna pauney part top ma
?php if(isset($_session['a'])) {?>
esko vitra html lekhney



?php{
    else 
    ?>


    ?php } ?>
}






-->