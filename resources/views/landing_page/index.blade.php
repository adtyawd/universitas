<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Universitas</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('landing_page/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/css/animate.css') }}" rel="stylesheet">
    <!-- Jquery Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/css/jquery.fancybox.min.css') }}"
        media="screen" />
    <link rel="stylesheet" href="{{ asset('landing_page/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/rs-plugin/css/settings.css') }}">
    <link href="{{ asset('landing_page/css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .nav-link {
            text-decoration: none;
            color: #333;
        }

        .circle-image {
            width: 25%;
            height: 55px;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 10px;
        }

        .dropdown-item:hover {
            background-color: #333;
            color: greenyellow;
        }

        .dropdown-item:active {
            background-color: #333;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .card-pemilik {
            display: flex;
            align-items: center;
        }

        .card-text-pemilik {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <!-- Header start -->
    <div class="custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
        <div class="header">
            <div class="container">
                <!-- Row Rtart -->
                <div class="row">
                    <div class="col-lg-2 navbar-light">
                        <div class="logo wow fadeInLeft" data-wow-delay="600ms">
                            <img src="{{ asset('own_assets/images/logo.png') }}" alt="">
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"
                            style="background-color: #ccc;border: 1px solid black; opacity: 0.6;">
                            <span class="navbar-toggler-icon";></span>
                        </button>
                    </div>
                    <div class="col-lg-10 d-flex justify-content-end text-right">
                        <!--navegation-->
                        <nav class="navbar navbar-expand-lg navbar-light wow fadeInLeft" data-wow-delay="600ms"
                            style="margin: 0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <button class="close-toggler" type="button" data-toggle="offcanvas">
                                    <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
                                </button>
                                <ul class="navbar-nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>


                                    <li class="nav-item">
                                        <a class="nav-link smoothscroll" href="/login">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
    </div>
    <!-- Header end -->
    <!-- Revolution slider start -->
    <div class="tp-banner-container" id="home">
        <div class="tp-banner">
            <ul>
                <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000"
                    data-saveperformance="on">
                    <img alt="" alt="" src="{{ asset('own_assets/images/homepage.jpg') }}"
                        data-lazyload="{{ asset('own_assets/images/homepage.jpg') }}">
                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->
    <!-- slider Form start -->

    <!-- slider end -->
    <!--Properties Start-->


    <!--page scroll start-->
    <div class="page-scroll scrollToTop">
        <a href="#" style="border-radius: 20px; border: 0"><i class="fa fa-arrow-up" aria-hidden="true"></i>
        </a>
    </div>
    <!--page scroll start-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('landing_page/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing_page/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing_page/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <!-- sticky script file -->
    <script src="{{ asset('landing_page/js/jquery.sticky.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('landing_page/js/counter.js') }}"></script>
    <!-- nice select -->
    <script src="{{ asset('landing_page/js/jquery.nice-select.js') }}"></script>
    <!-- general script file -->
    <script src="{{ asset('landing_page/js/owl.carousel.js') }}"></script>
    <!-- Jquery Fancybox -->
    <script src="{{ asset('landing_page/js/jquery.fancybox.min.js') }}"></script>
    <!-- smoothscroll script file -->
    <script src="{{ asset('landing_page/js/smoothscroll.js') }}"></script>
    <!-- custom script file -->
    <script src="{{ asset('landing_page/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('landing_page/js/script.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <meta name="public-path" content="{{ public_path('own_assets/images') . '/' }}">

    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard_assets/js/demo/datatables-demo.js') }}"></script>

    <script>
        const FOTO_PEGAWAI = $("meta[name='public-path']").attr('content');
        let dt_basic;
        let dt_basic2;
        $(function() {
            var dt_basic_table = $('.datatable_registrasi');

            if (dt_basic_table.length) {
                dt_basic = dt_basic_table.DataTable({
                    ajax: '/daftar-peserta/load-data',
                    columns: [{
                            data: ''
                        },
                        {
                            data: null,
                            render: function(data, type, full, meta) {
                                return meta.row += 1;
                            }
                        },
                        {
                            data: 'id'
                        },
                        {
                            data: 'nama',
                        },
                        {
                            data: 'nama_pendamping',
                        },
                        {
                            data: null,
                            render:function(data, type, full, meta){
                                if(data.status_daftar){
                                    return 'Hadir'
                                }else{
                                    return ``
                                }
                            }
                        },
                        // {
                        //     data: null,
                        //     render:function(data, type, full, meta){
                        //         if(data.hadir_1 != ''){
                        //             return `
                    //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
                    //             `
                        //         }else{
                        //             return ``
                        //         }
                        //     }
                        // },
                        // {
                        //     data: null,
                        //     render:function(data, type, full, meta){
                        //         if(data.hadir_2 != ''){
                        //             return `
                    //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
                    //             `
                        //         }else{
                        //             return ``
                        //         }
                        //     }
                        // },
                        // {
                        //     data: null,
                        //     render:function(data, type, full, meta){
                        //         if(data.hadir_3 != ''){
                        //             return `
                    //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
                    //             `
                        //         }else{
                        //             return ``
                        //         }
                        //     }
                        // },
                    ],
                    columnDefs: [{

                            orderable: false,
                            searchable: false,
                            responsivePriority: 2,
                            targets: 0,
                            render: function(data, type, full, meta) {
                                return '';
                            }
                        },
                        {
                            targets: 1,
                            searchable: false,
                            visible: false,
                        },
                        {
                            targets: 3,
                            searchable: true,
                            visible: true,
                            width: 250,
                        },
                    ],
                    initComplete: function() {
                        this.api().columns().every(function() {
                            var column = this;
                            if (column.index() === 4) {
                                $('.filter-tps').on('input', function() {
                                    column.search(this.value).draw();
                                });
                            }
                            if (column.index() === 5) {
                                $('.filter-kelurahan').on('input', function() {
                                    column.search(this.value).draw();
                                });
                            }
                            if (column.index() === 6) {
                                $('.filter-kecamatan').on('input', function() {
                                    column.search(this.value).draw();
                                });
                            }
                            if (column.index() === 7) {
                                $('.filter-kabupaten').on('input', function() {
                                    column.search(this.value).draw();
                                });
                            }
                            if (column.index() === 8) {
                                $('.filter-regional').on('input', function() {
                                    column.search(this.value).draw();
                                });
                            }
                        });
                    },
                    order: [
                        [2, 'asc']
                    ],
                    //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    displayLength: 5,
                    lengthMenu: [10, 25, 50, 75, 100],
                    buttons: [{
                            extend: 'collection',
                            className: 'btn btn-label-primary dropdown-toggle me-2',
                            text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
                            buttons: [{
                                    extend: 'print',
                                    text: '<i class="ti ti-printer me-1" ></i>Print',
                                    className: 'dropdown-item',
                                    exportOptions: {
                                        columns: [3, 4, 5, 6, 7],
                                        // prevent avatar to be display
                                        format: {
                                            body: function(inner, coldex, rowdex) {
                                                if (inner.length <= 0) return inner;
                                                var el = $.parseHTML(inner);
                                                var result = '';
                                                $.each(el, function(index, item) {
                                                    if (item.classList !== undefined &&
                                                        item.classList.contains(
                                                            'user-name')) {
                                                        result = result + item.lastChild
                                                            .firstChild.textContent;
                                                    } else if (item.innerText ===
                                                        undefined) {
                                                        result = result + item
                                                            .textContent;
                                                    } else result = result + item
                                                        .innerText;
                                                });
                                                return result;
                                            }
                                        }
                                    },
                                    customize: function(win) {
                                        //customize print view for dark
                                        $(win.document.body)
                                            .css('color', config.colors.headingColor)
                                            .css('border-color', config.colors.borderColor)
                                            .css('background-color', config.colors.bodyBg);
                                        $(win.document.body)
                                            .find('table')
                                            .addClass('compact')
                                            .css('color', 'inherit')
                                            .css('border-color', 'inherit')
                                            .css('background-color', 'inherit');
                                    }
                                },
                                {
                                    extend: 'csv',
                                    text: '<i class="ti ti-file-text me-1" ></i>Csv',
                                    className: 'dropdown-item',
                                    exportOptions: {
                                        columns: [3, 4, 5, 6, 7],
                                        // prevent avatar to be display
                                        format: {
                                            body: function(inner, coldex, rowdex) {
                                                if (inner.length <= 0) return inner;
                                                var el = $.parseHTML(inner);
                                                var result = '';
                                                $.each(el, function(index, item) {
                                                    if (item.classList !== undefined &&
                                                        item.classList.contains(
                                                            'user-name')) {
                                                        result = result + item.lastChild
                                                            .firstChild.textContent;
                                                    } else if (item.innerText ===
                                                        undefined) {
                                                        result = result + item
                                                            .textContent;
                                                    } else result = result + item
                                                        .innerText;
                                                });
                                                return result;
                                            }
                                        }
                                    }
                                },
                                {
                                    extend: 'excel',
                                    text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                                    className: 'dropdown-item',
                                    exportOptions: {
                                        columns: [3, 4, 5, 6, 7],
                                        // prevent avatar to be display
                                        format: {
                                            body: function(inner, coldex, rowdex) {
                                                if (inner.length <= 0) return inner;
                                                var el = $.parseHTML(inner);
                                                var result = '';
                                                $.each(el, function(index, item) {
                                                    if (item.classList !== undefined &&
                                                        item.classList.contains(
                                                            'user-name')) {
                                                        result = result + item.lastChild
                                                            .firstChild.textContent;
                                                    } else if (item.innerText ===
                                                        undefined) {
                                                        result = result + item
                                                            .textContent;
                                                    } else result = result + item
                                                        .innerText;
                                                });
                                                return result;
                                            }
                                        }
                                    }
                                },
                                {
                                    extend: 'pdf',
                                    text: '<i class="ti ti-file-description me-1"></i>Pdf',
                                    className: 'dropdown-item',
                                    exportOptions: {
                                        columns: [2, 3],
                                        // prevent avatar to be display
                                        format: {
                                            body: function(inner, coldex, rowdex) {
                                                if (inner.length <= 0) return inner;
                                                var el = $.parseHTML(inner);
                                                var result = '';
                                                $.each(el, function(index, item) {
                                                    if (item.classList !== undefined &&
                                                        item.classList.contains(
                                                            'user-name')) {
                                                        result = result + item.lastChild
                                                            .firstChild.textContent;
                                                    } else if (item.innerText ===
                                                        undefined) {
                                                        result = result + item
                                                            .textContent;
                                                    } else result = result + item
                                                        .innerText;
                                                });
                                                return result;
                                            }
                                        }
                                    }
                                },
                                {
                                    extend: 'copy',
                                    text: '<i class="ti ti-copy me-1" ></i>Copy',
                                    className: 'dropdown-item',
                                    exportOptions: {
                                        columns: [3, 4, 5, 6, 7],
                                        // prevent avatar to be display
                                        format: {
                                            body: function(inner, coldex, rowdex) {
                                                if (inner.length <= 0) return inner;
                                                var el = $.parseHTML(inner);
                                                var result = '';
                                                $.each(el, function(index, item) {
                                                    if (item.classList !== undefined &&
                                                        item.classList.contains(
                                                            'user-name')) {
                                                        result = result + item.lastChild
                                                            .firstChild.textContent;
                                                    } else if (item.innerText ===
                                                        undefined) {
                                                        result = result + item
                                                            .textContent;
                                                    } else result = result + item
                                                        .innerText;
                                                });
                                                return result;
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
                            className: 'create-new btn btn-primary'
                        }
                    ],
                });

                dt_basic.on('draw.dt', function() {
                    dt_basic.column(2).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                });
            }
        });
        // let dt_basic;
        // let dt_basic2;
        // $(function() {
        //     var dt_basic_table = $('.datatable_registrasi');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/data-peserta-panitia/load-data',
        //             columns: [{
        //                     data: ''
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row += 1;
        //                     }
        //                 },
        //                 {
        //                     data: 'id'
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         let path = "";
        //                         if (!data.foto) {
        //                             path += FOTO_PEGAWAI + "no_user.jpg";
        //                         } else {
        //                             path = FOTO_PEGAWAI + data.foto;
        //                         }
        //                         return `
        //                         <div class="card-pemilik">
        //                             <img class="circle-image btn-popup" src="${path}" alt="Pas Foto" width="100px">
        //                             <div class="card-text-pemilik">
        //                                 <div class="flex-container">
        //                                     <b>${data.nama}</b> <br> (${data.nip})
        //                                 </div>
        //                             </div>
        //                         </div>
        //         `
        //                     }
        //                 },
        //                 {
        //                     data: 'golongan',
        //                 },
        //                 {
        //                     data: 'jabatan',
        //                 },
        //                 {
        //                     data: 'status',
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         let path = "";
        //                         if (data.status_registrasi) {
        //                             path = `<div class="card-pemilik">
        //                                         <div class="card-text-pemilik">
        //                                             <div class="flex-container">
        //                                                 <b>${data.status_registrasi}</b> <br> (${data.waktu_registrasi})
        //                                             </div>
        //                                         </div>
        //                                     </div>`;
        //                         } else {
        //                             path = '';
        //                         }
        //                         return path;
        //                     }
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 250,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 5,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_narasumber');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/data-narasumber/load-data',
        //             columns: [{
        //                     data: ''
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row += 1;
        //                     }
        //                 },
        //                 {
        //                     data: 'id'
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         let path = "";
        //                         if (!data.foto) {
        //                             path = "own_assets/images/no_user.jpg";
        //                         } else {
        //                             path = FOTO_PEGAWAI + data.foto;
        //                         }
        //                         return `
        //             <div class="card-pemilik">
        //                 <img class="circle-image btn-popup" src="${path}" alt="Pas Foto" width="100px">
        //                 <div class="card-text-pemilik">
        //                     <div class="flex-container">
        //                         <b>${data.nama}</b> <br> (${data.nip})
        //                     </div>
        //                 </div>
        //             </div>
        //         `
        //                     }
        //                 },
        //                 {
        //                     data: 'jabatan',
        //                 },
        //                 {
        //                     data: 'satker',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 250,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 10,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_dokumen');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/data-dokumen/load-data',
        //             columns: [{
        //                     data: ''
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row += 1;
        //                     }
        //                 },
        //                 {
        //                     data: 'id'
        //                 },
        //                 {
        //                     data: 'nama_dokumen',
        //                 },
        //                 {
        //                     data: "file_dokumen",
        //                     render: function(data, type, full, meta) {
        //                         return (
        //                             `<a href="/download/${data}">${data}</a>`
        //                         );
        //                     },
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 250,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 10,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_rundownPertama');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/rundownPertama/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: 'tgl_kegiatan',
        //                 },
        //                 {
        //                     data: 'hari_kegiatan',
        //                 },
        //                 {
        //                     data: 'jam_kegiatan',
        //                 },
        //                 {
        //                     data: 'uraian_kegiatan',
        //                 },
        //                 {
        //                     data: 'keterangan_kegiatan',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 5,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_rundownKedua');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/rundownKedua/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: 'tgl_kegiatan',
        //                 },
        //                 {
        //                     data: 'hari_kegiatan',
        //                 },
        //                 {
        //                     data: 'jam_kegiatan',
        //                 },
        //                 {
        //                     data: 'uraian_kegiatan',
        //                 },
        //                 {
        //                     data: 'keterangan_kegiatan',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 5,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_rundownKetiga');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/rundownKetiga/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: 'tgl_kegiatan',
        //                 },
        //                 {
        //                     data: 'hari_kegiatan',
        //                 },
        //                 {
        //                     data: 'jam_kegiatan',
        //                 },
        //                 {
        //                     data: 'uraian_kegiatan',
        //                 },
        //                 {
        //                     data: 'keterangan_kegiatan',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 6,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_abnsensiPertama');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/absensiPertama/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return "Hari Ke - 1";
        //                     },
        //                 },
        //                 {
        //                     data: 'nama',
        //                 },
        //                 {
        //                     data: 'nip',
        //                 },
        //                 {
        //                     data: 'golongan',
        //                 },
        //                 {
        //                     data: 'jabatan',
        //                 },
        //                 {
        //                     data: 'status',
        //                 },
        //                 {
        //                     data: 'waktu_1',
        //                 },
        //                 {
        //                     data: 'hadir_1',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 6,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_abnsensiKedua');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/absensiKedua/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return "Hari Ke - 1";
        //                     },
        //                 },
        //                 {
        //                     data: 'nama',
        //                 },
        //                 {
        //                     data: 'nip',
        //                 },
        //                 {
        //                     data: 'golongan',
        //                 },
        //                 {
        //                     data: 'jabatan',
        //                 },
        //                 {
        //                     data: 'status',
        //                 },
        //                 {
        //                     data: 'waktu_1',
        //                 },
        //                 {
        //                     data: 'hadir_1',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 6,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });

        // $(function() {
        //     var dt_basic_table = $('.datatable_abnsensiKetiga');

        //     if (dt_basic_table.length) {
        //         dt_basic = dt_basic_table.DataTable({
        //             ajax: '/absensiKetiga/load-data',
        //             columns: [{
        //                     data: null
        //                 }, {
        //                     data: null
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return meta.row + 1;
        //                     },
        //                 },
        //                 {
        //                     data: null,
        //                     render: function(data, type, full, meta) {
        //                         return "Hari Ke - 1";
        //                     },
        //                 },
        //                 {
        //                     data: 'nama',
        //                 },
        //                 {
        //                     data: 'nip',
        //                 },
        //                 {
        //                     data: 'golongan',
        //                 },
        //                 {
        //                     data: 'jabatan',
        //                 },
        //                 {
        //                     data: 'status',
        //                 },
        //                 {
        //                     data: 'waktu_1',
        //                 },
        //                 {
        //                     data: 'hadir_1',
        //                 },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_1 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_1 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_1})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_2 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_2 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_2})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //                 // {
        //                 //     data: null,
        //                 //     render:function(data, type, full, meta){
        //                 //         if(data.hadir_3 != ''){
        //                 //             return `
        //             //                 <b>${data.hadir_3 ? 'Hadir' : 'Tidak Hadir'}</b> <br> (${data.waktu_3})
        //             //             `
        //                 //         }else{
        //                 //             return ``
        //                 //         }
        //                 //     }
        //                 // },
        //             ],
        //             columnDefs: [{

        //                     orderable: false,
        //                     searchable: false,
        //                     responsivePriority: 2,
        //                     targets: 0,
        //                     render: function(data, type, full, meta) {
        //                         return '';
        //                     }
        //                 },
        //                 {
        //                     targets: 1,
        //                     searchable: false,
        //                     visible: false,
        //                     width: 10,
        //                 },
        //                 {
        //                     targets: 3,
        //                     searchable: true,
        //                     visible: true,
        //                     width: 150,
        //                 },
        //             ],
        //             initComplete: function() {
        //                 this.api().columns().every(function() {
        //                     var column = this;
        //                     if (column.index() === 4) {
        //                         $('.filter-tps').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 5) {
        //                         $('.filter-kelurahan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 6) {
        //                         $('.filter-kecamatan').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 7) {
        //                         $('.filter-kabupaten').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                     if (column.index() === 8) {
        //                         $('.filter-regional').on('input', function() {
        //                             column.search(this.value).draw();
        //                         });
        //                     }
        //                 });
        //             },
        //             order: [
        //                 [2, 'asc']
        //             ],
        //             //   dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        //             displayLength: 6,
        //             lengthMenu: [10, 25, 50, 75, 100],
        //             buttons: [{
        //                     extend: 'collection',
        //                     className: 'btn btn-label-primary dropdown-toggle me-2',
        //                     text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //                     buttons: [{
        //                             extend: 'print',
        //                             text: '<i class="ti ti-printer me-1" ></i>Print',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             },
        //                             customize: function(win) {
        //                                 //customize print view for dark
        //                                 $(win.document.body)
        //                                     .css('color', config.colors.headingColor)
        //                                     .css('border-color', config.colors.borderColor)
        //                                     .css('background-color', config.colors.bodyBg);
        //                                 $(win.document.body)
        //                                     .find('table')
        //                                     .addClass('compact')
        //                                     .css('color', 'inherit')
        //                                     .css('border-color', 'inherit')
        //                                     .css('background-color', 'inherit');
        //                             }
        //                         },
        //                         {
        //                             extend: 'csv',
        //                             text: '<i class="ti ti-file-text me-1" ></i>Csv',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'excel',
        //                             text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'pdf',
        //                             text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [2, 3],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         },
        //                         {
        //                             extend: 'copy',
        //                             text: '<i class="ti ti-copy me-1" ></i>Copy',
        //                             className: 'dropdown-item',
        //                             exportOptions: {
        //                                 columns: [3, 4, 5, 6, 7],
        //                                 // prevent avatar to be display
        //                                 format: {
        //                                     body: function(inner, coldex, rowdex) {
        //                                         if (inner.length <= 0) return inner;
        //                                         var el = $.parseHTML(inner);
        //                                         var result = '';
        //                                         $.each(el, function(index, item) {
        //                                             if (item.classList !== undefined &&
        //                                                 item.classList.contains(
        //                                                     'user-name')) {
        //                                                 result = result + item.lastChild
        //                                                     .firstChild.textContent;
        //                                             } else if (item.innerText ===
        //                                                 undefined) {
        //                                                 result = result + item
        //                                                     .textContent;
        //                                             } else result = result + item
        //                                                 .innerText;
        //                                         });
        //                                         return result;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     ]
        //                 },
        //                 {
        //                     text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data Baru</span>',
        //                     className: 'create-new btn btn-primary'
        //                 }
        //             ],
        //         });

        //         dt_basic.on('draw.dt', function() {
        //             dt_basic.column(2).nodes().each(function(cell, i) {
        //                 cell.innerHTML = i + 1;
        //             });
        //         });
        //     }
        // });
    </script>
</body>

<!-- Mirrored from www.malikhassan.com/html/travellia/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 04:55:22 GMT -->

</html>
