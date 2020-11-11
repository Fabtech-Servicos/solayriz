<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Mailer\Email;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

include 'ContactsController.php';


class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function site()
    {
        $this->viewBuilder()->setLayout('site');
        $this->loadModel('Sliders');
        $this->loadModel('About');
        $this->loadModel('Products');
        $this->loadModel('Projects');
        $this->loadModel('Portfolio');
        $this->loadModel('Blog');
        $this->loadModel('Services');
        $this->loadModel('Categories');
        $this->loadModel('Videos');
        $this->loadModel('Installation');



        $sliders = $this->Sliders->find('all');
        $about = $this->About->find('all', array('limit' => 3))->order(['id' => 'desc']);
        $servic = $this->Portfolio->find('all', array('limit' => 3))->order(['id' => 'desc']);
        $servico = $this->Portfolio->find('all');
        $projects = $this->Projects->find('all')->order(['id DESC'])->limit(9);
        $blog = $this->Blog->find('all')->order(['id DESC'])->limit(3);
        $services = $this->Services->find('all')->order(['id DESC']);
        $ct = $this->Categories->find('all')->order(['id DESC']);
        $int = $this->Installation->find('all');



        $videos = $this->Videos->find('all')->order(['id DESC'])->limit(4);



//        if ($this->request->is('post')){
//            $formData = $this->request->getData();
//
//            $states = isset($formData['states']) ? implode($formData['states']) : '-';
//            var_dump($formData);
//            die();

//            $email = new Email('gmail');
//            $email->setFrom(['henrique@fabtechinfo.com.br' => 'Contato InnovarSeg'])
//                ->setTo('paulo.henrik.oliver@gmail.com')
//                ->setSubject('Solicitação se serviço')
//                ->send('Nome: ' . $formData['nome']
//                    . "\n". ' Email: ' . $formData['email']
//                    . "\n". ' Telefone: ' . $formData['tel']
//                    . "\n". ' Serviço: ' . $states);
//        }


        if ($this->request->is('post')){
            $formData = $this->request->getData();

            $email = new Email('default');
            $email->setFrom(['contato2@solayriz.com.br' => 'Contato Solayriz'])
                ->setTo('contato@solayriz.com.br')
                ->setSubject('Contato Solayriz')
                ->send('Nome: ' . $formData['   name']
                    . "\n". ' Valor: ' . $formData['vlr']
                    . "\n". ' Email: ' . $formData['email']
                    . "\n". ' Telefone: ' . $formData['tel']
                    . "\n". ' Mensagem: ' . $formData['email']);
        }






        $this->set('sliders', $sliders);
        $this->set('about', $about);
        $this->set('servic', $servic);
        $this->set('servico', $servico);
        $this->set('projects', $projects);
        $this->set('blog',$blog );
        $this->set('services',$services );
        $this->set('ct',$ct );
        $this->set('videos',$videos );
        $this->set('int',$int );




        $this->loadPublicDependencies();


    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();
    }


}
