<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql = "SELECT * FROM header";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC)){
     var_dump($row);
   }
