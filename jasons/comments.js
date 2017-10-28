

function onloaded(){
  $.ajax({
      url:"PHP/valSession.php",
      type:"POST",
      dataType: "json",
      success:function(jsonFile) {
        if(jsonFile.session == "TRUE") {
          LoadComments();
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
function LoadComments(){
  $.ajax({
        url: "./PHP/appLayer.php",
        type: "POST",
        data : {"action":"loadComments"},
        ContentType : "application/json",
        dataType: "json",
        success: function(result){
            console.log(result);
            var newHtml = "<div>";
            result.forEach(function(resultCount){

                newHtml += '<div> <p align= left> Contact: ' + resultCount.uName + "</p></div>";
                newHtml += "<div>" + resultCount.comment + "</div>";

            });
            newHtml += "</div>";
            //console.log(newHtml);
            $("#comments").append(newHtml);
        },
        error: function (errorMS){
          alert("Not able to load Comments " + errorMS.statusText);
        }
        /*complete: function(jsonA){
          console.log(jsonA);
        }*/
    });
  }

var btnComment = $("#send");
function AddComment(){
  var val = $("#message");
  if(val.val() != ""){
    var jsonSend = {
          "text" : val.val(),
          "action": "addComment"
    };
  $.ajax({
        url: "./PHP/appLayer.php",
        type: "POST",
        data : jsonSend,
        ContentType : "application/json",
        dataType: "json",
        success: function(jasonfile){
          $("#comments").empty();
          LoadComments();
          val.val("");
        },
        error: function (errorMS){
          alert("Failed to upload new comment" + errorMS.statusText);
        }
    });
  }
}
/*
function logOut(){
  var jsonSend = {
        "action": "logout"
  };
  $.ajax({
    url: "./PHP/appLayer"
    type: "POST",
    data : jsonSend,
    ContentType : "application/json",
    dataType: "json",
    complete: function(jasonfile){
      console.log(jasonfile);
    }
  });
}
*/

$(document).ready(onloaded);
btnComment.click("on", AddComment);
