<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Testdata extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	/**
	*使いたいテーブル名を記載
	*/
	protected $table = 'test_data';

	//テーブルのキーを設定(デフォだとidになってる)
	protected $primaryKey= 'user_id';


}