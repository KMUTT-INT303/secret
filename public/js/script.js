!function(n){var t={};function e(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return n[r].call(o.exports,o,o.exports,e),o.l=!0,o.exports}e.m=n,e.c=t,e.d=function(n,t,r){e.o(n,t)||Object.defineProperty(n,t,{enumerable:!0,get:r})},e.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},e.t=function(n,t){if(1&t&&(n=e(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var r=Object.create(null);if(e.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)e.d(r,o,function(t){return n[t]}.bind(null,o));return r},e.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,"a",t),t},e.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},e.p="/",e(e.s=1)}({1:function(n,t,e){e("RVOg"),n.exports=e("lQQY")},RVOg:function(n,t){$(document).ready((function(){$.getJSON("https://lotto.api.rayriffy.com/latest",(function(n){console.log(n),$("#firstReward").html(n.response.prizes[0].number[0])}))}))},lQQY:function(n,t){$(document).ready((function(){function n(n,t){return Math.floor(Math.random()*(t-n+1))+n}function t(e){return e<10&&"00"==(e="0"+e)?t(n(0,99)):e}function e(t){if(t<10){if("000"==(t="00"+t))return e(n(0,999))}else t<100&&(t="0"+t);return t}$("#view-n").click((function(){$("#recommended-first-n").html(n(0,9)),$("#recommended-second-n").html(n(0,9)),$("#2d-n-n1").html(t(n(0,99))),$("#2d-n-n2").html(t(n(0,99))),$("#2d-n-n3").html(t(n(0,99))),$("#2d-n-n4").html(t(n(0,99))),$("#2d-n-n5").html(t(n(0,99))),$("#2d-n-n6").html(t(n(0,99))),$("#3d-n-n1").html(e(n(0,999))),$("#3d-n-n2").html(e(n(0,999))),$("#3d-n-n3").html(e(n(0,999))),$("#3d-n-n4").html(e(n(0,999))),$("#3d-n-n5").html(e(n(0,999))),$("#3d-n-n6").html(e(n(0,999)))}))}))}});