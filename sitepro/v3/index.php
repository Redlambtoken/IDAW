
<?php require_once("template_header.php");
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
 <form id="style_form" action="index.php" method="GET">
   <select name="css">
      <option value="style1">style1</option>
      <option value="style2">style2</option>
   </select>
   <input type="submit" value="Appliquer" />
 </form>
 </section>
 <?php require_once("template_bottom.php");
?>