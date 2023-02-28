<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;
class calculoBonificacao
{
    private $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->bonificacao();
    }
    
    public function retornaTotal():float
    {
        return $this->totalBonificacao;
    }
}