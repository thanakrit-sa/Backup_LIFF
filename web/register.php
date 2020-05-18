<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style_profile.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
</head>

<body>
  <?
  $lineID = $_GET['lineID']
  ?>
  <br>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div align="center">
          <h3>Register Panel</h3>
        </div>
        <hr>
        <form action="add_user.php" method="POST">
          <div class="form-group">
            <label>Line ID</label>
            <input type="text" class="form-control" name="lineID" value="<?=$lineID?>" readonly>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Telephone</label>
            <input type="text" class="form-control" name="tel" placeholder="Enter Telephone">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>