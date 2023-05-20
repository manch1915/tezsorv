import{v as c,c as f,w as d,o as w,a as e,u as o,G as _,b as t,d as V,n as g,e as b}from"./app-21f7968e.js";import{_ as v}from"./GuestLayout-b6525fb3.js";import{_ as l}from"./InputError-ba28e0ea.js";import{_ as i,a as m}from"./TextInput-b08c3aff.js";import{_ as k}from"./PrimaryButton-a0c2329b.js";import"./ApplicationLogo-e1ffcc12.js";import"./_plugin-vue_export-helper-c27b6911.js";const x=["onSubmit"],y={class:"mt-4"},P={class:"mt-4"},$={class:"flex items-center justify-end mt-4"},j={__name:"ResetPassword",props:{email:String,token:String},setup(p){const n=p,s=c({token:n.token,email:n.email,password:"",password_confirmation:""}),u=()=>{s.post(route("password.store"),{onFinish:()=>s.reset("password","password_confirmation")})};return(S,a)=>(w(),f(v,null,{default:d(()=>[e(o(_),{title:"Reset Password"}),t("form",{onSubmit:b(u,["prevent"])},[t("div",null,[e(i,{for:"email",value:"Email"}),e(m,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:o(s).email,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).email=r),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),t("div",y,[e(i,{for:"password",value:"Password"}),e(m,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).password=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",P,[e(i,{for:"password_confirmation",value:"Confirm Password"}),e(m,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:o(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=r=>o(s).password_confirmation=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.password_confirmation},null,8,["message"])]),t("div",$,[e(k,{class:g({"opacity-25":o(s).processing}),disabled:o(s).processing},{default:d(()=>[V(" Reset Password ")]),_:1},8,["class","disabled"])])],40,x)]),_:1}))}};export{j as default};
