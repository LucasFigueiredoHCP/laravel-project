<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class homeController extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function storeForm(Request $request){
        $input = $request->all(); 
        $form = form::create($input);
        $id = form::all()->max('id'); 
        $form = form::where('id',$id)->get(); 
        return view('formSucess', compact('form'));
    }

    public function list(){
        return view('list');
    }
    public function dataList(){
         $nome = form::all();    //data from posts table (must have the same name that data class)
         return view('list',compact('nome'));
    }

    public function alterar($id){
        $selectedUser = form::where('id', $id)->get(); // This variable get the data by id
        return view('alterar', compact('selectedUser')); //This 'return' return the view compacted with the data in variable
    }

    public function delete($id){
        $selectedUser = form::where('id', $id)->get(); // This variable get the data by id
        return view('delete', compact('selectedUser')); //This 'return' return the view compacted with the data in variable
    }

    public function deleteForm($id, Request $request){
        $input = $request->all(); // This input variable make a request by specify data in database
        $form = form::find($id); // This variable find the specify data in dataBase
        $form->delete(); // This variable delte the specify data in dataBase
        $nome = form::all(); //Data from posts table (must have the same name that data class)
        return view('list',compact('nome')); // Return the list view with the new datas again
    }

    public function alterarForm($id, Request $request){
        $input = $request->all(); // This input variable make a request by specify data in database
        $form = form::find($id); // This variable find the specify data in dataBase
        $form->update($input); // This variable make the data update in database after the user change
        $nome = form::all();    // Data from posts table (must have the same name that data class)
        return view('list',compact('nome')); // Return the list view with the new datas again
    }
}
