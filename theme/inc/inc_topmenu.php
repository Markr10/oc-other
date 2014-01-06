<?php
echo '<script type="text/javascript">
                $(document).ready(function() {
                    $(\'.menuitem:eq(0)\').css({"background-color": "#00468b", "color": "#ffffff"});

                    $(\'.menuitem\').hover(
                            function()
                            {
                                $(this).css({"background-color": "#00468b", "color": "#ffffff"});
                                $(\'#submenu\').stop().animate({height: 30}, 100);
                                $(\'#submenu\').show;
                                $(\'#submenuspacer\').show;
                                $(\'#submenuitem\').show;
                            },
                            function()
                            {
                                $(this).css({"background-color": "", "color": "#000000"});
                                $(\'.menuitem:eq(0)\').css({"background-color": "#00468b", "color": "#ffffff"});
                                $(\'#submenu\').hide;
                                $(\'#submenuspacer\').hide;
                                $(\'#submenuitem\').hide;
                                $(\'#submenu\').stop().animate({height: 0}, 100);
                            });

                    $(\'#submenu\').hover(
                            function()
                            {
                                $(\'#submenu\').stop().animate({height: 30}, 100);
                                $(\'#submenu\').show;
                                $(\'#submenuspacer\').show;
                                $(\'#submenuitem\').show;
                            },
                            function()
                            {
                                $(\'#submenu\').hide;
                                $(\'#submenuspacer\').hide;
                                $(\'#submenuitem\').hide;
                                $(\'#submenu\').stop().animate({height: 0}, 100);
                            });

                    $(\'#agenda\').hover(
                            function()
                            {
                                $(this).stop().animate({width: 250}, 500);
                            },
                            function()
                            {
                                $(this).stop().animate({width: 40}, 500);
                            });

                    $(\'#back\').hover(
                            function()
                            {
                                $(this).css({"background-color": "#00468b", "color": "#ffffff"});
                            },
                            function()
                            {
                                $(this).css({"background-color": "", "color": "#000000"});
                            });
                });
            </script>';
?>
