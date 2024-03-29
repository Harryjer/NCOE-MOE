<?php include "db.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <style>
        body {
            background-image: url("123.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
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
            <br>
            <center>
                <h1>National College of Education</h1>
            </center>
            <nav class="personal_details_form"></nav>
            </br>


            <nav class="personal_details_form">

            </nav>
        </header>

        <section>
            <div id="container_demo">

                <a class="hiddenanchor" id="toregister"></a>
                <div id="wrapper">
                    <div class="card" style="width: 70rem; background-color: rgba(245, 245, 245, 0.4);">

                        <br>
                        <center>
                            <h2>A/L Results Details Submission</h2>
                        </center>
                        </br>

                        <div id="" class="animate">
                            <form clss="form-inline" method="post" action="a_ldetailsubmission.php" autocomplete="on">

                                <p>
                                    <div id="" class="animate form">
                                        <form method="post" action="a_ldetailsubmission.php" autocomplete="on">

                                            <p>
                                                <div class="input-group input-group-sm mb-3 col-6">
                                                    <div class="col-5">
                                                        <label for="" class="academicYr" data-icon="p">Academic Year </label>
                                                    </div>
                                                    <select name="academicYr" class="form-control">
                                                        <option value="pick" disabled selected>Year</option>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * From academicyr");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)) {

                                                            echo "<option value='" . $row['idacademicyr'] . "'>" . $row['academicyr'] . "</option>";
                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </p>

                                            <p>
                                                <div class="input-group input-group-sm mb-3 col-6">
                                                    <div class="col-5">
                                                        <label for="" class="stream" data-icon="p">Stream </label>
                                                    </div>
                                                    <select name="stream" class="form-control">
                                                        <option value="pick" disabled selected>stream</option>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * From streamdetails");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)) {

                                                            echo "<option value='" . $row['idstreamdetails'] . "'>" . $row['streamdetails'] . "</option>";
                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </p>


                                            <p>
                                                <div class="input-group input-group-sm mb-3 col-6">
                                                    <div class="col-5">
                                                        <label for="" class="medium" data-icon="p">Medium </label>
                                                    </div>
                                                    <select name="medium" class="form-control">
                                                        <option value="pick" disabled selected>medium</option>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * From mediumdetails");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)) {

                                                            echo "<option value='" . $row['idmediumdetails'] . "'>" . $row['mediumdetails'] . "</option>";
                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </p>

                                            <p>
                                                <div class="input-group input-group-sm mb-3 col-6">
                                                    <div class="col-5">
                                                        <label for="" class="attempt" data-icon="p">Attempt </label>
                                                    </div>
                                                    <select name="medium" class="form-control">
                                                        <option value="pick" disabled selected>attempt</option>
                                                        <?php
                                                        $sql = mysqli_query($conn, "SELECT * From attemptcount");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)) {

                                                            echo "<option value='" . $row['idattemptcount'] . "'>" . $row['attemptcount'] . "</option>";
                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </p>


                                            <!-- </div> -->


                                            <div class="output">
                                                <div id="biology" class="stream biology">

                                                    <table style="width:100%">
                                                        <tr class="d-flex">
                                                            <th class="col-8">Subject Name</th>
                                                            <th class="col-3">Grade</th>
                                                        </tr>
                                                        <tr class="d-flex">

                                                            <td class="col-8"> </label>
                                                                <select name="biology" class="form-control">
                                                                    <option value="pick" disabled selected>Subject</option>

                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idsubjectdetails'] . "'>" . $row['subjectname'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>

                                                            <td class="col-3"> </label>
                                                                <select name="grade" class="form-control">
                                                                    <option value="pick">grade</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idgradedetails'] . "'>" . $row['gradedetails'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                        </tr>
                                                        </td>
                                                        <tr class="d-flex">
                                                            <td class="col-8"> </label>
                                                                <select name="biology" class="form-control">
                                                                    <option value="pick" disabled selected>Subject</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idsubjectdetails'] . "'>" . $row['subjectname'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>

                                                            <td class="col-3"> </label>
                                                                <select name="grade" class="form-control">
                                                                    <option value="pick">grade</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idgradedetails'] . "'>" . $row['gradedetails'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                        </tr>
                                                        </td>

                                                        <tr class="d-flex">
                                                            <td class="col-8"> </label>
                                                                <select name="biology" class="form-control">
                                                                    <option value="pick" disabled selected>Subject</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idsubjectdetails'] . "'>" . $row['subjectname'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>

                                                            <td class="col-3"> </label>
                                                                <select name="grade" class="form-control">
                                                                    <option value="pick">grade</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                                                    $row = mysqli_num_rows($sql);
                                                                    while ($row = mysqli_fetch_array($sql)) {

                                                                        echo "<option value='" . $row['idgradedetails'] . "'>" . $row['gradedetails'] . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>

                                                            </td>
                                                        </tr>

                                                    </table>

                                                    <div class="col-12" align="right" style="align:right">
                                                        <br>
                                                        <input id="btnSubmit" class="btn btn-primary" type="submit" name="submit" value="Submit"> <a href="index2.php"></a>
                                                        <input class="btn btn-danger" type="reset" value="Reset">

                                                        </br>
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>