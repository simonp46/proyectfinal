<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_960_720.png">
  <title>Nueva Cita- Covid-19 Website</title>
  <link rel="stylesheet" href="/app/Views/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="nav-frame">
                <figure class="pageLogo">
                    <img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/page-logo.svg" class="pageLogo__image" alt="LOGO">
                </figure>
                <div class="open-menu" id="open-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <nav class="nav-links" id="nav-links">
                    <a href="index.html" class="nav-link">Inicio</a>
                    <a href="VerCita.html" class="nav-link active">¿Ya tienes una cita?</a>
                </nav>
            </div>
        </div>
    </header> 
  <!-- FIN HEADER -->
<main>

  <!-- CONTENEDOR REGISTRO -->
<div class="container">
        <h1>Programa tu Cita</h1>
        <h5>Por favor rellena todos los campos y asi programaremos una nueva cita para que recibas <b>Mi Vacuna.</b>
        </h5>
        <hr><br>
    <!-- FORMULARIO -->
<form class="row g-3 needs-validation" novalidate>
<br>


<label for="exampleDataList" class="form-label">Ingresa tu numero de <b>Identificacion.*</b></label>
    <input class="form-control" type="text" placeholder="Nro de Identificacion">

<label for="exampleDataList" class="form-label">Elige el <b>Centro Medico</b> donde quieres recibir <b>Tu Vacuna.*</b></label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Centro de Vacunacion... ">
    <datalist id="datalistOptions">
     <option value="Centro Medico 1">
    <option value="Centro Medico 2">
    </datalist>

  <label for="validationCustomUsername" class="form-label"><b>Fecha y hora</b> de tu cita<b>.*</b></label>
  <input type="datetime-local" class="form-control" id="validationCustom03" aria-describedby="inputGroupPrepend" required>
  <div class="invalid-feedback">Por Favor rellena los datos correctamente.</div>
  <a href="/VerCita.html" class="nav-link1">Programar Cita</a>
</form>
</div>
</main>
<!-- SCRIPTS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
        <div class="row align-center">
            <div class="col-12 col-md-3 col-lg-3">
                <figure class="logo-figure">
                    <img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/page-logo.svg" class="footer__logo" alt="">
                </figure>
            </div>
            <div class="col-12 col-md-6 col-lg-6r">
                <a href="mailto:fullaspectceo@gmail.com" class="footer__link">Pagina Desarrollada por Simon Padron y Daniel Ariza - CodeIgniter Proyecto final -  2021</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>