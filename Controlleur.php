<?php

require 'Modele.php';

function accueil(){
	$billets = getBillets();
	require 'vueAcceuil.php';
}

function billet($idBillet){
	$billet = getBillet($idBillet);
	$commentaires = getCommentaires($idBillet);
	require 'vueBillet.php';
}

function erreur ($msgErreur)
{
	require 'vueErreur.php';
}


