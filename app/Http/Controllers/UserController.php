<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function index(Request $request){
        $this->authorize('admin');

        $users = User::select("*")
            ->whereNotNull('last_seen')->orderBy('last_seen', 'DESC')->paginate(10);
              
        return view('admin.user', compact('users'),[
            'title' => 'User Online'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
