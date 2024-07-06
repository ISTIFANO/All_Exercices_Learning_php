<?php
$xml=new DOMDocument();
$xml->load('produits.xml');
$xsl=new DOMDocument();
$xsl->load('xssl.xsl');
$processor=new XSLTProcessor();
$processor->importStylesheet($xsl);
$htmlcontent=$processor->transformToXml($xml);
file_put_contents('ouput.fo',$htmlcontent);
$xslFoFile='ouput.fo';
$pdfFile='ouput.pdf';
$commande= "fop -fo $xslFoFile -pdf $pdfFile";
print $commande;

?>