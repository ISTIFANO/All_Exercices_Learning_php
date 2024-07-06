<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="UTF-8" indent="yes"/>
<xsl:template match="book"> 
<div><xsl:attribute name="id" />
xsl:value-of select="translate(title,"","-")"/>
</xsl:attribute>
<xsl:apply-templates/>
</div>
</xsl:template>
<xsl:template mach=""title|author|genre|price">
<xsl:copy-of select="."/>
</xsl:template>


</xsl:stylesheet>