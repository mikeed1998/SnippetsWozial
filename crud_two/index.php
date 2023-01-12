<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_two";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $message = "";
    $telefono = "";
    $direccion = "";
    $correo = "";

    // header("Refresh:0"); <!-- mini virus -->

    if($_POST['SubmitEditar']){
        $sql = "SELECT * FROM contacto WHERE id = 1";
        $res = mysqli_query($conn, $sql);

        while($row = $res->fetch_assoc()) {
            $telefono = $row['telefono'];
            $direccion = $row['direccion'];
            $correo = $row['correo'];
        }

        $auxT = $_POST['telefono'];
        $auxD = $_POST['direccion'];
        $auxC = $_POST['correo'];

        $sql2 = "UPDATE contacto 
                SET telefono='$auxT', 
                direccion='$auxD', 
                correo='$auxC' 
                WHERE id = 1";

        mysqli_query($conn, $sql2);
    }else{
        $message = 'No hay modificaciones';
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <?php
                    $sql = "SELECT * FROM contacto WHERE id = 1";
                    $res = mysqli_query($conn, $sql);

                    while($row = $res->fetch_assoc()) {
                        $telefon = $row['telefono'];
                        $direccio = $row['direccion'];
                        $corre = $row['correo'];
                    }
                ?>
                <form action="" method="post">
                    <div class="row">
                        <div class="col py-3 text-center">
                            Telefono: [<?=$telefon?>] <input type="number" name="telefono" value="" placeholder="Nuevo telefono" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 text-center">
                            Direccion: [<?=$direccio?>] <input type="text" name="direccion" value="" placeholder="Nueva direccion" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 text-center">
                            Correo: [<?=$corre?>] <input type="text" name="correo" value="" placeholder="Nuevo correo" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 text-center">
                            <input type="submit" name="SubmitEditar" class="btn btn-secondary px-5 form-control"/ value="Editar">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php echo $message; ?>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>