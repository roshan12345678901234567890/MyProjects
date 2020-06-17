<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();

if($_SESSION['sID'] == session_id())
{
if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}
}else{
    header("location: login.php");
}

?>

<section id="main-site">

    <div class="profile-container">
    <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
    <h4 class="py-3">
    <?php
        if(isset($user['userName'])){
            printf('%s', $user['userName']);
            }
    ?>
    </h4>
        
    <div class="user-info">
        <ul>
            <li class="nav-link"><b>User Name: </b><span><?php echo isset($user['userName']) ? $user['userName'] : ''; ?></span></li>
            <li class="nav-link"><b>Moblie No: </b><span><?php echo isset($user['mobile']) ? $user['mobile'] : ''; ?></span></li>
            <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
        </ul>
    </div>
    <div class="logou-btn">
            <a href="logout.php" id="btn">Logout</a>
    </div>
    </div>

   
</section>

<?php include "footer.php";?>
