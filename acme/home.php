<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     	<meta charset="utf-8"> 
	    <meta name="author" content="Jason Chantry">
	    <meta name="description" content="CIT226:04 - Enhancement 1 Activity">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Home - ACME, Inc. </title>
        <link rel="stylesheet" href="css/main.css">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    </head>
    <body>
        <header class="header">
            <?php include $_SERVER['DOCUMENT_ROOT'] . 
            '/acme/common/acmeHeader.php'; ?>

        </header>
        <nav class="pageNav" id="pageNavId">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/acmeNavigation.php'; ?>

        </nav>
        <main>
            <!--Title-->
            <h1>Welcome to Acme!</h1>
            
            <!-- Atricle that contains an advertisement -->
            <article class="advertisement">
                <img id="advertisementImg" src="images/site/rocketfeature.jpg" alt="Acme Rocket Image">

                <div class="advertisementText">
                    <ul>
                        <li><h2>Acme Rocket</h2></li>
                        <li>Quick lighting fuse</li>
                        <li>NHTSA approved seat belts</li>
                        <li>Mobile launch stand included</li>
                        <li><a href="#cart"><img id="actionbtn" alt="Add to cart button" src="images/site/iwantit.gif"></a></li>
                    </ul>
                </div>
            </article>
            <div>
            <article class="content">
                <aside class="reviews">
            
            
                    <h2>Acme Rocket Reviews</h2>
                    <ul>
                        <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                        <li>"That thing was fast!" (4/5)</li>
                        <li>"Talk about fast delivery." (5/5)</li>
                        <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                        <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                    </ul>
                </aside>
                <br>
                
                <aside class="recipes">
                    <h2>Featured Recipes</h2>
                    <div class="recipeTiles">
                        <div><div>
                            <img src="images/recipes/bbqsand.jpg" alt="bbq Sandwich">
                            <a href="#recipeBbq">Pulled Roadrunner BBQ</a>
                        
                        </div></div>
                        <div><div>
                            <img src="images/recipes/potpie.jpg" alt="pot pie">
                            <a href="#recipePotPie">Roadrunner Pot Pie</a>
                        
                        </div></div>
                            <div><div>
                            <img src="images/recipes/soup.jpg" alt="soup">
                            <a href="#recipesoup">Roadrunner Soup</a>
                        
                        </div></div>
                        <div><div>
                            <img src="images/recipes/taco.jpg" alt="taco">
                            <a href="#recipeTaco">Roadrunner Tacos</a>
                        
                        </div></div>
                    </div>
                </aside>
            </article>
            </div>

        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . 
            '/acme/common/acmeFooter.php'; ?>
        </footer>    
    </body>

</html>
