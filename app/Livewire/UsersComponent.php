<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class UsersComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = "tailwind";
    public $addPage, $editPage = false;

    public $name, $email, $password, $role, $id;

    public function render()
    {
        $data['user'] = User::paginate(3);
        return view('livewire.users-component', $data);
    }

    public function create()
    {
        $this->reset();
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password'=> Hash::make($this->password),
            'role' => $this->role
        ]);

        session()->flash('success', 'User created successfully');
        $this->reset();
    }

    public function destroy($id)
    {
        $find = User::find($id);
        $find->delete();
        session()->flash('success','User deleted successfully');
        $this->reset(); 
    }

    public function edit($id)
    {
        $this->reset();
        
        $find = User::find($id);
        $this->name = $find->name;
        $this->email = $find->email;
        $this->role = $find->role;
        $this->id = $find->id;
        $this->editPage = true;
    }

    public function update()
    {
        $find = User::find($this->id);
        if ($this->password == "")
        {
            $find->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
            ]);
        } else {
            $find->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => $this->role,
            ]);
        }

        session()->flash('success','User updated successfully');
    }
}
