
<!DOCTYPE html>
<html lang="en">

    @include('partials.head')


    <body>

        @include('partials.header') 



        <section class="container">




            <div class="wrapper bg-light">

                <div class="row gx-md-6 ">

                    <div class="col-lg-3 sidebar mt-md-6 ">

                        <div class="sticky-top" style=" top: 90px "> 
                            @yield('aside','no sidebar to yield')
                        </div>
                    </div>



                    <div class="col-lg-9 ">

                        @yield('content','this is the default content')  


                    </div>

        </section>

        @include('partials.footer')

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        @include('partials.script')


    </body>





</html>
