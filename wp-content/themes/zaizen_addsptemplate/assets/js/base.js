window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
        return window.setTimeout(callback, 1000 / 60);
    };
})();
window.cancelAnimFrame = (function(_id) {
    return window.cancelAnimationFrame || window.cancelRequestAnimationFrame || window.webkitCancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelAnimationFrame || window.mozCancelRequestAnimationFrame || window.msCancelAnimationFrame || window.msCancelRequestAnimationFrame || window.oCancelAnimationFrame || window.oCancelRequestAnimationFrame || function(_id) { window.clearTimeout(id); };
})();

function closest(el, selector) {
    // type el -> Object
    // type select -> String
    var matchesFn;
    // find vendor prefix
    ['matches', 'webkitMatchesSelector', 'mozMatchesSelector', 'msMatchesSelector', 'oMatchesSelector'].some(function(fn) {
        if (typeof document.body[fn] == 'function') {
            matchesFn = fn;
            return true;
        }
        return false;
    })
    var parent;
    // traverse parents
    while (el) {
        parent = el.parentElement;
        if (parent && parent[matchesFn](selector)) {
            return parent;
        }
        el = parent;
    }
    return null;
}

function getCssProperty(elem, property) {
    return window.getComputedStyle(elem, null).getPropertyValue(property);
}
var easingEquations = {
    easeOutSine: function(pos) {
        return Math.sin(pos * (Math.PI / 2));
    },
    easeInOutSine: function(pos) {
        return (-0.5 * (Math.cos(Math.PI * pos) - 1));
    },
    easeInOutQuint: function(pos) {
        if ((pos /= 0.5) < 1) {
            return 0.5 * Math.pow(pos, 5);
        }
        return 0.5 * (Math.pow((pos - 2), 5) + 2);
    }
};

function isPartiallyVisible(el) {
    var elementBoundary = el.getBoundingClientRect();
    var top = elementBoundary.top;
    var bottom = elementBoundary.bottom;
    var height = elementBoundary.height;
    return ((top + height >= 0) && (height + window.innerHeight >= bottom));
}

function isFullyVisible(el) {
    var elementBoundary = el.getBoundingClientRect();
    var top = elementBoundary.top;
    var bottom = elementBoundary.bottom;
    return ((top >= 0) && (bottom <= window.innerHeight));
}

function CreateElementWithClass(elementName, className) {
    var el = document.createElement(elementName);
    el.className = className;
    return el;
}

function createElementWithId(elementName, idName) {
    var el = document.createElement(elementName);
    el.id = idName;
    return el;
}

function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    document.body.appendChild(outer);
    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = "scroll";
    // add innerdiv
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);
    var widthWithScroll = inner.offsetWidth;
    // remove divs
    outer.parentNode.removeChild(outer);
    return widthNoScroll - widthWithScroll;
}
var transform = ["transform", "msTransform", "webkitTransform", "mozTransform", "oTransform"];
var flex = ['-webkit-box', '-moz-box', '-ms-flexbox', '-webkit-flex', 'flex'];
var fd = ['flexDirection', '-webkit-flexDirection', '-moz-flexDirection'];
var animatriondelay = ["animationDelay", "-moz-animationDelay", "-wekit-animationDelay"];

function getSupportedPropertyName(properties) {
    for (var i = 0; i < properties.length; i++) {
        if (typeof document.body.style[properties[i]] != "undefined") {
            return properties[i];
        }
    }
    return null;
}
var transformProperty = getSupportedPropertyName(transform);
var flexProperty = getSupportedPropertyName(flex);
var fdProperty = getSupportedPropertyName(fd);
var ad = getSupportedPropertyName(animatriondelay);

function detectIE() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    var trident = ua.indexOf('Trident/');
    if (msie > 0 || trident > 0) {
        // IE 10 or older => return version number
        // return 'ie'+parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        return 'ie';
    }
    return false;
}

function detect7() {
    var ua = window.navigator.userAgent;
    var isWin7 = ua.indexOf('Windows NT 6.1');
    if (isWin7 > 0) {
        return 'win7';
    }
    return false;
};

