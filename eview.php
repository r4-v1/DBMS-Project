<?php

  $con = mysqli_connect('localhost','root','root','dbms');
  $sql = " SELECT * FROM events";
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
        Viewing Event Information
      </div>
      <button onclick="window.location.href='home.php';" type="button" class="vbutton" name="button">Go back</button>
    </div>

    <table class="contenttable">
      <thead>
        <tr>
          <th>Event Name</th>
          <th>Event ID</th>
          <th>Club ID</th>
          <th>Host Year</th>
          <th>Ratings</th>
          <th>Action</th>
          <th>Action</th>

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
            <td><?php echo $rows['ename'];?></td>
            <td><?php echo $rows['e_id'];?></td>
            <td><?php echo $rows['c_id'];?></td>
            <td><?php echo $rows['year'];?></td>
            <td><?php echo $rows['rating'];?></td>
            <td><a href="edelete.php?e_id=<?php echo $rows['e_id']; ?>">Delete</a></td>
            <td><a href="eupdate.php?e_id=<?php echo $rows['e_id']; ?>">Update</a></td>
        </tr>
        <?php
            }
        ?>
      </tbody>

    </table>


    </div>
  </body>
</html>
