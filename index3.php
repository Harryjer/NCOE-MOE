<?php include "db.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>
        <script src="~/Scripts/jquery-2.1.4.js"></script>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>O/L Results Details Submission</h1>
				<nav class="personal_details_form">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            

                        <div id="" class="animate form">
                        <form method="post" action="o_lresultssubmission.php" autocomplete="on">

                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="academicyr" data-icon="p">Academic Year </label>
                                <select name="academicyr" class="form-control">
                                <option value="pick" disabled selected>Year</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From academicyr");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idacademicyr']."'>" .$row['academicyr'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                        
                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="medium" data-icon="p">Medium </label>
                                <select name="medium" class="form-control">
                                <option value="pick" disabled selected>medium</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From mediumdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idmediumdetails']."'>" .$row['mediumdetails'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="attempt" data-icon="p">Attempt </label>
                                <select name="attempt" class="form-control">
                                <option value="pick" disabled selected>attempt</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From attemptcount");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idattemptcount']."'>" .$row['attemptcount'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                           
                        <div class="output">
                                <div id="biology" class="stream biology"> 

	                        <table style="width:100%">
                            <tr>
                            <th>Subject Name</th>
                            <th>Grade</th>
                            </tr>

                            <tr>
                            
                            <td> </label>
                                <select name="olsubject1" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade1" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject2" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade2" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject3" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade3" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject4" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade4" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject5" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade5" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject6" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade6" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject7" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade7" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject8" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade8" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject9" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade9" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        </table>    
                        <br>
                                <input id="btnSubmit" class="btn success" type="submit" name="submit" value="Submit"> <a href="index4.php"></a>
                    
                        </br>   

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
                                <script src="contact.js"></script>
                               

                            </body>
                          
                            </html>