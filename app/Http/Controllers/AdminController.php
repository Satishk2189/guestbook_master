<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserClaim;


class AdminController extends Controller
{
    public function viewClaims()
    {
		$claims = UserClaim::whereIn('status', array(0, 1))->orderBy('id', 'DESC')->paginate(5);;
		$count = $claims->total();
		return view('viewClaims', array(
            'claims' => $claims,
			'count' => $count,
        ));
        

    }
	
	public function deleteClaim($id){
		
		$claim = UserClaim::where('id', $id)->first();
        if ($claim) {
            $claim->status = 3;
           try {
                $claim->save();
                return redirect()->back()->with(['message' => 'Claim Deleted']);
            } catch (\Throwable $th) {
                return redirect()->back()->with(['message' => $th]);
            }
        }
        return redirect()->route('viewClaims');
	}	
	public function statusUpdate($id){
		
		$claim = UserClaim::where('id', $id)->first();
        if ($claim) {
			if($claim->status ==0){
				$claim->status = 1;
			}else{
				$claim->status = 0;
			}
            
           try {
                $claim->save();
                return redirect()->back()->with(['message' => 'Claim Deleted']);
            } catch (\Throwable $th) {
                return redirect()->back()->with(['message' => $th]);
            }
        }
        return redirect()->route('viewClaims');
	}
}
