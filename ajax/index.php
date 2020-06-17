
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<?php include_once('sql.php')?>
<div class="main-contact-form-container">
    <div class="main-form-container">
        <div class="main-form-header">
            <h1>Get in touch</h1>
        </div>
    <form action="maincontactform.php" method="post" id="mainform">
        <div class="main-form-body">
            <div class="name">
                <div class="fname">
                    <label for="fname" id="main">First Name</label>
                    <input type="text" name="fname">
                </div>
                <div class="lname">
                    <label for="lname" id="main">List Name</label>
                    <input type="text" name="lname">
                </div>
            </div>
            <div class="contact-details">
                <div class="phone">
                    <label for="phone" id="main">Phone Number</label>
                    <input type="number" name="phone">
                </div>
                <div class="mail">
                    <label for="mail" id="main">Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <label for="msg" id="main">Message</label>
            <input type="text" name="msg">
            <input type="submit" value="SUBMIT YOUR QUERY" name="sendQuery">
        </div>
		    <div class="success">
            <h1>Thanks for your message, We will get back to you shortly</h1>
			
        </div>
    </form>
    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="script/script.js"></script>
</body>
</html>