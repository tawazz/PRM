<?php
  session_start();
  require 'vendor/autoload.php';
  require 'tazzy_helpers/tazzy_autoload/autoload.php';
  use Slim\Slim;

  $app = new Slim([
    'view'=> new \Slim\Views\Twig()
  ]);

   //Middleware
  $app->add(new Before());
  $app->add(new Csrf());
  require 'app/Middleware/auth_filters.php';

  //views
  $view = $app->view();
  $view->setTemplatesDirectory('app/views');
  $view->parserExtensions = [new \Slim\Views\TwigExtension()];
   //models
  $app->container->set('messages', function(){
    return new Msg();
  });
  $app->container->set('posts', function(){
    return new Posts();
  });
   $app->container->set('User', function(){
    return new User();
  });
  $app->container->set('events',function(){
      return  new Events();
  });
  $app->container->set('images',function(){
      return  new Images();
  });
  //dependancies
  $app->file = function($file){
      return  new File($file);
  };
  $app->container->singleton('hash',function () use($app){
    return new Hash();
  });
  $app->container->singleton('qb',function () use($app){
    return new QueryBuilder();
  });
  $app->container->singleton('session',function () use($app){
    return new Session();
  });
  $app->container->singleton('mail',function () use($app){
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->Host = "smtp.gmail.com";
    $mailer->SMTPAuth = TRUE;
    $mailer->SMTPSecure = "tls";
    $mailer->Port = 587;
    $mailer->Username = "tawanda.dev@gmail.com";
    $mailer->Password = "qwertyas123";
    $mailer->isHTML(true);

    return new Mailer($app->view,$mailer);

  });
  //variables
  $app->auth =false;
  //routes
  require'app/routes/routes.php';

  $app->run();
  //var_dump($app->auth);
 ?>
