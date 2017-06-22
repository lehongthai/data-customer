<?php

namespace App\Http\Controllers\Test;

use App\Http\Requests\ConfigRequest;
use App\Models\BCATestConfig;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = \MessageTestConfig::TITLE_INDEX;
        $listConfig  = BCATestConfig::getConfig();
        return view('admin.config.index', compact('listConfig', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = \MessageTestConfig::TITLE_CREATE;
        return view('admin.config.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigRequest $request)
    {
        $config = new BCATestConfig();
        $config->name = $request->name;
        $config->slug = $request->slug;
        $config->value = $request->value;
        $config->user_id = Auth::user()->id;
        if ($config->save()){
            $message = ['level' => 'success', 'flash_message' => \MessageTestConfig::CREATE_SUCCESS];
        }else{
            $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::CREATE_FAILED];
        }
        return redirect('dashboard/config/index')->with($message);
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
    public function edit($id=0)
    {
        $title = \MessageTestConfig::TITLE_EDIT;
        $config = BCATestConfig::find($id);
        if ($config == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::CONFIG_DOES_NOT_EXIST];
            return redirect('dashboard/config/index')->with($message);
        }
        return view('admin.config.update', compact('config', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ConfigRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigRequest $request, $id=0)
    {
        $config = BCATestConfig::find($id);
        if ($config == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::CONFIG_DOES_NOT_EXIST];
            return redirect('dashboard/config/index')->with($message);
        }
        $config->name = $request->name;
        $config->slug = $request->slug;
        $config->value = $request->value;
        $config->user_id = Auth::user()->id;
        if ($config->save()){
            $message = ['level' => 'success', 'flash_message' => \MessageTestConfig::UPDATE_SUCCESS];
        }else{
            $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::UPDATE_FAILED];
        }
        return redirect('dashboard/config/index')->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=0)
    {
        $config = BCATestConfig::find($id);
        if ($config == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::CONFIG_DOES_NOT_EXIST];
        }else{
            if($config->delete()){
                $message = ['level' => 'success', 'flash_message' => \MessageTestConfig::DELETE_SUCCESS];
            }else{
                $message = ['level' => 'danger', 'flash_message' => \MessageTestConfig::DELETE_FAILED];
            }
        }
        return redirect('dashboard/config/index')->with($message);
    }
}
