<?php

  include_once 'connect.php';
  if(count($_POST)>0) {
  mysqli_query($con,"UPDATE events set e_id ='" . $_POST['eid'] . "',
  ename='" . $_POST['ename'] . "', c_id='" . $_POST['ecid'] . "'
  , year='" . $_POST['eyear'] . "', rating='" . $_POST['erating'] ."' WHERE e_id='" . $_POST['eid'] . "'");
  }
  $result = mysqli_query($con,"SELECT * FROM events WHERE e_id='" . $_GET['e_id'] . "'");
  $rows=mysqli_fetch_array($result);
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="instyle.css">
</head>
<body>
  <div class="insert-form">
    <div class="inshead">
      <div class="inscontent">
        <h1>Update your events here</h1>
        <span>Input all the new details</span>

      </div>
    </div>


    <div class="container">
      <form name="insform" id="insform" class="insform" method="post" action="">
        <input type="hidden" name="eid" id="eid" value="<?php echo $rows['e_id']; ?>">
        <input type="text" name="ename" id="ename" value="<?php echo $rows['ename']; ?>" />
        <input type="text" name="eid" id="eid" value="<?php echo $rows['e_id']; ?>" />
        <input type="text" name="ecid" id="ecid" value="<?php echo $rows['c_id']; ?>" />
        <input type="text" name="eyear" id="eyear" value="<?php echo $rows['year']; ?>" />
        <input type="text" name="erating" id="erating" value="<?php echo $rows['rating']; ?>"/>
        <button type="submit" id="inscrt" class="inscrt" name="button">Insert</button>
        <button onclick="window.location.href='eview.php';" type="button" class="goback" name="button">Back</button>
      </form>
    </div>

  </div>
</body>
</html>
