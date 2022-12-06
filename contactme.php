<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="contactme.css">
</head>
<body>
    <nav>
        <div id="logo">
            <img src="logo.png" alt="MY LIfE">
        </div>

        <div id="ulkadiv">
            <ul>
                <li class="item"><a href="portfolio.php">HOME</a></li>
                <li class="item"><a href="works.php">WORKS</a></li>
                <li class="item"><a href="#">CONTACT ME</a></li>
            </ul>
        </div>
    </nav>

    <section id="contact">
        
        <div id="contact-box">
            <form action="contact.php" method="post">
                <h1>Got a project in mind? Let's talk! </h1>
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Your message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div id="buttonbox">
                    <button id="submitbtn">Submit</button>
                    <!-- <input type="button" value="Submit" id="inputbtn"> -->
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="textcenter">
            Copyright &copy; www.MYLIfE.com. All rights reserved!
        </div>
    </footer>
</body>
</html>