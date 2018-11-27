<?php 
class perso{
    public $nom;
    public $force;
    public $forceMag;
    public $armure;
    public $vie; 
    public $soin;

    public function __construct($nom, $force, $forceMag, $armure, $vie, $soin){
        $this->nom = $nom;
        $this->force = $force; 
        $this->forceMag = $forceMag;
        $this->armure = $armure;
        $this->vie = $vie; 
        $this->soin = $soin; 
    }
    public function decrire(){
        echo '<br>';
        echo $this->nom . " a " . $this->vie . " points de vie et une force magique de " . $this->forceMag . ' points. Son armure est de '.$this->armure.' points, il peut soigner de '.$this->soin.' points. Sa force physique est de '.$this->force.' points.';
        echo '<hr>';
    }
    public function randAtt(perso $defenseur){
        $tirage = rand(0,2);
        switch ($tirage) {
            case 0 :
                $this->attaquePhysique($defenseur);
                break;
            case 1 :
                $this->attaqueMagique($defenseur);
                break;
            case 2 : 
                $this->regenere(rand(5,10));
                break;
            
        };
    }
    public function attaqueMagique(perso $defenseur){
        echo '<br>';
        echo $defenseur->nom.' se fait attaquer magiquement par '.$this->nom.'.' ;
        $defenseur->vie -= $this->forceMag; 
        echo '<br>';
        echo $this->nom.' lui enlève '.$this->forceMag.' points de vie. Il lui en reste donc '.$defenseur->vie.' points de vie.';  
        echo '<hr>';
        $defenseur->enVie();
    }
    public function attaquePhysique(perso $defenseur){
        echo '<br>';
        echo $defenseur->nom.' se fait attaquer physiquement par '. $this->nom.'.' ;
        $defenseur->vie -= ($this->force - $defenseur->armure); 
        echo '<br>';
        echo $this->nom.' lui enlève seulement '.($this->force - $defenseur->armure).' points de vie car son armure est de '.$defenseur->armure.' points. Il lui en reste donc '.$defenseur->vie.' points de vie.';  
        echo '<hr>';
        $defenseur->enVie();

    }
    public function enVie(){
        if($this->vie > 0){
            return true;
            
        }
        else{
            echo $this->nom.' est mort.';
            echo '<hr>';
            return false;
            
        }
    }
    public function regenere($bonusVie = 20){
        echo '<br>';
        echo $this->nom .' se régénère et obtient '.$bonusVie.' points de vie en plus. ';
        $this->vie += $bonusVie;
        echo 'Il lui reste donc '.$this->vie.' points de vie.';
        echo '<hr>';
    }
}
?> 