<?php

namespace Application\Form\Panel;

use Zend\Form\Form;

class LogoutForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('logout');

        $this->add(array(
            'name' => 'id',
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Logout!',
                'id' => 'submitbutton',
            ),
        ));
    }
}
