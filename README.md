# Installation

```bash
composer require sarojkalamagar/wixphp:dev-main
```

# Configuration (.env)

`WIX_APP_ID=[Your app ID]`<br />
`WIX_CLIENT_ID=[OAuth app ID]`<br />
`WIX_CLIENT_SECRET=[OAuth app secret]`

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