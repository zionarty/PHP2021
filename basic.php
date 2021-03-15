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
            $x =10; $y =20;
            $y += ++$x;  # x =11 y=31
            ###
            $x =10; $y =20;
            $y += $x++;  # x =11 y=30
    #สำหรับเปรียบเทียบ(Comparison)
        /*
        ! หรือ not  
            !(true) = false
            !(false) = true
        && หรือ and
            true && true = true
            true && false = false
            false && false = false
        || หรือ or
            true || true = true
            true || false = true
            false || false = false
        ^ หรือ xor
            true ^ true = false
            true ^ false = true
            false ^ false = false
        */
        $a = (10 <= 9);     #false
        $a = (10 == 10);    #true
        $a = (10 == "10");  #true
        $a = (10 === "10"); #false 10=int | "10"=string
        $a = ("php" == "PHP");  #false ลักษณะตัวพิมพ์ต่างกัน
    #สำหรับเปรียบเทียบทางตรรกะ
        $a =!(1 == 2); #!(false) = true
        $b = (1 == 2) && (1 > 0); #(false) && (true) = false
        $c = (1 == 1) && (1 > 0); #(true) && (ture) = true
        $d = (1 == 2) || (1 > 0); #(false) || (true) = true
    #Ternary
        $a = (1>0)? true : false; #true
        $x =10;
        $b = ($x%2 == 0)? "เลขคู่":"เลขคี่"; #เลขคู่;
    #ลำดับความสำคัญของ operator
        /*
        1.()
        2.++,--(วางไว้หน้าตัวแปร)
        3.*,/,%
        4.+,-
        5.==,!=
        6.&&
        7.||
        8.=,+=,-=,/=,*=
        9.++,--(วางไว้หลังตัวแปร)
        */
        $a = 2*100/10; #(2*100)/10 = 20
        $b = 100/10%2; #(100/10)%2 = 0
        $c = 100%80*2;  #(100%80)*2 = 40
        $d = 100/10+30; #(100/10)+30 =40
        $e = 2*100/10+30; # (2*(100/10))+30 = 50
        $x =5 ; $y = 10;
        $z = $x++ * --$y; #5*(10-1) =45
#ลักษณะเพิ่มเติม ชนิดข้อมูล string
    #เทคนิคการเขียน string ยาวๆ
        $str = "mr. somchai pie <br>";
        $str .= "123/456 nonthaburi ";
        $str .= "thailand";
        echo $str;
        ###
        echo "mr. somchai pie <br>
        123/456 nonthaburi
        thailand
        ";
    #การแทรกค่าตัวแปรลงใน string (String Interpolation)
        $name ="somchai";
        $age = 30;
        $career = "Programmer";
        echo "My name is :$name age : $age career : $career";
        ###
        $w =100;
        echo "width:{$w}px";
    #เครื่องหมาย single quotes และ double quotes
        /*
        single quotes : ไม่สามารถแทรกค่าตัวแปรได้
        double quotes : สามารถแทรกค่าตัวแปรได้
        */
        $name ="somchai";
        $age = 30;
        $career = "Programmer";
        echo "My name is :$name age : $age career : $career";
        echo 'My name is :$name age : $age career : $career';
    #Escape Sequence
        echo "You \"MUST NOT\" go here";
        echo 'Don\'t remove';
        $name = "somchai";
        echo "The variable \$name store $name";
        echo "We use backslash(\\) for escape sequence";
#การใช้คำสั่ง if
    #รูปแบบพื้นฐานของคำสั่ง if
        /*
        if(เงื่อนไข){
            คำสั่งหากตรงเงื่อนไข
        }
        */
        $x = 10 ; $y =10;
        if($x == $y){
            echo "$x เท่ากับ $y";
        }
        if($y != 0){
            $z = $x/$y;
        }
        if(!defined('PRICE')){ #ถ้ายังไม่ได้กำหนดค่า PRICE
            define('PRICE',299);
        }
        if(isset($x)){ #ถ้ากำหนดตัวแปร $x
            echo $x;
        }
    #การใช้คำสั่ง if...else
        




?>