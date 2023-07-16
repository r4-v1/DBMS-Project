<?php

  $con = mysqli_connect('localhost','root','root','dbms');
  $result = mysqli_query($con,"SELECT * FROM clubs");
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
        Viewing your club data
      </div>
      <button onclick="window.location.href='home.php';" type="button" class="vbutton" name="button">Go back</button>
    </div>

    <table class="contenttable">
      <thead>
        <tr>
          <th>Leader ID</th>
          <th>Club ID</th>
          <th>Club Name</th>
          <th>Location</th>
          <th>Category</th>
          <th>Action</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
          // LOOP TILL END OF DATA
          while($rows=mysqli_fetch_array($result))
          {
      ?>
      <tbody>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['l_id'];?></td>
            <td><?php echo $rows['c_id'];?></td>
            <td><?php echo $rows['cname'];?></td>
            <td><?php echo $rows['location'];?></td>
            <td><?php echo $rows['category'];?></td>
            <td><a href="cdelete.php?c_id=<?php echo $rows['c_id']; ?>">Delete</a></td>
            <td><a href="cupdate.php?c_id=<?php echo $rows['c_id']; ?>">Update</a></td>
        </tr>
        <?php
            }
        ?>
      </tbody>

    </table>


    </div>
  </body>
</html>
