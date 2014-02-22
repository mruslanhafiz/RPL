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
      <h1>Update PC</h1>
      <?php echo form_open('UpdateController/updatePC_validaton'); ?>
      <div class="form-group">
        <label class="control-label">Nama PC</label>
        <div class="controls">
          <input type="text" class="form-control" name="nama">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Spesifikasi</label>
        <div class="controls">
          <input type="text" class="form-control" name="spek">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Pemilik&nbsp;</label>
        <div class="controls">
          <input type="text" class="form-control" name="pemilik">
        </div>
      </div>
      <div class="form-group">
        <br>
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </div>
    </div>
  </body>

</html>