<?php

namespace Apptotem\Http\Controllers;

use Apptotem\User_movil As Usermovil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserMovilController extends Controller
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
    public function store(Request $request, Usermovil $user_movil)
    {
        if(Usermovil::find($request->input('Phone'))){
            return ['error_msg' => 'User already existed with '.$request->input('Phone')];
        }
        else{
            //Usermovil::create($request->all());
            return Usermovil::create($request->all());
            //*return ['created' => true];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Apptotem\Usermovil  $user_movil
     * @return \Illuminate\Http\Response
     */
    public function show($phone, Usermovil $user_movil)
    {
        //?return ['result' => $user_movil->find($phone)];
        //?return $user_movil->find($phone);
        if ($user_movil->find($phone)){
            return $user_movil->find($phone);
         }else{
            return ['error_msg' => 'User not registerd with '.$phone];
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Apptotem\User_movil  $user_movil
     * @return \Illuminate\Http\Response
     */
    public function edit(User_movil $user_movil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Apptotem\User_movil  $user_movil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usermovil $user_movil)
    {
        $usermovil = $user_movil->find($request->input('Phone'));
        $user_movil->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\User_movil  $user_movil
     * @return \Illuminate\Http\Response
     */
    public function destroy($phone, Usermovil $user_movil)
    {
        $user_movil->destroy($phone);
        return Response::json(['exists' => TRUE],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Apptotem\User_movil  $user_movil
     * @return \Illuminate\Http\Response
     */
    public function checkuser(Request $request)
    {
        if ($request->isMethod('post')) {
            if (Usermovil::find($request->input('Phone'))){
                return Response::json(['exists' => TRUE],200);
            }else{
                return Response::json(['exists' => FALSE],200);
            }
        }else{
            return Response::json(['error_msg' => 'Required parameter (phone) is missing!'],200);
        }


    }
}
