document.querySelectorAll(".mainLink");document.querySelectorAll(".arrow");var j="",B="",A="";function se(){var e,o;e=$("html");var t=(o=$("body")).outerWidth(),a=o.outerHeight(),i=[self.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft,self.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop];e.data("scroll-position",i),e.data("previous-overflow",e.css("overflow")),e.css("overflow","hidden"),window.scrollTo(i[0],i[1]);var d=o.outerWidth()-t,n=o.outerHeight()-a;o.css({"margin-right":d,"margin-bottom":n})}function ce(){var e=$("html"),o=$("body");e.css("overflow",e.data("previous-overflow"));var t=e.data("scroll-position");window.scrollTo(t[0],t[1]),o.css({"margin-right":0,"margin-bottom":0})}$(document).ready(function(){$(".mainLink").on("click",function(){j=$(this).attr("data-link"),$(this).attr("aria-controls"),B=$(this),console.log("current",B),console.log("previous",A),$(B).attr("aria-controls")==$(A).attr("aria-controls")?window.location.href=j:($(A).attr("href",""),$(this).closest(".mobileDrop").addClass("mobileDropOpen")),A=B})}),$(window).on("load resize scroll",function(){$(window).scrollTop()>200?($(".navbar").css("background","rgb(35 48 56 / 70%)"),$(".hamburgerMenu").css("background","rgb(35 48 56 / 70%)"),$(".menuLeft span").css("padding","20px 30px 20px 0px"),$(".hamburgerMenu").css("height","70px"),$(".navbar").css("height","70px"),$(".navbar-brand img").css("transform","scale(.8)"),$(".mobile-header-logo").css("transform","scale(.8)")):($(".homeAccommdation").length||$(".offers-contact-wrapper").length||($(".navbar").css("background","rgb(35 48 56 / 100%)"),$(".hamburgerMenu").css("background","rgb(35 48 56 / 100%)")),$(".menuLeft span").css("padding","30px 30px 30px 0px"),$(".hamburgerMenu").css("height","90px"),$(".navbar").css("height","90px"),$(".navbar-brand img").css("transform","scale(1)"),$(".mobile-header-logo").css("transform","scale(1)"))}),$(window).on("load resize",function(){var e=$(window).width();e<1300&&e>576&&$(".footerLocation").appendTo(".footerCenter"),e<576&&$(".footerLocation").prependTo(".footerStart"),e>1300&&$(".footerLocation").prependTo(".footerCol")}),$("#offcanvasCloseBtn").on("click",ce),$("#offcanvasOpenBtn").on("click",se);/*! js-cookie v3.0.5 | MIT */function T(e){for(var o=1;o<arguments.length;o++){var t=arguments[o];for(var a in t)e[a]=t[a]}return e}var le={read:function(e){return e[0]==='"'&&(e=e.slice(1,-1)),e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}};function P(e,o){function t(i,d,n){if(!(typeof document>"u")){n=T({},o,n),typeof n.expires=="number"&&(n.expires=new Date(Date.now()+n.expires*864e5)),n.expires&&(n.expires=n.expires.toUTCString()),i=encodeURIComponent(i).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape);var u="";for(var m in n)n[m]&&(u+="; "+m,n[m]!==!0&&(u+="="+n[m].split(";")[0]));return document.cookie=i+"="+e.write(d,i)+u}}function a(i){if(!(typeof document>"u"||arguments.length&&!i)){for(var d=document.cookie?document.cookie.split("; "):[],n={},u=0;u<d.length;u++){var m=d[u].split("="),E=m.slice(1).join("=");try{var C=decodeURIComponent(m[0]);if(n[C]=e.read(E,C),i===C)break}catch{}}return i?n[i]:n}}return Object.create({set:t,get:a,remove:function(i,d){t(i,"",T({},d,{expires:-1}))},withAttributes:function(i){return P(this.converter,T({},this.attributes,i))},withConverter:function(i){return P(T({},this.converter,i),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(e)}})}var g=P(le,{path:"/"});let S=g.get("cookieConsent");$(window).on("scroll load resize",function(){var e=$(window).width(),o=$(".hamburgerMenu").css("position"),t=$(window).height(),a=$(window).scrollTop();e<=1200&&(o==="absolute"&&(a>=t?($("#navbar2").css("background","rgb(35 48 56 / 70%)"),$("#navbar2").css("position","fixed")):$("#navbar2").css("background","transparent")),o==="fixed"&&a<t&&($("#navbar2").css("background","transparent!important"),$("#navbar2").css("position","absolute"))),e>1200&&a<t&&$(".navbar").css("background","rgb(35 48 56 / 100%)")});let Q={lazy:!0,slidesPerView:1,loop:!0,navigation:{nextEl:".heroSwiperNext",prevEl:".heroSwiperPrev"}};S&&(Q.autoplay={delay:4e3,disableOnInteraction:!1});var de=new Swiper(".heroTopSwiper",Q);const ue=document.querySelector(".inclusiveSlider");var ee={lazy:!0,loop:!0,pagination:{clickable:"true",el:".swiper-pagination-horizontal",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},breakpoints:{1:{slidesPerView:1,spaceBetween:0},835:{slidesPerView:1.5,spaceBetween:20}},navigation:{nextEl:".inclusive-next",prevEl:".inclusive-prev"},lazyPreloadPrevNext:0};S&&(ee.autoplay={delay:4e3,disableOnInteraction:!1});new Swiper(ue,ee);const pe=document.querySelector(".childrenSlider");let te={lazy:!0,loopedSlides:7,initialSlide:4,breakpoints:{1:{slidesPerView:1,spaceBetween:0,centeredSlides:!1},576:{slidesPerView:1.5,centeredSlides:!0,spaceBetween:30},1200:{slidesPerView:1.75,centeredSlides:!0,spaceBetween:30}},loop:!0,pagination:{el:".swiper-pagination",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},navigation:{nextEl:"#children-next",prevEl:"#children-prev"}};S&&(te.autoplay={delay:4e3,disableOnInteraction:!1});new Swiper(pe,te);if(576>=$(window).width())var q=$(".homeSpecialOffer").width(),oe=q/345;else var q=$(".homeSpecialOffer").width(),oe=q/439;const he=document.querySelector(".specialOfferSlider");let ne={lazy:!0,slidesPerView:oe,initialSlide:1,pagination:{el:".swiper-pagination",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},on:{sliderMove:function(){$(".radialBgImg").css("visibility","hidden")},slideChange:function(){$(".radialBgImg").css("visibility","visible")}},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},on:{resize:function(){if(576>=$(window).width())var e=$(".homeSpecialOffer").width(),o=e/345;else var e=$(".homeSpecialOffer").width(),o=e/439;J.params.slidesPerView=o,J.update()}}};S&&(ne.autoplay={delay:4e3,disableOnInteraction:!1});var J=new Swiper(he,ne);const Y=document.querySelector(".gastronomySwiper");let ie={lazy:!0,slidesPerView:1,loop:!0,pagination:{el:".swiper-pagination",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}};S&&(ie.autoplay={delay:4e3,disableOnInteraction:!1});Y&&new Swiper(Y,ie);const H=document.querySelector(".homeServicesSlider");H&&new Swiper(H,{lazy:!0,slidesPerView:1,loop:!0,navigation:{nextEl:".swiper-button-nextSlide",prevEl:".swiper-button-previous"}});$(window).width();var U=$(".Roomswiper").width();if($(window).width()>576)var ae=U/441;else var ae=U/356;let z={lazy:!0,slidesPerView:ae,initialSlide:0,pagination:{el:".swiper-pagination",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},navigation:{nextEl:"#room-swiper-next"},on:{resize:function(){if(576>=$(window).width())var e=$(".Roomswiper").width(),o=e/356;else var e=$(".Roomswiper").width(),o=e/441;W.params.slidesPerView=o,W.update()}}};S&&(z.autoplay={delay:4e3,disableOnInteraction:!1},z.breakpoints={1:{autoplay:{delay:4e3}},1600:{autoplay:!1}});var W=new Swiper(".Roomswiper",z);const G=document.querySelector(".homeBrandSlider");G&&new Swiper(G);const K=document.querySelector(".travelSlider");K&&new Swiper(K,{lazy:!0,loop:!0,pagination:{el:".swiper-pagination",renderBullet:function(e,o){return'<span class="'+o+' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'}},autoplay:{delay:2e3},breakpoints:{1:{slidesPerView:1},576:{slidesPerView:2},768:{slidesPerView:3},1024:{slidesPerView:3},1281:{slidesPerView:4}}});var fe=new Date,O=fe.toISOString().split("T")[0],v=new Date;v.setDate(v.getDate()+1);v=v.toISOString().split("T")[0];var _=v,N=O;document.querySelector("#checkin");document.querySelector("#checkout");var y=window.location.href,b=null;(y=y.substr(y.length-2))==="ru"&&(b={firstDayOfWeek:1,weekdays:{shorthand:["Вс","Пн","Вт","Ср","Чт","Пт","Сб"],longhand:["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"]},months:{shorthand:["Янв","Фев","Март","Апр","Май","Июнь","Июль","Авг","Сен","Окт","Ноя","Дек"],longhand:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"]}}),y==="tr"&&(b={firstDayOfWeek:1,weekdays:{longhand:["Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi"],shorthand:["Paz","Pzt","Sal","Çar","Per","Cum","Cmt"]},months:{longhand:["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"],shorthand:["Oca","Şub","Mar","Nis","May","Haz","Tem","Ağu","Eyl","Eki","Kas","Ara"]}}),y==="de"&&(b={firstDayOfWeek:1,weekdays:{shorthand:["So","Mo","Di","Mi","Do","Fr","Sa"],longhand:["Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag"]},months:{shorthand:["Jan","Feb","Mär","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"],longhand:["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"]}}),y==="en"||y==="m/"&&(b={weekdays:{shorthand:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],longhand:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]},months:{shorthand:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],longhand:["January","February","March","April","May","June","July","August","September","October","November","December"]}});var re="";flatpickr("#checkin",{dateFormat:"Y-m-d",minDate:O,altInputClass:"selectedDateFirst",defaultDate:O,locale:b,onReady:function(e,o,t){t.mobileInput&&t.mobileInput.setAttribute("tabindex","0"),t._input.setAttribute("tabindex","0"),v=new Date(v),v.setDate(v.getDate()+1),v=t.formatDate(v,"Y-m-d"),$(".flatpickr-calendar").addClass("firstCalendar")},onChange:function(e,o,t){var a=e[0];I.set("minDate",t.formatDate(e[0],"Y-m-d")),I.setDate(t.formatDate(a,"Y-m-d")),N=t.formatDate(e[0],"Y-m-d"),V=t.formatDate(e[0],"Y-m-d"),$(".firstCalendar").addClass("active")},onClose:function(e,o,t){N=t.formatDate(e[0],"Y-m-d"),re=$(".flatpickr-day.selected").html(),I.open(),$(".firstCalendar").removeClass("active"),k()}});var I=flatpickr("#checkout",{dateFormat:"Y-m-d",defaultDate:v,minDate:O,locale:b,onReady:function(e,o,t){t.mobileInput&&t.mobileInput.setAttribute("tabindex","0"),t._input.setAttribute("tabindex","0"),k(),$(".flatpickr-calendar").addClass("secondCalendar")},onOpen:function(e,o,t){$("#checkout").html(_),$(".secondCalendar").addClass("active")},onChange:function(e,o,t){e[0],_=t.formatDate(e[0],"Y-m-d"),k()},onClose:function(e,o,t){V=t.formatDate(e[0],"Y-m-d"),$(".flatpickr-day").each(function(){$(this).html()===re&&$(this).addClass("firstSelectedDay")}),$("#checkout").html(V),k(),$(".secondCalendar").removeClass("active")}}),D=3;let me=document.querySelector(".guests");document.querySelector(".guestMenu");document.querySelector(".booking");document.querySelector("body");if(me){var V,b,D;document.querySelector("#adultCount").innerText=D,$(".adult-item").on("click",function(t){D=t.target.value,$("#adultCount").html(D),k()});var F=0;document.querySelector("#childCount").innerText=F,$(".child-item").on("click",function(t){var a=t.target.value;F=a,$(".childAgeItem").css("display","none");for(var i=1;i<=a;i++)$(".child-age-item-"+i).css("display","flex"),window["childAge"+i]===""&&(window["childAge"+i]=0);$("#childCount").text(a),k()}),$(".child-age-item").on("click",function(t){var a=$(this).closest(".childAgeItem").index()+1,i=t.target.value,d="childAge"+a;window[d]=i,$(`.child-age-item-${a} .child-age-count`).html(i),k()})}function k(){for(var e=[],o=1;o<=F;o++)e.push(window["childAge"+o]);var t=F>0?"&ChildAges="+e.join("+"):"";$(".bookNow").attr("href","https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin="+N+"&Checkout="+_+"&Adult="+D+t)}function X(){$(" .subChildrenText, .serviceDetail p").not(".swiper-title").each(function(){for(var e=$(this).clone().css({visibility:"hidden",width:"auto"}).appendTo($(this).parent()),o=Math.max($(this).width(),$(e).width()),t=o,a=$(e).height();$(e).height()==a&&t>0;)o=t,t--,$(e).width(t);$(this).width(o),$(e).remove()})}$(window).resize(X),$(document).ready(function(){X()}),$(document).ready(function(){lc_lightbox(".lightbox-childrenSliderLink ")});function we(e){e.autoplay.stop(),e.autoplay.delay=4e3,e.autoplay.start()}let Z=0;$(".cookieBtn").click(function(){$(".cookieBtn").removeClass("active"),$(this).addClass("active"),Z=$(this).index(),$(".cookieRightT").addClass("hide"),$(".cookieRightT").eq(Z).removeClass("hide");var e=$("#infoText");$(this).text().trim(),e.show()});$(".cookieSwitch").change(function(){let e=$(this).closest(".switchContainer").find("label");$(this).is(":checked")?e.text("Active").removeClass("deactivated"):e.text("Disabled").addClass("deactivated")});var L=document.documentElement;$(document).ready(function(){var e=$(".cookieBtn.active").text().trim();$("#infoText").show();let o=g.get("cookieConsent"),t=g.get("port_c_p"),a=g.get("port_c_f"),i=g.get("port_c_t");o=="true"?L.style.overflow="auto":L.style.overflow="hidden",$(".cookieSwitch").each(function(){let c=$(this).closest(".switchContainer").find("label");$(this).is(":checked")?c.text("Active").removeClass("deactivated"):c.text("Disabled").addClass("deactivated")}),$(".cookieDetailAccorHeader").on("click",function(){$(this).children("svg").toggleClass("rotate180");let c=$(this).next();if(c.hasClass("cdhidden")){let l=c.prop("scrollHeight");c.animate({height:l,opacity:1},300),c.removeClass("cdhidden")}else c.animate({height:0,opacity:0},300),c.addClass("cdhidden")});function d(c){(function(r,l,f,w,s){r[w]=r[w]||[],r[w].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var h=l.getElementsByTagName(f)[0],p=l.createElement(f),x=w!="dataLayer"?"&l="+w:"";p.async=!0,p.src="https://www.googletagmanager.com/gtm.js?id="+s+x,h.parentNode.insertBefore(p,h)})(window,document,"script","dataLayer",c)}function n(c){(function(r,l,f,w,s,h,p){r.GoogleAnalyticsObject=s,r[s]=r[s]||function(){(r[s].q=r[s].q||[]).push(arguments)},r[s].l=1*new Date,h=l.createElement(f),p=l.getElementsByTagName(f)[0],h.async=1,h.src=w,p.parentNode.insertBefore(h,p)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create",c,"auto"),ga("send","pageview")}function u(c){(function(r,l,f,w,s,h,p){r[s]=r[s]||function(){(r[s].a=r[s].a||[]).push(arguments)},r[s].l=1*new Date;for(var x=0;x<l.length;x++)h=l[x],p=f.createElement(w),p.async=1,p.src=h,document.head.appendChild(p)})(window,["//mc.yandex.ru/metrika/tag.js"],document,"script","ym"),ym(c,"init",{clickmap:!0,trackLinks:!0,accurateTrackBounce:!0})}function m(c){(function(r,l,f,w,s,h,p){r.fbq||(s=r.fbq=function(){s.callMethod?s.callMethod.apply(s,arguments):s.queue.push(arguments)},r._fbq||(r._fbq=s),s.push=s,s.loaded=!0,s.version="2.0",s.queue=[],h=l.createElement(f),h.async=!0,h.src=w,p=l.getElementsByTagName(f)[0],p.parentNode.insertBefore(h,p))})(window,document,"script","https://connect.facebook.net/en_US/fbevents.js"),fbq("init",c),fbq("track","PageView")}var E="GTM-TZ53DS5",C="G-FH87DE17XF",M=92210931,R="721299109355968";t=="true"&&(n(C),u(M)),a=="true"&&d(E),i=="true"&&m(R),$(".cookieA").on("click",function(){L.style.overflow="auto",$("#customizeCookie").modal("hide"),$(".cookieConstentContainer").hide(),$(".cookieBackdrop").hide(),$(".cookieModal");let c=[];g.set("cookieConsent","true",{expires:365});let r=this.classList;r.contains("caD")?$(".cookieRight").find("input").each(function(w){this.checked?c.push(!0):c.push(!1)}):r.contains("caM")?$(".cookieBodyMobile").find("input").each(function(w){this.checked?c.push(!0):c.push(!1)}):r.contains("cda")&&(c=[!0,!0,!0,!0]),c.forEach(function(l,f){switch(f){case 0:break;case 1:l==!0?(n(C),u(M),g.set("port_c_p","true",{expires:365})):g.set("port_c_p","false",{expires:365});break;case 2:l==!0?(d(E),g.set("port_c_f","true",{expires:365})):g.set("port_c_f","false",{expires:365});break;case 3:l==!0?(m(R),g.set("port_c_t","true",{expires:365})):g.set("port_c_t","false",{expires:365});break}}),we(de)})});$("#contactForm2").length&&document.getElementById("contactForm2").addEventListener("submit",function(e){var o=document.forms.contactForm.name.value,t=document.forms.contactForm.email.value,a=document.forms.contactForm.message.value;(o==""||t==""||a=="")&&(e.preventDefault(),document.getElementById("alert").classList.remove("d-none"))});window.addEventListener("DOMContentLoaded",e=>{(function(){var o="6f018acb-a187-48be-a07e-a301d318af36",t="#075695",a="iframe",i=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(n){return typeof n}:function(n){return n&&typeof Symbol=="function"&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n};function d(){var n=document.createElement("script");n.type="text/javascript",n.async="true",n.src="/assets/frontend/libs/js/livechat.js";var u=document.createElement("link");u.rel="stylesheet",u.href="https://portnature.com.tr/assets/frontend/css/chatbox.css";var m=document.getElementsByTagName("script")[0];document.head.appendChild(u),m.parentNode.insertBefore(n,m)}window.attachEvent?window.attachEvent("onload",d):window.addEventListener("load",d,!1),window.initLivechat=function(){i(window.LiveChat)==="object"&&window.LiveChat.boot({uuid:o,baseColor:t,containerElement:a})}})()});if(typeof pageHasContactForm<"u"&&pageHasContactForm){let e=document.querySelectorAll(".acceptTermsCheckbox"),o=document.querySelectorAll('form[name="contactForm"]');e.forEach(function(t){t.removeEventListener("change",function(){}),t.addEventListener("change",function(){this.checked?this.closest("form").querySelector('input[type="submit"]').disabled=!1:this.closest("form").querySelector('input[type="submit"]').disabled=!0})}),o.forEach(function(t){t.removeEventListener("submit",function(){}),t.addEventListener("submit",function(a){a.preventDefault();let i=document.getElementById("name"),d=document.getElementById("email"),n=document.getElementById("message"),u=document.getElementById("alert");i.value==""||d.value==""||n.value==""?u.classList.remove("d-none"):this.submit()})})}
