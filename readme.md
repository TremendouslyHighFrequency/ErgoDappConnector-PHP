Alpha release of a dApp connector for Nautilus Ergo wallet and Laravel web2 authentication. 

Better readme to follow.

Steps to install:
- composer require terahertz/ergo-dapp-connector (Not in Packagist yet)
- php artisan vendor:publish --provider="Terahertz\ErgoDappConnector\DappServiceProvider" --tag="config"
- php artisan vendor:publish
- set env var for SIGMA_RUST_LAMBDA_URL
- npm install alpinejs
- npm install @alpinejs/persist
- place   <x-ergo-dapp-connector::nautilus-login /> where you want your login buttons
- add: <script src="{{ asset('vendor/terahertz/terahertz.js') }}"></script>

Todo:
- Create tests
- Aadd
