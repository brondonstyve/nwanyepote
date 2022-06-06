<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PageArticleFronf extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $infosPage;
    public $type = 'Tout';
    public $search;


    public function mount($infosPage)
    {
        $this->infosPage = $infosPage;
    }

    public function getTypesProperty()
    {
        return DB::table('articles')
            ->select(DB::raw('count(domaine) as nombre'), 'domaine')
            ->groupBy('domaine')
            ->get();
    }

    public function getArticlesProperty()
    {

        if ($this->type == 'Tout') {
            return DB::table('articles')
                ->orderBy('created_at', 'desc')
                ->where([
                    ['titre', 'like', "%$this->search%"]
                ])
                ->paginate(6);
        } else {
            return DB::table('articles')
                ->whereDomaine($this->type)
                ->orderBy('created_at', 'desc')
                ->where([
                    ['titre', 'like', "%$this->search%"]
                ])
                ->paginate(6);
        }
    }

    public function render()
    {
        return view('livewire.page-article-fronf');
    }
}
