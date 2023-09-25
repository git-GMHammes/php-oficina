<?php
if (!function_exists('testDB')) {
    function testDB()
    {
        try {
            $db = \Config\Database::connect();
            $db->initialize();
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            die("Houve um problema ao conectar com o banco de dados: {$errorMessage}. Por favor, tente novamente mais tarde.");
        }
    }
    #Chama imediatamente o teste
    testDB();
}