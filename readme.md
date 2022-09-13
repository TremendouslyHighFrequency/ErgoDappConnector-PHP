Alpha release of a dApp connector for Nautilus Ergo wallet and Laravel web2 authentication. 

Pre-requisites:  
- Laravel 9 installation
- Laravel Breeze installed and migrations run

Steps to install:
- composer require terahertz/ergo-dapp-connector (Not in Packagist yet)
- php artisan vendor:publish --provider="Terahertz\ErgoDappConnector\DappServiceProvider" --tag="config"
- php artisan vendor:publish
- set env var for SIGMA_RUST_LAMBDA_URL
- npm install alpinejs
- npm install @alpinejs/persist
- import alpine and persist into your 
- place   <x-ergo-dapp-connector::nautilus-login /> where you want your login buttons
- add: <script src="{{ asset('vendor/terahertz/terahertz.js') }}"></script>

Todo:
- Create tests
