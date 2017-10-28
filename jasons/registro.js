
var regButton = $('#register');
regButton.click("on", validateReg);

function validateReg(){
  //validation of country
  if( $("#Country").val() != "0")
  {
    alert( "Please provide your country!" );
  }
   //validation of gender
   var fem = $('#regF');
   var masc = $('#regM');
   var gender;
   var x = 0;
   if( fem.is(":checked")){
     x++;
     gender = 'F';}
   if( masc.is(":checked")){
     x++;
     gender = 'M';}
   if(x==0){alert('Select Male/Female')}

   var jsonSend = {
        "fName" : $('#regName').val(),
        "lName" : $('#regLastN').val(),
        "uName" : $('#regUser').val(),
        "uPassword" : $('#regPassword').val(),
        "uEmail" : $('#regEmail').val(),
        "uGenero": gender,
        "uCountry": $('#Country option:selected').text(),
        "action": "register"
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
      alert("Sorry, registration was not succecful  " + errorMS.statusText);
    }
  });
}
