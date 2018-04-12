<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {

      Log::info('Showing user profile for user: ');
      Log::info(Auth::id());
      // better to move the view in user view folder
      return view('auth.profil', ['user' => User::findOrFail(Auth::id())]);

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {
      // Find the current authenticated user object
      $user = User::find($request->user()->id);
      // if input name exists in the request replace name in the user object
      if ($request["name"]) {
          $this->validate($request, [
              'name' => 'max:255|required'
          ]);
          $user->name = $request["name"];
      }
      // if input password exists in the request replace password in the user object
      if ($request["password"]) {
          $this->validate($request, [
              'password' => 'min:8|required'
          ]);
          $user->password = bcrypt($request["password"]);
      }
      $user->save();
      Session::flash('message', "Profile Successfully Updated!");
      return redirect()->back();
    }

}
