!function(n){var e={};function r(t){if(e[t])return e[t].exports;var u=e[t]={i:t,l:!1,exports:{}};return n[t].call(u.exports,u,u.exports,r),u.l=!0,u.exports}r.m=n,r.c=e,r.d=function(n,e,t){r.o(n,e)||Object.defineProperty(n,e,{enumerable:!0,get:t})},r.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},r.t=function(n,e){if(1&e&&(n=r(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(r.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var u in n)r.d(t,u,function(e){return n[e]}.bind(null,u));return t},r.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return r.d(e,"a",e),e},r.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},r.p="/",r(r.s=1)}({1:function(n,e,r){r("RVOg"),n.exports=r("lQQY")},RVOg:function(n,e){$(document).ready((function(){function n(n){return n.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,"$1,")}$.getJSON("https://lotto.api.rayriffy.com/latest",(function(e){$("#first-t").html(e.response.prizes[0].name),$("#first-r").html(n(e.response.prizes[0].reward)+" บาท"),$("#first-n").html(e.response.prizes[0].number[0]),$("#f-prefix-t").html(e.response.runningNumbers[0].name),$("#f-prefix-r").html(n(e.response.runningNumbers[0].reward)+" บาท"),$("#f-prefix-n").html(e.response.runningNumbers[0].number[0]),$("#s-prefix-n").html(e.response.runningNumbers[0].number[1]),$("#f-suffix-t").html(e.response.runningNumbers[1].name),$("#f-suffix-r").html(n(e.response.runningNumbers[1].reward)+" บาท"),$("#f-suffix-n").html(e.response.runningNumbers[1].number[0]),$("#s-suffix-n").html(e.response.runningNumbers[1].number[1]),$("#t-suffix-t").html(e.response.runningNumbers[2].name),$("#t-suffix-r").html(n(e.response.runningNumbers[2].reward)+" บาท"),$("#t-suffix-n").html(e.response.runningNumbers[2].number[0])}))}))},lQQY:function(n,e){$(document).ready((function(){function n(n,e){return Math.floor(Math.random()*(e-n+1))+n}function e(r){return r<10&&"00"==(r="0"+r)?e(n(0,99)):r}function r(e){if(e<10){if("000"==(e="00"+e))return r(n(0,999))}else e<100&&(e="0"+e);return e}$("#view-n").click((function(){$("#recommended-first-n").html(n(0,9)),$("#recommended-second-n").html(n(0,9)),$("#2d-n-n1").html(e(n(0,99))),$("#2d-n-n2").html(e(n(0,99))),$("#2d-n-n3").html(e(n(0,99))),$("#2d-n-n4").html(e(n(0,99))),$("#2d-n-n5").html(e(n(0,99))),$("#2d-n-n6").html(e(n(0,99))),$("#3d-n-n1").html(r(n(0,999))),$("#3d-n-n2").html(r(n(0,999))),$("#3d-n-n3").html(r(n(0,999))),$("#3d-n-n4").html(r(n(0,999))),$("#3d-n-n5").html(r(n(0,999))),$("#3d-n-n6").html(r(n(0,999)))}))}))}});