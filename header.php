<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Tektonic is a San Diego based Web Development firm offering affordable quality web development services.">
    <title> <?php wp_title(); ?> </title>
<?php wp_head(); ?>

</head>

<body class='relative'>
        <div class="modal relative">
            <span class="modal__close">&times;</span>
            <img class='modal__img'src="./assets/Services.png" alt="service image"></div>


    <div class=" nav__menu" id='menu'>
            <ul>
               <a href="#home"  id='list1'> <li>Home</li></a>
                <a href="#about" id='list2'> <li>About</li></a>
                <a href="#service" id='list3'> <li>Services</li></a>
                <a href="#contact" id='list4'> <li>Contact</li></a>
            </ul>
    </div>
    <nav class='container-fluid nav'>
        <div class="row justify-content-end" >
            <div class="col-1 nav__bar" id="toggle">
                <div class=" nav__bar--1"></div>
                <div class=" nav__bar--2"></div>
                <div class="nav__bar--3"></div>
            </div>
        </div>
    </nav>