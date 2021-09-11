<?php 

	$social = [
		['link' => 'https://www.instagram.com/safedespensa/', 'icon' => 'fa-instagram', 'name' => 'Instagram'],
		['link' => 'https://www.facebook.com/SAFEdespensa/', 'icon' => 'fa-facebook-f', 'name' => 'Facebook'],
		['link' => 'https://bit.ly/3c4BOp"E', 'icon' => 'fa-whatsapp', 'name' => 'WhatsApp'],
		['link' => 'https://twitter.com/SAFEdespensa', 'icon' => 'fa-twitter', 'name' => 'Twitter']
	];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="super, despensa, domicilio, monterrey, nuevo leon, san pedro, salud, sanitizacion, higiene, coronavirus, covid, desinfectar">
	<meta name="description" content="Cuida tu salud ante el COVID-19, sanitizamos tu despensa y te la llevamos a domicilio en la Zona Metropolitana de Monterrey.">
	<title>Super a domicilio libre de COVID-19 en Monterrey | SAFE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="resources/css/layout.css">
	<link rel="icon" href="iconos_logos/faviconp.png">
</head>
<body data-spy="scroll" data-target="#mainNav" data-offset="56"> 
	<nav id="mainNav" class="navbar navbar-light navbar-expand-md fixed-top py-0 py-md-1"> 
		<div class="d-md-none">
			<a class="navbar-brand" href="#home">
				<img src="iconos_logos/SAFE_logo_short.png" alt="SAFE" class="imageNav">
			</a>
		</div>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navContent"> 
			<span class="sr-only">Toggle navigation</span> 
			<span class="navbar-toggler-icon"></span>
			<img src="iconos_logos/x.png" alt="Close" class="close-icon py-1 imageXSm"></img>
		</button>
			<div class="collapse navbar-collapse justify-content-center" id="navContent"> 
				<div class="navbar-nav navbar-right"> 
					<a class="nav-item nav-link textBlack marginX-Sm spaceXSm bold active js-scroll-trigger" href="#home" style="font-size: 1.1rem">Inicio</a>
					<a class="nav-item nav-link textBlack marginX-Sm spaceXSm bold js-scroll-trigger" href="#about" style="font-size: 1.1rem">Sobre nosotros</a>
				</div>
				<div class="marginX-Md d-none d-md-block">
					<a class="navbar-brand" href="#home">
						<img src="iconos_logos/SAFE_logo.png" alt="SAFE" class="imageSm">
					</a>
				</div>
				<div class="navbar-nav navbar-right">
					<a class="nav-item nav-link textBlack marginX-Sm spaceXSm bold js-scroll-trigger" href="#how" style="font-size: 1.1rem">¿Cómo pedir?</a>
					<a class="nav-item nav-link textBlack marginX-Sm spaceXSm bold js-scroll-trigger" href="#meet" style="font-size: 1.1rem">Conócenos</a>
				</div>
			</div>
		</div>
	</nav>
	<section id="home" class="paddingNav">
		<div class="container h-100">
			<div class="row h-100 justify-content-center justify-content-md-start text-center text-md-left align-items-md-center">
				<div id="landingInfo" class="container paddingT-Md px-4">
					<div class="rightAbs d-none d-md-block">
						<ul>
							<?php 
								foreach($social as $red){ ?>
									<li>
										<a href="<?php echo $red['link'] ?>" role="button">
											<i class="fab <?php echo $red['icon'] ?> iconMd textBlack pb-3 grow"></i>
											<span class="sr-only"><?php echo $red['name'] ?></span>
										</a>
									</li>
								<?php } ?>
						</ul>
					</div>
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-12 col-sm-10 col-md-7 col-lg-5">
							<img id="afe" src="iconos_logos/afe2.png" alt="SAFE" class="imageMd2">
						</div>
					</div>
					<div class="row justify-content-center justify-content-md-start">
					<div class="col-12 col-sm-10 col-md-7 col-lg-5">
							<img id="brand" src="iconos_logos/s.png" alt="SAFE" class="imageMd2">
						</div>
					</div>
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-12 col-sm-10 col-md-7 col-lg-5 p-b-5">
							<h3 class="spaceSm bold textBlueDark h-3">Asegura tu pedido</h3>
						</div>
					</div>
					<div class="row justify-content-center justify-content-md-start">
						<div  class="col-12 col-sm-10 col-md-6 col-lg-5">
							<p class="pb-0">Te llevamos la despensa hasta la puerta de tu casa, cuidando tu salud al evitar el riesgo de contagio de COVID-19.</p>
							<!--<a class="btn btn-lg radiusButton bgYellow px-4 fontSizeSm spaceXSm bold textWhite hovOrange" onclick="redirect('shop.php')" role="button">HAZ TU PEDIDO</a> -->
							<a class="btn btn-lg radiusButton bgYellow px-4 fontSizeSm spaceXSm bold textWhite hovOrange" href="https://bit.ly/3c4BOpE" role="button">HAZ TU PEDIDO</a>
						</div>
					</div>
				</div>
			<!--</div>-->
		</div>
	</section>
	<section id="about" class="paddingNav">
		<div id="about1" class="row mx-2 mx-md-0 justify-content-center pb-5">
			<div class="col-12 col-md-6 align-self-center d-none d-md-block">
				<img src="images/about.png" alt="Limpiando" class="img-fluid">
			</div>
			<div class="col-12 col-md-6 my-md-auto my-3 text-justify text-md-left">
				<p class="fontSizeLg bold spaceSm marginB-XSm textBlueDark d-md-none mb-5 text-center">Sob<u class="undl">re Nosot</u>ros</p>
				<p class="fontSizeLg bold spaceSm marginB-XSm textBlueDark d-none d-md-block">Sobre Nosotros</p>
				<p class="bold fontSizeSm">Nuestro servicio de entrega te brinda la seguridad que mereces siguiendo nuestro <a href="#protocolo" class="hyperlink">protocolo de seguridad</a>.</p>
				<p class="">Llevamos a cabo un control de sanitización exhaustivo, utilizando peróxido de hidrógeno, jabón y cloro.</p>
			</div>
			<div class="col-12 col-md-6 align-self-center d-md-none">
				<img src="images/about_mobile.png" alt="Limpiando" class="img-fluid">
			</div>
		</div>
		<div id="protocolo" class="container-fluid">
			<div class="row text-center">
				<div class="col-12 col-lg-8 mx-0 py-5 px-md-4 bgGrey">
					<div class="row pb-4">
						<div class="col-12 fontSizeMd bold textBlueDark">
							<h3 class="bold">Protocolo De Seguridad</h3>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-10 col-sm-6 col-md-5 col-lg-6 py-3 px-md-4">
							<img src="iconos_logos/design/clothes.png" alt="Cubrebocas" class="imageSm pb-3 pb-sm-0">
							<p class="bold fontSizeSm mb-2 mb-sm-3 textBlueDark">Vestimenta</p>
							<p>Portamos vestimenta de seguridad: guantes, lentes, tapabocas y calzado apropiado.</p>
						</div>
						<div class="col-10 col-sm-6 col-md-5 col-lg-6 py-3 px-md-4">
							<img src="iconos_logos/design/hand_wash.png" alt="Aseo Manos" class="imageSm pb-3 pb-sm-0">
							<p class="bold fontSizeSm mb-2 mb-sm-3 textBlueDark">Aseo Personal</p>
							<p>Lavamos nuestras manos y cara con jabón antes de entrar a cualquier zona de trabajo.</p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-10 col-sm-6 col-md-5 col-lg-6 py-3 px-md-4">
							<img src="iconos_logos/design/sanit.png" alt="Desinfectante" class="imageSm pb-3 pb-sm-0">
							<p class="bold fontSizeSm mb-2 mb-sm-3 textBlueDark">Sanitización</p>
							<p>Tus artículos son desinfectados con peróxido de hidrógeno antes de entrar a nuestro almacén y transporte.</p>
						</div>
						<div class="col-10 col-sm-6 col-md-5 col-lg-6 py-3 px-md-4">
							<img src="iconos_logos/design/truck.png" alt="Camión" class="imageSm pb-3 pb-sm-0">
							<p class="bold fontSizeSm mb-2 mb-sm-3 textBlueDark">Espacio Laboral</p>
							<p>Limpiamos áreas de trabajo, como almacén y transporte, constantemente con cloro, jabón y peróxido de hidrógeno.</p>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<a class="btn btn-lg radiusButton px-4 fontSizeSm spaceXSm bold textBlueDark hovYellow" role="button" data-toggle="modal" data-target="#popUp">LEER MÁS</a>
							<div class="modal fade" id="popUp" tabindex="-1" role="dialog" aria-labelledby="popUp" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
									        <h5 class="modal-title bold textBlueDark" id="exampleModalLongTitle">PROTOCOLO DE SEGURIDAD</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
								      	</div>
								    	<div class="modal-body modalBody">
									       	<p class="bold textBlueDark spaceXSm">RECOLECCIÓN</p>
									       	<p>1. Los colaboradores deben portar tapabocas, guantes y cargar con su propio gel antibacterial (70% alcohol) en todo momento.</p>
									       	<p>2. En caso de que los artículos se encuentren en un supermercado, el colaborador limpia las superficies del carrito del supermercado así como cualquier otra superficie con la que tengan contacto los productos.</p> 
									       	<p>3. Los coolaboradores son capacitados, para tener la información y los recursos necesarios con el fin de evitar el contagio y preservar la seguridad de nuestros clientes.</p>
									       	<p class="mb-5">4. Una vez recolectados los artículos, pasan a ser desinfectados.</p>
									       	<p class="bold textBlueDark spaceSm">ALMACÉN</p>
									       	<p>1. El almacén es desinfectado diariamente con jabón, peróxido y soluciones en aerosol.</p>
									       	<p class="mb-5">2. Los artículos que llegan a nuestro almacén de proveedores, son desinfectados ahí mismo.</p>
									       	<p class="bold textBlueDark spaceSm">LIMPIEZA</p>
									       	<p>1. Nuestra estación de limpieza cuenta con superficies desinfectadas con jabón y peróxido.</p>
									       	<p>2. El colaborador debe remover los guantes (de adentro hacia afuera) que haya utilizado en el proceso de recolección. Posteriormente, deberá lavarse las manos y portar un nuevo par de guantes.</p>
									       	<p>3. Los artículos empaquetados son desinfectados con jabón y peróxido de hidrógeno.</p>
									       	<p>4. Los artículos no empaquetados, como frutas y verduras, son lavados y desinfectados con peróxido de hidrógeno. (Este lavado no sustituye al del hogar, ya que nuestras soluciones son enfocadas específicamente en desintegrar el virus COVID-19 y su precursor COVID-2).</p>
									       	<p class="mb-5">5. Una vez lavados los artículos pasan a ser empaquetados y a su distribución.</p>
									       	<p class="bold textBlueDark spaceSm">TRANSPORTE</p>
									       	<p>1. Las unidades de transporte son desinfectadas diariamente con aerosol y talladas en su superficie con peróxido de hidrógeno y jabón.</p>
									       	<p>2. Independientemente de la procedencia del colaborador, este debe lavar el manubrio y lavarse las manos antes de entrar a la unidad.</p>
									       	<p>3. Después del proceso de recolección o limpieza, el colaborador debe remover sus guantes (de adentro hacia afuera) lavarse las manos, tallar el manubrio y posterior a ello entrar a la unidad.</p>
									       	<p class="mb-5">4. Ningun artículo puede entrar a la unidad de transporte sin antes haber sido desinfectado.</p>
									       	<p class="bold textBlueDark spaceSm">ENTREGA</p>
									       	<p>1. Si solamente es un colaborador el que realizará la entrega, este deberá primero despejar su camino, tocar timbres, abrir puertas, etc.</p>
									       	<p>2. Una vez que haya despejado su camino deberá lavarse las manos.</p>
									       	<p>3. Podrá proceder a manejar el pedido. Una vez que se manipule y entre en contacto con el pedido no podrá entrar en contacto con ninguna otra superficie hasta terminar de entregar el pedido.</p>
									       	<p>4. Una vez entregado el pedido se puede proceder al pago.</p>
									       	<p>5. Terminado el proceso, el colaborador deberá lavarse las manos y tallar el manubrio previo a entrar a la unidad de transporte.</p>
								    	</div>
								    	<div class="modal-footer">
									      	<div class="container-fluid">	
										      	<div class="row">	
										      		<div class="col-12 col-sm-9 text-center text-sm-left align-self-center bold textBlueDark">
										      			Mantengamos Nuevo León Seguro
										      		</div>
									      			<a class="btn radiusButton px-4 py-2 fontSizeXSm spaceXSm bold d-none d-sm-block textBlueDark hovYellow" role="button" data-dismiss="modal">Cerrar</a>
									      		</div>
									      	</div>
								    	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-block col-lg-4 px-0" id="about2">	
				</div>
			</div>
		</div>
	</section>
	<section id="how" class="paddingNav">
		<div class="d-none d-sm-block">
			<div class="container fontSizeLg bold text-center marginB-Sm textBlueDark">
				<p>Cómo Funciona</p>
			</div>
			<div class="container-fluid">	
				<div class="row justify-content-center my-4">	
					<div class="col-1 align-self-center">	
						<img src="iconos_logos/design/whats.png" alt="Whatsapp" class="imageSm">
					</div>
					<div class="col-lg-6 col-md-9 col-sm-10 marginL-XSm">	
						<p class="bold fontSizeSm textBlueDark">Escríbenos al <a href="https://bit.ly/3c4BOpE" class="hyperlink">81 1200 0861</a></p>
						<p class="mb-0">Mandanos tu <span class="bold">lista de super </span>por WhatsApp.</p>
						<p>El costo de recolección, sanitización y envío es de $200 MXN.</p>	
					</div>
				</div>
				<div class="row justify-content-center my-4">	
					<div class="col-1 align-self-center">	
						<img src="iconos_logos/design/sanit2.png" alt="virus" class="imageSm">
					</div>
					<div class="col-lg-6 col-md-9 col-sm-10 marginL-XSm">	
						<p class="bold fontSizeSm textBlueDark">Recolección y sanitización</p>
						<p class="mb-0">Tus artículos son recolectados y sanitizados con nuestro <span class="bold">protocolo de seguridad</span>.</p>
						<p><a href="#protocolo" class="hyperlink">Conócelo aquí.</a></p>
					</div>
				</div>
				<div class="row justify-content-center my-4">	
					<div class="col-1 align-self-center">	
						<img src="iconos_logos/design/house.png" alt="casa" class="imageSm">
					</div>
					<div class="col-lg-6 col-md-9 col-sm-10 marginL-XSm">	
						<p class="bold fontSizeSm textBlueDark">Recibe tu pedido</p>
						<p class="mb-0">Recibirás tu pedido al <span class="bold">siguiente día</span>.</p>
						<p>Te invitamos a evaluarnos con el fin de darte un mejor servicio.</p>		
					</div>
				</div>
				<div class="row justify-content-center my-4">	
					<div class="col-1 align-self-center text-center">	
						<img src="iconos_logos/design/list.png" alt="lista" class="imageSm">
					</div>
					<div class="col-lg-6 col-md-9 col-sm-10 marginL-XSm">	
						<p class="bold fontSizeSm textBlueDark">Guardamos tu lista</p>
						<p>Tu lista de mandado será guardada para ofrecerte un <span class="bold">servicio más personalizado </span>en tu siguiente compra.</p>
					</div>
				</div>
				<div class="row justify-content-center my-4">
					<div class="col-1"></div>
					<div class="col-lg-6 col-md-9 col-sm-10 marginL-XSm">
						<a class="btn btn-lg radiusButton px-4 fontSizeSm spaceXSm bold textBlueDark hovYellow" href="https://bit.ly/3c4BOpE" role="button">HAZ TU PEDIDO</a>
					</div>
				</div>
			</div>
		</div>
		<div id="carousel1" class="carousel slide fullParent d-block d-sm-none" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators bottomSelf7">
				<li data-target="#carousel1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel1" data-slide-to="1"></li>
				<li data-target="#carousel1" data-slide-to="2"></li>
				<li data-target="#carousel1" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner fullParent text-center" role="listbox">
				    <div class="carousel-item active fullParent">
				      	<div class="carousel-caption topSelf2">
				      		<h3 id="howTitle" class="bold textBlueDark">¡Tu super en casa en 4 pasos!</h4>
				      		<div class="card noBorder">
								<img src="iconos_logos/design/texting.png" alt="Escríbenos" class="card-img-top">
								<div class="card-body p-2">
								    <h4 class="card-title bold textBlueDark">Escríbenos</h4>
								    <h5 class="card-text">Envíanos tu <span class="bold">lista de super </span>por WhatsApp al <span class="bold"><a href="https://bit.ly/3c4BOpE" class="hyperlink">81 1200 0861</a></span>.</h5>
								</div>
							</div>
				      	</div>	
				    </div>
				    <div class="carousel-item fullParent">
				      	<div class="carousel-caption topSelf">
				      		<div class="card noBorder">
								<img src="iconos_logos/design/6.png" alt="Sanitizando" class="card-img-top">
								<div class="card-body p-2">
								    <h4 class="card-title bold textBlueDark">Sanitización</h4>
								    <h5 class="card-text">Recolectamos y sanitizamos tus artículos siguiendo nuestro <span class="bold hyperlink">protocolo de seguridad</span>.</h5>
								</div>
							</div>
				      	</div>	
				    </div>
				<div class="carousel-item fullParent">
				    <div class="carousel-caption topSelf">
				      	<div class="card noBorder">
							<img src="iconos_logos/design/7.png" alt="Entregando" class="card-img-top">
							<div class="card-body p-2">
								<h4 class="card-title bold textBlueDark">Recibe tu pedido</h4>
								<h5 class="card-text pb-0 mb-0">Al <span class="bold">siguiente día</span> de ordernarlo.</h5>
								<h5>¡Evalúanos para darte un mejor servicio!</h5>
							</div>
						</div>
				    </div>	
				</div>
				<div class="carousel-item fullParent">
				    <div class="carousel-caption topSelf">
				      	<div class="card noBorder">
							<img src="iconos_logos/design/list2.png" alt="Lista" class="card-img-top">
							<div class="card-body p-2">
								<h4 class="card-title bold textBlueDark">Guardamos tu lista</h4>
								<h5 class="card-text">Te ofrecemos un <span class="bold">servicio más personalizado </span>en tu siguiente compra.</h5>
								<a class="btn btn-lg radiusButton px-4 spaceXSm bold fontSizeXSm textBlueDark mt-3" href="https://bit.ly/3c4BOpE" role="button">HAZ TU PEDIDO</a>
							</div>
						</div>
				    </div>	
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
				<i class="fas fa-angle-left iconLg"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
				<i class="fas fa-angle-right iconLg"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<section id="meet" class="paddingNav">
		<div class="container-fluid text-center mt-3">
			<div class="row justify-content-center">	
				<div class="col-12 col-sm-11 col-md-11 col-lg-9">
					<div class="container mb-5">	
						<p class="bold fontSizeLg textBlueDark">HOL<u class="undl">A, SOMOS S</u>AFE</p>
					</div>
					<div class="container fontSizeSm">	
						Este proyecto nace de nuestra preocupación por preservar la salud de las familias ante la contingencia que estamos viviendo. Cómo individuos y comunidad, depende de nosotros<span class="d-none d-md-inline"> tomar las medidas necesarias para</span> prevenir el contagio.
					</div>
				</div>
			</div>	
		</div>
		<div class="container-fluid text-center py-5">
			<div class="col-12 text-center py-3">
				<h3 class="bold textBlueDark">Conoce Al Equipo</h3>
			</div>
			<div class="container d-none d-sm-block">
				<div class="row justify-content-center">
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/marisa.jpg" alt="Marisa" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3 spaceSm">
									<p class="mb-0 spaceSm">DIGITAL</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark spaceSm">Marisa Díaz</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/irvin.jpg" alt="Irvin" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3">
									<p class="mb-0 spaceSm">GESTIÓN</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark spaceSm">Irvin Veloz</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/ramiro.jpeg" alt="Ramiro" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3">
									<p class="mb-0 spaceSm">DIGITAL</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark spaceSm">Ramiro Glez</p>
								</div>
							</div>	
						</div>
					</div>
					<div class="w-100 d-none d-md-block"></div>
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/braulio.jpg" alt="Braulio" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3">
									<p class="mb-0 spaceSm">GESTIÓN</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark spaceSm">Braulio Ramírez</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/paulino.jpeg" alt="Paulino" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3">
									<p class="mb-0 spaceSm">MARKETING</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark">Paulino Pachecano</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card noBorder">
							<img src="images/bobe.jpg" alt="Nombre" class="card-img-top">
							<div class="row justify-content-center">
								<div class="col-9 posTeamInfo pt-3">
									<p class="mb-0 spaceSm">LOGÍSTICA</p>
									<p class="bold fontSizeXSm mb-1 textBlueDark">Roberto Casanova</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="carousel2" class="carousel slide sizeMd d-block d-sm-none" data-ride="carousel" data-interval="60000">
				<ol class="carousel-indicators bottomSelf3">
					<li data-target="#carousel2" data-slide-to="0" class="active"></li>
					<li data-target="#carousel2" data-slide-to="1"></li>
					<li data-target="#carousel2" data-slide-to="2"></li>
					<li data-target="#carousel2" data-slide-to="3"></li>
					<li data-target="#carousel2" data-slide-to="4"></li>
					<li data-target="#carousel2" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner fullParent text-center" role="listbox">
				    <div class="carousel-item active fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/braulio.jpg" alt="Braulio" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">GESTIÓN</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Braulio Ramírez</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
					<div class="carousel-item fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/marisa.jpg" alt="Marisa" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">DIGITAL</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Marisa Díaz</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
				    <div class="carousel-item fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/bobe.jpg" alt="Nombre" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">LOGÍSTICA</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Roberto Casanova</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
				    <div class="carousel-item fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/paulino.jpeg" alt="Paulino" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">MARKETING</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Paulino Pachecano</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
				    <div class="carousel-item fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/irvin.jpg" alt="Irvin" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">GESTIÓN</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Irvin Veloz</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
				    <div class="carousel-item fullParent">
				      	<div class="carousel-caption carousel2Position">
				      		<div class="card noBorder">
								<img src="images/ramiro.jpeg" alt="Ramiro" class="card-img-top">
								<div class="row justify-content-center">
									<div class="col-9 posTeamInfo pt-3">
										<p class="mb-0">DIGITAL</p>
										<p class="bold fontSizeSm mb-1 textBlueDark">Ramiro González</p>
									</div>
								</div>
							</div>
				      	</div>	
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
					<i class="fas fa-angle-left iconLg"></i>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
					<i class="fas fa-angle-right iconLg"></i>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="container-fluid bgBlue text-center py-5 textWhite">
			<img src="iconos_logos/SAFE_logo_white.png" alt="SAFE" class="imageMd pb-4">
			<p class="fontSizeMd spaceSm pb-5 bold">Asegura Tu Pedido</p>
			<div class="pb-4 mb-5">
				<i class="fas fa-map-marker-alt iconSm textWhite pr-2 d-inline"></i>
				<p class="fontSizeSm spaceSm bold pb-5 d-inline">Monterrey, San Pedro, Carretera y alrededores</p>
			</div>
			<p class="bold fontSizeSm spaceSm pb-3">¡Contáctanos!</p>
			<div class="container">
				<ul class="pl-0">
					<li class="d-inline">
						<a href="https://www.instagram.com/safedespensa/" role="button">
							<i class="fab fa-instagram iconMd textWhite px-3 grow"></i>
							<span class="sr-only">Instagram</span>
						</a>
					</li>
					<li  class="d-inline">
						<a href="https://www.facebook.com/SAFEdespensa/" role="button">
							<i class="fab fa-facebook-f iconMd textWhite px-3 grow"></i>
							<span class="sr-only">Facebook</span>
						</a>
					</li>
					<li  class="d-inline">
						<a href="https://bit.ly/3c4BOpE" role="button">
							<i class="fab fa-whatsapp iconMd textWhite px-3 grow"></i>
							<span class="sr-only">Whatsapp</span>
						</a>
					</li>
					<li  class="d-inline">
						<a href="https://twitter.com/SAFEdespensa" role="button">
							<i class="fab fa-twitter iconMd textWhite px-3 grow"></i>
							<span class="sr-only">Twitter</span>
						</a>
					</li>
				</ul>
			</div>
			<p class="fontSizeSm spaceSm pb-0 mb-0 bold">@safedespensa</p>
		</div>
	</section>
	<?php include('templates/footer.php'); ?>
</html>

