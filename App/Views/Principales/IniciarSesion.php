<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>WOLFPARKING</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="App/Views/Lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="App/Views/Lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="App/Views/Css/bootstrap.min.css" rel="stylesheet">
        <link href="App/Views/Css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary">WOLFPARKING</h3>
                                </a>
                                <h3>Iniciar Sesión</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="Su usuario">
                                <label for="floatingText">Usuario</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="">Olvide mi contraseña</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Iniciar Sesión</button>
                            <p class="text-center mb-0">No tienes cuenta? <a href="#">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="App/Views/Lib/chart/chart.min.js"></script>
        <script src="App/Views/Lib/easing/easing.min.js"></script>
        <script src="App/Views/Lib/waypoints/waypoints.min.js"></script>
        <script src="App/Views/Lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="App/Views/Lib/tempusdominus/js/moment.min.js"></script>
        <script src="App/Views/Lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="App/Views/Lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="App/Views/Js/main.js"></script>
    </body>
</html>