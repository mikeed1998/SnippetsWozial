<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'mercabella';

        $conn = mysqli_connect($host, $user, $pass, $db);

        $sql = $conn->query("SELECT * FROM productos");

        while($row = $sql->fetch_assoc()) {
            echo $row['categoria'] . ' ';
        }
        */
    ?>

    <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'testeo5';

        $conn = mysqli_connect($host, $user, $pass, $db);

        $sql = $conn->query("SELECT * FROM testeo");

        // while($row = $sql->fetch_assoc()) {
        //     echo $row['categoria'] . ' ';
        // }
    ?>

    <?php
        if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['correo'])) {
            echo 'Existe';
            $sql = $conn->query("INSERT INTO testeo(nombre, edad, correo) VALUES (".$_POST['nombre'].",".$_POST['edad'].",".$_POST['correo']).")";
            $conn->execute();
        } else {
            echo 'No existe';
        }
    ?>

    <form action="index.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="edad"></label>
        <input type="number" name="edad">
        <label for="correo"></label>
        <input type="email" name="correo">
        <input type="submit">
    </form>

</body>
</html>