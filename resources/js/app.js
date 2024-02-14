import './bootstrap';
import '../css/bootstrap.min.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $, { error } from 'jquery';
window.$ = $;

$('.fa-user').on("mouseenter", function () {
    $('#login').toggle();
})

$('.fa-user').on("mouseleave", function () {
    $('#login').toggle();
})

$('#login').on("mouseenter", function () {
    $('#login').toggle();
})

$('#login').on("mouseleave", function () {
    $('#login').toggle();
})