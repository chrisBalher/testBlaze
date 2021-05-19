<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlazeUser;

class UserController extends Controller
{
    public function index(){
        $users = BlazeUser::paginate(10);
        return view('welcome', compact( 'users' ) );
    }
    public function create(){
        return view('addUser');
    }
    public function store(Request $request ){
        BlazeUser::create( $request->all() );
        return redirect( to: '/' );
    }
    public function delete($id){
        $user = BlazeUser::find($id);
        $user->delete();
        return back(); 
    }
    public function edit($id){
        $user = BlazeUser::find($id);
        return view('editUser')->with("user", $user);
    }
    public function update(Request $request, $id ){
        $user = BlazeUser::find($id);
        $user->update($request->all());
        return redirect(to: '/');
    } 
}
