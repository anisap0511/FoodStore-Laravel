<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodStore</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        <a class="navbar-brand" href="#">Foodstore</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('pesan') }}">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('transaksi') }}">Transaksi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner bg-warning" style="height: 500px" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('img/jumbotron.jpg') }}" style="object-fit: cover; opacity: .6;" class="w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/jumbotron1.jpg') }}" style="object-fit: cover; opacity: .6;" class="w-100" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <img class="card-img-top" src="{{ asset('img/food.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sumur Daging</h4>
                        <p class="card-text">Rp 20.000,-</p>
                        <button class="btn btn-warning">Beli</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <img class="card-img-top" src="{{ asset('img/food.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Soto Daging</h4>
                        <p class="card-text">Rp 20.000,-</p>
                        <button class="btn btn-warning">Beli</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <img class="card-img-top" src="{{ asset('img/food.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Pecel Daging</h4>
                        <p class="card-text">Rp 20.000,-</p>
                        <button class="btn btn-warning">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
