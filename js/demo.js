var addEvent = function addEvent(element, eventName, func) {
	if (element.addEventListener) {
    	return element.addEventListener(eventName, func, false);
    } else if (element.attachEvent) {
        return element.attachEvent("on" + eventName, func);
    }
};

addEvent(document.getElementById('menu'), 'click', function(){
    if (this.hasAttribute('opend', 1)) {
        this.removeAttribute('opend', 1);
        snapper.close('right');
    } else {
        snapper.open('right');
        this.setAttribute('opend', 1);
    }
});
addEvent(document.getElementById('open-left'), 'click', function(){
    if (this.hasAttribute('opend', 1)) {
        this.removeAttribute('opend', 1);
        snapper.close('left');
    } else {
        snapper.open('left');
        this.setAttribute('opend', 1);
    }
});








/* Prevent Safari opening links when viewing as a Mobile App */
(function (a, b, c) {
    if(c in b && b[c]) {
        var d, e = a.location,
            f = /^(a|html)$/i;
        a.addEventListener("click", function (a) {
            d = a.target;
            while(!f.test(d.nodeName)) d = d.parentNode;
            "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
        }, !1)
    }
})(document, window.navigator, "standalone");