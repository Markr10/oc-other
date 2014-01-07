                $(document).ready(function() {
                    $('.menuitem.current_page_item > a').css({"backgroundColor": "#00468b", "color": "#ffffff"});
                    
                    $('.menuitem > a').hover(
                            function()
                            {
                                $(this).css({"backgroundColor": "#00468b", "color": "#ffffff"});
                                $('#submenu').stop().animate({height: 30}, 100);
                                $('#submenuspacer').stop().animate({height: 30}, 100);
                                $('.submenuitem').stop().animate({height: 30}, 100);
                                $('#submenu').show;
                                $('#submenuspacer').show;
                                $('.submenuitem').show;
                            },
                            function()
                            {
                                $(this).css({"backgroundColor": "", "color": "#000000"});
                                $('.menuitem.current_page_item > a').css({"backgroundColor": "#00468b", "color": "#ffffff"});
                                $('#submenu').hide;
                                $('#submenuspacer').hide;
                                $('.submenuitem').hide;
                                $('#submenu').stop().animate({height: 0}, 100);
                                $('#submenuspacer').stop().animate({height: 0}, 100);
                                $('.submenuitem').stop().animate({height: 0}, 100);
                            });

                    $('#submenu').hover(
                            function()
                            {
                                $('#submenu').stop().animate({height: 30}, 100);
                                $('#submenu').show;
                                $('#submenuspacer').show;
                                $('#submenuitem').show;
                            },
                            function()
                            {
                                $('#submenu').hide;
                                $('#submenuspacer').hide;
                                $('#submenuitem').hide;
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
                                $(this).css({"backgroundColor": "#00468b", "color": "#ffffff"});
                            },
                            function()
                            {
                                $(this).css({"backgroundColor": "", "color": "#000000"});
                            });
                });