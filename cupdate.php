<?php

  include_once 'connect.php';
  if(count($_POST)>0) {
  mysqli_query($con,"UPDATE clubs set c_id ='" . $_POST['cid'] . "',
  l_id='" . $_POST['clid'] . "', cname='" . $_POST['cname'] . "'
  , location='" . $_POST['cloca'] . "', category='" . $_POST['ccateg'] ."' WHERE c_id='" . $_POST['cid'] . "'");
  }
  $result = mysqli_query($con,"SELECT * FROM clubs WHERE c_id='" . $_GET['c_id'] . "'");
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
        <h1>Update your club here</h1>
        <span>Input all the new details</span>

      </div>
    </div>

    <div class="container">
      <form name="insform" id="insform" class="insform" method="post" action="">
        <input type="hidden" name="cid" id="cid" value="<?php echo $rows['c_id']; ?>">
        <input type="text" name="clid" id="clid" value="<?php echo $rows['l_id']; ?>" />
        <input type="text" name="cid" id="cid" value="<?php echo $rows['c_id']; ?>" />
        <input type="text" name="cname" id="cname" value="<?php echo $rows['cname']; ?>" />
        <input type="text" name="cloca" id="cloca" value="<?php echo $rows['location']; ?>" />
        <input type="text" name="ccateg" id="ccateg" value="<?php echo $rows['category']; ?>" />
        <button type="submit" id="inscrt" class="inscrt" name="button">Update</button>
        <button onclick="window.location.href='cview.php';" type="button" class="goback" name="button">Back</button>
      </form>
    </div>

  </div>
</body>
</html>
