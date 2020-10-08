<?php
/*
 * Fichier index.php principal
 */

include 'classes/employe.php';
include 'classes/projet.php';
include 'includes/traitement.php';

try {
  /*Traitement::instanciationUnEmploye();
  Traitement::instanciationUnEmployeErreur();
  Traitement::instanciationUnEmploye();*/
  Traitement::instanciationProjetV1();
} catch (Exception $ex) {
  echo $ex->getMessage();
}
