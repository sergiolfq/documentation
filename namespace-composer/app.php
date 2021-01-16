<?php 
namespace App;
include "project.php";
use Project\Table as TableP;

Class Table {

	public static function get(){
		echo "App.Table.get \n";
	}
}
TableP::get();
