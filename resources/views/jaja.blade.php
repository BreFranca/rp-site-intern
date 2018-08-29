 @include('partials.front')

        <nav id="home" class="transparent" role="navigation">
            <div class="nav-wrapper">

                <!--
                <a class="brand-logo" href="/">
                    <img src="images/logo.png"/>
                </a>
                -->

                <div class="row">
                    <div class="col s2">
                    </div>
                    <div class="col s8">
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a class="post black-text" href="#home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="post black-text" href="#grupo">
                                    O grupo
                                </a>
                            </li>
                            <li>
                                <a class="post black-text" href="#servicos">
                                    Serviços
                                </a>
                            </li>
                            <li>
                                <a class="post black-text" href="#clientes">
                                    Clientes
                                </a>
                            </li>
                            <li>
                                <a class="post black-text" href="#depoimentos">
                                    Depoimentos
                                </a>
                            </li>
                            <li>
                                <a class="post black-text" href="#contato">
                                    Contato
                                </a>
                            </li>
                            <!-- <li class="search">
                              <div class="search-wrapper">
                                <input id="search" placeholder="Busca"><i class="black-text material-icons">search</i>
                              </div>
                            </li> -->
                            
                            <!--
                            <li>
                                <a class="btn modal-trigger waves-effect waves-light black" data-target="modal1" href="#modal1">
                                    Login
                                </a>
                            </li>
                            -->
                        </ul>
                    </div>
                    <div id="blade" class="col s2 blade darken-3 grey">
                        <ul class="hide-on-med-and-down">
                            <li class="social">
                                <a href="https://www.linkedin.com/company/rpgroup/" target="_blank" class="post"><i class="white-text fab fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/rperformancegroup/" target="_blank" class="post"><i class="white-text fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/rperformancegroup/" target="_blank" class="post"><i class="white-text fab fa-instagram"></i></a>
                                <a href="https://vimeo.com/rperformancegroup" target="_blank" class="post"><i class="white-text fab fa-vimeo"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <ul class="sidenav" id="slide-out">

                    <!--
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="images/01.abb.jpg">
                                </img>
                            </div>
                            <a href="#user">
                                <img class="circle" src="images/01.cabu.jpg"/>
                            </a>
                            <a href="#name">
                                <span class="white-text name">
                                    E.John
                                </span>
                            </a>
                            <a href="#email">
                                <span class="white-text email">
                                    kkkk@gmail.com
                                </span>
                            </a>
                        </div>
                    </li>
                    -->

                    <li>
                        <a class="black-text" href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="black-text" href="#">
                            O grupo
                        </a>
                    </li>
                    <li>
                        <a class="black-text" href="#">
                            Depoimentos
                        </a>
                    </li>
                    <li>
                        <a class="black-text" href="#">
                            News
                        </a>
                    </li>
                    <li>
                        <a class="black-text" href="#">
                            Contato
                        </a>
                    </li>
                    <li>
                        <a class="black-text" href="#">
                            Blog
                        </a>
                    </li>
                    <!--
                    <li>
                        <div class="divider">
                        </div>
                    </li>
                    -->
                    <!--
                    <li>
                        <a class="btn modal-trigger waves-effect waves-light black" data-target="modal1" href="#modal1">
                            Login
                        </a>
                    </li>
                    -->
                </ul>

                <a class="sidenav-trigger" data-target="slide-out" href="#">
                    <i class="material-icons black-text">
                        menu
                    </i>
                </a>

                <!-- Modal Login -->
                <div class="modal" id="modal1">
                    <div class="modal-content">
                        <div class="row center">
                            <h5 class="black-text light">
                                Welcome to My Site
                            </h5>
                        </div>

                       <!--  @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were problems with input:
                                <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->

                        <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="input-field">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        <label for="email">
                                            Email
                                        </label>
                                    </input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input id="password" type="password" class="form-control" name="password">
                                        <label for="password">
                                            Password
                                        </label>
                                    </input>
                                </div>
                            </div>
                            <div class="row center">
                                <button type="submit" class="modal-close btn waves-effect waves-light black">
                                    Login
                                </button>
                            </div>
                            <div class="row center">
                                <a class="black-text" href="{{ route('auth.password.reset') }}">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="row center">
                                <a class="black-text" href="#!">
                                    Problems? Click Here
                                 </a>
                            </div>
                        </form> -->


                    </div>
                </div>

            </div>
        </nav>

        <section class="banner lighten-2 grey">
            
            <div class="row">

                <div class="col s2 relative act">
                    <div class="box-lateral">
                        <a href="/"><img class="logo2" src="images/logo2.png"/></a>
                        <img class="logo lateral-btn" src="images/logo.png"/>
                    </div>                    
                    <!-- <div id="lateral" class="lateral darken-3 act grey"> -->
                    <div id="lateral" class="lateral darken-3 grey">
                        <a class="tcha" href="/"><img class="logo3" src="images/logo3.png"/></a>
                        @foreach($categoria as $categorias)
                            <a class="post button secondary darken-3 url white-text" href="#{{ $categorias->slug }}">{{ $categorias->categoria }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="col s7 pd50">
                    <div class="carousel-effect">
                        <div class="aba">
                            @foreach($categoria as $categorias)
                                <a class="button secondary url darken-3 white-text {{ $categorias->slug }}" href="#{{ $categorias->slug }}"></a>
                            @endforeach
                        </div>
                        <div class="trick owl-carousel1 owl-carousel owl-theme" style="width: 800px;">
                            @foreach($banner as $banners)
                            <div class="item" data-hash="{{ $banners->slug }}">
                                <!-- href="{{ asset('uploads/' . $banners->link) }}" -->
                                <a 
                                     
                                    href="#servicos">
                                    <img src="{{url('/' . $banners->banner)}}"/>
                                    <p class="black-text">{{ $banners->descricao }}</p>
                                </a>
                            </div>
                            @endforeach                           
                        </div>
                    </div>
                    <div class="btn-banner">
                        <button id="btn-home" class="btn-home btn darken-3 waves-effect waves-light black" type="submit" name="action">Conheça o Grupo
                            <i class="material-icons right">send</i>
                        </button>                        
                    </div>
                </div>

                <div class="col offset-s3">
                </div>  
                              
            </div>

        </section>

        <section id="grupo" class="video black">

            @foreach($video as $videos)
            <div class="row">             

                <div class="col s3">
                        <img class="trick play" src="images/play.png"/>
                        <h2 class="trick white-text">{{ $videos->titulo }}</h2>
                        <hr class="trick">
                        <p class="trick white-text">{{ $videos->texto }}</p>
                </div>
                <div class="col s9">
                   
                    <div class="trick video-container">
                        <!-- <img src="http://www.gravatar.com/avatar/48231943117b8e0d0db0abdcb57a9032?s=32&d=identicon&r=PG" data-video="http://www.youtube.com/embed/zP_D_YKnwi0?autoplay=1"> -->
                        <!-- <img src="images/play.png" data-video="http://www.youtube.com/embed/Q8TXgCzxEnw?autoplay=1"/> -->
                        <img src="images/bg_video.jpg" data-video="{{ $videos->url }}"/>
                    </div>

                </div>

            </div>
            @endforeach

        </section>

        <section id="servicos" class="slide">

            <div class="main">
                <h2 class="trick center">Como podemos te ajudar?</h2>

                <div id="mi-slider" class="mi-slider">

                    <ul class="trick">
                        <!-- yellow -->
                        @foreach($atividade as $atividades)
                            @if ($atividades->categoria->categoria == 'Innovation')
                                <li>
                                    <a class="black-text">
                                        <!-- <img src="images/blue.png" alt="img01"> -->
                                        <h4>{{ $atividades->nome }}</h4>
                                        <p>{{ $atividades->texto }}</p>
                                        <!-- <p>{{ $atividades->categoria->categoria }}</p> -->
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <ul>
                        <!-- purple -->
                        @foreach($atividade as $atividades)
                            @if ($atividades->categoria->categoria == 'Academy')
                                <li>
                                    <a href="#" class="trick black-text">
                                        <!-- <img src="images/blue.png" alt="img01"> -->
                                        <h4>{{ $atividades->nome }}</h4>
                                        <p>{{ $atividades->texto }}</p>
                                        <!-- <p>{{ $atividades->categoria->categoria }}</p> -->
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <ul>
                        <!-- orange -->
                        @foreach($atividade as $atividades)
                            @if ($atividades->categoria->categoria == 'Technology')
                                <li>
                                    <a href="#" class="trick black-text">
                                        <!-- <img src="images/blue.png" alt="img01"> -->
                                        <h4>{{ $atividades->nome }}</h4>
                                        <p>{{ $atividades->texto }}</p>
                                        <!-- <p>{{ $atividades->categoria->categoria }}</p> -->
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <ul>
                        <!-- blue -->
                        @foreach($atividade as $atividades)
                            @if ($atividades->categoria->categoria == 'Consulting')
                                <li>
                                    <a href="#" class="trick black-text">
                                        <!-- <img src="images/blue.png" alt="img01"> -->
                                        <h4>{{ $atividades->nome }}</h4>
                                        <p>{{ $atividades->texto }}</p>
                                        <!-- <p>{{ $atividades->categoria->categoria }}</p> -->
                                    </a>
                                </li>
                            @endif
                        @endforeach  
                    </ul>

                    <nav class="darken-3 yellow">
                        <a href="#yellow"><img class="trick" src="images/yellow.png" alt="img14"></a>
                        <a href="#purple"><img class="trick" src="images/purple.png" alt="img13"></a>
                        <a href="#orange"><img class="trick" src="images/orange.png" alt="img15"></a>
                        <a href="#blue"><img class="trick" src="images/blue.png" alt="img12"></a>
                    </nav>
                </div>
            </div>

        </section>

        <section id="clientes" class="clientes">
                        
            <div class="container">
                <h2 class="center trick">Nossos Clientes</h2>
                <div class="owl-carousel2 owl-carousel owl-theme" style="width: 100%; height: 100px">
                    @foreach($cliente as $clientes)
                    <div class="item">                    
                        <!-- <p>{{ $clientes->nome }}</p> -->
                        <img id="{{ $clientes->nome }}" src="{{url('/' . $clientes->imagem)}}"/>                    
                    </div>
                    @endforeach                           
                </div>
                <div class="owl-carousel3 jaja2 owl-carousel owl-theme" style="width: 100%; height: 100px">
                    @foreach($cliente as $clientes)
                    <div class="item">                    
                        <!-- <p>{{ $clientes->nome }}</p> -->
                        <img id="{{ $clientes->nome }}" src="{{url('/' . $clientes->imagem)}}"/>                    
                    </div>
                    @endforeach                           
                </div>
                <div class="owl-carousel4 jaja3 owl-carousel owl-theme" style="width: 100%; height: 100px">
                    @foreach($cliente as $clientes)
                    <div class="item">                    
                        <!-- <p>{{ $clientes->nome }}</p> -->
                        <img id="{{ $clientes->nome }}" src="{{url('/' . $clientes->imagem)}}"/>                    
                    </div>
                    @endforeach                           
                </div>          
            </div>

        </section>

        <section id="depoimentos" class="testimonial mgt135">
            
            <div class="container">
            <div class="row">

                <div style="height: 500px;" class="col s6 black-text">
                    
                    <h2 class="trick">Depoimentos dos nossos clientes</h2>
                    <p class="trick">Saiba o que estão falando de nós e como estamos fazendo a diferença na vida dos nossos clientes.</p>

                </div>

                <div style="height: 500px;" class="col s6 darken-3">

                    <div class="trick center owl-carousel5 owl-carousel owl-theme mgt50" style="width: 100%;">
                        @foreach($depoimento as $depoimentos)

                            <div class="item center darken-3 white-text {{ $depoimentos->slug }}">
                                <h4>"{{ $depoimentos->depoimento }}"</h4>
                                <h5>{{ $depoimentos->cliente }}</h5>
                                <h6>{{ $depoimentos->empresa }}</h6>
                            </div>

                        @endforeach                               
                    </div>
                    
                </div>

            </div>
            </div>

        </section>

        <section id="contato" class="footer darken-3 grey">

            <div class="container">

                <div class="row">

                    <div class="col s5">

                        <h2 class="trick white-text">Podemos ajudar em algo?</h2>
                        <p class="trick white-text">Entre em contato com nosso grupo.</p>

                        <form>

                            <div class="post input-field">
                                <input placeholder="Nome" id="nome" type="text" class="validate">
                                <label for="nome" class="active">Nome</label>
                            </div>

                            <div class="post input-field">
                                <input placeholder="Email" id="email" type="email" class="validate">
                                <label for="email" class="active">Email</label>
                            </div>

                            <div class="post input-field">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Mensagem</label>
                            </div>

                            <button id="send" class="post btn darken-3 waves-effect waves-light black" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>  

                        </form>                        

                    </div>

                    <div class="col s5 offset-s2">

                        @foreach($info as $infos)
                        
                            <div class="trick endereco mgt105">
                                <p class="white-text bold">São Paulo – Brasil</p>
                                <p class="white-text">Rua Amador Bueno 328, 2o andar. São Paulo/SP. CEP 04752-005</p>
                                <p class="white-text bold tel">+ 55 (11) 3063 5321</p>
                                <p class="white-text">{{ $infos->email_contato }}</p>
                            </div>

                            <div class="trick endereco">
                                <p class="white-text bold tel">São Paulo - Brasil</p>
                                <p class="white-text bold tel">Rio de Janeiro - Brasil</p>
                                <p class="white-text bold tel">Flórida - EUA</p>
                                <p class="white-text bold tel">Madrid - Espanha</p>
                            </div>

                            <div class="rsocial">
                                <a href="{{ $infos->linked_in }}" target="_blank" class="post"><i class="white-text fab fa-linkedin"></i></a>
                                <a href="{{ $infos->facebook }}" target="_blank" class="post"><i class="white-text fab fa-facebook-square"></i></a>
                                <a href="{{ $infos->instagram }}" target="_blank" class="post"><i class="white-text fab fa-instagram"></i></a>
                                <a href="{{ $infos->vimeo }}" target="_blank" class="post"><i class="white-text fab fa-vimeo"></i></a>
                            </div>

                            <img class="trick logo3" src="images/logo3.png">

                        @endforeach

                    </div>



                </div>              

            </div>

        </section>

        <div class="scrolltop">
            <i class="material-icons arrow_upward">arrow_upward</i>
        </div>
        
 @include('partials.back')