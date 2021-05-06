<?php 

namespace App\Entity;

use \App\Db\Database;

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
                $obDatabase = new Database('vagas');
            // echo "<pre>";    print_r($obDatabase); echo " </pre>" ;exit;
               $this->id = $obDatabase ->insert([
                            'titulo' => $this->titulo,
                            'descricao' => $this->descricao,
                            'ativo' => $this->ativo,
                            'data' => $this->data
                        ]);
            // RETORNAR SUCESSO
            return true ;
        }

    }
?>