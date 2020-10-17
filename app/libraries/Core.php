<?php
class Core
{
    // Set the default route page details
    protected $currentController = 'Home';
    protected $currentControllerObject = '';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . strtolower($url[0]) . '.php')) {
                $this->currentController = ucfirst($url[0]);
            }else{
                $this->currentController = 'Main';
                $this->currentMethod = 'page_404';
            }
        }

        require_once('../app/controllers/' . $this->currentController . '.php');
        $this->currentControllerObject = new $this->currentController;

        if (isset($url[1])) {
            if (method_exists($this->currentControllerObject, strtolower($url[1]))) {
                $this->currentMethod = strtolower($url[1]);
            }else{
                $this->currentController = 'Main';
                $this->currentMethod = 'page_404';
                require_once('../app/controllers/' . $this->currentController . '.php');
                $this->currentControllerObject = new $this->currentController; 
            }
        }else{
            $this->currentController = 'Main';
            $this->currentMethod = 'page_404';
            require_once('../app/controllers/' . $this->currentController . '.php');
            $this->currentControllerObject = new $this->currentController;  
        }

        
        
        if(count($url)>2){
            unset($url[0]);
            unset($url[1]);
            $this->params = array_values($url);
        }
        
        call_user_func_array([$this->currentControllerObject, $this->currentMethod], $this->params);
    }

    // Get the Proper url
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}
