
<?php

session_start();

include_once('mysqli_connect.php');
include ('header.php');
include "helper.php";
?>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('login-process.php');
        if(isset($message)){
            echo "<p id='error'>".$message."</p>";
        }
    }
?>

<section id="login-form">
            <div class="login-header">
                <h1>Login</h1>
                <p>Login and enjoy additional features</p>
                <span>Create a new <a href="signup.php">account</a></span>
            </div>
            <div class="login-image">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png' ; ?>" style="width: 200px; height: 200px" alt="profile">
                </div>
            </div>
            <div class="login-form">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form" >

                    <div class="form-row">
                        <div class="col">
                            <input type="email" name="email" id="email" placeholder="Email*">
                            <small id="email_error"></small> 
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="password" name="password" id="password" placeholder="password*">
                            <small id="pass_error"></small> 
                        </div>
                    </div>

                    <div class="submit-btn">
                        <button type="button" onclick="formvalidation()">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<?php include ('footer.php'); ?>