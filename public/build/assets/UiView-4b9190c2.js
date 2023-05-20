import{y as v,h as b,E as L,c as P,w as e,o as R,a as o,d as f,b as t,u as l}from"./app-21f7968e.js";import{D as W,E as J,F as j,G as F,H as A,I as G,J as m,v as H,o as q}from"./mdi-e7275ea8.js";import{_ as h}from"./SectionMain-e4b59639.js";import{_}from"./CardBox-197f7a92.js";import{_ as n,a as p}from"./BaseButtons-3ebfabad.js";import{_ as k}from"./NotificationBar-f5b67f75.js";import{b as z,c as $}from"./LayoutAuthenticated-9f882467.js";import{_ as T,a as O}from"./CardBoxModal-fb8b90ab.js";import{_ as w}from"./SectionTitle-43ec8fe6.js";import{_ as M}from"./FormField-bec67a95.js";import{_ as I}from"./FormCheckRadioGroup-4bbab0f0.js";import{_ as K}from"./SectionTitleLineWithButton-b9d21891.js";import{C as Q}from"./CardBoxComponentEmpty-dfa30e4b.js";import{_ as y}from"./PillTag-3900f972.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./colors-9bb9d49f.js";import"./BaseIcon-e9972e82.js";import"./main-268c7f38.js";import"./FormControlIcon-a631dc1b.js";const X=t("p",null,"This is sample modal",-1),Y=t("p",null,"Lorem ipsum dolor",-1),Z=t("p",null,"This is sample modal",-1),ll=t("p",null,"Lorem ipsum dolor",-1),ol=t("p",null,"This is sample modal",-1),el=t("p",null,"Lorem ipsum dolor",-1),nl={class:"text-center py-24 lg:py-12 text-gray-500 dark:text-slate-400"},tl={class:"space-y-12"},il=t("div",{class:"space-y-3"},[t("p",null,"Click to see in action")],-1),al=t("div",{class:"space-y-3"},[t("p",null,"Click to see in action")],-1),ul=t("div",{class:"space-y-3"},[t("p",null,"Click to see in action")],-1),sl=t("h1",{class:"text-2xl text-gray-500 dark:text-slate-400"},"Notifications",-1),dl={class:"flex items-center justify-center mt-6"},rl=t("b",null,"Info state",-1),cl=t("b",null,"Success state",-1),ml=t("b",null,"Warning state",-1),fl=t("b",null,"Danger state",-1),_l=t("b",null,"Contrast",-1),bl={class:"grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2"},pl=t("div",{class:"space-y-3"},[t("p",null,"Card with title, icon & footer")],-1),Ll={__name:"UiView",setup(gl){const S=v(!1),D=v(!1),N=v(!1),U=v([]),c=b(()=>U.value.indexOf("outline")>-1),g=v([]),a=b(()=>g.value.indexOf("outline")>-1),u=b(()=>g.value.indexOf("small")>-1),s=b(()=>g.value.indexOf("disabled")>-1),d=b(()=>g.value.indexOf("rounded")>-1),x=v(["icon"]),C=b(()=>x.value.indexOf("outline")>-1),B=b(()=>x.value.indexOf("small")>-1),V=b(()=>x.value.indexOf("icon")>-1?q:null),E=L();return(vl,i)=>(R(),P(z,null,{default:e(()=>[o(T,{modelValue:S.value,"onUpdate:modelValue":i[0]||(i[0]=r=>S.value=r),title:"Please confirm action","button-label":"Confirm","has-cancel":""},{default:e(()=>[X,Y]),_:1},8,["modelValue"]),o(T,{modelValue:D.value,"onUpdate:modelValue":i[1]||(i[1]=r=>D.value=r),title:"Unhandled exception",button:"danger"},{default:e(()=>[Z,ll]),_:1},8,["modelValue"]),o(T,{modelValue:N.value,"onUpdate:modelValue":i[2]||(i[2]=r=>N.value=r),title:"Success",button:"success"},{default:e(()=>[ol,el]),_:1},8,["modelValue"]),o(w,{first:""},{default:e(()=>[f("Dark mode")]),_:1}),o(h,null,{default:e(()=>[o(_,{class:"md:w-7/12 lg:w-5/12 xl:w-4/12 shadow-2xl md:mx-auto"},{default:e(()=>[t("div",nl,[o(n,{label:"Toggle",color:"contrast",onClick:i[3]||(i[3]=r=>l(E).setDarkMode())})])]),_:1})]),_:1}),o(w,null,{default:e(()=>[f("Modal examples")]),_:1}),o(h,null,{default:e(()=>[t("div",tl,[o(_,{class:"cursor-pointer md:w-7/12 lg:w-5/12 shadow-2xl md:mx-auto","is-hoverable":"",onClick:i[4]||(i[4]=r=>S.value=!0)},{footer:e(()=>[o(p,null,{default:e(()=>[o(n,{label:"Confirm",color:"info"}),o(n,{label:"Cancel",color:"info",outline:""})]),_:1})]),default:e(()=>[o(O,{title:"Please confirm action"},{default:e(()=>[o(n,{icon:l(W),color:"whiteDark",small:"","rounded-full":""},null,8,["icon"])]),_:1}),il]),_:1}),o(_,{class:"cursor-pointer md:w-7/12 lg:w-5/12 shadow-2xl md:mx-auto","is-hoverable":"",onClick:i[5]||(i[5]=r=>D.value=!0)},{footer:e(()=>[o(p,null,{default:e(()=>[o(n,{label:"Done",color:"danger"})]),_:1})]),default:e(()=>[o(O,{title:"Unhandled exception"}),al]),_:1}),o(_,{class:"cursor-pointer md:w-7/12 lg:w-5/12 shadow-2xl md:mx-auto","is-hoverable":"",onClick:i[6]||(i[6]=r=>N.value=!0)},{footer:e(()=>[o(n,{label:"Done",color:"success"})]),default:e(()=>[o(O,{title:"Success"}),ul]),_:1})])]),_:1}),o(w,{custom:""},{default:e(()=>[sl,t("div",dl,[o(I,{modelValue:U.value,"onUpdate:modelValue":i[7]||(i[7]=r=>U.value=r),type:"switch",name:"notifications-switch",options:{outline:"Outline"}},null,8,["modelValue"])])]),_:1}),o(h,null,{default:e(()=>[o(k,{color:"info",icon:l(J),outline:l(c)},{right:e(()=>[o(n,{label:"Button",color:l(c)?"info":"white",outline:l(c),"rounded-full":"",small:""},null,8,["color","outline"])]),default:e(()=>[rl,f(". NotificationBar ")]),_:1},8,["icon","outline"]),o(k,{color:"success",icon:l(j),outline:l(c)},{right:e(()=>[o(n,{label:"Button",color:l(c)?"success":"white",outline:l(c),"rounded-full":"",small:""},null,8,["color","outline"])]),default:e(()=>[cl,f(". NotificationBar ")]),_:1},8,["icon","outline"]),o(k,{color:"warning",icon:l(F),outline:l(c)},{right:e(()=>[o(n,{label:"Button",color:l(c)?"warning":"white",outline:l(c),"rounded-full":"",small:""},null,8,["color","outline"])]),default:e(()=>[ml,f(". NotificationBar ")]),_:1},8,["icon","outline"]),o(k,{color:"danger",icon:l(A),outline:l(c)},{right:e(()=>[o(n,{label:"Button",color:l(c)?"danger":"white",outline:l(c),"rounded-full":"",small:""},null,8,["color","outline"])]),default:e(()=>[fl,f(". NotificationBar ")]),_:1},8,["icon","outline"]),o(k,{color:"contrast",icon:l(G),outline:l(c)},{default:e(()=>[_l,f(". NotificationBar ")]),_:1},8,["icon","outline"])]),_:1}),o(w,null,{default:e(()=>[f("Buttons")]),_:1}),o(h,null,{default:e(()=>[o(_,null,{default:e(()=>[o(M,{label:"Settings"},{default:e(()=>[o(I,{modelValue:g.value,"onUpdate:modelValue":i[8]||(i[8]=r=>g.value=r),name:"buttons-switch",type:"switch",options:{outline:"Outline",small:"Small",rounded:"Rounded",disabled:"Disabled"}},null,8,["modelValue"])]),_:1}),o($),o(p,null,{default:e(()=>[o(n,{color:"lightDark",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"]),o(n,{color:"contrast",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"]),o(n,{color:"info",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"]),o(n,{color:"success",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"]),o(n,{color:"warning",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"]),o(n,{color:"danger",label:"Button",small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["small","outline","disabled","rounded-full"])]),_:1}),o($),o(p,null,{default:e(()=>[o(n,{color:"lightDark",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"contrast",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"info",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"success",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"warning",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"danger",label:"Button",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"])]),_:1}),o($),o(p,null,{default:e(()=>[o(n,{color:"lightDark",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"contrast",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"info",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"success",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"warning",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"]),o(n,{color:"danger",icon:l(m),small:l(u),outline:l(a),disabled:l(s),"rounded-full":l(d)},null,8,["icon","small","outline","disabled","rounded-full"])]),_:1})]),_:1})]),_:1}),o(w,null,{default:e(()=>[f("Pills")]),_:1}),o(h,null,{default:e(()=>[o(_,null,{default:e(()=>[o(M,{label:"Settings"},{default:e(()=>[o(I,{modelValue:x.value,"onUpdate:modelValue":i[9]||(i[9]=r=>x.value=r),name:"buttons-switch",type:"switch",options:{outline:"Outline",small:"Small",icon:"Icon"}},null,8,["modelValue"])]),_:1}),o($),o(p,null,{default:e(()=>[o(y,{color:"contrast",label:"Contrast",small:l(B),outline:l(C),icon:l(V)},null,8,["small","outline","icon"]),o(y,{color:"info",label:"Info",small:l(B),outline:l(C),icon:l(V)},null,8,["small","outline","icon"]),o(y,{color:"success",label:"Success",small:l(B),outline:l(C),icon:l(V)},null,8,["small","outline","icon"]),o(y,{color:"warning",label:"Warning",small:l(B),outline:l(C),icon:l(V)},null,8,["small","outline","icon"]),o(y,{color:"danger",label:"Danger",small:l(B),outline:l(C),icon:l(V)},null,8,["small","outline","icon"])]),_:1})]),_:1})]),_:1}),o(w,null,{default:e(()=>[f("Cards")]),_:1}),o(h,null,{default:e(()=>[t("div",bl,[o(_,null,{footer:e(()=>[o(p,null,{default:e(()=>[o(n,{label:"Confirm",color:"info"}),o(n,{label:"Cancel",color:"info",outline:""})]),_:1})]),default:e(()=>[o(O,{title:"With title & icon"},{default:e(()=>[o(n,{icon:l(H),color:"whiteDark","rounded-full":""},null,8,["icon"])]),_:1}),pl]),_:1}),o(_,null,{footer:e(()=>[o(p,null,{default:e(()=>[o(n,{label:"Confirm",color:"info"}),o(n,{label:"Cancel",color:"info",outline:""})]),_:1})]),default:e(()=>[f(" Just body & footer ")]),_:1})]),o(K,{icon:l(A),title:"Empty variation"},null,8,["icon"]),o(_,null,{default:e(()=>[o(Q)]),_:1})]),_:1})]),_:1}))}};export{Ll as default};
