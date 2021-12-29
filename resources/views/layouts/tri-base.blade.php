@extends('layouts.base')


@section('content')
<section class="container">
    
    
    <div class="content-wrapper">
        
        <div class="wrapper bg-light">
            
            
            <div>
                
                <div class="row gx-md-6 ">
                    
                    <div class="col-lg-3 sidebar mt-md-6 ">
                   
                    <div class="sticky-top " style=" top: 90px">
                    @yield('aside','no sidebar to yield')
                    </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-6 ">
                        
                      @yield('content-card','this is the default content')  
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    <!-- Aside Left goes here -->
                    <div class="col-lg-3 sidebar mt-md-6">
                    @yield('aside','no sidebar to yield')
                   </div>
                </div>
            </div>
            
            
            
        </div>
              
    </div>
    
      
</section>

@endsection
