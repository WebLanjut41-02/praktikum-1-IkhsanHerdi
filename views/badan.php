<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table border="2">
  <tr>
    <td><b>Username</b></td>
    <td><b>Password</b></td>
  </tr>
  <?php

$user =  $this->session->user;

for ($i=0; $i < count($user) ; $i++) { 
  echo "<tr><td>".$user[$i]['username']."<td>";
  echo $user[$i]['password']."<tr>";
}

?>
    

</table>
</body>
</html>