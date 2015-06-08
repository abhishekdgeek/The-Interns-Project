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
   