<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tit2</title>
    <style>
        #business, #highlife {
            display:none;
        }
    </style>
</head>
<body>
    <div class="people">
        <div id="people">
            <ul>
                <li> 
                    <a href="#" data-toggle="#business">Business</a>
                </li>
                <li> 
                    <a href="#" data-toggle="#highlife">Highlife</a>
                </li>
            </ul>
        </div>
        <div id="business">
            <ul>
                <li> 
                    <a href="#" data-toggle="#people">People</a>
                </li>
                <li> 
                    <a href="#" data-toggle="#highlife">Highlife</a>
                </li>
            </ul>
        </div>
        <div id="highlife">
            <ul>
                <li>
                    <a href="#" data-toggle="#people">People</a>
                </li>
                <li> 
                    <a href="#" data-toggle="#business">Business</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
       jQuery("a[data-toggle]").on("click", function (e) {
            e.preventDefault(); // prevent navigating
            var target = $(this).data('toggle');
            $('.people > div').hide();
            $('.people ' + target).fadeIn();
        });
    </script>
</body>
</html>