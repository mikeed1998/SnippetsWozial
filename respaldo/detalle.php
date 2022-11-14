<!DOCTYPE html>
<?=$headGNRL?>
<body>
  
<?=$header?>

<div class="uk-container" style="min-height: 80vh;">
	

	<div uk-grid class="detalle-padding">
		<div class="uk-width-auto@s barra-lateral animated fadeInLeft">
			<div class="uk-flex uk-flex-center">
				<div class="uk-width-auto uk-position-relative">
	                <div class="imagen-circular animated rollIn">
	                    <img src="img/contenido/productos/<?=$imagen?>" alt="" uk-cover>
	                </div>
            	</div>
			</div>
			<div class="padding-top-50" style="letter-spacing: 0px;">
				<div class="color-rojo uk-text-center uk-text-uppercase" style="font-weight: 200;">
					<?=$empresa?>
				</div>
				<div class="uk-flex uk-flex-center padding-top-20">
					<a href="https://wa.me/521<?=$telefonoW?>?text=Hola%20vi%20tu%20post%20en%20eshot">
						<div class="boton-ayuda transicion">
							Yo te puedo ayudar
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="uk-width-expand@s animated fadeInRight">
			<div uk-grid>
				<div class="uk-width-expand servicios-paquetes uk-text-left">
					<?=$titulo?>
				</div>
				<div class="uk-width-auto uk-flex uk-flex-bottom">
					<div class="uk-flex uk-flex-middle">
						<a href="http://<?=$url?>"><?=$url?></a>
						&nbsp;&nbsp;&nbsp; 
						<a href="<?=$facebook?>" class="facebook" uk-icon="icon: facebook; ratio: 1"></a>
						&nbsp;
						<a href="<?=$instagram?>" class="instagram" uk-icon="icon: instagram; ratio: 1"></a>
						&nbsp;&nbsp;
					</div>
				</div>
				<div class="uk-width-1-1" style="margin-top: 10px;">
					<div style="background: #F4E047; height: 2px;">
						
					</div>
				</div>
			</div>
			<div class="padding-top-30">
				<?=$txt?>
			</div>
			<?php
			if ($numPics>0) { 
			 ?>

			<div class="padding-top-20">
				<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

				    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
				    <?php 
				    	$consultaPIC = $CONEXION -> query("SELECT * FROM productospic WHERE producto = $id ORDER BY orden");
						$numPics=$consultaPIC->num_rows;
						while ( $row_consultaPIC = $consultaPIC -> fetch_assoc() ) {
							$picOgRuta='img/contenido/productos/';
							$picOg=$picOgRuta.$row_consultaPIC['id'].'.jpg';
						echo '

				         <li>
				            <div class="uk-panel">
				                <img src="'.$picOg.'" alt="">
				            </div>
				        </li>';
						}

				    ?>
				    </ul>

				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
				    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

				</div>
			</div>
			<?php
			} 
			 ?>
		</div>
	</div>
</div>



<div class="bg-gris">
	<div class="uk-container padding-v-100">
		<div class="servicios-paquetes uk-text-uppercase">
			PROYECTOS RELACIOADOS
		</div>
		<div class="uk-flex uk-flex-center">
			<div class="linea-chica-morada"></div>
		</div>
		<div uk-slider>
            <div class="uk-position-relative">
                <div class="uk-slider-container">
					<ul class="uk-slider-items  uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
						<?php 
						$CONSULTA = $CONEXION -> query("SELECT * FROM productos WHERE servicio = $idServicio AND id != $id ORDER BY rand() LIMIT 5");
						while ($rowCONSULTA = $CONSULTA -> fetch_assoc()) {
						$imagen = $pic.$rowCONSULTA['imagen'];
						echo '
						<li>
						    <div uk-grid class="uk-grid-collapse padding-top-100">
				                <div class="uk-width-expand bg-white uk-text-center padding-top-20">
				                    <img src="img/design/rayo.png" alt="" style="height: 30px;">
				                </div>
				                <div class="uk-width-auto uk-position-relative">
				                    <img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
				                    <div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
				                        <img src="img/contenido/productos/'.$rowCONSULTA['imagen'].'" alt="" uk-cover>
				                    </div>
				                </div>
				                    <div class="uk-width-expand bg-white uk-text-center padding-top-20">
				                      <img src="img/design/rayo.png" alt="" style="height: 30px;">
				                 	</div>
				                </div>
				                <div class="bg-white testimonios-card">
				                  	<div class="testimonios-nombre">
				                    	'.$rowCONSULTA['titulo'].'
				                  	</div>
				                  	<div class="testimonios-ramo uk-text-uppercase">
				                    	'.$rowCONSULTA['empresa'].'
				                  	</div>
				                  	<div class="testimonios-texto">
				                  		'.wordlimit($rowCONSULTA['txt'] ,'20','...').'
				                  	</div>
				                  	<div uk-grid class="padding-bottom-10 padding-top-20">
				                    	<div class="uk-width-expand uk-text-left">
				                      	<a target="_blank" href="https://wa.me/521'.$whatsapp.'?text=Me%20gustaría%20saber%20..." class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:whatsapp; ratio: .8"></a> &nbsp;
				                      	<a target="_blank" href="'.$rowCONSULTA['facebook'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:facebook; ratio: .8"></a> &nbsp;
				                      	<a target="_blank" href="'.$rowCONSULTA['instagram'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:instagram; ratio: .8"></a>
				                    </div>
				                    <div class="uk-width-auto testimonios-proyectos uk-flex uk-flex-middle">
				                      <a href="'.$link.'">
				                        Ver más <span class="color-negro" uk-icon="icon: arrow-right; ratio: .8"></span>
				                      </a>
				                    </div>
				                </div>
				            </div>
				        </li>';
					    } ?>
					</ul>

                </div>

                <div class="uk-hidden@s">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s uk-light">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

          	</div>
		</div>
	</div>
