<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario;
class calculoBonificacao
{
    private $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->Bonificacao();
    }
    
    public function retornaTotal():float
    {
        return $this->totalBonificacao;
    }
}