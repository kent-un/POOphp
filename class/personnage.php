<?php 
class personnage{
    public $nom;
    public $vie = 100;
    public $forceMagique = 20;
    public $forceBrute = 25;
    public $armure = 15;
    
    public function __construct($nom){
        $this->nom = $nom;
    }

    public function regenere($bonusVie = 20){
        echo '<br>';
        echo $this->nom .' se régénère et obtient '.$bonusVie.' points de vie en plus. ';
        $this->vie += $bonusVie;
        echo 'Il lui reste donc '.$this->vie.' points de vie.';
        echo '<hr>';
    }

    public function decrire(){
        echo '<br>';
        echo $this->nom . " a " . $this->vie . " points de vie et une force de " . $this->forceMagique . ' points.';
        echo '<hr>';
    }

    public function attaqueMagique(personnage $defenseur){
        echo '<br>';
        echo $defenseur->nom.' se fait attaquer par '. $this->nom.'.' ;
        $defenseur->vie -= $this->forceMagique; 
        echo '<br>';
        echo $this->nom.' lui enlève '.$this->forceMagique.' points de vie. Il lui en reste donc '.$defenseur->vie.' points de vie.';  
        echo '<hr>';
        $defenseur->enVie();
    }

    public function hodor(){
        echo $this->nom.' écoute un bruit: <br> "HODOOOOOOOOOOOOOOOR"';
        echo '<hr>';
    }

    public function enVie(){
        if($this->vie > 0){
            echo $this->nom.' est toujours en vie.';
            echo '<hr>';
            return true;
            
        }
        else{
            echo $this->nom.' est mort.';
            echo '<hr>';
            return false;
            
        }
    }

    public function attaquePhysique(personnage $defenseur){
        echo '<br>';
        echo $defenseur->nom.' se fait attaquer par '. $this->nom.'.' ;
        $defenseur->vie -= ($this->forceBrute - $defenseur->armure); 
        echo '<br>';
        echo $this->nom.' lui enlève seulement '.($this->forceBrute - $defenseur->armure).' points de vie car son armure est de '.$defenseur->armure.' points. Il lui en reste donc '.$defenseur->vie.' points de vie.';  
        echo '<hr>';
        $defenseur->enVie();

    }
    

}
?>