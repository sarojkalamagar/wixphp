# Installation

`composer require sarojkalamagar/wixphp:dev-main`

# Configuration (.env)

`WIX_APP_ID=[Your app ID]`
`WIX_CLIENT_ID=[OAuth app ID]`
`WIX_CLIENT_SECRET=[OAuth app secret]`

# Usage

`$products = WixProduct::ownedBy($siteId)->get();`