<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::get()->tojson();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( UserStoreRequest $request)
    {
        try {

            $user = new User();
            $user->name = $request->input( 'name');
            $user->first_name = $request->input( 'first_name');
            $user->email = $request->input( 'email');
            $user->save( $user->toArray());
            $user->groupes()->sync([$request->input('groupe_id')]);

            return  response()->json(['status' => true, 'message' => 'Insertione ffectuée avec succées']);
        } catch (\Exception $e) {
            return  response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function update( UserUpdateRequest $request, User $user)
    {
        try {

            $user->update($request->all());

            return  response()->json(['status' => true, 'message' => 'Edition effectuée avec succées']);
        } catch (\Exception $e) {
            return  response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function isActif(User $user)
    {
        $resuls = $user->actif ? true : false;
        return response()->json(['actif' => $resuls]);
    }
}
