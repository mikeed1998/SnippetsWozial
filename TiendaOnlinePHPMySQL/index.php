<?php
    require 'config/config.php';
    require 'config/database.php';

    $db = new Database();
    $conn = $db->conectar();

    $sql = $conn->prepare("SELECT id, nombre, precio FROM productos WHERE activo = 1");
    $sql->execute();
    $res = $sql->fetchAll(PDO::FETCH_ASSOC);

    // session_destroy();

    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <strong>Tienda Online</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                    <a href="checkout.php" class="btn btn-primary">
                        Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($res as $r) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php
                                $id = $r['id'];
                                $imagen = "imagen/productos/" . $id . "/principal.jpg";

                                if(!file_exists($imagen)) {
                                    $imagen = "imagen/no-photo.jpg";
                                }
                            ?>
                            <img src="<?php echo $imagen; ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $r['nombre']; ?></h5>
                                <p class="card-text"><?= number_format($r['precio'], 2, '.', ','); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="details.php?id=<?php echo $r['id']; ?>&token=<?php echo hash_hmac('sha1', $r['id'], KEY_TOKEN); ?>" class="btn btn-primary">Detalles</a>
                                    </div>
                                    <button class="btn btn-outline-success" type="button" onclick="addProducto(<?php echo $r['id']; ?>, '<?php echo hash_hmac('sha1', $r['id'], KEY_TOKEN); ?>')">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        function addProducto(id, token) {
            let url = 'clases/carrito.php';
            let formData = new FormData();
            formData.append('id', id);
            formData.append('token', token);

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
            .then(data => {
                if(data.ok){
                    let elemento = document.getElementById("num_cart");
                    elemento.innerHTML = data.numero;
                }
            })
        }
    </script>
</body>
</html>