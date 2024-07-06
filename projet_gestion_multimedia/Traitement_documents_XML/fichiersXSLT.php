<?php
// Chargement du document XML
$xml = new DOMDocument();
$xml->load('fichiers.xml');

// Chargement de la feuille de style XSLT
$xsl = new DOMDocument();
$xsl->load('fichiers.xslt');

// Configuration du processeur XSLT
$proc = new XSLTProcessor();
$proc->importStylesheet($xsl);

// Transformation du document XML
$res = $proc->transformToXML($xml);

// Affichage du résultat
echo $res;
?>
