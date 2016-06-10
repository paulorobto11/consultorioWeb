<?php

namespace app\base;

/**
 * Classe que contém métodos relacionados à encriptação e verificação de senha.
 *
 * @author Jonathan Fernando <jonathan@cpninformatica.com.br>
 */
class Seguranca
{
    /**
     * Encripta de maneira segura a senha.
     * Retorna um hash da senha informada.
     * Utilizado para armazenar a senha no BD.
     *
     * @param string $password
     * @return string
     */
    public static function setPassword($password)
    {
        // A higher "cost" is more secure but consumes more processing power
        $cost = 10;
        // Create a random salt
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        // Prefix information about the hash so PHP knows how to verify it later.
        // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
        $salt = sprintf("$2a$%02d$", $cost) . $salt;
        // Hash the password with the salt
        return crypt($password, $salt);
    }
    
    /**
     * Compara uma senha (limpa, não encriptada) com um hash (senha encriptada).
     * 
     * @param string $password (senha limpa)
     * @param string $passwordHash (senha encriptada)
     */
    public static function verifyPassword($password, $passwordHash)
    {
        return hash_equals($passwordHash, crypt($password, $passwordHash));
    }
}