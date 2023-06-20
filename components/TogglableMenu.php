<?php

namespace Components;

use Helpers\PageHelper;
use Illuminate\View\Component;
use Illuminate\Container\Container;

class TogglableMenu extends Component {
    public $page;
    public \Closure $isActive;

    public function __construct (
      public string $toggleId,
    ) {
        $this->page = Container::getInstance()->make('pageData');
        $this->isActive = function ($path) {
            return PageHelper::isActive($this->page, $path);
        };
    }

    public function render () {
        return Container::getInstance()->make('view')->make('_components.togglablemenu');
    }
}
