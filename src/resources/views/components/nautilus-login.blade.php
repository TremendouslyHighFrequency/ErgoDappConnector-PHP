<div class="text-center" x-data="nautilusLogin">
    <template x-if="Alpine.store('nautilusStatus').getConnected() == false">    
        <button 
            class="bg-blue-900 text-white px-5 py-2.5 mr-2 mb-2" 
            x-bind="connectWallet"> 
                <img src="../img/ergo-wallet-white.png" style="max-width: 34px; height: auto; display: inline-block; margin-right: 10px;" alt="Ergo">Connect Wallet
        </button>     
    </template>

    <template x-if="Alpine.store('nautilusStatus').getConnected() == false">    
        <button 
        class="bg-blue-900 text-white px-5 py-2.5 mr-2 mb-2" 
        x-bind="login"> 
            <img src="../img/ergo-wallet-white.png" style="max-width: 34px; height: auto; display: inline-block; margin-right: 10px;" alt="Ergo">Login with Nautilus
        </button>     
    </template>

    <template x-if="Alpine.store('nautilusStatus').getConnected() == 'true'">    
        <p>
            Wallet Address: <small><span x-text="Alpine.store('nautilusStatus').getAddress()"></span></small><br>
            Wallet Balance: <span x-text="ergBalance"></span><br>
            <a href="" x-bind="disconnectWallet" class="text-rose-900 underline underline-offset-1">Disconnect</a>
        </p>
    </template>

    <div x-show="showError" x-text="error" class="text-rose-900"></div>
</div>