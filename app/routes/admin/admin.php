<?php

      $app->get('/admin', $signedIn,function() use ($app){
        $app->render('admin/home.php');
      })->name('admin');

       $app->get('/admin/profile',$signedIn,function() use($app){
           header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
           header("Pragma: no-cache"); // HTTP 1.0.
           header("Expires: 0"); // Proxies.
           $app->render('admin/profile.php');
       })->name('profile');

       $app->get('/admin/messages',$signedIn,function() use($app){
           $app->render('admin/messages.php',['messages'=>$app->messages->find('all',['order'=>['created'=>'desc']])]);
       })->name('messages');

       $app->get('/admin/settings',$signedIn,function() use($app){
           $app->render('admin/settings.php');
       })->name('settings');

        $app->get('/admin/users',$signedIn,function() use($app){
           $app->render('admin/users.php',["users"=>$app->User->find('all')]);
       })->name('users');

       //post data

    $app->post('/posts/event', $signedIn,function() use ($app){
        if($app->events->validate($_POST)){
            $_POST['user_id']= $app->auth->user_id;
            $app->events->save($_POST);
            $app->flash("global","event added");
            $app->response->redirect('/admin');
        }else{
            $app->flash("global","fill in all details");
            $app->response->redirect('/admin');
        }
    });

    $app->post('/posts/add', $signedIn,function() use ($app){
        if($app->posts->validate($_POST)){
            $_POST['user_id']= $app->auth->user_id;
            $post_id = $app->posts->save($_POST);
            if(!empty($_FILES['img'][0]['name'])){
                $app->images->saveImages($post_id,$_FILES['img']);
            }
            $app->flash("global","Post added");
            $app->response->redirect('/admin');
        }else{
            $app->flash("global","fill in all details");
            $app->response->redirect('/admin');
        }
    });

     $app->post('/update/u', $signedIn,function() use ($app){
        $data = [];
        if(count($_FILES) > 0){
            $F = new File($_FILES['img']);
            $new_name = base_convert($app->auth->user_id+100000, 10, 36);
            $path ="/files/users/".$new_name.".".$F->ext();
            $F->move("files/users/".$new_name.".".$F->ext());
            $data['pic']= $path;
        }
        if(!empty($_POST['email'])){
            $data['email']=$_POST['email'];
        }
        if(count($data) < 1){
            $app->flash("global","fill in all details");
            return $app->response->redirect($app->urlFor('profile'));
        }
        $user = $app->User;
        $user->read($app->auth->user_id);
        $user->set($data);
        $app->flash("global","User details Updated");
        $app->response->redirect($app->urlFor('profile'));
       
    });

    $app->post('/update/u/password', $signedIn,function() use ($app){
        if($app->hash->passwordCheck($app->request->post('old_password'),$app->auth->password)){
            $new_password = $_POST['new_password'];
            $repeat_password = $_POST['repeat_password'];
            
            if($new_password == $repeat_password){
                $new_password = $app->hash->password($new_password);
                $user = $app->User;
                $user->read($app->auth->user_id);
                $user->set('password',$new_password);
                $app->flash("global","User Password Updated");
                $app->response->redirect($app->urlFor('profile'));
            } else{
                $app->flash("global","Passwords dont match");
                $app->response->redirect($app->urlFor('profile'));
            }           
        }else{
            $app->flash("global","Wrong Password");
            $app->response->redirect($app->urlFor('profile'));
        }

    });

    $app->post('/reg/u/new', $signedIn,function() use ($app){
        $user = $app->User;
        if ($user->validate($_POST)) {
          $active_id  = $app->hash->make($app->hash->salt(10));
          $data = [
            "email" => $app->request->post('email'),
            "active"=> false,
            "active_hash"=> $app->hash->make($active_id)
          ];

          $id =$user->save($data);
          $mailer = $app->mail;
          if($id){
            if(!$mailer->send('email/register.php',['email'=>$data['email'],'hash'=>$active_id],function($message) use($data){
              $message->to($data['email']);
              $message->subject('Thanks for registering!');
            })){
              //var_dump($mailer->errors());
            }
            $app->flash("global","new User registered succesfully");
            $app->response->redirect('/admin/settings');
          }else{
            $app->flash("global","error <br/>".join("<br/>",$user->errors()));
            $app->response->redirect('/register');
          }
        }else{
          $app->render($app->urlFor('settings'),['errors'=>$user->errors()]);
        }
    });
?>