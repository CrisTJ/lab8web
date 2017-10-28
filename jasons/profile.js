function onloaded(){
  $.ajax({
      url:"PHP/valSession.php",
      type:"POST",
      dataType: "json",
      success:function(jsonFile) {
        if(jsonFile.session == "TRUE") {
          LoadProfile();
        }
        else if (jsonFile.session == "FALSE") {
          alert("Session has Expired, please login again");
          window.location.href = "login.php";
        }

      },
      error:function(errorMsg) {
        console.log("Sorry! There was an error");
      }
  });
}
function LoadProfile(){
    $.ajax({
          url: "./PHP/appLayer.php",
          type: "POST",
          data : {"action":"loadProfile"},
          ContentType : "application/json",
          dataType: "json",
          success: function(jason){
              console.log(jason);
              jason.forEach(function(jasonfile) {
                $("#userProfile").append(jasonfile.username);
                $("#nameProfile").append(jasonfile.fname + " " + jasonfile.lname);
                $("#emailProfile").append(jasonfile.email);
                $("#GenderProfile").append(jasonfile.gender);
                $("#CountryProfile").append(jasonfile.country);
              })
          },
          error: function (errorMS){
            console.log(errorMS);
            alert("Not able to load Profile " + errorMS.statusText);
          }
      });
}
$(document).ready(onloaded);
