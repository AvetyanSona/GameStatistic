/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('summernote');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
            label.removeClass('highlight');
        }
        else if( $this.val() !== '' ) {
            label.addClass('highlight');
        }
    }

});

$('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});

$('#search').on('keyup',function (e){
    var nickname = $(this).val();
    if(e.keyCode === 13){
       $.ajax({
           type:'post',
           url:'/wot/statistics/request',
           data:{
               nickname:nickname,
           },
           dataType: 'json'
       }).done( function(res) {
            $('#statistic').html(res.html);
       }).fail(function (jqXHR, textStatus, error) {

       });
    }
})

// $('#addNews').on('click',function (e){
//     // var serialized = $("#form1:input,textarea").serialize();
//     // console.log(serialized);return;
//     var content = $('#summernote').val();
//     var title = $('#title').val();
//     var main_picture = $('#main_image');
//     var formData = new FormData();
//
//     formData.append('content',content);
//     formData.append('title', title);
//     formData.append('main_picture', main_picture[0].files[0]);
//     $.ajax({
//         type:'post',
//         url:'/wot/wot-news',
//         data:formData,
//         contentType: false,
//         processData: false,
//     }).done( function(res) {
//         $('#success').show();
//         // console.log('gdshcf');
//     }).fail(function (jqXHR, textStatus, error) {
//         $('#error').show()
//     });
// })


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image_preview').show();
            $('#image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#main_image").change(function () {
    readURL(this);
});

$(document).ready(function() {
    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],

        ],
        placeholder: 'Type your news here',
    });
});


