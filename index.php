<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UAS WEB 7</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div align="center">
    <h3>Collaboration Heroku with 000webhost</h3>
    <?php
      date_default_timezone_set('Asia/Jakarta');
      echo date('d F Y H:i:s'); 
    ?>
    <p><a href="add.php">Add Data</a></p>
    <table border="" width="">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>TTL</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        $query = $conn->query("SELECT * FROM tugas_data");
        while ($data = $query->fetch_assoc()) {
        ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>
