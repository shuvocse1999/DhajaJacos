/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
// window.Vue = require('vue');


// Router link
import {routes} from './routes';

//import user class
import Users from './Helpers/Users';
window.Users = Users;

//import user class
import Notification from './Helpers/Notification';
window.Notification = Notification;


// Sweet alert Notification
import Swal from 'sweetalert2';
window.Swal = Swal;


// Vue.component('pagination', require('laravel-vue-pagination'));

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast;
// ====end sweet notification===


const router = new VueRouter({
    mode:'history',
  routes 
})

const app = new Vue({
    el: '#app',
    router
});
