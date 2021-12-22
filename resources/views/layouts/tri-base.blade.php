@extends('layouts.base')


@section('content')
<section class="container">
    
    
    <div class="content-wrapper">
        
        <div class="wrapper bg-light">
            
            
            <div>
                
                <div class="row gx-lg-8 gx-xl-12">
                    
                    <div class="col-lg-8 order-lg-2">
                        
                      @yield('content-card','this is the default content')  
                        
                        
                    </div>
                    
                    
                    <!-- Aside Left goes here -->
                    <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                    @yield('aside','no sidebar to yield')
                   
                   
                    </aside>
                </div>
            </div>
            
            
            
        </div>
              
    </div>
    
      
</section>

@endsection
