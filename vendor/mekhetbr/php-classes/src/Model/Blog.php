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

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_blog_save(:title, :body, :picture, :preview)", array(
			":title"=>utf8_decode($this->getdesperson()),
			":body"=>utf8_decode($this->getbody()),
			":picture"=>$this->getpicture(),
			":preview"=>utf8_decode($this->getpreview())
		));

		$this->setData($results[0]);
	}

	public function get($idpost)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_articles WHERE idpost = :idpost", array(
			":idpost"=>$idpost
		));

		$data = $results[0];

		/*$data['title'] = utf8_encode($data['title']);*/

		$this->setData($data);

	}

	public function update()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_blogupdate_save(:idpost, :title, :body, :picture, :preview)", array(
			":idpost"=>$this->getidpost(),
			":title"=>utf8_decode($this->gettitle()),
			":body"=>utf8_decode($this->getbody()),
			":picture"=>$this->getpicture(),
			":preview"=>utf8_decode($this->getpreview())
		));

		$this->setData($results[0]);		
	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("CALL sp_blog_delete(:idpost)", array(
			":idpost"=>$this->getidpost()
		));
	}

}


 ?>