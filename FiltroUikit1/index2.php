<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'casapiel';

    $conn = mysqli_connect($host, $user, $pass, $db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UIKit - Use filter and search bar</title>
  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>
  <style>
    .uk-search-icon-flip svg{
    padding: 0 !important;
    cursor: pointer;
}

.visible{
    display: block !important;
}

.uk-animation-shake{
    animation-name: uk-shake !important;
}
  </style>
</head>

<body>
  <div class="uk-flex uk-flex-wrap uk-child-width-1-1 uk-child-width-1-1@l">
    <div class="uk-padding-large">
      <h1 class="uk-h1 uk-text-center">Products</h1>
      <div uk-filter="target: .filter" class="uk-width-1-1 filter-main">
        <div class="uk-flex uk-flex-middle uk-flex-column uk-width-1-1 uk-margin-small-bottom filter-options-container">
          <div class="uk-flex uk-flex-right uk-flex-last uk-flex-1 uk-margin-medium filter-search-container">
            <form onsubmit="return false;" class="uk-subnav uk-subnav-pill uk-search uk-search-default uk-width-medium">
              <span class="uk-search-icon-flip" uk-search-icon></span>
              <input onkeyup="filterSearch();" uk-filter-control="" class="uk-search-input" type="search" placeholder="Search...">
            </form>
          </div>
          <div class="uk-flex uk-flex-center uk-flex-left@s uk-grid-small uk-grid-divider uk-child-width-auto uk-margin-small" uk-grid>
            <div>
              <ul class="uk-subnav uk-subnav-pill" uk-margin>
                <li class="uk-active" uk-filter-control="group: tag"><a href="#">All</a></li>
              </ul>
            </div>
            <div>
                <ul class="uk-flex uk-flex-center uk-flex-left@s uk-subnav uk-subnav-pill">
                <?php
                    $consult = mysqli_query($conn, "SELECT * FROM categorias_proyectos");
                    while($row = mysqli_fetch_assoc($consult)) {
                        echo '
                            <li onclick="resetSearchBar();" uk-filter-control="filter: [tag="f'.$row['id'].'"];"><a href="#">'.$row['categoria'].'</a></li>
                        ';
                    }
                ?>
                </ul>
            </div>

            

          </div>
        </div>

        <ul class="filter uk-child-width-1-1 uk-child-width-1-2@l uk-text-center uk-dark uk-animation-toggle" uk-grid tabindex="0">
          <p class="skills-no-result uk-hidden uk-text-center uk-width-1-1 uk-margin-small-top uk-h4">No results</p>
          <li class="skills-el" tag="f1" data-name="div 1">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 1</h3>
            </div>
          </li>
          <li class="skills-el" tag="f1" data-name="div 2">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 2</h3>
            </div>
          </li>
          <li class="skills-el" tag="f2" data-name="div 3">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 3</h3>
            </div>
          </li>
          <li class="skills-el" tag="f3" data-name="div 4">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 4</h3>
            </div>
          </li>
          <li class="skills-el" tag="f4" data-name="div 5">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 5</h3>
            </div>
          </li>
          <li class="skills-el" tag="f5" data-name="div 6">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 6</h3>
            </div>
          </li>
          <li class="skills-el" tag="f5" data-name="div 7">
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-margin-remove">Div 7</h3>
            </div>
          </li>
        </ul>

      </div>
    </div>
    
  <script>
    // CODE FOR Search OR filter

function filterSearch(){
  var search = $(".uk-search-input").eq(0).val().toLowerCase();
  if(!search){
    $(".uk-search-input").eq(0).attr("uk-filter-control", "");
  }else{
    $(".uk-search-input").eq(0).attr("uk-filter-control", "filter: [data-name*='" + search + "']");
  }
  $(".uk-search-input").eq(0).click();
}

$(".filter-main").on("beforeFilter", function(){
  $(".skills-no-result").removeClass('visible uk-animation-shake');
});

$(".filter-main").on("afterFilter", function(){
  var isElementVisible = false;
  var i = 0;

  while(!isElementVisible && i < $(".skills-el").length)
  {
    if($(".skills-el").eq(i).is(":visible")){
      isElementVisible = true;
    }

    i++;
  }

  if(isElementVisible === false){
    $(".skills-no-result").addClass('visible uk-animation-shake');
  }
});

function resetSearchBar(){
  $(".uk-search-input").eq(0).val('');
  $(".uk-search-input").eq(0).val('').attr("uk-filter-control", "");
}

// CODE FOR Search AND filter

function filterSearch2(){
  var search = $(".uk-search-input").eq(1).val().toLowerCase();
  if(!search){
    $(".uk-search-input").eq(1).attr("uk-filter-control", "group: name");
  }else{
    $(".uk-search-input").eq(1).attr("uk-filter-control", "filter: [data-name*='" + search + "']; group: name");
  }
  $(".uk-search-input").eq(1).click();
}

$(".filter-main2").on("beforeFilter", function(){
  $(".skills-no-result").removeClass('visible uk-animation-shake');
});

$(".filter-main2").on("afterFilter", function(){
  var isElementVisible = false;
  var i = 0;

  while(!isElementVisible && i < $(".skills-el2").length)
  {
    if($(".skills-el2").eq(i).is(":visible")){
      isElementVisible = true;
    }

    i++;
  }

  if(isElementVisible === false){
    $(".skills-no-result2").addClass('visible uk-animation-shake');
  }
});sssssss
  </script>
</body>
</html>