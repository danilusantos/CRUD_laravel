<?php

namespace App\Helpers;

class FunctionsHelper
{
    /*
     * Ele verifica se é um CPF válido de acordo com as regras de validação de CPF.
     * Há uma documentação explicando essas regras.
     * Já a existência de fato do CPF não é feita pois algo assim somente a Receita Federal pode determinar.
     * References: https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
    */
    public static function validaCPF($cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }

    /*
     * Função que transforma o formato sql yyyy-mm-dd
     * para o formato BR dd/mm/YYYY;
     */
    public static function dataSqlToBr($data)
    {
        return date( 'd/m/Y' , strtotime($data));
    }

    /*
     * Função que transforma o formato BR dd/mm/YYYY
     * para o formato sql yyyy-mm-dd;
     */
    public static function dataBrToSql($data)
    {
        // O formato deve ser "d/m/Y"
        $dataSql = str_replace('/', '-', $data);
        return date('Y-m-d', strtotime($dataSql));
    }

    /*
     * Função para formatar os números do SQL para CPF
     * Ex: 12345678900 -> 123.456.789-00
     */
    public static function cpfSqlToBr($cpf)
    {
        $cpfBr = preg_replace("/\D/", '', $cpf);
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpfBr);
    }

    /*
     * Função para limpar os pontos e traço do cpf
     * Ex: 123.456.789-00 -> 12345678900
     */
    public static function cpfBrToSql($cpf)
    {
        $cpfSql = str_replace(['.', '-'], '', $cpf);
        return $cpfSql;
    }

    /*
     * Função para formatar os númetos SQL para o formato telefone convencional Brasil
     * Ex: 13912345678 -> (13) 91234-5678
     */
    public static function telefoneSqlToBr($telefone)
    {
        $telefoneBr = preg_replace('/[^0-9]/', '', $telefone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $telefoneBr, $matches);
        if ($matches) {
            return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
        }

        return $telefone;
    }

    /*
     * Função para limpar os traços e espaços do telefone
     * Ex: (13) 91234-5678 -> 13912345678
     */
    public static function telefoneBrToSql($value)
    {
        $telefoneSql = str_replace(['(', ')', ' ', '-'], '', $value);
        return $telefoneSql;
    }

    /*
     * Função para formatar o CEP com o - após 5 digitos
     * EX: 12345123 -> 12345-123
     */
    public static function cepSqlToBr($cep)
    {
        $cepBr = preg_replace('/(\d{2})(\d{3})(\d{3})/', '$1.$2-$3', $cep);
        return $cepBr;
    }

    /*
     * Função para limpar o traço do CEP
     * EX: 12345-123 -> 12345123
     */
    public static function cepBrToSql($cep)
    {
        $cepSql = preg_replace('/[^0-9]/', '', $cep);
        return $cepSql;
    }






}
