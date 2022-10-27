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
    <table class="table table-striped">
        <!--
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Created</th>
                <th>Status</th>
            </tr>
        </thead>
        //-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php 
                        if(!empty($members)){ $i = 0; 
                            foreach($members as $row){ $i++; 
                    ?>
                    
                   
                    <div class="card">
                        <div class="card-body">
                            <?php echo $row['name']; ?>
                            <br>
                            <?php echo $row['email']; ?>
                            <br>
                            <?php echo $row['gender']; ?>
                            <br>
                            <?php echo $row['country']; ?>
                            <br>
                            <?php echo $row['created']; ?>
                            <br>
                            <?php echo ($row['status'] == 1)?'Active':'Inactive'; ?>
                        </div>  
                    </div>

                    

                    <?php
                        /*
                        echo '
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            '. $row['name'] .'
                                        </div>
                                        <div class="col-md-12">
                                            '. $row['email'] .'
                                        </div>
                                        <div class="col-md-12">
                                            '. $row['gender'] .'
                                        </div>
                                        <div class="col-md-12">
                                            '. $row['country'] .'
                                        </div>
                                        <div class="col-md-12">
                                            '. $row['created'] .'
                                        </div>
                                        <div class="col-md-12">
                                            '. ($row['status'] == 1)?'Active':'Inactive' .'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                        */
                    ?>

                    <!--
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php echo $row['name']; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo $row['email']; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo $row['gender']; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo $row['country']; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo $row['created']; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo ($row['status'] == 1)?'Active':'Inactive'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    //-->

                    <?php } }else{ ?>
                        <div class="row">
                            <div class="col">
                                No member(s) found...
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <tbody id="userData">
            <?php 
            if(!empty($members)){ $i = 0; 
                foreach($members as $row){ $i++; 
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['created']; ?></td>
                <td><?php echo ($row['status'] == 1)?'Active':'Inactive'; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="7">No member(s) found...</td></tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>


