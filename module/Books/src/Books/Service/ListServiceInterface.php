<?php
/**.
 * Date: 2/13/16
 * Time: 11:10 PM
 * File: module/Books/src/Books/Service/ListServiceInterface.php
 */


namespace Books\Service;

use Books\Model\ListInterface;

interface ListServiceInterface
{
    public function findAllBooks();
    public function findBook($id);
}