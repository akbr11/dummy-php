<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background: #c9ccd1;">
  <div class="container">
    <div class="row vh-100 bg-white p-5 mt-5 mb-5 mx-auto">
      <div class="row">
        <div class="col-md-6 col-sm-3 my-auto ">
          <img src="https://images.unsplash.com/photo-1661950571114-35f6979f7eb0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-fluid" alt="akmdks">
        </div>
        <div class="col-md-6 col-sm-3 my-auto >
          <form action="" method="GET">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="button" name="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script lang="Javascript">
    var email = document.getElementsByName("email").values;
    var password = document.getElementsByName("password").values;

    document.getElementById("submit").addEventListener("click", function(){
      if(email == "admin" && password == "admin") {
        alert("berhasil");
      } else {
        alert("Gagal");
      }

    });

  </script>

  <?php
  // $email = 'admin';
  // $password = 'admin';

  // if (isset($_POST['submit'])) {
  //   if ($_POST['email'] == $email && $_POST['password'] == $password) {
  //     echo "<script>alert('berhasil login');</script>";
  //   } else {
  //     echo "<script>alert('gagal');</script>";
  //   }
  // }
  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>