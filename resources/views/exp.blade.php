@extends('layouts.base')


@section('content')
  <script>
$(document).ready(function () {
    $('.js-example-basic-single').select2();
});
    </script>
<div class="container">
    <div class="container">
        <div class="container">
            <select class="js-example-basic-single form-select select2-selection__placeholder" name="state">
                <option value="AL">Alabama</option>
                ...
                <option value="WY">Wyoming</option>
            </select>

            
            
        </div>
    </div>
</div>

@endsection
