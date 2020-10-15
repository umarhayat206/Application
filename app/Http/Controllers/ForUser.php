<?php

namespace App\Http\Controllers;

use App\Photos;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class ForUser extends Controller
{
    //

    public function index()
    {
        $var=User::all();
        return view('admin.user.index',compact('var'));
    }
    public function create()
    {
        $var=Role::all('role_name','id');
        //return $var;
        return view('admin.user.create',compact('var'));
    }
    public function Store(Request  $request)
    {
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

    public function edit($id)
    {
        //
        //return "hy this iss from eidt fun";
        $user=User::findOrfail($id);
        $userrole=Role::all();
        //dd($user);
        return view('admin.user.edit',compact('user','userrole'));

    }
    public function update(Request $request,$id)
    {
       //return "hy this is from update ";
        $user=User::findorfail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role_id=$request->role;
        $user->is_active=$request->status;
        if($userimagefile=$request->file('userimage'))
        {
            $name=$userimagefile->getClientOriginalName();

            $userimagefile->move('public/images',$name);

            $insertintophototable=Photos::create(['image'=>$name]);
            $user->photo_id=$insertintophototable->id;
        }
       $user->save();
        return redirect('admin/user');
    }
    public function destroy($id)
    {
        $user=User::findorfail($id);
        $user->delete();
        return redirect('admin/user');
    }
}
