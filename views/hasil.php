<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Kalkulator Sederhana</h1> <br><br><br>
    <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/kalkulator">
        <input type="text" name="angka1"> <select name="operasi">
            <option>  </option>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
            <option value="kali">*</option>
            </select>
        <input type="text" name="angka2"><br><br>
        <input type="submit" name="submit" value="hasil">
    </form>
    <br><br><br><br>
    <?php
    if(isset($hasil)){
        echo "<H1>hasil dari operasi diatas adalah</H1>";
    
     echo $hasil; 
    }

    ?>

</body>
</html>



