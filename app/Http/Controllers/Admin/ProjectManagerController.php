<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProjectManager;
use Auth;
use App\User;
use Input;
class ProjectManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('mustbeadministrator');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $project_managers = ProjectManager::all();
        return view('admin/projectmanager/list', ['user' => Auth::user(), 'project_managers' => $project_managers] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view('admin/projectmanager/register', ['user' => Auth::user()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
        $validator =  Validator::make($data, [
            'account' => 'required|unique:users',
            'name' => 'required',
            'code' => 'required|unique:users|numeric',
            'password' => 'required|confirmed',
            'email' => 'required|unique:users|email'
        ]);
        if ($validator->fails()) {
            return redirect('/project-managers/register/')->withInput()->withErrors($validator);
        }else{
            $user = User::create([
                'account' => $data['account'],
                'code' => $data['code'],
                'password' => bcrypt($data['password']),
                'email' => $data['email'],
                'name' => $data['name'],
            ]);
            ProjectManager::create([
                'user_id' => $user->id,
            ]);
            return redirect('/project-managers/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $project_manager = ProjectManager::find(intval($id));
        if(isset($project_manager))
            return view('admin/projectmanager/get', ['user' => Auth::user(), 'project_manager' => $project_manager] );
        return redirect('/project-managers/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $project_manager = ProjectManager::find(intval($id));
        if(isset($project_manager)){
            $data = $request->all();
            $validator =  Validator::make($data, [
                'code' => 'required|numeric',
                'name' => 'required',
                'email' => 'required|email'
            ]);
            if(!$validator->fails() && $data['code'] != $project_manager->user->code)
                $validator =  Validator::make($data, [
                    'code' => 'unique:users',
                ]);
            if(!$validator->fails() && $data['email'] != $project_manager->user->email)
                $validator =  Validator::make($data, [
                    'email' => 'unique:users',
                ]);
            if ($validator->fails())
                return redirect('/project-managers/update/'.$project_manager->id."/")->withInput()->withErrors($validator);
            $project_manager->user->code = $data['code'];
            $project_manager->user->name = $data['name'];
            $project_manager->user->email = $data['email'];
            $project_manager->user->save();
            return redirect('/project-managers/');
        }
        return redirect('/project-managers/');

    }
}
