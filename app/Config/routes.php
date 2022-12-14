<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
   Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
    Router::connect('/register', array('controller' => 'pages', 'action' => 'register'));

    Router::connect('/login', array('controller' => 'pages', 'action' => 'login'));

    Router::connect('/logout', array('controller' => 'pages', 'action' => 'logout'));

    Router::connect('/thankyou', array('controller' => 'pages', 'action' => 'thankyou'));

    Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


    Router::connect('/home', array('controller' => 'home', 'action' => 'index'));

    Router::connect('/home/profile', array('controller' => 'home', 'action' => 'profile'));

    Router::connect('/home/userprofile/:id', array('controller' => 'home', 'action' => 'userProfile'), array('pass' => array('id')));

     Router::connect('/home/changepassword/', array('controller' => 'home', 'action' => 'changePassword'));

    Router::connect('/home/editprofile', array('controller' => 'home', 'action' => 'editProfile'));

    Router::connect('/home/newmessage', array('controller' => 'home', 'action' => 'newMessage'));

    Router::connect('/home/getrecipients', array('controller' => 'home', 'action' => 'getRecipients'));

    Router::connect('/home/getmessagelists', array('controller' => 'home', 'action' => 'getMessageLists'));

    Router::connect('/home/getmessagelists2', array('controller' => 'home', 'action' => 'getMessageLists2'));

    Router::connect('/home/details/:id', array('controller' => 'home', 'action' => 'details'), array('pass' => array('id')));

    Router::connect('/home/comment', array('controller' => 'home', 'action' => 'comment'));

    Router::connect('/home/getcomments', array('controller' => 'home', 'action' => 'getComments'));

    Router::connect('/home/getcomments2', array('controller' => 'home', 'action' => 'getComments2'));

    Router::connect('/home/searchcmessage', array('controller' => 'home', 'action' => 'searchMessage'));

    Router::connect('/home/delete', array('controller' => 'home', 'action' => 'delete'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
   CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
   require CAKE . 'Config' . DS . 'routes.php';
