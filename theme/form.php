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
            <script type="text/javascript">
                $(document).ready(function() {

                    $('.menuitem:eq(4)').css({"background-color": "#00468b", "color": "#ffffff"});

                    $('.menuitem').hover(
                            function()
                            {
                                $(this).css({"background-color": "#00468b", "color": "#ffffff"});
                                $('#submenu').stop().animate({height: 30}, 100);
                                $('#submenu').show;
                            },
                            function()
                            {
                                $(this).css({"background-color": "", "color": "#000000"});
                                $('.menuitem:eq(4)').css({"background-color": "#00468b", "color": "#ffffff"});
                                $('#submenu').hide;
                                $('#submenu').stop().animate({height: 0}, 100);
                            });

                    $('#submenu').hover(
                            function()
                            {
                                $('#submenu').stop().animate({height: 30}, 100);
                                $('#submenu').show;
                            },
                            function()
                            {
                                $('#submenu').hide;
                                $('#submenu').stop().animate({height: 0}, 100);
                            });

                    );
                });
            </script>
            <header id="header">
                <div class="menuspacer">
                    <a href="index.html"><div id="myconcept"></div></a>
                    <a href="index.html"><div class="menuitem">Home</div></a>
                    <a href="onderwijs.html"><div class="menuitem">Onderwijs</div></a>
                    <a href="myconcept.html"><div class="menuitem">MyConcept</div></a>
                    <a href="media.html"><div class="menuitem">Media</div></a>
                    <a href="form.php"><div class="menuitem">Contact</div></a>
                </div>
            </header>
            <div id="submenuholder">
                <div id="submenu">
                    
                </div>
            </div>
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