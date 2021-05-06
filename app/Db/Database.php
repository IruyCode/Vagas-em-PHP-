<?php


namespace App\Db;
use \PDO ;
use PDOException;

Class Database {
        // *** Conexao com o banco de dados ***
        const HOST = 'Localhost';
        // *NOME DO BANCO DE DADOS **
        const NAME = 'vz_vagas';
        // Nome do user BANCO DE DADOS
        const USER = 'root';
        // SENHA
        const PASS = ''; // PASS ESTA BUSCANDO O VALOR DE "user" () RESolvido 

        // Nome da tabela a ser manipulada 
        private $table;

        // Instancia de conexão com o banco de dados 
        private $connection; //PDO FACIL DE MUDAR DE BD

        public function __construct($table = null)
        {
            $this->table = $table ;
            $this->setConnection();
        }
            // Método responsavel por criar a conexao com o banco de dados 
        private function setConnection(){
            try{
                $this->connection = new PDO('mysql:host='.self::HOST.';dbname=' .self::NAME,self::USER,self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die('ERROR:'.$e->getMessage());
            }
        }
         /**  
             * Metodo responsal por executar querys, dentro do banco de baods 
             * @param string $query
             * @return array $params
             * @return PDOStatement
             */
            public function execute($query,$params = []){
                try{
                    $statement = $this->connection->prepare($query);
                    $statement->execute($params);
                    return $statement;
                }catch(PDOException $e){
                die('ERROR:'.$e->getMessage());
            }
            }

            /**  
             * Metodo responsal por inserir valores no banco
             * @param array $values [field => value]
             * @return integer
             */
        public function insert($values){
            // DADOS DA QUERY
            $fields = array_keys($values);
            $binds = array_pad([],count($fields),'?');
            // print_r($fields); exit ;
            // MONTAR QUERY 
                $query = 'INSERT INTO ' .$this->table. '('.implode(',',$fields).') Values ('.implode(',',$binds).')'; //"teste","teste2","s","2020-08-18 00:00:00:"
                    // EXECUTA O INSERT
                $this->execute($query,array_values($values));
                // RETORNA O ID INSERIDO 
                return $this->connection->lastInsertId();
            }
    }
?>