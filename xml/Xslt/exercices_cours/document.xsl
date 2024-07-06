<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:variable name="prix" select="70"/>

    <xsl:template match="produits">
        <html>
            <head>
                <title>List of Products</title>
            </head>
            <body>
                <h1>List of Products</h1>
     
                    <xsl:for-each select="produits/produit">

                        <xsl:if test="price &gt; $prix">
                          <ul>
                    <li>
                                <xsl:value-of select="title"/>
                   </li>
                            <li>
   <xsl:value-of select="genre"/>
                            </li>
                            <li>
    <xsl:value-of select="price"/>
                            </li>
                            </ul>
                        </xsl:if>

    </xsl:for-each>
                
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
