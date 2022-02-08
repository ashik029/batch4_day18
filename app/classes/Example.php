<?php


namespace App\classes;
class Example
{
    public $name;
    public $data = [];

    public function index()
    {
//       $this->name = 'BITM';
//       $this->name = 'BASIS';
//       echo $this->name;
//        $this->data = [10,20,30,'BITM','BASIS',100.200,true];
////        echo $this->data[];
//        foreach ($this->data as $key => $item)
//        {
//            echo $key.' '.$item.'<br/>';
//        }
//        $this->data = [
//            'name'   => 'Sagor',
//            'gmail'  => 'sagor@gmail.com',
//            'mobile' => '123456'
//        ];
//        echo $this->data['name'];

        //Multiple Array//

        $this->data = [
            0 => [
                'name'    => 'Sagor',
                'gmail'   => 'sagor@gmail.com',
                'mobile'  => [
                'personal'=> '123123',
                'parent'  => '112233']
            ],
            1 => [
                'name'   => 'Asif',
                'gmail'  => 'asif@gmail.com',
                'mobile' => [
                'personal'=> '123123',
                'parent'  => '112233']
            ],
            2 => [
                'name'   => 'Rakib',
                'gmail'  => 'rakib@gmail.com',
                'mobile' => [
                'personal'=> '123123',
                'parent'  => '112233'],
            ],
            3 => 'BITM',
            4 => [
                'name'   => 'Sajib',
                'gmail'  => 'sajob@gmail.com',
                'mobile' => '0123456'
            ],

            ];
//            echo $this->data[0]['name'];
        foreach ($this->data as $item) {
            if (is_array($item))
            {
                foreach ($item as $value)
                {
                    if  (is_array($value))
                    {
                        foreach ($value as $v_value)
                        {
                            echo $v_value;
                        }
                    }
                    else{
                        echo $value.' ';
                    }

                }
                echo '<br/>';
                 }
            }
//        echo '<pre>';
////        print_r($this->data);
//        var_dump($this->data);
        }

//            echo $item['name'].' '.$item['gmail'].' '.$item['mobile']. '<br/>';

}

