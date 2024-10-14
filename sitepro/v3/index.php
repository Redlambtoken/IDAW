   <?php session_start();?>
<?php require_once("template_header.php");
$_COOKIE['style'] = 1;
setcookie('style',1);
if(isset($_GET['css'])) {
   $_COOKIE['style'] = substr($_GET['css'],-1);
   } 
$currentPageId = "index";
 if(isset($_GET['page'])) {
 $currentPageId = $_GET['page'];
 }  
 getName($currentPageId);
$currentPageLang = "fr";
 if(isset($_GET['lang'])) {
    $currentPageLang = $_GET['lang'];
}  
 require_once("template_menu.php");
 ?> 

 <?php
    if($currentPageId == "index"){
        $currentPageId = "accueil";
     }
     renderMenuToHTML($currentPageId, $currentPageLang);

 ?>
 <section class="corps">
 <?php
    $pageToInclude = "contentBody/" .$currentPageLang. "/" . $currentPageId . ".php";
    if(is_readable($pageToInclude)){
    require_once($pageToInclude);
    }
    else{
    require_once("contentBodt/".$currentPageLang."error.php");
    }
 ?>
 </section>
 <?php require_once("template_bottom.php");
?>