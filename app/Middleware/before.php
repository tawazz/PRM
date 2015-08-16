<?php
use Slim\Middleware;

/**
 *
 */
class Before extends Middleware{

  public function call (){
    $this->app->hook('slim.before',[$this,'run']);
    $this->next->call();
  }

  public function run(){
      
    $this->app->view()->appendData(["baseUrl"=> "http://localhost:39845"]);
    if($this->app->session->exists('user')){
      $user = $this->app->User;
      if($user->read($this->app->session->get('user'))){
        $this->app->auth = $user->get();
      }
      $this->app->view()->appendData([
          "auth"=>$this->app->auth
      ]);
    }
    $this->rememberMe();
  }

  protected function rememberMe()
  {
    if ($this->app->getCookie('remember') && !$this->app->auth) {
      $data = $this->app->getCookie('remember');
      $creds = explode('___',$data);
      if (empty(trim($data)) || count($creds) !== 2) {
        $this->app->response->redirect($this->app(urlFor('home')));
      }else{
        $id = $creds[0];
        $token = $creds[1];
        
        $user = $this->app->User->find('first',[
          'where'=>['remember_id','=',$id]
        ]);
        
        if($user){
          if ($this->app->hash->check($token,$user->remember_token)) {
              $this->app->session->put('user',$user->user_id);
              $this->app->auth = $user;
          }else {
            $this->app->User->removeRemember($user->user_id);
          }
        }else{
            $this->app->session->delete('user');
            $this->app->deleteCookie('remember');
            $this->app->auth = FALSE;
            $this->app->response->redirect('/login');
        }
      }
    }
  }

}

 ?>
