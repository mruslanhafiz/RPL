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
  <?php 
  
                          
  ?>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Peminjaman PC</h1>
        <p class="text-success">Laboratorium RPL</p>
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
            echo "<td>" . $row['booked'] . "</td>";
            echo "<td>" . $row['booked_by'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "</tr>";
            $num++;
          }
          echo "</tbody>";
          echo "</table>";

          mysqli_close($con);
          ?>
      </nav>
      <div class="panel panel-default"></div>
    </div>
    <div class="container">
      <nav>
        <div class="progress active progress-info progress-striped">
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
      <div class="alert alert-warning alert-dismissable">Copyright RPL 2014
        <button type="button" class="close" data-dismiss="alert"></button>
      </div>
    </div>
  </body>

</html>