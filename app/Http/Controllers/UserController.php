<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            \DB::beginTransaction();
            $users = User::all();
            \DB::commit();

        }catch (\Exception $e){
            \DB::rollBack();
            return redirect()->route('pages.home')->with('error', "Please try again later.");
        }
        $this->data['users'] = $users;
        return view('panel.users', $this->data)->with('succ','All users are loaded.');;
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
    public function show(User $user)
    {
        $this->data['user']=$user;
        return view('panel.user.edit',$this->data);
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
        try{
            $user = User::find($id);
            $user->update(['nameMenu'=>$request->name]);
            $user->update(['descMenu'=>$request->desc]);
            $user->update(['altMenu'=>$request->alt]);
            $user->update(['price'=>$request->price]);
            $user->update(['type'=>$request->type]);
            $user->update(['visible'=>$request->visible]);
            $user->save();
            return redirect()->route('users');
        }catch (\Exception $e){
            return redirect()->route('users')->with('error', "Please try again later.");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->active){
            $user->update(["active"=>false]);
        }else{
            $user->update(["active"=>true]);
        }
        $user->save();
        return redirect()->route('users');
    }
}
