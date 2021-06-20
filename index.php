<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UAS WEB 7 - Heroku</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Heroku">
  <meta name="author" content="AhmadAbuHasan">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
</head>
<body>
  
  <center><font color="red" size="119"><b>H E R O K U</b></font></center>
  <div align="center">
    <h3>CRUD Heroku with Postgresql<br>jancukers.com</h3>
      <p><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d F Y H:i:s'); 
      ?></p>
    <table border="1" width="700px">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Name</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <tr>
          <td style="text-align: center;"><?php echo $no++; ?></td>
          <td>11722711</td>
          <td>John</td>
          <td>New York</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
