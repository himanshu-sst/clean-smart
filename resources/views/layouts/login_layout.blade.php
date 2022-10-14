<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Clean Smart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        
        <link rel="shortcut icon" href="{{IMAGE_URL}}favicon.ico">

        
        <link href="{{CSS_URL}}icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{CSS_URL}}app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{CSS_URL}}app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body class="loading authentication-bg" >
        
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
                title: "{{ Session::get('message') }}"
            })
            </script>  
        @endif

        @if(Session::has('error'))
            <script>
            Toast.fire({
                icon: 'error',
                title: "{{ Session::get('message') }}"
            })
            </script>  
        @endif

        @yield('content')

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> © Clean Smart
        </footer>

        
        <script src="{{JS_URL}}vendor.min.js"></script>
        <script src="{{JS_URL}}app.min.js"></script>
        
        @yield('script')
        
    </body>
</html>
