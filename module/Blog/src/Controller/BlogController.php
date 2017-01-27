<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Blog\Models\PostTable;
use Blog\Forms\PostForm;

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
        $posts = $this->table->fetchAll();
        return new ViewModel(compact('posts'));
    }

    public function addAction()
    {
        $forms = new PostForm();
        return new ViewModel(compact('forms'));
    }
}

