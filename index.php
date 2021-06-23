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
  
  <center><font color="red" size="121"><b>H E R O K U</b></font></center>
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
        <tr>
          <td style="text-align: center;"><?php echo $no++; ?></td>
          <td><?php echo $data['nim_data'] ?></td>
          <td><?php echo $data['nama_data'] ?></td>
          <td><?php echo $data['alamat_data'] ?></td>
        </tr>
        <?php ?>
      </tbody>
    </table>
  </div>

<?php
  //echo 'This is Index Page';

  $sql = 'SELECT * FROM tugas_data';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();

  print_r ($details);
?>
  
</body>
</html>
