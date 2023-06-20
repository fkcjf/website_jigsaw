<?php

namespace Components;

use Helpers\PageHelper;
use Illuminate\View\Component;
use Illuminate\Container\Container;

class Menu extends Component {

    public function __construct (
      public $page
    ) {}

    public function render () {
        return Container::getInstance()->make('view')->make('_components.menu');
    }
}
