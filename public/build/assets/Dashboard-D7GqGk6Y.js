import{S as f,a as $}from"./StudentLayout-DaFWUsEk.js";import{_ as a}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{o as c,e as m,E as h,G as v,a as d,P as e,b as o,c as S,w as D}from"./app-Bjdzi0DK.js";import{N as g}from"./NotificationList-DYznGZ92.js";import"./useNotifications-BEkfTTTK.js";const k={name:"UpcomingClasses"},w=t=>(h("data-v-6c413e3c"),t=t(),v(),t),b=w(()=>d("h3",null,"Upcoming Classes",-1)),M=[b];function I(t,i,r,_,s,n){return c(),m("div",null,M)}const x=a(k,[["render",I],["__scopeId","data-v-6c413e3c"]]),C={name:"RecentActivities"},N=t=>(h("data-v-1d73661a"),t=t(),v(),t),A=N(()=>d("h3",null,"Recent Activities",-1)),O=[A];function R(t,i,r,_,s,n){return c(),m("div",null,O)}const U=a(C,[["render",R],["__scopeId","data-v-1d73661a"]]),B={name:"StudentDashboardOverview",components:{UpcomingClasses:x,RecentActivities:U,Notifications:g}},L=t=>(h("data-v-c271f363"),t=t(),v(),t),y=L(()=>d("h2",null,"Student Dashboard Overview",-1));function H(t,i,r,_,s,n){const p=e("UpcomingClasses"),u=e("RecentActivities"),l=e("Notifications");return c(),m("div",null,[y,o(p),o(u),o(l)])}const E=a(B,[["render",H],["__scopeId","data-v-c271f363"]]),V={name:"StudentDashboard",components:{StudentLayout:f,StudentHeader:$,StudentDashboardOverview:E},data(){return{isDarkMode:!1}},methods:{toggleDarkMode(){this.isDarkMode=!this.isDarkMode}}},G={class:"shadow-md rounded p-6"};function P(t,i,r,_,s,n){const p=e("StudentHeader"),u=e("StudentDashboardOverview"),l=e("StudentLayout");return c(),S(l,null,{default:D(()=>[d("div",G,[o(p,{isDarkMode:s.isDarkMode,toggleDarkMode:n.toggleDarkMode},null,8,["isDarkMode","toggleDarkMode"]),o(u)])]),_:1})}const K=a(V,[["render",P],["__scopeId","data-v-7b84cb10"]]);export{K as default};
