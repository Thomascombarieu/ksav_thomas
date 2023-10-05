<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes pour la page login

$routes->get('login','Login::index');
$routes->post('login/sign-in','Login::signIn');

//routes pour la page ListeVoyage

$routes->get('liste-voyage','ListeVoyage::index');
$routes->get('liste-voyage/ajouter','ListeVoyage::ajouterForm');
$routes->post('liste-voyage/ajouter','ListeVoyage::ajouter');
$routes->get('liste-voyage/modifier','ListeVoyage:modifierForm');
$routes->post('liste-voyage/modifier','ListeVoyage:modifier');

//route de la page retourClient

$routes->get('liste-retour-client','ListeRetourClient::index');

//route de la page ListeClient 

$routes->get('liste-client','ListeClient::index');
$routes->get('liste-client/ajout-client','listeClient::ajouterClientForm');
$routes->post('liste-client/ajout-client','listeClient::ajouterClient');

//route de la page ajout et modification voyage 

$routes->get('ajout-modification-voyage','AjoutModificationVoyage::index');
$routes->get('ajout-modification-voyage','AjoutModificationVoyage::ajouterForm');
$routes->post('ajout-modification-voyage','AjoutModificationVoyage::ajouter');
$routes->get('ajout-modification-voyage','AjoutModificationVoyage::modifierForm');
$routes->post('ajout-modification-voyage','AjoutModificationVoyage::modifier');

//route pour la page ajout client 

$routes->get('ajouter-retour-client-voyage','AjouterRetourClientVoyage::index');
$routes->get('ajRetourClientVoyage','AjRetourClientVoyage::ajouter');



$routes->get('/', 'Home::index');
