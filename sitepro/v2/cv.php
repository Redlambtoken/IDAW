<?php require_once('template_header.php'); getName("cv") ?>
<body>
    <?php require_once('template_menu.php'); renderMenuToHTML('cv'); ?>
        <div id="sign_right" class="div_info">
        <div id="Presentation">
            <h1 id="Presentation_name" class="click pointer" style="width: 40%;" > Jean Fruleux</h1>
            <p> Etudiant en deuxième année d'ingénieur à l'Institut Mines Télécom Nord Europe, je suis actuellement à la recherche d'un stage dans la cybersécurité d'une durée de 20 semaines à compter du 15/04/2025</p>
        </div>
        <div id="Parcours scolaire">
            <h2>Parcours scolaire :</h2>
            <ul><li>2023-2026 Cycle ingénieur à l'école IMT Nord Europe</li><li>2021-2023 Classe préparatoire à l'école IMT Nord Europe</li><li>2018-2021 Baccalauréat scientifique, mention bien, Saint-Odile </li></ul>
        </div>
        <div id="Experience">
            <h2 id="Experience_Tittle"class="click pointer" style="width: 60%;" >Expériences profesionnelles :</h2>
            <div id="Stages">
                <p>Stages :</p>
                <div id="JE2D">
                    <h4>Mai 2024 à août 2024<br>
                    JE2D (Bureau d'étude - Chanteheux/Amiens)</h4>
                    <ul><li>Création de campagne de phishing et sensibilisation à la cybersécurité</li><li>Recherche de failles potentielles du site grâce à des outils (Burp suite, SQLmap, etc...)</li><li>Remise à niveau des sécurités basique des PC (anti-virus, BitLocker, mot passe complexe, etc...)</li><li>Création de la ROADMap des actions clefs pour la défense de l'entreprise</li></ul>
                </div>
                <div id="Jet Fighter">
                    <h4>Mai 2023 à août 2023</br>
                    Jet Fighter Experience (Bureau d'étude - Douvrin)</h4>
                    <ul><li>Développement d'un outil automatisé dans la prise de donnée sur internet</li><li>Développement de fonctions dans un jeux-vidéo en utilisant des données en temps réel</li><li>Développement d'une application web local permettant le suivis des pistes d'aviation</li><li>Optimisation de l'algorithme des programmes développés</li></ul>
                </div>
                <div id="Match">
                    <h4>Février 2022 à Avril 2022</br>
                    Match (Supermarché - Lambersart)</h4>
                    <ul><li>Optimisation des ventes par pilotage de la démarque en analysant des statistiques</li><li>Proposition de conception et mise en disposition des rayons après profonde transformation du magasin</li><li>Support et aide à la logistique du magasin - Anticipation des ventes du magasin en analysant des statistiques</li></ul>
                </div>
            </div>
        </div>
        <div id="Skills">
            <div id="HardSkills">
                <h2 id="HardSkills_Tittle" class="click pointer" style="width: 30%;" >Hardskills :</h2>
                <ul><li>Stage - développement personnel : Dev web, Burp suite, nmap, hashcat</li> <li>Etudes IMT : C, Python, Arduino, PostgreSQL, Java</li></ul>
            </div>
            <div id="SoftSkills">
                <h2>Softskills :</h2>
                <ul><li>Autonomie, Polyvalence, Adaptabilité, Gestion du stress</li><li>Combatif, Travailleur, Empathique, Altruiste </li></ul>
            </div>
        </div>
        </div>
        </div>
    </div>
    <?php require_once('template_bottom.php'); ?>
</body>
</html>