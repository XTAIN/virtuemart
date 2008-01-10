<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : dutch.php 1071 2007-12-03 08:42:28Z thepisu $
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
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Lijst Volgorde',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Product Inventaris',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Nummer',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Gewicht',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Toon',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Zoek Producten',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'gewijzigd',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'met gewijzigde prijs',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'zonder prijs',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Na',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Voor',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Bekijk de huidige product pagina in de winkel',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Nieuw Product',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Product Informatie',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Product Status',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Product Afmetingen en Gewicht',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Product Afbeeldingen',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Item Wijzigen',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Item Informatie',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Item Status',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Item Afmetingen en Gawicht',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Item Afbeeldingen',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Om huidige afbeelding te veranderen, type het pad naar nieuwe afbeelding.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Verwijder huidige afbeelding',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Product Items',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Item Attributen',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Weet U zeker dat u het product wilt verwijderen\\\\\\\\en de Items die er bij horen?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Weet U zeker dat u het item wilt verwijderen?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Fabrikant',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Art. Nr.',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Naam',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Categorie',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Beschikbaarheids Datum',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Speciaal aan',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Kortings Type',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Tonen?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Lengte',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Breedte',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Hoogte',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Maateenheid',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Maateenheid',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Grote Afbeelding',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'kilogram',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'centimeter',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Aantal in de Verpakking',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Hier kan U het aantal eenheden in de verpakking invullen. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Eenheden in Doos',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Hier kan U het aantal eenheden in een doos invullen. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Product Toevoeging Resultaat',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Product Update Resultaat',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Item Toevoeging Resultaat',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Item Update Resultaat',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Categorie Informatie',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Categorie Naam',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Hoofd',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Categorie Omschrijving',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publiceren?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Categorie Pagina',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Optie Lijst voor',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Optie Naam',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Volgorde',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Optie Formulier',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Nieuwe Optie voor Product',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Optie voor Product updaten',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Nieuwe Optie voor Item',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Update Optie voor Item',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Optie Naam',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Bekijk Orders',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Prijs voor',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Groep Naam',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Prijs',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Valuta',
	'PHPSHOP_PRICE_FORM_LBL' => 'Prijs Informatie',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Nieuwe Prijs voor Product',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Prijs Updaten voor Product',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Nieuwe Prijs voor Item',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Update Prijs voor Item',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Prijs',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Kopers Groep',
	'PHPSHOP_LEAVE_BLANK' => '(Laat leeg wanneer u hier geen eigen <br />php-file voor heeft!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Item',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Start datum van de korting',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Geef de dag waarop de korting begint',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Eind datum van de korting',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Geef de dag waarop de korting eindigt',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Gepubliseerd?',
	'PHPSHOP_FILES_LIST' => 'BestandManager::Afbeelding/Bestands Lijst voor',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Bestandsnaam',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Bestand Titel',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Bestand Type',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Grote Afbeelding',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Thumbnail Afbeelding',
	'PHPSHOP_FILES_FORM' => 'Upload een bestand voor',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Huidig bestand',
	'PHPSHOP_FILES_FORM_FILE' => 'Bestand',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Afbeelding',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Upload naar',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'standaard Product Afbeelding Pad',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Specificeer bestandslokatie',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Download Pad (bv. voor verkoop van te downloaden producten!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Automatisch Thumbnail aanmaken?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Bestand is gepubliseerd?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Bestand Titel (wat de klant ziet)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Bestand URL (optie)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Type een tekst wat getoond wordt aan de klant op de product flypage.<br />Bijvoorbeeld: 24u, 48 uur , 3 - 5 dagen, Op bestelling.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'OF selecteer een afbeelding.<br />De afbeeldingen bevinden zich in de directory <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Voorbeelden van Specificatie lijst opbouw:</h4>
        <span class="sectionname"><strong>Grote</strong>,XL[+1.99],M,S[-2.99]<strong>;Kleur</strong>,Rood,Groen,Geel,Dure Kleur[=24.00]<strong>;Enz</strong>,..,..</span>
        <h4>Prijs verwerking van de Specificatie aanpassing/toevoeging:</h4>
        <span class="sectionname">
        <strong>+</strong> == Tel deze hoeveelheid op bij de standaard prijs.<br />
        <strong>-</strong> == Trek deze hoeveelheid af van de standaard prijs.<br />
        <strong>=</strong> == Maak dit de nieuwe product prijs.
      </span>',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Voorbeelden van Bijzondere Specificatie lijst opbouw:</h4>
        <span class="sectionname"><strong>Naam;Extras;</strong>...</span>',
	'PHPSHOP_IMAGE_ACTION' => 'Afbeelding actie',
	'PHPSHOP_PARAMETERS_LBL' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Product Type',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Product Type Lijst voor',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Product Type Toevoegen voor',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Product Type',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Product Type Naam',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Product Type Omschrijving',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Product Type Informatie',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publiseren?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Product Type Overzicht Pagina',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Product Type Pagina',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parameters van Product Type',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameter Informatie',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Product Type niet gevonden!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parameter Naam',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Deze naam wordt de kolomnaam van de tabel, deze naam moet uniek en zonder spaties zijn.<br/>Bijvoorbeeld: hoofd_materiaal',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameter Label',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Tekst',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Korte Tekst',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Zwevend',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Karakter',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Datum & Tijd',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Datum',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Tijd',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Onderbroken lijn',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Meerdere Waarden',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Mogelijke Waarden',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Laat Mogelijke Waarden als selectielijst zien?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Indien er Mogelijke Waarden zijn, dan kan de Parameter enkel dze waarden krijgen. Voorbeelden van mogelijke waarden zijns:</strong><br/><span class="sectionname">Staal, Hout,...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Standaard waarde',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Voor de standaard waarde gebruikt U het volgende formaat:<ul><li>Datum: JJJJ-MM-DD</li><li>Tijd: HH:MM:SS</li><li>Datum & Tijd: JJJJ-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Eenheid',
	'PHPSHOP_PRODUCT_CLONE' => 'Kopieer Product',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Verberg de prodcuten die niet voorradig zijn',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Producten in aanbieding en met verminderde prijs',
	'PHPSHOP_FEATURED' => 'Aanbieding',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'aanbieding EN korting',
	'PHPSHOP_SHOW_DISCOUNTED' => 'producten met korting',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Verminderde Prijs',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Hier kan U een speciale korting geven aan dit product. Deze heeft voorrang over andere kortingstypen (en de laatste worden dus niet gebruikt).<br/>',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Quantity Start',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Quantity End',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimum Purchase Quantity',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximum Purchase Quantity',
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
); $VM_LANG->initModule( 'product', $langvars );
?>