
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}">
    <title>PSI Moz | Ordem de Encomenda</title>


    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet">

    <script src="{{ asset('admin/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery-3.2.0.min.js')}}"></script>

    <!-- Latest compiled and minified CSS -->
    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Icons-->
    <script src="{{ asset('admin/js/lumino.glyphs.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{ asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <!--ACTUALIZACAO DO BOOTSTRAP-->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->



    <style>
        .hoves:hover > .dropdown-menu {
            display:block !important;
            -webkit-transition: height .5s ease;
            -webkit-transition-delay: .4s;
        }
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;        -webkit-transition: height .5s ease;
            -webkit-transition-delay: .4s;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

        .dropdown-submenu {
            position: relative;
        }



        footer {
            padding: 10px;
            color: #fff;
            text-align: center;
            background-color: rgba(245,127,23,.8);
            position:fixed;
            bottom: 0px;
            left: 0;
            right: 0;
            z-index: 10;
        }
        .footer a
        {
            color: #ccc;
        }

        #isOnline{
            background: rgba(217, 155, 9, 0.43);
            width: 150px;
            border-radius: 20px 0 0 20px;
            position: fixed;
            right: 0;
            top: 50px;
            z-index: 20;
        }

        #isOnline>h4{
            font-size: 15px;
            text-align: center;
            color: #fff;
        }

        #alert{
            position: fixed;
            top: 50px;
            z-index: 10;
            left: 0;
            right: 0;
        }
    </style>

    <script>
        window.addEventListener('load', function(e) {
            if (navigator.onLine) {
                $('#isOnline h4').html('We\'re online!');
                $('#isOnline').css('background','rgb(182, 202, 160)');
                console.log('We\'re online!');
            } else {
                $('#isOnline h4').html('We\'re offline...');
                $('#isOnline').css('background','rgba(217, 155, 9, 0.43)');
                console.log('We\'re offline...');
            }
        }, false);

        window.addEventListener('online', function(e) {
            $('#isOnline h4').html('And we\'re back :).');
            $('#isOnline').css('background','rgb(182, 202, 160)');
            console.log('And we\'re back :).');
        }, false);

        window.addEventListener('offline', function(e) {
            $('#isOnline h4').html('Connection is down.');
            $('#isOnline').css('background','rgba(217, 155, 9, 0.43)');
            console.log('Connection is down.');
        }, false);
    </script>

</head>
<boby>
    <div id="isOnline" class="offline">
        <h4></h4>
    </div>

        <div class="navbar-wrapper">
           <!-- <div class="container-fluid">-->
                <nav class="navbar navbar-fixed-top">

                    <div class="conteiner">


        <!--menu bar-->
        <nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}" >PSI Moz</a>



            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if(Auth::user()->grupo=='2')
                        <li class="dropdown">
                            <a class="dropdown-toggle " data-toggle="dropdown">Admin Menu</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('users.create')}}">Add Users <i class="fa fa-users fa-lg pull-right"></i></a></li>
                                    </ul>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Extrair BD</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Encomendas</a></li>
                                        <li><a href="#">Clientes</a></li>
                                    </ul>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Registar Cliente</a></li>
                                        <li><a href="#">Listar Clientes</a></li>
                                    </ul>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Estabelecimentos</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Registar Estabelecimento</a></li>
                                        <li><a href="#">Listar Estabelecimentos</a></li>
                                    </ul>
                                </li>

                                <li class="divider"></li>

                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Registar Produto</a></li>
                                        <li><a href="#">Listar Produtos</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    @endif
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i></use></svg> {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li id="updateU"><a href="{{ route('changePassword') }}"><i class="fa fa-key" aria-hidden="true"></i> Mudar Password</a>
                            </li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                            </li>
                        </ul>

                    </li>

                </ul>

            </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!--and menu-->
    </div>
                </nav>

        @yield('content')

</div>



    <footer class="footer">
        <div class="container">
            <div class="row bort">

                <div class="copyright">
                    2018 © Copyright PSI Moz. <a href="http://evidevi.com/" target="_blank">Powered by: evidevi.com</a>
                </div>

            </div>
        </div>
    </footer>



<script src="{{ asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-3.2.0.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-table.js')}}"></script>
<script src="{{ asset('admin/js/moment.min2.js')}}"></script>
<script src="{{ asset('admin/js/daterangepicker.js')}}"></script>
<script src="{{ asset('admin/js/funcoes.js')}}"></script>
<script src="{{ asset('admin/js/myAjax.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--DATA TABLE & EXPORT FILE-->
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.jqueryui.min.css">


    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.jqueryui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

    <script>
        $('#dropdown').hover(function() {
            $(this).AddClass('open');
        })
    </script>
    <script>
        (function($){
            $(document).ready(function(){
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>


</boby>
</html>

