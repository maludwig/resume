/* Depends on jquery and linearalgebra v1.3 */

/*global jQuery, setTimeout*/

(function ($) {
    //Slowly "type" a string into all selected elements
    //s: The string to "type"
    //delay: The average amount of time between characters, in milliseconds
    //len: The maximum number of characters allowed in each element
    $.fn.slowtype = function (s,delay,len) {
        var inner = this.html()+s.charAt(0);
        this.text(s.charAt(0));
        rdelay(s.slice(1),delay,len,this);
        return this;
    };
}(jQuery));

function rdelay(s, delay, len, $e) {
    if(s !== "") {
        var inner;
        if(s.charAt(0) === "\n") {
            while (s.charAt(0) === "\n") s = s.slice(1);
            inner = s.charAt(0);
        } else {
            inner = $e.text()+s.charAt(0);
        }
        if (inner.length > len) inner = inner.slice(1);
        $e.text(inner);
        setTimeout(function(){
            rdelay(s.slice(1),delay,len,$e);
        },delay*Math.random()*2);
    }
}