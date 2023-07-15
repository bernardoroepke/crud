<?php

class Contact extends Model {
    protected static $tableName = 'contacts';
    protected static $columns = [
        'id',
        'iduser',
        'name',
        'phone',
        'email',
    ];
}

?>