<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/fp.css" />
        <link href="https://fonts.googleapis.com/css?family=Inconsolata%7CPlayfair+Display%7CRoboto+Mono" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <!-- Here is where the header starts -->
        <div class="wrapper-right">
        <header>
            <a href="index.php"><i class="<?=$logo?>" <?=$logo_color?>></i></a>
            <br>
            <img src="images/char_img_3.jpg" class="img5" alt="charolette"/>
            <h1>Charolette Jae</h1>
            <div class="social-media">
                <a href="https://www.facebook.com/charoletter/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/charolettejpop" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/charolettejpop/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/charolette-richardson-a3489629" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            </div>
            </header>
                <div class="sidebar">
                <div class="dropdown-menu">
                <?=makeLinks($nav2)?> 
                    <!-- <a href="index.php">Home</a>
                    <a href="faq.php">FAQ</a>
                    <a href="projects.php">Projects</a>
                    <a href="contactme.php">Contact Me</a> -->
                </div>
                </div>

        <!-- Here is where the text to the right under the header goes -->
        <section class="bio-text">
            <p>Charolette Jae is an IT Systems Administrator for Indeed and help maintain the critical infrastructure. She is also an IRG site lead for iPride,
                helping to advocate for LGBTQ employees within the company. She is also (or on some level exploring) a photographer, model, cosplayer, hiker, 
                snowboarder, musician. She values honesty, authenticity, trustworthiness and above all compassion and tries to bring that into all of her work. 
                She is trying to finish a Bachelor's degree for something IT related.
                <br> 
                <br>
                Charolette was born in Astoria, Oregon before moving to Washington in 2005 and she is living in Seattle with the people she loves most. She loves
                 the outdoors and looking at the stars and taking in nature once in a while. She is also very outspoken on many opinions but especially on LGBTQ+ rights.
            </p>
        </section>
        </div>