<?php
  $app->get('/',function() use ($app){
    $app->render('home/home.php');
  })->name('home');

  $app->get('/about',function() use ($app){
    $app->render('home/about.php');
  })->name('about');

$app->get('/ministries',function() use ($app){
    $app->render('home/ministries.php');
  })->name('ministries');

$app->get('/resources',function() use ($app){
    $posts = $app->posts->find('all',['order'=>['post_id'=>'desc']]);
    /*for($i=0;$i<count($posts);$i++){
        $posts[$i]->User = $app->User->find('first',['where'=>['user_id','=',$posts[$i]->user_id]]);
    }*/
    $app->render('home/resources.php',['posts'=> $posts]);
  })->name('resources');

$app->get('/events',function() use ($app){
    $app->render('home/events.php');
  })->name('events');

  $app->get('/contact',function() use ($app){
    $app->render('home/contact.php');
  })->name('contact');

  $app->get('/prm-events',function() use ($app){
    $start = $app->request->get('start');
    $end = $app->request->get('end');

    $events = $app->events->getEvents($start,$end);
    $E = [];
    foreach ($events as $event){
        $e['title'] = $event->name;
        $e['start']=$event->date."T".$event->time;
        $e['details'] = $event->details;
        $e['allDay'] = FALSE;
        $e['editable'] = FALSE;
        $e['startEditable'] = FALSE;
        $e['backgroundColor']="#a66bbe";
        array_push($E,$e);
    }
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(json_encode($E));
  });

  $app->post('/send',function() use ($app){
     $app->messages->save($_POST);
     $app->flash("global","your message has been sent");
    $app->response->redirect('/contact');
  });

 ?>
