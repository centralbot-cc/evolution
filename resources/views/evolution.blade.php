<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Casino">
    <meta name="author" content="Evolution Gaming">
    <meta name="build" content="Build Version: 6.20240115.63824.37369-40dbe8a65e at 2024-01-16 07:44:30 UTC" id="build">
    <meta name="browsermode" content="application">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="google" content="notranslate">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title data-sandbox="ignore">Casino</title><noscript><div id="loader-popup"><div><label>Please enable JavaScript in your browser or ad-block settings.</label><a href="">Retry</a></div></div></noscript>
    <script>
        (function() {
            "use strict";
            try {
                Function("var{x,...y}={x:1,...{a:2}};if(y.a!==2||x!==1||!PointerEvent)throw y;")()
            } catch (r) {
                o("ES2017 or PointerEvent")
            }
            var r = new Image;

            function o(r) {
                r = "This browser does not support " + r + ". Redirecting to the error page...";
                try {
                    console.error(r)
                } catch (r) {}
                location.href = "/frontend/evo/errors/unsupported-browsers.html" + location.search + location.hash
            }
            r.onerror = function() {
                o("WebP")
            }, r.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA=="
        })()
    </script>
    <script>
        (function() {
            "use strict";
            try {
                eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
            } catch (e) {}
            window.globalThis || (window.globalThis = window), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
                    const e = this.attributes,
                        t = e.length,
                        r = new Array(t);
                    for (let o = 0; o < t; o++) r[o] = e[o].name;
                    return r
                }),
                function(e) {
                    const t = e.performance || (e.performance = {});

                    function r() {}
                    t.mark || (t.mark = r), t.measure || (t.measure = r), e[Symbol("iOS weakref hack")] = t
                }(globalThis)
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const e = window.location,
                n = e.pathname;
            "/" !== n.slice(-1) && ".html" !== n.slice(-5) && e.replace(`${n}/${e.search}${e.hash}`);
            const o = {};
            for (const e of document.cookie.split(";")) {
                const [n, t] = e.replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/);
                o[n] = n in o ? void 0 : t
            }
            if (!o.cdn && !o.locale) try {
                const n = new URLSearchParams(e.hash.substr(1));
                o.locale = n.get("locale");
                const t = n.get("cdn");
                t && new URL(t).origin.endsWith(".egcdn.com") && (o.cdn = t)
            } catch (e) {}
            window.EVO_CDN = o.ignore_cdn ? "" : (o.cdn || "").replace(/\/+$/, ""), window.EVO_LOCALE = o.locale || void 0, window.EVO_VERBOSE = function() {
                return !1
            }, window.EVO_VERBOSE_ENABLE = function() {
                window.EVO_VERBOSE() || (document.cookie = "verbose=true; path=/", window.EVO_VERBOSE = function(e, n, o, t) {
                    if (!e) return !0;
                    const i = document.getElementById("verbose-log") || document.body;
                    if (!i) return !0;
                    let d = null,
                        r = !1;
                    if (o && (d = i.querySelector(`[data-key="${o}"]`)), d) {
                        const e = d.getAttribute("data-timer");
                        e && window.clearTimeout(parseFloat(e))
                    } else d = document.createElement("div"), o && d.setAttribute("data-key", o), r = !0;
                    if (d.textContent = e, d.style.color = ["", "#ffc", "#fcc"][n || 0], t) {
                        const e = window.setTimeout((() => {
                            d.parentNode === i && i.removeChild(d)
                        }), t);
                        d.setAttribute("data-timer", e.toString())
                    }
                    return r && (i.appendChild(d), i.scrollTop = i.offsetHeight), !0
                }, window.addEventListener("error", i, !0))
            }, window.EVO_VERBOSE_DISABLE = function() {
                document.cookie = "verbose=false; path=/", window.EVO_VERBOSE = function() {
                    return !1
                }, window.removeEventListener("error", i, !0)
            };
            const t = window.location.href.indexOf("verbose=") > -1;

            function i(e) {
                var n;
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                let o = (null === (n = e.error) || void 0 === n ? void 0 : n.stack) || e.message;
                e.filename && (o += ` ${e.filename}`), window.EVO_VERBOSE(o, 2, "", 1e4)
            }
            t && (document.cookie = "verbose=true; path=/"), "true" === o.verbose || t ? window.EVO_VERBOSE_ENABLE() : window.EVO_VERBOSE_DISABLE(), window.addEventListener("unhandledrejection", (e => {
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                const n = e.reason;
                let o = `${n}`;
                const t = n instanceof Error ? n.stack : "";
                (null == n ? void 0 : n.name) && -1 === o.indexOf(n.name) && (o += ` ${n.name}`), (null == n ? void 0 : n.message) && -1 === o.indexOf(n.message) && (o += ` ${n.message}`);
                const i = `Unhandled promise rejection, reason: ${o}`,
                    d = new Error(i),
                    r = e.promise.__stackTraceError,
                    c = r ? r.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
                d.stack = `${i}\n${c}\n${t}`, window.EVO_VERBOSE(i, 2), "undefined" != typeof Sentry && Sentry.captureException(d)
            })), window.EVO_VERBOSE("6.20240115.63824.37369-40dbe8a65e"), window.EVO_CDN && window.EVO_VERBOSE(`cdn: ${window.EVO_CDN}`), window.EVO_POPUP = function(e, n) {
                const o = document.getElementById("loader-popup"),
                    t = i("div", i("label", e));

                function i(e, n) {
                    const o = document.createElement(e);
                    return o.appendChild(function(e) {
                        return "undefined" != typeof Node ? e instanceof Node : "object" == typeof e
                    }(n) ? n : document.createTextNode(n)), o
                }
                null == n || n.forEach((function(e) {
                    const n = i("button", e.content);
                    n.onclick = function() {
                        var n;
                        null === (n = e.callback) || void 0 === n || n.call(e), o.removeChild(t)
                    }, t.appendChild(n)
                })), -1 === o.innerHTML.indexOf(t.outerHTML) && o.appendChild(t)
            }
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const e = "service.worker.2707a854.js";

            function t(t) {
                return !t.active || !t.active.scriptURL.endsWith(e)
            }

            function r(e) {
                "undefined" != typeof Sentry && Sentry.captureException(e)
            }(async function() {
                if (navigator.cookieEnabled) try {
                    await async function() {
                        if (!navigator.serviceWorker) return;
                        const a = await navigator.serviceWorker.getRegistrations();
                        let i = !1;
                        for (const e of a) t(e) ? await e.unregister() : i = !0;
                        i || await navigator.serviceWorker.register(e), navigator.serviceWorker.addEventListener("message", (e => {
                            if ("processing-failed" === e.data.type) {
                                const t = new Error(e.data.message);
                                t.stack = e.data.stack, r(t)
                            }
                        }))
                    }()
                } catch (e) {
                    r(e), console.error(e)
                }
            })()
        })()
    </script>
    <style id="loader">
        *{margin:0;padding:0}body,html{-webkit-text-size-adjust:100%!important;-moz-text-size-adjust:100%!important;text-size-adjust:100%!important;background-color:#000;color:#fff;font:10px/12px Inter,Arial,sans-serif;height:100%}body{position:relative}input,select,textarea{font-family:Inter,Arial,sans-serif}input::-ms-clear{display:none}.uc-video-toolbar{display:none}.loader-frame-container{align-items:center;display:flex;height:100vh;overflow:hidden;position:absolute;right:0;top:0;width:100vw}body.phone .loader-frame-container,body.tablet .loader-frame-container{height:100%;width:100%}.loader-frame-container iframe{background:rgba(0,0,0,.1);border:none;box-sizing:border-box;display:inline-block;vertical-align:top}body.phone .loader-frame-container iframe,body.tablet .loader-frame-container iframe{height:100%;width:100%}.loader-frame-container .games-container{align-items:center;display:flex;flex-wrap:wrap;justify-content:center}body.phone .loader-frame-container .games-container,body.tablet .loader-frame-container .games-container{align-items:start;height:100%;width:100%}.loader-frame-container .sidebar-container{bottom:0;height:100%;position:fixed;right:0}@media (orientation:landscape){.loader-frame-container .sidebar-container{top:0}}.loader-frame-container .sidebar-container iframe{background:0 0;height:100%;width:100%}.loader-frame-container .topbar-container{left:0;position:absolute;right:0;top:0;width:100%}body.tablet .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}body.phone .sidebar-container iframe{animation:MWshowKeyframes .5s linear forwards}body.phone .sidebar-container iframe.disposing{animation:MWhideKeyframes .5s linear}body.phone .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}@media (orientation:landscape){body.phone .loader-frame-container.withTopBar .sidebar-container{top:30px}}@keyframes MWshowKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@keyframes MWhideKeyframes{to{transform:translateY(100vh)}}#loader-popup{align-items:center;bottom:0;display:flex;flex-direction:column;flex-wrap:wrap;font:12px/1.5 Segoe UI,Helvetica,Arial,sans-serif;justify-content:center;left:0;position:absolute;right:0;top:0;-webkit-user-select:none;-moz-user-select:none;user-select:none;z-index:1000001}#loader-popup:empty{display:none}body.tablet #loader-popup{font-size:14px}body.desktop #loader-popup{font-size:calc(1vmin + 5px)}#loader-popup>div{background-color:#1a1a1a;border:.0833em solid rgba(150,255,255,.97);border-radius:.5em;box-sizing:border-box;margin:.5em;max-width:90%;padding:1.4em 2.8em;text-align:center}#loader-popup label{display:block}#loader-popup a,#loader-popup button{background-color:initial;border:.0833em solid #4d4d4d;border-radius:1.5em;color:#dcdcdc;cursor:pointer;font-size:1em;font-weight:400;line-height:2;margin:1em 1em 0;min-width:20%;padding:0 2em;text-decoration:none;text-transform:uppercase;transition:background-color .5s ease}#loader-popup a:hover,#loader-popup button:hover{background-color:hsla(0,0%,100%,.4);color:#fff}#loader-popup body.ka a,#loader-popup body.ka button{text-transform:none}.rootContainer--512ac{display:block;height:100%;left:0;overflow:auto;position:absolute;top:0;width:100%}body.ios.native .rootContainer--512ac{height:100vh;width:100vw}#verbose-log{word-wrap:break-word;color:#fff;font-family:monospace;font-size:10px;height:50vh;left:0;line-height:1;max-width:100%;overflow:hidden;pointer-events:none;position:fixed;text-shadow:1px 1px 2px #000;top:0;white-space:pre-wrap;width:100vw;z-index:1000002}.loadingScreen--87788{align-items:center;background:#000;bottom:0;display:none;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:1000000}.gradient--0f1d8{background-position:50%;background-repeat:no-repeat;background-size:cover;background:linear-gradient(45deg,transparent,rgba(5,10,10,.8) 50%,transparent),linear-gradient(45deg,#414650 -5%,#050a0a 50%,#414650 105%)!important}.loadingScreen--87788.finishProgress--0c00b{opacity:0;transition:opacity .5s}.content--1ddca{position:relative}.content--1ddca.narrow--8d0d9{font-size:6.25vw;height:56.25vw;width:100vw}.content--1ddca.wide--3bffa{font-size:11.11111vh;height:100vh;width:177.77778vh}.center--9aeab{height:.88em;margin:0 auto;top:5.95em;width:2.75em}.center--9aeab,.footer--fba55{left:0;position:absolute;right:0}.footer--fba55{align-items:center;display:flex;flex-direction:column;height:.3em;top:1.15em;width:100%}.footer--fba55>div{font-size:10%;margin-top:1em;white-space:nowrap}.footer--fba55>img{animation:appearingLogoKeyframes--af0f0 .2s linear;height:100%;margin:auto;width:auto}.mobile--76605 .footer--fba55{height:.24em;top:.93em}.mobile--76605 .content--1ddca.narrow--8d0d9{font-size:17vw;height:50vw;width:85vw}.mobile--76605 .content--1ddca.wide--3bffa{font-size:20vh;height:72vh;width:66vh}.mobile--76605 .center--9aeab{bottom:0;position:absolute;top:auto}.mobile--76605 .image--44b6b{bottom:1em;height:auto;max-height:100%;object-fit:contain;position:absolute}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .footer--fba55{height:.23em;top:.9em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .center--9aeab{bottom:.72em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .image--44b6b{bottom:1.62em;margin-left:2.5%;width:95%}.mobile--76605.withFooterLogo--6ca4a .content--1ddca.wide--3bffa{font-size:17vh}.line1--b6711{background-image:radial-gradient(hsla(0,0%,100%,.3) 15%,hsla(0,0%,100%,.1) 60%,hsla(0,0%,100%,0) 70%);background-position:center 0,center 50%;background-repeat:no-repeat,no-repeat;height:11.765%;position:absolute;top:11.765%;visibility:hidden;width:100%}.line1--b6711:after{background-image:radial-gradient(#fff 15%,hsla(0,0%,100%,0) 70%);content:"";display:block;height:18.234%;top:44%}.line1--b6711:after,.line2--f8241{background-position:50%;background-repeat:no-repeat;position:absolute;width:100%}.line2--f8241{background-image:radial-gradient(hsla(0,0%,100%,.5) 15%,hsla(0,0%,100%,.3) 65%,hsla(0,0%,100%,0) 71%);height:1.967%;overflow:hidden;top:17%;visibility:hidden}.star1--da76f{height:47.059%;position:absolute;top:-4.96%;transition:transform .2s;visibility:hidden;width:14.546%}.star2--7a218{animation:starRotationKeyframes--daa9e 2s linear infinite;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='48' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3CradialGradient fx='50%25' fy='50%25' r='49.1%25' id='c'%3E%3Cstop stop-color='%23fff' offset='30%25'/%3E%3Cstop stop-color='%23fff' stop-opacity='.5' offset='100%25'/%3E%3C/radialGradient%3E%3Cfilter x='-84%25' y='-84%25' width='268%25' height='268%25' filterUnits='objectBoundingBox' id='a'%3E%3CfeMorphology radius='.1' operator='dilate' in='SourceAlpha' result='d'/%3E%3CfeOffset in='d' result='e'/%3E%3CfeGaussianBlur stdDeviation='2' in='e' result='f'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0' in='f' result='g'/%3E%3CfeOffset in='SourceAlpha' result='h'/%3E%3CfeGaussianBlur stdDeviation='7' in='h' result='i'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0' in='i' result='j'/%3E%3CfeMerge%3E%3CfeMergeNode in='g'/%3E%3CfeMergeNode in='j'/%3E%3C/feMerge%3E%3C/filter%3E%3Cpath d='M17.4 14H19l11 1-11 1h-1.6l1.1 1.1 7.1 8.5-8.5-7-1.1-1.2V19l-1 11-1-11v-1.6l-1.1 1.1-8.5 7.1 7-8.5 1.2-1.1H11L0 15l11-1h1.6l-1.1-1.1-7.1-8.5 8.5 7 1.1 1.2V11l1-11 1 11v1.6l1.1-1.1 8.5-7.1-7 8.5-1.2 1.1z' id='b'/%3E%3C/defs%3E%3Cg transform='translate(8.8 8.8)' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23000' filter='url(%23a)' xlink:href='%23b'/%3E%3Cuse fill='url(%23c)' xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");background-position:100%;background-repeat:no-repeat;background-size:100% 100%;float:right;height:100%;width:100%}.evoLogo--06ffa{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='330' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF'%3E%3Cpath d='M103.534 5.493h20.347v4.61h-15.06v6.727h10.026v4.61H108.82v7.53h15.525v4.611h-20.812z'/%3E%3Cpath d='M122.88 13.615h5.415l4.738 13.917 4.4-13.917h5.245l-7.276 19.966h-4.865zm18.967 10.025c0-6.09 4.23-10.406 10.28-10.406 6.006 0 10.236 4.315 10.236 10.406 0 6.007-4.314 10.322-10.364 10.322-6.006 0-10.152-4.23-10.152-10.322zm15.186.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.949 2.284-4.949 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.991-2.2 4.991-5.922zm7.714-18.655h5.287v28.469h-5.287zm8.306 20.474V13.615h5.245V25.29c0 2.665 1.27 4.23 3.638 4.23 2.75 0 3.892-2.326 3.892-5.753V13.615h5.245V33.58h-5.245v-2.834c-1.058 2.073-2.877 3.215-5.457 3.215-4.526 0-7.318-3.215-7.318-8.376zm22.815 2.707V17.845h-2.834v-4.23h2.834V9.85l5.119-2.876v6.64h3.934v4.231h-3.976v9.94c0 .974.465 1.397 1.438 1.44h2.326v4.356h-4.06c-3.85-.211-4.696-1.988-4.78-5.288zm11.436-22.715h5.457v5.118h-5.457V5.578zm.085 8.037h5.288V33.58h-5.288V13.615zm7.671 10.025c0-6.09 4.23-10.406 10.28-10.406 6.007 0 10.237 4.315 10.237 10.406 0 6.007-4.315 10.322-10.364 10.322-6.007 0-10.152-4.23-10.152-10.322zm15.187.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.95 2.284-4.95 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.992-2.2 4.992-5.922zm7.671-10.152h5.246v3.257c1.057-2.327 3.003-3.68 5.837-3.68 4.357 0 6.938 2.919 6.938 8.418v11.97h-5.246V21.906c0-2.792-1.057-4.23-3.51-4.23-2.497 0-4.02 2.03-4.02 5.753V33.58h-5.245V13.615zM94.61 8.579C89.833 2.276 81.135.499 73.929 4.347c2.816 6.339 4.926 13.779 18.806 14.214 1.629.051 3.418.007 5.391-.148-.284-3.975-1.578-7.276-3.516-9.834zm-2.56 11.108c-8.35.413-12.272 3.458-14.721 7.213-1.441 2.21-2.374 4.665-3.4 6.974 10.131 5.41 23.214-.295 24.198-14.067-2.253-.177-4.267-.21-6.075-.12z'/%3E%3C/g%3E%3C/svg%3E") no-repeat center .22em;background-size:contain;bottom:0;height:65%;opacity:0;position:absolute;text-align:left;transition:opacity .2s;width:100%}.evoLogo--06ffa:empty{opacity:0}.logoText--42a39{font:300 .14em Segoe UI,Helvetica,Arial,sans-serif;opacity:.65;position:absolute;text-align:center;transition:opacity .2s;width:100%}.image--44b6b{display:block;height:100%;object-fit:cover;opacity:0;transition:opacity .5s;width:100%}.image--44b6b.loaded--10bec{opacity:1}.awardLogos--861ba{align-items:center;display:flex;flex-direction:row;height:10em;justify-items:center;left:.5em;position:absolute;top:.5em}.awardLogos--861ba>img{animation:appearingLogoKeyframes--af0f0 .5s linear;height:100%;padding-right:.5em}.loadingScreen--87788.noImage--01a3d .content--1ddca.narrow--8d0d9{height:84vw}.loadingScreen--87788.noImage--01a3d .content--1ddca.wide--3bffa{height:133vh}.loadingScreen--87788.noImage--01a3d .content--1ddca.tablet--43c30{font-size:6.25vw}.loadingScreen--87788.noImage--01a3d .center--9aeab{height:1em;top:50%;width:2.85em}.loadingScreen--87788.noImage--01a3d .line1--b6711{bottom:0;top:auto}.loadingScreen--87788.noImage--01a3d .line2--f8241{bottom:.045em;top:auto}.loadingScreen--87788.noImage--01a3d .star1--da76f{bottom:-14.5%;height:.4em;top:auto;width:.4em}.loadingScreen--87788.noImage--01a3d .evoLogo--06ffa{background-position:center .36em;bottom:auto;height:1em;left:-1.13em;top:-.5em;width:5.1em}.loadingScreen--87788.noImage--01a3d .logoText--42a39{font-size:.18em}.loadingScreen--87788.properAnimation--47cc2 .line1--b6711,.loadingScreen--87788.properAnimation--47cc2 .line2--f8241,.loadingScreen--87788.properAnimation--47cc2 .star1--da76f{visibility:visible}.loadingScreen--87788.randomAnimation--de14a .star1--da76f{transform:translateX(300%);transition:none;visibility:visible}@media screen and (max-height:35px){.awardLogos--861ba,.evoLogo--06ffa,.image--44b6b{display:none}.content--1ddca{max-height:100vh}}@keyframes starRotationKeyframes--daa9e{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@keyframes appearingLogoKeyframes--af0f0{0%{opacity:0}to{opacity:1}}
    </style>
</head>

<body class="loading notranslate">
    <div id="verbose-log" data-sandbox="ignore"></div>
    <div id="loader-popup"></div>
    <div class="loadingScreen--87788" data-sandbox="ignore">
        <div class="awardLogos--861ba"></div>
        <div class="content--1ddca"><img decoding="async" class="image--44b6b" alt="Loading screen">
            <div class="center--9aeab">
                <div class="line1--b6711"></div>
                <div class="line2--f8241"></div>
                <div class="evoLogo--06ffa"><span class="logoText--42a39"></span></div>
                <div class="star1--da76f">
                    <div class="star2--7a218"></div>
                </div>
                <div class="footer--fba55"></div>
            </div>
        </div>
    </div>
    <div id="root" class="rootContainer--512ac"></div>
    <script>
        var Sentry = function(t) {
            var e = {};

            function n() {
                return "undefined" != typeof window ? window : "undefined" != typeof self ? self : e
            }

            function r(t, e, r) {
                var i = r || n(),
                    s = i.__SENTRY__ = i.__SENTRY__ || {};
                return s[t] || (s[t] = e())
            }
            var i = Object.prototype.toString;

            function s(t) {
                switch (i.call(t)) {
                    case "[object Error]":
                    case "[object Exception]":
                    case "[object DOMException]":
                        return !0;
                    default:
                        return f(t, Error)
                }
            }

            function o(t, e) {
                return i.call(t) === `[object ${e}]`
            }

            function a(t) {
                return o(t, "ErrorEvent")
            }

            function c(t) {
                return o(t, "DOMError")
            }

            function u(t) {
                return o(t, "String")
            }

            function h(t) {
                return null === t || "object" != typeof t && "function" != typeof t
            }

            function l(t) {
                return o(t, "Object")
            }

            function d(t) {
                return "undefined" != typeof Event && f(t, Event)
            }

            function p(t) {
                return Boolean(t && t.then && "function" == typeof t.then)
            }

            function f(t, e) {
                try {
                    return t instanceof e
                } catch (t) {
                    return !1
                }
            }

            function v(t, e) {
                try {
                    let r = t;
                    var n = [];
                    let i, s = 0,
                        o = 0;
                    for (; r && s++ < 5 && (i = g(r, e), !("html" === i || s > 1 && o + 3 * n.length + i.length >= 80));) n.push(i), o += i.length, r = r.parentNode;
                    return n.reverse().join(" > ")
                } catch (t) {
                    return "<unknown>"
                }
            }

            function g(t, e) {
                var n = t,
                    r = [];
                let i, s, o, a, c;
                if (!n || !n.tagName) return "";
                r.push(n.tagName.toLowerCase());
                var h = e && e.length ? e.filter((t => n.getAttribute(t))).map((t => [t, n.getAttribute(t)])) : null;
                if (h && h.length) h.forEach((t => {
                    r.push(`[${t[0]}="${t[1]}"]`)
                }));
                else if (n.id && r.push(`#${n.id}`), i = n.className, i && u(i))
                    for (s = i.split(/\s+/), c = 0; c < s.length; c++) r.push(`.${s[c]}`);
                var l = ["type", "name", "title", "alt"];
                for (c = 0; c < l.length; c++) o = l[c], a = n.getAttribute(o), a && r.push(`[${o}="${a}"]`);
                return r.join("")
            }
            class m extends Error {
                constructor(t) {
                    super(t), this.message = t, this.name = new.target.prototype.constructor.name, Object.setPrototypeOf(this, new.target.prototype)
                }
            }
            var y = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+))?@)([\w.-]+)(?::(\d+))?\/(.+)/;

            function _(t, e = !1) {
                const {
                    host: n,
                    path: r,
                    pass: i,
                    port: s,
                    projectId: o,
                    protocol: a,
                    publicKey: c
                } = t;
                return `${a}://${c}${e&&i?`:${i}`:""}@${n}${s?`:${s}`:""}/${r?`${r}/`:r}${o}`
            }

            function S(t) {
                return {
                    protocol: t.protocol,
                    publicKey: t.publicKey || "",
                    pass: t.pass || "",
                    host: t.host,
                    port: t.port || "",
                    path: t.path || "",
                    projectId: t.projectId
                }
            }

            function x(t) {
                return "string" == typeof t ? function(t) {
                    var e = y.exec(t);
                    if (!e) throw new m(`Invalid Sentry Dsn: ${t}`);
                    const [n, r, i = "", s, o = "", a] = e.slice(1);
                    let c = "",
                        u = a;
                    var h = u.split("/");
                    if (h.length > 1 && (c = h.slice(0, -1).join("/"), u = h.pop()), u) {
                        var l = u.match(/^\d+/);
                        l && (u = l[0])
                    }
                    return S({
                        host: s,
                        pass: i,
                        path: c,
                        projectId: u,
                        port: o,
                        protocol: n,
                        publicKey: r
                    })
                }(t) : S(t)
            }
            var b, E = ["debug", "info", "warn", "error", "log", "assert", "trace"];

            function w(t, e = 0) {
                return "string" != typeof t || 0 === e || t.length <= e ? t : `${t.substr(0,e)}...`
            }

            function k(t, e) {
                if (!Array.isArray(t)) return "";
                var n = [];
                for (let e = 0; e < t.length; e++) {
                    var r = t[e];
                    try {
                        n.push(String(r))
                    } catch (t) {
                        n.push("[value cannot be serialized]")
                    }
                }
                return n.join(e)
            }

            function O(t, e) {
                return !!u(t) && (o(e, "RegExp") ? e.test(t) : "string" == typeof e && -1 !== t.indexOf(e))
            }

            function T(t, e, n) {
                if (e in t) {
                    var r = t[e],
                        i = n(r);
                    if ("function" == typeof i) try {
                        j(i, r)
                    } catch (t) {}
                    t[e] = i
                }
            }

            function D(t, e, n) {
                Object.defineProperty(t, e, {
                    value: n,
                    writable: !0,
                    configurable: !0
                })
            }

            function j(t, e) {
                var n = e.prototype || {};
                t.prototype = e.prototype = n, D(t, "__sentry_original__", e)
            }

            function I(t) {
                return t.__sentry_original__
            }

            function $(t) {
                if (s(t)) return {
                    message: t.message,
                    name: t.name,
                    stack: t.stack,
                    ...C(t)
                };
                if (d(t)) {
                    var e = {
                        type: t.type,
                        target: R(t.target),
                        currentTarget: R(t.currentTarget),
                        ...C(t)
                    };
                    return "undefined" != typeof CustomEvent && f(t, CustomEvent) && (e.detail = t.detail), e
                }
                return t
            }

            function R(t) {
                try {
                    return "undefined" != typeof Element && f(t, Element) ? v(t) : Object.prototype.toString.call(t)
                } catch (t) {
                    return "<unknown>"
                }
            }

            function C(t) {
                if ("object" == typeof t && null !== t) {
                    var e = {};
                    for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
                    return e
                }
                return {}
            }

            function A(t, e = 40) {
                var n = Object.keys($(t));
                if (n.sort(), !n.length) return "[object has no keys]";
                if (n[0].length >= e) return w(n[0], e);
                for (let t = n.length; t > 0; t--) {
                    var r = n.slice(0, t).join(", ");
                    if (!(r.length > e)) return t === n.length ? r : w(r, e)
                }
                return ""
            }

            function N(t) {
                return P(t, new Map)
            }

            function P(t, e) {
                if (l(t)) {
                    if (void 0 !== (i = e.get(t))) return i;
                    var n = {};
                    for (var r of (e.set(t, n), Object.keys(t))) void 0 !== t[r] && (n[r] = P(t[r], e));
                    return n
                }
                var i;
                return Array.isArray(t) ? void 0 !== (i = e.get(t)) ? i : (n = [], e.set(t, n), t.forEach((t => {
                    n.push(P(t, e))
                })), n) : t
            }

            function L(...t) {
                var e = t.sort(((t, e) => t[0] - e[0])).map((t => t[1]));
                return (t, n = 0) => {
                    var r = [];
                    for (var i of t.split("\n").slice(n))
                        for (var s of e) {
                            var o = s(i);
                            if (o) {
                                r.push(o);
                                break
                            }
                        }
                    return function(t) {
                        if (!t.length) return [];
                        let e = t;
                        var n = e[0].function || "",
                            r = e[e.length - 1].function || "";
                        return -1 === n.indexOf("captureMessage") && -1 === n.indexOf("captureException") || (e = e.slice(1)), -1 !== r.indexOf("sentryWrapped") && (e = e.slice(0, -1)), e.slice(0, 50).map((t => ({ ...t,
                            filename: t.filename || e[0].filename,
                            function: t.function || "?"
                        }))).reverse()
                    }(r)
                }
            }
            b = {
                enable: () => {},
                disable: () => {}
            }, E.forEach((t => {
                b[t] = () => {}
            }));
            var M = "<anonymous>";

            function U(t) {
                try {
                    return t && "function" == typeof t && t.name || M
                } catch (t) {
                    return M
                }
            }

            function q() {
                if (!("fetch" in n())) return !1;
                try {
                    return new Headers, new Request(""), new Response, !0
                } catch (t) {
                    return !1
                }
            }

            function B(t) {
                return t && /^function fetch\(\)\s+\{\s+\[native code\]\s+\}$/.test(t.toString())
            }
            var H = n(),
                F = {},
                K = {};

            function W(t, e) {
                F[t] = F[t] || [], F[t].push(e),
                    function(t) {
                        if (!K[t]) switch (K[t] = !0, t) {
                            case "console":
                                "console" in H && E.forEach((function(t) {
                                    t in H.console && T(H.console, t, (function(e) {
                                        return function(...n) {
                                            X("console", {
                                                args: n,
                                                level: t
                                            }), e && e.apply(H.console, n)
                                        }
                                    }))
                                }));
                                break;
                            case "dom":
                                ! function() {
                                    if ("document" in H) {
                                        var t = X.bind(null, "dom"),
                                            e = Z(t, !0);
                                        H.document.addEventListener("click", e, !1), H.document.addEventListener("keypress", e, !1), ["EventTarget", "Node"].forEach((e => {
                                            var n = H[e] && H[e].prototype;
                                            n && n.hasOwnProperty && n.hasOwnProperty("addEventListener") && (T(n, "addEventListener", (function(e) {
                                                return function(n, r, i) {
                                                    if ("click" === n || "keypress" == n) try {
                                                        var s = this.__sentry_instrumentation_handlers__ = this.__sentry_instrumentation_handlers__ || {},
                                                            o = s[n] = s[n] || {
                                                                refCount: 0
                                                            };
                                                        if (!o.handler) {
                                                            var a = Z(t);
                                                            o.handler = a, e.call(this, n, a, i)
                                                        }
                                                        o.refCount += 1
                                                    } catch (t) {}
                                                    return e.call(this, n, r, i)
                                                }
                                            })), T(n, "removeEventListener", (function(t) {
                                                return function(e, n, r) {
                                                    if ("click" === e || "keypress" == e) try {
                                                        var i = this.__sentry_instrumentation_handlers__ || {},
                                                            s = i[e];
                                                        s && (s.refCount -= 1, s.refCount <= 0 && (t.call(this, e, s.handler, r), s.handler = void 0, delete i[e]), 0 === Object.keys(i).length && delete this.__sentry_instrumentation_handlers__)
                                                    } catch (t) {}
                                                    return t.call(this, e, n, r)
                                                }
                                            })))
                                        }))
                                    }
                                }();
                                break;
                            case "xhr":
                                ! function() {
                                    if ("XMLHttpRequest" in H) {
                                        var t = XMLHttpRequest.prototype;
                                        T(t, "open", (function(t) {
                                            return function(...e) {
                                                var n = this,
                                                    r = e[1],
                                                    i = n.__sentry_xhr__ = {
                                                        method: u(e[0]) ? e[0].toUpperCase() : e[0],
                                                        url: e[1]
                                                    };
                                                u(r) && "POST" === i.method && r.match(/sentry_key/) && (n.__sentry_own_request__ = !0);
                                                var s = function() {
                                                    if (4 === n.readyState) {
                                                        try {
                                                            i.status_code = n.status
                                                        } catch (t) {}
                                                        X("xhr", {
                                                            args: e,
                                                            endTimestamp: Date.now(),
                                                            startTimestamp: Date.now(),
                                                            xhr: n
                                                        })
                                                    }
                                                };
                                                return "onreadystatechange" in n && "function" == typeof n.onreadystatechange ? T(n, "onreadystatechange", (function(t) {
                                                    return function(...e) {
                                                        return s(), t.apply(n, e)
                                                    }
                                                })) : n.addEventListener("readystatechange", s), t.apply(n, e)
                                            }
                                        })), T(t, "send", (function(t) {
                                            return function(...e) {
                                                return this.__sentry_xhr__ && void 0 !== e[0] && (this.__sentry_xhr__.body = e[0]), X("xhr", {
                                                    args: e,
                                                    startTimestamp: Date.now(),
                                                    xhr: this
                                                }), t.apply(this, e)
                                            }
                                        }))
                                    }
                                }();
                                break;
                            case "fetch":
                                (function() {
                                    if (!q()) return !1;
                                    var t = n();
                                    if (B(t.fetch)) return !0;
                                    let e = !1;
                                    var r = t.document;
                                    if (r && "function" == typeof r.createElement) try {
                                        var i = r.createElement("iframe");
                                        i.hidden = !0, r.head.appendChild(i), i.contentWindow && i.contentWindow.fetch && (e = B(i.contentWindow.fetch)), r.head.removeChild(i)
                                    } catch (t) {}
                                    return e
                                })() && T(H, "fetch", (function(t) {
                                    return function(...e) {
                                        var n = {
                                            args: e,
                                            fetchData: {
                                                method: G(e),
                                                url: Y(e)
                                            },
                                            startTimestamp: Date.now()
                                        };
                                        return X("fetch", { ...n
                                        }), t.apply(H, e).then((t => (X("fetch", { ...n,
                                            endTimestamp: Date.now(),
                                            response: t
                                        }), t)), (t => {
                                            throw X("fetch", { ...n,
                                                endTimestamp: Date.now(),
                                                error: t
                                            }), t
                                        }))
                                    }
                                }));
                                break;
                            case "history":
                                ! function() {
                                    if (function() {
                                            var t = n(),
                                                e = t.chrome,
                                                r = e && e.app && e.app.runtime,
                                                i = "history" in t && !!t.history.pushState && !!t.history.replaceState;
                                            return !r && i
                                        }()) {
                                        var t = H.onpopstate;
                                        H.onpopstate = function(...e) {
                                            var n = H.location.href,
                                                r = J;
                                            if (J = n, X("history", {
                                                    from: r,
                                                    to: n
                                                }), t) try {
                                                return t.apply(this, e)
                                            } catch (t) {}
                                        }, T(H.history, "pushState", e), T(H.history, "replaceState", e)
                                    }

                                    function e(t) {
                                        return function(...e) {
                                            var n = e.length > 2 ? e[2] : void 0;
                                            if (n) {
                                                var r = J,
                                                    i = String(n);
                                                J = i, X("history", {
                                                    from: r,
                                                    to: i
                                                })
                                            }
                                            return t.apply(this, e)
                                        }
                                    }
                                }();
                                break;
                            case "error":
                                Q = H.onerror, H.onerror = function(t, e, n, r, i) {
                                    return X("error", {
                                        column: r,
                                        error: i,
                                        line: n,
                                        msg: t,
                                        url: e
                                    }), !!Q && Q.apply(this, arguments)
                                };
                                break;
                            case "unhandledrejection":
                                tt = H.onunhandledrejection, H.onunhandledrejection = function(t) {
                                    return X("unhandledrejection", t), !tt || tt.apply(this, arguments)
                                }
                        }
                    }(t)
            }

            function X(t, e) {
                if (t && F[t])
                    for (var n of F[t] || []) try {
                        n(e)
                    } catch (t) {}
            }

            function G(t = []) {
                return "Request" in H && f(t[0], Request) && t[0].method ? String(t[0].method).toUpperCase() : t[1] && t[1].method ? String(t[1].method).toUpperCase() : "GET"
            }

            function Y(t = []) {
                return "string" == typeof t[0] ? t[0] : "Request" in H && f(t[0], Request) ? t[0].url : String(t[0])
            }
            let J, z, V;

            function Z(t, e = !1) {
                return n => {
                    if (n && V !== n && ! function(t) {
                            if ("keypress" !== t.type) return !1;
                            try {
                                var e = t.target;
                                if (!e || !e.tagName) return !0;
                                if ("INPUT" === e.tagName || "TEXTAREA" === e.tagName || e.isContentEditable) return !1
                            } catch (t) {}
                            return !0
                        }(n)) {
                        var r = "keypress" === n.type ? "input" : n.type;
                        (void 0 === z || function(t, e) {
                            if (!t) return !0;
                            if (t.type !== e.type) return !0;
                            try {
                                if (t.target !== e.target) return !0
                            } catch (t) {}
                            return !1
                        }(V, n)) && (t({
                            event: n,
                            name: r,
                            global: e
                        }), V = n), clearTimeout(z), z = H.setTimeout((() => {
                            z = void 0
                        }), 1e3)
                    }
                }
            }
            let Q = null,
                tt = null;

            function et() {
                var t = n(),
                    e = t.crypto || t.msCrypto;
                if (void 0 !== e && e.getRandomValues) {
                    var r = new Uint16Array(8);
                    e.getRandomValues(r), r[3] = 4095 & r[3] | 16384, r[4] = 16383 & r[4] | 32768;
                    var i = t => {
                        let e = t.toString(16);
                        for (; e.length < 4;) e = `0${e}`;
                        return e
                    };
                    return i(r[0]) + i(r[1]) + i(r[2]) + i(r[3]) + i(r[4]) + i(r[5]) + i(r[6]) + i(r[7])
                }
                return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, (t => {
                    var e = 16 * Math.random() | 0;
                    return ("x" === t ? e : 3 & e | 8).toString(16)
                }))
            }

            function nt(t) {
                if (!t) return {};
                var e = t.match(/^(([^:/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
                if (!e) return {};
                var n = e[6] || "",
                    r = e[8] || "";
                return {
                    host: e[4],
                    path: e[5],
                    protocol: e[2],
                    relative: e[5] + n + r
                }
            }

            function rt(t) {
                return t.exception && t.exception.values ? t.exception.values[0] : void 0
            }

            function it(t) {
                const {
                    message: e,
                    event_id: n
                } = t;
                if (e) return e;
                var r = rt(t);
                return r ? r.type && r.value ? `${r.type}: ${r.value}` : r.type || r.value || n || "<unknown>" : n || "<unknown>"
            }

            function st(t, e, n) {
                var r = t.exception = t.exception || {},
                    i = r.values = r.values || [],
                    s = i[0] = i[0] || {};
                s.value || (s.value = e || ""), s.type || (s.type = n || "Error")
            }

            function ot(t, e) {
                var n = rt(t);
                if (n) {
                    var r = n.mechanism;
                    if (n.mechanism = {
                            type: "generic",
                            handled: !0,
                            ...r,
                            ...e
                        }, e && "data" in e) {
                        var i = { ...r && r.data,
                            ...e.data
                        };
                        n.mechanism.data = i
                    }
                }
            }

            function at(t) {
                if (t && t.__sentry_captured__) return !0;
                try {
                    D(t, "__sentry_captured__", !0)
                } catch (t) {}
                return !1
            }

            function ct(t, e = 1 / 0, n = 1 / 0) {
                try {
                    return ht("", t, e, n)
                } catch (t) {
                    return {
                        ERROR: `**non-serializable** (${t})`
                    }
                }
            }

            function ut(t, e = 3, n = 102400) {
                var r, i = ct(t, e);
                return r = i,
                    function(t) {
                        return ~-encodeURI(t).split(/%..|./).length
                    }(JSON.stringify(r)) > n ? ut(t, e - 1, n) : i
            }

            function ht(t, e, n = 1 / 0, r = 1 / 0, i = function() {
                var t = "function" == typeof WeakSet,
                    e = t ? new WeakSet : [];
                return [function(n) {
                    if (t) return !!e.has(n) || (e.add(n), !1);
                    for (let t = 0; t < e.length; t++)
                        if (e[t] === n) return !0;
                    return e.push(n), !1
                }, function(n) {
                    if (t) e.delete(n);
                    else
                        for (let t = 0; t < e.length; t++)
                            if (e[t] === n) {
                                e.splice(t, 1);
                                break
                            }
                }]
            }()) {
                const [s, o] = i;
                if (null === e || ["number", "boolean", "string"].includes(typeof e) && ("number" != typeof(a = e) || a == a)) return e;
                var a, c = function(t, e) {
                    try {
                        return "domain" === t && e && "object" == typeof e && e.t ? "[Domain]" : "domainEmitter" === t ? "[DomainEmitter]" : "undefined" != typeof global && e === global ? "[Global]" : "undefined" != typeof window && e === window ? "[Window]" : "undefined" != typeof document && e === document ? "[Document]" : function(t) {
                            return l(t) && "nativeEvent" in t && "preventDefault" in t && "stopPropagation" in t
                        }(e) ? "[SyntheticEvent]" : "number" == typeof e && e != e ? "[NaN]" : void 0 === e ? "[undefined]" : "function" == typeof e ? `[Function: ${U(e)}]` : "symbol" == typeof e ? `[${String(e)}]` : "bigint" == typeof e ? `[BigInt: ${String(e)}]` : `[object ${Object.getPrototypeOf(e).constructor.name}]`
                    } catch (t) {
                        return `**non-serializable** (${t})`
                    }
                }(t, e);
                if (!c.startsWith("[object ")) return c;
                if (e.__sentry_skip_normalization__) return e;
                if (0 === n) return c.replace("object ", "");
                if (s(e)) return "[Circular ~]";
                var u = e;
                if (u && "function" == typeof u.toJSON) try {
                    return ht("", u.toJSON(), n - 1, r, i)
                } catch (t) {}
                var h = Array.isArray(e) ? [] : {};
                let d = 0;
                var p = $(e);
                for (var f in p)
                    if (Object.prototype.hasOwnProperty.call(p, f)) {
                        if (d >= r) {
                            h[f] = "[MaxProperties ~]";
                            break
                        }
                        var v = p[f];
                        h[f] = ht(f, v, n - 1, r, i), d += 1
                    }
                return o(e), h
            }
            var lt;

            function dt(t) {
                return new ft((e => {
                    e(t)
                }))
            }

            function pt(t) {
                return new ft(((e, n) => {
                    n(t)
                }))
            }! function(t) {
                t[t.PENDING = 0] = "PENDING", t[t.RESOLVED = 1] = "RESOLVED", t[t.REJECTED = 2] = "REJECTED"
            }(lt || (lt = {}));
            class ft {
                __init() {
                    this.i = lt.PENDING
                }
                __init2() {
                    this.o = []
                }
                constructor(t) {
                    ft.prototype.__init.call(this), ft.prototype.__init2.call(this), ft.prototype.__init3.call(this), ft.prototype.__init4.call(this), ft.prototype.__init5.call(this), ft.prototype.__init6.call(this);
                    try {
                        t(this.u, this.h)
                    } catch (t) {
                        this.h(t)
                    }
                }
                then(t, e) {
                    return new ft(((n, r) => {
                        this.o.push([!1, e => {
                            if (t) try {
                                n(t(e))
                            } catch (t) {
                                r(t)
                            } else n(e)
                        }, t => {
                            if (e) try {
                                n(e(t))
                            } catch (t) {
                                r(t)
                            } else r(t)
                        }]), this.l()
                    }))
                } catch (t) {
                    return this.then((t => t), t)
                } finally(t) {
                    return new ft(((e, n) => {
                        let r, i;
                        return this.then((e => {
                            i = !1, r = e, t && t()
                        }), (e => {
                            i = !0, r = e, t && t()
                        })).then((() => {
                            i ? n(r) : e(r)
                        }))
                    }))
                }
                __init3() {
                    this.u = t => {
                        this.v(lt.RESOLVED, t)
                    }
                }
                __init4() {
                    this.h = t => {
                        this.v(lt.REJECTED, t)
                    }
                }
                __init5() {
                    this.v = (t, e) => {
                        this.i === lt.PENDING && (p(e) ? e.then(this.u, this.h) : (this.i = t, this.p = e, this.l()))
                    }
                }
                __init6() {
                    this.l = () => {
                        if (this.i !== lt.PENDING) {
                            var t = this.o.slice();
                            this.o = [], t.forEach((t => {
                                t[0] || (this.i === lt.RESOLVED && t[1](this.p), this.i === lt.REJECTED && t[2](this.p), t[0] = !0)
                            }))
                        }
                    }
                }
            }
            var vt = ["fatal", "error", "warning", "log", "info", "debug"],
                gt = {
                    nowSeconds: () => Date.now() / 1e3
                },
                mt = function() {
                    const {
                        performance: t
                    } = n();
                    if (t && t.now) return {
                        now: () => t.now(),
                        timeOrigin: Date.now() - t.now()
                    }
                }(),
                yt = void 0 === mt ? gt : {
                    nowSeconds: () => (mt.timeOrigin + mt.now()) / 1e3
                },
                _t = gt.nowSeconds.bind(gt),
                St = yt.nowSeconds.bind(yt);

            function xt(t, e = []) {
                return [t, e]
            }

            function bt(t, e) {
                const [n, r] = t;
                return [n, [...r, e]]
            }

            function Et(t, e) {
                t[1].forEach((t => {
                    var n = t[0].type;
                    e(t, n)
                }))
            }

            function wt(t, e) {
                return (e || new TextEncoder).encode(t)
            }

            function kt(t, e) {
                const [n, r] = t;
                let i = JSON.stringify(n);

                function s(t) {
                    "string" == typeof i ? i = "string" == typeof t ? i + t : [wt(i, e), t] : i.push("string" == typeof t ? wt(t, e) : t)
                }
                for (var o of r) {
                    const [t, e] = o;
                    s(`\n${JSON.stringify(t)}\n`), s("string" == typeof e || e instanceof Uint8Array ? e : JSON.stringify(e))
                }
                return "string" == typeof i ? i : function(t) {
                    var e = t.reduce(((t, e) => t + e.length), 0),
                        n = new Uint8Array(e);
                    let r = 0;
                    for (var i of t) n.set(i, r), r += i.length;
                    return n
                }(i)
            }

            function Ot(t, e) {
                var n = "string" == typeof t.data ? wt(t.data, e) : t.data;
                return [N({
                    type: "attachment",
                    length: n.length,
                    filename: t.filename,
                    content_type: t.contentType,
                    attachment_type: t.attachmentType
                }), n]
            }(() => {
                const {
                    performance: t
                } = n();
                if (t && t.now) {
                    var e = 36e5,
                        r = t.now(),
                        i = Date.now(),
                        s = t.timeOrigin ? Math.abs(t.timeOrigin + r - i) : e,
                        o = s < e,
                        a = t.timing && t.timing.navigationStart,
                        c = "number" == typeof a ? Math.abs(a + r - i) : e;
                    (o || c < e) && s <= c && t.timeOrigin
                }
            })();
            var Tt = {
                session: "session",
                sessions: "session",
                attachment: "attachment",
                transaction: "transaction",
                event: "error",
                client_report: "internal",
                user_report: "default"
            };

            function Dt(t) {
                return Tt[t]
            }

            function jt(t, e = {}) {
                if (e.user && (!t.ipAddress && e.user.ip_address && (t.ipAddress = e.user.ip_address), t.did || e.did || (t.did = e.user.id || e.user.email || e.user.username)), t.timestamp = e.timestamp || St(), e.ignoreDuration && (t.ignoreDuration = e.ignoreDuration), e.sid && (t.sid = 32 === e.sid.length ? e.sid : et()), void 0 !== e.init && (t.init = e.init), !t.did && e.did && (t.did = `${e.did}`), "number" == typeof e.started && (t.started = e.started), t.ignoreDuration) t.duration = void 0;
                else if ("number" == typeof e.duration) t.duration = e.duration;
                else {
                    var n = t.timestamp - t.started;
                    t.duration = n >= 0 ? n : 0
                }
                e.release && (t.release = e.release), e.environment && (t.environment = e.environment), !t.ipAddress && e.ipAddress && (t.ipAddress = e.ipAddress), !t.userAgent && e.userAgent && (t.userAgent = e.userAgent), "number" == typeof e.errors && (t.errors = e.errors), e.status && (t.status = e.status)
            }
            class It {
                constructor() {
                    this.m = !1, this.g = [], this._ = [], this.S = [], this.k = [], this.O = {}, this.j = {}, this.T = {}, this.D = {}, this.R = {}
                }
                static clone(t) {
                    var e = new It;
                    return t && (e.S = [...t.S], e.j = { ...t.j
                    }, e.T = { ...t.T
                    }, e.D = { ...t.D
                    }, e.O = t.O, e.I = t.I, e.M = t.M, e.C = t.C, e.N = t.N, e.A = t.A, e._ = [...t._], e.L = t.L, e.k = [...t.k]), e
                }
                addScopeListener(t) {
                    this.g.push(t)
                }
                addEventProcessor(t) {
                    return this._.push(t), this
                }
                setUser(t) {
                    return this.O = t || {}, this.C && jt(this.C, {
                        user: t
                    }), this.U(), this
                }
                getUser() {
                    return this.O
                }
                getRequestSession() {
                    return this.L
                }
                setRequestSession(t) {
                    return this.L = t, this
                }
                setTags(t) {
                    return this.j = { ...this.j,
                        ...t
                    }, this.U(), this
                }
                setTag(t, e) {
                    return this.j = { ...this.j,
                        [t]: e
                    }, this.U(), this
                }
                setExtras(t) {
                    return this.T = { ...this.T,
                        ...t
                    }, this.U(), this
                }
                setExtra(t, e) {
                    return this.T = { ...this.T,
                        [t]: e
                    }, this.U(), this
                }
                setFingerprint(t) {
                    return this.A = t, this.U(), this
                }
                setLevel(t) {
                    return this.I = t, this.U(), this
                }
                setTransactionName(t) {
                    return this.N = t, this.U(), this
                }
                setContext(t, e) {
                    return null === e ? delete this.D[t] : this.D = { ...this.D,
                        [t]: e
                    }, this.U(), this
                }
                setSpan(t) {
                    return this.M = t, this.U(), this
                }
                getSpan() {
                    return this.M
                }
                getTransaction() {
                    var t = this.getSpan();
                    return t && t.transaction
                }
                setSession(t) {
                    return t ? this.C = t : delete this.C, this.U(), this
                }
                getSession() {
                    return this.C
                }
                update(t) {
                    if (!t) return this;
                    if ("function" == typeof t) {
                        var e = t(this);
                        return e instanceof It ? e : this
                    }
                    return t instanceof It ? (this.j = { ...this.j,
                        ...t.j
                    }, this.T = { ...this.T,
                        ...t.T
                    }, this.D = { ...this.D,
                        ...t.D
                    }, t.O && Object.keys(t.O).length && (this.O = t.O), t.I && (this.I = t.I), t.A && (this.A = t.A), t.L && (this.L = t.L)) : l(t) && (this.j = { ...this.j,
                        ...t.tags
                    }, this.T = { ...this.T,
                        ...t.extra
                    }, this.D = { ...this.D,
                        ...t.contexts
                    }, t.user && (this.O = t.user), t.level && (this.I = t.level), t.fingerprint && (this.A = t.fingerprint), t.requestSession && (this.L = t.requestSession)), this
                }
                clear() {
                    return this.S = [], this.j = {}, this.T = {}, this.O = {}, this.D = {}, this.I = void 0, this.N = void 0, this.A = void 0, this.L = void 0, this.M = void 0, this.C = void 0, this.U(), this.k = [], this
                }
                addBreadcrumb(t, e) {
                    var n = "number" == typeof e ? Math.min(e, 100) : 100;
                    if (n <= 0) return this;
                    var r = {
                        timestamp: _t(),
                        ...t
                    };
                    return this.S = [...this.S, r].slice(-n), this.U(), this
                }
                clearBreadcrumbs() {
                    return this.S = [], this.U(), this
                }
                addAttachment(t) {
                    return this.k.push(t), this
                }
                getAttachments() {
                    return this.k
                }
                clearAttachments() {
                    return this.k = [], this
                }
                applyToEvent(t, e = {}) {
                    if (this.T && Object.keys(this.T).length && (t.extra = { ...this.T,
                            ...t.extra
                        }), this.j && Object.keys(this.j).length && (t.tags = { ...this.j,
                            ...t.tags
                        }), this.O && Object.keys(this.O).length && (t.user = { ...this.O,
                            ...t.user
                        }), this.D && Object.keys(this.D).length && (t.contexts = { ...this.D,
                            ...t.contexts
                        }), this.I && (t.level = this.I), this.N && (t.transaction = this.N), this.M) {
                        t.contexts = {
                            trace: this.M.getTraceContext(),
                            ...t.contexts
                        };
                        var n = this.M.transaction && this.M.transaction.name;
                        n && (t.tags = {
                            transaction: n,
                            ...t.tags
                        })
                    }
                    return this.q(t), t.breadcrumbs = [...t.breadcrumbs || [], ...this.S], t.breadcrumbs = t.breadcrumbs.length > 0 ? t.breadcrumbs : void 0, t.sdkProcessingMetadata = { ...t.sdkProcessingMetadata,
                        ...this.R
                    }, this.P([...$t(), ...this._], t, e)
                }
                setSDKProcessingMetadata(t) {
                    return this.R = { ...this.R,
                        ...t
                    }, this
                }
                P(t, e, n, r = 0) {
                    return new ft(((i, s) => {
                        var o = t[r];
                        if (null === e || "function" != typeof o) i(e);
                        else {
                            var a = o({ ...e
                            }, n);
                            p(a) ? a.then((e => this.P(t, e, n, r + 1).then(i))).then(null, s) : this.P(t, a, n, r + 1).then(i).then(null, s)
                        }
                    }))
                }
                U() {
                    this.m || (this.m = !0, this.g.forEach((t => {
                        t(this)
                    })), this.m = !1)
                }
                q(t) {
                    t.fingerprint = t.fingerprint ? Array.isArray(t.fingerprint) ? t.fingerprint : [t.fingerprint] : [], this.A && (t.fingerprint = t.fingerprint.concat(this.A)), t.fingerprint && !t.fingerprint.length && delete t.fingerprint
                }
            }

            function $t() {
                return r("globalEventProcessors", (() => []))
            }

            function Rt(t) {
                $t().push(t)
            }
            var Ct = 100;
            class At {
                __init() {
                    this.H = [{}]
                }
                constructor(t, e = new It, n = 4) {
                    this.F = n, At.prototype.__init.call(this), this.getStackTop().scope = e, t && this.bindClient(t)
                }
                isOlderThan(t) {
                    return this.F < t
                }
                bindClient(t) {
                    this.getStackTop().client = t, t && t.setupIntegrations && t.setupIntegrations()
                }
                pushScope() {
                    var t = It.clone(this.getScope());
                    return this.getStack().push({
                        client: this.getClient(),
                        scope: t
                    }), t
                }
                popScope() {
                    return !(this.getStack().length <= 1 || !this.getStack().pop())
                }
                withScope(t) {
                    var e = this.pushScope();
                    try {
                        t(e)
                    } finally {
                        this.popScope()
                    }
                }
                getClient() {
                    return this.getStackTop().client
                }
                getScope() {
                    return this.getStackTop().scope
                }
                getStack() {
                    return this.H
                }
                getStackTop() {
                    return this.H[this.H.length - 1]
                }
                captureException(t, e) {
                    var n = this.B = e && e.event_id ? e.event_id : et(),
                        r = new Error("Sentry syntheticException");
                    return this.X(((i, s) => {
                        i.captureException(t, {
                            originalException: t,
                            syntheticException: r,
                            ...e,
                            event_id: n
                        }, s)
                    })), n
                }
                captureMessage(t, e, n) {
                    var r = this.B = n && n.event_id ? n.event_id : et(),
                        i = new Error(t);
                    return this.X(((s, o) => {
                        s.captureMessage(t, e, {
                            originalException: t,
                            syntheticException: i,
                            ...n,
                            event_id: r
                        }, o)
                    })), r
                }
                captureEvent(t, e) {
                    var n = e && e.event_id ? e.event_id : et();
                    return "transaction" !== t.type && (this.B = n), this.X(((r, i) => {
                        r.captureEvent(t, { ...e,
                            event_id: n
                        }, i)
                    })), n
                }
                lastEventId() {
                    return this.B
                }
                addBreadcrumb(t, e) {
                    const {
                        scope: r,
                        client: i
                    } = this.getStackTop();
                    if (!r || !i) return;
                    const {
                        beforeBreadcrumb: s = null,
                        maxBreadcrumbs: o = Ct
                    } = i.getOptions && i.getOptions() || {};
                    if (!(o <= 0)) {
                        var a = {
                                timestamp: _t(),
                                ...t
                            },
                            c = s ? function(t) {
                                var e = n();
                                if (!("console" in e)) return t();
                                var r = e.console,
                                    i = {};
                                E.forEach((t => {
                                    var n = r[t] && r[t].__sentry_original__;
                                    t in e.console && n && (i[t] = r[t], r[t] = n)
                                }));
                                try {
                                    return t()
                                } finally {
                                    Object.keys(i).forEach((t => {
                                        r[t] = i[t]
                                    }))
                                }
                            }((() => s(a, e))) : a;
                        null !== c && r.addBreadcrumb(c, o)
                    }
                }
                setUser(t) {
                    var e = this.getScope();
                    e && e.setUser(t)
                }
                setTags(t) {
                    var e = this.getScope();
                    e && e.setTags(t)
                }
                setExtras(t) {
                    var e = this.getScope();
                    e && e.setExtras(t)
                }
                setTag(t, e) {
                    var n = this.getScope();
                    n && n.setTag(t, e)
                }
                setExtra(t, e) {
                    var n = this.getScope();
                    n && n.setExtra(t, e)
                }
                setContext(t, e) {
                    var n = this.getScope();
                    n && n.setContext(t, e)
                }
                configureScope(t) {
                    const {
                        scope: e,
                        client: n
                    } = this.getStackTop();
                    e && n && t(e)
                }
                run(t) {
                    var e = Pt(this);
                    try {
                        t(this)
                    } finally {
                        Pt(e)
                    }
                }
                getIntegration(t) {
                    var e = this.getClient();
                    if (!e) return null;
                    try {
                        return e.getIntegration(t)
                    } catch (t) {
                        return null
                    }
                }
                startTransaction(t, e) {
                    return this.W("startTransaction", t, e)
                }
                traceHeaders() {
                    return this.W("traceHeaders")
                }
                captureSession(t = !1) {
                    if (t) return this.endSession();
                    this.J()
                }
                endSession() {
                    var t = this.getStackTop(),
                        e = t && t.scope,
                        n = e && e.getSession();
                    n && function(t, e) {
                        let n = {};
                        "ok" === t.status && (n = {
                            status: "exited"
                        }), jt(t, n)
                    }(n), this.J(), e && e.setSession()
                }
                startSession(t) {
                    const {
                        scope: e,
                        client: r
                    } = this.getStackTop(), {
                        release: i,
                        environment: s
                    } = r && r.getOptions() || {};
                    var o = n();
                    const {
                        userAgent: a
                    } = o.navigator || {};
                    var c = function(t) {
                        var e = St(),
                            n = {
                                sid: et(),
                                init: !0,
                                timestamp: e,
                                started: e,
                                duration: 0,
                                status: "ok",
                                errors: 0,
                                ignoreDuration: !1,
                                toJSON: () => function(t) {
                                    return N({
                                        sid: `${t.sid}`,
                                        init: t.init,
                                        started: new Date(1e3 * t.started).toISOString(),
                                        timestamp: new Date(1e3 * t.timestamp).toISOString(),
                                        status: t.status,
                                        errors: t.errors,
                                        did: "number" == typeof t.did || "string" == typeof t.did ? `${t.did}` : void 0,
                                        duration: t.duration,
                                        attrs: {
                                            release: t.release,
                                            environment: t.environment,
                                            ip_address: t.ipAddress,
                                            user_agent: t.userAgent
                                        }
                                    })
                                }(n)
                            };
                        return t && jt(n, t), n
                    }({
                        release: i,
                        environment: s,
                        ...e && {
                            user: e.getUser()
                        },
                        ...a && {
                            userAgent: a
                        },
                        ...t
                    });
                    if (e) {
                        var u = e.getSession && e.getSession();
                        u && "ok" === u.status && jt(u, {
                            status: "exited"
                        }), this.endSession(), e.setSession(c)
                    }
                    return c
                }
                shouldSendDefaultPii() {
                    var t = this.getClient(),
                        e = t && t.getOptions();
                    return Boolean(e && e.sendDefaultPii)
                }
                J() {
                    const {
                        scope: t,
                        client: e
                    } = this.getStackTop();
                    if (t) {
                        var n = t.getSession();
                        n && e && e.captureSession && e.captureSession(n)
                    }
                }
                X(t) {
                    const {
                        scope: e,
                        client: n
                    } = this.getStackTop();
                    n && t(n, e)
                }
                W(t, ...e) {
                    var n = Nt().__SENTRY__;
                    if (n && n.extensions && "function" == typeof n.extensions[t]) return n.extensions[t].apply(this, e)
                }
            }

            function Nt() {
                var t = n();
                return t.__SENTRY__ = t.__SENTRY__ || {
                    extensions: {},
                    hub: void 0
                }, t
            }

            function Pt(t) {
                var e = Nt(),
                    n = Mt(e);
                return Ut(e, t), n
            }

            function Lt() {
                var t, e = Nt();
                return (t = e) && t.__SENTRY__ && t.__SENTRY__.hub && !Mt(e).isOlderThan(4) || Ut(e, new At), Mt(e)
            }

            function Mt(t) {
                return r("hub", (() => new At), t)
            }

            function Ut(t, e) {
                return !!t && ((t.__SENTRY__ = t.__SENTRY__ || {}).hub = e, !0)
            }

            function qt(t, e) {
                return Lt().captureException(t, {
                    captureContext: e
                })
            }

            function Bt(t) {
                Lt().withScope(t)
            }

            function Ht(t) {
                var e = t.protocol ? `${t.protocol}:` : "",
                    n = t.port ? `:${t.port}` : "";
                return `${e}//${t.host}${n}${t.path?`/${t.path}`:""}/api/`
            }

            function Ft(t, e = {}) {
                var n = "string" == typeof e ? e : e.tunnel,
                    r = "string" != typeof e && e.K ? e.K.sdk : void 0;
                return n || `${function(t){return`${Ht(t)}${t.projectId}/envelope/`}(t)}?${function(t,e){return n={sentry_key:t.publicKey,sentry_version:"7",...e&&{sentry_client:`${e.name}/${e.version}`}},Object.keys(n).map((t=>`
                $ {
                    encodeURIComponent(t)
                } = $ {
                    encodeURIComponent(n[t])
                }
                `)).join("&");var n}(t,r)}`
            }

            function Kt(t) {
                if (!t || !t.sdk) return;
                const {
                    name: e,
                    version: n
                } = t.sdk;
                return {
                    name: e,
                    version: n
                }
            }
            var Wt = [];

            function Xt(t) {
                return t.reduce(((t, e) => (t.every((t => e.name !== t.name)) && t.push(e), t)), [])
            }

            function Gt(t) {
                var e = t.defaultIntegrations && [...t.defaultIntegrations] || [],
                    n = t.integrations;
                let r = [...Xt(e)];
                Array.isArray(n) ? r = [...r.filter((t => n.every((e => e.name !== t.name)))), ...Xt(n)] : "function" == typeof n && (r = n(r), r = Array.isArray(r) ? r : [r]);
                var i = r.map((t => t.name)),
                    s = "Debug";
                return -1 !== i.indexOf(s) && r.push(...r.splice(i.indexOf(s), 1)), r
            }
            class Yt {
                __init() {
                    this.G = {}
                }
                __init2() {
                    this.V = !1
                }
                __init3() {
                    this.Y = 0
                }
                __init4() {
                    this.Z = {}
                }
                constructor(t) {
                    if (Yt.prototype.__init.call(this), Yt.prototype.__init2.call(this), Yt.prototype.__init3.call(this), Yt.prototype.__init4.call(this), this.tt = t, t.dsn) {
                        this.nt = x(t.dsn);
                        var e = Ft(this.nt, t);
                        this.et = t.transport({
                            recordDroppedEvent: this.recordDroppedEvent.bind(this),
                            ...t.transportOptions,
                            url: e
                        })
                    }
                }
                captureException(t, e, n) {
                    if (at(t)) return;
                    let r = e && e.event_id;
                    return this.rt(this.eventFromException(t, e).then((t => this.it(t, e, n))).then((t => {
                        r = t
                    }))), r
                }
                captureMessage(t, e, n, r) {
                    let i = n && n.event_id;
                    var s = h(t) ? this.eventFromMessage(String(t), e, n) : this.eventFromException(t, n);
                    return this.rt(s.then((t => this.it(t, n, r))).then((t => {
                        i = t
                    }))), i
                }
                captureEvent(t, e, n) {
                    if (e && e.originalException && at(e.originalException)) return;
                    let r = e && e.event_id;
                    return this.rt(this.it(t, e, n).then((t => {
                        r = t
                    }))), r
                }
                captureSession(t) {
                    this.st() && ("string" != typeof t.release || (this.sendSession(t), jt(t, {
                        init: !1
                    })))
                }
                getDsn() {
                    return this.nt
                }
                getOptions() {
                    return this.tt
                }
                getTransport() {
                    return this.et
                }
                flush(t) {
                    var e = this.et;
                    return e ? this.ot(t).then((n => e.flush(t).then((t => n && t)))) : dt(!0)
                }
                close(t) {
                    return this.flush(t).then((t => (this.getOptions().enabled = !1, t)))
                }
                setupIntegrations() {
                    var t, e;
                    this.st() && !this.V && (this.G = (t = this.tt.integrations, e = {}, t.forEach((t => {
                        e[t.name] = t, -1 === Wt.indexOf(t.name) && (t.setupOnce(Rt, Lt), Wt.push(t.name))
                    })), e), this.V = !0)
                }
                getIntegrationById(t) {
                    return this.G[t]
                }
                getIntegration(t) {
                    try {
                        return this.G[t.id] || null
                    } catch (t) {
                        return null
                    }
                }
                sendEvent(t, e = {}) {
                    if (this.nt) {
                        let r = function(t, e, n, r) {
                            var i = Kt(n),
                                s = t.type || "event";
                            const {
                                transactionSampling: o
                            } = t.sdkProcessingMetadata || {}, {
                                method: a,
                                rate: c
                            } = o || {};
                            ! function(t, e) {
                                e && (t.sdk = t.sdk || {}, t.sdk.name = t.sdk.name || e.name, t.sdk.version = t.sdk.version || e.version, t.sdk.integrations = [...t.sdk.integrations || [], ...e.integrations || []], t.sdk.packages = [...t.sdk.packages || [], ...e.packages || []])
                            }(t, n && n.sdk);
                            var u = function(t, e, n, r) {
                                var i = t.sdkProcessingMetadata && t.sdkProcessingMetadata.baggage,
                                    s = i && function(t) {
                                        return t[0]
                                    }(i);
                                return {
                                    event_id: t.event_id,
                                    sent_at: (new Date).toISOString(),
                                    ...e && {
                                        sdk: e
                                    },
                                    ...!!n && {
                                        dsn: _(r)
                                    },
                                    ..."transaction" === t.type && s && {
                                        trace: N({ ...s
                                        })
                                    }
                                }
                            }(t, i, r, e);
                            return delete t.sdkProcessingMetadata, xt(u, [
                                [{
                                    type: s,
                                    sample_rates: [{
                                        id: a,
                                        rate: c
                                    }]
                                }, t]
                            ])
                        }(t, this.nt, this.tt.K, this.tt.tunnel);
                        for (var n of e.attachments || []) r = bt(r, Ot(n, this.tt.transportOptions && this.tt.transportOptions.textEncoder));
                        this.ut(r)
                    }
                }
                sendSession(t) {
                    if (this.nt) {
                        var e = function(t, e, n, r) {
                            var i = Kt(n);
                            return xt({
                                sent_at: (new Date).toISOString(),
                                ...i && {
                                    sdk: i
                                },
                                ...!!r && {
                                    dsn: _(e)
                                }
                            }, ["aggregates" in t ? [{
                                type: "sessions"
                            }, t] : [{
                                type: "session"
                            }, t]])
                        }(t, this.nt, this.tt.K, this.tt.tunnel);
                        this.ut(e)
                    }
                }
                recordDroppedEvent(t, e) {
                    if (this.tt.sendClientReports) {
                        var n = `${t}:${e}`;
                        this.Z[n] = this.Z[n] + 1 || 1
                    }
                }
                at(t, e) {
                    let n = !1,
                        r = !1;
                    var i = e.exception && e.exception.values;
                    if (i)
                        for (var s of (r = !0, i)) {
                            var o = s.mechanism;
                            if (o && !1 === o.handled) {
                                n = !0;
                                break
                            }
                        }
                    var a = "ok" === t.status;
                    (a && 0 === t.errors || a && n) && (jt(t, { ...n && {
                            status: "crashed"
                        },
                        errors: t.errors || Number(r || n)
                    }), this.captureSession(t))
                }
                ot(t) {
                    return new ft((e => {
                        let n = 0;
                        var r = setInterval((() => {
                            0 == this.Y ? (clearInterval(r), e(!0)) : (n += 1, t && n >= t && (clearInterval(r), e(!1)))
                        }), 1)
                    }))
                }
                st() {
                    return !1 !== this.getOptions().enabled && void 0 !== this.nt
                }
                ct(t, e, n) {
                    const {
                        normalizeDepth: r = 3,
                        normalizeMaxBreadth: i = 1e3
                    } = this.getOptions();
                    var s = { ...t,
                        event_id: t.event_id || e.event_id || et(),
                        timestamp: t.timestamp || _t()
                    };
                    this.ft(s), this.ht(s);
                    let o = n;
                    e.captureContext && (o = It.clone(o).update(e.captureContext));
                    let a = dt(s);
                    if (o) {
                        var c = [...e.attachments || [], ...o.getAttachments()];
                        c.length && (e.attachments = c), a = o.applyToEvent(s, e)
                    }
                    return a.then((t => "number" == typeof r && r > 0 ? this.lt(t, r, i) : t))
                }
                lt(t, e, n) {
                    if (!t) return null;
                    var r = { ...t,
                        ...t.breadcrumbs && {
                            breadcrumbs: t.breadcrumbs.map((t => ({ ...t,
                                ...t.data && {
                                    data: ct(t.data, e, n)
                                }
                            })))
                        },
                        ...t.user && {
                            user: ct(t.user, e, n)
                        },
                        ...t.contexts && {
                            contexts: ct(t.contexts, e, n)
                        },
                        ...t.extra && {
                            extra: ct(t.extra, e, n)
                        }
                    };
                    return t.contexts && t.contexts.trace && r.contexts && (r.contexts.trace = t.contexts.trace, t.contexts.trace.data && (r.contexts.trace.data = ct(t.contexts.trace.data, e, n))), t.spans && (r.spans = t.spans.map((t => (t.data && (t.data = ct(t.data, e, n)), t)))), r
                }
                ft(t) {
                    var e = this.getOptions();
                    const {
                        environment: n,
                        release: r,
                        dist: i,
                        maxValueLength: s = 250
                    } = e;
                    "environment" in t || (t.environment = "environment" in e ? n : "production"), void 0 === t.release && void 0 !== r && (t.release = r), void 0 === t.dist && void 0 !== i && (t.dist = i), t.message && (t.message = w(t.message, s));
                    var o = t.exception && t.exception.values && t.exception.values[0];
                    o && o.value && (o.value = w(o.value, s));
                    var a = t.request;
                    a && a.url && (a.url = w(a.url, s))
                }
                ht(t) {
                    var e = Object.keys(this.G);
                    e.length > 0 && (t.sdk = t.sdk || {}, t.sdk.integrations = [...t.sdk.integrations || [], ...e])
                }
                it(t, e = {}, n) {
                    return this.vt(t, e, n).then((t => t.event_id), (t => {}))
                }
                vt(t, e, n) {
                    const {
                        beforeSend: r,
                        sampleRate: i
                    } = this.getOptions();
                    if (!this.st()) return pt(new m("SDK not enabled, will not capture event."));
                    var s = "transaction" === t.type;
                    return !s && "number" == typeof i && Math.random() > i ? (this.recordDroppedEvent("sample_rate", "error"), pt(new m(`Discarding event because it's not included in the random sample (sampling rate = ${i})`))) : this.ct(t, e, n).then((n => {
                        if (null === n) throw this.recordDroppedEvent("event_processor", t.type || "error"), new m("An event processor returned null, will not send event.");
                        return e.data && !0 === e.data.__sentry__ || s || !r ? n : function(t) {
                            var e = "`beforeSend` method has to return `null` or a valid event.";
                            if (p(t)) return t.then((t => {
                                if (!l(t) && null !== t) throw new m(e);
                                return t
                            }), (t => {
                                throw new m(`beforeSend rejected with ${t}`)
                            }));
                            if (!l(t) && null !== t) throw new m(e);
                            return t
                        }(r(n, e))
                    })).then((r => {
                        if (null === r) throw this.recordDroppedEvent("before_send", t.type || "error"), new m("`beforeSend` returned `null`, will not send event.");
                        var i = n && n.getSession();
                        return !s && i && this.at(i, r), this.sendEvent(r, e), r
                    })).then(null, (t => {
                        if (t instanceof m) throw t;
                        throw this.captureException(t, {
                            data: {
                                __sentry__: !0
                            },
                            originalException: t
                        }), new m(`Event processing pipeline threw an error, original event will not be sent. Details have been sent as a new event.\nReason: ${t}`)
                    }))
                }
                rt(t) {
                    this.Y += 1, t.then((t => (this.Y -= 1, t)), (t => (this.Y -= 1, t)))
                }
                ut(t) {
                    this.et && this.nt && this.et.send(t).then(null, (t => {}))
                }
                dt() {
                    var t = this.Z;
                    return this.Z = {}, Object.keys(t).map((e => {
                        const [n, r] = e.split(":");
                        return {
                            reason: n,
                            category: r,
                            quantity: t[e]
                        }
                    }))
                }
            }

            function Jt(t, e, n = function(t) {
                var e = [];

                function n(t) {
                    return e.splice(e.indexOf(t), 1)[0]
                }
                return {
                    $: e,
                    add: function(r) {
                        if (!(void 0 === t || e.length < t)) return pt(new m("Not adding Promise due to buffer limit reached."));
                        var i = r();
                        return -1 === e.indexOf(i) && e.push(i), i.then((() => n(i))).then(null, (() => n(i).then(null, (() => {})))), i
                    },
                    drain: function(t) {
                        return new ft(((n, r) => {
                            let i = e.length;
                            if (!i) return n(!0);
                            var s = setTimeout((() => {
                                t && t > 0 && n(!1)
                            }), t);
                            e.forEach((t => {
                                dt(t).then((() => {
                                    --i || (clearTimeout(s), n(!0))
                                }), r)
                            }))
                        }))
                    }
                }
            }(t.bufferSize || 30)) {
                let r = {};
                return {
                    send: function(i) {
                        var s = [];
                        if (Et(i, ((e, n) => {
                                var i = Dt(n);
                                ! function(t, e, n = Date.now()) {
                                    return function(t, e) {
                                        return t[e] || t.all || 0
                                    }(t, e) > n
                                }(r, i) ? s.push(e): t.recordDroppedEvent("ratelimit_backoff", i)
                            })), 0 === s.length) return dt();
                        var o = xt(i[0], s),
                            a = e => {
                                Et(o, ((n, r) => {
                                    t.recordDroppedEvent(e, Dt(r))
                                }))
                            };
                        return n.add((() => e({
                            body: kt(o, t.textEncoder)
                        }).then((t => {
                            r = function(t, {
                                statusCode: e,
                                headers: n
                            }, r = Date.now()) {
                                var i = { ...t
                                    },
                                    s = n && n["x-sentry-rate-limits"],
                                    o = n && n["retry-after"];
                                if (s)
                                    for (var a of s.trim().split(",")) {
                                        const [t, e] = a.split(":", 2);
                                        var c = parseInt(t, 10),
                                            u = 1e3 * (isNaN(c) ? 60 : c);
                                        if (e)
                                            for (var h of e.split(";")) i[h] = r + u;
                                        else i.all = r + u
                                    } else o ? i.all = r + function(t, e = Date.now()) {
                                        var n = parseInt(`${t}`, 10);
                                        if (!isNaN(n)) return 1e3 * n;
                                        var r = Date.parse(`${t}`);
                                        return isNaN(r) ? 6e4 : r - e
                                    }(o, r) : 429 === e && (i.all = r + 6e4);
                                return i
                            }(r, t)
                        }), (t => {
                            a("network_error")
                        })))).then((t => t), (t => {
                            if (t instanceof m) return a("queue_overflow"), dt();
                            throw t
                        }))
                    },
                    flush: t => n.drain(t)
                }
            }
            var zt = "7.7.0";
            let Vt;
            class Zt {
                constructor() {
                    Zt.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "FunctionToString"
                }
                __init() {
                    this.name = Zt.id
                }
                setupOnce() {
                    Vt = Function.prototype.toString, Function.prototype.toString = function(...t) {
                        var e = I(this) || this;
                        return Vt.apply(e, t)
                    }
                }
            }
            Zt.__initStatic();
            var Qt = [/^Script error\.?$/, /^Javascript error: Script error\.? on line 0$/];
            class te {
                static __initStatic() {
                    this.id = "InboundFilters"
                }
                __init() {
                    this.name = te.id
                }
                constructor(t = {}) {
                    this.tt = t, te.prototype.__init.call(this)
                }
                setupOnce(t, e) {
                    var n = t => {
                        var n = e();
                        if (n) {
                            var r = n.getIntegration(te);
                            if (r) {
                                var i = n.getClient(),
                                    s = i ? i.getOptions() : {},
                                    o = function(t = {}, e = {}) {
                                        return {
                                            allowUrls: [...t.allowUrls || [], ...e.allowUrls || []],
                                            denyUrls: [...t.denyUrls || [], ...e.denyUrls || []],
                                            ignoreErrors: [...t.ignoreErrors || [], ...e.ignoreErrors || [], ...Qt],
                                            ignoreInternal: void 0 === t.ignoreInternal || t.ignoreInternal
                                        }
                                    }(r.tt, s);
                                return function(t, e) {
                                    return !((!e.ignoreInternal || ! function(t) {
                                        try {
                                            return "SentryError" === t.exception.values[0].type
                                        } catch (t) {}
                                        return !1
                                    }(t)) && ! function(t, e) {
                                        return !(!e || !e.length) && function(t) {
                                            if (t.message) return [t.message];
                                            if (t.exception) try {
                                                const {
                                                    type: e = "",
                                                    value: n = ""
                                                } = t.exception.values && t.exception.values[0] || {};
                                                return [`${n}`, `${e}: ${n}`]
                                            } catch (t) {
                                                return []
                                            }
                                            return []
                                        }(t).some((t => e.some((e => O(t, e)))))
                                    }(t, e.ignoreErrors) && ! function(t, e) {
                                        if (!e || !e.length) return !1;
                                        var n = ee(t);
                                        return !!n && e.some((t => O(n, t)))
                                    }(t, e.denyUrls) && function(t, e) {
                                        if (!e || !e.length) return !0;
                                        var n = ee(t);
                                        return !n || e.some((t => O(n, t)))
                                    }(t, e.allowUrls))
                                }(t, o) ? null : t
                            }
                        }
                        return t
                    };
                    n.id = this.name, t(n)
                }
            }

            function ee(t) {
                try {
                    let e;
                    try {
                        e = t.exception.values[0].stacktrace.frames
                    } catch (t) {}
                    return e ? function(t = []) {
                        for (let n = t.length - 1; n >= 0; n--) {
                            var e = t[n];
                            if (e && "<anonymous>" !== e.filename && "[native code]" !== e.filename) return e.filename || null
                        }
                        return null
                    }(e) : null
                } catch (t) {
                    return null
                }
            }
            te.__initStatic();
            var ne = Object.freeze({
                __proto__: null,
                FunctionToString: Zt,
                InboundFilters: te
            });

            function re(t, e) {
                const n = se(t, e),
                    r = {
                        type: e && e.name,
                        value: ae(e)
                    };
                return n.length && (r.stacktrace = {
                    frames: n
                }), void 0 === r.type && "" === r.value && (r.value = "Unrecoverable error caught"), r
            }

            function ie(t, e) {
                return {
                    exception: {
                        values: [re(t, e)]
                    }
                }
            }

            function se(t, e) {
                const n = e.stacktrace || e.stack || "",
                    r = function(t) {
                        if (t) {
                            if ("number" == typeof t.framesToPop) return t.framesToPop;
                            if (oe.test(t.message)) return 1
                        }
                        return 0
                    }(e);
                try {
                    return t(n, r)
                } catch (t) {}
                return []
            }
            const oe = /Minified React error #\d+;/i;

            function ae(t) {
                const e = t && t.message;
                return e ? e.error && "string" == typeof e.error.message ? e.error.message : e : "No error message"
            }

            function ce(t, e, n, r, i) {
                let u;
                if (a(e) && e.error) return ie(t, e.error);
                if (c(e) || o(e, "DOMException")) {
                    const i = e;
                    if ("stack" in e) u = ie(t, e);
                    else {
                        const e = i.name || (c(i) ? "DOMError" : "DOMException"),
                            s = i.message ? `${e}: ${i.message}` : e;
                        u = ue(t, s, n, r), st(u, s)
                    }
                    return "code" in i && (u.tags = { ...u.tags,
                        "DOMException.code": `${i.code}`
                    }), u
                }
                return s(e) ? ie(t, e) : l(e) || d(e) ? (u = function(t, e, n, r) {
                    const i = {
                        exception: {
                            values: [{
                                type: d(e) ? e.constructor.name : r ? "UnhandledRejection" : "Error",
                                value: `Non-Error ${r?"promise rejection":"exception"} captured with keys: ${A(e)}`
                            }]
                        },
                        extra: {
                            __serialized__: ut(e)
                        }
                    };
                    if (n) {
                        const e = se(t, n);
                        e.length && (i.exception.values[0].stacktrace = {
                            frames: e
                        })
                    }
                    return i
                }(t, e, n, i), ot(u, {
                    synthetic: !0
                }), u) : (u = ue(t, e, n, r), st(u, `${e}`, void 0), ot(u, {
                    synthetic: !0
                }), u)
            }

            function ue(t, e, n, r) {
                const i = {
                    message: e
                };
                if (r && n) {
                    const r = se(t, n);
                    r.length && (i.exception = {
                        values: [{
                            value: e,
                            stacktrace: {
                                frames: r
                            }
                        }]
                    })
                }
                return i
            }
            const he = "Breadcrumbs";
            class le {
                static __initStatic() {
                    this.id = he
                }
                __init() {
                    this.name = le.id
                }
                constructor(t) {
                    le.prototype.__init.call(this), this.options = {
                        console: !0,
                        dom: !0,
                        fetch: !0,
                        history: !0,
                        sentry: !0,
                        xhr: !0,
                        ...t
                    }
                }
                setupOnce() {
                    this.options.console && W("console", de), this.options.dom && W("dom", function(t) {
                        return function(e) {
                            let n, r = "object" == typeof t ? t.serializeAttribute : void 0;
                            "string" == typeof r && (r = [r]);
                            try {
                                n = e.event.target ? v(e.event.target, r) : v(e.event, r)
                            } catch (t) {
                                n = "<unknown>"
                            }
                            0 !== n.length && Lt().addBreadcrumb({
                                category: `ui.${e.name}`,
                                message: n
                            }, {
                                event: e.event,
                                name: e.name,
                                global: e.global
                            })
                        }
                    }(this.options.dom)), this.options.xhr && W("xhr", pe), this.options.fetch && W("fetch", fe), this.options.history && W("history", ve)
                }
            }

            function de(t) {
                const e = {
                    category: "console",
                    data: {
                        arguments: t.args,
                        logger: "console"
                    },
                    level: (n = t.level, "warn" === n ? "warning" : vt.includes(n) ? n : "log"),
                    message: k(t.args, " ")
                };
                var n;
                if ("assert" === t.level) {
                    if (!1 !== t.args[0]) return;
                    e.message = `Assertion failed: ${k(t.args.slice(1)," ")||"console.assert"}`, e.data.arguments = t.args.slice(1)
                }
                Lt().addBreadcrumb(e, {
                    input: t.args,
                    level: t.level
                })
            }

            function pe(t) {
                if (t.endTimestamp) {
                    if (t.xhr.__sentry_own_request__) return;
                    const {
                        method: e,
                        url: n,
                        status_code: r,
                        body: i
                    } = t.xhr.__sentry_xhr__ || {};
                    Lt().addBreadcrumb({
                        category: "xhr",
                        data: {
                            method: e,
                            url: n,
                            status_code: r
                        },
                        type: "http"
                    }, {
                        xhr: t.xhr,
                        input: i
                    })
                }
            }

            function fe(t) {
                t.endTimestamp && (t.fetchData.url.match(/sentry_key/) && "POST" === t.fetchData.method || (t.error ? Lt().addBreadcrumb({
                    category: "fetch",
                    data: t.fetchData,
                    level: "error",
                    type: "http"
                }, {
                    data: t.error,
                    input: t.args
                }) : Lt().addBreadcrumb({
                    category: "fetch",
                    data: { ...t.fetchData,
                        status_code: t.response.status
                    },
                    type: "http"
                }, {
                    input: t.args,
                    response: t.response
                })))
            }

            function ve(t) {
                const e = n();
                let r = t.from,
                    i = t.to;
                const s = nt(e.location.href);
                let o = nt(r);
                const a = nt(i);
                o.path || (o = s), s.protocol === a.protocol && s.host === a.host && (i = a.relative), s.protocol === o.protocol && s.host === o.host && (r = o.relative), Lt().addBreadcrumb({
                    category: "navigation",
                    data: {
                        from: r,
                        to: i
                    }
                })
            }
            le.__initStatic();
            const ge = n();
            let me;

            function ye() {
                if (me) return me;
                if (B(ge.fetch)) return me = ge.fetch.bind(ge);
                const t = ge.document;
                let e = ge.fetch;
                if (t && "function" == typeof t.createElement) try {
                    const n = t.createElement("iframe");
                    n.hidden = !0, t.head.appendChild(n);
                    const r = n.contentWindow;
                    r && r.fetch && (e = r.fetch), t.head.removeChild(n)
                } catch (t) {}
                return me = e.bind(ge)
            }
            const _e = n();
            class Se extends Yt {
                constructor(t) {
                    t.K = t.K || {}, t.K.sdk = t.K.sdk || {
                        name: "sentry.javascript.browser",
                        packages: [{
                            name: "npm:@sentry/browser",
                            version: zt
                        }],
                        version: zt
                    }, super(t), t.sendClientReports && _e.document && _e.document.addEventListener("visibilitychange", (() => {
                        "hidden" === _e.document.visibilityState && this.yt()
                    }))
                }
                eventFromException(t, e) {
                    return function(t, e, n, r) {
                        const i = ce(t, e, n && n.syntheticException || void 0, r);
                        return ot(i), i.level = "error", n && n.event_id && (i.event_id = n.event_id), dt(i)
                    }(this.tt.stackParser, t, e, this.tt.attachStacktrace)
                }
                eventFromMessage(t, e = "info", n) {
                    return function(t, e, n = "info", r, i) {
                        const s = ue(t, e, r && r.syntheticException || void 0, i);
                        return s.level = n, r && r.event_id && (s.event_id = r.event_id), dt(s)
                    }(this.tt.stackParser, t, e, n, this.tt.attachStacktrace)
                }
                sendEvent(t, e) {
                    const n = this.getIntegrationById(he);
                    n && n.options && n.options.sentry && Lt().addBreadcrumb({
                        category: "sentry." + ("transaction" === t.type ? "transaction" : "event"),
                        event_id: t.event_id,
                        level: t.level,
                        message: it(t)
                    }, {
                        event: t
                    }), super.sendEvent(t, e)
                }
                ct(t, e, n) {
                    return t.platform = t.platform || "javascript", super.ct(t, e, n)
                }
                yt() {
                    const t = this.dt();
                    if (0 === t.length) return;
                    if (!this.nt) return;
                    const e = Ft(this.nt, this.tt),
                        n = (r = t, xt((i = this.tt.tunnel && _(this.nt)) ? {
                            dsn: i
                        } : {}, [
                            [{
                                type: "client_report"
                            }, {
                                timestamp: _t(),
                                discarded_events: r
                            }]
                        ]));
                    var r, i;
                    try {
                        ! function(t, e) {
                            "[object Navigator]" === Object.prototype.toString.call(ge && ge.navigator) && "function" == typeof ge.navigator.sendBeacon ? ge.navigator.sendBeacon.bind(ge.navigator)(t, e) : q() && ye()(t, {
                                body: e,
                                method: "POST",
                                credentials: "omit",
                                keepalive: !0
                            }).then(null, (t => {}))
                        }(e, kt(n))
                    } catch (t) {}
                }
            }

            function xe(t, e = ye()) {
                return Jt(t, (function(n) {
                    const r = {
                        body: n.body,
                        method: "POST",
                        referrerPolicy: "origin",
                        headers: t.headers,
                        ...t.fetchOptions
                    };
                    return e(t.url, r).then((t => ({
                        statusCode: t.status,
                        headers: {
                            "x-sentry-rate-limits": t.headers.get("X-Sentry-Rate-Limits"),
                            "retry-after": t.headers.get("Retry-After")
                        }
                    })))
                }))
            }

            function be(t) {
                return Jt(t, (function(e) {
                    return new ft(((n, r) => {
                        const i = new XMLHttpRequest;
                        i.onerror = r, i.onreadystatechange = () => {
                            4 === i.readyState && n({
                                statusCode: i.status,
                                headers: {
                                    "x-sentry-rate-limits": i.getResponseHeader("X-Sentry-Rate-Limits"),
                                    "retry-after": i.getResponseHeader("Retry-After")
                                }
                            })
                        }, i.open("POST", t.url);
                        for (const e in t.headers) Object.prototype.hasOwnProperty.call(t.headers, e) && i.setRequestHeader(e, t.headers[e]);
                        i.send(e.body)
                    }))
                }))
            }
            const Ee = "?";

            function we(t, e, n, r) {
                const i = {
                    filename: t,
                    function: e,
                    in_app: !0
                };
                return void 0 !== n && (i.lineno = n), void 0 !== r && (i.colno = r), i
            }
            const ke = /^\s*at (?:(.*?) ?\((?:address at )?)?((?:file|https?|blob|chrome-extension|address|native|eval|webpack|<anonymous>|[-a-z]+:|.*bundle|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
                Oe = /\((\S*)(?::(\d+))(?::(\d+))\)/,
                Te = [30, t => {
                    const e = ke.exec(t);
                    if (e) {
                        if (e[2] && 0 === e[2].indexOf("eval")) {
                            const t = Oe.exec(e[2]);
                            t && (e[2] = t[1], e[3] = t[2], e[4] = t[3])
                        }
                        const [t, n] = Ue(e[1] || Ee, e[2]);
                        return we(n, t, e[3] ? +e[3] : void 0, e[4] ? +e[4] : void 0)
                    }
                }],
                De = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)?((?:file|https?|blob|chrome|webpack|resource|moz-extension|capacitor).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js)|\/[\w\-. /=]+)(?::(\d+))?(?::(\d+))?\s*$/i,
                je = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
                Ie = [50, t => {
                    const e = De.exec(t);
                    if (e) {
                        if (e[3] && e[3].indexOf(" > eval") > -1) {
                            const t = je.exec(e[3]);
                            t && (e[1] = e[1] || "eval", e[3] = t[1], e[4] = t[2], e[5] = "")
                        }
                        let t = e[3],
                            n = e[1] || Ee;
                        return [n, t] = Ue(n, t), we(t, n, e[4] ? +e[4] : void 0, e[5] ? +e[5] : void 0)
                    }
                }],
                $e = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
                Re = [40, t => {
                    const e = $e.exec(t);
                    return e ? we(e[2], e[1] || Ee, +e[3], e[4] ? +e[4] : void 0) : void 0
                }],
                Ce = / line (\d+).*script (?:in )?(\S+)(?:: in function (\S+))?$/i,
                Ae = [10, t => {
                    const e = Ce.exec(t);
                    return e ? we(e[2], e[3] || Ee, +e[1]) : void 0
                }],
                Ne = / line (\d+), column (\d+)\s*(?:in (?:<anonymous function: ([^>]+)>|([^)]+))\(.*\))? in (.*):\s*$/i,
                Pe = [20, t => {
                    const e = Ne.exec(t);
                    return e ? we(e[5], e[3] || e[4] || Ee, +e[1], +e[2]) : void 0
                }],
                Le = [Te, Ie, Re],
                Me = L(...Le),
                Ue = (t, e) => {
                    const n = -1 !== t.indexOf("safari-extension"),
                        r = -1 !== t.indexOf("safari-web-extension");
                    return n || r ? [-1 !== t.indexOf("@") ? t.split("@")[0] : Ee, n ? `safari-extension:${e}` : `safari-web-extension:${e}`] : [t, e]
                };
            let qe = 0;

            function Be() {
                return qe > 0
            }

            function He(t, e = {}, n) {
                if ("function" != typeof t) return t;
                try {
                    const e = t.__sentry_wrapped__;
                    if (e) return e;
                    if (I(t)) return t
                } catch (e) {
                    return t
                }
                const r = function() {
                    const r = Array.prototype.slice.call(arguments);
                    try {
                        n && "function" == typeof n && n.apply(this, arguments);
                        const i = r.map((t => He(t, e)));
                        return t.apply(this, i)
                    } catch (t) {
                        throw qe += 1, setTimeout((() => {
                            qe -= 1
                        })), Bt((n => {
                            n.addEventProcessor((t => (e.mechanism && (st(t, void 0, void 0), ot(t, e.mechanism)), t.extra = { ...t.extra,
                                arguments: r
                            }, t))), qt(t)
                        })), t
                    }
                };
                try {
                    for (const e in t) Object.prototype.hasOwnProperty.call(t, e) && (r[e] = t[e])
                } catch (t) {}
                j(r, t), D(t, "__sentry_wrapped__", r);
                try {
                    Object.getOwnPropertyDescriptor(r, "name").configurable && Object.defineProperty(r, "name", {
                        get: () => t.name
                    })
                } catch (t) {}
                return r
            }
            class Fe {
                static __initStatic() {
                    this.id = "GlobalHandlers"
                }
                __init() {
                    this.name = Fe.id
                }
                __init2() {
                    this.gt = {
                        onerror: Ke,
                        onunhandledrejection: We
                    }
                }
                constructor(t) {
                    Fe.prototype.__init.call(this), Fe.prototype.__init2.call(this), this.tt = {
                        onerror: !0,
                        onunhandledrejection: !0,
                        ...t
                    }
                }
                setupOnce() {
                    Error.stackTraceLimit = 50;
                    const t = this.tt;
                    for (const e in t) {
                        const n = this.gt[e];
                        n && t[e] && (n(), this.gt[e] = void 0)
                    }
                }
            }

            function Ke() {
                W("error", (t => {
                    const [e, n, r] = Ye();
                    if (!e.getIntegration(Fe)) return;
                    const {
                        msg: i,
                        url: s,
                        line: o,
                        column: c,
                        error: h
                    } = t;
                    if (Be() || h && h.__sentry_own_request__) return;
                    const l = void 0 === h && u(i) ? function(t, e, n, r) {
                        let i = a(t) ? t.message : t,
                            s = "Error";
                        const o = i.match(/^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/i);
                        return o && (s = o[1], i = o[2]), Xe({
                            exception: {
                                values: [{
                                    type: s,
                                    value: i
                                }]
                            }
                        }, e, n, r)
                    }(i, s, o, c) : Xe(ce(n, h || i, void 0, r, !1), s, o, c);
                    l.level = "error", Ge(e, h, l, "onerror")
                }))
            }

            function We() {
                W("unhandledrejection", (t => {
                    const [e, n, r] = Ye();
                    if (!e.getIntegration(Fe)) return;
                    let i = t;
                    try {
                        "reason" in t ? i = t.reason : "detail" in t && "reason" in t.detail && (i = t.detail.reason)
                    } catch (t) {}
                    if (Be() || i && i.__sentry_own_request__) return !0;
                    const s = h(i) ? {
                        exception: {
                            values: [{
                                type: "UnhandledRejection",
                                value: `Non-Error promise rejection captured with value: ${String(i)}`
                            }]
                        }
                    } : ce(n, i, void 0, r, !0);
                    s.level = "error", Ge(e, i, s, "onunhandledrejection")
                }))
            }

            function Xe(t, e, r, i) {
                const s = t.exception = t.exception || {},
                    o = s.values = s.values || [],
                    a = o[0] = o[0] || {},
                    c = a.stacktrace = a.stacktrace || {},
                    h = c.frames = c.frames || [],
                    l = isNaN(parseInt(i, 10)) ? void 0 : i,
                    d = isNaN(parseInt(r, 10)) ? void 0 : r,
                    p = u(e) && e.length > 0 ? e : function() {
                        var t = n();
                        try {
                            return t.document.location.href
                        } catch (t) {
                            return ""
                        }
                    }();
                return 0 === h.length && h.push({
                    colno: l,
                    filename: p,
                    function: "?",
                    in_app: !0,
                    lineno: d
                }), t
            }

            function Ge(t, e, n, r) {
                ot(n, {
                    handled: !1,
                    type: r
                }), t.captureEvent(n, {
                    originalException: e
                })
            }

            function Ye() {
                const t = Lt(),
                    e = t.getClient(),
                    n = e && e.getOptions() || {
                        stackParser: () => [],
                        attachStacktrace: !1
                    };
                return [t, n.stackParser, n.attachStacktrace]
            }
            Fe.__initStatic();
            const Je = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"];
            class ze {
                static __initStatic() {
                    this.id = "TryCatch"
                }
                __init() {
                    this.name = ze.id
                }
                constructor(t) {
                    ze.prototype.__init.call(this), this.tt = {
                        XMLHttpRequest: !0,
                        eventTarget: !0,
                        requestAnimationFrame: !0,
                        setInterval: !0,
                        setTimeout: !0,
                        ...t
                    }
                }
                setupOnce() {
                    const t = n();
                    this.tt.setTimeout && T(t, "setTimeout", Ve), this.tt.setInterval && T(t, "setInterval", Ve), this.tt.requestAnimationFrame && T(t, "requestAnimationFrame", Ze), this.tt.XMLHttpRequest && "XMLHttpRequest" in t && T(XMLHttpRequest.prototype, "send", Qe);
                    const e = this.tt.eventTarget;
                    e && (Array.isArray(e) ? e : Je).forEach(tn)
                }
            }

            function Ve(t) {
                return function(...e) {
                    const n = e[0];
                    return e[0] = He(n, {
                        mechanism: {
                            data: {
                                function: U(t)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    }), t.apply(this, e)
                }
            }

            function Ze(t) {
                return function(e) {
                    return t.apply(this, [He(e, {
                        mechanism: {
                            data: {
                                function: "requestAnimationFrame",
                                handler: U(t)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    })])
                }
            }

            function Qe(t) {
                return function(...e) {
                    const n = this;
                    return ["onload", "onerror", "onprogress", "onreadystatechange"].forEach((t => {
                        t in n && "function" == typeof n[t] && T(n, t, (function(e) {
                            const n = {
                                    mechanism: {
                                        data: {
                                            function: t,
                                            handler: U(e)
                                        },
                                        handled: !0,
                                        type: "instrument"
                                    }
                                },
                                r = I(e);
                            return r && (n.mechanism.data.handler = U(r)), He(e, n)
                        }))
                    })), t.apply(this, e)
                }
            }

            function tn(t) {
                const e = n(),
                    r = e[t] && e[t].prototype;
                r && r.hasOwnProperty && r.hasOwnProperty("addEventListener") && (T(r, "addEventListener", (function(e) {
                    return function(n, r, i) {
                        try {
                            "function" == typeof r.handleEvent && (r.handleEvent = He(r.handleEvent, {
                                mechanism: {
                                    data: {
                                        function: "handleEvent",
                                        handler: U(r),
                                        target: t
                                    },
                                    handled: !0,
                                    type: "instrument"
                                }
                            }))
                        } catch (t) {}
                        return e.apply(this, [n, He(r, {
                            mechanism: {
                                data: {
                                    function: "addEventListener",
                                    handler: U(r),
                                    target: t
                                },
                                handled: !0,
                                type: "instrument"
                            }
                        }), i])
                    }
                })), T(r, "removeEventListener", (function(t) {
                    return function(e, n, r) {
                        const i = n;
                        try {
                            const n = i && i.__sentry_wrapped__;
                            n && t.call(this, e, n, r)
                        } catch (t) {}
                        return t.call(this, e, i, r)
                    }
                })))
            }
            ze.__initStatic();
            class en {
                static __initStatic() {
                    this.id = "LinkedErrors"
                }
                __init() {
                    this.name = en.id
                }
                constructor(t = {}) {
                    en.prototype.__init.call(this), this.bt = t.key || "cause", this._t = t.limit || 5
                }
                setupOnce() {
                    const t = Lt().getClient();
                    t && Rt(((e, n) => {
                        const r = Lt().getIntegration(en);
                        return r ? function(t, e, n, r, i) {
                            if (!(r.exception && r.exception.values && i && f(i.originalException, Error))) return r;
                            const s = nn(t, n, i.originalException, e);
                            return r.exception.values = [...s, ...r.exception.values], r
                        }(t.getOptions().stackParser, r.bt, r._t, e, n) : e
                    }))
                }
            }

            function nn(t, e, n, r, i = []) {
                if (!f(n[r], Error) || i.length + 1 >= e) return i;
                const s = re(t, n[r]);
                return nn(t, e, n[r], r, [s, ...i])
            }
            en.__initStatic();
            const rn = n();
            class sn {
                constructor() {
                    sn.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "HttpContext"
                }
                __init() {
                    this.name = sn.id
                }
                setupOnce() {
                    Rt((t => {
                        if (Lt().getIntegration(sn)) {
                            if (!rn.navigator && !rn.location && !rn.document) return t;
                            const e = t.request && t.request.url || rn.location && rn.location.href,
                                {
                                    referrer: n
                                } = rn.document || {},
                                {
                                    userAgent: r
                                } = rn.navigator || {},
                                i = { ...e && {
                                        url: e
                                    },
                                    headers: { ...t.request && t.request.headers,
                                        ...n && {
                                            Referer: n
                                        },
                                        ...r && {
                                            "User-Agent": r
                                        }
                                    }
                                };
                            return { ...t,
                                request: i
                            }
                        }
                        return t
                    }))
                }
            }
            sn.__initStatic();
            class on {
                constructor() {
                    on.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "Dedupe"
                }
                __init() {
                    this.name = on.id
                }
                setupOnce(t, e) {
                    const n = t => {
                        const n = e().getIntegration(on);
                        if (n) {
                            try {
                                if (function(t, e) {
                                        return !(!e || ! function(t, e) {
                                            const n = t.message,
                                                r = e.message;
                                            return !(!n && !r || n && !r || !n && r || n !== r || !cn(t, e) || !an(t, e))
                                        }(t, e) && ! function(t, e) {
                                            const n = un(e),
                                                r = un(t);
                                            return !!(n && r && n.type === r.type && n.value === r.value && cn(t, e) && an(t, e))
                                        }(t, e))
                                    }(t, n.wt)) return null
                            } catch (e) {
                                return n.wt = t
                            }
                            return n.wt = t
                        }
                        return t
                    };
                    n.id = this.name, t(n)
                }
            }

            function an(t, e) {
                let n = hn(t),
                    r = hn(e);
                if (!n && !r) return !0;
                if (n && !r || !n && r) return !1;
                if (r.length !== n.length) return !1;
                for (let t = 0; t < r.length; t++) {
                    const e = r[t],
                        i = n[t];
                    if (e.filename !== i.filename || e.lineno !== i.lineno || e.colno !== i.colno || e.function !== i.function) return !1
                }
                return !0
            }

            function cn(t, e) {
                let n = t.fingerprint,
                    r = e.fingerprint;
                if (!n && !r) return !0;
                if (n && !r || !n && r) return !1;
                try {
                    return !(n.join("") !== r.join(""))
                } catch (t) {
                    return !1
                }
            }

            function un(t) {
                return t.exception && t.exception.values && t.exception.values[0]
            }

            function hn(t) {
                const e = t.exception;
                if (e) try {
                    return e.values[0].stacktrace.frames
                } catch (t) {
                    return
                }
            }
            on.__initStatic();
            var ln = Object.freeze({
                __proto__: null,
                GlobalHandlers: Fe,
                TryCatch: ze,
                Breadcrumbs: le,
                LinkedErrors: en,
                HttpContext: sn,
                Dedupe: on
            });
            const dn = [new te, new Zt, new ze, new le, new Fe, new en, new on, new sn];

            function pn(t) {
                t.startSession({
                    ignoreDuration: !0
                }), t.captureSession()
            }
            let fn = {};
            const vn = n();
            vn.Sentry && vn.Sentry.Integrations && (fn = vn.Sentry.Integrations);
            const gn = { ...fn,
                ...ne,
                ...ln
            };
            return t.Breadcrumbs = le, t.BrowserClient = Se, t.Dedupe = on, t.FunctionToString = Zt, t.GlobalHandlers = Fe, t.HttpContext = sn, t.Hub = At, t.InboundFilters = te, t.Integrations = gn, t.LinkedErrors = en, t.SDK_VERSION = zt, t.Scope = It, t.TryCatch = ze, t.addBreadcrumb = function(t) {
                Lt().addBreadcrumb(t)
            }, t.addGlobalEventProcessor = Rt, t.captureEvent = function(t, e) {
                return Lt().captureEvent(t, e)
            }, t.captureException = qt, t.captureMessage = function(t, e) {
                var n = "string" == typeof e ? e : void 0,
                    r = "string" != typeof e ? {
                        captureContext: e
                    } : void 0;
                return Lt().captureMessage(t, n, r)
            }, t.chromeStackLineParser = Te, t.close = function(t) {
                const e = Lt().getClient();
                return e ? e.close(t) : dt(!1)
            }, t.configureScope = function(t) {
                Lt().configureScope(t)
            }, t.createTransport = Jt, t.defaultIntegrations = dn, t.defaultStackLineParsers = Le, t.defaultStackParser = Me, t.flush = function(t) {
                const e = Lt().getClient();
                return e ? e.flush(t) : dt(!1)
            }, t.forceLoad = function() {}, t.geckoStackLineParser = Ie, t.getCurrentHub = Lt, t.getHubFromCarrier = Mt, t.init = function(t = {}) {
                if (void 0 === t.defaultIntegrations && (t.defaultIntegrations = dn), void 0 === t.release) {
                    const e = n();
                    e.SENTRY_RELEASE && e.SENTRY_RELEASE.id && (t.release = e.SENTRY_RELEASE.id)
                }
                void 0 === t.autoSessionTracking && (t.autoSessionTracking = !0), void 0 === t.sendClientReports && (t.sendClientReports = !0);
                const e = { ...t,
                    stackParser: (r = t.stackParser || Me, Array.isArray(r) ? L(...r) : r),
                    integrations: Gt(t),
                    transport: t.transport || (q() ? xe : be)
                };
                var r;
                ! function(t, e) {
                    !0 === e.debug && console.warn("[Sentry] Cannot initialize SDK with `debug` option using a non-debug bundle.");
                    var n = Lt(),
                        r = n.getScope();
                    r && r.update(e.initialScope);
                    var i = new t(e);
                    n.bindClient(i)
                }(Se, e), t.autoSessionTracking && function() {
                    if (void 0 === n().document) return;
                    const t = Lt();
                    t.captureSession && (pn(t), W("history", (({
                        from: t,
                        to: e
                    }) => {
                        void 0 !== t && t !== e && pn(Lt())
                    })))
                }()
            }, t.lastEventId = function() {
                return Lt().lastEventId()
            }, t.makeFetchTransport = xe, t.makeMain = Pt, t.makeXHRTransport = be, t.onLoad = function(t) {
                t()
            }, t.opera10StackLineParser = Ae, t.opera11StackLineParser = Pe, t.setContext = function(t, e) {
                Lt().setContext(t, e)
            }, t.setExtra = function(t, e) {
                Lt().setExtra(t, e)
            }, t.setExtras = function(t) {
                Lt().setExtras(t)
            }, t.setTag = function(t, e) {
                Lt().setTag(t, e)
            }, t.setTags = function(t) {
                Lt().setTags(t)
            }, t.setUser = function(t) {
                Lt().setUser(t)
            }, t.showReportDialog = function(t = {}, e = Lt()) {
                const r = n();
                if (!r.document) return;
                const {
                    client: i,
                    scope: s
                } = e.getStackTop(), o = t.dsn || i && i.getDsn();
                if (!o) return;
                s && (t.user = { ...s.getUser(),
                    ...t.user
                }), t.eventId || (t.eventId = e.lastEventId());
                const a = r.document.createElement("script");
                a.async = !0, a.src = function(t, e) {
                    var n = x(t),
                        r = `${Ht(n)}embed/error-page/`;
                    let i = `dsn=${_(n)}`;
                    for (var s in e)
                        if ("dsn" !== s)
                            if ("user" === s) {
                                var o = e.user;
                                if (!o) continue;
                                o.name && (i += `&name=${encodeURIComponent(o.name)}`), o.email && (i += `&email=${encodeURIComponent(o.email)}`)
                            } else i += `&${encodeURIComponent(s)}=${encodeURIComponent(e[s])}`;
                    return `${r}?${i}`
                }(o, t), t.onLoad && (a.onload = t.onLoad);
                const c = r.document.head || r.document.body;
                c && c.appendChild(a)
            }, t.startTransaction = function(t, e) {
                return Lt().startTransaction({
                    metadata: {
                        source: "custom"
                    },
                    ...t
                }, e)
            }, t.winjsStackLineParser = Re, t.withScope = Bt, t.wrap = function(t) {
                return He(t)()
            }, t
        }({})
    </script>
    <script>
        (function() {
            "use strict";
            const t = ["Breadcrumbs", "TryCatch"];
            let e = "production";
            const n = window.location.hostname;

            function i(t) {
                if ("string" == typeof t) {
                    const e = t.indexOf("EVOSESSIONID");
                    if (e > -1) return `${t.substr(0,e+10)}=***`
                } else {
                    if (Array.isArray(t)) return t.map(i);
                    "object" == typeof t && t && Object.keys(t).forEach((e => {
                        t[e] = i(t[e])
                    }))
                }
                return t
            }
            /\b(cit)(\d|\b)/.test(n) && (e = "cit"), /\b(uat)(\d|\b)/.test(n) && (e = "uat"), /^([\d\.:]+|[^\.]+)$/.test(n) && (e = "unknown"), /(slim\.evo-test)/.test(n) && (e = "slimdown"), null === Sentry || void 0 === Sentry || Sentry.init({
                dsn: {
                    cit: "https://72570d21b08341c19be61d59607c8435@o36526.ingest.sentry.io/81947",
                    uat: "https://711d62c6f4514adb824a81d4d7e546ea@o36526.ingest.sentry.io/81947",
                    unknown: "https://119b2d8d7f7945cea5636ca07afef0d3@o36526.ingest.sentry.io/81947",
                    development: "https://553a3f48f47c4479bbd70ae67cf1a334@o36526.ingest.sentry.io/81947",
                    slimdown: "https://8612b74a2dd94b1d948b06f40f2010a0@o36526.ingest.sentry.io/81947",
                    production: "https://5fbc2f970bc045c89b1fd0506e03697a@sentry.io/81947"
                }[e],
                release: "6.20240115.63824.37369-40dbe8a65e",
                environment: e,
                autoSessionTracking: !1,
                sampleRate: .5,
                ignoreErrors: ["InvalidStateError: Cannot resume a context that has been closed", "InvalidStateError: Audio context is going away", "InvalidStateError: Failed to start the audio device", /^NS_ERROR_/, "nativeViewDidAppear", "nativeViewDidDisappear", "cancelLongPress is not a function"],
                denyUrls: [/extensions\//i, /^chrome:\/\//i, /^pptr:\/\//i],
                integrations: e => e.filter((e => !t.includes(e.name))),
                beforeBreadcrumb: function(t) {
                    const e = t.data;
                    return e && "http" === t.type && 200 === e.status_code ? null : t
                },
                beforeSend: function(t) {
                    const e = "undefined";
                    return t.tags = t.tags || {}, e && (t.tags.sentryTriageSession = e), (null === window || void 0 === window ? void 0 : window.EVO_VERBOSE) ? function(t) {
                        const e = i(t),
                            n = JSON.stringify(e),
                            s = n.indexOf("EVOSESSIONID");
                        return s > -1 ? {
                            message: `${n.substr(0,s+13)}***`
                        } : e
                    }(t) : null
                }
            })
        })()
    </script>
    <script>
        window.BUNDLE_MANIFEST = {
            env: "production",
            version: "6.20240115.63824.37369-40dbe8a65e",
            publicPath: "/frontend/evo/r2/",
            commonAssets: ["js/vendor.fb829afa.js", "styles/commons.0cf2e8e0.css", "js/commons.0cf2e8e0.js", "js/commons.wrapped.1a8c7e1b.js", "js/commons.rng.0f7b2f69.js"],
            apps: {
                abstractGame: {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.b7ddc414.css", "js/abstractga.b7ddc414.js"]
                },
                andarbahar: {
                    nativeBundle: "evo_live_all",
                    title: "Andar Bahar",
                    loaderExpectedResourceCount: 13,
                    localization: "andarbahar",
                    desktop: "andarBahar.desktop",
                    mobile: "andarBahar.mobile",
                    assets: [0, 1, 2, "styles/andarbahar.8c82b09f.css", "js/andarbahar.8c82b09f.js"]
                },
                bacbo: {
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    localization: "bacbo",
                    nativeBundle: "evo_live_all",
                    title: "BacBo",
                    desktop: "bacbo.desktop",
                    mobile: "bacbo.mobile",
                    assets: [0, 1, 2, "styles/bacbo.e5c59704.css", "js/bacbo.e5c59704.js"]
                },
                "baccarat.eight": {
                    title: "Baccarat 8",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "baccarat.eight",
                    assets: [0, 1, 2, "styles/baccarat.eight.d328e728.css", "js/baccarat.eight.d328e728.js"]
                },
                "baccarat.goldenWealth": {
                    title: "Golden Wealth Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 33,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-goldenwealth",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.goldenWealth",
                    assets: [0, 1, 2, "styles/baccarat.goldenweal.804b65ab.css", "js/baccarat.goldenweal.804b65ab.js"]
                },
                "baccarat.peek": {
                    title: "Peek Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.peek",
                    assets: [0, 1, 2, "styles/baccarat.peek.ee50bd98.css", "js/baccarat.peek.ee50bd98.js"]
                },
                "baccarat.prosperity": {
                    title: "Prosperity Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-prosperity",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.prosperity",
                    assets: [0, 1, 2, "styles/baccarat.prosperity.3d5cd1b5.css", "js/baccarat.prosperity.3d5cd1b5.js"]
                },
                "baccarat.v1.lightning": {
                    title: "Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.lightning",
                    assets: [0, 1, 2, "styles/baccarat.v1.lightning.c910df2a.css", "js/baccarat.v1.lightning.c910df2a.js"]
                },
                "baccarat.v1.regular": {
                    title: "Regular Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.regular",
                    assets: [0, 1, 2, "styles/baccarat.v1.regular.4881ccd0.css", "js/baccarat.v1.regular.4881ccd0.js"]
                },
                "baccarat.xtreme": {
                    title: "XXXtreme Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-xtreme",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.xtreme",
                    assets: [0, 1, 2, "styles/baccarat.xtreme.d21a8035.css", "js/baccarat.xtreme.d21a8035.js"]
                },
                baccaratmultiplay: {
                    title: "Baccarat Multiplay",
                    ignoreVideo: !0,
                    localization: "baccarat",
                    loaderExpectedResourceCount: 11,
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.multiplay",
                    assets: [0, 1, 2, "styles/baccaratmu.752583be.css", "js/baccaratmu.752583be.js"]
                },
                balloonrace: {
                    localization: "balloonrace",
                    audioLibrary: "ecas",
                    audioPackage: "balloonrace",
                    title: "",
                    adaptive: "balloonrace",
                    assets: [0, 1, 2, "styles/balloonrac.b2d7bd91.css", "js/balloonrac.b2d7bd91.js"]
                },
                "blackjack.v3": {
                    localization: "blackjack",
                    loaderExpectedResourceCount: 17,
                    nativeBundle: "evo_live_all",
                    title: "Classic Blackjack, Speed Blackjack",
                    desktop: "blackjack.desktop",
                    mobile: "blackjack.mobile",
                    assets: [0, 1, 2, "styles/blackjack.v3.cdc3c3a2.css", "js/blackjack.v3.cdc3c3a2.js"]
                },
                cashorcrash: {
                    localization: "cashorcrash",
                    nativeBundle: "evo_live_all",
                    title: "Cash or Crash",
                    desktop: "cashorcrash.desktop",
                    mobile: "cashorcrash.mobile",
                    assets: [0, 1, 2, "styles/cashorcras.907786f2.css", "js/cashorcras.907786f2.js"]
                },
                compliance: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Compliance",
                    adaptive: "compliance",
                    assets: [0, 1, 2, "js/compliance.649aad86.js"]
                },
                craps: {
                    loaderExpectedResourceCount: 20,
                    localization: "craps",
                    nativeBundle: "evo_live_all",
                    title: "Craps",
                    desktop: "craps.desktop",
                    mobile: "craps.mobile",
                    assets: [0, 1, 2, "styles/craps.f6e5be25.css", "js/craps.f6e5be25.js"]
                },
                crazycoinflip: {
                    nativeBundle: "evo_live_all",
                    title: "Crazy Coin Flip",
                    localization: "crazycoinflip",
                    audioLibrary: "ecas",
                    audioPackage: "crazycoinflip",
                    desktop: "crazyCoinFlip.desktop",
                    mobile: "crazyCoinFlip.mobile",
                    assets: [0, 1, 2, "styles/crazycoinf.9b68a2de.css", "js/crazycoinf.9b68a2de.js"]
                },
                crazytime: {
                    localization: "crazytime",
                    nativeBundle: "evo_live_all",
                    title: "Crazy Time",
                    audioLibrary: "ecas",
                    audioPackage: "crazytime",
                    desktop: "crazyTime.desktop",
                    mobile: "crazyTime.mobile",
                    assets: [0, 1, 2, "styles/crazytime.4221a2dc.css", "js/crazytime.4221a2dc.js"]
                },
                csp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Caribbean Stud Poker",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.caribbean-stud-v2",
                    assets: [0, 1, 2, "styles/csp.0ccbd7e4.css", "js/csp.0ccbd7e4.js"]
                },
                customAppExample: {
                    ignoreVideo: !0,
                    adaptive: "custom-app-example",
                    assets: [1, 2, "js/customappe.3812f229.js"]
                },
                "deadalive.v0": {
                    nativeBundle: "evo_live_all",
                    title: "Dead or Alive: Saloon",
                    localization: "deadoralivesaloon",
                    loaderExpectedResourceCount: 19,
                    desktop: "deadalive.desktop",
                    mobile: "deadalive.mobile",
                    assets: [0, 1, 2, "styles/deadalive.v0.d2d0562f.css", "js/deadalive.v0.d2d0562f.js"]
                },
                dealnodeal: {
                    loaderExpectedResourceCount: 38,
                    localization: "dealnodeal",
                    nativeBundle: "evo_live_all",
                    title: "Deal Or No Deal",
                    desktop: "dealnodeal.desktop",
                    mobile: "dealnodeal.mobile",
                    assets: [0, 1, 2, "styles/dealnodeal.be3f7348.css", "js/dealnodeal.be3f7348.js"]
                },
                dhp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Double Hand Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.double-hand-poker",
                    assets: [0, 1, 2, "styles/dhp.ce45a47d.css", "js/dhp.ce45a47d.js"]
                },
                "dragontiger.lightning": {
                    title: "Lightning Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "dragonTiger.lightning",
                    assets: [0, 1, 2, "styles/dragontige.lightning.a5729ddc.css", "js/dragontige.lightning.a5729ddc.js"]
                },
                "dragontiger.regular": {
                    title: "Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.regular",
                    assets: [0, 1, 2, "styles/dragontige.regular.34701f36.css", "js/dragontige.regular.34701f36.js"]
                },
                "dragontiger.topCard": {
                    title: "Top Card",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "top-card",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.topCard",
                    assets: [0, 1, 2, "styles/dragontige.topcard.a5a957c3.css", "js/dragontige.topcard.a5a957c3.js"]
                },
                "dragontiger.v0": {
                    nativeBundle: "evo_live_all",
                    title: "Top Card, Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    desktop: "dragonTiger.desktop",
                    mobile: "dragonTiger.mobile",
                    assets: [0, 1, 2, "styles/dragontige.v0.f3395287.css", "js/dragontige.v0.f3395287.js"]
                },
                "evo-game-bootstrap.[agslot]": {
                    title: "evo-game-bootstrap",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[agslot]",
                    assets: [0, 1, 2, "styles/evogameboo.agslot.607ef503.css", "js/evogameboo.agslot.607ef503.js"]
                },
                "evo-game-bootstrap.[live]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.b7ddc414.css", "js/abstractga.b7ddc414.js"]
                },
                "evo-game-bootstrap.[rng]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[rng]",
                    assets: [0, 1, 2, "js/evogameboo.rng.32c3506c.js"]
                },
                "evo-reference-slot": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "tertius.example",
                    adaptive: "evo-reference-slot",
                    assets: [0, 1, 2, "styles/evoreferen.17d8781f.css", "js/evoreferen.17d8781f.js"]
                },
                "evo-roulette-new": {
                    title: "evo-roulette-new",
                    localization: "roulette-new",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-roulette-new",
                    assets: [0, 1, 2, "styles/evoroulett.e90c3c8c.css", "js/evoroulett.e90c3c8c.js"]
                },
                "ezugi.lobby": {
                    localization: "common",
                    nativeBundle: "wrapped_ezugi",
                    title: "Ezugi OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 26,
                    adaptive: "live.ezugi.lobby",
                    assets: [0, 1, 2, 3, "styles/ezugi.lobby.b640c933.css", "js/ezugi.lobby.b640c933.js"]
                },
                fantan: {
                    loaderExpectedResourceCount: 19,
                    localization: "fantan",
                    nativeBundle: "evo_live_all",
                    title: "Fan Tan",
                    desktop: "fanTan.desktop",
                    mobile: "fanTan.mobile",
                    assets: [0, 1, 2, "styles/fantan.bacb0b90.css", "js/fantan.bacb0b90.js"]
                },
                funkytime: {
                    nativeBundle: "evo_live_all",
                    title: "Funky Time",
                    localization: "funkytime",
                    audioLibrary: "ecas",
                    audioPackage: "funkytime",
                    desktop: "funkyTime.desktop",
                    mobile: "funkyTime.mobile",
                    assets: [0, 1, 2, "styles/funkytime.0672eea4.css", "js/funkytime.0672eea4.js"]
                },
                gonzotreasuremap: {
                    loaderExpectedResourceCount: 22,
                    localization: "gonzotreasuremap",
                    title: "Gonzo Treasure Map",
                    audioLibrary: "ecas",
                    audioPackage: "gonzotreasuremap",
                    nativeBundle: "evo_live_all",
                    desktop: "gonzotreasuremap.desktop",
                    mobile: "gonzotreasuremap.mobile",
                    assets: [0, 1, 2, "styles/gonzotreas.bded0c95.css", "js/gonzotreas.bded0c95.js"]
                },
                holdem: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.casino-holdem-v2",
                    assets: [0, 1, 2, "styles/holdem.f0216be2.css", "js/holdem.f0216be2.js"]
                },
                lightningdice: {
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 25,
                    localization: "sicbo",
                    title: "Lightning Dice",
                    desktop: "lightningdice.desktop",
                    mobile: "lightningdice.mobile",
                    assets: [0, 1, 2, "styles/lightningd.26f2cca3.css", "js/lightningd.26f2cca3.js"]
                },
                lightninglotto: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightninglotto",
                    title: "Lightning Lotto",
                    nativeBundle: "evo_live_all",
                    desktop: "lightningLotto.desktop",
                    mobile: "lightningLotto.mobile",
                    assets: [0, 1, 2, "styles/lightningl.c6c49d54.css", "js/lightningl.c6c49d54.js"]
                },
                "live.ezugi": {
                    localization: "common",
                    nativeBundle: "wrapped_ezugi",
                    title: "Ezugi OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 43,
                    adaptive: "live.ezugi",
                    assets: [0, 1, 2, 3, "styles/live.ezugi.bee955e8.css", "js/live.ezugi.bee955e8.js"]
                },
                lobby: {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby",
                    loaderExpectedResourceCount: 11,
                    adaptive: "lobby",
                    assets: [0, 1, 2, "styles/lobby.df06067f.css", "js/lobby.df06067f.js"]
                },
                "lobby-snippet": {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby Snippet",
                    adaptive: "lobby-snippet",
                    assets: [0, 1, 2, "styles/lobbysnipp.7ed65017.css", "js/lobbysnipp.7ed65017.js"]
                },
                ls2: {
                    localization: "ls2",
                    audioLibrary: "ecas",
                    title: "Crazy Pachinko",
                    nativeBundle: "evo_live_all",
                    audioPackage: "crazypachinko",
                    desktop: "ls2.desktop",
                    mobile: "ls2.mobile",
                    assets: [0, 1, 2, "styles/ls2.4dc0a373.css", "js/ls2.4dc0a373.js"]
                },
                ls3: {
                    nativeBundle: "evo_live_all",
                    title: "Extra Chilli Epic Spins",
                    loaderExpectedResourceCount: 14,
                    localization: "ls3",
                    desktop: "ls3.desktop",
                    mobile: "ls3.mobile",
                    assets: [0, 1, 2, "styles/ls3.3fe985ab.css", "js/ls3.3fe985ab.js"]
                },
                megaball: {
                    loaderExpectedResourceCount: 31,
                    localization: "megaball",
                    nativeBundle: "evo_live_all",
                    title: "Mega Ball",
                    desktop: "megaball.desktop",
                    mobile: "megaball.mobile",
                    assets: [0, 1, 2, "styles/megaball.9a8c74aa.css", "js/megaball.9a8c74aa.js"]
                },
                moneywheel: {
                    localization: "money_wheel",
                    nativeBundle: "evo_live_all",
                    title: "Dream Catcher, Imperial Quest",
                    desktop: "moneywheel.desktop",
                    mobile: "moneywheel.mobile",
                    assets: [0, 1, 2, "styles/moneywheel.81140c55.css", "js/moneywheel.81140c55.js"]
                },
                monopoly: {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly",
                    desktop: "monopoly.desktop",
                    mobile: "monopoly.mobile",
                    assets: [0, 1, 2, "styles/monopoly.b951073c.css", "js/monopoly.b951073c.js"]
                },
                monopolybigballer: {
                    localization: "monopolybigballer",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Big Baller",
                    desktop: "monopolybigballer.desktop",
                    mobile: "monopolybigballer.mobile",
                    assets: [0, 1, 2, "styles/monopolybi.c11ad9fd.css", "js/monopolybi.c11ad9fd.js"]
                },
                "ne-bigbangboom": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "bigbangboom",
                    loaderExpectedResourceCount: 138,
                    localization: "ne-bigbangboom",
                    nativeBundle: "evo_ne_bigbangboom",
                    title: "Big Bang Boom",
                    adaptive: "ne-bigbangboom",
                    assets: [0, 1, 2, "styles/nebigbangb.e1256595.css", "js/nebigbangb.e1256595.js"]
                },
                "ne-bigmoneywheel": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "bigmoneywheel",
                    loaderExpectedResourceCount: 87,
                    localization: "ne-rage",
                    adaptive: "ne-bigmoneywheel",
                    assets: [0, 1, 2, "styles/nebigmoney.6a732962.css", "js/nebigmoney.6a732962.js"]
                },
                "ne-buckshot-wilds": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "buckshotwilds",
                    localization: "ne-buckshotwilds",
                    title: "Buckshot Wilds™",
                    loaderExpectedResourceCount: 124,
                    adaptive: "ne-buckshot-wilds",
                    assets: [0, 1, 2, "styles/nebuckshot.95dfd9c1.css", "js/nebuckshot.95dfd9c1.js"]
                },
                "ne-candies101": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "101candies",
                    loaderExpectedResourceCount: 126,
                    localization: "ne-candies101",
                    title: "101 Candies",
                    nativeBundle: "evo_ne_candies101",
                    adaptive: "ne-candies101",
                    assets: [0, 1, 2, "styles/necandies1.56b24fec.css", "js/necandies1.56b24fec.js"]
                },
                "ne-crabtrap": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "crabtrap",
                    loaderExpectedResourceCount: 120,
                    localization: "ne-crabtrap",
                    nativeBundle: "evo_ne_crabtrap",
                    title: "Crab Trap",
                    adaptive: "ne-crabtrap",
                    assets: [0, 1, 2, "styles/necrabtrap.2e1e911a.css", "js/necrabtrap.2e1e911a.js"]
                },
                "ne-cursed-treasure": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "cursedtreasure",
                    loaderExpectedResourceCount: 49,
                    localization: "ne-cursedtreasure",
                    adaptive: "ne-cursed-treasure",
                    assets: [0, 1, 2, "styles/necursedtr.2a8ee793.css", "js/necursedtr.2a8ee793.js"]
                },
                "ne-elk-hunter": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "elkhunter",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-elkhunter",
                    title: "Elk Hunter",
                    nativeBundle: "evo_ne_elkhunter",
                    adaptive: "ne-elk-hunter",
                    assets: [0, 1, 2, "styles/neelkhunte.366d1422.css", "js/neelkhunte.366d1422.js"]
                },
                "ne-finncandyspin": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "finncandyspin",
                    loaderExpectedResourceCount: 96,
                    localization: "ne-finncandyspin",
                    title: "Finn and The Candy Spin",
                    nativeBundle: "evo_ne_finncandyspin",
                    adaptive: "ne-finncandyspin",
                    assets: [0, 1, 2, "styles/nefinncand.5eff2980.css", "js/nefinncand.5eff2980.js"]
                },
                "ne-golden-wheels": {
                    title: "ne-golden-wheels",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    loaderExpectedResourceCount: 95,
                    adaptive: "ne-golden-wheels",
                    assets: [0, 1, 2, "styles/negoldenwh.01f1fd56.css", "js/negoldenwh.01f1fd56.js"]
                },
                "ne-goldenrealms": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "magicbox",
                    loaderExpectedResourceCount: 95,
                    localization: "ne-goldenrealms",
                    adaptive: "ne-goldenrealms",
                    assets: [0, 1, 2, "styles/negoldenre.a727e646.css", "js/negoldenre.a727e646.js"]
                },
                "ne-jack-and-beanstalk": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "jackandbeanstalkrem",
                    loaderExpectedResourceCount: 146,
                    localization: "ne-jackandbeanstalkrem",
                    title: "Jack and the Beanstalk Remastered",
                    nativeBundle: "evo_ne_jack_and_beanstalk",
                    adaptive: "ne-jack-and-beanstalk",
                    assets: [0, 1, 2, "styles/nejackandb.760eef9a.css", "js/nejackandb.760eef9a.js"]
                },
                "ne-jackhammer3": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "jackhammer3",
                    localization: "ne-jackhammer3",
                    adaptive: "ne-jackhammer3",
                    assets: [0, 1, 2, "styles/nejackhamm.6fdb36cb.css", "js/nejackhamm.6fdb36cb.js"]
                },
                "ne-junglespiritmw": {
                    title: "ne-junglespiritmw",
                    localization: "ne-junglespiritmegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "junglespiritmw",
                    loaderExpectedResourceCount: 92,
                    adaptive: "ne-junglespiritmw",
                    assets: [0, 1, 2, "styles/nejunglesp.30b9b2fd.css", "js/nejunglesp.30b9b2fd.js"]
                },
                "ne-locknpop": {
                    title: "ne-locknpop",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "locknpop",
                    adaptive: "ne-locknpop",
                    assets: [0, 1, 2, "styles/nelocknpop.54cc4ba3.css", "js/nelocknpop.54cc4ba3.js"]
                },
                "ne-rage": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rage",
                    loaderExpectedResourceCount: 138,
                    localization: "ne-rage",
                    adaptive: "ne-rage",
                    assets: [0, 1, 2, "styles/nerage.6b3bb3b2.css", "js/nerage.6b3bb3b2.js"]
                },
                "ne-royalnuts": {
                    title: "ne-royalnuts",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "ne-royalnuts",
                    assets: [0, 1, 2, "styles/neroyalnut.d96a6b6d.css", "js/neroyalnut.d96a6b6d.js"]
                },
                "ne-template-pixi": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "tertius.example",
                    adaptive: "ne-template-pixi",
                    assets: [0, 1, 2, "styles/netemplate.4202573e.css", "js/netemplate.4202573e.js"]
                },
                "ne-thrill-to-grill": {
                    localization: "ne-thrilltogrill",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "thrilltogrill",
                    loaderExpectedResourceCount: 139,
                    title: "Thrill to Grill",
                    adaptive: "ne-thrill-to-grill",
                    assets: [0, 1, 2, "styles/nethrillto.54dd2181.css", "js/nethrillto.54dd2181.js"]
                },
                "powerball.v0": {
                    localization: "powerball",
                    title: "Evo PowerBall",
                    audioLibrary: "ecas",
                    audioPackage: "powerball",
                    nativeBundle: "evo_live_all",
                    adaptive: "powerball.adaptive",
                    assets: [0, 1, 2, "styles/powerball.v0.61d77bcc.css", "js/powerball.v0.61d77bcc.js"]
                },
                promotions: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Promotions - Reward Games",
                    localization: "common",
                    loaderExpectedResourceCount: 16,
                    loaderResourcesCountingMode: "auto",
                    adaptive: "promotions",
                    assets: [0, 1, 2, "styles/promotions.b3cf7858.css", "js/promotions.b3cf7858.js"]
                },
                "reserved-table": {
                    localization: "common",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "",
                    adaptive: "reserved-table",
                    assets: [0, 1, 2, "styles/reservedta.1c20cf95.css", "js/reservedta.1c20cf95.js"]
                },
                "rng-baccarat.regular": {
                    title: "First Person Baccarat, First Person Red envelope Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    desktop: "rng-baccarat.regular.desktop",
                    mobile: "rng-baccarat.regular.mobile",
                    assets: [0, 1, 2, 4, "styles/rngbaccara.regular.8ab1b091.css", "js/rngbaccara.regular.8ab1b091.js"]
                },
                "rng-baccarat.v0": {
                    title: "First Person Baccarat, First Person Lightning Baccarat, First Person Golden Wealth Baccarat, First Person XXXtreme Lightning Baccarat, First Person Prosperity Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    nativeBundle: "evo_rng_baccarat",
                    desktop: "rng-baccarat.desktop",
                    mobile: "rng-baccarat.mobile",
                    assets: [0, 1, 2, 4, "styles/rngbaccara.v0.76ef7e56.css", "js/rngbaccara.v0.76ef7e56.js"]
                },
                "rng-blackjack.horizon": {
                    localization: "blackjack",
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 56,
                    nativeBundle: "evo_rng_blackjack",
                    title: "First Person Blackjack, First Person Lightning Blackjack",
                    desktop: "rng-blackjack.horizon.desktop",
                    mobile: "rng-blackjack.horizon.mobile",
                    assets: [0, 1, 2, 4, "styles/rngblackja.horizon.c3828220.css", "js/rngblackja.horizon.c3828220.js"]
                },
                "rng-craps": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 94,
                    localization: "rng-craps",
                    nativeBundle: "evo_rng_craps",
                    title: "First Person Craps",
                    desktop: "rng-craps.desktop",
                    mobile: "rng-craps.mobile",
                    assets: [0, 1, 2, 4, "styles/rngcraps.472be2f2.css", "js/rngcraps.472be2f2.js"]
                },
                "rng-dealnodeal": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 90,
                    localization: "rng-dealnodeal",
                    nativeBundle: "evo_rng_dealnodeal",
                    audioLibrary: "ecas",
                    audioPackage: "rng-dealnodeal",
                    title: "First Person Deal Or No Deal",
                    desktop: "rng-dealnodeal.desktop",
                    mobile: "rng-dealnodeal.mobile",
                    assets: [0, 1, 2, 4, "styles/rngdealnod.6a652abf.css", "js/rngdealnod.6a652abf.js"]
                },
                "rng-dragontiger.v0": {
                    nativeBundle: "evo_rng_topcard",
                    title: "First Person Top Card, First Person Dragon Tiger",
                    localization: "rng-dragontiger",
                    loaderExpectedResourceCount: 80,
                    desktop: "rng-dragontiger.desktop",
                    mobile: "rng-dragontiger.mobile",
                    assets: [0, 1, 2, 4, "styles/rngdragont.v0.3d732cbc.css", "js/rngdragont.v0.3d732cbc.js"]
                },
                "rng-hilo.v0": {
                    localization: "rng-hilo",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-hilo",
                    title: "First Person HiLo",
                    loaderExpectedResourceCount: 49,
                    desktop: "rng-hilo.desktop",
                    mobile: "rng-hilo.mobile",
                    assets: [0, 1, 2, 4, "styles/rnghilo.v0.47bf8678.css", "js/rnghilo.v0.47bf8678.js"]
                },
                "rng-lightninglotto": {
                    localization: "lightninglotto",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-lightninglotto",
                    title: "First Person Lightning Lotto",
                    nativeBundle: "evo_rng_lightninglotto",
                    adaptive: "rng-lightningLotto",
                    assets: [0, 1, 2, 4, "styles/rnglightni.370ea676.css", "js/rnglightni.370ea676.js"]
                },
                "rng-megaball": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 45,
                    localization: "rng-megaball",
                    nativeBundle: "evo_rng_megaball",
                    title: "First Person Mega Ball",
                    desktop: "rng-megaball.desktop",
                    mobile: "rng-megaball.mobile",
                    assets: [0, 1, 2, 4, "styles/rngmegabal.b124eceb.css", "js/rngmegabal.b124eceb.js"]
                },
                "rng-moneywheel.horizon": {
                    localization: "rng-moneywheel",
                    ignoreVideo: !0,
                    nativeBundle: "evo_rng_moneywheel",
                    title: "First Person Dream Catcher",
                    desktop: "rng-moneywheel.horizon.desktop",
                    mobile: "rng-moneywheel.horizon.mobile",
                    assets: [0, 1, 2, 4, "styles/rngmoneywh.horizon.0152fad3.css", "js/rngmoneywh.horizon.0152fad3.js"]
                },
                "rng-roulette.horizon.preview": {
                    ignoreVideo: !0,
                    nativeBundle: "evo_rng_roulette",
                    localization: "rng-roulette",
                    loaderExpectedResourceCount: 93,
                    title: "First Person Roulette, First Person Lightning Roulette, First Person American Roulette, First Person XXXtreme Lightning Roulette",
                    desktop: "rng-roulette.horizon.desktop",
                    mobile: "rng-roulette.horizon.mobile",
                    assets: [0, 1, 2, 4, "styles/rngroulett.horizon.preview.a2fa458a.css", "js/rngroulett.horizon.preview.a2fa458a.js"]
                },
                "rng-sicbo": {
                    audioLibrary: "ecas",
                    audioPackage: "rng-sicbo",
                    loaderExpectedResourceCount: 51,
                    localization: "rng-sicbo",
                    nativeBundle: "evo_rng_sicbo",
                    title: "First Person Super Sic Bo",
                    adaptive: "rng.sicbo",
                    assets: [0, 1, 2, "styles/rngsicbo.be4818f5.css", "js/rngsicbo.be4818f5.js"]
                },
                "rng-videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_rng_videopoker",
                    audioLibrary: "ecas",
                    audioPackage: "rng-videopoker",
                    title: "First Person Video Poker",
                    loaderExpectedResourceCount: 73,
                    adaptive: "poker.rng-video-poker",
                    assets: [0, 1, 2, "styles/rngvideopo.v1.04dc2990.css", "js/rngvideopo.v1.04dc2990.js"]
                },
                roulette: {
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.70308954.css", "js/roulette.70308954.js"]
                },
                "roulette.ecas": {
                    audioLibrary: "ecas",
                    audioPackage: "roulette",
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.70308954.css", "js/roulette.70308954.js"]
                },
                "scalableblackjack.v2": {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.4e742875.css", "js/scalablebl.v2.4e742875.js"]
                },
                scalableblackjack: {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.4e742875.css", "js/scalablebl.v2.4e742875.js"]
                },
                sicbo: {
                    loaderExpectedResourceCount: 28,
                    localization: "sicbo",
                    nativeBundle: "evo_live_all",
                    title: "Super Sic Bo",
                    desktop: "sicbo.desktop",
                    mobile: "sicbo.mobile",
                    assets: [0, 1, 2, "styles/sicbo.949b75af.css", "js/sicbo.949b75af.js"]
                },
                "sicbo.instant": {
                    loaderExpectedResourceCount: 22,
                    nativeBundle: "evo_live_all",
                    localization: "sicbo",
                    title: "Instant Sic Bo",
                    desktop: "sicbo.instant.desktop",
                    mobile: "sicbo.instant.mobile",
                    assets: [0, 1, 2, "styles/sicbo.instant.27d4bef6.css", "js/sicbo.instant.27d4bef6.js"]
                },
                sidebetcity: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "sidebetcity",
                    title: "Side Bet City",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.side-bet-city",
                    assets: [0, 1, 2, "styles/sidebetcit.1c866d8c.css", "js/sidebetcit.1c866d8c.js"]
                },
                "slots.btg": {
                    localization: "common",
                    nativeBundle: "wrapped_btg",
                    title: "Big Time Gaming OSS wrapper",
                    ignoreVideo: !0,
                    adaptive: "slots.btg",
                    assets: [0, 1, 2, 3, "styles/slots.btg.8da0dcb0.css", "js/slots.btg.8da0dcb0.js"]
                },
                "slots.ne": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    adaptive: "slots.ne",
                    assets: [0, 1, 2, 3, "styles/slots.ne.fc87a13e.css", "js/slots.ne.fc87a13e.js"]
                },
                "slots.ne.horizon": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    adaptive: "slots.ne.horizon",
                    assets: [0, 1, 2, 3, "styles/slots.ne.horizon.9a8e1d9d.css", "js/slots.ne.horizon.9a8e1d9d.js"]
                },
                "slots.nlc": {
                    localization: "common",
                    nativeBundle: "wrapped_nlc",
                    title: "No Limit City OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    adaptive: "slots.nlc",
                    assets: [0, 1, 2, 3, "styles/slots.nlc.669b069d.css", "js/slots.nlc.669b069d.js"]
                },
                "slots.rt": {
                    localization: "common",
                    nativeBundle: "wrapped_rt",
                    title: "RedTiger OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 150,
                    adaptive: "slots.rt",
                    assets: [0, 1, 2, 3, "styles/slots.rt.106d9278.css", "js/slots.rt.106d9278.js"]
                },
                "tcp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.9e21b5eb.css", "js/tcp.v2.9e21b5eb.js"]
                },
                "trp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.9e21b5eb.css", "js/tcp.v2.9e21b5eb.js"]
                },
                teenpatti: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "teenpatti",
                    title: "Teen Patti",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.9e21b5eb.css", "js/tcp.v2.9e21b5eb.js"]
                },
                "tertius.example": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "tertius.example",
                    adaptive: "tertius.example",
                    assets: [0, 1, 2, "styles/tertius.example.42d3397f.css", "js/tertius.example.42d3397f.js"]
                },
                testgame: {
                    title: "testgame",
                    localization: "common",
                    adaptive: "testgame",
                    assets: [0, 1, 2, "styles/testgame.20934f35.css", "js/testgame.20934f35.js"]
                },
                "thb.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Texas Hold'em Bonus Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.texas-bonus-v2",
                    assets: [0, 1, 2, "styles/thb.v2.4c8074f0.css", "js/thb.v2.4c8074f0.js"]
                },
                topdice: {
                    audioLibrary: "ecas",
                    audioPackage: "topdice",
                    localization: "topdice",
                    nativeBundle: "evo_live_all",
                    title: "Top Dice",
                    desktop: "topdice.desktop",
                    mobile: "topdice.mobile",
                    assets: [0, 1, 2, "styles/topdice.da36edc2.css", "js/topdice.da36edc2.js"]
                },
                uth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.859f388f.css", "js/uth.859f388f.js"]
                },
                eth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.859f388f.css", "js/uth.859f388f.js"]
                },
                valkyrie: {
                    localization: "common",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    adaptive: "valkyrie",
                    assets: [0, 1, 2, 3, "styles/valkyrie.dc151260.css", "js/valkyrie.dc151260.js"]
                },
                "videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "videopoker",
                    title: "Video Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.video-poker",
                    assets: [0, 1, 2, "styles/videopoker.v1.067c31b6.css", "js/videopoker.v1.067c31b6.js"]
                }
            }
        }
    </script>
    <script>
        "use strict";
        (() => {
            var e, t, n, i, o = {
                    333940: (e, t, n) => {
                        function i(e, t) {
                            var n = {};
                            for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && t.indexOf(i) < 0 && (n[i] = e[i]);
                            if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
                                var o = 0;
                                for (i = Object.getOwnPropertySymbols(e); o < i.length; o++) t.indexOf(i[o]) < 0 && Object.prototype.propertyIsEnumerable.call(e, i[o]) && (n[i[o]] = e[i[o]])
                            }
                            return n
                        }
                        n.d(t, {
                            _T: () => i
                        }), Object.create, Object.create
                    },
                    1452: (e, t, n) => {
                        n.d(t, {
                            G: () => i,
                            x: () => o
                        });
                        class i extends Error {
                            constructor(e, t) {
                                super(`FetchUrl "${e}" exception: ${t instanceof Error?t:`${t.status} ${t.statusText}`}`), this.url = e, t instanceof Response ? (this.isOpaqueRedirect = "opaqueredirect" === t.type, this.status = t.status) : (this.isOpaqueRedirect = !1, this.status = null)
                            }
                        }

                        function o(e, t) {
                            console.error(e, t);
                            const n = window.EVO_LOADER;
                            if (n) {
                                let o;
                                if (t instanceof i) o = `HTTP code ${t.isOpaqueRedirect?"30x":t.status}`;
                                else if (t instanceof Response) o = `HTTP code ${"opaqueredirect"===t.type?"30x":t.status}`;
                                else if (t instanceof Error) o = t.stack;
                                else try {
                                    o = JSON.stringify(t) || "undefined"
                                } catch (e) {
                                    o = e ? e.toString() : ""
                                }
                                n.sendLog("CLIENT_ERROR_LOADING_STATIC_RESOURCE", {
                                    failedURL: e,
                                    error: o
                                })
                            }
                        }
                    },
                    998507: (e, t, n) => {
                        n.d(t, {
                            B0: () => c,
                            Dz: () => a,
                            H: () => h,
                            Ij: () => s,
                            Jp: () => o,
                            sO: () => r,
                            s_: () => d
                        });
                        class i extends Error {
                            constructor(e, t, {
                                extra: n,
                                localizedMessage: i,
                                sendToSentry: o
                            } = {}) {
                                super(e), this.type = t, this.name = t, this.sendToSentry = !1 !== o, this.localizedMessage = i, n && (this.extra = n)
                            }
                        }
                        class o extends i {
                            constructor(e, t = {}) {
                                super(e, "Generic", t)
                            }
                        }
                        class s extends i {
                            constructor(e, {
                                doNotRetry: t = !1,
                                localizedMessage: n,
                                sendToSentry: i
                            } = {}) {
                                super(e, "Loader", {
                                    localizedMessage: n,
                                    sendToSentry: i
                                }), this.doNotRetry = t
                            }
                        }
                        class r extends i {
                            constructor(e, t) {
                                super(e, "Sound", {
                                    extra: t
                                })
                            }
                        }
                        class a extends i {
                            constructor(e, t) {
                                super(e, "MultiwindowInitialization", {
                                    extra: t
                                })
                            }
                        }

                        function d(e) {
                            if ("string" == typeof e) return new s(e, {
                                sendToSentry: !1
                            });
                            if (e instanceof ErrorEvent) return new s(`Script loading error: filename: ${e.filename}, colno: ${e.colno}, lineno: ${e.lineno}, message: ${e.message}`);
                            const t = new s(e.message);
                            return t.stack = e.stack, t
                        }

                        function l(e) {
                            return e instanceof i
                        }

                        function c(e) {
                            return !!e && e instanceof Error && "Loader" === e.type
                        }

                        function h(e) {
                            window.EVO_VERBOSE(e.stack || e.message, 2), window.console.error(e);
                            const t = !l(e) || e.sendToSentry;
                            if ("undefined" != typeof Sentry && t) {
                                l(e) || (e.name = "UnclassifiedError" + (e.name ? ` - ${e.name}` : ""));
                                const t = l(e) ? e.type : "UnclassifiedError",
                                    n = l(e) ? e.extra : void 0;
                                Sentry.captureException(e, function(e, t) {
                                    return Object.assign({
                                        tags: {
                                            errorType: e
                                        }
                                    }, t ? {
                                        extra: {
                                            "Additional Info": t
                                        }
                                    } : {})
                                }(t, n))
                            }
                        }
                    },
                    600394: (e, t, n) => {
                        function i(e) {
                            let t = 1;
                            const n = {};
                            for (e.includes("+") && (e = e.replace(/\+/g, " ")); t < e.length;) {
                                let i = e.indexOf("&", t); - 1 === i && (i = e.length);
                                let o = e.indexOf("=", t); - 1 === o && (o = i);
                                const s = decodeURIComponent(e.substring(t, o)),
                                    r = decodeURIComponent(e.substring(o + 1, i)),
                                    a = n[s];
                                void 0 === a ? n[s] = r : Array.isArray(a) ? a.push(r) : n[s] = [a, r], t = i + 1
                            }
                            return n
                        }
                        n.d(t, {
                            R: () => r,
                            h: () => s
                        });
                        const o = document.createElement("a");

                        function s(e) {
                            o.href = e;
                            let t = o.pathname || "";
                            "/" !== t.charAt(0) && (t = `/${t}`);
                            const n = o.protocol || window.location.protocol;
                            let s = o.hostname,
                                a = o.port;
                            return s || (s = window.location.hostname, a = window.location.port), {
                                hashParams: i(o.hash),
                                hostname: s,
                                pathname: t,
                                port: a,
                                protocol: n,
                                searchParams: i(o.search),
                                toString: function() {
                                    return this.origin + this.pathname + this.search + this.hash
                                },
                                paramsToString: r,
                                getParam: function(e) {
                                    let t = this.searchParams[e];
                                    return void 0 === t && (t = this.hashParams[e], void 0 === t) ? null : Array.isArray(t) ? t[0] : t
                                },
                                get origin() {
                                    return `${this.protocol}//${this.hostname}${this.port?`:${this.port}`:""}`
                                },
                                get search() {
                                    return r("?", this.searchParams)
                                },
                                get hash() {
                                    return r("#", this.hashParams)
                                }
                            }
                        }

                        function r(e, t) {
                            let n = "";
                            for (const e of Object.keys(t)) {
                                const i = t[e],
                                    o = encodeURIComponent(e);
                                if (Array.isArray(i))
                                    for (const e of i) n && (n += "&"), n += `${o}=${encodeURIComponent(e)}`;
                                else null != i && (n && (n += "&"), n += `${o}=${encodeURIComponent(i)}`)
                            }
                            return n ? e + n : n
                        }
                    },
                    2286: (e, t, n) => {
                        n.d(t, {
                            V: () => o
                        });
                        const i = !!window.EVO_VERBOSE;

                        function o() {
                            try {
                                return !Object || !window || !document.body || i && !window.EVO_VERBOSE
                            } catch (e) {
                                return !0
                            }
                        }
                    },
                    470942: (e, t, n) => {
                        n.d(t, {
                            $7: () => h,
                            $o: () => l,
                            Ar: () => C,
                            CK: () => E,
                            J5: () => I,
                            Jl: () => T,
                            Pq: () => d,
                            V_: () => p,
                            cN: () => _,
                            e6: () => u,
                            g4: () => a,
                            gw: () => c,
                            lC: () => w,
                            nD: () => L,
                            oM: () => O,
                            ql: () => S,
                            r3: () => P,
                            wg: () => f,
                            xW: () => b
                        });
                        var i = n(1452),
                            o = n(998507),
                            s = n(600394),
                            r = n(2286);

                        function a(e = 32) {
                            const t = window.crypto.getRandomValues(new Uint8Array(e));
                            return window.btoa(String.fromCharCode.apply(null, t))
                        }

                        function d(e, t) {
                            const n = e.indexOf(t);
                            if (-1 === n) return !1;
                            const i = e.pop();
                            return n < e.length && (e[n] = i), !0
                        }

                        function l(e, t) {
                            if (t < 0 || t >= e.length) return !1;
                            const n = e.pop();
                            return t < e.length && (e[t] = n), !0
                        }

                        function c(e, t) {
                            return new Promise((n => {
                                window.setTimeout((() => n(t)), e)
                            }))
                        }

                        function h() {
                            const e = document.getElementById("verbose-log");
                            e && (e.innerHTML = "")
                        }

                        function u(e) {
                            e && (e.style.display = "none")
                        }

                        function p(e, t = !1) {
                            e && (e.style.display = t ? "flex" : "block")
                        }
                        const m = {},
                            g = {};

                        function f(e, t) {
                            return new Promise(((n, i) => {
                                if (!e) return void i(new Error("No url or wrong build options"));
                                if (g[e]) return void i(new Error("linksPrefetched[url]"));
                                const o = document.createElement("link");
                                o.rel = "prefetch", o.as = t, o.href = e, o.crossOrigin = "anonymous", document.head.appendChild(o), g[e] = !0, o.addEventListener("error", (() => i(new Error(`Failed preload URL: ${e}`)))), o.addEventListener("load", n)
                            }))
                        }

                        function w(e, t, n) {
                            let o = m[e];
                            return void 0 !== o ? delete m[e] : (window.EVO_VERBOSE(`fetchUrl/started ${e}`, 0, e), o = fetch(e, Object.assign({
                                redirect: "follow",
                                credentials: "same-origin",
                                keepalive: !0,
                                mode: "cors"
                            }, n)).then((t => {
                                if (!t.ok) throw t;
                                return window.EVO_VERBOSE(`fetchUrl/done ${e}`, 0, e, 3e3), t
                            })).catch((t => {
                                throw window.EVO_VERBOSE(`fetchUrl/fail/${t.status} ${e}`, 2, e), new i.G(e, t)
                            }))), "json" === t ? o.then((e => e.json())) : "text" === t ? o.then((e => e.text())) : o
                        }

                        function b(e, t) {
                            const n = `/frontend/loc/strings/${encodeURIComponent(e)}/${t}.json`,
                                o = (window.EVO_CDN || window.EVO_ORIGIN || "") + n;
                            return window.EVO_CDN || window.EVO_ORIGIN, w(o, "json").catch(void 0).catch((e => (i.x(o, e), Promise.reject(e))))
                        }
                        let v = !1;
                        window.addEventListener("beforeunload", (() => {
                            v = !0, "undefined" != typeof Sentry && Sentry.addBreadcrumb({
                                message: "window.onbeforeunload",
                                category: "location"
                            })
                        }));
                        const y = 5;

                        function E(e, t) {
                            return (!o.B0(t) || !t.doNotRetry) && e <= y
                        }

                        function L(e) {
                            if (v || !Object || r.V()) return;
                            e.disableDuration && function() {
                                const e = s.h(window.location.href);
                                e.hashParams.cdn = void 0, window.history.replaceState(null, "", e.toString())
                            }();
                            const t = (n = e.failureCount) * n * 100;
                            var n;
                            window.setTimeout((() => {
                                e.disableDuration && function(e) {
                                    const t = new Date(Date.now() + 60 * e * 1e3).toUTCString();
                                    document.cookie = `ignore_cdn=true; expires=${t}; path=/`
                                }(e.disableDuration), window.location.reload()
                            }), t), v = !0
                        }

                        function S() {
                            _(void 0)
                        }

                        function I(e) {
                            if (!e || s.h(e).origin === window.location.origin) return e;
                            window.console.error("Refusing to load manifest from remote", e)
                        }

                        function O() {
                            const e = s.h(window.location.href);
                            return parseInt(e.getParam("failed") || "0", 10)
                        }

                        function _(e) {
                            const t = s.h(window.location.href);
                            t.hashParams.failed = void 0 !== e ? e.toString() : void 0, window.history.replaceState(null, "", t.toString())
                        }

                        function C(e) {
                            window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: e
                            })
                        }

                        function P({
                            failureReason: e,
                            isCdnEnabled: t
                        }) {
                            return t ? "gameLoader" === e ? 1 : 5 : 0
                        }

                        function T(e = window.location.href) {
                            return s.h(e).getParam("provider")
                        }
                    }
                },
                s = {};

            function r(e) {
                var t = s[e];
                if (void 0 !== t) return t.exports;
                var n = s[e] = {
                    exports: {}
                };
                return o[e](n, n.exports, r), n.exports
            }
            r.m = o, t = Object.getPrototypeOf ? e => Object.getPrototypeOf(e) : e => e.__proto__, r.t = function(n, i) {
                if (1 & i && (n = this(n)), 8 & i) return n;
                if ("object" == typeof n && n) {
                    if (4 & i && n.__esModule) return n;
                    if (16 & i && "function" == typeof n.then) return n
                }
                var o = Object.create(null);
                r.r(o);
                var s = {};
                e = e || [null, t({}), t([]), t(t)];
                for (var a = 2 & i && n;
                    "object" == typeof a && !~e.indexOf(a); a = t(a)) Object.getOwnPropertyNames(a).forEach((e => s[e] = () => n[e]));
                return s.default = () => n, r.d(o, s), o
            }, r.d = (e, t) => {
                for (var n in t) r.o(t, n) && !r.o(e, n) && Object.defineProperty(e, n, {
                    enumerable: !0,
                    get: t[n]
                })
            }, r.f = {}, r.e = e => Promise.all(Object.keys(r.f).reduce(((t, n) => (r.f[n](e, t), t)), [])), r.u = e => "js/" + {
                575: "native-utilities",
                1748: "sm.howler",
                5585: "sm.ecas",
                9830: "video-lib-local"
            }[e] + "." + {
                575: "7c1d3201",
                1748: "17a94c58",
                5585: "6c850cb3",
                9830: "36cdcb19"
            }[e] + ".js", r.miniCssF = e => {}, r.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), n = {}, i = "/frontend/evo/r2/:", r.l = (e, t, o, s) => {
                if (n[e]) n[e].push(t);
                else {
                    var a, d;
                    if (void 0 !== o)
                        for (var l = document.getElementsByTagName("script"), c = 0; c < l.length; c++) {
                            var h = l[c];
                            if (h.getAttribute("src") == e || h.getAttribute("data-webpack") == i + o) {
                                a = h;
                                break
                            }
                        }
                    a || (d = !0, (a = document.createElement("script")).charset = "utf-8", a.timeout = NaN, r.nc && a.setAttribute("nonce", r.nc), a.setAttribute("data-webpack", i + o), a.src = e), n[e] = [t];
                    var u = (t, i) => {
                            a.onerror = a.onload = null, clearTimeout(p);
                            var o = n[e];
                            if (delete n[e], a.parentNode && a.parentNode.removeChild(a), o && o.forEach((e => e(i))), t) return t(i)
                        },
                        p = setTimeout(u.bind(null, void 0, {
                            type: "timeout",
                            target: a
                        }), window.EVO_CDN ? 15e3 : 6e4);
                    a.onerror = u.bind(null, a.onerror), a.onload = u.bind(null, a.onload), d && document.head.appendChild(a)
                }
            }, r.r = e => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, r.p = (globalThis.EVO_CDN || "") + "/frontend/evo/r2/", (() => {
                var e = {
                    2313: 0
                };
                r.f.j = (t, n) => {
                    var i = r.o(e, t) ? e[t] : void 0;
                    if (0 !== i)
                        if (i) n.push(i[2]);
                        else {
                            var o = new Promise(((n, o) => i = e[t] = [n, o]));
                            n.push(i[2] = o);
                            var s = r.p + r.u(t),
                                a = new Error;
                            r.l(s, (n => {
                                if (r.o(e, t) && (0 !== (i = e[t]) && (e[t] = void 0), i)) {
                                    var o = n && ("load" === n.type ? "missing" : n.type),
                                        s = n && n.target && n.target.src;
                                    a.message = "Loading chunk " + t + " failed.\n(" + o + ": " + s + ")", a.name = "ChunkLoadError", a.type = o, a.request = s, i[1](a)
                                }
                            }), "chunk-" + t, t)
                        }
                };
                var t = (t, n) => {
                        var i, o, [s, a, d] = n,
                            l = 0;
                        if (s.some((t => 0 !== e[t]))) {
                            for (i in a) r.o(a, i) && (r.m[i] = a[i]);
                            d && d(r)
                        }
                        for (t && t(n); l < s.length; l++) o = s[l], r.o(e, o) && e[o] && e[o][0](), e[o] = 0
                    },
                    n = self.webpackChunk_frontend_evo_r2_ = self.webpackChunk_frontend_evo_r2_ || [];
                n.forEach(t.bind(null, 0)), n.push = t.bind(null, n.push.bind(n))
            })(), (() => {
                var e, t, n = r(333940);

                function i(e) {
                    return null != e && null != e.data && Object.keys(e.data).length > 0 && "string" == typeof e.data.command && e.data.command.startsWith("EVO:")
                }

                function o(e) {
                    const {
                        name: t,
                        platform: n
                    } = e || {}, i = String(t).startsWith("EVO:"), o = void 0 === n || ["mobile", "desktop"].includes(String(n));
                    return i && o
                }

                function s(e) {
                    return Array.isArray(e) ? e.filter(o) : []
                }

                function a(e) {
                    return Array.isArray(e) ? e.filter(o) : []
                }(function(e) {
                    e.Default = "Default", e.EnabledBySubscription = "EnabledBySubscription", e.EnabledByConfig = "EnabledByConfig"
                })(e || (e = {})),
                function(e) {
                    e.Subscribe = "EVO:EVENT_SUBSCRIBE", e.Connect = "EVO:CONNECT"
                }(t || (t = {}));
                class d {
                    constructor({
                        isDesktop: e,
                        sendLogMessage: n,
                        subscriptionsLimit: o = 100,
                        commandsThrottlingEnabled: s = !0
                    }) {
                        this.eventCache = {}, this.eventsEnabledBySubscription = new Set, this.eventsEnabledByConfig = new Set, this.commandsDisabledByConfig = new Set, this.commandListeners = {}, this.toTriggerOnDispose = [], this.isLogSenderSet = !1, this.commandThrottler = function(e) {
                            const t = new Map;
                            return {
                                throttle: function(e, n) {
                                    const i = Date.now(),
                                        o = JSON.stringify(e.data),
                                        s = t.get(o);
                                    (!s || i - s >= 250) && (n(e), t.set(o, i))
                                },
                                clear: function() {
                                    t.forEach(((e, n) => {
                                        t.delete(n)
                                    }))
                                }
                            }
                        }(), this.iOSNativeMiddleware = null, this.messageHandler = e => {
                            if (i(e)) {
                                if (this.broadcastMWMessageToGames(e), function(e) {
                                        var n;
                                        return i(e) && t.Connect === e.data.command && !!(null === (n = e.ports) || void 0 === n ? void 0 : n.length)
                                    }(e)) return this.messagePort = e.ports[0], void(this.messagePort.onmessage = this.messageHandler);
                                if (function(e) {
                                        return i(e) && t.Subscribe === e.data.command && "string" == typeof e.data.event && e.data.event.startsWith("EVO:")
                                    }(e)) this.handleSubscription(e.data.event, e.origin);
                                else {
                                    if (!this.commandsThrottlingEnabled) return void this.handleCommand(e);
                                    this.commandThrottler.throttle(e, (e => this.handleCommand(e)))
                                }
                            }
                        }, window.addEventListener("message", this.messageHandler), this.subscriptionsLimit = o, this.sendLogMessage = n, this.fallbackSendLogMessage = n, this.operatorWindow = function(e) {
                            const t = window.location.origin;
                            let n = e.parent;
                            try {
                                for (; n.location.origin === t && n.parent !== n;) n = n.parent
                            } catch (e) {}
                            return n
                        }(window), this.isDesktop = e, this.commandsThrottlingEnabled = s
                    }
                    isEventEnabledByConfig(e) {
                        return this.eventsEnabledByConfig.has(e)
                    }
                    isCommandDisabledByConfig(e) {
                        return this.commandsDisabledByConfig.has(e)
                    }
                    set config(e) {
                        var t, n;
                        this._config || (this._config = e, null === (t = function(e = [], t) {
                            return new Set([...e.filter((({
                                platform: e
                            }) => void 0 === e || "desktop" === e && t || "mobile" === e && !t)).map((e => e.name))])
                        }(e.enabledEvents, this.isDesktop)) || void 0 === t || t.forEach((e => this.eventsEnabledByConfig.add(e))), null === (n = function(e = [], t) {
                            return new Set([...e.filter((({
                                platform: e
                            }) => void 0 === e || "desktop" === e && t || "mobile" === e && !t)).map((e => e.name))])
                        }(e.disabledCommands, this.isDesktop)) || void 0 === n || n.forEach((e => this.commandsDisabledByConfig.add(e))))
                    }
                    setLogMessageSender(e) {
                        this.isLogSenderSet || (this.sendLogMessage = e, this.isLogSenderSet = !0)
                    }
                    postMessage(t, n = {
                        type: e.Default
                    }) {
                        if (n.isUnstable && "unstable" !== this.release) return;
                        const {
                            Default: i,
                            EnabledBySubscription: o,
                            EnabledByConfig: s
                        } = e;
                        n.type === o && n.postOnSubscription && (this.eventCache[t.event] = t), (n.type === i || n.type === o && this.eventsEnabledBySubscription.has(t.event) || n.type === s && this.isEventEnabledByConfig(t.event)) && this.postMessageToContainer(t, {
                            disableLogging: n.disableLogging
                        })
                    }
                    onContainerCommand(e, t, n = {}) {
                        const i = this.commandListeners[e] || [];
                        i.push([t, n]), this.commandListeners[e] = i
                    }
                    onDispose(e) {
                        this.toTriggerOnDispose.push(e)
                    }
                    reset() {
                        for (const e of this.toTriggerOnDispose) e();
                        this.isLogSenderSet = !1, this.sendLogMessage = this.fallbackSendLogMessage, this.toTriggerOnDispose.length = 0, this.commandListeners = {}, this.eventsEnabledBySubscription.clear(), this.eventCache = {}, this.commandThrottler.clear()
                    }
                    get release() {
                        var e, t;
                        return null !== (t = null === (e = this._config) || void 0 === e ? void 0 : e.release) && void 0 !== t ? t : "stable"
                    }
                    postMessageToContainer(e, t = {}) {
                        var n, i;
                        t.disableLogging || this.log({
                            type: "event",
                            payload: e
                        }), this.operatorWindow.postMessage(e, "*"), null === (n = this.messagePort) || void 0 === n || n.postMessage(e), null === (i = this.iOSNativeMiddleware) || void 0 === i || i.postMessageToContainer(e)
                    }
                    broadcastMWMessageToGames(e) {
                        var t, n;
                        if ("multi" === (null === (t = window.EVO_LOADER) || void 0 === t ? void 0 : t.instance.kind)) {
                            const t = window.EVO_LOADER.instance;
                            for (const i of t.frames) null === (n = i.frame.contentWindow) || void 0 === n || n.postMessage(e.data, "*")
                        }
                    }
                    handleSubscription(e, t) {
                        this.addSubscription(e), this.log({
                            type: "subscription",
                            payload: e,
                            meta: {
                                origin: t
                            }
                        });
                        const n = this.eventCache[e];
                        n && this.postMessageToContainer(n)
                    }
                    handleCommand({
                        data: e,
                        origin: t
                    }) {
                        const {
                            command: i
                        } = e, o = n._T(e, ["command"]);
                        if (this.isCommandDisabledByConfig(i)) return void console.warn(`${i} is ignored as disabled via backoffice config`);
                        this.log({
                            type: "command",
                            payload: e,
                            meta: {
                                origin: t
                            }
                        });
                        const s = this.commandListeners[i];
                        if (s)
                            for (const [e, t] of s) {
                                if (t.isUnstable && "unstable" !== this.release) return;
                                e(o)
                            }
                    }
                    addSubscription(e) {
                        this.eventsEnabledBySubscription.size >= this.subscriptionsLimit || this.eventsEnabledBySubscription.add(e)
                    }
                    log({
                        type: e,
                        payload: t,
                        meta: n
                    }) {
                        const i = Object.assign(Object.assign({
                            type: e
                        }, t && {
                            payload: t
                        }), n && {
                            meta: n
                        });
                        this.sendLogMessage("CLIENT_API_V2", i)
                    }
                }
                const l = window.origin || window.location.origin,
                    c = Object.freeze({
                        receive: l,
                        send: "null" === l ? "*" : l
                    }),
                    h = "evo-broadcast-state";

                function u(e, t) {
                    if (e && t.source !== e) try {
                        e.origin === window.origin && e.location.origin === window.location.origin && e.postMessage(t.data, c.send)
                    } catch (e) {}
                }
                var p = r(600394);

                function m(e) {
                    return {
                        name: e,
                        toString: () => e
                    }
                }
                class g {
                    constructor() {
                        this.listeners = [], this.messageReceiver = e => {
                            const t = e.data;
                            if (e.origin === c.receive && t && "object" == typeof t && t.key === h && t.value && "object" == typeof t.value)
                                for (const e of this.listeners) e(t.value)
                        }, window.addEventListener("message", this.messageReceiver)
                    }
                    addListener(e) {
                        this.listeners.push(e)
                    }
                    removeListener(e) {
                        const t = this.listeners.indexOf(e);
                        t > -1 && this.listeners.splice(t, 1)
                    }
                    send(e) {
                        window.postMessage({
                            key: h,
                            value: e
                        }, c.send)
                    }
                }
                g.instance = new g;
                const f = m("ping {015f023c-9f1f-4218-b7f3-7f5c85650dc6}"),
                    w = m("init {44ee98ea-0aab-464b-91c8-fc2b6ca75758}"),
                    b = m("dispose {3fb190a3-d0cc-4237-bc6e-abc2ff1ab044}");
                class v {
                    constructor(e = g.instance, t = "default") {
                        this.instanceId = Date.now().toString(36) + Math.random().toString(36), this.messageId = 0, this.pingTimerId = 0, this.pingCheckTimerId = 0, this.data = {}, this.listeners = {}, this.pings = {}, this.receiveValues = e => {
                            if (e.channel !== this.channel) return;
                            const t = e.instanceId,
                                n = e.messageKey;
                            switch (this.schedulePingCheck(t), n) {
                                case f.name:
                                    break;
                                case b.name:
                                    this.removeInstance(t);
                                    break;
                                case w.name:
                                    for (const e of Object.values(this.data))
                                        for (const t of e) this.transport.send(t);
                                    break;
                                default:
                                    const i = this.data[n] || (this.data[n] = []);
                                    for (let o = 0; o < i.length; o++) {
                                        const s = i[o];
                                        if (s.instanceId === t) return void(s.messageId < e.messageId && (i[o] = e, this.triggerListeners(n, t)))
                                    }
                                    i.push(e), this.triggerListeners(n, t)
                            }
                        }, this.channel = t, this.transport = e, e.addListener(this.receiveValues), this.sendValues(w, {})
                    }
                    dispose() {
                        this.transport.removeListener(this.receiveValues), this.sendValues(b, {}), window.clearTimeout(this.pingTimerId), window.clearTimeout(this.pingCheckTimerId)
                    }
                    reset() {
                        window.clearTimeout(this.pingCheckTimerId), this.pingCheckTimerId = 0, this.sendValues(b, {})
                    }
                    sendValues(e, t) {
                        const n = Object.assign(Object.assign({}, t), {
                            channel: this.channel,
                            instanceId: this.instanceId,
                            messageId: this.messageId++,
                            messageKey: e.name
                        });
                        this.transport.send(n), this.receiveValues(n), this.schedulePing()
                    }
                    getValues(e) {
                        return this.data[e.name || e.toString()] || []
                    }
                    addListener(e, t) {
                        (this.listeners[e.name] || (this.listeners[e.name] = [])).push(t)
                    }
                    removeListener(e, t) {
                        const n = this.listeners[e.name],
                            i = n ? n.indexOf(t) : -1;
                        i > -1 && n.splice(i, 1)
                    }
                    removeAllListeners(e) {
                        this.listeners[e.name] && (this.listeners[e.name] = [])
                    }
                    schedulePing() {
                        window.clearTimeout(this.pingTimerId), this.pingTimerId = window.setTimeout((() => {
                            this.sendValues(f, {})
                        }), 5e3)
                    }
                    schedulePingCheck(e) {
                        const t = Date.now();
                        this.pings[e] = t, this.pingCheckTimerId || (this.pingCheckTimerId = window.setTimeout((() => {
                            this.pingCheckTimerId = 0, "hidden" !== document.visibilityState && this.removeDeadInstances(t)
                        }), 1e4))
                    }
                    triggerListeners(e, t) {
                        const n = this.listeners[e];
                        if (n) {
                            const i = this.getValues(e);
                            for (const e of n) e(i, t)
                        }
                    }
                    removeDeadInstances(e) {
                        for (const t of Object.keys(this.pings)) this.pings[t] <= e && this.removeInstance(t)
                    }
                    removeInstance(e) {
                        const t = [];
                        for (const n of Object.keys(this.data)) {
                            const i = this.data[n];
                            for (let o = 0; o < i.length; o++)
                                if (i[o].instanceId === e) {
                                    t.push(n), i.splice(o, 1);
                                    break
                                }
                        }
                        delete this.pings[e];
                        for (const n of t) this.triggerListeners(n, e)
                    }
                }
                var y, E, L = r(998507);
                (function(e) {
                    e.Lobby = "lobby", e.Direct = "direct"
                })(y || (y = {})),
                function(e) {
                    e.PlayForFun = "pff", e.FreeGames = "free_games", e.BalanceId = "balance_id", e.Demo = "demo", e.SwitchBalanceId = "switch_balance_id"
                }(E || (E = {}));
                const S = ["lobbyIntent"];

                function I(e = {}, t = !1) {
                    const n = p.h(window.location.href);
                    for (const t of S) n.getParam(t) && !e.hasOwnProperty(t) && (e[t] = n.getParam(t));
                    const i = window.EVO_SESSION_ID_FALLBACK;
                    i && (e.EVOSESSIONID = i, e.cdn = window.EVO_CDN, e.locale = window.EVO_LOCALE);
                    const o = window.EVO_ORIGIN;
                    let s, r;
                    return o && !t && (e.origin = o), t ? (s = "?", r = `${o||window.location.origin}/entry`) : (s = "#", r = window.location.pathname), r + p.R(s, e)
                }

                function O(e, t = {}) {
                    "/" === e[0] && (e = (window.EVO_ORIGIN || "") + e);
                    const n = window.EVO_SESSION_ID_FALLBACK;
                    if (n && (t.EVOSESSIONID = n), t.client_version = "6.20240115.63824.37369-40dbe8a65e", window.EVO_LOADER) {
                        const {
                            deviceInfo: e
                        } = window.EVO_LOADER;
                        (null == e ? void 0 : e.isIosDevice) && e.isQQBrowser && (t.nocache = (Date.now() / 1e3).toFixed(0))
                    }
                    return e + p.R(e.includes("?") ? "&" : "?", t)
                }
                const _ = "undefined" != typeof InstallTrigger,
                    C = "iFrAmE";

                function P(e) {
                    let t = !1;
                    if (_) t = !0;
                    else try {
                        let e = window;
                        const n = e.location;
                        for (; !t && e.parent !== e;) {
                            const i = e.parent.location;
                            i.origin === n.origin && i.pathname === n.pathname && i.search === n.search && (t = !0), e = e.parent
                        }
                    } catch (e) {}
                    if (t) {
                        const t = p.h(window.location.href),
                            n = p.h(e);
                        if (t.pathname === n.pathname && t.search === n.search) {
                            const i = t.getParam(C) || "";
                            n.searchParams[C] = `${i}x`, e = n.toString()
                        }
                    }
                    return e
                }
                const T = "3!";

                function A() {
                    return ["", window.location.origin + window.location.pathname, "table_id", "vt_id", "game", "category", "instance_id"]
                }

                function k(e) {
                    const t = A(),
                        n = t.length;
                    let i = T;
                    for (const t of e) o(t);
                    if (t.length > 1294) throw new L.Jp("Cannot encode URI");
                    for (let e = n; e < t.length; e++) i += `!${t[e].replace(/!/g,"%21").replace(/&/g,"%26")}`;
                    return i;

                    function o(e) {
                        const t = p.h(e);
                        "about:" !== t.protocol && (r(t.origin + t.pathname), s(t.searchParams), s(t.hashParams))
                    }

                    function s(e) {
                        for (const t of Object.keys(e)) {
                            const n = e[t];
                            if (t && null != n)
                                if (Array.isArray(n))
                                    for (const e of n) r(t), r(e);
                                else r(t), r(n)
                        }
                        i += "-"
                    }

                    function r(e) {
                        let n = t.indexOf(e); - 1 === n ? n = t.push(e) : n += 1;
                        let o = n.toString(36);
                        n > 35 && (o = `0${o}`), i += o
                    }
                }

                function R(e, t = !1) {
                    try {
                        return e ? function(e) {
                            const t = A(),
                                n = e.split(/!/g);
                            for (let e = 2; e < n.length; e++) t.push(n[e].replace(/%21/g, "!").replace(/%26/g, "&"));
                            const i = [],
                                o = n[1];
                            let s = 0;
                            for (; s < o.length;) i.push(r());
                            return i;

                            function r() {
                                let e = d();
                                return p.h(e).origin !== window.location.origin && (console.warn("Potentially unsecure origin blocked from the `mwg` arg", e), e = window.location.origin + window.location.pathname), e + a("?") + a("#")
                            }

                            function a(e) {
                                let t = "";
                                for (; s < o.length;) {
                                    if ("-" === o[s]) {
                                        s++;
                                        break
                                    }
                                    const n = d(),
                                        i = d();
                                    t += `${(t?"&":e)+encodeURIComponent(n)}=${encodeURIComponent(i)}`
                                }
                                return t
                            }

                            function d() {
                                let e = o[s++],
                                    n = "";
                                "0" === e && (e = o[s++], n = o[s++]);
                                const i = parseInt(e + n, 36);
                                return t[i - 1]
                            }
                        }(e) : []
                    } catch (n) {
                        if (window.console.error("Invalid multi URL", e, n), t) throw n;
                        return []
                    }
                }
                const D = /(password|SESSIONID)((=).+?($|&)|(%3D).+?($|%26))/gi;

                function V(e) {
                    return e.replace(D, "$1$3$5***$4$6")
                }
                const M = "ezugi",
                    x = "ezugi.lobby",
                    N = Object.freeze({
                        "error.noDealer": "This table is temporarily inactive. Please return later or select a different table.",
                        "message.unableLoadGame": "Something went wrong during loading the game. Please try again later or select a different table in the Lobby.",
                        "button.backToLobby": "BACK TO LOBBY",
                        "button.continue": "CONTINUE",
                        "button.tryAgain.uppercase": "TRY AGAIN",
                        "message.unsupportedLanguage": "This game is not available in your language",
                        "message.sessionExpired": "Your session has expired",
                        "mobile.unsupportedDevice_short": "Currently your device is not supported.",
                        "message.upgradeOperatingSystem": "For the best possible experience when playing our games, we recommend that you upgrade your operating system."
                    });
                var j, $, B = r(1452),
                    F = r(470942);

                function G(e, t, n = !0, i = window.BUNDLE_MANIFEST) {
                    const o = (e.frontend_app || e.game || "lobby").split(",");
                    for (const e of o) {
                        const n = e.trim(),
                            o = i.apps[n];
                        if (null == o ? void 0 : o.assets.length) {
                            const e = i.publicPath,
                                s = o.adaptive || ("desktop" === t ? o.desktop : o.mobile);
                            return Object.assign(Object.assign({}, o), {
                                assets: o.assets.map((t => ("number" == typeof t && (t = i.commonAssets[t]), e + t))),
                                application: n,
                                loader: `${e}${s}`
                            })
                        }
                    }
                    if (n) throw new Error(`Cannot find any of the defined apps: ${o.join(", ")}`)
                }(function(e) {
                    e.LS2 = "ls2", e.LS3 = "ls3", e.StockMarket = "stockmarket", e.AndarBahar = "andarbahar", e.Lobby = "lobby", e.Slingshot = "slingshot", e.CaribbeanStudPoker = "csp", e.CasinoHoldemPoker = "holdem", e.CasinoHoldemPokerNew = "chp", e.UltimateTexasHoldem = "uth", e.ExtremeTexasHoldem = "eth", e.TexasHoldemBonus = "thb", e.ThreeCardPoker = "tcp", e.TripleCardPoker = "trp", e.TeenPatti = "teenpatti", e.DoubleHandPoker = "dhp", e.BaccaratPro = "baccarat_pro", e.Roulette = "roulette", e.InstantRoulette = "instantroulette", e.DoubleBallRoulette = "double_ball_roulette", e.AmericanRoulette = "americanroulette", e.GoldBarRoulette = "goldbarroulette", e.Blackjack = "blackjack", e.ClassicFreebet = "classicfreebet", e.ScalableBlackjack = "scalableblackjack", e.FreebetBlackjack = "freebet", e.PowerBlackjack = "powerscalableblackjack", e.LightningBlackjack = "lightningscalablebj", e.Baccarat = "baccarat", e.DeadOrAliveSaloon = "deadoralivesaloon", e.LightningBaccarat = "lightningbaccarat", e.GoldenWealthBaccarat = "goldenwealth", e.BaccaratMultiplay = "baccaratmultiplay", e.MoneyWheel = "moneywheel", e.DragonTiger = "dragontiger", e.TopCard = "topcard", e.Monopoly = "monopoly", e.RNGBlackjack = "rng-blackjack", e.RNGLightningBlackjack = "rng-lightningscalablebj", e.RNGMoneyWheel = "rng-moneywheel", e.RNGRoulette = "rng-roulette", e.RNGAmericanRoulette = "rng-american-roulette", e.RNGBaccarat = "rng-baccarat", e.RNGCraps = "rng-craps", e.RNGMegaBall = "rng-megaball", e.RNGDragonTiger = "rng-dragontiger", e.RNGTopCard = "rng-topcard", e.DealOrNoDeal = "dealnodeal", e.RNGDealOrNoDeal = "rng-dealnodeal", e.SideBetCity = "sidebetcity", e.LightningDice = "lightningdice", e.SicBo = "sicbo", e.RNGSicBo = "rng-sicbo", e.CrazyTime = "crazytime", e.MegaBall = "megaball", e.Craps = "craps", e.GonzoTreasureHunt = "gonzotreasurehunt", e.CashOrCrash = "cashorcrash", e.FanTan = "fantan", e.BacBo = "bacbo", e.TopDice = "topdice", e.PowerBall = "powerball", e.CrazyCoinFlip = "crazycoinflip", e.GonzoTreasureMap = "gonzotreasuremap", e.MonopolyBigBaller = "monopolybigballer", e.FunkyTime = "funkytime", e.LightningLotto = "lightninglotto", e.RNGLightningLotto = "rng-lightninglotto", e.RNGHilo = "rng-hilo", e.LightningStorm = "lightningstorm"
                })(j || (j = {})),
                function(e) {
                    e.NewJersey = "new-jersey", e.Pennsylvania = "pennsylvania", e.Lightning = "lightning"
                }($ || ($ = {}));
                class U {
                    static addEventListener(e, t, n) {
                        (this._addEventListener || e.addEventListener).call(e, t, n)
                    }
                }
                U.setTimeout = window.setTimeout.bind(window), U.clearTimeout = window.clearTimeout.bind(window), U._addEventListener = "undefined" == typeof EventTarget ? null : EventTarget.prototype.addEventListener;
                const W = [];

                function z(e) {
                    W.push(e), U.addEventListener(e, "load", q), U.addEventListener(e, "error", q)
                }

                function q() {
                    Object && (this.removeEventListener("load", q), this.removeEventListener("error", q), F.Pq(W, this))
                }
                class H {
                    init() {
                        Image = function(e) {
                            function t() {
                                const t = new e;
                                return z(t), t
                            }
                            return t.prototype = e.prototype, t
                        }(Image);
                        const e = document.createElement;
                        document.createElement = function(t, n) {
                            const i = e.call(this, t, n),
                                {
                                    tagName: o
                                } = i;
                            return "IMG" !== o && "SCRIPT" !== o && "LINK" !== o || z(i), i
                        }
                    }
                    reset() {
                        for (; W.length;) q.call(W[0])
                    }
                    clean() {
                        return new Promise(((e, t) => {
                            this.verify(1e3, e, t)
                        }))
                    }
                    verify(e, t, n) {
                        return e < 0 ? (window.console.error("Asset downloads are still pending", W.slice()), n("SandboxAssetWrapper detected pending assets")) : W.every(K) ? t() : void U.setTimeout((() => this.verify(e - 25, t, n)), 25)
                    }
                }

                function K(e) {
                    return "prefetch" === e.rel || !e.src && !e.href
                }
                const J = Symbol("Sandbox event collection"),
                    Q = Symbol("Remove all event listeners");
                class X {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        return "undefined" != typeof EventTarget
                    }
                    init() {
                        const e = this.eventTargets,
                            t = EventTarget.prototype.addEventListener,
                            n = EventTarget.prototype.removeEventListener,
                            i = this;
                        EventTarget.prototype.addEventListener = function(n, o, s, r) {
                            if (t.call(this, n, o, s), "react-dom" === r || "evo-loader" === r || "test-tools" === r) return;
                            if (!i.isCapturing) return;
                            const a = null != this ? this : window,
                                d = a[J] || (a[J] = []);
                            d.length || e.push(a);
                            let l = null;
                            "object" == typeof s && s.once && (l = () => {
                                a.removeEventListener(n, o, s)
                            }, t.call(this, n, l, s));
                            const c = a instanceof HTMLImageElement ? a.src : new Error;
                            d.push({
                                type: n,
                                listener: o,
                                extraListener: l,
                                options: s,
                                stack: c
                            })
                        }, EventTarget.prototype.removeEventListener = function(t, i, o) {
                            n.call(this, t, i, o);
                            const s = null != this ? this : window,
                                r = s[J];
                            if (r && Object) {
                                for (let e = 0; e < r.length; e++) {
                                    const s = r[e];
                                    if (s.listener === i && s.type === t && (a = s.options, d = o, Boolean("object" == typeof a ? null == a ? void 0 : a.capture : a) === Boolean("object" == typeof d ? null == d ? void 0 : d.capture : d))) {
                                        s.extraListener && n.call(this, t, s.extraListener, o), F.$o(r, e);
                                        break
                                    }
                                }
                                r.length || F.Pq(e, s)
                            }
                            var a, d
                        }, EventTarget.prototype[Q] = function() {
                            const t = this[J];
                            if (t) {
                                for (const e of t) n.call(this, e.type, e.listener, e.options);
                                t.length = 0
                            }
                            F.Pq(e, this)
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let e = this.eventTargets.length - 1; e >= 0; e--) {
                            const t = this.eventTargets[e];
                            if (t instanceof Node && t !== document && !document.contains(t)) continue;
                            if (t instanceof WebSocket && t.readyState === WebSocket.CLOSED) continue;
                            if (t instanceof XMLHttpRequest && t.readyState === XMLHttpRequest.DONE) continue;
                            const n = t[J];
                            if (!(null == n ? void 0 : n.length)) continue;
                            window.console.warn("addEventListener has not been cleared up by application code.", t, n.slice());
                            const i = EventTarget.prototype.removeEventListener;
                            let o = 0;
                            const s = n.length;
                            for (; n.length;) {
                                if (o++ > 2 * s) return Promise.reject("infinite sandbox removeEventListener");
                                const e = n[0];
                                i !== t.removeEventListener && i.call(t, e.type, e.listener, e.options), t.removeEventListener(e.type, e.listener, e.options)
                            }
                        }
                    }
                }
                const Y = "SandboxFetchWrapper aborted the request";
                class Z {
                    constructor() {
                        this.promiseCancelation = void 0
                    }
                    init() {
                        const e = window.fetch;
                        window.fetch = (t, n) => (null == n ? void 0 : n.evoIgnoreSandbox) ? e.call(window, t, n) : Promise.race([this.promiseCancelation, e.call(window, t, n)]).catch((e => (e === Y && window.console.warn("Sandbox interrupted request", t), Promise.reject(e))))
                    }
                    reset() {
                        this.promiseCancelation = new Promise(((e, t) => {
                            this.promiseRejector = t
                        })), this.promiseCancelation.catch((() => {}))
                    }
                    clean() {
                        this.promiseRejector && this.promiseRejector(Y)
                    }
                }
                const ee = ["__autoTestVideoComponents", "defineEvoVideo", "__lobbyTileSizeHint", "_", "HowlerGlobal", "Howler", "Howl", "Sound", "Hammer", "mozPaintCount", "mozInnerScreenX", "mozInnerScreenY", "mozAnimationStartTime", "orientation", "localStorage", "sessionStorage", "length", "innerHeight", "outerHeight", "innerWidth", "outerWidth", "frameElement", "parent", "top", "scrollX", "scrollY", "pageXOffset", "pageYOffset", "webkitStorageInfo", "speechSynthesis", "caches", "webkit"];
                class te {
                    constructor() {
                        this.globals = void 0, this.resetFailed = null
                    }
                    init() {}
                    reset() {
                        if (null !== this.resetFailed) return;
                        this.resetFailed = !1;
                        let e = null;
                        try {
                            const t = this.globals = {};
                            for (e of Object.keys(window)) ee.includes(e) || (t[e] = window[e])
                        } catch (t) {
                            window.console.warn("SandboxGlobalsWrapper - failed to read", e, t), this.globals = void 0, this.resetFailed = !0
                        }
                    }
                    clean() {
                        if (this.resetFailed) return Promise.reject("SandboxGlobalsWrapper - could not capture window properties");
                        const e = this.globals;
                        if (e) {
                            for (const t of Object.keys(window)) {
                                if (ee.includes(t) || t.startsWith("webpack") || !Number.isNaN(+t)) continue;
                                const n = window[t],
                                    i = e[t];
                                if (n !== i) {
                                    window.console.warn(`window.${t} value has been changed from`, i, "to", n);
                                    try {
                                        window[t] = i
                                    } catch (e) {
                                        return Promise.reject(`SandboxGlobalsWrapper - window.${t} modified`)
                                    }
                                }
                            }
                            return Promise.resolve()
                        }
                    }
                }
                const ne = Symbol("Sandbox known DOM node"),
                    ie = Symbol("Sandbox expected nodeValue"),
                    oe = Symbol("Sandbox expected attributes"),
                    se = Object.keys(HTMLElement.prototype).filter((e => e.startsWith("on")));
                class re {
                    constructor() {
                        this.title = "", this.bodyClassName = "", this.knownElementCount = -1
                    }
                    init() {}
                    reset() {
                        this.markAllIgnoredElements(), this.knownElementCount = this.markKnownElements(document.documentElement, 0), this.title = document.title, this.bodyClassName = document.body.className
                    }
                    clean() {
                        if (this.markAllIgnoredElements(), this.removeUnknownElements(document.documentElement, 0) !== this.knownElementCount) throw new Error("Predefined DOM node has been removed.");
                        this.title !== document.title && (window.console.warn("document.title not restored by the application"), document.title = this.title), this.bodyClassName !== document.body.className && (window.console.warn("document.body.className not restored by the application"), document.body.className = this.bodyClassName)
                    }
                    markAllIgnoredElements() {
                        this.markIgnoredElements('style[data-source="evo-video-components"]'), this.markIgnoredElements('script[src^="chrome-extension:"]')
                    }
                    markIgnoredElements(e) {
                        const t = document.querySelectorAll(e);
                        for (let e = 0; e < t.length; e++) t[e].setAttribute("data-sandbox", "ignore")
                    }
                    removeUnknownElements(e, t) {
                        for (; e;) {
                            const n = e.nextSibling;
                            if (e instanceof Element && "ignore" === e.getAttribute("data-sandbox")) {
                                e = n;
                                continue
                            }
                            const i = e[ne];
                            if (i !== t) {
                                if (null != i) throw new Error("Predefined DOM node has been removed.");
                                this.warnMountedReact(e, !1), window.console.warn("DOM element not cleared up by the application.", e), e.parentNode.removeChild(e), e = n;
                                continue
                            }
                            t++;
                            const o = e[ie];
                            if (e.nodeValue !== o && (window.console.warn("DOM element nodeValue not reset by the application.", e, {
                                    got: e.nodeValue,
                                    expected: o
                                }), e.nodeValue = o), e instanceof Element && this.resetAttributes(e), e._reactRootContainer) throw window.console.error("ReactDOM is not unmounted from the node.", e), new Error("ReactDOM is not unmounted");
                            e.firstChild && (t = this.removeUnknownElements(e.firstChild, t)), e = n
                        }
                        return t
                    }
                    warnMountedReact(e, t) {
                        for (; e;) e._reactRootContainer ? window.console.warn("ReactDOM is not unmounted from the node.", e) : e.firstChild && this.warnMountedReact(e.firstChild, !0), e = t ? e.nextSibling : null
                    }
                    markKnownElements(e, t) {
                        for (; e;) {
                            const n = e.nextSibling;
                            e instanceof Element && "ignore" === e.getAttribute("data-sandbox") || (e[ne] = t, t++, e instanceof Element && e.hasAttributes() && (e[oe] = this.captureAttributes(e)), e[ie] = e.nodeValue, e.firstChild && (t = this.markKnownElements(e.firstChild, t))), e = n
                        }
                        return t
                    }
                    resetAttributes(e) {
                        const t = e[oe];
                        if (!t) return;
                        for (let n = 0; n < t.length; n += 2) {
                            const i = t[n],
                                o = t[n + 1],
                                s = e.getAttribute(i);
                            o !== s && (("style" !== i || o || s) && window.console.warn("Attribute not restored by the application", e, {
                                name: i,
                                got: s,
                                expected: o
                            }), e.setAttribute(i, o))
                        }
                        const n = e.getAttributeNames();
                        for (const i of n) {
                            let n = !0;
                            if (t)
                                for (let e = 0; e < t.length; e += 2)
                                    if (t[e] === i) {
                                        n = !1;
                                        break
                                    }
                            n && e.removeAttribute(i)
                        }
                        for (const t of se) {
                            const n = e[t];
                            n && (window.console.warn("Event handler not removed", e, {
                                name: t,
                                got: n
                            }), e[t] = null)
                        }
                    }
                    captureAttributes(e) {
                        const t = [];
                        for (const n of e.getAttributeNames()) t.push(n, e.getAttribute(n));
                        return t
                    }
                }
                const ae = Symbol("Sandbox event collection");
                class de {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        if (!window.matchMedia) return !0;
                        const e = this.getMediaQueryListPrototype();
                        return !!(null == e ? void 0 : e.addListener)
                    }
                    init() {
                        if (!window.matchMedia) return;
                        const e = this.eventTargets,
                            t = this.getMediaQueryListPrototype(),
                            n = t.addListener,
                            i = t.removeListener,
                            o = this;
                        t.addListener = function(t) {
                            if (n.call(this, t), !this || !o.isCapturing) return;
                            const i = this[ae] || (this[ae] = []);
                            i.length || e.push(this), i.push({
                                listener: t,
                                stack: new Error
                            })
                        }, t.removeListener = function(t) {
                            i.call(this, t);
                            const n = this[ae];
                            if (n && Object) {
                                for (let e = 0; e < n.length; e++)
                                    if (n[e].listener === t) {
                                        F.$o(n, e);
                                        break
                                    }
                                n.length || F.Pq(e, this)
                            }
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let e = this.eventTargets.length - 1; e >= 0; e--) {
                            const t = this.eventTargets[e],
                                n = t[ae];
                            if (null == n ? void 0 : n.length)
                                for (window.console.warn("matchMedia().addListener has not been cleared up by application code.", t, n.slice()); n.length;) t.removeListener(n[0].listener)
                        }
                    }
                    getMediaQueryListPrototype() {
                        return "undefined" != typeof MediaQueryList ? MediaQueryList.prototype : Object.getPrototypeOf(window.matchMedia(""))
                    }
                }
                const le = Error;
                class ce {
                    constructor() {
                        this.isCapturing = !1, this.timers = new Map, this.animationFrames = new Map
                    }
                    init() {
                        window.setTimeout = this.timerCreator(this.timers, !0, window.setTimeout), window.clearTimeout = this.timerRemover(this.timers, window.clearTimeout), window.setInterval = this.timerCreator(this.timers, !1, window.setInterval), window.clearInterval = this.timerRemover(this.timers, window.clearInterval), window.requestAnimationFrame && (window.requestAnimationFrame = this.rafCreator(this.animationFrames, window.requestAnimationFrame), window.cancelAnimationFrame = this.timerRemover(this.animationFrames, window.cancelAnimationFrame))
                    }
                    reset() {
                        this.timers.clear(), this.animationFrames.clear(), this.isCapturing = !0
                    }
                    clean() {
                        for (const [e, t] of this.timers) window.console.warn("setTimeout/setInterval has not been cleared up by application code.", t), window.clearTimeout(e);
                        for (const [e, t] of this.animationFrames) window.console.warn("requestAnimationFrame has not been cleared up by application code.", t), window.cancelAnimationFrame(e)
                    }
                    timerRemover(e, t) {
                        return n => {
                            t(n), e.delete(n)
                        }
                    }
                    timerCreator(e, t, n) {
                        return (i, o, ...s) => {
                            let r;
                            return r = n(t ? () => {
                                t && e.delete(r), i && i.call(null, ...s)
                            } : i, o), this.isCapturing && e.set(r, new le), r
                        }
                    }
                    rafCreator(e, t) {
                        return (n, i) => {
                            let o;
                            return o = t((t => {
                                e.delete(o), n && n.call(null, t)
                            })), this.isCapturing && "sandboxIgnore" !== i && e.set(o, new le), o
                        }
                    }
                }
                const he = [],
                    ue = WebSocket;

                function pe(e) {
                    if (arguments.length > 1) throw new Error("Only 1 argument expected");
                    const t = new ue(e);
                    return function(e) {
                        he.push(e), U.addEventListener(e, "close", me), U.addEventListener(e, "error", me)
                    }(t), t
                }

                function me() {
                    this.removeEventListener("close", me), this.removeEventListener("error", me), Object && F.Pq(he, this)
                }
                Object.assign(pe, WebSocket), pe.prototype = ue.prototype;
                class ge {
                    init() {
                        window.WebSocket = pe
                    }
                    reset() {
                        for (; he.length;) me.call(he[0])
                    }
                    clean() {
                        return he.length && window.console.warn("WebSocket instances are not closed", he.slice()), new Promise(((e, t) => {
                            this.verify(1e3, e, t)
                        }))
                    }
                    verify(e, t, n) {
                        if (e < 0) return window.console.error("WebSocket instances are still open", he.slice()), n("SandboxWebSocketWrapper detected open connections");
                        if (0 === he.length) return t();
                        for (let e = he.length - 1; e >= 0; e--) he[e].close(4e3, "SPA switch");
                        U.setTimeout((() => this.verify(e - 25, t, n)), 25)
                    }
                }
                const fe = [];
                class we {
                    init() {
                        if ("undefined" == typeof Worker) return;
                        const e = Worker;

                        function t(t) {
                            const n = new e(t);
                            var i;
                            return i = n, fe.push(i), n
                        }
                        Object.assign(t, Worker), t.prototype = e.prototype;
                        const n = e.prototype.terminate;
                        t.prototype.terminate = function() {
                            Object && F.Pq(fe, this), n.call(this)
                        }, window.Worker = t
                    }
                    reset() {
                        fe.length = 0
                    }
                    clean() {
                        fe.length && window.console.warn("Worker instances are not terminated", fe.slice());
                        for (let e = fe.length - 1; e >= 0; e--) fe[e].terminate()
                    }
                }
                const be = [];

                function ve() {
                    Object && (F.Pq(be, this), Promise.resolve().then((() => {
                        this[Q] && this[Q]()
                    })))
                }
                class ye {
                    init() {
                        const e = XMLHttpRequest.prototype.send;
                        XMLHttpRequest.prototype.send = function(t) {
                            be.push(this), "onloadend" in this ? this.addEventListener("loadend", ve) : (this.addEventListener("load", ve), this.addEventListener("abort", ve), this.addEventListener("error", ve)), e.call(this, t)
                        }
                    }
                    reset() {
                        be.length = 0
                    }
                    clean() {
                        let e = 0;
                        for (; e++ < 5 && be.length;) {
                            const e = be.slice();
                            be.length = 0;
                            for (const t of e) window.console.warn("Sandbox interrupted request", t), t.abort()
                        }
                        if (be.length) return window.console.error("Pending requests", be), Promise.reject("XMLHttpRequest infinite retries")
                    }
                }
                class Ee {
                    static getSingleton() {
                        return this._singleton || (this._singleton = new Ee), this._singleton
                    }
                    constructor() {
                        this.enabled = !0, this.wrappers = [new H, new Z, new ye, new ce, new X, new de, new re, new te, new ge, new we];
                        try {
                            if (window.EVO_LOADER.deviceInfo.isBaiduBrowser) return void(this.enabled = !1);
                            for (const e of this.wrappers)
                                if (e.isSupported && !e.isSupported()) return void(this.enabled = !1);
                            for (const e of this.wrappers) e.init()
                        } catch (e) {
                            const t = "Failed to initialize Sandbox: " + (e instanceof Error ? `${e.message}\n${e.stack}` : "");
                            window.EVO_VERBOSE(t, 1), window.console.error(t), this.enabled = !1
                        }
                    }
                    reset() {
                        return this.enabled ? Promise.all(this.wrappers.map((e => e.reset()))) : Promise.reject(new Error("Sandbox not supported in browser"))
                    }
                    clean() {
                        if (!this.enabled) return Promise.reject(new L.Ij("Sandbox not supported in browser", {
                            sendToSentry: !1
                        }));
                        let e = Promise.resolve();
                        for (let t = 0; t < 2; t++) e = e.then((() => Promise.all(this.wrappers.map((e => e.clean()))))), e = e.then((() => new Promise((e => {
                            U.setTimeout(e)
                        })))), e = e.then((() => window.console.log(`Sandbox cleanup phase ${t+1} done.`)));
                        return e
                    }
                }
                Ee._singleton = void 0;
                class Le {
                    constructor() {
                        this.disposed = !1, this.events = {}
                    }
                    subscribe(e, t) {
                        if (Array.isArray(e)) {
                            const n = e.map((e => this.ensureEvent(e).promise));
                            Promise.all(n).then((e => t(...e)))
                        } else this.ensureEvent(e).promise.then(t)
                    }
                    publish(e, t) {
                        const n = this.ensureEvent(e);
                        if (n.resolved) throw new Error(`publish() called more than once for ${e}`);
                        window.EVO_VERBOSE(`Loader/${e}: done`, 0, e), n.resolved = !0, n.value = t, n.resolver(t)
                    }
                    getValue(e) {
                        const t = this.events[e];
                        return null == t ? void 0 : t.value
                    }
                    getPromise(e) {
                        return this.ensureEvent(e).promise
                    }
                    resetEvent(e) {
                        const t = this.events[e];
                        if (t) {
                            if (!t.resolved) throw new Error("Cannot reset unfinished event.");
                            delete this.events[e]
                        }
                    }
                    dispose() {
                        this.disposed = !0, this.events = {}
                    }
                    ensureEvent(e) {
                        if (this.disposed) throw new Error("PubSub has been disposed");
                        const t = this.events[e];
                        if (t) return t;
                        let n;
                        window.EVO_VERBOSE(`Loader/${e}: waiting`, 0, e);
                        const i = new Promise((e => {
                            n = e
                        }));
                        if (!n) throw new Error("Async promise ctor");
                        return this.events[e] = {
                            promise: i,
                            resolver: n,
                            resolved: !1,
                            value: void 0
                        }
                    }
                }
                class Se extends Le {
                    constructor(e) {
                        super(), this.loader = e, this.uaLaunchId = null, this.lobbyLaunchId = null, this.logs = [], this.consumer = void 0, this.attributionId = F.g4()
                    }
                    get provider() {
                        var e;
                        return (null === (e = this.getValue("config")) || void 0 === e ? void 0 : e.game_provider) || F.Jl() || this._provider
                    }
                    set provider(e) {
                        this._provider = e
                    }
                    dispose(e) {
                        return this.publish("disposing", e), this.consumer = void 0, this.logs.length = 0, Promise.resolve(super.dispose())
                    }
                    storeLog(e) {
                        this.consumer ? this.consumer(e) : this.logs.push(e)
                    }
                    setLogConsumer(e) {
                        this.consumer = e, this.logs.length && (this.logs.forEach((t => e(t))), this.logs.length = 0)
                    }
                }
                const Ie = Symbol("video-lib-timeout");
                class Oe extends Se {
                    constructor(e) {
                        super(e), this.loadProgress = null, this.sandboxInitialization = Ee.getSingleton().reset().catch((e => {
                            L.H(new L.Ij(`Failed to initialize Sandbox: ${e.message}`))
                        })), this.disposePromise = void 0, this.gameLoader = void 0, this.gameLoaderState = void 0, this.setupWorkflow()
                    }
                    dispose(e) {
                        if (this.disposePromise) return this.disposePromise;
                        const t = !this.gameLoader || void 0 === this.getValue("gameLoaded"),
                            n = performance.now();
                        return this.disposePromise = this.disposeInstance(e).then((() => t ? Promise.reject(new L.Ij("Game loader not yet finished", {
                            sendToSentry: !1
                        })) : Promise.race([this.gameLoader.dispose(this.gameLoaderState), F.gw(3e3).then((() => Promise.reject(new Error("Game dispose took >3 sec"))))]))).then((() => Ee.getSingleton().clean())).then((() => {
                            const e = performance.now();
                            window.console.log("Dispose of previous instance took", Math.floor(e - n), "ms")
                        }))
                    }
                    disposeInstance(e) {
                        var t, n;
                        return super.dispose({
                            applicationType: null !== (n = null === (t = this.gameLoader) || void 0 === t ? void 0 : t.applicationType) && void 0 !== n ? n : "unknown",
                            suppressLoadingScreen: (null == e ? void 0 : e.suppressLoadingScreen) || !1
                        })
                    }
                    setupWorkflow() {
                        const e = this.loader;
                        e.shared.subscribe("setup", (e => {
                            this.disposed || (this.subscribe("config", (t => this.setSentryContext(e, t))), this.subscribe(["config", "sandbox"], (t => this.requestGameManifest(t, e))), this.subscribe(["gamePackageManifest", "config"], ((t, n) => {
                                this.requestAudioLibrary(e, t, n)
                            })), this.startSandbox())
                        })), this.subscribe("gamePackageManifest", (t => {
                            this.requestLocalization(t), this.requestScripts(t), this.requestStyleSheet(t), t.ignoreVideo || (this.loader.video.loadLibrary(), Promise.race([F.gw(1e4, Ie), e.video.getPromise("module")]).then((t => {
                                t === Ie && e.sendLog("CLIENT_ERROR", {
                                    error: "videoLibrary/timeout"
                                })
                            })))
                        })), e.shared.subscribe(["setup", "style", "i18n"], ((e, t, n) => {
                            this.disposed || this.subscribe(["config", "gamePackageManifest", "appLocalization", "bundleCss"], ((i, o, s) => {
                                this.runApp(e, t, Object.assign(Object.assign({}, n), s), i, o)
                            }))
                        }))
                    }
                    setSentryContext(e, t) {
                        "undefined" != typeof Sentry && (Sentry.configureScope((n => {
                            n.setTags({
                                gameType: t.game || t.frontend_app,
                                casinoId: e.casino_id
                            })
                        })), Sentry.setUser({
                            id: e.user_id,
                            username: e.player_id
                        }))
                    }
                    startSandbox() {
                        this.sandboxInitialization.then((() => {
                            this.publish("sandbox", !0)
                        })).catch((() => {
                            this.publish("sandbox", !1)
                        }))
                    }
                    requestGameManifest(e, t) {
                        let n = e.frontend_manifest;
                        const i = t.globalSettings;
                        if (!n && i && e.frontend_app) {
                            const t = i.manifests;
                            n = null == t ? void 0 : t[e.frontend_app]
                        }
                        n ? this.requestGameManifestRemote(e, n) : this.requestGameManifestLocal(e)
                    }
                    requestGameManifestRemote(e, t) {
                        const n = this.loader;
                        t.endsWith("/") && (t += "manifest.json"), F.lC(t, "json").then((i => {
                            if (i.defaults) throw new Error(`Remote manifest '${t}' is no longer compatible.`);
                            const o = G(e, n.deviceInfo.deviceType, !1, i);
                            if (!o) throw new Error(`Remote manifest '${t}' does not include definition for the given table.`);
                            this.publish("gamePackageManifest", o)
                        })).catch((e => {
                            this.loader.failed({
                                reason: "manifest",
                                failureDetails: e,
                                failedURL: t
                            })
                        }))
                    }
                    requestGameManifestLocal(e) {
                        let t;
                        try {
                            return t = G(e, this.loader.deviceInfo.deviceType), void this.publish("gamePackageManifest", t)
                        } catch (e) {
                            return void this.loader.failed({
                                reason: "manifest",
                                failureDetails: e
                            })
                        }
                    }
                    requestLocalization(e) {
                        let t = e.localization;
                        "common" !== t ? (t || ("undefined" != typeof Sentry && Sentry.captureMessage(`${e.application} does not define 'localization' in manifest`), t = `../${encodeURIComponent(window.EVO_LOCALE)}`), F.xW(window.EVO_LOCALE, t).then((e => this.publish("appLocalization", e))).catch((e => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: e,
                                failedURL: `loc://${window.EVO_LOCALE}/${t}.json`
                            })
                        }))) : this.publish("appLocalization", null)
                    }
                    requestScripts(e) {
                        const t = this.loader;
                        for (const n of e.assets) {
                            if (!n.endsWith(".js")) continue;
                            const e = window.EVO_CDN + n;
                            t.assets.loadScript(e).catch((n => {
                                t.failed({
                                    reason: "scripts",
                                    failureDetails: n,
                                    failedURL: e
                                })
                            }))
                        }
                    }
                    requestStyleSheet(e) {
                        const t = this.loader,
                            n = e.assets.filter((e => e.endsWith(".css")));
                        for (let e = 0; e < n.length; e++) n[e] = window.EVO_CDN + n[e];
                        t.assets.loadStyles(n, !0).then((() => {
                            this.publish("bundleCss", null)
                        })).catch((e => {
                            t.failed({
                                reason: "stylesheets",
                                failureDetails: e
                            })
                        }))
                    }
                    requestAudioLibrary(e, t, n) {
                        var i;
                        const o = this.loader,
                            s = t.audioLibrary,
                            r = n.audio_package || t.audioPackage,
                            a = !0 === (null === (i = e.globalSettings) || void 0 === i ? void 0 : i.enable_local_sounds);
                        o.audio.loadLibrary(s, a).then((e => {
                            this.publish("audioLibrary", e)
                        })), o.audio.loadAudioLibraryOptions(r, s, a).then((e => {
                            this.publish("audioLibraryOptions", e)
                        }))
                    }
                    runApp(e, t, n, i, o) {
                        const s = this.loader;
                        if (s.isFailed) return;
                        const r = {
                            reportProgress: e => {
                                this.loadProgress = e
                            },
                            gameType: i.game || j.Lobby,
                            instance: this,
                            setup: e,
                            deviceType: s.deviceInfo.deviceType,
                            tableConfig: i,
                            styles: t,
                            tableId: i.table_id || null,
                            virtualTableId: i.vt_id || null,
                            i18nData: n,
                            getRoot: () => document.getElementById("root"),
                            clientApi: s.clientApi
                        };
                        window.EVO_VERBOSE("gameLoader/started", 0, "gameLoader"), Promise.all([s.applications.getPromise(o.loader), this.getPromise("audioLibrary")]).then((([e, t]) => (this.gameLoader = e, e.initialize(Object.assign(Object.assign({}, r), {
                            audioLibrary: t,
                            audioLibraryOptionsPromise: this.getPromise("audioLibraryOptions")
                        }))))).then((e => {
                            this.gameLoaderState = e
                        })).then((() => {
                            var e, t;
                            window.EVO_VERBOSE("gameLoader/finish", 0, "gameLoader"), window.setTimeout((() => {
                                F.$7(), F.ql()
                            }), 501), this.publish("gameLoaded", {
                                applicationType: null !== (t = null === (e = this.gameLoader) || void 0 === e ? void 0 : e.applicationType) && void 0 !== t ? t : "unknown"
                            }), performance.mark("evoLoaderClosed")
                        })).catch((e => {
                            const t = e instanceof Error ? e : new Error(`gameLoader failed: ${(null==e?void 0:e.message)||e}`, {
                                cause: e
                            });
                            s.failed({
                                reason: "gameLoader",
                                failureDetails: t
                            })
                        }))
                    }
                    loadNativeBundle(e, t) {
                        const n = this.loader;
                        Promise.all([F.lC("../bundles.json", "json"), r.e(575).then(r.bind(r, 794346))]).then((([n, {
                            getTargetBundle: i
                        }]) => i({
                            gameTypeOrLoader: (null == t ? void 0 : t.loader) || e.game || "lobby",
                            frontendApp: e.frontend_app
                        }, n, !1))).then((e => {
                            t && ("*" === e || "6.20240115.63824.37369-40dbe8a65e".endsWith(`-${e}-native`)) ? this.publish("gamePackageManifest", t) : (window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Loading native build - redirected from another place"
                            }), window.location.href = `../${e}/index.html${window.location.search}${window.location.hash}`)
                        })).catch((e => {
                            n.failed({
                                reason: "manifest",
                                failureDetails: e
                            })
                        }))
                    }
                }
                class _e extends Oe {
                    constructor(e, t) {
                        let n;
                        super(e), this.kind = "app";
                        const i = t ? t.indexOf("@") : -1;
                        i > -1 && (n = F.J5(t.substr(i + 1)), t = t.substr(0, i)), t || (t = _e.defaultApp);
                        const o = {
                            game: "",
                            frontend_app: t,
                            frontend_manifest: n
                        };
                        t === x ? this.requestConfigData(t, o) : this.publish("config", o)
                    }
                    requestConfigData(e, t) {
                        const n = this.loader,
                            i = O("/config", {
                                app: e
                            });
                        F.lC(i, "json").then((e => {
                            Object.assign(e, t), this.publish("config", e)
                        })).catch((e => {
                            e instanceof B.G && 403 === e.status ? n.failedAuth() : (B.x(i, e), n.failed({
                                reason: "config",
                                failureDetails: e,
                                failedURL: i
                            }))
                        }))
                    }
                }
                _e.defaultApp = "lobby";
                class Ce extends Se {
                    constructor() {
                        super(...arguments), this.kind = "empty"
                    }
                    dispose() {
                        return super.dispose()
                    }
                }
                class Pe extends Oe {
                    constructor(e, t, n, i, o, s, r) {
                        super(e), this.tableId = t, this.virtualTableId = n, this.app = i, this.balanceId = o, this.uaLaunchId = s, this.lobbyLaunchId = r, this.kind = "game", this.redirected = !1, this.disposePromise2 = null, this.requestConfigData()
                    }
                    dispose(e) {
                        var t;
                        return this.redirected ? null !== (t = this.disposePromise2) && void 0 !== t ? t : this.disposePromise2 = super.disposeInstance(e) : super.dispose(e)
                    }
                    requestConfigData() {
                        const e = this.loader,
                            t = O("/config", {
                                table_id: this.tableId,
                                vt_id: this.virtualTableId,
                                origin: window.location.origin
                            });
                        F.lC(t, "json").then((e => {
                            if (!this.checkPlatformSupport(e)) return;
                            const t = this.app;
                            if (t) {
                                window.console.warn("Overriding game type and manifest with", t);
                                let n = t.indexOf("@");
                                n < 0 ? n = t.length : e.frontend_manifest = F.J5(t.substr(n + 1)), n > 0 && (e.frontend_app = t.substr(0, n), delete e.loader_expected_resource_count, delete e.loader_resources_counting_mode)
                            }
                            this.gameType = e.game_type, this.publish("config", e)
                        })).catch((n => {
                            n instanceof B.G && 403 === n.status ? e.failedAuth() : (B.x(t, n), e.failed({
                                reason: "config",
                                failureDetails: n,
                                failedURL: t
                            }))
                        }))
                    }
                    checkPlatformSupport(e) {
                        const t = this.loader.deviceInfo.isDesktop ? e.desktop_table_id : e.mobile_table_id;
                        if (t) {
                            window.console.log("Because of platform, using a different table", t);
                            const [e, n] = t.split(";"), i = p.h(window.location.href);
                            return delete i.searchParams.table_id, delete i.searchParams.vt_id, i.hashParams.table_id = e, i.hashParams.vt_id = n, this.redirected = !0, this.loader.init(i.toString()), this.loader.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Platform not supported, redirecting to a different table"
                            }), !1
                        }
                        return !0
                    }
                }
                var Te, Ae;
                (function(e) {
                    e.SoundsVolume = "EvoInterfaceSoundsVolume", e.SoundsMuted = "EvoInterfaceSoundsMute", e.VideoVolume = "EvoInterfaceVideoVolume", e.VideoMuted = "EvoInterfaceVideoMuted", e.LastAppUri = "EvoLastAppUri"
                })(Te || (Te = {})),
                function(e) {
                    e.Evo = "", e.Neon = "Neon", e.DS = "DS"
                }(Ae || (Ae = {}));
                const {
                    getStorageKey: ke,
                    setStorageKey: Re
                } = (De = Ae.Evo, {
                    getStorageKey(e) {
                        try {
                            const t = localStorage.getItem(De + e);
                            return t ? JSON.parse(t) : void 0
                        } catch (e) {
                            return
                        }
                    },
                    setStorageKey(e, t) {
                        try {
                            return void 0 === t ? localStorage.removeItem(De + e) : localStorage.setItem(De + e, JSON.stringify(t)), !0
                        } catch (e) {
                            return !1
                        }
                    }
                });
                var De;
                const Ve = "ShowEvoLogo";
                var Me;
                (function(e) {
                    e.Sidebar = "sidebar", e.Fill = "fill", e.TopBar = "topbar"
                })(Me || (Me = {}));
                class xe extends Se {
                    get location() {
                        const e = this.frame.contentWindow;
                        let t = e ? e.location.href : null;
                        if (t && !t.startsWith("about:") || (t = this.frame.src), t.includes(C)) {
                            const e = p.h(t);
                            delete e.searchParams[C], t = e.toString()
                        }
                        return t
                    }
                    constructor(e, t, n, i, o = Me.Fill) {
                        super(t), this.parent = e, this.kind = "frame", this.layout = Me.Fill, this.frameUrlChanged = () => {
                            this.parent.updateUri(!0)
                        }, this.frameUnloadListener = () => {
                            setTimeout(this.frameLoadListener, 0)
                        }, this.frameLoadListener = () => {
                            this.frameUrlChanged();
                            const e = this.frame.contentWindow;
                            e && (e.addEventListener("unload", this.frameUnloadListener, !0, "evo-loader"), e.addEventListener("hashchange", this.frameUrlChanged, !0, "evo-loader"), e.addEventListener("pushstate", this.frameUrlChanged, !0, "evo-loader"), e.addEventListener("replacestate", this.frameUrlChanged, !0, "evo-loader"))
                        };
                        const s = document.createElement("iframe");
                        this.frame = s, this.layout = o, s.src = P(n), s.addEventListener("load", this.frameLoadListener), i.appendChild(s)
                    }
                    dispose() {
                        const e = this.frame;
                        return e.removeEventListener("load", this.frameLoadListener), e.parentNode && e.parentNode.removeChild(e), super.dispose()
                    }
                    navigate(e) {
                        e = P(e);
                        try {
                            const {
                                contentWindow: t
                            } = this.frame;
                            if (null == t ? void 0 : t.EVO_LOADER) return void(t.location.href !== e && t.location.replace(e))
                        } catch (e) {}
                        this.frame.src = e
                    }
                    resize(e, t) {
                        this.frame.style.width = `${Math.floor(e)}px`, this.frame.style.height = `${Math.floor(t)}px`
                    }
                }
                const Ne = m("multiwindow {74d74998-b630-473a-b390-58f11d036a96}"),
                    je = "mwLayout";
                class $e extends Se {
                    constructor(e, t, n = !1) {
                        super(e), this.kind = "multi", this.frames = [], this.window = window, this.wasMoveDone = !1, this.scrolling = !1, this.touchEndResetTimer = null, this.handleScrollAction = () => {
                            document.body.classList.contains("compact") && this.wasMoveDone && (this.scrolling = !0, this.removeResetTimeout(), this.touchEndResetTimer = window.setTimeout((() => {
                                this.scrolling = !1, this.wasMoveDone = !1, document.body.classList.contains("compact") && window.scrollTo(0, 0)
                            }), 200))
                        }, this.handleContinuousScroll = e => {
                            this.wasMoveDone = !0, this.scrolling && e.preventDefault()
                        }, this.layoutFramesAndScroll = () => {
                            const e = () => this.loader.deviceInfo.isIos15PhoneSafari ? window.innerHeight + window.scrollY : window.innerHeight;
                            let t = e(),
                                n = window.innerWidth;
                            this.layoutFrames(t, n), setTimeout((() => {
                                const i = e(),
                                    o = window.innerWidth;
                                i === t && o === n || (t = i, n = o, this.layoutFrames(i, o))
                            }), 1e3), this.loader.deviceInfo.isIos15PhoneSafari && window.matchMedia("(orientation: landscape)").matches || window.scrollTo(0, 0)
                        }, this.layoutFrames = (e, t) => {
                            const {
                                isPhone: n
                            } = this.loader.deviceInfo, i = this.countFrames();
                            let o = 0,
                                s = 0;
                            const r = i[Me.TopBar] > 0 ? 30 : 0;
                            i[Me.Sidebar] > 0 && (o = n ? Math.floor(t / i[Me.Sidebar]) : 400 * i[Me.Sidebar], s = !n || t > e ? e : Math.floor(.85 * e), s -= r);
                            const a = n ? t : t - o,
                                d = e - r;
                            this.sidebarContainer.style.width = `${o}px`, this.sidebarContainer.style.height = `${s}px`, this.loader.deviceInfo.isDesktop && (this.gamesContainer.style.width = `calc(100% - ${o}px)`), r && this.container.classList.add("withTopBar"), this.topBarContainer.style.height = `${r}px`;
                            const l = this.calculateOptimumSize(a, d, i[Me.Fill]);
                            for (const e of this.frames) switch (e.layout) {
                                case Me.Fill:
                                    (this.loader.deviceInfo.isDesktop || this.loader.deviceInfo.isIosChromeBrowser) && e.resize(l.width, l.height);
                                    break;
                                case Me.Sidebar:
                                    i[Me.Sidebar] > 1 && e.resize(Math.floor(o / i[Me.Sidebar]), s);
                                    break;
                                case Me.TopBar:
                                    e.resize(l.width, 30)
                            }
                        };
                        const i = document.getElementById("inGameLobby");
                        (null == i ? void 0 : i.parentNode) && i.parentNode.removeChild(i);
                        const o = document.createElement("div");
                        this.container = o, o.className = "loader-frame-container", document.body.appendChild(o);
                        const s = document.createElement("div");
                        this.topBarContainer = s, s.className = "topbar-container", o.appendChild(s);
                        const r = document.createElement("div");
                        this.gamesContainer = r, r.className = "games-container", o.appendChild(r);
                        const a = document.createElement("div");
                        this.sidebarContainer = a, a.className = "sidebar-container", o.appendChild(a);
                        for (const e of R(t)) this.addFrame(e, !1);
                        n || this.frames.length || this.addFrame(I(), !1), this.layoutFramesAndScroll(), this.loader.deviceInfo.isPhone && this.loader.deviceInfo.isIosDevice && (setTimeout((() => {
                            this.layoutFramesAndScroll()
                        }), 400), window.addEventListener("scroll", this.handleScrollAction), document.body.addEventListener("touchmove", this.handleContinuousScroll), document.body.addEventListener("touchstart", this.handleContinuousScroll)), window.addEventListener("resize", this.layoutFramesAndScroll), this.loader.deviceInfo.isIosChromeBrowser && window.visualViewport.addEventListener("resize", this.layoutFramesAndScroll), this.publish("gameLoaded", void 0), setTimeout(F.$7, 1e3)
                    }
                    removeResetTimeout() {
                        this.touchEndResetTimer && (window.clearTimeout(this.touchEndResetTimer), this.touchEndResetTimer = null)
                    }
                    dispose() {
                        return window.removeEventListener("resize", this.layoutFramesAndScroll), document.body.removeChild(this.container), window.removeEventListener("scroll", this.handleScrollAction), document.body.removeEventListener("touchmove", this.handleContinuousScroll), document.body.removeEventListener("touchstart", this.handleContinuousScroll), this.loader.deviceInfo.isIosChromeBrowser && window.visualViewport.removeEventListener("resize", this.layoutFramesAndScroll), this.removeResetTimeout(), Promise.all(this.frames.map((e => e.dispose()))).then((() => super.dispose()))
                    }
                    update(e, t = !1) {
                        if (!Array.isArray(e)) {
                            const t = e.getParam("mwg");
                            e = t ? R(t) : [e.toString()]
                        }
                        const n = this.frames;
                        for (let t = 0; t < Math.min(n.length, e.length); t++) {
                            const i = e[t];
                            n[t].layout === this.getFrameLayout(i) ? n[t].navigate(i) : (this.removeFrame(n[t].frame, {
                                update: !1
                            }), this.addFrame(i, !1))
                        }
                        for (; n.length < e.length;) this.addFrame(e[n.length], !1);
                        for (; n.length > e.length;) this.removeFrame(n[n.length - 1].frame, {
                            update: !1
                        });
                        return this.finalizeUpdate(t), Promise.resolve()
                    }
                    updateUri(e = !1) {
                        if (this.loader.instance === this) {
                            const t = this.frames.map((e => e.location)),
                                n = 1 === t.length ? t[0] : window.location.origin + I({
                                    mwg: k(t)
                                }, !1);
                            if (window.location.href !== n) try {
                                window.history[e ? "replaceState" : "pushState"](null, "", n), Re("EvoLastAppUri", n)
                            } catch (e) {}
                        }
                    }
                    getFrameLayout(e) {
                        return p.h(e).getParam(je) || Me.Fill
                    }
                    addFrame(e, t = !0) {
                        const n = this.getFrameLayout(e);
                        let i = this.gamesContainer;
                        switch (n) {
                            case Me.Sidebar:
                                i = this.sidebarContainer;
                                break;
                            case Me.TopBar:
                                i = this.topBarContainer
                        }
                        this.frames.push(new xe(this, this.loader, e, i, n)), t && this.finalizeUpdate()
                    }
                    removeFrame(e, t = {
                        update: !0,
                        animateOnMobile: !1
                    }) {
                        const n = t.animateOnMobile && !this.loader.deviceInfo.isDesktop,
                            i = this.frames.findIndex((t => t.frame === e));
                        if (i > -1) {
                            const o = this.frames[i];
                            this.frames.splice(i, 1), n && e.classList.add("disposing"), setTimeout((() => {
                                o.dispose().catch((() => {})), t.update && this.finalizeUpdate()
                            }), n ? 500 : 0)
                        }
                    }
                    isLastFillFrame(e) {
                        for (const t of this.frames)
                            if (t.frame !== e && t.layout === Me.Fill) return !1;
                        return !0
                    }
                    finalizeUpdate(e = !1) {
                        this.frames.length || this.addFrame(I(), !1), this.layoutFramesAndScroll(), this.updateUri(e), this.loader.broadcast.sendValues(Ne, {})
                    }
                    countFrames() {
                        let e = 0,
                            t = 0,
                            n = 0;
                        for (const {
                                layout: i
                            } of this.frames) switch (i) {
                            case Me.Fill:
                                e++;
                                break;
                            case Me.Sidebar:
                                t++;
                                break;
                            case Me.TopBar:
                                n++
                        }
                        return {
                            [Me.Fill]: e,
                            [Me.Sidebar]: t,
                            [Me.TopBar]: n
                        }
                    }
                    setSidebarFullscreen(e) {
                        const t = window.innerHeight,
                            n = window.innerWidth,
                            {
                                isPhone: i
                            } = this.loader.deviceInfo,
                            o = !i || n > t || e ? t : Math.floor(.85 * t),
                            s = this.countFrames()[Me.TopBar] > 0 ? 30 : 0;
                        this.sidebarContainer.style.height = o - s + "px"
                    }
                    calculateOptimumSize(e, t, n) {
                        if (n < 2) return {
                            width: e,
                            height: t
                        };
                        let i = 0,
                            o = 0;
                        for (let s = 1; s <= n; s++) {
                            const r = Math.ceil(n / s),
                                a = Math.min(t / r, e / s * 9 / 16);
                            a > o && (o = a, i = 16 * a / 9)
                        }
                        return {
                            width: i,
                            height: o
                        }
                    }
                }
                class Be extends Se {
                    constructor(e, t, n, i, o, s) {
                        super(e), this.tableId = t, this.virtualTableId = n, this.multiwindow = i, this.balanceId = o, this.app = s, this.kind = "switch"
                    }
                    dispose() {
                        return super.dispose().then((() => Promise.reject("Another switch is in progress")))
                    }
                }
                class Fe {
                    constructor() {
                        this.scripts = {}, this.styles = {}, this.enabledStyles = [], this.timeout = window.EVO_CDN ? 15e3 : 6e4
                    }
                    loadStyles(e, t = !1) {
                        Array.isArray(e) || (e = [e]);
                        const n = e.map((e => (this.styles[e] || (this.styles[e] = this.createLinkElement(e))).then((e => this.setLinkEnabled(e, !0)))));
                        return Promise.all(n).then((e => {
                            if (t) {
                                for (const t of this.enabledStyles) e.includes(t) || this.setLinkEnabled(t, !1);
                                this.enabledStyles = e
                            } else this.enabledStyles.push(...e)
                        }))
                    }
                    loadScript(e, t = !1, n) {
                        const i = this.scripts[e];
                        if (i && !n) return i;
                        const o = document.createElement("script");
                        o.charset = "utf-8", o.async = t;
                        const s = this.waitForLoaded(o, e);
                        return this.scripts[e] = s, o.src = e, document.head.appendChild(o), document.head.removeChild(o), s
                    }
                    waitForLoaded(e, t) {
                        return new Promise(((n, i) => {
                            let o = 0;
                            const s = n => {
                                n.filename === e.src && (r(!0), i(`Failed: ${t}`))
                            };
                            window.addEventListener("error", s);
                            const r = t => {
                                clearTimeout(o), window.removeEventListener("error", s), t && e.parentNode && e.parentNode.removeChild(e)
                            };
                            o = setTimeout((() => {
                                window.EVO_VERBOSE(`timeout for ${t}`, 2), r(!0), i(`timeout: ${t}`)
                            }), this.timeout), e.addEventListener("error", (e => {
                                B.x(t, e.error), r(!0), i(`Failed: ${t}`)
                            })), e.addEventListener("load", (() => {
                                r(!1), n(e)
                            }))
                        }))
                    }
                    setLinkEnabled(e, t) {
                        const n = Promise.resolve(e);
                        return e.disabled === !t ? n : (e.disabled = !t, t ? new Promise(((t, n) => {
                            let i = 0,
                                o = 0;
                            const s = document.styleSheets;
                            o = window.setInterval((function() {
                                if (i++ > 200) return clearInterval(o), n("setLinkEnabled");
                                for (let n = 0, i = s.length; n < i; n++)
                                    if (s[n].ownerNode === e) return clearInterval(o), t(e)
                            }), 16)
                        })) : n)
                    }
                    createLinkElement(e) {
                        const t = document.createElement("link");
                        t.rel = "stylesheet", t.href = e, t.setAttribute("data-sandbox", "ignore");
                        const n = this.waitForLoaded(t, e);
                        return document.head.appendChild(t), n
                    }
                }
                const Ge = Symbol("audio-lib-timeout");
                class Ue {
                    constructor() {
                        this.cache = {}
                    }
                    loadLibrary(e, t) {
                        var n;
                        const i = this.getLibraryType(e, t);
                        if (void 0 === this.cache[i]) {
                            let e;
                            e = "ecas" === i ? r.e(5585).then(r.bind(r, 492871)) : "legacy" === i ? r.e(1748).then(r.t.bind(r, 157088, 23)) : Promise.resolve(void 0), this.cache[i] = Promise.race([e, F.gw(1e4, Ge)]).then((e => {
                                if (e === Ge) throw new L.sO("Loading failed to load due to 10s timeout");
                                return e
                            })).catch((e => {
                                this.handleLoadingError(new L.sO(`"${i}" audio library failed to load: ${e}`))
                            }))
                        }
                        return null !== (n = this.cache[i]) && void 0 !== n ? n : Promise.resolve(void 0)
                    }
                    loadAudioLibraryOptions(e, t, n) {
                        if ("ecas" !== this.getLibraryType(t, n)) return Promise.resolve(void 0);
                        if (void 0 === e) return this.handleLoadingError(new L.sO("Audio package for the game was not specified.")), Promise.resolve(void 0);
                        const i = `/frontend/gametech/sounds/${e}/ecasOptions.json`,
                            o = this.getLocalSoundsUrl(n) || window.EVO_CDN || window.EVO_ORIGIN || "";
                        return F.lC(`${o}${i}`, "json").then((e => (e.soundConfig.settings.loadPath = `${o}${e.soundConfig.settings.loadPath}`, e))).catch((e => {
                            this.handleLoadingError(new L.sO(`"Failed to load ECAS sound configuration: ${e}`))
                        }))
                    }
                    handleLoadingError(e) {
                        let t, n;
                        t = "warn", n = 1, window.console.warn(e), window.EVO_VERBOSE(e.stack || e.message, 1)
                    }
                    getLocalSoundsUrl(e) {
                        if (e) {
                            const e = this.getLocalSoundsParam();
                            return e && /^\d{4,5}$/.test(e) ? `http://127.0.0.1:${e}` : void 0
                        }
                    }
                    getLocalSoundsParam() {
                        return p.h(window.location.href).getParam("localSounds")
                    }
                    getLibraryType(e, t) {
                        let n = e;
                        return t && this.getLocalSoundsParam() && (n = "ecas"), null != n ? n : "legacy"
                    }
                }
                var We, ze, qe;
                (function(e) {
                    e.Phone = "Phone", e.Tablet = "Tablet", e.Desktop = "Desktop"
                })(We || (We = {})),
                function(e) {
                    e.IpadNonRetina = "ipad-non-retina", e.IpadRetina = "ipad-retina", e.IpadPro = "ipad-pro", e.IpadPro11inch = "ipad-pro-11inch"
                }(ze || (ze = {})),
                function(e) {
                    e.Iphone5 = "iphone5", e.Iphone6 = "iphone6", e.IphonePlusZoomed = "iphone-plus-zoomed", e.IphonePlus = "iphone-plus", e.Iphone10 = "iphone10", e.Iphone10Zoomed = "iphone10Zoomed", e.Iphone10sMax = "iphone10sMax", e.Iphone10R = "iphone10R", e.Iphone10RZoomed = "iphone10RZoomed", e.Iphone12 = "iphone12", e.Iphone12ProMax = "iphone12ProMax", e.Iphone14Pro = "iphone14Pro", e.Iphone14ProMax = "iphone14ProMax"
                }(qe || (qe = {}));
                const He = [{
                        min: 320,
                        max: 568,
                        ratio: 2,
                        type: qe.Iphone5
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 2,
                        type: qe.Iphone6
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 3,
                        type: qe.IphonePlusZoomed
                    }, {
                        min: 414,
                        max: 736,
                        ratio: 3,
                        type: qe.IphonePlus
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 3,
                        type: qe.Iphone10
                    }, {
                        min: 320,
                        max: 693,
                        ratio: 3,
                        type: qe.Iphone10Zoomed
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 3,
                        type: qe.Iphone10sMax
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 2,
                        type: qe.Iphone10R
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 2,
                        type: qe.Iphone10RZoomed
                    }, {
                        min: 390,
                        max: 844,
                        ratio: 3,
                        type: qe.Iphone12
                    }, {
                        min: 428,
                        max: 926,
                        ratio: 3,
                        type: qe.Iphone12ProMax
                    }, {
                        min: 393,
                        max: 852,
                        ratio: 3,
                        type: qe.Iphone14Pro
                    }, {
                        min: 430,
                        max: 932,
                        ratio: 3,
                        type: qe.Iphone14ProMax
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 1,
                        type: ze.IpadNonRetina
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 2,
                        type: ze.IpadRetina
                    }, {
                        min: 834,
                        max: 1194,
                        ratio: 2,
                        type: ze.IpadPro11inch
                    }, {
                        min: 1024,
                        max: 1366,
                        ratio: 2,
                        type: ze.IpadPro
                    }],
                    Ke = "desktop",
                    Je = "tablet",
                    Qe = "phone";
                class Xe {
                    get connectionType() {
                        var e;
                        return null === (e = window.navigator.connection) || void 0 === e ? void 0 : e.effectiveType
                    }
                    constructor(e = window.navigator.userAgent) {
                        this.userAgent = e, this.isIosDevice = !!this.userAgent.match(/(iPhone|iPad)/i), this.isMacOSDevice = !!this.userAgent.match(/(Intel Mac OS X)/i), this.isQQBrowser = this.userAgent.includes("MQQBrowser"), this.isBaiduBrowser = this.userAgent.includes("baiduboxapp"), this.isIos15PhoneSafari = !!this.userAgent.match(/^Mozilla\/5\.0 \(iPhone; CPU iPhone OS 15_\S+ like Mac OS X\) AppleWebKit\/605\.1\.15 \(KHTML, like Gecko\) Version\/15\.\d Mobile\/15E148 Safari\/604\.1/), this.isIosChromeBrowser = this.isIosDevice && this.userAgent.includes("CriOS"), this.appleScreenType = (() => {
                            var e, t;
                            if (!this.isIosDevice && !this.isMacOSDevice) return null;
                            const n = (null === (e = window.screen) || void 0 === e ? void 0 : e.width) ? window.screen.width : window.innerWidth,
                                i = (null === (t = window.screen) || void 0 === t ? void 0 : t.height) ? window.screen.height : window.innerHeight,
                                o = window.devicePixelRatio || 1,
                                s = Math.min(n, i),
                                r = Math.max(n, i);
                            for (const e of He)
                                if (e.min === s && e.max === r && e.ratio === o) return e.type;
                            return null
                        })(), this.isIPadOS = (() => {
                            const e = void 0 !== window.orientation,
                                t = navigator.maxTouchPoints > 1;
                            return this.isMacOSDevice && e && t
                        })(), this.deviceType = (() => {
                            if (this.isIPadOS) return Je;
                            if (/\b(WOW64|Win64|x64|x86_64|Windows NT|Intel Mac OS X|CrOS aarch64|X11.*Linux)\b/i.test(this.userAgent)) return Ke;
                            if (this.userAgent.includes("iPhone")) return Qe;
                            let e = window;
                            try {
                                for (; e !== e.parent;) e.parent.matchMedia, e = e.parent
                            } catch (e) {}
                            return e.matchMedia("(min-width: 1024px) and (min-height: 600px) and (orientation: landscape), (min-width: 768px) and (orientation: portrait)").matches || this.isIPadOS ? Je : Qe
                        })(), this.isTablet = this.deviceType === Je, this.isPhone = this.deviceType === Qe, this.isDesktop = this.deviceType === Ke, this.isEventPassiveSupported = !1, this.isWrapper = (() => !!/(wv\)|Chrome\/\d+\.0\.0\.0)/.test(this.userAgent) || !(!this.isIosDevice || /(Chrome|CriOS|Safari|Edge)\/[0-9._]*/.test(this.userAgent)))(), this.checkEventPassiveSupport = (() => {
                            try {
                                let e = !1;
                                const t = {
                                        get capture() {
                                            return !0
                                        },
                                        get once() {
                                            return !0
                                        },
                                        get passive() {
                                            return e = !0, !0
                                        }
                                    },
                                    n = () => null;
                                window.addEventListener("test", n, t), window.removeEventListener("test", n, t), this.isEventPassiveSupported = e
                            } catch (e) {
                                this.isEventPassiveSupported = !1
                            }
                        })()
                    }
                }
                class Ye {
                    constructor(e) {
                        this.loader = e, this.lobbyLastGameType = void 0, this.lobbyLoadedGames = {}, this.lobbyLoadedGameCount = 0
                    }
                    preconnect(e, t) {
                        const n = document.createElement("link");
                        n.rel = t ? "dns-prefetch" : "preconnect", n.href = e, document.head.appendChild(n)
                    }
                    preload(e, t = !0, n = !1) {
                        var i;
                        const o = this.loader,
                            s = G(e, null === (i = window.EVO_LOADER) || void 0 === i ? void 0 : i.deviceInfo.deviceType, !1);
                        if (!s) return Promise.reject(new L.Ij("Manifest not found", {
                            sendToSentry: !1
                        }));
                        if (void 0 !== o.applications.getValue(s.loader)) return Promise.reject(new L.Ij("Already loaded", {
                            sendToSentry: !1
                        }));
                        const r = s.assets.map((e => {
                            const i = e.endsWith(".js"),
                                o = i ? !t : !n;
                            return this.preloadFromManifest(e, i ? "script" : "style", o)
                        }));
                        return Promise.all(r)
                    }
                    lobbyGameVisible(e, t) {
                        const {
                            game: n,
                            frontend_app: i
                        } = e, o = i || n || "";
                        if (this.lobbyLastGameType === o) return Promise.reject(new Error("Fast-path optimization to avoid hashmap lookups"));
                        if (this.lobbyLastGameType = o, this.lobbyLoadedGames[o]) return Promise.reject(new Error("Attempt to load game has been made"));
                        this.lobbyLoadedGames[o] = !0, this.lobbyLoadedGameCount++;
                        const s = this.loader.shared.getValue("style"),
                            r = null == s ? void 0 : s.data.fastTableSwitching,
                            a = "false" === (null == r ? void 0 : r.enabled),
                            d = ["baccarat", "roulette", "blackjack", "classicfreebet", "scalableblackjack", "freebet", "powerscalableblackjack", "lightningscalablebj"].includes(n),
                            l = !a && !t && (d || !1) && this.lobbyLoadedGameCount <= 5;
                        return this.preload(e, l, !1)
                    }
                    preloadFromManifest(e, t, n) {
                        const i = this.loader;
                        if (e) {
                            const o = window.EVO_CDN + e;
                            return n ? F.wg(o, t) : "script" === t ? i.assets.loadScript(o) : i.assets.loadStyles(o)
                        }
                        return Promise.reject(new Error("assetPath is empty"))
                    }
                }
                class Ze extends Le {
                    constructor(e) {
                        super(), this.loader = e, this.isStarted = !1
                    }
                    start() {
                        this.isStarted || (this.isStarted = !0, this.requestSetupData(), this.requestStyleData(), window.EVO_LOCALE ? this.requestLocalization(window.EVO_LOCALE) : this.subscribe("setup", (e => {
                            window.EVO_LOCALE = e.locale, this.requestLocalization(e.locale)
                        })))
                    }
                    requestLocalization(e) {
                        F.xW(e, "common").then((e => this.publish("i18n", e))).catch((t => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: t,
                                failedURL: `loc://${e}/common.json`
                            })
                        }))
                    }
                    getFingerprint() {
                        const e = "X-Fingerprint";
                        let t = null;
                        try {
                            t = window.localStorage.getItem(e)
                        } catch (e) {}
                        if (!t) {
                            t = F.g4();
                            try {
                                window.localStorage.setItem(e, t)
                            } catch (e) {}
                        }
                        return t
                    }
                    requestSetupData() {
                        const e = this.loader,
                            t = e.deviceInfo,
                            n = {
                                device: t.deviceType,
                                "apple-screen": t.appleScreenType,
                                wrapped: t.isWrapper.toString()
                            },
                            i = {
                                keepalive: !1,
                                headers: {
                                    "X-Fingerprint": this.getFingerprint()
                                }
                            },
                            o = O("/setup", n);
                        F.lC(o, "json", i).then((e => {
                            if (e.locale = window.EVO_LOCALE || e.locale, "string" == typeof e.globalSettings) try {
                                e.globalSettings = JSON.parse(e.globalSettings)
                            } catch (t) {
                                window.console.error("Invalid globalSettings.", "\n", t), e.globalSettings = void 0
                            }
                            this.publish("setup", e)
                        })).catch((t => {
                            t instanceof B.G && 403 === t.status ? e.failedAuth() : (B.x(o, t), e.failed({
                                reason: "setup",
                                failureDetails: t,
                                failedURL: o
                            }))
                        }))
                    }
                    requestStyleData() {
                        const e = this.loader,
                            t = O("/style");
                        F.lC(t, "json").then((e => {
                            const t = {
                                data: e || {}
                            };
                            this.publish("style", t)
                        })).catch((n => {
                            n instanceof B.G && 403 === n.status ? e.failedAuth() : (B.x(t, n), e.failed({
                                reason: "style",
                                failureDetails: n,
                                failedURL: t
                            }))
                        }))
                    }
                }
                class et extends Fe {
                    constructor() {
                        super(...arguments), this.moduleLoaders = new Le, this.define = (e, t, n) => {
                            if (null == t ? void 0 : t.length) throw new Error(`Expected no dependencies, got request for ${t}`);
                            this.moduleLoaders.publish(e, n())
                        }
                    }
                    loadModule(e, t, n) {
                        return new Promise(((i, o) => {
                            this.moduleLoaders.resetEvent(e), this.initModuleLoader(n), this.loadScript(t, !0, !0).catch(o), this.moduleLoaders.getPromise(e).then(i, o)
                        }))
                    }
                    initModuleLoader(e) {
                        const t = window[e];
                        void 0 !== t && t !== this.define && window.console.error(`window["${e}"] is already used, overwriting...`), window[e] = this.define
                    }
                }
                var tt;
                (function(e) {
                    e.Mobile = "mobile", e.Iphone = "iphone", e.Desktop = "desktop", e.Wasm = "wasm"
                })(tt || (tt = {}));
                const nt = "defineEvoVideo",
                    it = `${window.EVO_CDN}/frontend/cvi/evo-video-components`;
                class ot extends Le {
                    constructor(e, t = 13) {
                        super(), this.apiVersion = t, this.modules = new et, this.isLoading = !1, this.handleLoadingError = e => {
                            window.console.error(e), e instanceof Error ? window.EVO_VERBOSE(e.stack || e.message, 2) : window.EVO_VERBOSE(e.message, 2), window.EVO_CDN && this.loader.failed({
                                reason: "video",
                                failureDetails: e
                            })
                        }, this.loader = e
                    }
                    loadLibrary(e = !1) {
                        this.isLoading || (this.isLoading = !0, this.loadIndependent(e))
                    }
                    ensureEvent(e) {
                        return this.loadLibrary(), super.ensureEvent(e)
                    }
                    loadIndependent(e) {
                        let t;
                        t = this.loader.deviceInfo.isDesktop || this.loader.deviceInfo.isIPadOS ? tt.Desktop : this.loader.deviceInfo.isPhone && e && window.AudioWorklet ? tt.Wasm : this.loader.deviceInfo.isIosDevice ? tt.Iphone : tt.Mobile;
                        const n = (Date.now() / 36e5).toFixed(0),
                            i = this.getLastKnownVideoVersion();
                        Promise.all([this.loadVersion(n), this.loadVideoComponent(t, i)]).then((([e, n]) => {
                            let {
                                version: o
                            } = e;
                            const {
                                version: s
                            } = n;
                            if (s !== o) return o === i && (o += ".x"), this.setLastKnownVideoVersion(o), this.loadVideoComponent(t, o).then((e => {
                                this.publishModule(e)
                            })).catch((() => {
                                this.publishModule(n)
                            }));
                            this.publishModule(n)
                        })).catch(this.handleLoadingError)
                    }
                    getLastKnownVideoVersion() {
                        try {
                            return localStorage.getItem("EvoVideoLastKnownVersion") || void 0
                        } catch (e) {}
                    }
                    setLastKnownVideoVersion(e) {
                        try {
                            localStorage.setItem("EvoVideoLastKnownVersion", e)
                        } catch (e) {}
                    }
                    loadFromVendor() {
                        r.e(9830).then(r.t.bind(r, 663813, 23)).then((e => this.publishModule(e)))
                    }
                    publishModule(e) {
                        this.publish("module", {
                            component: e
                        })
                    }
                    loadVersion(e) {
                        return this.modules.loadModule("__version", `${it}/video_version_v${this.apiVersion}.js?${e}`, nt)
                    }
                    loadVideoComponent(e, t = "") {
                        return this.modules.loadModule("videojs", `${it}/video_${e}_v${this.apiVersion}.js?${encodeURIComponent(t)}`, nt)
                    }
                }
                class st {
                    constructor() {
                        this.isFailed = !1, this.wasThrottled = !1, this.sentLogCount = 0, this.assets = new Fe, this.deviceInfo = new Xe, this.applications = new Le, this.shared = new Ze(this), this.video = new ot(this), this.audio = new Ue, this.prefetcher = new Ye(this), this.broadcast = new v, this.instance = new Ce(this), this.cdnHost = window.EVO_CDN, this.onInstanceSwitch = [], this.onFailure = [], this.spaSwitches = 0, this.failureCount = F.oM(), this.sendLog = (e, t, n) => {
                            if (void 0 !== this.shared.getValue("failedAuthentication")) return;
                            const {
                                store: i,
                                enhancers: o
                            } = Object.assign({
                                store: !1,
                                enhancers: []
                            }, n);
                            window.EVO_VERBOSE(`Sending log: ${e}`), this.sentLogCount += 1;
                            const s = Object.assign(Object.assign({
                                attributionId: this.instance.attributionId,
                                ua_launch_id: this.instance.uaLaunchId,
                                lobby_launch_id: this.instance.lobbyLaunchId,
                                connectionType: this.deviceInfo.connectionType,
                                userAgent: this.deviceInfo.userAgent,
                                buildId: "6.20240115.63824.37369-40dbe8a65e",
                                url: V(window.location.href),
                                provider: this.instance.provider
                            }, "game" === this.instance.kind && Object.assign({
                                tableId: this.instance.tableId,
                                virtualTableId: this.instance.virtualTableId
                            }, o.includes("gameType") ? {
                                gameType: this.instance.gameType
                            } : void 0)), t);
                            if (i) return void this.instance.storeLog({
                                type: e,
                                payload: s
                            });
                            const r = O("/log"),
                                a = JSON.stringify({
                                    log: {
                                        type: e,
                                        value: s
                                    }
                                });
                            let d = !1;
                            if (navigator.sendBeacon) try {
                                d = navigator.sendBeacon(r, a)
                            } catch (e) {
                                window.console.error(e)
                            }
                            d || fetch(r, {
                                method: "POST",
                                credentials: "same-origin",
                                headers: {
                                    "Content-Type": "text/plain"
                                },
                                body: a,
                                keepalive: !0,
                                evoIgnoreSandbox: !0
                            }).catch((n => {
                                console.error("Unable to send log", n, e, t)
                            }))
                        }
                    }
                    addInstanceSwitchListener(e) {
                        this.onInstanceSwitch.push(e), "empty" !== this.instance.kind && e(this.instance)
                    }
                    addFailureListener(e) {
                        this.onFailure.push(e)
                    }
                    failedAuth() {
                        this.isFailed || (this.isFailed = !0, this.shared.publish("failedAuthentication", null), window.location.href = "/")
                    }
                    failed(e) {
                        this.isFailed = !0, this.failureReason = e.reason, this.increaseFailureCount(), e.failureDetails && L.H(L.s_(e.failureDetails));
                        const t = F.CK(this.failureCount, e.failureDetails);
                        if (this.onFailure.forEach((n => n({
                                failedURL: e.failedURL,
                                failureReason: e.reason,
                                failureDetails: e.failureDetails,
                                willRetry: t,
                                failureCount: this.failureCount
                            }))), !t) return void this.displayFailurePopup(L.B0(e.failureDetails) && e.failureDetails.localizedMessage ? e.failureDetails : "message.unableLoadGame", !0, !0);
                        const n = F.r3({
                            failureReason: e.reason,
                            isCdnEnabled: !!window.EVO_CDN
                        });
                        F.nD({
                            disableDuration: n,
                            failureCount: this.failureCount
                        })
                    }
                    displayPopup(e, t) {
                        Promise.race([F.gw(3e3), this.shared.getPromise("i18n")]).then((() => {
                            const n = this.shared.getValue("i18n"),
                                i = (null == n ? void 0 : n.common) || N;
                            let o, s;
                            "string" == typeof e ? (o = i[e], s = e) : (o = e.localizedMessage || e.message, s = "custom"), this.sendLog("CLIENT_POPUP_DISPLAYED", {
                                popupId: s
                            }, {
                                enhancers: ["gameType"]
                            }), window.EVO_POPUP(o, t.map((e => ({
                                content: i[e.contentKey],
                                callback: e.callback
                            }))))
                        }))
                    }
                    displayFailurePopup(e, t, n) {
                        this.isFailed = !0;
                        const i = [];
                        t && i.push({
                            contentKey: "button.tryAgain.uppercase",
                            callback: () => {
                                window.location.reload()
                            }
                        });
                        const {
                            provider: o
                        } = this.instance, s = o && "evolution" !== o && o !== M && !this.getLicenseeLobbyUrl();
                        n && !s && i.push({
                            contentKey: "button.backToLobby",
                            callback: () => {
                                this.redirectToLobby()
                            }
                        }), this.displayPopup(e, i)
                    }
                    addDeviceTypeToGlobalClasses() {
                        document.body && document.body.classList.add(this.deviceInfo.deviceType)
                    }
                    init(e = window.location.href) {
                        this.sentLogCount = 0, this.shared.start();
                        const t = p.h(e),
                            n = t.getParam("mwg") || null,
                            i = n ? null : t.getParam("table_id") || null,
                            o = n ? null : t.getParam("vt_id") || null,
                            s = n ? null : t.getParam("app") || null,
                            r = i && t.getParam("balance_id") || null,
                            a = this.instance;
                        if (!a.disposed) {
                            if ("multi" === a.kind) return a.update(t, !0);
                            if (i && "switch" === a.kind && a.tableId === i && a.virtualTableId === o && a.balanceId === r && a.app === s) return Promise.resolve()
                        }
                        "empty" !== a.kind && this.resetPerformanceMetrics();
                        const d = console.groupCollapsed || console.group;
                        return null == d || d.call(console, `%c📁 Application switch from ${a.kind} to tableId=${i}, vtId=${o}`, "font-size: 120%;"), this.instance = new Be(this, i, o, n, r, s), a.dispose().then((() => this.checkInitResources())).then((() => this.checkSwitchConfiguration(a))).then((() => {
                            let e;
                            if (window.EVO_VERBOSE(`SPA switch from ${a.kind}`), this.broadcast.reset(), n) e = new $e(this, n);
                            else if (i) {
                                const n = t.getParam("ua_launch_id") || null,
                                    a = t.getParam("lobby_launch_id") || null;
                                e = new Pe(this, i, o, s, r, n, a)
                            } else e = new _e(this, s);
                            this.instance = e;
                            for (const t of this.onInstanceSwitch) t(e)
                        })).catch((e => {
                            this.isFailed = !0;
                            const t = "SPA bail because of ";
                            window.console.error(t, e), window.EVO_VERBOSE(t + e, 1);
                            const s = p.h(window.location.href);
                            s.searchParams.mwg = void 0, s.searchParams.table_id = void 0, s.searchParams.vt_id = void 0, s.searchParams.freeGames = void 0, s.hashParams.mwg = n || void 0, s.hashParams.table_id = i || void 0, s.hashParams.vt_id = o || void 0, s.hashParams.balance_id = r || void 0;
                            const a = s.toString();
                            window.location.href !== a && (this.sendLog("CLIENT_GAME_RELOAD", {
                                reason: e
                            }), window.location.replace(a)), window.location.reload()
                        })).then((() => {
                            d && window.console.groupEnd()
                        }))
                    }
                    publishApplication(e, t, n) {
                        this.applications.publish(e + t, n), n.provider && (this.instance.provider = n.provider)
                    }
                    checkSwitchConfiguration(e) {
                        return "empty" === e.kind ? Promise.resolve() : new Promise(((e, t) => {
                            this.shared.subscribe("style", (n => {
                                const i = n.data.fastTableSwitching;
                                if ("false" === (null == i ? void 0 : i.enabled)) return t("fastTableSwitching is disabled in style settings");
                                e()
                            }))
                        }))
                    }
                    resetPerformanceMetrics() {
                        try {
                            performance.clearMarks(), performance.clearMeasures(), performance.clearResourceTimings(), performance.mark("evoAppSwitchStarted"), this.wasThrottled = !1
                        } catch (e) {
                            window.console.error("Cannot reset performance report", e)
                        }
                    }
                    checkInitResources() {
                        return this.spaSwitches++, this.spaSwitches >= 10 ? Promise.reject("10th load") : performance.now() > 6e5 ? Promise.reject("10 minute uptime") : Promise.resolve()
                    }
                    redirectToLobby() {
                        const e = this.getLicenseeLobbyUrl();
                        if (e) {
                            try {
                                window.top ? window.top.location.href = e : window.location.href = e
                            } catch (t) {
                                window.location.href = e
                            }
                            return
                        }
                        const t = p.h(window.location.href),
                            n = this.instance.provider === M ? x : void 0,
                            i = {
                                category: t.getParam("category"),
                                game: t.getParam("game"),
                                app: n
                            };
                        window.location.href = I(i)
                    }
                    getLicenseeLobbyUrl() {
                        var e;
                        const t = this.shared.getValue("style"),
                            n = this.deviceInfo.isDesktop ? null == t ? void 0 : t.data : null == t ? void 0 : t.data.mobile_settings;
                        return null === (e = null == n ? void 0 : n.licensee_lobby) || void 0 === e ? void 0 : e.url
                    }
                    increaseFailureCount() {
                        this.failureCount += 1, F.cN(this.failureCount)
                    }
                }
                const rt = "CLIENT_PAGE_HIDDEN",
                    at = "CLIENT_PAGE_VISIBLE";

                function dt(t, i = d) {
                    const o = new i({
                        sendLogMessage: t.sendLog,
                        isDesktop: t.deviceInfo.isDesktop
                    });
                    t.addInstanceSwitchListener((() => {
                        o.postMessage({
                            event: "EVO:APPLICATION_LOAD_STARTED"
                        }, {
                            type: e.Default,
                            disableLogging: !0
                        })
                    })), t.shared.subscribe(["setup", "style"], ((e, n) => {
                        const i = e.clientApiV2,
                            r = n.data.clientApiV2,
                            d = n.data.client_api_v2,
                            l = r || d || i,
                            c = n.data.clientApiV2Overrides,
                            h = function(e) {
                                const t = e;
                                return t && function(e) {
                                    return ["stable", "unstable"].includes(e)
                                }(t.release) ? Object.assign(Object.assign({
                                    release: t.release
                                }, function(e) {
                                    return Array.isArray(e) && e.length > 0 && e.some((e => "string" == typeof e && e.trim().length > 0))
                                }(t.origins) ? {
                                    origins: t.origins
                                } : void 0), {
                                    enabledEvents: t.enabledEvents ? s(t.enabledEvents) : void 0,
                                    disabledCommands: t.disabledCommands ? a(t.disabledCommands) : void 0
                                }) : null
                            }(Object.assign(Object.assign({}, l), c));
                        null !== h && (t.clientApi = o, o.config = h)
                    })), t.shared.subscribe("failedAuthentication", (() => {
                        null == o || o.postMessage({
                            event: "EVO:SESSION_INVALID"
                        })
                    })), t.addInstanceSwitchListener((e => {
                        e.subscribe("config", (i => {
                            e.subscribe("gameLoaded", (n => {
                                var o;
                                "game" === (null == n ? void 0 : n.applicationType) ? e.subscribe("gameMeta", (() => {
                                    var o;
                                    null === (o = t.clientApi) || void 0 === o || o.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_READY"
                                    }, lt(i, e, n)))
                                })): null === (o = t.clientApi) || void 0 === o || o.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_READY"
                                }, lt(i, e, n))), window.addEventListener("beforeunload", (() => {
                                    var o, s;
                                    null === (o = t.clientApi) || void 0 === o || o.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_UNLOAD"
                                    }, lt(i, e, n))), null === (s = t.clientApi) || void 0 === s || s.reset()
                                }))
                            })), e.subscribe("disposing", (o => {
                                var s, r;
                                null === (s = t.clientApi) || void 0 === s || s.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_UNLOAD"
                                }, lt(i, e, function(e) {
                                    if (!e) return;
                                    const {
                                        suppressLoadingScreen: t
                                    } = e;
                                    return n._T(e, ["suppressLoadingScreen"])
                                }(o)))), null === (r = t.clientApi) || void 0 === r || r.reset()
                            }))
                        }))
                    }))
                }

                function lt(e, t, n = {
                    applicationType: "unknown"
                }) {
                    return "game" === t.kind ? Object.assign(Object.assign(Object.assign({}, n), {
                        gameType: e.game,
                        gameVertical: e.game_vertical,
                        tableId: t.tableId
                    }), t.virtualTableId && {
                        virtualTableId: t.virtualTableId
                    }) : n
                }
                const ct = {
                        isAvailable: function() {
                            var e;
                            return "function" == typeof(null === (e = window.EvolutionGamingAndroidAPI) || void 0 === e ? void 0 : e.send)
                        },
                        dispatch: function(e, t = {}) {
                            window.EvolutionGamingAndroidAPI.send(JSON.stringify({
                                type: e,
                                payload: t
                            }))
                        }
                    },
                    ht = {
                        isAvailable: function() {
                            try {
                                return window.parent !== window && !!window.parent.postMessage
                            } catch (e) {
                                return !1
                            }
                        },
                        dispatch: function(e, t = {}) {
                            window.parent.postMessage({
                                type: e,
                                payload: t
                            }, "*")
                        }
                    },
                    ut = {
                        isAvailable: function() {
                            var e, t, n;
                            return "function" == typeof(null === (n = null === (t = null === (e = window.webkit) || void 0 === e ? void 0 : e.messageHandlers) || void 0 === t ? void 0 : t.EvolutionGamingWrapperAPI) || void 0 === n ? void 0 : n.postMessage)
                        },
                        dispatch: function(e, t = {}) {
                            window.webkit.messageHandlers.EvolutionGamingWrapperAPI.postMessage(JSON.stringify({
                                type: e,
                                payload: t
                            }))
                        }
                    };
                class pt {
                    constructor() {
                        this.consumers = []
                    }
                    addConsumer(e) {
                        e.isAvailable() && this.consumers.push(e)
                    }
                    dispatch(e, t = {}) {
                        for (const n of this.consumers) n.dispatch(e, t)
                    }
                }
                let mt;
                const gt = "index.html",
                    ft = "index.coop.html";

                function wt(e, t) {
                    if (t) F.Ar("gameClientUrlSupport"), window.location.replace(e);
                    else try {
                        window.history.replaceState(null, "", e)
                    } catch (t) {
                        wt(e, !0)
                    }
                }
                const bt = "loadingScreen--87788",
                    vt = "gradient--0f1d8",
                    yt = "finishProgress--0c00b",
                    Et = "footer--fba55",
                    Lt = "image--44b6b",
                    St = "withFooterLogo--6ca4a",
                    It = "loaded--10bec",
                    Ot = "awardLogos--861ba",
                    _t = "noImage--01a3d",
                    Ct = "properAnimation--47cc2",
                    Pt = "randomAnimation--de14a";

                function Tt(e, t = null, n = 1e4, i = !0) {
                    return new Promise(((o, s) => {
                        const r = new Image;
                        r.crossOrigin = t, r.onerror = () => d("error");
                        const a = window.setTimeout((() => {
                            d("timeout")
                        }), n);

                        function d(t) {
                            clearTimeout(a), i && B.x(e, t), s(t)
                        }
                        r.onload = () => {
                            clearTimeout(a), o(r)
                        }, r.src = e
                    }))
                }

                function At(e) {
                    if (e = e && e.trim()) return e.startsWith("https://") || e.startsWith("data:") ? e : (e.startsWith("/") || (e = `/frontend/evo/branding/${e}`), `${window.EVO_CDN||window.EVO_ORIGIN||""}${e}`)
                }

                function kt(e) {
                    const t = document.getElementsByClassName(e);
                    if (!t.length) throw new Error(`Loading screen not found: ${e}`);
                    return t[0]
                }

                function Rt() {
                    try {
                        let e = window;
                        for (;;) {
                            const t = e.EVO_LOADER;
                            if ("multi" === (null == t ? void 0 : t.instance.kind)) return t.instance;
                            if (e === e.parent) return null;
                            e = e.parent
                        }
                    } catch (e) {
                        return null
                    }
                }
                const Dt = "reality_check_handler";

                function Vt() {
                    const e = p.h(window.location.href).getParam("EVOSESSIONID");
                    e && "undefined" !== e && (window.EVO_SESSION_ID_FALLBACK = e)
                }

                function Mt(e) {
                    return "compliance" === p.h(e).getParam("app")
                }

                function xt(e) {
                    const t = p.h(e.href).getParam("mwg");
                    if (t)
                        for (const e of R(t))
                            if (Mt(e)) return !0;
                    return !1
                }

                function Nt(e) {
                    const t = I({
                            app: "compliance",
                            [je]: Me.TopBar
                        }),
                        n = Rt();
                    if (n) {
                        if ((null == n ? void 0 : n.window) !== window) return;
                        for (const e of n.frames)
                            if (e.layout === Me.TopBar && Mt(e.location)) return;
                        n.addFrame(t)
                    } else {
                        const n = I({
                            mwg: k([t, window.location.href])
                        });
                        e.init(n)
                    }
                }
                const jt = /^\*?(\d+\.\d+\.\d+\.\d+-[a-f0-9]{10}).*/,
                    $t = "6.20240115.63824.37369-40dbe8a65e".replace(jt, "$1");
                (function() {
                    Vt(),
                        function() {
                            let e = !1;
                            window.addEventListener("beforeunload", (() => {
                                window.EVO_VERBOSE("beforeunload"), e = !0, setTimeout((() => {
                                    e = !1
                                }), 1e3)
                            })), window.addEventListener("popstate", (() => {
                                if (e) {
                                    window.EVO_VERBOSE("beforeunload > popstate");
                                    const e = window.location.href,
                                        t = p.h(e);
                                    t.searchParams._reload = Date.now().toFixed(), window.history.pushState(null, "", t.toString()), F.Ar("Popstate event triggered for Gammix BB application"), window.location.replace(e)
                                }
                            }))
                        }(),
                        function() {
                            const e = window.history.pushState;
                            window.history.pushState = function(t, n, i) {
                                e.call(window.history, t, n, i), window.dispatchEvent(new CustomEvent("pushstate"))
                            };
                            const t = window.history.replaceState;
                            window.history.replaceState = function(e, n, i) {
                                t.call(window.history, e, n, i), window.dispatchEvent(new CustomEvent("replacestate"))
                            }
                        }(), window.addEventListener("message", (e => {
                            const t = e.data;
                            if (e.origin === c.receive && t && "object" == typeof t && t.key === h) {
                                window.parent !== window && u(window.parent, e);
                                for (let t = 0; t < window.length; t++) u(window[t], e)
                            }
                        }));
                    const e = p.h(window.location.href),
                        t = new st;
                    window.EVO_LOADER = t, t.addDeviceTypeToGlobalClasses(), Object.defineProperty(window, "EVO_LOADER", {
                            get: () => t,
                            set: () => {
                                console.warn("window.EVO_LOADER cannot be overwritten")
                            }
                        }),
                        function(e) {
                            return function() {
                                const e = p.h(window.location.href),
                                    t = e.getParam("origin");
                                if (!t) return Promise.resolve();
                                if (t.startsWith("https%3A%2F%2F")) return Promise.reject("`origin` parameter has been incorrectly double encoded");
                                window.console.log("Full URL", window.location.href), window.console.log("Processing origin parameter:", t);
                                const n = p.h(t);
                                if (n.pathname.length <= 1 && !n.search) return i();
                                if (e.getParam("JSESSIONID") || e.getParam("params")) {
                                    const e = "⚠ `JSESSIONID` or `params` is defined outside of `origin` URL. Please ensure that `origin` value is properly url-encoded.";
                                    window.console.warn(e), window.EVO_VERBOSE(e, 1)
                                }
                                return n.searchParams.json = "true", n.searchParams.cc = "1", n.searchParams.client_version = "6.20240115.63824.37369-40dbe8a65e", F.lC(n.toString(), "json").then((e => {
                                    const t = null == e ? void 0 : e.location;
                                    if ("string" != typeof t) throw new Error("Auth endpoint didn't return correct format.");
                                    const o = p.h(t);
                                    o.hashParams.origin = n.origin;
                                    const s = window.location.pathname + o.search + o.hash;
                                    F.Ar("Setting remote origin");
                                    try {
                                        window.history.replaceState(null, "", s)
                                    } catch (e) {
                                        window.location.replace(s)
                                    }
                                    return Vt(), i()
                                }));

                                function i() {
                                    if (!window.EVO_SESSION_ID_FALLBACK) return Promise.reject("origin is only allowed when session id is also given in url");
                                    const e = n.origin;
                                    return e.endsWith(".evo-games.com") || e.endsWith(".evolutiongaming.com") ? (window.EVO_ORIGIN = e, document.cookie ? fetch("/logout", {
                                        credentials: "same-origin",
                                        method: "POST"
                                    }).then((() => {})).catch((() => {})) : Promise.resolve()) : Promise.reject("unsafe origin rejected")
                                }
                            }().catch((t => (window.console.error("⛔", t), window.EVO_VERBOSE(t, 1), e.failedAuth(), Promise.reject(t))))
                        }(t).then((() => {
                            (function(e) {
                                let t = 0;

                                function n() {
                                    e.isFailed || e.sendLog("CLIENT_GAME_LOADER_TERMINATED", Object.assign({
                                        loadingTime: s()
                                    }, r()))
                                }
                                e.addInstanceSwitchListener((i => {
                                    t = performance.now(), e.sendLog("CLIENT_GAME_LOADER_STARTED", {
                                        sharingBrowserContext: !!window.opener,
                                        failureCount: F.oM(),
                                        verboseEnabled: window.EVO_VERBOSE()
                                    }), window.addEventListener("beforeunload", n);
                                    const s = o("visibilitychange"),
                                        r = o("pagehide"),
                                        a = o("pageshow");
                                    document.addEventListener("visibilitychange", s), window.addEventListener("pagehide", r), window.addEventListener("pageshow", a), i.subscribe("gameLoaded", (() => {
                                        window.removeEventListener("beforeunload", n), document.removeEventListener("visibilitychange", s), window.removeEventListener("pagehide", r), window.removeEventListener("pageshow", a)
                                    }))
                                })), e.addFailureListener((t => {
                                    e.sendLog("CLIENT_GAME_LOADER_FAILED", Object.assign({
                                        failureReason: t.failureReason,
                                        failureDetails: t.failureDetails,
                                        failedURL: t.failedURL,
                                        failureCount: t.failureCount,
                                        willRetry: t.willRetry,
                                        loadingTime: s()
                                    }, r()))
                                }));
                                let i = at;

                                function o(t) {
                                    return () => {
                                        const n = "pagehide" === t || "visibilitychange" === t && "hidden" === document.visibilityState ? rt : at;
                                        n !== i && (e.sendLog(n, {
                                            loadingTime: s()
                                        }, {
                                            store: !0
                                        }), i = n)
                                    }
                                }

                                function s() {
                                    return Math.floor(performance.now() - t)
                                }

                                function r() {
                                    let t = 0,
                                        n = 0;
                                    return e.instance.setLogConsumer((({
                                        type: e
                                    }) => {
                                        e === rt ? t += 1 : e === at && (n += 1)
                                    })), {
                                        hideEvents: t,
                                        showEvents: n
                                    }
                                }
                            })(t), dt(t, d),
                                function(e) {
                                    window.EVO_ORIGIN || e.shared.subscribe("setup", (t => {
                                        var n;
                                        const i = null === (n = t.casinoConfig) || void 0 === n ? void 0 : n.gameClientUrl;
                                        if (i && !window.location.pathname.startsWith(i))
                                            if (window.EVO_VERBOSE()) window.console.warn(`Ignoring 'gameClientUrl=${i}' because of development/verbose mode.`);
                                            else {
                                                window.console.log("Adjusting the URL based on 'gameClientUrl'. It will take effect on next page reload.");
                                                const e = p.h(window.location.href);
                                                e.pathname = i, wt(e.toString(), !1)
                                            }
                                        e.addInstanceSwitchListener((e => {
                                            "game" === e.kind && e.subscribe("config", (e => {
                                                var n, i;
                                                let o = null !== (n = e.frontend_loader) && void 0 !== n ? n : "evolution" === e.game_provider ? ft : "";
                                                if (o === ft && !0 !== (null === (i = t.globalSettings) || void 0 === i ? void 0 : i.enable_index_coop) && (o = ""), o !== gt && o) {
                                                    if (window.location.pathname.endsWith(o)) return
                                                } else {
                                                    if (window.location.pathname.endsWith(gt) || window.location.pathname.endsWith("/")) return;
                                                    o = ""
                                                }
                                                window.console.log("Adjusting the URL based on 'frontend_loader'.");
                                                const s = p.h(window.location.href);
                                                s.pathname = s.pathname.substring(0, s.pathname.lastIndexOf("/") + 1) + o, wt(s.toString(), o !== ft)
                                            }))
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    e.shared.subscribe(["setup", "style"], ((t, n) => {
                                        let i = window;
                                        if (function(e, t, n) {
                                                var i;
                                                if (e.isDesktop) return !1;
                                                const {
                                                    swe: o,
                                                    de: s,
                                                    arg: r
                                                } = (null === (i = null == t ? void 0 : t.casinoConfig) || void 0 === i ? void 0 : i.compliance) || {}, a = n.data.mobile_settings || {};
                                                return !(!("compliance" in a) || 0 === Object.keys(a.compliance).length || !o && !s && !r)
                                            }(e.deviceInfo, t, n)) try {
                                            let t = xt(i.location);
                                            for (; !t && i !== i.parent;) t = xt(i.parent.location), i = i.parent;
                                            t || (e.isFailed = !0, Nt(e))
                                        } catch (t) {
                                            window.console.error("Unable to read parent windows URL", t), e.isFailed = !0, Nt(e)
                                        } else "multi" === e.instance.kind && xt(i.location) && function() {
                                            const e = Rt();
                                            if (e)
                                                for (const t of e.frames) t.layout === Me.TopBar && Mt(t.location) && (null == e || e.removeFrame(t.frame, {
                                                    update: !0,
                                                    animateOnMobile: !1
                                                }))
                                        }()
                                    }))
                                }(t),
                                function(e, t) {
                                    e.shared.subscribe("setup", (t => {
                                        const n = t.wsHost;
                                        n && e.prefetcher.preconnect(`//${n}`, !0)
                                    }));
                                    const n = t.getParam("app") || t.getParam("game");
                                    n && !n.includes("@") && e.prefetcher.preload({
                                        game: n
                                    }, !0, !0).catch((() => {})), e.addInstanceSwitchListener((e => {
                                        "game" === e.kind && e.subscribe("config", (e => {
                                            const t = p.h(window.location.href);
                                            if ((t.getParam("game") || "") !== (e.game || "")) {
                                                t.searchParams.game = void 0, t.hashParams.game = e.game || void 0;
                                                try {
                                                    window.history.replaceState(null, "", t.toString())
                                                } catch (e) {}
                                            }
                                        }))
                                    }))
                                }(t, e),
                                function(e) {
                                    document.documentElement.setAttribute("lang", window.EVO_LOCALE), e.shared.subscribe("setup", (t => {
                                        e.addInstanceSwitchListener((() => {
                                            document.body.classList.add(t.lang)
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    e.addInstanceSwitchListener((t => {
                                        "game" === t.kind && e.shared.subscribe("style", (e => {
                                            var t;
                                            if (null === (t = e.data) || void 0 === t ? void 0 : t[Dt]) {
                                                let t = e.data[Dt].url;
                                                const n = document.getElementById("RealityCheckScript");
                                                if (t && !n) {
                                                    "/" === t[0] && (t = (window.EVO_ORIGIN || "") + t);
                                                    const e = document.createElement("script");
                                                    e.type = "text/javascript", e.charset = "utf-8", e.src = t, e.id = "RealityCheckScript", document.head.appendChild(e)
                                                }
                                            }
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    function t() {
                                        e.displayFailurePopup("error.noDealer", !1, !0)
                                    }
                                    e.addInstanceSwitchListener((n => {
                                        n.subscribe("config", (n => {
                                            var i;
                                            !n || n.error ? n && "object" == typeof n.error && "5013" === n.error.code ? t() : e.failed({
                                                reason: "config",
                                                failureDetails: new Error("invalid config")
                                            }) : (null === (i = n["disabled-client-versions"]) || void 0 === i ? void 0 : i.split(",").find((e => e.replace(jt, "$1") === $t))) && t()
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    e.addInstanceSwitchListener((e => {
                                        document.title = "Casino", "game" === e.kind && e.subscribe("config", (e => {
                                            document.title = `Casino: ${e.tableName||e.game||"game"}`
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    e.addInstanceSwitchListener((e => {
                                        e.subscribe(["config", "gameLoaded"], (t => {
                                            var n, i;
                                            "game" === e.kind && (n = {
                                                type: "GAME_LOADED",
                                                payload: {
                                                    gameType: t.game,
                                                    tableId: e.tableId,
                                                    tableName: t.tableName || ""
                                                }
                                            }, mt || (null === (i = window.EVO_LOADER) || void 0 === i ? void 0 : i.clientApi) || (mt = function() {
                                                const e = new pt;
                                                return e.addConsumer(ht), e.addConsumer(ut), e.addConsumer(ct), e
                                            }()), null == mt || mt.dispatch(n.type, n.payload))
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    return document.addEventListener("visibilitychange", t), void document.addEventListener("webkitvisibilitychange", t);

                                    function t() {
                                        e.wasThrottled = !0
                                    }
                                }(t),
                                function(e) {
                                    const {
                                        isDesktop: t
                                    } = e.deviceInfo;
                                    let n = 0;
                                    if (t) {
                                        let e = !1;
                                        window.addEventListener("load", (() => {
                                            e = !0
                                        })), window.addEventListener("popstate", (() => {
                                            e && (n = setTimeout((() => {
                                                window.EVO_VERBOSE(`popstate ${window.location.hash}`), window.location.reload()
                                            }), 100))
                                        }))
                                    }
                                    window.addEventListener("hashchange", (() => {
                                        n && (clearTimeout(n), n = 0), window.EVO_VERBOSE(`hashchange ${window.location.hash}`), e.init(window.location.href)
                                    }))
                                }(t),
                                function(e) {
                                    if ("empty" === e.instance.kind && !Rt()) try {
                                        e.instance = new $e(e, "", !0)
                                    } catch (e) {
                                        L.H(new L.Dz("Initialization failed", e))
                                    }
                                }(t),
                                function(e) {
                                    let t;
                                    e.addInstanceSwitchListener((n => {
                                        e.shared.subscribe("style", (e => {
                                            var i;
                                            let o;
                                            if (null === (i = e.data) || void 0 === i ? void 0 : i.mobile_settings) {
                                                const t = e.data.mobile_settings.branded_lobby_gradient;
                                                (null == t ? void 0 : t.light) && t.dark && (o = [t.light, t.dark])
                                            }
                                            n.subscribe("config", (e => {
                                                let n, i;
                                                e.branded_cloth_gradient_light && e.branded_cloth_gradient_dark && (n = [e.branded_cloth_gradient_light, e.branded_cloth_gradient_dark]), e.branded_menu_gradient_light && e.branded_menu_gradient_dark && (i = [e.branded_menu_gradient_light, e.branded_menu_gradient_dark]), t = function(e, t, n, i) {
                                                    let o = "";
                                                    if (e) {
                                                        const t = `linear-gradient(45deg,rgba(${e[1]},0) 0%, rgba(${e[1]},0.8) 50%, rgba(${e[1]},0) 100%)`,
                                                            n = `linear-gradient(45deg,rgb(${e[0]}) -5%,rgb(${e[1]}) 50%,rgb(${e[0]}) 105%)`;
                                                        o += `.game-screen.cloth-gradient {background: -webkit-${t}, -webkit-${n} !important;background: ${t}, ${n} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    const s = i ? t : n;
                                                    if (s) {
                                                        const e = `linear-gradient(45deg,rgba(${s[1]},0) 0%,rgba(${s[1]},0.8) 50%,rgba(${s[1]},0) 100%)`,
                                                            t = `linear-gradient(45deg,rgb(${s[0]}) -5%,rgb(${s[1]}) 50%,rgb(${s[0]}) 105%)`;
                                                        o += `.${bt}.${vt} {background: ${e}, ${t} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    if (o.length) {
                                                        const e = document.createElement("style");
                                                        return e.type = "text/css", e.media = "screen", document.head.appendChild(e), e.sheet && ((e.sheet.ownerNode || e).innerHTML = o), e
                                                    }
                                                }(n, o, i, !e.game)
                                            }))
                                        })), n.subscribe("disposing", (() => {
                                            var e;
                                            null === (e = null == t ? void 0 : t.parentNode) || void 0 === e || e.removeChild(t)
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    const t = kt(bt),
                                        n = kt("star1--da76f");

                                    function i(e) {
                                        e.target instanceof HTMLElement && "BUTTON" === e.target.tagName || e.preventDefault()
                                    }

                                    function o(e = !0) {
                                        kt("evoLogo--06ffa").style.opacity = e ? "1" : "0"
                                    }

                                    function s() {
                                        const t = kt("content--1ddca"),
                                            n = e.deviceInfo.isDesktop ? 16 / 9 : 1,
                                            i = window.innerWidth / window.innerHeight > n,
                                            o = e.deviceInfo.isTablet;
                                        t.classList.toggle("wide--3bffa", i), t.classList.toggle("narrow--8d0d9", !i), t.classList.toggle("tablet--43c30", o)
                                    }

                                    function r(e, n, i, o, s, r, a) {
                                        o && t.classList.add(_t), i || t.classList.add("mobile--76605", vt);
                                        const d = kt("center--9aeab");
                                        s ? F.e6(d) : F.V_(d), F.V_(t, !0), t.classList.remove(yt), kt(Lt).classList.remove(It), a ? (t.style.height = "100vh", r && (t.style.height = "140vh", t.style.margin = "-20vh 0")) : e && n && !t.style.height && (t.style.maxHeight = `${document.documentElement.getBoundingClientRect().height}px`)
                                    }

                                    function a() {
                                        t.classList.add(yt), window.removeEventListener("resize", s), window.setTimeout((() => {
                                            F.e6(t), document.body.classList.remove("loading"), t.classList.remove(_t, St, Pt, Ct), n.style.transform = "", window.removeEventListener("touchmove", i), window.removeEventListener("touchstart", i), window.removeEventListener("touchend", i), t.style.maxHeight = "", t.style.height = "", t.style.margin = "", e.instance.publish("loadingScreenHidden", null)
                                        }), 500)
                                    }

                                    function d() {
                                        this.classList.add(It)
                                    }

                                    function l(e, t) {
                                        for (const n of t) n && Tt(n).then((t => e.prepend(t))).catch((() => {}))
                                    }

                                    function c(e = !0, t = window, n = {
                                        transfer: 0,
                                        count: 0
                                    }) {
                                        var i, o;
                                        const s = null === (o = null === (i = t.performance) || void 0 === i ? void 0 : i.getEntriesByType) || void 0 === o ? void 0 : o.call(i, "resource");
                                        for (const e of s || []) n.transfer += e.transferSize || 0, n.count++;
                                        if (e)
                                            for (let i = 0; i < t.length; i++) try {
                                                c(!0, t[i], n)
                                            } catch (e) {
                                                return null
                                            }
                                        return n
                                    }
                                    e.shared.getPromise("i18n").then((e => {
                                        kt("logoText--42a39").textContent = e.common["mobile.poweredby"]
                                    })), e.addInstanceSwitchListener((h => {
                                        const u = e.deviceInfo.isDesktop,
                                            p = e.deviceInfo.isPhone,
                                            m = e.deviceInfo.isIosDevice,
                                            g = e.deviceInfo.userAgent,
                                            f = /coc_coc_browser\/([0-9._]*)/i.test(g),
                                            w = /CriOS\/([0-9._]*)/i.test(g) && !f,
                                            b = "game" !== h.kind;
                                        let v = 0,
                                            y = -1,
                                            E = null;
                                        if ("multi" === h.kind) return void a();
                                        r(p, m, u, b, !1, w, !1), s(), window.removeEventListener("resize", s), window.addEventListener("resize", s);
                                        const L = e.deviceInfo.isEventPassiveSupported;
                                        window.addEventListener("touchmove", i, L && {
                                            passive: !1
                                        }), window.addEventListener("touchstart", i, L && {
                                            passive: !1
                                        }), window.addEventListener("touchend", i), e.shared.subscribe("style", (e => {
                                            const n = "false" === e.data.show_evo_logo;
                                            h.subscribe("config", (e => {
                                                const i = function(e, t = !1) {
                                                    return t ? !1 !== function(e) {
                                                        try {
                                                            const t = window.sessionStorage.getItem(e);
                                                            return t ? JSON.parse(t) : void 0
                                                        } catch (e) {
                                                            return
                                                        }
                                                    }(Ve) : "false" !== e.show_evo_logo
                                                }(e, b);
                                                var s;
                                                !n && i && (o(), s = function(e) {
                                                    const t = e.graphical_footerLogos;
                                                    return t ? t.trim().split(",").map(At) : []
                                                }(e), s.length && (t.classList.add(St), l(kt(Et), s))), b || function(e, t, n) {
                                                    try {
                                                        window.sessionStorage.setItem(e, JSON.stringify(t))
                                                    } catch (e) {}
                                                }(Ve, i)
                                            }))
                                        })), e.shared.subscribe("setup", (e => {
                                            h.subscribe("config", (t => {
                                                var n;
                                                (function(e) {
                                                    if (e) {
                                                        const t = kt(Lt);
                                                        t.removeEventListener("load", d), t.addEventListener("load", d), t.src = e
                                                    }
                                                })(function(e, t, n) {
                                                    const i = function(e, t, n) {
                                                        const i = window.EVO_LOCALE || t.locale,
                                                            o = t.lang,
                                                            s = n ? "graphical_desktopLoadingScreen" : "graphical_mobileLoadingScreen";
                                                        return e[`${s}_${i}`] || e[`${s}_${o}`] || e[s]
                                                    }(t, n, e);
                                                    return At(i)
                                                }(u, t, e)), u || (n = function(e) {
                                                    const t = e.graphical_mobileAwardLogos;
                                                    return t ? t.trim().split(",").map(At) : []
                                                }(t), l(kt(Ot), n))
                                            }))
                                        })), h.subscribe(["config", "gamePackageManifest"], ((i, o) => {
                                            y = parseFloat(i.loader_expected_resource_count || "0") || o.loaderExpectedResourceCount || 0, E = i.loader_resources_counting_mode || o.loaderResourcesCountingMode || "auto";
                                            const s = !y || "none" === E;
                                            t.classList.add(s ? Pt : Ct), s && e.sendLog("CLIENT_LOADING_SCREEN_ISSUE", {
                                                error: "random-animation",
                                                game: i.game,
                                                app: o.application
                                            });
                                            const r = "none" !== E && i.table_id && "evolution" !== i.game_provider,
                                                a = kt(Et),
                                                d = document.createElement("div");
                                            null == a || a.appendChild(d), v = window.setInterval((() => {
                                                var t;
                                                const i = c("auto" === E);
                                                if (!i) return;
                                                if ("non-recursive" === E) {
                                                    const e = h.loadProgress;
                                                    if (!e) return;
                                                    i.count += e.count || 0, i.transfer += e.transfer || 0
                                                }
                                                const o = (null === (t = e.shared.getValue("i18n")) || void 0 === t ? void 0 : t.common) || {};
                                                if (i.transfer, y) {
                                                    const e = Math.max(.01, Math.min(.99, i.count / y));
                                                    n && (n.style.transform = `translateX(${(600*e).toFixed(0)}%)`), d.innerHTML = `${o.loading||""} ${(100*e).toFixed(0)}%`
                                                } else if (r) {
                                                    const e = o.downloadedAssets || "",
                                                        t = e ? ": " : "";
                                                    d.innerHTML = `${e}${t}${i.count}`
                                                }
                                            }), 500)
                                        })), h.subscribe("gameLoaded", (() => {
                                            a(), clearInterval(v);
                                            const e = c("auto" === E);
                                            e && y > 0 && Math.abs(1 - e.count / y) > .1 ? window.console.warn(`Mismatch between expected resource count (${y}) and actual.`, e) : window.console.log("Resources loaded:", e)
                                        })), h.subscribe("disposing", (t => {
                                            var n, i, s;
                                            if (function() {
                                                    const e = kt(Lt);
                                                    e.removeEventListener("load", d), e.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==", kt(Ot).textContent = "", kt(Et).textContent = "", o(!1)
                                                }(), null == t ? void 0 : t.suppressLoadingScreen) return;
                                            const a = "switch" === e.instance.kind && !e.instance.tableId,
                                                l = p && w && "true" !== (null === (s = null === (i = null === (n = e.shared.getValue("style")) || void 0 === n ? void 0 : n.data.mobile_settings) || void 0 === i ? void 0 : i.swipe_to_play) || void 0 === s ? void 0 : s.disable);
                                            r(p, m, u, a, !0, w, l)
                                        }))
                                    }))
                                }(t),
                                function(e) {
                                    const t = function(e, t, n) {
                                        let i = 0,
                                            o = !1;
                                        return (...n) => {
                                            if (i < e.limit) return i += 1, setTimeout((() => {
                                                i -= 1, o = !1
                                            }), e.timeSpan), t(...n);
                                            o || (o = !0)
                                        }
                                    }({
                                        limit: 20,
                                        timeSpan: 6e4
                                    }, e.sendLog);
                                    e.addInstanceSwitchListener((e => {
                                        e.subscribe("gameLoaded", (() => {
                                            window.parent.postMessage({
                                                type: "CLIENT_API_V1_USAGE_LOGGER_INITIALIZED"
                                            }, "*")
                                        }))
                                    })), window.addEventListener("message", (({
                                        data: e,
                                        origin: n
                                    }) => {
                                        "IFRAME_SUBSCRIBED_TO_EVENTS" === e.type && t("CLIENT_API_V1_USAGE", {
                                            origin: n,
                                            payload: e.payload
                                        })
                                    }))
                                }(t), t.init()
                        })).catch((() => {}))
                })()
            })()
        })()
    </script>
</body>

</html>