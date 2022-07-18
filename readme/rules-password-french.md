# Message validate for password in french  

- copy / paste this in `vendor/laravel/fortify/src/Rules/Password.php`  
```php
switch (true) {
    case $this->requireUppercase
        && !$this->requireNumeric
        && !$this->requireSpecialCharacter:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contenir au moins un caractère majuscule.', [
            'length' => $this->length,
        ]);

    case $this->requireNumeric
        && !$this->requireUppercase
        && !$this->requireSpecialCharacter:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contenir au moins un nombre.', [
            'length' => $this->length,
        ]);

    case $this->requireSpecialCharacter
        && !$this->requireUppercase
        && !$this->requireNumeric:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contiennent au moins un caractère spécial.', [
            'length' => $this->length,
        ]);

    case $this->requireUppercase
        && $this->requireNumeric
        && !$this->requireSpecialCharacter:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contenir au moins une majuscule et un chiffre.', [
            'length' => $this->length,
        ]);

    case $this->requireUppercase
        && $this->requireSpecialCharacter
        && !$this->requireNumeric:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contenir au moins un caractère majuscule et un caractère spécial.', [
            'length' => $this->length,
        ]);

    case $this->requireUppercase
        && $this->requireNumeric
        && $this->requireSpecialCharacter:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contenir au moins une majuscule, un chiffre et un caractère spécial.', [
            'length' => $this->length,
        ]);

    case $this->requireNumeric
        && $this->requireSpecialCharacter
        && !$this->requireUppercase:
        return __('Le mot de passe doit être composé d\'au moins :length caractères et contiennent au moins un caractère spécial et un chiffre.', [
            'length' => $this->length,
        ]);

    default:
        return __('Le mot de passe doit être composé d\'au moins :length caractères.', [
            'length' => $this->length,
        ]);
}
```