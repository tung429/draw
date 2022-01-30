    public function draw($value,$length,$qty=null)
    {
        if(empty($qty)){$qty = 1;}
        //gen pool
        for($i =1; $i<= $value;$i++){
            $ori_arr[] = $i;
        }
        $arr = $ori_arr;
 
        //pick in pool
        for($y=0;$y<$qty;$y++){
            for($i=0;$i<$length;$i++){
                $rand = rand(1,($value-$i-($y*$length)));
                $arr = array_values($arr);
                $result[$y][] = $arr[$rand-1];
                unset($arr[$rand-1]);
            }
            sort($result[$y]);
        }
        print(json_encode($result));
 
    }
