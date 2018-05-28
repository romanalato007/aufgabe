<?php
namespace App\Entity;

class Calc
{
    protected $zahl1;
    protected $zahl2;
    protected $rz;
    protected $c;

    public function getZahl1()
    {
        return $this->zahl1;
    }

    public function setZahl1($zahl1)
    {
        $this->zahl1 = $zahl1;
    }




    public function getZahl2()
    {
        return $this->zahl2;
    }

    public function setZahl2($zahl2)
    {
        $this->zahl2 = $zahl2;
    }




    public function getRz()
    {
        return $this->rz;
    }

    public function setRz($rz)
    {
        $this->rz = $rz;
    }


    public function Erg()
    {
      if ($this->rz == "add")      $c=bcadd($this->zahl1, $this->zahl2, 2);
      if ($this->rz == "subtract")    $c=bcsub($this->zahl1, $this->zahl2, 2);
      if ($this->rz == "multiply")    $c=bcmul($this->zahl1, $this->zahl2, 2);
      if ($this->rz == "divide")    $c=bcdiv($this->zahl1, $this->zahl2, 2);
      return $c;
    }
}
?>
