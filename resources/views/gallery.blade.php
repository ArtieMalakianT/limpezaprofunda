<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
        <meta name="description" content="Limpeza de estofados automotivos e móveis">
        <meta name="keywords" content="limpeza, estofados, ozonio, profunda, automotivo, sofás, sofa, móveis">
        <meta name="author" content="Limpeza Profunda">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Limpeza Profunda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Materialize Css-->
        <link rel="stylesheet" href="/css/materialize.css">        
        <!--JQuery-->
        <script src="/js/jquery.js"></script>
        <!--Materialize Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Fontawesome-->
        <link href="/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

        <style type="text/css">
            html 
            {
                scroll-behavior: smooth;
            }
            body
            {
                font-family: Nunito;
                background-color: #cbcbcb;
            }
            .sticky
            {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 2;                
            }
            section
            {
                padding: 40px 0px 40px 0px;
                margin: 50px 0px 50px 0px;                
            }    
            footer
            {
                padding: 40px 0px 0px 0px;
                margin: 50px 0px 0px 0px;
                display: flow-root;
            }
            .asset-top
            {
                position: relative;
                top:-40px;
            }   
            .asset-bottom
            {
                position: relative;
                bottom:-46px;
            }    
            .parallax-container
            {
                height: 70em;
            }
            #gallery .container
            {
                display: inline-flex;
            }
            @media screen  and (max-device-width : 768px)
            {
                .parallax-container
                {
                    height: 14em;
                }
                h1, h5, h3, h6
                {
                    font-size:medium;
                }
                #gallery .container
                {
                    display: block;
                }
            } 
        </style>
    </head>
    <body class="antialiased">        
            <div id="top-bar" class="">
                <div class="row green-lp" style="margin:5px">                  
                    <div class="col s6">
                        <div class="">
                            
                        </div>                    
                    </div>
                    <div class="col m6 s12">
                        <div class="right-align">                        
                            <a class="btn green" href="#"><i class="fab fa-whatsapp fa-lg"></i></a>
                            <a class="btn green" href="#"><i class="fab fa-facebook fa-lg "></i></a>
                            <a class="btn green" href="#"><i class="fab fa-instagram fa-lg "></i></a>
                            <a class="btn green" href="#"><i class="fab fa-youtube fa-lg"></i></a>
                        </div>                    
                    </div>                                                    
                </div>
            </div>
            <header id="header">  
            
                <div id="navbar" class="">
                    <nav id="nav" class="" style="background-color: #080808d1;">
                        <div class="nav-wrapper" >             
                          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>                      
                          <ul class="left hide-on-med-and-down">
                            <li><a href="/#header">INÍCIO</a></li>
                            <li><a href="/#services">SERVIÇOS</a></li>
                            <li><a href="/#about">QUEM SOMOS</a></li>
                            <li><a href="/#course">TREINAMENTO</a></li>
                            <li><a href="/#contato">CONTATO</a></li>
                          </ul>
                        </div>
                    </nav>
                </div>
                
                <ul class="sidenav" id="mobile-demo">
                <li><a href="/#header">INÍCIO</a></li>
                    <li><a href="/#services">SERVIÇOS</a></li>
                    <li><a href="/#about">QUEM SOMOS</a></li>
                    <li><a href="/#course">TREINAMENTO</a></li>
                    <li><a href="/#contato">CONTATO</a></li>
                </ul>                                                        
    
              <div>                
            </header>   
            <section id="copy">
                <div class="container">
                    {{$copy}}
                </div>
            </section>

            <section id="gallery">
                <div class="container">
                    @foreach($files as $file)
                        <img src="{{Storage::url($file)}}" class="materialboxed" width="300" style="margin: 20px;" alt="">
                    @endforeach
                </div>
            </section>

            <footer class="grey darken-4">
                <img src="/img/assets/top-mask-default.png" class="responsive-img asset-top">
                <div class="container">
                    <div class="row">
                        <div class="col s6 center white-text">
                            <ul>
                               <li><a class="white-text" href="/#header">INÍCIO</a></li>
                                <li><a class="white-text" href="/#services">SERVIÇOS</a></li>
                                <li><a class="white-text" href="/#about">QUEM SOMOS</a></li>                                
                                <LI><a class="white-text" href="/#course">TREINAMENTO</a></LI>
                                <li><a class="white-text" href="/#contato">CONTATO</a></li>
                            </ul>
                        </div>
                        <div class="col s6 white-text center">
                            <div class="row">
                                <div class="col s3"><a class="white-text" href="#"><i class="fab fa-whatsapp fa-3x"></i></a></div>
                                <div class="col s3"><a class="white-text" href="#"><i class="fab fa-facebook fa-3x"></i></a></div>
                                <div class="col s3"><a class="white-text" href="#"><i class="fab fa-instagram fa-3x "></i></a></div>
                                <div class="col s3"><a class="white-text" href="#"><i class="fab fa-youtube fa-3x"></i></a></div>                                                        
                                                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <span class="white-text center">WWW.LIMPEZAPROFUNDA.COM</span><br> 
                            <small class="white-text">CNPJ 29.571.816/0001-57
                                Campos Novos - SC</small>
                        </div>                        
                    </div>
                </div>                
            </footer>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large green pulse" href="#">
                  <i class="fab fa-whatsapp"></i>
                </a>                
              </div>
    
            <!--Java and Jquery-->
            <!--Materialize Js-->
            <script src="/js/materialize.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.sidenav').sidenav();
                    
                    $('.materialboxed').materialbox();
                    
                    window.onscroll = function(){
                    fixNavbar();
                    };
                    var navbar = document.getElementById("navbar");
                    var sticky = navbar.offsetTop;

                    function fixNavbar()
                    {
                        if(window.pageYOffset >= sticky)
                        {
                            navbar.classList.add("sticky");
                        }
                        else
                        {
                            navbar.classList.remove("sticky");
                        }
                    }
                });
               
            </script>        
    </body>
</html>
