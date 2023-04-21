<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="carrusel">
                <div class="col px-5">
                    <div>
                        <img src="../imagenes/image.png" alt="" class="img-fluid mt-5">
                    </div>  
                </div>
                <div class="col py-5 px-5">
                    <div class="py-5">
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col px-5">
                    <div>
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col px-5">
                    <div>
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col py-5 px-5">
                    <div class="py-5">
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col px-5">
                    <div>
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col px-5">
                    <div>
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
                <div class="col py-5 px-5">
                    <div class="py-5">
                        <img src="../imagenes/image.png" alt="" class="img-fluid">
                    </div>  
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.carrusel').slick({
            dots: false,
            infinite: false,
            speed: 300,
            rows: 2,
            slidesPerRow: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    </script>
</body>
</html>