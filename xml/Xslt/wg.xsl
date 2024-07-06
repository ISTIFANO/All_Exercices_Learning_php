<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/"> <!-- la racine /-->
  <html>
  <body>
<h1> groupe de travail ,<xsl:value-of select="gdt/@month"/>
<xsl:value-of select="gdt/@year"/>  </h1>
<h2>le <xsl:value-of select="gdt/expose/@day"/> <xsl:value-of select="gdt/@month"/>:</h2>
<p>presentation de <xsl:value-of select="gdt/expose/speaker"/></p>
<h3>title  </h3>
<p><xsl:value-of select="gdt/expose/title"/></p>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>