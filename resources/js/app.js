import './bootstrap';
import '../css/bootstrap.min.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $, { error } from 'jquery';
window.$ = $;

$('.fa-user').on("click", function () {
    $('#login').toggle();
    setTimeout(function () {

    }, 1000);
})