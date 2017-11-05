<?php
class Post_model extends MY_Model
{
    public $table = 'posts'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    public $fillable = array("title", "description", "user_id"); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(""); // ...Or you can set an array with the fields that cannot be filled by insert/update
    public function __construct()
    {
        parent::__construct();
    }
}