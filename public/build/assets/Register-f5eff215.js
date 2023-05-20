import{v as f,c as g,w as o,o as v,a,u as e,G as h,b as t,l as w,d as u,n as b,e as x,p as y,m as N}from"./app-21f7968e.js";import{_ as S}from"./GuestLayout-b6525fb3.js";import{_ as n}from"./InputError-ba28e0ea.js";import{_ as I}from"./PrimaryButton-a0c2329b.js";import{_ as R}from"./_plugin-vue_export-helper-c27b6911.js";import{N as m,d as U,a as k}from"./dark-a65a64b8.js";import{N as d}from"./Space-1be39680.js";import"./ApplicationLogo-e1ffcc12.js";const c=i=>(y("data-v-c330f9e5"),i=i(),N(),i),B=["onSubmit"],C=c(()=>t("p",{class:"label pb-1"},"Username",-1)),V={class:"mt-4"},$=c(()=>t("p",{class:"label pb-1"},"Email",-1)),E={class:"mt-4"},P=c(()=>t("p",{class:"label pb-1"},"Password",-1)),T={class:"flex items-center justify-end mt-4"},j={__name:"Register",setup(i){const s=f({username:"",email:"",password:"",terms:!1}),p=()=>{s.post(route("register"),{onFinish:()=>s.reset("password")})};return(_,r)=>(v(),g(S,null,{default:o(()=>[a(e(h),{title:"Register"}),a(e(k),{theme:e(U)},{default:o(()=>[t("form",{onSubmit:x(p,["prevent"])},[t("div",null,[C,a(e(d),{vertical:""},{default:o(()=>[a(e(m),{value:e(s).username,"onUpdate:value":r[0]||(r[0]=l=>e(s).username=l),id:"first_name",maxlength:"30","show-count":"",clearable:"",placeholder:"Username"},null,8,["value"])]),_:1}),a(n,{class:"mt-2",message:e(s).errors.username},null,8,["message"])]),t("div",V,[$,a(e(d),{vertical:""},{default:o(()=>[a(e(m),{value:e(s).email,"onUpdate:value":r[1]||(r[1]=l=>e(s).email=l),type:"email","show-count":"",clearable:"",placeholder:"Email"},null,8,["value"])]),_:1}),a(n,{class:"mt-2",message:e(s).errors.email},null,8,["message"])]),t("div",E,[P,a(e(d),{vertical:""},{default:o(()=>[a(e(m),{value:e(s).password,"onUpdate:value":r[2]||(r[2]=l=>e(s).password=l),type:"password","show-password-on":"click"},null,8,["value"])]),_:1}),a(n,{class:"mt-2",message:e(s).errors.password},null,8,["message"])]),t("div",T,[a(e(w),{href:_.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:o(()=>[u(" Already registered? ")]),_:1},8,["href"]),a(I,{class:b(["ml-4",{"opacity-25":e(s).processing}]),disabled:e(s).processing},{default:o(()=>[u(" Register ")]),_:1},8,["class","disabled"])])],40,B)]),_:1},8,["theme"])]),_:1}))}},J=R(j,[["__scopeId","data-v-c330f9e5"]]);export{J as default};
