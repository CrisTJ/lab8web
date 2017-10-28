$("#loginform").on('submit', function(e){
  e.preventDefault();
  validateLog();
});

function validateLog(){
  //validation of credentials
  var valUsername = $('#logUsername').val();
  var valPassword = $('#logPassword').val();

  if( valUsername != "" && valPassword != ""){

    var jsonSend = {
      "uName" : valUsername ,
      "uPassword" : valPassword,
      "rememberMe" : $("#rememberMe").is(":checked"),
      "action": "login"
    };
    $.ajax({
      url: "./PHP/appLayer.php",
      type: "POST",
      data : jsonSend,
      ContentType : "application/json",
      dataType: "json",
      success: function(response){
        window.location.href = "home.php";
      },
      error: function (errorMS){
        alert("Please make sure your credentials are correct " + errorMS.statusText);
      }
    });
  }
  else{
    text = "Please make sure your credentials are correct";
  }
 }

 function loadCookie(){
   var jsonSend = {
     "action" : "checkForCookie"
   };
   $.ajax({
     url: "./PHP/appLayer.php",
     type: "POST",
     data: jsonSend,
     ContentType: "application/json",
     dataType:"json",
     success: function(response){
       console.log(response);
       $('#logUsername').val(response.uName);
       $(".checkForCookie").attr('checked','checked');
     },
     error:function(errorMS){
       console.log("The cookie does not exist or has expired")
     }
   });
  }


 $(document).ready(loadCookie);
