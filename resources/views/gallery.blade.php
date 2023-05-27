@extends('header')
@section('content')
<html>
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
<center>
<h1 id="gallery_text">Our Gallery</h1>
<br>
</center>
<section class="gallery" id="gallery">
    <div class="box-container">
        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>Delicious Burgers</h3>
                <p>Indulge in our mouthwatering burger selection made with the finest ingredients.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>Tasty Pizza</h3>
                <p>Savor the flavors of our delicious pizza made with the freshest ingredients and perfect crust.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>Exquisite Seafood</h3>
                <p>Experience the taste of the ocean with our carefully crafted seafood dishes that will leave you craving for more.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>Mouthwatering Sushi</h3>
                <p>Indulge in the artistry of our sushi creations, skillfully prepared and bursting with flavors.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>Delectable Desserts</h3>
                <p>Treat yourself to our heavenly desserts, crafted with love and served with a touch of sweetness.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>Satisfying Salads</h3>
                <p>Refresh your taste buds with our fresh and nutritious salads, made with a variety of colorful ingredients.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>Authentic Mexican Cuisine</h3>
                <p>Experience the rich flavors of Mexico with our authentic dishes, prepared with traditional recipes and spices.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>Flavorful Asian Delights</h3>
                <p>Embark on a culinary journey through Asia with our diverse and flavorful dishes from various Asian cuisines.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>Irresistible Steaks</h3>
                <p>Sink your teeth into our succulent steaks, cooked to perfection and seasoned with savory spices.</p>
            </div>
        </div>  
    </div>
</section>
@endsection
@section('scripts')
<script>
    // Get all the box elements
    const boxes = document.querySelectorAll('.box');
    let currentIndex = 0;
    let modalImage;

    // Attach a click event listener to each box
    boxes.forEach((box, index) => {
        box.addEventListener('click', () => {
            // Get the image source from the clicked box
            const imageSrc = box.querySelector('img').getAttribute('src');

            // Create a modal element
            const modal = document.createElement('div');
            modal.classList.add('modal');
            
            // Create an image element inside the modal
            modalImage = document.createElement('img');
            modalImage.src = imageSrc;
            
            // Append the modal image to the modal element
            modal.appendChild(modalImage);
            
            // Append the modal to the document body
            document.body.appendChild(modal);
            
            // Remove the modal when clicked outside
            modal.addEventListener('click', () => {
                document.body.removeChild(modal);
            });

            // Create navigation arrows
            const modalArrows = document.createElement('div');
            modalArrows.classList.add('modal-arrows');

            const prevArrow = document.createElement('span');
            prevArrow.classList.add('modal-arrow');
            prevArrow.innerHTML = '&lt;';
            prevArrow.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent modal from closing

                // Update current index
                currentIndex = (currentIndex - 1 + boxes.length) % boxes.length;

                // Update image source
                modalImage.src = boxes[currentIndex].querySelector('img').getAttribute('src');
            });
            modalArrows.appendChild(prevArrow);

            const nextArrow = document.createElement('span');
            nextArrow.classList.add('modal-arrow');
            nextArrow.innerHTML = '&gt;';
            nextArrow.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent modal from closing

                // Update current index
                currentIndex = (currentIndex + 1) % boxes.length;

                // Update image source
                modalImage.src = boxes[currentIndex].querySelector('img').getAttribute('src');
            });
            modalArrows.appendChild(nextArrow);

            // Append navigation arrows to the modal
            modal.appendChild(modalArrows);
        });
    });
</script>
@endsection