<?php
class User_model extends MY_Model
{
    public $table = 'users'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    public $fillable = array("fname", "lname", "status"); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(""); // ...Or you can set an array with the fields that cannot be filled by insert/update
    public $has_many = array("post" => array('Post_model', 'user_id', 'id'));
    public function __construct()
    {
        parent::__construct();
    }
}