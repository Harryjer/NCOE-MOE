<?php
                                    require('db.php');
                                    $academicyr = $_POST['academicyr'];
                                    $medium = $_POST['medium'];
                                    $attempt = $_POST['attempt'];
                                    $olsubject1 = $_POST['olsubject1'];
                                    $olgrade1 = $_POST['olgrade1'];
                                    $olsubject2 = $_POST['olsubject2'];
                                    $olgrade2 = $_POST['olgrade2'];
                                    $olsubject3 = $_POST['olsubject3'];
                                    $olgrade3 = $_POST['olgrade3'];
                                    $olsubject4 = $_POST['olsubject4'];
                                    $olgrade4 = $_POST['olgrade4'];
                                    $olsubject5 = $_POST['olsubject5'];
                                    $olgrade5 = $_POST['olgrade5'];
                                    $olsubject6 = $_POST['olsubject6'];
                                    $olgrade6 = $_POST['olgrade6'];
                                    $olsubject7 = $_POST['olsubject7'];
                                    $olgrade7 = $_POST['olgrade7'];
                                    $olsubject8 = $_POST['olsubject8'];
                                    $olgrade8 = $_POST['olgrade8'];
                                    $olsubject9 = $_POST['olsubject9'];
                                    $olgrade9 = $_POST['olgrade9'];

                                    
                             
                                    // var_dump($district);
                                if(isset($_POST["submit"])){
                                if($query = mysqli_query($conn,"INSERT INTO o_lresultsdetails (academicyr, medium, attempt, olsubject1, olgrade1, olsubject2, olgrade2, olsubject3, olgrade3, , olsubject4, olgrade4, olsubject5, olgrade5, olsubject6, olgrade6, olsubject7, olgrade7, olsubject8, olgrade8, olsubject9, olgrade9) 
                                VALUES('".$academicyr."', '".$medium."', '".$attempt."', '".$olsubject1."', '".$olgrade1."', '".$olsubject2."', '".$olgrade2."', '".$olsubject3."', '".$olgrade3."', '".$olsubject4."', '".$olgrade4."', '".$olsubject5."', '".$olgrade5."', '".$olsubject6."', '".$olgrade6."', '".$olsubject7."', '".$olgrade7."', '".$olsubject8."', '".$olgrade8."', '".$olsubject9."', '".$olgrade9."');")){
                                echo "<script>alert('Record Successfully Added!')</script>";
                                header("Location: index4.php");
                                }else{
                                echo "Failure" . mysqli_error($conn);
        }
    }
?>