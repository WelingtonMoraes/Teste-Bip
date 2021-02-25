<?php

    final class ClassCidade
    {
        private $vars;

        public function ClassCidade()
        {
            // constructor  
        }

        public function retornaCidade($cidade, $key)
        {
            $dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?key='.$key.'&city_name='.$cidade), true); // Recebe os dados da API
        
            $output = '
                <div class="box col-3">
                    <div class="box__content">
                        <p><b>'.$dados["results"]["city"].'</b> '.$dados['results']['temp'].' ºC</p>
                        <p>'.$dados['results']['description'].'</p>
                        <p><b>Nascer do Sol:</b> '.$dados["results"]["sunrise"].'</p>
                        <p><b>Pôr do Sol:</b> '.$dados["results"]["sunset"].'</p>
                        <p><b>Velocidade do vento:</b> '.$dados["results"]["wind_speedy"].'</p>
                        <img src="class/modules/previsao/imagens/'.$dados["results"]["img_id"].'.png" class="imagem-do-tempo"><br>
                    </div>
                </div>
            ';

            return $this-> vars = $output;
        }

        public function __toString() {

            return (string) $this->vars;
        }
    }