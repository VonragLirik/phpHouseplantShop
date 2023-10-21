<?php

class User {
    public string $name;

    public function __construct(array $data) {
        $this->name = $data['name'];
    }
}

new User(['name' => 'popa']);