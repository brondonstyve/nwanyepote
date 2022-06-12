<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\article;
use App\Models\pageArticle;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageArticle extends Component
{

    use WithFileUploads;
    public pageArticle $pageArticle;
    public article $article;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $messsage;
    public $erreur = false;
    public $supp;
    public $modification;
    public $imageVue;
    public $collapse = 'collapse';
    public $image;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;


    protected $rules = [
        'pageArticle.titre1' => '',
        'pageArticle.description1' => '',
        'pageArticle.titre2' => '',
        'pageArticle.description2' => '',

        'article.titre' => 'required',
        'article.domaine' => 'required',
        'article.auteur' => 'required',
        'article.desc_auteur' => 'required',
        'article.titre1' => '',
        'article.article1' => '',
        'article.video1' => '',
        'article.titre2' => '',
        'article.article2' => '',
        'article.video2' => '',
        'article.titre3' => '',
        'article.article3' => '',
        'article.video3' => '',
        'article.titre4' => '',
        'article.article4' => '',
        'article.video4' => '',
        'article.titre5' => '',
        'article.article5' => '',
        'article.video5' => '',
        'article.titreSeo' => '',
        'article.descriptionSeo' => ''

    ];



    public function mount()
    {
        $reponse = pageArticle::get();

        $this->article = article::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;

        if (sizeOf($reponse) != 0) {
            $this->pageArticle = pageArticle::make();
            $this->pageArticle = pageArticle::first();
        } else {
            $this->pageArticle = pageArticle::make();
        }
    }

    public function save()
    {

        $reponse = pageArticle::count();

        if ($reponse == 0) {


            pageArticle::where([
                ['id', '<>', 0]
            ])
                ->delete();
            $this->pageArticle->save();
            $this->message = 'Parramétrage  enregistré avec succès';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } else {

            $this->pageArticle->save();
            $this->message = 'Parramétrage mis à jour avec succès';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        }
    }


    public function updatedarticle()
    {
        $this->collapse = "";
    }

    public function updatedImage1()
    {
        if (sizeOf($this->image1) > 4) {
            $this->image1 = null;
            $this->fill(['image1' => null]);
            session()->flash('image1', 'Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse = '';

        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage2()
    {
        if (sizeOf($this->image2) > 4) {
            $this->image2 = null;
            $this->fill(['image2' => null]);
            session()->flash('image2', 'Vous ne pouvez télécharger que 4 images maximun');
        }
        $this->collapse = '';
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage3()
    {
        if (sizeOf($this->image3) > 4) {
            $this->image3 = null;
            $this->fill(['image3' => null]);
            session()->flash('image3', 'Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse = '';
        $this->validate([
            'image3' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage4()
    {
        if (sizeOf($this->image4) > 4) {
            $this->image4 = null;
            $this->fill(['image4' => null]);
            session()->flash('image4', 'Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse = '';
        $this->validate([
            'image4' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage5()
    {
        if (sizeOf($this->image5) > 4) {
            $this->image5 = null;
            $this->fill(['image5' => null]);
            session()->flash('image5', 'Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse = '';
        $this->validate([
            'image5' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage()
    {
        $this->collapse = '';
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function getArticlesProperty()
    {
        return article::orderBy('id', 'desc')->get();
    }

    public function saveArt()
    {
        ini_set('memory_limit', '-1');
        if (env('IS_DEMO')) {
            $this->showDemoNotification1 = true;
        } else {

            try {
                if ($this->image) {
                    $this->article->image = Image::traitement($this->image, 'png', 'article');
                }

                if ($this->image1) {
                    $this->article->image1 = null;
                    foreach ($this->image1 as $key => $value) {
                        $this->article->image1 = $this->article->image1 . '<-->' . Image::traitement($value, 'png', 'article');
                    }
                }

                if ($this->image2) {
                    $this->article->image2 = null;
                    foreach ($this->image2 as $key => $value) {
                        $this->article->image2 = $this->article->image2 . '<-->' . Image::traitement($value, 'png', 'article');
                    }
                }

                if ($this->image3) {
                    $this->article->image3 = null;
                    foreach ($this->image3 as $key => $value) {
                        $this->article->image3 = $this->article->image3 . '<-->' . Image::traitement($value, 'png', 'article');
                    }
                }

                if ($this->image4) {
                    $this->article->image4 = null;
                    foreach ($this->image4 as $key => $value) {
                        $this->article->image4 = $this->article->image4 . '<-->' . Image::traitement($value, 'png', 'article');
                    }
                }

                if ($this->image5) {
                    $this->article->image5 = null;
                    foreach ($this->image5 as $key => $value) {
                        $this->article->image5 = $this->article->image5 . '<-->' . Image::traitement($value, 'png', 'article');
                    }
                }
            } catch (\Throwable $th) {
                $this->message = 'erreur lors du traitement des images.';
                $this->showSuccesNotification1 = false;
                $this->showErrorNotification1 = true;
                $this->erreur = true;
            }

            if (!$this->erreur) {
                if ($this->modification == null) {

                    try {
                        $this->validate();
                        $this->article->save();
                        $this->article = article::make();
                        $this->message = 'article ajouté avec succès.';
                        $this->showSuccesNotification1 = true;
                        $this->showErrorNotification1 = false;
                        $this->modification = null;
                        $this->image1 = null;
                        $this->image2 = null;
                        $this->image3 = null;
                        $this->image4 = null;
                        $this->image5 = null;
                        $this->image = null;
                        $this->collapse = 'collapse';
                    } catch (\Throwable $th) {
                        $this->showErrorNotification1 = true;
                        $this->showSuccesNotification1 = false;

                        $this->message = $th . 'Erreur lors de l\'enregistrement de l\'article.Veuillez recommencer!';
                    }
                } else {


                    try {
                        $this->validate();
                        $this->article->save();
                        $this->article = article::make();
                        $this->message = 'article modifiée avec succès.';
                        $this->showSuccesNotification1 = true;
                        $this->showErrorNotification1 = false;
                        $this->modification = null;
                        $this->image = null;
                        $this->image1 = null;
                        $this->image2 = null;
                        $this->image3 = null;
                        $this->image4 = null;
                        $this->image5 = null;
                        $this->collapse = 'collapse';
                    } catch (\Throwable $th) {
                        $this->showErrorNotification1 = true;
                        $this->showSuccesNotification1 = false;

                        $this->message = 'Erreur lors de la modification de l\'article.Veuillez recommencer!';
                    }
                }
            }
        }
    }


    public function delete($id)
    {

        $reponse = article::find($id);
        for ($i = 1; $i < 6; $i++) {
            File::delete(public_path("/app/article/image$i"));
        }

        try {
            $reponse = article::destroy($id);
            article::make();
            $this->message = 'article supprimé avec succès.';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification1 = true;
            $this->showSuccesNotification1 = false;
            $this->message = 'Erreur lors de la suppression!';
        }
    }

    public function update($id)
    {
        $this->imageVue = null;
        $this->image = null;
        $this->image1 = null;
        $this->image2 = null;
        $this->image3 = null;
        $this->image4 = null;
        $this->image5 = null;
        $this->article = article::find($id);
        $this->modification = 2;
        $this->imageVue = $this->article->image;
        $this->imageVue1 = $this->article->image1;
        $this->imageVue2 = $this->article->image2;
        $this->imageVue3 = $this->article->image3;
        $this->imageVue4 = $this->article->image4;
        $this->imageVue5 = $this->article->image5;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->collapse = "";
    }

    public function annuler()
    {

        $this->message = null;
        $this->collapse = 'collapse';
        $this->modification = false;
        $this->article = article::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
    }


    public function removeImage($libelle, $keyRemove, $item)
    {
        $reset = collect(explode('<-->', $this->article->$libelle));
        $reset = $reset->forget($keyRemove);
        File::delete(public_path("/app/article/$item"));
        $this->article->$libelle = null;
        foreach ($reset as $key => $value) {
            $this->article->$libelle = $this->article->$libelle . '<-->' . $value;
        }
        $this->article->save();
    }
    public function render()
    {
        return view('livewire.admin-page-article');
    }
}
