<?php

namespace App\Http\Livewire;

use App\Models\commande;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCommandeBoutique extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $flashType='';
    public $liste=true;
    public $supp;
    public $livreur=false;
    public $com;
    public $tab=[];
    public $what='tout';
    public $search='';
    public $searchLivreur='';
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $messsage;

//'commandes.status'


    public function wath($val){
        $this->what=$val;
        $this->livreur=false;
        $this->liste=true;
        $this->com=null;
    }


    public function getPostProperty()
    {

        switch ($this->what) {
            case 'tout':
                return( DB::table('commandes')
                ->select(DB::raw('SUM(commandes.montant) as montant'),'commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                ->groupBy('commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                ->orderBy('commandes.created_at','desc')
                ->where('commandes.codeCom','like',"%$this->search%")
                ->paginate(50));
                break;
            
                case 'livre':
                    return( DB::table('commandes')
                    ->select(DB::raw('SUM(commandes.montant) as montant'),'commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                    ->groupBy('commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                    ->orderBy('commandes.created_at','desc')
                    ->whereStatus(true)
                    ->where('commandes.codeCom','like',"%$this->search%")
                    ->paginate(50));
                    break;

                    case 'nlivre':
                        return( DB::table('commandes')
                        ->select(DB::raw('SUM(commandes.montant) as montant'),'commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                        ->groupBy('commandes.montant_total','commandes.codeCom','commandes.nom','commandes.created_at','commandes.adresse','commandes.status')
                        ->orderBy('commandes.created_at','desc')
                        ->where('commandes.codeCom','like',"%$this->search%")
                        ->whereStatus(false)
                        ->paginate(50));
                        break;
        }

        
    }

    public function statut($id){
        $reponse=commande::where([
            ['CodeCom',$id]
            ])->get();
            $statut=$reponse[0]->status;
            $email=User::find($reponse[0]->compte)->email;
            try {
                foreach ($reponse as $key => $value) {


                    commande::whereId($value->id)
                    ->update([
                        'status'=>!$value->status
                    ]);
                    
                    }
                    if ($statut==true) {
                        $details = [
                            'title' => "Confirmation de livraison de commande",
                        ];
                       
                        Mail::to($email)
                        ->send(new \App\Mail\confirmationCommande($details));

                        $this->message ="commande validé avec succès";
                        $this->showSuccesNotification = true;
                        $this->showErrorNotification = false;
                    }else{
                        $this->message ="commande désactivé avec succès";
                        $this->showSuccesNotification = true;
                        $this->showErrorNotification = false;
                    }
                    
                    
            } catch (\Throwable $th) {
                $this->message ="erreur lors la validation de la commande";
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
            }
            

    }
    

    public function confSupp($id){
        $this->supp=$id;
    }

    public function supprimer($id){
        
        $this->message ="Impossible de supprimer cette commande car elle est déja payée";
        $this->showSuccesNotification = false;
        $this->showErrorNotification = true;
        $this->supp=null;
        /*$reponse=commande::where([
            ['CodeCom',$id]
            ])->delete();
        if ($reponse) {
            $this->flashType='success';
            Flash::message($this->flashType,'Suppression éffectuée avec succès');
        }else{
            $this->flashType='danger';
            Flash::message($this->flashType,'Erreur!');
        }*/
    }

    public function voir($id){
        $reponse=commande::join('produits','produits.id','commandes.produit')
        ->where([
            ['CodeCom',$id]
            ])->get();
    }

    public function assignerLivreur($id){
        $this->com=$id;
        $this->livreur=true;
        $this->liste=false;
    }

    public function retirerLivreur($id){
        $reponse=commande::where([
            ['codeCom',$id]
        ])
        ->update([
            'livreur'=>null
        ]);

        if ($reponse) {
            $this->livreur=false;
            $this->liste=true;
            $this->flashType='success';
            //Flash::message($this->flashType,'Livreur retiré avec succès.');
        } else {
            $this->flashType='danger';
            //Flash::message($this->flashType,'Erreur lors du retrait du livreur.');
        }
    }

    public function voirDetail($code){
        $this->com=$code;
    }

    public function getDetailCommandeProperty(){
        return commande::where([
            ['codeCom',$this->com]
        ])
        ->join('produits','produits.id','commandes.produit')
        ->select('produits.libelle','commandes.quantite','commandes.montant','commandes.montant_total','commandes.codeCom')
        ->get();
    }
    

    // public function getListLivreurProperty()
    // {
    //     return livreur::join('comptes','comptes.id','livreurs.compte')
    //     ->select('livreurs.id','livreurs.compte','livreurs.localisation','livreurs.paye','livreurs.cni','comptes.nom','comptes.email')
    //     ->orderBy('livreurs.id','desc')
    //     ->where([[
    //         'comptes.nom','like',"%$this->searchLivreur%"
    //     ]])
    //     ->orWhere([[
    //         'comptes.email','like',"%$this->searchLivreur%"
    //     ]])
    //     ->orWhere([[
    //         'livreurs.localisation','like',"%$this->searchLivreur%"
    //     ]])
    //     ->orWhere([[
    //         'livreurs.cni','like',"%$this->searchLivreur%"
    //     ]])
    //     ->paginate(50);
    // }

    // public function assigner($id){
    //     $reponse=commande::where([
    //         ['codeCom',$this->com]
    //     ])
    //     ->update([
    //         'livreur'=>$id
    //     ]);

    //     if ($reponse) {
    //         $this->livreur=false;
    //         $this->liste=true;
    //         $this->flashType='success';
    //         //Flash::message($this->flashType,'Livreur assigné avec succès.');
    //     } else {
    //         $this->flashType='danger';
    //         //Flash::message($this->flashType,'Erreur lors de l\'assignation du livreur.');
    //     }
        
    // }

    public function render()
    {
        return view('livewire.admin-commande-boutique');
    }
}
