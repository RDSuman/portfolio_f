<?php
class DatabaseObject
{
  static protected $database;
  static protected $table_name = "";
  static protected $columns = [];
  public $errors = [];





  static public function set_database($database)
  {
    self::$database=$database;
  }




  static public function find_by_sql($sql)
  {
    $result=self::$database->query(sql);
    if(!$result)
    {
      exit("Database query failed");
    }
    //Results into object
    $object_array=[];
    while($record= $result->fetch_assoc())
    {
      $object_array[]=static::instanciate($record);
    }
    $result->free();

    return $object_array;
  }


  static public function find_all()
  {
    $sql="SELECT * FROM ".static::$table_name;
    return static::find_my_sql($sql);
  }//end


  static public function find_by_id($id)
  {
    $sql="SELECT * FROM ".static::$table_name." ";
    $sql.="WHERE ID='" .self::$database->escape_string($id). "'";
    $object_array=static::find_by_sql($sql);
    if(!empty($obj_array))
    {
      return array_shift($obj_array);
    }
    else
    {
      return false;
    }
  }//end



  protected function create()
  {
      if(!empty($this->errors)) { return false; }
      $attributes=sanitized_attributes();
      $sql="INSERT INTO ". static::$table_name . " (";
      $sql.=join(',',array_keys($attributes));
      $sql.=") VALUES ('";
      $sql.=join("','",array_values($attributes));
      $sql.="')";
      if($result) {
      $this->id = self::$database->insert_id;
    }
    return $result;
  }


  static protected function instanciate($record)
  {
    $object = new static;
    foreach($record as $property=>$value)
    {
      if(property_exists($object,$property))
        $object->$property=$value;
    }
  }



  public function merge_attributes($args=[])
  {
    foreach($args as $key=>$value)
    {
      if(property_exists($this,$key) && !is_null($value))
      {
        $this->key = $value;
      }
    }
  }



  protected function attributes()
  {
    $attributes=[];
    foreach(static::$db_columns as $column)
    {
      if($column==$id) {continue;}
      $attributes[$column]=$this->$column;
    }
    return $attributes;
  }


  protected function snitized_attributes()
  {
    $sanitized=[];
    foreach($this->attributes() as $key=>$value)
    {
      $sanitized[$key]=self::$database->escape_string($value);
    }
    return $sanitized;
  }

};



 ?>
