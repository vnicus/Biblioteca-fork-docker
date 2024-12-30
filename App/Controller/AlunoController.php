<?php

/**
 * Declaração de namespaces com sub-namespaces:
 * https://www.php.net/manual/pt_BR/language.namespaces.nested.php
 */
namespace App\Controller;

class AlunoController
{
    /**
     * Declaração de membros de classe estáticos:
     * https://www.php.net/manual/pt_BR/language.oop5.static.php
     */
    public static function cadastro()
    {
        echo "vou mostrar o fomrulario a depender...";
    }

    
    public static function listar()
    {
        echo "listagem de alunos";
    }    
}