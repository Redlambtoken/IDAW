<!doctype html>
 <html>
 <head>
 <title>Hector Durand</title>
 <link rel="stylesheet" href="style1.css" type="text/css"
 media="screen" title="default" charset="utf-8" />
 </head>
 <body>
    <?php
     function renderMenuToHTML($currentPageId, $langue) {
        // un tableau qui d\'efinit la structure du site 2
        if($langue == "fr"){
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets'),
            'contact' => array('Mon contact')
            );
            if($currentPageId == "admin" || $currentPageId == "secret"){
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso" style="margin-left: 40%; width:800px;">';
                foreach($mymenu as $pageId => $pageParameters) {
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=fr">' . $pageId . '</a>';       
                }
                echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=fr">' . $currentPageId . '</a>';
            }
            else {
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso">';
                foreach($mymenu as $pageId => $pageParameters) {
                    if($pageId == $currentPageId){
                        echo '<a class="btn btn-primary" id="currentpage" href="index.php?page='.$currentPageId .'&lang=fr">' . $currentPageId . '</a>';
                    }
                    else{
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=fr">' . $pageId . '</a>';
                    }
                }
            }
            echo '<a class="btn btn-primary" href="index.php?page='.$currentPageId.'&lang=en">English</a>';
        }
            else{
            $mymenu = array(
            'accueil' => array( 'Welcome' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Projects'),
            'contact' => array('Informations')
            );
            if($currentPageId == "admin" || $currentPageId == "secret"){
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso" style="margin-left: 40%; width:800px;">';
                foreach($mymenu as $pageId => $pageParameters) {
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=en">' . $pageId . '</a>';       
                }
                echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=en">' . $currentPageId . '</a>';
            }
            else {
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso" >';
                foreach($mymenu as $pageId => $pageParameters) {
                    if($pageId == $currentPageId){
                        echo '<a class="btn btn-primary" id="currentpage" href="index.php?page='.$currentPageId .'&lang=en">' . $pageParameters[0] . '</a>';
                    }
                    else{
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=en">' . $pageParameters[0] . '</a>';
                    }   
                }
            }
            echo '<a class="btn btn-primary" href="index.php?page='.$currentPageId.'&lang=fr">Français</a>'; 
        }
        echo "</nav> </div>";
    }
    ?>
 </body>
 </html>
