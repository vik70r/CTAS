<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserAgencia extends Eloquent implements UserInterface, RemindableInterface{
	use UserTrait,RemindableTrait;
	public $timestamps=false;
	/**
	*The database table used by the model.
	*
	*@var string
	*/
	protected $table = 'agencia';
	/**
	*the attribute excluded from the model's JSON form
	*
	*@var array
	*/
	protected $hidden = array('password','remember_token');
}