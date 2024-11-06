<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search_guest(request $request)
    {
        $result = Guest::where('first_name', 'like', '%' . $request->search . '%')
        ->orWhere('last_name', 'like', '%' . $request->search . '%')
        ->orWhere('phone_number', 'like', '%' . $request->search . '%')
        ->orWhere('email', 'like', '%' . $request->search . '%')
        ->orWhere('address', 'like', '%' . $request->search . '%')
        ->get();

        if($result){
            return redirect()->back()->with(["result"=>$result]);
        }
        else{
            return redirect()->back()->withErrors(["message"=>"there is no guest with these information"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_guest_form()
    {
        return view("add_guest");
    }
    public function add_guest_data(Request $request)
    {
        $request->validate([
            "first_name"=>"required|string",
            "last_name"=>"required|string",
            "email "=>"required|email|unique:guests",
            "phone_number "=>"required|numeric|unique:guests",
            "address "=>"required|string",
        ]);
        
        $guest= new Guest();
        $guest->first_name=$request->first_name;
        $guest->last_name=$request->last_name;
        $guest->email=$request->email;
        $guest->phone_number=$request->phone_number;
        $guest->address=$request->address;
        $guest->save();

        return redirect()->back()->with(["message"=>"new guest added successfully"]);

    }


    
    public function show_guest_profile($guest_id)
    {
        $guest=Guest::findOrFail($guest_id)->first();
        return view("guest_profiel",["guest_data"=>$guest]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $guest_id)
    {
        $guest = Guest::findOrFail($guest_id);

        $validatedData = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => [
                'nullable',
                'email',
                'max:255',
            ],
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        // Update user data
        $guest->update(array_filter($validatedData));
    //return to user profile with message guest information updated succesfully
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_guest($guest_id)
    {
        $guest=Guest::findOrFail($guest_id);
        $guest->delete();

        //return to guests page with message guest deleted successfully
    }
}
