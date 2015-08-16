<?php
     class Posts extends Table{
         protected $table = 'posts';
         protected $primary_key = 'post_id';
         protected $hasMany = ['Images'];
         protected $hasOne =['User'];
         protected $validate = [
          'title'=> [
                        'required'=> TRUE,
          ],
          'body'=>[
              'required' => TRUE,
            ]
        ];
    }
?>
