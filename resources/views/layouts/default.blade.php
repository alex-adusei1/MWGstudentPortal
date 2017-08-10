<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'MWG Code Academy')}}</title>

	<!-- Canonical SEO -->
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="/assets/css/paper-dashboard-v=1.2.1.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<div class="wrapper" id="app">
    @include('partials.sidebar-full')

    <div class="main-panel">
        @include('partials.navbar')


        @yield('content')


        @include('partials.footer')

    </div>
</div>


</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="/assets/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="/assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="/assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="/assets/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="/assets/js/bootstrap-switch-tags.js"></script>

<!-- Circle Percentage-chart -->
<script src="/assets/js/jquery.easypiechart.min.js"></script>

<!--  Charts Plugin -->
<script src="/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="/assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="/assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX1B71USyaSc9Jn8pM-0py8Mi7mySywLQ"></script>

<!-- Wizard Plugin    -->
<script src="/assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="/assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="/assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="/assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="/assets/js/paper-dashboard.js?v=1.2.1"></script>

	<!--   Sharrre Library    -->
	<script src="/assets/js/jquery.sharrre.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="/assets/js/demo.js"></script>



<script type="text/javascript">
		$(document).ready(function(){
		demo.initOverviewDashboard();
		demo.initCirclePercentage();

		});
</script>

</html>

<!-- Localized -->
