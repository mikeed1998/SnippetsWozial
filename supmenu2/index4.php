<!DOCTYPE html>
<html>
<head>
    <title>UIkit Toggleable Filters - François Capon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
</head>
<body>     
    <div uk-filter="target: .js-filter">
        <div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
            <div>
                <ul class="uk-subnav uk-subnav-pill">
                    <li class="uk-active" uk-filter-control>
                        <a href="#">All</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="uk-subnav uk-subnav-pill" uk-margin>
                    <li uk-filter-control="[data-color='white']"><a href="#">White</a></li>
                    <li uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
                    <li uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</body>
</html>