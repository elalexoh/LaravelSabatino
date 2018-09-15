<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ApiContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listContacts($id)
    {
         try {
            $objContacts=new Contact();
            $data=$objContacts->where('user_id',$id)->get()->all();
             return response()->json( [ 'msg' => 'Operacion Satisfactoria', 'data'=>$data ],200);
        } catch(\Illuminate\Database\QueryException $ex){
 
            \Log::error('Error al crear contacto LINE: '.$ex->getLine().' FILE: '.$ex->getFile().'Message: '.$ex->getMessage());
             return response()->json( [ 'msg' => 'Error al consultar contacto', 'data'=>array() ],500);
        }
 
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
