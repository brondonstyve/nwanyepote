<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\client;
use Livewire\Component;
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    
    public function getClientProperty(){
        return client::orderBy('id','desc')
        ->paginate(30);
    }
    public function render()
    {
        return view('livewire.laravel-examples.user-management');
    }
} 
