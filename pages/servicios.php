<?php

// include ("conexion/conexion.php");
// include("bloqueo.php"); 
// // Desactivar la visualización de errores
// ini_set('display_errors', 0);
// error_reporting(0);
// //include("destroy.php");
?>
<?php include("encabezado.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AGENCIA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/ventas.css" rel="stylesheet" />
</head>

<body>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Agencia 1 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia1.jpg" alt="..."/>
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">EcoRecyclers</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 2 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia2.jpg" style="width: 300px; height: 200px;"/>
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Reciclarte</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 3 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia3.jpg" style="width: 300px; height: 200px;"/>
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">EcoTransforma</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                    <div class="bi-star"></div>
                                    <div class="bi-star"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 4 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia4.jpg" style="width: 300px; height: 200px;"/>
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">CicloVida</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star"></div>
                                    <div class="bi-star"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 5 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia5.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">ReusaMás</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                    <div class="bi-star"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 6 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia6.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">CeroHuella</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 7 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia7.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">EcoRevolución</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Agencia 8 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../images/agencias/agencia8.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Reciclaje Urbano</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Ver mas
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- JavaScript para incrementar el contador del carrito -->
    <script>
        /*let cartCount = 0;

        function addToCart() {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
        }*/
        let cartCount = 0;

        function addToCart(productName) {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
            const input = document.getElementById(productName);
            input.checked = true;
        }
    </script>
</body>
<?php include ("footer.php");?>
</html>
