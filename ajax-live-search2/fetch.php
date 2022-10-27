<?php
$connect = mysqli_connect("localhost", "root", "", "colaboradores");
$output = '';

// LIMITAR PALABRAS      
function wordlimit($string, $length , $ellipsis)
{
  $words = explode(' ', strip_tags($string));
  if (count($words) > $length)
  {
	return implode(' ', array_slice($words, 0, $length)) ." ". $ellipsis;
  }
  else
  {
	return $string;
  }
}

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM productos WHERE txt LIKE '%".$search."%'";
}
else
{
	$query = "SELECT * FROM productos ORDER BY id";
}

$result = mysqli_query($connect, $query);

while ($rowCONSULTA = $result->fetch_assoc()) {
	$id = $rowCONSULTA['id'];
	$idEmpresa = $rowCONSULTA['empresa'];
	$idServicio = $rowCONSULTA['servicio'];
	$whatsapp = $rowCONSULTA['whatsapp'];
	// $urlTitulo = urlencode(str_replace($caracteres_no_validos, $caracteres_si_validos, html_entity_decode(strtolower($rowCONSULTA['titulo']))));
	// $link = $id.'_'.$urlTitulo.'-.html';

//	$CONSULTASERV = $result->query("SELECT * FROM servicios WHERE id = $idServicio");
//	$rowCONSULTASERV = $CONSULTASERV -> fetch_assoc();
//	$nombreServicio = $rowCONSULTASERV['titulo'];

	$imagen = $rowCONSULTA['imagen'];
	$link = "";

	/* data-servicio=/*$nombreServicio*/

	$output.='
		<li  class="card-principal">
			<div uk-grid class="uk-grid-collapse" style="padding-top: 80px">
				<div class="uk-width-expand bg-white uk-text-center padding-top-20">
				  </div>
				  <div class="uk-width-auto uk-position-relative">
					  <img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
					  <div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
						<img src="img/contenido/productos/'. $rowCONSULTA['imagen'] .'" alt="" uk-cover>
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
	echo $output;
} 


if(mysqli_num_rows($result) > 0)
{
	/*
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Titulo</th>
							<th>txt</th>
							<th>url</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["titulo"].'</td>
				<td>'.$row["txt"].'</td>
				<td>'.$row["url"].'</td>
			</tr>
		';
	}
	echo $output;
	*/
}
else
{
	echo 'Data Not Found';
}
?>