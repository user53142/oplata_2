!function(c){function e(e){for(var t,n,r=e[0],o=e[1],i=e[2],u=0,a=[];u<r.length;u++)n=r[u],s[n]&&a.push(s[n][0]),s[n]=0;for(t in o)Object.prototype.hasOwnProperty.call(o,t)&&(c[t]=o[t]);for(d&&d(e);a.length;)a.shift()();return l.push.apply(l,i||[]),f()}function f(){for(var e,t=0;t<l.length;t++){for(var n=l[t],r=!0,o=1;o<n.length;o++){var i=n[o];0!==s[i]&&(r=!1)}r&&(l.splice(t--,1),e=u(u.s=n[0]))}return e}var n={},s={bc15d106:0},l=[];function u(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return c[e].call(t.exports,t,t.exports,u),t.l=!0,t.exports}u.m=c,u.c=n,u.d=function(e,t,n){u.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},u.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},u.t=function(t,e){if(1&e&&(t=u(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(u.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)u.d(n,r,function(e){return t[e]}.bind(null,r));return n},u.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return u.d(t,"a",t),t},u.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},u.p="https://www.avito.st/s/cc/";var t=window.webpackJsonp=window.webpackJsonp||[],r=t.push.bind(t);t.push=e,t=t.slice();for(var o=0;o<t.length;o++)e(t[o]);var d=r;l.push([2088,"7e125359","f6a853bc"]),f()}({154:function(e,t){e.exports=function(e){return e.webpackPolyfill||(e.deprecate=function(){},e.paths=[],e.children||(e.children=[]),Object.defineProperty(e,"loaded",{enumerable:!0,get:function(){return e.l}}),Object.defineProperty(e,"id",{enumerable:!0,get:function(){return e.i}}),e.webpackPolyfill=1),e}},2088:function(e,t,n){e.exports=n(5175)},214:function(e,t){var n,r,o=e.exports={};function i(){throw new Error("setTimeout has not been defined")}function u(){throw new Error("clearTimeout has not been defined")}function a(t){if(n===setTimeout)return setTimeout(t,0);if((n===i||!n)&&setTimeout)return n=setTimeout,setTimeout(t,0);try{return n(t,0)}catch(e){try{return n.call(null,t,0)}catch(e){return n.call(this,t,0)}}}!function(){try{n="function"==typeof setTimeout?setTimeout:i}catch(e){n=i}try{r="function"==typeof clearTimeout?clearTimeout:u}catch(e){r=u}}();var c,f=[],s=!1,l=-1;function d(){s&&c&&(s=!1,c.length?f=c.concat(f):l=-1,f.length&&p())}function p(){if(!s){var e=a(d);s=!0;for(var t=f.length;t;){for(c=f,f=[];++l<t;)c&&c[l].run();l=-1,t=f.length}c=null,s=!1,function(t){if(r===clearTimeout)return clearTimeout(t);if((r===u||!r)&&clearTimeout)return r=clearTimeout,clearTimeout(t);try{r(t)}catch(e){try{return r.call(null,t)}catch(e){return r.call(this,t)}}}(e)}}function w(e,t){this.fun=e,this.array=t}function h(){}o.nextTick=function(e){var t=new Array(arguments.length-1);if(1<arguments.length)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];f.push(new w(e,t)),1!==f.length||s||a(p)},w.prototype.run=function(){this.fun.apply(null,this.array)},o.title="browser",o.browser=!0,o.env={},o.argv=[],o.version="",o.versions={},o.on=h,o.addListener=h,o.once=h,o.off=h,o.removeListener=h,o.removeAllListeners=h,o.emit=h,o.prependListener=h,o.prependOnceListener=h,o.listeners=function(e){return[]},o.binding=function(e){throw new Error("process.binding is not supported")},o.cwd=function(){return"/"},o.chdir=function(e){throw new Error("process.chdir is not supported")},o.umask=function(){return 0}},346:function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},749:function(e,t,n){var u=n(750),a=n(751);e.exports=function(e,t,n){var r=t&&n||0;"string"==typeof e&&(t="binary"===e?new Array(16):null,e=null);var o=(e=e||{}).random||(e.rng||u)();if(o[6]=15&o[6]|64,o[8]=63&o[8]|128,t)for(var i=0;i<16;++i)t[r+i]=o[i];return t||a(o)}},750:function(e,t){var n="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof window.msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto);if(n){var r=new Uint8Array(16);e.exports=function(){return n(r),r}}else{var o=new Array(16);e.exports=function(){for(var e,t=0;t<16;t++)0==(3&t)&&(e=4294967296*Math.random()),o[t]=e>>>((3&t)<<3)&255;return o}}},751:function(e,t){for(var o=[],n=0;n<256;++n)o[n]=(n+256).toString(16).substr(1);e.exports=function(e,t){var n=t||0,r=o;return[r[e[n++]],r[e[n++]],r[e[n++]],r[e[n++]],"-",r[e[n++]],r[e[n++]],"-",r[e[n++]],r[e[n++]],"-",r[e[n++]],r[e[n++]],"-",r[e[n++]],r[e[n++]],r[e[n++]],r[e[n++]],r[e[n++]],r[e[n++]]].join("")}},932:function(e,t,n){"use strict";var r,o,i=n(749),u=n.n(i);if("undefined"==typeof window)r=function(){return new Promise(function(e){return e({})})};else{var a="last-ref-id",c=window.location.origin;window.performance&&window.performance.navigation&&1===window.performance.navigation.type||(o=c,window.document.referrer&&window.document.referrer.startsWith(o))||window.localStorage.removeItem(a),window.sessionStorage.tabId=window.sessionStorage.tabId||u()();var f=window.sessionStorage.tabId,s=function(){var e=window.localStorage.getItem(a),t=u()();return window.localStorage.setItem(a,t),{refId:t,parentRefId:e,tabId:f}};r=function(e,t){var n=1<arguments.length&&void 0!==t?t:"/events/add";for(var r in e)e.hasOwnProperty(r)&&null===e[r]&&(e[r]=void 0);var o=s(),i=o.refId,u=o.parentRefId,a=o.tabId;return e.ref_id=i||"",e.parent_ref_id=u||"",e.tab_id=a||"",fetch(n,{method:"post",headers:{"Content-type":"application/json; charset=UTF-8","X-Requested-With":"XMLHttpRequest"},credentials:"include",body:JSON.stringify(e)}).then(function(e){return 400<=e.status?Promise.reject(e):{response:e,refId:i,parentRefId:u,tabId:a}})}}t.a=r}});