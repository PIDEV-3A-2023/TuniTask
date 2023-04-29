<?php
namespace App\Controller;
class PasswordHasher {
    private const SALT_LENGTH = 16; // length of salt in bytes
    private const ITERATIONS = 10000; // number of iterations
    
    private $salt;
    
    public function __construct() {
        // generate a random salt
        $this->salt = random_bytes(self::SALT_LENGTH);
    }
    
    public function getSalt() {
        return $this->salt;
    }
    
    public function hashPassword($password) {
        try {
            $hash = hash('sha256', $password);
            return $hash;
        } catch (Exception $e) {
            error_log($e->getMessage(), 0);
            return null;
        }
    }
    
    private static function bytesToHex($bytes) {
        return implode('', array_map('sprintf', array_fill(0, count($bytes), '%02x'), $bytes));
    }
}
