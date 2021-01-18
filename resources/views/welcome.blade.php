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
        <link rel="stylesheet" href="css/materialize.css">        
        <!--JQuery-->
        <script src="js/jquery.js"></script>
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
                height: 80em;
            }
            #services .container
            {
                width: 80%;
            }
            .modal
            {
                background: rgb(0 0 0 / 0%);
                box-shadow: 0 0 black;
            }
            .modal-footer
            {
                background-color: #fff0;
            }
            #modalPromo .modal-content
            {
                overflow: hidden;
            }          
            .hide
            {
                display: none;
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
                #services .container
                {
                    width: 90%;
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
                            <a class="btn green" target="_blank" href="https://api.whatsapp.com/send?phone=5549991616014&text=Visitei%20o%20site%20e%20desejo%20mais%20informa%C3%A7%C3%B5es!" title="Nosso Whatsapp"><i class="fab fa-whatsapp fa-lg"></i></a>
                            <a class="btn green" target="_blank" href="https://www.facebook.com/Limpezaprofundasc/" title="Nosso Facebook"><i class="fab fa-facebook fa-lg "></i></a>
                            <a class="btn green" target="_blank" href="https://www.instagram.com/limpezaprofundasc" title="Instagram LP"><i class="fab fa-instagram fa-lg "></i></a>
                            <a class="btn green" target="_blank" href="https://www.youtube.com/channel/UCryj7CzypjKrKB-zhVjNzgw/featured" title="Nosso Canal Youtube"><i class="fab fa-youtube fa-lg"></i></a>
                            <a class="btn green" target="_blank" href="mailto:limpezaprofundasc@gmail.com" title="limpezaprofundasc@gmail.com"><i class="fab fa-google fa-lg"></i></a>                            
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
                            <li><a href="#header">INÍCIO</a></li>
                            <li><a href="#services">SERVIÇOS</a></li>
                            <li><a href="#about">QUEM SOMOS</a></li>
                            <li><a href="#course">TREINAMENTO</a></li>
                            <li><a href="#contato">CONTATO</a></li>
                          </ul>

                          <ul id="nav-mobile" class="right hide-on-med-and-down hide">                            
                                <li><a class="white-text" target="_blank" href="https://api.whatsapp.com/send?phone=5549991616014&text=Visitei%20o%20site%20e%20desejo%20mais%20informa%C3%A7%C3%B5es!" title="Nosso Whatsapp"><i class="fab fa-whatsapp fa-lg"></i></a></li>                                
                                <li><a class="white-text" target="_blank" href="https://www.facebook.com/Limpezaprofundasc/" title="Nosso Facebook"><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a class="white-text" target="_blank" href="https://www.instagram.com/limpezaprofundasc" title="Instagram LP"><i class="fab fa-instagram fa-lg"></i></a></li>
                                <li><a class="white-text" target="_blank" href="https://www.youtube.com/channel/UCryj7CzypjKrKB-zhVjNzgw/featured" title="Nosso canala Youtube"><i class="fab fa-youtube fa-lg"></i></a></li>                                                        
                                <li><a class="white-text" target="_blank" href="mailto:limpezaprofundasc@gmail.com" title="limpezaprofundasc@gmail.com"><i class="fab fa-google fa-lg"></i></a></li>
                            </div>
                        </ul>
                        </div>
                    </nav>
                </div>
                
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="#header">INÍCIO</a></li>
                    <li><a href="#services">SERVIÇOS</a></li>
                    <li><a href="#about">QUEM SOMOS</a></li>
                    <li><a href="#course">TREINAMENTO</a></li>
                    <li><a href="#contato">CONTATO</a></li>

                    <li><a class="white-text" target="_blank" href="https://api.whatsapp.com/send?phone=5549991616014&text=Visitei%20o%20site%20e%20desejo%20mais%20informa%C3%A7%C3%B5es!" title="Nosso Whatsapp"><i class="fab fa-whatsapp fa-lg">Whatsapp</i></a></li>                                
                    <li><a class="white-text" target="_blank" href="https://www.facebook.com/Limpezaprofundasc/" title="Nosso Facebook"><i class="fab fa-facebook fa-lg">Facebook</i></a></li>
                    <li><a class="white-text" target="_blank" href="https://www.instagram.com/limpezaprofundasc" title="Instagram LP"><i class="fab fa-instagram fa-lg">Instagram</i></a></li>
                    <li><a class="white-text" target="_blank" href="https://www.youtube.com/channel/UCryj7CzypjKrKB-zhVjNzgw/featured" title="Nosso canala Youtube"><i class="fab fa-youtube fa-lg">Youtube</i></a></li>                                                        
                    <li><a class="white-text" target="_blank" href="mailto:limpezaprofundasc@gmail.com" title="limpezaprofundasc@gmail.com"><i class="fab fa-google fa-lg">Email</i></a></li>
                </ul>                                                        
    
              <div>
                <div class="parallax-container">
                    <div class="parallax" >
                        <img src="{{Storage::url($banner->path)}}" alt="Crianças no sofá" class="responsive-img" >              
                    </div>
                </div>              
                <img src="img/assets/bottom-mask.png" class="responsive-img" style="margin-top: -100%;">              
              </div>
            </header>   
            
            <section id="services">
                <div class="container">
                    <h1 class="green-lp center truncate" style="font-weight:bold;">NOSSOS SERVIÇOS</h1>
                    <h5 class="grey-text text-darken-3 center">LIMPEZA E HIGIENIZAÇÃO</h5>
    
                    <div id="cards" class="row">
                        @foreach($services as $service)
                        <div class="col s12 m6">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <!--<img src="/img/Higienização.jpg">-->
                                    <img src="{{Storage::url($service->img)}}">
                                </div>
                                <div class="card-content green-lp-bg">                            
                                    <h3 style="text-transform: uppercase;" class="white-text center truncate">{{$service->nome}}</h3>                           
                                    
                                </div>
                                <div class="card-content" style="max-height: 200px; overflow: hidden">
                                    <span class="">{{$service->copy}}</span>
                                </div>
                                <div class="card-action">
                                    <a href="/fotos/{{$service->id}}" target="_blank" class="btn waves-effect modal-trigger green">Ver resultados</a>
                                </div>
                               
                            </div>
                        </div>                    
                        @endforeach
                        <!--<div class="col s6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="/img/Ozonio.jpg">
                                </div>
                                <div class="card-content green-lp-bg">                            
                                    <h3 class="white-text center truncate">OXI-SANITIZAÇÃO</h3>                           
                                    
                                </div>
                                <div class="card-content">
                                    <span>Copy...</span>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="green-text">Ver resultados</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col s6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="/img/veiculo.png">
                                </div>
                                <div class="card-content green-lp-bg">                            
                                    <h3 class="white-text center truncate">VEÍCULOS</h3>                           
                                    
                                </div>
                                <div class="card-content">
                                    <span>Copy...</span>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="green-text">Ver resultados</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col s6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="/img/Colchão.png">
                                </div>
                                <div class="card-content green-lp-bg">                            
                                    <h3 class="white-text center truncate">COLCHÕES</h3>                           
                                    
                                </div>
                                <div class="card-content">
                                    <span>Copy...</span>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="green-text">Ver resultados</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
     
                </div>
            </section>
    
            <section id="about" class="grey darken-4">
                <img src="/img/assets/top-mask-default.png" class="responsive-img asset-top">
                <div class="container">
                    <h1 class="green-lp center" style="font-weight:bold;">QUEM SOMOS</h1>
                    <span class="white-text center"><?php echo $about->copy  ?></span>
                    @if($about->link)
                    <div class="video-container">
                        <?php echo $about->link ?>
                    </div>
                    @endif
                </div>
                <img src="/img/assets/bottom-mask-default.png" class="responsive-img asset-bottom">
            </section>
    
            <section id="comments">        
                <div class="container">
                    <h1 class="green-lp center truncate" style="font-weight:bold;">COMENTÁRIOS</h1>
                    <h5 class="grey-text text-darken-4 center">O QUE DIZEM SOBRE NÓS?</h5>
                    <div class="row">
                        <div class="col s1" style="padding-top: 15%;">                                                
                            <a href="prev" class="movePrevCarousel"><img src="/img/assets/seta-left.png" class="responsive-img"></a>
                        </div>
                        <div class="carousel carousel-slider col s10">
                            @foreach($comments as $comment)
                                <a class="carousel-item" href="{{$comment->link}}"><img src="{{Storage::url($comment->path)}}"></a>
                                <!--<a class="carousel-item" href=""><img src="/img/coments/Captura de tela 2020-12-23 095424.png"></a>
                                <a class="carousel-item" href=""><img src="/img/coments/Captura de tela 2020-12-23 095456.png"></a>
                                <a class="carousel-item" href=""><img src="/img/coments/Captura de tela 2020-12-23 095531.png"></a>-->
                            @endforeach
                        </div>
                        <div class="col s1" style="padding-top: 15%;">
                            <a href="prev" class="moveNextCarousel"><img src="/img/assets/seta-right.png" class="responsive-img"></a>
                        </div>
                    </div>
                </div>            
            </section>
    
            <section id="course" class="grey darken-4">
                <img src="/img/assets/top-mask-default.png" class="responsive-img asset-top">
                <div class="container">
                    <h1 class="green-lp center truncate" style="font-weight:bold;">TREINAMENTO</h1>
                    <span class="white-text center"><?php $file = fopen(public_path($course->copy),'r'); while(!feof($file)){$linha = fgets($file,'1024'); echo $linha;} fclose($file); ?></span>

                    <div class="row">
                        <div class="col s12">
                            <img src="{{Storage::url($course->path)}}" class="responsive-img" alt="treinamento limpeza">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m3"></div>
                        <div class="col m6 s12">
                            <a class="waves-effect waves-light btn-large green" style="width: 100%;" href="{{$course->link}}"><span style="font-weight: bold;">QUERO APRENDER ESSA PROFISSÃO!</span></a>
                        </div>       
                        <div class="col m3"></div>                 
                    </div>
                </div>    
                <img src="/img/assets/bottom-mask-default.png" class="responsive-img asset-bottom">            
            </section>

            <section id="loja">
                <div class="container">
                    <h1 class="green-lp center" style="font-weight:bold;">LOJA VIRTUAL</h1>
                    <span class="grey-text text-darken-4 center"><?php $fileStore = fopen(public_path($store->copy),'r'); while(!feof($fileStore)){$linha = fgets($fileStore,'1024'); echo $linha;} fclose($fileStore); ?></span>
                    <div class="row">
                        <div class="col m4"></div>
                        <div class="col m4">
                            <img src="{{Storage::url($store->img)}}" class="responsive-img" alt="loja virtual">
                        </div>
                        <div class="col m4"></div>
                    </div>
                    <div class="row">
                        <div class="col m3"></div>
                        <div class="col m6 s12">
                            <a class="waves-effect waves-light btn-large grey darken-4" style="width: 100%;" href=""><span style="font-weight: bold;">ACESSAR LOJA</span></a>
                        </div>
                        <div class="col m3"></div>
                    </div>
                </div>
            </section>

            <section id="parceiros" class="grey darken-4">
                <img src="/img/assets/top-mask-default.png" class="responsive-img asset-top">

                <div class="container">
                    <h1 class="green-lp center" style="font-weight:bold;">PARCEIROS</h1>
                    <span class="white-text center"><?php $fileStore = fopen(public_path($parceiro->copy),'r'); while(!feof($fileStore)){$linha = fgets($fileStore,'1024'); echo $linha;} fclose($fileStore); ?></span>
                    <div class="row">
                        <div class="col m4"></div>
                        <div class="col m4">
                            <img src="{{Storage::url($parceiro->img)}}" class="responsive-img" alt="maps limpeza profunda">
                        </div>
                        <div class="col m4"></div>
                    </div>
                    <div class="row">
                        <span class="white-text center"><?php $fileStore = fopen(public_path($parceiro->cidades),'r'); while(!feof($fileStore)){$linha = fgets($fileStore,'1024'); echo $linha;} fclose($fileStore); ?></span>
                    </div>
                </div>

                <img src="/img/assets/bottom-mask-default.png" class="responsive-img asset-bottom">  
            </section>

            <section id="contato">
                <div class="container">
                    <h1 class="green-lp center" style="font-weight:bold;">CONTATO</h1>
                    
                    <div class="row">
                        <form class="col s12" action="{{Route('sendToContact')}}" method="POST">
                            @csrf
                            
                            <div class="card hoverable">
                                <div class="card-title">
                                    <span class="grey-text text-darken-4 center"><p>PREENCHA O FORMULÁRIO PARA UM ORÇAMENTO</p></span>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input name="nome" id="icon_prefix" type="text" class="validate">
                                          <label for="icon_prefix">Nome</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">phone</i>
                                          <input name="tel" id="icon_telephone" type="tel" class="validate">
                                          <label for="icon_telephone">Telefone</label>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="input-field">
                                            <i class="material-icons prefix">email</i>
                                            <input id="email" type="email" class="validate" name="email">
                                            <label for="email">Email</label>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="input-field">
                                            <i class="material-icons prefix">map</i>
                                            <input type="text" class="validate" name="cidade" id="cidade">
                                            <label for="cidade">Sua Cidade e Estado</label>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="input-field">
                                            <i class="material-icons prefix">chat</i>
                                            <textarea class="validate" name="message" id="message" cols="30" rows="10"></textarea>
                                            <label for="message">Mensagem</label>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <button type="submit" class="waves-effect btn grey darken-4">Enviar</button>
                                      </div> 
                                </div>
                            </div>                          
                        </form>
                      </div>
                </div>                
            </section>

            <footer class="grey darken-4">
                <img src="/img/assets/top-mask-default.png" class="responsive-img asset-top">
                <div class="container">
                    <div class="row">
                        <div class="col s6 center white-text">
                            <ul>
                               <li><a class="white-text" href="#header">INÍCIO</a></li>
                                <li><a class="white-text" href="#services">SERVIÇOS</a></li>
                                <li><a class="white-text" href="#about">QUEM SOMOS</a></li>                                
                                <LI><a class="white-text" href="#course">TREINAMENTO</a></LI>
                                <li><a class="white-text" href="#contato">CONTATO</a></li>
                            </ul>
                        </div>
                        <div class="col s6 white-text center">
                            <div class="row">
                                <div class="col s2"><a class="white-text" target="_blank" href="https://api.whatsapp.com/send?phone=5549991616014&text=Visitei%20o%20site%20e%20desejo%20mais%20informa%C3%A7%C3%B5es!" title="Nosso Whatsapp"><i class="fab fa-whatsapp fa-3x"></i></a></div>
                                <div class="col s2"><a class="white-text" target="_blank" href="https://www.facebook.com/Limpezaprofundasc/" title="Nosso Facebook"><i class="fab fa-facebook fa-3x"></i></a></div>
                                <div class="col s2"><a class="white-text" target="_blank" href="https://www.instagram.com/limpezaprofundasc" title="Instagram LP"><i class="fab fa-instagram fa-3x "></i></a></div>
                                <div class="col s2"><a class="white-text" target="_blank" href="https://www.youtube.com/channel/UCryj7CzypjKrKB-zhVjNzgw/featured" title="Nosso canala Youtube"><i class="fab fa-youtube fa-3x"></i></a></div>                                                        
                                <div class="col s2"><a class="white-text" target="_blank" href="mailto:limpezaprofundasc@gmail.com" title="limpezaprofundasc@gmail.com"><i class="fab fa-google fa-3x"></i></a></div>                                                                                        
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
                <a class="btn-floating btn-large green pulse" href="https://api.whatsapp.com/send?phone=5549991616014&text=Visitei%20o%20site%20e%20desejo%20mais%20informa%C3%A7%C3%B5es!">
                  <i class="fab fa-whatsapp"></i>
                </a>                
              </div>

              <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modalPromo">Modal</a> -->
              <div id="modalPromo" class="modal modal-fixed-footer">
                  <div class="modal-content">
                    <a href="{{$popup->link}}"><img src="{{Storage::url($popup->img)}}" alt="" style="width:100%"></a>                    
                  </div>                               
                  <div class="modal-footer" style="background-color: #fff0; border-top:0px;">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat white-text red"><i class="material-icons ">close</i></a>
                  </div>
              </div>
    
            <!--Java and Jquery-->
            <!--Materialize Js-->
            <script src="js/materialize.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.sidenav').sidenav();
                    $('.parallax').parallax();
                    $('.carousel.carousel-slider').carousel({fullWidth: true});
    
                    //move next carousel
                    $('.moveNextCarousel').click(function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        $('.carousel').carousel('next');
                    });
    
                    // move prev carousel
                    $('.movePrevCarousel').click(function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        $('.carousel').carousel('prev');
                    });
                    //action button
                    $('.fixed-action-btn').floatingActionButton(); 
                    
                    $('#modalPromo').modal();
                    setTimeout(() => {
                        $('#modalPromo').modal('open');
                    }, 3000);
                                     
                    
                    window.onscroll = function(){
                    fixNavbar();
                    };
                    var navbar = document.getElementById("navbar");
                    var socialNavbar = document.getElementById("nav-mobile");
                    var sticky = navbar.offsetTop;

                    function fixNavbar()
                    {
                        if(window.pageYOffset >= sticky)
                        {
                            navbar.classList.add("sticky");
                            socialNavbar.classList.remove("hide");                            
                        }
                        else
                        {
                            navbar.classList.remove("sticky");
                            socialNavbar.classList.add("hide");
                        }
                    }
                });
               
            </script>        
    </body>
</html>
