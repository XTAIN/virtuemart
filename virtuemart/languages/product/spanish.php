<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : spanish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_MODULE_LIST_ORDER' => 'Pedido',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Inventario de Productos',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'el stock',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Peso',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Publicar',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Search Product',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'modyfied',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'with price modyfied',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'without price',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'After',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Before',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Ver Detalles de productos en esta tienda',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Nuevo Producto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Informaci�n del Producto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Estado',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Dimensiones y Peso',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Imagenes',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Actualizar Art�culo',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Informaci�n',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Estado',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Dimensiones y Peso',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Imagenes',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Para actualizar la imagen actual, ingrese el directorio a la nueva imagen.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Introduzca ',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Art�culos',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Cualidades',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Esta seguro de que desea borrar este producto\\\\ny los Art�culos relacionados a el?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Esta seguro de que desea borrar este Art�culo?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Fabricante',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'SKU',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Nombre',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Categor�a',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Fecha de Disponibilidad',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Especial',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Tipo de Descuento',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Longitud',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Anchura',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Altura',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Unidad de Medida',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Unidad de Medida',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Imagen Completa',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'pounds',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'inches',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Units in Packaging',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Here you can fill in a number unit in packaging. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Units in Box',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Here you can fill in a number unit in box. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Mostrar Producto A�adido',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Mostrar Producto Actualizado',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Mostrar Art�culo A�adido',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Mostrar Art�culo Actualizado',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Formulario de Informaci�n',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Nombre de Categor�a',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Pariente de Categor�a',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Descripci�n de Categor�a',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Categor�a Detallada',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Lista de Cualidad por',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Nombre de Cualidad',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Cualidad de Pedido',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Formulario de Cualidad',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Nueva Cualidad por Producto',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Cualidad Actualizada por Producto',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Nueva Cualidad por Art�culo',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Cualidad Actualizada por Art�culo',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Nombre de cualidad',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Cualidad de Pedido',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Precios por',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Grupo de Lista del Precio',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Lista de Precio',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Moneda de Lista del Producto',
	'PHPSHOP_PRICE_FORM_LBL' => 'Informaci�n',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Nuevo Precio por Producto',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Actualizar Precio por Producto',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Nuevo Precio por Art�culo',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Actualizar Precio por Art�culo',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Precio',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Moneda',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Grupo de Compradores',
	'PHPSHOP_LEAVE_BLANK' => '(dejar en BLANCO si usted tiene<br />no archivo php individual)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'articulo',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Fecha de comienzo del descuento',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Especifique el d�a cuando empieze el descuento',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Fecha final de descuento',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Especifique el d�a que se acaba el descuento',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'publicado?',
	'PHPSHOP_FILES_LIST' => 'FileManager::Imagen/Lista del archivo para',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Nombre del archivo',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Titulo del archivo',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Tipo del archivo',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Imagen Completa',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Thumbnail Image',
	'PHPSHOP_FILES_FORM' => 'Subir archivo para',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Archivo actual',
	'PHPSHOP_FILES_FORM_FILE' => 'Archivo',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Imagen',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Subir a',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'defecto Producto paso de Imagen',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Especifique la localizaci�n del archivo',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'paso de descargar (e.j. para vender downloadables!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Auto-Crear Thumbnail?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Est� publicado el archivo?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Titulo del archivo (que ven los clientes)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Archivo URL (optional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Completar cualquir texto aqu� que estar� mostrado para el cliente en el detalle del producto. <br />e.j.: 24h, 48 hours, 3 - 5 d�as, en el pedido.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'O seleccionar una Imagen para mostrar en la p�gina del detalle (flypage).<br />Las imagenes residen en el directorio <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Ejemplos para el formato de la lista de la atribuci�n:</h4>
        <span class="sectionname"><strong>Talla</strong>,XL[+1.99],M,S[-2.99]<strong>;Color</strong>,Rojo,Verde,Amarillo,colorcostoso[=24.00]<strong>;ycontinua</strong>,..,..</span>
        <h4>Ajustes del precio en l�nea para utilizar la modificaci�n avanzada de las atrobuciones:</h4>
        <span class="sectionname">
        <strong>+</strong> == A�adir esta cantidad para precio configurado.<br />
        <strong>-</strong> == Restar esta cantidad desde el precio configurado.<br />
        <strong>=</strong> == Poner los precios del producto a esta cantidad.
      </span>',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Ejemplos para el formato de la lista de la aduana stributo:</h4>
        <span class="sectionname"><strong>Name;Extras;</strong>...</span>',
	'PHPSHOP_IMAGE_ACTION' => 'Image Action',
	'PHPSHOP_PARAMETERS_LBL' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Product Type',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Product Type List for',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Add Product Type for',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Product Type',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Product Type Name',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Product Type Description',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Product Type Information',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publish?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Product Type Browse Page',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Product Type Flypage',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parameters of Product Type',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameter Information',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Product Type not found!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parameter Name',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'This name will be column name of table. Must be unicate and without space.<br/>For example: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameter Label',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Short Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Float',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Char',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Date & Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Date',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Multiple Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Possible Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Show Possible Values as Multiple select?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><br/><span class="sectionname">Steel;Wood;Plastic;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Default Value',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Unit',
	'PHPSHOP_PRODUCT_CLONE' => 'Clone Product',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Hide out of stock products',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Featured & Discounted Products',
	'PHPSHOP_FEATURED' => 'Featured',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'featured AND discounted',
	'PHPSHOP_SHOW_DISCOUNTED' => 'discounted products',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Discounted Price',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.',
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
	));
?>