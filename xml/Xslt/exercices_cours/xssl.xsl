<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
xmlns:fo="http://www.w3.org/1999/XSL/Format">
<xsl:output method="html" encoding="utf-8" indent="yes"/>
<xsl:template match="/">
<fo:root>
    <fo:layout-master-set>
        <fo:simple-page-master master-name="page" page-width="8.5in" page-height="11in">
            <fo:region-body margin="1in"/>
        </fo:simple-page-master>
    </fo:layout-master-set>
    <fo:page-sequence master-reference="page">
        <fo:block font-size="20pt" font-weight="bold" text-align="center">liste des Produites </fo:block>
            <fo:block font-size="12pt" margin-top="20pt">
                <xsl:apply-templates select="produits/produit"/>

            </fo:block>
    </fo:page-sequence>
</fo:root>
</xsl:template>
<xsl:template match="book">
    <fo:block font-size="16pt" font-weight="bold" margin-top="20pt">
        <xsl:value-of select="nom"/>
    </fo:block>
    <fo:block font-size="12pt" >
        <xsl:text>prix:</xsl:text>
        <xsl:value-of select="prix"/>
    </fo:block>
    <fo:block font-size="12pt">
        <xsl:text>categorie:</xsl:text>
        <xsl:value-of select="categorie"/>
    </fo:block>

</xsl:template>

</xsl:stylesheet>
