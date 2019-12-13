<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class Controller extends AbstractController
{
    
    public function number()
    {
        // get the user information and notifications somehow
        $userFirstName = 'Ivan';
        $userNotifications = ['...', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('lucky/number.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}