</div>

<div class="uk-container padding-v-50" id="footer">
	<div uk-grid>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center wozial-logo">
			<!--
			<a href="wozial.com">
				<img src="img/design/logo-wozial.png" alt="" style="max-height: 80px;">
			</a>
			//-->
		</div>
		<div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-center">
			<!--
			<div class="uk-text-center">
				<a href="" class="typewrite footer-texto" data-period="2000" data-type='[ "Todos somos una familia" , "Y queremos apoyarnos" , "Eshot.mx", "Wozial.com", "Brincolinesbambinos.com",":)" ]'>
					<span class="wrap"></span>
				</a>
			</div>
			//-->
		</div>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center">
			<a href="Brincolinesbambinos.com">
				<img src="img/design/logobambinos.png" alt="" style="max-height: 60px;">
			</a>
		</div>
	</div>
</div>


<?=$footer?>

<?=$scriptGNRL?>

<script>
	var TxtType = function(t, e, i) {
    this.toRotate = e, this.el = t, this.loopNum = 0, this.period = parseInt(i, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
	};
	TxtType.prototype.tick = function() {
	    var t = this.loopNum % this.toRotate.length,
	        e = this.toRotate[t];
	    this.isDeleting ? this.txt = e.substring(0, this.txt.length - 1) : this.txt = e.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
	    var i = this,
	        s = 200 - 100 * Math.random();
	    this.isDeleting && (s /= 2), this.isDeleting || this.txt !== e ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, s = 500) : (s = this.period, this.isDeleting = !0), setTimeout(function() {
	        i.tick()
	    }, s)
	}, window.onload = function() {
	    for (var t = document.getElementsByClassName("typewrite"), e = 0; e < t.length; e++) {
	        var i = t[e].getAttribute("data-type"),
	            s = t[e].getAttribute("data-period");
	        i && new TxtType(t[e], JSON.parse(i), s)
	    }
	    var n = document.createElement("style");
	    n.type = "text/css", n.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}", document.body.appendChild(n)
	};
</script>

</body>
</html>




<!DOCTYPE html>
<?=$headGNRL?>
<body>
  
<?=$header?>



<style>
	#busc {
		display: none;
	}

	#myInput:focus + #busc {
		display: block;
	}

	#busc:hover{
		display: block;
	}

</style>


