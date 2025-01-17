<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class CarComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = "tailwind";
    public $addPage, $editPage = false;

    public $license, $brand, $type, $capacity, $price, $picture, $id, $currentPicture;

    public function render()
    {
        $data['car'] = Car::paginate(3);
        return view('livewire.car-component', $data);
    }

    public function create()
    {
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate([
            'license' => 'required',
            'brand' => 'required',
            'type' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $this->picture->storeAs('car', $this->picture->hashName(), 'public');

        Car::create([
            'user_id'=> auth()->user()->id,
            'license' => $this->license,
            'brand' => $this->brand,
            'type' => $this->type,
            'capacity' => $this->capacity,
            'price' => $this->price,
            'picture' => $this->picture->hashName()
        ]);

        session()->flash('success', 'Car created successfully');
        $this->reset();
    }

    public function destroy($id)
    {
        $find = Car::find($id);
        unlink(public_path('storage/car/' . $find->picture));
        $find->delete();

        session()->flash('success', 'Car deleted successfully');
        $this->reset();
    }

    public function edit($id)
    {
        $this->reset();
        
        $find = Car::find($id);
        $this->license = $find->license;
        $this->brand = $find->brand;
        $this->type = $find->type;
        $this->capacity = $find->capacity;
        $this->price = $find->price;
        $this->currentPicture = $find->picture; 
        $this->id = $find->id;
        $this->editPage = true;
    }

    public function update()
    {
        $this->validate([
            'license' => 'required',
            'brand' => 'required',
            'type' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $find = Car::find($this->id);

        if ($this->picture) {
            // Hapus gambar lama jika ada
            if (file_exists(public_path('storage/car/' . $this->currentPicture))) {
                unlink(public_path('storage/car/' . $this->currentPicture));
            }
            // Simpan gambar baru
            $this->picture->storeAs('car', $this->picture->hashName(), 'public');
            $find->update([
                'user_id'=> auth()->user()->id,
                'license' => $this->license,
                'brand' => $this->brand,
                'type' => $this->type,
                'capacity' => $this->capacity,
                'price' => $this->price,
                'picture' => $this->picture->hashName(), // Update dengan gambar baru
            ]);
        } else {
            $find->update([
                'user_id'=> auth()->user()->id,
                'license' => $this->license,
                'brand' => $this->brand,
                'type' => $this->type,
                'capacity' => $this->capacity,
                'price' => $this->price,
                'picture' => $this->currentPicture, // Tetap gunakan gambar lama
            ]);
        }

        session()->flash('success', 'Car updated successfully');
        $this->reset();
        $this->editPage = false;
    }
}
