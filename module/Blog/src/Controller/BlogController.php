<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Blog\Models\PostTable;

class BlogController extends AbstractActionController
{
    /**
     * @var \Blog\Models\PostTable $table
     */
    private  $table;

    /**
     * @param PostTable $table
     */
    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $postTables = $this->table->fetchAll();

        return new ViewModel(compact('postTables'));
    }
}

