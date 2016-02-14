<?php
/**.
 * Date: 2/14/16
 * Time: 5:17 AM
 * File: Lister.php
 */

namespace Books\Model;

class Lister implements ListInterface
 {

     protected $id;
     protected $title;
     protected $text;
     protected $isbn;

     public function getId()
     {
         return $this->id;
     }

     public function setId($id)
     {
         $this->id = $id;
     }


     public function getTitle()
     {
         return $this->title;
     }

     public function setTitle($title)
     {
         $this->title = $title;
     }

     public function getText()
     {
         return $this->text;
     }

     public function setText($text)
     {
         $this->text = $text;
     }

    public function getISBN()
    {
        return $this->text;
    }

    public function setISBN($text)
    {
        $this->isbn = $isbn;
    }


 }
