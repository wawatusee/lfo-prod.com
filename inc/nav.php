<?php
 $menuMain_model=$menus->getMenu("Main_menu");
 require_once("../view/view_menus.php");
 $menusView=new ViewMenu;
 $menuMain_view=$menusView->getViewMainMenu($menuMain_model);
 ?>
<nav class="responsiveMenu" id="responsiveMenu">
        <?php
        echo $menuMain_view;
        ?>
</nav>