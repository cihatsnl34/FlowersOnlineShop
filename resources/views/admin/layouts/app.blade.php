<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('admin-files/css/oneui.min.css') }}">

</head>

<body onload="startTime()">


    @include('admin.layouts.navigation')

    <!-- Main Container -->
    <main id="main-container">
        
        @yield('content')

    </main>
    <!-- END Main Container -->

    @include('admin.layouts.footer')

    <script src="{{ asset('admin-files/js/oneui.core.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/oneui.app.min.js') }}"></script>
    <!-- tabels JS Plugins -->
    <script src="{{ asset('admin-files/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/pages/be_tables_datatables.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin-files/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin-files/js/assets/js/plugins/jquery-validation/additional-methods.js') }}"></script>
    <script src="{{ asset('admin-files/js/pages/be_forms_wizard.min.js') }}"></script>
    <script>
        function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            let day = today.getDate()
            let month = today.getMonth() + 1;
            let year = today.getFullYear();

            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('saat').innerHTML = h + ":" + m + ":" + s + " | " + day + "." + month + "." + year;
            setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</body>

</html>