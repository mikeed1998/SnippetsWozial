<?php
	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "categoriastres_snippet";

	$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
?>

<?php
    

	function categories() {
        $sql = "SELECT * FROM cate AS c, cate_n AS n WHERE c.parent_id = n.id";
        $result = $conn->query($sql);
        $categories = array();

        while($row = $result->fetch_assoc()) {
            $categories[] = array(
                'id' => $row['id'],
                'parent_id' => $row['parent_id'],
                'categoria_nombre' => $row['categoria_nombre'],
                'subcategory' => sub_categories($row['id']),
				'imagen' => $row['imagen'],
				'logo' => $row['logo'],
				'titulo' => $row['titulo'],
				'descripcion' => $row['descripcion'],
            );
        }

        return $categories;
    }

    function sub_categories($id) {
        $sql = "SELECT * FROM cate WHERE parent_id=$id";
        $result = $conn->query($sql);
        $categories = array();

        while($row = $result->fetch_assoc()) {
            $categories[] = array(
                'id' => $row['id'],
                'parent_id' => $row['parent_id'],
                'categoria_nombre' => $row['categoria_nombre'],
                'subcategory' => sub_categories($row['id']),
				'imagen' => $row['imagen'],
				'logo' => $row['logo'],
				'titulo' => $row['titulo'],
				'descripcion' => $row['descripcion'],
            );
        }
        
        return $categories;
    }

    function viewsubcat($categories) {
        $html = '<ul class="sub-category">';
        foreach($categories as $category) {
            $html .= '<li>'.$category['categoria_nombre'].'</li>';

            if( ! empty($category['subcategory'])){
                $html .= viewsubcat($category['subcategory']);
            }
        }

        $html .= '</ul>';
        return $html;
    }


    $msg = "";

    // If upload button is clicked ...
    if (isset($_POST['upload'])) {
  	    $image = $_FILES['imagen']['name'];
  	    $target = "imagenes/".basename($image);

		$logo = $_FILES['logo']['name'];
		$target2 = "imagenes/".basename($logo);

		$titulo = $_POST['titulo'];
		$descripcion = $_POST['descripcion'];
		// $categoria = $_POST['categoria'];
		$category = explode('|', $_POST['categoria']);
		$id_c = $category[0];
		$categoria = $category[1];

		// echo $id_c .' + '. $categoria;

  	    $sql = "INSERT INTO cate (categoria_nombre, parent_id, imagen, logo, titulo, descripcion) VALUES ('$categoria', '$id_c', '$image', '$logo', '$titulo', '$descripcion')";
  	    // execute query
  	    mysqli_query($db, $sql);

  	    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target)) {
  		    $msg = "Image uploaded successfully";
  	    }else{
  		    $msg = "Failed to upload image";
  	    }

		  if (move_uploaded_file($_FILES['logo']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
    }  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
   	        width: 50%;
   	        margin: 20px auto;
   	        border: 1px solid #cbcbcb;
        }

        form{
   	        width: 50%;
   	        margin: 20px auto;
        }
   
        form div{
   	        margin-top: 5px;
        }
   
        #img_div{
   	        width: 80%;
   	        padding: 5px;
   	        margin: 15px auto;
   	        border: 1px solid #cbcbcb;
        }

        #img_div:after{
   	        content: "";
   	        display: block;
   	        clear: both;
        }

        img{
   	        float: left;
   	        margin: 5px;
   	        width: 300px;
   	        height: 140px;
        }
    </style>
</head>
<body>
    <div id="content">
        
		<?php
			$categories = categories(); ?>
			<?php foreach($categories as $category){ ?>
			<ul class="category">
				<li><?php echo $category['categoria_nombre'] ?></li>
				<?php
					if( ! empty($category['subcategory'])){
					echo viewsubcat($category['subcategory']);
					}
				?>
			</ul>
		<?php } ?>

        <form method="POST" action="index.php" enctype="multipart/form-data">
  	        <input type="hidden" name="size" value="1000000">
			
			<label> Imágen </label>
			<div>
  	            <input type="file" name="imagen" value="hola">
  	        </div><br>
			
			<label> Logotipo </label>
			<div>
  	            <input type="file" name="logo">
  	        </div><br>

			<label> Titulo </label>
			<input type="text" name="titulo"><br><br>
			
			<label> Categoria </label>
			<select name="categoria">
				<?php
					$cat = mysqli_query($db, "SELECT * FROM cate_n");

					while($row = mysqli_fetch_array($cat)) { 				
						$id = $row['id'];
						$nombre = $row['nombre'];

						echo '<option value="'. $id .'|'. $nombre .'"> '. $nombre .' </option>';
					 } 
				?>
			</select>
			
			<br><br>
			<label>Descripción</label>
            <div>
                <textarea 
      	            id="texto" 
      	            cols="40" 
                    rows="4" 
  	                name="descripcion" 
      	            placeholder="Descripición"></textarea>
  	        </div><br>
  	        
			<div>
  	            <button type="submit" name="upload">POST</button>
            </div>
        </form>
    </div>

</body>
</html>