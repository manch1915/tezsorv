import{i as r}from"./mdi-e7275ea8.js";import{_ as s}from"./BaseIcon-e9972e82.js";import{_ as u}from"./BaseButtons-3ebfabad.js";import{c as m,e as f}from"./colors-9bb9d49f.js";import{o as e,c as a,n as i,u as n,h as d,N as g,f as h,b as c,g as y,t as S,r as k}from"./app-21f7968e.js";const x={__name:"IconRounded",props:{icon:{type:String,required:!0},color:{type:String,default:null},w:{type:String,default:"w-12"},h:{type:String,default:"h-12"},bg:Boolean},setup(t){return(l,o)=>(e(),a(s,{path:t.icon,w:t.w,h:t.h,size:"24",class:i(["rounded-full",t.bg?n(m)[t.color]:[n(f)[t.color],"bg-gray-50 dark:bg-slate-800"]])},null,8,["path","w","h","class"]))}},b={class:"flex items-center justify-start"},j={__name:"SectionTitleLineWithButton",props:{icon:{type:String,default:null},title:{type:String,required:!0},main:Boolean},setup(t){const l=d(()=>g().default);return(o,B)=>(e(),h("section",{class:i([{"pt-6":!t.main},"mb-6 flex items-center justify-between"])},[c("div",b,[t.icon&&t.main?(e(),a(x,{key:0,icon:t.icon,color:"light",class:"mr-3",bg:""},null,8,["icon"])):t.icon?(e(),a(s,{key:1,path:t.icon,class:"mr-2",size:"20"},null,8,["path"])):y("",!0),c("h1",{class:i([t.main?"text-3xl":"text-2xl","leading-tight"])},S(t.title),3)]),n(l)?k(o.$slots,"default",{key:0}):(e(),a(u,{key:1,icon:n(r),color:"whiteDark"},null,8,["icon"]))],2))}};export{j as _,x as a};
