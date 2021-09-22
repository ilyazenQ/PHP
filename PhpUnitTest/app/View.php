<?php

namespace App;
use App\Exceptions\ViewNotFoundException;

class View
{


    public function __construct(
        protected string $view,
        protected array $params = [])
    {
    }

    public function render(bool $includeLayout)
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';
        $layout = LAYOUT_VIEW_PATH;
        $content = $viewPath;

        if(!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }
        if ($includeLayout) {
            ob_start();

            include $layout;

            return (string)ob_get_clean();
        } else {
            ob_start();

            include $content;

            return (string)ob_get_clean();
        }
    }
    public static function  make(string $view, array $params = []) {

        return new static($view,$params);

    }
    public function __get(string $name)
    {
        return $this -> params[$name]?? null;
    }
}