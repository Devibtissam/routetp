<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

  public function getContacts(){
    return array(
        [
        "id"=>1,
        "name"=>'Johne Doe',
        "phone"=>'212645102430',
        'email'=>'john@email.com',
        'company'=> 'company one'
        ],
        [
            "id"=> 2,
            "name"=>'Sara Doe',
            "phone"=>"21265487123",
            'email'=>'sara@test.com',
            'company'=>'company two'
        ]
        );

  }

   public function index(){
    $data = $this->getContacts();
    return view('contacts/index' ,compact('data'));
   }

   public function show($id){
    $data = $this->getContacts();

    
    $contact= array_filter($data, function($item) use($id){
            return $item['id'] == $id;
        });

    return view('contacts/show', ['contact'=> $contact]);


   }
}
