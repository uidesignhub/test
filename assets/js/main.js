! function () {
    "use strict";
    var e, t, n, a,
        s = "en";



    function i() {
        var e = document.querySelectorAll(".counter-value");
        e && e.forEach(function (o) {
            ! function e() {
                var t = +o.getAttribute("data-target"),
                    n = +o.innerText,
                    a = t / 250;
                a < 1 && (a = 1), n < t ? (o.innerText = (n + a).toFixed(0), setTimeout(e, 1)) : o.innerText = t
            }()
        })
    }







    function u() {
        var e, t, n;
        window.sessionStorage && ((e = sessionStorage.getItem("is_visited")) ? null !== (t = document.querySelector("#" + e)) && (t.checked = !0, n = e, 1 == document.getElementById("layout-direction-ltr").checked && "layout-direction-ltr" === n ? (document.getElementsByTagName("html")[0].removeAttribute("dir"), document.getElementById("layout-direction-rtl").checked = !1, document.getElementById("bootstrap-style").setAttribute("href", "assets/css/bootstrap.min.css"), document.getElementById("app-style").setAttribute("href", "assets/css/app.min.css"), sessionStorage.setItem("is_visited", "layout-direction-ltr")) : 1 == document.getElementById("layout-direction-rtl").checked && "layout-direction-rtl" === n && (document.getElementById("layout-direction-ltr").checked = !1, document.getElementById("bootstrap-style").setAttribute("href", "assets/css/bootstrap-rtl.min.css"), document.getElementById("app-style").setAttribute("href", "assets/css/app-rtl.min.css"), document.getElementsByTagName("html")[0].setAttribute("dir", "rtl"), sessionStorage.setItem("is_visited", "layout-direction-rtl"))) : sessionStorage.setItem("is_visited", "layout-direction-ltr"))
    }



    window.onload = function () {
        document.getElementById("preloader") && (c("pre-status"), c("preloader"))
    }, u(), document.addEventListener("DOMContentLoaded", function (e) {
        document.getElementById("side-menu") && new MetisMenu("#side-menu")
    }), i(),
        function () {
            var t = document.body.getAttribute("data-sidebar-size");
            window.onload = function () {
                1024 <= window.innerWidth && window.innerWidth <= 1366 && (document.body.setAttribute("data-sidebar-size", "sm"), m("sidebar-size-small"))
            };
            for (var e = document.getElementsByClassName("nav-btn"), n = 0; n < e.length; n++) e[n] && e[n].addEventListener("click", function (e) {
                e.preventDefault(), document.body.classList.toggle("sidebar-enable"), 992 <= window.innerWidth ? null == t ? null == document.body.getAttribute("data-sidebar-size") || "lg" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "lg") : "md" == t ? "md" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "md") : "sm" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "lg") : document.body.setAttribute("data-sidebar-size", "sm") : d()
            })
        }(), setTimeout(function () {
            var e = document.querySelectorAll("#sidebar-menu a");
            e && e.forEach(function (e) {
                var t, n, a, o, s, l = window.location.href.split(/[?#]/)[0];
                e.href == l && (e.classList.add("active"), (t = e.parentElement) && "side-menu" !== t.id && (t.classList.add("active"), (n = t.parentElement) && "side-menu" !== n.id && (n.classList.add("show"), n.classList.contains("mm-collapsing") && console.log("has mm-collapsing"), (a = n.parentElement) && "side-menu" !== a.id && (a.classList.add("active"), (o = a.parentElement) && "side-menu" !== o.id && (o.classList.add("show"), (s = o.parentElement) && "side-menu" !== s.id && s.classList.add("active"))))))
            })
        }, 0), (e = document.querySelectorAll(".navbar-nav a")) && e.forEach(function (e) {
            var t, n, a, o, s, l, i = window.location.href.split(/[?#]/)[0];
            e.href == i && (e.classList.add("active"), (t = e.parentElement) && (t.classList.add("active"), (n = t.parentElement).classList.add("active"), (a = n.parentElement) && (a.classList.add("active"), (o = a.parentElement).closest("li") && o.closest("li").classList.add("active"), o && (o.classList.add("active"), (s = o.parentElement) && (s.classList.add("active"), (l = s.parentElement) && l.classList.add("active"))))))
        }), n = document.body, document.getElementById("right-bar-toggle").addEventListener("click", function (e) {
            n.classList.toggle("right-bar-enabled")
        }), n.addEventListener("click", function (e) {
            !e.target.parentElement.classList.contains("right-bar-toggle-close") && e.target.closest(".right-bar-toggle, .right-bar") || document.body.classList.remove("right-bar-enabled")
        })

}();