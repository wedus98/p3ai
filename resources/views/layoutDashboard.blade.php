<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fa.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">

    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/selectize.css')}}" rel="stylesheet">


    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle colla
psed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">P3AI DASHBOARD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   
                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                   
                </ul>
        
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{url('dashboard')}}">Overview <span class="sr-only">(current)</span></a></li>
            <li ><a href="{{url('dashboard/news')}}">News Update</a></li>
            <li><a href="{{url('dashboard/dosen')}}">Data Dosen</a></li>
            <li><a href="#">Data Serdos</a></li>
            <li><a href="#">Data Kegiatan</a></li>
            <li><a href="{{url('dashboard/jurusan')}}">Jurusan</a></li>
            <li><a href="{{url('dashboard/pangkat')}}">Pangkat</a></li>
            <li><a href="{{url('dashboard/golongan')}}">Golongan</a></li>



          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"> @yield('page-header')</h1>
          @if (session()->has('flash_notification.message'))
            <div class="container">
            <div class="alert alert-{{ session()->get('flash_notification.level')}}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('flash_notification.message') }}
            </div>
            </div>
            @endif
      
            @yield('content')
       
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
 
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{asset('js/holder.min.js')}}"></script>
    <script src="{{asset('js/allinone/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/selectize.js')}}"></script>
    
    <script src="{{asset('js/app.js')}}"></script>
    
  </body>
</html>
