<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $menus = Menu::paginate(9);
            $this->data["menus"] = $menus;
            return view('pages.menu', $this->data);
        }catch (\Exception $e){
            return redirect()->route('home')->with('error', "Please try again later.");
        }
        return view('pages.menu', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            \DB::beginTransaction();
            $menus = Menu::all();
            \DB::commit();
        }catch (\Exception $e){
            \DB::rollBack();
            return redirect()->route('pages.home')->with('error', "Please try again later.");
        }
        $this->data['menus'] = $menus;
        return view('panel.menus', $this->data)->with('succ','All menus are loaded.');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new Menu();
        $location = public_path("images/");
        $image = $request->file("img");
        $fileName = time().$image->getClientOriginalName();
        $image->move($location, $fileName);
        $m->nameMenu = $request->name;
        $m->descMenu = $request->desc;
        $m->imageMenu = $fileName;
        $m->altMenu = $request->alt;
        $m->price = $request->price;
        $m->type = $request->type;
        $m->visible = $request->input('visible');
        $m->save();
        return redirect()->route('menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $this->data['menu']=$menu;
        return view('panel.menu.edit',$this->data);
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
            $menu = Menu::find($id);
            $menu->update(['nameMenu'=>$request->name]);
            $menu->update(['descMenu'=>$request->desc]);
            $menu->update(['altMenu'=>$request->alt]);
            $menu->update(['price'=>$request->price]);
            $menu->update(['type'=>$request->type]);
            $menu->update(['visible'=>$request->visible]);
            $menu->save();
            return redirect()->route('panel.menus');
        }catch (\Exception $e){
            return redirect()->route('menus')->with('error', "Please try again later.");
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
        $menu = Menu::find($id);
        if($menu->visible){
            $menu->update(["visible"=>false]);
        }else{
            $menu->update(["visible"=>true]);
        }
        $menu->save();
        return  redirect()->route('menus');
    }
}
