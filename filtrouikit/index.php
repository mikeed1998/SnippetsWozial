<?
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "casapiel";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $consultaInicio = $conn -> query("SELECT * FROM inicio 	WHERE id = 1");
    $inicioRow = $consultaInicio -> fetch_assoc();


if (isset($_SESSION['search'])) {
    $filtro =$_SESSION['search'];
    unset($_SESSION['search']);
    
}

    //FILTROS
if (isset($_SESSION['odenarpor'])) {
    $orderBy=$_SESSION['odenarpor'];
    unset($_SESSION['odenarpor']);
}

//Tipo
if (isset($_SESSION['tipo'])) {
    $tipo=$_SESSION['tipo'];
    unset($_SESSION['tipo']);
}

    $CONSULTATIPO = $conn -> query("SHOW COLUMNS FROM productos WHERE field = 'tipo'");
	$row_CONSULTATIPO = $CONSULTATIPO -> fetch_assoc();

	$productos = array();
	$categorias = array();

	$consultaCats = $conn -> query("SELECT * from productoscat WHERE parent = 0");
	 while($cat_row = $consultaCats -> fetch_assoc()){
	 	$parentId =  $cat_row['id'];
	 	$subCategorias =array();
	 	$consultaSubcats = $conn -> query("SELECT * from productoscat WHERE parent = $parentId");
	 	while ($subCat = $consultaSubcats -> fetch_assoc()) {
	 		array_push($subCategorias,$subCat);
	 	}
	 	$cat_row['subcategorias']=$subCategorias;
	 	array_push($categorias, $cat_row);

	}

    
	if(isset($id)){
		//debug($tipo);
		//CONSULTA DE PRODUCTOS POR CATEGORIA
		$consultaProdByCat = $conn -> query("SELECT id FROM productoscat WHERE parent = $id or id=$id");
		// si hay filtro de orden de precio
		while ($rowConsultaProdByCat = $consultaProdByCat -> fetch_assoc() ){	
			$subId = $rowConsultaProdByCat['id'];

			$sql="SELECT * FROM productos WHERE estatus = 1 AND categoria = $subId";
			if(isset($tipo)){
				$sql .= " AND tipo = '$tipo'";
			}

			$sql .= " ORDER BY titulo";
			$consultaProductos = $conn -> query($sql);

			while($products_row = $consultaProductos -> fetch_assoc()){

					$producID =$products_row['id'];
							$consultaPic = $conn -> query("SELECT * FROM productospic WHERE producto = $producID ORDER BY orden LIMIT 1");
							$row_Img = $consultaPic -> fetch_assoc();

							$products_row['img'] = "../img/contenido/productos/".$row_Img['id'].".jpg";
							
					
					$consultaCat = $conn -> query("
						SELECT  p.id as productoId,p.categoria,pe.id as prodExistenciasId,p.tipo,pe.precio
						FROM productos p
						JOIN productosexistencias pe
						ON p.id = pe.producto 
						WHERE p.id = $producID AND pe.precio > 0
						ORDER BY pe.id ASC
						LIMIT 1;
					");

					$rowConsultaCat = $consultaCat -> fetch_assoc();

					
					$products_row['precio_sinformato']=$rowConsultaCat['precio'];				
					$products_row['precio'] = "$".number_format(($rowConsultaCat['precio']),2)." MX";

					array_push($productos,$products_row);		
			}
			
		}
	}else{
		//CONSULTA DE PRODUCTOS SIN FILTROS
		$sql="SELECT * FROM productos WHERE estatus = 1 AND tienda = 1";
		if(isset($tipo)){
			$sql .= " AND tipo = '$tipo'";
		}

		$sql .= " ORDER BY titulo";

		$consultaProductos = $conn -> query($sql);
		while($products_row = $consultaProductos -> fetch_assoc()){

				$producID =$products_row['id'];
						$consultaPic = $conn -> query("SELECT * FROM productospic WHERE producto = $producID ORDER BY orden LIMIT 1");
						$row_Img = $consultaPic -> fetch_assoc();

						$products_row['img'] = "../img/contenido/productos/".$row_Img['id'].".jpg";
						
				
				$consultaCat = $conn -> query("
					SELECT  p.id as productoId,p.categoria,pe.id as prodExistenciasId,p.tipo,pe.precio
					FROM productos p
					JOIN productosexistencias pe
					ON p.id = pe.producto 
					WHERE p.id = $producID AND pe.precio > 0
					LIMIT 1;
				");

				$rowConsultaCat = $consultaCat -> fetch_assoc();
				$products_row['precio_sinformato']=$rowConsultaCat['precio'];
				$products_row['precio'] = "$".number_format(($rowConsultaCat['precio']),2)." MX";

				array_push($productos,$products_row);
		}
	}

	if (isset($orderBy)){

		$price = array_column($productos, 'precio_sinformato');
		
		if($orderBy == 'DESC')
		array_multisort($price, SORT_DESC,SORT_NUMERIC, $productos);
		else
		array_multisort($price, SORT_ASC,SORT_NUMERIC, $productos);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super filtro</title>
</head>
<body>
<div class="uk-container uk-container-large">
		<div uk-grid style="margin-left: 0">
			<!-- SECCION DE FILTROS LAT IZQ-->
			<div class="uk-width-1-5@m uk-padding-small uk-sticky">
				
				<!--CATEGORIAS LATERAL IZQ-->
				<div class="uk-padding">
					<ul class="uk-nav uk-nav-parent-icon text-8" uk-nav>
						<?php foreach ($categorias as $index => $value): 
						?>
			        	<li class="uk-parent">
			        		<a class="uk-text-uppercase color-grisaceo negritas" href="<?= $value['id'].'_'.$value['txt'.$lng].'_productos'?>"><?=$value['txt'.$lng] ?></a>
				        	<ul class="uk-nav-sub">
								<li class="uk-text-uppercase color-grisaceo"><a class="color-grisaceo" href="<?=$value['id'].'_'.$value['txt'.$lng].'_todos_productos'?>" style="text-color: black; text-decoration: none;"><?=$btnTodos?></a></li>
			        			<?php  foreach ($value['subcategorias'] as $key => $val):  ?>
				       				<li><a class="uk-text-uppercase color-grisaceo" href="<?=$val['id'].'_'.$val['txt'.$lng].'_productos' ?>"><?= $val['txt'.$lng] ?></a></li>
				       			<?php endforeach ?>
			       			</ul>
			       		 </li>
			       		<?php endforeach?>
				     </ul>
				</div>
				
			</div>
			<!-- SECCION DE PRODUCTOS-->
			<div class="uk-width-4-5@m">
				<div class="uk-child-width-1-4@m" uk-grid>
					<?php ;	
						for ($i=0; $i < sizeof($productos) ; $i++):
					 ?>
					<div class="uk-padding-small">
						<div class="uk-card uk-card-default uk-transition-toggle">
							<a href="<?= $productos[$i]['id'].'_'.$productos[$i]['titulo'].'_item'?>">
				            	<div class="uk-card-media-top uk-flex uk-flex-center uk-padding-small">
				            		<div class="uk-cover-container" style="width:200px; height: 220px;padding: 22px">
			    	        			 <img src="<?= $productos[$i]['img'] ?>" alt="" uk-cover>
			        		    	</div>
			            		</div>
						
				            	 <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-text-center productos-overlay">
			            			<p class="uk-text-uppercase color-primary"><?= $bottonText ?></p>
			        	    		<hr class="uk-divider-small">
			            			<i class="fa fa-shopping-bag cartcount" aria-hidden="true"></i>
				            	</div>
						
				     	       <div class="uk-card-body uk-text-center padding-10 text-dark">
		        	    		 	<hr class="uk-divider-small">
		            				<p class="uk-text-uppercase negritas"><?= $productos[$i]['titulo'] ?></p>
		                			<p> <?= $productos[$i]['precio'] ?></p>
				    	        </div>
			    	    	</a>
				        </div>
					</div>
				<?php endfor ?>		
			</div>

			<?php if(!sizeof($productos)): ?>
					
					<div class="uk-alert-danger uk-padding-large uk-text-center" uk-alert>
					    
					
					
					</div>
					
			<?php endif ?>
		</div>
	</div>
</div>
</body>
</html>