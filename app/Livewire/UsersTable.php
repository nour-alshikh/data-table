<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;

class UsersTable extends Component
{
    use WithPagination, LivewireAlert;

    #[Url(history: true)]
    public $perPage = 5;

    #[Url(history: true)]
    public $search = "";

    public $is_admin = "";

    public $userId;

    #[Url(history: true)]
    public $sortedBy = "created_at";

    #[Url(history: true)]
    public $sortedDir = "DESC";

    protected $listeners = [
        'confirmed'
    ];

    public function confirmed()
    {
        $user = User::findOrFail($this->userId);

        if ($user) {
            $user->delete();
            $this->alert('success', 'User Deleted Successfully', [
                'timer' => 1000
            ]);
            $this->reset("userId");
        }
    }

    public function delete(User $user)
    {

        $this->userId = $user->id;

        $this->alert('question', 'Are you sure you want to delete ' . $user->name . '?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yes',
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'toast' => false,
            "timer" => null,
            'position' => 'center',
            'allowOutsideClick' => true,
        ]);
    }

    public function setSort($sortedByField)
    {
        if ($this->sortedBy === $sortedByField) {
            $this->sortedDir = ($this->sortedDir === "DESC") ? "ASC" : "DESC";
            return;
        }

        $this->sortedBy = $sortedByField;
        $this->sortedDir = "DESC";
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.users-table', [

            'users' => User::search($this->search)
                ->when($this->is_admin !== "", function ($query) {
                    $query->role($this->is_admin);
                })
                ->orderBy($this->sortedBy, $this->sortedDir)
                ->paginate($this->perPage)

        ]);
    }
}
