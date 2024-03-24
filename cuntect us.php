<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Go Trip - Your Go Trip Website</title>
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

        address {
            margin-bottom: 20px;
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
        <p>Contact Go Trip</p>
    </header>
   

    <section>
        <h2>Get in Touch</h2>
        <p>Get in touch with us for all your travel needs!</p>

        <h3>Contact Details:</h3>
        <address>
            Go Trip Headquarters<br>
            123 Travel Street<br>
            Adventure City, AT 54321<br>
            Phone: +1 (123) 456-7890<br>
            Email: info@gotrip.com
        </address>

        <h2>Our Mission</h2>
        <p>At Websitectin, our mission is to help our clients thrive in the digital world. We believe in delivering high-quality web solutions that meet the unique needs of each client, ensuring their online success.</p>

        <h2>Contact Us</h2>
        <p>If you have any questions or inquiries, feel free to reach out to us. We are here to assist you on your journey to a strong and impactful web presence.</p>

        
    </section>
</body>

</html>
