"use strict";

document.addEventListener("DOMContentLoaded", function () {

    let liElementsofNav = document.querySelectorAll(".navbar .container-fluid .collapse .navbar-nav li");
    let aElementsofNav = document.querySelectorAll(".navbar .container-fluid .collapse .navbar-nav li a");

    for (let item of aElementsofNav) {
        item.classList.add("navigation__link");
        item.classList.add("nav-link");
    }
    for (let item of liElementsofNav) {
        item.classList.add("nav-item");
    }
})