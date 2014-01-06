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
    </head>
    <body>
        <div id="background">
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.menuitem:eq(4)').css({"background-color": "#00468b", "color": "#ffffff"});

                    $('.menuitem').hover(
                            function()
                            {
                                $(this).css({"background-color": "#00468b", "color": "#ffffff"});
                            },
                            function()
                            {
                                $(this).css({"background-color": "", "color": "#000000"});
                                $('.menuitem:eq(0)').css({"background-color": "#00468b", "color": "#ffffff"});
                            });
                            
                    $('.menuitem').click(  
                            function()
                            {
                                $('#submenu').stop().animate({width: 50}, 100);
                                $('#submenu').show;
                            },
                            function()
                            {
                                $('#submenu').hide;
                                $('#submenu').stop().animate({height: 0}, 100);
                            });

                    $('#agenda').hover(
                            function()
                            {
                                $(this).stop().animate({width: 250}, 500);
                            },
                            function()
                            {
                                $(this).stop().animate({width: 40}, 500);
                            });

                    $('#back').hover(
                            function()
                            {
                                $(this).css({"background-color": "#00468b", "color": "#ffffff"});
                            },
                            function()
                            {
                                $(this).css({"background-color": "", "color": "#000000"});
                            });
                });
            </script>
            <?php
            include 'inc/inc_submenu.php';
            include 'inc/inc_content.php';
            include 'inc/inc_agenda.php';
            ?>
        </div>
        <div id="back"><a href="#background">Klik hier om terug te gaan naar de top</a></div>
        <div id="loep">
            <h2>25 December Jolo avond</h2><br />
            <p>Iedereen gaat los op deze avond en sommige zullen het dan ook niet overleven, 
                wees er snel bij voor kaarten!</p><br />
        </div>
        <div id="box"></div>
        <div id="erlenmeyer"></div>
        <div id="beeldscherm"></div>
        <!--<div id="footer">hier komt de footer</div>-->
    </body>
</html>
