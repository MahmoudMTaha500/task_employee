<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\FrontController;
// use PHPMVC\LIB\Template;
// use PHPMVC\Lib\Validate;

class AbstractController
{

    // use Validate;

    protected $_controller;
    protected $_action;
    protected $_params;
    /**
     * @var Template\Template
     */
    protected $_template;
    protected $_registry;

    protected $_data = [];

    public function __get($key)
    {
        return $this->_registry->$key;
    }

    public function notFoundAction()
    {
        $this->_view();
        // echo "sorry this page dosnt exits";
    }

    public function setController ($controllerName)
    {
        $this->_controller = $controllerName;
    }

    public function setAction ($actionName)
    {
        $this->_action = $actionName;
    }

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

    public function setRegistry($registry)
    {
        $this->_registry = $registry;
    }

    public function setParams ($params)
    {
        $this->_params = $params;
    }

    protected function _view()
    {
        if($this->_action == FrontController::NOT_FOUND_ACTION){
            require_once  VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';

        } else{

        $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
        if(file_exists($view)){
            // print_r($this->_data);die;

            // load($data);
            require_once  TEMPLATE_PATH . DS ."header.php";
            require_once  TEMPLATE_PATH . DS ."menu.php";
            require_once  TEMPLATE_PATH . DS ."sidebar.php";
              echo   '<div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container-fluid">';
            extract($this->_data);

                require_once $view;

                 
             echo '
                </div>
                </div>
                </div>
                </div>
                </div>

                </div>';


            require_once  TEMPLATE_PATH . DS ."footer.php";

        }else{
            require_once  VIEWS_PATH . 'notfound' . DS . 'noview.view.php';

        }
    }

    }

   
}