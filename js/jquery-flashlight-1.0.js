/* Depends on jquery, jquery-linearalgebra v1.0, Color v1.1, and linearalgebra v1.3 */
/* global jQuery, Point, setInterval, Color */

(function ($) {
    var $f1, $f2, $f3, $f4, $fspot, $flash, $fdiv, $fh2, shaking = 0, lastx = 0, lasty = 0;
    var fstop1 = new Color("hsla(0, 0%, 100%, 0)");
    var fstop2 = new Color("hsla(48, 15%, 46%, 0.5)");
    var fstop3 = new Color("hsla(44, 18%, 30%, 0.65)");
    var fstop4 = new Color("hsla(48, 17%, 35%, 0.6)");
    var fstop5 = new Color("hsla(51, 25%, 17%, 0.8)");
    var fstop6 = new Color("hsla(44, 44%, 5%, 0.95)");
    var currlevel = 0;
    $(function() {
        $f1 = $("#f1"); $f2 = $("#f2"); $f3 = $("#f3"); $f4 = $("#f4"); $fspot = $("#fspot"); $flash = $("#flashlight"); $fdiv = $("#flashlight div:not(#fspot)"); $fh2 = $("#flashlight h2");
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
            shaking -= 100;
            setGlowy();
        }, 100);
    });
    
    function setGlowy() {
        if(shaking < 0) {
            shaking = 0;
            $fdiv.css("background","#000000");
            $fspot.css("background","#000000");
        } else if (shaking < 15000) {
            var power = shaking / 15000;
            var darkenby = 100 - power*100;
            var fadeinby = 1 - power;
            $fspot.css("background","radial-gradient(" + 
                fstop1.darken(darkenby).fadein(fadeinby * 0.5) + " 10%, " +
                fstop2.darken(darkenby).fadein(fadeinby * 0.5) + " 25%, " +
                fstop3.darken(darkenby).fadein(fadeinby * 0.5) + " 40%, " +
                fstop4.darken(darkenby).fadein(fadeinby * 0.5) + " 60%, " +
                fstop5.darken(darkenby).fadein(fadeinby * 0.5) + " 65%, " +
                fstop6.darken(darkenby).fadein(fadeinby * 0.05) + " 70%)");
            $fdiv.css("background",fstop6.darken(darkenby).fadein(fadeinby * 0.05));
        } else {
            if (shaking > 25000) { shaking = 25000; }
            $fspot.css("background","radial-gradient(" + 
                fstop1 + " 10%, " +
                fstop2 + " 25%, " +
                fstop3 + " 40%, " +
                fstop4 + " 60%, " +
                fstop5 + " 65%, " +
                fstop6 + " 70%)");
            $fdiv.css("background",fstop6);
        }
        $fh2.html(shaking);
    }
    
    function getGradient(power) {
    }
        
        
    
    function adjustLight(color) {
    }
    
    function positionLight(x,y) {
        var fpt = new Point($flash.offset());
        var pt = new Point(x,y);
        
        $fspot.css({top: pt.y - $fspot.height()/2, left: pt.x - $fspot.width()/2});
        var fbox = $fspot.box();
        var wbox = $flash.box();
        $f1.box(Point.ORIGIN, fbox.topright);
        $f2.box(fbox.right, wbox.top, wbox.right, fbox.bottom);
        $f3.box(fbox.left, fbox.bottom, wbox.right, wbox.bottom);
        $f4.box(wbox.left, fbox.top, fbox.left, wbox.bottom);
    }
}(jQuery));