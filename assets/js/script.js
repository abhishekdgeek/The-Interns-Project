$(function(){
  $('#followbtn').on('click', function(e){
    e.preventDefault();
    $('#followbtn').fadeOut(300);
	var fname = $("#fname").val();
    var lname =	$("#lname").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var dataString = 'fname='+ fname + '&lname='+ lname + '&email=' + email + '&password=' + password;
    $.ajax({
      url: 'signup.php',
      type: 'post',
      data: dataString,
	  
      success: function(data, status) {
		  console.log("congo", data);
		  console.log("status", status);
          //if(data == "ok") {
          document.getElementById("demo").innerHTML= (data);
		  //document.getElementById("demo").innerHTML="congo";
		  //console.log("congratulations");
          return false;
        //}
      },
      error: function(err) {
		  document.getElementById("demo").innerHTML= (data);
        console.log("this email has already been registered");
       }
    });
  });
});

$(function(){
  $('#followbtn1').on('click', function(e){
    e.preventDefault();
    $('#followbtn1').fadeOut(300);
	var email1 = $("#email1").val();
	var password1 = $("#password1").val();
	var dataString = 'email1=' + email1 + '&password1=' + password1;
    $.ajax({
      url: 'signin.php',
      type: 'post',
      data: dataString,
	  
      success: function(data, status) {
		  console.log("congo", data);
		  console.log("status", status);
          //if(data == "ok") {
          document.getElementById("demo1").innerHTML= (data);
		  //document.getElementById("demo").innerHTML="congo";
		  //console.log("congratulations");
          return false;
        //}
      },
      error: function(err) {
		  document.getElementById("demo").innerHTML= (data);
        console.log("this email has already been registered");
       }
    });
  });
});
   
   $(selector).after("<img src='assets/images/pre.gif' />");
$(selector).bind('click', function () {
    var spinner = $("<img src='assets/images/pre.gif' />").insertAfter(this);

    jQuery.ajax({
        success: function (response) {
            // handle response

            spinner.remove();
			 $('#loading').hide();
			
        });
    });
});