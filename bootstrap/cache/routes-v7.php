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
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
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
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
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
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhSKvZAtxvHdkYVX',
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
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9szddhtRHyDaIhPp',
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
      '/inbox' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inbox',
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
      '/inbox/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RoBcc1kGvvBe5JSi',
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
      '/inbox/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.message',
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
      '/inbox/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.messages',
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
      '/inbox/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pusher.auth',
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
      '/inbox/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.seen',
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
      '/inbox/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.get',
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
      '/inbox/updateContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
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
      '/inbox/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'star',
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
      '/inbox/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favorites',
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
      '/inbox/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
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
      '/inbox/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shared',
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
      '/inbox/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'conversation.delete',
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
      '/inbox/deleteMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message.delete',
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
      '/inbox/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar.update',
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
      '/inbox/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activeStatus.set',
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
      '/inbox/api/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.pusher.auth',
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
      '/inbox/api/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.idInfo',
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
      '/inbox/api/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send.message',
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
      '/inbox/api/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fetch.messages',
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
      '/inbox/api/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.messages.seen',
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
      '/inbox/api/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contacts.get',
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
      '/inbox/api/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.star',
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
      '/inbox/api/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.favorites',
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
      '/inbox/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
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
      '/inbox/api/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shared',
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
      '/inbox/api/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.conversation.delete',
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
      '/inbox/api/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.avatar.update',
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
      '/inbox/api/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.activeStatus.set',
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
      '/dashboard/system/logs/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
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
      '/dashboard/system/logs/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
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
      '/dashboard/system/logs/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
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
      '/dashboard/system/logs/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
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
      '/dashboard/system/logs/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
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
      '/dashboard/system/logs/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
      '/wireui/button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.render.button',
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
      '/wireui/assets/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.scripts',
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
      '/wireui/assets/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.styles',
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
      '/paymentIPN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_ipn',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t4eiU9CGkGWbqdrN',
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
      '/tasks/queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SP9PhEfU38vDuyZw',
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
      '/tasks/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SJb594aRERsKTmig',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bUX3HM30Kdcm1H7A',
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
      '/explore/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1f7wfPVVN42Dxuiv',
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
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MNlE4sqLQpa0VqzA',
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
      '/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z2JhASsamOx2GiGM',
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
      '/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QLLxK85h8rIazLwJ',
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
      '/newsletter/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fV22VJXbTTE3EKLC',
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
      '/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7wHmUzGrHPf2o6VV',
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
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
      '/auth/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xsinWdaCp5k6AlCs',
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
      '/auth/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BvnqusTWRiq0Urad',
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
      '/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QhTizQrxZ3lCbeCw',
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
      '/auth/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oHEXnSxgmdDAjSuL',
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
      '/auth/github' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::50Z98vRGnZwrkhh0',
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
      '/auth/github/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NPNc6eTXbljydwh0',
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
      '/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O2wpX2NuTCgmKhEk',
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
      '/auth/linkedin/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4LscNhdFB1vVPwNz',
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
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O61OtwlfyZKQwZg8',
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
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6H93lTEjwEHuAXY',
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
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t5EIhSfOxTMhOPjg',
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
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IInpLDitlIwdiWb2',
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
      '/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P2M7fBscmVZBLvp6',
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
      '/auth/twitter/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5AG6IryhsjgYpoDT',
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
      '/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hhD4zxTt7IjYVa5L',
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
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0MFgSv9hejEN0yaG',
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
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aTLy4xuSZL2ZfP7j',
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
      '/checkout/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bbl6FGVlPkRlIrPy',
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
      '/checkout/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::057gjaLUrM9Rp5Uu',
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
      '/checkout/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HbccgVA9TYvLCXHS',
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
      '/checkout/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5BT0c5ENq0GMT9hB',
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
      '/checkout/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ULJpFsKXktCjKKWb',
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
      '/checkout/callback/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mxliBjMTrsv4F5xo',
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
      '/checkout/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0boIzVeupKRwYB3s',
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
      '/checkout/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VoeRxq66ipRoqYaC',
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
      '/checkout/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dr6yH7R9dfcCOHG8',
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
      '/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J2IWkrH04vBae9oo',
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
      '/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ap96AsSTfQfUJGrw',
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
      '/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oxa9GpjtnfOmIMjk',
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
      '/account/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B961S2kNZgCWlwv1',
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
      '/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6IxBOryrvRZO8xzD',
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
      '/account/orders/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e1sGaOSsF7LgOHdl',
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
      '/account/orders/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2ijpxLtzYociyE8',
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
      '/account/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PsGq2Hp22HevOTKR',
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
      '/account/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9QInbC1Cut46mpl7',
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
      '/account/billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pQgx5XOchmecDnvB',
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
      '/account/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lDGfppelH5FKrSaL',
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
      '/account/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7xgxYsIqBVhaTVe9',
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
      '/account/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KoBHapIDGBxeveMW',
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
      '/account/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nNi2C5ZmkHZE5mpu',
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
      '/account/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a2asQW8VMfO2upVu',
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
      '/account/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDnmmmaHpoYFNYMx',
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
      '/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PMQX3ipYRMNZbiwv',
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
      '/start_selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l4yXCjiD4bPr3zpt',
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
      '/seller/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UjXmy0ijcGZ0Orht',
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
      '/seller/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yxuqmgUcLUnTnv8a',
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
      '/seller/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GyxsRzev5lTop0qW',
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
      '/seller/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QMxJB2E2tN58IgSd',
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
      '/seller/portfolio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yWbNNbb8yEeejbk5',
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
      '/seller/portfolio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d09ure8ImCSVEbVV',
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
      '/seller/earnings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gv0ZkGJWNL0VrR1Z',
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
      '/seller/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0FM8hz8ZjpceT4is',
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
      '/seller/withdrawals/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pep0vPLs3c7ERax0',
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
      '/seller/withdrawals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZlicvOQaRFewjtE1',
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
      '/seller/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1O3AD54Pcc5RWyGc',
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
      '/seller/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fIPtrbsPOCAgKjHS',
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
      '/seller/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BeHTmJhpTv3XOKHJ',
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
      '/seller/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FtAGyDwVe6f65CkQ',
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
      '/help/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awOzfdGcstFPnpeQ',
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
      '/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ogQzrvim5NS32c33',
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
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XD3IdsVraykkarVC',
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
      '/post/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ugy3GK33UdEFhqYN',
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
            '_route' => 'generated::ntyfShtE0SLQPs8p',
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
      '/post/project/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MalHYRWF7JkTabYj',
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
      '/account/deposit/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mvp7j6FqybiTmPq4',
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
      '/account/deposit/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4K8qrKAbsfbIbtGD',
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
      '/account/deposit/callback/cashfree/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e556p8Lu71v73gdc',
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
      '/account/deposit/callback/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MW25h5Of3fw3uF7A',
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
      '/account/deposit/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2gfeSVCf7V7YSQ6e',
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
      '/account/deposit/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2QKL4kWO1Dg5cYJN',
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
      '/account/deposit/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HxbQwp1peSknKLwV',
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
      '/account/deposit/callback/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qlx0tXHP8ihQZYbn',
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
      '/account/deposit/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TSPatnqpCJrcfWje',
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
      '/account/deposit/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GExSRiaYJ4JE8Xw6',
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
      '/account/deposit/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JmuP5AzsAfklUWRn',
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
      '/callback/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ap70y5pPDr9rScoz',
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
      '/callback/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6AtI23s8YZxZDdRe',
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
      '/callback/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CSaf3VxjoYYHHJAt',
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
            '_route' => 'generated::kLJcmTXdDJE1jp1J',
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
      '/callback/mollie/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bBwOuVd3coXKlmBM',
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
      '/callback/mollie/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HRl7XbI79IQHbFlu',
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
      '/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qUWgm51evkIr7sgB',
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
      '/checkout/callback/cashfree/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zz6ez7329gdzzCRA',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mIXiEAMNjrEwTj72',
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
      '/dashboard/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::csTVIyA3sYhWgOTC',
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
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A4OKRsjGK3oY6PeV',
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
      '/dashboard/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TLo0pi4DE8JdYLxP',
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
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Itpt8LzM5FappKSB',
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
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WNIhgMeMonIqOWCj',
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
      '/dashboard/users/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lpon7Wtq6V9WdP6Q',
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
      '/dashboard/users/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ftot59ysARQoUNcR',
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
      '/dashboard/levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vfEgy3MsXGUkyaMu',
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
      '/dashboard/levels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8zG5kFGZMt5TU879',
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
      '/dashboard/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bYzDdLvmGWbIyKs7',
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
      '/dashboard/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EQanSAv12q2043Lg',
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
      '/dashboard/gigs/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zTDmLGdz42YKU3Qs',
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
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfLw9XaiqehkIXd1',
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
      '/dashboard/portfolios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e5VbXUZO2zSJ5MFx',
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
      '/dashboard/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w6KoCq84LeGgB5pi',
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
      '/dashboard/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5J8y8Ge8L82xThgd',
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
      '/dashboard/projects/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pd0kYlttwJUul2yr',
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
      '/dashboard/projects/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEiTtueb8Agcfuas',
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
      '/dashboard/projects/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::73Mf5vqwh4jsc83c',
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
      '/dashboard/projects/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zVcPnwQuVf636hOU',
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
      '/dashboard/projects/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TFBK6ltRDymaNslN',
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
      '/dashboard/projects/skills/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cMbrjQNgRwz116RZ',
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
      '/dashboard/projects/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6zY4x8g2vytbbfvj',
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
      '/dashboard/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N4nTXTSjtLuN870I',
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
      '/dashboard/projects/bids/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BWZJKGX9adf5yYmk',
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
      '/dashboard/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E1bfaZh0jiGROHzi',
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
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lRLEfHISwbXrUfM8',
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
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uME6pM2yOQ0idbKV',
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
      '/dashboard/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eu96ONvtw2XddELB',
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
      '/dashboard/subcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HsHwioOM13iZ7eo',
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
      '/dashboard/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVJeKIE06QixPf2U',
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
      '/dashboard/reports/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AFg0nXFo6IXI0Kwv',
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
      '/dashboard/reports/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I12KujYxonjNI67b',
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
      '/dashboard/reports/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::azZM3lch0ydxBnX3',
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
      '/dashboard/reports/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K2YBs6w3KXAbkary',
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
      '/dashboard/conversations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2ghCBZlHvPQbM8J',
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
      '/dashboard/advertisements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QZekgezDJRSwtZWF',
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
      '/dashboard/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wziaZ0USLvs7bxIT',
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
      '/dashboard/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eDuKUVRf5Za7MFwq',
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
      '/dashboard/newsletter/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QjSAybuWZCbGTDrS',
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
      '/dashboard/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYjqB71RXr3kRuvd',
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
      '/dashboard/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x4Fs7ne97rnz3Vrt',
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
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zWnlY4Lnfyk4B3Tp',
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
      '/dashboard/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vmhuvR04MgwATGPE',
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
      '/dashboard/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sR1ETCaWWwsCGmPm',
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
      '/dashboard/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jQp0s2NZscVI5nGQ',
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
      '/dashboard/services/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4KB1hb7fsK5qiw1O',
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
      '/dashboard/services/payment/edit/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::52u7uu108NDaP4NQ',
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
      '/dashboard/services/payment/edit/duitku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::haKbfpoh9jC6hP6W',
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
      '/dashboard/services/payment/edit/genie-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AT38iT1eyQv2JL4z',
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
      '/dashboard/services/payment/edit/asaas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mLst9WcCVsAntmvr',
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
      '/dashboard/services/payment/edit/ecpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::349h8Kr1JN3FjYCs',
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
      '/dashboard/services/payment/edit/fastpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZOzw3cauYcXu7B7u',
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
      '/dashboard/services/payment/edit/freekassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6WfugFPJRg2Y7lAA',
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
      '/dashboard/services/payment/edit/paymob-pk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ww4zTEpv909WBgJV',
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
      '/dashboard/services/payment/edit/cpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maLMziyuM7ddOhSD',
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
      '/dashboard/services/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqKUB9Uf1rwHqpTT',
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
      '/dashboard/services/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0mID4vF5JQPzSA3t',
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
      '/dashboard/services/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::236lnD9pHZPI83Hr',
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
      '/dashboard/services/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z6yt6vIw0GfFA3LU',
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
      '/dashboard/services/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0nHGMisC3XpaH5D6',
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
      '/dashboard/services/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3mJ3QTynJy3ftVue',
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
      '/dashboard/services/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m32A3YIWYMTOY9uC',
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
      '/dashboard/services/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pAw4A4EnmMEiPSCS',
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
      '/dashboard/services/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Noyv643DTxlHtJ83',
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
      '/dashboard/services/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n9zYWhq8d8wbgjWN',
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
      '/dashboard/services/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rf3I5CRHR3a1yrLL',
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
      '/dashboard/services/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EiO7Lcp6P16vWPGp',
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
      '/dashboard/services/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C8XfzJ0gglUxY5Ml',
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
      '/dashboard/services/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::468m8gzSivt2L2Uq',
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
      '/dashboard/services/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kRI884Uh2Nnsgv12',
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
      '/dashboard/services/recaptcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vmTOQ97swDp87MeI',
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
      '/dashboard/services/cloudinary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMOvohGau387IGl5',
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
      '/dashboard/services/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::98SWH2JMtaIb4V1A',
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
      '/dashboard/services/nowpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ax6fLoeiiMu4xN46',
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
      '/dashboard/services/epoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RYLN2fMbNAss1aPo',
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
      '/dashboard/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LWH8qYMHaxh63CNK',
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
      '/dashboard/settings/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9muzz5zF0w91sebY',
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
      '/dashboard/settings/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9MEPdGI2WX0P6LS6',
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
      '/dashboard/settings/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PlHN9QVF2RxxckT9',
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
      '/dashboard/settings/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SWnVEjv94mQgdDIp',
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
      '/dashboard/settings/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dn3MaeIj7BBfRiDm',
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
      '/dashboard/settings/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jyv66tbZ4FG7VRAF',
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
      '/dashboard/settings/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vqMVTz9yEJAiuXQY',
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
      '/dashboard/settings/seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SWnYIANvtqQpt0cH',
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
      '/dashboard/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jWraJI1C2bvrazp4',
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
      '/dashboard/settings/withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ilHOA0ZIekk4shNR',
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
      '/dashboard/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PiOp4Tbe2muFbLNC',
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
      '/dashboard/settings/hero' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZeEFmPpIB1N30x76',
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
      '/dashboard/settings/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::McscyrD8VqWszwFC',
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
      '/dashboard/verifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u6m8iJhGWbg0nwbj',
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
      '/dashboard/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3uCBU5RdDEAjMgt0',
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
      '/dashboard/blog/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OwHeUJtPzRljnBBc',
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
      '/dashboard/blog/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xeaScmI1Azl9kI0n',
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
      '/dashboard/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::niAAUb56UsbAt9CN',
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
      '/dashboard/system/crontab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z4JlvUYV6eWchQtq',
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
      '/dashboard/system/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3P0pAy1YD071hMNL',
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
      '/dashboard/system/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbP4ZXdPmcaAAwfq',
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
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7B5bfPTvCYjasmB7',
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
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/message/([^/]++)(*:107)|/([^/]++)/livewire/message/([^/]++)(*:150)|/livewire/preview\\-file/([^/]++)(*:190)|/inbox/(?|download/([^/]++)(*:225)|group/([^/]++)(*:247)|([^/]++)(*:263)|api/download/([^/]++)(*:292))|/dashboard/(?|s(?|ystem/logs(?|/api/f(?|olders/([^/]++)(?|/(?|download(*:371)|clear\\-cache(*:391))|(*:400))|iles/([^/]++)(?|/(?|download(*:437)|clear\\-cache(*:457))|(*:466)))|(?:/((?:.*)))?(*:490))|ubcategories/edit/([^/]++)(*:525))|users/(?|edit/([^/]++)(*:556)|details/([^/]++)(*:580)|balance/([^/]++)(*:604))|l(?|evels/edit/([^/]++)(*:636)|anguages/(?|edit/([^/]++)(*:669)|translate/([^/]++)(*:695)))|gigs/(?|edit/([^/]++)(*:726)|analytics/([^/]++)(*:752))|orders/details/([^/]++)(*:784)|refunds/details/([^/]++)(*:816)|p(?|rojects/(?|milestones/([^/]++)(*:858)|plans/(?|edit/([^/]++)(*:888)|bidding/edit/([^/]++)(*:917))|categories/edit/([^/]++)(*:950)|skills/edit/([^/]++)(*:978))|ages/edit/([^/]++)(*:1005))|c(?|ategories/edit/([^/]++)(*:1042)|ountries/edit/([^/]++)(*:1073))|blog/(?|comments/edit/([^/]++)(*:1113)|edit/([^/]++)(*:1135)))|/wireui/icons/((?:outline|solid))/([^/]++)(*:1188)|/explore/projects/([^/]++)(?|(*:1226)|/([^/]++)(*:1244))|/p(?|ro(?|ject/([^/]++)/([^/]++)(*:1286)|file/([^/]++)(?|(*:1311)|/portfolio(?|(*:1333)|/([^/]++)(*:1351))))|age/([^/]++)(*:1375))|/blog/([^/]++)(*:1399)|/se(?|rvice/([^/]++)(*:1428)|ller/(?|gigs/(?|analytics/([^/]++)(*:1471)|edit/([^/]++)(*:1493))|re(?|views/details/([^/]++)(*:1530)|funds/details/([^/]++)(*:1561))|orders/(?|de(?|tails/([^/]++)(*:1600)|liver/([^/]++)(*:1623))|requirements/([^/]++)(*:1654))|p(?|ortfolio/edit/([^/]++)(*:1690)|rojects/(?|milestones/([^/]++)(*:1729)|bids/(?|checkout/([^/]++)(*:1763)|edit/([^/]++)(*:1785))))))|/c(?|heckout/callback/mollie/(?|([^/]++)(*:1839)|redirect(*:1856)|webhook(*:1872))|ategories/([^/]++)(?|(*:1903)|/([^/]++)(*:1921)))|/account/(?|re(?|views/(?|create/([^/]++)(*:1973)|preview/([^/]++)(*:1998)|edit/([^/]++)(*:2020))|funds/(?|request/([^/]++)(*:2055)|details/([^/]++)(*:2080)))|projects/(?|checkout/([^/]++)(*:2120)|milestones/([^/]++)(*:2148)|edit/([^/]++)(?|(*:2173)))|deposit/callback/mollie/([^/]++)(*:2216))|/hire/([^/]++)(*:2240)|/messages/(?|new/([^/]++)(*:2274)|([^/]++)(*:2291))|/reviews/([^/]++)(*:2318)|/uploads/(?|d(?|ocuments/([^/]++)(*:2360)|elivered/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2413))|requirements/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2471)|verifications/([^/]++)/([^/]++)/([^/]++)(*:2520)|offers/(?|([^/]++)(*:2547)|work/([^/]++)(*:2569))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
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
      225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
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
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group',
          ),
          1 => 
          array (
            0 => 'id',
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
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => 
          array (
            0 => 'id',
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
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
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
      371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
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
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
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
      400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
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
      437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
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
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
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
      466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
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
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
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
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZqFvt0AVthWQiPIn',
          ),
          1 => 
          array (
            0 => 'id',
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
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l7712tvDRE12r31L',
          ),
          1 => 
          array (
            0 => 'id',
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
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::spOpcNVsiDWcDJgf',
          ),
          1 => 
          array (
            0 => 'id',
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
      604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MVhws6WjSDEBV5xa',
          ),
          1 => 
          array (
            0 => 'id',
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
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SjS9Isf7rjwb1b7M',
          ),
          1 => 
          array (
            0 => 'id',
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
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6PyWHL6clxRl3EnR',
          ),
          1 => 
          array (
            0 => 'id',
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
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NyBwvhYe3Iky9Je9',
          ),
          1 => 
          array (
            0 => 'id',
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
      726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bGVFLS4U3fFjE2t8',
          ),
          1 => 
          array (
            0 => 'id',
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
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2T7GHitO93FUuhEH',
          ),
          1 => 
          array (
            0 => 'id',
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
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kMWn5hii9Hxa5vx',
          ),
          1 => 
          array (
            0 => 'id',
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
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wHSJb6c5h3aPhFY8',
          ),
          1 => 
          array (
            0 => 'id',
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
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sDYHm7xVCVo51HYU',
          ),
          1 => 
          array (
            0 => 'id',
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
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gVh1v1jzMqFHsRGD',
          ),
          1 => 
          array (
            0 => 'id',
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
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f7yorAPHLBUSp8jX',
          ),
          1 => 
          array (
            0 => 'id',
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
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qCa9jFKxvS5NECr1',
          ),
          1 => 
          array (
            0 => 'id',
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
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KQpitkXYsdLSNDYf',
          ),
          1 => 
          array (
            0 => 'id',
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
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UqkZDd7ElUDtORq1',
          ),
          1 => 
          array (
            0 => 'id',
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skEnJqXaMm20nmsg',
          ),
          1 => 
          array (
            0 => 'id',
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
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bfCvyKcvwdNDatFo',
          ),
          1 => 
          array (
            0 => 'id',
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
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgQ7KBoWyjMbp0Tn',
          ),
          1 => 
          array (
            0 => 'id',
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
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ShNqOqemGKyxr5R',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.icons',
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'icon',
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
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eI3l9lXeS8rfWh9H',
          ),
          1 => 
          array (
            0 => 'category_slug',
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
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EtYCMAYmmseku8V2',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'skill_slug',
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
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m5jFLIlLTe66Tjpa',
          ),
          1 => 
          array (
            0 => 'pid',
            1 => 'slug',
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
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2HbK6p4pV4Yt86S2',
          ),
          1 => 
          array (
            0 => 'username',
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
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UC1pjwlljNQN7MBa',
          ),
          1 => 
          array (
            0 => 'username',
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
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fePgSJZEFzQN3D8W',
          ),
          1 => 
          array (
            0 => 'username',
            1 => 'slug',
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
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGQk3c7uK0T5hlEU',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ViAIP6nQMTClMHx2',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZFxJCYsBqT58nkv3',
          ),
          1 => 
          array (
            0 => 'id',
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
      1493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::giV8IqnJevMNoUby',
          ),
          1 => 
          array (
            0 => 'id',
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
      1530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fswddD54s57YXs2P',
          ),
          1 => 
          array (
            0 => 'id',
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
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LCBjm6BIZ6Z53Ic3',
          ),
          1 => 
          array (
            0 => 'id',
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
      1600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h9edndcpZWMITd1P',
          ),
          1 => 
          array (
            0 => 'id',
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
      1623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7vyvi1TpZGeciMiF',
          ),
          1 => 
          array (
            0 => 'id',
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
      1654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lL8UAqcvtsP87CTu',
          ),
          1 => 
          array (
            0 => 'id',
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
      1690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FBEATDIdAEXDqjdf',
          ),
          1 => 
          array (
            0 => 'id',
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
      1729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDyXEZpdLa0B8rpZ',
          ),
          1 => 
          array (
            0 => 'id',
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
      1763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPAwL2LQ61WPCnSD',
          ),
          1 => 
          array (
            0 => 'id',
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
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yC3YXT3v28vv7Vja',
          ),
          1 => 
          array (
            0 => 'id',
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
      1839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2fktEoNU4T9E7Wvh',
          ),
          1 => 
          array (
            0 => 'id',
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
      1856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mND0BNQgz6woYVh8',
          ),
          1 => 
          array (
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
      1872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PtRYstMTgqHURI0S',
          ),
          1 => 
          array (
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
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H9ooOfmtYUPvJD4A',
          ),
          1 => 
          array (
            0 => 'parent',
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
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJVjsUf2gpnm33WJ',
          ),
          1 => 
          array (
            0 => 'parent',
            1 => 'subcategory',
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
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JEWe9XYtDjzKTtjx',
          ),
          1 => 
          array (
            0 => 'itemId',
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
      1998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w7Lkb2FVs3krabwC',
          ),
          1 => 
          array (
            0 => 'id',
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
      2020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DY1Xv9wAomOKBOGx',
          ),
          1 => 
          array (
            0 => 'id',
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
      2055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJNnhwX5LEkJG1RQ',
          ),
          1 => 
          array (
            0 => 'id',
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
      2080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XwBkAlD6MsJjamOh',
          ),
          1 => 
          array (
            0 => 'id',
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
      2120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ovqJUKzlLYpus2ug',
          ),
          1 => 
          array (
            0 => 'id',
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
      2148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fNRed1VSqyCruETB',
          ),
          1 => 
          array (
            0 => 'id',
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
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fc19R1n7I1Jz7uPe',
          ),
          1 => 
          array (
            0 => 'id',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U9DxJ4jTihay9nSl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ovZBTls864Xn2D8c',
          ),
          1 => 
          array (
            0 => 'id',
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
      2240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ajn17fHjYnFgERUQ',
          ),
          1 => 
          array (
            0 => 'keyword',
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
      2274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLTDtYydDv3YTOAt',
          ),
          1 => 
          array (
            0 => 'username',
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
      2291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3YGRMqr02vlroaQX',
          ),
          1 => 
          array (
            0 => 'conversationId',
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
      2318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BqCNRBJsECJ7EyyE',
          ),
          1 => 
          array (
            0 => 'id',
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
      2360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WuA5bnotghGFR1d5',
          ),
          1 => 
          array (
            0 => 'uid',
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
      2413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OdsmOlbCiYIkspl4',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'workId',
            3 => 'fileId',
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
      2471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yj0p5BztT36PJCoQ',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'reqId',
            3 => 'fileId',
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
      2520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GMVabvCxEboEcpmw',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'fileId',
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
      2547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HOFIMWaGhpuf5KFL',
          ),
          1 => 
          array (
            0 => 'file',
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
      2569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kxM9M46CpuiTpfv9',
          ),
          1 => 
          array (
            0 => 'file',
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
        1 => 
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
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
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'generated::OhSKvZAtxvHdkYVX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::OhSKvZAtxvHdkYVX',
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
      'withTrashed' => false,
    ),
    'generated::9szddhtRHyDaIhPp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::9szddhtRHyDaIhPp',
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
      'withTrashed' => false,
    ),
    'inbox' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'inbox',
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
      'withTrashed' => false,
    ),
    'generated::RoBcc1kGvvBe5JSi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'generated::RoBcc1kGvvBe5JSi',
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
      'withTrashed' => false,
    ),
    'send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'send.message',
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
      'withTrashed' => false,
    ),
    'fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'fetch.messages',
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
      'withTrashed' => false,
    ),
    'attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'attachments.download',
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
      'withTrashed' => false,
    ),
    'pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'pusher.auth',
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
      'withTrashed' => false,
    ),
    'messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'messages.seen',
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
      'withTrashed' => false,
    ),
    'contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.get',
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
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.update',
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
      'withTrashed' => false,
    ),
    'star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'star',
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
      'withTrashed' => false,
    ),
    'favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'favorites',
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
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'search',
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
      'withTrashed' => false,
    ),
    'shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'shared',
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
      'withTrashed' => false,
    ),
    'conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'conversation.delete',
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
      'withTrashed' => false,
    ),
    'message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'message.delete',
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
      'withTrashed' => false,
    ),
    'avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'avatar.update',
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
      'withTrashed' => false,
    ),
    'activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'activeStatus.set',
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
      'withTrashed' => false,
    ),
    'group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'group',
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
      'withTrashed' => false,
    ),
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'user',
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
      'withTrashed' => false,
    ),
    'api.pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.pusher.auth',
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
      'withTrashed' => false,
    ),
    'api.idInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.idInfo',
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
      'withTrashed' => false,
    ),
    'api.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.send.message',
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
      'withTrashed' => false,
    ),
    'api.fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.fetch.messages',
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
      'withTrashed' => false,
    ),
    'api.attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.attachments.download',
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
      'withTrashed' => false,
    ),
    'api.messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.messages.seen',
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
      'withTrashed' => false,
    ),
    'api.contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.contacts.get',
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
      'withTrashed' => false,
    ),
    'api.star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.star',
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
      'withTrashed' => false,
    ),
    'api.favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.favorites',
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
      'withTrashed' => false,
    ),
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.search',
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
      'withTrashed' => false,
    ),
    'api.shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.shared',
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
      'withTrashed' => false,
    ),
    'api.conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.conversation.delete',
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
      'withTrashed' => false,
    ),
    'api.avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.avatar.update',
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
      'withTrashed' => false,
    ),
    'api.activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.activeStatus.set',
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
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
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
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
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
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
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
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
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
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
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
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
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
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
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
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
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
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
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
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
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
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
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
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
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
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
    'wireui.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/icons/{style}/{icon}',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\IconsController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\IconsController',
        'as' => 'wireui.icons',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
        'style' => '(outline|solid)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.render.button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/button',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\ButtonController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\ButtonController',
        'as' => 'wireui.render.button',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
      'withTrashed' => false,
    ),
    'wireui.assets.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/scripts',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'as' => 'wireui.assets.scripts',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
      'withTrashed' => false,
    ),
    'wireui.assets.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/styles',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'as' => 'wireui.assets.styles',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
      'withTrashed' => false,
    ),
    'payment_ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paymentIPN',
      'action' => 
      array (
        'uses' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'controller' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'as' => 'payment_ipn',
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
      'withTrashed' => false,
    ),
    'generated::t4eiU9CGkGWbqdrN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000064d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::t4eiU9CGkGWbqdrN',
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
      'withTrashed' => false,
    ),
    'generated::SP9PhEfU38vDuyZw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:108:"function() {

        \\Artisan::call(\'queue:work\', [\'--stop-when-empty\' => true, \'--force\' => true]);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006510000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::SP9PhEfU38vDuyZw',
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
      'withTrashed' => false,
    ),
    'generated::SJb594aRERsKTmig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:60:"function() {

        \\Artisan::call(\'schedule:run\');

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006530000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::SJb594aRERsKTmig',
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
      'withTrashed' => false,
    ),
    'generated::bUX3HM30Kdcm1H7A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bUX3HM30Kdcm1H7A',
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
      'withTrashed' => false,
    ),
    'generated::1f7wfPVVN42Dxuiv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::1f7wfPVVN42Dxuiv',
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
      'withTrashed' => false,
    ),
    'generated::eI3l9lXeS8rfWh9H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::eI3l9lXeS8rfWh9H',
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
      'withTrashed' => false,
    ),
    'generated::EtYCMAYmmseku8V2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}/{skill_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::EtYCMAYmmseku8V2',
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
      'withTrashed' => false,
    ),
    'generated::m5jFLIlLTe66Tjpa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/{pid}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Project',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::m5jFLIlLTe66Tjpa',
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
      'withTrashed' => false,
    ),
    'generated::MNlE4sqLQpa0VqzA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::MNlE4sqLQpa0VqzA',
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
      'withTrashed' => false,
    ),
    'generated::ViAIP6nQMTClMHx2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::ViAIP6nQMTClMHx2',
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
      'withTrashed' => false,
    ),
    'generated::z2JhASsamOx2GiGM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Sellers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::z2JhASsamOx2GiGM',
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
      'withTrashed' => false,
    ),
    'generated::QLLxK85h8rIazLwJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Redirect',
        'prefix' => '/redirect',
        'where' => 
        array (
        ),
        'as' => 'generated::QLLxK85h8rIazLwJ',
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
      'withTrashed' => false,
    ),
    'generated::fV22VJXbTTE3EKLC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Newsletter',
        'prefix' => '/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::fV22VJXbTTE3EKLC',
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
      'withTrashed' => false,
    ),
    'generated::7wHmUzGrHPf2o6VV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::7wHmUzGrHPf2o6VV',
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
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'login',
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
      'withTrashed' => false,
    ),
    'generated::xsinWdaCp5k6AlCs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::xsinWdaCp5k6AlCs',
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
      'withTrashed' => false,
    ),
    'generated::BvnqusTWRiq0Urad' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::BvnqusTWRiq0Urad',
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
      'withTrashed' => false,
    ),
    'generated::QhTizQrxZ3lCbeCw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::QhTizQrxZ3lCbeCw',
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
      'withTrashed' => false,
    ),
    'generated::oHEXnSxgmdDAjSuL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::oHEXnSxgmdDAjSuL',
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
      'withTrashed' => false,
    ),
    'generated::50Z98vRGnZwrkhh0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::50Z98vRGnZwrkhh0',
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
      'withTrashed' => false,
    ),
    'generated::NPNc6eTXbljydwh0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::NPNc6eTXbljydwh0',
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
      'withTrashed' => false,
    ),
    'generated::O2wpX2NuTCgmKhEk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::O2wpX2NuTCgmKhEk',
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
      'withTrashed' => false,
    ),
    'generated::4LscNhdFB1vVPwNz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::4LscNhdFB1vVPwNz',
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
      'withTrashed' => false,
    ),
    'generated::O61OtwlfyZKQwZg8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::O61OtwlfyZKQwZg8',
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
      'withTrashed' => false,
    ),
    'generated::F6H93lTEjwEHuAXY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::F6H93lTEjwEHuAXY',
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
      'withTrashed' => false,
    ),
    'generated::t5EIhSfOxTMhOPjg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::t5EIhSfOxTMhOPjg',
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
      'withTrashed' => false,
    ),
    'generated::IInpLDitlIwdiWb2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::IInpLDitlIwdiWb2',
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
      'withTrashed' => false,
    ),
    'generated::P2M7fBscmVZBLvp6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::P2M7fBscmVZBLvp6',
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
      'withTrashed' => false,
    ),
    'generated::5AG6IryhsjgYpoDT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::5AG6IryhsjgYpoDT',
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
      'withTrashed' => false,
    ),
    'generated::hhD4zxTt7IjYVa5L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::hhD4zxTt7IjYVa5L',
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
      'withTrashed' => false,
    ),
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Service',
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'service',
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
      'withTrashed' => false,
    ),
    'generated::0MFgSv9hejEN0yaG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Cart',
        'prefix' => '/cart',
        'where' => 
        array (
        ),
        'as' => 'generated::0MFgSv9hejEN0yaG',
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
      'withTrashed' => false,
    ),
    'generated::aTLy4xuSZL2ZfP7j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout',
        'prefix' => '/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::aTLy4xuSZL2ZfP7j',
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
      'withTrashed' => false,
    ),
    'generated::Bbl6FGVlPkRlIrPy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Bbl6FGVlPkRlIrPy',
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
      'withTrashed' => false,
    ),
    'generated::057gjaLUrM9Rp5Uu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::057gjaLUrM9Rp5Uu',
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
      'withTrashed' => false,
    ),
    'generated::HbccgVA9TYvLCXHS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\VnpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\VnpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::HbccgVA9TYvLCXHS',
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
      'withTrashed' => false,
    ),
    'generated::5BT0c5ENq0GMT9hB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::5BT0c5ENq0GMT9hB',
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
      'withTrashed' => false,
    ),
    'generated::ULJpFsKXktCjKKWb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::ULJpFsKXktCjKKWb',
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
      'withTrashed' => false,
    ),
    'generated::2fktEoNU4T9E7Wvh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::2fktEoNU4T9E7Wvh',
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
      'withTrashed' => false,
    ),
    'generated::mxliBjMTrsv4F5xo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::mxliBjMTrsv4F5xo',
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
      'withTrashed' => false,
    ),
    'generated::0boIzVeupKRwYB3s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::0boIzVeupKRwYB3s',
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
      'withTrashed' => false,
    ),
    'generated::VoeRxq66ipRoqYaC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:190:"function() {

                // We couldn\'t handle your payment
                return \\redirect(\'checkout\')->with(\'error\', \\__(\'messages.t_we_could_not_handle_ur_payment\'));

            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000067f0000000000000000";}}',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::VoeRxq66ipRoqYaC',
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
      'withTrashed' => false,
    ),
    'generated::dr6yH7R9dfcCOHG8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::dr6yH7R9dfcCOHG8',
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
      'withTrashed' => false,
    ),
    'generated::J2IWkrH04vBae9oo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Settings',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::J2IWkrH04vBae9oo',
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
      'withTrashed' => false,
    ),
    'generated::Ap96AsSTfQfUJGrw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Password',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::Ap96AsSTfQfUJGrw',
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
      'withTrashed' => false,
    ),
    'generated::Oxa9GpjtnfOmIMjk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Profile',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::Oxa9GpjtnfOmIMjk',
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
      'withTrashed' => false,
    ),
    'generated::B961S2kNZgCWlwv1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Verification',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::B961S2kNZgCWlwv1',
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
      'withTrashed' => false,
    ),
    'generated::6IxBOryrvRZO8xzD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::6IxBOryrvRZO8xzD',
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
      'withTrashed' => false,
    ),
    'generated::e1sGaOSsF7LgOHdl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::e1sGaOSsF7LgOHdl',
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
      'withTrashed' => false,
    ),
    'generated::S2ijpxLtzYociyE8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::S2ijpxLtzYociyE8',
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
      'withTrashed' => false,
    ),
    'generated::PsGq2Hp22HevOTKR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::PsGq2Hp22HevOTKR',
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
      'withTrashed' => false,
    ),
    'generated::JEWe9XYtDjzKTtjx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/create/{itemId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::JEWe9XYtDjzKTtjx',
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
      'withTrashed' => false,
    ),
    'generated::w7Lkb2FVs3krabwC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::w7Lkb2FVs3krabwC',
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
      'withTrashed' => false,
    ),
    'generated::DY1Xv9wAomOKBOGx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::DY1Xv9wAomOKBOGx',
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
      'withTrashed' => false,
    ),
    'generated::9QInbC1Cut46mpl7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Favorite',
        'prefix' => 'account/favorite',
        'where' => 
        array (
        ),
        'as' => 'generated::9QInbC1Cut46mpl7',
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
      'withTrashed' => false,
    ),
    'generated::pQgx5XOchmecDnvB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Billing',
        'prefix' => 'account/billing',
        'where' => 
        array (
        ),
        'as' => 'generated::pQgx5XOchmecDnvB',
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
      'withTrashed' => false,
    ),
    'generated::lDGfppelH5FKrSaL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::lDGfppelH5FKrSaL',
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
      'withTrashed' => false,
    ),
    'generated::YJNnhwX5LEkJG1RQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::YJNnhwX5LEkJG1RQ',
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
      'withTrashed' => false,
    ),
    'generated::XwBkAlD6MsJjamOh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::XwBkAlD6MsJjamOh',
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
      'withTrashed' => false,
    ),
    'generated::7xgxYsIqBVhaTVe9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::7xgxYsIqBVhaTVe9',
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
      'withTrashed' => false,
    ),
    'generated::KoBHapIDGBxeveMW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::KoBHapIDGBxeveMW',
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
      'withTrashed' => false,
    ),
    'generated::nNi2C5ZmkHZE5mpu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::nNi2C5ZmkHZE5mpu',
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
      'withTrashed' => false,
    ),
    'generated::ovqJUKzlLYpus2ug' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::ovqJUKzlLYpus2ug',
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
      'withTrashed' => false,
    ),
    'generated::fNRed1VSqyCruETB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::fNRed1VSqyCruETB',
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
      'withTrashed' => false,
    ),
    'generated::a2asQW8VMfO2upVu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Sessions\\SessionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Sessions\\SessionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Sessions',
        'prefix' => 'account/sessions',
        'where' => 
        array (
        ),
        'as' => 'generated::a2asQW8VMfO2upVu',
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
      'withTrashed' => false,
    ),
    'generated::tDnmmmaHpoYFNYMx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Offers',
        'prefix' => 'account/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::tDnmmmaHpoYFNYMx',
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
      'withTrashed' => false,
    ),
    'generated::PMQX3ipYRMNZbiwv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Create',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PMQX3ipYRMNZbiwv',
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
      'withTrashed' => false,
    ),
    'generated::l4yXCjiD4bPr3zpt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'start_selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Become',
        'prefix' => '/start_selling',
        'where' => 
        array (
        ),
        'as' => 'generated::l4yXCjiD4bPr3zpt',
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
      'withTrashed' => false,
    ),
    'generated::UjXmy0ijcGZ0Orht' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Home',
        'prefix' => 'seller/home',
        'where' => 
        array (
        ),
        'as' => 'generated::UjXmy0ijcGZ0Orht',
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
      'withTrashed' => false,
    ),
    'generated::yxuqmgUcLUnTnv8a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::yxuqmgUcLUnTnv8a',
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
      'withTrashed' => false,
    ),
    'generated::ZFxJCYsBqT58nkv3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::ZFxJCYsBqT58nkv3',
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
      'withTrashed' => false,
    ),
    'generated::giV8IqnJevMNoUby' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::giV8IqnJevMNoUby',
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
      'withTrashed' => false,
    ),
    'generated::GyxsRzev5lTop0qW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::GyxsRzev5lTop0qW',
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
      'withTrashed' => false,
    ),
    'generated::fswddD54s57YXs2P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::fswddD54s57YXs2P',
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
      'withTrashed' => false,
    ),
    'generated::QMxJB2E2tN58IgSd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::QMxJB2E2tN58IgSd',
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
      'withTrashed' => false,
    ),
    'generated::h9edndcpZWMITd1P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::h9edndcpZWMITd1P',
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
      'withTrashed' => false,
    ),
    'generated::7vyvi1TpZGeciMiF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/deliver/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::7vyvi1TpZGeciMiF',
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
      'withTrashed' => false,
    ),
    'generated::lL8UAqcvtsP87CTu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/requirements/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::lL8UAqcvtsP87CTu',
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
      'withTrashed' => false,
    ),
    'generated::yWbNNbb8yEeejbk5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::yWbNNbb8yEeejbk5',
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
      'withTrashed' => false,
    ),
    'generated::d09ure8ImCSVEbVV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::d09ure8ImCSVEbVV',
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
      'withTrashed' => false,
    ),
    'generated::FBEATDIdAEXDqjdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::FBEATDIdAEXDqjdf',
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
      'withTrashed' => false,
    ),
    'generated::Gv0ZkGJWNL0VrR1Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/earnings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings',
        'prefix' => 'seller/earnings',
        'where' => 
        array (
        ),
        'as' => 'generated::Gv0ZkGJWNL0VrR1Z',
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
      'withTrashed' => false,
    ),
    'generated::0FM8hz8ZjpceT4is' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::0FM8hz8ZjpceT4is',
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
      'withTrashed' => false,
    ),
    'generated::Pep0vPLs3c7ERax0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::Pep0vPLs3c7ERax0',
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
      'withTrashed' => false,
    ),
    'generated::ZlicvOQaRFewjtE1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::ZlicvOQaRFewjtE1',
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
      'withTrashed' => false,
    ),
    'generated::1O3AD54Pcc5RWyGc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::1O3AD54Pcc5RWyGc',
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
      'withTrashed' => false,
    ),
    'generated::LCBjm6BIZ6Z53Ic3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::LCBjm6BIZ6Z53Ic3',
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
      'withTrashed' => false,
    ),
    'generated::fIPtrbsPOCAgKjHS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects',
        'prefix' => 'seller/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::fIPtrbsPOCAgKjHS',
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
      'withTrashed' => false,
    ),
    'generated::TDyXEZpdLa0B8rpZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones',
        'prefix' => 'seller/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::TDyXEZpdLa0B8rpZ',
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
      'withTrashed' => false,
    ),
    'generated::BeHTmJhpTv3XOKHJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::BeHTmJhpTv3XOKHJ',
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
      'withTrashed' => false,
    ),
    'generated::jPAwL2LQ61WPCnSD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::jPAwL2LQ61WPCnSD',
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
      'withTrashed' => false,
    ),
    'generated::yC3YXT3v28vv7Vja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::yC3YXT3v28vv7Vja',
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
      'withTrashed' => false,
    ),
    'generated::FtAGyDwVe6f65CkQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Offers',
        'prefix' => 'seller/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::FtAGyDwVe6f65CkQ',
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
      'withTrashed' => false,
    ),
    'generated::awOzfdGcstFPnpeQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Help\\Contact',
        'prefix' => '/help',
        'where' => 
        array (
        ),
        'as' => 'generated::awOzfdGcstFPnpeQ',
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
      'withTrashed' => false,
    ),
    'generated::H9ooOfmtYUPvJD4A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::H9ooOfmtYUPvJD4A',
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
      'withTrashed' => false,
    ),
    'generated::xJVjsUf2gpnm33WJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}/{subcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::xJVjsUf2gpnm33WJ',
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
      'withTrashed' => false,
    ),
    'generated::2HbK6p4pV4Yt86S2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::2HbK6p4pV4Yt86S2',
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
      'withTrashed' => false,
    ),
    'generated::UC1pjwlljNQN7MBa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::UC1pjwlljNQN7MBa',
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
      'withTrashed' => false,
    ),
    'generated::fePgSJZEFzQN3D8W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::fePgSJZEFzQN3D8W',
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
      'withTrashed' => false,
    ),
    'generated::Ajn17fHjYnFgERUQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hire/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Hire',
        'prefix' => '/hire',
        'where' => 
        array (
        ),
        'as' => 'generated::Ajn17fHjYnFgERUQ',
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
      'withTrashed' => false,
    ),
    'generated::ogQzrvim5NS32c33' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::ogQzrvim5NS32c33',
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
      'withTrashed' => false,
    ),
    'generated::hLTDtYydDv3YTOAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/new/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::hLTDtYydDv3YTOAt',
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
      'withTrashed' => false,
    ),
    'generated::3YGRMqr02vlroaQX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/{conversationId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::3YGRMqr02vlroaQX',
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
      'withTrashed' => false,
    ),
    'generated::XD3IdsVraykkarVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Search',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'generated::XD3IdsVraykkarVC',
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
      'withTrashed' => false,
    ),
    'generated::uGQk3c7uK0T5hlEU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Page',
        'prefix' => '/page',
        'where' => 
        array (
        ),
        'as' => 'generated::uGQk3c7uK0T5hlEU',
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
      'withTrashed' => false,
    ),
    'generated::BqCNRBJsECJ7EyyE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Reviews',
        'prefix' => '/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::BqCNRBJsECJ7EyyE',
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
      'withTrashed' => false,
    ),
    'generated::ugy3GK33UdEFhqYN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::ugy3GK33UdEFhqYN',
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
      'withTrashed' => false,
    ),
    'generated::ntyfShtE0SLQPs8p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::ntyfShtE0SLQPs8p',
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
      'withTrashed' => false,
    ),
    'generated::MalHYRWF7JkTabYj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::MalHYRWF7JkTabYj',
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
      'withTrashed' => false,
    ),
    'generated::Fc19R1n7I1Jz7uPe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::Fc19R1n7I1Jz7uPe',
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
      'withTrashed' => false,
    ),
    'generated::U9DxJ4jTihay9nSl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::U9DxJ4jTihay9nSl',
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
      'withTrashed' => false,
    ),
    'generated::WuA5bnotghGFR1d5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/documents/{uid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Documents',
        'prefix' => 'uploads/documents',
        'where' => 
        array (
        ),
        'as' => 'generated::WuA5bnotghGFR1d5',
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
      'withTrashed' => false,
    ),
    'generated::Yj0p5BztT36PJCoQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/requirements/{orderId}/{itemId}/{reqId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Requirements',
        'prefix' => 'uploads/requirements',
        'where' => 
        array (
        ),
        'as' => 'generated::Yj0p5BztT36PJCoQ',
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
      'withTrashed' => false,
    ),
    'generated::OdsmOlbCiYIkspl4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/delivered/{orderId}/{itemId}/{workId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Delivered',
        'prefix' => 'uploads/delivered',
        'where' => 
        array (
        ),
        'as' => 'generated::OdsmOlbCiYIkspl4',
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
      'withTrashed' => false,
    ),
    'generated::GMVabvCxEboEcpmw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/verifications/{id}/{type}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Verifications',
        'prefix' => 'uploads/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::GMVabvCxEboEcpmw',
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
      'withTrashed' => false,
    ),
    'generated::HOFIMWaGhpuf5KFL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::HOFIMWaGhpuf5KFL',
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
      'withTrashed' => false,
    ),
    'generated::kxM9M46CpuiTpfv9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/work/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::kxM9M46CpuiTpfv9',
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
      'withTrashed' => false,
    ),
    'generated::Mvp7j6FqybiTmPq4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\StripeController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\StripeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Mvp7j6FqybiTmPq4',
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
      'withTrashed' => false,
    ),
    'generated::4K8qrKAbsfbIbtGD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\FlutterwaveController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\FlutterwaveController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::4K8qrKAbsfbIbtGD',
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
      'withTrashed' => false,
    ),
    'generated::e556p8Lu71v73gdc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/cashfree/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@token',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@token',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::e556p8Lu71v73gdc',
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
      'withTrashed' => false,
    ),
    'generated::MW25h5Of3fw3uF7A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::MW25h5Of3fw3uF7A',
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
      'withTrashed' => false,
    ),
    'generated::2gfeSVCf7V7YSQ6e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\VNPayController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\VNPayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::2gfeSVCf7V7YSQ6e',
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
      'withTrashed' => false,
    ),
    'generated::2QKL4kWO1Dg5cYJN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\PaytabsController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\PaytabsController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::2QKL4kWO1Dg5cYJN',
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
      'withTrashed' => false,
    ),
    'generated::HxbQwp1peSknKLwV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\YoucanpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\YoucanpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::HxbQwp1peSknKLwV',
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
      'withTrashed' => false,
    ),
    'generated::ovZBTls864Xn2D8c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/mollie/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MollieController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MollieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::ovZBTls864Xn2D8c',
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
      'withTrashed' => false,
    ),
    'generated::qlx0tXHP8ihQZYbn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MercadopagoController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MercadopagoController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::qlx0tXHP8ihQZYbn',
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
      'withTrashed' => false,
    ),
    'generated::TSPatnqpCJrcfWje' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\XenditController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\XenditController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::TSPatnqpCJrcfWje',
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
      'withTrashed' => false,
    ),
    'generated::GExSRiaYJ4JE8Xw6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:189:"function() {

        // We couldn\'t handle your payment
        return \\redirect(\'account/deposit/history\')->with(\'error\', \\__(\'messages.t_we_could_not_handle_ur_deposit_payment\'));

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006d20000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::GExSRiaYJ4JE8Xw6',
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
      'withTrashed' => false,
    ),
    'generated::JmuP5AzsAfklUWRn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\EpointController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\EpointController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::JmuP5AzsAfklUWRn',
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
      'withTrashed' => false,
    ),
    'generated::Ap70y5pPDr9rScoz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaymobController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaymobController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Ap70y5pPDr9rScoz',
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
      'withTrashed' => false,
    ),
    'generated::6AtI23s8YZxZDdRe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\JazzcashController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\JazzcashController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::6AtI23s8YZxZDdRe',
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
      'withTrashed' => false,
    ),
    'generated::CSaf3VxjoYYHHJAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::CSaf3VxjoYYHHJAt',
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
      'withTrashed' => false,
    ),
    'generated::kLJcmTXdDJE1jp1J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::kLJcmTXdDJE1jp1J',
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
      'withTrashed' => false,
    ),
    'generated::bBwOuVd3coXKlmBM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@checkout',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@checkout',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::bBwOuVd3coXKlmBM',
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
      'withTrashed' => false,
    ),
    'generated::HRl7XbI79IQHbFlu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@deposit',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@deposit',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::HRl7XbI79IQHbFlu',
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
      'withTrashed' => false,
    ),
    'generated::qUWgm51evkIr7sgB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\XenditController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\XenditController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::qUWgm51evkIr7sgB',
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
      'withTrashed' => false,
    ),
    'generated::Zz6ez7329gdzzCRA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/callback/cashfree/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\CashfreeController@token',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\CashfreeController@token',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zz6ez7329gdzzCRA',
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
      'withTrashed' => false,
    ),
    'generated::mND0BNQgz6woYVh8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@redirect',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@redirect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mND0BNQgz6woYVh8',
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
      'withTrashed' => false,
    ),
    'generated::PtRYstMTgqHURI0S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@webhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PtRYstMTgqHURI0S',
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
      'withTrashed' => false,
    ),
    'generated::mIXiEAMNjrEwTj72' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Home',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::mIXiEAMNjrEwTj72',
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
      'withTrashed' => false,
    ),
    'generated::csTVIyA3sYhWgOTC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Profile',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::csTVIyA3sYhWgOTC',
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
      'withTrashed' => false,
    ),
    'generated::A4OKRsjGK3oY6PeV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::A4OKRsjGK3oY6PeV',
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
      'withTrashed' => false,
    ),
    'generated::TLo0pi4DE8JdYLxP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Invoices',
        'prefix' => 'dashboard/invoices',
        'where' => 
        array (
        ),
        'as' => 'generated::TLo0pi4DE8JdYLxP',
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
      'withTrashed' => false,
    ),
    'generated::Itpt8LzM5FappKSB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Itpt8LzM5FappKSB',
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
      'withTrashed' => false,
    ),
    'generated::WNIhgMeMonIqOWCj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::WNIhgMeMonIqOWCj',
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
      'withTrashed' => false,
    ),
    'generated::l7712tvDRE12r31L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::l7712tvDRE12r31L',
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
      'withTrashed' => false,
    ),
    'generated::spOpcNVsiDWcDJgf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::spOpcNVsiDWcDJgf',
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
      'withTrashed' => false,
    ),
    'generated::MVhws6WjSDEBV5xa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/balance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::MVhws6WjSDEBV5xa',
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
      'withTrashed' => false,
    ),
    'generated::Lpon7Wtq6V9WdP6Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions',
        'prefix' => 'dashboard/users/transactions',
        'where' => 
        array (
        ),
        'as' => 'generated::Lpon7Wtq6V9WdP6Q',
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
      'withTrashed' => false,
    ),
    'generated::ftot59ysARQoUNcR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Trash',
        'prefix' => 'dashboard/users/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::ftot59ysARQoUNcR',
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
      'withTrashed' => false,
    ),
    'generated::vfEgy3MsXGUkyaMu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::vfEgy3MsXGUkyaMu',
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
      'withTrashed' => false,
    ),
    'generated::8zG5kFGZMt5TU879' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::8zG5kFGZMt5TU879',
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
      'withTrashed' => false,
    ),
    'generated::SjS9Isf7rjwb1b7M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::SjS9Isf7rjwb1b7M',
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
      'withTrashed' => false,
    ),
    'generated::bYzDdLvmGWbIyKs7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Withdrawals',
        'prefix' => 'dashboard/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::bYzDdLvmGWbIyKs7',
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
      'withTrashed' => false,
    ),
    'generated::EQanSAv12q2043Lg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::EQanSAv12q2043Lg',
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
      'withTrashed' => false,
    ),
    'generated::bGVFLS4U3fFjE2t8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::bGVFLS4U3fFjE2t8',
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
      'withTrashed' => false,
    ),
    'generated::2T7GHitO93FUuhEH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::2T7GHitO93FUuhEH',
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
      'withTrashed' => false,
    ),
    'generated::zTDmLGdz42YKU3Qs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash',
        'prefix' => 'dashboard/gigs/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::zTDmLGdz42YKU3Qs',
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
      'withTrashed' => false,
    ),
    'generated::XfLw9XaiqehkIXd1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::XfLw9XaiqehkIXd1',
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
      'withTrashed' => false,
    ),
    'generated::7kMWn5hii9Hxa5vx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders\\Options',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::7kMWn5hii9Hxa5vx',
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
      'withTrashed' => false,
    ),
    'generated::e5VbXUZO2zSJ5MFx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/portfolios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Portfolios',
        'prefix' => 'dashboard/portfolios',
        'where' => 
        array (
        ),
        'as' => 'generated::e5VbXUZO2zSJ5MFx',
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
      'withTrashed' => false,
    ),
    'generated::w6KoCq84LeGgB5pi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::w6KoCq84LeGgB5pi',
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
      'withTrashed' => false,
    ),
    'generated::wHSJb6c5h3aPhFY8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::wHSJb6c5h3aPhFY8',
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
      'withTrashed' => false,
    ),
    'generated::5J8y8Ge8L82xThgd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::5J8y8Ge8L82xThgd',
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
      'withTrashed' => false,
    ),
    'generated::pd0kYlttwJUul2yr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::pd0kYlttwJUul2yr',
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
      'withTrashed' => false,
    ),
    'generated::sDYHm7xVCVo51HYU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones',
        'prefix' => 'dashboard/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::sDYHm7xVCVo51HYU',
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
      'withTrashed' => false,
    ),
    'generated::MEiTtueb8Agcfuas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::MEiTtueb8Agcfuas',
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
      'withTrashed' => false,
    ),
    'generated::gVh1v1jzMqFHsRGD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::gVh1v1jzMqFHsRGD',
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
      'withTrashed' => false,
    ),
    'generated::f7yorAPHLBUSp8jX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/bidding/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding',
        'prefix' => 'dashboard/projects/plans/bidding',
        'where' => 
        array (
        ),
        'as' => 'generated::f7yorAPHLBUSp8jX',
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
      'withTrashed' => false,
    ),
    'generated::73Mf5vqwh4jsc83c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::73Mf5vqwh4jsc83c',
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
      'withTrashed' => false,
    ),
    'generated::zVcPnwQuVf636hOU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::zVcPnwQuVf636hOU',
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
      'withTrashed' => false,
    ),
    'generated::qCa9jFKxvS5NECr1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::qCa9jFKxvS5NECr1',
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
      'withTrashed' => false,
    ),
    'generated::TFBK6ltRDymaNslN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::TFBK6ltRDymaNslN',
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
      'withTrashed' => false,
    ),
    'generated::cMbrjQNgRwz116RZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::cMbrjQNgRwz116RZ',
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
      'withTrashed' => false,
    ),
    'generated::KQpitkXYsdLSNDYf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::KQpitkXYsdLSNDYf',
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
      'withTrashed' => false,
    ),
    'generated::6zY4x8g2vytbbfvj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions',
        'prefix' => 'dashboard/projects/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::6zY4x8g2vytbbfvj',
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
      'withTrashed' => false,
    ),
    'generated::N4nTXTSjtLuN870I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids',
        'prefix' => 'dashboard/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::N4nTXTSjtLuN870I',
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
      'withTrashed' => false,
    ),
    'generated::BWZJKGX9adf5yYmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions',
        'prefix' => 'dashboard/projects/bids/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::BWZJKGX9adf5yYmk',
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
      'withTrashed' => false,
    ),
    'generated::E1bfaZh0jiGROHzi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Offers',
        'prefix' => 'dashboard/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::E1bfaZh0jiGROHzi',
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
      'withTrashed' => false,
    ),
    'generated::lRLEfHISwbXrUfM8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::lRLEfHISwbXrUfM8',
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
      'withTrashed' => false,
    ),
    'generated::uME6pM2yOQ0idbKV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::uME6pM2yOQ0idbKV',
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
      'withTrashed' => false,
    ),
    'generated::skEnJqXaMm20nmsg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::skEnJqXaMm20nmsg',
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
      'withTrashed' => false,
    ),
    'generated::Eu96ONvtw2XddELB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::Eu96ONvtw2XddELB',
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
      'withTrashed' => false,
    ),
    'generated::8HsHwioOM13iZ7eo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::8HsHwioOM13iZ7eo',
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
      'withTrashed' => false,
    ),
    'generated::ZqFvt0AVthWQiPIn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::ZqFvt0AVthWQiPIn',
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
      'withTrashed' => false,
    ),
    'generated::BVJeKIE06QixPf2U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reviews',
        'prefix' => 'dashboard/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::BVJeKIE06QixPf2U',
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
      'withTrashed' => false,
    ),
    'generated::AFg0nXFo6IXI0Kwv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::AFg0nXFo6IXI0Kwv',
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
      'withTrashed' => false,
    ),
    'generated::I12KujYxonjNI67b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::I12KujYxonjNI67b',
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
      'withTrashed' => false,
    ),
    'generated::azZM3lch0ydxBnX3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::azZM3lch0ydxBnX3',
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
      'withTrashed' => false,
    ),
    'generated::K2YBs6w3KXAbkary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::K2YBs6w3KXAbkary',
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
      'withTrashed' => false,
    ),
    'generated::x2ghCBZlHvPQbM8J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/conversations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Conversations',
        'prefix' => 'dashboard/conversations',
        'where' => 
        array (
        ),
        'as' => 'generated::x2ghCBZlHvPQbM8J',
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
      'withTrashed' => false,
    ),
    'generated::QZekgezDJRSwtZWF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Advertisements',
        'prefix' => 'dashboard/advertisements',
        'where' => 
        array (
        ),
        'as' => 'generated::QZekgezDJRSwtZWF',
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
      'withTrashed' => false,
    ),
    'generated::wziaZ0USLvs7bxIT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Support',
        'prefix' => 'dashboard/support',
        'where' => 
        array (
        ),
        'as' => 'generated::wziaZ0USLvs7bxIT',
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
      'withTrashed' => false,
    ),
    'generated::eDuKUVRf5Za7MFwq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::eDuKUVRf5Za7MFwq',
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
      'withTrashed' => false,
    ),
    'generated::QjSAybuWZCbGTDrS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::QjSAybuWZCbGTDrS',
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
      'withTrashed' => false,
    ),
    'generated::eYjqB71RXr3kRuvd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::eYjqB71RXr3kRuvd',
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
      'withTrashed' => false,
    ),
    'generated::x4Fs7ne97rnz3Vrt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::x4Fs7ne97rnz3Vrt',
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
      'withTrashed' => false,
    ),
    'generated::6PyWHL6clxRl3EnR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::6PyWHL6clxRl3EnR',
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
      'withTrashed' => false,
    ),
    'generated::NyBwvhYe3Iky9Je9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/translate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::NyBwvhYe3Iky9Je9',
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
      'withTrashed' => false,
    ),
    'generated::zWnlY4Lnfyk4B3Tp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::zWnlY4Lnfyk4B3Tp',
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
      'withTrashed' => false,
    ),
    'generated::vmhuvR04MgwATGPE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::vmhuvR04MgwATGPE',
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
      'withTrashed' => false,
    ),
    'generated::UqkZDd7ElUDtORq1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::UqkZDd7ElUDtORq1',
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
      'withTrashed' => false,
    ),
    'generated::sR1ETCaWWwsCGmPm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::sR1ETCaWWwsCGmPm',
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
      'withTrashed' => false,
    ),
    'generated::jQp0s2NZscVI5nGQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::jQp0s2NZscVI5nGQ',
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
      'withTrashed' => false,
    ),
    'generated::bfCvyKcvwdNDatFo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::bfCvyKcvwdNDatFo',
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
      'withTrashed' => false,
    ),
    'generated::4KB1hb7fsK5qiw1O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\PaymentComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\PaymentComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::4KB1hb7fsK5qiw1O',
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
      'withTrashed' => false,
    ),
    'generated::52u7uu108NDaP4NQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::52u7uu108NDaP4NQ',
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
      'withTrashed' => false,
    ),
    'generated::haKbfpoh9jC6hP6W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/duitku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::haKbfpoh9jC6hP6W',
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
      'withTrashed' => false,
    ),
    'generated::AT38iT1eyQv2JL4z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::AT38iT1eyQv2JL4z',
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
      'withTrashed' => false,
    ),
    'generated::mLst9WcCVsAntmvr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/asaas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::mLst9WcCVsAntmvr',
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
      'withTrashed' => false,
    ),
    'generated::349h8Kr1JN3FjYCs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/ecpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::349h8Kr1JN3FjYCs',
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
      'withTrashed' => false,
    ),
    'generated::ZOzw3cauYcXu7B7u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/fastpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::ZOzw3cauYcXu7B7u',
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
      'withTrashed' => false,
    ),
    'generated::6WfugFPJRg2Y7lAA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/freekassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::6WfugFPJRg2Y7lAA',
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
      'withTrashed' => false,
    ),
    'generated::Ww4zTEpv909WBgJV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paymob-pk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::Ww4zTEpv909WBgJV',
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
      'withTrashed' => false,
    ),
    'generated::maLMziyuM7ddOhSD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/cpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::maLMziyuM7ddOhSD',
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
      'withTrashed' => false,
    ),
    'generated::iqKUB9Uf1rwHqpTT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::iqKUB9Uf1rwHqpTT',
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
      'withTrashed' => false,
    ),
    'generated::0mID4vF5JQPzSA3t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::0mID4vF5JQPzSA3t',
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
      'withTrashed' => false,
    ),
    'generated::236lnD9pHZPI83Hr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::236lnD9pHZPI83Hr',
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
      'withTrashed' => false,
    ),
    'generated::z6yt6vIw0GfFA3LU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::z6yt6vIw0GfFA3LU',
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
      'withTrashed' => false,
    ),
    'generated::0nHGMisC3XpaH5D6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::0nHGMisC3XpaH5D6',
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
      'withTrashed' => false,
    ),
    'generated::3mJ3QTynJy3ftVue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::3mJ3QTynJy3ftVue',
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
      'withTrashed' => false,
    ),
    'generated::m32A3YIWYMTOY9uC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::m32A3YIWYMTOY9uC',
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
      'withTrashed' => false,
    ),
    'generated::pAw4A4EnmMEiPSCS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::pAw4A4EnmMEiPSCS',
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
      'withTrashed' => false,
    ),
    'generated::Noyv643DTxlHtJ83' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::Noyv643DTxlHtJ83',
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
      'withTrashed' => false,
    ),
    'generated::n9zYWhq8d8wbgjWN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::n9zYWhq8d8wbgjWN',
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
      'withTrashed' => false,
    ),
    'generated::Rf3I5CRHR3a1yrLL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::Rf3I5CRHR3a1yrLL',
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
      'withTrashed' => false,
    ),
    'generated::EiO7Lcp6P16vWPGp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::EiO7Lcp6P16vWPGp',
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
      'withTrashed' => false,
    ),
    'generated::C8XfzJ0gglUxY5Ml' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::C8XfzJ0gglUxY5Ml',
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
      'withTrashed' => false,
    ),
    'generated::468m8gzSivt2L2Uq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::468m8gzSivt2L2Uq',
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
      'withTrashed' => false,
    ),
    'generated::kRI884Uh2Nnsgv12' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::kRI884Uh2Nnsgv12',
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
      'withTrashed' => false,
    ),
    'generated::vmTOQ97swDp87MeI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::vmTOQ97swDp87MeI',
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
      'withTrashed' => false,
    ),
    'generated::pMOvohGau387IGl5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloudinary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::pMOvohGau387IGl5',
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
      'withTrashed' => false,
    ),
    'generated::98SWH2JMtaIb4V1A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::98SWH2JMtaIb4V1A',
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
      'withTrashed' => false,
    ),
    'generated::Ax6fLoeiiMu4xN46' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/nowpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::Ax6fLoeiiMu4xN46',
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
      'withTrashed' => false,
    ),
    'generated::RYLN2fMbNAss1aPo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/epoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::RYLN2fMbNAss1aPo',
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
      'withTrashed' => false,
    ),
    'generated::LWH8qYMHaxh63CNK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::LWH8qYMHaxh63CNK',
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
      'withTrashed' => false,
    ),
    'generated::9muzz5zF0w91sebY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::9muzz5zF0w91sebY',
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
      'withTrashed' => false,
    ),
    'generated::9MEPdGI2WX0P6LS6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::9MEPdGI2WX0P6LS6',
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
      'withTrashed' => false,
    ),
    'generated::PlHN9QVF2RxxckT9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::PlHN9QVF2RxxckT9',
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
      'withTrashed' => false,
    ),
    'generated::SWnVEjv94mQgdDIp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::SWnVEjv94mQgdDIp',
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
      'withTrashed' => false,
    ),
    'generated::dn3MaeIj7BBfRiDm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::dn3MaeIj7BBfRiDm',
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
      'withTrashed' => false,
    ),
    'generated::jyv66tbZ4FG7VRAF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jyv66tbZ4FG7VRAF',
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
      'withTrashed' => false,
    ),
    'generated::vqMVTz9yEJAiuXQY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::vqMVTz9yEJAiuXQY',
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
      'withTrashed' => false,
    ),
    'generated::SWnYIANvtqQpt0cH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::SWnYIANvtqQpt0cH',
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
      'withTrashed' => false,
    ),
    'generated::jWraJI1C2bvrazp4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jWraJI1C2bvrazp4',
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
      'withTrashed' => false,
    ),
    'generated::ilHOA0ZIekk4shNR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ilHOA0ZIekk4shNR',
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
      'withTrashed' => false,
    ),
    'generated::PiOp4Tbe2muFbLNC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::PiOp4Tbe2muFbLNC',
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
      'withTrashed' => false,
    ),
    'generated::ZeEFmPpIB1N30x76' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/hero',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ZeEFmPpIB1N30x76',
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
      'withTrashed' => false,
    ),
    'generated::McscyrD8VqWszwFC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::McscyrD8VqWszwFC',
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
      'withTrashed' => false,
    ),
    'generated::u6m8iJhGWbg0nwbj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/verifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Verifications',
        'prefix' => 'dashboard/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::u6m8iJhGWbg0nwbj',
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
      'withTrashed' => false,
    ),
    'generated::3uCBU5RdDEAjMgt0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::3uCBU5RdDEAjMgt0',
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
      'withTrashed' => false,
    ),
    'generated::OwHeUJtPzRljnBBc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::OwHeUJtPzRljnBBc',
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
      'withTrashed' => false,
    ),
    'generated::xeaScmI1Azl9kI0n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::xeaScmI1Azl9kI0n',
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
      'withTrashed' => false,
    ),
    'generated::kgQ7KBoWyjMbp0Tn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::kgQ7KBoWyjMbp0Tn',
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
      'withTrashed' => false,
    ),
    'generated::niAAUb56UsbAt9CN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::niAAUb56UsbAt9CN',
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
      'withTrashed' => false,
    ),
    'generated::2ShNqOqemGKyxr5R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::2ShNqOqemGKyxr5R',
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
      'withTrashed' => false,
    ),
    'generated::z4JlvUYV6eWchQtq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/crontab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::z4JlvUYV6eWchQtq',
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
      'withTrashed' => false,
    ),
    'generated::3P0pAy1YD071hMNL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::3P0pAy1YD071hMNL',
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
      'withTrashed' => false,
    ),
    'generated::fbP4ZXdPmcaAAwfq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::fbP4ZXdPmcaAAwfq',
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
      'withTrashed' => false,
    ),
    'generated::7B5bfPTvCYjasmB7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'banned.ip',
          2 => 'guest:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::7B5bfPTvCYjasmB7',
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
      'withTrashed' => false,
    ),
  ),
)
);
