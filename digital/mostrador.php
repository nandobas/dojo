<?php 

class Mostrador
{
    private $str_palavra;
    function __construct(string $p_palavra)
    {
        $this->str_palavra=$p_palavra;
    }

    public function saida(){

        $arr_leds = [];




        echo $this->escrevePalavra();
    }

    private function escrevePalavra(){

        $linha_led['1']=' __';
        $linha_led['2']='|__|';
        $linha_led['3']='|  |';

        foreach($linha_led as $linha){
            echo $linha."\n";
        }

    }

    private function getArrayLeds(){


        $linha_led['1']=' __';
        $linha_led['2']='|__|';
        $linha_led['3']='|  |';

    }

    private function getLetra($p_letra){


        $linhas['a']=[];
        $linhas['a'][]=' __';
        $linhas['a'][]='|__|';
        $linhas['a'][]='|  |';

        $linhas['b'][]=' __';
        $linhas['b'][]='|__|';
        $linhas['b'][]='|__/';

        $linhas['c'][]=" __";
        $linhas['c'][]="|  ";
        $linhas['c'][]="|__";

        return $linhas[$p_letra];
    }
}

