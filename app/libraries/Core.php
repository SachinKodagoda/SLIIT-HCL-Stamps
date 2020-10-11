<?php
class Core
{
    // Set the default route page details
    protected $currentController = 'Home';
    protected $currentMethod = 'home';
    protected $params = [];
    protected $notApage = false;

    public function __construct()
    {
        $this->notApage = false;
        $url = $this->getUrl();

        // Check the url[0] element
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . strtolower($url[0]) . '.php')) {
                $this->currentController = ucfirst($url[0]);
                $this->currentMethod = strtolower($url[0]);
                unset($url[0]);
                $this->notApage = true;
            }else{
                $this->currentController = 'main';
                $this->currentMethod = 'page_404';
            }
        }

        // Setup the page
        require_once('../app/controllers/' . $this->currentController . '.php');
        $this->currentController = new $this->currentController;


        // Setup the page calling method
        if ($this->notApage && isset($url[1])) {
            if (method_exists($this->currentController, strtolower($url[1]))) {
                $this->currentMethod = strtolower($url[1]);
                $this->currentMethod = strtolower($url[1]);
                unset($url[1]);
            }else{
                $this->currentController = 'main';
                $this->currentMethod = 'page_404';
                unset($url[1]);
                require_once('../app/controllers/' . $this->currentController . '.php');
                $this->currentController = new $this->currentController;
            }
        }

        // Setup parameters
        if($this->notApage){
            $this->params = $url ? array_values($url) : [];
        }
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
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
    }
}
