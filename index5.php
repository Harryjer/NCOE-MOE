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
                            <h2>Religious Details Submission</h2>
                        </center>
                        </br>


                        <div id="" class="animate form">
                            <form id="religiousDetailsForm" action="index6.php" autocomplete="on">

                                <p>
                                    <div class="input-group input-group-sm mb-3 mb-3 col-6">
                                        <div class="col-5">
                                            <label for="" class="religiondetails_idreligiondetails" data-icon="p">Religion </label>
                                        </div>
                                        <select name="religiondetails_idreligiondetails" id="religiondetails_idreligiondetails" class="form-control">
                                            <option value="pick" disabled selected>Religion</option>
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * From religiondetails WHERE religionstatus=1");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)) {
                                                echo "<option value='" . $row['idreligiondetails'] . "'>" . $row['religionname'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </p>
                            </form>
                        </div>

                    </div>
                    <br>
                    </br>

                    <div class="card" style="width: 70rem; background-color: rgba(245, 245, 245, 0.4);">

                        <div id=budhismform>
                            <br>
                            <center>
                                <h2>Budhism Details Submission</h2>
                            </center>
                            </br>

                            <p>

                                <div id="" class="input-group input-group-sm mb-3 col-6">
                                    <div class="col-5">
                                        <label for="" class="districtdetails_iddistrictdetails" data-icon="p">Exam Name </label>
                                    </div>
                                    <select name="bexamname" class="form-control">
                                        <option value="pick" disabled selected>Exam</option>
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * From budhistexam WHERE status=1");
                                        $row = mysqli_num_rows($sql);
                                        while ($row = mysqli_fetch_array($sql)) {

                                            echo "<option value='" . $row['idbudhistexam'] . "'>" . $row['budhistexam'] . "</option>";
                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </p>

                            <p>
                                <div class="input-group input-group-sm mb-3 col-6">
                                    <div class="col-5">
                                        <label for="" class="academicyr" data-icon="p">Academic Year </label>
                                    </div>
                                    <select name="bacademicyr" class="form-control">
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
                                        <label for="badmissionnumber" class="fname" data-icon="u">Admission Number</label>
                                    </div>
                                    <input class="form-control" id="badmissionnumber" name="badmissionnumber" required="required" type="text" placeholder="xxxxxxxxxxxxx" />
                                </div>
                            </p>

                            <p>
                                <div class="input-group input-group-sm mb-3 col-6">
                                    <div class="col-5">
                                        <label for="bcenternumber" class="fname" data-icon="u">Center Number</label>
                                    </div>
                                    <input class="form-control" id="bcenternumber" name="bcenternumber" required="required" type="text" placeholder="xxxx" />
                                </div>
                            </p>

                            <table style="width:100%">
                                <tr class="d-flex">
                                    <th class="col-8">Subject</th>
                                    <th class="col-3">Grade</th>
                                </tr>

                                <tr class="d-flex">

                                    <td class="col-8"> </label>
                                        <select name="bsubject1" class="form-control">
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
                                        <select name="bgrade1" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject2" class="form-control">
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
                                        <select name="bgrade2" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject3" class="form-control">
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
                                        <select name="bgrade3" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject4" class="form-control">
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
                                        <select name="bgrade4" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject5" class="form-control">
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
                                        <select name="bgrade5" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject6" class="form-control">
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
                                        <select name="bgrade6" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject7" class="form-control">
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
                                        <select name="bgrade7" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject8" class="form-control">
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
                                        <select name="bgrade8" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject9" class="form-control">
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
                                        <select name="bgrade9" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject10" class="form-control">
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
                                        <select name="bgrade10" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                                <tr class="d-flex">
                                    <td class="col-8"> </label>
                                        <select name="bsubject11" class="form-control">
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
                                        <select name="bgrade11" class="form-control">
                                            <option value="pick" disabled selected>grade</option>
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

                            </form>

                            <br>
                            <div class="col-12" align="right" style="align:right">
                                <br>
                                <button class="btn btn-success" id="btnAdd2">Submit Religious Activity</button>
                                <button id="btnNew2" class="btn btn-primary" value="Submit Religious Activities">Add Courses </button>
                                </br>
                            </div>
                        </div>




                        <div id="christianform">

                            <div class="container">


                                <section>
                                    <div id="container_demo">

                                        <a class="hiddenanchor" id="toregister"></a>
                                        <div id="wrapper">
                                            <center>
                                                <br>
                                                <h2>Christian Details Submission</h2>
                                                </br>
                                            </center>
                                            <div id="" class="animate form">
                                                <form id="christianDetailsForm" action="index5.php" autocomplete="on">





                                                    <table style="width:100%">
                                                        <tr class="d-flex">
                                                            <th class="col-5">Course Name</th>
                                                            <th class="col-2">From</th>
                                                            <th class="col-2">To</th>
                                                            <th class="col-2">Grade</th>

                                                        </tr>


                                                        <tr class="d-flex">

                                                            <td class="col-5"> </label>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <select name="christiancoursename" class="form-control">
                                                                        <option value="pick" disabled selected>Course</option>
                                                                        <?php
                                                                        $sql = mysqli_query($conn, "SELECT * From christianexam");
                                                                        $row = mysqli_num_rows($sql);
                                                                        while ($row = mysqli_fetch_array($sql)) {

                                                                            echo "<option value='" . $row['idchristianexam'] . "'>" . $row['christianexam'] . "</option>";
                                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>


                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="fromdate" name="fromdate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="todate" name="todate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <select name="cgrade" class="form-control">
                                                                        <option value="pick" disabled selected>grade</option>
                                                                        <?php
                                                                        $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                                                        $row = mysqli_num_rows($sql);
                                                                        while ($row = mysqli_fetch_array($sql)) {

                                                                            echo "<option value='" . $row['idgradedetails'] . "'>" . $row['gradedetails'] . "</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                    </table>

                                                </form>
                                                <div class="col-12" align="right" style="align:right">
                                                    <br>
                                                    <button class="btn btn-success" id="btnAdd3">Add Course Detail</button>
                                                    <button class="btn btn-primary" id="btnNew3" class="btn success" value="Submit Religious Activities">Add Courses </button>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <div id="hinduform">

                            <div class="container">


                                <section>
                                    <div id="container_demo">

                                        <a class="hiddenanchor" id="toregister"></a>
                                        <div id="wrapper">
                                            <center>
                                                <br>
                                                <h2>Hindu Details Submission</h2>
                                                </br>
                                            </center>


                                            <div id="" class="animate form">
                                                <form id="hinduDetailsForm" action="index5.php" autocomplete="on">

                                                    <table style="width:100%">
                                                        <tr class="d-flex">
                                                            <th class="col-5">Course Name</th>
                                                            <th class="col-2">From</th>
                                                            <th class="col-2">To</th>
                                                            <th class="col-2">Valid Till(date)</th>

                                                        </tr>


                                                        <tr class="d-flex">

                                                            <td class="col-5"> </label>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <select name="hinducoursename" class="form-control">
                                                                        <option value="pick" disabled selected>Course</option>
                                                                        <?php
                                                                        $sql = mysqli_query($conn, "SELECT * From hinduexam");
                                                                        $row = mysqli_num_rows($sql);
                                                                        while ($row = mysqli_fetch_array($sql)) {

                                                                            echo "<option value='" . $row['idhinduexam'] . "'>" . $row['hinduexam'] . "</option>";
                                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>


                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="fromdate" name="fromdate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="todate" name="todate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="validdate" name="validdate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                        </tr>

                                                    </table>

                                                </form>
                                                <div class="col-12" align="right" style="align:right">
                                                    <br>
                                                    <button class="btn btn-success" id="btnAdd4">Add Course Detail</button>
                                                    <button id="btnNew4" class="btn btn-primary" value="Submit Religious Activities">Add Courses </button>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div id="islamform">

                            <div class="container">


                                <section>
                                    <div id="container_demo">

                                        <a class="hiddenanchor" id="toregister"></a>
                                        <div id="wrapper">
                                            <center>
                                                <br>
                                                <h2>Islam Details Submission</h2>
                                                </br>
                                            </center>
                                            <div id="" class="animate form">
                                                <form id="islamDetailsForm" action="index5.php" autocomplete="on">





                                                    <table style="width:100%">
                                                        <tr class="d-flex">
                                                            <th class="col-5">Course Name</th>
                                                            <th class="col-2">From</th>
                                                            <th class="col-2">To</th>
                                                            <th class="col-2">Valid Till(date)</th>

                                                        </tr>


                                                        <tr class="d-flex">

                                                            <td class="col-5"> </label>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <select name="islamcoursename" class="form-control">
                                                                        <option value="pick" disabled selected>Course</option>
                                                                        <?php
                                                                        $sql = mysqli_query($conn, "SELECT * From islamexam");
                                                                        $row = mysqli_num_rows($sql);
                                                                        while ($row = mysqli_fetch_array($sql)) {

                                                                            echo "<option value='" . $row['idislamexam'] . "'>" . $row['islamexam'] . "</option>";
                                                                            // echo "<option value='Colombo'>Colombo</option>" ;
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>


                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="fromdate" name="fromdate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="todate" name="todate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                            <td class="col-2"> </label>

                                                                <div class="input-group input-group-sm mb-3">
                                                                    <label for="dob" class="dob" data-icon="p"></label>
                                                                    <input class="form-control" id="validdate" name="validdate" required="required" type="date" placeholder="xx-xx-xxxx" />
                                                                </div>

                                                            </td>

                                                        </tr>

                                                    </table>

                                                </form>
                                                <div class="col-12" align="right" style="align:right">
                                                    <br>
                                                    <button class="btn btn-success" id="btnAdd5">Add Course Detail</button>
                                                    <button id="btnNew5" class="btn btn-primary" value="Submit Religious Activities">Add Courses </button>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




</body>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="index5.js"></script>





</html>