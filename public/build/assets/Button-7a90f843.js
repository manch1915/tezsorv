import{k as O,ag as $e,n as b,E as ze,O as te,f as Be,l as p,m as d,o as Z,x as Se,a1 as Te,p as re,ah as Pe,h as He,u as ke,i as Re,ai as Ee,r as We,q as r,e as W,s as Ie,t as ee,aj as Fe,a0 as Oe,aa as je,j as _e}from"./dark-a65a64b8.js";import{O as q,ad as De,T as Le,P as y,_ as Ne,y as H,H as Ae,a1 as Ge,L as Ke,h as I}from"./app-21f7968e.js";function oe(e){return e.replace(/#|\(|\)|,|\s/g,"_")}const Me=q({name:"FadeInExpandTransition",props:{appear:Boolean,group:Boolean,mode:String,onLeave:Function,onAfterLeave:Function,onAfterEnter:Function,width:Boolean,reverse:Boolean},setup(e,{slots:v}){function x(t){e.width?t.style.maxWidth=`${t.offsetWidth}px`:t.style.maxHeight=`${t.offsetHeight}px`,t.offsetWidth}function c(t){e.width?t.style.maxWidth="0":t.style.maxHeight="0",t.offsetWidth;const{onLeave:h}=e;h&&h()}function m(t){e.width?t.style.maxWidth="":t.style.maxHeight="";const{onAfterLeave:h}=e;h&&h()}function j(t){if(t.style.transition="none",e.width){const h=t.offsetWidth;t.style.maxWidth="0",t.offsetWidth,t.style.transition="",t.style.maxWidth=`${h}px`}else if(e.reverse)t.style.maxHeight=`${t.offsetHeight}px`,t.offsetHeight,t.style.transition="",t.style.maxHeight="0";else{const h=t.offsetHeight;t.style.maxHeight="0",t.offsetWidth,t.style.transition="",t.style.maxHeight=`${h}px`}t.offsetWidth}function P(t){var h;e.width?t.style.maxWidth="":e.reverse||(t.style.maxHeight=""),(h=e.onAfterEnter)===null||h===void 0||h.call(e)}return()=>{const t=e.group?De:Le;return y(t,{name:e.width?"fade-in-width-expand-transition":"fade-in-height-expand-transition",mode:e.mode,appear:e.appear,onEnter:j,onAfterEnter:P,onBeforeLeave:x,onLeave:c,onAfterLeave:m},v)}}}),Ve=O("base-wave",`
 position: absolute;
 left: 0;
 right: 0;
 top: 0;
 bottom: 0;
 border-radius: inherit;
`),qe=q({name:"BaseWave",props:{clsPrefix:{type:String,required:!0}},setup(e){$e("-base-wave",Ve,Ne(e,"clsPrefix"));const v=H(null),x=H(!1);let c=null;return Ae(()=>{c!==null&&window.clearTimeout(c)}),{active:x,selfRef:v,play(){c!==null&&(window.clearTimeout(c),x.value=!1,c=null),Ge(()=>{var m;(m=v.value)===null||m===void 0||m.offsetHeight,x.value=!0,c=window.setTimeout(()=>{x.value=!1,c=null},1e3)})}}},render(){const{clsPrefix:e}=this;return y("div",{ref:"selfRef","aria-hidden":!0,class:[`${e}-base-wave`,this.active&&`${e}-base-wave--active`]})}}),{cubicBezierEaseInOut:$}=ze;function Qe({duration:e=".2s",delay:v=".1s"}={}){return[b("&.fade-in-width-expand-transition-leave-from, &.fade-in-width-expand-transition-enter-to",{opacity:1}),b("&.fade-in-width-expand-transition-leave-to, &.fade-in-width-expand-transition-enter-from",`
 opacity: 0!important;
 margin-left: 0!important;
 margin-right: 0!important;
 `),b("&.fade-in-width-expand-transition-leave-active",`
 overflow: hidden;
 transition:
 opacity ${e} ${$},
 max-width ${e} ${$} ${v},
 margin-left ${e} ${$} ${v},
 margin-right ${e} ${$} ${v};
 `),b("&.fade-in-width-expand-transition-enter-active",`
 overflow: hidden;
 transition:
 opacity ${e} ${$} ${v},
 max-width ${e} ${$},
 margin-left ${e} ${$},
 margin-right ${e} ${$};
 `)]}function S(e){return te(e,[255,255,255,.16])}function F(e){return te(e,[0,0,0,.12])}const Ye=Be("n-button-group"),Ue=b([O("button",`
 margin: 0;
 font-weight: var(--n-font-weight);
 line-height: 1;
 font-family: inherit;
 padding: var(--n-padding);
 height: var(--n-height);
 font-size: var(--n-font-size);
 border-radius: var(--n-border-radius);
 color: var(--n-text-color);
 background-color: var(--n-color);
 width: var(--n-width);
 white-space: nowrap;
 outline: none;
 position: relative;
 z-index: auto;
 border: none;
 display: inline-flex;
 flex-wrap: nowrap;
 flex-shrink: 0;
 align-items: center;
 justify-content: center;
 user-select: none;
 -webkit-user-select: none;
 text-align: center;
 cursor: pointer;
 text-decoration: none;
 transition:
 color .3s var(--n-bezier),
 background-color .3s var(--n-bezier),
 opacity .3s var(--n-bezier),
 border-color .3s var(--n-bezier);
 `,[p("color",[d("border",{borderColor:"var(--n-border-color)"}),p("disabled",[d("border",{borderColor:"var(--n-border-color-disabled)"})]),Z("disabled",[b("&:focus",[d("state-border",{borderColor:"var(--n-border-color-focus)"})]),b("&:hover",[d("state-border",{borderColor:"var(--n-border-color-hover)"})]),b("&:active",[d("state-border",{borderColor:"var(--n-border-color-pressed)"})]),p("pressed",[d("state-border",{borderColor:"var(--n-border-color-pressed)"})])])]),p("disabled",{backgroundColor:"var(--n-color-disabled)",color:"var(--n-text-color-disabled)"},[d("border",{border:"var(--n-border-disabled)"})]),Z("disabled",[b("&:focus",{backgroundColor:"var(--n-color-focus)",color:"var(--n-text-color-focus)"},[d("state-border",{border:"var(--n-border-focus)"})]),b("&:hover",{backgroundColor:"var(--n-color-hover)",color:"var(--n-text-color-hover)"},[d("state-border",{border:"var(--n-border-hover)"})]),b("&:active",{backgroundColor:"var(--n-color-pressed)",color:"var(--n-text-color-pressed)"},[d("state-border",{border:"var(--n-border-pressed)"})]),p("pressed",{backgroundColor:"var(--n-color-pressed)",color:"var(--n-text-color-pressed)"},[d("state-border",{border:"var(--n-border-pressed)"})])]),p("loading","cursor: wait;"),O("base-wave",`
 pointer-events: none;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0;
 animation-iteration-count: 1;
 animation-duration: var(--n-ripple-duration);
 animation-timing-function: var(--n-bezier-ease-out), var(--n-bezier-ease-out);
 `,[p("active",{zIndex:1,animationName:"button-wave-spread, button-wave-opacity"})]),Se&&"MozBoxSizing"in document.createElement("div").style?b("&::moz-focus-inner",{border:0}):null,d("border, state-border",`
 position: absolute;
 left: 0;
 top: 0;
 right: 0;
 bottom: 0;
 border-radius: inherit;
 transition: border-color .3s var(--n-bezier);
 pointer-events: none;
 `),d("border",{border:"var(--n-border)"}),d("state-border",{border:"var(--n-border)",borderColor:"#0000",zIndex:1}),d("icon",`
 margin: var(--n-icon-margin);
 margin-left: 0;
 height: var(--n-icon-size);
 width: var(--n-icon-size);
 max-width: var(--n-icon-size);
 font-size: var(--n-icon-size);
 position: relative;
 flex-shrink: 0;
 `,[O("icon-slot",`
 height: var(--n-icon-size);
 width: var(--n-icon-size);
 position: absolute;
 left: 0;
 top: 50%;
 transform: translateY(-50%);
 display: flex;
 align-items: center;
 justify-content: center;
 `,[Te({top:"50%",originalTransform:"translateY(-50%)"})]),Qe()]),d("content",`
 display: flex;
 align-items: center;
 flex-wrap: nowrap;
 min-width: 0;
 `,[b("~",[d("icon",{margin:"var(--n-icon-margin)",marginRight:0})])]),p("block",`
 display: flex;
 width: 100%;
 `),p("dashed",[d("border, state-border",{borderStyle:"dashed !important"})]),p("disabled",{cursor:"not-allowed",opacity:"var(--n-opacity-disabled)"})]),b("@keyframes button-wave-spread",{from:{boxShadow:"0 0 0.5px 0 var(--n-ripple-color)"},to:{boxShadow:"0 0 0.5px 4.5px var(--n-ripple-color)"}}),b("@keyframes button-wave-opacity",{from:{opacity:"var(--n-wave-opacity)"},to:{opacity:0}})]),Je=Object.assign(Object.assign({},re.props),{color:String,textColor:String,text:Boolean,block:Boolean,loading:Boolean,disabled:Boolean,circle:Boolean,size:String,ghost:Boolean,round:Boolean,secondary:Boolean,tertiary:Boolean,quaternary:Boolean,strong:Boolean,focusable:{type:Boolean,default:!0},keyboard:{type:Boolean,default:!0},tag:{type:String,default:"button"},type:{type:String,default:"default"},dashed:Boolean,renderIcon:Function,iconPlacement:{type:String,default:"left"},attrType:{type:String,default:"button"},bordered:{type:Boolean,default:!0},onClick:[Function,Array],nativeFocusBehavior:{type:Boolean,default:!Pe}}),Xe=q({name:"Button",props:Je,setup(e){const v=H(null),x=H(null),c=H(!1),m=He(()=>!e.quaternary&&!e.tertiary&&!e.secondary&&!e.text&&(!e.color||e.ghost||e.dashed)&&e.bordered),j=Ke(Ye,{}),{mergedSizeRef:P}=ke({},{defaultSize:"medium",mergedSize:n=>{const{size:u}=e;if(u)return u;const{size:C}=j;if(C)return C;const{mergedSize:o}=n||{};return o?o.value:"medium"}}),t=I(()=>e.focusable&&!e.disabled),h=n=>{var u;t.value||n.preventDefault(),!e.nativeFocusBehavior&&(n.preventDefault(),!e.disabled&&t.value&&((u=v.value)===null||u===void 0||u.focus({preventScroll:!0})))},ne=n=>{var u;if(!e.disabled&&!e.loading){const{onClick:C}=e;C&&_e(C,n),e.text||(u=x.value)===null||u===void 0||u.play()}},ie=n=>{switch(n.key){case"Enter":if(!e.keyboard)return;c.value=!1}},ae=n=>{switch(n.key){case"Enter":if(!e.keyboard||e.loading){n.preventDefault();return}c.value=!0}},se=()=>{c.value=!1},{inlineThemeDisabled:Q,mergedClsPrefixRef:_,mergedRtlRef:le}=Re(e),de=re("Button","-button",Ue,Ee,e,_),ce=We("Button",le,_),Y=I(()=>{const n=de.value,{common:{cubicBezierEaseInOut:u,cubicBezierEaseOut:C},self:o}=n,{rippleDuration:D,opacityDisabled:k,fontWeight:L,fontWeightStrong:N}=o,g=P.value,{dashed:A,type:z,ghost:G,text:w,color:a,round:U,circle:K,textColor:B,secondary:ue,tertiary:J,quaternary:fe,strong:he}=e,be={"font-weight":he?N:L};let s={"--n-color":"initial","--n-color-hover":"initial","--n-color-pressed":"initial","--n-color-focus":"initial","--n-color-disabled":"initial","--n-ripple-color":"initial","--n-text-color":"initial","--n-text-color-hover":"initial","--n-text-color-pressed":"initial","--n-text-color-focus":"initial","--n-text-color-disabled":"initial"};const R=z==="tertiary",X=z==="default",i=R?"default":z;if(w){const l=B||a;s={"--n-color":"#0000","--n-color-hover":"#0000","--n-color-pressed":"#0000","--n-color-focus":"#0000","--n-color-disabled":"#0000","--n-ripple-color":"#0000","--n-text-color":l||o[r("textColorText",i)],"--n-text-color-hover":l?S(l):o[r("textColorTextHover",i)],"--n-text-color-pressed":l?F(l):o[r("textColorTextPressed",i)],"--n-text-color-focus":l?S(l):o[r("textColorTextHover",i)],"--n-text-color-disabled":l||o[r("textColorTextDisabled",i)]}}else if(G||A){const l=B||a;s={"--n-color":"#0000","--n-color-hover":"#0000","--n-color-pressed":"#0000","--n-color-focus":"#0000","--n-color-disabled":"#0000","--n-ripple-color":a||o[r("rippleColor",i)],"--n-text-color":l||o[r("textColorGhost",i)],"--n-text-color-hover":l?S(l):o[r("textColorGhostHover",i)],"--n-text-color-pressed":l?F(l):o[r("textColorGhostPressed",i)],"--n-text-color-focus":l?S(l):o[r("textColorGhostHover",i)],"--n-text-color-disabled":l||o[r("textColorGhostDisabled",i)]}}else if(ue){const l=X?o.textColor:R?o.textColorTertiary:o[r("color",i)],f=a||l,E=z!=="default"&&z!=="tertiary";s={"--n-color":E?W(f,{alpha:Number(o.colorOpacitySecondary)}):o.colorSecondary,"--n-color-hover":E?W(f,{alpha:Number(o.colorOpacitySecondaryHover)}):o.colorSecondaryHover,"--n-color-pressed":E?W(f,{alpha:Number(o.colorOpacitySecondaryPressed)}):o.colorSecondaryPressed,"--n-color-focus":E?W(f,{alpha:Number(o.colorOpacitySecondaryHover)}):o.colorSecondaryHover,"--n-color-disabled":o.colorSecondary,"--n-ripple-color":"#0000","--n-text-color":f,"--n-text-color-hover":f,"--n-text-color-pressed":f,"--n-text-color-focus":f,"--n-text-color-disabled":f}}else if(J||fe){const l=X?o.textColor:R?o.textColorTertiary:o[r("color",i)],f=a||l;J?(s["--n-color"]=o.colorTertiary,s["--n-color-hover"]=o.colorTertiaryHover,s["--n-color-pressed"]=o.colorTertiaryPressed,s["--n-color-focus"]=o.colorSecondaryHover,s["--n-color-disabled"]=o.colorTertiary):(s["--n-color"]=o.colorQuaternary,s["--n-color-hover"]=o.colorQuaternaryHover,s["--n-color-pressed"]=o.colorQuaternaryPressed,s["--n-color-focus"]=o.colorQuaternaryHover,s["--n-color-disabled"]=o.colorQuaternary),s["--n-ripple-color"]="#0000",s["--n-text-color"]=f,s["--n-text-color-hover"]=f,s["--n-text-color-pressed"]=f,s["--n-text-color-focus"]=f,s["--n-text-color-disabled"]=f}else s={"--n-color":a||o[r("color",i)],"--n-color-hover":a?S(a):o[r("colorHover",i)],"--n-color-pressed":a?F(a):o[r("colorPressed",i)],"--n-color-focus":a?S(a):o[r("colorFocus",i)],"--n-color-disabled":a||o[r("colorDisabled",i)],"--n-ripple-color":a||o[r("rippleColor",i)],"--n-text-color":B||(a?o.textColorPrimary:R?o.textColorTertiary:o[r("textColor",i)]),"--n-text-color-hover":B||(a?o.textColorHoverPrimary:o[r("textColorHover",i)]),"--n-text-color-pressed":B||(a?o.textColorPressedPrimary:o[r("textColorPressed",i)]),"--n-text-color-focus":B||(a?o.textColorFocusPrimary:o[r("textColorFocus",i)]),"--n-text-color-disabled":B||(a?o.textColorDisabledPrimary:o[r("textColorDisabled",i)])};let M={"--n-border":"initial","--n-border-hover":"initial","--n-border-pressed":"initial","--n-border-focus":"initial","--n-border-disabled":"initial"};w?M={"--n-border":"none","--n-border-hover":"none","--n-border-pressed":"none","--n-border-focus":"none","--n-border-disabled":"none"}:M={"--n-border":o[r("border",i)],"--n-border-hover":o[r("borderHover",i)],"--n-border-pressed":o[r("borderPressed",i)],"--n-border-focus":o[r("borderFocus",i)],"--n-border-disabled":o[r("borderDisabled",i)]};const{[r("height",g)]:V,[r("fontSize",g)]:ve,[r("padding",g)]:xe,[r("paddingRound",g)]:me,[r("iconSize",g)]:ye,[r("borderRadius",g)]:ge,[r("iconMargin",g)]:pe,waveOpacity:Ce}=o,we={"--n-width":K&&!w?V:"initial","--n-height":w?"initial":V,"--n-font-size":ve,"--n-padding":K||w?"initial":U?me:xe,"--n-icon-size":ye,"--n-icon-margin":pe,"--n-border-radius":w?"initial":K||U?V:ge};return Object.assign(Object.assign(Object.assign(Object.assign({"--n-bezier":u,"--n-bezier-ease-out":C,"--n-ripple-duration":D,"--n-opacity-disabled":k,"--n-wave-opacity":Ce},be),s),M),we)}),T=Q?Ie("button",I(()=>{let n="";const{dashed:u,type:C,ghost:o,text:D,color:k,round:L,circle:N,textColor:g,secondary:A,tertiary:z,quaternary:G,strong:w}=e;u&&(n+="a"),o&&(n+="b"),D&&(n+="c"),L&&(n+="d"),N&&(n+="e"),A&&(n+="f"),z&&(n+="g"),G&&(n+="h"),w&&(n+="i"),k&&(n+="j"+oe(k)),g&&(n+="k"+oe(g));const{value:a}=P;return n+="l"+a[0],n+="m"+C[0],n}),Y,e):void 0;return{selfElRef:v,waveElRef:x,mergedClsPrefix:_,mergedFocusable:t,mergedSize:P,showBorder:m,enterPressed:c,rtlEnabled:ce,handleMousedown:h,handleKeydown:ae,handleBlur:se,handleKeyup:ie,handleClick:ne,customColorCssVars:I(()=>{const{color:n}=e;if(!n)return null;const u=S(n);return{"--n-border-color":n,"--n-border-color-hover":u,"--n-border-color-pressed":F(n),"--n-border-color-focus":u,"--n-border-color-disabled":n}}),cssVars:Q?void 0:Y,themeClass:T==null?void 0:T.themeClass,onRender:T==null?void 0:T.onRender}},render(){const{mergedClsPrefix:e,tag:v,onRender:x}=this;x==null||x();const c=ee(this.$slots.default,m=>m&&y("span",{class:`${e}-button__content`},m));return y(v,{ref:"selfElRef",class:[this.themeClass,`${e}-button`,`${e}-button--${this.type}-type`,`${e}-button--${this.mergedSize}-type`,this.rtlEnabled&&`${e}-button--rtl`,this.disabled&&`${e}-button--disabled`,this.block&&`${e}-button--block`,this.enterPressed&&`${e}-button--pressed`,!this.text&&this.dashed&&`${e}-button--dashed`,this.color&&`${e}-button--color`,this.secondary&&`${e}-button--secondary`,this.loading&&`${e}-button--loading`,this.ghost&&`${e}-button--ghost`],tabindex:this.mergedFocusable?0:-1,type:this.attrType,style:this.cssVars,disabled:this.disabled,onClick:this.handleClick,onBlur:this.handleBlur,onMousedown:this.handleMousedown,onKeyup:this.handleKeyup,onKeydown:this.handleKeydown},this.iconPlacement==="right"&&c,y(Me,{width:!0},{default:()=>ee(this.$slots.icon,m=>(this.loading||this.renderIcon||m)&&y("span",{class:`${e}-button__icon`,style:{margin:Fe(this.$slots.default)?"0":""}},y(Oe,null,{default:()=>this.loading?y(je,{clsPrefix:e,key:"loading",class:`${e}-icon-slot`,strokeWidth:20}):y("div",{key:"icon",class:`${e}-icon-slot`,role:"none"},this.renderIcon?this.renderIcon():m)})))}),this.iconPlacement==="left"&&c,this.text?null:y(qe,{ref:"waveElRef",clsPrefix:e}),this.showBorder?y("div",{"aria-hidden":!0,class:`${e}-button__border`,style:this.customColorCssVars}):null,this.showBorder?y("div",{"aria-hidden":!0,class:`${e}-button__state-border`,style:this.customColorCssVars}):null)}}),oo=Xe;export{oo as N,Me as a,oe as c};
