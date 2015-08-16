<?php
  $authCheck = function($required) use($app){
    return function() use($required,$app){
      if((!$app->auth && $required) || ($app->auth && !$required)){
        $app->redirect($app->urlFor('admin'));
      }
    };
  };
  $require_login = function($required) use($app){
      if(!$app->auth && $required){
        $app->flash('global','Login required to acces the resource');
        $app->redirect($app->urlFor('login'));
      }
  };

  $guest = function() use($authCheck){
    return $authCheck(false);
  };
  $signedIn = function() use($require_login){
      $require_login(TRUE);
  }
 ?>
