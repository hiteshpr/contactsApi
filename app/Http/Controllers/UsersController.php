<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

      $Users = Users::all();

      return $Users->toJson();

    }

     public function store(request $request)
    {	
       	$user= new Users;
    	
    	$user->name= $request->input('name');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request,$id) {
        $user = Users::find($id);

        $user->delete();

        return "User record successfully deleted #" . $request->input('id');
    }
}
