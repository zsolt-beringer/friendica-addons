<?php

if(! function_exists("string_plural_select_fr")) {
function string_plural_select_fr($n){
	$n = intval($n);
	return intval($n > 1);
}}
;
$a->strings["Jappix Mini addon settings"] = "Paramètres de l'addon Jappix Mini";
$a->strings["Activate addon"] = "Activer l'addon";
$a->strings["Do <em>not</em> insert the Jappixmini Chat-Widget into the webinterface"] = "Ne <em>pas</em> insérer le widget JappixMini dans l'interface web";
$a->strings["Jabber username"] = "Nom d'utilisateur Jabber";
$a->strings["Jabber server"] = "Serveur Jabber";
$a->strings["Jabber BOSH host"] = "Hôte BOSH (proxy) Jabber";
$a->strings["Jabber password"] = "Mot de passe Jabber";
$a->strings["Encrypt Jabber password with Friendica password (recommended)"] = "Chiffrer le mot de passe Jabber avec le mot de passe Friendica (recommandé)";
$a->strings["Friendica password"] = "Mot de passe Friendica";
$a->strings["Approve subscription requests from Friendica contacts automatically"] = "Approuver les contacts Friendica automatiquement";
$a->strings["Subscribe to Friendica contacts automatically"] = "S'inscrire aux contacts Friendica automatiquement";
$a->strings["Purge internal list of jabber addresses of contacts"] = "Purger la liste interne d'adresses Jabber";
$a->strings["Submit"] = "Envoyer";
$a->strings["Add contact"] = "Ajouter un contact";
