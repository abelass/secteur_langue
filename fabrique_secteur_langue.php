<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2019-03-19 13:45:28
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'secteur_langue',
    'nom' => 'Secteur par langue',
    'slogan' => 'Spip multilingue avec un secteur par langue',
    'description' => 'Mise en place d\'un Spip multilingue avec un secteur par langue',
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://web-simple.eu',
    'licence' => 'GNU/GPL v3',
    'categorie' => 'navigation',
    'etat' => 'dev',
    'compatibilite' => '[3.0.0;3.2.*]',
    'documentation' => 'https://github.com/abelass/secteur_langue',
    'administrations' => '',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'fonctions',
      1 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);
