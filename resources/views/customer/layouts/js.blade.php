<!-- jquery latest version -->
<script src="{{ asset('assets/assetscustomer/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/assetscustomer/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('assets/assetscustomer/js/bootstrap.bundle.min.js')}}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ asset('assets/assetscustomer/lib/js/jquery.nivo.slider.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('assets/assetscustomer/js/plugins.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('assets/assetscustomer/js/main.js')}}"></script>

<script type = "text/javascript">
    $(".product-remove").click(function (e){
        e.preventDefault();
        var ele = $(this);

        if(confirm("Bạn muốn xóa?")){
            $.ajax({
                url: '{{ route ('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });

        }
    });
</script>
