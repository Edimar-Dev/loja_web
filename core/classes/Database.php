<?php

namespace Core\Classes;
use PDOException;

use PDO;

class Database
{

    private $ligacao;
    //-------------------LIGAR O BANCO DE DADOS-------------------
    private function ligar()
    {
        $this->ligacao = new PDO(
            'mysql:' .
                'host=' . MYSQL_SERVER . ';' .
                'dbname=' . MYSQL_DATABASE . ';' .
                'charset=' . MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)
        );

        //debugando
        $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    //-------------------DESLIGAR O BANCO DE DADOS-------------------

    private function desligar()
    {
        $this->ligacao = null;
    }


    //-------------------CRUD----------------------------------------

    public function select($sql, $params = null)
    {
        //executa função de pesquisa SQL
        $this->ligar();

        $resultado = null;

        //comunicar com o banco de dados
        try {

            //comunicar com o banco de dados
            if (!empty($params)) {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute($params);
                $resultado = $realizar->fetchAll(PDO::FETCH_CLASS);
            } else {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute();
                $resultado = $realizar->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $e) {

            //caso haja erro
            return false;
        }

        //desligar o banco de dados
        $this->desligar();

        return $resultado;
    }
}
