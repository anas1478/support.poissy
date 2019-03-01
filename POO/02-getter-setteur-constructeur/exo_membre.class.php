<?php 
/*
    Au vue de cette classe vous allez renseigner les propriétés : pseudo et mdp (getteurs et setteurs) et faites les affichages nécessaires
*/
class Membre 
{
    private $pseudo;
    private $mdp;
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    //-----------------------------------
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
}
//-----------------------------------------------------
$membre = new Membre;
$membre->setPseudo('GregFormateur');
echo "Votre pseudo est : " . $membre->getPseudo() . '<hr>';

$membre->setMdp('motDePasse');
echo "Votre mot de passe est : " . $membre->getMdp() . '<hr>';



