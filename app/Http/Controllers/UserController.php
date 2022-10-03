<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Models\UserClaim;

class UserController extends Controller
{
	    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'description' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'integer', 'min:1'],
        ]);
    }
	
    /**
     * @param Request $request
     */
    public function saveNewClaim(Request $request)
    {
        UserClaim::create([
            'description' => $request->description,
            'amount' => $request->amount,
            'user_name' => $request->amount,

        ]);

        return Redirect::back()->with('message', 'Successful !');
    }
}
