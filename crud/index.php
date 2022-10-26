<?php 
include_once "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM `data-user`");
// var_dump($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="tambah-data.php">Tambah User</a>
  <?php if (isset($_GET['status'])): ?>
    <?php
    if ($_GET['status'] == 'sukses') {
      echo "<script>alert('Data berhasil ditambahkan.')</script>";
    } else if($_GET['status'] == 'update') {
      echo "<script>alert('Data berhasil diubah.')</script>";
    } else if($_GET['status'] == 'hapus'){
      echo "<script>alert('Data berhasil dihapus.')</script>";
    } else {
      echo "<script>alert('Data gagal ditambahkan.')</script>";
    }
    ?>
  <?php endif; ?>
  <table width="50%" border="1">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        while($obj = mysqli_fetch_array($query)){
          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $obj['nama'] ?></td>
            <td><?= $obj['email'] ?></td>
            <td><?= $obj['pesan'] ?></td>
            <td>
              <a href="form-edit.php?id=<?= $obj['id'] ?>">Edit</a>
              <a href="delete.php?id=<?= $obj['id'] ?>">Hapus</a>
            </td>
          </tr>
      <?php
          $no++;
          }
        ?>
    </tbody>
  </table>
</body>

</html>