
<?php 

 include_once('sql.php');

if(isset($_POST['fname'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $mail=$_POST['email'];
    $msg=$_POST['msg'];
	

$sql="insert into maincontactform values('$fname','$lname','$phone','$mail','$msg')";
if($con->query($sql)){
	echo "done";
}
else{
	echo "error";
}

}
?>