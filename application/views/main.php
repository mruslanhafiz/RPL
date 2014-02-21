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
    <?php //pembuka tag php
  /*if(isset($_POST['btLogin'])) //memeriksa apakah btLogin telah diberi nilai sebelumnya.
  {
    echo $_POST['username']; //mencetak nilai yang telah dimasukkan user ke textbox username pada halaman login
  }
  else header("Location:login?status=blmlgn"); //jika btLogin belum pernah ditekan (belum login), 
    */                      // maka akan redirect ke halaman login.
?>

    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Peminjaman PC</h1>
        <?php
        $sess = $this->session->userdata('username');
        echo "<h3>".$sess."</h3>";
        echo "<pre>";
        print_r ($this->session->all_userdata());
        echo "</pre>";
        ?>
        
        <a href='<?php echo base_url()."LoginController/logout" ?>' >logout</a>
        <p class="text-success">Laboratorium RPL</p>
        <div class="alert alert-warning" style>
           <b>BETA </b> 
        </div>
        <p></p>
      </div>
    </div>
    <div class="container">
      <nav>
        <?php
        $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        $result = mysqli_query($con,"select * from data_pc");
        
        echo "<table class='table table-hover table-bordered'>
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Spesifikasi</th>
              <th>Owner</th>
              <th>Booked</th>
              <th>Booked By</th>
              <th>State</th>
            </tr>
          </thead>";
          echo "<tbody>";
          $num = 1;
          while ($row = mysqli_fetch_array($result))
          {
            if($row['booked'] == 1)
            {
              $temp_book = "Yes";
            }
            else
            {
              $temp_book = "No";
            }
            if($row['state'] == 1)
            {
              $temp_state = "Online";
            }
            else
            {
              $temp_state = "Offline";
            }
            echo "<tr>";
            echo "<td>" . $num . "</td>";
            echo "<td>" . $row['nama_pc'] . "</td>";
            echo "<td>" . $row['spek'] . "</td>";
            echo "<td>" . $row['owner'] . "</td>";
            echo "<td>" . $temp_book . "</td>";
            echo "<td>" . $row['booked_by'] . "</td>";
            echo "<td>" . $temp_state . "</td>";
            echo "</tr>";
            $num++;
          }
          echo "</tbody>";
          echo "</table>";

          mysqli_close($con);
          ?>

      </nav>
      <nav>
        <?php
        $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        $result = mysqli_query($con,"select nama_pc from data_pc where booked=0");

        echo "<select class='form-control'>";
        echo "<option></option>";
        while($row = mysqli_fetch_array($result))
        {
          echo "<option>" . $row['nama_pc'] . "</option>";
        }
        ?>
        </select>
        <input type="hidden" name="country" id="country_hidden">

        <script>
          $(document).ready(function() {
            $("#itemType_id").change(function(){
              $("#country_hidden").val(("#itemType_id").find(":selected").text());
            });
          });
        </script>
      </nav>
    </div><br>
    <div class="container">
      <nav>
        <div class="panel panel-default">
          <div class="panel-heading">
            <a href= <?php echo "bookings"; ?> class="btn btn-block btn-success">Pinjam</a>
          </div>
          <div class="panel-body">
            <a href= <?php echo "updatePC"; ?> class="btn btn-primary btn-block">Update</a>
          </div>
          <div class="panel-footer">
            <a class="btn btn-block btn-danger">Hapus</a><a></a>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <aside>
        <a href= <?php echo "tambahPC"; ?> class="btn btn-block btn-warning">Tambah PC</a>
      </aside>
    </div><br>
    <div class="container">
      <nav>
        <div class="progress active progress-striped progress-info">
          <div class="progress-bar"></div>
        </div>
      </nav>
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>4 of 10 PC used</b>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="alert alert-dismissable alert-info">Copyright RPL 2014
        <button type="button" class="close" data-dismiss="alert"></button>
      </div>
    </div>
  </body>

</html>