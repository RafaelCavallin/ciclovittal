<?php 

namespace CicloVittal\Model;

use \CicloVittal\Model;
use \CicloVittal\DB\Sql;
use \CicloVittal\Model\User;

class Blog extends Model {

	const SESSION = "Blog";

	protected $fields = [
		"id", "title", "body", "created", "modified", "picture", "preview"
	];

	public static function listBlog()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_articles ORDER BY created DESC");
	}

	public static function listBlogSite()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_articles ORDER BY created DESC LIMIT 2");
	}

}


 ?>