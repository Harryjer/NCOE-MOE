<?php
                                    require('db.php');
                                    $fullname = $_POST['fullname'];
                                    $nameinitial = $_POST['nameinitial'];
                                    $paddress = $_POST['paddress'];
                                    $cnumber = $_POST['cnumber'];
                                    $nic = $_POST['nic'];
                                    $dob = $_POST['dob'];
                                    $district = $_POST['district'];
                                    $ethnicity = $_POST['ethnicity'];
                                    $religion = $_POST['religion'];
                                    $gender = $_POST['gender'];
                                    $attemptCount = $_POST['attemptCount'];
                             
                                    // var_dump($district);
                                if(isset($_POST["submit"])){
                                if($query = mysqli_query($conn,"INSERT INTO completepersonaldetails (fullname, nameinitial, paddress, cnumber, nic, dob, district, ethnicity, religion, gender ,attemptCount) VALUES('".$fullname."', '".$nameinitial."', '".$paddress."', '".$cnumber."', '".$nic."', '".$dob."', '".$district."', '".$ethnicity."', '".$religion."', '".$gender."', '".$attemptCount."');")){
                                echo "<script>alert('Record Successfully Added!')</script>";
                                header("Location: index2.php");
                                }else{
                                echo "Failure" . mysqli_error($conn);
        }
    }
?>