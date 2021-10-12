<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_960_720.png">
  <title>Registro - Covid-19 Website</title>
  <link rel="stylesheet" href="/app/Views/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box
  }

  :root {
    --fontcolor: #035755;
    font-family: "Poppins", system-ui
  }

  body {
    background-image: radial-gradient(#ff8c948c, rgba(255, 0, 0, 0) 40vw), radial-gradient(#a8e6ce6e, rgba(0, 128, 0, 0) 40vw), radial-gradient(rgba(128, 0, 255, 0.076), rgba(10, 0, 255, 0) 40vw), radial-gradient(rgba(255, 255, 0, 0.3), rgba(255, 255, 0, 0) 40vw), radial-gradient(rgba(255, 0, 162, 0.138), rgba(255, 0, 0, 0) 40vw);
    background-position: -40vw 14rem, 50% 10rem, 60vw 14rem, -10vw calc(14rem + 20vw), 30vw calc(14rem + 20vw);
    background-size: 80vw 80vw;
    background-repeat: no-repeat
  }

  main {
    width: 90%;
    height: 100%;
    margin-left: 5%;
    margin-right: 5%
  }

  .header {
    padding-top: 15px
  }

  .header .nav-frame {
    display: flex;
    justify-content: space-between;
    position: relative;
    flex-direction: column
  }

  .header .pageLogo {
    height: 60px;
    width: 189px
  }

  .header .open-menu {
    cursor: pointer;
    border: 1px solid #035755;
    border-radius: 20%;
    position: absolute;
    right: 0;
    top: 15px
  }

  .header .open-menu .line {
    width: 30px;
    height: 3px;
    background-color: #FF5476;
    margin: 5px
  }

  .header .nav-links {
    position: absolute;
    flex-direction: column;
    border: 1px solid silver;
    border-radius: 0 0 10px 10px;
    display: none;
    background-color: rgba(255, 255, 255, 0.8);
    top: 70px;
    width: 100%;
    z-index: 1
  }

  .header .nav-links .nav-link {
    position: relative;
    font-size: 15px;
    color: var(--fontColor);
    text-decoration: none;
    text-align: center;
    margin: 10px 0;
    cursor: pointer
  }

  .nav-link1 {
    position: relative;
    font-size: 15px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    padding: 10px;
    border: solid 2px#FF383D;
    border-radius: 20px;
    color: #FB4C47;
    background-color: rgba(0, 0, 0, 0.0)
  }

  .nav-link1:hover {
    color: #fff;
    background-color: #FF383D;
    transition: .4s
  }

  .header .nav-links .nav-link .nav-link1:hover {
    color: #fff;
    background-color: #FF383D
  }

  .nav-links.nav-open {
    display: flex;
    padding-bottom: 5px
  }

  .section .direction {
    display: flex;
    align-items: center;
    flex-direction: column-reverse
  }

  .section .center {
    display: flex;
    align-items: center
  }

  .section__title {
    font-family: var(--fontRedHat);
    font-weight: 700;
    font-size: 24px;
    line-height: 70px;
    color: #FA5652
  }

  .section__span {
    font-family: var(--fontRedHat);
    font-weight: 700;
    font-size: 36px;
    line-height: 40px;
    color: #035755;
    text-transform: capitalize
  }

  .section__desc {
    margin-top: 20px;
    font-family: Roboto;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;
    color: #4B4F51
  }

  .section__button {
    position: relative;
    top: 40px;
    padding: 15px 40px;
    font-size: 15px;
    color: #FFF;
    text-decoration: none;
    background: #FB4C47;
    box-shadow: 0 8px 87px rgba(0, 0, 0, 0.1);
    border-radius: 65px;
    font-weight: 600;
    letter-spacing: .05em
  }

  .section__button:hover {
    box-shadow: 0 0 20px rgba(199, 199, 199, 0.7);
    transition: .3s ease;
    background: #035755
  }

  .section__image {
    width: 300px;
    z-index: 0
  }

  .section__virus1 {
    position: absolute;
    bottom: 40px;
    left: 0;
    width: 150px;
    z-index: -1;
    animation: spin 10s linear infinite
  }

  .section__virus2 {
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    opacity: .8;
    z-index: -1;
    animation: spin 20s linear infinite
  }

  .section__virus3 {
    position: absolute;
    top: 200px;
    right: 40px;
    width: 100px;
    z-index: -1;
    animation: spin 20s linear infinite
  }

  .section__virus2 {
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    opacity: .8;
    z-index: -1;
    animation: spin 20s linear infinite
  }

  @keyframes spin {
    100% {
      -webkit-transform: rotate(360deg)
    }
  }

  .section .covidImage__image {
    width: 330px
  }

  .upside {
    margin-bottom: 70px
  }

  .upside__title {
    font-family: var(--fontRedHat);
    font-weight: 700;
    font-size: 20px;
    text-align: center;
    color: #FA5652;
    margin-top: 40px
  }

  .upside__span {
    display: block;
    font-family: var(--fontRedHat);
    font-weight: 700;
    font-size: 40px;
    text-align: center;
    text-transform: capitalize;
    color: #035755;
    margin-bottom: 20px
  }

  .prevention .row-position {
    display: flex;
    align-items: center
  }

  .prevention .row-position:nth-child(odd) {
    flex-direction: row-reverse
  }

  .prevention__image {
    margin-top: 30px;
    width: 330px
  }

  .prevention__span {
    font-weight: 700;
    font-size: 30px;
    text-transform: capitalize;
    color: #035755;
    align-items: center;
    display: inline-flex
  }

  .prevention__number {
    padding: 10px;
    margin-right: 15px;
    background: rgba(250, 86, 82, 0.15);
    text-transform: capitalize;
    color: #FA5652;
    font-size: 30px;
    border-radius: 100%
  }

  .prevention__desc {
    margin-top: 20px;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;
    text-transform: capitalize;
    color: #4B4F51
  }

  .prevention {
    margin-top: 2rem;
    padding-bottom: 3rem;
    text-align: center;
    background: #fff;
    box-shadow: 0 .75rem 2rem 0 rgba(211, 14, 14, 0.1);
    border-radius: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.125)
  }

  #btn {
    padding: 10px;
    border-radius: 10px
  }

  .footer {
    margin-top: 30px;
    text-align: center;
    padding-bottom: 50px
  }

  .footer__link {
    font-size: 12px;
    line-height: 28px;
    color: #00402E;
    text-decoration: none;
    cursor: pointer
  }

  .text-position {
    text-align: left
  }

  .top {
    margin-top: -60px
  }

  .section__image {
    position: relative;
    margin-top: 40px;
    width: 90%;
    height: 80%
  }

  @media screen and (min-width: 768px) {
    .row.direction {
      flex-direction: row
    }

    .open-menu {
      display: none
    }

    .nav-frame {
      flex-direction: row
    }

    .header .nav-links {
      width: auto;
      display: inline-flex;
      flex-direction: row;
      position: absolute;
      right: 0;
      top: 50%;
      border: none;
      transform: translateY(-50%);
      background-color: transparent
    }

    .header .nav-links .nav-link {
      display: flex;
      align-items: center
    }

    .header .nav-links .nav-link:not(:last-child) {
      margin-right: 20px
    }

    .header .nav-links .nav-link:last-child {
      border: 2px solid #fb4c47;
      border-radius: 46px;
      padding: 10px 35px;
      color: #ff383d
    }

    .header .nav-links .nav-link:last-child:hover {
      background-color: #fb4c47;
      color: #fff;
      transition: .3s
    }

    .header .nav-links .nav-link.active::after,
    .header .nav-links .nav-link:not(:last-of-type):hover::after {
      position: absolute;
      content: "";
      width: 10px;
      height: 10px;
      background-color: #fa5652;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 100%
    }

    .text-position {
      text-align: left
    }

    .coronavirus .covidImage {
      margin-top: 75px
    }

    .upside--top {
      margin-top: -60px
    }

    .upside__title {
      margin-top: 40px
    }

    .upside__desc {
      width: 80%;
      margin: auto
    }

    .symptomps__image {
      width: 600px
    }

    .prevention {
      text-align: left
    }

    .prevention__image {
      width: 200px;
      margin-left: 15%
    }

    .help {
      margin: auto;
      width: 70%
    }

    .footer {
      padding-top: 100px
    }

    .footer .logo-figure,
    .footer .social-figure {
      margin: 0;
      align-items: center
    }

    .footer .align-center {
      display: flex;
      align-items: center
    }
  }

  @media screen and (min-width: 992px) {
    #nav-links .nav-link:not(:last-child) {
      margin-right: 40px
    }

    .section .text-position {
      text-align: left
    }

    .section__image {
      width: 90%
    }

    .coronavirus .covidImage {
      margin: 0
    }

    .coronavirus .covidImage__image {
      width: 450px
    }

    .coronavirus__desc {
      text-align: left
    }

    .prevention__desc {
      padding-left: 70px
    }

    .prevention__image {
      margin-left: 15%;
      width: 300px
    }

    .help {
      margin: auto;
      width: 40%
    }
  }
