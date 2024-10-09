
<?php require_once("template_header.php");
 if(isset($_GET['page'])) {
 $currentPageId = $_GET['page'];
 getName($currentPageId);
 }  
 require_once("template_menu.php");
 ?> 

 <?php
 if($currentPageId == "index"){
    $currentPageId = "accueil";
 }
 renderMenuToHTML($currentPageId);
 ?>
 <section class="corps">
 <?php
 $pageToInclude = "contentBody/" . $currentPageId . ".php";
 if(is_readable($pageToInclude))
 require_once($pageToInclude);
 else
 require_once("error.php");
 ?>
 </section>
 <?php require_once("template_bottom.php");
?>