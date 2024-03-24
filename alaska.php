

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
}

body, html {
    margin: 0;
    padding: 0;
}

/*------------------------Scroll Bar-----------------------*/
::-webkit-scrollbar {
    width: 20px;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background-color: #fde65e;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background-color: #FDE02F;
}

/*========================Nav Bar=========================*/
.nav-bar {
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    height: 90px;
    background-color: #fff;
    box-shadow: 3px 3px 10px lightslategray;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    z-index: 1;
}

.logo {
    flex: 1;
    font-size: 40px;
    padding: 20px;
    margin-left: 50px;
    font-family: Satisfy;
}

ul.menu {
    flex: 1;
    display: flex;
    flex-flow: row wrap;
}

.menu li {
    flex: 1;
    list-style-type: none;
    font-size: 16px;
    font-family: "Barlow Condensed";
    text-align: center;
}

.menu li a {
    text-decoration: none;
    color: #000;
    text-transform: uppercase;
}

.menu li a:hover {
    color: midnightblue;
    text-decoration: underline;
}

        .alaska-section {
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }

        .alaska-text {
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 20px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .why-visit {
            font-family: 'Satisfy', cursive;
            font-size: 30px;
            color: #3498db;
            margin-bottom: 20px;
        }

        /* Style for the image slider container */
        .slider-container {
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
            display: flex;
            justify-content: center; /* Center the slider horizontally */
        }

        /* Style for the image slider */
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Style for the slider navigation buttons */
        .slider-btn {
            cursor: pointer;
            font-size: 24px;
            background: transparent;
            border: none;
            outline: none;
            color: #3498db;
        }
        .slider img {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
    border-radius: 8px;


}
footer {
    padding: 20px;
    color: ##00FFFF;
    text-align: center;
}
    </style>
</head>
<body>
    <section class="nav-bar">
        <section class="nav-bar">
            <div class="logo">Go Trip</div>
            <ul class="menu">
                <li><a href="prototimp.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="service.php">service</a></li>
                <li><a href="cuntect us.php">contact</a></li>
            </ul>
            </div>
            <link rel="stylesheet" href="thyUntitled-2.css">
        </section>
    </section>
    
    <section class="alaska-section">
        <div class="why-visit">Discover the Wonders of Alaska</div>
        <p class="alaska-text">
            Alaska, the Last Frontier, is a land of breathtaking landscapes and unique experiences. From towering mountains to vast glaciers, and from pristine wilderness to abundant wildlife, Alaska offers a once-in-a-lifetime adventure for every traveler.
        </p>
        <!-- Image Slider -->
        <div class="slider-container">
            <div class="slider">
                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/welcome-to-alaska-sign-robert-braley.jpg" alt="Alaska 1">
                <img src="https://cdn.thecoolist.com/wp-content/uploads/2021/12/Best-Places-to-Visit-in-Alaska.jpg" alt="Alaska 2">
                <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2018/06/Alaska.jpg" alt="Alaska 3">
                <img src="https://www.meganstarr.com/wp-content/uploads/2021/07/Skagway-Alaska.jpg" alt="Alaska 4">
                <img src="https://loveincorporated.blob.core.windows.net/contentimages/gallery/c333d7c2-8daa-48b4-8d69-5f05f6b95b8e-Mendenhall_Glacier_emperorcosar_Shutterstock.jpg" alt="Alaska 5">
                <!-- Add more images as needed -->
            </div>
        </div>
        <!-- Slider Navigation Buttons -->
        <button class="slider-btn" onclick="prevSlide()">&#10094;</button>
        <button class="slider-btn" onclick="nextSlide()">&#10095;</button>
        <!-- End of Image Slider -->
        <div class="why-visit">Why Visit Alaska?</div>
        <!-- Your existing text remains unchanged -->
    
    <p class="alaska-text">
        1. Majestic Landscapes: Experience the grandeur of vast landscapes, towering mountains, and pristine wilderness.
    </p>
    <p class="alaska-text">
        2. Unique Wildlife: Encounter diverse wildlife, including bears, moose, whales, and eagles, in their natural habitats.
    </p>
    <p class="alaska-text">
        3. Outdoor Adventures: Enjoy a wide range of outdoor activities, from hiking and kayaking to fishing and dog sledding.
    </p>
    <p class="alaska-text">
        4. Cultural Richness: Discover the rich Native Alaskan cultures and traditions that add depth to your journey.
    </p>
    <p class="alaska-text">
        Plan your visit to Alaska and embark on a memorable journey filled with awe-inspiring scenery and unforgettable experiences.
    </p>
   
</section>
<footer style="background-color:powderblue;" class="section teal darken-3">
    <p class="flow-text white-text center middle-align" style="font-family: Montserrat; font-size: 35px;">Go Trip &copy; 2018</p>
    
    <div class="icons"  style="background-color:powderblue;">
                   
                   
 <a href=" https://www.facebook.com/"><ion-icon name="logo-facebook"> </ion-icon = >Facebooked </a>
<a href="https://www.instagram.com/"><ion-icon name="logo-instagram">insttagram </ion-icon></a>
     <a href="https://twitter.com/"><ion-icon name="logo-twitter">X</ion-icon></a>
<a href="https://mail.google.com/mail/u/0/#inbox"><ion-icon name="logo-google">Gmail </ion-icon></a>
                    
                </div>


    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slider = document.querySelector('.slider');
            const slides = document.querySelectorAll('.slider img');
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }

            const translateValue = -currentSlide * 100 + '%';
            slider.style.transform = `translateX(${translateValue})`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }
    </script>
</body>
</html>
