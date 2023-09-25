<html>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Transparent Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url(https://image.freepik.com/free-photo/black-white-bamboo-surface-merge-background_7182-2053.jpg); */
            background-image: radial-gradient(circle at 32% 12%, rgba(229, 229, 229, 0.05) 0%, rgba(229, 229, 229, 0.05) 50%, rgba(101, 101, 101, 0.05) 50%, rgba(101, 101, 101, 0.05) 100%), radial-gradient(circle at 49% 59%, rgba(113, 113, 113, 0.05) 0%, rgba(113, 113, 113, 0.05) 50%, rgba(240, 240, 240, 0.05) 50%, rgba(240, 240, 240, 0.05) 100%), radial-gradient(circle at 16% 86%, rgba(118, 118, 118, 0.05) 0%, rgba(118, 118, 118, 0.05) 50%, rgba(207, 207, 207, 0.05) 50%, rgba(207, 207, 207, 0.05) 100%), linear-gradient(252deg, rgb(34, 85, 150), rgb(117, 220, 202));
            background-size: cover;
            color: white;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

            background-color: white;
            color: black;
            text-align: center;
        }

        .logo {
            width: 150px;
            height: 55px;
        }

        .navbar {
            height: 60px;
            width: 100%;
            background: white;
        }

        .navbar ul li a:hover {
            border-style: solid;
            border-radius: 2px;
        }

        table,
        tr,
        td {

            border: 2px double black;

            border-collapse: collapse;

        }

        th,
        td {
            padding: 5px;
        }
    </style>

<body style="font-size: 20px;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html" style="border-style: none;">
                <img class="logo"
                    src="data:image/png;base64,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">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://en.wikipedia.org/wiki/B.M.S._College_of_Engineering"
                            target="_blank">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.shiksha.com/college/bms-college-of-engineering-basavanagudi-bangalore-397/admission"
                            target="_blank">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.bmsce.ac.in/" target="_blank">BMSCE Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.google.com/maps/place/BMS+College+of+Engineering/@12.9410174,77.5633371,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae158b11e34d2f:0x5f4adbdbab8bd80f!8m2!3d12.9410122!4d77.5655258"
                            target="_blank">Contact Us</a>
                    </li>
                    <a href="index.html"><button type="button" style="margin-left: 680px;"
                            class="btn btn-dark">Logout</button></a>
                </ul>
            </div>
        </div>
    </nav>
   
    <body>
        <center>
        <table>
        <div class="center" style="margin-top: 100px">
            <h1><strong>SEMESTER-7</strong></h1>
            <form method="POST" action="a1.php">
    <body><table>
        <tr><th>COURSE CODE</th>
        <th>COURSE NAME</th>
    <TH>CREDITS</TH></tr>
    <?php
    $conn = mysqli_connect("localhost","root","","COURSE_REGISTRATION");
    $sql = "SELECT * FROM COURSE where SEM=7 AND (COURSE_CODE='21CS7HSCFI' OR COURSE_CODE='21IC7BSBIE' OR COURSE_CODE='21CS7PCIMC' OR COURSE_CODE='21CS7PWPP1' OR COURSE_CODE='21CS7SRSEM' OR COURSE_CODE='21CS7NCNC7')";
    $sql1 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='21CS7PEBLC' OR COURSE_CODE='21CS7PENSD' OR COURSE_CODE='21CS7PEMMC')";
    $sql2 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='21CS7PEBLC' OR COURSE_CODE='21CS7PENSD' OR COURSE_CODE='21CS7PEMMC')";
    $sql3 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='21CS7PEDIS' OR COURSE_CODE='21CS7PESDP' OR COURSE_CODE='21CS7PECCT')";
    $sql4 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='21CS7PEDIS' OR COURSE_CODE='21CS7PESDP' OR COURSE_CODE='21CS7PECCT')";
    $sql5 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='21CS7OEDAS' OR COURSE_CODE='21CS7OEPYP')";
    $sql6 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='21CS7OEDAS' OR COURSE_CODE='21CS7OEPYP')";
    $result = $conn-> query($sql);
    $result1 = $conn-> query($sql1);
    $result2 = $conn-> query($sql2);
    $result3 = $conn-> query($sql3);
    $result4 = $conn-> query($sql4);
    $result5 = $conn-> query($sql5);
    $result6 = $conn-> query($sql6);
    if($result-> num_rows >0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["COURSE_CODE"]."</td><td>". $row["COURSE_NAME"]."</td><td>". $row["CREDITS"]."</td></tr>";
        }
        }
        else{
            echo "No results";
        }?>
        <tr><td><select name="electives1cc"> <?php
            while($row = $result1-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives1cn"> <?php
            while($row = $result2-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <tr><td><select name="electives2cc"> <?php
            while($row = $result3-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives2cn"> <?php
            while($row = $result4-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <tr><td><select name="electives3cc"> <?php
            while($row = $result5-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives3cn"> <?php
            while($row = $result6-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <?php
        $conn->close();?>
        </table></body>
    <div class="form-check form-switch" style="margin-left: 425px;  margin-top: 7px;">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: -475px; ">I accept that
                    these are the courses I am registering for.</label>
            </div>
            <a href="a2.php">
                <button class="btn btn-primary"
                    style="margin-top: 7px; margin-bottom: 9px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"
                    input type="submit" id="accept" name="sb" value="SUBMIT"><strong>SUBMIT</strong></button></a>

         <h5><strong>NOTE:</strong> In case of any problems/doubts/queries,contact your proctor immediately.</h5>
        </center>
    </div>


    <div class="footer">
        <p>©️ 2021 Copyrights @ BMSCE</p>
    </div>
            </center>
    
</html>