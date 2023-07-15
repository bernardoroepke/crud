<?php

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'is_admin',
    ];
}

?>