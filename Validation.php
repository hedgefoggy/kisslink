<?php
class Validate
{
    private $passed = false, $errors = [], $db = null;

    public function __constructor()
    {
        $this->db = Database::getInstance();
    }

    public function check($source, $item = []) {}

    public function addError($error)
    {
        $this->errors[] = $error;
    }

    public function errors() {
        return $this->errors;
    }

    public function passed() {
        return $this->passed;
    }
}