<div class="bg-gris uk-text-center padding-bottom-50" style="min-height: 80vh;">
	<div class="uk-container">
		<div class="servicios-titulo padding-top-50">
			<img src="img/design/APF_LOGO.png" alt="">
		</div>
		<div class="portafolio-subtitulo uk-flex uk-flex-center">
			<div style="max-width: 700px;">
				Hemos decidido crear esta página para brindar apoyo a los empresarios que se están viendo afectados en estos momentos
			</div>
		</div>
		<div class="uk-flex uk-flex-center">
			<div class="linea-roja"></div>
		</div>
		<div class="portafolio-contenedor">
			<div uk-filter="target: .js-filter">
				<!-- Cachando los servicos de la BD //-->
				<div id="completo">
				<ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" id="ss">
			        <li class="uk-active" uk-filter-control>
						<a href="#">
							Todos
						</a>
					</li>
			        <?php 
		    	    	$CONSULTA = $CONEXION -> query("SELECT * FROM servicios ORDER BY titulo");
							while ($rowCONSULTA = $CONSULTA -> fetch_assoc()) {
								$titulo = $rowCONSULTA['titulo'];
					?>
		        				<li uk-filter-control="[data-servicio='<?=$titulo?>']">
									<a href="#" id="servicios">
										<?=$titulo?>
									</a>
								</li>
					<?php 
							}
	 				?>
			    </ul>	
					<input class="form-control" id="myInput" type="text" placeholder="Search..">
				<div id="busc" class="container">
  
  <br>
  <ul id="myList" style="list-style-type: none;">
  <div class="row">
		
		<?php
            $query = "SELECT * FROM productos";
            $result = mysqli_query($CONEXION, $query);
            
            while ($rowCONSULTA = $result->fetch_assoc()) {

                $id = $rowCONSULTA['id'];
			$idEmpresa = $rowCONSULTA['empresa'];
			$idServicio = $rowCONSULTA['servicio'];
			$whatsapp = $rowCONSULTA['whatsapp'];
			$urlTitulo = urlencode(str_replace($caracteres_no_validos, $caracteres_si_validos, html_entity_decode(strtolower($rowCONSULTA['titulo']))));
			$link = $id.'_'.$urlTitulo.'-.html';
			$facebook = $rowCONSULTA['facebook'];

			$queryS = "SELECT s.id, s.titulo FROM servicios as s INNER JOIN productos as p ON s.id = p.servicio";
			$serviciosS = mysqli_query($CONEXION, $queryS);

			while($rowS = $serviciosS->fetch_assoc()) {
				if($idServicio == $rowS['id']) {
					$nombreServicio = $rowS['titulo'];
					break;
				}
			}

          
			echo '
				<div class="col-md-4">
				
					<li data-servicio="'.$nombreServicio.'" class="card-principal" style="list-style-type: none;">
					<div uk-grid class="uk-grid-collapse" style="padding-top: 80px">
						<div class="uk-width-expand bg-white uk-text-center padding-top-20">
						</div>
						<div class="uk-width-auto uk-position-relative">
							<img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
							<div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
								<img src="img/contenido/productos/'.$rowCONSULTA['imagen'].'" alt="" uk-cover>
							</div>
						</div>
						<div class="uk-width-expand bg-white uk-text-center padding-top-20">
						</div>
					</div>
					<div class="bg-white testimonios-card">
						<div class="testimonios-nombre">
							'.$rowCONSULTA['titulo'].'
						</div>
						<div class="testimonios-ramo uk-text-uppercase">
							'.$rowCONSULTA['empresa'].'
						</div>
						<div class="testimonios-texto">
							'.wordlimit($rowCONSULTA['txt'] ,'20','...').'
						</div>
						<div uk-grid class="padding-bottom-10 padding-top-20">
							<div class="uk-width-expand uk-text-left">
								  <a target="_blank" href="https://wa.me/521'.$whatsapp.'?text=Me%20gustaría%20saber%20..." class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:whatsapp; ratio: .8"></a> &nbsp;
								  <a target="_blank" href="'.$rowCONSULTA['facebook'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:facebook; ratio: .8"></a> &nbsp;
								  <a target="_blank" href="'.$rowCONSULTA['instagram'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:instagram; ratio: .8"></a>
							</div>
							<div class="uk-width-auto testimonios-proyectos uk-flex uk-flex-middle">
								  <a href="'.$link.'">
									Ver más <span class="color-negro" uk-icon="icon: arrow-right; ratio: .8"></span>
								</a>
							</div>
						  </div>
					</div>
				</li>	
					
					</div>
				';
			}
			?>
		</div>
  </ul>  
