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
      url: 'signup1.php',
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
   