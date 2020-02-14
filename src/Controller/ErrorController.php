<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Error Handling Controller
 */
class ErrorController extends AppController
{
    /**
     * Initialization hook method
     * @return void
     */
    public function initialize(): void
    {
        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
    }

    /**
     * beforeFilter callback
     * @param \Cake\Event\EventInterface $event EventInterface
     * @return \Cake\Http\Response|null|void
     */
    public function beforeFilter(EventInterface $event)
    {
    }

    /**
     * beforeRender callback
     * @param \Cake\Event\EventInterface $event EventInterface
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(EventInterface $event)
    {
        parent::beforeRender($event);

        $this->viewBuilder()->setTemplatePath('Error');
    }

    /**
     * afterFilter callback
     * @param \Cake\Event\EventInterface $event EventInterface
     * @return \Cake\Http\Response|null|void
     */
    public function afterFilter(EventInterface $event)
    {
    }
}
