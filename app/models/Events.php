<?php
    
    class Events extends Table{
        protected $table = 'events';
        protected $primary_key ='event_id';
        protected $validate = [
          'location'=> [
            'required'=> TRUE,
            'min'=> 4
          ],
          'name'=>[
              'required' => TRUE
            ],
           'details'=>[
              'required' => TRUE
            ],
           'date'=>[
              'required' => TRUE
            ],
            'time'=>[
              'required' => TRUE
            ],
        ];

        public function getEvents($start,$end){
            $conditions = [
                'where'=>['date','>=',$start],
                'andWhere' => ['date','<=',$end]
            ];
            return $this->find('all',$conditions);
        }
    }
?>

