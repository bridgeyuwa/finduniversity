







    <form method="get" action="search">
        <div class="form-group">
            <label for="formGroupExampleInput">Location</label>
            <select class= "form-control" name="location" id="location" >
                <option value="">Any Location</option> 
                @foreach($states as $state)


                <option value="{{$state->id}}">{{$state->name}}</option>

                @endforeach



            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Degree</label>
            <select  class = "form-control" name="degreelevel" id="degree" >
                <option value=""> Any Degree </option> 
                <option value="deg">Bachelor's Degree</option> 
                <option value="nd">National Diploma</option> 
                <option value="nce">College of Education</option>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Field of Study</label>
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


        School Type

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="">
            <label class="form-check-label" for="exampleRadios1">
                Any
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="1">
            <label class="form-check-label" for="exampleRadios2">
                Federal
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="2">
            <label class="form-check-label" for="exampleRadios2">
                State
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="schooltype" id="schooltype" value="3" >
            <label class="form-check-label" for="exampleRadios3">
                Private
            </label>
        </div> 

        <div class="col-lg p-1">
            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Find University">
        </div>

    </form>

