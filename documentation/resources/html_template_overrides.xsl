<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<!-- make all gui elements appear bold.
This adds html bold tags to each gui element (guibutton, guiicon, guilabel, guimenu, guimenuitem, guisubmenu)          
Applies to: html output only    
Comment the whole block out to make gui elements appear as regular text.
-->
<xsl:template match="guibutton">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<xsl:template match="guiicon">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<xsl:template match="guilabel">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<xsl:template match="guimenu">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<xsl:template match="guimenuitem">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<xsl:template match="guisubmenu">
<b><xsl:call-template name="inline.charseq"/></b>
</xsl:template>

<!--
############################
# Override the Revision History Template and restructure it 
############################
-->
<xsl:template match="revhistory" mode="titlepage.mode">
  <xsl:variable name="numcols">
    <xsl:choose>
      <xsl:when test=".//authorinitials|.//author">3</xsl:when>
      <xsl:otherwise>2</xsl:otherwise>
    </xsl:choose>
  </xsl:variable>

  <xsl:variable name="id"><xsl:call-template name="object.id"/></xsl:variable>

  <xsl:variable name="title">
    <xsl:call-template name="gentext">
      <xsl:with-param name="key">RevHistory</xsl:with-param>
    </xsl:call-template>
  </xsl:variable>

  <xsl:variable name="contents">
    <div class="{name(.)}">
            <h4>
              <xsl:call-template name="gentext">
                <xsl:with-param name="key" select="'RevHistory'"/>
              </xsl:call-template>
            </h4>
		<dl>
        <xsl:apply-templates mode="titlepage.mode">
          <xsl:with-param name="numcols" select="$numcols"/>
        </xsl:apply-templates>
      </dl>
    </div>
  </xsl:variable>
  
  <xsl:choose>
    <xsl:when test="$generate.revhistory.link != 0">
      <xsl:variable name="filename">
        <xsl:call-template name="make-relative-filename">
          <xsl:with-param name="base.dir" select="$base.dir"/>
          <xsl:with-param name="base.name" select="concat($id,$html.ext)"/>
        </xsl:call-template>
      </xsl:variable>

      <a href="{concat($id,$html.ext)}">
        <xsl:copy-of select="$title"/>
      </a>

      <xsl:call-template name="write.chunk">
        <xsl:with-param name="filename" select="$filename"/>
        <xsl:with-param name="quiet" select="$chunk.quietly"/>
        <xsl:with-param name="content">
        <xsl:call-template name="user.preroot"/>
          <html>
            <head>
              <xsl:call-template name="system.head.content"/>
              <xsl:call-template name="head.content">
                <xsl:with-param name="title">
                    <xsl:value-of select="$title"/>
                    <xsl:if test="../../title">
                        <xsl:value-of select="concat(' (', ../../title, ')')"/>
                    </xsl:if>
                </xsl:with-param>
              </xsl:call-template>
              <xsl:call-template name="user.head.content"/>
            </head>
            <body>
              <xsl:call-template name="body.attributes"/>
              <xsl:copy-of select="$contents"/>
            </body>
          </html>
          <xsl:text>
</xsl:text>
        </xsl:with-param>
      </xsl:call-template>
    </xsl:when>
    <xsl:otherwise>
      <xsl:copy-of select="$contents"/>
    </xsl:otherwise>
  </xsl:choose>
</xsl:template>

<xsl:template match="revhistory/revision" mode="titlepage.mode">
  <xsl:param name="numcols" select="'3'"/>
  <xsl:variable name="revnumber" select="revnumber"/>
  <xsl:variable name="revdate" select="date"/>
  <xsl:variable name="revauthor" select="authorinitials|author"/>
  <xsl:variable name="revremark" select="revremark|revdescription"/>
  <dt>
      <xsl:if test="$revnumber">
        <xsl:call-template name="gentext">
          <xsl:with-param name="key" select="'Revision'"/>
        </xsl:call-template>
        <xsl:call-template name="gentext.space"/>
        <xsl:apply-templates select="$revnumber[1]" mode="titlepage.mode"/>
      </xsl:if>
    ; Date: 
      <xsl:apply-templates select="$revdate[1]" mode="titlepage.mode"/>
    
    <xsl:choose>
      <xsl:when test="$revauthor">
        ; Author(s): 
          <xsl:for-each select="$revauthor">
            <xsl:apply-templates select="." mode="titlepage.mode"/>
            <xsl:if test="position() != last()">
	      <xsl:text>, </xsl:text>
	    </xsl:if>
	  </xsl:for-each>
        
      </xsl:when>
      <xsl:when test="$numcols &gt; 2">
         &#160;
      </xsl:when>
      <xsl:otherwise/>
    </xsl:choose>
  </dt>
  <xsl:if test="$revremark">
    <dd>
        <xsl:apply-templates select="$revremark[1]" mode="titlepage.mode"/>
      </dd>
  </xsl:if>
