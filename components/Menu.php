<?php

namespace Components;

use Helpers\PageHelper;
use Illuminate\View\Component;
use Illuminate\Container\Container;

class Menu extends Component {
    public $page;
    public \Closure $isActive;

    public function __construct () {
        $this->page = Container::getInstance()->make('pageData');
        $this->isActive = function ($page, $path) {
            return PageHelper::isActive($page, $path);
        };
    }

    public function render () {
        return Container::getInstance()->make('view')->make('_components.menu');
    }
}
