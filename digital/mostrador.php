<?php 

class Mostrador
{
    private string $str_palavra;
    function __construct(string $p_palavra)
    {
        $this->str_palavra=$p_palavra;
    }

    public function saida(){
        $this->str_palavra=preg_replace('/[^a-z ]/i', "", $this->str_palavra);
        echo $this->escrevePalavra();

    }

    //service
    private function escrevePalavra(){

        $return = "";

        $lista = [0=>[], 1=>[], 2=>[]];

        $str_palavra = $this->str_palavra;

        for($posicao=0; $posicao<strlen($str_palavra); $posicao++){
            $letra_a = $this->getLetra($str_palavra[$posicao]);
            $this->pushLetra($lista, $letra_a);
        }

        foreach($lista as $key=>$digitos){
            
            foreach($digitos as $key_num_digito=>$digito){
                $return.=$digito;
            }
            $return.="\n";
        }

        return $return;

    }

    private function pushLetra(&$lista, $letra){

        for($linha=0; $linha<=2; $linha++){
            $lista[$linha][]=$letra[$linha];
        }
    }

    private function getLetra($p_letra){

        $linhas[' '][]='    ';
        $linhas[' '][]='    ';
        $linhas[' '][]='    ';

        $linhas['a'][]=' __ ';
        $linhas['a'][]='|__|';
        $linhas['a'][]='|  |';

        $linhas['b'][]=' __ ';
        $linhas['b'][]='|__|';
        $linhas['b'][]='|__/';

        $linhas['c'][]=' __ ';
        $linhas['c'][]='|   ';
        $linhas['c'][]='|__ ';

        $linhas['d'][]=' __ ';
        $linhas['d'][]='|  |';
        $linhas['d'][]='|__/';

        $linhas['e'][]=' __ ';
        $linhas['e'][]='|__ ';
        $linhas['e'][]='|__ ';

        $linhas['f'][]=' __ ';
        $linhas['f'][]='|__ ';
        $linhas['f'][]='|   ';

        $linhas['g'][]=' __ ';
        $linhas['g'][]='|  _';
        $linhas['g'][]='|__/';

        $linhas['h'][]='    ';
        $linhas['h'][]='|__|';
        $linhas['h'][]='|  |';

        $linhas['i'][]='    ';
        $linhas['i'][]=' |  ';
        $linhas['i'][]=' |  ';

        $linhas['j'][]='   |';
        $linhas['j'][]='   |';
        $linhas['j'][]='|__/';

        $linhas['k'][]='|  /';
        $linhas['k'][]='| / ';
        $linhas['k'][]='|  \\';

        $linhas['l'][]='    ';
        $linhas['l'][]='|   ';
        $linhas['l'][]='|__ ';

        $linhas['m'][]='    ';
        $linhas['m'][]='|\/|';
        $linhas['m'][]='|  |';

        $linhas['n'][]='    ';
        $linhas['n'][]='|\ |';
        $linhas['n'][]='| \|';

        $linhas['o'][]=' __ ';
        $linhas['o'][]='|  |';
        $linhas['o'][]='\__/';

        $linhas['p'][]=' __ ';
        $linhas['p'][]='|__|';
        $linhas['p'][]='|   ';

        $linhas['q'][]=' __ ';
        $linhas['q'][]='|  |';
        $linhas['q'][]='\_\/';

        $linhas['r'][]=' __ ';
        $linhas['r'][]='|__|';
        $linhas['r'][]='| \ ';

        $linhas['s'][]=' __ ';
        $linhas['s'][]='|__ ';
        $linhas['s'][]=' __/';

        $linhas['t'][]='_ _ ';
        $linhas['t'][]=' |  ';
        $linhas['t'][]=' |  ';

        $linhas['u'][]='    ';
        $linhas['u'][]='|  |';
        $linhas['u'][]='\__/';

        $linhas['v'][]='    ';
        $linhas['v'][]='\  /';
        $linhas['v'][]=' \/ ';

        $linhas['w'][]='    ';
        $linhas['w'][]='|  |';
        $linhas['w'][]='|/\|';

        $linhas['x'][]='\  /';
        $linhas['x'][]=' \/ ';
        $linhas['x'][]='/  \\';

        $linhas['y'][]='\  /';
        $linhas['y'][]=' \/ ';
        $linhas['y'][]='/   ';

        $linhas['z'][]='__  ';
        $linhas['z'][]=' _\ ';
        $linhas['z'][]='\__ ';

        return $linhas[strtolower($p_letra)];
    }
}

