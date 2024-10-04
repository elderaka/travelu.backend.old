<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')  | Travel-U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/pages/app-invoice-list.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/select/select2.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}


    <!-- END: Page CSS-->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">


    <style>
        .select2-selection__arrow b{
            display:none !important;
        }
    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">




    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">Footer Travel-U</span></p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/')}}app-assets/vendors/js/charts/apexcharts.min.js"></script>
    {{-- <script src="{{asset('/')}}app-assets/vendors/js/extensions/toastr.min.js"></script> --}}
    <script src="{{asset('/')}}app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/')}}app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('/')}}app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{asset('/')}}app-assets/js/scripts/forms/form-select2.js"></script>



    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });


        $(document).ready( function () {
            var table = $('#myTable').DataTable({
                'dom' : "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5 p-1'i><'col-sm-12 col-md-7 p-1'p>>",
            });
            if($('#reportTable').length){
                table = $('#reportTable').DataTable({
                    dom: "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5 p-1'i><'col-sm-12 col-md-7 p-1'p>>",
                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],
                    columnDefs: [
                        { targets: 6, visible: false },
                    ],

                });
                $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    let min = new Date($('#start_date').val());
                    min.setHours(0, 0, 0, 0);
                    let max = new Date($('#end_date').val());
                    max.setHours(23, 59, 59, 999);
                    let date = new Date(data[2]);


                    if (
                        (isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && date <= max) ||
                        (min <= date && isNaN(max)) ||
                        (min <= date && date <= max)
                    ) {
                        return true;
                    }
                    return false;
                }
            );
            };

            var columnData = table.column(9).data();

            console.log(columnData);
            $('#search').on( 'keyup', function () {
                table.search(this.value).draw();
            });
            $('.select2no').select2({
                minimumResultsForSearch: -1
            });
            $('#selectStatus').on('change', function () {
                table.search(this.value).draw();
            });
            $('#selectSekolah').on('change', function () {
                if(this.value != ""){
                    table.column(5).search('^' + this.value + '$', true, false).draw();
                }else{
                    table.column(5).search("").draw();
                }
            });
            $('#start_date').on('change', function () {
                var startDate = $(this).val();

                $('#end_date').attr('min', startDate);
                var endDate = $('#end_date').val();
                table.draw();
            });
            $('#end_date').on('change', function () {
                var startDate = $('#start_date').val();
                var endDate = $(this).val();

                table.draw();
            });

            } );
    </script>
    <script>
    </script>
    @stack('js')
</body>
<!-- END: Body-->

</html>
