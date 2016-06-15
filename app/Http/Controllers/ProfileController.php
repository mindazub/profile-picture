<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function profile() {
    	return view('layouts.profile', array('user' => Auth::user()) );
    }
    public function update(Request $request) {
    	// handle upload
    	if($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		//$avatar_path = $avatar->getRealPath();

    		$filename = time() . '.' . $avatar->getClientOriginalExtension();

    		Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

    		//$avatar = $request->file('avatar');

    		$user = Auth::user();

    		$user->avatart = $filename;

    		$user->save();
    		
    	}
    	return view('layouts.profile', array('user' => Auth::user()) );
    }
}
