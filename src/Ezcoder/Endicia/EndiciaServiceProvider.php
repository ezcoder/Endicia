<?php

namespace Ezcoder\Endicia;

use Illuminate\Support\ServiceProvider;

class EndiciaServiceProvider extends ServiceProvider {

    protected $defer = false;

    public function boot() {
        $this->package('ezcoder/endicia');
    }

    public function register() {
        
    }

    public function provides() {
        return array();
    }

}
