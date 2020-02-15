<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/style.css">

    <title>AvQualis Gestão Organizacional</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        
        <div class="container">
            
            <a class="navbar-brand h1 mb-0" href="#">Curso</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSite">
                
                <!-- ul alinhada na direita mr-auto -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Início</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Perfil</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Serviços</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Depoimentos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contatos</a>
                    </li>

                </ul>
                
                <!-- ul alinhada na esquerda ml-auto-->
                <ul class="navbar-nav ml-auto">
                    <!-- menu dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Social</a>
                        
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Facebook</a>
                            <a href="#" class="dropdown-item">Twitter</a>
                            <a href="#" class="dropdown-item">WhatsApp</a>
                            <a href="#" class="dropdown-item">Instagram</a>
                        </div>

                    </li>

                </ul>
                
                <form action="" class="form-inline ml-4"><!-- a class mr e ml vão até o tamanho 5-->
                    <input class="form-control mr-2" type="search" placeholder="Buscar" />
                    
                    <button class="btn btn-primary" type="submit">Ok</button>

                </form>
            
            </div>
        
        </div>
    
    </nav>
    <!-- carrousel -->
    <!-- 
        img-fluid aplica a imagem em todo o espaço ao qual ela foi destinada e o
        d-block permite que ela fique compatível com qualquer plataforma
        active define qual imagem aparecerá primeiro
    -->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        
        <!-- indicadores ao final da página -->
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">  
                <img src="imgs/case4.jpg" class="d-block w-100" alt="...">
                
                <!-- adicionando texto na imagem -->
                <div class="carousel-caption d-none d-md-block">
                    <h1>Lorem Ipsum</h1>
                    <p class="lead">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>

            </div>
            
            <div class="carousel-item">                
                <img src="imgs/case2.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h1>Where does it come from?</h1>
                    <p class="lead">There are many variations of passages of Lorem Ipsum available.</p>
                </div>

            </div>
            
            <div class="carousel-item">
                <img src="imgs/case5.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h1>Why do we use it?</h1>
                    <p class="lead">Many desktop publishing packages and web page editors.</p>
                </div>

            </div>
        </div>
        
        <a href="#carouselSite" class="carousel-control-prev" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        
        <a href="#carouselSite" class="carousel-control-next" data-slide="next" role="button">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>

    </div>
    <!--    título abaixo do carousel 
            a class mt refere-se ao espaçamento de cima (margin-top), pr padrão suporta até o numeral 5 (maior valor)
            a class display refere-se ao tamanho para a tag <h1> suporta até o numeral 5 (menor valor)
            a class mb refere-se a margem de baixo (margin-bottom)
            a class my refere-se a margem no eixo y do site
    -->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-3">Lorem Ipsum</h1>

                <p>On the other hand, we denounce with righteous indignation.</p>
            
            </div>
        </div>
        <!-- menu lateral -->
        <div class="row mb-5">
            <div class="col-3">
                <nav id="navbarVertical" class="nav navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a href="#intem1" class="nav-link">Lorem Ipsum</a>
                        
                        <nav class="nav nav-pills flex-column">
                            <a href="#intem1-1" class="nav-link ml-3">Sed nec quam</a>

                            <a href="#intem1-2" class="nav-link ml-3">Curabitur malesuada</a>

                        </nav>
                        
                        <a href="#intem2" class="nav-link my-2"> Quisque et suscipit leo </a>

                        <a href="#intem3" class="nav-link my-2"> Mauris pharetra </a>

                        <nav class="nav nav-pills flex-column">
                            <a href="#intem3-1" class="nav-link ml-3">Donec egestas venenatis lorem</a>

                            <a href="#intem3-2" class="nav-link ml-3">Donec dignissim leo </a>

                        </nav>

                    </nav>

                </nav>
            </div>
            <!-- texto ao lado do menu -->
            <div class="col-9">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    <h4 id="intem1">Lorem Ipsum</h4>
                    <p>
                        Vestibulum at blandit ligula. 
                        Duis ac mauris ut massa porta sollicitudin. 
                        Praesent in iaculis neque, eu accumsan libero. 
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                        Vivamus dignissim nisl sit amet augue ullamcorper, ac suscipit sapien scelerisque. 
                        Etiam congue pharetra scelerisque. Maecenas facilisis egestas tempus.
                    </p>

                    <h5 id="intem1-1">Sed nec quam</h5>
                    <p>
                        Pellentesque tempus velit at vehicula elementum. 
                        Sed at urna vehicula purus euismod posuere. 
                        Integer feugiat, ipsum vitae euismod posuere, mi massa porttitor risus, non imperdiet odio erat et lacus. 
                        Suspendisse turpis diam, fringilla vitae nunc ac, consequat tempus purus. 
                        Nulla id libero sem. Vestibulum fermentum sem ultricies magna rutrum, et lacinia purus tempor.
                    </p>

                    <h5 id="intem1-2">Curabitur malesuada</h5>
                    <p>
                        Sed ultrices libero blandit quam sodales hendrerit. 
                        Sed tempor sapien nec mattis porttitor. 
                        Pellentesque vel lorem vitae ipsum sagittis aliquam. 
                        Proin non odio dignissim, egestas nisi et, cursus ex.
                         Mauris in arcu risus. Suspendisse sed turpis scelerisque, feugiat erat in, ultricies augue. 
                         Pellentesque ex metus, blandit eget tincidunt tincidunt, placerat in orci. 
                         Morbi efficitur, ex in dignissim hendrerit, lorem ipsum euismod lacus, eget aliquet sapien mi id erat. 
                         Maecenas est nisi, semper dapibus ex et, consectetur porta nisl. 
                         Donec neque dolor, maximus nec orci et, dignissim fermentum nunc.
                    </p>

                    <h4 id="intem2">Quisque et suscipit leo</h4>
                    <p>
                        Sed erat metus, facilisis vel congue vel, placerat non nisl. 
                        Donec sit amet ipsum eros. Nulla facilisi. 
                        Donec fringilla ipsum in nibh convallis tristique. 
                        Cras volutpat consequat interdum. 
                        Phasellus purus risus, lobortis nec felis ut, faucibus molestie urna. 
                        Quisque vehicula, lacus eu tempus rutrum, dolor nunc condimentum velit, et vestibulum felis ipsum id leo. 
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                        Donec venenatis ante urna, non consectetur arcu dapibus quis. 
                        Donec varius, augue ut iaculis eleifend, orci mi pretium ex, tincidunt cursus nulla ante in lacus. 
                        Vivamus est metus, tempor in est ut, rutrum tempus ipsum.
                    </p>

                    <h4 id="intem3">Mauris pharetra</h4>
                    <p>
                        Suspendisse potenti. 
                        Cras nec nisi in tellus pretium dictum nec id sapien. 
                        Nulla blandit, leo eu egestas tempus, ante tellus porttitor tortor, vitae tristique orci erat sed dui. 
                        Maecenas eget pulvinar libero. Sed tincidunt facilisis lobortis. 
                    </p>

                    <h5 id="intem3-1">Donec egestas venenatis lorem</h5>
                    <p>
                        Vivamus hendrerit urna odio, in ullamcorper neque tincidunt vitae. 
                        Integer vitae est at nisi hendrerit porta iaculis ac tellus. 
                        Ut velit ex, ultrices eget posuere non, pulvinar ut massa. 
                        In ullamcorper tellus a ante mollis, nec pharetra lorem sodales.
                    </p>

                    <h5 id="intem3-2">Donec dignissim leo </h5>
                    <p>
                        Ec urna tristique, suscipit pellentesque sem tincidunt. 
                        Etiam bibendum scelerisque dictum. Sed posuere dolor pulvinar, euismod nunc quis, vehicula orci. 
                        Aliquam ultrices magna neque. Curabitur vel consequat orci, quis pellentesque nunc. 
                    </p>

                </div>

            </div>
        
        </div>
        <!-- cards -->
        <div class="row mb-5">
            <div class="col-sm-4">
                <div class="card">
                    <img src="imgs/PHP.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <h4 class="card-title">PHP</h4>
                        <h6 class="card-subtitle mb-2 text-muted">A linguagem da Web</h6>
                        <p class="card-text">Conheça a liguagem mais utilizada em servidores no mundo</p>
                    
                    </div>

                    <ul class="list-group list-group-flush" >
                    
                        <li class="list-group-item">Facebook</li>
                        <li class="list-group-item">WhatsApp</li>
                        <li class="list-group-item">Totvs</li>
                    
                    </ul>
                    
                    <div class="card-body">
                        
                        <a href="#" class="card-link">Empresas que usam</a>
                        <a href="https://www.php.net/" class="card-link">Site oficial</a>
                    
                    </div>
                    
                    <div class="card-footer text-muted">
                        Maior comunidade de programadores
                    </div>

                </div>

            </div>
            
            <div class="col-sm-4">
                <div class="card">
                    <img src="imgs/py.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Python</h4>
                        <h6 class="card-subtitle mb-2 text-muted">A linguagem do momento</h6>
                        <p class="card-text">Conheça a linguagem mais simples de se aprender</p>
                    </div>

                    <ul class="list-group list-group-flush" >
                        <li class="list-group-item">Google</li>
                        <li class="list-group-item">Uber</li>
                        <li class="list-group-item">Instagram</li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link">Empresas que usam</a>
                        <a href="https://www.python.org/" class="card-link">Site oficial</a>
                    </div>

                    <div class="card-footer text-muted">
                        Usada em Data Centers
                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img src="imgs/js.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    
                        <h4 class="card-title">JavaScript</h4>
                        <h6 class="card-subtitle mb-2 text-muted">A linguagem mais usada</h6>
                        <p class="card-text">Conheça a linguagem de programação mais utilizada do mundo</p>
                    
                    </div>

                    <ul class="list-group list-group-flush" >
                        <li class="list-group-item">Globo</li>
                        <li class="list-group-item">Telegram</li>
                        <li class="list-group-item">Microsoft</li>
                    </ul>

                    <div class="card-body">
                       
                        <a href="#" class="card-link">Empresas que usam</a>
                        <a href="https://www.javascript.com/" class="card-link">Site oficial</a>
                    
                    </div>

                    <div class="card-footer text-muted">
                        Utilizada em desenvolvimento mobile
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="estilos/bootstrap-4.4.1-dist/js/jquery-3.4.1.min.js"></script>
    <script src="estilos/bootstrap-4.4.1-dist/js/popper.min.js"></script>
    <script src="estilos/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>