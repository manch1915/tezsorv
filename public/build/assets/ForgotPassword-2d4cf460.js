import{v as d,c as u,w as i,o as r,a as t,u as s,G as c,f as _,t as f,g as p,b as a,d as w,n as g,e as b}from"./app-21f7968e.js";import{_ as y}from"./GuestLayout-b6525fb3.js";import{_ as x}from"./InputError-ba28e0ea.js";import{_ as k,a as h}from"./TextInput-b08c3aff.js";import{_ as v}from"./PrimaryButton-a0c2329b.js";import"./ApplicationLogo-e1ffcc12.js";import"./_plugin-vue_export-helper-c27b6911.js";const V=a("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),N={key:0,class:"mb-4 font-medium text-sm text-green-600"},$=["onSubmit"],B={class:"flex items-center justify-end mt-4"},D={__name:"ForgotPassword",props:{status:String},setup(o){const e=d({email:""}),m=()=>{e.post(route("password.email"))};return(S,l)=>(r(),u(y,null,{default:i(()=>[t(s(c),{title:"Forgot Password"}),V,o.status?(r(),_("div",N,f(o.status),1)):p("",!0),a("form",{onSubmit:b(m,["prevent"])},[a("div",null,[t(k,{for:"email",value:"Email"}),t(h,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":l[0]||(l[0]=n=>s(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),t(x,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),a("div",B,[t(v,{class:g({"opacity-25":s(e).processing}),disabled:s(e).processing},{default:i(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,$)]),_:1}))}};export{D as default};
