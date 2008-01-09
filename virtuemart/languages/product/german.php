<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : german.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$VM_LANG->initModule('product',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Produktinventar',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Anzahl',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Gewicht',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Ver�ffentlicht',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Produkt suchen',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'ge�ndert',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'mit Preis ge�ndert',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'ohne Preis',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Nach',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Vor',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Produkt-Detailseite im shop zeigen',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Neues Produkt',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Produktinformation',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Produktstatus',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Produktdimensionen und -gewicht',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Produktbilder',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Artikel aktualisieren',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Artikelinformation',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Artikelstatus',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Artikel Dimensionen und Gewicht',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Artikelbilder',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Um das aktuelle Bild zu aktualisieren, bitte Pfad zum neuen Bild angeben.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Das aktuelle Bild l�schen.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Produkt-Artikel',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Artikelattribute',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Soll dieses Produkt\\\\nund die damit verbundenen Artikel wirklich gel�scht werden?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Soll dieser Artikel wirklich gel�scht werden?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Hersteller',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Artikelnummer',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Name',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Kategorie',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Verf�gbarkeitsdatum',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Aktionsprodukt?',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Discounttyp',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Ver�ffentlichen?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'L�nge',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Breite',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'H�he',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Ma�einheit',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Ma�einheit',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Gro�es Bild',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'Kilogramm',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'Meter',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Einheiten pro Verpackung',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'F�llen Sie bitte die Anzahl der Einheiten pro Verpackung ein. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Einheiten pro Paket',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'F�llen Sie bitte die Anzahl der Verpackungseinheiten pro Paket ein. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Resultate: Produkt hinzuf�gen',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Resultate: Produkt aktualisieren',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Resultate: neuer Artikel',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Resultate: Artikel aktualisieren',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Kategorie Information',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Kategoriename',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Elternprodukt',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Kategoriebeschreibung',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Ver�ffentlichen?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Kategorie-�bersichtsseite',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Attributliste f�r',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Attributname',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Attributformular',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Neues Attribut f�r Produkt',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Attribut f�r Produkt aktualisieren',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Neues Attribut f�r Artikel',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Attribute f�r Artikel aktualisieren',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Attributname',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Reihenfolge',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Preis f�r',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Gruppenname',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Preis',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'W�hrung',
	'PHPSHOP_PRICE_FORM_LBL' => 'Preisinformation',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Preis f�r Produkt hinzuf�gen',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Preis f�r Produkt aktualisieren',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Neuen Preis f�r Artikel',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Preis f�r Artikel aktualisieren',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Preis',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'W�hrung',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Kundengruppe',
	'PHPSHOP_LEAVE_BLANK' => '(Bitte nichts eintragen, bevor<br />keine abweichende Detail-php-seite erstellt wurde!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Artikel',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Anfangsdatum des Rabattes',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Bestimmt den Tag, ab dem der Rabatt g�ltig ist.',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Enddatum des Rabattes',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Bestimmt den Tag, bis zu dem der Rabatt g�ltig ist.',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Ver�ffentlicht?',
	'PHPSHOP_FILES_LIST' => 'Datei-Manager::Bild-/Dateiliste f�r',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Dateiname',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Datei - Titel',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Dateityp',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Vollbild',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'kleines Bild',
	'PHPSHOP_FILES_FORM' => 'Datei hinzuf�gen/aktualisieren f�r',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Derzeitige Datei',
	'PHPSHOP_FILES_FORM_FILE' => 'Datei',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Bild',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Speichern in...',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'Standard-Produktbildpfad',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Pfad angeben',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Download Verzeichnis (z.B. f�r Downloadbare G�ter)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Automatisch kleines Bild erzeugen?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Datei ver�ffntlicht?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Datei-Titel (Anzeige f�r den Kunden)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Datei - URL (optional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Geben Sie hier Text ein, der dem Kunden zur Verf�gbarkeit der Produktes angezeit wird.<br />z.B.: 24h, 48 Stunden, 3 - 5 Tage, auf Anfrage.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'Order w�hlen Sie ein Bild, um die Verf�gbarkeit visuell darzustellen.<br />Die Bilder hier sind eine automatische Auflistung aller vorhandenen Bilder in Ihrem Verzeichnis <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Beispiel f�r das Attributslisten-Format:</h4>
        <pre>Gr��e,XL[+1.99],M,S[-2.99];Farbe,Rot,Gr�n,Gelb,TeureFarbe[=24.00];WeiteresAttribut,..,..</pre>
        <h4>Preisanpassungen/-abweichungen sind m�glich:</h4>
        <span class="sectionname">
        <strong>+</strong> bedeutet: Den angegebenen Betrag zum Preis hinzuf�gen.<br />
        <strong>-</strong> bedeutet: Den angegebenen Betrag zum Preis abzuziehen.<br />
        <strong>=</strong> bedeutet: Ersetze den Preis mit dem angegebenen Betrag.
      </span>',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Beispiel f�r die Individual-Attributsliste:</h4>
        <pre>Name;Spruch;Extras;...</pre>',
	'PHPSHOP_IMAGE_ACTION' => 'Bild �ndern?',
	'PHPSHOP_PARAMETERS_LBL' => 'Parameter',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Produkttyp',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Produkttyp-Liste f�r',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Produkttyp hinzuf�gen f�r',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Produkttyp',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Produkttyp - Name',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Produkttyp - Beschreibung',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parameter',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Produkttyp - Information',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Ver�ffentlicht?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Produkttyp - �bersichtsseite',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Produkttyp - Detailseite',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parameter dieses Produkttyps',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameter Information',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Produkttyp nicht gefunden!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parametername',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Dies wird der Name der neu anzulegenden Tabelle in der Datenbank sein. Must also einmalig und ohne Leerzeichen sein.<br/>Beispiel: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameterlabel',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'ganze Zahl',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Kurztext',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Flie�kommazahl',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Buchstaben',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Datum & Zeit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Datum',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Zeit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'mehrere Werte',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'm�gliche Werte',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'die m�glichen Werte als Mehrfachauswahl anzeigen?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Wenn m�gliche Werte eingetragen sind, k�nnen die Parameter nur diese Werte haben. Beispiel f�r m�gliche Werte:</strong><br/><span class="sectionname">Stahl;Holz;Plastik;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Standard-Wert',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Beispiel f�r den Parameter Standard-Wert:<ul><li>Datum: YYYY-MM-DD</li><li>Zeit: HH:MM:SS</li><li>Datum & Zeit: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Einheit',
	'PHPSHOP_PRODUCT_CLONE' => 'Produkt klonen',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'vergriffene Produkte verstecken',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Aktionsprodukte & Rabattierte Produkte',
	'PHPSHOP_FEATURED' => 'Aktionsprodukte',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Aktionsprodukte UND rabattierte Produkte',
	'PHPSHOP_SHOW_DISCOUNTED' => 'Rabattierte Produkte',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'rabattierter Preis',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Hier kann ein rabattierter Endpreis angegeben werden. Es wird beim Speichern aus dem Rabattpreis automatisch ein Rabatt erzeugt und diesem Produkt zugewiesen.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Startanzahl',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Endanzahl',
	'VM_PRODUCTS_MOVE_LBL' => 'Verschieben von Produkten von einer Kategorie in eine andere',
	'VM_PRODUCTS_MOVE_LIST' => 'Die folgenden %s Produkte sollen verschoben werden',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'In die folgende Kategorie verschieben',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'W�hlen Sie eine Produktkategorie aus, um die Produktanordnung �ndern zu k�nnen.',
	'VM_REVIEW_FORM_LBL' => 'Rezension hinzuf�gen',
	'PHPSHOP_REVIEW_EDIT' => 'Rezension hinzuf�gen/�ndern',
	'SEL_CATEGORY' => 'Kategorie ausw�hlen',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Mindestbestellmenge',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximalbestellmenge',
	'VM_DISPLAY_TABLE_HEADER' => 'Display Table Header',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Link to child product from list',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Include Product Type With Child',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'List Style',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Use Parent Settings:',
	'VM_DISPLAY_LIST_TYPE' => 'List:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantity:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Drop Down Box Values',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Display Child Description',
	'VM_DISPLAY_DESC_WIDTH' => 'Child Description Width',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Child Attribute Width',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Child Class Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Product IDs to include',
	'VM_EXTRA_PRODUCT_ID' => 'Extra IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Use Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Display Options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Override Child products Display Values and use parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Quantity Box',
	'PHPSHOP_DISPLAY_HIDE' => 'Hide Quantity Box',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Use Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Use Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'One Add to Cart Button',
	'PHPSHOP_DISPLAY_MANY' => 'Add to Cart Button for each Child',
	'PHPSHOP_DISPLAY_START' => 'Start Value',
	'PHPSHOP_DISPLAY_END' => 'End Value',
	'PHPSHOP_DISPLAY_STEP' => 'Step Value',
	'PRODUCT_WAITING_LIST_TAB' => 'Waiting List',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Users waiting to be notified when this product is back in stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notify these users now (when you have updated the number of products stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'notified',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Select Image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Up',
	'VM_FILES_LIST_GO_UP' => 'Go Up',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Show x products per row',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Category Browse Page',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Clone Product Otions',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Also clone these Child Items',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Name/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Select one or more Products',
	'VM_PRODUCT_SEARCHING' => 'Searching...'
	));
?>