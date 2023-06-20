<?php

namespace Components;

use Illuminate\View\Component;
use Illuminate\Container\Container;

class Menu extends Component {
    public $page;

    public function __construct () {
        $this->page = Container::getInstance()->make('pageData');
    }

    public function render () {
        return Container::getInstance()->make('view')->make('_components.menu');
    }
}
