@extends('layouts.base')


@section('content')

<table class="table table-borderless table-striped table-hover" style="margin-top:20px;margin-bottom:30px;">
    <tbody><tr class="table-primary">
            <th colspan="4" class="TableTitle">
                <h2>Philippines Universities Ranking: Engineering</h2>
            </th>
        </tr>
        <tr>
            <th></th>
            <th class="Center h4">School</th>
            <th class="Center">Weighted Ranking: Engineering<br><span class="Comment Hide640">(change from last year)</span></th>
            <th class="Center Hide800">Ranked In</th>
        </tr>
        
                <tr>
                    <td class="Rank">1 <span class="RankChange Hide640 ">(-)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/university-of-the-philippines-diliman/" target="_blank">University of the Philippines Diliman</a>
                        
                         <span>Quezon City</span>
                    </td>
                    <td class="Value StandOut">99.5%
                        <div class="Change Hide640">(+0.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;9028&#39;, 8,&#39;7&#39;);">8 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">2 <span class="RankChange Hide640 ">(-)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/university-of-the-philippines-los-banos/" target="_blank">University of the Philippines Los Banos</a>
                        
                         <span>Los Banos, Laguna</span>
                    </td>
                    <td class="Value StandOut">97.5%
                        <div class="Change Hide640">(+1.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7736&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">3 <span class="RankChange Hide640 Up">(+6)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/ateneo-de-davao-university/" target="_blank">Ateneo de Davao University</a>
                        
                         <span>Davao City</span>
                    </td>
                    <td class="Value StandOut">96.5%
                        <div class="Change Hide640">(+10.4%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7158&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">4 <span class="RankChange Hide640 Up">(+1)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/pamantasan-ng-lungsod-ng-maynila/" target="_blank">Pamantasan ng Lungsod ng Maynila</a>
                        
                         <span>Manila</span>
                    </td>
                    <td class="Value StandOut">92.1%
                        <div class="Change Hide640">(+3.0%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;8246&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">5 <span class="RankChange Hide640 Down">(-2)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/visayas-state-university/" target="_blank">Visayas State University</a>
                        
                         <span>Baybay City, Leyte</span>
                    </td>
                    <td class="Value StandOut">91.3%
                        <div class="Change Hide640">(-3.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;15539&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">6 <span class="RankChange Hide640 Down">(-2)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/de-la-salle-university-manila/" target="_blank">De La Salle University</a>
                        
                         <span>Manila</span>
                    </td>
                    <td class="Value StandOut">88.7%
                        <div class="Change Hide640">(-0.6%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;10966&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">7 <span class="RankChange Hide640 Up">(+3)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/mindanao-state-university-gensan/" target="_blank">Mindanao State University - Gensan</a>
                        
                         <span>General Santos City, South Cotabato</span>
                    </td>
                    <td class="Value StandOut">88.5%
                        <div class="Change Hide640">(+2.5%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;18123&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">8 <span class="RankChange Hide640 Down">(-2)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/university-of-santo-tomas/" target="_blank">University of Santo Tomas</a>
                        
                         <span>Manila</span>
                    </td>
                    <td class="Value StandOut">88.0%
                        <div class="Change Hide640">(+0.2%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;8518&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">9 <span class="RankChange Hide640 Up">(+3)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/malayan-colleges-laguna/" target="_blank">Malayan Colleges Laguna</a>
                        
                         <span>Cabuyao, Laguna</span>
                    </td>
                    <td class="Value StandOut">87.0%
                        <div class="Change Hide640">(+3.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;13193&#39;, 6,&#39;7&#39;);">6 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">10 <span class="RankChange Hide640 Down">(-3)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/technological-university-of-the-philippines/" target="_blank">Technological University of the Philippines</a>
                        
                         <span>Manila</span>
                    </td>
                    <td class="Value StandOut">86.8%
                        <div class="Change Hide640">(-0.8%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;8450&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td colspan="4">
                        
<ins class="adsbygoogle ad-responsive" data-ad-client="ca-pub-7723096070808092" data-ad-slot="3267004707" data-ad-format="auto" data-full-width-responsive="true">
</ins>
<script async="" src="./Philippine Engineering Schools Ranking 2018_files/f(5).txt"></script>
<script>
    window.onload = function () {
        if (_FU_IsMobile) {
            (adsbygoogle = window.adsbygoogle || []).push({});
        }
    }
</script>
                    </td>
                </tr>
            
                <tr>
                    <td class="Rank">11 <span class="RankChange Hide640 Up">(+16)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/de-la-salle-university-dasmarinas/" target="_blank">De La Salle University Dasmariñas</a>
                        
                         <span>Dasmarinas City, Cavite</span>
                    </td>
                    <td class="Value StandOut">86.2%
                        <div class="Change Hide640">(+11.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;10983&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">12 <span class="RankChange Hide640 Up">(+11)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/holy-angel-university/" target="_blank">Holy Angel University</a>
                        
                         <span>Angeles City, Pampanga</span>
                    </td>
                    <td class="Value StandOut">85.3%
                        <div class="Change Hide640">(+9.1%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;6308&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">13 <span class="RankChange Hide640 Up">(+7)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/central-mindanao-university/" target="_blank">Central Mindanao University</a>
                        
                         <span>Maramag, Bukidnon</span>
                    </td>
                    <td class="Value StandOut">83.8%
                        <div class="Change Hide640">(+6.5%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;10269&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">14 <span class="RankChange Hide640 Up">(+4)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/university-of-southeastern-philippines/" target="_blank">University of Southeastern Philippines</a>
                        
                         <span>Davao City</span>
                    </td>
                    <td class="Value StandOut">83.7%
                        <div class="Change Hide640">(+5.5%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7226&#39;, 6,&#39;7&#39;);">6 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">15 <span class="RankChange Hide640 Down">(-7)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/university-of-san-carlos/" target="_blank">University of San Carlos</a>
                        
                         <span>Cebu City, Cebu</span>
                    </td>
                    <td class="Value StandOut">83.0%
                        <div class="Change Hide640">(-4.3%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7005&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">16 <span class="RankChange Hide640 Down">(-3)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/mindanao-state-university-iligan-institute-of-technology/" target="_blank">Mindanao State University - Iligan Institute of Technology</a>
                        
                         <span>Iligan City, Lanao del Norte</span>
                    </td>
                    <td class="Value StandOut">81.7%
                        <div class="Change Hide640">(-1.6%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7413&#39;, 6,&#39;7&#39;);">6 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">17 <span class="RankChange Hide640 Down">(-1)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/mapua-institute-of-technology/" target="_blank">Mapúa University</a>
                        
                         <span>Manila</span>
                    </td>
                    <td class="Value StandOut">80.7%
                        <div class="Change Hide640">(0.0%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;8212&#39;, 7,&#39;7&#39;);">7 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">18 <span class="RankChange Hide640 Down">(-1)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/cavite-state-university-indang/" target="_blank">Cavite State University - Indang Campus</a>
                        
                         <span>Indang, Cavite</span>
                    </td>
                    <td class="Value StandOut">80.4%
                        <div class="Change Hide640">(+0.7%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7566&#39;, 4,&#39;7&#39;);">4 exams</a></td>
                </tr>
            
                <tr>
                    <td class="Rank">19 <span class="RankChange Hide640 Up">(+14)</span>
                        <!--  -  -->
                    </td>
                    <td class="SchoolName">
                        <a href="https://www.finduniversity.ph/universities/central-philippine-university/" target="_blank">Central Philippine University</a>
                        
                         <span>Iloilo City, Iloilo</span>
                    </td>
                    <td class="Value StandOut">79.5%
                        <div class="Change Hide640">(+8.5%)</div>
                    </td>
                    <td class="Center Hide800"><a href="javascript:BoardExamsRankingsPopUp(&#39;7447&#39;, 5,&#39;7&#39;);">5 exams</a></td>
                </tr>
            
            
                
            
    </tbody></table>


@endsection