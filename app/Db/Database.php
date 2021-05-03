<?php


namespace App\Db;
use \PDO ;
use PDOException;

Class Database {
        // *** Conexao com o banco de dados ***
        const HOST = 'localhost';
        // *NOME DO BANCO DE DADOS **
        const NAME = 'Vz_vagas';
        // Nome do user BANCO DE DADOS
        const User = 'root';
        // SENHA
        const PASS = '';

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
                $this->connection = new PDO('mysql:host=' .self::HOST.';dbname=' .self::NAME, self::PASS);
            }catch(PDOException $e){
                die('ERROR:'.$e->getMessage());
            }
        }
    }
?>