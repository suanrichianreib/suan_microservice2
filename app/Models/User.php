<?php
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Model;

 class User extends Model{
    

    protected $table = 'tbluser';

 // column sa table
    protected $fillable = [
        'user', 'password', 'gender', 'job_id'
    ];

    public $timestamps = false;
    protected $primarykey = 'id';
 }
