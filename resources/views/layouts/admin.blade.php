<html>
<head>

    <title></title>
    <script src="{{ asset('/public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<style>
    .ul
    { margin:0px;
        padding:0px;
        list-style-type:none;
        list-decoration:none;
        display:block;
        background-color:;


    }
    .ul>li{text-align:center; padding:15px;border:1px solid black ;border-right: 0;}
    .ul>li>a:hover{ text-decoration:none;color:;}
    .ul>li>a{ color:black;font-size:16px}
    .divafterlogin1
    {
        height:750px;
        background-color:;

        margin-top:-20px;
        border: 1px solid rgba(0,0,0,.125);


    }
    .divafterlogin2
    {
        text-align:center;

    }
body
{
    overflow-x: hidden;
}


</style>
<body>

<div class="">
    <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav><br>


<div class="row">
  <div class="col-md-3 col-sm-3 col-xs-3">
    <div class="divafterlogin1" >
        <ul class="ul">
            <li><a href="{{url('/admin')}}" ><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
            <li><a href="{{url('admin/user')}}" ><i class="fas fa-user"></i>  All Users</a></li>
            <li><a href="{{url('admin/user/create_user')}}"><i class="fas fa-user-plus"></i> Create User</a></li>
            <li><a href="home.php?teachers"><span class="glyphicon glyphicon-user"></span>  All Teachers</a></li>
            <li><a href="home.php?teacher_register"><span  class="glyphicon glyphicon-plus-sign"></span>  Register Teacher</a></li>
            <li><a href="logout.php"><span  class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
        </ul>
    </div>
  </div>



    <div class="col-md-9 col-sm-9 col-xs-9">

      @yield('content')

    </div>



</div>





</div>
</body>
</html>
