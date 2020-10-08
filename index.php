<?php
/*
 * Fichier index.php principal
 */

include 'classes/employe.php';
include 'includes/traitement.php';

try {
  Traitement::instanciationUnEmploye();
  Traitement::instanciationUnEmployeErreur();
  Traitement::instanciationUnEmploye();
} catch (Exception $ex) {
  echo $ex->getMessage();
}
