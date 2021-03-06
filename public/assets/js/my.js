! function() {
    "use strict";

    function e(e) {
        return null !== e && "object" == typeof e && "constructor" in e && e.constructor === Object
    }

    function t(s = {}, i = {}) {
        Object.keys(i).forEach((n => {
            void 0 === s[n] ? s[n] = i[n] : e(i[n]) && e(s[n]) && Object.keys(i[n]).length > 0 && t(s[n], i[n])
        }))
    }
    const s = {
        body: {},
        addEventListener() {},
        removeEventListener() {},
        activeElement: {
            blur() {},
            nodeName: ""
        },
        querySelector: () => null,
        querySelectorAll: () => [],
        getElementById: () => null,
        createEvent: () => ({
            initEvent() {}
        }),
        createElement: () => ({
            children: [],
            childNodes: [],
            style: {},
            setAttribute() {},
            getElementsByTagName: () => []
        }),
        createElementNS: () => ({}),
        importNode: () => null,
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: ""
        }
    };

    function i() {
        const e = "undefined" != typeof document ? document : {};
        return t(e, s), e
    }
    const n = {
        document: s,
        navigator: {
            userAgent: ""
        },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: ""
        },
        history: {
            replaceState() {},
            pushState() {},
            go() {},
            back() {}
        },
        CustomEvent: function() {
            return this
        },
        addEventListener() {},
        removeEventListener() {},
        getComputedStyle: () => ({
            getPropertyValue: () => ""
        }),
        Image() {},
        Date() {},
        screen: {},
        setTimeout() {},
        clearTimeout() {},
        matchMedia: () => ({}),
        requestAnimationFrame: e => "undefined" == typeof setTimeout ? (e(), null) : setTimeout(e, 0),
        cancelAnimationFrame(e) {
            "undefined" != typeof setTimeout && clearTimeout(e)
        }
    };

    function r() {
        const e = "undefined" != typeof window ? window : {};
        return t(e, n), e
    }
    class a extends Array {
        constructor(e) {
            "number" == typeof e ? super(e) : (super(...e || []), function(e) {
                const t = e.__proto__;
                Object.defineProperty(e, "__proto__", {
                    get: () => t,
                    set(e) {
                        t.__proto__ = e
                    }
                })
            }(this))
        }
    }

    function o(e = []) {
        const t = [];
        return e.forEach((e => {
            Array.isArray(e) ? t.push(...o(e)) : t.push(e)
        })), t
    }

    function l(e, t) {
        return Array.prototype.filter.call(e, t)
    }

    function c(e, t) {
        const s = r(),
            n = i();
        let o = [];
        if (!t && e instanceof a) return e;
        if (!e) return new a(o);
        if ("string" == typeof e) {
            const s = e.trim();
            if (s.indexOf("<") >= 0 && s.indexOf(">") >= 0) {
                let e = "div";
                0 === s.indexOf("<li") && (e = "ul"), 0 === s.indexOf("<tr") && (e = "tbody"), 0 !== s.indexOf("<td") && 0 !== s.indexOf("<th") || (e = "tr"), 0 === s.indexOf("<tbody") && (e = "table"), 0 === s.indexOf("<option") && (e = "select");
                const t = n.createElement(e);
                t.innerHTML = s;
                for (let e = 0; e < t.childNodes.length; e += 1) o.push(t.childNodes[e])
            } else o = function(e, t) {
                if ("string" != typeof e) return [e];
                const s = [],
                    i = t.querySelectorAll(e);
                for (let e = 0; e < i.length; e += 1) s.push(i[e]);
                return s
            }(e.trim(), t || n)
        } else if (e.nodeType || e === s || e === n) o.push(e);
        else if (Array.isArray(e)) {
            if (e instanceof a) return e;
            o = e
        }
        return new a(function(e) {
            const t = [];
            for (let s = 0; s < e.length; s += 1) - 1 === t.indexOf(e[s]) && t.push(e[s]);
            return t
        }(o))
    }
    c.fn = a.prototype;
    const d = "resize scroll".split(" ");

    function p(e) {
        return function(...t) {
            if (void 0 === t[0]) {
                for (let t = 0; t < this.length; t += 1) d.indexOf(e) < 0 && (e in this[t] ? this[t][e]() : c(this[t]).trigger(e));
                return this
            }
            return this.on(e, ...t)
        }
    }
    p("click"), p("blur"), p("focus"), p("focusin"), p("focusout"), p("keyup"), p("keydown"), p("keypress"), p("submit"), p("change"), p("mousedown"), p("mousemove"), p("mouseup"), p("mouseenter"), p("mouseleave"), p("mouseout"), p("mouseover"), p("touchstart"), p("touchend"), p("touchmove"), p("resize"), p("scroll");
    const u = {
        addClass: function(...e) {
            const t = o(e.map((e => e.split(" "))));
            return this.forEach((e => {
                e.classList.add(...t)
            })), this
        },
        removeClass: function(...e) {
            const t = o(e.map((e => e.split(" "))));
            return this.forEach((e => {
                e.classList.remove(...t)
            })), this
        },
        hasClass: function(...e) {
            const t = o(e.map((e => e.split(" "))));
            return l(this, (e => t.filter((t => e.classList.contains(t))).length > 0)).length > 0
        },
        toggleClass: function(...e) {
            const t = o(e.map((e => e.split(" "))));
            this.forEach((e => {
                t.forEach((t => {
                    e.classList.toggle(t)
                }))
            }))
        },
        attr: function(e, t) {
            if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
            for (let s = 0; s < this.length; s += 1)
                if (2 === arguments.length) this[s].setAttribute(e, t);
                else
                    for (const t in e) this[s][t] = e[t], this[s].setAttribute(t, e[t]);
            return this
        },
        removeAttr: function(e) {
            for (let t = 0; t < this.length; t += 1) this[t].removeAttribute(e);
            return this
        },
        transform: function(e) {
            for (let t = 0; t < this.length; t += 1) this[t].style.transform = e;
            return this
        },
        transition: function(e) {
            for (let t = 0; t < this.length; t += 1) this[t].style.transitionDuration = "string" != typeof e ? `${e}ms` : e;
            return this
        },
        on: function(...e) {
            let [t, s, i, n] = e;

            function r(e) {
                const t = e.target;
                if (!t) return;
                const n = e.target.dom7EventData || [];
                if (n.indexOf(e) < 0 && n.unshift(e), c(t).is(s)) i.apply(t, n);
                else {
                    const e = c(t).parents();
                    for (let t = 0; t < e.length; t += 1) c(e[t]).is(s) && i.apply(e[t], n)
                }
            }

            function a(e) {
                const t = e && e.target && e.target.dom7EventData || [];
                t.indexOf(e) < 0 && t.unshift(e), i.apply(this, t)
            }
            "function" == typeof e[1] && ([t, i, n] = e, s = void 0), n || (n = !1);
            const o = t.split(" ");
            let l;
            for (let e = 0; e < this.length; e += 1) {
                const t = this[e];
                if (s)
                    for (l = 0; l < o.length; l += 1) {
                        const e = o[l];
                        t.dom7LiveListeners || (t.dom7LiveListeners = {}), t.dom7LiveListeners[e] || (t.dom7LiveListeners[e] = []), t.dom7LiveListeners[e].push({
                            listener: i,
                            proxyListener: r
                        }), t.addEventListener(e, r, n)
                    } else
                    for (l = 0; l < o.length; l += 1) {
                        const e = o[l];
                        t.dom7Listeners || (t.dom7Listeners = {}), t.dom7Listeners[e] || (t.dom7Listeners[e] = []), t.dom7Listeners[e].push({
                            listener: i,
                            proxyListener: a
                        }), t.addEventListener(e, a, n)
                    }
            }
            return this
        },
        off: function(...e) {
            let [t, s, i, n] = e;
            "function" == typeof e[1] && ([t, i, n] = e, s = void 0), n || (n = !1);
            const r = t.split(" ");
            for (let e = 0; e < r.length; e += 1) {
                const t = r[e];
                for (let e = 0; e < this.length; e += 1) {
                    const r = this[e];
                    let a;
                    if (!s && r.dom7Listeners ? a = r.dom7Listeners[t] : s && r.dom7LiveListeners && (a = r.dom7LiveListeners[t]), a && a.length)
                        for (let e = a.length - 1; e >= 0; e -= 1) {
                            const s = a[e];
                            i && s.listener === i || i && s.listener && s.listener.dom7proxy && s.listener.dom7proxy === i ? (r.removeEventListener(t, s.proxyListener, n), a.splice(e, 1)) : i || (r.removeEventListener(t, s.proxyListener, n), a.splice(e, 1))
                        }
                }
            }
            return this
        },
        trigger: function(...e) {
            const t = r(),
                s = e[0].split(" "),
                i = e[1];
            for (let n = 0; n < s.length; n += 1) {
                const r = s[n];
                for (let s = 0; s < this.length; s += 1) {
                    const n = this[s];
                    if (t.CustomEvent) {
                        const s = new t.CustomEvent(r, {
                            detail: i,
                            bubbles: !0,
                            cancelable: !0
                        });
                        n.dom7EventData = e.filter(((e, t) => t > 0)), n.dispatchEvent(s), n.dom7EventData = [], delete n.dom7EventData
                    }
                }
            }
            return this
        },
        transitionEnd: function(e) {
            const t = this;
            return e && t.on("transitionend", (function s(i) {
                i.target === this && (e.call(this, i), t.off("transitionend", s))
            })), this
        },
        outerWidth: function(e) {
            if (this.length > 0) {
                if (e) {
                    const e = this.styles();
                    return this[0].offsetWidth + parseFloat(e.getPropertyValue("margin-right")) + parseFloat(e.getPropertyValue("margin-left"))
                }
                return this[0].offsetWidth
            }
            return null
        },
        outerHeight: function(e) {
            if (this.length > 0) {
                if (e) {
                    const e = this.styles();
                    return this[0].offsetHeight + parseFloat(e.getPropertyValue("margin-top")) + parseFloat(e.getPropertyValue("margin-bottom"))
                }
                return this[0].offsetHeight
            }
            return null
        },
        styles: function() {
            const e = r();
            return this[0] ? e.getComputedStyle(this[0], null) : {}
        },
        offset: function() {
            if (this.length > 0) {
                const e = r(),
                    t = i(),
                    s = this[0],
                    n = s.getBoundingClientRect(),
                    a = t.body,
                    o = s.clientTop || a.clientTop || 0,
                    l = s.clientLeft || a.clientLeft || 0,
                    c = s === e ? e.scrollY : s.scrollTop,
                    d = s === e ? e.scrollX : s.scrollLeft;
                return {
                    top: n.top + c - o,
                    left: n.left + d - l
                }
            }
            return null
        },
        css: function(e, t) {
            const s = r();
            let i;
            if (1 === arguments.length) {
                if ("string" != typeof e) {
                    for (i = 0; i < this.length; i += 1)
                        for (const t in e) this[i].style[t] = e[t];
                    return this
                }
                if (this[0]) return s.getComputedStyle(this[0], null).getPropertyValue(e)
            }
            if (2 === arguments.length && "string" == typeof e) {
                for (i = 0; i < this.length; i += 1) this[i].style[e] = t;
                return this
            }
            return this
        },
        each: function(e) {
            return e ? (this.forEach(((t, s) => {
                e.apply(t, [t, s])
            })), this) : this
        },
        html: function(e) {
            if (void 0 === e) return this[0] ? this[0].innerHTML : null;
            for (let t = 0; t < this.length; t += 1) this[t].innerHTML = e;
            return this
        },
        text: function(e) {
            if (void 0 === e) return this[0] ? this[0].textContent.trim() : null;
            for (let t = 0; t < this.length; t += 1) this[t].textContent = e;
            return this
        },
        is: function(e) {
            const t = r(),
                s = i(),
                n = this[0];
            let o, l;
            if (!n || void 0 === e) return !1;
            if ("string" == typeof e) {
                if (n.matches) return n.matches(e);
                if (n.webkitMatchesSelector) return n.webkitMatchesSelector(e);
                if (n.msMatchesSelector) return n.msMatchesSelector(e);
                for (o = c(e), l = 0; l < o.length; l += 1)
                    if (o[l] === n) return !0;
                return !1
            }
            if (e === s) return n === s;
            if (e === t) return n === t;
            if (e.nodeType || e instanceof a) {
                for (o = e.nodeType ? [e] : e, l = 0; l < o.length; l += 1)
                    if (o[l] === n) return !0;
                return !1
            }
            return !1
        },
        index: function() {
            let e, t = this[0];
            if (t) {
                for (e = 0; null !== (t = t.previousSibling);) 1 === t.nodeType && (e += 1);
                return e
            }
        },
        eq: function(e) {
            if (void 0 === e) return this;
            const t = this.length;
            if (e > t - 1) return c([]);
            if (e < 0) {
                const s = t + e;
                return c(s < 0 ? [] : [this[s]])
            }
            return c([this[e]])
        },
        append: function(...e) {
            let t;
            const s = i();
            for (let i = 0; i < e.length; i += 1) {
                t = e[i];
                for (let e = 0; e < this.length; e += 1)
                    if ("string" == typeof t) {
                        const i = s.createElement("div");
                        for (i.innerHTML = t; i.firstChild;) this[e].appendChild(i.firstChild)
                    } else if (t instanceof a)
                        for (let s = 0; s < t.length; s += 1) this[e].appendChild(t[s]);
                    else this[e].appendChild(t)
            }
            return this
        },
        prepend: function(e) {
            const t = i();
            let s, n;
            for (s = 0; s < this.length; s += 1)
                if ("string" == typeof e) {
                    const i = t.createElement("div");
                    for (i.innerHTML = e, n = i.childNodes.length - 1; n >= 0; n -= 1) this[s].insertBefore(i.childNodes[n], this[s].childNodes[0])
                } else if (e instanceof a)
                    for (n = 0; n < e.length; n += 1) this[s].insertBefore(e[n], this[s].childNodes[0]);
                else this[s].insertBefore(e, this[s].childNodes[0]);
            return this
        },
        next: function(e) {
            return this.length > 0 ? e ? this[0].nextElementSibling && c(this[0].nextElementSibling).is(e) ? c([this[0].nextElementSibling]) : c([]) : this[0].nextElementSibling ? c([this[0].nextElementSibling]) : c([]) : c([])
        },
        nextAll: function(e) {
            const t = [];
            let s = this[0];
            if (!s) return c([]);
            for (; s.nextElementSibling;) {
                const i = s.nextElementSibling;
                e ? c(i).is(e) && t.push(i) : t.push(i), s = i
            }
            return c(t)
        },
        prev: function(e) {
            if (this.length > 0) {
                const t = this[0];
                return e ? t.previousElementSibling && c(t.previousElementSibling).is(e) ? c([t.previousElementSibling]) : c([]) : t.previousElementSibling ? c([t.previousElementSibling]) : c([])
            }
            return c([])
        },
        prevAll: function(e) {
            const t = [];
            let s = this[0];
            if (!s) return c([]);
            for (; s.previousElementSibling;) {
                const i = s.previousElementSibling;
                e ? c(i).is(e) && t.push(i) : t.push(i), s = i
            }
            return c(t)
        },
        parent: function(e) {
            const t = [];
            for (let s = 0; s < this.length; s += 1) null !== this[s].parentNode && (e ? c(this[s].parentNode).is(e) && t.push(this[s].parentNode) : t.push(this[s].parentNode));
            return c(t)
        },
        parents: function(e) {
            const t = [];
            for (let s = 0; s < this.length; s += 1) {
                let i = this[s].parentNode;
                for (; i;) e ? c(i).is(e) && t.push(i) : t.push(i), i = i.parentNode
            }
            return c(t)
        },
        closest: function(e) {
            let t = this;
            return void 0 === e ? c([]) : (t.is(e) || (t = t.parents(e).eq(0)), t)
        },
        find: function(e) {
            const t = [];
            for (let s = 0; s < this.length; s += 1) {
                const i = this[s].querySelectorAll(e);
                for (let e = 0; e < i.length; e += 1) t.push(i[e])
            }
            return c(t)
        },
        children: function(e) {
            const t = [];
            for (let s = 0; s < this.length; s += 1) {
                const i = this[s].children;
                for (let s = 0; s < i.length; s += 1) e && !c(i[s]).is(e) || t.push(i[s])
            }
            return c(t)
        },
        filter: function(e) {
            return c(l(this, e))
        },
        remove: function() {
            for (let e = 0; e < this.length; e += 1) this[e].parentNode && this[e].parentNode.removeChild(this[e]);
            return this
        }
    };
    Object.keys(u).forEach((e => {
        Object.defineProperty(c.fn, e, {
            value: u[e],
            writable: !0
        })
    }));
    var h = c;

    function f(e, t) {
        return void 0 === t && (t = 0), setTimeout(e, t)
    }

    function m() {
        return Date.now()
    }

    function v(e) {
        return "object" == typeof e && null !== e && e.constructor && "Object" === Object.prototype.toString.call(e).slice(8, -1)
    }

    function g(e) {
        return "undefined" != typeof window && void 0 !== window.HTMLElement ? e instanceof HTMLElement : e && (1 === e.nodeType || 11 === e.nodeType)
    }

    function b() {
        const e = Object(arguments.length <= 0 ? void 0 : arguments[0]),
            t = ["__proto__", "constructor", "prototype"];
        for (let s = 1; s < arguments.length; s += 1) {
            const i = s < 0 || arguments.length <= s ? void 0 : arguments[s];
            if (null != i && !g(i)) {
                const s = Object.keys(Object(i)).filter((e => t.indexOf(e) < 0));
                for (let t = 0, n = s.length; t < n; t += 1) {
                    const n = s[t],
                        r = Object.getOwnPropertyDescriptor(i, n);
                    void 0 !== r && r.enumerable && (v(e[n]) && v(i[n]) ? i[n].__swiper__ ? e[n] = i[n] : b(e[n], i[n]) : !v(e[n]) && v(i[n]) ? (e[n] = {}, i[n].__swiper__ ? e[n] = i[n] : b(e[n], i[n])) : e[n] = i[n])
                }
            }
        }
        return e
    }

    function w(e, t, s) {
        e.style.setProperty(t, s)
    }

    function y(e) {
        let {
            swiper: t,
            targetPosition: s,
            side: i
        } = e;
        const n = r(),
            a = -t.translate;
        let o, l = null;
        const c = t.params.speed;
        t.wrapperEl.style.scrollSnapType = "none", n.cancelAnimationFrame(t.cssModeFrameID);
        const d = s > a ? "next" : "prev",
            p = (e, t) => "next" === d && e >= t || "prev" === d && e <= t,
            u = () => {
                o = (new Date).getTime(), null === l && (l = o);
                const e = Math.max(Math.min((o - l) / c, 1), 0),
                    r = .5 - Math.cos(e * Math.PI) / 2;
                let d = a + r * (s - a);
                if (p(d, s) && (d = s), t.wrapperEl.scrollTo({
                    [i]: d
                }), p(d, s)) return t.wrapperEl.style.overflow = "hidden", t.wrapperEl.style.scrollSnapType = "", setTimeout((() => {
                    t.wrapperEl.style.overflow = "", t.wrapperEl.scrollTo({
                        [i]: d
                    })
                })), void n.cancelAnimationFrame(t.cssModeFrameID);
                t.cssModeFrameID = n.requestAnimationFrame(u)
            };
        u()
    }
    let C, S, T;

    function E() {
        return C || (C = function() {
            const e = r(),
                t = i();
            return {
                smoothScroll: t.documentElement && "scrollBehavior" in t.documentElement.style,
                touch: !!("ontouchstart" in e || e.DocumentTouch && t instanceof e.DocumentTouch),
                passiveListener: function() {
                    let t = !1;
                    try {
                        const s = Object.defineProperty({}, "passive", {
                            get() {
                                t = !0
                            }
                        });
                        e.addEventListener("testPassiveListener", null, s)
                    } catch (e) {}
                    return t
                }(),
                gestures: "ongesturestart" in e
            }
        }()), C
    }
    var x = {
            on(e, t, s) {
                const i = this;
                if ("function" != typeof t) return i;
                const n = s ? "unshift" : "push";
                return e.split(" ").forEach((e => {
                    i.eventsListeners[e] || (i.eventsListeners[e] = []), i.eventsListeners[e][n](t)
                })), i
            },
            once(e, t, s) {
                const i = this;
                if ("function" != typeof t) return i;

                function n() {
                    i.off(e, n), n.__emitterProxy && delete n.__emitterProxy;
                    for (var s = arguments.length, r = new Array(s), a = 0; a < s; a++) r[a] = arguments[a];
                    t.apply(i, r)
                }
                return n.__emitterProxy = t, i.on(e, n, s)
            },
            onAny(e, t) {
                const s = this;
                if ("function" != typeof e) return s;
                const i = t ? "unshift" : "push";
                return s.eventsAnyListeners.indexOf(e) < 0 && s.eventsAnyListeners[i](e), s
            },
            offAny(e) {
                const t = this;
                if (!t.eventsAnyListeners) return t;
                const s = t.eventsAnyListeners.indexOf(e);
                return s >= 0 && t.eventsAnyListeners.splice(s, 1), t
            },
            off(e, t) {
                const s = this;
                return s.eventsListeners ? (e.split(" ").forEach((e => {
                    void 0 === t ? s.eventsListeners[e] = [] : s.eventsListeners[e] && s.eventsListeners[e].forEach(((i, n) => {
                        (i === t || i.__emitterProxy && i.__emitterProxy === t) && s.eventsListeners[e].splice(n, 1)
                    }))
                })), s) : s
            },
            emit() {
                const e = this;
                if (!e.eventsListeners) return e;
                let t, s, i;
                for (var n = arguments.length, r = new Array(n), a = 0; a < n; a++) r[a] = arguments[a];
                return "string" == typeof r[0] || Array.isArray(r[0]) ? (t = r[0], s = r.slice(1, r.length), i = e) : (t = r[0].events, s = r[0].data, i = r[0].context || e), s.unshift(i), (Array.isArray(t) ? t : t.split(" ")).forEach((t => {
                    e.eventsAnyListeners && e.eventsAnyListeners.length && e.eventsAnyListeners.forEach((e => {
                        e.apply(i, [t, ...s])
                    })), e.eventsListeners && e.eventsListeners[t] && e.eventsListeners[t].forEach((e => {
                        e.apply(i, s)
                    }))
                })), e
            }
        },
        k = {
            updateSize: function() {
                const e = this;
                let t, s;
                const i = e.$el;
                t = void 0 !== e.params.width && null !== e.params.width ? e.params.width : i[0].clientWidth, s = void 0 !== e.params.height && null !== e.params.height ? e.params.height : i[0].clientHeight, 0 === t && e.isHorizontal() || 0 === s && e.isVertical() || (t = t - parseInt(i.css("padding-left") || 0, 10) - parseInt(i.css("padding-right") || 0, 10), s = s - parseInt(i.css("padding-top") || 0, 10) - parseInt(i.css("padding-bottom") || 0, 10), Number.isNaN(t) && (t = 0), Number.isNaN(s) && (s = 0), Object.assign(e, {
                    width: t,
                    height: s,
                    size: e.isHorizontal() ? t : s
                }))
            },
            updateSlides: function() {
                const e = this;

                function t(t) {
                    return e.isHorizontal() ? t : {
                        width: "height",
                        "margin-top": "margin-left",
                        "margin-bottom ": "margin-right",
                        "margin-left": "margin-top",
                        "margin-right": "margin-bottom",
                        "padding-left": "padding-top",
                        "padding-right": "padding-bottom",
                        marginRight: "marginBottom"
                    } [t]
                }

                function s(e, s) {
                    return parseFloat(e.getPropertyValue(t(s)) || 0)
                }
                const i = e.params,
                    {
                        $wrapperEl: n,
                        size: r,
                        rtlTranslate: a,
                        wrongRTL: o
                    } = e,
                    l = e.virtual && i.virtual.enabled,
                    c = l ? e.virtual.slides.length : e.slides.length,
                    d = n.children(`.${e.params.slideClass}`),
                    p = l ? e.virtual.slides.length : d.length;
                let u = [];
                const h = [],
                    f = [];
                let m = i.slidesOffsetBefore;
                "function" == typeof m && (m = i.slidesOffsetBefore.call(e));
                let v = i.slidesOffsetAfter;
                "function" == typeof v && (v = i.slidesOffsetAfter.call(e));
                const g = e.snapGrid.length,
                    b = e.slidesGrid.length;
                let y = i.spaceBetween,
                    C = -m,
                    S = 0,
                    T = 0;
                if (void 0 === r) return;
                "string" == typeof y && y.indexOf("%") >= 0 && (y = parseFloat(y.replace("%", "")) / 100 * r), e.virtualSize = -y, a ? d.css({
                    marginLeft: "",
                    marginBottom: "",
                    marginTop: ""
                }) : d.css({
                    marginRight: "",
                    marginBottom: "",
                    marginTop: ""
                }), i.centeredSlides && i.cssMode && (w(e.wrapperEl, "--swiper-centered-offset-before", ""), w(e.wrapperEl, "--swiper-centered-offset-after", ""));
                const E = i.grid && i.grid.rows > 1 && e.grid;
                let x;
                E && e.grid.initSlides(p);
                const k = "auto" === i.slidesPerView && i.breakpoints && Object.keys(i.breakpoints).filter((e => void 0 !== i.breakpoints[e].slidesPerView)).length > 0;
                for (let n = 0; n < p; n += 1) {
                    x = 0;
                    const a = d.eq(n);
                    if (E && e.grid.updateSlide(n, a, p, t), "none" !== a.css("display")) {
                        if ("auto" === i.slidesPerView) {
                            k && (d[n].style[t("width")] = "");
                            const r = getComputedStyle(a[0]),
                                o = a[0].style.transform,
                                l = a[0].style.webkitTransform;
                            if (o && (a[0].style.transform = "none"), l && (a[0].style.webkitTransform = "none"), i.roundLengths) x = e.isHorizontal() ? a.outerWidth(!0) : a.outerHeight(!0);
                            else {
                                const e = s(r, "width"),
                                    t = s(r, "padding-left"),
                                    i = s(r, "padding-right"),
                                    n = s(r, "margin-left"),
                                    o = s(r, "margin-right"),
                                    l = r.getPropertyValue("box-sizing");
                                if (l && "border-box" === l) x = e + n + o;
                                else {
                                    const {
                                        clientWidth: s,
                                        offsetWidth: r
                                    } = a[0];
                                    x = e + t + i + n + o + (r - s)
                                }
                            }
                            o && (a[0].style.transform = o), l && (a[0].style.webkitTransform = l), i.roundLengths && (x = Math.floor(x))
                        } else x = (r - (i.slidesPerView - 1) * y) / i.slidesPerView, i.roundLengths && (x = Math.floor(x)), d[n] && (d[n].style[t("width")] = `${x}px`);
                        d[n] && (d[n].swiperSlideSize = x), f.push(x), i.centeredSlides ? (C = C + x / 2 + S / 2 + y, 0 === S && 0 !== n && (C = C - r / 2 - y), 0 === n && (C = C - r / 2 - y), Math.abs(C) < .001 && (C = 0), i.roundLengths && (C = Math.floor(C)), T % i.slidesPerGroup == 0 && u.push(C), h.push(C)) : (i.roundLengths && (C = Math.floor(C)), (T - Math.min(e.params.slidesPerGroupSkip, T)) % e.params.slidesPerGroup == 0 && u.push(C), h.push(C), C = C + x + y), e.virtualSize += x + y, S = x, T += 1
                    }
                }
                if (e.virtualSize = Math.max(e.virtualSize, r) + v, a && o && ("slide" === i.effect || "coverflow" === i.effect) && n.css({
                    width: `${e.virtualSize+i.spaceBetween}px`
                }), i.setWrapperSize && n.css({
                    [t("width")]: `${e.virtualSize+i.spaceBetween}px`
                }), E && e.grid.updateWrapperSize(x, u, t), !i.centeredSlides) {
                    const t = [];
                    for (let s = 0; s < u.length; s += 1) {
                        let n = u[s];
                        i.roundLengths && (n = Math.floor(n)), u[s] <= e.virtualSize - r && t.push(n)
                    }
                    u = t, Math.floor(e.virtualSize - r) - Math.floor(u[u.length - 1]) > 1 && u.push(e.virtualSize - r)
                }
                if (0 === u.length && (u = [0]), 0 !== i.spaceBetween) {
                    const s = e.isHorizontal() && a ? "marginLeft" : t("marginRight");
                    d.filter(((e, t) => !i.cssMode || t !== d.length - 1)).css({
                        [s]: `${y}px`
                    })
                }
                if (i.centeredSlides && i.centeredSlidesBounds) {
                    let e = 0;
                    f.forEach((t => {
                        e += t + (i.spaceBetween ? i.spaceBetween : 0)
                    })), e -= i.spaceBetween;
                    const t = e - r;
                    u = u.map((e => e < 0 ? -m : e > t ? t + v : e))
                }
                if (i.centerInsufficientSlides) {
                    let e = 0;
                    if (f.forEach((t => {
                        e += t + (i.spaceBetween ? i.spaceBetween : 0)
                    })), e -= i.spaceBetween, e < r) {
                        const t = (r - e) / 2;
                        u.forEach(((e, s) => {
                            u[s] = e - t
                        })), h.forEach(((e, s) => {
                            h[s] = e + t
                        }))
                    }
                }
                if (Object.assign(e, {
                    slides: d,
                    snapGrid: u,
                    slidesGrid: h,
                    slidesSizesGrid: f
                }), i.centeredSlides && i.cssMode && !i.centeredSlidesBounds) {
                    w(e.wrapperEl, "--swiper-centered-offset-before", -u[0] + "px"), w(e.wrapperEl, "--swiper-centered-offset-after", e.size / 2 - f[f.length - 1] / 2 + "px");
                    const t = -e.snapGrid[0],
                        s = -e.slidesGrid[0];
                    e.snapGrid = e.snapGrid.map((e => e + t)), e.slidesGrid = e.slidesGrid.map((e => e + s))
                }
                if (p !== c && e.emit("slidesLengthChange"), u.length !== g && (e.params.watchOverflow && e.checkOverflow(), e.emit("snapGridLengthChange")), h.length !== b && e.emit("slidesGridLengthChange"), i.watchSlidesProgress && e.updateSlidesOffset(), !(l || i.cssMode || "slide" !== i.effect && "fade" !== i.effect)) {
                    const t = `${i.containerModifierClass}backface-hidden`,
                        s = e.$el.hasClass(t);
                    p <= i.maxBackfaceHiddenSlides ? s || e.$el.addClass(t) : s && e.$el.removeClass(t)
                }
            },
            updateAutoHeight: function(e) {
                const t = this,
                    s = [],
                    i = t.virtual && t.params.virtual.enabled;
                let n, r = 0;
                "number" == typeof e ? t.setTransition(e) : !0 === e && t.setTransition(t.params.speed);
                const a = e => i ? t.slides.filter((t => parseInt(t.getAttribute("data-swiper-slide-index"), 10) === e))[0] : t.slides.eq(e)[0];
                if ("auto" !== t.params.slidesPerView && t.params.slidesPerView > 1)
                    if (t.params.centeredSlides) t.visibleSlides.each((e => {
                        s.push(e)
                    }));
                    else
                        for (n = 0; n < Math.ceil(t.params.slidesPerView); n += 1) {
                            const e = t.activeIndex + n;
                            if (e > t.slides.length && !i) break;
                            s.push(a(e))
                        } else s.push(a(t.activeIndex));
                for (n = 0; n < s.length; n += 1)
                    if (void 0 !== s[n]) {
                        const e = s[n].offsetHeight;
                        r = e > r ? e : r
                    }(r || 0 === r) && t.$wrapperEl.css("height", `${r}px`)
            },
            updateSlidesOffset: function() {
                const e = this,
                    t = e.slides;
                for (let s = 0; s < t.length; s += 1) t[s].swiperSlideOffset = e.isHorizontal() ? t[s].offsetLeft : t[s].offsetTop
            },
            updateSlidesProgress: function(e) {
                void 0 === e && (e = this && this.translate || 0);
                const t = this,
                    s = t.params,
                    {
                        slides: i,
                        rtlTranslate: n,
                        snapGrid: r
                    } = t;
                if (0 === i.length) return;
                void 0 === i[0].swiperSlideOffset && t.updateSlidesOffset();
                let a = -e;
                n && (a = e), i.removeClass(s.slideVisibleClass), t.visibleSlidesIndexes = [], t.visibleSlides = [];
                for (let e = 0; e < i.length; e += 1) {
                    const o = i[e];
                    let l = o.swiperSlideOffset;
                    s.cssMode && s.centeredSlides && (l -= i[0].swiperSlideOffset);
                    const c = (a + (s.centeredSlides ? t.minTranslate() : 0) - l) / (o.swiperSlideSize + s.spaceBetween),
                        d = (a - r[0] + (s.centeredSlides ? t.minTranslate() : 0) - l) / (o.swiperSlideSize + s.spaceBetween),
                        p = -(a - l),
                        u = p + t.slidesSizesGrid[e];
                    (p >= 0 && p < t.size - 1 || u > 1 && u <= t.size || p <= 0 && u >= t.size) && (t.visibleSlides.push(o), t.visibleSlidesIndexes.push(e), i.eq(e).addClass(s.slideVisibleClass)), o.progress = n ? -c : c, o.originalProgress = n ? -d : d
                }
                t.visibleSlides = h(t.visibleSlides)
            },
            updateProgress: function(e) {
                const t = this;
                if (void 0 === e) {
                    const s = t.rtlTranslate ? -1 : 1;
                    e = t && t.translate && t.translate * s || 0
                }
                const s = t.params,
                    i = t.maxTranslate() - t.minTranslate();
                let {
                    progress: n,
                    isBeginning: r,
                    isEnd: a
                } = t;
                const o = r,
                    l = a;
                0 === i ? (n = 0, r = !0, a = !0) : (n = (e - t.minTranslate()) / i, r = n <= 0, a = n >= 1), Object.assign(t, {
                    progress: n,
                    isBeginning: r,
                    isEnd: a
                }), (s.watchSlidesProgress || s.centeredSlides && s.autoHeight) && t.updateSlidesProgress(e), r && !o && t.emit("reachBeginning toEdge"), a && !l && t.emit("reachEnd toEdge"), (o && !r || l && !a) && t.emit("fromEdge"), t.emit("progress", n)
            },
            updateSlidesClasses: function() {
                const e = this,
                    {
                        slides: t,
                        params: s,
                        $wrapperEl: i,
                        activeIndex: n,
                        realIndex: r
                    } = e,
                    a = e.virtual && s.virtual.enabled;
                let o;
                t.removeClass(`${s.slideActiveClass} ${s.slideNextClass} ${s.slidePrevClass} ${s.slideDuplicateActiveClass} ${s.slideDuplicateNextClass} ${s.slideDuplicatePrevClass}`), o = a ? e.$wrapperEl.find(`.${s.slideClass}[data-swiper-slide-index="${n}"]`) : t.eq(n), o.addClass(s.slideActiveClass), s.loop && (o.hasClass(s.slideDuplicateClass) ? i.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${r}"]`).addClass(s.slideDuplicateActiveClass) : i.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${r}"]`).addClass(s.slideDuplicateActiveClass));
                let l = o.nextAll(`.${s.slideClass}`).eq(0).addClass(s.slideNextClass);
                s.loop && 0 === l.length && (l = t.eq(0), l.addClass(s.slideNextClass));
                let c = o.prevAll(`.${s.slideClass}`).eq(0).addClass(s.slidePrevClass);
                s.loop && 0 === c.length && (c = t.eq(-1), c.addClass(s.slidePrevClass)), s.loop && (l.hasClass(s.slideDuplicateClass) ? i.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${l.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicateNextClass) : i.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${l.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicateNextClass), c.hasClass(s.slideDuplicateClass) ? i.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${c.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicatePrevClass) : i.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${c.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicatePrevClass)), e.emitSlidesClasses()
            },
            updateActiveIndex: function(e) {
                const t = this,
                    s = t.rtlTranslate ? t.translate : -t.translate,
                    {
                        slidesGrid: i,
                        snapGrid: n,
                        params: r,
                        activeIndex: a,
                        realIndex: o,
                        snapIndex: l
                    } = t;
                let c, d = e;
                if (void 0 === d) {
                    for (let e = 0; e < i.length; e += 1) void 0 !== i[e + 1] ? s >= i[e] && s < i[e + 1] - (i[e + 1] - i[e]) / 2 ? d = e : s >= i[e] && s < i[e + 1] && (d = e + 1) : s >= i[e] && (d = e);
                    r.normalizeSlideIndex && (d < 0 || void 0 === d) && (d = 0)
                }
                if (n.indexOf(s) >= 0) c = n.indexOf(s);
                else {
                    const e = Math.min(r.slidesPerGroupSkip, d);
                    c = e + Math.floor((d - e) / r.slidesPerGroup)
                }
                if (c >= n.length && (c = n.length - 1), d === a) return void(c !== l && (t.snapIndex = c, t.emit("snapIndexChange")));
                const p = parseInt(t.slides.eq(d).attr("data-swiper-slide-index") || d, 10);
                Object.assign(t, {
                    snapIndex: c,
                    realIndex: p,
                    previousIndex: a,
                    activeIndex: d
                }), t.emit("activeIndexChange"), t.emit("snapIndexChange"), o !== p && t.emit("realIndexChange"), (t.initialized || t.params.runCallbacksOnInit) && t.emit("slideChange")
            },
            updateClickedSlide: function(e) {
                const t = this,
                    s = t.params,
                    i = h(e).closest(`.${s.slideClass}`)[0];
                let n, r = !1;
                if (i)
                    for (let e = 0; e < t.slides.length; e += 1)
                        if (t.slides[e] === i) {
                            r = !0, n = e;
                            break
                        } if (!i || !r) return t.clickedSlide = void 0, void(t.clickedIndex = void 0);
                t.clickedSlide = i, t.virtual && t.params.virtual.enabled ? t.clickedIndex = parseInt(h(i).attr("data-swiper-slide-index"), 10) : t.clickedIndex = n, s.slideToClickedSlide && void 0 !== t.clickedIndex && t.clickedIndex !== t.activeIndex && t.slideToClickedSlide()
            }
        };

    function M(e) {
        let {
            swiper: t,
            runCallbacks: s,
            direction: i,
            step: n
        } = e;
        const {
            activeIndex: r,
            previousIndex: a
        } = t;
        let o = i;
        if (o || (o = r > a ? "next" : r < a ? "prev" : "reset"), t.emit(`transition${n}`), s && r !== a) {
            if ("reset" === o) return void t.emit(`slideResetTransition${n}`);
            t.emit(`slideChangeTransition${n}`), "next" === o ? t.emit(`slideNextTransition${n}`) : t.emit(`slidePrevTransition${n}`)
        }
    }
    var L = {
            slideTo: function(e, t, s, i, n) {
                if (void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0), "number" != typeof e && "string" != typeof e) throw new Error(`The 'index' argument cannot have type other than 'number' or 'string'. [${typeof e}] given.`);
                if ("string" == typeof e) {
                    const t = parseInt(e, 10);
                    if (!isFinite(t)) throw new Error(`The passed-in 'index' (string) couldn't be converted to 'number'. [${e}] given.`);
                    e = t
                }
                const r = this;
                let a = e;
                a < 0 && (a = 0);
                const {
                    params: o,
                    snapGrid: l,
                    slidesGrid: c,
                    previousIndex: d,
                    activeIndex: p,
                    rtlTranslate: u,
                    wrapperEl: h,
                    enabled: f
                } = r;
                if (r.animating && o.preventInteractionOnTransition || !f && !i && !n) return !1;
                const m = Math.min(r.params.slidesPerGroupSkip, a);
                let v = m + Math.floor((a - m) / r.params.slidesPerGroup);
                v >= l.length && (v = l.length - 1), (p || o.initialSlide || 0) === (d || 0) && s && r.emit("beforeSlideChangeStart");
                const g = -l[v];
                if (r.updateProgress(g), o.normalizeSlideIndex)
                    for (let e = 0; e < c.length; e += 1) {
                        const t = -Math.floor(100 * g),
                            s = Math.floor(100 * c[e]),
                            i = Math.floor(100 * c[e + 1]);
                        void 0 !== c[e + 1] ? t >= s && t < i - (i - s) / 2 ? a = e : t >= s && t < i && (a = e + 1) : t >= s && (a = e)
                    }
                if (r.initialized && a !== p) {
                    if (!r.allowSlideNext && g < r.translate && g < r.minTranslate()) return !1;
                    if (!r.allowSlidePrev && g > r.translate && g > r.maxTranslate() && (p || 0) !== a) return !1
                }
                let b;
                if (b = a > p ? "next" : a < p ? "prev" : "reset", u && -g === r.translate || !u && g === r.translate) return r.updateActiveIndex(a), o.autoHeight && r.updateAutoHeight(), r.updateSlidesClasses(), "slide" !== o.effect && r.setTranslate(g), "reset" !== b && (r.transitionStart(s, b), r.transitionEnd(s, b)), !1;
                if (o.cssMode) {
                    const e = r.isHorizontal(),
                        s = u ? g : -g;
                    if (0 === t) {
                        const t = r.virtual && r.params.virtual.enabled;
                        t && (r.wrapperEl.style.scrollSnapType = "none", r._immediateVirtual = !0), h[e ? "scrollLeft" : "scrollTop"] = s, t && requestAnimationFrame((() => {
                            r.wrapperEl.style.scrollSnapType = "", r._swiperImmediateVirtual = !1
                        }))
                    } else {
                        if (!r.support.smoothScroll) return y({
                            swiper: r,
                            targetPosition: s,
                            side: e ? "left" : "top"
                        }), !0;
                        h.scrollTo({
                            [e ? "left" : "top"]: s,
                            behavior: "smooth"
                        })
                    }
                    return !0
                }
                return r.setTransition(t), r.setTranslate(g), r.updateActiveIndex(a), r.updateSlidesClasses(), r.emit("beforeTransitionStart", t, i), r.transitionStart(s, b), 0 === t ? r.transitionEnd(s, b) : r.animating || (r.animating = !0, r.onSlideToWrapperTransitionEnd || (r.onSlideToWrapperTransitionEnd = function(e) {
                    r && !r.destroyed && e.target === this && (r.$wrapperEl[0].removeEventListener("transitionend", r.onSlideToWrapperTransitionEnd), r.$wrapperEl[0].removeEventListener("webkitTransitionEnd", r.onSlideToWrapperTransitionEnd), r.onSlideToWrapperTransitionEnd = null, delete r.onSlideToWrapperTransitionEnd, r.transitionEnd(s, b))
                }), r.$wrapperEl[0].addEventListener("transitionend", r.onSlideToWrapperTransitionEnd), r.$wrapperEl[0].addEventListener("webkitTransitionEnd", r.onSlideToWrapperTransitionEnd)), !0
            },
            slideToLoop: function(e, t, s, i) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0);
                const n = this;
                let r = e;
                return n.params.loop && (r += n.loopedSlides), n.slideTo(r, t, s, i)
            },
            slideNext: function(e, t, s) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                const i = this,
                    {
                        animating: n,
                        enabled: r,
                        params: a
                    } = i;
                if (!r) return i;
                let o = a.slidesPerGroup;
                "auto" === a.slidesPerView && 1 === a.slidesPerGroup && a.slidesPerGroupAuto && (o = Math.max(i.slidesPerViewDynamic("current", !0), 1));
                const l = i.activeIndex < a.slidesPerGroupSkip ? 1 : o;
                if (a.loop) {
                    if (n && a.loopPreventsSlide) return !1;
                    i.loopFix(), i._clientLeft = i.$wrapperEl[0].clientLeft
                }
                return a.rewind && i.isEnd ? i.slideTo(0, e, t, s) : i.slideTo(i.activeIndex + l, e, t, s)
            },
            slidePrev: function(e, t, s) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                const i = this,
                    {
                        params: n,
                        animating: r,
                        snapGrid: a,
                        slidesGrid: o,
                        rtlTranslate: l,
                        enabled: c
                    } = i;
                if (!c) return i;
                if (n.loop) {
                    if (r && n.loopPreventsSlide) return !1;
                    i.loopFix(), i._clientLeft = i.$wrapperEl[0].clientLeft
                }

                function d(e) {
                    return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e)
                }
                const p = d(l ? i.translate : -i.translate),
                    u = a.map((e => d(e)));
                let h = a[u.indexOf(p) - 1];
                if (void 0 === h && n.cssMode) {
                    let e;
                    a.forEach(((t, s) => {
                        p >= t && (e = s)
                    })), void 0 !== e && (h = a[e > 0 ? e - 1 : e])
                }
                let f = 0;
                if (void 0 !== h && (f = o.indexOf(h), f < 0 && (f = i.activeIndex - 1), "auto" === n.slidesPerView && 1 === n.slidesPerGroup && n.slidesPerGroupAuto && (f = f - i.slidesPerViewDynamic("previous", !0) + 1, f = Math.max(f, 0))), n.rewind && i.isBeginning) {
                    const n = i.params.virtual && i.params.virtual.enabled && i.virtual ? i.virtual.slides.length - 1 : i.slides.length - 1;
                    return i.slideTo(n, e, t, s)
                }
                return i.slideTo(f, e, t, s)
            },
            slideReset: function(e, t, s) {
                return void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), this.slideTo(this.activeIndex, e, t, s)
            },
            slideToClosest: function(e, t, s, i) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), void 0 === i && (i = .5);
                const n = this;
                let r = n.activeIndex;
                const a = Math.min(n.params.slidesPerGroupSkip, r),
                    o = a + Math.floor((r - a) / n.params.slidesPerGroup),
                    l = n.rtlTranslate ? n.translate : -n.translate;
                if (l >= n.snapGrid[o]) {
                    const e = n.snapGrid[o];
                    l - e > (n.snapGrid[o + 1] - e) * i && (r += n.params.slidesPerGroup)
                } else {
                    const e = n.snapGrid[o - 1];
                    l - e <= (n.snapGrid[o] - e) * i && (r -= n.params.slidesPerGroup)
                }
                return r = Math.max(r, 0), r = Math.min(r, n.slidesGrid.length - 1), n.slideTo(r, e, t, s)
            },
            slideToClickedSlide: function() {
                const e = this,
                    {
                        params: t,
                        $wrapperEl: s
                    } = e,
                    i = "auto" === t.slidesPerView ? e.slidesPerViewDynamic() : t.slidesPerView;
                let n, r = e.clickedIndex;
                if (t.loop) {
                    if (e.animating) return;
                    n = parseInt(h(e.clickedSlide).attr("data-swiper-slide-index"), 10), t.centeredSlides ? r < e.loopedSlides - i / 2 || r > e.slides.length - e.loopedSlides + i / 2 ? (e.loopFix(), r = s.children(`.${t.slideClass}[data-swiper-slide-index="${n}"]:not(.${t.slideDuplicateClass})`).eq(0).index(), f((() => {
                        e.slideTo(r)
                    }))) : e.slideTo(r) : r > e.slides.length - i ? (e.loopFix(), r = s.children(`.${t.slideClass}[data-swiper-slide-index="${n}"]:not(.${t.slideDuplicateClass})`).eq(0).index(), f((() => {
                        e.slideTo(r)
                    }))) : e.slideTo(r)
                } else e.slideTo(r)
            }
        },
        P = {
            loopCreate: function() {
                const e = this,
                    t = i(),
                    {
                        params: s,
                        $wrapperEl: n
                    } = e,
                    r = n.children().length > 0 ? h(n.children()[0].parentNode) : n;
                r.children(`.${s.slideClass}.${s.slideDuplicateClass}`).remove();
                let a = r.children(`.${s.slideClass}`);
                if (s.loopFillGroupWithBlank) {
                    const e = s.slidesPerGroup - a.length % s.slidesPerGroup;
                    if (e !== s.slidesPerGroup) {
                        for (let i = 0; i < e; i += 1) {
                            const e = h(t.createElement("div")).addClass(`${s.slideClass} ${s.slideBlankClass}`);
                            r.append(e)
                        }
                        a = r.children(`.${s.slideClass}`)
                    }
                }
                "auto" !== s.slidesPerView || s.loopedSlides || (s.loopedSlides = a.length), e.loopedSlides = Math.ceil(parseFloat(s.loopedSlides || s.slidesPerView, 10)), e.loopedSlides += s.loopAdditionalSlides, e.loopedSlides > a.length && (e.loopedSlides = a.length);
                const o = [],
                    l = [];
                a.each(((t, s) => {
                    const i = h(t);
                    s < e.loopedSlides && l.push(t), s < a.length && s >= a.length - e.loopedSlides && o.push(t), i.attr("data-swiper-slide-index", s)
                }));
                for (let e = 0; e < l.length; e += 1) r.append(h(l[e].cloneNode(!0)).addClass(s.slideDuplicateClass));
                for (let e = o.length - 1; e >= 0; e -= 1) r.prepend(h(o[e].cloneNode(!0)).addClass(s.slideDuplicateClass))
            },
            loopFix: function() {
                const e = this;
                e.emit("beforeLoopFix");
                const {
                    activeIndex: t,
                    slides: s,
                    loopedSlides: i,
                    allowSlidePrev: n,
                    allowSlideNext: r,
                    snapGrid: a,
                    rtlTranslate: o
                } = e;
                let l;
                e.allowSlidePrev = !0, e.allowSlideNext = !0;
                const c = -a[t] - e.getTranslate();
                t < i ? (l = s.length - 3 * i + t, l += i, e.slideTo(l, 0, !1, !0) && 0 !== c && e.setTranslate((o ? -e.translate : e.translate) - c)) : t >= s.length - i && (l = -s.length + t + i, l += i, e.slideTo(l, 0, !1, !0) && 0 !== c && e.setTranslate((o ? -e.translate : e.translate) - c)), e.allowSlidePrev = n, e.allowSlideNext = r, e.emit("loopFix")
            },
            loopDestroy: function() {
                const {
                    $wrapperEl: e,
                    params: t,
                    slides: s
                } = this;
                e.children(`.${t.slideClass}.${t.slideDuplicateClass},.${t.slideClass}.${t.slideBlankClass}`).remove(), s.removeAttr("data-swiper-slide-index")
            }
        };

    function $(e) {
        const t = this,
            s = i(),
            n = r(),
            a = t.touchEventsData,
            {
                params: o,
                touches: l,
                enabled: c
            } = t;
        if (!c) return;
        if (t.animating && o.preventInteractionOnTransition) return;
        !t.animating && o.cssMode && o.loop && t.loopFix();
        let d = e;
        d.originalEvent && (d = d.originalEvent);
        let p = h(d.target);
        if ("wrapper" === o.touchEventsTarget && !p.closest(t.wrapperEl).length) return;
        if (a.isTouchEvent = "touchstart" === d.type, !a.isTouchEvent && "which" in d && 3 === d.which) return;
        if (!a.isTouchEvent && "button" in d && d.button > 0) return;
        if (a.isTouched && a.isMoved) return;
        o.noSwipingClass && "" !== o.noSwipingClass && d.target && d.target.shadowRoot && e.path && e.path[0] && (p = h(e.path[0]));
        const u = o.noSwipingSelector ? o.noSwipingSelector : `.${o.noSwipingClass}`,
            f = !(!d.target || !d.target.shadowRoot);
        if (o.noSwiping && (f ? function(e, t) {
            return void 0 === t && (t = this),
                function t(s) {
                    return s && s !== i() && s !== r() ? (s.assignedSlot && (s = s.assignedSlot), s.closest(e) || t(s.getRootNode().host)) : null
                }(t)
        }(u, d.target) : p.closest(u)[0])) return void(t.allowClick = !0);
        if (o.swipeHandler && !p.closest(o.swipeHandler)[0]) return;
        l.currentX = "touchstart" === d.type ? d.targetTouches[0].pageX : d.pageX, l.currentY = "touchstart" === d.type ? d.targetTouches[0].pageY : d.pageY;
        const v = l.currentX,
            g = l.currentY,
            b = o.edgeSwipeDetection || o.iOSEdgeSwipeDetection,
            w = o.edgeSwipeThreshold || o.iOSEdgeSwipeThreshold;
        if (b && (v <= w || v >= n.innerWidth - w)) {
            if ("prevent" !== b) return;
            e.preventDefault()
        }
        if (Object.assign(a, {
            isTouched: !0,
            isMoved: !1,
            allowTouchCallbacks: !0,
            isScrolling: void 0,
            startMoving: void 0
        }), l.startX = v, l.startY = g, a.touchStartTime = m(), t.allowClick = !0, t.updateSize(), t.swipeDirection = void 0, o.threshold > 0 && (a.allowThresholdMove = !1), "touchstart" !== d.type) {
            let e = !0;
            p.is(a.focusableElements) && (e = !1, "SELECT" === p[0].nodeName && (a.isTouched = !1)), s.activeElement && h(s.activeElement).is(a.focusableElements) && s.activeElement !== p[0] && s.activeElement.blur();
            const i = e && t.allowTouchMove && o.touchStartPreventDefault;
            !o.touchStartForcePreventDefault && !i || p[0].isContentEditable || d.preventDefault()
        }
        t.params.freeMode && t.params.freeMode.enabled && t.freeMode && t.animating && !o.cssMode && t.freeMode.onTouchStart(), t.emit("touchStart", d)
    }

    function O(e) {
        const t = i(),
            s = this,
            n = s.touchEventsData,
            {
                params: r,
                touches: a,
                rtlTranslate: o,
                enabled: l
            } = s;
        if (!l) return;
        let c = e;
        if (c.originalEvent && (c = c.originalEvent), !n.isTouched) return void(n.startMoving && n.isScrolling && s.emit("touchMoveOpposite", c));
        if (n.isTouchEvent && "touchmove" !== c.type) return;
        const d = "touchmove" === c.type && c.targetTouches && (c.targetTouches[0] || c.changedTouches[0]),
            p = "touchmove" === c.type ? d.pageX : c.pageX,
            u = "touchmove" === c.type ? d.pageY : c.pageY;
        if (c.preventedByNestedSwiper) return a.startX = p, void(a.startY = u);
        if (!s.allowTouchMove) return h(c.target).is(n.focusableElements) || (s.allowClick = !1), void(n.isTouched && (Object.assign(a, {
            startX: p,
            startY: u,
            currentX: p,
            currentY: u
        }), n.touchStartTime = m()));
        if (n.isTouchEvent && r.touchReleaseOnEdges && !r.loop)
            if (s.isVertical()) {
                if (u < a.startY && s.translate <= s.maxTranslate() || u > a.startY && s.translate >= s.minTranslate()) return n.isTouched = !1, void(n.isMoved = !1)
            } else if (p < a.startX && s.translate <= s.maxTranslate() || p > a.startX && s.translate >= s.minTranslate()) return;
        if (n.isTouchEvent && t.activeElement && c.target === t.activeElement && h(c.target).is(n.focusableElements)) return n.isMoved = !0, void(s.allowClick = !1);
        if (n.allowTouchCallbacks && s.emit("touchMove", c), c.targetTouches && c.targetTouches.length > 1) return;
        a.currentX = p, a.currentY = u;
        const f = a.currentX - a.startX,
            v = a.currentY - a.startY;
        if (s.params.threshold && Math.sqrt(f ** 2 + v ** 2) < s.params.threshold) return;
        if (void 0 === n.isScrolling) {
            let e;
            s.isHorizontal() && a.currentY === a.startY || s.isVertical() && a.currentX === a.startX ? n.isScrolling = !1 : f * f + v * v >= 25 && (e = 180 * Math.atan2(Math.abs(v), Math.abs(f)) / Math.PI, n.isScrolling = s.isHorizontal() ? e > r.touchAngle : 90 - e > r.touchAngle)
        }
        if (n.isScrolling && s.emit("touchMoveOpposite", c), void 0 === n.startMoving && (a.currentX === a.startX && a.currentY === a.startY || (n.startMoving = !0)), n.isScrolling) return void(n.isTouched = !1);
        if (!n.startMoving) return;
        s.allowClick = !1, !r.cssMode && c.cancelable && c.preventDefault(), r.touchMoveStopPropagation && !r.nested && c.stopPropagation(), n.isMoved || (r.loop && !r.cssMode && s.loopFix(), n.startTranslate = s.getTranslate(), s.setTransition(0), s.animating && s.$wrapperEl.trigger("webkitTransitionEnd transitionend"), n.allowMomentumBounce = !1, !r.grabCursor || !0 !== s.allowSlideNext && !0 !== s.allowSlidePrev || s.setGrabCursor(!0), s.emit("sliderFirstMove", c)), s.emit("sliderMove", c), n.isMoved = !0;
        let g = s.isHorizontal() ? f : v;
        a.diff = g, g *= r.touchRatio, o && (g = -g), s.swipeDirection = g > 0 ? "prev" : "next", n.currentTranslate = g + n.startTranslate;
        let b = !0,
            w = r.resistanceRatio;
        if (r.touchReleaseOnEdges && (w = 0), g > 0 && n.currentTranslate > s.minTranslate() ? (b = !1, r.resistance && (n.currentTranslate = s.minTranslate() - 1 + (-s.minTranslate() + n.startTranslate + g) ** w)) : g < 0 && n.currentTranslate < s.maxTranslate() && (b = !1, r.resistance && (n.currentTranslate = s.maxTranslate() + 1 - (s.maxTranslate() - n.startTranslate - g) ** w)), b && (c.preventedByNestedSwiper = !0), !s.allowSlideNext && "next" === s.swipeDirection && n.currentTranslate < n.startTranslate && (n.currentTranslate = n.startTranslate), !s.allowSlidePrev && "prev" === s.swipeDirection && n.currentTranslate > n.startTranslate && (n.currentTranslate = n.startTranslate), s.allowSlidePrev || s.allowSlideNext || (n.currentTranslate = n.startTranslate), r.threshold > 0) {
            if (!(Math.abs(g) > r.threshold || n.allowThresholdMove)) return void(n.currentTranslate = n.startTranslate);
            if (!n.allowThresholdMove) return n.allowThresholdMove = !0, a.startX = a.currentX, a.startY = a.currentY, n.currentTranslate = n.startTranslate, void(a.diff = s.isHorizontal() ? a.currentX - a.startX : a.currentY - a.startY)
        }
        r.followFinger && !r.cssMode && ((r.freeMode && r.freeMode.enabled && s.freeMode || r.watchSlidesProgress) && (s.updateActiveIndex(), s.updateSlidesClasses()), s.params.freeMode && r.freeMode.enabled && s.freeMode && s.freeMode.onTouchMove(), s.updateProgress(n.currentTranslate), s.setTranslate(n.currentTranslate))
    }

    function A(e) {
        const t = this,
            s = t.touchEventsData,
            {
                params: i,
                touches: n,
                rtlTranslate: r,
                slidesGrid: a,
                enabled: o
            } = t;
        if (!o) return;
        let l = e;
        if (l.originalEvent && (l = l.originalEvent), s.allowTouchCallbacks && t.emit("touchEnd", l), s.allowTouchCallbacks = !1, !s.isTouched) return s.isMoved && i.grabCursor && t.setGrabCursor(!1), s.isMoved = !1, void(s.startMoving = !1);
        i.grabCursor && s.isMoved && s.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
        const c = m(),
            d = c - s.touchStartTime;
        if (t.allowClick) {
            const e = l.path || l.composedPath && l.composedPath();
            t.updateClickedSlide(e && e[0] || l.target), t.emit("tap click", l), d < 300 && c - s.lastClickTime < 300 && t.emit("doubleTap doubleClick", l)
        }
        if (s.lastClickTime = m(), f((() => {
            t.destroyed || (t.allowClick = !0)
        })), !s.isTouched || !s.isMoved || !t.swipeDirection || 0 === n.diff || s.currentTranslate === s.startTranslate) return s.isTouched = !1, s.isMoved = !1, void(s.startMoving = !1);
        let p;
        if (s.isTouched = !1, s.isMoved = !1, s.startMoving = !1, p = i.followFinger ? r ? t.translate : -t.translate : -s.currentTranslate, i.cssMode) return;
        if (t.params.freeMode && i.freeMode.enabled) return void t.freeMode.onTouchEnd({
            currentPos: p
        });
        let u = 0,
            h = t.slidesSizesGrid[0];
        for (let e = 0; e < a.length; e += e < i.slidesPerGroupSkip ? 1 : i.slidesPerGroup) {
            const t = e < i.slidesPerGroupSkip - 1 ? 1 : i.slidesPerGroup;
            void 0 !== a[e + t] ? p >= a[e] && p < a[e + t] && (u = e, h = a[e + t] - a[e]) : p >= a[e] && (u = e, h = a[a.length - 1] - a[a.length - 2])
        }
        let v = null,
            g = null;
        i.rewind && (t.isBeginning ? g = t.params.virtual && t.params.virtual.enabled && t.virtual ? t.virtual.slides.length - 1 : t.slides.length - 1 : t.isEnd && (v = 0));
        const b = (p - a[u]) / h,
            w = u < i.slidesPerGroupSkip - 1 ? 1 : i.slidesPerGroup;
        if (d > i.longSwipesMs) {
            if (!i.longSwipes) return void t.slideTo(t.activeIndex);
            "next" === t.swipeDirection && (b >= i.longSwipesRatio ? t.slideTo(i.rewind && t.isEnd ? v : u + w) : t.slideTo(u)), "prev" === t.swipeDirection && (b > 1 - i.longSwipesRatio ? t.slideTo(u + w) : null !== g && b < 0 && Math.abs(b) > i.longSwipesRatio ? t.slideTo(g) : t.slideTo(u))
        } else {
            if (!i.shortSwipes) return void t.slideTo(t.activeIndex);
            !t.navigation || l.target !== t.navigation.nextEl && l.target !== t.navigation.prevEl ? ("next" === t.swipeDirection && t.slideTo(null !== v ? v : u + w), "prev" === t.swipeDirection && t.slideTo(null !== g ? g : u)) : l.target === t.navigation.nextEl ? t.slideTo(u + w) : t.slideTo(u)
        }
    }

    function _() {
        const e = this,
            {
                params: t,
                el: s
            } = e;
        if (s && 0 === s.offsetWidth) return;
        t.breakpoints && e.setBreakpoint();
        const {
            allowSlideNext: i,
            allowSlidePrev: n,
            snapGrid: r
        } = e;
        e.allowSlideNext = !0, e.allowSlidePrev = !0, e.updateSize(), e.updateSlides(), e.updateSlidesClasses(), ("auto" === t.slidesPerView || t.slidesPerView > 1) && e.isEnd && !e.isBeginning && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0), e.autoplay && e.autoplay.running && e.autoplay.paused && e.autoplay.run(), e.allowSlidePrev = n, e.allowSlideNext = i, e.params.watchOverflow && r !== e.snapGrid && e.checkOverflow()
    }

    function z(e) {
        const t = this;
        t.enabled && (t.allowClick || (t.params.preventClicks && e.preventDefault(), t.params.preventClicksPropagation && t.animating && (e.stopPropagation(), e.stopImmediatePropagation())))
    }

    function I() {
        const e = this,
            {
                wrapperEl: t,
                rtlTranslate: s,
                enabled: i
            } = e;
        if (!i) return;
        let n;
        e.previousTranslate = e.translate, e.isHorizontal() ? e.translate = -t.scrollLeft : e.translate = -t.scrollTop, -0 === e.translate && (e.translate = 0), e.updateActiveIndex(), e.updateSlidesClasses();
        const r = e.maxTranslate() - e.minTranslate();
        n = 0 === r ? 0 : (e.translate - e.minTranslate()) / r, n !== e.progress && e.updateProgress(s ? -e.translate : e.translate), e.emit("setTranslate", e.translate, !1)
    }
    let B = !1;

    function G() {}
    const D = (e, t) => {
        const s = i(),
            {
                params: n,
                touchEvents: r,
                el: a,
                wrapperEl: o,
                device: l,
                support: c
            } = e,
            d = !!n.nested,
            p = "on" === t ? "addEventListener" : "removeEventListener",
            u = t;
        if (c.touch) {
            const t = !("touchstart" !== r.start || !c.passiveListener || !n.passiveListeners) && {
                passive: !0,
                capture: !1
            };
            a[p](r.start, e.onTouchStart, t), a[p](r.move, e.onTouchMove, c.passiveListener ? {
                passive: !1,
                capture: d
            } : d), a[p](r.end, e.onTouchEnd, t), r.cancel && a[p](r.cancel, e.onTouchEnd, t)
        } else a[p](r.start, e.onTouchStart, !1), s[p](r.move, e.onTouchMove, d), s[p](r.end, e.onTouchEnd, !1);
        (n.preventClicks || n.preventClicksPropagation) && a[p]("click", e.onClick, !0), n.cssMode && o[p]("scroll", e.onScroll), n.updateOnWindowResize ? e[u](l.ios || l.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", _, !0) : e[u]("observerUpdate", _, !0)
    };
    var N = {
        attachEvents: function() {
            const e = this,
                t = i(),
                {
                    params: s,
                    support: n
                } = e;
            e.onTouchStart = $.bind(e), e.onTouchMove = O.bind(e), e.onTouchEnd = A.bind(e), s.cssMode && (e.onScroll = I.bind(e)), e.onClick = z.bind(e), n.touch && !B && (t.addEventListener("touchstart", G), B = !0), D(e, "on")
        },
        detachEvents: function() {
            D(this, "off")
        }
    };
    const q = (e, t) => e.grid && t.grid && t.grid.rows > 1;
    var j = {
            setBreakpoint: function() {
                const e = this,
                    {
                        activeIndex: t,
                        initialized: s,
                        loopedSlides: i = 0,
                        params: n,
                        $el: r
                    } = e,
                    a = n.breakpoints;
                if (!a || a && 0 === Object.keys(a).length) return;
                const o = e.getBreakpoint(a, e.params.breakpointsBase, e.el);
                if (!o || e.currentBreakpoint === o) return;
                const l = (o in a ? a[o] : void 0) || e.originalParams,
                    c = q(e, n),
                    d = q(e, l),
                    p = n.enabled;
                c && !d ? (r.removeClass(`${n.containerModifierClass}grid ${n.containerModifierClass}grid-column`), e.emitContainerClasses()) : !c && d && (r.addClass(`${n.containerModifierClass}grid`), (l.grid.fill && "column" === l.grid.fill || !l.grid.fill && "column" === n.grid.fill) && r.addClass(`${n.containerModifierClass}grid-column`), e.emitContainerClasses());
                const u = l.direction && l.direction !== n.direction,
                    h = n.loop && (l.slidesPerView !== n.slidesPerView || u);
                u && s && e.changeDirection(), b(e.params, l);
                const f = e.params.enabled;
                Object.assign(e, {
                    allowTouchMove: e.params.allowTouchMove,
                    allowSlideNext: e.params.allowSlideNext,
                    allowSlidePrev: e.params.allowSlidePrev
                }), p && !f ? e.disable() : !p && f && e.enable(), e.currentBreakpoint = o, e.emit("_beforeBreakpoint", l), h && s && (e.loopDestroy(), e.loopCreate(), e.updateSlides(), e.slideTo(t - i + e.loopedSlides, 0, !1)), e.emit("breakpoint", l)
            },
            getBreakpoint: function(e, t, s) {
                if (void 0 === t && (t = "window"), !e || "container" === t && !s) return;
                let i = !1;
                const n = r(),
                    a = "window" === t ? n.innerHeight : s.clientHeight,
                    o = Object.keys(e).map((e => {
                        if ("string" == typeof e && 0 === e.indexOf("@")) {
                            const t = parseFloat(e.substr(1));
                            return {
                                value: a * t,
                                point: e
                            }
                        }
                        return {
                            value: e,
                            point: e
                        }
                    }));
                o.sort(((e, t) => parseInt(e.value, 10) - parseInt(t.value, 10)));
                for (let e = 0; e < o.length; e += 1) {
                    const {
                        point: r,
                        value: a
                    } = o[e];
                    "window" === t ? n.matchMedia(`(min-width: ${a}px)`).matches && (i = r) : a <= s.clientWidth && (i = r)
                }
                return i || "max"
            }
        },
        H = {
            addClasses: function() {
                const e = this,
                    {
                        classNames: t,
                        params: s,
                        rtl: i,
                        $el: n,
                        device: r,
                        support: a
                    } = e,
                    o = function(e, t) {
                        const s = [];
                        return e.forEach((e => {
                            "object" == typeof e ? Object.keys(e).forEach((i => {
                                e[i] && s.push(t + i)
                            })) : "string" == typeof e && s.push(t + e)
                        })), s
                    }(["initialized", s.direction, {
                        "pointer-events": !a.touch
                    }, {
                        "free-mode": e.params.freeMode && s.freeMode.enabled
                    }, {
                        autoheight: s.autoHeight
                    }, {
                        rtl: i
                    }, {
                        grid: s.grid && s.grid.rows > 1
                    }, {
                        "grid-column": s.grid && s.grid.rows > 1 && "column" === s.grid.fill
                    }, {
                        android: r.android
                    }, {
                        ios: r.ios
                    }, {
                        "css-mode": s.cssMode
                    }, {
                        centered: s.cssMode && s.centeredSlides
                    }], s.containerModifierClass);
                t.push(...o), n.addClass([...t].join(" ")), e.emitContainerClasses()
            },
            removeClasses: function() {
                const {
                    $el: e,
                    classNames: t
                } = this;
                e.removeClass(t.join(" ")), this.emitContainerClasses()
            }
        },
        F = {
            init: !0,
            direction: "horizontal",
            touchEventsTarget: "wrapper",
            initialSlide: 0,
            speed: 300,
            cssMode: !1,
            updateOnWindowResize: !0,
            resizeObserver: !0,
            nested: !1,
            createElements: !1,
            enabled: !0,
            focusableElements: "input, select, option, textarea, button, video, label",
            width: null,
            height: null,
            preventInteractionOnTransition: !1,
            userAgent: null,
            url: null,
            edgeSwipeDetection: !1,
            edgeSwipeThreshold: 20,
            autoHeight: !1,
            setWrapperSize: !1,
            virtualTranslate: !1,
            effect: "slide",
            breakpoints: void 0,
            breakpointsBase: "window",
            spaceBetween: 0,
            slidesPerView: 1,
            slidesPerGroup: 1,
            slidesPerGroupSkip: 0,
            slidesPerGroupAuto: !1,
            centeredSlides: !1,
            centeredSlidesBounds: !1,
            slidesOffsetBefore: 0,
            slidesOffsetAfter: 0,
            normalizeSlideIndex: !0,
            centerInsufficientSlides: !1,
            watchOverflow: !0,
            roundLengths: !1,
            touchRatio: 1,
            touchAngle: 45,
            simulateTouch: !0,
            shortSwipes: !0,
            longSwipes: !0,
            longSwipesRatio: .5,
            longSwipesMs: 300,
            followFinger: !0,
            allowTouchMove: !0,
            threshold: 0,
            touchMoveStopPropagation: !1,
            touchStartPreventDefault: !0,
            touchStartForcePreventDefault: !1,
            touchReleaseOnEdges: !1,
            uniqueNavElements: !0,
            resistance: !0,
            resistanceRatio: .85,
            watchSlidesProgress: !1,
            grabCursor: !1,
            preventClicks: !0,
            preventClicksPropagation: !0,
            slideToClickedSlide: !1,
            preloadImages: !0,
            updateOnImagesReady: !0,
            loop: !1,
            loopAdditionalSlides: 0,
            loopedSlides: null,
            loopFillGroupWithBlank: !1,
            loopPreventsSlide: !0,
            rewind: !1,
            allowSlidePrev: !0,
            allowSlideNext: !0,
            swipeHandler: null,
            noSwiping: !0,
            noSwipingClass: "swiper-no-swiping",
            noSwipingSelector: null,
            passiveListeners: !0,
            maxBackfaceHiddenSlides: 10,
            containerModifierClass: "swiper-",
            slideClass: "swiper-slide",
            slideBlankClass: "swiper-slide-invisible-blank",
            slideActiveClass: "swiper-slide-active",
            slideDuplicateActiveClass: "swiper-slide-duplicate-active",
            slideVisibleClass: "swiper-slide-visible",
            slideDuplicateClass: "swiper-slide-duplicate",
            slideNextClass: "swiper-slide-next",
            slideDuplicateNextClass: "swiper-slide-duplicate-next",
            slidePrevClass: "swiper-slide-prev",
            slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
            wrapperClass: "swiper-wrapper",
            runCallbacksOnInit: !0,
            _emitClasses: !1
        };

    function V(e, t) {
        return function(s) {
            void 0 === s && (s = {});
            const i = Object.keys(s)[0],
                n = s[i];
            "object" == typeof n && null !== n ? (["navigation", "pagination", "scrollbar"].indexOf(i) >= 0 && !0 === e[i] && (e[i] = {
                auto: !0
            }), i in e && "enabled" in n ? (!0 === e[i] && (e[i] = {
                enabled: !0
            }), "object" != typeof e[i] || "enabled" in e[i] || (e[i].enabled = !0), e[i] || (e[i] = {
                enabled: !1
            }), b(t, s)) : b(t, s)) : b(t, s)
        }
    }
    const W = {
            eventsEmitter: x,
            update: k,
            translate: {
                getTranslate: function(e) {
                    void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                    const {
                        params: t,
                        rtlTranslate: s,
                        translate: i,
                        $wrapperEl: n
                    } = this;
                    if (t.virtualTranslate) return s ? -i : i;
                    if (t.cssMode) return i;
                    let a = function(e, t) {
                        void 0 === t && (t = "x");
                        const s = r();
                        let i, n, a;
                        const o = function(e) {
                            const t = r();
                            let s;
                            return t.getComputedStyle && (s = t.getComputedStyle(e, null)), !s && e.currentStyle && (s = e.currentStyle), s || (s = e.style), s
                        }(e);
                        return s.WebKitCSSMatrix ? (n = o.transform || o.webkitTransform, n.split(",").length > 6 && (n = n.split(", ").map((e => e.replace(",", "."))).join(", ")), a = new s.WebKitCSSMatrix("none" === n ? "" : n)) : (a = o.MozTransform || o.OTransform || o.MsTransform || o.msTransform || o.transform || o.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), i = a.toString().split(",")), "x" === t && (n = s.WebKitCSSMatrix ? a.m41 : 16 === i.length ? parseFloat(i[12]) : parseFloat(i[4])), "y" === t && (n = s.WebKitCSSMatrix ? a.m42 : 16 === i.length ? parseFloat(i[13]) : parseFloat(i[5])), n || 0
                    }(n[0], e);
                    return s && (a = -a), a || 0
                },
                setTranslate: function(e, t) {
                    const s = this,
                        {
                            rtlTranslate: i,
                            params: n,
                            $wrapperEl: r,
                            wrapperEl: a,
                            progress: o
                        } = s;
                    let l, c = 0,
                        d = 0;
                    s.isHorizontal() ? c = i ? -e : e : d = e, n.roundLengths && (c = Math.floor(c), d = Math.floor(d)), n.cssMode ? a[s.isHorizontal() ? "scrollLeft" : "scrollTop"] = s.isHorizontal() ? -c : -d : n.virtualTranslate || r.transform(`translate3d(${c}px, ${d}px, 0px)`), s.previousTranslate = s.translate, s.translate = s.isHorizontal() ? c : d;
                    const p = s.maxTranslate() - s.minTranslate();
                    l = 0 === p ? 0 : (e - s.minTranslate()) / p, l !== o && s.updateProgress(e), s.emit("setTranslate", s.translate, t)
                },
                minTranslate: function() {
                    return -this.snapGrid[0]
                },
                maxTranslate: function() {
                    return -this.snapGrid[this.snapGrid.length - 1]
                },
                translateTo: function(e, t, s, i, n) {
                    void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === s && (s = !0), void 0 === i && (i = !0);
                    const r = this,
                        {
                            params: a,
                            wrapperEl: o
                        } = r;
                    if (r.animating && a.preventInteractionOnTransition) return !1;
                    const l = r.minTranslate(),
                        c = r.maxTranslate();
                    let d;
                    if (d = i && e > l ? l : i && e < c ? c : e, r.updateProgress(d), a.cssMode) {
                        const e = r.isHorizontal();
                        if (0 === t) o[e ? "scrollLeft" : "scrollTop"] = -d;
                        else {
                            if (!r.support.smoothScroll) return y({
                                swiper: r,
                                targetPosition: -d,
                                side: e ? "left" : "top"
                            }), !0;
                            o.scrollTo({
                                [e ? "left" : "top"]: -d,
                                behavior: "smooth"
                            })
                        }
                        return !0
                    }
                    return 0 === t ? (r.setTransition(0), r.setTranslate(d), s && (r.emit("beforeTransitionStart", t, n), r.emit("transitionEnd"))) : (r.setTransition(t), r.setTranslate(d), s && (r.emit("beforeTransitionStart", t, n), r.emit("transitionStart")), r.animating || (r.animating = !0, r.onTranslateToWrapperTransitionEnd || (r.onTranslateToWrapperTransitionEnd = function(e) {
                        r && !r.destroyed && e.target === this && (r.$wrapperEl[0].removeEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].removeEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd), r.onTranslateToWrapperTransitionEnd = null, delete r.onTranslateToWrapperTransitionEnd, s && r.emit("transitionEnd"))
                    }), r.$wrapperEl[0].addEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].addEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd))), !0
                }
            },
            transition: {
                setTransition: function(e, t) {
                    const s = this;
                    s.params.cssMode || s.$wrapperEl.transition(e), s.emit("setTransition", e, t)
                },
                transitionStart: function(e, t) {
                    void 0 === e && (e = !0);
                    const s = this,
                        {
                            params: i
                        } = s;
                    i.cssMode || (i.autoHeight && s.updateAutoHeight(), M({
                        swiper: s,
                        runCallbacks: e,
                        direction: t,
                        step: "Start"
                    }))
                },
                transitionEnd: function(e, t) {
                    void 0 === e && (e = !0);
                    const s = this,
                        {
                            params: i
                        } = s;
                    s.animating = !1, i.cssMode || (s.setTransition(0), M({
                        swiper: s,
                        runCallbacks: e,
                        direction: t,
                        step: "End"
                    }))
                }
            },
            slide: L,
            loop: P,
            grabCursor: {
                setGrabCursor: function(e) {
                    const t = this;
                    if (t.support.touch || !t.params.simulateTouch || t.params.watchOverflow && t.isLocked || t.params.cssMode) return;
                    const s = "container" === t.params.touchEventsTarget ? t.el : t.wrapperEl;
                    s.style.cursor = "move", s.style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", s.style.cursor = e ? "-moz-grabbin" : "-moz-grab", s.style.cursor = e ? "grabbing" : "grab"
                },
                unsetGrabCursor: function() {
                    const e = this;
                    e.support.touch || e.params.watchOverflow && e.isLocked || e.params.cssMode || (e["container" === e.params.touchEventsTarget ? "el" : "wrapperEl"].style.cursor = "")
                }
            },
            events: N,
            breakpoints: j,
            checkOverflow: {
                checkOverflow: function() {
                    const e = this,
                        {
                            isLocked: t,
                            params: s
                        } = e,
                        {
                            slidesOffsetBefore: i
                        } = s;
                    if (i) {
                        const t = e.slides.length - 1,
                            s = e.slidesGrid[t] + e.slidesSizesGrid[t] + 2 * i;
                        e.isLocked = e.size > s
                    } else e.isLocked = 1 === e.snapGrid.length;
                    !0 === s.allowSlideNext && (e.allowSlideNext = !e.isLocked), !0 === s.allowSlidePrev && (e.allowSlidePrev = !e.isLocked), t && t !== e.isLocked && (e.isEnd = !1), t !== e.isLocked && e.emit(e.isLocked ? "lock" : "unlock")
                }
            },
            classes: H,
            images: {
                loadImage: function(e, t, s, i, n, a) {
                    const o = r();
                    let l;

                    function c() {
                        a && a()
                    }
                    h(e).parent("picture")[0] || e.complete && n ? c() : t ? (l = new o.Image, l.onload = c, l.onerror = c, i && (l.sizes = i), s && (l.srcset = s), t && (l.src = t)) : c()
                },
                preloadImages: function() {
                    const e = this;

                    function t() {
                        null != e && e && !e.destroyed && (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1), e.imagesLoaded === e.imagesToLoad.length && (e.params.updateOnImagesReady && e.update(), e.emit("imagesReady")))
                    }
                    e.imagesToLoad = e.$el.find("img");
                    for (let s = 0; s < e.imagesToLoad.length; s += 1) {
                        const i = e.imagesToLoad[s];
                        e.loadImage(i, i.currentSrc || i.getAttribute("src"), i.srcset || i.getAttribute("srcset"), i.sizes || i.getAttribute("sizes"), !0, t)
                    }
                }
            }
        },
        R = {};
    class X {
        constructor() {
            let e, t;
            for (var s = arguments.length, i = new Array(s), n = 0; n < s; n++) i[n] = arguments[n];
            if (1 === i.length && i[0].constructor && "Object" === Object.prototype.toString.call(i[0]).slice(8, -1) ? t = i[0] : [e, t] = i, t || (t = {}), t = b({}, t), e && !t.el && (t.el = e), t.el && h(t.el).length > 1) {
                const e = [];
                return h(t.el).each((s => {
                    const i = b({}, t, {
                        el: s
                    });
                    e.push(new X(i))
                })), e
            }
            const a = this;
            var o;
            a.__swiper__ = !0, a.support = E(), a.device = (void 0 === (o = {
                userAgent: t.userAgent
            }) && (o = {}), S || (S = function(e) {
                let {
                    userAgent: t
                } = void 0 === e ? {} : e;
                const s = E(),
                    i = r(),
                    n = i.navigator.platform,
                    a = t || i.navigator.userAgent,
                    o = {
                        ios: !1,
                        android: !1
                    },
                    l = i.screen.width,
                    c = i.screen.height,
                    d = a.match(/(Android);?[\s\/]+([\d.]+)?/);
                let p = a.match(/(iPad).*OS\s([\d_]+)/);
                const u = a.match(/(iPod)(.*OS\s([\d_]+))?/),
                    h = !p && a.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                    f = "Win32" === n;
                let m = "MacIntel" === n;
                return !p && m && s.touch && ["1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768", "820x1180", "1180x820", "810x1080", "1080x810"].indexOf(`${l}x${c}`) >= 0 && (p = a.match(/(Version)\/([\d.]+)/), p || (p = [0, 1, "13_0_0"]), m = !1), d && !f && (o.os = "android", o.android = !0), (p || h || u) && (o.os = "ios", o.ios = !0), o
            }(o)), S), a.browser = (T || (T = function() {
                const e = r();
                return {
                    isSafari: function() {
                        const t = e.navigator.userAgent.toLowerCase();
                        return t.indexOf("safari") >= 0 && t.indexOf("chrome") < 0 && t.indexOf("android") < 0
                    }(),
                    isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(e.navigator.userAgent)
                }
            }()), T), a.eventsListeners = {}, a.eventsAnyListeners = [], a.modules = [...a.__modules__], t.modules && Array.isArray(t.modules) && a.modules.push(...t.modules);
            const l = {};
            a.modules.forEach((e => {
                e({
                    swiper: a,
                    extendParams: V(t, l),
                    on: a.on.bind(a),
                    once: a.once.bind(a),
                    off: a.off.bind(a),
                    emit: a.emit.bind(a)
                })
            }));
            const c = b({}, F, l);
            return a.params = b({}, c, R, t), a.originalParams = b({}, a.params), a.passedParams = b({}, t), a.params && a.params.on && Object.keys(a.params.on).forEach((e => {
                a.on(e, a.params.on[e])
            })), a.params && a.params.onAny && a.onAny(a.params.onAny), a.$ = h, Object.assign(a, {
                enabled: a.params.enabled,
                el: e,
                classNames: [],
                slides: h(),
                slidesGrid: [],
                snapGrid: [],
                slidesSizesGrid: [],
                isHorizontal: () => "horizontal" === a.params.direction,
                isVertical: () => "vertical" === a.params.direction,
                activeIndex: 0,
                realIndex: 0,
                isBeginning: !0,
                isEnd: !1,
                translate: 0,
                previousTranslate: 0,
                progress: 0,
                velocity: 0,
                animating: !1,
                allowSlideNext: a.params.allowSlideNext,
                allowSlidePrev: a.params.allowSlidePrev,
                touchEvents: function() {
                    const e = ["touchstart", "touchmove", "touchend", "touchcancel"],
                        t = ["pointerdown", "pointermove", "pointerup"];
                    return a.touchEventsTouch = {
                        start: e[0],
                        move: e[1],
                        end: e[2],
                        cancel: e[3]
                    }, a.touchEventsDesktop = {
                        start: t[0],
                        move: t[1],
                        end: t[2]
                    }, a.support.touch || !a.params.simulateTouch ? a.touchEventsTouch : a.touchEventsDesktop
                }(),
                touchEventsData: {
                    isTouched: void 0,
                    isMoved: void 0,
                    allowTouchCallbacks: void 0,
                    touchStartTime: void 0,
                    isScrolling: void 0,
                    currentTranslate: void 0,
                    startTranslate: void 0,
                    allowThresholdMove: void 0,
                    focusableElements: a.params.focusableElements,
                    lastClickTime: m(),
                    clickTimeout: void 0,
                    velocities: [],
                    allowMomentumBounce: void 0,
                    isTouchEvent: void 0,
                    startMoving: void 0
                },
                allowClick: !0,
                allowTouchMove: a.params.allowTouchMove,
                touches: {
                    startX: 0,
                    startY: 0,
                    currentX: 0,
                    currentY: 0,
                    diff: 0
                },
                imagesToLoad: [],
                imagesLoaded: 0
            }), a.emit("_swiper"), a.params.init && a.init(), a
        }
        enable() {
            const e = this;
            e.enabled || (e.enabled = !0, e.params.grabCursor && e.setGrabCursor(), e.emit("enable"))
        }
        disable() {
            const e = this;
            e.enabled && (e.enabled = !1, e.params.grabCursor && e.unsetGrabCursor(), e.emit("disable"))
        }
        setProgress(e, t) {
            const s = this;
            e = Math.min(Math.max(e, 0), 1);
            const i = s.minTranslate(),
                n = (s.maxTranslate() - i) * e + i;
            s.translateTo(n, void 0 === t ? 0 : t), s.updateActiveIndex(), s.updateSlidesClasses()
        }
        emitContainerClasses() {
            const e = this;
            if (!e.params._emitClasses || !e.el) return;
            const t = e.el.className.split(" ").filter((t => 0 === t.indexOf("swiper") || 0 === t.indexOf(e.params.containerModifierClass)));
            e.emit("_containerClasses", t.join(" "))
        }
        getSlideClasses(e) {
            const t = this;
            return e.className.split(" ").filter((e => 0 === e.indexOf("swiper-slide") || 0 === e.indexOf(t.params.slideClass))).join(" ")
        }
        emitSlidesClasses() {
            const e = this;
            if (!e.params._emitClasses || !e.el) return;
            const t = [];
            e.slides.each((s => {
                const i = e.getSlideClasses(s);
                t.push({
                    slideEl: s,
                    classNames: i
                }), e.emit("_slideClass", s, i)
            })), e.emit("_slideClasses", t)
        }
        slidesPerViewDynamic(e, t) {
            void 0 === e && (e = "current"), void 0 === t && (t = !1);
            const {
                params: s,
                slides: i,
                slidesGrid: n,
                slidesSizesGrid: r,
                size: a,
                activeIndex: o
            } = this;
            let l = 1;
            if (s.centeredSlides) {
                let e, t = i[o].swiperSlideSize;
                for (let s = o + 1; s < i.length; s += 1) i[s] && !e && (t += i[s].swiperSlideSize, l += 1, t > a && (e = !0));
                for (let s = o - 1; s >= 0; s -= 1) i[s] && !e && (t += i[s].swiperSlideSize, l += 1, t > a && (e = !0))
            } else if ("current" === e)
                for (let e = o + 1; e < i.length; e += 1)(t ? n[e] + r[e] - n[o] < a : n[e] - n[o] < a) && (l += 1);
            else
                for (let e = o - 1; e >= 0; e -= 1) n[o] - n[e] < a && (l += 1);
            return l
        }
        update() {
            const e = this;
            if (!e || e.destroyed) return;
            const {
                snapGrid: t,
                params: s
            } = e;

            function i() {
                const t = e.rtlTranslate ? -1 * e.translate : e.translate,
                    s = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate());
                e.setTranslate(s), e.updateActiveIndex(), e.updateSlidesClasses()
            }
            let n;
            s.breakpoints && e.setBreakpoint(), e.updateSize(), e.updateSlides(), e.updateProgress(), e.updateSlidesClasses(), e.params.freeMode && e.params.freeMode.enabled ? (i(), e.params.autoHeight && e.updateAutoHeight()) : (n = ("auto" === e.params.slidesPerView || e.params.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0), n || i()), s.watchOverflow && t !== e.snapGrid && e.checkOverflow(), e.emit("update")
        }
        changeDirection(e, t) {
            void 0 === t && (t = !0);
            const s = this,
                i = s.params.direction;
            return e || (e = "horizontal" === i ? "vertical" : "horizontal"), e === i || "horizontal" !== e && "vertical" !== e || (s.$el.removeClass(`${s.params.containerModifierClass}${i}`).addClass(`${s.params.containerModifierClass}${e}`), s.emitContainerClasses(), s.params.direction = e, s.slides.each((t => {
                "vertical" === e ? t.style.width = "" : t.style.height = ""
            })), s.emit("changeDirection"), t && s.update()), s
        }
        mount(e) {
            const t = this;
            if (t.mounted) return !0;
            const s = h(e || t.params.el);
            if (!(e = s[0])) return !1;
            e.swiper = t;
            const n = () => `.${(t.params.wrapperClass||"").trim().split(" ").join(".")}`;
            let r = (() => {
                if (e && e.shadowRoot && e.shadowRoot.querySelector) {
                    const t = h(e.shadowRoot.querySelector(n()));
                    return t.children = e => s.children(e), t
                }
                return s.children(n())
            })();
            if (0 === r.length && t.params.createElements) {
                const e = i().createElement("div");
                r = h(e), e.className = t.params.wrapperClass, s.append(e), s.children(`.${t.params.slideClass}`).each((e => {
                    r.append(e)
                }))
            }
            return Object.assign(t, {
                $el: s,
                el: e,
                $wrapperEl: r,
                wrapperEl: r[0],
                mounted: !0,
                rtl: "rtl" === e.dir.toLowerCase() || "rtl" === s.css("direction"),
                rtlTranslate: "horizontal" === t.params.direction && ("rtl" === e.dir.toLowerCase() || "rtl" === s.css("direction")),
                wrongRTL: "-webkit-box" === r.css("display")
            }), !0
        }
        init(e) {
            const t = this;
            return t.initialized || !1 === t.mount(e) || (t.emit("beforeInit"), t.params.breakpoints && t.setBreakpoint(), t.addClasses(), t.params.loop && t.loopCreate(), t.updateSize(), t.updateSlides(), t.params.watchOverflow && t.checkOverflow(), t.params.grabCursor && t.enabled && t.setGrabCursor(), t.params.preloadImages && t.preloadImages(), t.params.loop ? t.slideTo(t.params.initialSlide + t.loopedSlides, 0, t.params.runCallbacksOnInit, !1, !0) : t.slideTo(t.params.initialSlide, 0, t.params.runCallbacksOnInit, !1, !0), t.attachEvents(), t.initialized = !0, t.emit("init"), t.emit("afterInit")), t
        }
        destroy(e, t) {
            void 0 === e && (e = !0), void 0 === t && (t = !0);
            const s = this,
                {
                    params: i,
                    $el: n,
                    $wrapperEl: r,
                    slides: a
                } = s;
            return void 0 === s.params || s.destroyed || (s.emit("beforeDestroy"), s.initialized = !1, s.detachEvents(), i.loop && s.loopDestroy(), t && (s.removeClasses(), n.removeAttr("style"), r.removeAttr("style"), a && a.length && a.removeClass([i.slideVisibleClass, i.slideActiveClass, i.slideNextClass, i.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")), s.emit("destroy"), Object.keys(s.eventsListeners).forEach((e => {
                s.off(e)
            })), !1 !== e && (s.$el[0].swiper = null, function(e) {
                const t = e;
                Object.keys(t).forEach((e => {
                    try {
                        t[e] = null
                    } catch (e) {}
                    try {
                        delete t[e]
                    } catch (e) {}
                }))
            }(s)), s.destroyed = !0), null
        }
        static extendDefaults(e) {
            b(R, e)
        }
        static get extendedDefaults() {
            return R
        }
        static get defaults() {
            return F
        }
        static installModule(e) {
            X.prototype.__modules__ || (X.prototype.__modules__ = []);
            const t = X.prototype.__modules__;
            "function" == typeof e && t.indexOf(e) < 0 && t.push(e)
        }
        static use(e) {
            return Array.isArray(e) ? (e.forEach((e => X.installModule(e))), X) : (X.installModule(e), X)
        }
    }
    Object.keys(W).forEach((e => {
        Object.keys(W[e]).forEach((t => {
            X.prototype[t] = W[e][t]
        }))
    })), X.use([function(e) {
        let {
            swiper: t,
            on: s,
            emit: i
        } = e;
        const n = r();
        let a = null,
            o = null;
        const l = () => {
                t && !t.destroyed && t.initialized && (i("beforeResize"), i("resize"))
            },
            c = () => {
                t && !t.destroyed && t.initialized && i("orientationchange")
            };
        s("init", (() => {
            t.params.resizeObserver && void 0 !== n.ResizeObserver ? t && !t.destroyed && t.initialized && (a = new ResizeObserver((e => {
                o = n.requestAnimationFrame((() => {
                    const {
                        width: s,
                        height: i
                    } = t;
                    let n = s,
                        r = i;
                    e.forEach((e => {
                        let {
                            contentBoxSize: s,
                            contentRect: i,
                            target: a
                        } = e;
                        a && a !== t.el || (n = i ? i.width : (s[0] || s).inlineSize, r = i ? i.height : (s[0] || s).blockSize)
                    })), n === s && r === i || l()
                }))
            })), a.observe(t.el)) : (n.addEventListener("resize", l), n.addEventListener("orientationchange", c))
        })), s("destroy", (() => {
            o && n.cancelAnimationFrame(o), a && a.unobserve && t.el && (a.unobserve(t.el), a = null), n.removeEventListener("resize", l), n.removeEventListener("orientationchange", c)
        }))
    }, function(e) {
        let {
            swiper: t,
            extendParams: s,
            on: i,
            emit: n
        } = e;
        const a = [],
            o = r(),
            l = function(e, t) {
                void 0 === t && (t = {});
                const s = new(o.MutationObserver || o.WebkitMutationObserver)((e => {
                    if (1 === e.length) return void n("observerUpdate", e[0]);
                    const t = function() {
                        n("observerUpdate", e[0])
                    };
                    o.requestAnimationFrame ? o.requestAnimationFrame(t) : o.setTimeout(t, 0)
                }));
                s.observe(e, {
                    attributes: void 0 === t.attributes || t.attributes,
                    childList: void 0 === t.childList || t.childList,
                    characterData: void 0 === t.characterData || t.characterData
                }), a.push(s)
            };
        s({
            observer: !1,
            observeParents: !1,
            observeSlideChildren: !1
        }), i("init", (() => {
            if (t.params.observer) {
                if (t.params.observeParents) {
                    const e = t.$el.parents();
                    for (let t = 0; t < e.length; t += 1) l(e[t])
                }
                l(t.$el[0], {
                    childList: t.params.observeSlideChildren
                }), l(t.$wrapperEl[0], {
                    attributes: !1
                })
            }
        })), i("destroy", (() => {
            a.forEach((e => {
                e.disconnect()
            })), a.splice(0, a.length)
        }))
    }]);
    var Y = X;

    function U(e, t, s, n) {
        const r = i();
        return e.params.createElements && Object.keys(n).forEach((i => {
            if (!s[i] && !0 === s.auto) {
                let a = e.$el.children(`.${n[i]}`)[0];
                a || (a = r.createElement("div"), a.className = n[i], e.$el.append(a)), s[i] = a, t[i] = a
            }
        })), s
    }

    function K(e) {
        let {
            swiper: t,
            extendParams: s,
            on: i,
            emit: n
        } = e;

        function r(e) {
            let s;
            return e && (s = h(e), t.params.uniqueNavElements && "string" == typeof e && s.length > 1 && 1 === t.$el.find(e).length && (s = t.$el.find(e))), s
        }

        function a(e, s) {
            const i = t.params.navigation;
            e && e.length > 0 && (e[s ? "addClass" : "removeClass"](i.disabledClass), e[0] && "BUTTON" === e[0].tagName && (e[0].disabled = s), t.params.watchOverflow && t.enabled && e[t.isLocked ? "addClass" : "removeClass"](i.lockClass))
        }

        function o() {
            if (t.params.loop) return;
            const {
                $nextEl: e,
                $prevEl: s
            } = t.navigation;
            a(s, t.isBeginning && !t.params.rewind), a(e, t.isEnd && !t.params.rewind)
        }

        function l(e) {
            e.preventDefault(), (!t.isBeginning || t.params.loop || t.params.rewind) && t.slidePrev()
        }

        function c(e) {
            e.preventDefault(), (!t.isEnd || t.params.loop || t.params.rewind) && t.slideNext()
        }

        function d() {
            const e = t.params.navigation;
            if (t.params.navigation = U(t, t.originalParams.navigation, t.params.navigation, {
                nextEl: "swiper-button-next",
                prevEl: "swiper-button-prev"
            }), !e.nextEl && !e.prevEl) return;
            const s = r(e.nextEl),
                i = r(e.prevEl);
            s && s.length > 0 && s.on("click", c), i && i.length > 0 && i.on("click", l), Object.assign(t.navigation, {
                $nextEl: s,
                nextEl: s && s[0],
                $prevEl: i,
                prevEl: i && i[0]
            }), t.enabled || (s && s.addClass(e.lockClass), i && i.addClass(e.lockClass))
        }

        function p() {
            const {
                $nextEl: e,
                $prevEl: s
            } = t.navigation;
            e && e.length && (e.off("click", c), e.removeClass(t.params.navigation.disabledClass)), s && s.length && (s.off("click", l), s.removeClass(t.params.navigation.disabledClass))
        }
        s({
            navigation: {
                nextEl: null,
                prevEl: null,
                hideOnClick: !1,
                disabledClass: "swiper-button-disabled",
                hiddenClass: "swiper-button-hidden",
                lockClass: "swiper-button-lock"
            }
        }), t.navigation = {
            nextEl: null,
            $nextEl: null,
            prevEl: null,
            $prevEl: null
        }, i("init", (() => {
            d(), o()
        })), i("toEdge fromEdge lock unlock", (() => {
            o()
        })), i("destroy", (() => {
            p()
        })), i("enable disable", (() => {
            const {
                $nextEl: e,
                $prevEl: s
            } = t.navigation;
            e && e[t.enabled ? "removeClass" : "addClass"](t.params.navigation.lockClass), s && s[t.enabled ? "removeClass" : "addClass"](t.params.navigation.lockClass)
        })), i("click", ((e, s) => {
            const {
                $nextEl: i,
                $prevEl: r
            } = t.navigation, a = s.target;
            if (t.params.navigation.hideOnClick && !h(a).is(r) && !h(a).is(i)) {
                if (t.pagination && t.params.pagination && t.params.pagination.clickable && (t.pagination.el === a || t.pagination.el.contains(a))) return;
                let e;
                i ? e = i.hasClass(t.params.navigation.hiddenClass) : r && (e = r.hasClass(t.params.navigation.hiddenClass)), n(!0 === e ? "navigationShow" : "navigationHide"), i && i.toggleClass(t.params.navigation.hiddenClass), r && r.toggleClass(t.params.navigation.hiddenClass)
            }
        })), Object.assign(t.navigation, {
            update: o,
            init: d,
            destroy: p
        })
    }

    function Z(e) {
        return void 0 === e && (e = ""), `.${e.trim().replace(/([\.:!\/])/g,"\\$1").replace(/ /g,".")}`
    }

    function J(e) {
        let {
            swiper: t,
            extendParams: s,
            on: i,
            emit: n
        } = e;
        const r = "swiper-pagination";
        let a;
        s({
            pagination: {
                el: null,
                bulletElement: "span",
                clickable: !1,
                hideOnClick: !1,
                renderBullet: null,
                renderProgressbar: null,
                renderFraction: null,
                renderCustom: null,
                progressbarOpposite: !1,
                type: "bullets",
                dynamicBullets: !1,
                dynamicMainBullets: 1,
                formatFractionCurrent: e => e,
                formatFractionTotal: e => e,
                bulletClass: `${r}-bullet`,
                bulletActiveClass: `${r}-bullet-active`,
                modifierClass: `${r}-`,
                currentClass: `${r}-current`,
                totalClass: `${r}-total`,
                hiddenClass: `${r}-hidden`,
                progressbarFillClass: `${r}-progressbar-fill`,
                progressbarOppositeClass: `${r}-progressbar-opposite`,
                clickableClass: `${r}-clickable`,
                lockClass: `${r}-lock`,
                horizontalClass: `${r}-horizontal`,
                verticalClass: `${r}-vertical`
            }
        }), t.pagination = {
            el: null,
            $el: null,
            bullets: []
        };
        let o = 0;

        function l() {
            return !t.params.pagination.el || !t.pagination.el || !t.pagination.$el || 0 === t.pagination.$el.length
        }

        function c(e, s) {
            const {
                bulletActiveClass: i
            } = t.params.pagination;
            e[s]().addClass(`${i}-${s}`)[s]().addClass(`${i}-${s}-${s}`)
        }

        function d() {
            const e = t.rtl,
                s = t.params.pagination;
            if (l()) return;
            const i = t.virtual && t.params.virtual.enabled ? t.virtual.slides.length : t.slides.length,
                r = t.pagination.$el;
            let d;
            const p = t.params.loop ? Math.ceil((i - 2 * t.loopedSlides) / t.params.slidesPerGroup) : t.snapGrid.length;
            if (t.params.loop ? (d = Math.ceil((t.activeIndex - t.loopedSlides) / t.params.slidesPerGroup), d > i - 1 - 2 * t.loopedSlides && (d -= i - 2 * t.loopedSlides), d > p - 1 && (d -= p), d < 0 && "bullets" !== t.params.paginationType && (d = p + d)) : d = void 0 !== t.snapIndex ? t.snapIndex : t.activeIndex || 0, "bullets" === s.type && t.pagination.bullets && t.pagination.bullets.length > 0) {
                const i = t.pagination.bullets;
                let n, l, p;
                if (s.dynamicBullets && (a = i.eq(0)[t.isHorizontal() ? "outerWidth" : "outerHeight"](!0), r.css(t.isHorizontal() ? "width" : "height", a * (s.dynamicMainBullets + 4) + "px"), s.dynamicMainBullets > 1 && void 0 !== t.previousIndex && (o += d - (t.previousIndex - t.loopedSlides || 0), o > s.dynamicMainBullets - 1 ? o = s.dynamicMainBullets - 1 : o < 0 && (o = 0)), n = Math.max(d - o, 0), l = n + (Math.min(i.length, s.dynamicMainBullets) - 1), p = (l + n) / 2), i.removeClass(["", "-next", "-next-next", "-prev", "-prev-prev", "-main"].map((e => `${s.bulletActiveClass}${e}`)).join(" ")), r.length > 1) i.each((e => {
                    const t = h(e),
                        i = t.index();
                    i === d && t.addClass(s.bulletActiveClass), s.dynamicBullets && (i >= n && i <= l && t.addClass(`${s.bulletActiveClass}-main`), i === n && c(t, "prev"), i === l && c(t, "next"))
                }));
                else {
                    const e = i.eq(d),
                        r = e.index();
                    if (e.addClass(s.bulletActiveClass), s.dynamicBullets) {
                        const e = i.eq(n),
                            a = i.eq(l);
                        for (let e = n; e <= l; e += 1) i.eq(e).addClass(`${s.bulletActiveClass}-main`);
                        if (t.params.loop)
                            if (r >= i.length) {
                                for (let e = s.dynamicMainBullets; e >= 0; e -= 1) i.eq(i.length - e).addClass(`${s.bulletActiveClass}-main`);
                                i.eq(i.length - s.dynamicMainBullets - 1).addClass(`${s.bulletActiveClass}-prev`)
                            } else c(e, "prev"), c(a, "next");
                        else c(e, "prev"), c(a, "next")
                    }
                }
                if (s.dynamicBullets) {
                    const n = Math.min(i.length, s.dynamicMainBullets + 4),
                        r = (a * n - a) / 2 - p * a,
                        o = e ? "right" : "left";
                    i.css(t.isHorizontal() ? o : "top", `${r}px`)
                }
            }
            if ("fraction" === s.type && (r.find(Z(s.currentClass)).text(s.formatFractionCurrent(d + 1)), r.find(Z(s.totalClass)).text(s.formatFractionTotal(p))), "progressbar" === s.type) {
                let e;
                e = s.progressbarOpposite ? t.isHorizontal() ? "vertical" : "horizontal" : t.isHorizontal() ? "horizontal" : "vertical";
                const i = (d + 1) / p;
                let n = 1,
                    a = 1;
                "horizontal" === e ? n = i : a = i, r.find(Z(s.progressbarFillClass)).transform(`translate3d(0,0,0) scaleX(${n}) scaleY(${a})`).transition(t.params.speed)
            }
            "custom" === s.type && s.renderCustom ? (r.html(s.renderCustom(t, d + 1, p)), n("paginationRender", r[0])) : n("paginationUpdate", r[0]), t.params.watchOverflow && t.enabled && r[t.isLocked ? "addClass" : "removeClass"](s.lockClass)
        }

        function p() {
            const e = t.params.pagination;
            if (l()) return;
            const s = t.virtual && t.params.virtual.enabled ? t.virtual.slides.length : t.slides.length,
                i = t.pagination.$el;
            let r = "";
            if ("bullets" === e.type) {
                let n = t.params.loop ? Math.ceil((s - 2 * t.loopedSlides) / t.params.slidesPerGroup) : t.snapGrid.length;
                t.params.freeMode && t.params.freeMode.enabled && !t.params.loop && n > s && (n = s);
                for (let s = 0; s < n; s += 1) e.renderBullet ? r += e.renderBullet.call(t, s, e.bulletClass) : r += `<${e.bulletElement} class="${e.bulletClass}"></${e.bulletElement}>`;
                i.html(r), t.pagination.bullets = i.find(Z(e.bulletClass))
            }
            "fraction" === e.type && (r = e.renderFraction ? e.renderFraction.call(t, e.currentClass, e.totalClass) : `<span class="${e.currentClass}"></span> / <span class="${e.totalClass}"></span>`, i.html(r)), "progressbar" === e.type && (r = e.renderProgressbar ? e.renderProgressbar.call(t, e.progressbarFillClass) : `<span class="${e.progressbarFillClass}"></span>`, i.html(r)), "custom" !== e.type && n("paginationRender", t.pagination.$el[0])
        }

        function u() {
            t.params.pagination = U(t, t.originalParams.pagination, t.params.pagination, {
                el: "swiper-pagination"
            });
            const e = t.params.pagination;
            if (!e.el) return;
            let s = h(e.el);
            0 !== s.length && (t.params.uniqueNavElements && "string" == typeof e.el && s.length > 1 && (s = t.$el.find(e.el), s.length > 1 && (s = s.filter((e => h(e).parents(".swiper")[0] === t.el)))), "bullets" === e.type && e.clickable && s.addClass(e.clickableClass), s.addClass(e.modifierClass + e.type), s.addClass(e.modifierClass + t.params.direction), "bullets" === e.type && e.dynamicBullets && (s.addClass(`${e.modifierClass}${e.type}-dynamic`), o = 0, e.dynamicMainBullets < 1 && (e.dynamicMainBullets = 1)), "progressbar" === e.type && e.progressbarOpposite && s.addClass(e.progressbarOppositeClass), e.clickable && s.on("click", Z(e.bulletClass), (function(e) {
                e.preventDefault();
                let s = h(this).index() * t.params.slidesPerGroup;
                t.params.loop && (s += t.loopedSlides), t.slideTo(s)
            })), Object.assign(t.pagination, {
                $el: s,
                el: s[0]
            }), t.enabled || s.addClass(e.lockClass))
        }

        function f() {
            const e = t.params.pagination;
            if (l()) return;
            const s = t.pagination.$el;
            s.removeClass(e.hiddenClass), s.removeClass(e.modifierClass + e.type), s.removeClass(e.modifierClass + t.params.direction), t.pagination.bullets && t.pagination.bullets.removeClass && t.pagination.bullets.removeClass(e.bulletActiveClass), e.clickable && s.off("click", Z(e.bulletClass))
        }
        i("init", (() => {
            u(), p(), d()
        })), i("activeIndexChange", (() => {
            (t.params.loop || void 0 === t.snapIndex) && d()
        })), i("snapIndexChange", (() => {
            t.params.loop || d()
        })), i("slidesLengthChange", (() => {
            t.params.loop && (p(), d())
        })), i("snapGridLengthChange", (() => {
            t.params.loop || (p(), d())
        })), i("destroy", (() => {
            f()
        })), i("enable disable", (() => {
            const {
                $el: e
            } = t.pagination;
            e && e[t.enabled ? "removeClass" : "addClass"](t.params.pagination.lockClass)
        })), i("lock unlock", (() => {
            d()
        })), i("click", ((e, s) => {
            const i = s.target,
                {
                    $el: r
                } = t.pagination;
            if (t.params.pagination.el && t.params.pagination.hideOnClick && r.length > 0 && !h(i).hasClass(t.params.pagination.bulletClass)) {
                if (t.navigation && (t.navigation.nextEl && i === t.navigation.nextEl || t.navigation.prevEl && i === t.navigation.prevEl)) return;
                const e = r.hasClass(t.params.pagination.hiddenClass);
                n(!0 === e ? "paginationShow" : "paginationHide"), r.toggleClass(t.params.pagination.hiddenClass)
            }
        })), Object.assign(t.pagination, {
            render: p,
            update: d,
            init: u,
            destroy: f
        })
    }

    function Q(e) {
        return e > 9 ? e : "0" + e
    }
    new Y(".schedule-slider .swiper", {
        slidesPerView: 1,
        spaceBetween: 50,
        loop: !1,
        modules: [K],
        navigation: {
            nextEl: ".schedule-slider__next",
            prevEl: ".schedule-slider__prev"
        }
    }), new Y(".gallery-slider .swiper", {
        slidesPerView: 1,
        spaceBetween: 40,
        loop: !1,
        modules: [K, J],
        pagination: {
            el: ".gallery-slider .swiper-pagination"
        },
        navigation: {
            nextEl: ".gallery-slider__next",
            prevEl: ".gallery-slider__prev"
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1600: {
                slidesPerView: "auto"
            }
        }
    });
    var ee, te, se = window.matchMedia("(min-width:768px)"),
        ie = function() {
            return !0 === se.matches ? ne() : !1 === se.matches ? (void 0 !== ee && ee.destroy(), void(void 0 !== te && te.destroy())) : void 0
        },
        ne = function() {
            document.querySelector(".coaches-slider .swiper") && (ee = new Y(".coaches-slider .swiper", {
                slidesPerView: "auto",
                spaceBetween: 40,
                centeredSlides: !0,
                loop: !0,
                modules: [K, J],
                pagination: {
                    el: ".coaches-slider .swiper-pagination",
                    type: "fraction",
                    formatFractionCurrent: Q,
                    formatFractionTotal: Q
                },
                navigation: {
                    nextEl: ".coaches-slider__next",
                    prevEl: ".coaches-slider__prev"
                },
                breakpoints: {
                    1600: {
                        spaceBetween: 100
                    }
                }
            })), document.querySelector(".vacancies-slider .swiper") && (te = new Y(".vacancies-slider .swiper", {
                slidesPerView: "auto",
                spaceBetween: 40,
                loop: !1,
                modules: [K, J],
                pagination: {
                    el: ".vacancies-slider .swiper-pagination"
                },
                navigation: {
                    nextEl: ".vacancies-slider__next",
                    prevEl: ".vacancies-slider__prev"
                }
            }))
        };

    function re(e, t) {
        for (var s = 0; s < t.length; s++) {
            var i = t[s];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    se.addListener(ie), ie();
    var ae = function() {
            function e(t) {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.options = Object.assign({
                    selector: "[data-modal]",
                    activeClass: "active",
                    openButton: "[data-open-modal]",
                    closeButton: "[data-modal-close]",
                    contentSelector: ".modal__content",
                    effect: null,
                    speed: null,
                    position: "center"
                }, t), this.modals = null, this.bodyElement = document.body, this.init()
            }
            var t, s;
            return t = e, (s = [{
                key: "init",
                value: function() {
                    var e = this;
                    this.modals = document.querySelectorAll("".concat(this.options.selector)), this.modals ? (this.modals.forEach((function(t) {
                        e.hasEffect(e.options.effect) && t.classList.add("".concat(e.options.effect)), t.classList.add("".concat(e.options.position)), e.options.speed && e.isNumeric(e.options.speed) && t.style.setProperty("--speed", parseFloat(e.options.speed / 1e3) + "s")
                    })), this.clickHandler()) : console.error('???? ???????????? ?????????????? ?? ???????????????????? "'.concat(this.options.selector, '"'))
                }
            }, {
                key: "clickHandler",
                value: function() {
                    var e = this,
                        t = document.querySelectorAll("".concat(this.options.openButton));
                    t ? t.forEach((function(t) {
                        t.addEventListener("click", (function(t) {
                            t.stopPropagation(), e.open("".concat(t.currentTarget.dataset.openModal))
                        }))
                    })) : console.error('???? ???????????? ?????????????? ?? ???????????????????? "'.concat(this.options.openButton, '"')), this.modals.forEach((function(t) {
                        var s = t.querySelectorAll("".concat(e.options.closeButton));
                        s && s.forEach((function(t) {
                            t.addEventListener("click", (function(t) {
                                t.stopPropagation();
                                var s = t.currentTarget.closest("".concat(e.options.selector));
                                s ? e.close(s) : console.error('???? ???????????? ?????????????? ?? data ?????????????????? "'.concat(e.options.selector, '"'))
                            }))
                        }));
                        var i = t.querySelector("".concat(e.options.contentSelector));
                        i && i.addEventListener("click", (function(e) {
                            e.stopPropagation()
                        }))
                    })), this.bodyElement.addEventListener("click", (function() {
                        //document.querySelector("".concat(e.options.selector, ".").concat(e.options.activeClass)) && (document.querySelector("".concat(e.options.selector, ".").concat(e.options.activeClass)).classList.remove("".concat(e.options.activeClass)), e.bodyElement.style.overflow = "")
                    }))
                }
            }, {
                key: "open",
                value: function(e) {
                    var t = document.querySelector("[data-modal=".concat(e, "]"));
                    t ? (t.classList.add("".concat(this.options.activeClass)), this.bodyElement.style.overflow = "hidden") : console.error("???? ?????????????? ?????????????????????????????? ???????? ?? ?????????????????? ???????????? ".concat(e))
                }
            }, {
                key: "close",
                value: function(e) {
                    e.classList.remove("".concat(this.options.activeClass)), this.bodyElement.style.overflow = ""
                }
            }, {
                key: "closeActiveModal",
                value: function() {
                    var e = document.querySelector("".concat(this.options.selector, ".").concat(this.options.activeClass));
                    e && e.classList.remove("".concat(this.options.activeClass))
                }
            }, {
                key: "isNumeric",
                value: function(e) {
                    return !isNaN(parseFloat(e)) && isFinite(e)
                }
            }, {
                key: "hasEffect",
                value: function(e) {
                    return !(!e || -1 == ["fade", "transformLeft", "transformRight", "transformTop", "transformBottom", "scaleCenter"].indexOf(e.toString().trim()))
                }
            }]) && re(t.prototype, s), Object.defineProperty(t, "prototype", {
                writable: !1
            }), e
        }(),
        oe = (new ae({
            selector: ".nav",
            contentSelector: ".nav__content",
            effect: "transformLeft",
            position: "left"
        }), new ae({
            selector: ".popup-directions",
            contentSelector: ".popup-directions__content",
            effect: "fade"
        }), new ae({
            contentSelector: "[data-modal-content]",
            effect: "fade"
        }), document.querySelectorAll(".item-directions__btn"));
    oe && oe.forEach((function(e) {
        e.addEventListener("click", (function(e) {
            e.stopPropagation(), e.currentTarget.closest(".item-directions").nextElementSibling.classList.add("active"), document.body.style.overflow = "hidden"
        }))
    }));
    var le = document.querySelectorAll(".item-articles__btn");

    function ce(e, t) {
        for (var s = 0; s < t.length; s++) {
            var i = t[s];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }

    function de(e, t) {
        for (var s = 0; s < t.length; s++) {
            var i = t[s];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    le && le.forEach((function(e) {
        e.addEventListener("click", (function(e) {
            e.stopPropagation(), e.currentTarget.closest(".item-articles").nextElementSibling.classList.add("active"), document.body.style.overflow = "hidden"
        }))
    })), new(function() {
        function e(t, s) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.selector = t, this.tabs = document.querySelectorAll("".concat(this.selector)), this.options = Object.assign({
                activeClass: "active"
            }, s), this.dataLink = "[data-tabs-link]", this.dataContentItem = "[data-tab]", this.init()
        }
        var t, s;
        return t = e, (s = [{
            key: "init",
            value: function() {
                this.tabs && this.clickHandler()
            }
        }, {
            key: "clickHandler",
            value: function() {
                var e = this;
                this.tabs.forEach((function(t) {
                    var s = t.querySelectorAll("".concat(e.dataLink));
                    s && s.forEach((function(s) {
                        s.addEventListener("click", (function(s) {
                            if (!s.currentTarget.classList.contains("".concat(e.options.activeClass))) {
                                var i = s.currentTarget.dataset.tabsLink,
                                    n = t.querySelector("[data-tab=".concat(i, "]"));
                                n && (t.querySelector("".concat(e.dataLink, ".").concat(e.options.activeClass)).classList.remove("".concat(e.options.activeClass)), s.currentTarget.classList.add("".concat(e.options.activeClass)), t.querySelector("[data-tab].".concat(e.options.activeClass)).classList.remove("".concat(e.options.activeClass)), n.classList.add("".concat(e.options.activeClass)))
                            }
                        }))
                    }))
                }))
            }
        }]) && ce(t.prototype, s), Object.defineProperty(t, "prototype", {
            writable: !1
        }), e
    }())(".tabs", {}), new(function() {
        function e(t, s) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.dataAttribute = "accordion", this.$elements = document.querySelectorAll(t), this.options = Object.assign({
                activeClass: "active",
                topSelector: "[data-accordion-top]",
                bodySelector: "[data-accordion-body]",
                syncGroup: !0,
                speed: 300
            }, s), this.init()
        }
        var t, s;
        return t = e, (s = [{
            key: "init",
            value: function() {
                this.$elements && this.clickHandler()
            }
        }, {
            key: "clickHandler",
            value: function() {
                var e = this;
                this.$elements.forEach((function(t) {
                    t.querySelector("".concat(e.options.topSelector)).addEventListener("click", (function() {
                        e.isOpen(t) ? e.close(t) : e.open(t)
                    }))
                }))
            }
        }, {
            key: "isOpen",
            value: function(e) {
                return !!e.classList.contains("".concat(this.options.activeClass))
            }
        }, {
            key: "open",
            value: function(e) {
                this.options.syncGroup && document.querySelector(".".concat(this.options.activeClass, "[data-").concat(this.dataAttribute, "=").concat(e.dataset.accordion, "]")) && this.close(document.querySelector(".".concat(this.options.activeClass, "[data-").concat(this.dataAttribute, "=").concat(e.dataset.accordion, "]")));
                var t = e.querySelector("".concat(this.options.bodySelector));
                t.style.setProperty("--speed", "".concat(this.options.speed / 1e3, "s")), t.style.maxHeight = t.scrollHeight + "px", e.classList.add("".concat(this.options.activeClass))
            }
        }, {
            key: "close",
            value: function(e) {
                var t = e.querySelector("".concat(this.options.bodySelector));
                e.classList.remove("".concat(this.options.activeClass)), t.style.maxHeight = null
            }
        }]) && de(t.prototype, s), Object.defineProperty(t, "prototype", {
            writable: !1
        }), e
    }())("[data-accordion]", {
        syncGroup: !1
    });
    var pe, ue, he = document.querySelectorAll(".schedule-select");

    function fe(e, t) {
        return function(e) {
            if (Array.isArray(e)) return e
        }(e) || function(e, t) {
            var s = null == e ? null : "undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"];
            if (null != s) {
                var i, n, r = [],
                    a = !0,
                    o = !1;
                try {
                    for (s = s.call(e); !(a = (i = s.next()).done) && (r.push(i.value), !t || r.length !== t); a = !0);
                } catch (e) {
                    o = !0, n = e
                } finally {
                    try {
                        a || null == s.return || s.return()
                    } finally {
                        if (o) throw n
                    }
                }
                return r
            }
        }(e, t) || function(e, t) {
            if (e) {
                if ("string" == typeof e) return me(e, t);
                var s = Object.prototype.toString.call(e).slice(8, -1);
                return "Object" === s && e.constructor && (s = e.constructor.name), "Map" === s || "Set" === s ? Array.from(e) : "Arguments" === s || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(s) ? me(e, t) : void 0
            }
        }(e, t) || function() {
            throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }()
    }

    function me(e, t) {
        (null == t || t > e.length) && (t = e.length);
        for (var s = 0, i = new Array(t); s < t; s++) i[s] = e[s];
        return i
    }
    if (he && (he.forEach((function(e) {
        e.addEventListener("click", (function(e) {
            e.stopPropagation()
        })), e.querySelector(".schedule-select__body").querySelectorAll(".schedule-select__field").forEach((function(t) {
            t.addEventListener("click", (function(t) {
                e.querySelector(".schedule-select__top").textContent = t.currentTarget.querySelector("span").textContent, e.classList.remove("active")
            }))
        })), e.querySelector(".schedule-select__top").addEventListener("click", (function(t) {
            e.classList.contains("active") || document.querySelector(".schedule-select.active") && document.querySelector(".schedule-select.active").classList.toggle("active"), e.classList.toggle("active")
        }))
    })), document.body.addEventListener("click", (function(e) {
        document.querySelector(".schedule-select.active") && document.querySelector(".schedule-select.active").classList.remove("active")
    }))), (pe = document.querySelectorAll(".menu-dropdown")) && pe.forEach((function(e) {
        e.addEventListener("click", (function(e) {
            e.preventDefault(), e.currentTarget.querySelector("ul").addEventListener("click", (function(e) {
                e.stopPropagation()
            })), e.currentTarget.classList.toggle("active")
        }))
    })), (ue = document.querySelectorAll(".schedule .swiper-slide")).length > 0 && ue.forEach((function(e) {
        var t = e.querySelectorAll("[data-tab]"),
            s = {};
        t && t.forEach((function(e) {
            var t = {};
            e.querySelectorAll("[data-start-time]").forEach((function(e) {
                var s = e.dataset.startTime,
                    i = document.createElement("span");
                i.textContent = s, e.appendChild(i), t.hasOwnProperty(s) ? t[s] = t[s] + 1 : t[s] = 1
            })), Object.entries(t).forEach((function(e) {
                var t = fe(e, 2),
                    i = t[0],
                    n = t[1];
                s.hasOwnProperty(i) ? s[i] < n && (s[i] = n) : s[i] = n
            }))
        }));
        var i = Object.keys(s).sort().reduce((function(e, t) {
            return e[t] = s[t], e
        }), {});
        e.querySelectorAll(".schedule-slider__time").forEach((function(e) {
            Object.entries(i).forEach((function(t) {
                var s = fe(t, 2),
                    i = s[0],
                    n = s[1],
                    r = document.createElement("div");
                r.classList.add("schedule-slider__time-item"), r.textContent = i, r.style.minHeight = "calc(var(--td-height) * ".concat(n, ")"), e.appendChild(r)
            }))
        }));
        var n = Object.keys(i);
        Object.values(i).reduce((function(e, t, s, i) {
            return e + t
        })), t && t.forEach((function(e) {
            for (var t = [], s = 0; s < n.length; s++) {
                var r = e.querySelectorAll('[data-start-time="'.concat(n[s], '"]'));
                if (r.length > 0) {
                    if (i[n[s]] != r.length)
                        for (var a = 0; a < i[n[s]] - r.length; a++) {
                            var o = document.createElement("div");
                            o.classList.add("tabs-content__td"), o.innerHTML = "<span></span><span>".concat(n[s], "</span>"), r[r.length - 1].parentNode.insertBefore(o, r[r.length - 1].nextSibling)
                        }
                    t.includes(n[s]) || t.push(n[s])
                }
            }
            for (var l = 0, c = 0; c < n.length; c++)
                if (t.includes(n[c])) {
                    for (var d = 1; d <= l; d++)
                        for (var p = 0; p < i[n[c - d]]; p++) {
                            var u = document.createElement("div");
                            u.classList.add("tabs-content__td"), u.innerHTML = "<span></span><span>".concat(n[c - d], "</span>"), e.querySelector('[data-start-time="'.concat(n[c], '"]')).parentNode.insertBefore(u, e.querySelector('[data-start-time="'.concat(n[c], '"]')))
                        }
                    l = 0
                } else if (l += 1, c === n.length - 1) {
                    for (var h = 1; h <= l; h++)
                        for (var f = 0; f < i[n[c - h + 1]]; f++) {
                            var m = document.createElement("div");
                            m.classList.add("tabs-content__td"), m.innerHTML = "<span></span><span>".concat(n[c - h + 1], "</span>"), e.querySelector('[data-start-time="'.concat(t[t.length - 1], '"]')).parentNode.insertBefore(m, e.querySelector('[data-start-time="'.concat(t[t.length - 1], '"]').nextSibling))
                        }
                    l = 0
                }
        }))
    })), document.querySelector("#map")) {
        function e() {
            var e = new ymaps.Map("map", {
                    center: [59.840301, 30.114017],
                    zoom: 13
                }),
                t = new ymaps.Placemark([59.840301, 30.114017], {
                    hintContent: "???????????????????? ???????? EVEREST",
                    balloonContent: ['<div class="map__title">???????????????????? ???????? EVEREST:</div>', '<div class="map__subtitle">????. ??????????????????, ??. 169, ??. 4 ???? ?????????????????????? 3 ????????"</div>', "</div>"].join("")
                }, {
                    iconLayout: "default#image",
                    iconImageHref: "/assets/img/icons/location.svg",
                    iconImageSize: [40, 40],
                    iconImageOffset: [-20, -40]
                });
            e.geoObjects.add(t), e.controls.remove("geolocationControl"), e.controls.remove("searchControl"), e.controls.remove("trafficControl"), e.controls.remove("typeSelector"), e.controls.remove("fullscreenControl"), e.controls.remove("rulerControl"), e.behaviors.disable(["scrollZoom"])
        }
        ymaps.ready(e)
    }
}();
