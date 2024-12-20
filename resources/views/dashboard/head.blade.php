<title>Menu Data Universitas </title>
<!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/icon/feather/css/feather.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/jquery.mCustomScrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">

<style>
    .edit, .delete{
        cursor: pointer;
    }
</style>

@yield('own_style')
