<?php

namespace App\Repository\Product;

use App\Contracts\Product\ProductInterface;
use App\Contracts\Ruangan\EmployeeHasRoomInterface;
use App\Models\Product;
use App\Models\Student;

class ProductRepo implements ProductInterface
{
    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return Product::updateOrCreate([
            'id' => $attributes['id'] ?? null
        ], [
            'name' => $attributes['name'],
            'price' => $attributes['price'],
            'ruangan_id' => $attributes['ruangan_id']
        ]);
    }

    public function index(array $attributes)
    {
        $user = auth()->user();

        // Jika tidak ada user login, kembalikan produk kosong atau bisa throw error
        if (!$user || !$user->userReference) {
            return Product::get(); // atau bisa juga return [];
        }

        if ($user->userReference->reference_type == Student::class) {
            return Product::get();
        } else {
            return Product::with('room')
                ->whereHas('room.employeeHasRoom', function ($q) use ($user) {
                    $q->where("employee_id", $user->userReference->reference_id);
                })->get();
        }
    }
}
