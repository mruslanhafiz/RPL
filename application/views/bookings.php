<!doctype html>

<html>
  
  <head>
    <title>New Page</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <div class="container">
      <h1>Book Form</h1>
      <form action= <?php /*
      $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        mysqli_query($con,"insert into data_pc 
          (nama_user, hp_user, email_user, tanggal_pinjam)
          values ('" . $nama . "','" . nama . "','" . nama . "','" . nama . "','" . nama . "');");
      echo "main"*/?>>
      <div class="form-group">
        <label class="control-label">Nama</label>
        <div class="controls">
          <input type="text" class="form-control" name="nama">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">NRP</label>
        <div class="controls">
          <input type="text" class="form-control" name="nrp">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">No.HP</label>
        <div class="controls">
          <input type="text" class="form-control" name="hp">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Email</label>
        <div class="controls">
          <input type="text" class="form-control" name="email">
        </div><br>
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </div>
    </form>
    </div>
  </body>

</html>