$('#mainform').submit(function(e){
  e.preventDefault();
  var url = $("#mainform").attr('action');
  var $success=$('.success');
  $.ajax({
      type:"post",
      url:url,
      data: $('#mainform').serializeArray(),
      success: function(data){
             $success.css({'display':'block','marginTop':'2em'});
             $('.main-form-header').css("display","none");
             $('.main-form-body').css("display","none");
             $('.main-form-container').append($success);
      },
	  error: function(){
		  alert("connection error");
	  }
  });

});
