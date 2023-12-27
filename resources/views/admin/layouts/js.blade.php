
<!-- All Jquery -->
<script src="{{ asset('assets/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('assets/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('assets/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('assets/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!-- <script src="{{ asset('assets/dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
<!-- Charts js Files -->
<script src="{{ asset('assets/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{ asset('assets/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('assets/dist/js/pages/chart/chart-page-init.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"  />
<script>
    // kiểm tra tồn lại session hay ko?
    @if(session()->has('success'))
    // sử dụng thư viện js để hiển thị thông báo
    toastr.Success('{{ session()->get("success") }}')
    @else if(session()->has('error'))
    toastr.error('{{ session()->get("error") }}')
    @endif

</script>


