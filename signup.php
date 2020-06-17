
<?php include ('header.php'); ?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('signup-process.php');
            if(isset($message)){
                echo "<p id='error_reg'>".$message."</p>";
            }
        }
    ?>

    <section id="signup-parent-container">
        <div class="sing-image-container">
            <img src="images/background.svg" alt="">
        </div>

        <div class="sing-form-container">

                <div class="sign-up-header">
                <h1>Register</h1>
                    <p>Register and enjoy additional features</p>
                    <p>I already have <a href="login.php">Login</a></p>
                </div>
                    
                <div class="upload-profile-image">
                    <div class="center">
                    
                        <div id="camera">
                        <label class="cameratohide" for="upload-profile">
                            <img class="camera-icon" src="./assets/profile/camera.svg" alt="camera">
                            </label>
                        </div>
                        <label class="cameratohide" for="upload-profile">
                        <img src="./assets/profile/beard.png" id="imagestoupdatepath" style="width: 200px; height: 200px">
                        <small class="">Choose Image</small>
                        </label>
                        <input type="file" form="reg-form" name="profileUpload" id="upload-profile" class="img">
                    </div>
                </div>
                <div class="form-container">
                    <form action="signup.php" method="post" enctype="multipart/form-data" id="reg-form" name="singup" >
                        <div class="form-row">
                                <input type="text" value="<?php if(isset($_POST['userName'])) echo $_POST['userName'];  ?>" name="userName" id="userName" placeholder="User Name">
                                <small id="username_error"></small>  
                        </div>

                        <div class="form-row">
                                <input type="text" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>"  name="email" id="email" placeholder="Email*">
                                <small id="email_error"></small>
                        </div>


                        <div class="form-row">
                            <input type="text" value="<?php if(isset($_POST['moblie'])) echo $_POST['moblie'];  ?>" name="moblie" id="moblie" placeholder="Mobile Number*" >
                            <small id="mobile_error"></small>
                        </div>

                        <div class="form-row">
                                <input type="password" name="password" id="password" placeholder="password*">
                                <small id="pass_error"></small>
                        </div>

                        <div class="form-row">
                                <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password*">
                                <small id="conpass_error"></small>
                                <small id="confirm_error"></small>
                        </div>

                        <div class="btn">
                            <button type="button" onClick="validateform()">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>


<?php include ('footer.php');?>