</style>

<body>
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
          <a href="<?php echo base_url() . '/' ?>" class="nav-link active">Volver</a>


        </nav>
      </div>
    </div>
  </header>
  <main>
    <!-- CONTENEDOR REGISTRO -->
    <div class="container">
      <h1>Registrate</h1>
      <h5>Es necesario saber quien eres para poder registrarte como usuario, y que asi puedas recibir <b>Mi Vacuna.</b>
      </h5>
      <hr><br>
      <!-- FORMULARIO -->
      <form class="row g-3 needs-validation" action="<?php base_url().'/insertarpaciente'?>" novalidate>
        
      <?php foreach ($datos as $key) : ?>

        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">
            <div class=""></div>Identificacion
          </label>
          <input type="text" method="POST" class="form-control" id="identif" name="identif" <?php echo $key->idpaciente ?> required>
          <div class="invalid-feedback">Por Favor rellena los datos correctamente.</div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="name" name="name" method="POST" <?php echo $key->name ?> value="" required>
          <div class="valid-feedback">Correcto!</div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="lastname" name="lastname" method="POST" <?php echo $key->lastname ?> value="" required>
          <div class="valid-feedback">
            Correcto!
          </div>
        </div>
        <div class="col-12">
          <label for="validationCustomUsername" class="form-label">Telefono</label>
          <input type="number" class="form-control" id="tel" name="tel" method="POST" <?php echo $key->tel ?> aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">Por Favor rellena los datos correctamente.</div>

          <label for="validationCustomUsername" class="form-label">Correo Electronico</label>
          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="email" name="email" method="POST" <?php echo $key->email ?> aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">Por Favor rellena los datos correctamente.</div>
          </div>
        </div>
        <?php endforeach; ?>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Acepto terminos y condiciones</label>
            <div class="invalid-feedback">ACEPTA TERMINOS Y CONDICIONES?.
            </div>
          </div>
        </div>
        <a href="<?php echo base_url() . '/nuevacita' ?>" class="nav-link1">Siguiente</a>
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
          <a href="mailto:fullaspectceo@gmail.com" class="footer__link">Pagina Desarrollada por Simon Padron y Daniel Ariza - CodeIgniter Proyecto final - 2021</a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>