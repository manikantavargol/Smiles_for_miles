<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Slider</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/sagar.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="image1.jpg" id="content1" class="active">
            <img src="image2.jpg" id="content2">
            <img src="image3.jpg" id="content3">
            <img src="image4.jpg" id="content4">
        </div>
        <div class="dot-container">
            <button onclick = "dot(1)"></button>
            <button onclick = "dot(2)"></button>
            <button onclick = "dot(3)"></button>
            <button onclick = "dot(4)"></button>
        </div>
        <button id="prev" onclick="prev()"> &lt; </button>
        <button id="next" onclick="next()"> &gt; </button>
    </div>
    <script src="js/sagar.js"></script>
</body>
</html>