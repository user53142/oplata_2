!function(t){var r={};function o(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=t,o.c=r,o.d=function(e,n,t){o.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(n,e){if(1&e&&(n=o(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var r in n)o.d(t,r,function(e){return n[e]}.bind(null,r));return t},o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,"a",n),n},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o.p="https://www.avito.st/s/cc/",o(o.s=3890)}({3890:function(e,n,t){e.exports=t(72)},72:function(e,n){window.avito=window.avito||{},function(){"use strict";window.avito.simpleTemplate=function(e){return e=(e=e||"").trim().replace("|raw","").replace(/(?:\r\n|\r|\n)/g,"").replace(/{#(.*?)#}/g,"").replace(/{%\s*if\s*(.+?)\s*%}(.*?)({%\s*else\s*%}(.*?))?{%\s*endif\s*%}/g,"' + (values.$1 ? '$2' : '$4') + '").replace(/{{\s*(\w+?)\|plural\(([-'", \wа-яёА-ЯЁ]+)\)\s*}}/g,function(e,n,t){return"' + window.avito.i18n.plural(values."+n+", ["+t+"]) + '"}).replace(/{{\s*(\w+?)\s*}}/g,"' + (values.$1 !== undefined ? values.$1 : '') + '"),{render:new Function("values","return '"+e+"';")}}}()}});