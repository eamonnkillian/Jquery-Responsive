/*
 Created originally on : 11-06-2014
 Modifications on : 14-11-2014
 
 Company     : SaaSify Ltd.
 Author      : Eamonn Killian
 Web         : www.eamonnkillian.com
 Contact     : eamonnkillian@gmail.com
 
 This file contains the specific JQuery to provide the dynamicism & functionality
 of the index page.
 
 */


$(document).ready(function () {
    function resizeMe() {
        var browserHeight = $(window).height();
        var browserWidth = $(window).width();
        var base_full_window = {
            name: "base_full_window",
            height: function () {
                return browserHeight;
            },
            minheight: function () {
                return browserHeight;
            },
            maxheight: function () {
                return browserHeight;
            },
            width: function () {
                return browserWidth;
            },
            minwidth: function () {
                return browserWidth;
            },
            maxwidth: function () {
                return browserWidth;
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "fixed",
            border: 0,
            margin: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#ecf0f1",
            color: "#000",
            zindex: 0
        };
        var base_full_menu = {
            name: "base_full_menu",
            height: function () {
                if (browserWidth < 500) {
                    var height = browserHeight * 0.1;
                    (height > 80) ? height = 80 : height;
                    return height;
                } else if (browserWidth < 768) {
                    var height = browserHeight * 0.1;
                    (height > 80) ? height = 80 : height;
                    return height;
                } else {
                    return browserHeight;
                }
            },
            minheight: function () {
                return base_full_menu.height();
            },
            maxheight: function () {
                return base_full_menu.height();
            },
            width: function () {
                if (browserWidth < 500) {
                    return browserWidth;
                } else if (browserWidth < 768) {
                    return browserWidth;
                } else {
                    var width = browserWidth * 0.1;
                    (width > 100) ? width = 100 : width;
                    return width;
                }
            },
            minwidth: function () {
                return base_full_menu.width();
            },
            maxwidth: function () {
                return base_full_menu.width();
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            float: "left",
            border: 0,
            margin: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#000",
            color: "#000",
            zindex: 1000
        };
        var base_full_viewer = {
            name: "base_full_viewer",
            height: function () {
                if (browserWidth < 500) {
                    var height = browserHeight - base_full_menu.height();
                    return height;
                } else if (browserWidth < 768) {
                    var height = browserHeight - base_full_menu.height();
                    return height;
                } else {
                    return browserHeight;
                }
            },
            minheight: function () {
                return base_full_viewer.height();
            },
            maxheight: function () {
                return base_full_viewer.height();
            },
            width: function () {
                if (browserWidth < 500) {
                    return browserWidth;
                } else if (browserWidth < 768) {
                    return browserWidth;
                } else {
                    return browserWidth - base_full_menu.width();
                }
            },
            minwidth: function () {
                return browserWidth;
            },
            maxwidth: function () {
                return browserWidth;
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            border: 0,
            margin: 0,
            padding: 0,
            overflow: "auto",
            backgroundcolor: "#ecf0f1",
            color: "#fff",
            zindex: 1
        };

        var base_full_menu_span = {
            name: "base_full_menu_span",
            height: function () {
                if (browserWidth < 500) {
                    var height = $('.' + this.name).parent().height();
                    return height;
                } else if (browserWidth < 768) {
                    var height = $('.' + this.name).parent().height();
                    return height;
                } else {
                    var height = $('.' + this.name).parent().height() / $('.base_full_menu_span').length;
                    return height;
                }
            },
            minheight: function () {
                return base_full_menu_span.height();
            },
            maxheight: function () {
                return base_full_menu_span.height();
            },
            width: function () {
                if (browserWidth < 500) {
                    var width = $('.' + this.name).parent().width() / $('.base_full_menu_span').length;
                    return width;
                } else if (browserWidth < 768) {
                    var width = $('.' + this.name).parent().width() / $('.base_full_menu_span').length;
                    return width;
                } else {
                    var width = $('.' + this.name).parent().width();
                    return width;
                }
            },
            minwidth: function () {
                return base_full_menu_span.width();
            },
            maxwidth: function () {
                return base_full_menu_span.width();
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            float: "left",
            border: 0,
            margin: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#000",
            color: "#fff",
            zindex: 1
        };

        var base_full_menu_span_image = {
            name: "base_full_menu_span_image",
            height: function () {
                if (browserWidth < 500) {
                    var number = $('.' + this.name).parent().height() * 0.9;
                    return number;
                } else if (browserWidth < 768) {
                    var number = $('.' + this.name).parent().height() * 0.8;
                    return number;
                } else {
                    var number = $('.' + this.name).parent().height() * 0.7;
                    return number;
                }
            },
            minheight: function () {
                return base_full_menu_span_image.height();
            },
            maxheight: function () {
                return base_full_menu_span_image.height();
            },
            width: function () {
                if (browserWidth < 500) {
                    var width = $('.' + this.name).parent().width() * 0.9;
                    return width;
                } else if (browserWidth < 768) {
                    var width = $('.' + this.name).parent().width() * 0.8;
                    return width;
                } else {
                    var width = $('.' + this.name).parent().width() * 0.7;
                    return width;
                }
            },
            minwidth: function () {
                return base_full_menu_span_image.width();
            },
            maxwidth: function () {
                return base_full_menu_span_image.width();
            },
            margintop: function () {
                if (browserWidth < 500) {
                    var margintop = $('.' + this.name).parent().height() * 0.2;
                    return margintop;
                } else if (browserWidth < 768) {
                    var margintop = $('.' + this.name).parent().height() * 0.2;
                    return margintop;
                } else {
                    var margintop = $('.' + this.name).parent().height() * 0.15;
                    return margintop;
                }
            },
            marginleft: function () {
                if (browserWidth < 500) {
                    var marginleft = $('.' + this.name).parent().width() * 0.05;
                    return marginleft;
                } else if (browserWidth < 768) {
                    var marginleft = $('.' + this.name).parent().width() * 0.10;
                    return marginleft;
                } else {
                    var marginleft = $('.' + this.name).parent().width() * 0.15;
                    return marginleft;
                }
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            float: "left",
            border: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#000",
            color: "#fff",
            zindex: 1
        };

        var base_full_viewer_frame = {
            name: "base_full_viewer_frame",
            height: function () {
                var height = $('.' + this.name).parent().height();
                return height;
            },
            minheight: function () {
                var height;
                (browserHeight < 750) ? height = 530 : height = base_full_viewer_frame.height();
                return height;
            },
            maxheight: function () {
                var height;
                (browserHeight < 530) ? height = 530 : height = base_full_viewer_frame.height();
                return height;
            },
            width: function () {
                var width = $('.' + this.name).parent().width();
                return width;
            },
            minwidth: function () {
                return base_full_viewer_frame.width();
            },
            maxwidth: function () {
                return base_full_viewer_frame.width();
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            float: "left",
            border: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#ecf0f1",
            color: "#000",
            zindex: 10
        };

        var base_full_viewer_frame_inner = {
            name: "base_full_viewer_frame_inner",
            height: function () {
                var height;
                if (browserHeight < 530) {
                    height = 515;
                } else if (browserHeight < 750) {
                    height = $('.' + this.name).parent().height() * 0.8;
                } else {
                    height = $('.' + this.name).parent().height() * 0.6;
                }
                return height;
            },
            minheight: function () {
                var height;
                if (browserHeight < 530) {
                    height = 515;
                } else if (browserHeight < 750) {
                    //height = $('.' + this.name).parent().height() * 0.8;
                    height = 515;
                } else {
                    height = $('.' + this.name).parent().height() * 0.6;
                }
                return height;
            },
            maxheight: function () {
                var height;
                if (browserHeight < 530) {
                    height = 500;
                } else if (browserHeight < 750) {
                    height = $('.' + this.name).parent().height() * 0.8;
                } else {
                    height = $('.' + this.name).parent().height() * 0.7;
                }
                return height;
            },
            width: function () {
                var width = $('.' + this.name).parent().width() * 0.8;
                return width;
            },
            minwidth: function () {
                return base_full_viewer_frame.width() * 0.8;
            },
            maxwidth: function () {
                return base_full_viewer_frame.width() * 0.8;
            },
            margintop: function () {
                return 0;
            },
            marginleft: function () {
                return 0;
            },
            top: function () {
                return 0;
            },
            left: function () {
                return 0;
            },
            position: "relative",
            float: "left",
            border: 0,
            padding: 0,
            overflow: "hidden",
            backgroundcolor: "#ecf0f1",
            color: "#000",
            zindex: 10
        };


        $('.base_full_viewer_frame_top').css('width', base_full_viewer.width());
        $('.base_full_viewer_frame_continue').css('width', base_full_viewer.width());

        var BASEELEMENTS = [
            base_full_window,
            base_full_menu,
            base_full_viewer,
            base_full_menu_span,
            base_full_menu_span_image,
            base_full_viewer_frame,
            base_full_viewer_frame_inner
        ];

        setElements(BASEELEMENTS);
        centerElement("webtitle");
        centerElement("continuearrow");
        centerElement("base_full_viewer_frame_inner");
        centerElement("maincontent");
        centerElement("cloud-0");
        centerElement("cloud-1");
        centerElement("cloud-2");
        centerElement("cloud-3");
        centerElement("cloud-4");
        centerElement("cloud-5");
        centerElement("cloud-6");
        centerElement("cloud-7");
        centerElement("cloud-8");
        centerElement("cloud-9");
        centerElement("applications-0");
        centerElement("mmog-0");
        centerElement("mmog-1");
        centerElement("mmog-2");
        centerElement("mmog-3");
        centerElement("mmog-4");
        centerElement("mmog-5");
        centerElement("mmog-6");
        centerElement("mmog-7");
        centerElement("mmog-8");
        centerElement("bigdata-0");
        centerElement("bigdata-1");
        centerElement("bigdata-2");
        centerElement("bigdata-3");
        centerElement("bigdata-4");
        centerElement("bigdata-5");
        centerElement("gamification-0");
        centerElement("gamification-1");
        centerElement("gamification-2");
        centerElement("gamification-3");
        centerElement("gamification-4");
        centerElement("gamification-5");
        centerElement("gamification-6");
        centerElement("download-0");
        centerElement("download-1");
        centerElement("download-2");

        if (browserWidth < 500) {
            $('.base_full_viewer_frame_inner').css('font-size', '0.7em');
            $('.base_full_menu').hide();
            $('.floating_menu').css('display', 'block');
            $('.base_full_viewer_frame_continue').css('display', 'none');
        } else if (browserWidth < 900) {
            $('.base_full_viewer_frame_inner').css('font-size', '0.8em');
            $('.base_full_menu').css('display', 'block');
            $('.floating_menu').hide();
        } else {
            $('.base_full_viewer_frame_inner').css('font-size', '0.9em');
        }

    }
    
    function resetAllSliders() {
        var areas = ["cloud","mmog","gamification","applications","bigdata","download"];
        for (var i=0;i<areas.length;i++){
            var name = areas[i];
            for (var j=0;j<10;j++){
                (j === 0) ? $('#'+name+'-'+j).css('display','block') : $('#'+name+'-'+j).hide();
            }
            $('#'+name+'right').attr('reveal',name+'-1');
            $('#'+name+'right').attr('thiscontainer',name+'-0');
            $('#'+name+'left').attr('reveal',name+'-1');
            $('#'+name+'left').attr('thiscontainer',name+'-0');
            $('.rightsidearrow').css('display','block');
            $('.leftsidearrow').css('display','none');
        }
    }

    function setElements(array) {
        for (var i = 0; i < array.length; i++) {
            var name = array[i];
            $('.' + name.name).css('height', name.height());
            $('.' + name.name).css('min-height', name.minheight());
            $('.' + name.name).css('max-height', name.maxheight());
            $('.' + name.name).css('width', name.width());
            $('.' + name.name).css('max-width', name.minwidth());
            $('.' + name.name).css('max-width', name.maxwidth());
            $('.' + name.name).css('position', name.position);
            $('.' + name.name).css('top', name.top());
            $('.' + name.name).css('left', name.left());
            $('.' + name.name).css('float', name.float);
            $('.' + name.name).css('border', name.border);
            $('.' + name.name).css('margin', name.margintop());
            $('.' + name.name).css('margin', name.marginleft());
            $('.' + name.name).css('overflow', name.overflow);
            $('.' + name.name).css('background-color', name.backgroundcolor);
            $('.' + name.name).css('color', name.color);
            $('.' + name.name).css('z-index', name.zindex);
        }
    }

    function centerElement(element) {
        var name = $('#' + element).attr('id');
        var parent = $('#' + name).parent().attr('class');
        var top = (getClassHeight(parent) - getIDHeight(name)) / 2;
        var left = (getClassWidth(parent) - getIDWidth(name)) / 2;
        $('#' + name).css('position', 'relative');
        $('#' + name).css('top', top);
        $('#' + name).css('left', left);
    }
    
    function centerImage(imgname) {
        var name = $('#' + imgname).attr('id');
        var parent = $('#' + name).parent().attr('class');
        
    }

    function getIDHeight(name) {
        var height = $('#' + name).height();
        return height;
    }

    function getClassHeight(name) {
        var height = $('.' + name).height();
        return height;
    }

    function getIDWidth(name) {
        var width = $('#' + name).width();
        return width;
    }

    function getClassWidth(name) {
        var width = $('.' + name).width();
        return width;
    }

    function scrollTo(name) {
        var scrollMultipler = name.split('-');
        var height = $('.base_full_viewer_frame').height();
        var scrollHeight = scrollMultipler[1] * height;
        $('.base_full_viewer').animate({scrollTop: scrollHeight}, 'slow');
    }

    resizeMe();
    $('#loaderContainer').hide();

    $(window).resize(function () {
        resizeMe();
    });
    
    $('.base_full_menu_span_image').click(function () {
        var destination = $(this).attr("frameref");
        resetAllSliders();
        scrollTo(destination);
    });

    $('.base_full_menu_span_image').hover(function () {
        if ($(window).width() > 768) {
            var position = $(this).offset();
            var imgname = $(this).attr('src').split('.');
            $('.tooltip').css('display', 'block');
            $('.tooltip').css('top', position.top - 5);
            $('.tooltip').css('left', position.left + 100);
            $('.tooltip').html($(this).attr('name'));
            $(this).attr('src', imgname[0] + 'red.png');
        } else {
            var imgname = $(this).attr('src').split('.');
            $(this).attr('src', imgname[0] + 'red.png');
        }
    });

    $('.base_full_menu_span_image').mouseleave(function () {
        var imgname = $(this).attr('src').split('red');
        $('.tooltip').hide();
        $(this).attr('src', imgname[0] + '.png');
    });

    $('#continuearrow').click(function () {
        var scrolldown = getClassHeight($('.base_full_viewer').attr('class'));
        $('.base_full_viewer').animate({scrollTop: scrolldown}, 'slow');
    });

    $(document).on('click', '.rightsidearrow', function () {
        var parent = $(this).attr('thiscontainer');
        var name = $(this).attr('reveal');
        var width = $(window).width() * -1;
        $('#' + parent).animate({"left": width}, "slow", function () {
            $('#' + parent).hide();
            $('#' + parent).animate({"left": '10%'});
            $('#' + name).css('display', 'block');
            $('.leftsidearrow').css('display', 'block');
        });
        var number = name.split('-');
        $('#'+number[0]+'right').attr('reveal', number[0] + '-' + (parseInt(number[1]) + 1));
        $('#'+number[0]+'right').attr('thiscontainer', number[0] + '-' + number[1]);
        $('#'+number[0]+'left').attr('reveal', number[0] + '-' + (parseInt(number[1]) - 1));
        $('#'+number[0]+'left').attr('thiscontainer', number[0] + '-' + number[1]);
        if (name === 'cloud-9' || name === 'download-2' || name === 'mmog-8' || name === 'gamification-6' || name === 'bigdata-5') {
            $('.rightsidearrow').css('display', 'none');
        }
    });

    $(document).on('click', '.leftsidearrow', function () {
        var parent = $(this).attr('thiscontainer');
        var name = $(this).attr('reveal');
        var width = $(window).width();
        $('#' + parent).animate({"left": width}, "slow", function () {
            $('#' + parent).hide();
            $('#' + parent).animate({"left": '10%'});
            $('#' + name).css('display', 'block');
            $('#' + name).animate({"left": '10%'}, "slow");
            $('.rightsidearrow').css('display', 'block');
        });
        var number = name.split('-');
        $('#'+number[0]+'right').attr('reveal', number[0] + '-' + (parseInt(number[1]) + 1));
        $('#'+number[0]+'right').attr('thiscontainer', number[0] + '-' + number[1]);
        $('#'+number[0]+'left').attr('reveal', number[0] + '-' + (parseInt(number[1]) - 1));
        $('#'+number[0]+'left').attr('thiscontainer', number[0] + '-' + number[1]);
        if (name === 'cloud-0' || name === 'download-0' || name === 'mmog-0' || name === 'gamification-0' || name === 'bigdata-0') {
            $('.leftsidearrow').css('display', 'none');
        }
    });

    $(document).on('mouseenter', '.floating_menu_span', function () {
        $('.floating_menu_span_image').attr('src', 'img/public/menured.png');
        $('.slideout_menu').animate({left: 0}, 'slow');
    });
    
    $(document).on('mouseleave', '.slideout_menu', function () {
        $('.slideout_menu').animate({left: "-50%"}, 'slow');
    });

    $(document).on('mouseleave', '.floating_menu_span', function () {
        $('.floating_menu_span_image').attr('src', 'img/public/menu.png');
    });

    $(document).on('click', '.slideout_menu li', function () {
        $('.slideout_menu').animate({left: "-50%"}, 'slow');
        var destination = $(this).attr("frameref");
        resetAllSliders();
        scrollTo(destination);
    });
    
    $(document).on('click','.gotoDownloads',function(){
        scrollTo("frame-7");
    });

});
