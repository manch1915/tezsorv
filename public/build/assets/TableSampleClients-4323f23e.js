import{u as A}from"./main-268c7f38.js";import{m as E,a as j}from"./mdi-e7275ea8.js";import{_ as P}from"./CardBoxModal-fb8b90ab.js";import{_ as F}from"./TableCheckboxCell-5f715680.js";import{_ as U,a as z}from"./LayoutAuthenticated-9f882467.js";import{_ as k,a as $}from"./BaseButtons-3ebfabad.js";import{h as m,y as _,o as a,f as s,a as o,w as h,F as p,z as y,t as n,g as w,b as l,c as N,u as d,d as B}from"./app-21f7968e.js";const H=l("p",null,[B("Lorem ipsum dolor sit amet "),l("b",null,"adipiscing elit")],-1),q=l("p",null,"This is sample modal",-1),G=l("p",null,[B("Lorem ipsum dolor sit amet "),l("b",null,"adipiscing elit")],-1),I=l("p",null,"This is sample modal",-1),J={key:0,class:"p-3 bg-gray-100/50 dark:bg-slate-800"},K={key:0},O=l("th",null,null,-1),Q=l("th",null,"Name",-1),R=l("th",null,"Company",-1),W=l("th",null,"City",-1),X=l("th",null,"Progress",-1),Y=l("th",null,"Created",-1),Z=l("th",null,null,-1),ee={class:"border-b-0 lg:w-6 before:hidden"},le={"data-label":"Name"},te={"data-label":"Company"},ae={"data-label":"City"},se={"data-label":"Progress",class:"lg:w-32"},oe=["value"],ne={"data-label":"Created",class:"lg:w-1 whitespace-nowrap"},re=["title"],ue={class:"before:hidden lg:w-1 whitespace-nowrap"},ie={class:"p-3 lg:px-6 border-t border-gray-100 dark:border-slate-800"},ge={__name:"TableSampleClients",props:{checkable:Boolean},setup(C){const x=A();x.fetchClients();const f=m(()=>x.clients);console.log(f.value);const g=_(!1),v=_(!1),b=_(5),i=_(0),c=_([]),L=m(()=>f.value.slice(b.value*i.value,b.value*(i.value+1))),V=m(()=>Math.ceil(f.value.length/b.value)),S=m(()=>i.value+1),T=m(()=>{const r=[];for(let t=0;t<V.value;t++)r.push(t);return r}),D=(r,t)=>{const e=[];return r.forEach(u=>{t(u)||e.push(u)}),e},M=(r,t)=>{r?c.value.push(t):c.value=D(c.value,e=>e.id===t.id)};return(r,t)=>(a(),s(p,null,[o(P,{modelValue:g.value,"onUpdate:modelValue":t[0]||(t[0]=e=>g.value=e),title:"Sample modal"},{default:h(()=>[H,q]),_:1},8,["modelValue"]),o(P,{modelValue:v.value,"onUpdate:modelValue":t[1]||(t[1]=e=>v.value=e),title:"Please confirm",button:"danger","has-cancel":""},{default:h(()=>[G,I]),_:1},8,["modelValue"]),c.value.length?(a(),s("div",J,[(a(!0),s(p,null,y(c.value,e=>(a(),s("span",{key:e.id,class:"inline-block px-2 py-1 rounded-sm mr-2 text-sm bg-gray-100 dark:bg-slate-700"},n(e.name),1))),128))])):w("",!0),l("table",null,[l("thead",null,[l("tr",null,[C.checkable?(a(),s("th",K)):w("",!0),O,Q,R,W,X,Y,Z])]),l("tbody",null,[(a(!0),s(p,null,y(d(L),e=>(a(),s("tr",{key:e.id},[C.checkable?(a(),N(F,{key:0,onChecked:u=>M(u,e)},null,8,["onChecked"])):w("",!0),l("td",ee,[o(U,{username:e.name,class:"w-24 h-24 mx-auto lg:w-6 lg:h-6"},null,8,["username"])]),l("td",le,n(e.name),1),l("td",te,n(e.company),1),l("td",ae,n(e.city),1),l("td",se,[l("progress",{class:"flex w-2/5 self-center lg:w-full",max:"100",value:e.progress},n(e.progress),9,oe)]),l("td",ne,[l("small",{class:"text-gray-500 dark:text-slate-400",title:e.created},n(e.created),9,re)]),l("td",ue,[o($,{type:"justify-start lg:justify-end","no-wrap":""},{default:h(()=>[o(k,{color:"info",icon:d(E),small:"",onClick:t[2]||(t[2]=u=>g.value=!0)},null,8,["icon"]),o(k,{color:"danger",icon:d(j),small:"",onClick:t[3]||(t[3]=u=>v.value=!0)},null,8,["icon"])]),_:1})])]))),128))])]),l("div",ie,[o(z,null,{default:h(()=>[o($,null,{default:h(()=>[(a(!0),s(p,null,y(d(T),e=>(a(),N(k,{key:e,active:e===i.value,label:e+1,color:e===i.value?"lightDark":"whiteDark",small:"",onClick:u=>i.value=e},null,8,["active","label","color","onClick"]))),128))]),_:1}),l("small",null,"Page "+n(d(S))+" of "+n(d(V)),1)]),_:1})])],64))}};export{ge as _};
