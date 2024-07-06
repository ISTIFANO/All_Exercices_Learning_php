<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:output method="html" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
  <html>
  <head>
    <title>rapport</title>
  </head>
  <body>
    <h1> rapport des notes </h1>
    <table border="1">
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Matiere</th>
        <th>Note</th>
      </tr>
       <xsl:for-each select="rapport/etudiant"> 
        <xsl:variable name="nom" select="nom"/>
        <xsl:variable name="prenom" select="prenom"/>

        <xsl:for-each select="matieres/matiere">
          <tr>
            <td><xsl:value-of select="$nom"/></td>
            <td><xsl:value-of select="$prenom"/></td>
            <td><xsl:value-of select="nom"/></td>
            <td><xsl:value-of select="note"/></td>
          </tr>
        </xsl:for-each>
      </xsl:for-each>
  
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
