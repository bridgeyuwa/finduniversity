<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <title> @yield('title','nothing to yield as title') </title>

    <!<!-- css styles -->
    <link rel="stylesheet" href=" {{url('/css/plugins.css')}} ">
    <link rel="stylesheet" href=" {{url('/css/style.css')}} ">
    <link rel="stylesheet" href=" {{url('/css/colors/blue.css')}} ">




    <!<!-- fonts -->
    <link rel="preload" href=" {{url('css/fonts/thicccboi.css')}} " as="style" onload="this.rel = 'stylesheet'">




    <style>

        .custom-table-responsive {
            background-color: #efefef;
            padding: 20px;
            border-radius: 4px; }

        .custom-table {
            min-width: 900px; }
        .custom-table thead tr, .custom-table thead th {
            border-top: none;
            border-bottom: none !important;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .1rem; }
        .custom-table tbody th, .custom-table tbody td {
            color: #777;
            font-weight: 400;
            padding-bottom: 20px;
            padding-top: 20px;
            font-weight: 300; }
        .custom-table tbody th small, .custom-table tbody td small {
            color: #b3b3b3;
            font-weight: 300; }
        .custom-table tbody tr:not(.spacer) {
            border-radius: 7px;
            overflow: hidden;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease; }
        .custom-table tbody tr:not(.spacer):hover {
            -webkit-box-shadow: 0 2px 10px -5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 10px -5px rgba(0, 0, 0, 0.1); }
        .custom-table tbody tr th, .custom-table tbody tr td {
            background: #fff;
            border: none; }
        .custom-table tbody tr th:first-child, .custom-table tbody tr td:first-child {
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px; }
        .custom-table tbody tr th:last-child, .custom-table tbody tr td:last-child {
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px; }
        .custom-table tbody tr.spacer td {
            padding: 0 !important;
            height: 10px;
            border-radius: 0 !important;
            background: transparent !important; }
        .custom-table tbody tr.active {
            opacity: .4; }



    </style>







</head>