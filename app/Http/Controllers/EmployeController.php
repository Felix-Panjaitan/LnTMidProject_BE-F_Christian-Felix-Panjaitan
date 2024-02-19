<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index(Request $request){
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    public function create(Request $request) {
        return view('employes.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required|min:5|max:20',
            'age'=>'integer|min:21',
            'address'=>'required|min:10|max:40',
            'phone'=>'regex:/^08\d+$/i|max:12',
        ]);

        $employe = new Employe;
        $employe->name = $request->name;
        $employe->age = $request->age;
        $employe->address = $request->address;
        $employe->phone = $request->phone;

        $employe->save();

        return redirect(route("employes.index"))->with('success','Employee created successfully!');
    }

    public function show(Request $request, $id) {
        $employe = Employe::find($id);
        return view('employes.show', compact('employe'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name'=>'required|min:5|max:20',
            'age'=>'integer|min:21',
            'address'=>'required|min:10|max:40',
            'phone'=>'regex:/^08\d+$/i|max:12',
        ]);

        $employe = Employe::find($id);
        $employe->name = $request->name;
        $employe->age = $request->age;
        $employe->address = $request->address;
        $employe->phone = $request->phone;

        $employe->save();

        return redirect(route("employes.index"))->with('success','Employee updated successfully!');
    }

    public function delete(Request $request, $id) {
        $employe = Employe::find($id);

        $employe->delete();
        return redirect(route("employes.index"))->with('success','Employee deleted successfully!');
    }
}
