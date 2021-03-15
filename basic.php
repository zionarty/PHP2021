<?php
#แสดงผลด้วยคำสั่ง echo และ print
    #echo
        echo ("hello,world");
        echo "hello,world";
    #print
        print ("hello,world");
        print "hello,world";

#statement และการสิ้นสุดคำสั่ง
    #single statement
        $x = "PHP";
        echo $x;
    #compound statement
        $a = 0;
        if($a == 0){
            echo "เกิดข้อผิดพลาด";
            #exit;
        }
        ####
        $a = 123 ; $b = 456 ; echo $a + $b;
        ####
        $x = 12+34+56+
        78+9+10; echo $x;

#การเขียนคำอธิบายลงบนเอกสาร
    #single-line comment
    /*
    multi-line comment
    */

#ตัวแปรและค่าคงที่
    #integer
        $x = 123 ; $y = 4.56; $z = -789;
    #string
        $name = "somchai";
        $country = 'Thailand';
        $phone = "087xxxxx";
    #boolean
        $first_time = true;
        $is_valid = false;
    #constantค่าคงที่
        define("URL", "http://www.google.com");
        echo URL;
        ###
        define("PRICE",100);
        echo constant("PRICE");
        ###
        define("_X_",10);
        echo "_X_";
        echo _X_;
    #null
        $a; $b =null;
        echo is_null($b);
    #การตรวจสอบและยกเลิกตัวแปร
        #isset
            $x = 123;
            $a = isset($x);  #true
            $y = null;
            $b = isset($y); #false
            $c = isset($z); #false ยังไม่ได้กำหนดตัวแปร
        #is_null ตรวจสอบค่า null
        #empty ตรวจสอบว่ามีค่าหรือไม่
            $x ="";
            $a =empty($x);  #true
            $y =0;
            $b =empty($y); #true
            $c =empty($z); #false ยังไม่ได้กำหนดตัวแปร
        #unset ยกเลิกการใช้ตัวแปร
            $a =123;
            $b = "php";
            unset($a,$b);
            echo $b;
#operator
    #สำหรับคำนวน
        $x = 1+2;
        $x = 2-1;
        $x = 1*2;
        $x = 1/2;
        $x = 13%5;
    #สำหรับการเชื่อมต่อสตริง (String Concatenation)
        $str = "My"."SQL"; #MYSQL
        echo "somchai"."test";
        $fname = "John";
        $lname = "Smith";
        echo "My name is ".$fname." ".$lname;
        echo '1'.'2'.'3';
    #สำหรับการกำหนดค่า (Assignment)
        #กำหนดค่า
            $x =10;
        #กำหนดค่าบวกเพิ่มจากตัวแปรเดิม
            $x =10;
            $x += 8;  #18
        #กำหนดลดค่าลงจากตัวแปรเดิม
            $x =10;
            $x -= 8;  #10
        #กำหนดค่าคูณจากตัวแปรเดิม
            $x =10;
            $x *= 8;  #80
        #กำหนดค่าหารจากตัวแปรเดิม
            $x =16;
            $x /= 8;  #2
        #กำหนดค่า modulusจากตัวแปรเดิม
            $x =10;
            $x %= 3;  #1
        #ใช้ในการเชื่อมต่อ string จากซ้ายไปขวา
            $x = "PHP";
            $x .= "/MYSQL"; #PHP/MYSQL
    #สำหรับเพิ่มลดค่า(Increment & Decrement)
        #เพิ่มค่าไปอีก 1
            $x =10;
            $x++;   #11
        #ลดค่าไปอีก 1
            $x =10;
            $x--;   #9
        #ความแตกต่าง
            $x = 10;
            $y = 10;
            $x++;   #11
            ++$y;   #11
            ###
            
?>