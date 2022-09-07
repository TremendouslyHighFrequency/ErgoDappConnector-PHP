<?php 

namespace Terahertz\ErgoDappConnector\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GuzzleHttp\Client;

class DappAuthController
{

        
    /**
     * nautilusLogin
     *
     * @param Request $request
     * @return string A json response with either success or fail
     */
    public function nautilusLogin(Request $request){

        $client = new Client();
        $response = $client->post(config('ergo-dapp-connector.sigma-rust-verification-url'), [   
            'json' => [
                'address' => $request->address,
                'proof' => $request->proof,
                'signedMessage' => $request->signedMessage
            ]
        ]);
        $res = json_decode($response->getBody());

        if($res->verified && $res->verified == 1){
            Auth::login(User::firstOrCreate([
                'nautilus_address' => $request->address
            ]));
            return response()->json(['type' => 'success']);

        } else {
            return response()->json(['type' => 'FAIL']);
        }
    }
}