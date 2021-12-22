<section >
    <form method="get" action="search">
    <div class="container py-3 ">

        <div class="row py-3 px-lg-5 border rounded bg-light ">

            <div class="col-lg p-1">
                <select class= "form-control" name="location" id="location" >
                    <option value="">Any Location</option> 
                    @foreach($states as $state)
                    
                    
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    
                    @endforeach
                   
                    
                   
                </select>
            </div>

            <div class="col-lg p-1"  >
                <select  class = "form-control" name="degreelevel" id="degree" >
                    <option value=""> Any Degree </option> 
                    <option value="deg">Bachelor's Degree</option> 
                    <option value="nd">National Diploma</option> 
                    <option value="nce">College of Education</option>
                </select>
            </div>

            <div class="col-lg p-1">
                <select class = "form-control" name="program" id="program" >
                    <option value=""> Any Field </option> 
                    @foreach ($colleges as $college)
                 <optgroup label="{{$college->name}}">   

                    @foreach( App\Models\College::find($college->id)->programs; as $program)
                    <option value="{{$program->id}}">  {{$program->name}}  </option>
                    @endforeach
                 </optgroup>
                    @endforeach
                    
                </select>
            </div>

            <div class="col-lg p-1">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Find University">
                </div>
            
            
        </div>
    </div>
</form>

            </section>