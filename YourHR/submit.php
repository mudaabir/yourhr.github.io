<?php 
	$db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "yourhr_data";

    if(!$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name,3307))
        die("Failed to connect to the database.");

    // get the post records
    if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $resume=$_POST['resume'];
            
            if (isset($_FILES['resume']['name']))
            {
              $resume = $_FILES['resume']['name'];
              $file_tmp = $_FILES['resume']['tmp_name'];
     
              move_uploaded_file($file_tmp,"./pdf/".$resume);
     

    // database insert SQL code
    $sql = "INSERT INTO `yourhr` (`name`, `phone`, `email`, `resume`) VALUES ('$name', '$phone', '$email', '$resume')";

    // insert in database 
    $res = mysqli_query($conn, $sql);
            }

            if($res)
            {                            
?>                                             
            <div class="alert alert-success alert-dismissible fade show text-center">
                    <a class="close" data-dismiss="alert" aria-label="close">
                        ×
                    </a>
                    <strong>Success!</strong> Data submitted successfully.
                    </div>
                <?php
                }
                else
                {
                ?>
                    <div class=
                "alert alert-danger alert-dismissible fade show text-center">
                    <a class="close" data-dismiss="alert" aria-label="close">
                        ×
                    </a>
                    <strong>Failed!</strong> Try Again!
                    </div>
                <?php
                }
            }
            else
            {
                ?>
                <div class=
                "alert alert-danger alert-dismissible fade show text-center">
                    <a class="close" data-dismiss="alert" aria-label="close">
                        ×
                    </a>
                    <strong>Failed!</strong>
                </div>
                <?php
            }// end if
?>