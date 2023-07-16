<?php
 $con = mysqli_connect('localhost','root','root','dbms');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="homeheading">
      <div class="header">
        <h4 class="welcome">Welcome User! </h4>
        <h3>You can access your club here</h3>
      </div>
      <button onclick="window.location.href='disconnect.php';" type="button" id="logoutbtn"  name="button">Logout</button>

      </div>
    </div>
    <div class="cardscontainer">
      <div class="cards">
        <div class="card">
          <h4 class="titles">Leaders</h4>
          <h5> Use this to gather information of all the leaders present</h5>
          <button onclick="window.location.href='lview.php';" type="button" id="hbutton" name="hbutton">View Leaders</button>
        </div>
        <div class="card">
          <h4 class="titles">Clubs</h4>
          <h5>Access and fill in the information of the club</h5>
          <button onclick="window.location.href='cinserth.php';" type="button" id="hbutton" name="hbutton">Create Club</button>
          <button onclick="window.location.href='cview.php';" type="button"  id="hbutton" name="hbutton">Edit Club</button>

        </div>
        <div class="card">
          <h4 class="titles">Events</h4>
          <h5>Access and fill in the information of the club events</h5>
          <button onclick="window.location.href='einserth.php';" type="button" id="hbutton" name="hbutton">Add Event</button>
          <button onclick="window.location.href='eview.php';" type="button" id="hbutton" name="hbutton">Edit Events</button>
        </div>
        <div class="card">
          <h4 class="titles">Club Members</h4>
          <h5>Maintain information of all the team members here</h5>
          <button onclick="window.location.href='minserth.php';" type="button" id="hbutton" name="hbutton">Add Member</button>
          <button onclick="window.location.href='mview.php';" type="button" id="hbutton" name="hbutton">Edit Members</button>
        </div>

      </div>

    </div>

  </body>
</html>

