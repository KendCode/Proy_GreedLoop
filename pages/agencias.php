<?php

// include ("conexion/conexion.php");
// include("bloqueo.php"); 
// // Desactivar la visualización de errores
// ini_set('display_errors', 0);
// error_reporting(0);
// //include("destroy.php");
?>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/principal.css" rel="stylesheet" />
    <link href="../css/ventas.css" rel="stylesheet" />
</head>

<body>
    <?php 
        include("encabezado.php");
    ?>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
                <!-- Producto 1 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/header-bg.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                 <!-- Nombre del producto -->
                <h5 class="fw-bolder">
                    Descripcion
                </h5>
                <!-- Color del producto -->
                <p>Color</p>
                <!-- Precio del producto -->
                <p>precio</p>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">

                                <form method="post" action="../registro.php">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img1.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form action="carrito.php" method="post">
									<input type="hidden" name="id_producto" value="<?php echo $id_producto;?> ">
									<input type="submit" name="btn10" value="MODIFICAR"  class="btn btn-success btn-raised btn-xs">	
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img2.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
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
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img3.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price -->
                                $40.00
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
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img4.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Sale Item">
                                    <input type="hidden" name="product_price" value="25.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img5.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img6.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img7.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
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
    
        <?php include ("footer.php");?>

</body>

</html>