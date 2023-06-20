<?php

namespace Components;

use Helpers\PageHelper;
use Illuminate\View\Component;
use Illuminate\Container\Container;

class TogglableMenu extends Component {

    public function __construct (
      public $page,
      public string $toggleId,
    ) {}

    public function render () {
        return Container::getInstance()->make('view')->make('_components.togglablemenu');
    }
}
