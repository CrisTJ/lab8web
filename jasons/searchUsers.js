var searchButton = $('#searchButton');
searchButton.on("click", searchUsers);

function searchUsers(){
  console.log("hey");
  var friend = $('#searchText').val();

  var jsonSend = {
    "friend" : friend,
    "action" : "doSearchUsers"
  };
  $.ajax({
    url: "./PHP/appLayer.php",
    type: "POST",
    data : jsonSend,
    ContentType : "application/json",
    dataType: "json",
    success: function(response){
      $("#searchResults").html("");//deja que unicamente salga una vez la busqueda
      var newHtml = "<div>";
      response.forEach(function(friend){
        newHtml += '<div>' + "Username: " + friend.username + "</div>";
        newHtml += "<div>" + "First Name: " + friend.fname + "</div>";
        newHtml += "<div>" + "Last Name: " + friend.lname + "</div>";
        newHtml += "<div>" + "Email: " + friend.email + "</div>";
        newHtml += "<div> <button class='addFriendButton' data-id='" + friend.username + "' type='button'>Send Friend Request</button></div>"

      })
      newHtml += "</div>";
      $("#searchResults").append(newHtml);
      // functionName(): function invocation
      $('.addFriendButton').click(function(event){
        addFriend( $(this).data('id'));
        $(this).attr('data-id');
      });
    },
    error: function (errorMS){
      alert("Sorry, the search was not succesful  " + errorMS.statusText);

    },
    complete: function(error) {
      console.log(error);
    }

  });
}

function addFriend(idNewFriend){
  var jsonsendfriendr = {
    "idNewFriend" : idNewFriend,
    "action" : "sendFriendRequest"
  };

  $.post("./PHP/appLayer.php", jsonsendfriendr, function(response){
    console.log(response);
    if(response.success){
      alert('Friend request sent to: ' + idNewFriend);
    }
    else{
      alert('Failed to send request');
    }
  }, 'json')
  .fail(function(){
    alert('Failed to send request');
    console.error("Could not complete your request! :O")
  });

}
