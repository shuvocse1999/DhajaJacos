<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" type="image/png" href="{{asset('backend')}}/img/logo.png">



    <title>DHAKA JACOS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <link href="{{asset('backend')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="{{asset('backend')}}/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('backend')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('backend')}}/vendor/select2/css/select2.css" rel="stylesheet">
    <link href="{{asset('backend')}}/vendor/date-picker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
    a.router-link-exact-active.router-link-active{
          background: #00b894;
          color: white;
      }
    .form-group label{font-size: 12px; color: #585858}
    .form-group input{height: 45px;border-radius: 0px!important;}
    .form-group textarea{border-radius: 0px!important;}
    .form-group input:focus{border:1px solid #00b894;}
    .form-group textarea:focus{border:1px solid #00b894;}
    .card-title{font-weight: bold!important; font-size: 15px!important; color: #585858!important;}
    ::placeholder {opacity: 0.4!important;  color: gray!important; }
    .head{font-size: 25px; text-transform: uppercase;}
    .selecttextfill{height: 45px!important; border-radius: 0px;}
    .selecttextfill:focus{border:1px solid #00b894; }
    .select2-container .select2-selection--single .select2-selection__rendered{
        display: block;
        padding-left: 8px;
        padding-right: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        top: -5px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 65%;
        width: 0;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border-radius: 0px;
        border: 1px solid #e8e8e8;
        height: 45px;
        font-size: 13px;
    }

    .bgtable{
        background: #33cabb;
    }

    .custom p{font-size: 14px; font-weight: 400; color: #585858;}
    .text-dark{color: #585858!important;}


</style>

</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">
    <div id="app">
  <!--===========header start===========-->
  <header class="app-header navbar bg-dark"  v-show="$route.path === '/' || $route.path === '/register' || $route.path ==='/forget' ? false : true ">

    <!--brand start-->
 {{--        <div class="navbar-brand bg-dark">
            <a class="" href="home.php">
                <img src="{{asset('backend')}}/img/logo-dark.png" srcset="{{asset('backend')}}/img/logo.png" alt="" style="height: 30px;">
                &nbsp;&nbsp;<span style="color: #f1f1f1; font-size:18px; text-transform: uppercase; font-weight: bold;"><span class="text-warning">Admin</span> Panel</span>
            </a>
        </div> --}}
        <!--brand end-->

        <!--left side nav toggle start-->
  {{--       <ul class="nav navbar-nav mr-auto ">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler text-light" type="button"><i class="ti-align-right"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler text-light" href="#"><i class=" ti-align-right"></i></a>
            </li>
        </ul> --}}
        <!--left side nav toggle end-->

        <!--right side nav start-->
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('backend')}}/img/user.png" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="{{asset('backend')}}/img/user.png" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">Administrator</h5>
                                <span>Panel</span>
                            </div>
                        </div>
                    </div>

                    <router-link class="dropdown-item" to="/logout" style="cursor: pointer;">Logout</router-link>
                </div>
            </li>

            <!--right side toggler-->
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-rightside-toggler text-light" type="button"><i class="icon-options-vertical"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler right-sidebar-toggler text-light" href="#"><i class="icon-options-vertical"></i></a>
            </li>
        </ul>

        <!--right side nav end-->
    </header>
    <!--===========header end===========-->




    <!--left sidebar start-->
    <div class="left-sidebar mt-4 pt-3"  style="display:none;" v-show="$route.path === '/' || $route.path === '/register' || $route.path ==='/forgot' ? false : true ">
      <nav class="sidebar-menu" style="height: 100vh;">
        <ul id="nav-accordion">
            <li>
               <router-link to="dashboard" >
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </router-link>
        </li>

        <li class="nav-title">
            <h5 class="text-uppercase">Main Menu-------------</h5>
        </li>
        
        


        <li>
         <router-link to="/user-list">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>User List</span>
        </router-link>
    </li>


<li class="sub-menu">
    <a href="javascript:;">
        <i class="fa fa-suitcase" aria-hidden="true"></i>
        <span>User Crud Repository</span>
    </a>
    <ul class="sub">
        <li><router-link  to="/user-create">Add User</router-link></li>
        <li><router-link  to="/user-view">Manage User</router-link></li>
    </ul>
</li>


   








<br><br><br>




</ul>
</nav>
</div>





<main class="main-content">
    <div class="container-fluid mt-4">

      <router-view></router-view>

  </div>
</main>



<!--===========footer start===========-->
{{--     <footer class="app-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    2021 © Developed By MI AJAD
                </div>
                <div class="col-4">
                    <a href="#" class="float-right back-top">
                        <i class=" ti-arrow-circle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer> --}}
    <!--===========footer end===========-->

</div>


<script src="{{asset('js/app.js')}}"></script>

{{-- <script src="{{asset('backend')}}/vendor/jquery/jquery.min.js"></script> --}}
<script src="{{asset('backend')}}/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('backend')}}/vendor/popper.min.js"></script>
<script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('backend')}}/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script src="{{asset('backend')}}/vendor/lobicard/js/lobicard.js"></script>
<script class="include" type="text/javascript" src="{{asset('backend')}}/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{asset('backend')}}/vendor/jquery.scrollTo.min.js"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>

<script src="{{asset('backend')}}/vendor/select2/js/select2.min.js"></script>
<script src="{{asset('backend')}}/vendor/select2-init.js"></script>

<script src="{{asset('backend')}}/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('backend')}}/vendor/date-picker-init.js"></script>

<script src="{{asset('backend')}}/vendor/data-tables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/vendor/data-tables/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function() {
        $('#bs4-table').DataTable();
    } );

    $(document).ready(function() {
        $('#bs4-table2').DataTable();
    } );


    $(document).ready(function() {
        $('#bs4-table3').DataTable();
    } );

    $(document).ready(function() {
        $('#bs4-table4').DataTable();
    } );
</script>

</body>


</html>


