<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: finnish.php,v 1.27 2005/06/22 19:50:43 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @translation Jarmo Ker�nen
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
    
    var $_PHPSHOP_MENU = "Valikko";
    var $_PHPSHOP_CATEGORY = "Kategoria";
    var $_PHPSHOP_CATEGORIES = "Kategoriat";
    var $_PHPSHOP_ADMIN = "Hallinta";
    var $_PHPSHOP_PRODUCT = "Tuote";
    var $_PHPSHOP_LIST = "luottelo";
    var $_PHPSHOP_ALL = "kaikki";
    var $_PHPSHOP_VIEW = "katso";
    var $_PHPSHOP_SHOW = "n�yt�";
    var $_PHPSHOP_ADD = "lis��";
    var $_PHPSHOP_UPDATE = "p�ivit�";
    var $_PHPSHOP_DELETE = "poista";
    var $_PHPSHOP_SELECT = "valitse";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Satunnaiset tuotteet";
    var $_PHPSHOP_LATEST = "Uusimmat tuotteet";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Etusivu";
    var $_PHPSHOP_CART_TITLE = "K�rry";
    var $_PHPSHOP_CHECKOUT_TITLE = "Osta tuotteet";
    var $_PHPSHOP_LOGIN_TITLE = "Kirjaudu Sis��n";
    var $_PHPSHOP_LOGOUT_TITLE = "Kirjaudu Ulos";
    var $_PHPSHOP_BROWSE_TITLE = "Selaa";
    var $_PHPSHOP_SEARCH_TITLE = "Etsi";
    var $_PHPSHOP_ACCOUNT_TITLE = "Tilin Yll�pito";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigaatio";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Osasto";
    var $_PHPSHOP_INFO = "Informaatio";
    
    var $_PHPSHOP_BROWSE_LBL = "Selaa";
    var $_PHPSHOP_PRODUCTS_LBL = "Tuotteet";
    var $_PHPSHOP_PRODUCT_LBL = "Tuote";
    var $_PHPSHOP_SEARCH_LBL = "Etsi";
    var $_PHPSHOP_FLYPAGE_LBL = "Tuote Kuvaus";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Tuotenimi";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Tuoteryhm�";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Tuotekuvaus";
    
    var $_PHPSHOP_CART_SHOW = "N�yt� K�rry";
    var $_PHPSHOP_CART_ADD_TO = "Lis�� K�rryyn";
    var $_PHPSHOP_CART_NAME = "Nimi";
    var $_PHPSHOP_CART_SKU = "Tuotetunnus";
    var $_PHPSHOP_CART_PRICE = "Hinta";
    var $_PHPSHOP_CART_QUANTITY = "M��r�";
    var $_PHPSHOP_CART_SUBTOTAL = "V�lisumma";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Lis�� uusi";
    var $_PHPSHOP_ADD_SHIPTO_2 = "L�hetysosoite";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Hakusi tuotti 0 tulosta.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "Hinta: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Tilaa";
    var $_PHPSHOP_NO_CUSTOMER = "Valitan, mutta et ole rekister�itynyt asiakas.<BR>
                                    Ole hyv� ja rekister�idy ensin.";
    var $_PHPSHOP_DELETE_MSG = "Haluatko varmasti poistaa t�m�n tiedon?";
    var $_PHPSHOP_THANKYOU = "Kiitoksia Tilauksestasi.";
    var $_PHPSHOP_NOT_SHIPPED = "L�hett�m�t�n";
    var $_PHPSHOP_EMAIL_SENDTO = "Vahvistus on l�hetetty s�hk�postilla";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Valitan, mutta ei ole MOS � k�ytt�j�� jonka voisit lis�t� com_phpshop k�ytt�j�luotteloon";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "VIRHE";
    var $_PHPSHOP_MOD_NOT_REG = "Moduulia ei ole rekister�ity.";
    var $_PHPSHOP_MOD_ISNO_REG = "ei ole k�yp� phpShop moduuli.";
    var $_PHPSHOP_MOD_NO_AUTH = "Sinulla ei ole oikeuksia pyydettyyn moduuliin.";
    var $_PHPSHOP_PAGE_404_1 = "Sivua ei ole olemassa";
    var $_PHPSHOP_PAGE_404_2 = "Annetua tiedosto nime� ei ole olemassa. Ei voi l�yt�� tiedostoa:";
    var $_PHPSHOP_PAGE_403 = "Ei Tarvittavia Oikeuksia";
    var $_PHPSHOP_FUNC_NO_EXEC = "Sinulla ei ole oikeusia suorittaa";
    var $_PHPSHOP_FUNC_NOT_REG = "Toimintoa ei ole Rekister�ity";
    var $_PHPSHOP_FUNC_ISNO_REG = " ei ole k�yp� MOS_com_phpShop toiminto.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Hallinta";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Luottele K�ytt�j�t";
    var $_PHPSHOP_USER_LIST_LBL = "K�ytt�j� Luettelo";
    var $_PHPSHOP_USER_LIST_USERNAME = "K�ytt�j�nimi";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Koko Nimi";
    var $_PHPSHOP_USER_LIST_GROUP = "Ryhm�";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Lis�� K�ytt�j�";
    var $_PHPSHOP_USER_FORM_LBL = "Lis��/P�ivit� K�ytt�j� Tiedot";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Laskutustiedot";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "L�hetysosoitteet";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Lis�� Osoite";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Osoite Nimilappu";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Etunimi";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Sukunimi";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Toinen Nimi";
    var $_PHPSHOP_USER_FORM_TITLE = "Titteli";
    var $_PHPSHOP_USER_FORM_USERNAME = "K�ytt�j�nimi";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Salasana";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Vahvista Salasana";
    var $_PHPSHOP_USER_FORM_PERMS = "Oikeudet";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Yrityksen Nimi";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Osoite 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Osoite 2";
    var $_PHPSHOP_USER_FORM_CITY = "Kaupunki";
    var $_PHPSHOP_USER_FORM_STATE = "Osavaltio/Alue";
    var $_PHPSHOP_USER_FORM_ZIP = "Postinumero";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Maa";
    var $_PHPSHOP_USER_FORM_PHONE = "Puhelin";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Luettele Moduulit";
    var $_PHPSHOP_MODULE_LIST_LBL = "Moduuli Luottelo ";
    var $_PHPSHOP_MODULE_LIST_NAME = "Moduuli Nimi";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Moduuli Oikeudet";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Toiminnot";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Luettelo J�rjestys";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Lis�� Moduuli";
    var $_PHPSHOP_MODULE_FORM_LBL = "Moduuli Informaatio";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Moduuli Nimilappu  (Yl�valikkoon)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Moduuli Nimi";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Moduuli Oikeudet";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Moduuli Header";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Moduuli Footer";
    var $_PHPSHOP_MODULE_FORM_MENU = "Moduuli Valikko?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "N�yt� J�rjestys";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Moduuli Kuvaus";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Kieli Koodi";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Kieli Tiedosto";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Luettele Toiminnot";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Toiminto Luettelo";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Toiminnan Nimi";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Luokka Nimi";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Luokka Menetelm�";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Oikeudet";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Lis�� Toiminto";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Toiminto Informaatio";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Toiminto Nimi";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Luokka Nimi";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = " Luokka Menetelm�";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Toiminto Oikeudet";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Toiminto Kuvaus";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Luettele valuutat";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Valuutta Luettelo";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Lis�� valuutta";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Valuuta Nimi";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Valuutta Koodi";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Luettele maat";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Maa luettelo";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Lis�� maa";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Maan Nimi";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Maa koodi (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Maa koodi (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Osoite";
    var $_PHPSHOP_CONTINUE = "Jatka";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "K�rrysi on tyhj�.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Pingaa InterShipper Serveri�";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Server Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping Ep�onnistui";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping Onnistui";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Huolitsija";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Vastaus<BR>Aika";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sek.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Luettele L�hetys Tavat";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Toimivat L�hetys Tavat";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = " L�hetys Tavat";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Toimiva";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "K�sittely Maksu";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Toimitus Aika";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "kiinte� kurssi";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "prosenttia";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "p�iv��";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Raskaat Lastit";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "M��rit� L�hetys Tavat";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Lis�� L�hetys Tapa";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "M��rit� L�hetys Tapa";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Virkist�";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "L�hetys Tapa";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktivoi";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "K�sittely Kulut";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Toimitus Aika";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "kiinte� kurssi";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "prosentti";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "p�iv��";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = " Raskaat Lastit";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Tilaus";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Vahvista Tilaus";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Peruuta Tilaus";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Tulosta Tilaus";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Poista Tilaus";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Luettele Tilaukset";
    var $_PHPSHOP_ORDER_LIST_LBL = "Tuote Luettelo";
    var $_PHPSHOP_ORDER_LIST_ID = "Tilaus Numero";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Tilaus P�iv�";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Viimeeksi Muokattu";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "V�lisumma";
    var $_PHPSHOP_ORDER_ITEM = "Tilaus Artikkelit";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Osto Tilaus";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Tilaus Numero";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Tilaus P�iv�";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Tilaus Status";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Asiakas Informaatio";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Laskutus Informaatio";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "L�hetys Informaatio";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Laskutettava: ";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Vastaanottaja";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Nimi";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Yritys";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Osoite 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Osoite 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Kaupunki";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Osavaltio/Alue";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Postinumero";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Maa";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Puhelin";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMs_LBL = "Tilaus Artikkelit";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "M��r�";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Kpl";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Tuotetunnus";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Hinta";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Summa";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "V�lisumma";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Alv Osuus";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Huolinta";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Huolinta Vero";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Maksu Tapa";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Tili Nimi";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Tili Numero";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Voimassaolo aika";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Maksu Loki";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "L�hetys Informaatio";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Maksu Informaatio";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Huolitsija";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Huolinta Tapa";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Huolinta P�iv�";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Huolinta Kulut";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Luettele Tilaus Status Tyypit";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Lis�� Tilaus Status Tyypit";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Tilaus Status Koodi";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = " Tilaus Status Nimi";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Tilaus Status";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = " Tilaus Status Koodi";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = " Tilaus Status Nimi";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Luettele Tilaus";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Tuotteet";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Nykyinen Tuote";
    var $_PHPSHOP_CURRENT_ITEM = "Nykyinen Artikkeli";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Tuote Inventaario";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Katso Inventaario";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Hinta";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Numero";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Paino";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Luettele Tuotteet";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Tuote Luettelo";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Tuote Nimi";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Tuotetunnus";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Julkaise";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Lis�� Tuote";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Muokaa Tuotetta";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Katso tuotteen Sivu kaupassa";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Lis�� Artikkeli";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Lis�� Toinen Artikkeli";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Uusi Tuote";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "P�ivit� Tuote";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Tuote Informaatio";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Tuote Status";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Tuote Mitat ja Paino";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Tuote Kuvat";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Uusi Artikkeli";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "P�ivit� Artikkeli";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Artikkeli Informaatio";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Artikkeli Status";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Artikkeli Mitat Ja Paino";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Artikkeli Kuvat";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Palaa Emo Tuoteeseen";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "P�ivitt��ksesi varsinaista kuvaa, sy�t� polku uuteen kuvaan.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Sy�t� \"none\" poistaaksesi nykyisen kuvan.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Tuote Artikkelit";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Artikkeli Ominaisuudet";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Oletko varma ett� haluat poistaa t�m�n tuotteen\\nja siihen liittyv�t Artikkelit?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Oletko varma ett� haluat poistaa t�m�n Artikkelin?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Myyj�";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Tuotetunnus";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Nimi";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategoria";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "V�hitt�is Hinta";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Sivu Kuvaus";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Lyhyt Kuvaus";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "Varastossa";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Tilauksessa";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Saatavuus P�iv�";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Tarjouksessa";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Alennus Tyyppi";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Julkaise?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Pituus";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Leveys";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Korkeus";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Mitta Yksikk�";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Paino";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Mitta Yksikk�";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "N�ytekuva";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Iso Kuva";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Tuote Lis�ys Tulokset";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Tuote P�ivitys Tulokset";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Artikkeli Lis�ys Tulokset";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Artikkeli P�ivitys Tulokset";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "K�yt� CSV upload";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Tuote Kansiot";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Luettele Kategoriat";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Kategoria Puu";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Lis�� Kategoria";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Kategoria Informaatio";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Kategoria Nimi";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Emo";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Kategoria Kuvaus";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Julkaise?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Kategoria Sivu";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Luettele Ominaisuudet";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Ominaisuus Lista: ";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Ominaisuus Nimi";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Luettele Tilaus";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Lis�� Ominaisuus";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Ominaisuus Lomake";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Uusi Ominaisuus Tuotteelle";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "P�ivit� Tuotteen Ominaisuus";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Uusi Ominaisuus Artikkelille";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "P�ivit� Artikkelin Ominaisuus";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Ominaisuus Nimi";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Luettele Tilaus";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Luettele Kategoriat";
    var $_PHPSHOP_PRICE_LIST_LBL = "Hinta Puu";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Hinta: ";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Ryhm� Nimi";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Hinta";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuutta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Lis�� Hinta";
    var $_PHPSHOP_PRICE_FORM_LBL = "Hinta Informaatio";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Uusi Hinta Tuotteelle";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "P�ivit� Hinta Tuotteelle";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Uusi Hinta";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "P�ivit� Hinta Artikkelille";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Hinta";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuutta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Ostaja Ryhm�";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Raportti Perus";
    var $_PHPSHOP_RB_INDIVIDUAL = "Yksil�lliset Tuote Luettelot";
    var $_PHPSHOP_RB_SALE_TITLE = "Myynti Raportti";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Myynti Aktiviteetin Katsaus";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Aseta Aikav�li";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Kuukausittain";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Viikottain";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "P�ivitt�in";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "T�ss� Kuussa";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Viime Kuussa";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Viimeiset 60 p�iv��";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Viimeiset 90 p�iv��";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Aloita: ";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Lopeta: ";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "N�yt� tama valikoitu alue";
    var $_PHPSHOP_RB_REPORT_FOR = "Raportti:  ";
    var $_PHPSHOP_RB_DATE = "P�iv�";
    var $_PHPSHOP_RB_ORDERS = "Tilaukset";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Kaikki myydyt Artikkelit";
    var $_PHPSHOP_RB_REVENUE = "Tulo";
    var $_PHPSHOP_RB_PRODLIST = "Tuote Luettelo";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Kauppa";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "N�ytekuva";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Hinta";
    var $_PHPSHOP_ORDER_STATUS_P = "Ratkaisematon";
    var $_PHPSHOP_ORDER_STATUS_C = "Vahvistettu";
    var $_PHPSHOP_ORDER_STATUS_X = "Peruutettu";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Tilaus";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Ostaja";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Luettele Ostajat";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Ostaja Luettelo";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "K�ytt�j� Nimi";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Koko NImi";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Ryhm�";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Lis�� Ostaja";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Ostaja Informaatio";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Laskutus Informaatio";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informaatio";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Huolinta Informaatio";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Lis�� Osoite";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Osoite Nimike";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "K�ytt�j� Nimi";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Etunimi";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Sukunimi";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Toinen Nimi";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Titteli";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Ostajanimi";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Salasana";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Vahvista Salasana";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Ostaja Ryhm�";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Yrityksen Nimi";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Osoite1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Osoite 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Kaupunki";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Osavaltio/Alue";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Postinumero";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Maa";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Puhelin";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Luettele Ostaja Ryhm�t";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Ostaja Ryhm� Luettelo";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Ryhm� Nimi";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Ryhm� Kuvaus";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Ostaja Ryhm� Lomake";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Lis�� Ostaja Ryhm�";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Ryhm� Nimi";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Ryhm� Kuvaus";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD =	"Kauppa";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Muokaa Kauppaa";
    var $_PHPSHOP_STORE_FORM_LBL = "Kaupan Tiedot";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Yhteys Tiedot";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Iso Kuva";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Upload Kuva";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Kaupan Nimi";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Kaupan Yritys Nimi";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Osoite 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Osoite 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Kaupunki";
    var $_PHPSHOP_STORE_FORM_STATE = "Osavaltio/Alue";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Maa";
    var $_PHPSHOP_STORE_FORM_ZIP = "Postinumero";
    var $_PHPSHOP_STORE_FORM_PHONE = "Puhelin";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuutta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Kauppa Kategoria";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Sukunimi";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Etunimi";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Toinen Nimi";
    var $_PHPSHOP_STORE_FORM_TITLE = "Titteli";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Puhelin 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Puhelin 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Kuvan polku";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Kuvaus";
    
    
    
    var $_PHPSHOP_PAYMENT = "Maksu";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Luettele Maksu Tavat";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Maksu Tapa Luettelo";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Nimi";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Koodi";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Alennus";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Ostaja Ryhm�";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Cybercash";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Lis�� Maksu Tapa ";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Maksu Tapa Lomake";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Maksu Lomake Nimi";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Ostaja Ryhm�";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Alennus";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Koodi";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Luettele Tilaus";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "K�yt� Cybercash";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Alv";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Vero Prosentit";
    var $_PHPSHOP_TAX_LIST_MNU = "Luettele Vero Prosentit";
    var $_PHPSHOP_TAX_LIST_LBL = "Vero Prosentti Luettelo";
    var $_PHPSHOP_TAX_LIST_STATE = "Vero Osavaltio tai Alue";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Vero Maa";
    var $_PHPSHOP_TAX_LIST_RATE = "Vero Prosentti";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Lis�� Vero Prosentti";
    var $_PHPSHOP_TAX_FORM_LBL = "Lis�� Vero Informaatio";
    var $_PHPSHOP_TAX_FORM_STATE = " Vero Osavaltio tai Alue ";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Vero Maa";
    var $_PHPSHOP_TAX_FORM_RATE = "Vero Prosentti";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Myyj�";
    var $_PHPSHOP_VENDOR_ADMIN = "Myyj�t";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Luettele Myyj�t";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Myyj� Luettelo";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Myyj� Nimi";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Yll�pit�j�";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Lis�� Myyj�";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Lis�� Tieto";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Myyj� Tieto";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Yhteys Tieto";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Iso Kuva";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Upload Kuva";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Myyj�n Kaupan Nimi";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Myyj�n Yrityksen Nimi";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Osoite 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Osoite 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Kaupunki";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Osavaltio/Alue";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Maa";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Postinumero";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Puhelin";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Valuutta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Myyj� Kategoria";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Sukunimi";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Etunimi";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Toinen Nimi";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Titteli";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Puhelin 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Puhelin 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Kuvan polku";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Kuvaus";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Luettelo<BR>Myyj�<BR>Kategoriat";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Myyj� Kategoria Luettelo";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Kategoria Nimi";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Kategoria Kuvaus";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Myyj�t";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Lis��<BR>Myyj�<BR>Kategoria";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Myyj� Kategoria Lomake";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Kategoria Tieto";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Kategoria Nimi";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Kategoria Kuvaus";
        
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Valmistaja";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Valmistajat";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Luettele Valmistajat";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Valmistaja Luettelo";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Valmistajan Nimi";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Lis�� Valmistaja";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Lis�� Informaatio";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Valmistajan Informaatio";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Valmistajan Nimi";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Valmistaja Kategoria";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL Valmistajan Kotisivuille";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Kuvaus";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Luettelo Valmistaja Kategoriat";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Valmistaja Kategoria luettelo";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Kategoria Nimi";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Kategoria Kuvaus";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Valmistajat";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Lis�� Valmistaja Kategoria";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Valmistaja Kategoria Lomake";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Kategoria Informaatio";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Kategoria Nimi";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Kategoria Kuvaus";
    
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Valmistaja";
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Help";
    
    // 210104 start
    
    // basketform
    var $_PHPSHOP_CART_ACTION = "Toiminnot";
    var $_PHPSHOP_CART_UPDATE = "P�ivit�";
    
    //230104
    var $_PHPSHOP_CART_DELETE = "Poista";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Hinta";
    var $_PHPSHOP_PRODUCT_CALL = "Soita Hinta";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Edel";
    var $_PHPSHOP_PRODUCT_NEXT = "SEURAAVA";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Vero";
    var $_PHPSHOP_CART_SHIPPING = "Huolinta";
    var $_PHPSHOP_CART_TOTAL = "Summa";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Seuraava";
    var $_PHPSHOP_CHECKOUT_REGISTER = "REKISTER�I";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Laskutus Tiedot";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Yritys";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Nimi";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Osoite";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Puhelin";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Huolinta Tiedot";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Yritys";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Nimi";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Oosite";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Puhelin";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Maksu Informaatio";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Kortinhaltijan Nimi";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Maksu Tapa";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Luottokortti Numero";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Voimassaolo Aika";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Vahvista Tilaus";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "tarvittavat tiedot Luottokortilla maksettaessa";
    
    
    var $_PHPSHOP_ZONE_MOD = "Vy�hyke Huolinta";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Luettele Vy�hykkeet";
    var $_PHPSHOP_ZONE_FORM_MNU = "Lis�� Vy�hyke";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "M��r�� Vy�hyke";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Maa";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Nykyinen Vy�hyke";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "M��r�� Vy�hykkeeseen";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "P�ivit�";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "M��rit� Vy�hykkeet";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Vy�hyke Nimi";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Vy�hyke Kuvaus";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Vy�hyke Kustannus per Artikkeli";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Vy�hyke Kustannus Raja";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Vy�hyke Luettelo";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Vy�hyke Nimi";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Vy�hyke Kuvaus";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Vy�hyke Kustannus per Artikkeli";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Vy�hyke Kustannus Raja";
    
    var $_PHPSHOP_LOGIN_FIRST = "Ole hyv� ja kirjaudu sis��n tai rekister�idy n�ille sivuille ( k�ytt�en Kirjaantumis modulia) ensin. <br>Kiitos.";
    var $_PHPSHOP_STORE_FORM_TOS = "Palvelun Ehdot";
    var $_PHPSHOP_AGREE_TO_TOS = "Ole hyv� ja hyv�ksy Palvelun Ehdot ensin.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Hyv�ksyn Palvelun Ehdot";
    
    var $_PHPSHOP_LEAVE_BLANK = "(leave BLANK if you have <br />no individual php-file for it!)";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Huolinnan Hallinta";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Huolinta";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Huolitsija";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Huolitsija luettelo";
    var $_PHPSHOP_RATE_LIST_MNU = "Rahti tariffi";
    var $_PHPSHOP_RATE_LIST_LBL = "Tariffi luettelo";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Nimi";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Luetteloj�rjestys";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Luo Huolitsija";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Huolitsija muokkaa / luo";
    var $_PHPSHOP_RATE_FORM_MNU = "Tariffi luo";
    var $_PHPSHOP_RATE_FORM_LBL = "Tariffi muokkaa/luo";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Tariffi kuvaus";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Huolitsija";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Maa<br>Monivalitse k�yt� Ctrl-Nappia ja Hiirt�";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Postinumero alue alkaa";
    var $_PHPSHOP_RATE_FORM_ZIP_END = " Postinumero alue loppuu";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Alin Paino";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Korkein Paino";
    var $_PHPSHOP_RATE_FORM_VALUE = "Maksu";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Paketti maksusi";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuutta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "ALV Tunnus";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Luetteloj�rjestys";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Huolitsija";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Tariffi kuvaus";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Paino alkaen ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... asti";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Huolinta Yritys";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = " Luetteloj�rjestys ";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "VIRHE: Huolitsija tunnus on olemassa.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "VIRHE: Valitse huolitsija.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "VIRHE: Ainakin yksi rahti tariffi on olemassa, poista tariffit ennen huolitsijaa";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "VIRHE: T�ll� tunnuksella ei l�ydy huolitsijaa.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "VIRHE: Valitse huolitsija.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "VIRHE: T�ll� tunnuksella ei l�ydy huolitsijaa.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "VIRHE: Tariffi kuvausta pyydettiin.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "VIRHE: Kohde maa on ep�kelpo. Enemm�n kuin yksi maa voidaan jakaa seuraavasti ';'.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "VIRHE: Alin paino pyydettiin";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "VIRHE: Korkein paino pyydettiin";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "VIRHE: Alin paino t�ytyy olla pienempi kuin korkein paino";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "VIRHE: Huolinta maksu pyydetty";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "VIRHE: Valitse valuutta";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "VIRHE: Tariffi pyydetty";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Valitse";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Huolitsija";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Tariffi";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Hinta";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-eimit��n-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_PAYMENT_FORM_CC = "Luottokortti";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "K�yt� Maksu K�sittelij��";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Pankkikortti";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Vain Osoite";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Valitse vastaanottajan osoite!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Valitse l�hetystapa!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Valitse maksutapa!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Tarkasta tiedot ja vahvista tilaus!";
    
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = " Valitse l�hetystapa.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = " Valitse toinen l�hetystapa.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = " Valitse maksutapa.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Sy�t� luottokortisi numero.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Sy�t� luottokortissa oleva nimi.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Sy�tetty luottokortti numero ei ole voimassa.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Sy�t� luottokortin voimassaolo kuukausi.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Sy�t� luottokortin voimassaolo vuosi.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Voimassaoloaika on virheellinen.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Valitse toimitus osoite.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Virheellinen tilinumero.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "K�rryss�si ei ole mit��n!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "VIRHE: Valitse huolitsija!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "VIRHE: Valittua tariffia ei l�ydetty!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "VIRHE: Toimitus osoitettasi ei l�ydetty!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "VIRHE: Ei ole luottokortti tietoja... ";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "VIRHE: Luottokortti numeroa ei l�ydy!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Pahoittelen, k�ytt�m�si luottokortti numero on testi numero!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "K�ytt�j� tunnusta ei l�ytynyt tietokannasta!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Et ole antanut pankkitilisi haltija nime�.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "Et ole antanut IBAN tunnustasi.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Et ole antanut pankkitilisi numeroa.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "Et ole antanut pankkikoodia.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Et ole antanut pankkisi nime�.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "Kassa tarvitsee kelvollisen askeleen!";
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Maksutiedot tallennettu k�sittely� varten.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Ostosten alarajaa ei ole viel� saavutettu.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Ostosten alaraja on:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Luottokortti maksu";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Muut maksutavat";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Valitse maksutapa:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Ostosten alaraja kaupallesi";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Pankkitili Tiedot";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Tilinumero";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Pankki koodi";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Pankin Nimi";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Tilin Haltija";
    
    var $_PHPSHOP_MODULES = "Moduulit";
    var $_PHPSHOP_FUNCTIONS = "Toiminnot";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Alennus Tuotteet";
    
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Jos haluat voit j�tt�� meille viestin tilauksesi yhteydess�";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Asiakkaan viesti";
    var $_PHPSHOP_INCLUDING_TAX = "(sis�lt�en \� vero % alv)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "Valitse artikkeli";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Artikkeli";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Lataus Alue";
    var $_PHPSHOP_DOWNLOADS_START = "Aloita Lataus";
    var $_PHPSHOP_DOWNLOADS_INFO = "Sy�ta s�hk�postissa saamasi Lataus-ID\ ja paina 'Aloita Lataus'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Valitamme, Latauksesi on vanhentunut";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Valitamme, kaikki latauskertasi on k�ytetty";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Ep�kelpo Lataus-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Viesti� ei voitu l�hett�� vastaanottajalle: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Viesti l�hetetty vastaanottajalle: ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Lataus-Info";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "tilaamasi tiedosto(t) ovat valmiita ladattavaksi";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Sy�t� seuraavat lataus-ID(t) Lataus alueellemme: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "maksimi latauskerrat jokaiselle tiedostolle on: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Lataa kunnes (umpeutuu) p�iv�� ensimm�isen latauksen j�lkeen";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Kysymyksi�? Ongelmia?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Lataus-Infon toimitti "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "ladattava tuote?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Kiitoksia maksusta. 
        Suoritus onnistui. Sinulle l�het��n vahvistus s�hk�postilla suorituksesta PayPal:ista. 
        Voit nyt jatkaa tai kirjautua sis��n <a href=http://www.paypal.com>www.paypal.com</a> n�hd�ksesi tiedot suorituksesta.";
    var $_PHPSHOP_PAYPAL_ERROR = "Suorituksesi k�sittelyn aikana tapahtui VIRHE. Tilauksesi tilaa ei voitu p�ivitt��.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Kiitoksia tilauksestasi.  Ohessa tiedot tilauksestasi.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Kiitoksia asiakassuhteestasi.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Kysymyksi�? Ongelmia?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Seuraava tilaus on vastaanotettu.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Katso tilausta seuraamalla allaolevaa linkki�.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negatiiviset m��r�t eiv�t ole sallittuja.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Sy�t� kelpaava m��r� t�lle tuotteelle.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Valittu m��r� ylitt�� varastom��r�n.";
    var $_PHPSHOP_CART_STOCK_2 = "T�ll� hetkell� \$product_in_stock tuotetta saatavilla.";
    var $_PHPSHOP_CART_STOCK_3 = "Paina t�st� jos haluat jonotuslistalle.";
    var $_PHPSHOP_CART_SELECT_ITEM = "Valitse erikoistuote yksityiskohtaiselta sivulta!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "ei mit��n";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Herra";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Rouva";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Tri";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof";
    var $_PHPSHOP_DEFAULT = "Oletus";
        
    # Some labels
    var $_PHPSHOP_AFFILIATE_MOD   = "Filiaali Hallinto";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Luettele Filiaalit";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Filiaali Luettelo";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Filiaali Nimi";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktiivi";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Taksa";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Kuukauden Total";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Kuukauden komissio";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Luettele tilaukset";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email Filiaalit";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email Filiaalit";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Kenelle Email(* = ALL)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Sinun Email";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Aihe";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Sis�llyt� t�m�n hetkinen tilasto ";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Komissio taksa";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Aktiivi?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Yleens� l�htee ";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Toimitus tiedot";
    var $_PHPSHOP_MORE_CATEGORIES = "lis�� kategorioita";
    var $_PHPSHOP_AVAILABILITY = "Saatavuus";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "T�m� tuote ei ole t�ll� hetkell� saatavilla.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Saamme sit� varastoon uudestaan: ";
        
    var $_PHPSHOP_STATISTIC_SUMMARY = "Yhteenveto";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Tilastot";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Asiakkaat";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktiivisia Tuotteita";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "passiivisia Tuotteita";
    var $_PHPSHOP_STATISTIC_SUM = "Summa";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Uudet Tilaukset";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Uudet Asiakkaat";

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Sy�t� e-mail osoitteesi alle jos haluat tiedon tuotteen varstoon saapumisesta. 
                                                                        Emme jaa, vuokraa, myy tai k�yt� antaamasi osoitettasi mihink��n muuhun tarkoitukseen kuin 
                                                                        ilmoittaaksemme ett� tuote on saapunut varastoon.<br /><br />Kiitos!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Kiitoksia k�rsiv�llisyydest�! <br />Ilmoitamme heti kun varastomme on t�ydentynyt.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Ilmoita minulle!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Tulosta n�kym�";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Valitse JOKO Authorize.net TAI CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Configuration tiedoston tila:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "muokattavissa";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "ei muokattavissa";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Polku & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Sivusto";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Huolinta";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Kassa";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Lataukset";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Maksut";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "K�yt� vain katalogina";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Jos valitset t�m�n, poistat kaikki k�rryn toiminnot.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "N�yt� hinnat";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "N�yt� verolliset hinnat?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "M��rittelee haluatko n�ytt�� ostajille hinnat verolla vai et.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Valitse n�ytt��ksesi hinnat. K�ytt�ess��n katalogina kaikki eiv�t halua n�ytt�� hintojaan sivuillaan.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtual Tax";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "M��rittelee verotetaanko nollapainoiset tuotteet vai eik�. Muokkaa ps_checkout.php->calc_order_taxable() sopivaksi.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Veron peruste:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "L�hetysosoite";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Saapumisosoite";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "M��rittelee veroprosentin laskettaessa veroa:<br />
                                                                                    <ul><li>l�hett�j�n osavaltion / maan mukaan</li><br/>
                                                                                    <li>tai vastaanottajan sijainnin mukaan.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Mahdollista useampi veroprosentti?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Valitse t�m� jos sinulla on tuotteita johon sovelletaan eri veroprosentti (esim. 8% for kirjoille, 17% ruualle ja 22% muille)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "V�henn� maksualennus ennen veroa/huolintaa?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Mahdollista Asiakas Arvostelu/Pisteytys";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Jos valittu, asiakkaat voivat <strong>pisteytt��</strong> ja <strong>kirjoittaa arvosteluja</strong> tuotteista. <br />
                                                                                Asiakkaat voivat kirjoittaa kokemuksiaan tuotteista toisille asiakkaille.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Ilmaisee v�hennet��nk� Alennus valitulle maksulle ENNEN (ruksattu) vai J�LKEEN veron ja rahdin.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Asiakkaat voivat j�tt�� pankkiyhteystiedot?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Valitse jos haluat ett� asiakkaasi voivat antaa pankkiyhteystietonsa rekister�ityess��n kauppaan.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Asiakkaat voivat valita osavaltion/alueen?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Valitse jos haluat ett� asiakkaasi voivat valita osavaltion/alueen tiedot data rekister�ityess��n kauppaan.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Kaupanehdot pit�� hyv�ksy�?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Valitse jos haluat ett� asiakkaasi hyv�ksyy kaupanehdot ennen rekister�itymist��n kauppaan.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Tarkista varasto?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Asettaa tarkastetaanko varastotilanne kun k�ytt�j� lis�� tuotteen ostosk�rryyn. 
                                                                                          Jos asetettu, est�� k�ytt�j�� lis��m�st� enemm�n tuotetteita kuin mit� varastotilanne sallii.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Mahdollista Filiaali ohjelma?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Mahdollistaa filiaalien seurannan kaupan-frontendiss�. Mahdollista mik�li olet lis�nnyt filiaaleja backendiss�..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "E-mail tilauksen muoto:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Text mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "M��rittelee miten tilausvahvistus s�hk�postisi muotoillaan:<br />
                                                                                        <ul><li>yksinkertainen teksti s�hk�posti</li>
                                                                                        <li>vai html s�hk�posti jossa on kuvia.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Salli Frontend-Administraatio  ei-Backend k�ytt�jille?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "T�ll� asetuksella voit mahdollistaa Frontend Administraation k�ytt�jille 
                                                                                              jotka ovat kauppa-admineja mutta joilla ei ole Mambo Backend oikeuksia (e.g. Registered / Editor).";

	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "The URL sivuillesi. Yleens� identtinen Mambo URL:in kanssa(kauttaviiva per�ss�!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "Suojattu URL sivuillesi. (https - kauttaviiva per�ss�!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL mambo-phpShop componentiin. (kauttaviiva per�ss�!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL mambo-phpShop componentin kuvahakemistoon.(kauttaviiva per�ss�!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "Polku mambo-phpShop component hakemistoon.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "Polku mambo-phpShop classes hakemistoon.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "Polku mambo-phpShop html hakemistoon.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "Polku mambo-phpShop shop_image hakemistoon.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "T�m� sivu ladataan oletuksena.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Oletussivu virheilmoituksille.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Oletussivu debug-viesteille.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Asetta p��lle debug tulostuksen. T�m�n ansiosta DEBUGPAGE tulostuu jokaisen sivun alareunaan. Eritt�in hy�dyllinen kaupan kehityksess� koska n�ytt�� k�rryn sis�ll�n, kaavakkeiden kentt�arvot jne.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Oletussivu tuotteen tietojen esitykseen.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Kategoria mallinnus";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "M��rittelee oletus kategoria mallinnuksen tuotteiden esittelyyn kategoriassa.<br />
                                                                                                      Voit luoda uusia mallinuksia r��t�l�im�ll� olemassa olevia mallinnus tiedostoja <br />
                                                                                                      (l�ytyv�t hakemistosta <strong>COMPONENTPATH/html/templates/</strong> ja alkavat browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Oletusm��r� tuotteita riviss�";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "M��rittelee tuotteiden m��r�n rivi� kohden. <br />
                                                                                                      Esimerkki: Jos astetat m��r�ksi 4, kategoria mallinnus n�ytt�� 4 tuotetta per rivi";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" image";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "T�m� kuva n�kyy kun tuotteelle ei ole m��ritelty kuvaa.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "M��rittelee rivim��r�n per sivu kun etsint� tulokset esitet��n luettelona.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "M��ritt�� parittomien rivien v�rin etsint� tuloksia esitett�ess� luettelona.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "M��ritt�� parillisten rivien v�rin etsint� tuloksia esitett�ess� luettelona.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Asettaa rivim��r�n mik� n�ytet��n j�rjestysluettelon valintalaatikossa.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "N�yt� footer \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "N�ytt��  powered-by-mambo-phpShop kuvan.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Valitse kauppasi huolintatapa";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standardi huolinta moduuli jossa erikseen m��ritelt�viss� olevat huolitsijat ja tariffit. <strong>SUOSITELTAVA !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            Halutessasi lis�� informaatiota t�st� moduulista katso <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                             tai ota yhteytt� <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Valitse jos haluat k�ytt�� moduulia.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Moduuli. Valitse vain jos sinulla on Intershipper.com tili";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Poista huolinnan valinta. Valitse mik�li asiakkaasi ostavat ladattavia tuotteita joita ei tarvitse l�hett��.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Salasana";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Salasanasi intershipper tiliisi.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper s�hk�posti";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "S�hk�postiosoitteesi intershipper tiliisi.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "KOODAUS AVAIN";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "T�ll� avaimella salataan tiedot tietokannassa. T�m�n takia t�m� tiedoston n�kyminen tulisi suojata aina.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Esit� Checkout Bar";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Aseta p��lle jois haluat 'checkout-bar' esitett�v�n asiakaalle checkout prosessin aikana ( 1 - 2 - 3 - 4 graafisesti esitettyn�).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Valitse kauppasi checkout prosessi";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standardi :</strong><br/>
               1. L�hetysosoitteen pyynti<br />
              2. L�hetystavan pyynti<br />
              3. Maksutavan pyynti<br />
              4. Vahvista tilaus";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Prosessi 2:</strong><br/>
               1. L�hetysosoitteen pyynti<br />
              2. Maksutavan pyynti<br />
              3. Vahvista tilaus";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Prosessi 3:</strong><br/>
               1. L�hetystavan pyynti<br />
              2. Maksutavan pyynti<br />
              3. Vahvista tilaus";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Prosessi 4:</strong><br/>
               1. Maksutavan pyynti<br />
              2. Vahvista tilaus";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Enable downloads";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Valitse mahdollistaaksesi lataukset. Vain jos haluat myyd� ladattavia tuotteita.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Order Status which enables download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Select the order status at which the customer is notified about the download via e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Order Status which disables downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Sets the order status at which the download is disabled for the customer.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "The physical path to the files for the custumer download. (trailing slash at the end!)<br>
        <span class=\"message\">For your own shop's security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Download Maximum";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Sets the number of downloads which can be made with one Download-ID, (for one order)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Download Expire";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Sets the time range <strong>in seconds</strong> in which the download is enabled for the customer. 
  This range begins with the first download! When the time range has expired, the download-ID is disabled.<br />Note : 86400s=24h.";
	
	
	
	
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
    var $_PHPSHOP_ADVANCED_SEARCH  ="Advanced Search";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Search All Categories";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Search all product info";
    var $_PHPSHOP_SEARCH_PRODNAME = "Product name only";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Manufacturer/Vendor only";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Product description only";
    var $_PHPSHOP_SEARCH_AND = "and";
    var $_PHPSHOP_SEARCH_NOT = "not";
    var $_PHPSHOP_SEARCH_TEXT1 = "The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.";
    var $_PHPSHOP_ORDERBY = "Order by";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Average customer rating";
    var $_PHPSHOP_TOTAL_VOTES = "Total votes";
    var $_PHPSHOP_CAST_VOTE = "Please cast your vote";
    var $_PHPSHOP_RATE_BUTTON = "Rate";
    var $_PHPSHOP_RATE_NOM = "Rating";
    var $_PHPSHOP_REVIEWS = "Customer Reviews";
    var $_PHPSHOP_NO_REVIEWS = "There are yet no reviews for this product.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Be the first to write a review...";
    var $_PHPSHOP_REVIEW_LOGIN = "Please log in to write a review.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Please rate the product to complete your review!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Please write down some more words for your review. Mininum characters allowed: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Please shorten your review. Maximum characters allowed: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Write a review for this product!";
    var $_PHPSHOP_REVIEW_RATE = "First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best).";
    var $_PHPSHOP_REVIEW_COMMENT = "Now please write a (short) review....(min. 100, max. 2000 characters) ";
    var $_PHPSHOP_REVIEW_COUNT = "Characters written: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Submit Review";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "You already have written a review for this product. Thank you.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Thanks for your review.";
    var $_PHPSHOP_COMMENT= "Comment";
    
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Luettele kaikki tuotteet";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Tuotehaku";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Add/Edit Credit Card Types";
    var $_PHPSHOP_CREDITCARD_NAME = "Credit Card Name";
    var $_PHPSHOP_CREDITCARD_CODE = "Credit Card - Short Code";
    var $_PHPSHOP_CREDITCARD_TYPE = "Credit Card Type";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Credit Card List";
    var $_PHPSHOP_UDATE_ADDRESS = "Update Address";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Continue Shopping";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Your order has been successfully placed!";
    var $_PHPSHOP_ORDER_LINK = "Follow this link to view the Order Details.";
    
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "the Status of your Order No. {order_id} has been changed.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "New Status is:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "To view the Order Details, please follow this link (or copy it into your browser):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Order Status Change: Your Order {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Notify Customer?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Please change the Order Status first!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Price Discount on default Shopper Group (in %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "A positive amount X means: If the Product has no Price assigned to THIS Shopper Group, the default Price is decreased by X %. A negative amount has the opposite effect";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Tuote Alennus";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Tuote Alennus Luettelo";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Lis��/Muokkaa Tuote Alennus";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Alennuksen m��r�";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Sy�t� alennuksen m��r�";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Alennus tyyppi";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Prosentti";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Summa";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Aseta prosentti tai summa alennus";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Alennus alkaa";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "M��ritt�� alennuksen aloitus p�iv�m��r�n";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Alennus p��ttyy";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "M��ritt�� alennuksen p��ttymis p�iv�m��r�n";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Voit k�ytt�� Tuote Alennus kaavaketta lis�t�ksesi alennuksia!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "S��st�t";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Suurenna kuvaa";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Valuutan esitystapa";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Valuutan symboli";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "Voit k�ytt�� my�s HTML muotoja (esim. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Desimaalit";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Esitettyjen desimaalien m��r� (voi olla 0)<br><b>Suorittaa py�ristyksen mik�li luvun desimaalien m��r� on eri</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Desimaali symboli";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Merkki jota k�ytet��n desimaalin symbolina";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Tuhansien erottaja";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Merkki jota k�ytet��n tuhansien erottaja (voi olla tyhj�)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positiivinen esitystapa";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "N�ytt�� tavan jolla esitet��n positiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negatiivisen esitystapa";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "N�ytt�� tavan jolla esitet��n negatiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)";
    
    var $_PHPSHOP_OTHER_LISTS = "Muut Tuoteluettelot";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "N�yt� lis�� kuvia";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Saatavat kuvat kohteelle";
    var $_PHPSHOP_BACK_TO_DETAILS = "Takaisin Tuotetietoihin";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "Tiedostonhallinta";
    var $_PHPSHOP_FILEMANAGER_LIST = "Tiedostonhallinta::Tuoteluettelo";
    var $_PHPSHOP_FILEMANAGER_ADD = "Lis�� Kuva/Tiedosto";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Osoitetut Kuvat";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "On ladattavissa?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Osoitetut Tiedostot (Datasheets,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Julkaistu?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "Tiedostonhallinta::Kuva/Tiedosto luettelo kohteelle";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Tiedoston Nimi";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "Tiedoston Nimike";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "Tiedoston Tyyppi";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Muokkaa tiedostonkirjausta";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Iso Kuva";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "N�yte Kuva";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Uploadaa Tiedosto kohteelle";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Nykyinen Tiedosto";
    var $_PHPSHOP_FILES_FORM_FILE = "Tiedosto";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Kuva";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Uploadaa kohteeseen";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "oletuspolku Tuotekuvalle";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "M��rit� tiedoston sijainti";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Latauspolku (esim. ladattavien tuotteiden myyntiin!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Luo n�ytekuva automaattisesti?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "Tiedosto on julkaistu?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "Tiedoston Nimike (mit� asiakas n�kee)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "Tiedostonkuvaus";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "Tiedoston URL (valinnainen)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Anna k�yp� polku!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "N�ytekuva onnistuneesti luotu!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "N�ytekuvaa EI voitu luoda!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "Kuva/Tiedosto Uploadaus Virhe";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Isokuva tiedostoa ei voitu poistaa.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Isokuva onnistuneesti poistettu.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "N�ytekuvaa ei voitu poistaa (mahdollisesti ei ole olemassa): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "N�ytekuva onnistuneesti poistettu.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Tiedostoa ei voitu poistaa.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "Tiedosto onnistuneesti poistettu.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Valitan, pyydetty� tiedostoa ei l�ydetty!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Kuvaa ei l�ydetty!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Kuponki";
    var $_PHPSHOP_COUPONS = "Kupongit";
    var $_PHPSHOP_COUPON_LIST = "Kuponkiluettelo";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Kuponki on jo lunastettu.";
    var $_PHPSHOP_COUPON_REDEEMED = "Kuponki lunastettu! Kiitoksia.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "Jos sinulla on kupongin koodi, sy�t� se alle:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "V�lit�";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "V�litt�m�si kuponkikoodi on jo olemassa. Yrit� uudestaan.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "P�ivit� kuponki";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Klikkaa kuponkikoodia muokataksesi sit�, tai poistaaksesi kuponkikoodin, valitse ja klikkaa Poista:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Koodi";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Prosentti tai Totaali";
    var $_PHPSHOP_COUPON_TYPE = "Kuponki tyyppi";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "Lahjakuponki poistetaan heti kun se on hyvitetty ostoksen yhteydess�. Kestokuponki on k�ytett�viss� niin usein kuin asiakas haluaa.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Lahjakuponki";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Kestokuponki";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Arvo";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Poista koodi";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Haluatko varmasti poistaa t�m�n kuponkikoodin?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "T�yt� kaikki kent�t.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Kupongin arvon on oltava numero.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "Uusi kuponki";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Kuponkikoodi";
    var $_PHPSHOP_COUPON_PERCENT = "Prosentti";
    var $_PHPSHOP_COUPON_TOTAL = "Totaali";
    var $_PHPSHOP_COUPON_VALUE = "Arvo";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Kuponkikoodi talletettu.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Tallenna kuponki";
    var $_PHPSHOP_COUPON_DISCOUNT = "Kuponki Alennus";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Kuponkikoodia ei l�ydetty. Yrit� uudestaan.";
    var $_PHPSHOP_COUPONS_ENABLE = "Mahdollista kuponkien k�ytt�";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "Mik�li mahdollistat kuponkien k�yt�n, asiakkaasi voivat k�ytt�� kuponkien numerot saadakseen alennusta ostoistaan.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Ilmainen rahti";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "T�m�n tilaus toimitetaan rahtivapaasti!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Ilmaiseen rahtiin oikeuttava minimisumma on ";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "Summa (SIS�LT�EN VERON!) joka on minimi oikeuttamaan ilmaiseen rahtiin 
                                                (esim: <strong>50</strong> tarkoitaa ilmaista rahtia kun asikas ostaa v�hint��n
                                                 \�50 (sis�lt�en veron) tai suuremmalla summalla.";
    var $_PHPSHOP_YOUR_STORE = "Sinun kauppasi";
    var $_PHPSHOP_CONTROL_PANEL = "Kontrollipaneeli";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Kuvake";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "N�yt� tai piiloita PDF - Kuvake kaupassa";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Kaupanehdot pit�� hyv�ksy� JOKAISESSA TILAUKSESSA?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Valitse jos haluat ett� asiakkaasi hyv�ksyy kaupanehdot JOKAISESSA TILAUKSESSA (ennen tilauksen tekoa).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Pankkitilin tyyppi";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Shekki";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Business Shekki";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "S��st�";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Uusiutuvat maksut?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "M��rit� mik�li haluat uusiutuvat maksut.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Sis�inen virhe suorittaessa pyynt�� kohteeseen";
    var $_PHPSHOP_PAYMENT_ERROR = "Ep�onnistuminen maksun suorituksessa";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Maksusuoritus hyv�ksytty";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS ei pystynyt suorittamaan Rahtitariffi pyynt��.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Taattu aika (p�iv��) toimitukseen";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS:in Noutotapa";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "Kuinka paketit luovutetaan UPS:ille?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS pakkaustyyppi?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Valitse oletus pakkaustyyppi.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Yksityiseen osoitteeseen toimitus?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Yksityistoimitus (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Yritystoimitus (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Hintailmoitus Yksityistoimitus (RES) or Yritystoimitus (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "K�sittelymaksu";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "K�sittelymaksusi t�lle rahtitavalle.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Veroluokka";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "K�yt� seuraavaa veroluokkaa rahtimaksulle.";
    
    var $_PHPSHOP_ERROR_CODE = "Virhekoodi";
    var $_PHPSHOP_ERROR_DESC = "Virhekuvaus";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "N�yt� / Muuta Tapahtuma-avainta";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "N�yt� / Muuta Salasana/Tapahtuma-avainta";
    var $_PHPSHOP_TYPE_PASSWORD = "Sy�t� K�ytt�j� salasanasiPlease type in your User Password";
    var $_PHPSHOP_CURRENT_PASSWORD = "Voimassaoleva Salasana";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Voimassaoleva Tapahtuma-avain";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "Tapahtuma-avain onnistuneesti muutettu.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Request/Capture Credit Card Code Value (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "You need to enter your Credit Card Code to proceed.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "EITHER Fill in a Filename";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "OR Upload new File";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "You can upload a local file. This file will be the Product you sell. An existing file will be replaced.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Attribute List Format:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <pre>
        &#43; == Add this amount to the configured price.<br />
        &#45; == Subtract this amount from the configured price.<br />
        &#61; == Set the product's price to this amount.
      </pre>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Custom Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Custom attribute List Format:</h4>
        <pre>Name;Extras;...</pre>";
        
    var $_PHPSHOP_MULTISELECT = "Monivalitse k�yt� Ctrl-Nappia ja Hiirt�";
        
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
