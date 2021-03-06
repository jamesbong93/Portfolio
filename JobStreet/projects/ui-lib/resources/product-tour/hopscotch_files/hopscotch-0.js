/**!
 *
 * Copyright 2013 LinkedIn Corp. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

 
 ! function (a, b) {

    var c, d, e, f, g, h, i, j, k, l, m = window.Sizzle || null,
        n = a[b],
        o = "undefined",
        p = !1,
        q = typeof window.jQuery !== o,
        r = !1,
        s = window.document;
    try {
        r = typeof window.sessionStorage !== o
    } catch (t) {}
    l = {
        smoothScroll: !0,
        scrollDuration: 1e3,
        scrollTopMargin: 200,
        showCloseButton: !0,
        showPrevButton: !1,
        showNextButton: !0,
        bubbleWidth: 280,
        bubblePadding: 15,
        arrowWidth: 20,
        skipIfNoElement: !0,
        cookieName: "hopscotch.tour.state"
    }, n || (Array.isArray || (Array.isArray = function (a) {
        return "[object Array]" === Object.prototype.toString.call(a)
    }), k = function () {
        p && n.startTour()
		
    }, h = {
        addClass: function (a, b) {
            var c, d, e, f;
            if (a.className) {
                for (d = b.split(/\s+/), c = " " + a.className + " ", e = 0, f = d.length; f > e; ++e) c.indexOf(" " + d[e] + " ") < 0 && (c += d[e] + " ");
                a.className = c.replace(/^\s+|\s+$/g, "")
            } else a.className = b
        },
        removeClass: function (a, b) {
            var c, d, e, f;
            for (d = b.split(/\s+/), c = " " + a.className + " ", e = 0, f = d.length; f > e; ++e) c = c.replace(" " + d[e] + " ", " ");
            a.className = c.replace(/^\s+|\s+$/g, "")
        },
        getPixelValue: function (a) {
            var b = typeof a;
            return "number" === b ? a : "string" === b ? parseInt(a, 10) : 0
        },
        valOrDefault: function (a, b) {
            return typeof a !== o ? a : b
        },
        invokeCallbackArrayHelper: function (a) {
            var b;
            return Array.isArray(a) && (b = j[a[0]], "function" == typeof b) ? b.apply(this, a.slice(1)) : void 0
        },
        invokeCallbackArray: function (a) {
            var b, c;
            if (Array.isArray(a)) {
                if ("string" == typeof a[0]) return h.invokeCallbackArrayHelper(a);
                for (b = 0, c = a.length; c > b; ++b) h.invokeCallback(a[b])
            }
        },
        invokeCallback: function (a) {
            return "function" == typeof a ? a() : "string" == typeof a && j[a] ? j[a]() : h.invokeCallbackArray(a)
        },
        invokeEventCallbacks: function (a, b) {
            var c, d, e = i[a];
            if (b) return this.invokeCallback(b);
            for (c = 0, d = e.length; d > c; ++c) this.invokeCallback(e[c].cb)
        },
        getScrollTop: function () {
            var a;
            return a = typeof window.pageYOffset !== o ? window.pageYOffset : s.documentElement.scrollTop
        },
        getScrollLeft: function () {
            var a;
            return a = typeof window.pageXOffset !== o ? window.pageXOffset : s.documentElement.scrollLeft
        },
        getWindowHeight: function () {
            return window.innerHeight || s.documentElement.clientHeight
        },
        getWindowWidth: function () {
            return window.innerWidth || s.documentElement.clientWidth
        },
        addEvtListener: function (a, b, c) {
            return a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent("on" + b, c)
        },
        removeEvtListener: function (a, b, c) {
            return a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent("on" + b, c)
        },
        documentIsReady: function () {
            return "complete" === s.readyState || "interactive" === s.readyState
        },
        evtPreventDefault: function (a) {
            a.preventDefault ? a.preventDefault() : event && (event.returnValue = !1)
        },
        extend: function (a, b) {
            var c;
            for (c in b) b.hasOwnProperty(c) && (a[c] = b[c])
        },
        getStepTargetHelper: function (a) {
            var b;
            return /^[#\.]/.test(a) ? s.querySelector ? s.querySelector(a) : q ? (b = jQuery(a), b.length ? b[0] : null) : m ? (b = new m(a), b.length ? b[0] : null) : /^#[a-zA-Z][\w-_:.]*$/.test(a) ? s.getElementById(a.substring(1)) : null : s.getElementById(a)
        },
        getStepTarget: function (a) {
            var b;
            if (!a || !a.target) return null;
            if ("string" == typeof a.target) return a.target = h.getStepTargetHelper(a.target), a.target;
            if (Array.isArray(a.target)) {
                var c, d;
                for (c = 0, d = a.target.length; d > c; c++) if ("string" == typeof a.target[c] && (b = h.getStepTargetHelper(a.target[c]))) return a.target = b, b;
                return null
            }
		
            return a.target
        },
        getI18NString: function (a) {
            return g[a] || f[a]
        },
        setState: function (a, b, c) {
            var d, e = "";
            r ? sessionStorage.setItem(a, b) : (c && (d = new Date, d.setTime(d.getTime() + 1e3 * 60 * 60 * 24 * c), e = "; expires=" + d.toGMTString()), s.cookie = a + "=" + b + e + "; path=/")
        },
        getState: function (a) {
            var b, c, d, e = a + "=",
                f = s.cookie.split(";");
            if (r) d = sessionStorage.getItem(a);
            else for (b = 0; b < f.length; b++) {
                for (c = f[b];
                " " === c.charAt(0);) c = c.substring(1, c.length);
                if (0 === c.indexOf(e)) {
                    d = c.substring(e.length, c.length);
                    break
                }
            }
            return d
        },
        clearState: function (a) {
            r ? sessionStorage.removeItem(a) : this.setState(a, "", -1)
        }
    }, h.addEvtListener(window, "load", k), i = {
        next: [],
        prev: [],
        start: [],
        end: [],
        show: [],
        error: [],
        close: []
    }, j = {}, f = {
        stepNums: null,
        nextBtn: "Next",
        prevBtn: "Back",
        doneBtn: "Done",
        skipBtn: "Skip",
        closeTooltip: "x"
    }, g = {}, d = function (a) {
        this.init(a)
    }, d.prototype = {
        isShowing: !1,
        currStep: void 0,
        _createButton: function (a, b) {
            var c = s.createElement("button"),
                d = "hopscotch-nav-button";
            return c.id = a, b && (c.innerHTML = b), d += a.indexOf("prev") >= 0 ? " prev" : " next", h.addClass(c, d), c
        },
        setPosition: function (a) {
            var b, c, d, e, f, g, i, j = 6,
                k = h.getStepTarget(a),
                l = this.element,
                m = this.arrowEl;
            b = h.getPixelValue(a.width) || this.opt.bubbleWidth, d = h.valOrDefault(a.padding, this.opt.bubblePadding), h.removeClass(l, "fade-in-down fade-in-up fade-in-left fade-in-right"), !a.placement && a.orientation && (a.placement = a.orientation), e = k.getBoundingClientRect(), "top" === a.placement ? (c = l.offsetHeight, f = e.top - c - this.opt.arrowWidth, g = e.left) : "bottom" === a.placement ? (f = e.bottom + this.opt.arrowWidth, g = e.left) : "left" === a.placement ? (f = e.top, g = e.left - b - 2 * d - 2 * j - this.opt.arrowWidth) : "right" === a.placement && (f = e.top, g = e.right + this.opt.arrowWidth), i = "center" !== a.arrowOffset ? h.getPixelValue(a.arrowOffset) : a.arrowOffset, i ? "top" === a.placement || "bottom" === a.placement ? (m.style.top = "", m.style.left = "center" === i ? b / 2 + d - m.offsetWidth / 2 + "px" : i + "px") : ("left" === a.placement || "right" === a.placement) && (m.style.left = "", "center" === i ? (c = c || l.offsetHeight, m.style.top = c / 2 + d - m.offsetHeight / 2 + "px") : m.style.top = i + "px") : (m.style.top = "", m.style.left = ""), "center" === a.xOffset ? g = e.left + k.offsetWidth / 2 - b / 2 - d : g += h.getPixelValue(a.xOffset), "center" === a.yOffset ? (c = c || l.offsetHeight, f = e.top + k.offsetHeight / 2 - c / 2 - d) : f += h.getPixelValue(a.yOffset), a.fixedElement || (f += h.getScrollTop(), g += h.getScrollLeft()), l.style.position = a.fixedElement ? "fixed" : "absolute", l.style.top = f + "px", l.style.left = g + "px"
        
		
		},
        _initNavButtons: function () {
            var a = s.createElement("div");
            return this.prevBtnEl = this._createButton("hopscotch-prev", h.getI18NString("prevBtn")), this.nextBtnEl = this._createButton("hopscotch-next", h.getI18NString("nextBtn")), this.doneBtnEl = this._createButton("hopscotch-done", h.getI18NString("doneBtn")), this.ctaBtnEl = this._createButton("hopscotch-cta"), h.addClass(this.doneBtnEl, "hide"), a.appendChild(this.prevBtnEl), a.appendChild(this.ctaBtnEl), a.appendChild(this.nextBtnEl), a.appendChild(this.doneBtnEl), h.addEvtListener(this.prevBtnEl, "click", function () {
					
 

			 $('#slide_'+n.getCurrStepNum()).removeClass("bootstro-highlight");
             $('#slide_'+(n.getCurrStepNum()-1)).addClass("bootstro-highlight");
			 


				   n.prevStep(!0) 
		
            }), h.addEvtListener(this.nextBtnEl, "click", function () {
			

			 $('#slide_'+n.getCurrStepNum()).removeClass("bootstro-highlight");
             $('#slide_'+(n.getCurrStepNum()+1)).addClass("bootstro-highlight");


			 n.nextStep(!0)
			
				
            }), h.addEvtListener(this.doneBtnEl, "click", function () {
						 $('#slide_'+n.getCurrStepNum()).removeClass("bootstro-highlight");
						 $('#backdropdiv').removeClass("bootstro-backdrop");

                n.endTour()
            }), a.className = "hopscotch-actions", this.buttonsEl = a, this.containerEl.appendChild(a), this
        },
        _getCloseFn: function () {
            var a = this;
            return this.closeFn || (this.closeFn = function (b) {
                a.opt.onClose && h.invokeCallback(a.opt.onClose), a.opt.id && !a.opt.isTourBubble ? n.getCalloutManager().removeCallout(a.opt.id) : a.destroy(), h.evtPreventDefault(b)
            }), this.closeFn
        },
        initCloseButton: function () {
		
            var a = s.createElement("a");
            return a.className = "hopscotch-bubble-close", a.href = "#", a.title = h.getI18NString("closeTooltip"), a.innerHTML = h.getI18NString("closeTooltip"), this.opt.isTourBubble ? h.addEvtListener(a, "click", function (a) {
                var b = n.getCurrStepNum(),
                    c = n.getCurrTour(),
                    d = b === c.steps.length - 1;
 $('#slide_'+n.getCurrStepNum()).removeClass("bootstro-highlight");
 $('#backdropdiv').removeClass("bootstro-backdrop");
          
                h.invokeEventCallbacks("close"), n.endTour(!0, d), a.preventDefault ? a.preventDefault() : event && (event.returnValue = !1)
            }) : h.addEvtListener(a, "click", this._getCloseFn()), h.valOrDefault(this.opt.showCloseButton, !0) || h.addClass(a, "hide"), this.closeBtnEl = a, this.containerEl.appendChild(a), this
        
					
		},
        _initArrow: function () {
            var a, b;
            return this.arrowEl = s.createElement("div"), this.arrowEl.className = "hopscotch-bubble-arrow-container", b = s.createElement("div"), b.className = "hopscotch-bubble-arrow-border", a = s.createElement("div"), a.className = "hopscotch-bubble-arrow", this.arrowEl.appendChild(b), this.arrowEl.appendChild(a), this.element.appendChild(this.arrowEl), this
        },
        _setupCTAButton: function (a) {
            var b = this;
            this._showButton(this.ctaBtnEl, !! a.showCTAButton), a.showCTAButton && a.ctaLabel && (this.ctaBtnEl.innerHTML = a.ctaLabel, this._ctaFn = function () {
                b.opt.isTourBubble || n.getCalloutManager().removeCallout(a.id), a.onCTA && "function" == typeof a.onCTA && a.onCTA()
            }, h.addEvtListener(this.ctaBtnEl, "click", this._ctaFn))
        },
        _removeCTACallback: function () {
            this.ctaBtnEl && this._ctaFn && (h.removeEvtListener(this.ctaBtnEl, "click", this._ctaFn), this._ctaFn = null)
        },
        render: function (a, b, c, d) {
            var e, f, g, i, j = this.element;
            return a ? this.currStep = a : this.currStep && (a = this.currStep), !a.placement && a.orientation && (a.placement = a.orientation), e = h.valOrDefault(a.showNextButton, this.opt.showNextButton), f = h.valOrDefault(a.showPrevButton, this.opt.showPrevButton), this.setTitle(a.title || ""), this.setContent(a.content || ""), this.opt.isTourBubble && this.setNum(b), this.placement = a.placement, this.showPrevButton(this.prevBtnEl && f && b > 0), this.showNextButton(this.nextBtnEl && e && !c), this.nextBtnEl.innerHTML = a.showSkip ? h.getI18NString("skipBtn") : h.getI18NString("nextBtn"), c ? h.removeClass(this.doneBtnEl, "hide") : h.addClass(this.doneBtnEl, "hide"), this._setupCTAButton(a), this._setArrow(a.placement), g = h.getPixelValue(a.width) || this.opt.bubbleWidth, i = h.valOrDefault(a.padding, this.opt.bubblePadding), this.containerEl.style.width = g + "px", this.containerEl.style.padding = i + "px", j.style.zIndex = a.zindex || "", "top" === a.placement ? (j.style.top = "-9999px", j.style.left = "-9999px", h.removeClass(j, "hide"), this.setPosition(a), h.addClass(j, "hide")) : this.setPosition(a), d && d(!a.fixedElement), this
        },
        setTitle: function (a) {
            return a ? (this.titleEl.innerHTML = a, h.removeClass(this.titleEl, "hide")) : h.addClass(this.titleEl, "hide"), this
        },
        setContent: function (a) {
            return a ? (this.contentEl.innerHTML = a, h.removeClass(this.contentEl, "hide")) : h.addClass(this.contentEl, "hide"), this
        },
        setNum: function (a) {
            var b = h.getI18NString("stepNums");
			var showstep ;
            b && a < b.length ? a = b[a] : a += 1 ,showstep= a+"/5", this.numberEl.innerHTML = showstep

		
        },
        _setArrow: function (a) {
            h.removeClass(this.arrowEl, "down up right left"), "top" === a ? h.addClass(this.arrowEl, "down") : "bottom" === a ? h.addClass(this.arrowEl, "up") : "left" === a ? h.addClass(this.arrowEl, "right") : "right" === a && h.addClass(this.arrowEl, "left")
        },
        _getArrowDirection: function () {
            return "top" === this.placement ? "down" : "bottom" === this.placement ? "up" : "left" === this.placement ? "right" : "right" === this.placement ? "left" : void 0
        },
        show: function () {
            var a = this,
                b = "fade-in-" + this._getArrowDirection(),
                c = 1e3;
            return h.removeClass(this.element, "hide"), h.addClass(this.element, b), setTimeout(function () {
                h.removeClass(a.element, "invisible")
            }, 50), setTimeout(function () {
                h.removeClass(a.element, b)
            }, c), this.isShowing = !0, this
        },
        hide: function (a) {
            var b = this.element;
            return a = h.valOrDefault(a, !0), b.style.top = "", b.style.left = "", a ? (h.addClass(b, "hide"), h.removeClass(b, "invisible")) : (h.removeClass(b, "hide"), h.addClass(b, "invisible")), h.removeClass(b, "animate fade-in-up fade-in-down fade-in-right fade-in-left"), this.isShowing = !1, this
        },
        _showButton: function (a, b, c) {
            var d = "hide";
            c && (d = "hide-all"), typeof b === o && (b = !0), b ? h.removeClass(a, d) : h.addClass(a, d)
        },
        showPrevButton: function (a) {
            this._showButton(this.prevBtnEl, a)
        },
        showNextButton: function (a) {
            this._showButton(this.nextBtnEl, a)
        },
        showCloseButton: function (a) {
            this._showButton(this.closeBtnEl, a)
        },
        destroy: function () {
            var a = this.element;
            a && a.parentNode.removeChild(a), this.closeBtnEl && h.removeEvtListener(this.closeBtnEl, "click", this._getCloseFn()), this.ctaBtnEl && this.onCTA && this._removeCTACallback()
        },
        updateButtons: function () {
            this.showPrevButton(this.opt.showPrevButton), this.showNextButton(this.opt.showNextButton), this.showCloseButton(this.opt.showCloseButton), this.prevBtnEl.innerHTML = h.getI18NString("prevBtn"), this.nextBtnEl.innerHTML = h.getI18NString("nextBtn"), this.doneBtnEl.innerHTML = h.getI18NString("doneBtn")
        },
        init: function (a) {
            var b, c, d, e = s.createElement("div"),
                f = s.createElement("div"),
                g = s.createElement("div"),
                i = this,
                j = !1;
            this.element = e, this.containerEl = f, this.titleEl = s.createElement("h3"), this.contentEl = s.createElement("div"), h.addClass(this.titleEl, "hopscotch-title"), h.addClass(this.contentEl, "hopscotch-content"), d = {
                showPrevButton: l.showPrevButton,
                showNextButton: l.showNextButton,
                bubbleWidth: l.bubbleWidth,
                bubblePadding: l.bubblePadding,
                arrowWidth: l.arrowWidth,
                showNumber: !0,
                isTourBubble: !0
            }, a = typeof a === o ? {} : a, h.extend(d, a), this.opt = d, e.className = "hopscotch-bubble animated", f.className = "hopscotch-bubble-container", d.isTourBubble || (e.className += " hopscotch-callout"), d.isTourBubble ? (this.numberEl = s.createElement("span"), this.numberEl.className = "hopscotch-bubble-number", f.appendChild(this.numberEl)) : h.addClass(e, "no-number"), g.appendChild(this.titleEl), g.appendChild(this.contentEl), g.className = "hopscotch-bubble-content", f.appendChild(g), e.appendChild(f), this._initNavButtons(), this.initCloseButton(), this._initArrow(), b = function () {
                !j && i.isShowing && (j = !0, setTimeout(function () {
                    i.setPosition(i.currStep), j = !1
                }, 100))
            }, h.addEvtListener(window, "resize", b), this.hide(), h.documentIsReady() ? s.body.appendChild(e) : (s.addEventListener ? (c = function () {
                s.removeEventListener("DOMContentLoaded", c), window.removeEventListener("load", c), s.body.appendChild(e)
            }, s.addEventListener("DOMContentLoaded", c, !1)) : (c = function () {
                "complete" === s.readyState && (s.detachEvent("onreadystatechange", c), window.detachEvent("onload", c), s.body.appendChild(e))
            }, s.attachEvent("onreadystatechange", c)), h.addEvtListener(window, "load", c))
        }
    }, e = function () {
        var a = {};
        this.createCallout = function (b) {
            var c;
            if (!b.id) throw "Must specify a callout id.";
            if (a[b.id]) throw "Callout by that id already exists. Please choose a unique id.";
            return b.showNextButton = b.showPrevButton = !1, b.isTourBubble = !1, c = new d(b), a[b.id] = c, b.target && c.render(b, null, null, function () {
                c.show()
            }), c
        }, this.getCallout = function (b) {
            return a[b]
        }, this.removeAllCallouts = function () {
            var b;
            for (b in a) a.hasOwnProperty(b) && this.removeCallout(b)
        }, this.removeCallout = function (b) {
            var c = a[b];
            a[b] = null, c && c.destroy()
        }
    }, c = function (a) {
        var b, c, f, k, m, n, r, t, u = this,
            v = function (a) {
                return b || (b = new d(f)), a && (h.extend(b.opt, {
                    bubblePadding: w("bubblePadding"),
                    bubbleWidth: w("bubbleWidth"),
                    showNextButton: w("showNextButton"),
                    showPrevButton: w("showPrevButton"),
                    showCloseButton: w("showCloseButton"),
                    arrowWidth: w("arrowWidth")
                }), b.updateButtons()), b
            }, w = function (a) {
                return "undefined" == typeof f ? l[a] : h.valOrDefault(f[a], l[a])
            }, x = function () {
                var a;
                return a = 0 > m || m >= k.steps.length ? null : k.steps[m]
            }, y = function () {
                u.nextStep()
            }, z = function (a) {
                var b, c, d, e, f, g, i = v(),
                    j = i.element,
                    k = h.getPixelValue(j.style.top),
                    l = k + h.getPixelValue(j.offsetHeight),
                    m = h.getStepTarget(x()),
                    n = m.getBoundingClientRect(),
                    p = n.top + h.getScrollTop(),
                    r = n.bottom + h.getScrollTop(),
                    t = p > k ? k : p,
                    u = l > r ? l : r,
                    y = h.getScrollTop(),
                    z = y + h.getWindowHeight(),
                    A = t - w("scrollTopMargin");
                t >= y && (t <= y + w("scrollTopMargin") || z >= u) ? a && a() : w("smoothScroll") ? typeof YAHOO !== o && typeof YAHOO.env !== o && typeof YAHOO.env.ua !== o && typeof YAHOO.util !== o && typeof YAHOO.util.Scroll !== o ? (b = YAHOO.env.ua.webkit ? s.body : s.documentElement, d = YAHOO.util.Easing ? YAHOO.util.Easing.easeOut : void 0, c = new YAHOO.util.Scroll(b, {
                    scroll: {
                        to: [0, A]
                    }
                }, w("scrollDuration") / 1e3, d), c.onComplete.subscribe(a), c.animate()) : q ? jQuery("body, html").animate({
                    scrollTop: A
                }, w("scrollDuration"), a) : (0 > A && (A = 0), e = y > t ? -1 : 1, f = Math.abs(y - A) / (w("scrollDuration") / 10), g = function () {
                    var b = h.getScrollTop(),
                        c = b + e * f;
                    return e > 0 && c >= A || 0 > e && A >= c ? (c = A, a && a(), window.scrollTo(0, c), void 0) : (window.scrollTo(0, c), h.getScrollTop() === b ? (a && a(), void 0) : (setTimeout(g, 10), void 0))
                }, g()) : (window.scrollTo(0, A), a && a())
            }, A = function (a, b) {
                var c, d, e;
                m + a >= 0 && m + a < k.steps.length ? (m += a, d = x(), e = function () {
                    c = h.getStepTarget(d), c ? b(m) : (h.invokeEventCallbacks("error"), A(a, b))
                }, d.delay ? setTimeout(e, d.delay) : e()) : b(-1)
            }, B = function (a, b) {
                var c, d, e, f, g = v(),
                    i = this;
                if (g.hide()._removeCTACallback(), a = h.valOrDefault(a, !0), c = x(), d = c, e = b > 0 ? d.multipage : m > 0 && k.steps[m - 1].multipage, f = function (c) {
                    var f;
                    return -1 === c ? this.endTour(!0) : (a && (f = b > 0 ? h.invokeEventCallbacks("next", d.onNext) : h.invokeEventCallbacks("prev", d.onPrev)), e ? (h.setState(w("cookieName"), k.id + ":" + m, 1), void 0) : (f = h.valOrDefault(f, !0), f ? this.showStep(c) : this.endTour(!1), void 0))
                }, !e && w("skipIfNoElement")) A(b, function (a) {
                    f.call(i, a)
                });
                else if (m + b >= 0 && m + b < k.steps.length) {
                    if (m += b, c = x(), !h.getStepTarget(c) && !e) return h.invokeEventCallbacks("error"), this.endTour(!0, !1);
                    f.call(this, m)
                }
                return this
            }, C = function (a) {
                var b, c, d, e = {};
                for (b in a) a.hasOwnProperty(b) && "id" !== b && "steps" !== b && (e[b] = a[b]);
                return t.call(this, e, !0), c = h.getState(w("cookieName")), c && (d = c.split(":"), n = d[0], r = d[1], r = parseInt(r, 10)), this
            }, D = function (a, b) {
                var c, d;
                if (m = a || 0, c = x(), d = h.getStepTarget(c)) return b(m), void 0;
                if (!d) {
                    if (h.invokeEventCallbacks("error"), w("skipIfNoElement")) return A(1, b), void 0;
                    m = -1, b(m)
                }
            }, E = function (a) {
                var b, c, d = k.steps[a],
                    e = k.steps,
                    f = e.length,
                    g = k.id + ":" + a,
                    i = v(),
                    j = h.getStepTarget(d);
                c = function () {
                    i.show(), h.invokeEventCallbacks("show", d.onShow)
                }, m = a, i.hide(!1), b = a === f - 1, i.render(d, a, b, function (a) {
                    a ? z(c) : c(), d.nextOnTargetClick && h.addEvtListener(j, "click", y)
                }), h.setState(w("cookieName"), g, 1)
            }, F = function (a) {
                a && this.configure(a)
            };
        this.getCalloutManager = function () {
            return typeof c === o && (c = new e), c
        }, this.startTour = function (a, b) {
	
            var c, d = this;
            if (k || (k = a, C.call(this, a)), typeof b !== o) {
                if (b >= k.steps.length) throw "Specified step number out of bounds.";
                m = b
            }
            return h.documentIsReady() ? (m || k.id !== n || typeof r === o ? m || (m = 0) : m = r, D(m, function (a) {
                var b = -1 !== a && h.getStepTarget(k.steps[a]);
                return b ? (h.invokeEventCallbacks("start"), c = v(), c.hide(!1), d.isActive = !0, h.getStepTarget(x()) ? d.showStep(a) : (h.invokeEventCallbacks("error"), w("skipIfNoElement") && d.nextStep(!1)), void 0) : (d.endTour(!1, !1), void 0)
            }), this) : (p = !0, this)
				
        }, this.showStep = function (a) {
            var b = k.steps[a];
            return b.delay ? setTimeout(function () {
                E(a)
            }, b.delay) : E(a), this
        }, this.prevStep = function (a) {
            return B.call(this, a, -1), this
        }, this.nextStep = function (a) {
            var b = x(),
                c = h.getStepTarget(b);
            return b.nextOnTargetClick && h.removeEvtListener(c, "click", y), B.call(this, a, 1), this
        }, this.endTour = function (a, b) {
            var c = v();
            return a = h.valOrDefault(a, !0), b = h.valOrDefault(b, !0), m = 0, r = void 0, c.hide(), a && h.clearState(w("cookieName")), this.isActive && (this.isActive = !1, k && b && h.invokeEventCallbacks("end")), this.removeCallbacks(null, !0), this.resetDefaultOptions(), k = null, this
        }, this.getCurrTour = function () {
            return k
        }, this.getCurrTarget = function () {
			
            return h.getStepTarget(x())
			
        }, this.getCurrStepNum = function () {
            return m
        }, this.listen = function (a, b, c) {
            return a && i[a].push({
                cb: b,
                fromTour: c
            }), this
        }, this.unlisten = function (a, b) {
            var c, d, e = i[a];
            for (c = 0, d = e.length; d > c; ++c) e[c] === b && e.splice(c, 1);
            return this
        }, this.removeCallbacks = function (a, b) {
            var c, d, e, f;
            for (f in i) if (!a || a === f) if (b) for (c = i[f], d = 0, e = c.length; e > d; ++d) c[d].fromTour && (c.splice(d--, 1), --e);
            else i[f] = [];
            return this
        }, this.registerHelper = function (a, b) {
            "string" == typeof a && "function" == typeof b && (j[a] = b)
        }, this.unregisterHelper = function (a) {
            j[a] = null
        }, this.invokeHelper = function (a) {
            var b, c, d = [];
            for (b = 1, c = arguments.length; c > b; ++b) d.push(arguments[b]);
            j[a] && j[a].call(null, d)
        }, this.setCookieName = function (a) {
            return f.cookieName = a, this
        }, this.resetDefaultOptions = function () {
            return f = {}, this
        }, this.resetDefaultI18N = function () {
            return g = {}, this
        }, this.getState = function () {
            return h.getState(w("cookieName"))
        }, t = function (a, b) {
            var c, d, e, i, j = ["next", "prev", "start", "end", "show", "error", "close"];
            for (f || this.resetDefaultOptions(), h.extend(f, a), a && h.extend(g, a.i18n), e = 0, i = j.length; i > e; ++e) d = "on" + j[e].charAt(0).toUpperCase() + j[e].substring(1), a[d] && this.listen(j[e], a[d], b);
            return c = v(!0), this
        }, this.configure = function (a) {
            return t.call(this, a, !1)
        }, F.call(this, a)
    }, n = new c, a[b] = n)
	
	  	  	
		
}(window, "hopscotch");
