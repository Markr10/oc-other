<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>home page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <script type="text/javascript" src="jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="topmenu.js"></script>
    </head>
    <body>
        <div id="background">
            <?php
            $id = 2;
            include 'inc/inc_header.php';
            include 'inc/inc_submenu.php';
            include 'inc/inc_content.php';
            ?>

        </div>
        <div id="back"><a href="#background">Klik hier om terug te gaan naar de top</a></div>
        <div id="loep">
            <h2>Open dag Myconcept</h2><br />
            <p>Deze dag kun je een kijkje nemen bij myconcept en vragen stellen aan enkele begeleiders/studenten</p><br />
        </div>
        <div id="box"></div>
        <div id="erlenmeyer"></div>
        <div id="beeldscherm"></div>
        <!--<div id="footer">hier komt de footer</div>-->
    </body>
</html>
