<!--
Author  : Leroy Rocks
Date    : 16-12-2013
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <script type="text/javascript" src="jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="topmenu.js"></script>
    </head>
    <body>
        <div id="background">
            <?php
            if (isset($_POST['submit'])) {
                $to = "leroyrocks@live.nl";
                $subject = $_POST["subject"];
                $message = $_POST["message"];
                $from = $_POST["from"];
                $headers = "From:" . $from;
                mail($to, $subject, $message, $headers);
            }
            ?> 
            
            <?php
            $id = 4;
            include 'inc/inc_header.php';
            include 'inc/inc_submenu.php';
            include 'inc/inc_agenda.php';
            ?>
            
            <div id="centerBlok">
                <form method = "POST" action = "#">
                    <p> Onderwerp </p>
                    <input type = "text" name = "subject" size = "19" > 
                    <br><br>
                    <p> Bericht </p>
                    <textarea rows = "9" name = "message" cols = "30"> </textarea>
                    <br><br>
                    <p> Afzender (mail adres) </p>
                    <input type = "text" name = "from" size = "19" width = "500px"> <br />
                    <br><br>
                    <input type = "submit" value = "Submit" name = "submit">
                </form>
            </div>
        </div>

    </body>
</html>