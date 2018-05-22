<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artificial Intelligence</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{url('/')}}"><i class="ion-ios-analytics-outline"></i> Artificial Intelligence</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="{{ (Route::currentRouteName() == 'report') ? url('/').'#one' : '#one'}}">Artificial Intelligence</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ (Route::currentRouteName() == 'report') ? url('/').'#three' : '#three'}}">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ (Route::currentRouteName() == 'report') ? url('/').'#last' : '#last'}}">Suggestions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{route('report')}}">Report</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="About Artificial Intelligence" 
                        href="#aboutModal">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">About Artificial Intelligence</h2>
                <p class="text-justify">
                    “Everything we love about civilization is a product of intelligence, so amplifying our human intelligence with artificial intelligence has the potential of helping civilization flourish like never before – as long as we manage to keep the technology beneficial.“
                </p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
        </div>
    </div>

    @yield('content')

    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>