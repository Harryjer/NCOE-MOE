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
                <h1>A/L Results Details Submission</h1>
				<nav class="personal_details_form">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            

                        <div id="" class="animate form">
                        <form method="post" action="a_ldetailsubmission.php" autocomplete="on">

                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="academicYr" data-icon="p">Academic Year </label>
                                <select name="academicYr" class="form-control">
                                <option value="pick">Year</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT academicYr From a_ldetailsbuiltin");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['academicYr']."'>" .$row['academicYr'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                        
                           <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="stream" data-icon="p">Stream </label>
                                <select name="stream" class="form-control">
                                <option value="pick">stream</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT stream From a_ldetailsbuiltin");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['stream']."'>" .$row['stream'] ."</option>" ;
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
                                <option value="pick">medium</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT medium From a_ldetailsbuiltin");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['medium']."'>" .$row['medium'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>

                                <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="attempt" data-icon="p">Attempt </label>
                                <select name="medium" class="form-control">
                                <option value="pick">medium</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT attempt From a_ldetailsbuiltin");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['attempt']."'>" .$row['attempt'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                            <label class="subjects" for="states">Please fill the table</label>
                            <div class="button dropdown"> 
                            <select id="streamselector">
                                <option value="biology">Biology</option>
                                <option value="physicalscience">Physical Science</option>
                                <option value="commerce">Commerce</option>
                                <option value="arts">Arts</option>
                                <option value="technical">Technical</option>		
                                </select>
                            </div>


                        <div class="output">
                                <div id="biology" class="stream biology"> 

	                        <table style="width:100%">
                            <tr>
                            <th>Subject Name</th>
                            <th>Grade</th>
                            </tr>
                            <tr>
                            
                            <td> data-icon="p">subject </label>
                                <select name="biology" class="form-control">
                                <option value="pick">biology</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT biology From alstreamdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['biology']."'>" .$row['biology'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> data-icon="p">grade </label>
                                <select name="grade" class="form-control">
                                <option value="pick">grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT grade From a_ldetailsbuiltin");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['grade']."'>" .$row['grade'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
    