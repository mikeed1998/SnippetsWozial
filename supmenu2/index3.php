<!DOCTYPE html>
<html>
<head>
    <title>UIkit Toggleable Filters - François Capon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
    
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <style>
        html {background:#ddd}
        body {cursor: default;}
    </style>
    
    <script>
        var numberOfGroups = 3;
        var numberOfGroupsSelected = 0;
        
        function addClass(elementId, cssClass) {
           document.getElementById(elementId).classList.add(cssClass);
        }
        function removeClass(elementId, cssClass) {
           document.getElementById(elementId).classList.remove(cssClass);
        }
        function oneGroupSelected() {
            removeClass('my-filter-control-all', 'uk-button-primary');
            numberOfGroupsSelected++;
        }
        function oneGroupDeselected() {
            if (--numberOfGroupsSelected == 0) {
                addClass('my-filter-control-all', 'uk-button-primary');    
            }
        }
        function zeroGroupsSelected() {
            numberOfGroupsSelected = 0;
            groupsSeleted=document.querySelectorAll('[class^="my-filter-control-"][class~="uk-button-primary"][aria-hidden="false"]');
            for(i = 0; i < groupsSeleted.length; i++) {
                UIkit.toggle(groupsSeleted.item(i)).toggle();;
            }
            addClass('my-filter-control-all', 'uk-button-primary');
        } 
    </script>
    
</head>
<body>     
    <div uk-filter="target: #my-filter" class="uk-position-relative">
    <!--  https://getuikit.com/docs/filter#groups -->   
    <div class="uk-nav uk-margin-bottom">
        <!-- All -->
        <button uk-filter-control=""
                id="my-filter-control-all"
                class="uk-button uk-button-primary"
                onclick="zeroGroupsSelected()">All
        </button> 
        <!-- One -->
        <button uk-filter-control="group:one;filter:[data-meta~='one']"
                class="my-filter-control-one uk-button"
                uk-toggle="target: [class~=my-filter-control-one]"
                onclick="oneGroupSelected()">One
        </button>               
        <button uk-filter-control="group:one;filter:"
                class="my-filter-control-one uk-button uk-button-primary"
                hidden uk-toggle="target: [class~=my-filter-control-one]"
                onclick="oneGroupDeselected()">One
        </button>
        <!--Two -->               
        <button uk-filter-control="filter:[data-meta~='two'];group:two"
                class="my-filter-control-two  uk-button"
                uk-toggle="target: .my-filter-control-two"
                onclick="oneGroupSelected()">Two
        </button>               
        <button uk-filter-control="filter:;group:two"
                class="my-filter-control-two uk-button uk-button-primary"
                hidden uk-toggle="target: .my-filter-control-two"
                onclick="oneGroupDeselected()">Two
        </button>
        <!-- Three -->               
        <button uk-filter-control="filter:[data-meta~='three'];group:three"
                class="my-filter-control-three uk-button"
                uk-toggle="target: .my-filter-control-three"
                onclick="oneGroupSelected()">Three
        </button>               
        <button uk-filter-control="filter:;group:three"
                class="my-filter-control-three uk-button uk-button-primary"
                hidden uk-toggle="target: .my-filter-control-three"
                onclick="oneGroupDeselected()">Three
        </button>               
    </div>           
    <ul id="my-filter" class="uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>               
        <li data-meta="one">
            <div class="uk-card uk-card-default uk-card-body">Meta data: One
            </div>
        </li>               
        <li data-meta="two">
            <div  class="uk-card uk-card-default uk-card-body">Meta data: Two
            </div>
        </li>               
        <li data-meta="three">
            <div data-meta="three" class="uk-card uk-card-default uk-card-body">Meta data: Three
            </div>
        </li>               
        <li data-meta="one two">
            <div data-meta="one two" class="uk-card uk-card-default uk-card-body">Meta data: One, Two
            </div>
        </li>               
        <li data-meta="one three">
            <div data-meta="one three" class="uk-card uk-card-default uk-card-body">Meta data: One, Three
            </div>
        </li>               
        <li data-meta="two three">
            <div data-meta="two three" class="uk-card uk-card-default uk-card-body">Meta data: Two, Three
            </div>
        </li>               
        <li data-meta="one two three">
            <div data-meta="one two three" class="uk-card uk-card-default uk-card-body">Meta data: One, Two, Three
            </div>
        </li>           
    </ul>       
</div>
</body>
</html>