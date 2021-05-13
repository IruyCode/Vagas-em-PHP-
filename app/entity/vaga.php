<?php 

namespace App\Entity;

use \App\Db\Database;
use  \PDO;
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
                            'titulo'    => $this->titulo,
                            'descricao' => $this->descricao,
                            'ativo'     => $this->ativo,
                            'data'      => $this->data
                        ]);
            // RETORNAR SUCESSO
            return true ;
        }
        /**  Metodo responsável por atualizar a Vaga no BANCO
         *  @return bollean
        */
        public function atualizar(){
            return (new Database('vagas'))->update('id = '.$this->id,[
                                                    'titulo'    => $this->titulo,
                                                    'descricao' => $this->descricao,
                                                    'ativo'     => $this->ativo,
                                                      'data'      => $this->data
            ]);
        }

        /** 
         * Métodos responsável por obter as vagas do bando de dados 
         * @param string $where 
         * @param string $order
         * @param string $limit
         * @return array
         */
        public static function getVagas($where =null, $order = null, $limit = null){
            return (new Database('vagas'))->select($where,$order,$limit)
                                          ->fetchALL(PDO::FETCH_CLASS,self::class);
        }
        /**
         * Método responsável por buscar uma vaga com base no seu ID
         * @param integer
         * @return Vaga
         */
        public static function getVaga($id){
            return (new Database('vagas'))->select(' id = ' .$id)
                                          ->fetchObject(self::class)  ;
        }

    }
?>