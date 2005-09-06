<?php
/*
* @version $Id: spanish.php,v 1.25 2005/06/22 19:50:45 soeren_nb Exp $
* @package Mambo_4.5.1
* @subpackage mambo-phpShop
*
* @copyright (C) 2004 Soeren Eberhardt
* @translation Taeko Hoshikawa & Paulo Bueno (pbueno@dixitalia.com)
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
class phpShopLanguage extends mosAbstractLanguage {
    
    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Men�";
    var $_PHPSHOP_CATEGORY = "Categor�a";
    var $_PHPSHOP_CATEGORIES = "Categor�as";
    var $_PHPSHOP_ADMIN = "Administraci�n";
    var $_PHPSHOP_PRODUCT = "Producto";
    var $_PHPSHOP_LIST = "lista";
    var $_PHPSHOP_ALL = "todos";
    var $_PHPSHOP_VIEW = "vista";
    var $_PHPSHOP_SHOW = "muestra";
    var $_PHPSHOP_ADD = "a�adir";
    var $_PHPSHOP_UPDATE = "actualizar";
    var $_PHPSHOP_DELETE = "borrar";
    var $_PHPSHOP_SELECT = "selecionar";
	var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Productos al Azar";
    var $_PHPSHOP_LATEST = "�ltimos Productos";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Inicio";
    var $_PHPSHOP_CART_TITLE = "Pedido";
    var $_PHPSHOP_CHECKOUT_TITLE = "Terminar Pedido";
    var $_PHPSHOP_LOGIN_TITLE = "Ingresar";
    var $_PHPSHOP_LOGOUT_TITLE = "Retiro";
    var $_PHPSHOP_BROWSE_TITLE = "Productos";
    var $_PHPSHOP_SEARCH_TITLE = "Buscar";
    var $_PHPSHOP_ACCOUNT_TITLE = "Mantenimiento de Cuenta";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navegacion";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Departamento";
    var $_PHPSHOP_INFO = "Informaci�n";
    
    var $_PHPSHOP_BROWSE_LBL = "Escoger Producto";
    var $_PHPSHOP_PRODUCTS_LBL = "Productos";
    var $_PHPSHOP_PRODUCT_LBL = "Producto";
    var $_PHPSHOP_SEARCH_LBL = "Buscar";
    var $_PHPSHOP_FLYPAGE_LBL = "Detalle de Producto";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Nombre de Producto";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Categoria";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Descripci�n";
    
    var $_PHPSHOP_CART_SHOW = "Mostrar Pedido";
    var $_PHPSHOP_CART_ADD_TO = "A�adir a mi Pedido";
    var $_PHPSHOP_CART_NAME = "Nombre";
    var $_PHPSHOP_CART_SKU = "SKU";
    var $_PHPSHOP_CART_PRICE = "Precio";
    var $_PHPSHOP_CART_QUANTITY = "Cantidad";
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotal";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "A�adir una nueva";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Direcci�n de env�o";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Su busqueda arroj� 0 resultados.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "Precio: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Orden";
    var $_PHPSHOP_NO_CUSTOMER = "Lo siento, pero usted no es un cliente registrado.<BR>
                                    Por favor, proceda a registrarse en nuestra tienda.<BR>
                                    Gracias.";
    var $_PHPSHOP_DELETE_MSG = "Esta seguro que desea borrar esta entrada?";
    var $_PHPSHOP_THANKYOU = "Gracias por su pedido.";
    var $_PHPSHOP_NOT_SHIPPED = "No ha sido enviado a�n";
    var $_PHPSHOP_EMAIL_SENDTO = "Un correo de confirmacion le ha sido enviado a";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Lo siento, no hay usuario que pueda a�adir a la lista de usuarios com_phpshop";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "ERROR";
    var $_PHPSHOP_MOD_NOT_REG = "Modulo No Registrado.";
    var $_PHPSHOP_MOD_ISNO_REG = "no es un modulo phpShop v�lido.";
    var $_PHPSHOP_MOD_NO_AUTH = "No tiene permiso a acceder el m�dulo requerido.";
    var $_PHPSHOP_PAGE_404_1 = "La p�gina no existe";
    var $_PHPSHOP_PAGE_404_2 = "Este archivo no existe. No ha podido encontrar el archivo:";
    var $_PHPSHOP_PAGE_403 = "Permisos Insuficientes";
    var $_PHPSHOP_FUNC_NO_EXEC = "No tiene permiso para ejecutar ";
    var $_PHPSHOP_FUNC_NOT_REG = "Funci�n No Registrada";
    var $_PHPSHOP_FUNC_ISNO_REG = " no es una funci�n de MOS_com_phpShop.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Administraci�n";
    
    
    // User Lista
    var $_PHPSHOP_USER_LIST_MNU = "Listar Usuarios";
    var $_PHPSHOP_USER_LIST_LBL = "Lista de Usuarios";
    var $_PHPSHOP_USER_LIST_USERNAME = "Nombre";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Nombre Completo";
    var $_PHPSHOP_USER_LIST_GROUP = "Grupo";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "A�adir Usuario";
    var $_PHPSHOP_USER_FORM_LBL = "A�adir/Actualizar Informaci�n de Usuario";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Informaci�n de Cuenta A ";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Direcci�n de Env�o";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "A�adir Direcci�n";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Direcci�n";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Nombre";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Apellidos";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Segundo Nombre";
    var $_PHPSHOP_USER_FORM_TITLE = "Cargo";
    var $_PHPSHOP_USER_FORM_USERNAME = "Usuario";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Contrase�a";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Confirmar Contrase�a";
    var $_PHPSHOP_USER_FORM_PERMS = "Permisos";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Compa��a";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_USER_FORM_CITY = "Ciudad";
    var $_PHPSHOP_USER_FORM_STATE = "Provincia";
    var $_PHPSHOP_USER_FORM_ZIP = "C�digo Postal";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_USER_FORM_PHONE = "Tel�fono";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Correo Electr�nico";
    
    // Module Lista
    var $_PHPSHOP_MODULE_LIST_MNU = "Listar Modulos";
    var $_PHPSHOP_MODULE_LIST_LBL = "Lista de Modulos";
    var $_PHPSHOP_MODULE_LIST_NAME = "Modulo";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Permisos";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funciones";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Pedido";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "A�adir Modulo";
    var $_PHPSHOP_MODULE_FORM_LBL = "Informaci�n";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Etiqueta";
    var $_PHPSHOP_MODULE_FORM_NAME = "Nombre";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Permisos";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Encabezado";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Pie";
    var $_PHPSHOP_MODULE_FORM_MENU = "Menu?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Pedido";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Descripci�n";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "C�digo de Idioma";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Archivo de Idioma";
    
    // Function Lista
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Listar Funciones";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Lista de Funciones";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Nombre";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Nombre de clase";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "M�todo de Clase";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Permisos";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "A�adir Funci�n";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Informaci�n";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Nombre";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Nombre de Calse";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "M�todo de Clase";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Permisos";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Descripci�n";
    
    // Moneda form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Listar monedas";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Lista de monedas";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "A�adir moneda";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Nombre de moneda";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "C�digo de moneda";
    
    // Pa�s form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "listar Pa�ses";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Lista de Pa�ses";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "A�adir Pa�s";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Nombre de Pa�s";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "c�digo de Pa�s (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "c�digo de Pa�s (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Direcci�n";
    var $_PHPSHOP_HOME_TITLE = "Inicio";
    var $_PHPSHOP_CART_TITLE = "Pedido";
    var $_PHPSHOP_CHECKOUT_TITLE = "Terminar Pedido";
    var $_PHPSHOP_CONTINUE = "Continuar";
    var $_PHPSHOP_LOGIN_TITLE = "Ingresar";
    var $_PHPSHOP_LOGOUT_TITLE = "Retiro";
    var $_PHPSHOP_BROWSE_TITLE = "Productos";
    var $_PHPSHOP_SEARCH_TITLE = "Buscar";
    var $_PHPSHOP_ACCOUNT_TITLE = "Maintenimiento<BR>de Cuenta";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navegaci�n";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Departamento";
    
    var $_PHPSHOP_BROWSE_LBL = "Productos";
    var $_PHPSHOP_SEARCH_LBL = "Buscar";
    var $_PHPSHOP_FLYPAGE_LBL = "Detalles";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Nombre";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Categor�a";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Descripci�n";
    
    var $_PHPSHOP_CART_NAME = "Nombre";
    var $_PHPSHOP_CART_SKU = "SKU";
    var $_PHPSHOP_CART_PRICE = "Precio";
    var $_PHPSHOP_CART_QUANTITY = "Cantidad";
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotal";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Su Pedido est� actualmente vac�o.";
    var $_PHPSHOP_PRICE_LABEL = "Precio: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Pedido";
    
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";

    
    // Env�o Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping Servidor de InterShipper";
    var $_PHPSHOP_ISSHIP_PING_LBL = "Servidor-InterShipper Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "Fallo de Ping InterShipper";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "Respuesta de Ping InterShipper";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Transporte";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Tiempo de<BR>Respuesta";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "seg.";
    
    // Env�o Lista
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Listar M�todo de Env�o";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "M�todo de Env�o Actual";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "M�todo de Env�o";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Activo";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Cargos por manejo";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Tiempo de Lead";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "tarifa plana";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "porciento";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "d�as";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Cargas Pesadas";
    
    // Dynamic Env�o Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Configurar M�todo de Env�o";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "A�adir M�todo de Env�o";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Configurar M�todo de Env�o";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Refrescar";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "M�todo de env�o";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Activar";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Cargos por manejo";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "tarifa plana";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "porciento";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "d�as";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Cargas Pesadas";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Pedido";
    
    // Some menu options
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Confirmar Pedido";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Cancelar Pedido";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Imprimir Pedido";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Borrar Pedido";
    
    // Orden Lista
    var $_PHPSHOP_ORDER_LIST_MNU = "Listar Pedidos";
    var $_PHPSHOP_ORDER_LIST_LBL = "Lista de Pedidos";
    var $_PHPSHOP_ORDER_LIST_ID = "N�mero de Pedido";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Fecha";
    var $_PHPSHOP_ORDER_LIST_MDATE = "�ltima Modificaci�n";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Estado";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_ITEM = "Art�culos";
    
    // Orden print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Imprimir Pedido";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "N�mero de Pedido";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Fecha";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Estado";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Informaci�n del Cliente";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Informaci�n de la Factura";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Informaci�n del Env�o";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Facturar A";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Enviar A";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Nombre";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Compa�ia";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Ciudad";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Provincia";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Codigo Postal";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Pa�s";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Tel�fono";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Correo Electr�nico";
    var $_PHPSHOP_ORDER_PRINT_ITEMs_LBL = "Pedir Art�culos";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Cantidad";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Cantidad";
    var $_PHPSHOP_ORDER_PRINT_SKU = "SKU";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Precio";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Total";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Impuesto Total";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Porte";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Impuesto del Porte";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "M�todo de Pago";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Nombre de Cuenta";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "N�mero de Cuenta";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Fecha de Caducidad";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Registro de Pago";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Informaci�n de Env�o";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Informaci�n de Pago";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Transporte";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Modo de Env�o";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Fecha de Env�o";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Precio de Env�o";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Listar Pedido";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "A�adir Estado de Pedido";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "C�digo de Pedido";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Nombre de Pedido";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Pedido";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "C�digo de Pedido";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Nombre de Pedido";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Lista de Pedido";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Productos";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Producto Actual";
    var $_PHPSHOP_CURRENT_ITEM = "Art�culo Actual";
    
    // Producto Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Inventario de Productos";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Ver Inventario";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Precio";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "el stock";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Peso";
    // Producto Lista
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Listar Productos";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Lista de Productos";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Nombre";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Publicar";
    
    // Producto Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "A�adir Producto";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Editar este producto";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Ver Detalles de productos en esta tienda";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "A�adir Art�culo";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "A�adir Otro Art�culo";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Nuevo Producto";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Actualizar Producto";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Informaci�n del Producto";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Estado";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Dimensiones y Peso";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Imagenes";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Nuevo Art�culo";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Actualizar Art�culo";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Informaci�n";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Estado";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Dimensiones y Peso";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Imagenes";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Retornar a Producto Similar";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "Para actualizar la imagen actual, ingrese el directorio a la nueva imagen.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Introduzca \"none\" para borrar la actual.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Art�culos";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Cualidades";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Esta seguro de que desea borrar este producto\\ny los Art�culos relacionados a el?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Esta seguro de que desea borrar este Art�culo?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Vendedor";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Nombre";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Categor�a";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY2 = "Categor�a 2";
    var $_PHPSHOP_PRODUCT_FORM_PRICE = "Precio de venta";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Descripci�n Detallada";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Descripci�n Corta";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "En el stock";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "En Pedido";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Fecha de Disponibilidad";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Especial";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Tipo de Descuento";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Publicar?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Longitud";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Anchura";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Altura";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Unidad de Medida";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Peso";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Unidad de Medida";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Recuadro";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Imagen Completa";
    
    // Producto Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Mostrar Producto A�adido";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Mostrar Producto Actualizado";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Mostrar Art�culo A�adido";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Mostrar Art�culo Actualizado";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Cargar CSV";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Carpetas de Productos";
    
    // Producto Categor�a Lista
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Listar Categorias";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Lista de Categor�as";
    
    // Producto Categor�a Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Formar Categor�a";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Formulario de Informaci�n";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Nombre de Categor�a";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Pariente de Categor�a";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Descripci�n de Categor�a";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Publicar?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Categor�a Detallada";
    
    // Producto Cualidad Lista
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Listar Cualidades";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Lista de Cualidad por";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Nombre de Cualidad";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Cualidad de Pedido";
    
    // Producto Cualidad Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Definir Cualidad";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Formulario de Cualidad";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nueva Cualidad por Producto";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Cualidad Actualizada por Producto";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nueva Cualidad por Art�culo";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Cualidad Actualizada por Art�culo";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Nombre de cualidad";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Cualidad de Pedido";
    
    // Producto Precio Lista
    var $_PHPSHOP_PRICE_LIST_MNU = "Listar Precio";
    var $_PHPSHOP_PRICE_LIST_LBL = "Lista de Precio";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Precios por";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Grupo de Lista del Precio";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Lista de Precio";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Moneda de Lista del Producto";
    
    // Producto Precio Form
    var $_PHPSHOP_PRICE_FORM_MNU = "A�adir  Precio";
    var $_PHPSHOP_PRICE_FORM_LBL = "Informaci�n";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Nuevo Precio por Producto";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Actualizar Precio por Producto";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Nuevo Precio por Art�culo";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Actualizar Precio por Art�culo";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Precio";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Moneda";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Grupo de Compradores";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Informe Basico";
    var $_PHPSHOP_RB_INDIVIDUAL = "Informe de Lista Individual de Productos";
    var $_PHPSHOP_RB_SALE_TITLE = "Informe de Ventas";
    
    /* labels por rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Actividad de Ventas";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Ingresar Intervalo";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Mensual";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Semanal";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Diario";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Este Mes";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "�ltimo Mes";
    var $_PHPSHOP_RB_LAST60_BUTTON = "�ltimos 60 d�as";
    var $_PHPSHOP_RB_LAST90_BUTTON = "�ltimos 90 d�as";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Comenzar en";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Finalizar en";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Muestre la gama seleccionada";
    var $_PHPSHOP_RB_REPORT_FOR = "Informe por ";
    var $_PHPSHOP_RB_DATE = "Fecha";
    var $_PHPSHOP_RB_ORDERS = "Pedidos";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Total Art�culos vendidos";
    var $_PHPSHOP_RB_REVENUE = "Ganancias";
    var $_PHPSHOP_RB_PRODLIST = "Listado de Productos";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Tienda";
    var $_PHPSHOP_HOME_TITLE = "Inicio";
    var $_PHPSHOP_CART_TITLE = "Pedido";
    var $_PHPSHOP_CHECKOUT_TITLE = "Terminar Pedido";
    var $_PHPSHOP_LOGIN_TITLE = "Ingresar";
    var $_PHPSHOP_LOGOUT_TITLE = "Salir";
    var $_PHPSHOP_BROWSE_TITLE = "Escoger Producto";
    var $_PHPSHOP_SEARCH_TITLE = "Buscar";
    var $_PHPSHOP_ACCOUNT_TITLE = "Mantenimiento<BR>de Cuenta";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navegaci�n";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Departamento";
    
    var $_PHPSHOP_BROWSE_LBL = "Escoger Producto";
    var $_PHPSHOP_SEARCH_LBL = "Buscar";
    var $_PHPSHOP_FLYPAGE_LBL = "Detalle de Productos";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Nombre";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Categor�a";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Recuadro";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Precio";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Descripci�n";
    var $_PHPSHOP_ORDER_STATUS_P = "Pedido Pendiente";
    var $_PHPSHOP_ORDER_STATUS_C = "Pedido Confirmado";
    var $_PHPSHOP_ORDER_STATUS_X = "Pedido Cancelado";
    
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotal";
    
    # Some messages
    var $_PHPSHOP_PRICE_LABEL = "Precio: ";
    var $_PHPSHOP_ORDER_BUTTON = "Pedido";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Comprador";
    
    
    
    // Comprador Lista
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Listar Compradores";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Lista de Compradores";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Nombre";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Nombre Completo";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Grupo";
    
    // Comprador Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "A�adir Comprador";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Informaci�n";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Informaci�n Facturar A";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informaci�n de Direcci�n";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Informaci�n de Env�o";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "A�adir Direcci�n de Env�o";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Direcci�n 2";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Nombre";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Primer Nombre";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Apellidos";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Segundo Nombre";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "T�tulo";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Nombre de Comprador";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Contrase�a";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Confirmar Contrase�a";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Grupo";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Nombre de Compa�ia";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Ciudad";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Provincia";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Codigo Postal";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Tel�fono";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Correo Electr�nico";
    
    // Comprador Grupo Lista
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Listar Grupo de Compradores";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Lista de Grupo de Compradores";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Nombre";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Descripci�n";
    
    
    // Comprador Grupo Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Formulario de Grupo de Compradores";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "A�adir Grupo de Compradores";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Nombre";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Descripci�n";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Tienda";
    
    
    // Tienda Form
    var $_PHPSHOP_STORE_FORM_MNU = "Editar Tienda";
    var $_PHPSHOP_STORE_FORM_LBL = "Informaci�n de Tienda";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Informaci�n de Contacto";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Imagen";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Subir Imagen";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Nombre de Tienda";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Nombre de Compa�ia de Tienda";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Ciudad";
    var $_PHPSHOP_STORE_FORM_STATE = "Provincia";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_STORE_FORM_ZIP = "Codigo Postal";
    var $_PHPSHOP_STORE_FORM_PHONE = "Tel�fono";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Moneda";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Categor�a";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Apellidos";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Primer Nombre";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Segundo Nombre";
    var $_PHPSHOP_STORE_FORM_TITLE = "T�tulo";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Tel�fono 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Tel�fono 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Correo Electr�nico";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Directorio a Imagen";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Descripci�n";
    
    // User Lista
    var $_PHPSHOP_USER_LIST_MNU = "Listar Usuarios";
    var $_PHPSHOP_USER_LIST_LBL = "Lista de Usuarios";
    var $_PHPSHOP_USER_LIST_USERNAME = "Nombre";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Nombre Completo";
    var $_PHPSHOP_USER_LIST_GROUP = "Grupo";

    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "A�adir Usuario";
    var $_PHPSHOP_USER_FORM_LBL = "Informaci�n de Usuario";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Informaci�n de Facturar A";
    var $_PHPSHOP_USER_FORM_ADDRESS_INFO_LBL = "Informaci�n Usario A";
    var $_PHPSHOP_USER_FORM_shipto_LBL = "Direcci�n de Env�o";
    var $_PHPSHOP_USER_FORM_ADD_shipto_LBL = "A�adir Direcci�n de Env�o";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Direcci�n 2";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Primer Nombre";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Apellidos";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Segundo Nombre";
    var $_PHPSHOP_USER_FORM_TITLE = "T�tulo";
    var $_PHPSHOP_USER_FORM_USERNAME = "Nombre";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Contrase�a";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Confirmar Contrase�a";
    var $_PHPSHOP_USER_FORM_PERMS = "Permisos";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Nombre de Compa�ia";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_USER_FORM_CITY = "Ciudad";
    var $_PHPSHOP_USER_FORM_STATE = "Provincia";
    var $_PHPSHOP_USER_FORM_ZIP = "Codigo Postal";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_USER_FORM_PHONE = "Tel�fono";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Correo Electr�nico";
    
    
    var $_PHPSHOP_PAYMENT = "Pago";
    // Pago M�todo Lista
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Listar M�todos de Pago";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Lista de M�todos de Pago";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Nombre";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "C�digo";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Descuento";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Grupo de Comprador";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Cybercash";
    
    // Pago M�todo Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "A�adir M�todo de Pago";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Formulario de M�todo de Pago";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Nombre de Forma de Pago";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Grupo de Comprador";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Descuento";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Codigo";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Lista de Compras";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Usar Cybercash";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Impuesto";
    
    // User Lista
    var $_PHPSHOP_TAX_RATE = "Tarifas de Impuesto";
    var $_PHPSHOP_TAX_LIST_MNU = "Listar Tarifas de Impuesto";
    var $_PHPSHOP_TAX_LIST_LBL = "Lista de Tarifas de Impuesto";
    var $_PHPSHOP_TAX_LIST_STATE = "Impuestos por Provincia o Regi�n";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Impuestos de Pa�s";
    var $_PHPSHOP_TAX_LIST_RATE = "Tarifas de Impuesto";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "A�adir Tarifa de Impuesto";
    var $_PHPSHOP_TAX_FORM_LBL = "A�adir Impuesto de Informaci�n";
    var $_PHPSHOP_TAX_FORM_STATE = "Impuesto por Provincia o Regi�n";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Impuesto de Pa�s";
    var $_PHPSHOP_TAX_FORM_RATE = "Tarifas de Impuesto";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Vendedor";
    var $_PHPSHOP_VENDOR_ADMIN = "Vendedores";
    
    
    // Vendedor Lista
    var $_PHPSHOP_VENDOR_LIST_MNU = "Listar Vendedores";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Lista de Vendedores";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Nombre";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Administraci�n";
    
    // Vendedor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "A�adir Vendedor";
    var $_PHPSHOP_VENDOR_FORM_LBL = "A�adir Informaci�n";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Informaci�n";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Contacto de Informaci�n";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Imagen";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Subir Imagen";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Nombre de Tienda de Vendedor";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Nombre de Compa�ia de Vendedor";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Direcci�n 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Direcci�n 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Ciudad";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Provincia";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Codigo Postal";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Tel�fono";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Moneda";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Categor�a";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Apellidos";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Nombre";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Segundo Nombre";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "T�tulo";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Tel�fono 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Tel�fono 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Correo Electr�nico";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Directorio de Imagen";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Descripci�n";
    

    // Vendedor Categor�a Lista
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Listar Categor�a de Vendedor";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Lista de Categor�a de Vendedores";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Nombre de Categor�a";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Descripci�n";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Vendedores";
    
    // Vendedor Categor�a Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "A�adir Categor�a de Vendedor";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Formulario de Categor�a de Vendedor";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Informaci�n";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Nombre de Categor�a";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Descripci�n";
        
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Fabricante";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Fabricantes";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Listar Fabricantes";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Lista de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Nombre de Fabricante";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Administraci�n";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "A�adir Fabricantes";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "A�adir Informaci�n";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Informaci�n de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Nombre de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Categor�a de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Correo Electr�nico";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL P�gina web de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Descripci�n";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Lista de Categor�a de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Lista de Categor�a de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Nombre de Categor�a";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Descripci�n de Categor�a";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Fabricantes";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "A�adir Categor�a de Fabricantes";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Categor�a de Fabricantes ";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Informaci�n de Categor�a";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Nombre de Categor�a";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Descripci�n de Categor�a";
    
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Fabricante";
    
    /*#####################
    Modul Help
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Ayuda";
    
    // 210104 start
    
    // basketform
    var $_PHPSHOP_CART_ACTION = "Acciones";
    var $_PHPSHOP_CART_UPDATE = "Actualizar";
    
    //230104
    var $_PHPSHOP_CART_DELETE = "Borrar";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Precio";
    var $_PHPSHOP_PRODUCT_CALL = "Llame para precio";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Previa";
    var $_PHPSHOP_PRODUCT_NEXT = "PR�XIMA";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Impuesto";
    var $_PHPSHOP_CART_SHIPPING = "Porte (C/I.V.A.)";
    var $_PHPSHOP_CART_TOTAL = "Total";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Pr�ximo";
    var $_PHPSHOP_CHECKOUT_REGISTER = "Registrarse";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Informaci�n de Factura";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Compa�ia";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Nombre";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Direcci�n";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Tel�fono";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Correo Electr�nico";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Informaci�n del Env�o";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Compa�ia";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Nombre";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Direcci�n";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Tel�fono";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Informaci�n del pago";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Nombre de la Tarjeta";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "M�todo de Pago";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "N�mero de Tarjeta de Cr�dito";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Fecha de Caducidad";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Pedido Completo";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "Informaci�n requerida cuando Pago v�a Tarjeta de Cr�dito es seleccionada";
    
    
    
    var $_PHPSHOP_ZONE_MOD = "Env�o por Zonas";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Listar Zonas";
    var $_PHPSHOP_ZONE_FORM_MNU = "A�adir Zona";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Asignar Zona";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Pa�s";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Zona Actual";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "destinar a Zona";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Actualizar";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Destinar Zonas";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Nombre de Zona";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Descripci�n de Zona";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Costo por Zona por Art�culo";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Limite de Costo de Zona";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Lista de Zones";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Nombre de Zona";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Descripci�n de Zona";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Costo por Zona Por Art�culo";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "L�mite de Costo de Zona";
    
    var $_PHPSHOP_LOGIN_FIRST = "Por Favor, Ingresar o Registrarse a esta Tienda (usar el m�dulo de Ingreso) Primero.<br>Gracias.";
    var $_PHPSHOP_STORE_FORM_TOS = "Condiciones de Servicio";
    var $_PHPSHOP_AGREE_TO_TOS = "Por Favor, aprovar los condiciones de servicio primero.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Apruebo los condiciones de Servicio";
    
    var $_PHPSHOP_LEAVE_BLANK = "(dejar en BLANCO si usted tiene<br />no archivo php individual)";
    var $_PHPSHOP_RETURN_LOGIN = "Clientes que vuelven: por favor Autentif�quense"; 
    var $_PHPSHOP_NEW_CUSTOMER = "�Nuevo(a)? Por favor, facil�se sus datos de facturaci�n";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Cuenta de Cliente:"; 
    var $_PHPSHOP_ACC_ORDER_INFO = "Informaci�n de Pedido";
    var $_PHPSHOP_ACC_UPD_BILL = "Aqu� se puede actualizar sus datos de facturaci�n.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Aca se puede a�adir y mantener las direcciones de env�o.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Informaci�n de Cuenta"; 
    var $_PHPSHOP_ACC_SHIP_INFO = "Informaci�n de Env�o"; 
    var $_PHPSHOP_ACC_NO_ORDERS = "No hay pedidos para mostrar";
    var $_PHPSHOP_ACC_BILL_DEF = "- Por defecto (igual que el de facturaci�n)"; 
    var $_PHPSHOP_SHIPTO_TEXT = "Puede a�adir direcciones de env�o a su cuenta. Por favor, piense en un sobrenombre o c�digo para la direcci�n que selecciona abajo.";
    var $_PHPSHOP_CONFIG = "Configuraci�n"; 
    var $_PHPSHOP_USERS = "Usuarios"; 
    var $_PHPSHOP_IS_CC_PAYMENT = "�Quere pagar con tarjeta de cr�dito?";
    
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Administraci�n del Env�o";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Porte";

    var $_PHPSHOP_CARRIER_LIST_MNU = "Transportista";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Lists de Transportista";
    var $_PHPSHOP_RATE_LIST_MNU = "Tarifas del Env�o";
    var $_PHPSHOP_RATE_LIST_LBL = "Tarifas del Env�o";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Nombre";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Orden en la lista";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Crear Transportista";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Editar / Crear Transportista";
    var $_PHPSHOP_RATE_FORM_MNU = "Crear Tarifa del Env�o";
    var $_PHPSHOP_RATE_FORM_LBL = "editar/crear tarifa del Env�o";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Descripci�n de Tarifa del Env�o";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Transportista";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Pa�s";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Comenzar en gama de cod�go postal";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Finalizar en gama de cod�go postal";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Peso m�nimo";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Peso m�ximo";
    var $_PHPSHOP_RATE_FORM_VALUE = "Coste";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Coste de su paquete";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Moneda";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "Identidad de Impuesto";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Lista de pedido";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Transportista";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Descripci�n de tarifa del Env�o";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Peso desde ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... hasta";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Compania de Transportista";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Orden en la lista";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "ERROR: existe la identificaci�n de transportista";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "ERROR: Elija a transportista.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "ERROR: existe una tarifa del Env�o por lo menos, borre las tarifas previas a Transportista.";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "ERROR: No se encuentra transportista con este identificaci�n.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "ERROR: Elija a Transportista.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "ERROR: No encuentra la transportista con este identificaci�n.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "ERROR: Se requiere la tarifa descriptor.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "ERROR: El destino del pa�s no es v�lido. M�s de un pa�s se pod�a separar con ';'.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "ERROR: Se requiere el m�nimo peso.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "ERROR: Se requiere el m�ximo peso.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "ERROR: El m�nimo peso no puede ser mas grande que el m�ximo";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "ERROR: Se requiere el costo del  Env�o";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "ERROR: Elija a la moneda";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "ERROR: Se requiere la tarifa de Env�o";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Por favor seleccione";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Transportista";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Tipo de transporte";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "precio";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-gratis-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_PAYMENT_FORM_CC = "Tarjeta de Credito";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Utilize el proceso del pago";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Bank debit";
    var $_PHPSHOP_PAYMENT_FORM_AO = "s�lo direcci�n";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Seleccione una direcci�n del env�o";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Seleccione un m�todo del env�o";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Selecci�n un m�dio del pago";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Compruebe los datos y confirme el pedido";
    
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "Por favor, seleccione el m�todo de env�o.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "Por favor, seleccione otro m�todo de env�o.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "Por favor,  seleccione un m�todo de pago.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Por favor, introduzca su n�mero de tarjeta de cr�dito.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Por favor, introduzca el nombre de la tarjeta de cr�dito.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "No es v�lido el numero de la tarjeta de cr�dito que ha introducido Usted.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Por favor, introduzca el mes de la caducidad de su tarjeta de cr�dito.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Por favor, introduzca el a�o de la caducidad de su tarjeta de cr�dito.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "No es v�lido la fecha de la caducidad.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Por favor, seleccione el direcci�n del env�o.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "El n�mero de la cuenta no es v�lido.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "No hay nada en su cesta!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "ERROR: Por favor, seleccione el transporte!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "ERROR: No se encuentra la tarifa de env�o que ha seleccionado!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "ERROR: No se encuentra su direcci�n del env�o!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "ERROR: No hay dato de CC....";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "ERROR: No se encuentra el n�mero de la tarjeta de cr�dito!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Lo siento, pero el n�mero de CC que ha utilizado usted es el n�meo de prueba!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "No se encuentra la identificaci�n del usario en el base de datos!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "No ha ofrecido actualmente el titulo de su cuenta bancaria.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "No ha ofrecido actualmente su IBAN.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "No ha ofrecido actualmente su n�mero de cuenta bancaria.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "No ha ofrecido actualmente el n�mero de la agencia del banco.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "No ha ofrecido actualmente el nombre del banco.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "Finalizaci�n del pedido necesita un paso v�lido!";
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Informaci�n del pago ha captado para el proceso de mas adelante.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "a�n no ha llegado al m�nimo pedido.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Nuestro el m�nimo pedido es:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Pago en tarjeta del cr�dito";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Otras formas del pago";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Por favor, seleccione forma del pago:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "el m�nimo pedido para su tienda";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Informaci�n de la cuenta bancaria";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "el n�mero de la cuenta";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "el n�mero de agencia del banco.";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "el nombre del banco";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "el titulo de la cuenta";
    
    var $_PHPSHOP_MODULES = "Modulos";
    var $_PHPSHOP_FUNCTIONS = "Funciones";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "productos especiales";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Notas adicionales sobre el pedido.<br>";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Nota del cliente";
    var $_PHPSHOP_INCLUDING_TAX = "(\$tax % I.V.A. Inclu�do)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "Por favor, seleccione un articlo";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "articulo";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "�rea de descarga";
    var $_PHPSHOP_DOWNLOADS_START = "empezar a descargar";
    var $_PHPSHOP_DOWNLOADS_INFO = "Por favor, introduzca la identificaci�n de descarga que ha obtenido en e-mail y haga clic 'Start Download'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Lo siento, ha superado el tiempo para la descarga";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Lo siento, pero su m�ximo n�mero de descarga se ha alcanzado.";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Identificaci�n de descargar inv�lido!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "No ha podido mandar el mensaje a";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "el mensage se ha mandado a";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Informaci�n de descarga";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "El archivo(s) que ha pedido usted ya est� listo para descargar";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Por favor, introduzca el siguiente identificaci�n(es) de descarga en nuestra �rea de descarga: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "el m�ximo n�mero de descargas para cada archivo es: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Descargar hasta  {terminar} los d�as despu�s de la primera descarga";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Cuestiones? Problemas?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Informaci�n de descarga por  "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "se puede descargar este producto?";
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Gracias por su pago. La transacci�n est� aceptada.  Recibir� un E-mail de confirmaci�n para la transacci�n de PayPal.
        ahora puede continuar o ingresar a  <a href=http://www.paypal.com>www.paypal.com</a> para ver el detalle de la transacci�n.";
    var $_PHPSHOP_PAYPAL_ERROR = "Ha ocurrido un error durante de su proceso de transacci�n. No ha podido actualizado su pedido.";

    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Gracias por comprar con nosotros. Listamos a continuaci�n.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Gracias por su confianza.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Preguntas? Problemas?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Se ha recibido el siguiente pedido";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Vea el pedido siguiendo el enlace a continuaci�n.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Las cantidades negativas no est�n admitidas.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Por favor, introduzca la cantidad correcta para este articulo.";
    
    var $_PHPSHOP_CART_STOCK_1 = "La cantidad seleccionada excede el stock disponible. ";
    var $_PHPSHOP_CART_STOCK_2 = "Actualmente tenemos \$producto_en_stock articulos disponibles. ";
    var $_PHPSHOP_CART_STOCK_3 = "Haga Click sobre este enlace para ponerse en lista de espera. ";
    var $_PHPSHOP_CART_SELECT_ITEM = "Por favor, seleccione un articulo espacial desde la p�gina del detalle!";

    var $_PHPSHOP_REGISTRATION_FORM_NONE = "nada";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Sr.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Sra.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Defecto";
        
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Administraci�n de afiliados";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Listar afiliados";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Lista de afiliados";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "el nombre del afiliado";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Activar";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Tarifa";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Total del mes";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Comisi�n del mes";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Lista de pedidos";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email afiliados";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email afiliados";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "a quien mandar el correo(* = todos)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Su correo electr�nico";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "El titulo";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Incluido actual estad�stica";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Tarifa de comisi�n";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Activar?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Normalmente entrega por";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Informaci�n de entrega";
    var $_PHPSHOP_MORE_CATEGORIES = "m�s categor�as";
    var $_PHPSHOP_AVAILABILITY = "Disponibilidad";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Ultimamente este producto no est� disponible.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Estar� disponible otra vez: ";

    var $_PHPSHOP_STATISTIC_SUMMARY = "Resumen";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Estad�stica";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Clientes";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "Productos activos";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "Productos inactivos";
    var $_PHPSHOP_STATISTIC_SUM = "Suma";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "nuevos Pedidos";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "nuevos Clientes";

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Por favor, introduzca su correo abajo para avisarle cuando el producto vuelva en el stock.
                                                                        No vamos a compartir, alquiler, vender ni utilizar este correo para ningun propisito excepto
                                                                        para avisarle cuando el troducto vuelva a estar en stock.<br /><br />Gracias!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Gracias por esperar! ! <br />En cuanto tengamos en nuestro stock, se lo avisaremos.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Avisame!";

	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Vista para impresi�n";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Por favor, elija ENTRE Authorize.net O CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = "Estado del archive de configuraci�n:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "es posible escribir";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "no es posible escribir";

	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Rutas & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Sitio";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Env�o";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Finalizaci�n de pedido";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Descargar";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Pago";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Utilize s�lo como cat�logo";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Si marca esto, se inhabilitan todos los funcionamientos del carro.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Muestra precios";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Muestra precios con IVA?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Pone la bandera si los clientes ven los precios con IVA o sin IVA";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Compruebe los precios marcados. Si utiliza catalogo funcional, algunos no quieren mostrar los precios en la p�gina.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Impuesto Virtual";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Esto determina que si los productos con el peso 0  tienen impuestos o no. Modifique ps_checkout.php->calc_order_taxable() para adaptarlo.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "modo de Impuesto:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Basado en la direcci�n del env�o";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Basado en la direcci�n del vendedor";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Aqu� se determina que tarifa de impuesto se aplica.:<br />
              		<ul><li>Los del pa�s de la tienda</li><br/>
                    <li>Los del lugar del comprador.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Permitir m�ltiples tarifas de impuestos?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Marque esto si tiene productos que tienen la distinta tarifa de impuesto (e.j. 7% para  libros y comidas, 16% para otra cosa)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Restar el descuento del pago antes de IVA / Env�o?";
        var $_PHPSHOP_ADMIN_CFG_REVIEW = "Permitir Revisi�n de Cliente/Sistema de Valoraci�n";
        var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Si es posible, permite clientes a <strong>Valorar productos</strong> y <strong>escribir revisiones</strong> sobre ellos. <br />
                                                                                as� como que clientes puedan escribir sus experiencias con el producto para otros clientes.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Pone la bandera restar el descuento para el pago seleccionado ANTES(revisado) o DESPU�S de impuesto y env�o.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Los clientes pueden dejar los datos de la cuenta bancaria?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Marque si sus clientes tendr�n la capacidad para proporcionar sus datos de la cuenta bancaria cuando registrandose a la tienda.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Los clientes pueden seleccionar estado/regi�n?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Marque si sus clientes tendr�n la capacidad para seleccionar los datos de estado/regi�n cunado registrandose a la tienda.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Tiene que estar de acuerdo con los condiciones del servicio?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Revisar si quiere que un comprador est� de acuerdo con sus condiciones de servicio antes de registrarse a la tienda.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Comprobar el Stock?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Marcar si comprueba el nivel de stock cuando un usario agrega un articulo a la cesta de compra.
                                                                                          Si est� marcado, no se permitir� al usario a agregar m�s articulos en su cesta que est�n disponible en stock.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Permite el programas de afiliados?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Esto permite el tracking de afiliados en shop-frontend. Permite si ha a�adido afiliados en backend..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "formato del pedido en mail:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Texto mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Esto se determina en que formato se env�an sus correos de confirmaci�n del pedido:<br />
                                                                                        <ul><li>email en texto plano</li>
                                                                                        <li>email html con imagenes.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Permita Administraci�n en el front-end para usarios de non-backend.";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "Con este ajuste usted puede permitir Fronted-Administraci�n para usarios que son
                                                                                              storeadmins, pero no pueden acceder a Mambo Backend (e.j. Registrado / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "URL para su sitio. Normalmente identifique a su Mambo URL (con / en el final!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "URL seguro para su sitio. (https - con / en el final!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL para mambo-phpShop componente. (con / en el final!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL para mambo-phpShop componente imagen directorio.(con / en el final!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "La ruta del directorio del componente mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "La ruta del directorio de las clases mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "La ruta del directorio del html de mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "La ruta del directorio para las im�genes de su mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Est� es la p�gina que ser� cargada por defecto.";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Est� es la pag�na del defecto para mostrar el mensaje de error.";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Est� es la p�gina del defecto para mostrar el mensaje de debug.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Enciende debug output. Esto hace para mostrar DEBUGPAGE en el fondo de cada p�gina. Es muy util durante el desarrollo de la tienda porque le ense�a el contenido de carros, forma los values del campo, etc.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "Detalles";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Est� es la p�gina del defecto para mostrar los detalles de productos.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Plantilla del Categor�a";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Esto define la plantilla de la categor�a del defecto para mostrar productos en categor�a.<br />
                                                                                                      Puede crear nueva plantilla por by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "El n�mero defectuoso de productos en bajo";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Esto define el n�mero de productos en fila. <br />
                                                                                                      Ejempro: Si usted pone 4, plantilla de categor�a mostrar� 4 productos por fila";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no imagen\" imagen";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Saldr� esta imagen cuando no hay imagen de producto disponible.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "BUSCAR FILAS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Determine el n�mero de filas por p�gina cuando los resultados de la busquedad esten mostrado en la lista..";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Especifique el color de las filas numeradas impares en una lista del resultado.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Especifique el color de las filas numeradas pares en una lista del resultado..";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMAS FILAS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Ajuste el n�mero de filas para mostrar en la lista de pedido de la caja seleccionada.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Muestre el pie  \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Muestre la imagen del pie de powered-by-mambo-phpShop.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Elija el m�todo del env�o de su tienda.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "modulo est�ndar del env�o con configurado individual transporte y tarifa. <strong>RECOMENDADO !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	modulo zona del env�o versi�n del pa�s 1.0<br />
                                                                                                            Para m�s informaci�n sobre este modulo por favor visite <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            para detalles o contacto <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
																											
																												var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS Tools Shipping calculation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS c�digo de acceso";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Su UPS c�digo de acceso";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS identidad del usario";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "ID del usario que ha obtenido de UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS contrase�a";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "La contrase�a para su cuenta de UPS";
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Modulo. Compruebe s�lo si usted tiene la cuenta de Intershipper.com";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Inhabilite la selecci�n del m�todo del env�o. Elije si sus clientes compran los productos descargable que no necesitan a mandar.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Contrase�a";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Su contrase�a para la cuenta de intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Su direcci�n de email para la cuenta de intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Codifican los datos guardados en base de datos con este key. Esto sigunifica que este archivo se debe protejer contra vistas siempre.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Permita la barra de Finalizar Compra";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Compruebelo, si quiere mostrar 'checkout-bar' para los clientes durante el proceso de terminar ( 1 - 2 - 3 - 4 con gr�ficos).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Elije el proceso de Finalizar Compra para su tienda.";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Est�ndar :</strong><br/>
               1. Petici�n de la direcci�n del env�o<br />
              2. Petici�n del m�tido del env�o<br />
              3. Petici�n del m�todo del pago<br />
              4. Complete Pedido";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Proceso 2:</strong><br/>
               1. Petici�n de la direcci�n del env�o<br />
              2. Petici�n del m�todo del pago<br />
              3. Complete Pedido";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Proceso 3:</strong><br/>
               1. Petici�n del m�tido del env�o<br />
              2. Petici�n del m�todo del pago<br />
              3. Complete Pedido";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Proceso 4:</strong><br/>
               1. Petici�n del m�todo del pago<br />
              2. Complete Pedido";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Activar Descargas";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Marque para permitir la capacidad de descargar. S�lo cuando quiere vender los productos que se pueden descargar.";

	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Estado del pedido que permite descargar.";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Seleccione el estado del pedido cual avisa al cliente sobre la desgarga v�a e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Estado de pedido que inhabilita las desgargas.";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Ajuste el estado del pedido que la descarga est� incapacitada para el cliente.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "La ruta f�sica a los archivos de la desbarga de clientes. (/ al final!)<br>
        <span class=\"message\">Para la seguridad de su tienda: Si puede, por favor,  utilize el directorio dondequiera fuera de WEBROOT</span>";
	

	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "M�xima Descarga";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Coloque el n�mero de descargas que est� hecho con un ID de descargar, (Para un pedido)";

	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "La descarga caduca";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Ajuste el tiempo <strong>in seconds</strong> durante el cual se permite el cliente a descargar.
  Esta intervalo empieza con la primera descarga! Cuando se ha acabado el tiempo, el download-ID est� invalido.<br />Note : 86400s=24h.";
	


	
	/* PAGE 7 */

	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Permite el pago de IPN v�a PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Compruebe si sus clientes le dejan a utilizar el sistema del pago de PayPal.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal payment email:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Su direcci�n de email del trabajo para el pago de PayPal. Tmanbi�n ha utilizado como receptor_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Estado de pedido para transacciones acertadas";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "Seleccione el estado del pedido Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options:
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Estado del pedido para transacciones fallidas";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "Seleccione un estado del pedido para transacciones fallidas de PayPal.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Permite pagos v�a PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Compruebe si sus clientes le dejan a utilizar el sistema del pago de Australian PayMate.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "el nombre de usario de PayMate:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "su cuenta de usario para PayMate.";

	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Permite el pago de Authorize.net?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Compruebe el uso de Authorize.net con phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Modo de prueba?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Seleccione 'S�' durante la prueba. Seleccione 'No' para permitir transacciones en real.";
	var $_PHPSHOP_ADMIN_CFG_YES = "S�";
	var $_PHPSHOP_ADMIN_CFG_NO = "No";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net Ingresar ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "Esto e su Authorize.Net Ingresar ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "Esto es su Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Tipo de la Autentificaci�n";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "Esto es Authorize.Net tipo de la autentificaci�n.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Permite CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Comprueba el uso de CyberCash con phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT es CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key es un comerciante proporcionado por CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL es  URL proporcionado por Cybercash para el pago del seguro.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE es Cybercash el tipo autentificaci�n proporcionado por Cybercase";


    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="B�squeda Avanzada";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Buscar en todas las categor�as";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Buscar en todas las caracter�stiacas del producto";
    var $_PHPSHOP_SEARCH_PRODNAME = "Buscar en el nombre del producto";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "--";//solo en el fabricante/vendedor (no funciona)
    var $_PHPSHOP_SEARCH_DESCRIPTION = "S�lo en la descripci�n del producto";
    var $_PHPSHOP_SEARCH_AND = "y";
    var $_PHPSHOP_SEARCH_NOT = "no";
    var $_PHPSHOP_SEARCH_TEXT1 = "la primera drop-down-lista permite usted a seleccionar categor�a para limitar su b�squedad a.
        la segunsa drop-down-lista permite usted a limitar su b�squedad  para el pedazo particular de infoemaci�n del producto (e.j. Nombre).
        una vez usted ha seleccionado estos (o dejan el defecto TODO), insertar la palabra clave a b�squedad. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " Puede refinar m�s su b�squedad por a�adiendo la segunda palabra clave y seleccionando Y o NO operador.
        Seleccionando Y significa ambos palabras deben presentar para el producto para que se muestre.
        Selecccionando NO significa el producto estar� mostrado s�lo cuando la primera plabra clave est� presente
        y la segunda no est�. ";
    var $_PHPSHOP_ORDERBY = "Pedido por";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Media de puntuacion de los usuarios";
    var $_PHPSHOP_TOTAL_VOTES = "Votos totales";
    var $_PHPSHOP_CAST_VOTE = "Por favor, valore este producto";
    var $_PHPSHOP_RATE_BUTTON = "Porcentage";
    var $_PHPSHOP_RATE_NOM = "Porcentage";
    var $_PHPSHOP_REVIEWS = "Opiniones de los usuarios";
    var $_PHPSHOP_NO_REVIEWS = "No hay opiniones para este producto.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Se el primero en escribir una opini�n...";
    var $_PHPSHOP_REVIEW_LOGIN = "Por favor, registrese para escribir una opini�n.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Por favor, puntuar el producto para terminar la revisi�n!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Por favor, escriba unas m�s palabras para su valoraci�n. M�nimos caracteres permitidas: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Por favor, acortese su revisi�n. M�xima caracteres permitidas: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Escriba una revisi�n para este producto!";
    var $_PHPSHOP_REVIEW_RATE = "Primero: Puntuar el producto. Por favor, seleccione una puntuaci�n entre 0 (peor) a 5 estrellas (mejor).";
    var $_PHPSHOP_REVIEW_COMMENT = "Ahora por favor, escriba una (corta) valoraci�n....(m�n. 100, m�x. 2000 caracteres) ";
    var $_PHPSHOP_REVIEW_COUNT = "Caracteres escritos: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Env�ar la valoraci�n";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "Usted ya ha escrito una valoraci�n para este producto. Gracias.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Gracias por su valoraci�n.";
    var $_PHPSHOP_COMMENT= "Comentario";

    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Listar Todos";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Buscar Producto";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "A�adir/Editar Tipos de la tarjeta de cr�dito.";
    var $_PHPSHOP_CREDITCARD_NAME = "Nombre de la tarjeta de cr�dito";
    var $_PHPSHOP_CREDITCARD_CODE = "Tarjeta de Credito - c�gigo corto";
    var $_PHPSHOP_CREDITCARD_TYPE = "Tipo de la Tarjeta de Credito";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Lista de la Tarjeta de Credito";
    var $_PHPSHOP_UDATE_ADDRESS = "Actualizar Direcci�n";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Continuar Comprando";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Se ha grabado correctamente su pedido";
    var $_PHPSHOP_ORDER_LINK = "Pinche en este enlace para ver los detalles del pedido.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "El estado de su n�mero de pedido {order_id} ha cambiado.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "El nuevo estado es:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "Para ver detalles del pedido, por favor, siga este enlace (o copielo en su navegador):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "El cambio del estado del pedido: Su pedido {pedido_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Notificar Clientes?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Por favor, cambie el estado del pedido primero!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Precio Descuento en defecto Grupo de Comprador (en %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "Una cantidad positiva X significa: Si el producto no tiene ningun precio asignado a ESTE Grupo de Comprador, el precio defecto est� disminuido por X %. Una cantidad negativa tiene el efecto opuesto";

    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "el estado de su n�mero de pedido {pedido_id} ha cambiado.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "el nuevo estado es:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "Para ver detalles del pedido, por favor, siga este enlace (o c�pielo en su navegador):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "El cambio del estado del pedido: Su Pedido {Pedido_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Notificar Clientes?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Por favor, cambie el estado del pedido primero!";

    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Precio Descuento en defecto Grupo de Comprador(en %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "Una cantidad positiva X significa: Si el producto no tiene ningun precio asignado a ESTE Grupo de Comprador, el precio defecto est� disminuido por X %. Una cantidad negativa tiene el efecto opuesto";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Producto Descount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Lista de Producto Descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "A�adir/Editar Producto Descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "La cantidad de Descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "insertar la cantidad de descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Tipo de descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Porcentage";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "La cantidad ser� el porcento o el total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Fecha de comienzo del descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Especifique el d�a cuando empieze el descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Fecha final de descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Especifique el d�a que se acaba el descuento";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Puede utilizar el formulario del descuento del producto para a�adir descuentos!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "Ahorro";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Ver imagen grande";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Formato de moneda.";
    var $_PHPSHOP_CURRENCY_SYMBOL = "s�mbolo de moneda";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "Tambi�n puede utilizar Entidades HTML aqu� (e.j. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimales";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "El n�mero de decimales mostrado (puede ser 0)<br><b>realiza redondeando si valor tiene el diferente n�mero de decimales</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "S�mbolo de decimales";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Caracter usado como el s�mbolo de decimales.";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Separador de los millares";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Caracter usado para separar millares (puede ser v�cio)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Formato Positivo";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Mostrar formato usado para mostorar valores positivos.<br>(S�mb stands for currency symbol)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "formato negativo";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Mostrar formato usado para mostorar valores negativos.<br>(Symb stands for currency symbol)";

    var $_PHPSHOP_OTHER_LISTS = "Listas de otros productos";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "Ver M�s Imagenes";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Disponible Imagenes para";
    var $_PHPSHOP_BACK_TO_DETAILS = "Volver a detalles del producto";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "FileManager";
    var $_PHPSHOP_FILEMANAGER_LIST = "FileManager::Lista de producto";
    var $_PHPSHOP_FILEMANAGER_ADD = "A�adir Imagen/Archivo";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Imagenes asignadas";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Puede descargar?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Archivos asignados (hojas de dato,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "publicado?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "FileManager::Imagen/Lista del archivo para";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Nombre del archivo";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "Titulo del archivo";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "Tipo del archivo";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Editar la entradad del archivo";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Imagen Completa";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Thumbnail Image";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Subir archivo para";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Archivo actual";
    var $_PHPSHOP_FILES_FORM_FILE = "Archivo";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Imagen";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Subir a";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "defecto Producto paso de Imagen";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Especifique la localizaci�n del archivo";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "paso de descargar (e.j. para vender downloadables!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Auto-Crear Thumbnail?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "Est� publicado el archivo?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "Titulo del archivo (que ven los clientes)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "Descripci�n del archivo";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "Archivo URL (optional)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Por favor, proporcione un paso v�lido!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "The Thumbnail Image se ha creado con �xito!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "NO ha podido crear Thumbnail Image!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "Archivo/Imagen Error de subir";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "No se puede borrar el archivo de la imagen completa.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Imagen completa se ha borrado con �xito.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "No se puede borrar el archivo de Thumbnail imagenImagen (a lo mejor no lo existe): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Thumbnail Image se ha borrado con �xito.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "no ha podido borrar el archivo.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "El archivo se ha borrado con �xito.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Lo siento, pero no ha encontrado el archivo solicitado!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "no ha encontrado la imagen!";


    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Cup�n";
    var $_PHPSHOP_COUPONS = "Cupones";
    var $_PHPSHOP_COUPON_LIST = "Lista de cup�n";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "El cup�n ya ha redimido.";
    var $_PHPSHOP_COUPON_REDEEMED = "El cup�n ha redimido! Gracias.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "Si tiene el c�digo del cup�n, por favor, insertarlo en abajo:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Entregar";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "Existe este c�digo de cup�n? Por favor, intentalo otra vez.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Actualizar Cup�n";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Haga clic al c�digo del cup�n para editarlo, o para borrar al c�digo del cup�n, seleccionelo y haga clik Borrar:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "C�digo";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Porcento o Total";
    var $_PHPSHOP_COUPON_TYPE = "Tipo de Cup�n";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "El cup�n del regalo se borra despu�s de que fue utilisado para descontar un pedido. El cup�n permanente se puede utilizar tan a menudo como el cliente desea.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Cup�n del regalo";
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Cup�n permamente";
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Valor";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Borrar c�digo";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Est� seguro de que quiere borrar este c�digo del cup�n?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Por favor, complete todos los campos.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "El valor de cup�n debe der el n�mero.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "Nuevo Cup�n";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "c�digo de cup�n";
    var $_PHPSHOP_COUPON_PERCENT = "Porcento";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "Valor";
    var $_PHPSHOP_COUPON_CODE_SAVED = "c�digo de cup�n guardado.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Guardar Cup�n";
    var $_PHPSHOP_COUPON_DISCOUNT = "Descuent del cup�n";
    var $_PHPSHOP_COUPON_CODE_INVALID = "No se encuentra el c�digo del cup�n. Por favor, intentalo otra vez.";
    var $_PHPSHOP_COUPONS_ENABLE = "Permite el uso del cup�n";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "Si usted permite el uso del cup�n, permite sus clientes a completar los n�meros del cup�n para aumentar descuentos de los pedidos.";

    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Env�o gratuito";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Env�o gratuito con este pedido!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "M�nima cantidad para env�o gratuito";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "La cantidad (INCLUDIDO IVA!) cual es m�nimum para env�o gratuito
                                                (ejemplo: <strong>50</strong> significa env�o gratuito cuando el cliente paga
                                                con \$50 (includido iva) or m�s.";
    var $_PHPSHOP_YOUR_STORE = "Su Tiendad";
    var $_PHPSHOP_CONTROL_PANEL = "Panel de Control";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Bot�n";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Mostrar o oclutar PDF - Bot�n en la tienda.";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Debe ponerse de auerdo con condiciones de servicio en CADA PEDIDO?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Comprueba si quiere el comprador que se ponga de acuerdo con su condiciones de servicio en CADA PEDIDO (antes del pedido).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Tipo de la cuenta bancaria";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Cuenta corriente";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "cuenta corriente business";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Ahorro";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Recurring Facturas?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Defina si quiere recurring facturas.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Error Interno tramitaci�n la petici�n a";
    var $_PHPSHOP_PAYMENT_ERROR = "Fallo en el pago del proceso";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "El pago ha procesado con �xito.";

    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS no pudo procesar la petici�n de la tarifa del env�o.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "D�a(s) garantizados para entregar";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS M�todo de recoger";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "C�mo se entrega un paquete a UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS Packaging?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Seleccine el tipo del defecto de Packaging.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Entrega residencial?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Residencial (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Entrega Comercial (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Cotizaci�n para residencial(RES) o Entrega Comercial (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "costo de tramitaci�n";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "su costo de tramitaci�n para este m�todo.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Clase de impuesto";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Utilize la siguiente clase de impuesto para el costo de env�o.";
    
    var $_PHPSHOP_ERROR_CODE = "C�digo de Error";
    var $_PHPSHOP_ERROR_DESC = "Error Descripci�n";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Mostrar / Cambiar Transacci�n Key";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Mostrar/Cambiar la contrase�a/Transacci�n Key";
    var $_PHPSHOP_TYPE_PASSWORD = "Por favor, inserte su contrase�a de usario";
    var $_PHPSHOP_CURRENT_PASSWORD = "Contrase�a actual";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Actual Transacci�n Key";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "Se ha cambiado Transacci�n key con �xito.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Solicitar/Capturar el valor del c�digo de la tarjeta del credito (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Compruebe para v�lido  CVV2/CVC2/CID vale (tres- o cuatro-n�mero d�gito detras de la tarjeta del credito, en el frente de American Express Cards)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Por favor, escriba tres- o cuatro- n�mero d�gito detras de su tarjeta del credito (en el frente de American Express Cards)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "necesita insertar su c�digo de la tarjeta del credito para proceder.";

    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "CUALQUIER Completar el nombre del archivo";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTA: Aqu� puede completar el nombre del archivo. <strong>si complete el nombre del archivo aqu�, ningun archivos podr�n subir!!! Usted debe subirlo v�a FTP manualmente!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "O Subir el nuevo archivo";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "Puede subir un archivo local. Este archivo ser� el pruducto que vende usted. un archivo existente ser� substituido.";

    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Completar cualquir texto aqu� que estar� mostrado para el cliente en el detalle del producto. <br />e.j.: 24h, 48 hours, 3 - 5 d�as, en el pedido.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "O seleccionar una Imagen para mostrar en la p�gina del detalle (flypage).<br />Las imagenes residen en el directorio <i>/componentes/com_phpshop/shop_imagen/disponibilidad</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Lista de la atribuci�n";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Ejemplos para el formato de la lista de la atribuci�n:</h4>
        <span class=\"sectionname\"><strong>Talla</strong>,XL[+1.99],M,S[-2.99]<strong>;Color</strong>,Rojo,Verde,Amarillo,colorcostoso[=24.00]<strong>;ycontinua</strong>,..,..</span>
        <h4>Ajustes del precio en l�nea para utilizar la modificaci�n avanzada de las atrobuciones:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == A�adir esta cantidad para precio configurado.<br />
        <strong>&#45;</strong> == Restar esta cantidad desde el precio configurado.<br />
        <strong>&#61;</strong> == Poner los precios del producto a esta cantidad.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Lista de las aduanas atributos";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Ejemplos para el formato de la lista de la aduana stributo:</h4>
        <span class=\"sectionname\"><strong>Name;Extras;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "Multiselecto: utilize STRG-Key y Rat�n";

	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = "Enable eProcessingNetwork.com payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = "Check to use eProcessingNetwork.com with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = "eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = "This is your eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = "eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = "This is your eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = "This is the eProcessingNetwork.com authentication type.";

    var $_PHPSHOP_RELATED_PRODUCTS = "Related Products";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "You may also be interested in this/these product(s)";
        
    var $_PHPSHOP_IMAGE_ACTION = "Image Action";
    var $_PHPSHOP_NONE = "none";
    
    var $_PHPSHOP_ORDER_HISTORY = "Order History";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Comment";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Comments on your Order";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Include this comment?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Date Added";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Customer Notified?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Order Status Change";
    
     /* USPS Shipping Module */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_USPS_HANDLING_FEE = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = "Your International Handling fee for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = "Your International Handling fee for USPS shipments.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_USPS_RESPONSE_ERROR = "USPS was not able to process the Shipping Rate Request.";
    
    /** Changed Product Type - Begin*/
    /*** Product Type ***/
    var $_PHPSHOP_PARAMETERS_LBL = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Product Type";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Product Type List";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "Add/Edit Product Type";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Product Type List for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "List Product Types";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "Add Product Type for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "Add Product Type";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Product Type";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Product Type Name";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Product Type Description";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Product Type Information";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publish?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Product Type Browse Page";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Product Type Flypage";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "Parameters of Product Type";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameter Information";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Product Type not found!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter Name";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "This name will be column name of table. Must be unicate and without space.<BR>For example: main_material";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter Label";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter Description";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter Type";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Integer";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "Short Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Float";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Char";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Date & Time";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Date";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "YYYY-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Time";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "HH:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Break Line";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Multiple Values";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "Possible Values";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Show Possible Values as Multiple select?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class=\"sectionname\">Steel;Wood;Plastic;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Default Value";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Unit";
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = "Advanced Search according to Parameters";
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters Search";
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "Do you will find products according to technical parametrs?<BR>You can used any prepared form:";
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "There's no result matching your query.";
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "I am sorry. There is no category for search.";
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "I am sorry. There is no published Product Type with this name.";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Is Like";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Is NOT Like";
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Full-Text Search";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "All Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "Any Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Reset Form";	
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "Search in Category";
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "Change Parameters";
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Descending order";
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Ascending order";
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parameters of Category";
	/** Changed Product Type - End*/

    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "List State";
    var $_PHPSHOP_STATE_LIST_LBL = "State List for: ";
    var $_PHPSHOP_STATE_LIST_ADD = "Add/Update a State";
    var $_PHPSHOP_STATE_LIST_NAME = "State Name";
    var $_PHPSHOP_STATE_LIST_3_CODE = "State Code (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "State Code (2)";
        
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Fee";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Clone Product";
	
    var $_PHPSHOP_CSV_SETTINGS = "Settings";
    var $_PHPSHOP_CSV_DELIMITER = "Delimiter";
    var $_PHPSHOP_CSV_ENCLOSURE = "Field Enclosure Char";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Upload a CSV File";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Submit CSV File";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "Load from directory";
    var $_PHPSHOP_CSV_FROM_SERVER = "Load CSV File from Server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Export to CSV File";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "Choose Field Ordering Type";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Default Ordering";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "My customized Ordering";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Export all Products to CSV File";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export Configuration";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Save Changes";
    var $_PHPSHOP_CSV_FIELD_NAME = "Field Name";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "default Value";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "Field Ordering";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "Field Required?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "Add a new Field";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Documentation";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Sorry, but the Product you've requested wasn't found!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Show Products that are out of Stock";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.";
	
}

/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?>