</xsl:template>

<!--
############################
# Override the Header Navigation to use CSS Classes
############################
-->
<xsl:template name="header.navigation">
  <xsl:param name="prev" select="/foo"/>
  <xsl:param name="next" select="/foo"/>
  <xsl:param name="nav.context"/>

  <xsl:variable name="home" select="/*[1]"/>
  <xsl:variable name="up" select="parent::*"/>

  <xsl:variable name="row1" select="$navig.showtitles != 0"/>
  <xsl:variable name="row2" select="count($prev) &gt; 0                                     or (count($up) &gt; 0                                          and generate-id($up) != generate-id($home)                                         and $navig.showtitles != 0)                                     or count($next) &gt; 0"/>

   <xsl:if test="$suppress.navigation = '0' and $suppress.header.navigation = '0'">
    
      <xsl:if test="$row1 or $row2">        
          <xsl:if test="$row1">
             <div id="header"><div class="api-title">
                <xsl:apply-templates select="." mode="object.title.markup"/>
              </div>
			  </div>
          </xsl:if>

          <xsl:if test="$row2">
            <table class="book" width="100%">
			<tr>
              <th style="width:20%; text-align:left;">
                <xsl:if test="count($prev)&gt;0">
                  <a class="navbar-previous" accesskey="p">
                    <xsl:attribute name="href">
                      <xsl:call-template name="href.target">
                        <xsl:with-param name="object" select="$prev"/>
                      </xsl:call-template>
                    </xsl:attribute>
                    <xsl:call-template name="navig.content">
                      <xsl:with-param name="direction" select="'prev'"/>
                    </xsl:call-template>
                  </a>
                </xsl:if>
                <xsl:text>&#160;</xsl:text>
              </th>
              <th width="60%" align="center">
                <xsl:choose>
                  <xsl:when test="count($up) &gt; 0       and generate-id($up) != generate-id($home)                                   and $navig.showtitles != 0">
                    <xsl:apply-templates select="$up" mode="object.title.markup"/>
                  </xsl:when>
                  <xsl:otherwise>&#160;</xsl:otherwise>
                </xsl:choose>
              </th>
              <th style="width:20%; text-align:right;">
                <xsl:text>&#160;</xsl:text>
                <xsl:if test="count($next)&gt;0">
                  <a class="navbar-next" accesskey="n">
                    <xsl:attribute name="href">
                      <xsl:call-template name="href.target">
                        <xsl:with-param name="object" select="$next"/>
                      </xsl:call-template>
                    </xsl:attribute>
                    <xsl:call-template name="navig.content">
                      <xsl:with-param name="direction" select="'next'"/>
                    </xsl:call-template>
                  </a>
                </xsl:if>
              </th>
            </tr>
        </table>
          </xsl:if>
      </xsl:if>
      <xsl:if test="$header.rule != 0">
        <hr/>
      </xsl:if>
  </xsl:if>
</xsl:template>

