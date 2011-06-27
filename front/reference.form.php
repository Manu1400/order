<?php
/*
 * @version $Id: HEADER 2011-03-23 15:41:26 tsmr $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2010 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
// ----------------------------------------------------------------------
// Original Authors of file: 
// NOUH Walid & FONTAN Benjamin & CAILLAUD Xavier & François Legastelois
// Purpose of file: plugin order v1.4.0 - GLPI 0.80
// ----------------------------------------------------------------------
// ---------------------------------------------------------------------- */

define('GLPI_ROOT', '../../..'); 
include (GLPI_ROOT."/inc/includes.php");
/*
if(!isset($_GET["id"])) {
   $_GET["id"] = "";
}
if(!isset($_GET["withtemplate"])) {
   $_GET["withtemplate"] = "";
}

$reference=new PluginOrderReference();

// add order
if (isset($_POST["add"])) {
   $reference->check(-1,'w',$_POST);
   $newID = $reference->add($_POST);
   glpi_header($_SERVER['HTTP_REFERER']."?id=$newID");
}
//delete order
else if (isset($_POST["delete"])) {
   $reference->check($_POST['id'],'w');
   $reference->delete($_POST);
   $reference->redirectToList();
}
// restore order
else if (isset($_POST["restore"])) {
   $reference->check($_POST['id'],'w');
   $reference->restore($_POST);
   $reference->redirectToList();
}
// purge order
else if (isset($_POST["purge"])) {
   $reference->check($_POST['id'],'w');
   $reference->delete($_POST,1);
   $reference->redirectToList();
}
// update order
else if (isset($_POST["update"])) {
   $reference->check($_POST['id'],'w');
   $reference->update($_POST);
   glpi_header($_SERVER['HTTP_REFERER']);
}
else {
   $reference->checkGlobal("r");
   commonHeader($LANG['plugin_order']['reference'][1],'',"plugins", "order", "reference");
   $reference->showForm($_GET["id"]);

   commonFooter();
}*/
$dropdown = new PluginOrderReference();
include (GLPI_ROOT . "/front/dropdown.common.form.php");


?>