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

        $linha_led_a = $this->getLetra('a');
        $linha_led_b = $this->getLetra('b');
        $linha_led_c = $this->getLetra('c');

        $lista = [0=>[], 1=>[], 2=>[]];

        $lista[0][]=$linha_led_a[0]; 
        $lista[0][]=$linha_led_b[0]; 
        $lista[0][]=$linha_led_c[0]; 
        $lista[1][]=$linha_led_a[1]; 
        $lista[1][]=$linha_led_b[1];
        $lista[1][]=$linha_led_c[1];  
        $lista[2][]=$linha_led_a[2]; 
        $lista[2][]=$linha_led_b[2];
        $lista[2][]=$linha_led_c[2];

        foreach($lista as $key=>$digitos){
            
            foreach($digitos as $key_num_digito=>$digito){
                echo $digito;
            }
            echo "\n";
        }

    }

    private function getLetra($p_letra){

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

