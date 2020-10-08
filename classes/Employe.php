<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author dussart.luke
 */
class Employe
{
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;
    private const SALAIREMIN = 1000;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire)
    {
        $this->numero = $pnum;
        $this->nom = $pnom;
        $this->prenom = $pprenom;
        $this->dateDeNaissance = $pddn;
        $this->setSalaireM($psalaire);
    }
    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getDateDeNaissance(): DateTime
    {
        return $this->dateDeNaissance;
    }

    function getSalaireM(): float
    {
        return $this->salaireM;
    }

    function setSalaireM(float $salaireM): void
    {
        if($salaireM >= self::SALAIREMIN){
         $this->salaireM = $salaireM;
        }
        else{
          throw new Exception("Le salaire ne doit pas être inférieur à " . self::SALAIREMIN);
        }
    }

    public function __toString() : string
    {
      return $this->numero . " - " .$this->getNom() . " - " . $this->getPrenom()
        . " - " . $this->getDateDeNaissance()->format('d/m/Y') . " - " . $this->getSalaireM();
    }

}
