<?php
/*
* @version $Id: greek.php,v 1.26 2005/06/22 19:50:44 soeren_nb Exp $
* @package Mambo_4.5.1
* @subpackage mambo-phpShop
*
* @copyright (C) 2004 Soeren Eberhardt
* @Translation Ilias Antonopoulos (eliasan@altermarket.com)
* @Translation Thomas Sopilidis
* http://www.altermarket.com
* http://www.altermarkethosting.com
* http://www.mamboportal.gr
* http://www.mamboclub.net
* http://www.mambobook.gr
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
**/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "�����";
    var $_PHPSHOP_CATEGORY = "���������";
    var $_PHPSHOP_CATEGORIES = "����������";
    var $_PHPSHOP_ADMIN = "����������";
    var $_PHPSHOP_PRODUCT = "������";
    var $_PHPSHOP_LIST = "��������";
    var $_PHPSHOP_ALL = "����";
    var $_PHPSHOP_VIEW = "����������";
    var $_PHPSHOP_SHOW = "��������";
    var $_PHPSHOP_ADD = "��������";
    var $_PHPSHOP_UPDATE = "���������";
    var $_PHPSHOP_DELETE = "��������";
    var $_PHPSHOP_SELECT = "�������";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "������ ��������";
    var $_PHPSHOP_LATEST = "��������� ��������";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "������";
    var $_PHPSHOP_CART_TITLE = "������";
    var $_PHPSHOP_CHECKOUT_TITLE = "������";
    var $_PHPSHOP_LOGIN_TITLE = "�������";
    var $_PHPSHOP_LOGOUT_TITLE = "������";
    var $_PHPSHOP_BROWSE_TITLE = "����������";
    var $_PHPSHOP_SEARCH_TITLE = "���������";
    var $_PHPSHOP_ACCOUNT_TITLE = "��������� �����������";
    var $_PHPSHOP_NAVIGATION_TITLE = "��������";
    var $_PHPSHOP_DEPARTMENT_TITLE = "�����";
    var $_PHPSHOP_INFO = "�����������";
    
    var $_PHPSHOP_BROWSE_LBL = "��������� ��������� OKE HELLAS"; //����������
    var $_PHPSHOP_PRODUCTS_LBL = "��������";
    var $_PHPSHOP_PRODUCT_LBL = "������";
    var $_PHPSHOP_SEARCH_LBL = "���������";
    var $_PHPSHOP_FLYPAGE_LBL = "������������ ���������";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "��������� ���������";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "����� ���������";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "��������� ���������";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "��������� ���������";
    
    var $_PHPSHOP_CART_SHOW = "�������� ��������";
    var $_PHPSHOP_CART_ADD_TO = "�������� ��� ������";
    var $_PHPSHOP_CART_NAME = "�����";
    var $_PHPSHOP_CART_SKU = "������� - SKU";
    var $_PHPSHOP_CART_PRICE = "����";
    var $_PHPSHOP_CART_QUANTITY = "��������";
    var $_PHPSHOP_CART_SUBTOTAL = "������ ������";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "�������� ����";
    var $_PHPSHOP_ADD_SHIPTO_2 = "��������� ���������";
    var $_PHPSHOP_NO_SEARCH_RESULT = "� ��������� ��� ��� ���� ������ ����������.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "����: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "����������";
    var $_PHPSHOP_NO_CUSTOMER = "��������, ���� ��� ����� ����� ������������� �������. ����������� ����� ��� ��� ����������� �������.";
    var $_PHPSHOP_DELETE_MSG = "����� ������� ��� �� �������� ��� �������� �����;";
    var $_PHPSHOP_THANKYOU = "��� ������������ ��� ��� ���������� ���.";
    var $_PHPSHOP_NOT_SHIPPED = "��� ���� ��������� �����";
    var $_PHPSHOP_EMAIL_SENDTO = "��� e-mail ������������, �������� ����";
    var $_PHPSHOP_NO_USER_TO_SELECT = "��������, ��� ������� ������� ��� site ��� �� ����������
    �� ���������� ����� ������� ��� ������������";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "������";
    var $_PHPSHOP_MOD_NOT_REG = "�� module ��� ���� ����������.";
    var $_PHPSHOP_MOD_ISNO_REG = "��� ����� ��� ������ module ��� phpShop.";
    var $_PHPSHOP_MOD_NO_AUTH = "��� ����� �������� ��������� ��� ����� ��� ��������.";
    var $_PHPSHOP_PAGE_404_1 = "� ������ ��� �������";
    var $_PHPSHOP_PAGE_404_2 = "�� ����� ������� ��� ������ ��� �������. ���� ������� � ������
    ��� �������:";
    var $_PHPSHOP_PAGE_403 = "�������� ���������� ���������";
    var $_PHPSHOP_FUNC_NO_EXEC = "��� ����� �������� ��������� ";
    var $_PHPSHOP_FUNC_NOT_REG = "� ��������� ��� ����� ��������������";
    var $_PHPSHOP_FUNC_ISNO_REG = " ��� ����� ������ MOS_com_phpShop ���������.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "������������";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "�������� �������";
    var $_PHPSHOP_USER_LIST_LBL = "����� �������";
    var $_PHPSHOP_USER_LIST_USERNAME = "����� ������";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "������ �����";
    var $_PHPSHOP_USER_LIST_GROUP = "�����";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "�������� ������";
    var $_PHPSHOP_USER_FORM_LBL = "��������/��������� �������� ������";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "�������� �������";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "��������� ���������";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "�������� ����������";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "������������� ����������";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "�����";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "����� ������";
    var $_PHPSHOP_USER_FORM_TITLE = "������";
    var $_PHPSHOP_USER_FORM_USERNAME = "���������";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "�������";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "����������� �������";
    var $_PHPSHOP_USER_FORM_PERMS = "����������";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "�������� ���������";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "��������� 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "��������� 2";
    var $_PHPSHOP_USER_FORM_CITY = "����";
    var $_PHPSHOP_USER_FORM_STATE = "�������/�����";
    var $_PHPSHOP_USER_FORM_ZIP = "���. �������";
    var $_PHPSHOP_USER_FORM_COUNTRY = "����";
    var $_PHPSHOP_USER_FORM_PHONE = "���.";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "��������  Modules";
    var $_PHPSHOP_MODULE_LIST_LBL = "����� Module";
    var $_PHPSHOP_MODULE_LIST_NAME = "����� Module";
    var $_PHPSHOP_MODULE_LIST_PERMS = "���������� Module";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "�����������";
    var $_PHPSHOP_MODULE_LIST_ORDER = "����� �����������";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "�������� Module";
    var $_PHPSHOP_MODULE_FORM_LBL = "����������� Module";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "������� Module (���  ������ �����)";
    var $_PHPSHOP_MODULE_FORM_NAME = "����� Module";
    var $_PHPSHOP_MODULE_FORM_PERMS = "���������� Module";
    var $_PHPSHOP_MODULE_FORM_HEADER = "����������� Module";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "��������� Module";
    var $_PHPSHOP_MODULE_FORM_MENU = "�������� Module ��� ����� �����������;";
    var $_PHPSHOP_MODULE_FORM_ORDER = "����� ���������";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "��������� Module";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "������� �������";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "������ �������";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "�������� Functions";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "����� Function";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "����� Function";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "����� Class";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Class Method";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "����������";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "�������� Function";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "����������� Function";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "����� Function";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "����� Class";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Class Method";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "���������� Function";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "��������� Function";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "�������� ����������";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "����� ����������";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "�������� ����������";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "����� ����������";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "������� ����������";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "�������� �����";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "����� �����";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "�������� �����";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "����� �����";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "������� ����� (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "������� ����� (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "���������";
    var $_PHPSHOP_CONTINUE = "��������";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "�� ������ ��� ����� �����.";
    
    
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
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "������<BR>������������";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "����.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "�������� ������� ���������";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "������� ������� ���������";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "������� ���������";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "�������";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "����� �������������";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "������������ ������";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "������� ������";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "�������";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "������";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "����� ������";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "���������� ������� ���������";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "�������� ������� ���������";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "������� ������� ���������";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "��������";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "������� ���������";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "������������";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "����� �������������";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "������������ ������";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "������� ������";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "�������";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "������";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "����� ������";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "�����������";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "����������� �����������";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "������� �����������";
    var $_PHPSHOP_ORDER_PRINT_MNU = "�������� �����������";
    var $_PHPSHOP_ORDER_DELETE_MNU = "�������� �����������";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "�������� �����������";
    var $_PHPSHOP_ORDER_LIST_LBL = "����� �����������";
    var $_PHPSHOP_ORDER_LIST_ID = "������� �����������";
    var $_PHPSHOP_ORDER_LIST_CDATE = "���������� �����������";
    var $_PHPSHOP_ORDER_LIST_MDATE = "������. ������";
    var $_PHPSHOP_ORDER_LIST_STATUS = "���������";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "������ ������";
    var $_PHPSHOP_ORDER_ITEM = "���� �����������";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "������ ������";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "������� �����������";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "���������� �����������";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "��������� �����������";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "����������� ������";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "����������� �������";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "����������� ���������";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "�� ������";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "�������� ����";
    var $_PHPSHOP_ORDER_PRINT_NAME = "�����";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "��������";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "��������� 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "��������� 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "����";
    var $_PHPSHOP_ORDER_PRINT_STATE = "�������/�����";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "���. �������";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "����";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "���.";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMs_LBL = "���� �����������";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "��������";
    var $_PHPSHOP_ORDER_PRINT_QTY = "���.";
    var $_PHPSHOP_ORDER_PRINT_SKU = "���. ��. (SKU)";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "����";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "������";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "������ ������";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "������ �����";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "����� ��������� ��� �����������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "����� ���������";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "������ ��������";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "����� �����������";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "������� �����������";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "����. �����";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "�������� ��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "�������� ���������";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "�������� ��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "����������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "������� ���������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "���������� ���������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "���� ���������";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "�������� ����������� �����������";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "�������� ���������� �����������";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "������� ���������� �����������";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "����� ���������� �����������";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "��������� �����������";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "������� ���������� �����������";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "����� ���������� �����������";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "�������� �����������";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "��������";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "������ ������";
    var $_PHPSHOP_CURRENT_ITEM = "������ �����";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "������� ���������";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "�������� ��������";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "����";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "�������";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "�����";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "�������� ���������";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "����� ���������";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "����� ���������";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "������� - SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "����������";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "�������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "����������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "������������� ������� ��������� ��� ���������";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "�������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "�������� �� ���� �����";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "��� ������";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "��������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "������������ ���������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "��������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "���������� ��� ����� ���������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "������� ���������";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "��� �����";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "��������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "����������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "��������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "���������� ��� ����� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "������� ������";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "��������� ��� ������ ������";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "��� �� ����������� ��� ������, �������� �� �������� ��� ������� ��� ���� �������..";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "�������� \"none\" �� �������� ��� ��������� �������.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "���� ���������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "�������������� ������";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "����� ������� ��� �� �������� ��� ���������\\n��� ��� ����� ��� ����������� �� ����;";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "����� ������� ��� ������ �� ���������� ���� �� �����;";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "�����������";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "������� - SKU";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "�����";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "���������";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY2 = "��������� 2";
    var $_PHPSHOP_PRODUCT_FORM_PRICE = "���� ��������";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "��������� ������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "���������";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "�� ����������";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "������. ��������";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "�� ��������";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "����� ��������";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "����������;";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "�����";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "������";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "����";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "������ ��������";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "�����";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "������ ��������";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "����� ������";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "������ ������";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "������������ ��������� ���������";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "������������ ���������� ���������";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "������������ ��������� ������";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "������������ ���������� ������";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "����� ������� CSV";
    var $_PHPSHOP_PRODUCT_FOLDERS = "������� ���������";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "�������� ����������";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "������ ����������";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "�������� ����������";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "���������������������";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "����� ����������";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "������";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "��������� ����������";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "����������;";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "������ ����������";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "�������� ���������";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "����� ��������� ���";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "����� ���������";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "����� ���������";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "�������� ���������";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "����� ���������";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "��� �������� ��� �� ������";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "��������� ��������� ��� �� ������";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "��� �������� ��� �� �����";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "��������� ��������� ��� �� �����";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "����� ���������";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "����� ���������";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "�������� ����������";
    var $_PHPSHOP_PRICE_LIST_LBL = "������ �����";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "���� ���";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "����� ������";
    var $_PHPSHOP_PRICE_LIST_PRICE = "����";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "�������";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "�������� �����";
    var $_PHPSHOP_PRICE_FORM_LBL = "�������� �����";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "��� ���� ��� �� ������";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "��������� ����� ��� �� ������";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "��� ���� ��� �� �����";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "��������� ����� ��� �� �����";
    var $_PHPSHOP_PRICE_FORM_PRICE = "����";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "�������";
    var $_PHPSHOP_PRICE_FORM_GROUP = "����� ���������";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "��������";
    var $_PHPSHOP_RB_INDIVIDUAL = "��������� ����������� ���������";
    var $_PHPSHOP_RB_SALE_TITLE = "�������� ��������";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "���������� �������������� ��������";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "������ �������";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "��� ����";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "��� ��������";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "��� �����";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "������ �����";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "������������ �����";
    var $_PHPSHOP_RB_LAST60_BUTTON = "������. 60 ������";
    var $_PHPSHOP_RB_LAST90_BUTTON = "������. 90 ������";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "������ ����";
    var $_PHPSHOP_RB_END_DATE_TITLE = "���� ����";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "�������� ����������� ��������";
    var $_PHPSHOP_RB_REPORT_FOR = "������� ��� ";
    var $_PHPSHOP_RB_DATE = "����������";
    var $_PHPSHOP_RB_ORDERS = "�����������";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "������ ����� ��� ���������";
    var $_PHPSHOP_RB_REVENUE= "�����";
    var $_PHPSHOP_RB_PRODLIST= "�������� ���������";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "���������";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "����� ������";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "����";
    var $_PHPSHOP_ORDER_STATUS_P = "��������";
    var $_PHPSHOP_ORDER_STATUS_C = "�������������";
    var $_PHPSHOP_ORDER_STATUS_X = "���������";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "����������";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "���������";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "�������� ���������";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "����� ���������";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "����� ������";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "�������������";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "�����";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "�������� ��������";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "�������� ��������";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "�������� �������";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "�����������";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "�������� ���������";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "�������� ����������";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "�������������� ����������";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "���������";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "�����";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "����� ������";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "������";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "����� ��������";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "�������";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "����������� �������";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "����� ��������";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "�������� ���������";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "��������� 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "��������� 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "����";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "�������/ �����";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "���. �������";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "����";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "���.";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "�������� ������ ���������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "����� ������ ���������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "����� ������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "��������� ������";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "����� ������ ���������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "�������� ������ ���������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "����� ������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "��������� ������";
    
    
    
    
    /*#####################
    
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "���������";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "����������� ������������";
    var $_PHPSHOP_STORE_FORM_LBL = "����������� ������������";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "�������� ������������";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "������";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "�������� �������";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "����� ������������";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "�������� ��������� ������������";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "��������� 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "��������� 2";
    var $_PHPSHOP_STORE_FORM_CITY = "����";
    var $_PHPSHOP_STORE_FORM_STATE = "�������/�����";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "����";
    var $_PHPSHOP_STORE_FORM_ZIP = "���. �������";
    var $_PHPSHOP_STORE_FORM_PHONE = "���.";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "�������";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "��������� ������������";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "�����";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "����� ������";
    var $_PHPSHOP_STORE_FORM_TITLE = "������";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "���. 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "���. 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "�������� �������";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "���������";
    
    
    
    var $_PHPSHOP_PAYMENT = "�������";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "�������� ������� ��������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "����� ������� ��������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "�����";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "�������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "�������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "����� ���������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "����� ������� ��������";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "�������� ������ ��������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "����� ������ ��������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "����� ������ ��������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "����� ���������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "�������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "�������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "����� ���������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "����� ������� ��������";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "�����";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "����������� �����";
    var $_PHPSHOP_TAX_LIST_MNU = "�������� ����������� �����";
    var $_PHPSHOP_TAX_LIST_LBL = "����� ����������� �����";
    var $_PHPSHOP_TAX_LIST_STATE = "�������� � ������� �����";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "���� �����";
    var $_PHPSHOP_TAX_LIST_RATE = "����������� �����";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "�������� ���������� �����";
    var $_PHPSHOP_TAX_FORM_LBL = "�������� ������������ �����";
    var $_PHPSHOP_TAX_FORM_STATE = "�������� � ������� �����";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "���� �����";
    var $_PHPSHOP_TAX_FORM_RATE = "����������� �����";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "�����������";
    var $_PHPSHOP_VENDOR_ADMIN = "�����������";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "�������� �����������";
    var $_PHPSHOP_VENDOR_LIST_LBL = "����� �����������";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "�������� ����������";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "������������";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "�������� ����������";
    var $_PHPSHOP_VENDOR_FORM_LBL = "�������� �����������";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "�������� ����������";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "�������� ������������";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "������";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "�������� �������";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "����� ������������ ����������";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "�������� ��������� ����������";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "��������� 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "��������� 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "����";
    var $_PHPSHOP_VENDOR_FORM_STATE = "�������/�����";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "����";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "���. �������";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "���.";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "�������";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "��������� ����������";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "�����";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "����� ������";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "������";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "���.  1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "���.  2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "�������� �������";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "���������";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "�������� ���������� �����������";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "����� ���������� �����������";
    var $_PHPSHOP_VENDOR_CAT_NAME = "����� ����������";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "��������� ����������";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "�����������";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "�������� ���������� �����������";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "����� ���������� �����������";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "����������� ����������";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "����� ����������";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "��������� ����������";
        
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "�������������";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "�������������";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "�������� �������������";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "����� �������������";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "����� ������������";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "������������";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "�������� ������������";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "�������� �����������";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "����������� ������������";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "����� ������������";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "��������� ������������";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL ���� site ������������";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "���������";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "�������� ���������� ������������";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "����� ���������� �������������";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "����� ����������";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "��������� ����������";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "�������������";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "�������� ��������� ������������";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "����� ���������� ������������";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "����������� ����������";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "����� ����������";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "��������� ����������";
    
    //var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "�������������";
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "�������";
    
    // 210104 start
    var $_PHPSHOP_CART_ACTION = "���������";
    var $_PHPSHOP_CART_UPDATE = "��������� ��������� ��� ������";
    var $_PHPSHOP_CART_DELETE = "�������� ��������� ��� �� ������";
	
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "����";
    var $_PHPSHOP_PRODUCT_CALL = "������� ��� ����";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "�����.";
    var $_PHPSHOP_PRODUCT_NEXT = "�������";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "�����";
    var $_PHPSHOP_CART_SHIPPING = "��������";
    var $_PHPSHOP_CART_TOTAL = "������";

    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "�������";
    var $_PHPSHOP_CHECKOUT_REGISTER = "�������";
/*
    // basketform
    var $_PHPSHOP_CART_ACTION = "���������";
    var $_PHPSHOP_CART_UPDATE = "���������";
    
    //230104
    var $_PHPSHOP_CART_DELETE = "��������";
*/    
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "����������� �������";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "��������";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "�����";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "���������";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "���.";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "����������� ���������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "��������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "�����";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "���������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "���.";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "����������� ��������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "����� ���� �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "������� ��������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "������� ���������� ������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "������. �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "���������� �����������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "����������� ����������� ���� ��������� ������� ���� ���������� ������";
    
    
    var $_PHPSHOP_ZONE_MOD = "����� ���������";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "�������� �����";
    var $_PHPSHOP_ZONE_FORM_MNU = "�������� �����";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "������������ �����";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "����";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "�������� ����";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "������������ �� ����";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "���������";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "������������ �����";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "����� �����";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "��������� �����";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "������ ����� ��� �����";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "���� ������� �����";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "����� �����";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "����� �����";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "��������� �����";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "������ ����� ��� �����";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "���� ������� �����";
    
    var $_PHPSHOP_LOGIN_FIRST = "����������� ������ ����� ������ � ����� ���������� ��� site (��������������� �� module �������).<br>��� ������������.";
    var $_PHPSHOP_STORE_FORM_TOS = "���� ������������";
    
    var $_PHPSHOP_AGREE_TO_TOS = "����������� ����������� ����� �� ���� ����� ������������.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "������� �� ���� ����� ������������.";
    
    var $_PHPSHOP_LEAVE_BLANK = "(������ �� ���� �� ��� �����<br />������ ������ ������ php ��\' ����!)";
    var $_PHPSHOP_RETURN_LOGIN = "������� �������: ����������� ����� ������";
    var $_PHPSHOP_NEW_CUSTOMER = "���� �������; �������� ����� ��� �� �������� �������";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "����������� ������:";
    var $_PHPSHOP_ACC_ORDER_INFO = "����������� �����������";
    var $_PHPSHOP_ACC_UPD_BILL = "��� �������� �� ����������� ��� ������������� �������.";
    var $_PHPSHOP_ACC_UPD_SHIP = "��� �������� �� ���������� ��� �� ������������� ��� ����������� ���������.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "����������� �����������";
    var $_PHPSHOP_ACC_SHIP_INFO = "����������� ���������";
    var $_PHPSHOP_ACC_NO_ORDERS = "��� �������� ����������� ���� ��������";
    var $_PHPSHOP_ACC_BILL_DEF = "- ��\' ������� (���� �� ��� ��������� �������)";
    var $_PHPSHOP_SHIPTO_TEXT = "�������� �� ���������� ����������� ��������� ���� ���������� ���. ����������� ��������� ��� ��������� ������������ � ������ ��� ��� ��������� ��������� ��� �� ��������� ��������.";
    var $_PHPSHOP_CONFIG = "���������";
    var $_PHPSHOP_USERS = "�������";
    var $_PHPSHOP_IS_CC_PAYMENT = "��������� ��� ������� �� ��������� �����;";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "�����������";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "�����������";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "����������";
    var $_PHPSHOP_CARRIER_LIST_LBL = "����� ����������";
    var $_PHPSHOP_RATE_LIST_MNU = "������ �����������";
    var $_PHPSHOP_RATE_LIST_LBL = "����� ������� �����������";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "�����";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "����� ���������";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "���������� ���������";
    var $_PHPSHOP_CARRIER_FORM_LBL = "�����������/���������� ���������";
    var $_PHPSHOP_RATE_FORM_MNU = "������������ ������ �����������";
    var $_PHPSHOP_RATE_FORM_LBL = "�����������/���������� ������� �����������";
    
    var $_PHPSHOP_RATE_FORM_NAME = "��������� ������� �����������";
    var $_PHPSHOP_RATE_FORM_CARRIER = "����������";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "����";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "���� ������ ���. ���.";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "����� ������ ���. ���.";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "�������� �����";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "������� �����";
    var $_PHPSHOP_RATE_FORM_VALUE = "����������";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "���������� ��� ������";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "�������";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "���";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "����� ���������";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "����������";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "��������� ������� �����������";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "����� ��� ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... ���";
    var $_PHPSHOP_CARRIER_FORM_NAME = "���������� ��������";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "����� ���������";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "������: � ������� ��� ��������� ������� ���.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "������: �������� ��� ���������.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "������: ������� ���, ����������� ��� ������ �����������, ���������� �� ����� ���� ���������� ��� ���������";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "������: ��� ����� �� ��� ��������� �� ����� ��� ������.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "������: �������� ��� ���������.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "������: ��� ����� �� ��� ��������� �� ����� ��� ������.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "������: ���������� ��� ��������� ��� �������.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "������: � ���� ���������� ��� ����� ������. ������������ ��� ��� ����� ������� �� ���������� �� �� \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "������: ��� ����� ����������� �� �������� �����";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "������: ��� ����� ����������� �� ������� �����";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "������: �� �������� ����� ������ �� ����� ��������� ��� �� ������� �����";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "������: ���������� �� ������������ �� ������ �����������";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "������: �������� �������";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "������: ���������� �� ������������ �� ������ �����������";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "�������� ��������";
    var $_PHPSHOP_INFO_MSG_CARRIER = "���������";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "������ �����������";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "����";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-������-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
	var $_PHPSHOP_PAYMENT_FORM_CC = "��������� �����";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "������������� ����������� ��������";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "������ ���������� �����������";
    var $_PHPSHOP_PAYMENT_FORM_AO = "���� ��������� / ������� �� ��� ��������";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "����������� �������� ��� ��������� ���������!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "����������� �������� ��� ������ ���������!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "����������� �������� ��� ������ ��������!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "����������� ������ �� �������� ��� ������������ ��� ���������� ���!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "����������� �������� ��� ������ ���������.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "����������� �������� ��� ���� ������ ���������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "����������� �������� ��� ������ ��������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "����������� �������� ��� ������ ��� ���������� ������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "����������� �������� �� ����� ��� �������, ���� ����������� ���� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "� ������� ��� ���������� ������ ��� ����� �������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "����������� �������� ��� ���� ����� ��� ���������� ������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "����������� �������� �� ���� ����� ��� ���������� ������";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "� ���������� ����� ��� ����� ������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "����������� �������� ��� ��������� ���������.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "�� ������� ������� �����������.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "�� ������ ������ ��� ����� �����!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "������: ����������� �������� ��� ���������!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "������: ��� ������� �� ���������� ������ �����������!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "������: ��� ������� � ��������� ���������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "������: ��� �������� �������� ���������� ������....";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "������: ��� ������� � ������� ��� ���������� ������!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "��������, ���� � ������� ��� ��������������� ����� ���� ��� �������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "� ������� ������ (user_id) ��� ������� ��� ���� ���������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "��� ������������ �� ����� ��� ������� ��� ���������� �����������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "��� ������������ ��� ������ IBAN ��� ����������� ���.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "��� ������������ ��� ������ ��� ���������� ��� �����������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "��� ������������ ��� ������ ����������� ��� �������� ���.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "��� ������������ �� ����� ��� ��������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "�� CheckOut ���������� ��� ������ ����!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "�� ����������� ��� ��� ������� ������������ ��� ��������� �����������.<BR>";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "��� ���� �������� �� �������� ���� �����������.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "�� �������� ���� ����������� �����:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "������� �� ��������� �����";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "����� ������� ��������";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "����������� �������� ��� ������ ��������:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "�������� ���� ����������� ��� �� ��������� ���";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "����������� ���������� �����������";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "������� �����������";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "������� ������� ����������� ��������";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "����� ��������";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "����� �������";

    var $_PHPSHOP_MODULES = "Modules";
    var $_PHPSHOP_FUNCTIONS = "�����������";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "������ ��������";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "����������� ������ ��������, �� ������, ������� �� ��� ���������� ���";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "�������� ������";
    var $_PHPSHOP_INCLUDING_TAX = "(������������ \$tax % ����)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "�������� �������� ��� �����";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "�����";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "������� Download";
    var $_PHPSHOP_DOWNLOADS_START = "������� �� Download";
    var $_PHPSHOP_DOWNLOADS_INFO = "�������� �������� �� ������ Download (Download-ID) ��� ������ �� e-mail ��� ������� \"������� �� Download\".";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "��������, ���� ���� �������� � ������ ��� �������� �� ������ Download";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "��������, ���� ����� ������� �� ������� ������ downloads";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "�� ������� ������� Download!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "��� ����� �� ������ ������ ��� ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "�� ������ ������ ��� ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "����������� Download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "�� ������(�) ��� ������������ ����� ������ ��� ���������";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "�������� ������ �� �������� Download-ID(s) ���� ������� Downloads: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "� �������� ������� ��� ������������ ��� ���� ������ �����: ";
    
    // do not change when translating!
    //$expire=((DOWNLOAD_EXPIRE/60)/60)/24;
    
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Download ����� {expire} ������ ���� �� ����� download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "���������; ����������;";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "����������� Download ��� "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "������ ��� download;"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "������������ ��� ��� ������� ���. 
        � �������� ���� ��������. �� ������ ��� e-mail ������������ ��� ��� ��������� ��� ��� �� PayPal. 
        �������� �� ���������� � �� ������������ �� <a href=http://www.paypal.com>www.paypal.com</a> ��� �� ����� ��� ������������ ��� ����������.";
    var $_PHPSHOP_PAYPAL_ERROR = "������� ������ ������ ��� ������� ����������� ��� ���������� ���. � ��������� ��� ���������� ��� ��� ������ �� ����������.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "������������ ��� ��������� ��� ����.  ���������� �� ����������� ��� ��� ���������� ���.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "������������ ��� ��� ���������� ���.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "���������; ����������;";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "������ � �������� ����������.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "����� ��� ���������� ��������������� ��� ����� ��� ���������.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "��� ������������ ��������� ���������.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "�������� �������� ��� ������ �������� ��� ���� �� �����.";
    
    var $_PHPSHOP_CART_STOCK_1 = "� ���������� �������� ���������� �� ��������� ����. ";
    var $_PHPSHOP_CART_STOCK_2 = "���� �� ����� ������ \$product_in_stock ���� ���������.";
    var $_PHPSHOP_CART_STOCK_3 = "������� ��� ��� �� ������ ��� ����� ��������.";
    var $_PHPSHOP_CART_SELECT_ITEM = "�������� �������� ��� ������ ����� ��� �� ������ ������������!";

    var $_PHPSHOP_REGISTRATION_FORM_NONE = "�������";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "�.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "��.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "��.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "�����.";
    var $_PHPSHOP_DEFAULT = "��\' �������";
        
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "���������� ������������";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "�������� ������������";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "����� ������������";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "����� ������������";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "�������";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "����������";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "������� ������";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="������� ���������";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "�������� �����������";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "�������� Email �� �������������";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "�������� Email �� �������������";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "�� ������ �� �������� Email(* = �����)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "�� Email ���";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "�� ����";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "�� �������������� �� ��������� �����������";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "������� ���������� (���� �����)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "�������;";
    
    var $_PHPSHOP_DELIVERY_TIME = "������� ����������� ��";
    var $_PHPSHOP_DELIVERY_INFORMATION = "����������� ���������";
    var $_PHPSHOP_MORE_CATEGORIES = "������������ ����������";
    var $_PHPSHOP_AVAILABILITY = "�������������";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "�� ������ ���� ��� ����� ����� ���������.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "�� ����� ���� ��������� ����: ";
        
    var $_PHPSHOP_STATISTIC_SUMMARY = "��������";
    var $_PHPSHOP_STATISTIC_STATISTICS = "����������";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "�������";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "������ ��������";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "�������� ��������";
    var $_PHPSHOP_STATISTIC_SUM = "��������";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "���� �����������";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "���� �������";

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "����������� �������� �� e-mail ��� �������� ��� �� ��� ������������� ���� ���� �� ������ ����� ���� ���������. 
                                                                        ��� �� �����������, ������������, ��������� � ���������������� ���� �� e-mail ��� ������ ���� ����� ���� ��� 
                                                                        �� �� ��� ����� ���� �� ������ �� ����� ���� ���������.<br /><br />������������!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "������������ ��� ����������!<br />�� ��� ������������� ������ ����� ������ ���� ���������.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "����������� ��!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "��������";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "�������� ��������   Authorize.net  � CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " ��������� ������� ���������:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "���������";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "�� ���������";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "������� ���������";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Path & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "��������� �����";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "��������";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "���� �������";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "������ ��� ��������� (download)";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "��������";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "����� ���� ��� ���������";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "��� ��������� ����, ��������������� ���� ��� ����������� ��� ��������";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "������� �����";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "������� ����� ������������������� �����;";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "�������� ��� ������� ����� ��� �� �� ������� ������� ��� ����� ������������������� � ��� ��� �����";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = " ��������  ��� �� ������� ��� �����. ��� �������������� �� ���������� ���������, ������� ���  ������ �� ������������ �� ����� ���� �������.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = " ��������� �����";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "���� ������������ ��� �� �������� �� �������� �����, (���������) ������������� � ���. ������������ �� ������ ps_checkout.php->calc_order_taxable() ��� ���������� ���������";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "��������� �����:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "���� ���������� ���������";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "���� ���������� ������������";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "���� ��������� ����� ����������� �����  ���������� ��� ��� ���������� ��� ����� :<br />
                                                                                    <ul><li>����� ��� �� ����/ ���� ��� ���������� � ���������� ��� ������������</li><br/>
                                                                                    <li>����� ��� ���� � ������� ����������.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "������������ ��������� ����������� �����?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "�������� ��, ��� ����� �������� �� ����������� ���������� ����� ( �.� 8% ��� ������ 18% ��� ���� ��������";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "�������� �������� ������ �� ����/ ����� ���������;";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "������������ ����������  ��������� �������/���������� ���������";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "��� �������������, ���������� ����� ������� �� <strong>�� �������� ��� �� ��������</strong> ��� <strong>�� ������� ��������</strong> ��� ����. <br />
                                                                                ���� �� ������� �� ������� �� ������� ��� ��� ��������� ���� ��� �� ������, ��� �� ��� ����������� �� ������ �������.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "����������� �� �������  ��� �� ��������� ��� �������  ��� �� ������������ ������� ���� � ���� �� ���� ��� �� ����� ���������.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "������� �� ������� �� ������� ���� �� ����� ���������� �����������;";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "�������� �� ���  ������� ��� �� ����� ��� ���������� �� ��� �������� �� ���������� �������� ���� ���� ����������� ��� ����������� ���������.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "�� ������� ������� �� ��������� ����/�������?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "�������� ���� ��� ��������� �� ����� �� ���������� �� ��������� �� ���� ����/������� ���� ����������� ��� ����������� ���������.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "����������� ��������� - �������� ������ �� ���� ����� ������;";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "�������� ��� ������ � ������� �� �������� �� ���� ����� ������ ������ �������� ��� ����������� ���������.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "������� ���������� ";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "������������ ������� ���������� ���� � ������� ��������� ��� ������ ��� ������ ������ ���. 
                                                                                         ��� �������������, ��� ��������� ��� ������ �� ��������� �������� �������� ��� ������ ��� ���� ��� ����� ���������.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "������������  ��������� ����������?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "���� ����������� ��� ��������� ��� ���������� ���� ������������� �� ���������. ������������� �� ��� ����� ������� ���������� ��� ����������.";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "����� ����������� email:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "������������ ��������";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML ������������";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "���� ��������� ��� � ������������ ������������ ����������� (email ) ����������:<br />
                                                                                        <ul><li>email ����� �������� </li>
                                                                                        <li>� html email �� �������.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "�� ����������� � ���������� ��� Frontend ��� ������� ��� ��� ����� �������� ��� Backend;";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "�� ����� ��� ������� �������� �� ���������� ��� �������� ����� ������������ ��� ������������ ������������, ���� ��� ���������� �������� ��� ���������� ��� Mambo (e.g. Registered / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "�� URL ��� ��� �������� ��� ����.������� ������������� �� �� URL ��� Mambo  (�� �� ������ / ��� �����!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "������� URL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "��  URL ��������� ��� ���������  ��� �����. (https - �� �� ������ / ��� �����!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "�� URL ��� �� component ";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "�� URL ��� �� component ��� mambo-phpShop. (�� �� ������ / ��� �����!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "URL �������";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "�� URL ��� �� mambo-phpShop component (������� �������) (�� �� ������ / ��� �����!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "������� ADMIN";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "� �������� ���� �� ������ component mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "������� CLASS";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "� �������� ���� �� ������ classes ��� mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "�������  mambo-phpShop";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "� �������� ���� �� ������ html mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "������� �������";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "� �������� ���� �� ������ ������� mambo-phpShop shop.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "������ ������";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "���� ����� � ������ ��� �� ���������� ��� �������������.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "���������� ������� ������";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "���� ����� � ������������� ������ ���  ���������� ������� ������.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "������ ��������������";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "���� ����� � ������������� ������ �������� ��������� ��������������.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "�������������?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "�������������?  ����������� ��� ���������� ����������� ��������������. ��������  �� ����� �������������� (debug) ���  ���� ����� ���� �������. ���������� ���������  ���� ��� ���������� ��������� ��� ehsop ��� ������� �� ����������� ��� ��������, ��� ������  �.�.�..";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "���� ����� � ������������� ������ ��� ��� ���������� ��� ������������ ��� ���������.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "��������� Template";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "������ ��� ������������� ���������  template ��� ���  ������� ��������� �� ��� ���������.<br />
                                                                                                      �������� �� ������������� ���  templates ������������� �� ���������  ������ ��� template <br />
                                                                                                      (�� ����� ���������� ��� �������� <strong>COMPONENTPATH/html/templates/</strong> ��� �������� �� �� browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "�������������� ������� �������� ��������� �� ���  ������";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = " ���� ������ ��� ������������� ������� �������� ��������� �� ���  ������.<br />
                                                                                                      ����������: �� ���������  4, � ��������� template  �� ��������  4 �������� ��� ������";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"����� ������\" ������";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "���� � ������ ��  ������������� ���� ��� ������� ��������� ������ ���������.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "��������� �������";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "��������� ��� ������ ��� �������  ��� ������ ���� �� ������������ ���������� �������������� �� �����.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "��������� ����� 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "���������  �� ����� ��� ����� ������� ������� �� ��� ����� �������������.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "��������� ����� 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "���������  �� ����� ��� ����� ������� ������� �� ��� ����� �������������.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "�������� ������� �������";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "�������� ��� ������ ��� �������  ��� ���������� �� order list select box.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "������� \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "�������� ��� ������ ��� ���� ����� a powered-by-mambo-phpShop .";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "�������� �� ������ ��� �� ��������� ��� �� ��������� �� ��������.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "�������� ������  ��������� �� ����������� ���������� ��� ����� �� ���������� ����������������. <strong>������������!</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = " Zone Shipping Module Country Version 1.0<br />
                                                                                                            ��� ������������ ����������� ��� ���� �� module ����������� ������������: <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            ��� ������������ � ��� �����������: <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "�������� ����������� ����������� UPS ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS  ������� ���������";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "� ������� ��������� ��� ��� ��� UPS ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS �������";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "�� ����� ������ ��� ������ ��� ��� UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "� �������� ������� ��� ��� ���������� ��� ���� UPS";
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper ���������. �������� ���� ��� ����� ���������� ���� Intershipper.com ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "�������������� �������� ������� ���������. �������� �� �� ������� ��� ��������� ��  ����������� ����������� (download) �������� ��� ��� ���������� ��  ����������� - ����������.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "� �������� ������� ��� ��� ���������� ��� ���� intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "��  email  ��� ����� ������� ��� ��� ���������� ��� ���� intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "������ �������������";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "��������������� ���  ��� ������������� ��������� ���  ����� ����������� ��� ���� ��������� �� ���� �� ������. ���� �������� ��� ���� �� ������  �� ������ �� ������������� ��� ����������� ��������, �������.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "������������ ��� ������ ������ (checkout)";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "�������� ����, ��� ������ � '����� ��� �������' �� ����������� ���� ������ ���� �� �������� ��� ����������� checkout ( 1 - 2 - 3 - 4 �� �������).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "�������� �� ���������� ������� ��� ������������ ���";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>������� :</strong><br/>
               1. ������ ���������� ���������<br />
              2. ������ ������� ���������<br />
              3. ������ ������ ��������<br />
              4. ���������� �����������";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>���������� 2:</strong><br/>
               1. ������ ���������� ���������<br />
              2. ������ ������ ��������<br />
              3. ���������� �����������";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>���������� 3:</strong><br/>
               1. ������ ������� ���������<br />
              2. ������ ������ ��������<br />
              3. ���������� �����������";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>���������� 4:</strong><br/>
               1. ������ ������ ��������<br />
              2. ���������� �����������";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "������������ ������������ ������� (Downloads)";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Check to enable the download capability. Only If you want sell downloadable goods.";
	
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
    var $_PHPSHOP_ADVANCED_SEARCH  ="������� ���������";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "���� ���� ��� ����������";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "���� ���� ��� ����������� �����";
    var $_PHPSHOP_SEARCH_PRODNAME = "���� �� ����� ��� ���������";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "���� �������������/�����������";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "���� ��������� ���������";
    var $_PHPSHOP_SEARCH_AND = "���";
    var $_PHPSHOP_SEARCH_NOT = "���";
    var $_PHPSHOP_SEARCH_TEXT1 = "� ����� ���������� ����� ��� ��������� �� ��������� ��� ��������� ��� �� ����������� �� ���� ��� ���������. 
        � ������� ���������� ����� ��� ��������� �� ������ ��������� �� ��� ������������ ����� ��� ����������� ��� ��������� (�.�. �����). 
        ��� �� ������ ��� ����� ����� ��� �������� ��� (� ������� ��� ��' ������� ������� ����), �������� ��� ���� ���������, ���� ������. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " �������� �� ������������� ��������� ��� ��������� ��� ������������ ��� ������� ���� ������ ��� ����������� ��� ����������� ��� ��� ���. 
        ����������� ��� �������� ��� ��� �� ��� ������ ������ �� ����� �������� ��� �� ���������� �� ������. 
        ����������� ��� �������� ��� �� ������ �� ���������� ���� �� � ����� ���� ������ ����� ������� 
        ��� � ������� ��� �����.";
    var $_PHPSHOP_ORDERBY = "���������� ����";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "���� ���������� ������";
    var $_PHPSHOP_TOTAL_VOTES = "��������� �����";
    var $_PHPSHOP_CAST_VOTE = "����������� ����� ��� ���� ���";
    var $_PHPSHOP_RATE_BUTTON = "������������";
    var $_PHPSHOP_RATE_NOM = "����������";
    var $_PHPSHOP_REVIEWS = "�������� �������";
    var $_PHPSHOP_NO_REVIEWS = "��� �������� �������� ��' ���� �� ������.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "���� � ������ ��� �� ������ ��� �������...";
    var $_PHPSHOP_REVIEW_LOGIN = "����������� ����� �������� ��� �� ������� ��� �������.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "����������� ������������ �� ������ ��� �� ������������ ��� ������� ���!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "����������� ������ �������� ����� ���������� ��� ��� ������� ���. ��������� ������������� ������� ����������: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "����������� ������� �� ����� ��� �������� ���. �������� ������������� ������� ����������: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "������ ��� ������� ��' ���� �� ������!";
    var $_PHPSHOP_REVIEW_RATE = "�����: ������������ �� ������. ����������� �������� ��� ���������� ������ 0 (������) ��� 5 �������� (�����).";
    var $_PHPSHOP_REVIEW_COMMENT = "�������� ������ ���� ��� ������� �������...(�������� 100, ������� 2000 ����������) ";
    var $_PHPSHOP_REVIEW_COUNT = "���������� ��� ����� ������: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "������� ��������";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "����� ��� ������ ������� ��' ���� �� ������. ������������.";
    var $_PHPSHOP_REVIEW_THANKYOU = "������������ ��� ��� ������� ���.";
    var $_PHPSHOP_COMMENT= "������";
    
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "�������� ��� �� ��������";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "��������� ���������";
    
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
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Product Discount List";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Add/Edit Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Enter the discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Discount Type";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Percentage";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Shall the amount be a percentage or a total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Startdate of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Specifies the day when the discount begins";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "End date of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Specifies the day when the discount ends";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "You can use the Product Discount Form to add discounts!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "You Save";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "�������� ������� �������";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Currency Display Style";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Currency symbol";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "You can also use HTML Entities here (e.g. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimals";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimal symbol";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Character used as decimal symbol";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Thousands separator";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Character used to separate thousands (can be empty)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positive format";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Display format used to display positive values.<br>(Symb stands for currency symbol)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negative format";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Display format used to display negative values.<br>(Symb stands for currency symbol)";
    
    var $_PHPSHOP_OTHER_LISTS = "Other Product Lists";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "View More Images";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Available Images for";
    var $_PHPSHOP_BACK_TO_DETAILS = "Back to Product Details";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "FileManager";
    var $_PHPSHOP_FILEMANAGER_LIST = "FileManager::Product List";
    var $_PHPSHOP_FILEMANAGER_ADD = "Add Image/File";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Assigned Images";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Is Downloadable?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Assigned Files (Datasheets,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Published?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "FileManager::Image/File List for";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Filename";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "File Title";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "File Type";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Edit File Entry";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Full Image";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Thumbnail Image";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Upload a File for";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Current File";
    var $_PHPSHOP_FILES_FORM_FILE = "File";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Image";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Upload to";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "default Product Image Path";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Specify the file location";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Download Path (e.g. for selling downloadables!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Auto-Create Thumbnail?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "File is published?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "File Title (what the Customer sees)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "File Description";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "File URL (optional)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Please provide a valid path!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "The Thumbnail Image has been successfully created!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Could NOT create Thumbnail Image!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "File/Image Upload Error";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Could not delete the Full Image File.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Full Image successfully deleted.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Could not delete the Thumbnail Image File (maybe didnt exist): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Thumbnail Image successfully deleted.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Could not delete the File.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "File successfully deleted.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Sorry, but the requested file wasn't found!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Image not found!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Coupon";
    var $_PHPSHOP_COUPONS = "Coupons";
    var $_PHPSHOP_COUPON_LIST = "Coupon List";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Coupon has already been redeemed.";
    var $_PHPSHOP_COUPON_REDEEMED = "Coupon redeemed! Thank you.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "If you have a coupon code, please enter it below:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Submit";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "That coupon code already exists. Please try again.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Update Coupon";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Click a coupon code to edit it, or to delete a coupon code, select it and click Delete:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Code";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Percent or Total";
    var $_PHPSHOP_COUPON_TYPE = "Coupon Type";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Gift Coupon";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanent Coupon";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Value";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Delete Code";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Are you sure you want to delete this coupon code?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Please complete all fields.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Coupon value must be a number.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "New Coupon";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Coupon Code";
    var $_PHPSHOP_COUPON_PERCENT = "Percent";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "Value";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Coupon code saved.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Save Coupon";
    var $_PHPSHOP_COUPON_DISCOUNT = "Coupon Discount";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Coupon code not found. Please try again.";
    var $_PHPSHOP_COUPONS_ENABLE = "Enable Coupon Usage";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Shipping is free on this Order!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minimum Amount for Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with \$50 (including tax) or more.";
    var $_PHPSHOP_YOUR_STORE = "Your Store";
    var $_PHPSHOP_CONTROL_PANEL = "Control Panel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Button";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Show or Hide the PDF - Button in the Shop";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Must agree to Terms of Service on EVERY ORDER?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).";

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
    var $_PHPSHOP_ERROR_DESC = "Error Description";
    
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
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "EITHER Fill in a Filename";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "OR Upload new File";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "You can upload a local file. This file will be the Product you sell. An existing file will be replaced.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Size</strong>,XL[+1.99],M,S[-2.99]<strong>;Colour</strong>,Red,Green,Yellow,ExpensiveColor[=24.00]<strong>;AndSoOn</strong>,..,..</span>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == Add this amount to the configured price.<br />
        <strong>&#45;</strong> == Subtract this amount from the configured price.<br />
        <strong>&#61;</strong> == Set the product's price to this amount.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Custom Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Custom attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Name;Extras;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "�������� ������� �� CTRL ��� �������";  
    
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

