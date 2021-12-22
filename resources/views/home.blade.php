@extends('layouts.base')

@section('content')


<section>
<div class="wrapper bg-light ">

    <section class="wrapper bg-light wrapper-border border-0">
        <div class="container ">
            <h2 class="display-4 mb-3 text-center">FindUniversity</h2>
            <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Welcome to FindUniversity.ng! Browse the leading online directory of courses, colleges, and universities in Nigeria. To narrow your search by Area, Level, or Specialization, filter using the categories below.</p>
        </div>
    </section>

    <section id="animated-text" class="container">
        <p class="lead fs-lg">Filter Universities: By <span class="typer text-primary" data-delay="100" data-delim=":" data-words=".:Location:Degree Level:Program of Study"></span><span class="cursor text-primary" data-owner="typer"></span></p>
    </section>

</div>
</section>

@include('partials.search')


@include('partials.uni-counter')

<section>
<div class="container">
    <div class="row gx-md-8 gy-8 text-center mb-10 mb-md-17">
        <div class="col-md-6 col-lg-3 ">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-phone-volume"></i> </div>
            <h4>Blog</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <a href="#" class="more hover">Learn More</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-shield-exclamation"></i> </div>
            <h4>Study Abroad</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <a href="#" class="more hover">Learn More</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-laptop-cloud"></i> </div>
            <h4>Scholarships</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <a href="#" class="more hover">Learn More</a>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3">
            <div class="icon btn btn-circle btn-lg btn-primary disabled mb-5"> <i class="uil uil-chart-line"></i> </div>
            <h4>Blog</h4>
            <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <a href="#" class="more hover">Learn More</a>
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
</div>
    
</section>

<section>
<div class="container">
    <div class="row">
        <div class="col-sm-6 p-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Colleges by Field of Study</h2>

                    <ul class="list-unstyled ">

                        <!-- foreachstart -->

                        <li><a class="dropdown-item scroll" href= " programs/id/institutions" class="hover" title="Universities &amp; colleges offering computer science courses">Computer science schools<i class="fas fa-arrow-right"></i></a></li>
                       
                        <!<!-- foreachend -->
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-sm-6 p-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 p-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 p-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


    </div>




</div>
    </section>



@endsection