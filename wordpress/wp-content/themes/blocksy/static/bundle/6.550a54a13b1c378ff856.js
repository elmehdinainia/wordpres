(window.blocksyJsonP=window.blocksyJsonP||[]).push([[6],{28:function(r,t,e){"use strict";e.r(t),e.d(t,"mount",(function(){return a}));var n=e(0),o=e.n(n),s=e(8);const a=r=>{if(r.hasListener)return;r.hasListener=!0;const t=()=>{var r=document.querySelector(".ct-back-to-top");r&&(window.scrollY>500?r.classList.add("ct-show"):r.classList.remove("ct-show"))};t(),o.a.on("ct:scroll:render-frame",()=>{t()}),r.addEventListener("click",r=>{r.preventDefault();var t=window.scrollY,e=null;const n=r=>{e||(e=r);var o=r-e;var s,a,c,i=Math.max((s=o,a=t,c=-t,(s/=700/2)<1?c/2*s*s+a:-c/2*(--s*(s-2)-1)+a),0);scrollTo(0,i),o<700&&requestAnimationFrame(n)};s.areWeDealingWithSafari?requestAnimationFrame(n):scrollTo(0,0)})}}}]);