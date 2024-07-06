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

    <xsl:if test="price>10">
    </xsl:if>
   
    </li>
    
    </body>
</html>
</xsl:template>
</xsl:stylesheet>