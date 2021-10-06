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

        $linha_led_a[0]=' __';
        $linha_led_a[1]='|__|';
        $linha_led_a[2]='|  |';

        $linha_led_b[0]=' __';
        $linha_led_b[1]='|__|';
        $linha_led_b[2]='|__/';

        $lista = [0=>[], 1=>[], 2=>[]];
        $lista[0][]=$linha_led_a[0];        
        $lista[0][]=$linha_led_b[0];

        /*$lista[2][]=$linha_led_a[1];
        $lista[1][]=$linha_led_b[1];

        $lista[1][]=$linha_led_a[2];
        $lista[2][]=$linha_led_b[2];*/

        foreach($lista as $key=>$digitos){
            
            foreach($digitos as $key_num_digito=>$digito){
                echo $digito."   |   ";
                echo $key_num_digito;
            }
            echo "\n";
            //echo "\n";//quebra proxima linha
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

