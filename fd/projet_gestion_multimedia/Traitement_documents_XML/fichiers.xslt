<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h1>Liste des fichiers</h1>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>ID</th>
        <th>Nom</th>
        <th>Type</th>
        <th>Taille</th>
        <th>Date de téléchargement</th>
      </tr>
      <xsl:for-each select="fichiers/fichier">
        <tr>
          <td><xsl:value-of select="@id"/></td>
          <td><xsl:value-of select="nom"/></td>
          <td><xsl:value-of select="type"/></td>
          <td><xsl:value-of select="taille"/></td>
          <td><xsl:value-of select="date_telechargement"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
