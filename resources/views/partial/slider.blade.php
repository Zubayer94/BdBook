<!-- slider stars here-->
<div id="demo" class="carousel slide container margin" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('image\slider1.jpg') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image\slider2.jpg') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image\slider3.jpg') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image\slider4.jpg') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image\slider5.jpg') }}">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<!-- slider ends here-->
