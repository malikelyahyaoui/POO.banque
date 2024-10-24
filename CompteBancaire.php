<?ph

class CompteBancaire{
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle,float $solde, string $devise, Titulaire $titulaire){
        $this-> libelle = $libelle;
        $this-> solde = $solde;
        $this-> devise = $devise;
        $this-> titulaire = $titulaire;

        $titulaire->ajouterCompte($this);   
    }
    
    public function getLibelle(): string
    {
        return $this->libelle;
    }
 
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde(float $solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDevise() : string
    {
        return $this->devise;
    }
  
    public function setDevise(string $devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }
   
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function crediter(float $montant){
        if($montant > 0) {
            $this -> solde += $montant;
        } 
    }

    public function debiter(float $montant){
        if($montant > 0) {
            $this -> solde -= $montant;
        } 
    }
    
    public function virement(CompteBancaire $compteDestinataire, float $montant){
        $this-> debiter($montant);
        $compteDestinataire -> crediter($montant);
    }

    public function __toString(): string {
         return "{$this->libelle} (Solde : {$this->solde} {$this->devise})";
    }

}

    
