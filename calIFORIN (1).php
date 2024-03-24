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

        .Cal-section {
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }

        .Cal-text {
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

        
        .slider-container {
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
            display: flex;
            justify-content: center; /* Center the slider horizontally */
        }

      
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .slider-btn {
            cursor: pointer;
            font-size: 24px;
            background: transparent;
            border: none;
            outline: none;
            color: #3498db;
        }
        footer {
    padding: 20px;
    color: ##00FFFF;
    text-align: center;
}

        
        .slider img {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
    border-radius: 8px;
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
    
    <section class="Cal-section">
        <div class="why-visit"> The GREATNESS  of CALIFORNIN</div>
        <p class="Cal-text">
          California is known as a celebrity hotspot. The state is home to some of the biggest names in Hollywood such as Johnny Depp, Halle Berry, George Clooney and Jennifer Anniston, and many visitors flock to the destination every year to possibly get a glimpse of them. You can even walk along the famous Walk of Fame and live out your movie-star dreams.
        </p>
       
        <div class="slider-container">
            <div class="slider">
                <img src="https://static.independent.co.uk/2023/06/23/15/iStock-468040530.jpg" alt="CALIFORNIN 1">
                <img src="https://www.thoughtco.com/thmb/tfjtL8rhGxHCuCkwNFRbUOczKio=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-869041446-5c8b237746e0fb000146acda.jpg" alt="CALIFORNIN2">
                <img src="https://www.telegraph.co.uk/content/dam/eip/california/Huntington-City-Beach.jpg?imwidth=680" alt="CALIFORNIN 3">
                <img src="https://www.ocregister.com/wp-content/uploads/2021/06/OCR-L-APPORTIONMENT-0427-01.jpg?w=525" alt="CALIFORNIN 4">
                <img src="https://www.travelandleisure.com/thmb/y2hDePatmkv5NiC7HqwKCvjcT_s=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/1-3efc238803174705b2c90e67c74024c7.jpg" alt="CALIFORNIN 5">
               
            </div>
        </div>
       
        <button class="slider-btn" onclick="prevSlide()">&#10094;</button>
        <button class="slider-btn" onclick="nextSlide()">&#10095;</button>
 
        <div class="why-visit">Why Visit CALIFORNIN ?</div>

    
    <p class="Cal-text">
        1.America is famous for it’s fantastic array of theme parks, and California is no stranger to this reputation. Home to theme parks such as Universal Studios Hollywood, Magic Mountain, Disneyland and Boomerang Bay – California is a great destination for the movie lovers and thrill seekers in your life.
    </p>
    <p class="Cal-text">
       2. Known as the Golden State, the weather in California is pleasant year-round. Whilst of course you will experience some showers and cool weather at points (as with everywhere), you can be assured that during your Californian adventure, the weather will be enjoyable..
    </p>
    <p class="Cal-text">
       3. We couldn’t write about California without mentioning the state’s gorgeous, golden beaches. Visit the famous Venice Beach and experience the Californian locals, beautiful coast line and fantastic attractions.
    </p>
    <p class="Cal-text">
     4.  California is home to the Hollywood Hills – a bucket list destination for many. Aside from getting your obligatory tourist photo in front of the giant white sign, California is home to some of America’s most famous filming locations.
    </p>
    
</section>

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
    <footer style="background-color:powderblue;" class="section teal darken-3">
        <p class="flow-text white-text center middle-align" style="font-family: Montserrat; font-size: 35px;">Go Trip &copy; 2018</p>
        
        <div class="icons"  style="background-color:powderblue;">
                       
                       
     <a href=" https://www.facebook.com/"><ion-icon name="logo-facebook"> </ion-icon = >Facebooked </a>
  <a href="https://www.instagram.com/"><ion-icon name="logo-instagram">insttagram </ion-icon></a>
         <a href="https://twitter.com/"><ion-icon name="logo-twitter">X</ion-icon></a>
  <a href="https://mail.google.com/mail/u/0/#inbox"><ion-icon name="logo-google">Gmail </ion-icon></a>
                        
                    </div>
    
</body>
</html>
