<?xml version="1.0" encoding="UTF-8"?>


<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xml:output method="html" encoding="UTF-8" indent="yes"/>
<xsl:template match="/"> 
  <html>
  <head><title>list des livres</title></head>
  <body>
  <h1>list des livres </h1>
<ul><xsl:apply-templates select="bookstore/book"/></ul>
</body>

  </html>
  </xsl:templates>
</xsl:stylesheet>