<?php 

namespace App\Entity;

    Class Vaga{

        /**
         * indentificador único da vaga 
         * @var integer
         */
        public $id;
        // Título da Vaga
        public $titulo;
        // Descricao da vaga (Pode conter html )
        public $descricao;
        // Define se a vaga está ativa (s/n)
        public $ativo;
        // data de publicacao da vaga 
        public $data ;

        // *** Métodos da Class ***
         
        public function cadastrar(){ // cadastrar uma nova vaga no banco 
            // DEFINIR A DATA 
                $this->data = date('y-m-d H:i:s'); // forma a data em formato americano para inserir no banco de dados 
            // INSERIR A VAGA NO BANCO 
                
            // ATRIBUIR O ID DA NA INSTANCIA

            // RETORNAR SUCESSO
        }

    }
?>