function detectmob() {
    if (navigator.userAgent.match(/Android/i) ||
        navigator.userAgent.match(/webOS/i) ||
        navigator.userAgent.match(/iPhone/i) ||
        navigator.userAgent.match(/iPad/i) ||
        navigator.userAgent.match(/iPod/i) ||
        navigator.userAgent.match(/BlackBerry/i) ||
        navigator.userAgent.match(/Windows Phone/i)
    ) {
        return true;
    } else {
        return false;
    }
}

function getPosition(el) {
    var xPos = 0;
    var yPos = 0;
    while (el) {
        if (el.tagName == "BODY") {
            // deal with browser quirks with body/window/document and page scroll
            var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
            var yScroll = el.scrollTop || document.documentElement.scrollTop;
            xPos += (el.offsetLeft - xScroll + el.clientLeft);
            yPos += (el.offsetTop - yScroll + el.clientTop);
        } else {
            // for all other non-BODY elements
            xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
            yPos += (el.offsetTop - el.scrollTop + el.clientTop);
        }
        el = el.offsetParent;
    }
    return {
        x: xPos,
        y: yPos
    };
}
/* images pc <---> sp */
(function() {
    var PicturePolyfill = (function() {
        function PicturePolyfill() {
            var _this = this;
            this.pictures = [];
            this.onResize = function() {
                var width = document.body.clientWidth;
                for (var i = 0; i < _this.pictures.length; i = (i + 1)) {
                    _this.pictures[i].update(width);
                };
            };
            if ([].includes) return;
            var picture = Array.prototype.slice.call(document.getElementsByTagName('picture'));
            for (var i = 0; i < picture.length; i = (i + 1)) {
                this.pictures.push(new Picture(picture[i]));
            };
            window.addEventListener("resize", this.onResize, false);
            this.onResize();
        }
        return PicturePolyfill;
    }());
    var Picture = (function() {
        function Picture(node) {
            var _this = this;
            this.update = function(width) {
                width <= _this.breakPoint ? _this.toSP() : _this.toPC();
            };
            this.toSP = function() {
                if (_this.isSP) return;
                _this.isSP = true;
                _this.changeSrc();
            };
            this.toPC = function() {
                if (!_this.isSP) return;
                _this.isSP = false;
                _this.changeSrc();
            };
            this.changeSrc = function() {
                var toSrc = _this.isSP ? _this.srcSP : _this.srcPC;
                _this.img.setAttribute('src', toSrc);
            };
            this.img = node.getElementsByTagName('img')[0];
            this.srcPC = this.img.getAttribute('src');
            var source = node.getElementsByTagName('source')[0];
            this.srcSP = source.getAttribute('srcset');
            this.breakPoint = Number(source.getAttribute('media').match(/(\d+)px/)[1]);
            this.isSP = !document.body.clientWidth <= this.breakPoint;
            this.update();
        }
        return Picture;
    }());
    new PicturePolyfill();
}());

