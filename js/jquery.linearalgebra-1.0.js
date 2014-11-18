/* Depends on linearalgebra v1.3 */

/*global jQuery*/
/*global Box*/

(function ($) {
    $.fn.box = function (x1,y1,x2,y2) {
        if (typeof x1 !== "undefined") {
            var b = new Box(x1, y1, x2, y2);
            this.css({left: b.left, top: b.top, width: b.width, height: b.height});
            return this;
        } else {
            var p = this.position(), w = this.width(), h = this.height();
            return new Box(p.left, p.top, p.left + w, p.top + h);
        }
    };
}(jQuery));