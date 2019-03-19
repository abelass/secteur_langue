<?php
/**
 * Fonctions utiles au plugin Secteur par langue
 *
 * @plugin     Secteur par langue
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Secteur_langue\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Détermine l'id_parent de la nouvell rubrique traduite
 *
 * @param string $lang
 *   Langue de destination
 * @param string $id_trad
 *   L'id de traduction
 * @param bool $creer_racine
 *   si true, il faut créer la racine
 *
 * @return array
 *   un tablea avec Langue de destination, L'id de traduction et le bool creer_racine
  */



function rubrique_destination_traduction($lang, $id_trad, $creer_racine = '') {
	$id_trad_parent = '';
	$trads = [];

	if ($lang AND $id_trad) {
		// on établit l'id_parent
		$id_trad_parent = sql_getfetsel('id_parent', 'spip_rubriques', 'id_rubrique=' . $id_trad);

		//puis sa traduction
		if ($id_trad_parent)
			$id_parent_trad = sql_getfetsel('id_trad', 'spip_rubriques', 'id_rubrique=' . $id_trad_parent);
		if ($id_trad_parent == 0)
			$trads = [
				0 => 0,
				1 => $id_trad,
				2 => ''
			];
		// S'il il existe une traduction parente dans la langue demandé on retourne son id
		elseif ($id_parent_trad) {
			$rub = sql_fetsel('id_rubrique,id_trad', 'spip_rubriques', 'id_trad=' . $id_parent_trad . ' AND lang=' . sql_quote($lang));
			if ($rub) {
				$trads = [
					0 => $rub['id_rubrique'],
					1 => $id_trad,
					2 => $creer_racine
				];
			}
			else {
				$id_trad = sql_getfetsel('id_trad', 'spip_rubriques', 'id_trad=' . $id_parent_trad);
				$trads = rubrique_destination_traduction($lang, $id_trad, 'oui');
			}
		}
		elseif ($id_trad_parent) {
			$trads = rubrique_destination_traduction($lang, $id_trad_parent, 'oui');
		}
		else
			$trads = [
				0 => 0,
				1 => $id_trad
			];

		return $trads;

	}
	return $trads;

}
