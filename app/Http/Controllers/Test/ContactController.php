<?php

namespace App\Http\Controllers\Test;

use App\Http\Requests\ContactRequest;
use App\Models\BCATestConfig;
use App\Models\BCATestContact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = \MessageContact::TITLE_INDEX;
        $listConfig = $this->processDataConfig();
        return view('test.contact', compact('title', 'listConfig'));
    }

    /**
     * @return array
     */
    private function processDataConfig(){
        $listConfig = BCATestConfig::all();
        $dataProcess = [];
        foreach ($listConfig as $config){
            $dataProcess[$config->slug] = $config->value;
        }
        return $dataProcess;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = new BCATestContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        if ($contact->save()){
            $message = ['level' => 'success', 'flash_message' => \MessageContact::SEND_SUCCESS];
        }else{
            $message = ['level' => 'danger', 'flash_message' => \MessageContact::SEND_FAILED];
        }
        return redirect('contact')->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = \MessageContact::TITLE_INDEX;
        $listContact = BCATestContact::all();
        return view('admin.contact.index', compact('title', 'listContact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=0)
    {
        $contact = BCATestContact::find($id);
        if ($contact == null){
            $message = ['level' => 'danger', 'flash_message' => \MessageContact::CONTACT_DOES_NOT_EXIST];
        }else{
            if($contact->delete()){
                $message = ['level' => 'success', 'flash_message' => \MessageContact::DELETE_SUCCESS];
            }else{
                $message = ['level' => 'danger', 'flash_message' => \MessageContact::DELETE_FAILED];
            }
        }
        return redirect('dashboard/contact')->with($message);
    }
}
