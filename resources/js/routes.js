// ========Registration login log out===============
 let login = require('./components/auth/login.vue').default;
 let register = require('./components/auth/register.vue').default;
 let logout = require('./components/auth/logout.vue').default;
 let userlist = require('./components/auth/usersList.vue').default;
 let dashboard = require('./components/dashboard.vue').default;
// =====Crud User With Repository=========

 let usercreate = require('./components/UserCrud/create.vue').default;
 let userview = require('./components/UserCrud/index.vue').default;
 let useredit = require('./components/UserCrud/edit.vue').default;
 

export const routes = [
{ path: '/dashboard', component: dashboard, name:'dashboard' },
{ path: '/', component: login, name:'login' },
{ path: '/register', component: register, name:'register' },
{ path: '/user-list', component: userlist, name:'userlist' },
{ path: '/logout', component: logout, name:'logout' },


{ path: '/user-create', component: usercreate, name:'usercreate' },
{ path: '/user-view', component: userview, name:'userview' },
{ path: '/user-edit/:id', component: useredit, name:'useredit' },


]


