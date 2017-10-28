
function loadFriendRequests(){
  $.post(
    "./PHP/appLayer.php", // URL
    {"action":"loadFriendRequests"}, // data
    function(response){ // callback function
      if(response.success) {
        console.log(response);
        var newHtml = "<div>";
        response.data.forEach(function(friendRequest){
          newHtml += "<div>" + "First Name: " + friendRequest.fname + "</div>";
          newHtml += "<div>" + "Last Name: " + friendRequest.lname + "</div>";
          newHtml += "<div> <button class='acceptFriendButton' data-id='" + friendRequest.uname + "' type='button'>Accept Friend Request</button> <button class='rejectFriendButton' data-id='"+ friendRequest.uname +"' type='button'>Cancel Friend Request</button></div>";
        });
        newHtml += "</div>";
        $("#friendResults").append(newHtml);
        $(".acceptFriendButton").click(acceptFriendRequest);
        $(".rejectFriendButton").click(rejectFriendRequest);
      }
    },
    'json'// dataType (this means we're sending a JSON payload (data) and expecting a JSON response)
  );
}
function acceptFriendRequest(event){
//friend is NOT an element, it is a STRING!
  var friend = $(event.target).data("id");
  $.post(
    "./PHP/appLayer.php", // URL
    {"data" : friend,
    "action":"acceptFriendRequest"}, // data
    function(response){
      //success es un elemento del response array
      if(response.success){
        //console.log(response);
        alert("You have a new friend!");
        $(event.target).parent().parent().parent().fadeOut();
      }
      else{
        alert("Please try again later :/");
      }
    }
  )
}
function rejectFriendRequest(event){
  var friend = $(event.target).data("id");
  $.post(
    "./PHP/appLayer.php", // URL
    {"data" : friend,
    "action":"cancelFriendRequest"}, // data
    function(response){
      //success es un elemento del response array
      if(response.success){
        //console.log(response);
        alert("You have declined a friend request!");
        $(event.target).parent().parent().parent().fadeOut();
      }
      else{
        alert("Please try again later :/");
      }
    }
  )
}
$(document).ready(loadFriendRequests);
