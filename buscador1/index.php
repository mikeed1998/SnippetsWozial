<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
</form>

</body>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'colaboradores');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$query = "SELECT * FROM productos WHERE titulo LIKE '%$str%' OR txt LIKE '%$str%'";

	$result = mysqli_query($conn, $query);

    echo '<div class="container">
    <div class="row">';
    while($row = $result->fetch_assoc()) {
        echo '
            
                    <div class="col-md-4">
                    '.$row['titulo'].'
                    </div>
                
        ';
    }

    echo '
    </div>
            </div>';

	}
	else{
		echo "Name Does not exist";
	}



?>
