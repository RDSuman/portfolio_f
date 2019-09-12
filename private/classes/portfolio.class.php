<?php

class portfolio extends DatabaseObject
{
  static protected $table_name='portfolio';
  static protected $db_columns=['id','header','description','link','img_path'];

  public $id;
  public $header;
  public $description;
  public $link;
  public $img_path;


  public function __construct($args=[])
  {
    $this->header=$args['header'] ?? '';
    $this->description=$args['description'] ?? '';
    $this->link=$args['link'];
    $this->img_path=$args['img_path'];
  }


};


 ?>
