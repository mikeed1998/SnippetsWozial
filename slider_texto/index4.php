<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet"></link>
</head>
<body>

    <div class="container-fluid px-5">
        <div class="allTemplateName">
            <div class="row position-relative">
                <div class="col-12 text-end position-absolute top-0 start-50 translate-middle-x z-3">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 text-start position-relative bg-warning px-5" style="max-height: 633px; overflow: scroll;" id="categorias_base">
                        <li data-table="#table1">A</li>
                        <li data-table="#table2">B</li>
                        <li data-table="#table3">C</li>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                </div>
                <div class="con">
                    <table id="table1">
                        <tr>
                            <td>
                                <div class="col-12 text-end position-absolute top-100 start-50 translate-middle-x z-2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="image col-md-6 col-xs-12 p-0 d-flex justify-content-start align-items-end" style="width: auto; height: 600px; background-image: url(ocean.png); background-size: cover;">
                                                <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                                                    <img class="img-fluid" src="forest.png" alt="" style="background-size: cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-start">
                                            <h1>Titulo</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table id="table2">
                        <tr>
                            <td>
                                <div class="col-12 text-end position-absolute top-100 start-50 translate-middle-x z-2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="image col-md-6 col-xs-12 p-0 d-flex justify-content-start align-items-end" style="width: auto; height: 600px; background-image: url(tks.png); background-size: cover;">
                                                <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                                                    <img class="img-fluid" src="forest.png" alt="" style="background-size: cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-start">
                                            <h1>Titulo 2</h1>
                                            <p>Loremdddddddddddddddddddd ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    

    
    

    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(".con table").hide();
        $(function() {
            $(".allTemplateName li").click(function() {
                var tableSelect = $(this).attr("data-table");
                var tables = $(".con table");
                tables.filter(tableSelect).toggle();
                tables.not(tableSelect).hide();
            });
        });
    </script>
</body>
</html>