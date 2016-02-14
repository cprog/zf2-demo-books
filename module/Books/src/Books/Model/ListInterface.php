<?php
/**.
 * Date: 2/14/16
 * Time: 5:10 AM
 * File: ListInterface.php
 */
namespace Books\Model;

interface ListInterface
{
    public function getId();
    public function getISBN();
    public function getText();
    public function getTitle();
}