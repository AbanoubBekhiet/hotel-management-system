<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Rooms";
        $data['rooms'] = Room::getRooms();
        $data['canEdit'] = Auth::user()->role == 'admin';
        return view('room.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Add New Room";
        return view('room.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        Room::create($request->validated());
        return redirect('admin/room/list')
            ->with('success', 'Room Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id, Room $room)
    {
        $data['title'] = 'Edit Room';
        $data['room'] = Room::findOrFail($id);
        return view('room.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, RoomRequest $request, Room $room)
    {
        $room = Room::findOrFail($id);
        $room->update($request->validated());
        return redirect('admin/room/list')
            ->with('success', 'Room Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id, Room $room)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()
            ->back()
            ->with('success', 'Room Successfully Deleted');
    }
}
