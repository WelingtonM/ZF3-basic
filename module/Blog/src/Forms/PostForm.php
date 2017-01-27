<?php
namespace Blog\Forms;



use Zend\Form\Form;

class PostForm extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('posts');

        $this->add(['name'=>'id','type'=>'hidden']);

        $this->add([
            'name'=>'title',
            'type'=>'text',
            'options' => [
                'label' => 'Title'
            ]
        ]);

        $this->add([
            'name'=>'content',
            'type'=>'textarea',
            'options' => [
                'label' => 'Content'
            ]
        ]);

        $this->add([
            'name'=>'submit',
            'type'=>'submit',
            'attributes' => [
                'value' => 'Salve',
                'id'=>'submitbutton'
            ]
        ]);
    }
}

