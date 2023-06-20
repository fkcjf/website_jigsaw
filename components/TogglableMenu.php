<?php

namespace Components;

use Illuminate\View\Component;
use Illuminate\Container\Container;

class TogglableMenu extends Component {
    public $page;

    public function __construct (
      public string $toggleId,
    ) {
        $this->page = Container::getInstance()->make('pageData');
    }

    public function render () {
        return Container::getInstance()->make('view')->make('_components.togglablemenu');
    }
}
