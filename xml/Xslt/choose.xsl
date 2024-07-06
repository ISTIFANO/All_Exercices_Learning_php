<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="UTF-8" indent="yes"/>
<xsl:template match="book"> 
  <html>
  <head><title>list des livres</title></head>
  <body>
  <h1>list des livres </h1>
 
    <li>
    <xsl:value-of select="title"/>
    <xsl:choose>
        <xsl:when test="price &gt; 20"/>
        -prix eleves<xsl:when />
        <xsl:when test="price &gt; 10"/>
        -prix modere<xsl:when />
<xsl:otherwise>
    
</xsl:otherwise>
-prix bas 
    </xsl:choose>

     </li>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>