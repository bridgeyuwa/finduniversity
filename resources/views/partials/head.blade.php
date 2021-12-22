<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">
  <title> @yield('title','nothing to yield as title') </title>
  
  <!<!-- css styles -->
  <link rel="stylesheet" href=" {{url('css/plugins.css')}} ">
  <link rel="stylesheet" href=" {{url('css/style.css')}} ">
  <link rel="stylesheet" href=" {{url('css/colors/yellow.css')}} ">
  
   
  
  
  <!<!-- fonts -->
  <link rel="preload" href=" {{url('css/fonts/thicccboi.css')}} " as="style" onload="this.rel='stylesheet'">
  
  
  
  <style rel="stylesheet"> 
  .DisplayTable {}
.DisplayTable td,.DisplayTable th {padding:15px 8px; }
.DisplayTable th {font-weight:bold; vertical-align:bottom;}
.DisplayTable th.TableTitle {font-size:22px;text-align:left;background-color:#2697E1;color:#ffffff;padding:15px 10px;}
.DisplayTable th.TableTitle h2 {color:#ffffff;font-size:22px;padding:0; margin:0;}
.DisplayTable th.TableTitle h3 {color:#ffffff;font-size:19px;padding:0; margin:0;}
.DisplayTable th .Comment {font-weight:normal;}
.DisplayTable td.Value {text-align:center;}
.DisplayTable td.AboveAverage, .AboveAverage{color:#1CA66E;font-size:16px;}
.DisplayTable td.BelowAverage, .BelowAverage{color:#ff3300;font-size:16px;}
.DisplayTable td.Small .DisplayTable td span.Small {font-size:12px;padding-right:0;padding-left:0;}
.DisplayTable td.TableSubTitle {font-size:20px;text-transform:capitalize;padding-top:15px;padding-bottom:15px;}
.DisplayTable td.TableSubTitle a {font-size:20px;text-transform:capitalize;}
.DisplayTable td.SchoolName {font-size:18px;color:#3366cc;}
.DisplayTable td.SchoolName a {font-size:18px;color:#3366cc;}
.DisplayTable td.SchoolName span {font-style:italic;font-size:14px;}
.DisplayTable td.StandOut {color:#1CA66E; font-weight:bold;font-size:18px;}
.DisplayTable td.StandOut .Change {font-weight:normal; font-style:italic;font-size:14px;padding-top:5px;}
.DisplayTable td.Rank {font-size:18px;text-align:left; white-space:nowrap;max-width:60px;}
.DisplayTable td.Rank .RankChange {font-size:14px;}
.DisplayTable td.Rank .Up {color:#1CA66E;}
.DisplayTable td.Rank .Down {color:#ff3300;}
.DisplayTable td.SmallText {font-size:12px;}
.DisplayTable td.Seperator {border:0;min-height:20px;}
  </style>
  
</head>