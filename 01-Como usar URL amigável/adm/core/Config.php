<?php 

abstract class Config
{
    protected function configAdm()
    {
        define('URL', 'http://localhost/_PHP%20developer/11-Criar%20o%20Sistema%20Administrativo/01-Como%20usar%20URL%20amig%c3%a1vel/');
        define('URLADM', 'http://localhost/_PHP%20developer/11-Criar%20o%20Sistema%20Administrativo/01-Como%20usar%20URL%20amig%c3%a1vel/adm/');

        define('CONTROLLER', 'Login');
        define('METODO', 'index');
        define('CONTROLLERERRO', 'Erro');
    }
}