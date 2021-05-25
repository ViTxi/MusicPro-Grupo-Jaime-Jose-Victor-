<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Music Pro</title>

    <!-- Estilos Fuentes Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
    <!-- Estilos y responsive -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--Nabvar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        .inputcentrado {
        outline: none;
        border: 0;
        text-align: left
        }

        button {
        background: transparent;
        border: none !important;
        font-size:0;
        }
    </style>
</head>

<body>
    <!-- Barra de arriba -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <!-- Hamburguesa -->
            <button class="navbar-toggler nav-toggle" type="button" name="nav_toggle" id="toggle" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bar-top"></span>
                <span class="bar-mid"></span>
                <span class="bar-bot"></span>
            </button>
            <div class="navbar-collapse overlay" id="overlay">
                <ul class="navbar-nav overlay-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalogo">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios/login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
	<section class="container-fluid top" id="home">
		<div class="container">
			<div class="slogan">
				<h1>Music PRO</h1>
			</div>
		</div>
	</section>

    <section id="catalogo">
        <br><br>
        <header>
            <div class="container">
                <h1 class="text-center">Music Pro</h1>
                <hr>
            </div>
        </header>
    </section>
    
    <!-- START SECTION STORE -->
    <section class="store">
        <div class="container">
            <div class="items">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Guitarra clasica</h3>
                            <img class="item-image" src="./img/p1.png">

                            <div class="item-details">
                                <h4 class="item-price">9.999 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">bajo electrico</h3>

                            <img class="item-image" src="./img/p2.jpg">

                            <div class="item-details">
                                <h4 class="item-price">9.990 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">tambor musical</h3>

                            <img class="item-image" src="./img/p3.png">

                            <div class="item-details">
                                <h4 class="item-price">9.990 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Bateria musical</h3>

                            <img class="item-image" src="./img/p8.png">

                            <div class="item-details">
                                <h4 class="item-price">19.990 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Trompeta musical</h3>

                            <img class="item-image" src="./img/p9.png">
                            <div class="item-details">
                                <h4 class="item-price">19.990 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item shadow mb-4">
                            <h3 class="item-title">Piano</h3>

                            <img class="item-image" src="./img/p10.png">
                            <div class="item-details">
                                <h4 class="item-price">6.999 clp</h4>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION STORE -->
    <!-- START SECTION SHOPPING CART -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">CARRITO</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- ? START SHOPPING CART ITEMS -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <form action="pagar.php" method="post">
                        <div class="shopping-cart-total d-flex align-items-center">
                            <p class="mb-0">Total: $</p>
                            <input type="text" name="totalapagar" id="totalapagar" class="inputcentrado" readonly value="0">
                            <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                                data-delay="2000">
                                <div class="toast-header">
                                    <span>✅</span>
                                    <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body text-white">
                                    Se aumentó correctamente la cantidad
                                </div>
                            </div>
                            <button class="comprarButton" type="submit" data-toggle="modal" data-target="#comprarModal">Comprar</button>
                        </div>
                        <input class="btn btn-success ml-auto" type="submit" value="Comprar" />
                    </form>
                </div>
            </div>
            
            <!-- END TOTAL -->

            <!-- START MODAL COMPRA -->
            <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="comprarModalLabel">Gracias por su compra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" >
                            <p>Pronto recibirá su pedido</p>
                        </div>
                        <a href="pagar.php">
                            <input type="submit" value="Cerrar" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- END MODAL COMPRA -->


        </div>

    </section>
    <!-- END SECTION SHOPPING CART -->


    <!-- START FOOTER -->
    <footer class="bg-dark p-3 mt-5">
        <p class="text-center m-0 text-muted">Tienda de intrumentos musicales</p>
    </footer>
    <!-- END FOOTER -->




    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script src="./tienda.js"></script>

    <!-- Scrip Nabvar-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Otros scrips -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>