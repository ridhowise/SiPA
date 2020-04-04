<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengajuan Aplikasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://rawcdn.githack.com/ridhowise/SiPA/6784f72a4be2f11859329ec81de5d49609acbfde/public/assets_dashboard/style.css">

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0;border-radius: 0;border:0;width:100%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
      data-target="#navbar-collapse-main">
        <span class="sr-only">Toogle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="https://rawcdn.githack.com/ridhowise/SiPA/6784f72a4be2f11859329ec81de5d49609acbfde/public/assets_dashboard/img/logo.png"></a>
    </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">


        <ul class="nav navbar-nav navbar-right">
          <ul class="nav navbar-nav">
    <li class="active"><!-- <a href="#">Home</a></li> -->
   <!--  <li><a href="#">Profil</a></li> -->
   <!--  <li><a href="#"></a></li> --> 
    <!-- <li><a href="#">Kontak</a></li>  -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 20px !important;background-color: #273c75; color:#fff;"><i class= "fa fa-user" ></i> {{ Auth::user()->name}}
      <span class="caret"></span></a>
      <ul class="dropdown-menu" style="background-color: #162e46; font-size: 20px">

        {{-- <li><a style="background-color:#162e46" href="/profile">Profile</a></li> --}}
        <li><a style="background-color:#162e46" href="{{ route('logout') }}" onclick="
        event.preventDefault();
        document.getElementById('logout-form').submit()
        " >Logout</a></li>
        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
          {{ csrf_field() }}
        </form>
        <!-- <li><a href="#">CSS</a></li>
        <li><a href="#">Bootstrap</a></li> --> 
      </ul>
    </li>
  </ul>

        <!-- <li><a href="{{ route('logout') }}" onclick="
        event.preventDefault();
        document.getElementById('logout-form').submit()
        " >Logout</a></li>
        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
          {{ csrf_field() }}
        </form> -->
      </ul>
  </div>
</div>
</nav>
  <div class="wrapper">

      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          
            <h3>List Menu</h3>
        </div>

        <ul class="list-unstyled components">

          
          <li  >
            <li >
              <a href="/dashboard"><i class="fa fa-home" style="font-size:24px;color:white;opacity:0.5;"></i>
                 Home </a>
              {{-- <ul class="collapse list-unstyled" id="homeSubmenu">
                  <!-- <li>
                      <a href="#">apa</a>
                  </li>
                  <li>
                      <a href="#">aja</a>
                  </li>
                  <li>
                      <a href="#">boleh</a>
                  </li> -->
              </ul> --}}
          </li>
          <li class="active">
              <a href="/requesta"><i class="fa fa-laptop" style="font-size:24px;color:white;opacity:0.5;"></i> Pengajuan Aplikasi</a>
          </li>
          <li  >
            <a href="/admin"><i class="fa fa-building" style="font-size:24px;color:white;opacity:0.5;"></i> SKPD</a>
        </li>
          
          
              


      </nav>


      <!-- Page Content  -->
      <div id="content">


        <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
              <div class="container-fluid">

                  <button type="button" id="sidebarCollapse" class="btn btn-default">
                      <i class="fa fa-align-left"></i>
                      <span>Toggle Sidebar</span>
                  </button>
              </div>
            </nav>


<br>
<div class="container">
    @if(Session::has('alert'))
    <div class="alert alert-{{Session::get('style')}} alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
        <strong>{{Session::get('alert')}}</strong>{{Session::get('msg')}}
    </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">List Data &nbsp;
        {{-- <a href="inputrequest" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a> --}}
        </div>
        <div class="panel-body">
        <div class="row">
           <div class="col-md-12">
            <div class="container-fluid">
              <form action="/requesta/cari" method="GET">

              <input style="width:30vw;height:34px" type="text" name="cari" placeholder="Cari" value="{{ old('cari') }}">

              <button type="submit" class="btn btn-primary"><i class= "fa fa-search" ></i></button>
              </form>
              <br>

              <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">

                <thead>
                  <tr>
                    <th>Nama SKPD</th>
                    <th>Nama Aplikasi</th>
                    <th>Penjelasan</th>
                    <th>Lampiran</th>
                    <th>Status</th>

                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($bio as $row)
                  <tr>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->namaaps }}</td>
                    <td>{{ $row->penjelasan }}</td>
                    <td>
                      <a href="uploads/{{$row->lampiran}}" download="{{$row->lampiran}}">
                        <button type="button" class="btn btn-primary">
                          <i class="glyphicon glyphicon-download">
                            Download
                          </i>
                         </button>
                      </a>
                    </td>
                    <td>
                      @if ($row->status === '0') 
                      <button type="button" class="btn btn-danger">Ditolak</button>
                      @elseif ($row->status === '1') 
                      <button type="button" class="btn btn-success">Diterima</button>
                      @else
                      <button type="button" class="btn btn-secondary">Menunggu</button>
                      @endif
                    </td>
                    <td>
                        <div class="btn-group">
                          <a href="../editrequest/{{ $row->id }}" type="button" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          <a href="hapusrequesta/{{ $row->id }}"type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </div>
                    </td>
                  </tr>
                @endforeach



                </tbody>
                </div>
            </table>
            </div>
            </div>
            </div>
            </div>
        </div>
        <div style="text-align:center">
        {{ $bio->links() }}
        </div>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>

</html>