<!-- ==================================================================== -->
<!--
############################
# Override the Footer Navigation and make it use CSS Classes
############################
-->
<xsl:template name="footer.navigation">
  <xsl:param name="prev" select="/foo"/>
  <xsl:param name="next" select="/foo"/>
  <xsl:param name="nav.context"/>

  <xsl:variable name="home" select="/*[1]"/>
  <xsl:variable name="up" select="parent::*"/>

  <xsl:variable name="row1" select="count($prev) &gt; 0                                     or count($up) &gt; 0                                     or count($next) &gt; 0"/>

  <xsl:variable name="row2" select="($prev and $navig.showtitles != 0)                                     or (generate-id($home) != generate-id(.)                                         or $nav.context = 'toc')                                     or ($chunk.tocs.and.lots != 0                                         and $nav.context != 'toc')                                     or ($next and $navig.showtitles != 0)"/>

  <xsl:if test="$suppress.navigation = '0' and $suppress.footer.navigation = '0'">
    <div class="navfooter">
      <xsl:if test="$footer.rule != 0">
        <hr/>
      </xsl:if>

      <xsl:if test="$row1 or $row2">
        <table width="100%" summary="Navigation footer">
          <xsl:if test="$row1">
            <tr>
              <td width="40%" align="left">
                <xsl:if test="count($prev)&gt;0">
                  <a class="navbar-previous" accesskey="p">
                    <xsl:attribute name="href">
                      <xsl:call-template name="href.target">
                        <xsl:with-param name="object" select="$prev"/>
                      </xsl:call-template>
                    </xsl:attribute>
                    <xsl:call-template name="navig.content">
                      <xsl:with-param name="direction" select="'prev'"/>
                    </xsl:call-template>
                  </a>
                </xsl:if>
                <xsl:text>&#160;</xsl:text>
              </td>
              <td width="20%" align="center">
                <xsl:choose>
                  <xsl:when test="count($up)&gt;0">
                    <a class="navbar-up" accesskey="u">
                      <xsl:attribute name="href">
                        <xsl:call-template name="href.target">
                          <xsl:with-param name="object" select="$up"/>
                        </xsl:call-template>
                      </xsl:attribute>
                      <xsl:call-template name="navig.content">
                        <xsl:with-param name="direction" select="'up'"/>
                      </xsl:call-template>
                    </a>
                  </xsl:when>
                  <xsl:otherwise>&#160;</xsl:otherwise>
                </xsl:choose>
              </td>
              <td width="40%" align="right">
                <xsl:text>&#160;</xsl:text>
                <xsl:if test="count($next)&gt;0">
                  <a class="navbar-next" accesskey="n">
                    <xsl:attribute name="href">
                      <xsl:call-template name="href.target">
                        <xsl:with-param name="object" select="$next"/>
                      </xsl:call-template>
                    </xsl:attribute>
                    <xsl:call-template name="navig.content">
                      <xsl:with-param name="direction" select="'next'"/>
                    </xsl:call-template>
                  </a>
                </xsl:if>
              </td>
            </tr>
          </xsl:if>

          <xsl:if test="$row2">
            <tr>
              <td width="40%" align="left" valign="top">
                <xsl:if test="$navig.showtitles != 0">
                  <xsl:apply-templates select="$prev" mode="object.title.markup"/>
                </xsl:if>
                <xsl:text>&#160;</xsl:text>
              </td>
              <td width="20%" align="center">
                <xsl:choose>
                  <xsl:when test="$home != . or $nav.context = 'toc'">
                    <a class="navbar-home" accesskey="h">
                      <xsl:attribute name="href">
                        <xsl:call-template name="href.target">
                          <xsl:with-param name="object" select="$home"/>
                        </xsl:call-template>
                      </xsl:attribute>
                      <xsl:call-template name="navig.content">
                        <xsl:with-param name="direction" select="'home'"/>
                      </xsl:call-template>
                    </a>
                    <xsl:if test="$chunk.tocs.and.lots != 0 and $nav.context != 'toc'">
                      <xsl:text>&#160;|&#160;</xsl:text>
                    </xsl:if>
                  </xsl:when>
                  <xsl:otherwise>&#160;</xsl:otherwise>
                </xsl:choose>

                <xsl:if test="$chunk.tocs.and.lots != 0 and $nav.context != 'toc'">
                  <a class="navbar-toc" accesskey="t">
                    <xsl:attribute name="href">
                      <xsl:apply-templates select="/*[1]" mode="recursive-chunk-filename">
                        <xsl:with-param name="recursive" select="true()"/>
                      </xsl:apply-templates>
                      <xsl:text>-toc</xsl:text>
                      <xsl:value-of select="$html.ext"/>
                    </xsl:attribute>
                    <xsl:call-template name="gentext">
                      <xsl:with-param name="key" select="'nav-toc'"/>
                    </xsl:call-template>
                  </a>
                </xsl:if>
              </td>
              <td width="40%" align="right" valign="top">
                <xsl:text>&#160;</xsl:text>
                <xsl:if test="$navig.showtitles != 0">
                  <xsl:apply-templates select="$next" mode="object.title.markup"/>
                </xsl:if>
              </td>
            </tr>
          </xsl:if>
        </table>
      </xsl:if>
    </div>
  </xsl:if>
</xsl:template>
</xsl:stylesheet>