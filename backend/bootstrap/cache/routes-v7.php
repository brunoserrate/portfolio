<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/receita/filtro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/receita' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/receita/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tipo_refeicao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tipo_refeicao/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/(?|receita/([^/]++)(?|(*:34)|/edit(*:46)|(*:53))|tipo_refeicao/([^/]++)(?|(*:86)|/edit(*:98)|(*:105))))/?$}sDu',
    ),
    3 => 
    array (
      34 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.show',
          ),
          1 => 
          array (
            0 => 'receitum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      46 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.edit',
          ),
          1 => 
          array (
            0 => 'receitum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      53 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.update',
          ),
          1 => 
          array (
            0 => 'receitum',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.receita.destroy',
          ),
          1 => 
          array (
            0 => 'receitum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.show',
          ),
          1 => 
          array (
            0 => 'tipo_refeicao',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.edit',
          ),
          1 => 
          array (
            0 => 'tipo_refeicao',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.update',
          ),
          1 => 
          array (
            0 => 'tipo_refeicao',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tipo_refeicao.destroy',
          ),
          1 => 
          array (
            0 => 'tipo_refeicao',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/receita/filtro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@filtro',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@filtro',
        'as' => 'api.',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/receita',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.index',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/receita/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.create',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@create',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@create',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/receita',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.store',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/receita/{receitum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.show',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@show',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@show',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/receita/{receitum}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.edit',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@edit',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@edit',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/receita/{receitum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.update',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@update',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.receita.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/receita/{receitum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.receita.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\ReceitaAPIController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tipo_refeicao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.index',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@index',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tipo_refeicao/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.create',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@create',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@create',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tipo_refeicao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.store',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@store',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@store',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tipo_refeicao/{tipo_refeicao}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.show',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@show',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@show',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tipo_refeicao/{tipo_refeicao}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.edit',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@edit',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@edit',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/tipo_refeicao/{tipo_refeicao}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.update',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@update',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@update',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'api.tipo_refeicao.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/tipo_refeicao/{tipo_refeicao}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.tipo_refeicao.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\TipoRefeicaoAPIController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
