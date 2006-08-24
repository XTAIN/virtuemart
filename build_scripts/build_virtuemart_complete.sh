#!/bin/sh
# ----------------------------------------------------------------------------
# Configuration
# ----------------------------------------------------------------------------

# ... The Version Number for the Filenames
VERSION="1.1.0"

# ... The Path to your CVS Repository
CVS_PATH=/home/soeren/Joomla/virtuemart/CVS/virtuemart

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

7za a -ttar -r $CVS_PATH/admin_files.tar $CVS_PATH/classes $CVS_PATH/html $CVS_PATH/languages $CVS_PATH/sql
7za d $CVS_PATH/admin_files.tar languages/*.php -x!languages/english.php
7za d -r $CVS_PATH/admin_files.tar CVS/
7za a -tgzip $CVS_PATH/admin_files.tar.gz $CVS_PATH/admin_files.tar 
rm $CVS_PATH/admin_files.tar

7za a -ttar -r $CVS_PATH/frontend_files.tar $CVS_PATH/js $CVS_PATH/css $CVS_PATH/shop_image $CVS_PATH/themes $CVS_PATH/fetchscript.php $CVS_PATH/virtuemart.php $CVS_PATH/virtuemart_parser.php $CVS_PATH/show_image_in_imgtag.php
7za a -ttar $CVS_PATH/frontend_files.tar $CVS_PATH/index.html
7za d -r $CVS_PATH/frontend_files.tar CVS/
7za a -tgzip $CVS_PATH/frontend_files.tar.gz $CVS_PATH/frontend_files.tar 
rm $CVS_PATH/frontend_files.tar

7za a -ttar -r- $CVS_PATH/com_virtuemart.tar $CVS_PATH/*.*
7za d $CVS_PATH/com_virtuemart.tar fetchscript.php virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

7za a -tgzip $CVS_PATH/com_virtuemart_$VERSION.tar.gz $CVS_PATH/com_virtuemart.tar

rm $CVS_PATH/admin_files.tar.gz
rm $CVS_PATH/frontend_files.tar.gz
rm $CVS_PATH/com_virtuemart.tar

7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/dtree $CVS_PATH/modules/vm_transmenu $CVS_PATH/modules/mod_virtuemart.php $CVS_PATH/modules/mod_virtuemart.xml $CVS_PATH/modules/vm_dtree.php $CVS_PATH/modules/vm_JSCookTree.php $CVS_PATH/modules/vm_JSCook.php $CVS_PATH/modules/vm_transmenu.php
7za d -r $CVS_PATH/mod_virtuemart.tar CVS/
7za a -tgzip $CVS_PATH/mod_virtuemart_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar

7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_allinone.php $CVS_PATH/modules/mod_virtuemart_allinone.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_allinone_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_cart.php $CVS_PATH/modules/mod_virtuemart_cart.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_cart_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_featureprod.php $CVS_PATH/modules/mod_virtuemart_featureprod.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_latestprod.php $CVS_PATH/modules/mod_virtuemart_latestprod.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_manufacturers.php $CVS_PATH/modules/mod_virtuemart_manufacturers.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_productscroller.php $CVS_PATH/modules/mod_productscroller.xml
7za a -tgzip $CVS_PATH/mod_productscroller_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_product_categories.php $CVS_PATH/modules/mod_product_categories.xml
7za a -tgzip $CVS_PATH/mod_product_categories_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_randomprod.php $CVS_PATH/modules/mod_virtuemart_randomprod.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_search.php $CVS_PATH/modules/mod_virtuemart_search.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_search_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar
7za a -ttar -r $CVS_PATH/mod_virtuemart.tar $CVS_PATH/modules/mod_virtuemart_topten.php $CVS_PATH/modules/mod_virtuemart_topten.xml
7za a -tgzip $CVS_PATH/mod_virtuemart_topten_$VERSION.tar.gz $CVS_PATH/mod_virtuemart.tar
rm $CVS_PATH/mod_virtuemart.tar

7za a -ttar -r $CVS_PATH/mambot_virtuemart.tar $CVS_PATH/mambots/mosproductsnap.php $CVS_PATH/mambots/mosproductsnap.xml
7za a -tgzip $CVS_PATH/mosproductsnap_$VERSION.tar.gz $CVS_PATH/mambot_virtuemart.tar
rm $CVS_PATH/mambot_virtuemart.tar
7za a -ttar -r $CVS_PATH/mambot_virtuemart.tar $CVS_PATH/mambots/virtuemart.searchbot.php $CVS_PATH/mambots/virtuemart.searchbot.xml
7za a -tgzip $CVS_PATH/virtuemart.searchbot_$VERSION.tar.gz $CVS_PATH/mambot_virtuemart.tar
rm $CVS_PATH/mambot_virtuemart.tar

7za a -tzip $WRITE_PATH/VirtueMart_$VERSION-COMPLETE_PACKAGE.zip $CVS_PATH/com_virtuemart_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_allinone_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_cart_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz $CVS_PATH/mod_product_categories_$VERSION.tar.gz $CVS_PATH/mod_productscroller_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_search_$VERSION.tar.gz $CVS_PATH/mod_virtuemart_topten_$VERSION.tar.gz $CVS_PATH/mosproductsnap_$VERSION.tar.gz $CVS_PATH/virtuemart.searchbot_$VERSION.tar.gz $CVS_PATH/REAMDE.php

7za a -ttar -r $CVS_PATH/languages.tar $CVS_PATH/languages
7za d -r $CVS_PATH/languages.tar CVS/ languages/english.php
7za a -tgzip $WRITE_PATH/Language_Pack_for_VirtueMart_$VERSION.tar.gz $CVS_PATH/languages.tar 
rm $CVS_PATH/languages.tar

rm $CVS_PATH/mod_virtuemart_$VERSION.tar.gz
rm $CVS_PATH/com_virtuemart_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_allinone_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_cart_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_featureprod_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_latestprod_$VERSION.tar.gz
rm $CVS_PATH/mod_productscroller_$VERSION.tar.gz
rm $CVS_PATH/mod_product_categories_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_randomprod_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_manufacturers_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_search_$VERSION.tar.gz
rm $CVS_PATH/mod_virtuemart_topten_$VERSION.tar.gz
rm $CVS_PATH/mosproductsnap_$VERSION.tar.gz
rm $CVS_PATH/virtuemart.searchbot_$VERSION.tar.gz
