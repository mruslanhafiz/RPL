<!doctype html>

<html>
  
  <head>
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  
  <body>

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
       <form method="post" accept-charset="utf-8" action="<?php echo site_url("HomeController/updatePC"); ?>">
        <select class="form-control" name="dropdown" onchange="this.form.submit()">
        <option></option>
        <?php
        $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        $result = mysqli_query($con,"select nama_pc from data_pc where booked=0");
        while ($row = mysqli_fetch_array($result))
        {
          echo "<option>" . $row['nama_pc'] . "</option>";
        }
        //$selected_value = $this->input->post('dropdown');
        /*
        //echo "<option>" . $row->description . "</option>";
        foreach($groups as $row)
        {
          echo "<option>" . $row->body . "</option>";
        } $selected_value = $this->input->post('dropdown');
        */?>
      </select><br>
      <div class="container">
      <nav>
        <div class="panel panel-default">
          <div class="panel-heading">
            <a href= <?php echo "bookings"; ?>  class="btn btn-block btn-success" >Pinjam</a>
          </div>
        </div>
      </nav>
    </form>
    </div>
    <div class="container">
        </form>
        
      </nav>

      <nav>   
       <form method="post" accept-charset="utf-8" action="<?php echo site_url("HomeController/updatePC"); ?>">
        <select class="form-control" name="dropdown">
        <option></option>
        <?php
        $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        $result = mysqli_query($con,"select nama_pc from data_pc where booked=0");
        while ($row = mysqli_fetch_array($result))
        {
          echo "<option>" . $row['nama_pc'] . "</option>";
        }
        //$selected_value = $this->input->post('dropdown');
        /*
        //echo "<option>" . $row->description . "</option>";
        foreach($groups as $row)
        {
          echo "<option>" . $row->body . "</option>";
        } $selected_value = $this->input->post('dropdown');
        */?>
      </select>
      <div class="container">
      <nav>
        <div class="panel-body">
            <input type="submit" class="btn btn-primary btn-block" value="Submit">
          </div>
        </div>
      </nav>
    </form>
    </div>
    <div class="container">
        </form>
        
      </nav>
      <nav>   
       <form method="post" accept-charset="utf-8" action="<?php echo site_url("HomeController/updatePC"); ?>">
        <select class="form-control" name="dropdown" onchange="this.form.submit()">
        <option></option>
        <?php
        $con=mysqli_connect("localhost","root","root","rpl");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect : ". mysqli_connect_error();
        }
        $result = mysqli_query($con,"select nama_pc from data_pc where booked=0");
        while ($row = mysqli_fetch_array($result))
        {
          echo "<option>" . $row['nama_pc'] . "</option>";
        }
        //$selected_value = $this->input->post('dropdown');
        /*
        //echo "<option>" . $row->description . "</option>";
        foreach($groups as $row)
        {
          echo "<option>" . $row->body . "</option>";
        } $selected_value = $this->input->post('dropdown');
        */?>
      </select><br>
      <div class="container">
      <nav>
        <div class="panel panel-default">
          <div class="panel-footer">
            <a class="btn btn-block btn-danger">Hapus</a><a></a>
          </div>
        </div>
      </nav>
    </form>
    </div>
    <div class="container">
        </form>
        
      </nav>
    </div><br>
    
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
