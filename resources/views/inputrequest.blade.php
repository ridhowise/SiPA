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
    <div class="panel panel-primary">
        <div class="panel-heading">Form request</div>
        <div class="panel-body">
            <form class="form-horizontal" action=""  method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama SKPD:</label>
                  <div class="col-sm-10">
                    <input type="text" style="width:400px; height:30px;"  name="nama" value="{{ Auth::user()->name}}" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">Nama Aplikasi:</label>
                  <div class="col-sm-10">          
                    <textarea class="form-control" name="namaaps"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Penjelasan singkat:</label>
                  <div class="col-sm-10">          
                    <textarea class="form-control" name="penjelasan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Lampiran (word,pdf,gambar):</label>
                  <div class="col-sm-10">          
                    <input type="file" name="lampiran">
                  </div>
                </div> 
                {{-- <div class="form-group">
                  <label class="control-label col-sm-2">Status:</label>
                  <div class="col-sm-10">          
                    <textarea class="form-control" name="status"></textarea>
                  </div>
                </div> --}}
                
                
                <!-- <div class="form-group">
                  <label class="control-label col-sm-2">Foto:</label>
                  <div class="col-sm-10">          
                    <input type="file" name="foto">
                  </div>
                </div> -->
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button style="background-color:#337ab7;color:white;"type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>