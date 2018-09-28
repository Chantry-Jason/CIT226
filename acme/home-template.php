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
            <h1>Content Title Here</h1>

        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . 
            '/acme/common/acmeFooter.php'; ?>
        </footer>    
    </body>

</html>
