<?php
use Carbon\Carbon;
  $app->get('/activate/:id',function($id) use ($app){
    $acc = $user->find('first',['where'=>['active_hash','=', $id]]);
    if($acc){
        $app->render('auth/register.php',['hash'=>$id]);
    }else{
        $app->flash("global","Error you are already registered or you have invalid link");
        $app->response->redirect('/login');
    }
  })->name('activate');

  $app->post('/register',function() use ($app){
    $user = $app->User;
    if ($user->validate($_POST)) {
        $data = [
        "username"=> $app->request->post('username'),
        "password"=> $app->hash->password($app->request->post('password')),
        "active"=> TRUE,
        "active_hash"=> NULL,
        ];
        $acc = $user->find('first',['where'=>['active_hash','=', $app->request->post('active_hash')]]);
        if($acc){
            $user->read($acc->user_id);
            $user->set($data);
            $app->flash("global","you registered succesfully");
            $app->response->redirect('/login');
          }else{
            $app->flash("global","Error you are already registered or you have invalid link");
            $app->response->redirect('/register');
          }
    }else{
      $app->render('auth/register.php',['errors'=>$user->errors()]);
    }
  });

  $app->get('/login',$guest(),function() use ($app){
      
    $app->render('auth/login.php');
  })->name('login');

  $app->post('/login',$guest(),function() use ($app){
    $user = $app->User;
    $rules = [
      'password'=> [
                    'required'=> TRUE,
                    'min'=> 4
      ],
      'username'=>[
          'required' => TRUE,
          'max'=> 20
        ]
    ];
    if ($user->validate($_POST,$rules)) {
        $fetch_user = $user->exist($_POST);
        $remember = $app->request->post('remember');
        if($fetch_user){
          if(!$fetch_user->active){
            $app->flash("global","You havent activated account yet");
            $app->response->redirect("/login");
          }else{
          if($fetch_user&& $app->hash->passwordCheck($app->request->post('password'),$fetch_user->password)){
              $app->session->put('user',$fetch_user->user_id);
              if ($remember == 'on') {
                if (!$fetch_user->remember_id && !$fetch_user->remember_token) {
                  $remember_id = $app->hash->make($app->hash->salt(10));
                  $remember_token = $app->hash->make($app->hash->salt(10));
                  $user->remember($fetch_user->user_id,$remember_id,$remember_token);
                  $app->setCookie('remember',"{$remember_id}___{$remember_token}",Carbon::parse('+1 week')->timestamp);

                }else{
                  $app->setCookie('remember',"{$fetch_user->remember_id}___{$fetch_user->remember_token}",Carbon::parse('+1 week')->timestamp);                  
                }

              }

              $app->flash("global","welcome ". $fetch_user->username);
              $app->response->redirect($app->urlFor('admin'));
          }else{
            $app->flash("global","wrong username or password");
            $app->response->redirect("/login");
          }
        }
      }else{
        $app->flash("global","wrong username or password");
        $app->response->redirect("/login");
      }
  }else{
    $app->render('auth/login.php',['errors'=>$user->errors()]);
  }

  });

  $app->get('/logout', function() use($app){

    if ($app->getCookie('remember')) {
        $app->User->removeRemember($app->auth->user_id);
        $app->deleteCookie('remember');
    }

    $app->session->delete('user');
    $app->auth = false;
    $app->response->redirect('/login');
  })->name('logout');
 ?>
