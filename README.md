# Introduction

Wixphp is a wrapper around Wix API to facilitate faster app development designed to work best with Laravel PHP framework.
# Installation

```bash
composer require sarojkalamagar/wixphp:dev-main
```

# Configuration (.env)

```shell
WIX_APP_ID=[Your app ID]
WIX_CLIENT_ID=[OAuth app ID]
WIX_CLIENT_SECRET=[OAuth app secret]
```

# Usage

## Fetch products
```php
$products = WixProduct::ownedBy($siteId)->get();
```

## Sort
```php
$products = WixProduct::ownedBy($siteId)->sortByName('asc')->get();
```

## Filter
```php
$products = WixProduct::ownedBy($siteId)->whereNameEquals('keywords')->get();
```