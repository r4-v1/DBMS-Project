<?php

  $con = mysqli_connect('localhost','root','root','dbms');
  $sql = " SELECT * FROM leader";
  $result = $con->query($sql);
  $con->close();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="vheader">
      <div class="vheading">
        Here find all the existing Leaders
      </div>
      <button onclick="window.location.href='home.php';" type="button" class="vbutton" name="button">Go back</button>
    </div>

    <table class="contenttable">
      <thead>
        <tr>
          <th>Leader ID</th>
          <th>Leader Name</th>

        </tr>
      </thead>
      <?php
          // LOOP TILL END OF DATA
          while($rows=$result->fetch_assoc())
          {
      ?>
      <tbody>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['l_id'];?></td>
            <td><?php echo $rows['lname'];?></td>
        </tr>
        <?php
            }
        ?>

      </tbody>

    </table>


    </div>
  </body>
</html>
