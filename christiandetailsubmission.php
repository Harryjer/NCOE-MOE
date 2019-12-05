<?php
session_start();
                                    require('db.php');
                                    $christiancoursename = $_POST['christiancoursename'];
                                    $fromdate = $_POST['fromdate'];
                                    $todate = $_POST['todate'];
                                    $cgrade = $_POST['cgrade'];
                                    
                                    
                             
                                    // var_dump($district);
                                //if(isset($_POST["submit"])){
                                //if(
                                $query = mysqli_query($conn,"INSERT INTO christianexamresults (christiancoursename, fromdate, todate, cgrade, userid) 
                                VALUES('".$christiancoursename."', '".$fromdate."', '".$todate."', '".$cgrade."', '".$_SESSION["userid"]."');");
                                // //echo "<script>alert('Record Successfully Added!')</script>";
                                //header("Location: index3.php");
                                //}else{
                                echo json_encode($cgrade);
        
    
?>