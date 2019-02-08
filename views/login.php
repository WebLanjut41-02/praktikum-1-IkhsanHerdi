

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Log-In</h2>
  <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Welcome/cek">
    <div class="form-group">
      <label class="control-label col-sm-2" >Username : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password : </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      Submit : <input type="submit" class="btn btn-default" name="submit" value="Login">
      </div>
    </div>
  </form>
</div>

</body>
</html>
