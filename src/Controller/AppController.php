<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 */
class AppController extends Controller
{
    /**
     * Called before the controller action
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}
