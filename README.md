# Setup

To make sure you can run this script on mac, make sure you have a proper php version (best to install it with brew, as the standard library doesn't have specific settings)

`brew install php71`

Install all required dependencies (already included in the repo in vendor)

`composer install`

(vendor was created by running `composer require lyquidity/xbrl:dev-master lyquidity/xpath2:dev-master lyquidity/utilities:dev-master lyquidity/xml:dev-master pear/log --prefer-dist`)
