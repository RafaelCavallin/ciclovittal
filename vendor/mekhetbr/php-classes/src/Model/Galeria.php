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

		return $sql->select("SELECT * FROM tb_fotos ORDER BY RAND() DESC LIMIT 3");
	}

	public static function listFotos2()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_fotos ORDER BY RAND() DESC LIMIT 3");
	}

	public static function listFotos3()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_fotos ORDER BY RAND() DESC LIMIT 3");
	}

	public static function listFotosGaleria()
	{

		$sql = new Sql();

		return $sql->select("SELECT DISTINCT foto FROM tb_fotos ORDER BY id DESC");
	}
	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_fotos_save(:foto)", array(
			":foto"=>$this->getfoto(),
		));

		$this->setData($results[0]);
	}

	public function get($id)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_fotos WHERE id = :id", array(
			":id"=>$id
		));

		$data = $results[0];

		$this->setData($data);

	}

	public function update()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_fotosupdate_save(:id, :foto)", array(
			":id"=>$this->getid(),
			":foto"=>$this->getfoto()
		));

		$this->setData($results[0]);		
	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("CALL sp_fotos_delete(:id)", array(
			":id"=>$this->getid()
		));
	}

	public static function getPage($page = 1, $itemsPerPage = 10)
	{

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS * 
			FROM tb_fotos 
			ORDER BY id DESC
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];

	}

}


 ?>