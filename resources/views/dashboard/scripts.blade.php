<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/chart.js/dist/Chart.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/widget/amchart/light.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/vartical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/pages/dashboard/analytic-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/js/script.js') }}"></script>

    <script>
        $("#logout").on("click", function(){
            $.ajax({
                url: '/logout',
                method: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr('content'),
                },
                success: function(response){
                    location.reload();
                },
                error: function(response){

                }
            })
        })
    </script>

    @yield('own_js')
