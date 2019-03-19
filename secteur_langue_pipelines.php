<?php
/**
 * Utilisations de pipelines par Secteur par langue
 *
 * @plugin     Secteur par langue
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Secteur_langue\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


function secteur_langue_header_prive($flux) {
	$flux .='
	<script type="text/javascript">
		$(document).ready( function() {
			$(".avis_source").click( function() {
				javascript:alert("'._T('secteur_langue:avis_rubrique_source').'");
			});
		});
	</script>
	';
	return $flux;
}