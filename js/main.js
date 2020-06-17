$(document).ready(function (e) {

    let $uploadfile = $('.sing-form-container .upload-profile-image input[type="file"]');

    $uploadfile.change(function () {
        readURL(this);
    });


});

function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#imagestoupdatepath").attr('src', e.target.result);
            $(".sing-form-container .upload-profile-image .img").attr('src', e.target.result);
            $(".sing-form-container .upload-profile-image .camera-icon").css({display: "none"});
        }

        reader.readAsDataURL(input.files[0]);

    }
}

function validateform(){  
    let name=document.getElementById('userName').value;  
    let mail = document.getElementById('email').value;
    let number = document.getElementById('moblie').value;
    let pass=document.getElementById('password').value;  
    let pass1=document.getElementById('confirm_pwd').value;  
    

    let Space = /[^a-zA-Z0-9]/;
    let pattern=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let phoneno = /^\d{10}$/;
      
    if (name == null || name ==""){ 
        $('#username_error').text("User Name can not be blank");
      return false;  
    }
    
    else if(Space.test(name)) {
        $('#username_error').text('User name can not have blank spaces');
        return false;
    }
    else {
        $('#username_error').text('');
    }
     
    if(mail == null || mail == ''){
        $('#email_error').text('mail id can not be blank');
        return false;
    }
    else if(!pattern.test(mail))
    {
        $('#email_error').text("Please enter a valid email id");
        return false;
    }
    else {
        $('#email_error').text("");
    }
    
    if(number == null || number == ''){
        $('#mobile_error').text("mobile number can not be blank");
        return false;
    }
    else if(!phoneno.test(number)){
        $('#mobile_error').text("Please enter a valid mobile number");
        return false;
    }
    else {
        $('#mobile_error').text("");
    }
    
    if(pass == null || pass == ''){
        $('#pass_error').text("Password can not be blank");
        return false;
    }
    else {
        $('#pass_error').text("");
    }
    if(pass1 == null || pass1 == ''){
        $('#conpass_error').text("Please confirm your password");
        return false;
    }
    else{
        $('#conpass_error').text("");
    }
    if(pass != pass1){
        $('#pass_error').text("Password must be same");
        return false;
    }
    else{
        $('#pass_error').text("");
        $('#reg-form').submit();
    }
   
}

function formvalidation(){
    let maillogin = document.getElementById('email').value;
    console.log(maillogin);
    let pass = document.getElementById('password').value;
    let patternnew=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(maillogin == null || maillogin == ''){
        $('#email_error').text('mail id can not be blank');
        return false;
    }
    else if( !(patternnew.test(maillogin)) )
    {
        console.log("dafsdfasd");
        $('#email_error').text("Please enter a valid email id");
        return false;
    }
    else{
        $('#email_error').text('');
    }
    if( pass == null || pass == ''){
        $('#pass_error').text("Please enter Your password");
    }
    else{
        $('#pass_error').text('');
        $('#log-form').submit();
    }
}