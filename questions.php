<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Identifica tu inteligencia</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logos/logo_50x50.jpg" />
        <!-- Font Awesome icons (free version)-->

        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/custom.css">
        <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand">
                <img class="img-nav-left img-thumbnail" src="./img/bombillo.jpg">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-extended="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="navbar-brand" href="index_logueo.html">Inicio</a></li>
                    <li class="nav-item"><a class="navbar-brand" href="vista2.html">Prueba de inteligencia</a></li>
                    <li class="nav-item"><a class="navbar-brand" href="vista1.html">Resultados</a></li>
                </ul>
                <div class="form-inline my-lg-0 my-2" id="search-results">
                    <div class="input-group">
                        <div class="nabvar-nav mr-auto">

                            <button class="btn dropdown-toggle" style="color: white; border: 0px;" data-toggle="dropdown">
                                <a class="navbar-brand" href="#">Bienvenido, user</a>
                                <a class="navbar-brand" href="#">
                                    <img class="img-nav-right img-thumbnail" src="img/leon.JPG">
                                </a>
                            </button>
                            <div class="dropdown-menu list-categories" style="text-align: center; background: #000;">
                                <br>
                                <a class="btn btn-primary">Ver perfil</a><br><br>
                                <a class="btn btn-primary ">Cambiar clave</a><br><br>
                                <a class="btn btn-primary " href="index.html">Cerrar sesión</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </nav>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12" >
                <div class="container" style="text-align: center;">
                    <strong>Tiempo</strong><h1>0<span id="minutos"></span> : <span id="segundos"></span></h1>
                </div>
            </div>
        </div>
        <form method="post" id="formulario" style="margin-top: -150px; margin-bottom: -110px;">
            <section class="page-section1" id="pregunta1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container" id="contenedor" style="padding: 20px;  text-align: center;">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="title-body">Escriba la palabra completa teniendo en cuanta la pista.</p>
                                    <p style="colo: red;"><strong style="color: red;">Nota: </strong>La primera letra tiene que ser mayúscula</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/pregunta2.JPG">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="row cuadro2">
                                        <div class="col-md-2"><p style="display: table-cell; vertical-align: middle;">_ve_a</p></div>
                                        <div class="col-md-2"><p style="display: table-cell; vertical-align: middle;">G_ob_</p></div>
                                        <div class="col-md-2"><p style="display: table-cell; vertical-align: middle;">S_erpi_nte</p></div>
                                        <div class="col-md-2"><p style="display: table-cell; vertical-align: middle;">P_ay_</p></div>
                                    </div>
                                    <div class="row cuadro3" align="center">
                                        <div class="col-md-2"><input name="pregunta1[]" type="text" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta1[]" type="text" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta1[]" type="text" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta1[]" type="text" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12" style="margin: 0 auto;">
                                            <button type="button" id="2" class="btn btn-primary 1">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section" id="pregunta2">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container" id="contenedor" style="padding: 20px;  text-align: center;">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="title-body">Escriba las palabras que son colores.</p>
                                  <p style="colo: red;"><strong style="color: red;">Nota: </strong>La primera letra tiene que ser mayúscula</p>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <table class="table" class="table td">
                                    <thead>
                                        <caption></caption>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Amarillo</td>
                                            <td>Paquete</td>
                                            <td>Escritorio</td>
                                            <td>Blanco</td>
                                            <td>Tazón</td>
                                        </tr>
                                        <tr>
                                            <td>Volcán</td>
                                            <td>Marca</td>
                                            <td>Aéreo</td>
                                            <td>Señalar</td>
                                            <td>Azul</td>
                                        </tr>
                                        <tr>
                                            <td>Cajón</td>
                                            <td>Letras</td>
                                            <td>Cuidar</td>
                                            <td>Descansar</td>
                                            <td>Casa</td>
                                        </tr>
                                        <tr>
                                            <td>Repetir</td>
                                            <td>Purpura</td>
                                            <td>Morado</td>
                                            <td>Silla</td>
                                            <td>Hogar</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">Escriba el color</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input style="border: 1px #000 solid;" type="text" name="pregunta2[]" class="form-control">
                                            </td>
                                            <td>
                                                <input style="border: 1px #000 solid;" type="text" name="pregunta2[]" class="form-control">
                                            </td>
                                            <td>
                                                <input style="border: 1px #000 solid;" type="text" name="pregunta2[]" class="form-control">
                                            </td>
                                            <td>
                                                <input style="border: 1px #000 solid;" type="text" name="pregunta2[]" class="form-control">
                                            </td>
                                            <td>
                                                <input style="border: 1px #000 solid;" type="text" name="pregunta2[]" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin: 0 auto;">
                                    <button type="button" id="3" class="btn btn-primary 1">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section" id="pregunta3">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container" id="contenedor" style="padding: 20px;  text-align: center;">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="title-body">Escriba el sinónimo de cada palabra teniendo en cuenta la pista</p>
                                    <p style="colo: red;"><strong style="color: red;">Nota: </strong>La primera letra tiene que ser mayúscula</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="row cuadro1">
                                        <div class="col-md-2">
                                            <p style="display: table-cell; vertical-align: middle;">Escaso</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p style="display: table-cell; vertical-align: middle;">Bella</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p style="display: table-cell; vertical-align: middle;">Conversación</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p style="display: table-cell; vertical-align: middle;">Perfeto</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <br>
                            <br>
                            <div class="row" align="center">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="row cuadro4" align="center">
                                        <div class="col-md-2"><input name="pregunta3[]" placeholder="C__t_" type="text" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta3[]" type="text" placeholder="He__o_a" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta3[]" type="text" placeholder="D_a_o__" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                        <div class="col-md-2"><input name="pregunta3[]" type="text" placeholder="C__p__t_" style="border: 1px #000 solid;" class="form-control" value=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" style="margin: 0 auto;">
                                    <button type="button" id="4" class="btn btn-primary 1">Siguiente</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </section>
            <section class="page-section" id="pregunta4">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container" id="contenedor" style="padding: 20px;  text-align: center;">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="title-body">¿Cuál es el resultado?</p>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/pregunta3.JPG">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <input name="pregunta4[]" type="text" class="form-control" value="">
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" style="margin: 0 auto;">
                                    <button type="button" id="5" class="btn btn-primary 1">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="page-section" id="pregunta5">
                <div class="container">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;">
                                    <p class="title-body">¿Cuántos cuadros de 2*2 hay?</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;">
                                    <img class="img5" src="assets/img/Cuadros.jpg" alt="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="Respuesta col-md-12" style="text-align: center;">
                                    <h4 class="my-3">Respuesta</h4>
                                    <input type="text" id="" name="pregunta5[]">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;">
                                    <button type="button" id="6" class="btn btn-primary 1">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PREGUNTA 6-->

            <section class="page-section" id="pregunta6">
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <p class="title-body">¿Qué número distingues dentro de los círculos?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <img class="img6" src="assets/img/Numeros.jpg" alt="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="text-align: center;">
                            <div class="form-group">
                                <h4 class="my-3">Número 1</h4>
                                <input type="text" id="" name="pregunta6[]">
                            </div>
                            <div class="form-group">   
                                <h4 class="my-3">Número 3</h4>
                                <input type="text" id="" name="pregunta6[]">   
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                            <div class="form-group">
                                <h4 class="my-3">Número 2</h4>
                                <input type="text" id="" name="pregunta6[]">
                            </div>
                            <div class="form-group">
                                <h4 class="my-3">Número 4</h4>
                                <input type="text" id="" name="pregunta6[]">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <button type="button" id="7" class="btn btn-primary 1">Siguiente</button>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </section>

        <!-- PREGUNTA 8-->

            <section class="page-section" id="pregunta7">
                <div class="container">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="title-body">Hay solamente una bolita roja en cada una de las bolsas que se muestra abajo. Sin mirar, debes sacar una bolita de cada una de las bolsas. ¿Cuál bolsa te dará la mayor probabilidad de sacar la bolita?</p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <img src="./assets/img/pregunta7.jpg">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <div class="form-group">
                                <label for="option1">La bolsa con 10 bolitas</label>
                                <input type="radio" name="pregunta7[]" value="Option1">
                            </div>
                            <div class="form-group">
                                <label for="option1">La bolsa con 100 bolitas</label>
                                <input type="radio" name="pregunta7[]" value="Option2">
                            </div>
                            <div class="form-group">
                                <label for="option1">La bolsa con 1,000 bolitas</label>
                                <input type="radio" name="pregunta7[]" value="Option3">
                            </div>
                            <div class="form-group">
                                <label for="option1">No hay diferencia</label>
                                <input type="radio" name="pregunta7[]" value="Option4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" id="send_form" class="btn btn-primary">Finalizar</button>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </section>

        </form>
    
        <!-- Modal Iniciar Sesión-->
        <div class="modal fade" id="Resultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title section-heading text-uppercase text-center">Iniciar Sesión</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="text-lg-left text-dark">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Ingrese email">
                            </div>
                            <div class="form-group">
                                <label class="text-lg-left text-dark">Contraseña</label>
                                <input type="password" class="form-control" placeholder="Ingrese contraseña">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Volver</button>
                            <a href="index_logueo.html">
                                <button type="button" class="btn btn-info">Iniciar Sesión</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer>
            <div class="col-md-12" style="padding: 40px;">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <a class="navbar-brand"><i class="fa fa-1x fa-twitter"></i></a>
                        <a class="navbar-brand"><i class="fa fa-1x fa-instagram"></i></a>
                        <a class="navbar-brand"><i class="fa fa-1x fa-facebook"></i></a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="top: 5px; background: #fed136; color: black; text-transform: uppercase; font-weight: bold;">
                        <h5>Identifica tu inteligencia</h5>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="timeout">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript" src="./js/jquery.toaster.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script type="text/javascript" src="./js/sweetalert.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!-- Contact form JS-->
            <script src="./assets/mail/jqBootstrapValidation.js"></script>
            <script src="./assets/mail/contact_me.js"></script>
            <!-- Core theme JS-->
            <script></script>
            <script src="./js/scripts.js"></script>
            <script src="js/scripts_1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on('click', '#send_form', function(){
                    $.ajax({
                        type: 'POST',
                        cache: false,
                        url: './process.php',
                        data: $('#formulario').serialize(),
                        success: function(response){
                            var res_decode = jQuery.parseJSON(response);
                            
                            if(res_decode < 4){
                                swal({
                                    title: "¡¡Que bruto póngale cero!!¿Deseas intentarlo de nuevo?",
                                    text: "Tu puntaje fue: "+res_decode+"/7",
                                    icon: "warning",
                                    buttons: ['No', 'Si'],
                                }).then((success) => {
                                    if (success) {
                                        window.location.href = './questions.php';
                                    } else {
                                        window.location.href = './index_logueo.html';
                                    }
                                });
                            }else{
                                swal({
                                    title: "¡¡Que Crac eres !!Felicitaciones!!!",
                                    text: "Pasaste la prueba \n\nTu puntaje fue: "+res_decode+"/7",
                                    icon: "success",
                                }).then((success) => {
                                    window.location.href = './index_logueo.html';
                                });
                            }
                            
                        }
                    });
                });                   
            }); 
        </script>
    </body>
</html>