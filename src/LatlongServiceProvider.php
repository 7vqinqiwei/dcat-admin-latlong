<?php

namespace Dcat\Admin\Latlong;

use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Show;
use Illuminate\Support\ServiceProvider;

class LatlongServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Extension $extension)
    {
        $this->loadViewsFrom($extension->views(), 'dcat-admin-latlong');

        Admin::booting(function () {
            Form::extend('latlong', Latlong::class);
            Show\Field::macro('latlong', Extension::showField());
        });
    }
}