<?php
/**.
 * Date: 2/13/16
 * Time: 11:31 PM
 * File: /module/Books/src/Books/Service/ListService.php
 */

namespace Books\Service;

use Books\Model\Lister;

class ListService implements ListServiceInterface
{


    protected $data = array(
        array(
            'id'    => 1,
            'title' => 'Book #1',
            'text'  => 'Book Text #1',
            'isbn'  => 'ISBN Book1 '
        ),
        array(
            'id'    => 2,
            'title' => 'Book #2',
            'text'  => 'Book Text #2',
            'isbn'  => 'ISBN Book2'
        ),
        array(
            'id'    => 3,
            'title' => 'Book #3',
            'text'  => 'Book Text #3',
            'isbn'  => 'ISBN Book3 '
        ),
        array(
            'id'    => 1,
            'title' => 'Book #4',
            'text'  => 'Book Text #4',
            'isbn'  => 'ISBN Book4 '
        ),
        array(
            'id'    => 1,
            'title' => 'Book #5',
            'text'  => 'Book Text #5',
            'isbn'  => 'ISBN Book5 '
        ),

    );
   public function findAllBooks()
   {
       $allBooks = array();

       foreach ($this->data as $index => $book) {
           $allBooks[] = $this->findBook($index);
       }

       return $allBooks;
   }
    public function findBook($id)
    {
        $bookData = $this->data[$id];

        $model = new Lister();
        $model->setId($bookData['id']);
        $model->setTitle($bookData['title']);
        $model->setText($bookData['text']);
        $model->setISBN($bookData['isbn']);
        return $model;
    }
}