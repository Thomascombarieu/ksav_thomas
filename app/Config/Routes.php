<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes pour la page login

$routes->get('/', 'Login::index', ['as' => 'Login_Form']);
$routes->post('/sign-in', 'Login::signIn', ['as' => 'Login']);

//routes pour la page ListeVoyage

$routes->get('liste-voyage', 'ListeVoyage::index', ['as'=> 'Liste_Voyage']);
$routes->get('liste-voyage/ajouter', 'ListeVoyage::ajouterForm', ['as' => 'Ajout_Voyage_Form']);
$routes->post('liste-voyage/ajouter', 'ListeVoyage::ajouter', ['as' => 'Ajout_Voyage']);
$routes->get('liste-voyage/modifier', 'ListeVoyage::modifierForm', ['as' => 'Modifier_Voyage_Form']);
$routes->post('liste-voyage/modifier', 'ListeVoyage::modifier', ['as' => 'Modifier_Voyage']);

//route de la page retourClient

$routes->get('liste-retour-client', 'ListeRetourClient::index', ['as' => 'Liste_Retour_Client']);

//route de la page ListeClient 

$routes->get('liste-client', 'ListeClient::index', ['as' => 'Liste_Client']);
$routes->get('liste-client/ajouter', 'ListeClient::ajouterClientForm', ['as' => 'Ajouter_Client_Form']);
$routes->post('liste-client/ajout-client', 'ListeClient::ajouterClient', ['as' => 'Ajouter_Client']);
$routes->get('liste-client/modifier', 'ListeClient::modifierClientForm', ['as' => 'Modifier_Client_Form']);
$routes->post('liste-client/modifier-client', 'ListeClient::modifierClient', ['as' => 'Modifier_Client']);


//route de la page ajout et modification voyage (déja présente sur liste voyage mais a vérifier)

// $routes->get('ajout-modification-voyage','AjoutModificationVoyage::index');
// $routes->get('ajout-modification-voyage','AjoutModificationVoyage::ajouterForm');
// $routes->post('ajout-modification-voyage','AjoutModificationVoyage::ajouter');
// $routes->get('ajout-modification-voyage','AjoutModificationVoyage::modifierForm');
// $routes->post('ajout-modification-voyage','AjoutModificationVoyage::modifier');

//route pour la page ajout client 

//$routes->get('ajouter-retour-client-voyage','AjouterRetourClientVoyage::index');
$routes->get('ajouter-retour-client-voyage', 'ListeRetourClient::ajouterForm', ['as' => 'Ajout_Retour_Client_Form']);
$routes->post('ajouter-retour-client-voyage', 'ListeRetourClient::ajouter', ['as' => 'Ajout_Retour_Client']);

//route de base (page index)

//$routes->get('/', 'Home::index');
