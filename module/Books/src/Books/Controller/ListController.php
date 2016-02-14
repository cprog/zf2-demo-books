<?php
/**.
 * Date: 2/12/16
 * Time: 6:30 PM
 * File: ListController.php
 */

namespace Books\Controller;

use Books\Service\ListServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ListController extends AbstractActionController
{
    protected $listService;
    public function __construct(ListServiceInterface $listService)
    {
        $this->listService = $listService;
    }

    public function indexAction()
    {
        return new ViewModel(array(
            'listOfBooks' => $this->listService->findAllBooks()
        ));
    }
}

