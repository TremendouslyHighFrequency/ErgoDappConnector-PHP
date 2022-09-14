<div class="text-center" id="terahertz-login" x-data="terahertzLogin">
    <template x-if="Alpine.store('terahertzStore').getConnected() == false">    
        <button 
            class="bg-blue-900 text-white px-5 py-2.5 mr-2 mb-2" 
            x-bind="connectWallet"> 
                Connect Wallet
        </button>     
    </template>

    <template x-if="Alpine.store('terahertzStore').getConnected() == false">    
        <button 
        class="bg-blue-900 text-white px-5 py-2.5 mr-2 mb-2" 
        x-bind="login"> 
            Login with Nautilus
        </button>     
    </template>

    <template x-if="Alpine.store('terahertzStore').getConnected() == 'true'">    
        <p>
            Wallet Address: <small><span x-text="Alpine.store('terahertzStore').getAddress()"></span></small><br>
            Wallet Balance: <span x-text="ergBalance"></span><br>
            <a href="" x-bind="disconnectWallet" class="text-rose-900 underline underline-offset-1">Disconnect</a>
        </p>
    </template>

    <div x-show="showError" x-text="error" class="text-rose-900"></div>
</div>