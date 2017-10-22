<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/d2e3f58584.js"></script>
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body class="homepage">

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +7(8422) 46-26-28</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <div class="top-number">
                            <p><i class="fa fa-envelope"></i>Upakovkin73@mail.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    {{menu('public', 'template.main')}}
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->


@yield('content')


<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Напишите нам</h2>
            <br class="lead">Хотите задать вопрос, нужна дополнительная информация или у Вас есть предложение? <br/>Отправьте
            нам сообщение с помощью специальной формы, расположенной ниже. </br>Мы обязательно Вам ответим!</p>
        </div>
        <div class="row contact-wrap">
            <form id="main-contact-form" class="contact-form" name="contact-form" method="POST"
                  action="{{ route('home') }}">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Имя *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Телефон *</label>
                        <input name="phone" type="number" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Сообщение *</label>
                        <textarea name="message" id="message" required="required" class="form-control"
                                  rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Отправить
                            сообщение
                        </button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
    <i id="toTop" class="fa fa-chevron-circle-up fa-5x"></i>
</section><!--/#contact-page-->


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?=date('Y', time())?> Упаковкин Company. Все права защищены.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    {{menu('public', 'template.main')}}
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
</body>
</html>