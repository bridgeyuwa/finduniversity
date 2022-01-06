@extends('layouts.tri-base')

@section('title')
{{$institution->name}} | {{$institution->abbr}}
@endsection


@section('description')
History, tuition/school fees, course offered, faculties, ranking, Contact information and more.. 
@endsection




@section('search')<!-- comment -->

@include('partials.search')

@endsection



@section('content')

<section>
    <div class="text-aqua">
        
        <h1 class="display-6"> {{$institution->name}}</h1>
                    
        A general overview of  {{$institution->name}} of {{$institution->state->name}} State.
        Whenever possible we provide details about the courses offered, school/tuition fees, admission requirements, course description, ranking, Contact information and more.. 

        <hr class="m-4">
    </div>
</section>







    <div class="card wrapper image-wrapper bg-image" data-image-src="/img/photos/bg22.png">

        <div class="card-body">



            <h3>
                <i class="fas fa-lightbulb"></i>
                Highlights
            </h3>
            <div class="list-info">
                <ul>
                    <li>
                        <p>
                            <strong>Type:</strong> {{$institution->schooltype->name}} {{$institution->category->name}}
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Established:</strong> 2022
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Entrance exam:</strong> Required (JAMB)
                        </p>
                    </li>

                    <li>
                        <p>
                            <strong>Term structure:</strong> {{$institution->term->name}}
                        </p>
                    </li>

                    <li>
                        <p><strong>School year:</strong> starts in September <i class="small">(May be different due to Covid-19)</i></p>
                    </li>

                </ul>
            </div><!-- /.list-info -->


            <h3>
                <i class="fas fa-money-bill-alt"></i>
                Tuition Fees
            </h3>
            <div class="tuition-fees">

                <div class="cols">

                    <div class="col col--1of2">
                        <div class="fee">
                            <p><strong>Bachelor's degree:</strong></p>
                            <p>
                                <span class="Amount">₦ 80,000-120,000</span> per year
                                
                                <i class="small">(Fees are based on first year and are subject to change.)</i>

                            </p>
                        </div><!-- /.fee -->
                    </div><!-- /.col -->

                </div><!-- /.cols -->
            </div><!-- /.tuition-fees -->


            <h3>
                <i class="fas fa-list-ul"></i>
                Courses Offered
            </h3>
            <div class="list-info list-info--orange">
                <ul>

                    <li><a href=" {{url("institutions/{$institution->id}/courses")}}">Bachelor's courses</a> ({{count($institution->programs)}})</li>

                    <li><a href="#">Masters courses</a> (3)</li>

                    <li><a href="#">Doctorate courses </a> (3)</li>


                </ul>
                <ul>

                </ul>
            </div><!-- /.list-info -->







            <div class="table">
                <h3>
                    <i class="fas fa-clipboard-list"></i>
                    Rankings
                </h3>
                <p>Based on Webometrics Web Presence Ranking</p>
                <table>

                    <tbody><tr>
                            <td>Rank in Nigeria</td>
                            <td>3rd out of 10 schools</td>
                            <td><a href="https://www.finduniversity.ph/philippine-universities-ranking/prov42-laguna/" target="_blank">View</a></td>
                        </tr>

                        <tr>
                            <td>Rank in North Central</td>
                            <td>10th out of 37 schools</td>
                            <td><a href="https://www.finduniversity.ph/philippine-universities-ranking/reg6-calabarzon/" target="_blank">View</a></td>
                        </tr>

                        <tr>
                            <td>Rank in Benue</td>
                            <td>47 out of 273 schools</td>
                            <td><a href="https://www.finduniversity.ph/philippine-universities-ranking/" target="_blank">View</a></td>
                        </tr>

                    </tbody></table>
            </div><!-- /.table -->




            <div class="table-alt">
                <h3>
                    <i class="fas fa-star"></i>
                    Board Exams Performance
                </h3>
                <p>Displaying the passing rates of First Time Examinees only.</p>
                <p>Based on the results of the past 4 exams of each board exam.</p>

            </div><!-- /.table-alt -->




            <div class="">
                <h3>
                    <i class="fas fa-map-marker-alt"></i>
                    Location
                </h3>

                <p><strong>Address:</strong> {{$institution->address}} {{$institution->state->name}} State </p>

            </div><!-- /.map-holder -->


            <h3>
                <i class="fas fa-graduation-cap"></i>
                Scholarships at LPL Calamba City
            </h3>
            <div class="section__group">
                1. College<br><br>• Valedictorian: 100% discount on Tuition and Miscellaneous Fees for one semester.<br>• Salutatorian: 50% discount on Tuition and Miscellaneous Fees for one semester.<br>• 1st Honorable Mention: 25% discount on Tuition and Miscellaneous Fees for one semester.<br>• 91%-above: 50% discount on Tuition Fee.<br>• 88-90%: 25% discount on Tuition Fee.<br><br>2. Cultural Scholarship<br><br>• 25% discount on Tuition Fee for qualified members.<br><br>3. President Scholarship<br><br>A. Jose P. Laurel (JPL) Scholarship - two (2) slots for Electronics and Communication Engineering (ECE), and one (1) slot for Electrical Engineering (EE).<br><br>Privileges:<br><br>• FREE tuition fee, miscellaneous fees and other fees (except PRISAA FEE, Community Extension Fee, Student Activity Fee, Insurance and Student Council Fee) for the semester.<br>• Monthly Stipend.<br>• Book Allowance per semester.<br>• Clothing allowance per semester<br><br>B. Sotero H. Laurel (SHL) Scholarship - two (2) slots for Nursing and one (1) slot for Accountancy.<br><br>Privileges:<br><br>• FREE tuition fee, miscellaneous fees and other fees (except PRISAA FEE, Community Extension Fee, Student Activity Fee, Insurance and Student Council Fee) for the semester.<br>• Monthly Stipend.<br>• Book Allowance per semester.<br>• Clothing allowance per semester<br><br>C. Regina P. Laurel Scholarship - one (1) slot for Accountancy.<br><br>Privilege:<br><br>• FREE tuition fee, miscellaneous fees and other fees (except PRISAA FEE, Community Extension Fee, Student Activity Fee, Insurance and Student Council Fee) for the semester.<br><br>4. Academic Scholarship<br><br>A. Full Scholarship: The applicant must obtain a general weighted average of 1.50 in all subjects in the previous semester with no final grade lower than 1.75. He/ She must carry the full load during the semester and must have a grade not lower than 2.00 in P.E.<br><br>B. Expanded Partial Scholarship:<br><br>Tuition Fee discount - G.W.A - Lowest Grade Average<br>75 % - 1.60 - 2.00<br>50 % - 1.75 - 2.25<br>25 % - 1.80 - 2.25<br><br>5. Partner Company Scholarship<br><br>• 10% discount for incoming freshmen who’s parent is employed in one of the partner companies of LPU-L.<br><br>6. Alumni Discount<br><br>• Lyceum (Manila, Cavite, Batangas, Laguna and St. Cabrini) alumni, their legal spouses and /or children and/or siblings enrolled in any course are entitled to 10% discount.<br><br>7. Sibling's Discount<br><br>• When two or more siblings are enrolled during the same term in Lyceum of the Philippines-Laguna, the second sibling shall be granted a 20% discount, the third a 40% discount, the fourth a 60% discount.<br><br>8. Barkada Discount<br><br>• P1000.00 discount on down payment for each of the six enrolees. (same school and enrolling at the same time)
            </div><!-- /.section__group -->




        </div>
        <!--/.card-body -->

    </div>

<br>
<br>


@endsection


@section('aside')
<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
    Sidebar for Advertisements and promotions
</aside>
@endsection