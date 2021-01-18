<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Limpeza Profunda') }}</title>

        @livewireStyles
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="/adminlte/dist/css/adminlte.css">     

        <!-- summernote -->
        <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

        <!-- IonIcons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

        <!-- Toastr -->
        <link rel="stylesheet" href="/adminlte/plugins/toastr/toastr.min.css">

    </head>
    <body class="hold-transition sidebar-mini" >  
      <!--All content of web site-->      
      <div class="wrapper">        
        
        @livewire('navigation-menu2')
        @livewire('side-nav')      


        <!-- Page Content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <h1>@stack('title')</h1>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    {{ $slot }}  
                </div>
            </section>
        </div>
                
        
      </div>   

      @stack('scripts')
      @livewireScripts
      <!-- jQuery -->
      <script src="/adminlte/plugins/jquery/jquery.min.js"></script>

      <!-- Bootstrap -->
      <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- AdminLTE -->
      <script src="/adminlte/dist/js/adminlte.js"></script>    

      <!-- Summernote -->
      <script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>

      <!-- Toastr -->
        <script src="/adminlte/plugins/toastr/toastr.min.js"></script>

      <script type="text/javascript">
            $(function () {

                $('#summernote').summernote();
                $('#summernote2').summernote();

                var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
             
                            
                }); 

                window.addEventListener('adicionado', event => {
                    Toast.fire({
                    icon: 'success',
                    title: event.detail.message,
                    
                    }); });

                window.addEventListener('erro', event => {
                    Toast.fire({
                    icon: 'error',
                    title: event.detail.message,
                    });});

                bsCustomFileInput.init(); 
                

             })    
        </script>    
                              

    </body>
</html>
