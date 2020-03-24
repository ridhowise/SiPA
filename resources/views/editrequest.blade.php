<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
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
        <div class="panel-heading">Form request Edit</div>
        <div class="panel-body">
            <form class="form-horizontal" action=""  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $request->id }}">
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="{{ $request->nama }}">
                  </div>
                </div>
               

                <div class="form-group">
                  <label class="control-label col-sm-2">Nama Aplikasi:</label>
                  <div class="col-sm-10">          
                    <textarea class="form-control" name="namaaps">{{ $request->namaaps }}</textarea>
                  </div>
                </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">Penjelasan Singkat:</label>
                    <div class="col-sm-10">          
                      <textarea class="form-control" name="penjelasan">{{ $request->penjelasan }}</textarea>
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2">Lampiran: (Word/PDF/Gambar)</label>
                      <div class="col-sm-10">          
                        <textarea class="form-control" name="lampiran">{{ $request->lampiran }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2">Status:</label>
                      <div class="col-sm-10">
                        @if($request->status == null)
                        <div class="radio">
                        <label><input type="radio" name="status" value="1" >Diterima</label>
                        </div>
                        <div class="radio">
                        <label><input type="radio" name="status" value="0" >Ditolak</label>
                        </div>
                        @elseif($request->status == 1)
                        <div class="radio">
                        <label><input type="radio" name="status" value="1" checked >Diterima</label>
                        </div>
                        <div class="radio">
                        <label><input type="radio" name="status" value="0" >Ditolak</label>
                        </div>
                        @else
                        <div class="radio">
                        <label><input type="radio" name="status" value="1">Diterima</label>
                        </div>
                        <div class="radio">
                        <label><input type="radio" name="status" value="0" checked >Ditolak</label>
                        </div>
                        @endif
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-sm-2">Keterangan: </label>
                      <div class="col-sm-10">          
                        <textarea class="form-control" name="keterangan">{{ $request->keterangan }}</textarea>
                      </div>
                    </div>

                    @foreach ($request->requirements as $requirement)
                    <div class="form-group">
                      <label class="control-label col-sm-2">Syarat: </label>
                      <input type="hidden" name="ids[]" value="{{ $requirement->id }}">
                      <div class="col-sm-8">          
                        <textarea class="form-control" name="syarat[]">{{ $requirement->syarat }}</textarea>
                      </div>
                      @if($requirement->checkbox == 1)
                        <input type="checkbox" name="checkbox[]" checked>
                      @else
                        <input type="checkbox" name="checkbox[]">
                      @endif
                    </div>
                    @endforeach


                  
                



                <!-- <div class="form-group">
                  <label class="control-label col-sm-2">Foto:</label>
                  <div class="col-sm-10">          
                    <input type="file" name="foto">
                  </div>
                </div> -->
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>