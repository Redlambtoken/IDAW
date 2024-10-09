<!doctype html>
 <html>
 <head>
 <title>Hector Durand</title>
 <link rel="stylesheet" href="style1.css" type="text/css"
 media="screen" title="default" charset="utf-8" />
 </head>
 <body>
    <?php
     function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site 2
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
            <nav class="navbarPerso" style="margin-left: 40%; width:665px;">';
            foreach($mymenu as $pageId => $pageParameters) {
                    echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'">' . $pageId . '</a>';       
            }
            echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index">' . $currentPageId . '</a>';
        }
        else {
            echo '<div class="menuPerso bg-dark">
            <h1 style="color: white;">Accueil</h1>
            <nav class="navbarPerso" style="margin-left: 50%;">';
            foreach($mymenu as $pageId => $pageParameters) {
                if($pageId == $currentPageId){
                    echo '<a class="btn btn-primary" id="currentpage" href="index.php?page='.$currentPageId .'">' . $currentPageId . '</a>';
                }
                else{
                    echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'">' . $pageId . '</a>';
                }
            }
        }
       
        
        echo "</nav> </div>";
    }
    ?>
 </body>
 </html>
