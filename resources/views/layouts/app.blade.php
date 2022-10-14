<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Clean Smart </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" />
        <meta content="" name="author" />
        <link rel="shortcut icon" href="{{IMAGE_URL}}favicon.ico">
        <link href="{{CSS_URL}}vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{CSS_URL}}app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
            <style>
            .btn-group > .btn:focus{
                background: #1a223d;
                outline: none!important;
                box-shadow:none;
                    color: #fff;
                border: 1px solid #ddd;
            }
        </style>
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body class="loading">
        <div class="wrapper">
            <style>
                .preloader .loader {
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: -webkit-fill-available;
                }
            </style>
            <div class="preloader" id="preloader">
                <div class="loader">
                   {{-- <svg class="spinner" viewbox="0 0 50 50">
                      <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                   </svg> --}}
                   <img src="{{IMAGE_URL}}loading.gif" class="loader_img">
                </div>
            </div>

            <!-- tost message -->
            <script>
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
            </script>

            @if(Session::has('success'))
                <script>
                Toast.fire({
                    icon: 'success',
                    title: "{{ !empty(Session::get('message')) ? Session::get('message') :Session::get('success') }}"
                })
                </script>  
            @endif

            @if(Session::has('error'))
                <script>
                Toast.fire({
                    icon: 'error',
                    title: "{{ !empty(Session::get('message')) ? Session::get('message') :Session::get('error') }}"
                })
                </script>  
            @endif

            @include('layouts.elements.left_menu')
            <div class="content-page">
                <div class="content">
                    @include('layouts.elements.header')

                    @yield('content')
                </div>
                @include('layouts.elements.footer')
            </div>

        </div>

        <script src="{{JS_URL}}vendor.min.js"></script> 
        <script src="{{JS_URL}}app.min.js"></script> 
        <script src="{{JS_URL}}vendor/apexcharts.min.js"></script> 
        <script src="{{JS_URL}}vendor/jquery-jvectormap-1.2.2.min.js"></script> 
        <script src="{{JS_URL}}vendor/jquery-jvectormap-world-mill-en.js"></script> 
        <script src="{{JS_URL}}pages/demo.dashboard.js"></script> 
        <script src="{{JS_URL}}vendor/jquery.dataTables.min.js"></script> 
        <script src="{{JS_URL}}vendor/dataTables.bootstrap4.js"></script> 
        <script src="{{JS_URL}}vendor/dataTables.responsive.min.js"></script> 
        <script src="{{JS_URL}}vendor/responsive.bootstrap4.min.js"></script> 
        <script src="{{JS_URL}}vendor/dataTables.buttons.min.js"></script> 
        <script src="{{JS_URL}}vendor/buttons.bootstrap4.min.js"></script> 
        <script src="{{JS_URL}}vendor/buttons.html5.min.js"></script> 
        <script src="{{JS_URL}}vendor/dataTables.keyTable.min.js"></script> 
        <script src="{{JS_URL}}vendor/dataTables.select.min.js"></script> 
        <script src="{{JS_URL}}pages/demo.datatable-init.js"></script>
        <script>
            $(document).ready(function () {
                $(".btn-group > button.btn").on("click", function(){
                    var letter =  $(this).text();        
                    $(".searchable tr td:nth-child(1)").each(function () {
                        $(this).parent().show();            
                        if(!$(this).text().toUpperCase().indexOf(letter) == 0  && letter !== 'ALL'){
                            $(this).parent().hide();
                        }
                    });      
                });
                
            });
        </script>

        @yield('script')

    </body>
</html>