<?php 

namespace CicloVittal\Model;

use \CicloVittal\Model;
use \CicloVittal\DB\Sql;
use \CicloVittal\Model\User;

class Blog extends Model {

	const SESSION = "Blog";

	protected $fields = [
		"id", "title", "body", "created", "modified", "preview"
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

		$results = $sql->select("CALL sp_blog_save(:idpost, :title, :body, :preview)", array(
			"idpost"=>$this->getidpost(),
			":title"=>$this->gettitle(),
			":body"=>$this->getbody(),
			":preview"=>$this->getpreview()
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

	/*public function update()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_blogupdate_save(:idpost, :title, :body, :preview", array(
			":idpost"=>$this->getidpost(),
			":title"=>$this->gettitle(),
			":body"=>$this->getbody(),
			":preview"=>$this->getpreview()
		));

		$this->setData($results[0]);		
	}*/

	public function delete()
	{

		$sql = new Sql();

		$sql->query("CALL sp_blog_delete(:idpost)", array(
			":idpost"=>$this->getidpost()
		));
	}

	public function checkPhoto()
	{	

		/*$path = $_SERVER['DOCUMENT_ROOT']."/res/site/images/blog/" . $this->getidpost() . ".jpg";
		$ds = DIRECTORY_SEPARATOR;
		$imagePath = str_replace(array("/", "\\"),$ds,$path);

		if (file_exists($imagePath)) {

			$url = "/res/site/images/blog/" . $this->getidpost() . ".jpg";
		}else {

			$url = "/res/site/images/blog/bg-post.jpg";
		}*/

		if (file_exists(
			$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
			"res" . DIRECTORY_SEPARATOR .
			"site" . DIRECTORY_SEPARATOR .
			"images" . DIRECTORY_SEPARATOR .
			"blog" . DIRECTORY_SEPARATOR .
			$this->getpidpost() . ".jpg"
			)) {

			$url = "/res/site/images/blog/" . $this->getidpost() . ".jpg";
		
		} else {

			$url = "/res/site/images/blog/bg-post.jpg";
		}

		return $this->setdesphoto($url);
	}

	public function getValues()
	{

		$this->checkPhoto();

		$values = parent::getValues();

		return $values;
	}

	public function setPhoto($file)
	{ 

		ini_set('gd.jpeg_ignore_warning', 1);

		if(empty( $file['name'])){

		$this->checkPhoto();

		}else{

		$extension = explode('.', $file['name']);
		$extension = end($extension);

			switch ($extension) {

				case "jpg":
				case "jpeg":
				$image = imagecreatefromjpeg($file['tmp_name']);
				break;
				case "gif":
				$image = imagecreatefromgif($file['tmp_name']);
				break;
				case "png":
				$image = imagecreatefrompng($file['tmp_name']);
				break;
			}

			/*$image = ($file["tmp_name"]);*/

			$dist = $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR . 
			"res" . DIRECTORY_SEPARATOR . 
			"site" . DIRECTORY_SEPARATOR . 
			"images" . DIRECTORY_SEPARATOR . 
			"blog" . DIRECTORY_SEPARATOR . 
			$this->getidpost() . ".jpg";

			/*$path = $_SERVER['DOCUMENT_ROOT']."/res/site/images/blog/" . $this->getidpost() . ".jpg";
			$ds = DIRECTORY_SEPARATOR;
			$imagePath = str_replace(array("/", "\\"),$ds,$path);*/
			

			imagejpeg($image, $dist);

			imagedestroy($image);

			$this->checkPhoto();
		}

	}

	public static function getPage($page = 1, $itemsPerPage = 10)
	{

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS * 
			FROM tb_articles 
			ORDER BY created DESC
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];

	}

	public static function getPageSearch($search, $page = 1, $itemsPerPage = 10)
	{

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_articles
			WHERE title LIKE :search OR body LIKE :search OR created LIKE :search OR preview LIKE :search
			ORDER BY created DESC
			LIMIT $start, $itemsPerPage;
		", [
			':search'=>'%'.$search.'%'
		]);

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];

	}

}


 ?>