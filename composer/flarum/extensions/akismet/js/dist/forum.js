(()=>{var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var o in r)e.o(r,o)&&!e.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:r[o]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};(()=>{"use strict";e.r(t);const r=flarum.reg.get("core","common/extend"),o=flarum.reg.get("core","forum/app");var a=e.n(o);const n=flarum.reg.get("core","forum/utils/PostControls");var s=e.n(n);const l=flarum.reg.get("core","forum/components/Post");var u=e.n(l);a().initializers.add("flarum-akismet",(()=>{(0,r.extend)(s(),"destructiveControls",(function(e,t){if(e.has("approve")){const r=t.flags();if(r&&r.some((e=>"akismet"===(null==e?void 0:e.type())))){const t=e.get("approve");t&&"object"==typeof t&&"children"in t&&(t.children=a().translator.trans("flarum-akismet.forum.post.not_spam_button"))}}})),(0,r.override)(u().prototype,"flagReason",(function(e,t){return"akismet"===t.type()?a().translator.trans("flarum-akismet.forum.post.akismet_flagged_text"):e(t)}))}))})(),module.exports=t})();
//# sourceMappingURL=forum.js.map