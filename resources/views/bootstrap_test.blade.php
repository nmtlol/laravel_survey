<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        .cover {
            background: url(http://samples.dotinstall.com/s/basic_twitter_bootstrap_v5/43012/MyBootstrap/img/bg.png);
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <header>
        <div class="alert alert-info text-center mb-0 rounded-0 alert-dismissible fade show">
            News!News!News!News!News!News!News!News!News!News!News!
            <button class="close" data-dismiss="alert">
                &times;
            </button>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a href="" class="navbar-brand">Logo</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="menu" class="collapse  navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="navbar-item px-5"><a href="" class="nav-link">Link</a></li>
                        <li class="navbar-item px-5"><a href="" class="nav-link">Link</a></li>
                        <li class="navbar-item px-5"><a href="" class="nav-link">Link</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="cover text-white text-center py-5">
            <h1 class="dispay-4 mb-4">Dotinstall App</h1>
            <a href="" class="btn btn-primary btn-lg">Get it now!</a>
        </div>
    </header>
    <main>
        <section class="py-5">
            <h2 class="text-center mb-5">Features</h2>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-sm-8">
                        <h3>Awesome</h3>
                        <p class="">Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://samples.dotinstall.com/s/basic_twitter_bootstrap_v5/43013/MyBootstrap/img/phone.png" class="w-100 rounded-circle"></img>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 order-sm-2">
                        <h3>Awesome</h3>
                        <p>Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello. Hello.</p>
                    </div>
                    <div class="col-sm-4 order-sm-1">
                        <img src="http://samples.dotinstall.com/s/basic_twitter_bootstrap_v5/43013/MyBootstrap/img/movie.png" class="w-100 rounded-circle"></img>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light text-center py-5">
            <h2 class="mb-5">Plans</h2>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr><th>Plan A</th><th>Plan B</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>AA</td><td>BB</td></tr>
                        <tr><td>AAA</td><td>BBB</td></tr>
                        <tr><td>AAAA</td><td>BBBB</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="py-5">
            <h2 class="mb-5 text-center">How to use</h2>
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#ios" class="nav-link active" data-toggle="tab">iOS</a></li>
                    <li class="nav-item"><a href="#android" class="nav-link" data-toggle="tab">Android</a></li>
                </ul>
                <div class="tab-content py-4">
                    <div id="ios" class="tab-pane active">
                        <p>Hello iOS. Hello iOS. Hello iOS. <span class="font-weight-bold text-info" data-toggle="tooltip" title="This is awesome">Hello iOS.</span> Hello iOS. Hello iOS. Hello iOS. Hello iOS.</p>
                    </div>
                    <div id="android" class="tab-pane">
                        <p>Hello Android. Hello Android. Hello Android. Hello Android. Hello Android. Hello Android. Hello Android. Hello Android.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light text-center py-5">
            <a href="" class="btn btn-primary btn-lg">Get it now!</a>
        </section>
    </main>
    <footer class="text-center text-muted py-4">
        Copyright YYYY dotinstall.com
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function() {
            'use strict';
            $('[data-toglle="tooltip"]').tooltip();
        });
    </script>
  </body>
</html>