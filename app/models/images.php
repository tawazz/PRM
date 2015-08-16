<?php
     class Images extends Table{
         protected $table = 'images';
         protected $primary_key = 'img_id';

         public function saveImages($post_id,$img){
            for($i=0;$i<count($img['name']);$i++){
                $data['name'] = $img['name'][$i];
                $data['ext'] = 'jpg';
                $data['post_id'] = $post_id;
                $data['created']= date('Y-m-d G:i:s');
                $img_id = $this->save($data);
                $new_name = base_convert($img_id+100000, 10, 36);
                $path ="/files/".$new_name.".".$data['ext']; 
                $data['path']= $path;
                $data['tmp_name']=$new_name;
                move_uploaded_file($img['tmp_name'][$i],"files/".$new_name.".".$data['ext']);
           
                $this->set($data);
            }

         }
    }
?>
