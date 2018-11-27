<?php 
class formulaire{
    public $num=0;
    public $nom='<input type="text" placeholder="Nom" name="name';
    public $force='<input type="number" placeholder="Force" name="force';
    public $forceMag='<input type="number" placeholder="Force Magique" name="forceMag';
    public $armure='<input type="number" placeholder="Armure" name="armure';
    public $vie='<input type="number" placeholder="Vie" name="vie'; 
    public $soin='<input type="number" placeholder="Soin" name="soin';

    public function __construct($i){
        $this->num=$i; 
    }
    public function addI(){
        $this->nom.=$this->num.'">';
        $this->force.=$this->num.'">';
        $this->forceMag.=$this->num.'">';
        $this->armure.=$this->num.'">';
        $this->vie.=$this->num.'">';
        $this->soin.=$this->num.'">';
    }
    public function echoForm(){
        echo $this->nom;
        echo $this->force;
        echo $this->forceMag;
        echo $this->armure;
        echo $this->vie;
        echo $this->soin;
    }
}

?> 