</div>


				</div>

					<ul id="show" class="js-filter uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>	
					<br>
					
					<?php 



						$aux = true;

						if($aux == true)
						{
							$CONSULTA = $CONEXION -> query("SELECT * FROM productos");
						
							while ($rowCONSULTA = $CONSULTA -> fetch_assoc()) {
								$id = $rowCONSULTA['id'];
								$idEmpresa = $rowCONSULTA['empresa'];
								$idServicio = $rowCONSULTA['servicio'];
								$whatsapp = $rowCONSULTA['whatsapp'];
								$urlTitulo = urlencode(str_replace($caracteres_no_validos,$caracteres_si_validos, html_entity_decode(strtolower($rowCONSULTA['titulo']))));
								$link = $id.'_'.$urlTitulo.'-.html';
	
								$CONSULTASERV = $CONEXION->query("SELECT * FROM servicios WHERE id = $idServicio");
								$rowCONSULTASERV = $CONSULTASERV->fetch_assoc();
								$nombreServicio = $rowCONSULTASERV['titulo'];
	
								$imagen = $rowCONSULTA['imagen'];
	
								echo '
									<li data-servicio="'.$nombreServicio.'" class="card-principal">
										<div uk-grid class="uk-grid-collapse" style="padding-top: 80px">
											<div class="uk-width-expand bg-white uk-text-center padding-top-20">
											</div>
											<div class="uk-width-auto uk-position-relative">
												<img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
												<div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
													<img src="img/contenido/productos/'.$rowCONSULTA['imagen'].'" alt="" uk-cover>
												</div>
											</div>
											<div class="uk-width-expand bg-white uk-text-center padding-top-20">
											</div>
										</div>
										<div class="bg-white testimonios-card">
											<div class="testimonios-nombre">
												'.$rowCONSULTA['titulo'].'
											</div>
											<div class="testimonios-ramo uk-text-uppercase">
												'.$rowCONSULTA['empresa'].'
											</div>
											<div class="testimonios-texto">
												'.wordlimit($rowCONSULTA['txt'] ,'20','...').'
											</div>
											<div uk-grid class="padding-bottom-10 padding-top-20">
												<div class="uk-width-expand uk-text-left">
												  	<a target="_blank" href="https://wa.me/521'.$whatsapp.'?text=Me%20gustaría%20saber%20..." class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:whatsapp; ratio: .8"></a> &nbsp;
												  	<a target="_blank" href="'.$rowCONSULTA['facebook'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:facebook; ratio: .8"></a> &nbsp;
												  	<a target="_blank" href="'.$rowCONSULTA['instagram'].'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:instagram; ratio: .8"></a>
												</div>
												<div class="uk-width-auto testimonios-proyectos uk-flex uk-flex-middle">
												  	<a href="'.$link.'">
														Ver más <span class="color-negro" uk-icon="icon: arrow-right; ratio: .8"></span>
													</a>
												</div>
										  	</div>
										</div>
									</li>';
							   } 
								 
							echo '
								</ul>';
						}
						else
						{
							echo "Nada";
						}
			       		
			    	?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-container padding-v-50" id="footer">
	<div uk-grid>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center wozial-logo">
		<!-- 
			<a href="wozial.com">
				<img src="img/design/logo-wozial.png" alt="" style="max-height: 80px;">
			</a>
		//-->
		</div>
		<div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-center">
		<!--
			<div class="uk-text-center">
				<a href="" class="typewrite footer-texto" data-period="2000" data-type='[ "Todos somos una familia" , "Y queremos apoyarnos" , "Eshot.mx", "Wozial.com", "Brincolinesbambinos.com",":)" ]'>
					<span class="wrap"></span>
				</a>
			</div>
		//-->
		</div>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center">
			<a href="Brincolinesbambinos.com">
				<img src="img/design/APF_LOGO.png" alt="" style="max-height: 60px;">
			</a>
		</div>
	</div>
</div>

<?=$footer?>

<?=$scriptGNRL?>

<script>
	var TxtType = function(t, e, i) {
    	this.toRotate = e, this.el = t, this.loopNum = 0, this.period = parseInt(i, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
	};
	
	TxtType.prototype.tick = function() {
	    var t = this.loopNum % this.toRotate.length,
	        e = this.toRotate[t];
	    this.isDeleting ? this.txt = e.substring(0, this.txt.length - 1) : this.txt = e.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
	    var i = this,
	        s = 200 - 100 * Math.random();
	    this.isDeleting && (s /= 2), this.isDeleting || this.txt !== e ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, s = 500) : (s = this.period, this.isDeleting = !0), setTimeout(function() {
	        i.tick()
	    }, s)
	}, window.onload = function() {
	    for (var t = document.getElementsByClassName("typewrite"), e = 0; e < t.length; e++) {
	        var i = t[e].getAttribute("data-type"),
	            s = t[e].getAttribute("data-period");
	        i && new TxtType(t[e], JSON.parse(i), s)
	    }
	    var n = document.createElement("style");
	    n.type = "text/css", n.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}", document.body.appendChild(n)
	};
</script>

<script>

</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>







$facebook = $rowCONSULTA['facebook'];
$instagram = $rowCONSULTA['instagram'];