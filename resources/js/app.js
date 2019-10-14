/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//require()は他のjavascriptのファイルで定義されているモジュールを読み込むためのNode.jsの関数
require('./bootstrap');//CSSフレームワークのBootstrapのこと？とも思いますが、ここではそのBootstrapではなく、単に同じディレクトリにある、bootstrap.jsをモジュールとして読み込んで実行する https://www.larajapan.com/tag/laravel-mix/

//グローバルオブジェクト
//window.Vue = require('vue');

//var simplemde = require('simplemde');
//var simplemde = new simplemde({ element: document.getElementById("editor") });
import SimpleMDE from 'simplemde'

const element = document.getElementById("editor")
if (element) {
  const simplemde = new SimpleMDE({ element: element })
}

import marked from 'marked';
import hljs from 'highlight.js';

  /*
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//ケバブケース例<my-component-name>
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
