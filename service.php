<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Your Go Trip Website</title>
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
    background-color: #2f2d26;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background-color: #41413b;
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
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="nav-bar">
        <div class="logo">Go Trip</div>
        <ul class="menu">
            <li><a href="prototimp.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="service.php">service</a></li>
            <li><a href="cuntect us.php">contact</a></li>
           
        </ul>
        </div>
        <link rel="stylesheet" href="thyUntitled-2.css">
    </div>
    <header>
        <h1>Your Go Trip Website</h1>
        <p>Your Gateway to Adventure</p>
    </header>

    <section>
        <h2>Our Services</h2><br>

        <h3>Group Adventures</h3>
        <p>Join a group of like-minded individuals and embark on a shared adventure. Our group trips provide a perfect blend of camaraderie and exploration, ensuring you make new friends while creating unforgettable memories.</p><br>

        <h3>Customized Packages</h3>
        <p>Looking for a more personalized experience? Our team can tailor a trip to suit your preferences, whether you're traveling solo, with family, or as a group. Just let us know your interests, and we'll craft a unique itinerary just for you.</p><br>

        <h3>Expert Guidance</h3>
        <p>Our team of experienced travel experts is always ready to assist you. From trip planning to on-the-ground support, we're dedicated to ensuring your journey is smooth, enjoyable, and stress-free.</p><br>

        <h3>Local Insights</h3>
        <p>We believe in authentic experiences, and our local guides play a crucial role in making that happen. By collaborating with knowledgeable locals, we aim to provide you with insights and stories that go beyond the surface, giving you a deeper understanding of the places you visit.</p><br>

        <h3>Sustainable Travel</h3>
        <p>We are committed to responsible and sustainable tourism. Our itineraries are designed to minimize environmental impact, support local communities, and promote cultural preservation.</p><br>

        <h2>Why Choose Us</h2>
        <ul>
            <li>Passionate and experienced team</li>
            <li>Personalized and tailored experiences</li>
            <li>Commitment to sustainable and responsible travel</li>
            <li>Local insights for a deeper cultural understanding</li>
            <li>24/7 expert support for a hassle-free journey</li>
        </ul>
    </section>
</body>
