#!/bin/sh
# ----------------------------------------------------------------------------
# Configuration
# ----------------------------------------------------------------------------

# ... The Version Number for the Filenames
VERSION="1.1.0"

# ... The Path to your SVN Repository
SVN_PATH=/home/soeren/Joomla/virtuemart/.svn/virtuemart

# ... The Path to your Result Directory
WRITE_PATH=/home/soeren/Joomla/virtuemart/publish/$VERSION


# ----------------------------------------------------------------------------
#
# Component Install Archive Builder
#
# This file is part of virtuemart
#
# virtuemart
# http://virtuemart.net
#
# virtuemart is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# virtuemart is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with eDe; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
# ----------------------------------------------------------------------------

7za a -ttar -r $SVN_PATH/admin_files.tar $SVN_PATH/classes $SVN_PATH/html $SVN_PATH/languages $SVN_PATH/sql
7za d $SVN_PATH/admin_files.tar languages/*.php -x!languages/english.php
7za d -r $SVN_PATH/admin_files.tar .svn/
7za a -tgzip $SVN_PATH/admin_files.tar.gz $SVN_PATH/admin_files.tar 
rm $SVN_PATH/admin_files.tar

7za a -ttar -r $SVN_PATH/frontend_files.tar $SVN_PATH/js $SVN_PATH/css $SVN_PATH/shop_image $SVN_PATH/themes $SVN_PATH/fetchscript.php $SVN_PATH/virtuemart.php $SVN_PATH/virtuemart_parser.php $SVN_PATH/show_image_in_imgtag.php
7za a -ttar $SVN_PATH/frontend_files.tar $SVN_PATH/index.html
7za d -r $SVN_PATH/frontend_files.tar .svn/
7za a -tgzip $SVN_PATH/frontend_files.tar.gz $SVN_PATH/frontend_files.tar 
rm $SVN_PATH/frontend_files.tar

7za a -ttar -r- $SVN_PATH/com_virtuemart.tar $SVN_PATH/*.*
7za d $SVN_PATH/com_virtuemart.tar fetchscript.php virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

7za a -tgzip $SVN_PATH/com_virtuemart_$VERSION.tar.gz $SVN_PATH/com_virtuemart.tar

rm $SVN_PATH/admin_files.tar.gz
rm $SVN_PATH/frontend_files.tar.gz
rm $SVN_PATH/com_virtuemart.tar

7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/dtree $SVN_PATH/modules/vm_transmenu $SVN_PATH/modules/mod_virtuemart.php $SVN_PATH/modules/mod_virtuemart.xml $SVN_PATH/modules/vm_dtree.php $SVN_PATH/modules/vm_JSCookTree.php $SVN_PATH/modules/vm_JSCook.php $SVN_PATH/modules/vm_transmenu.php $SVN_PATH/modules/vm_tigratree.php
7za d -r $SVN_PATH/mod_virtuemart.tar .svn/
7za a -tgzip $SVN_PATH/mod_virtuemart_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar

7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_allinone.php $SVN_PATH/modules/mod_virtuemart_allinone.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_allinone_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_cart.php $SVN_PATH/modules/mod_virtuemart_cart.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_cart_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_currencies.php $SVN_PATH/modules/mod_virtuemart_currencies.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_currencies_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_featureprod.php $SVN_PATH/modules/mod_virtuemart_featureprod.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_latestprod.php $SVN_PATH/modules/mod_virtuemart_latestprod.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_manufacturers.php $SVN_PATH/modules/mod_virtuemart_manufacturers.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_productscroller.php $SVN_PATH/modules/mod_productscroller.xml
7za a -tgzip $SVN_PATH/mod_productscroller_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_product_categories.php $SVN_PATH/modules/mod_product_categories.xml
7za a -tgzip $SVN_PATH/mod_product_categories_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_randomprod.php $SVN_PATH/modules/mod_virtuemart_randomprod.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_search.php $SVN_PATH/modules/mod_virtuemart_search.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_search_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar
7za a -ttar -r $SVN_PATH/mod_virtuemart.tar $SVN_PATH/modules/mod_virtuemart_topten.php $SVN_PATH/modules/mod_virtuemart_topten.xml
7za a -tgzip $SVN_PATH/mod_virtuemart_topten_$VERSION.tar.gz $SVN_PATH/mod_virtuemart.tar
rm $SVN_PATH/mod_virtuemart.tar

7za a -ttar -r $SVN_PATH/mambot_virtuemart.tar $SVN_PATH/mambots/mosproductsnap.php $SVN_PATH/mambots/mosproductsnap.xml
7za a -tgzip $SVN_PATH/mosproductsnap_$VERSION.tar.gz $SVN_PATH/mambot_virtuemart.tar
rm $SVN_PATH/mambot_virtuemart.tar
7za a -ttar -r $SVN_PATH/mambot_virtuemart.tar $SVN_PATH/mambots/virtuemart.searchbot.php $SVN_PATH/mambots/virtuemart.searchbot.xml
7za a -tgzip $SVN_PATH/virtuemart.searchbot_$VERSION.tar.gz $SVN_PATH/mambot_virtuemart.tar
rm $SVN_PATH/mambot_virtuemart.tar

7za a -tzip $WRITE_PATH/VirtueMart_$VERSION-COMPLETE_PACKAGE.zip $SVN_PATH/com_virtuemart_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_allinone_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_cart_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_currencies_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz $SVN_PATH/mod_product_categories_$VERSION.tar.gz $SVN_PATH/mod_productscroller_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_search_$VERSION.tar.gz $SVN_PATH/mod_virtuemart_topten_$VERSION.tar.gz $SVN_PATH/mosproductsnap_$VERSION.tar.gz $SVN_PATH/virtuemart.searchbot_$VERSION.tar.gz $SVN_PATH/REAMDE.php

7za a -ttar -r $SVN_PATH/languages.tar $SVN_PATH/languages
7za d -r $SVN_PATH/languages.tar .svn/ languages/english.php
7za a -tgzip $WRITE_PATH/Language_Pack_for_VirtueMart_$VERSION.tar.gz $SVN_PATH/languages.tar 
rm $SVN_PATH/languages.tar

rm $SVN_PATH/mod_virtuemart_$VERSION.tar.gz
rm $SVN_PATH/com_virtuemart_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_allinone_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_cart_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_currencies_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz
rm $SVN_PATH/mod_productscroller_$VERSION.tar.gz
rm $SVN_PATH/mod_product_categories_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_search_$VERSION.tar.gz
rm $SVN_PATH/mod_virtuemart_topten_$VERSION.tar.gz
rm $SVN_PATH/mosproductsnap_$VERSION.tar.gz
rm $SVN_PATH/virtuemart.searchbot_$VERSION.tar.gz
