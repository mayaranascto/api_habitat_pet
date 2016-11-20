<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/AdminLTE.css" rel="stylesheet">
    <link href="/css/skins/_all-skins.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="hold-transition sidebar-collapse skin-blue sidebar-mini body-app">
    <header class="main-header">
        <a href="{{ url('/') }}" class="logo skin-logo">
          @if (!Auth::guest())
            <span class="logo-lg white-text"><b>Habitat</b>PET</span>
            <span class="logo-mini white-text"><b>H</b>PET</span>
          @else
            <span class="logo-mini white-text"><b>H</b>PET</span>
          @endif
        </a>

        <nav class="navbar navbar-static-top skin-nav">
          @if (!Auth::guest())
            <a href="#" class="sidebar-toggle collapse-button" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          @endif

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                  <li><a href="{{ url('/login') }}"  style="color: #fff;">Login</a></li>
                  <!-- <li><a href="{{ url('/register') }}" style="color: #fff;">Register</a></li> -->
                @else
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" style="color: #fff;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" style="background-color: #4D524B;">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" style="color: #fff;">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
          </div>
          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>

    @if(Auth::user())
      <aside class="main-sidebar" style="height: 768px;">
        <!-- sidebar -->
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header white-text" style="text-align: center;">MENU PRINCIPAL</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users white-text" aria-hidden="true"></i>
                <span class="white-text">Usuários</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/users"><i class="fa fa-circle-o text-red"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li  class="treeview">
              <a href="#">
                <i class="fa fa-pagelines white-text" aria-hidden="true"></i>
                <span class="white-text">Plantas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/plantas"><i class="fa fa-circle-o text-red"></i>Ver Todos</a></li>
                <li><a href="/plantas/create"><i class="fa fa-circle-o text-yellow"></i>Criar Nova</a></li>
              </ul>
            </li>
            <li>
              <a href="/#">
                <i class="fa fa-bug white-text" aria-hidden="true"></i>
                <span class="white-text">Peixes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/peixes"><i class="fa fa-circle-o text-red"></i>Ver Todos</a></li>
                <li><a href="/peixes/create"><i class="fa fa-circle-o text-yellow"></i>Criar Novo</a></li>
              </ul>
            </li>
            <li>
              <a href="/#">
                <i class="fa fa-shopping-cart white-text" aria-hidden="true">
                </i><span class="white-text">Produtos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/produtos"><i class="fa fa-circle-o text-red"></i>Ver Todos</a></li>
                <li><a href="/produtos/create"><i class="fa fa-circle-o text-yellow"></i>Criar Novo</a></li>
              </ul>
            </li>
            <li>
              <a href="/#">
                <i class="fa fa-briefcase white-text" aria-hidden="true"></i>
                </i><span class="white-text">ADM Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/user"><i class="fa fa-circle-o text-red"></i>Ver Todos</a></li>
                <li><a href="/register"><i class="fa fa-circle-o text-yellow"></i>Criar Novo</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    @endif

    <br>

    @yield('content')


    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
    <!-- jQuery -->
    <script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="js/app-adm.js"></script>
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.js"></script>
</body>
</html>
