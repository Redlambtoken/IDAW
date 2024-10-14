<!doctype html>
 <html>
 <body>
    <?php
    require_once("template_header.php");
     function renderMenuToHTML($currentPageId, $langue) {
        // un tableau qui d\'efinit la structure du site 2
        if($_SESSION != null){
        if($langue == "fr"){
        $mymenu = array(
            //idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets'),
            'contact' => array('Mon contact')
            );
            if($currentPageId == "admin" || $currentPageId == "secret"){
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso" style="margin-left: 40%; width:800px;">
                <a class="btn btn-primary" href="../../TP3/login.php?login=D"> Déconnexion</a>
                <a class="btn btn-primary">'.$_SESSION['login'].'</a>';
                foreach($mymenu as $pageId => $pageParameters) {
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=fr">' . $pageId . '</a>';       
                }
                echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=fr">' . $currentPageId . '</a>';
            }
            else {
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso">
                <a class="btn btn-primary" href="../../TP3/login.php?login=D"> Déconnexion</a>
                <a class="btn btn-primary">'.$_SESSION['login'].'</a>';
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
                <nav class="navbarPerso" style="margin-left: 40%; width:800px;">
                <a class="btn btn-primary" href="../../TP3/login.php?login=D"> Disconnect</a>
                <a class="btn btn-primary">'.$_SESSION['login'].'</a>';
                foreach($mymenu as $pageId => $pageParameters) {
                        echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=en">' . $pageId . '</a>';       
                }
                echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=en">' . $currentPageId . '</a>';
            }
            else {
                echo '<div class="menuPerso bg-dark">
                <h1 style="color: white;">Accueil</h1>
                <nav class="navbarPerso" >
                <a class="btn btn-primary" href="../../TP3/login.php?login=D"> Disconnect</a>
                <a class="btn btn-primary">'.$_SESSION['login'].'</a>';
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
    }else{
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
                    <nav class="navbarPerso" style="margin-left: 40%; width:800px;">
                    <a class="btn btn-primary" href="../../TP3/login.php"> Connection</a>';
                    foreach($mymenu as $pageId => $pageParameters) {
                            echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=fr">' . $pageId . '</a>';       
                    }
                    echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=fr">' . $currentPageId . '</a>';
                }
                else {
                    echo '<div class="menuPerso bg-dark">
                    <h1 style="color: white;">Accueil</h1>
                    <nav class="navbarPerso">
                    <a class="btn btn-primary" href="../../TP3/login.php"> Connection</a>';
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
                    <nav class="navbarPerso" style="margin-left: 40%; width:800px;">
                    <a class="btn btn-primary" href="../../TP3/login.php"> Connection</a>';
                    foreach($mymenu as $pageId => $pageParameters) {
                            echo '<a class="btn btn-primary" href="index.php?page='.$pageId.'&lang=en">' . $pageId . '</a>';       
                    }
                    echo '<a class="btn btn-primary" id="currentpage" href="index.php?page=index&lang=en">' . $currentPageId . '</a>';
                }
                else {
                    echo '<div class="menuPerso bg-dark">
                    <h1 style="color: white;">Accueil</h1>
                    <nav class="navbarPerso" >
                    <a class="btn btn-primary" href="../../TP3/login.php"> Connection</a>';
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
}
    ?>
 </body>
 </html>
