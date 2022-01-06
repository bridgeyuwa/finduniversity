@extends('layouts.tri-base')


@section('title')
{{$program->name}} | course description and admission requirements
@endsection

@section('description')
Course description of {{$program->name}}: includes admission requirements ( Jamb/UTME subject combination, SSC /'O' Level and direct entry 'A' Level)

@endsection






@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')


<div class="text-aqua text-center">

    <h1>{{$program->name}}</h1>
    <h2>Course description and admission requirements</h2>

     Detailed course description of {{$program->name}}: includes admission requirements ( Jamb/UTME subject combination, SSC/'O' Level and direct entry 'A' Level requirements.)

    <hr class="m-4">
</div>






<div class="card bg-body">

    <div class="card-body">


        <h2>Program Overview</h2>
        
        
        {{$program->direct_entry_req}}  
        <hr>
        {{$program->utme_req}}
        <hr>
        
       {{$program->utme_subjects}}
       
       <hr>
        
        <p dir="ltr" style="text-align: left; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">The Bachelor of Science in Electronics and Communications Engineering (BS ECE), also known as Bachelor of Science in Electronics Engineering, is </span><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;">a five-year</span><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;"> college program that focuses on the conceptualization, design, and development of electronic, computer and communication products, systems, services and processes. Its curriculum is built around a strong basic core of mathematics, physics, and engineering provides teaching and training activities in the classroom and in the laboratory exercises.&nbsp;</span></p><br>

        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">While </span><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;">BS in Electrical Engineering</span><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;"> deals with the general aspect of design and development of electrical equipment, such as power generators and electric motors, </span><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;">BS Electronics and Communication Engineering, </span><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">on the other hand, focuses on the study of design and development of Electronic equipment such as semiconductors and transmitters to be used in distant communications.</span></p><br>

        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">Recommended Senior High School Strand</span></span></p>

        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">Students who want to pursue a degree in&nbsp; Electronics and Communications Engineering are encouraged to take the Science, Technology, Engineering, and Mathematics (STEM) strand under the Academic Track. They will learn topics relevant that will be useful in their college life.&nbsp;</span></p><br>

        <h2> <a href="{{url("/programs/{$program->id}/institutions")}}">Institutions Offering {{$program->name}} ({{count($program->institutions)}}) </a> </h2>

        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">Admission Requirements</span></span></p>

        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic;    white-space: pre-wrap;">Qualifications</span></p>

        <ul style="margin-top:0;margin-bottom:0;">

            <li>The student must be a high school graduate. </li>

        </ul><span style="font-family: Calibri, sans-serif; font-size: 11pt;    >However, if they were not able to graduate high school, they may opt to take the<span style="font-weight: bold;"> Alternative Learning System (ALS)</span> </span></span>

        <div><span style="font-family: Calibri, sans-serif; font-size: 11pt;    >and pass the<span style="font-weight: bold;"> Philippine Educational Placement Test (PEPT)</span> to qualify for college; the availability of courses for PEPT passers depend on the university.</span><br>



            <ul style="margin-top:0;margin-bottom:0;">


                <li>The students must pass the College Admissions Test of the university.</li>


            </ul><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic;    white-space: pre-wrap;">Basic Requirements</span></p>


            <ul style="margin-top:0;margin-bottom:0;">


                <li>Form 138 - High School Report Card (Original and Photocopy)</li>


                <li>Recommendation letter from High school principal and guidance counselor</li>


                <li>Most recent medical and dental health record</li>


                <li>Copy of NSO Certified birth certificate</li>


                <li>Certificate of Good moral character</li>


                <li>Copy of honorable dismissal</li>


                <li>Copy of high school diploma</li>


                <li>(1) Latest 2”x2” ID Picture</li>


            </ul><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">Program Outcome</span></span></p>


            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">Graduates of Electronics and Communications Engineering are expected to be able to:</span></p>


            <ul style="margin-top:0;margin-bottom:0;">


                <li>Solve complex engineering problems using the application of mathematics and science knowledge</li>


                <li>Conduct engineering procedures professionally and ethically</li>


                <li>Understand and explain the significance of engineering solutions globally, economically, and environmentally</li>


                <li>Use up to date techniques, skills, and engineering tools for engineering procedures</li>


                <li>Apply engineering and management principles both as a member and a leader in a team</li>


                <li>Understand at least one specialized field of Electronics Engineering</li>


            </ul><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">On-The-Job Training/Internship</span></span></p>


            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">During the fourth year of the program, students are required to attend an On the Job Training (OJT) in a company, organization or a government agency that needs specified Electronics and Communications services.</span></p><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">Students are given the opportunity to apply their knowledge and skills in an actual work setting. Usually, universities require them to submit a written report on their tasks, learning experiences, and hours rendered. Their work performance will also be evaluated by their immediate managers and will be submitted to their respective OJT coordinator. The number of hours required may differ in each university.</span></p><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">Board Exam</span></span></p>


            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">To become a Licensed Electronics and Communications Engineer in Nigeria, a graduate of Civil Engineering needs to pass the </span><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;">Electronics Engineering Licensure Examination.</span><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;"> The examination is conducted by the Board of Electronic Engineering under the supervision of the Professional Regulations Commission (PRC). It is scheduled twice a year in the months of April and October.</span></p><br>





            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"><span style="font-size: 18pt;">Career Opportunities</span></span></p>


            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">Graduates of Electronics and Communications Engineering</span><span style="font-size: 11pt; font-family: Calibri, sans-serif; font-weight: 700;    white-space: pre-wrap;"> </span><span style="font-size: 11pt; font-family: Calibri, sans-serif;    white-space: pre-wrap;">may pursue a career path in various companies or government agencies that needs specialized Electronics and Communications services. They may apply as a telecommunications engineer, broadcast engineer, computer systems engineer, optics engineer, instrumentation and controls engineer, biomedical engineer, and satellite communications engineer.</span></p>


        </div>
    </div>
</div>
</br>
</br>

@endsection

