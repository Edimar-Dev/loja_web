<?php

namespace Core\Classes;
use PDOException;
use Exception;

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

        if(!preg_match('/^SELECT/i', $sql)) {
            throw new Exception('Base de dados não é um SELECT');
        }

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

    public function insert($sql, $params = null)
    {

        //verifica se é uma instração INSERT

        if(!preg_match('/^INSERT/i', $sql)) {
            throw new Exception('A instrução não é um INSERT');
        }
        //liga
        $this->ligar();

        //comunicar
        try {

            //comunicar com o banco de dados
            if (!empty($params)) {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute($params);
            } else {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute();
            }
        } catch (PDOException $e) {

            //caso haja erro
            return false;
        }

        //desligar o banco de dados
        $this->desligar();

    }

    public function update($sql, $params = null)
    {

        //verifica se é uma instração UPDATE

        if(!preg_match('/^UPDATE/i', $sql)) {
            throw new Exception('A instrução não é um UPDATE');
        }
        //liga
        $this->ligar();

        //comunicar
        try {

            //comunicar com o banco de dados
            if (!empty($params)) {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute($params);
            } else {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute();
            }
        } catch (PDOException $e) {

            //caso haja erro
            return false;
        }

        //desligar o banco de dados
        $this->desligar();

    }

    public function delete($sql, $params = null)
    {

        //verifica se é uma instração DELETE

        if(!preg_match('/^DELETE/i', $sql)) {
            throw new Exception('A instrução não é um DELETE');
        }
        //liga
        $this->ligar();

        //comunicar
        try {

            //comunicar com o banco de dados
            if (!empty($params)) {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute($params);
            } else {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute();
            }
        } catch (PDOException $e) {

            //caso haja erro
            return false;
        }

        //desligar o banco de dados
        $this->desligar();

    }
    //-------------------GERERICA--------------------------------------

    public function statement($sql, $params = null)
    {

        //verifica se é uma instração diferente as acima
        if(preg_match('/^INSERT|INSERT|UPDATE|DELETE/i', $sql)) {
            throw new Exception('A instrução não é uma instrucao válida');
        }
        //liga
        $this->ligar();

        //comunicar
        try {

            //comunicar com o banco de dados
            if (!empty($params)) {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute($params);
            } else {
                $realizar = $this->ligacao->prepare($sql);
                $realizar->execute();
            }
        } catch (PDOException $e) {

            //caso haja erro
            return false;
        }

        //desligar o banco de dados
        $this->desligar();

    }
}

