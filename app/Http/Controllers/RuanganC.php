<?php

namespace App\Http\Controllers;

use App\Models\EmployeeHasRoom;
use App\Repository\Employee\EmployeeRepo;
use App\Repository\Ruangan\EmployeeHasRoomRepo;
use App\Repository\Ruangan\RuanganRepo;
use Illuminate\Http\Request;

class RuanganC extends Controller
{
    public function __construct(
        protected EmployeeHasRoomRepo $__repo_room,
        protected RuanganRepo $__repo_ruangan,
        protected EmployeeRepo $__repo_employee
    ) {}

    public function index(Request $req)
    {
        $rooms = $this->__repo_ruangan->index(request()->all());
        return view('pages.room_management.tampilR', compact('rooms'));
    }

    public function store(Request $req)
    {
        $room = $this->__repo_ruangan->store(request()->all());
        return redirect()->route('room_management.room.tampilR');
    }

    public function tambahR(Request $req)
    {
        return view('pages.room_management.tambahR');
    }

    public function employeeToRoom(Request $req){
        $this->__repo_room->store(request()->all());
        return redirect()->route('room_management.room.tampilR');
    }

    public function viewEmployeeToRoom(Request $req){
        $employees = $this->__repo_employee->index(request()->all());
        return view('pages.room_management.choose_employee', compact('employees'));
    }
}
