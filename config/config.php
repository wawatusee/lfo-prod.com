<?php require_once("../model/menus_model.php");
  $titre=["LFOPROD","FILM-CORPORATE-COMMERCIAL","logo.png"];
$menus=new MenusModel("../json/menus.json");
$menuRS=$menus->getMenu("RS_menu");
