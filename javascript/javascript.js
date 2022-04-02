"use strict";

document.addEventListener("DOMContentLoaded", function () {

    let liElementsofNav = document.querySelectorAll(".navbar .container .collapse .navbar-nav li");
    let aElementsofNav = document.querySelectorAll(".navbar .container .collapse .navbar-nav li a");

    for (let item of aElementsofNav) {
        item.classList.add("navigation__link");
        item.classList.add("nav-link");
    }
    for (let item of liElementsofNav) {
        item.classList.add("nav-item");
    }

    let textimageImage = document.getElementsByClassName("textimage__image");
    let textimageText = document.getElementsByClassName("textimage__text");
    let textimageheadline = document.getElementsByClassName("textimage__headline");

    document.addEventListener("scroll", function () {
        for (let value of textimageImage) {
            if (window.pageYOffset >= value.offsetTop - 600) {
                value.classList.add("faderight");
            }
        }
        for (let value of textimageText) {
            if (window.pageYOffset >= value.offsetTop - 700) {
                value.classList.add("fadeleft");
            }
        }
        for (let value of textimageheadline) {
            if (window.pageYOffset >= value.offsetTop - 600) {
                value.classList.add("fadeleft");
            }
        }
    })
})