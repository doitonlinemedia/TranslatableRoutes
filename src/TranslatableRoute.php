<?php namespace Doitonlinemedia\Translatableroutes;

class TranslatableRoute
{
    public function __construct()
    {
        \App::make('translator')->addNamespace('TranslatableRoute', __DIR__.'/resources/lang');
    }

    public function resource($name, $translation, $controller, $except = array())
    {
        $routes = $this->GetDefaultResourceRoutes($name);
        foreach($routes as $method => $options) {
            $this->GetRoute($name, $controller, $method, $options['type'], $options['name'], $translation);
        }
    }

    public function GetRoute($route, $controller, $method, $type, $name, $named) {
        $router = \App::make('router');
        $prefix = str_replace('/', '.', ltrim($router->getLastGroupPrefix(), '/'));
        \Route::$type($named.'/'.$name, ['as' => (($prefix) ? $prefix.'.' : '').$route.'.'.$method, 'uses' => $controller.'@'.$method]);
    }

    public function GetDefaultResourceRoutes($route) {
        $index = (trans('TranslatableRoute::routes.index') === 'TranslatableRoute::routes.index') ? '' : trans('TranslatableRoute::routes.index');
        return [
            'store' => [
                'type' => 'post',
                'name' => ''
            ],
            'index' => [
                'type' => 'get',
                'name' => $index
            ],
            'create' => [
                'type' => 'get',
                'name' => trans('TranslatableRoute::routes.create')
            ],
            'update' => [
                'type' => 'put',
                'name' => '{'.$route.'}'
            ],
            'show' => [
                'type' => 'get',
                'name' => '{'.$route.'}'
            ],
            'destroy' => [
                'type' => 'delete',
                'name' => '{'.$route.'}'
            ],
            'edit' => [
                'type' => 'get',
                'name' => '{'.$route.'}/'.trans('TranslatableRoute::routes.edit')
            ]
        ];
    }
}