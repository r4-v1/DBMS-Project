<?php

  $con = mysqli_connect('localhost','root','root','dbms');
  $sql = " SELECT * FROM members";
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
        Viewing the team members data
      </div>
      <button onclick="window.location.href='home.php';" type="button" class="vbutton" name="button">Go back</button>
    </div>

    <table class="contenttable">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Member Name</th>
          <th>Club ID</th>
          <th>Event Name</th>
          <th>Event ID</th>
          <th>Member Role</th>
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
            <td><?php echo $rows['m_id'];?></td>
            <td><?php echo $rows['mname'];?></td>
            <td><?php echo $rows['c_id'];?></td>
            <td><?php echo $rows['ename'];?></td>
            <td><?php echo $rows['e_id'];?></td>
            <td><?php echo $rows['role'];?></td>
            <td><a href="mdelete.php?m_id=<?php echo $rows["m_id"]; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
      </tbody>

    </table>


    </div>
  </body>
</html>
