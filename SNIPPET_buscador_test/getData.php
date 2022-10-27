<?php 
// Include configuration file 
require_once 'config.php'; 
 
// Include User class 
require_once 'User.class.php'; 
 
// Initialize User class 
$user = new User(); 
 
// Define filters 
$conditions = array(); 
 
// If search request is submitted 
if(!empty($_POST['keywords'])){ 
    $conditions['search'] = array('name' => $_POST['keywords'], 'email' => $_POST['keywords']); 
} 

// If filter request is submitted 
if(!empty($_POST['filter'])){ 
    $sortVal = $_POST['filter']; 
    $sortArr = array( 
        'new' => array( 
            'order_by' => 'created DESC' 
        ), 
        'asc'=>array( 
            'order_by'=>'name ASC' 
        ), 
        'desc'=>array( 
            'order_by'=>'name DESC' 
        ), 
        'active'=>array( 
            'where'=>array('status' => 1) 
        ), 
        'inactive'=>array( 
            'where'=>array('status' => 0) 
        ) 
    ); 
    $sortKey = key($sortArr[$sortVal]); 
    $conditions[$sortKey] = $sortArr[$sortVal][$sortKey]; 
}
 
// Get members data based on search and filter 
$members = $user->getRows($conditions); 
 
if(!empty($members)){ 
    $i = 0; 
    foreach($members as $row){ $i++; 
        echo '
            <div class="container-fluid">
                <div class="row">';
                echo '<div class="col-md-4 px-5">'; 
                        echo ''.$i.''; 
                        echo ''.$row['name'].''; 
                        echo ''.$row['email'].''; 
                        echo ''.$row['gender'].''; 
                        echo ''.$row['country'].''; 
                        echo ''.$row['created'].''; 
                        $status = ($row['status'] == 1)?'Active':'Inactive'; 
                        echo ''.$status.''; 
        echo '       </div>
                </div>
            </div>'; 
    } 
}else{ 
    echo '<tr><td colspan="7">No members(s) found...</td></tr>'; 
} 
exit;