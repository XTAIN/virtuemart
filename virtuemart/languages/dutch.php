<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: dutch.php,v 1.27 2005/06/22 19:50:42 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @translation Marco de Boom
* @translation Roland Dalmulder
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
    
    var $_PHPSHOP_MENU = "Menu";
    var $_PHPSHOP_CATEGORY = "Categorie";
    var $_PHPSHOP_CATEGORIES = "Categori�n";
    var $_PHPSHOP_SELECT_CATEGORY = "Selecteer een Categorie:";
    var $_PHPSHOP_ADMIN = "Administratie";
    var $_PHPSHOP_PRODUCT = "Produkt";
    var $_PHPSHOP_LIST = "lijst";
    var $_PHPSHOP_ALL = "alles";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Toon alle produkten";
    var $_PHPSHOP_VIEW = "bekijk";
    var $_PHPSHOP_SHOW = "toon";
    var $_PHPSHOP_ADD = "toevoegen";
    var $_PHPSHOP_UPDATE = "update";
    var $_PHPSHOP_DELETE = "verwijder";
    var $_PHPSHOP_SELECT = "selecteer";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Willekeurige Produkten";
    var $_PHPSHOP_LATEST = "Laatste Produkten";

    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Home";
    var $_PHPSHOP_CART_TITLE = "Mandje";
    var $_PHPSHOP_CHECKOUT_TITLE = "Afrekenen";
    var $_PHPSHOP_LOGIN_TITLE = "Login";
    var $_PHPSHOP_LOGOUT_TITLE = "Logout";
    var $_PHPSHOP_BROWSE_TITLE = "Browse";
    var $_PHPSHOP_SEARCH_TITLE = "Zoek";
    var $_PHPSHOP_ACCOUNT_TITLE = "Account Onderhoud";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigatie";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Department";
    var $_PHPSHOP_INFO = "Informatie";
    
    var $_PHPSHOP_BROWSE_LBL = "Overzicht";
    var $_PHPSHOP_PRODUCTS_LBL = "Produkten";
    var $_PHPSHOP_PRODUCT_LBL = "Produkt";
    var $_PHPSHOP_SEARCH_LBL = "Zoek";
    var $_PHPSHOP_FLYPAGE_LBL = "Meer info...";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Produkt Zoeken";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Produkt Naam";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Produkt Categorie";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Produkt Omschrijving";
    
    var $_PHPSHOP_CART_SHOW = "Bekijk Mandje";
    var $_PHPSHOP_CART_ADD_TO = "Bestellen";
    var $_PHPSHOP_CART_NAME = "Naam";
    var $_PHPSHOP_CART_SKU = "Art.Nr.";
    var $_PHPSHOP_CART_PRICE = "Prijs";
    var $_PHPSHOP_CART_QUANTITY = "Aantal";
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotaal";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Nieuwe toevoegen";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Verzend Adres";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Uw zoekopdracht heeft niets opgeleverd.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "Prijs: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Bestel";
    var $_PHPSHOP_NO_CUSTOMER = "Sorry, maar u bent geen geregistreerde klant. Registreert u zich eerst voordat u verder winkelt.";
    var $_PHPSHOP_DELETE_MSG = "Weet u zeker dat u wilt verwijderen?";
    var $_PHPSHOP_THANKYOU = "Bedankt voor uw bestelling.";
    var $_PHPSHOP_NOT_SHIPPED = "Nog niet verstuurd";
    var $_PHPSHOP_EMAIL_SENDTO = "Een bevestigings email is naar verzonden";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Sorry, er is geen MOS - gebruiker die u aan de com_phpshop userlijst kunt toevoegen";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "ERROR";
    var $_PHPSHOP_MOD_NOT_REG = "Module niet geregistreerd.";
    var $_PHPSHOP_MOD_ISNO_REG = "is niet een geldig phpShop module.";
    var $_PHPSHOP_MOD_NO_AUTH = "U heeft geen bevoegheid om gewenste module op te vragen.";
    var $_PHPSHOP_PAGE_404_1 = "Pagina bestaat niet";
    var $_PHPSHOP_PAGE_404_2 = "Opgegeven filename bestaat niet. Kan file niet vinden:";
    var $_PHPSHOP_PAGE_403 = "Niet voldoende toegangsbevoegdheid";
    var $_PHPSHOP_FUNC_NO_EXEC = "U heeft geen bevoegdheid om de handeling uit te voeren ";
    var $_PHPSHOP_FUNC_NOT_REG = "Funktie niet geregistreerd";
    var $_PHPSHOP_FUNC_ISNO_REG = " is niet een geldige MOS_com_phpShop funktie.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Administratie";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Laat Gebruikers zien";
    var $_PHPSHOP_USER_LIST_LBL = "Gebruikers Lijst";
    var $_PHPSHOP_USER_LIST_USERNAME = "Gebruikersnaam";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Volledige Naam";
    var $_PHPSHOP_USER_LIST_GROUP = "Groep";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Gebruiker Toevoegen";
    var $_PHPSHOP_USER_FORM_LBL = "Toevoegen/Update Gebruiker Informatie";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Rekening Adres  Informatie";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Verzend Adressen";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Adres Toevoegen";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Adres Nickname";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Voornaam";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Achternaam";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Tussenvoegsel";
    var $_PHPSHOP_USER_FORM_TITLE = "Titel";
    var $_PHPSHOP_USER_FORM_USERNAME = "Gebruikersnaam";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Wachtwoord";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Bevestig Wachtwoord";
    var $_PHPSHOP_USER_FORM_PERMS = "Permissie";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Bedrijfsnaam";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_USER_FORM_CITY = "Woonplaats";
    var $_PHPSHOP_USER_FORM_STATE = "Provincie";
    var $_PHPSHOP_USER_FORM_ZIP = "Postcode";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefoon";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Toon Modules";
    var $_PHPSHOP_MODULE_LIST_LBL = "Module Lijst";
    var $_PHPSHOP_MODULE_LIST_NAME = "Module Naam";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Module Perms";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funkties";
    var $_PHPSHOP_MODULE_LIST_ORDER = "LijstVolgorde";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Module Toevoegen";
    var $_PHPSHOP_MODULE_FORM_LBL = "Module Informatie";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Module Label (voor Topmenu)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Module Naam";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Module Perms";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Module Header";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Module Footer";
    var $_PHPSHOP_MODULE_FORM_MENU = "Module Menu?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Volgorde";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Module Omschrijving";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Taal Code";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Taal File";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Laat Funkties Zien";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Funktie Lijst";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Functie Naam";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Class Naam";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Class Methode";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Perms";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Funktie Toevoegen";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Funktie Informatie";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Funktie Naam";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Class Naam";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Class Methode";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Funktie Perms";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Funktie Omschrijving";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Laat Valuta zien";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Valuta lijst";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Valuta Toevoegen";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Valuta naam";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Valuta code";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Laat landen zien";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Landen lijst";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Land toevoegen";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Land naam";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Land code (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Land code (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Adres";
    var $_PHPSHOP_CONTINUE = "Doorgaan";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Uw mandje is leeg.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping InterShipper Server";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Server Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping Failed";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping Successful";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Carrier";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Reactie<BR>Tijd";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sec.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Bekijk Verzend Methodes";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Actieve Verzend Methodes";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Verzend Methodes";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Actief";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Verwerkings Kosten";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = " vaste prijs";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = " procent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "dagen";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Zware pakketten";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Instellen Verzend Methodes";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Verzend Methode toevoegen";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Instellen Verzend Methode";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Vernieuwen";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Verzend Methode";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Gebruiken";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Verwerkings Kosten";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "vaste prijs";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "dagen";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Zware pakketten";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Bestellingen";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Bevestig Bestelling";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Stop Bestelling";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Print Bestelling";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Verwijder Bestelling";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Bekijk Bestellingen";
    var $_PHPSHOP_ORDER_LIST_LBL = "Bestellingen Lijst";
    var $_PHPSHOP_ORDER_LIST_ID = "Order Nummer";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Order Datum";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Laatste Wijziging";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "SubTotaal";
    var $_PHPSHOP_ORDER_ITEM = "Order Items";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Bestel Info";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Order Nummer";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Order Datum";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Order Status";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Klant Informatie";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Rekening Informatie";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Verzend Informatie";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Rekening Naar";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Verzend Naar";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Naam";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Bedrijf";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Woonplaats";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Provincie";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Postcode";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Land";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefoon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Order Items";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Aantal";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Aantal";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Art.Nr.";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Prijs";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Totaal";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "SubTotaal";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "BTW";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Verzend Kosten";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Verzend Kosten";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Betalings Methode";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Account Naam";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Account Nummer";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Verloop Datum";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Betalings Log";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Verzend Informatie";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Betalings Informatie";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Postbedrijf";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Verzend Mode";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Verzend Datum";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Verzend Prijs";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Bekijk Order Status Types";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Order Status Type Toevoegen";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Order Status Code";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Order Status Naam";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Order Status";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Order Status Code";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Order Status Naam";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Bekijk Order";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Produkten";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Huidig Produkt";
    var $_PHPSHOP_CURRENT_ITEM = "Huidig Item";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Produkt Verzameling";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Bekijk Verzameling";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Prijs";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Nummer";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Gewicht";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Bekijk Produkten";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Produkt Lijst";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Produkt Naam";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Art.Nr.";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Toon";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Produkt Toevoegen";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Bewerk produkt";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Bekijk produkt pagina in winkel";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Item toevoegen";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Een ander Item toevoegen";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Nieuw Produkt";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Update Produkt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Produkt Informatie";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Produkt Status";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Produkt Afmetingen en Gewicht";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Produkt Afbeeldingen";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Nieuw Item";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Update Item";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Item Informatie";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Item Status";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Item Afmeting en Gewicht";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Item afbeeldingen";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Terug naar hoofd Produkt";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "Om huidige afbeelding te veranderen, type het pad naar nieuwe afbeelding.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Type \"none\" om huidige afbeelding te verwijderen.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Produkt Items";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Item Kenmerken";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Weet u zeker dat u het produkt wilt verwijderen\\en de Items die er bij horen?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Weet u zeker dat u het item wilt verwijderen?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Winkel";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Fabrikant";    
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Art.Nr.";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Naam";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Categorie";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Produkt Prijs (incl)";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Produkt Prijs (excl)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Produktpagina Omschrijving";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Korte Omschrijving";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "In Voorraad";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "In bestelling";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Beschikbaarheids Datum";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Speciaal aan";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Kortings Type";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Tonen?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Lengte";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Breedte";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Hoogte";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Maateenheid";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Gewicht";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Maateenheid";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Thumb Nail";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Grote Afbeelding";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Produkt Toevoeging Resultaat";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Produkt Update Resultaat";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Item Toevoeging Resultaat";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Item Update Resultaat";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Gebruik CSV upload";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Produkt Mappen";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Bekijk Categori�n";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Categorie Overzicht";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Categorie Toevoegen";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Categorie Informatie";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Categorie Naam";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Hoofd";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Categorie Omschrijving";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Publiceren?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Categorie Pagina";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Bekijk Opties";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Optie Lijst voor";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Optie Naam";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Volgorde";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Optie Toevoegen";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Optie Formulier";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nieuwe Optie voor Produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Update Optie voor Produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nieuwe Optie voor Uitvoering";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Update Optie voor Uitvoering";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Optie Naam";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Volgorde";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Bekijk Categori�n";
    var $_PHPSHOP_PRICE_LIST_LBL = "Prijs Lijst";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Prijs voor";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Groep Naam";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Prijs";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Prijs Toevoegen";
    var $_PHPSHOP_PRICE_FORM_LBL = "Prijs Informatie";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Nieuwe Prijs voor Produkt";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Update Prijs voor Produkt";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Nieuwe Prijs voor Uitvoering";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Update Prijs voor Uitvoering";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Prijs";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Klant Groep";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Verkoop Overzicht";
    var $_PHPSHOP_RB_INDIVIDUAL = "Individuele Produkt Overzicht";
    var $_PHPSHOP_RB_SALE_TITLE = "Verkoop Overzicht";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Verkoop Aktiviteit Overzicht";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Bepaal periode";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Maandelijks";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Wekelijks";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Dagelijks";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Deze Maand";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Vorige Maand";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Laatste 60 dagen";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Laatste 90 dagen";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Start op";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Tot en met";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Bekijk geselecteerde periode";
    var $_PHPSHOP_RB_REPORT_FOR = "Verslag voor ";
    var $_PHPSHOP_RB_DATE = "Datum";
    var $_PHPSHOP_RB_ORDERS = "Bestellingen";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Totaal Items verkocht";
    var $_PHPSHOP_RB_REVENUE = "Inkomen";
    var $_PHPSHOP_RB_PRODLIST = "Produkt Lijst";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Winkel";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Kleine Afbeelding";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Prijs";
    var $_PHPSHOP_ORDER_STATUS_P = "In behandeling";
    var $_PHPSHOP_ORDER_STATUS_C = "Bevestigd";
    var $_PHPSHOP_ORDER_STATUS_X = "Geannuleerd";
    var $_PHPSHOP_ORDER_STATUS_R = "Terug betaald";
	var $_PHPSHOP_ORDER_STATUS_S = "Verstuurd";
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Bestel";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Klanten";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Bekijk Klanten";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Klanten Lijst";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Gebruikersnaam";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Naam Voluit";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Groep";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Klant Toevoegen";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Klant Informatie";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Rekening naar Informatie";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informatie";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Verzend Informatie";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Adres Toevoegen";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Adres Nickname";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Gebruikers Naam";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Voornaam";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Achternaam";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Tussenvoegsel";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Titel";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Klantnaam";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Wachtwoord";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Bevestig Wachtwoord";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Klant Groep";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Bedrijfsnaam";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Woonplaats";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Provincie";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Postcode";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefoon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Bekijk Klant Groepen";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Klanten Groepen Lijst";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Groep Naam";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Groep Omschrijving";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Klant Groep Formulier";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Klant Groep Toevoegen";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Groep Naam";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Groep Omschrijving";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Winkel";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Bewerk Winkel";
    var $_PHPSHOP_STORE_FORM_LBL = "Winkel Informatie";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Contact Informatie";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Grote afbeelding";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Upload afbeelding";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Winkel Naam";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Winkel Bedrijfsnaam";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Stad";
    var $_PHPSHOP_STORE_FORM_STATE = "Provincie";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_STORE_FORM_ZIP = "Postcode";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefoon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Winkel Categorie";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Voornaam";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Achternaam";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Tussenvoegsel";
    var $_PHPSHOP_STORE_FORM_TITLE = "Titel";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefoon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefoon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Afbeelding Pad";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Omschrijving";
    
    var $_PHPSHOP_PAYMENT = "Betaling";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Bekijk Betalings Methodes";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Betalings Methode Lijst";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Naam";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Code";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Kosten betalingsmethode";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Klant Groep";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Betalings Methode";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Betalings Methode Toevoegen";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Betalings Methode Toevoegen";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Betalings Methode Naam";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Klant Groep";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Kosten betalingsmethode";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Code";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Volgorde";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Gebruik Cybercash";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Belasting";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Belasting tarieven";
    var $_PHPSHOP_TAX_LIST_MNU = "Bekijk Belasting tarieven";
    var $_PHPSHOP_TAX_LIST_LBL = "Belasting tarieven Lijst";
    var $_PHPSHOP_TAX_LIST_STATE = "Belastings Regio";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Belasting Land";
    var $_PHPSHOP_TAX_LIST_RATE = "Belasting tarief";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Belasting tarief toevoegen";
    var $_PHPSHOP_TAX_FORM_LBL = "Belasting tarief Informatie toevoegen";
    var $_PHPSHOP_TAX_FORM_STATE = "Belasting Regio";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Belasting tarief land";
    var $_PHPSHOP_TAX_FORM_RATE = "Belasting tarief";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Verkopers";
    var $_PHPSHOP_VENDOR_ADMIN = "Verkopers";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Bekijk Verkopers";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Verkopers Lijst";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Verkoper Naam";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Verkoper Toevoegen";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Informatie Toevoegen";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Verkoper Informatie";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Contact Informatie";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Afbeelding";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Upload Afbeelding";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Verkoper winkelnaam";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Verkoper Bedrijfsnaam";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Woonplaats";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Provincie";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Land";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Postcode";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefoon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Verkoper Categorie";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Achternaam";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Voornaam";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Tussenvoegsel";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Titel";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefoon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefoon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Afbeelding Pad";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Omschrijving";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Bekijk Verkoper Categori�n";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Verkoper Categorie Lijst";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Categorie Naam";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Categorie Omschrijving";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Verkopers";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Verkoper Categorie Toevoegen";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Verkoper Categorie Formulier";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Categorie Informatie";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Categorie Naam";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Categorie Omschrijving";
        
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Fabrikant";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Fabrikanten";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Fabrikanten Lijst";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Fabrikanten Lijst";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Fabrikant Naam";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Fabrikant Toevoegen";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Informatie Toevoegen";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Fabrikant Informatie";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Fabrikant Naam";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Fabrikant Categorie";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL naar website fabrikant";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Omschrijving";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Bekijk Fabrikanten Categorie�n";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Fabrikanten Categorie Lijst";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Categorie Naam";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Categorie Omschrijving";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Fabrikanten";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Fabrikanten Categorie Toevoegen";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Fabrikanten Categorie Formulier";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Categorie Informatie";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Categorie Naam";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Categorie omschrijving";

        
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Help";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Aktie";
    var $_PHPSHOP_CART_UPDATE = "Vernieuwen";
    var $_PHPSHOP_CART_DELETE = "Verwijder Produkt Uit Mandje";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Prijs";
    var $_PHPSHOP_PRODUCT_CALL = "Bel voor een prijsopgave";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Terug";
    var $_PHPSHOP_PRODUCT_NEXT = "Volgende";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Belasting(BTW)";
    var $_PHPSHOP_CART_SHIPPING = "Verzendkosten";
    var $_PHPSHOP_CART_TOTAL = "Totaal";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Volgende";
    var $_PHPSHOP_CHECKOUT_REGISTER = "Registreer";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Rekening Informatie";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Bedrijf";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Naam";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefoon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Verzend Informatie";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Bedrijf";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Naam";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefoon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Betalings Informatie";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Naam Op Kreditkaart";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Betalings Methode";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Kreditkaart Nummer";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Verloop Datum";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Bestelling Versturen";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "verplichte informatie wanneer men kiest voor betaling met Kreditkaart";
    
    var $_PHPSHOP_ZONE_MOD = "Zone Verzendkosten";
    
    var $_PHPSHOP_ZONE_LIST_MNU = " Zones Lijst";
    var $_PHPSHOP_ZONE_FORM_MNU = "Zone Toevoegen";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Zones Toewijzen";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Land";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Huidige Zone";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Toewijzen aan Zone";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Update";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Zones Toewijzen";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Zone Naam";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Zone Omschrijving";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Zone Koste Per Item";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Zone Kosten Limiet";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Zone Lijst";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Zone Naam";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Zone Omschrijving";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Zone Kosten Per Item";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Zone Kosten Limiet";
    
    var $_PHPSHOP_LOGIN_FIRST = "Log in of registreer tot deze site eerst, a.u.b. Bedankt!";
    var $_PHPSHOP_STORE_FORM_TOS = "Leverings Voorwaarden";
    var $_PHPSHOP_AGREE_TO_TOS = "Ga a.u.b. eerst akkoord met onze leverings voorwaarden.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Ik ga akkoord met de leverings voorwaarden";
    
    var $_PHPSHOP_LEAVE_BLANK = "(Laat leeg wanneer u hier geen eigen <br />php-file voor heeft!)";
    var $_PHPSHOP_RETURN_LOGIN = "Terugkerende Klanten: Log In a.u.b.";
    var $_PHPSHOP_NEW_CUSTOMER = "Nieuw hier? Vul hier a.u.b. eerst uw gegevens in";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Klant Account:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Order Informatie";
    var $_PHPSHOP_ACC_UPD_BILL = "Hier kunt u uw rekenings informatie aanpassen.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Hier kunt u verzendgegevens aanpassen en toevoegen.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Account Informatie";
    var $_PHPSHOP_ACC_SHIP_INFO = "Verzend Informatie";
    var $_PHPSHOP_ACC_NO_ORDERS = "Geen Orders Aanwezig";
    var $_PHPSHOP_ACC_BILL_DEF = "- Standaard (zelfde als rekenings informatie)";
    var $_PHPSHOP_SHIPTO_TEXT = "U kunt verzend adressen toevoegen aan uw account. Bedenk een geschikte code of sleutelwoord voor uw verzend adres.";
    var $_PHPSHOP_CONFIG = "Configuratie";
    var $_PHPSHOP_USERS = "Klanten";
    var $_PHPSHOP_IS_CC_PAYMENT = "is Credit Card betaling?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Verzend Administratie";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Verzenders";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Verzender";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Verzender lijst";
    var $_PHPSHOP_RATE_LIST_MNU = "Verzend Kosten";
    var $_PHPSHOP_RATE_LIST_LBL = "Verzendkosten lijst";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Naam";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Volgorde";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Verzender Aanmaken";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Verzender bewerken / maken";
    var $_PHPSHOP_RATE_FORM_MNU = "Verzendkosten aanmaken";
    var $_PHPSHOP_RATE_FORM_LBL = "Verzendkosten bewerken/maken";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Verzendkosten omschrijving";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Verzender";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Postcode bereik begin";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Postcode bereik eind";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Laagste gewicht";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Hoogste gewicht";
    var $_PHPSHOP_RATE_FORM_VALUE = "Kosten";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Pakket kosten";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "BTW";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Volgorde";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Verzender";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Verzendkosten omschrijving";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Gewicht van ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... tot";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Verzend Bedrijf";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Volgorde";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "ERROR: Verzender ID bestaat.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "ERROR: Kies een verzender.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "ERROR: Er bestaan verzenkosten voor deze verzender, deze moet u eerst verwijderen voordat u de verzender kunt verwijderen.";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "ERROR: Geen verzender kunnen vinden met deze ID.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "ERROR: Kies een verzendbedrijf.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "ERROR: Kon geen verzender vinden met deze ID.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "ERROR: Een kosten omschrijving word gevraagd.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "ERROR: Bestemmings land is ongeldig. Meer dan 1 land kunnen gescheiden worden met een ';'.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "ERROR: Minimum gewicht is nodig";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "ERROR: Maximum gewicht is nodig";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "ERROR: Minimum gewicht moet kleiner zijn dat het maximum gewicht";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "ERROR: Een bedrag voor verzendkosten is nodig";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "ERROR: Kies een valuta";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "ERROR: Een bedrag voor verzendkosten is nodig";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Selecteer a.u.b.";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Verzender";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Verzendkosten";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Prijs";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-geen-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "CreditCard";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Gebruik Betaling Processor";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Bank debit";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Alleen Adres";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Selecteer een verzend adres!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Selecteer een verzend methode!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Selecteer een betalings methode!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Controleer de gegevens en bevestig de bestelling!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "Selecteer een verzend methode.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "Selecteer een andere verzend methode.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "Selecteer een betalings methode.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Vul uw Creditkaart nummer in.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Vul de naam op de Creditkaart in.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Het nummer wat u invulde is niet geldig.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Vul Creditkaart verloop maand in.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Vul Creditkaart verloop jaar in.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Verloopdatum is ongeldig.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Selcteer een verzend naar adres.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Ongeldig account nummer.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Er is niets in uw mandje!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "ERROR: Selecteer een Verzendbedrijf!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "ERROR: De geselecteerde verzendkosten werden niet gevonden!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "ERROR: Uw verzend adres werd niet gevonden!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "ERROR: Er is geen CC data....";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "ERROR: Credit Kaart nummer niet gevonden!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Sorry, maar het CC nummer wat u gebruikt is een test nummer!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "De Gebruikers_id werd niet gevonden in de database!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "U heeft geen eigenaarsnaam opgegeven voor het rekeningsnummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "U heeft geen IBAN opgegeven.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "U heeft geen rekeningsnummer opgegeven.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "You have actually not provided your bank sort code.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "U heeft u de naam van uw bank niet opgegeven.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "CheckOut need a valid Step!";
    
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Betalings informatie opgeslagen voor latere verwerking.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Minimum bestedings bedrag voor onze winkel is nog niet bereikt.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Onze minimum bestedings bedrag is:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Credit Kaart betaling";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Betalings methodes";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Selecteer een betalings methode a.u.b.:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Minimum besteed bedrag voor uw winkel";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Bank Account Info";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Rekenings Nummer";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Bank sorting code nummer";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Bank Naam";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Account Naam";
    
    var $_PHPSHOP_MODULES = "Modules";
    var $_PHPSHOP_FUNCTIONS = "Funkties";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Speciale produkten";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "U kunt een opmerking of vraag toevoegen aan de bestelling voor ons";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Opmerking of vraag";
    var $_PHPSHOP_INCLUDING_TAX = "</strong><small>(incl. \$tax % btw)</small>";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "Selecteer a.u.b. een item";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Item";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Download Omgeving";
    var $_PHPSHOP_DOWNLOADS_START = "Begin met Download";
    var $_PHPSHOP_DOWNLOADS_INFO = "Vul Download-ID in die u heeft gekregen via email en klik 'Begin met Download'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Sorry, maar uw Download is verlopen";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Sorry, maar uw maximale aantal downloads is reeds behaald";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Ongeldig Download-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Kon geen bericht sturen aan ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Bericht verstuurd aan ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Download-Info";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "uw bestelling is klaar voor download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Gebruik de volgende Download-ID(s) in onze Downloads Omgeving: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "het maximum aantal downloads voor elk bestand is: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Download tot {expire} dagen na de eerste download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Vragen? Problemen?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Download-Info van "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "downloadable produkt?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Bedankt voor betaling. 
        De transactie is geslaagd. U krijgt een bevestigings email van PayPal. 
        U kunt doorgaan of inloggen via <a href=http://www.paypal.com>www.paypal.com</a> om de transactie details te bekijken.";
    var $_PHPSHOP_PAYPAL_ERROR = "Er is een fout opgetreden. De status van uw bestelling kan niet vernieuwd worden.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Bedankt voor het winkelen bij ons.  Uw bestel informatie volgt.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Nogmaals bedankt voor uw bezoek.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Vragen? Problemen?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "De volgende bestelling is ontvangen.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Bekijk de bestelling d.m.v. de link hieronder.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negatieve aantallen zijn niet toegestaan.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Vul een geldig aantal in voor dit produkt.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Geselecteerde aantal is hoger dan het aantal op voorraad.";
    var $_PHPSHOP_CART_STOCK_2 = "Er zijn op moment \$product_in_stock produkten aanwezig.";
    var $_PHPSHOP_CART_STOCK_3 = "Klik hier om in onze backorderlijst geplaatst te worden.";
    var $_PHPSHOP_CART_SELECT_ITEM = "Selecteer een produkt optie/uitvoering (maat, kleur, etc.) op deze pagina!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "Geen";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Meneer";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Mevrouw.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Standaard";
    
    /*#####################################################
    MODULE AFFILIATE
  	#######################################################*/        
    var $_PHPSHOP_AFFILIATE_MOD   = "Wederverkopers Administratie";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Bekijk Wederverkopers";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Wederverkopers Lijst";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Wederverkoper Naam";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Actief";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Percentage";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Maand Totaal";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Maand Verdiensten";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Bekijk Orders";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email Wederverkopers";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email Wederverkopers";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Wie emailen(* = Allemaal)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Jouw Email";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Het onderwerp";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Huidige statistieken toevoegen";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Commissie Percentage";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Actief?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Normaal verzonden na";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Bezorg Informatie";
    var $_PHPSHOP_MORE_CATEGORIES = "meer categorie�n";
    var $_PHPSHOP_AVAILABILITY = "Beschikbaarheid";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Dit produkt is momenteel niet beschikbaar.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Het is weer aanwezig op: ";
        
    var $_PHPSHOP_STATISTIC_SUMMARY = "Overzicht";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statistieken";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Klanten";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "Actieve Produkten";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "Inactieve Produkten";
    var $_PHPSHOP_STATISTIC_SUM = "Samenvatting";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Nieuwe Orders";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Nieuwe Klanten";
    
    
  //Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Voer uw e-mail adres in om bericht te krijgen wanneer dit produkt weer beschikbaar is. Wij zullen niet uw e-mail adres delen, verhuren, verkopen of voor andere doeleinden gebruiken dan alleen u op de hoogte te stellen wanneer het produkt weer beschikbaar is.<br /><br />Hartelijk dank!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Bedankt voor het wachten! <br />We zullen u zo snel mogelijk op de hoogte stellen als het produkt binnen is.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Waarschuw Mij!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Print scherm";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Kies OF Authorize.net OF CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Configuratie bestand status:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "is schrijfbaar";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "is niet schrijfbaar";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Globaal";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Pad & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Site";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Verzending";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Afrekening";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Downloads";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Betalingen";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Gebruik alleen als catalogus";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Met deze keuze schakelt u alle winkel functionaliteit uit.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Toon Prijzen";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Toon Prijzen inclusief belasting?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Optie om de klanten prijzen te tonen met of zonder belasting.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Optie om prijzen te tonen. Als de catalogus functie wordt gebruikt, dan wil niet iedereen de prijzen laten zien.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtuele Belasting";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Dit bepaalt of er over artikelen met een gewicht van 0 belasting wordt geheven. Wijzig ps_checkout.php->calc_order_taxable() om dit aan te passen.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Belasting modus:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Gebaseerd op verzend adres";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Gebaseerd op verkopers adres";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Dit bepaalt welk belastingtarief gekozen wordt:<br /><ul><li>de plaats waar de winkel is gevestigd</li><br/><li>de plaats waar de klant vandaan komt.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Gebruik meerdere belasting tarieven?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Gebruik deze optie, als er artikelen zijn die in verschillende belastingtarieven vallen zoals boeken 6% en luxe goederen 19%.";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Pas korting toe voor belasting/verzending?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Activeer Klant Recensie/Beoordelings Systeem";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Indien geactiveerd, sta je klanten toe om produkten te <strong> beoordelen</strong> en <strong>recensies </strong> er over te schrijven. Klanten kunnen hun ervaringen uiten over een produkt om te delen met andere klanten.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Optie om korting af te trekken voor de gekozen betalingsmethode VOOR (aangevinkt) of NA belasting en verzendkosten berekening.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Klanten kunnen bankgegevens invoeren?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Activeer als klanten hun bank gegevens kunnen invoeren als ze zich registreren bij de winkel.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Klanten kunnen hun staat / regio selecteren?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Activeer als klanten hun staat / regio kunnen selecteren als ze zich registreren bij de winkel.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Moet akkoord gaan met de algemene voorwaarden?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Activeer als klanten akkoord moeten gaan met de algemene voorwaarden.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Controleer Voorraad?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Optie om de voorraad te controleren als een klant een artikel aan het mandje toevoegd. Indien geactiveerd, kan een klant niet meer produkten toevoegen aan het mandje dan er op voorraad zijn.";
	// RolandD
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Activeer Lidmaatschap?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Bestelling-mail formaat:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Tekst mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Dit bepaalt hoe de bevestigings e-mails worden opgezet:<br /><ul><li>als simpele tekst e-mail</li><li>als een HTML e-mail met plaatjes.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Toestaan Voorpagina-Administratie voor niet-Backend Gebruikers?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "Deze optie kan de Voorpagina Administratie worden geactiveerd voor gebruikers die winkeleigenaar zijn, maar geen toegang hebben tot de Mambo backend (b.v. Geregistreerd / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "De URL naar uw website. Normaal gesproken identiek aan de Mambo URL (met een slash op het einde!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "De beveiligde URL naar uw website. (https - met een slash op het einde!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "De URL naar het mambo-phpShop component. (met een slash op het einde!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "De URL voor de mambo-phpShop component plaatjes directorie.(with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "Het pad naar de mambo-phpShop component directorie.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "Het pad naar de mambo-phpShop classes directorie.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "Het pad naar de mambo-phpShop html directorie.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "Het pad naar de mambo-phpShop shop_image directorie.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Dit is de pagina die standaard geladen wordt.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Dit is de standaard pagina voor foutmeldingen.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Dit is de standaard pagina voor het weergeven van ontwikkel meldingen.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG? Activeert de ontwikkel uitvoer. Dit zorgt ervoor dat de DEBUGPAGE wordt weergegeven onderaan elke pagina. Dit is erg handig tijdens het ontwikkelen van de winkel aangezien het verschillende informatie laat zien zoals inhoud van het mandje, formulier waardes etc.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Dit is de standaard pagina voor het weergeven van produkt informatie.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Categorie Sjabloon";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Dit definieerd de standaard categorie sjabloon voor het weergeven van produkten in een categorie.<br /> Nieuwe sjablonen kunnen worden gecre�erd door het wijzigen van de bestaande sjablonen.<br />(deze bevinden zich in de directorie <strong>COMPONENTPATH/html/templates/</strong> en beginnen met browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Standaard aantal produkten in een rij";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Dit definieerd het standaard aantal produkten in een rij. <br />Bijvoorbeeld: Als het aantal op 4 staat, het categorie sjabloon laat dan 4 produkten per rij zien";  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" afbeelding";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Deze afbeelding wordt weergegeven als er geen produkt afbeelding beschikbaar is.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Bepaalt het aantal rijen per pagina wanneer de zoekresultaten worden weergegen in een lijst.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Geeft de kleur aan van de oneven rijen in een resultaten lijst.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Geeft de kleur aan van de even rijen in een resultaten lijst.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Bepaald het aantal rijen die getoond worden in het bestellingslijst selectie scherm.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Toon voettekst \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Toont een powered-by-mambo-phpShop voettekst afbeelding.";
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Kies de verzendingsmethode";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standaard Verzendings module met individueel geconfigureerde bedrijven en tarieven. <strong>AANBEVOLEN !</strong>";
	// RolandD
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "Zone Shipping Module Country Version 1.0<br />For more information on this module please visit <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />for details or contact <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS Tools Shipping calculation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS toegangs code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Uw UPS toegangs code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS gebruikersnaam";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "De gebruikersnaam die u heeft gekregen van UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS wachtwoord";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "Het wachtwoord voor uw UPS rekening";    
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Module. Alleen kiezen als u een Intershipper.com rekening hebt";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Schakel Verzendmethode uit. Kies dit als u alleen goederen verkoopt die niet verscheept hoeven te worden.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Wachtwoord";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Het wachtwoord voor uw InterShipper rekening.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper e-mail";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Uw e-mail adres voor uw InterShipper rekening.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Wordt gebruikt om data die wordt opgeslagen in de database te vergrendelen met deze sleutel. Dit betekent dat dit bestand ten alle tijden beschermd moet zijn tegen lezen.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Activeer de afreken balk";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Activeer dit, indien de 'afreken-balk' getoond moet worden aan de klant tijdens de afreken procedure ( 1 - 2 - 3 - 4 met afbeeldingen).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Kies uw winkel's afreken procedure";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standaard :</strong><br/>
               1. Verzoek verzendings adres<br />
              2. Verzoek verzendings methode<br />
              3. Verzoek betalings methode<br />
              4. Bevestig bestelling";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Procedure 2:</strong><br/>
               1. Verzoek verzendings adres<br />
              2. Verzoek betalings methode<br />
              3. Bevestig bestelling";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Procedure 3:</strong><br/>
               1. Verzoek verzendings methode<br />
              2. Verzoek betalings methode<br />
              3. Bevestig bestelling";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Procedure 4:</strong><br/>
               1. Verzoek betalings methode<br />
              2. Bevestig bestelling";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Downloads Toestaan";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Kies deze optie om de download mogelijkheden te activeren. Alleen als u artikelen verkoopt die te downloaden zijn.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Bestellings Status activering downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Kies de bestellings status wanneer de klant wordt geinformeerd over de activatie van de download via e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Bestellings Status annulering downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Kies de bestellings status wanneer de download wordt geannuleerd voor de klant.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "Het fysieke pad naar de bestanden voor klant download. (met een slash op het einde!)<br>
        <span class=\"message\">Voor de veiligheid van uw winkel: Indien mogelijk, gebruik een directorie DIE BUITEN UW WEBSITE LIGT</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Download Maximum";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Regelt het aantal downloads dat gedaan kan worden meet ��n Download-ID, (voor ��n bestelling)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Download Verlopen";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Regelt de tijdsduur <strong>in seconden</strong> waarin de download voor de klant is geactiveerd. Deze tijdsduur begint met de eerste download! Als de tijdsduur is verstreken wordt het download-ID uitgeschakeld.<br />Notitie : 86400 seconden=24 uur.";
	
	
	
	//RolandD
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Enable IPN Payment via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Check to let your customers use the PayPal payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal payment email:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Your business email address for PayPal payments. Also used as receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Order Status for successful transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Order Status for failed transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "Select an order status for failed PayPal transactions.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Enable Payments via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Check to let your customers use the Australian PayMate payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate username:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Your user account for PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Enable Authorize.net payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Check to use Authorize.net with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Yes";
	var $_PHPSHOP_ADMIN_CFG_NO = "No";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "This is your Authorize.Net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "This is your Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "This is the Authorize.Net authentication type.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Enable CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Check to use CyberCash with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT is the CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Uitgebreid Zoeken";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Zoek In Alle Categorien";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Zoek In Alle produkt informatie";
    var $_PHPSHOP_SEARCH_PRODNAME = "Alleen Produkt naam";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Alleen Fabrikant/Verkoper";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Alleen Produkt omschrijving";
    var $_PHPSHOP_SEARCH_AND = "and";
    var $_PHPSHOP_SEARCH_NOT = "not";
    var $_PHPSHOP_SEARCH_TEXT1 = "De eerste drop-down-lijst geeft u de mogelijkheid om een categorie te selecteren waarin u wilt zoeken. 
        Met de tweede drop-down-lijst kunt u aangeven in welke produkt informatie u wilt zoeken (bv. Naam). 
        Wanneer u een keuze genaakt heeft (of het bij de standaard ALLES laat), vult u een zoekwoord in. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " U kunt u zoek aktie nog verder verfijnen door een extra zoekwoord toe te voegen en een keuze te maken uit de AND of NOT operator. 
        Selecteren van AND houdt in dat beide woorden aanwezig moeten zijn voordat een produkt gevonden wordt. 
        Selecteren van NOT houdt in dat alleen produkten getoont worden waar het eerste zoekwoord zich in bevind en het tweede zoekwoord niet.";
    var $_PHPSHOP_ORDERBY = "Sorteer op";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Gemiddelde klant waardering";
    var $_PHPSHOP_TOTAL_VOTES = "Aantal stemmen";
    var $_PHPSHOP_CAST_VOTE = "Geef uw stem";
    var $_PHPSHOP_RATE_BUTTON = "Stem";
    var $_PHPSHOP_RATE_NOM = "Waardering";
    var $_PHPSHOP_REVIEWS = "Klant recensies";
    var $_PHPSHOP_NO_REVIEWS = "Er zijn nog geen recensies geschreven voor dit produkt.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Wees de eerste om een recensie te schrijven...";
    var $_PHPSHOP_REVIEW_LOGIN = "Gaarne inloggen om een recensie te schrijven.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Geeft u een waardering voor dit produkt om uw recensie te voltooien!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Schrijf a.u.b. een langere recensie. Mininum aantal tekens vereist: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Schrijf a.u.b. een kortere recensie. Maximum aantal tekens toegestaan: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Schrijf een recensie voor dit produkt!";
    var $_PHPSHOP_REVIEW_RATE = "Stap 1: Geef een waardering voor dit produkt. Kies een waardering tussen 0 (slechtste) en 5 sterren (beste).";
    var $_PHPSHOP_REVIEW_COMMENT = "Stap 2: Schrijf een (korte) recensie....(minimaal 100, maximaal 2000 tekens) ";
    var $_PHPSHOP_REVIEW_COUNT = "Aantal geschreven tekens: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Verstuur Recensie";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "U heeft al een recensie geschreven voor dit produkt. Dank u wel.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Bedankt voor uw recensie.";
    var $_PHPSHOP_COMMENT= "Commentaar";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Toevoegen/Wijzigen Credit Card Types";
    var $_PHPSHOP_CREDITCARD_NAME = "Credit Card Naam";
    var $_PHPSHOP_CREDITCARD_CODE = "Credit Card - Afkorting";
    var $_PHPSHOP_CREDITCARD_TYPE = "Credit Card Type";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Credit Card Lijst";
    var $_PHPSHOP_UDATE_ADDRESS = "Bijwerken Adres";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Verder Winkelen";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Uw bestelling is succesvol geplaatst!";
    var $_PHPSHOP_ORDER_LINK = "Klik hier om de details van uw bestelling te zien.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "De status van uw order nummer {order_id} is gewijzigd.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "De nieuww status is:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "Om de details van uw bestelling te zien, klik hier (of kopieer het in uw browser):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Bestelling status wijziging: Uw bestelling {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Klant informeren?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Wijzig eerst de status van uw bestelling!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Prijs Korting op standaard Klant Groep (in %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "Een positief getal X betekent: Als het produkt geen prijs heeft toegewezen gekregen aan DEZE Klant Groep, de standaard prijs wordt verminderd met X %. Een negatief getal heeft het tegenovergestelde effect.";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Produkt Korting";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Produkt Kortings Lijst";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Toevoegen/Wijzigen Produkt Korting";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Kortings bedrag";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Voer kortings getal in";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Kortings Type";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Percentage";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Totaal";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Is het bedrag een percentage of een totaal?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Start datum van de korting";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Geef de dag waarop de korting begint";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Eind datum van de korting";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Geef de dag waarop de korting eindigt";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "U kan het Produkt Kortings Formulier gebruiken om kortingen toe te voegen.!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "U bespaart";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Bekijk grote afbeelding";    
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Valuta Weergave Stijl";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Valuta symbool";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "U kunt ook HTML Entities gebruiken (e.g. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimalen";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Aantal getoonde decimalen (mag 0 zijn)<br><b>Wordt afgerond wanneer getal is ingegeven met een ander aantal decimalen</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimaal symbool";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Karakter wat gebruikt wordt als decimaal symbool";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Duizendtal scheiding";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Karakter wat gebruikt wordt om duizentallen te scheiden (mag leeg zijn)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positieve weergave";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Weergave stijl die gebruikt wordt voor positieve getallen.<br>(Symb staat voor valuta symbool)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negatieve weergave";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Weergave stijl die gebruikt wordt voor negatiev getallen.<br>(Symb taat voor valuta symbool)";
    
    var $_PHPSHOP_OTHER_LISTS = "Andere Produkt Lijsten";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "Meer voorbeelden";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Beschikbare Afbeeldingen voor";
    var $_PHPSHOP_BACK_TO_DETAILS = "Terug naar Produkt Details";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "BestandManager";
    var $_PHPSHOP_FILEMANAGER_LIST = "BestandManager::Produkt Lijst";
    var $_PHPSHOP_FILEMANAGER_ADD = "Toevoegen Afbeelding/Bestand";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Toegewezen Afbeeldingen";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Is te Downloaden?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Toegewezen Bestanden (Datasheets,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Gepubliseerd?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "BestandManager::Afbeelding/Bestands Lijst voor";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Bestandsnaam";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "Bestand Titel";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "Bestand Type";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Bewerken";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Grote Afbeelding";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Thumbnail Afbeelding";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Upload een bestand voor";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Huidig bestand";
    var $_PHPSHOP_FILES_FORM_FILE = "Bestand";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Afbeelding";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Upload naar";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "standaard Produkt Afbeelding Pad";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Specificeer bestandslokatie";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Download Pad (bv. voor verkoop van te downloaden produkten!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Automatisch Thumbnail aanmaken?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "Bestand is gepubliseerd?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "Bestand Titel (wat de klant ziet)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "Bestand Omschrijving";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "Bestand URL (optie)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Geef a.u.b. een bestaande serverpad op!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "De Thumbnail Afbeelding is met succes gemaakt!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Kon geen Thumbnail Afbeelding maken!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "Bestand/afbeelding Upload Error";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Kon niet de grote afbeelding verwijderen.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Grote Afbeelding met succes verwijderd.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Kon Thumbnail Afbeelding niet verwijderen (bestaat misschien niet): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Thumbnail Afbeelding met succes verwijderd.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Bestand kon niet verwijderd worden.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "Bestand met succes verwijderd.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Sorry, maar het gevraagde bestand is niet gevonden!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Afbeedling niet gevonden!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Coupon";
    var $_PHPSHOP_COUPONS = "Coupons";
    var $_PHPSHOP_COUPON_LIST = "Coupon Lijst";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Coupon is al een keer gebruikt.";
    var $_PHPSHOP_COUPON_REDEEMED = "Coupon ingediend! Bedankt.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "Heeft u een coupon code, vul hem hieronder in:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Verzend";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "Die coupon code bestaat reeds. Probeer het nog een keer.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Update Coupon";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Klik op een coupon code om hem te wijzigen, om een coupon code te verwijderen, eerst selecteren en dan op Delete klikken:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Code";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Procent of Totaal";
    var $_PHPSHOP_COUPON_TYPE = "Coupon Type";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "Een kado Coupon wordt verwijderd zodra deze is gebruikt. Een permanente coupon kan onbeperkt gebruikt worden door klanten.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Kado Coupon";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanente Coupon";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Waarde";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Verwijder Code";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Weet u zeker dat u hem wilt verwijderen?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Alle velden moeten ingevuld zijn.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Coupon waarde moet een getal zijn.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "Nieuwe Coupon";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Coupon Code";
    var $_PHPSHOP_COUPON_PERCENT = "Procent";
    var $_PHPSHOP_COUPON_TOTAL = "Totaal";
    var $_PHPSHOP_COUPON_VALUE = "Getal";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Coupon code bewaard.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Bewaar Coupon";
    var $_PHPSHOP_COUPON_DISCOUNT = "Coupon Korting";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Coupon code niet gevonden. Probeer het nog eens.";
    var $_PHPSHOP_COUPONS_ENABLE = "Coupon Gebruik aanzetten";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "Wanneer u deze optie aan zet, mogen klanten Coupon nummers invullen om korting op hun bestelling mogelijk te maken.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Geen Verzendkosten";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Er zijn geen Verzendkosten bij deze bestelling!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minimum Bedrag voor gratis verzending";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "Het bedrag (INCL. BTW!) vanwaar geen verzendkosten worden berekend 
                                                (bijvoorbeeld: <strong>50</strong> betekent geen verzendkosten wanneer een klant een bestelling plaatst
                                                van � 50 (incl. BTW) of meer.";
    var $_PHPSHOP_YOUR_STORE = "Uw winkel";
    var $_PHPSHOP_CONTROL_PANEL = "Controle Paneel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Button";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "De PDF - Button aan- of uitzetten in de winkel";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Moet akkoord gaan met de leveringsvoorwaarden bij elke bestelling?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Aanvinken als u dat wilt.";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Bank Account Type";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Business Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Saving";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Recurring Billings?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Define wether you want recurring billings.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Internal Error processing the Request to";
    var $_PHPSHOP_PAYMENT_ERROR = "Failure in Processing the Payment";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Payment successfully processed";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS was not able to process the Shipping Rate Request.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Guaranteed Day(s) To Delivery";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS Pickup Method";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "How do you give packages to UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS Packaging?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Select the default Type of Packaging.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Residential Delivery?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Residential (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Commercial Delivery (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Quote for Residential (RES) or Commercial Delivery (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Tax Class";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Use the following tax class on the shipping fee.";
    
    var $_PHPSHOP_ERROR_CODE = "Error Code";
    var $_PHPSHOP_ERROR_DESC = "Error Omschrijving";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Show / Change the Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Show/Change the Password/Transaction Key";
    var $_PHPSHOP_TYPE_PASSWORD = "Please type in your User Password";
    var $_PHPSHOP_CURRENT_PASSWORD = "Current Password";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Current Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "The Transaction key was successfully changed.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Request/Capture Credit Card Code Value (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "You need to enter your Credit Card Code to proceed.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "Vul een bestandsnaam in";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "Opm.: Hier kunt u een bestandsnaam invullen. <strong>Wanneer u dat doet worden er geen bestanden ge-upload!!! Dit moet u dan doen via FTP!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "OF Upload een nieuw Bestand";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "U kunt een bestand van uw pc uploaden. Dit is dan het produkt wat u verkoopt. Een reeds bestaande bestand wordt vervangen.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Type een tekst wat getoond wordt aan de klant op de product flypage.<br />Bijvoorbeeld: 24u, 48 uur , 3 - 5 dagen, Op bestelling.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "Of selecteer een afbeelding.<br />De afbeeldingen bevinden zich in de directory <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Specificatie Lijst";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Voorbeelden van Specificatie lijst opbouw:</h4>
        <span class=\"sectionname\"><strong>Grote</strong>,XL[+1.99],M,S[-2.99]<strong>;Kleur</strong>,Rood,Groen,Geel,Dure Kleur[=24.00]<strong>;Enz</strong>,..,..</span>
        <h4>Prijs verwerking van de Specificatie aanpassing/toevoeging:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == Tel deze hoeveelheid op bij de standaard prijs.<br />
        <strong>&#45;</strong> == Trek deze hoeveelheid af van de standaard prijs.<br />
        <strong>&#61;</strong> == Maak dit de nieuwe produkt prijs.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Bijzondere Specificatie Lijst";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Voorbeelden van Bijzondere Specificatie lijst opbouw:</h4>
        <span class=\"sectionname\"><strong>Naam;Extras;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "Selecteer meerdere door ctrl en muisklik";
        
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

    var $_PHPSHOP_RELATED_PRODUCTS = "Verwante Produkten";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "Misschien ook iets voor u";    
        
    var $_PHPSHOP_IMAGE_ACTION = "Afbeelding Aktie";
    var $_PHPSHOP_NONE = "niets";
    
    var $_PHPSHOP_ORDER_HISTORY = "Bestelling Historie";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Commentaar";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Commentaar op uw bestelling";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Commentaar toevoegen?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Toegevoegd op Datum";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Klant op de hoogte gesteld?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Bestel Status Verandering";
    
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
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Produkt Type";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Produkt Type Lijst";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "Toevoegen/Bewerk Produkt Type";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Produkt Type Lijst voor";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "Bekijk Produkt Types";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "Produkt Type Toevoegen voor";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "Toevogen Produkt Type";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Produkt Type";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Produkt Type Naam";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Produkt Type Omschrijving";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Produkt Type Informatie";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publiseren?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Produkt Type Overzicht Pagina";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Produkt Type Flypage";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "Parameters van Produkt Type";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameter Informatie";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Produkt Type niet gevonden!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter Naam";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "Deze naam wordt de kolomnaam van de tabel. Moet uniek en zonder spaties zijn.<BR>Bijvoorbeeld: hoofd_materiaal";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter Label";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter Omschrijving";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter Type";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Integer";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Tekst";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "Korte Tekst";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Zwevend";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Kararakter";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Datum & Tijd";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Datum";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "YYYY-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Tijd";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "HH:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Break Line";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Meerdere Waarden";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "Mogelijke Waarden";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Laat Mogelijke Waarden als selectielijst zien?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class=\"sectionname\">Steel;Wood;Plastic;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Standaard Waarde";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Eenheid";
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = "Geavanceerd zoeken volgens Parameters";
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters Search";
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "U kunt produkten zoeken m.b.v. van technische parameters?<BR>U kunt elk gewenst formulier gebruiken:";
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "Er is geen resultaat wat met u zoekopdracht overeen komt.";
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "I am sorry. There is no category for search.";
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "I am sorry. There is no published Product Type with this name.";	
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Zelfde als";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Is niet zelfde als";
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Volledige tekst";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "All Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "Any Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Reset Formulier";
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "Zoek in Categorie";
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "Verander Parameters";
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Oplopende volgorde";
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Aflopende volgorde";
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parameters of Categorie";
	/** Changed Product Type - End*/
    
    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "Bekijk Provincies";
    var $_PHPSHOP_STATE_LIST_LBL = "Provincie Lijst voor: ";
    var $_PHPSHOP_STATE_LIST_ADD = "Toevoegen/Veranderen van een Provincie";
    var $_PHPSHOP_STATE_LIST_NAME = "Provincie Naam";
    var $_PHPSHOP_STATE_LIST_3_CODE = "Provincie Code (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "Provincie Code (2)";
        
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Toeslag";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Clone Produkt";
	
    var $_PHPSHOP_CSV_SETTINGS = "Instellingen";
    var $_PHPSHOP_CSV_DELIMITER = "Scheidingsteken";
    var $_PHPSHOP_CSV_ENCLOSURE = "Veld afscheidings teken";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Upload een CSV Bestand";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Verzend CSV Bestand";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "Laad vanuit directory";
    var $_PHPSHOP_CSV_FROM_SERVER = "Laad CSV bestand van Server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Exporteer naar CSV bestand";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "Kies Veld Volgorde Type";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Standaard Volgorde";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "Mij eigen  Volgorde";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Exporteer alle Produkten naar CSV bestand";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export Configuratie";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Bewaar Veranderingen";
    var $_PHPSHOP_CSV_FIELD_NAME = "Veld Naam";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "Standaard waarde";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "Veld Volgorde";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "Veld Verplicht?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "Nieuw Veld toevoegen";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Documentatie";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Sorry, maar het produkt wat u zoekt is niet gevonden!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Laat produkten die niet op voorraad zijn zien";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "Wanneer aan, zullen produkten die niet op vorraad zijn getoont worden in de winkel. Anders worden deze verborgen gehouden";
	
}

/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?>
