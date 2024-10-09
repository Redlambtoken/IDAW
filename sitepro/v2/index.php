<?php require_once('template_header.php'); getName("accueil")?>
<body>  
    <?php require_once('template_menu.php'); renderMenuToHTML('index'); ?>
    
    <div>
        <p class="paraCenter"> Je te vois, mais tu restes le bienvenue sur mon tout premier site pro (ou pas mdr). Ici tu pourras trouver tout plein de choses par rapport à moi car je suis le meilleur.</p>
        <p class="paraCenter"> Tu pourras y retrouver : </p>
        <div class="ListeWithWinnie">
        <ul id="List">
            <li>mon CV</li>
            <li>mes projets</li>
            <li>des easters-eggs (mais il faut pas le dire)</li>
        </ul>
        <img  style = "width: 100px" src="https://img.20mn.fr/bvDOOf-DQkGQM5BWbTa0dSk/1444x920_extrait-winnie-ourson-film">
        </div>
    </div>
    <?php require_once('template_bottom.php'); ?>
<!--Pense à enlever la page admin.php -->
</body>
</html>