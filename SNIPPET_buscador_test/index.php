<?php 
// Include configuration file 
require_once 'config.php'; 
 
// Include User class 
require_once 'User.class.php'; 
 
// Initialize User class 
$user = new User(); 
 
// Get members data from database 
$members = $user->getRows(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>ServerSide</title>
    <script>
        function searchFilter(){
            $.ajax({
                type: 'POST',
                url: 'getData.php',
                data: 'keywords='+$('#searchInput').val()+'&filter='+$('#filterSelect').val(),
                
                beforeSend: function(){
                    $('.loading-overlay').show();
                },
                success:function(html){
                    $('.loading-overlay').hide();
                    $('#userData').html(html);
                }
            });
        }
    </script>
</head>
<body>
<div class="search-panel">
    <div class="input-group">
        <input type="text" class="search form-control" id="searchInput" placeholder="By Name or Email">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="searchFilter();">Search</button>
        </div>
    </div>
    <div class="form-group">
        <select class="form-control" id="filterSelect" onchange="searchFilter();">
            <option value="">Sort By</option>
            <option value="new">Newest</option>
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
</div>

<div class="main-content">
    <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
        <div id="userData">
            <div class="container-fluid">
                <div class="row py-5">
                    <?php 
                        if(!empty($members)){ $i = 0; 
                            foreach($members as $row){ $i++; 
                    ?>

                    <div class="col-md-4 px-5">
                        <?php echo $i; ?>
                        <?php echo $row['name']; ?>
                        <?php echo $row['email']; ?>
                        <?php echo $row['gender']; ?>
                        <?php echo $row['country']; ?>
                        <?php echo $row['created']; ?>
                        <?php echo ($row['status'] == 1)?'Active':'Inactive'; ?>
                    </div>
                    
                    <?php } }else{ ?>
                        No member(s) found...
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
  
    
</div>
</body>
</html>


