<?php
                                    require('db.php');
                                    $academicyr = $_POST['academicyr'];
                                    $stream = $_POST['stream'];
                                    $medium = $_POST['medium'];
                                    $attempt = $_POST['attempt'];
                                    $subject1 = $_POST['subject1'];
                                    $grade1 = $_POST['grade1'];
                                    $subject2 = $_POST['subject2'];
                                    $grade2 = $_POST['grade2'];
                                    $subject3 = $_POST['subject3'];
                                    $grade3 = $_POST['grade3'];
                                    
                             
                                    // var_dump($district);
                                if(isset($_POST["submit"])){
                                if($query = mysqli_query($conn,"INSERT INTO a_lresultsdetails (academicyr, stream, medium, attempt, subject1, grade1, subject2, grade2, subject3, grade3) VALUES('".$academicyr."', '".$stream."', '".$medium."', '".$attempt."', '".$subject1."', '".$grade1."', '".$subject2."', '".$grade2."', '".$subject3."', '".$grade3."');")){
                                echo "<script>alert('Record Successfully Added!')</script>";
                                header("Location: index3.php");
                                }else{
                                echo "Failure" . mysqli_error($conn);
        }
    }
?>