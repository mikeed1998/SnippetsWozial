<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tit</title>
    <style>
        .show-subitem {
            display: none;
        }

        .hide-subitem {
            display: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .margin-15px {
            margin-left: 25px;
        }

        a.full-width {
            display: block;
            width: 100%;
            border: 1px solid red;
        }
    </style>
</head>
<body>

    

    <!-- <ul>
        <li style="border: 1px solid black;">
            <a class="main-category full-width">SSC</a>
            <div class="sub-category hide-subitem">
                <ul class="exam-type">
                    <li><a class="show-item full-width">CONTENEDOR 1</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <ul>
        <li style="border: 1px solid black;">
            <a class="main-category full-width">SSC</a>
            <div class="sub-category hide-subitem">
                <ul class="exam-type">
                    <li><a class="show-item full-width">CONTENEDOR 1</a></li>
                </ul>
            </div>
        </li>
    </ul> -->

    <ul>
        <li style="border: 1px solid black;">
            <a class="categoria full-width">CATA</a>
            <div class="subcategoria hide-subitem">
                <ul class="exam-type">
                    <li><a class="item full-width">SUBCATA</a></li>
                    <ul class="subitem hide-subitem margin-15px">
                        <img class="img-fluid" src="craiyon_124636_house_rent.png" alt="">
                    </ul>
                </ul>
                <ul class="exam-type">
                    <li><a class="item hide-subitem full-width">SUBCATA</a></li>
                    <ul class="subitem hide-subitem margin-15px">
                        <img class="img-fluid" src="craiyon_124642_house_rent.png" alt="">
                    </ul>
                </ul>
            </div>
        </li>
    </ul>
    <ul>
        <li style="border: 1px solid black;">
            <a class="categoria full-width">CATA</a>
            <div class="subcategoria hide-subitem">
                <ul class="exam-type">
                    <li><a class="item full-width">SUBCATA</a></li>
                    <ul class="subitem hide-subitem margin-15px">
                        <img class="img-fluid" src="craiyon_124648_house_rent.png" alt="">
                    </ul>
                </ul>
                <ul class="exam-type">
                    <li><a class="item full-width">SUBCATA</a></li>
                    <ul class="subitem hide-subitem margin-15px">
                        <img class="img-fluid" src="craiyon_124651_house_rent.png" alt="">
                    </ul>
                </ul>
            </div>
        </li>
    </ul>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a.categoria").click(function() {
                $(this).next("div.subcategoria").toggle();
            });

            $("a.item").click(function() {
                $(this).parentsUntil("ul").next("ul.subitem").toggle();
            });
        });
  </script>
</body>
</html>