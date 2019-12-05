<?php
session_start();
                                    require('db.php');
                                    $bexamname = $_POST['bexamname'];
                                    $bacademicyr = $_POST['bacademicyr'];
                                    $badmissionnumber = $_POST['badmissionnumber'];
                                    $bcenternumber = $_POST['bcenternumber'];
                                    $bsubject1 = $_POST['bsubject1'];
                                    $bgrade1 = $_POST['bgrade1'];
                                    $bsubject2 = $_POST['bsubject2'];
                                    $bgrade2 = $_POST['bgrade2'];
                                    $bsubject3 = $_POST['bsubject3'];
                                    $bgrade3 = $_POST['bgrade3'];
                                    $bsubject4 = $_POST['bsubject4'];
                                    $bgrade4 = $_POST['bgrade4'];
                                    $bsubject5 = $_POST['bsubject5'];
                                    $bgrade5 = $_POST['bgrade5'];
                                    $bsubject6 = $_POST['bsubject6'];
                                    $bgrade6 = $_POST['bgrade6'];
                                    $bsubject7 = $_POST['bsubject7'];
                                    $bgrade7 = $_POST['bgrade7'];
                                    $bsubject8 = $_POST['bsubject8'];
                                    $bgrade8 = $_POST['bgrade8'];
                                    $bsubject9 = $_POST['bsubject9'];
                                    $bgrade9 = $_POST['bgrade9'];
                                    $bsubject10 = $_POST['bsubject10'];
                                    $bgrade10 = $_POST['bgrade10'];
                                    $bsubject11 = $_POST['bsubject11'];
                                    $bgrade11 = $_POST['bgrade11'];

                                    
                             
                                //     // var_dump($district);
                                // //if(isset($_POST["submit"])){
                                // //if(
                                $query = mysqli_query($conn,"INSERT INTO budhistexamresults (bexamname, bacademicyr, badmissionnumber, bcenternumber, bsubject1, bgrade1, bsubject2, bgrade2, bsubject3, bgrade3, bsubject4, bgrade4, bsubject5, bgrade5, bsubject6, bgrade6, bsubject7, bgrade7, bsubject8, bgrade8, bsubject9, bgrade9, bsubject10, bgrade10, bsubject11, bgrade11, userid) 
                                VALUES('".$bexamname."', '".$bacademicyr."', '".$badmissionnumber."', '".$bcenternumber."', '".$bsubject1."', '".$bgrade1."', '".$bsubject2."', '".$bgrade2."', '".$bsubject3."', '".$bgrade3."', '".$bsubject4."', '".$bgrade4."', '".$bsubject5."', '".$bgrade5."', '".$bsubject6."', '".$bgrade6."', '".$bsubject7."', '".$bgrade7."', '".$bsubject8."', '".$bgrade8."', '".$bsubject9."', '".$bgrade9."', '".$bsubject10."', '".$bgrade10."', '".$bsubject11."', '".$bgrade11."', '".$_SESSION["userid"]."');");
                                //echo "<script>alert('Record Successfully Added!')</script>";
                                // //header("Location: index5.php");
                                // //}else{
                                echo json_encode($query);


                                
        
    
?> 