<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForUser;
use App\Photos;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $var=User::all();
        return view('admin.user.index',compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $var=Role::all('role_name','id');
        //return $var;
        return view('admin.user.create',compact('var'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForUser $request)
    {
        //
        $var=new User();
        $var->name=$request->name;
        $var->email=$request->email;
        $var->role_id=$request->role;
        $var->is_active=$request->status;
        if($userimagefile=$request->file('userimage'))
        {
          $name=$userimagefile->getClientOriginalName();

          $userimagefile->move('public/images',$name);

          $insertintophototable=Photos::create(['image'=>$name]);
            $var->photo_id=$insertintophototable->id;
        }

        //return $request->all();

        //$var=User::create($request->all());


        $var->save();
        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //return "hy this iss from eidt fun";
        $user=User::findOrfail($id);
        $userrole=Role::all();
        //dd($user);
        return view('admin.user.edit',compact('user','userrole'));
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
