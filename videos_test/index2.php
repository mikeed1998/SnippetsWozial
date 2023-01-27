<?php
    session_start();
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "videos_test"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<?php
    if(isset($_POST['but_upload'])){

        $maxsize = 50000000; // 5MB
        
        unlink('videos_tutorial.mp4');

        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
            $name = "tutorial.mp4"; // $_FILES['file']['name'];
            var_dump($nombre);
            $target_dir = "videos_";
            $target_file = $target_dir . $name;

            // Select file type
            $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($extension,$extensions_arr) ){
 
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    $_SESSION['message'] = "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                    
                    mysqli_query($con, "DELETE FROM videos;");
                    
                    // Insert record
                    $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

                    mysqli_query($con,$query);
                    $_SESSION['message'] = "Upload successfully.";
                }
            }
        }else{
            $_SESSION['message'] = "Invalid file extension.";
        }
    }else{
        $_SESSION['message'] = "Please select a file.";
    }
    
    header('location: vista.php');
    exit;
    } 
?>

<!doctype html> 
<html> 
<head>
    <title>Upload and Store video to MySQL Database with PHP</title>
</head>
<body>

    <!-- Upload response -->
    <?php 
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>

    <form method="post" action="" enctype='multipart/form-data'>
        <input type='file' name='file' />
        <input type='submit' value='Upload' name='but_upload'>
    </form>

</body>
</html>