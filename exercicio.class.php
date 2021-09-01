<?php
    Class Exemplo{
		
        public function palavra($palavra){
            echo 'Primeira letra: ' . substr($palavra, 0, 1) . '</br>Ultima letra: ' . substr($palavra, -1) . ' </br> ';
        }

        public function quantidadePalavra($palavra){
            $a = strlen($palavra);

            echo "Possui " . $a . " letras<br>";
        }

        public function vogaisPalavra($palavra){
            $palavra = strtolower($palavra);
            $a = 0;
            $a += substr_count($palavra, "a");
            $a += substr_count($palavra, "e");
            $a += substr_count($palavra, "i");
            $a += substr_count($palavra, "o");
            $a += substr_count($palavra, "u");
            echo "Possui " . $a . " vogais" . "<br>";
        }

        public function consoantesPalavras($palavra){
            $palavra = strtolower($palavra);
            $consoantes = Array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z");
            $a = 0;
            foreach ($consoantes as $cons) {
                $a_consoante = substr_count($palavra, $cons); 
                $a+= $a_consoante;
            }
            echo "Possui " . $a . " consoantes" . "<br>";
        }
    }
?>