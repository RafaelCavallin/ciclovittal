<?php 

namespace CicloVittal\Model;

use \CicloVittal\Model;
use \CicloVittal\DB\Sql;
use \CicloVittal\Model\User;

class Galeria extends Model {

	const SESSION = "Galeria";

	protected $fields = [
		"id", "foto"
	];

	public static function listFotos()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_fotos ORDER BY id DESC LIMIT 1");
	}

	public static function listFotosGaleria()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_fotos ORDER BY id DESC");
	}

}


 ?>