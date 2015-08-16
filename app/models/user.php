<?php
  /**
   *
   */
  class User extends Table
  {
    protected $table = 'users';
    protected $primary_key ='user_id';
    protected $validate = [
      'password'=> [
                    'required'=> TRUE,
                    'min'=> 4
      ],
      'username'=>[
          'required' => TRUE,
          'max'=> 20,
          'unique'=>'users'
        ],
      'email'=>[
          'required' => TRUE,
          'min'=> 4,
          'unique'=>'users'
        ]
    ];

    public function exist ($data){
      $this->errors = null;
      $conditions = [
        "where"=>["username","=",$data['username']]
      ];
      $user = $this->find('first',$conditions);
      //var_dump($user);
      if($user){
        return $user;
      }else{
        //$this->errors = $user->errors();
        return false;
      }
    }

    public function activate($id){
      $user = $this->find('first',['where'=>['active_hash','=',Hash::make($id)]]);
      if($user){
        $this->read($user->user_id);
        $this->set([
          'active'=>true,
          'active_hash'=>null
        ]);
        return true;
      }
      return false;
    }

    public function remember($id,$rem_id,$token){
      $this->read($id);
      $this->set([
        'remember_id' => $rem_id,
        'remember_token'=>$token
      ]);
    }
    public function removeRemember($id)
    {
      $this->remember($id,NULL,NULL);
    }
    public function max()
    {
      $this->find('max','user_id');
    }
  }

 ?>
