/* Depends on jquery, jquery-linearalgebra v1.0, and linearalgebra v1.3 */
/* global jQuery, Point, setInterval */

(function ($) {
    var $f1, $f2, $f3, $f4, $fspot, $flash, shaking = 0, lastx = 0, lasty = 0;
    var currlevel = 0;
    $(function() {
        $f1 = $("#f1"); $f2 = $("#f2"); $f3 = $("#f3"); $f4 = $("#f4"); $fspot = $("#fspot"); $flash = $("#flashlight");
        positionLight(-8000,-8000);
        $("#flashlight h2").center();
        
        $("body").mousemove(function(e){
            positionLight(e.pageX, e.pageY);
            if(lastx !== 0 && lasty !== 0) {
                shaking += Math.abs(lastx-e.pageX) + Math.abs(lasty-e.pageY);
                setGlowy();
            }
            lastx = e.pageX;
            lasty = e.pageY;
        });
        setInterval(function() {
            shaking -= 500;
            setGlowy();
        }, 300);
        setInterval(function() {
        }, 5000);
    });
    
    function setGlowy() {
        $("#flashlight div").removeClass();
        $("#flashlight h2").html(shaking);
        if(shaking < 0) shaking = 1;
        level = 'dead';
        if(shaking > 1000) level = 'dying';
        if(shaking > 5000) level = 'dim';
        if(shaking > 10000) level = 'bright';
        $("#flashlight div").addClass(level);
    }
    
    function positionLight(x,y) {
        var fpt = new Point($flash.offset());
        pt = new Point(x,y);
        
        $fspot.css({top: pt.y - $fspot.height()/2, left: pt.x - $fspot.width()/2});
        var fbox = $fspot.box();
        var wbox = $flash.box();
        $f1.box(Point.ORIGIN, fbox.topright);
        $f2.box(fbox.right, wbox.top, wbox.right, fbox.bottom);
        $f3.box(fbox.left, fbox.bottom, wbox.right, wbox.bottom);
        $f4.box(wbox.left, fbox.top, fbox.left, wbox.bottom);
    }
}(jQuery));