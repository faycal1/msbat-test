<?php

namespace App\Http\Controllers;

use App\Groupe;
use App\Http\Requests\GroupeStoreRequest;
use App\Http\Requests\GroupeUpdateRequest;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Groupe::with('users')->get()->tojson();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( GroupeStoreRequest $request)
    {
        try {

            Groupe::insert( $request->all());

            return  response()->json(['status'=>true, 'message'=>'Insertioneffectuée avec succées']);

        } catch (\Exception $e) {
            return  response()->json(['status' => false, 'message' => $e->getMessage()]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show( Groupe $groupe)
    {
       return response()->json( $groupe) ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $groupe
     * @return \Illuminate\Http\Response
     */
    public function update( GroupeUpdateRequest $request, Groupe $groupe)
    {
        try {

            $groupe->update($request->all());


            return  response()->json(['status' => true, 'message' => 'Edition effectuée avec succées']);
        } catch (\Exception $e) {
            return  response()->json(['status' => false, 'message' => $e->getMessage()]);
        }

    }


}
