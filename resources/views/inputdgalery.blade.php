<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Form Gambar</div>
        <div class="panel-body">
            <form class="form-horizontal" action=""  method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                
                <div class="form-group">
                  <label class="control-label col-sm-2">Pilih Gambar:</label>
                  <div class="col-sm-10">          
                    <input type="file" name="gambarone">
                  </div>
                </div> 
                <!-- <div class="form-group">
                  <label class="control-label col-sm-2">Gambar 2:</label>
                  <div class="col-sm-10">          
                    <input type="file" name="gambartwo">
                  </div>
                </div>  -->

                <div class="form-group">
                  <label class="control-label col-sm-2">Keterangan:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="data_title" >
                  </div>
                </div>

                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Masukkan</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>