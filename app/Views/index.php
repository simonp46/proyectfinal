<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_960_720.png">
	<title>Tu Vacuna - Covid-19 Website</title>
	<link rel="stylesheet" href="/app/Views/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">

</head>
<style>*{margin:0;padding:0;box-sizing:border-box}:root{--fontcolor:#035755;font-family:"Poppins",system-ui}body{background-image:radial-gradient(#ff8c948c,rgba(255,0,0,0) 40vw),radial-gradient(#a8e6ce6e,rgba(0,128,0,0) 40vw),radial-gradient(rgba(128,0,255,0.076),rgba(10,0,255,0) 40vw),radial-gradient(rgba(255,255,0,0.3),rgba(255,255,0,0) 40vw),radial-gradient(rgba(255,0,162,0.138),rgba(255,0,0,0) 40vw);background-position:-40vw 14rem,50% 10rem,60vw 14rem,-10vw calc(14rem + 20vw),30vw calc(14rem + 20vw);background-size:80vw 80vw;background-repeat:no-repeat}main{width:90%;height:100%;margin-left:5%;margin-right:5%}.header{padding-top:15px}.header .nav-frame{display:flex;justify-content:space-between;position:relative;flex-direction:column}.header .pageLogo{height:60px;width:189px}.header .open-menu{cursor:pointer;border:1px solid #035755;border-radius:20%;position:absolute;right:0;top:15px}.header .open-menu .line{width:30px;height:3px;background-color:#FF5476;margin:5px}.header .nav-links{position:absolute;flex-direction:column;border:1px solid silver;border-radius:0 0 10px 10px;display:none;background-color:rgba(255,255,255,0.8);top:70px;width:100%;z-index:1}.header .nav-links .nav-link{position:relative;font-size:15px;color:var(--fontColor);text-decoration:none;text-align:center;margin:10px 0;cursor:pointer}.nav-link1{position:relative;font-size:15px;text-decoration:none;text-align:center;cursor:pointer;padding:10px;border:solid 2px#FF383D;border-radius:20px;color:#FB4C47;background-color:rgba(0,0,0,0.0)}.nav-link1:hover{color:#fff;background-color:#FF383D;transition:.4s}.header .nav-links .nav-link .nav-link1:hover{color:#fff;background-color:#FF383D}.nav-links.nav-open{display:flex;padding-bottom:5px}.section .direction{display:flex;align-items:center;flex-direction:column-reverse}.section .center{display:flex;align-items:center}.section__title{font-family:var(--fontRedHat);font-weight:700;font-size:24px;line-height:70px;color:#FA5652}.section__span{font-family:var(--fontRedHat);font-weight:700;font-size:36px;line-height:40px;color:#035755;text-transform:capitalize}.section__desc{margin-top:20px;font-family:Roboto;font-weight:400;font-size:18px;line-height:30px;color:#4B4F51}.section__button{position:relative;top:40px;padding:15px 40px;font-size:15px;color:#FFF;text-decoration:none;background:#FB4C47;box-shadow:0 8px 87px rgba(0,0,0,0.1);border-radius:65px;font-weight:600;letter-spacing:.05em}.section__button:hover{box-shadow:0 0 20px rgba(199,199,199,0.7);transition:.3s ease;background:#035755}.section__image{width:300px;z-index:0}.section__virus1{position:absolute;bottom:40px;left:0;width:150px;z-index:-1;animation:spin 10s linear infinite}.section__virus2{position:absolute;top:0;right:0;width:100px;opacity:.8;z-index:-1;animation:spin 20s linear infinite}.section__virus3{position:absolute;top:200px;right:40px;width:100px;z-index:-1;animation:spin 20s linear infinite}.section__virus2{position:absolute;top:0;right:0;width:100px;opacity:.8;z-index:-1;animation:spin 20s linear infinite}@keyframes spin{100%{-webkit-transform:rotate(360deg)}}.section .covidImage__image{width:330px}.upside{margin-bottom:70px}.upside__title{font-family:var(--fontRedHat);font-weight:700;font-size:20px;text-align:center;color:#FA5652;margin-top:40px}.upside__span{display:block;font-family:var(--fontRedHat);font-weight:700;font-size:40px;text-align:center;text-transform:capitalize;color:#035755;margin-bottom:20px}.prevention .row-position{display:flex;align-items:center}.prevention .row-position:nth-child(odd){flex-direction:row-reverse}.prevention__image{margin-top:30px;width:330px}.prevention__span{font-weight:700;font-size:30px;text-transform:capitalize;color:#035755;align-items:center;display:inline-flex}.prevention__number{padding:10px;margin-right:15px;background:rgba(250,86,82,0.15);text-transform:capitalize;color:#FA5652;font-size:30px;border-radius:100%}.prevention__desc{margin-top:20px;font-weight:400;font-size:18px;line-height:30px;text-transform:capitalize;color:#4B4F51}.prevention{margin-top:2rem;padding-bottom:3rem;text-align:center;background:#fff;box-shadow:0 .75rem 2rem 0 rgba(211,14,14,0.1);border-radius:2rem;border:1px solid rgba(255,255,255,0.125)}#btn{padding:10px;border-radius:10px}.footer{margin-top:30px;text-align:center;padding-bottom:50px}.footer__link{font-size:12px;line-height:28px;color:#00402E;text-decoration:none;cursor:pointer}.text-position{text-align:left}.top{margin-top:-60px}.section__image{position:relative;margin-top:40px;width:90%;height:80%}@media screen and (min-width: 768px){.row.direction{flex-direction:row}.open-menu{display:none}.nav-frame{flex-direction:row}.header .nav-links{width:auto;display:inline-flex;flex-direction:row;position:absolute;right:0;top:50%;border:none;transform:translateY(-50%);background-color:transparent}.header .nav-links .nav-link{display:flex;align-items:center}.header .nav-links .nav-link:not(:last-child){margin-right:20px}.header .nav-links .nav-link:last-child{border:2px solid #fb4c47;border-radius:46px;padding:10px 35px;color:#ff383d}.header .nav-links .nav-link:last-child:hover{background-color:#fb4c47;color:#fff;transition:.3s}.header .nav-links .nav-link.active::after,.header .nav-links .nav-link:not(:last-of-type):hover::after{position:absolute;content:"";width:10px;height:10px;background-color:#fa5652;bottom:-15px;left:50%;transform:translateX(-50%);border-radius:100%}.text-position{text-align:left}.coronavirus .covidImage{margin-top:75px}.upside--top{margin-top:-60px}.upside__title{margin-top:40px}.upside__desc{width:80%;margin:auto}.symptomps__image{width:600px}.prevention{text-align:left}.prevention__image{width:200px;margin-left:15%}.help{margin:auto;width:70%}.footer{padding-top:100px}.footer .logo-figure,.footer .social-figure{margin:0;align-items:center}.footer .align-center{display:flex;align-items:center}}@media screen and (min-width: 992px){#nav-links .nav-link:not(:last-child){margin-right:40px}.section .text-position{text-align:left}.section__image{width:90%}.coronavirus .covidImage{margin:0}.coronavirus .covidImage__image{width:450px}.coronavirus__desc{text-align:left}.prevention__desc{padding-left:70px}.prevention__image{margin-left:15%;width:300px}.help{margin:auto;width:40%}}</style>

<body>
	<!-- Header -->
	<nav class="header">
		<!-- NAVBAR -->
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
					<a href="/app/Views/form.php" class="nav-link active">¿No estas vacunado?</a>
					<a href="<?php echo base_url().'/vercita'?>" class="nav-link">Mi Cita</a>
				</nav>
			</div>
		</div>
	</nav>
	<!-- Main -->
	<main>
		<!--COVİD-19-PARTE SUEPRIOR-->
		<section class="section_hero">
			<div class="container">
				<div class="row direction">
					<div class="col-12 col-md-6 col-lg-6 text-position container">
						<h2 class="section__title">Vamos todos a vacunarnos contra el COVID-19</h2>
						<span class="section__span">
							Website Informativo con todo lo que debes saber para protegerte de el COVID-19.
						</span>
						<p class="section__desc">
							Aqui encontraras todo lo que debes saber acerca de<b> Tu Vacuna.</b> Registrarte para agendar una nueva cita, tambien podras consultar centros y horarios de vacunacion disponibles.
						</p>
						<a href="<?php echo base_url().'/form'?>" class="section__button seciton__button--center">NUEVA CITA</a>
					</div>

					<div class="col-12 col-md-6 col-lg-6 text-position">
						<img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/section-image.svg" class="section__image" alt="Quarantine">
						<img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/section-virus.svg" class="section__virus1" alt="">
						<img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/section-virus.svg" class="section__virus2" alt="">
						<img src="https://raw.githubusercontent.com/alaattinerby/Covid-19-Website/4c233460e18c1a8cfba4f7c4830e8da0e7c5e8e9/Covid-19/img/section-virus.svg" class="section__virus3" alt="">
					</div>
				</div>
			</div>
		</section>

		<!-- FIN-PARTESUPERIOR -->
		<!--  -->
		<section class="prevention">
			<div class="container" id="bio">
				<div class="upside">
					<h2 class="upside__title">Covid-19</h2>
					<span class="upside__span">Cuando te acerques a recibir tu vacuna</span>
					<p class="upside__desc">
						No olvides guardar un distanciamiento de 2m por persona, tambien tener su mascarilla facial bien puesta y sobretodo lavar tus manos.
					</p>
				</div>
				<div class="row row-position">
					<div class="col-12 col-md-6 col-lg-6">
						<span class="prevention__span"><span class="prevention__number"></span>Tapabocas</span>
						<h3 class="prevention__desc">
							Vestir la mascarilla arriba de la nariz en todo momento, previene el contagio durante el proceso de vacunacion.
						</h3>
					</div>
					<div class="col-12 col-md-6 col-lg-6 ">
						<figure class="prevention__figure">
							<img src="https://github.com/alaattinerby/Covid-19-Website/blob/main/Covid-19/img/prevention1.png?raw=true" class="prevention__image" alt="">
						</figure>
					</div>
				</div>
				<div class="row row-position">
					<div class="col-12 col-md-6 col-lg-6 ">
						<span class="prevention__span"><span class="prevention__number"></span>Lavar tus Manos</span>
						<h3 class="prevention__desc">
							Lavarse las manos previene enfermedades y la propagación de infecciones y nuevos virus a otras personas.
					</div>
					<div class="col-12 col-md-6 col-lg-6">
						<figure class="prevention__figure">
							<img src="https://github.com/alaattinerby/Covid-19-Website/blob/main/Covid-19/img/prevention2.png?raw=true" class="prevention__image" alt="">
						</figure>
					</div>
				</div>
		</section>
	</main>
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
	<!-- SCRIPTS-->
	<script src="/app/Views/script.js"></script>
</body>

</html>