window.addEventListener('DOMContentLoaded', function() {
    if (window.jQuery) window.Velocity = window.jQuery.fn.velocity;
    new Menu();
    new Sticky();
    if (document.getElementsByClassName('tabs')) {
        new Tab();
    }
});
var Menu = (function() {
    function Menu() {
        var m = this;
        this._target = document.getElementById('icon_nav');
        this._mobile = document.getElementById('nav');
        this._header = document.getElementById('header');
        this._subs = this._mobile.querySelectorAll('.has__sub > span')
        this._target.addEventListener('click', function() {
            if (this.classList.contains('open')) {
                this.classList.remove('open');
                m._mobile.classList.remove('open');
                document.body.style.overflow = 'inherit';
                Array.prototype.forEach.call(m._subs, function(el) {
                    el.classList.remove('open');
                    el.nextElementSibling.style.height = 0;
                })
            } else {
                this.classList.add('open');
                m._mobile.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
        });
        this._reset = function() {
            if (m._target.classList.contains('open')) {
                if (window.innerWidth > 768) {
                    m._target.classList.remove('open');
                    m._mobile.classList.remove('open');
                    document.body.style.overflow = 'auto';
                    Array.prototype.forEach.call(m._subs, function(el) {
                        el.classList.remove('open');
                        el.nextElementSibling.style.height = 0;
                    })
                } else {
                    Array.prototype.forEach.call(m._subs, function(el) {
                        if (el.classList.contains('open')) {
                            var list = el.nextElementSibling.children;
                            var h = 0;
                            Array.prototype.forEach.call(list, function(child) {
                                h += child.clientHeight;
                                h += parseFloat(getCssProperty(child, 'margin-top'));
                                h += parseFloat(getCssProperty(child, 'margin-bottom'));
                            })
                            el.nextElementSibling.style.height = h + 'px';
                        }
                    })
                }
            }
        }
        Array.prototype.forEach.call(m._subs, function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                if (!el.classList.contains('open')) {
                    el.classList.add('open');
                    var list = el.nextElementSibling.children;
                    var h = 0;
                    Array.prototype.forEach.call(list, function(child) {
                        h += child.clientHeight;
                        h += parseFloat(getCssProperty(child, 'margin-top'));
                        h += parseFloat(getCssProperty(child, 'margin-bottom'));
                    })
                    el.nextElementSibling.style.height = h + 'px';
                } else {
                    el.classList.remove('open');
                    el.nextElementSibling.style.height = 0;
                }
            })
        })
        this._reset();
        window.addEventListener('resize', m._reset, false);
    }
    return Menu;
})();
var Sticky = (function() {
    function Sticky() {
        var s = this;
        this._target = document.getElementById('header__menu');
        this._logo = document.getElementById('header__logo');
        if (document.getElementById('ttl')) {
            this._ttl = document.getElementById('ttl');
            this._h = this._ttl.clientHeight;
        } else {
            this._ttl;
            this._h = 0;
        }
        this._for_sp = function(top) {
            s._target.style.left = 0;
            if (top >= 0) {
                s._logo.classList.add('fixed');
                document.body.style.paddingTop = s._logo.clientHeight + 'px';
            } else {
                s._logo.classList.remove('fixed');
                document.body.style.paddingTop = 0;
            }
        }
        this._for_pc = function(top, left) {
            if (top >= (s._h + s._logo.clientHeight)) {
                s._target.classList.add('fixed');
                s._target.style.left = -left + 'px';
                document.body.style.paddingTop = s._target.clientHeight + 'px';
            } else {
                s._target.classList.remove('fixed');
                document.body.style.paddingTop = 0;
            }
        }
        this.handling = function() {
            var _top = document.documentElement.scrollTop || document.body.scrollTop;
            var _left = document.documentElement.scrollLeft || document.body.scrollLeft;
            if (window.innerWidth > 768) {
                s._for_pc(_top, _left);
            } else {
                s._for_sp(_top);
            }
        }
        window.addEventListener('scroll', s.handling, false);
        window.addEventListener('resize', s.handling, false);
        window.addEventListener('load', s.handling, false);
    }
    return Sticky;
})();
var Tab = (function() {
    function Tab() {
        var t = this;
        this._target = document.querySelectorAll('.tabs');
        Array.prototype.forEach.call(this._target, function(el, i) {
            var _eles = el.querySelectorAll('a');
            Array.prototype.forEach.call(_eles, function(c) {
                showArticle(c, 0);
                c.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.parentNode.classList.add('active');
                    Array.prototype.forEach.call(_eles, function(child) {
                        if (child != c) {
                            child.parentNode.classList.remove('active');
                        }
                    });
                    showArticle(this, this.dataset.tabs);
                })
            })
        })
    }

    function showArticle(el, tabNum) {
        arr = closest(el, '.main__tab').querySelector('.main__tab__ct').querySelectorAll('.ctn_tabs');
        Array.prototype.forEach.call(arr, function(a) {
            if (a.dataset.tabs == tabNum) {
                a.style.display = "block";
            } else {
                a.style.display = "none";
            }
        });
    }
    return Tab;
})()

$(document).ready(function() {
    var pagetop = $('#back-to-top');
    pagetop.fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 700) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function() {
        $('body, html').animate({ scrollTop: 0 }, 1500);
        return false;
    });
});