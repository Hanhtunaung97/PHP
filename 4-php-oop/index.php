<?php

// require_once __DIR__ . "/classes/BankAccount.php";
// require_once __DIR__ . "/classes/Person.php";
// require_once __DIR__ . "/classes/Phone.php";
// require_once __DIR__ . "/classes/Db.php";
// require_once __DIR__ . "/classes/Db.php";
// require_once __DIR__ . "/classes/QueryBuilder.php";
// require_once __DIR__ . "/classes/FileWriter.php";
// require_once __DIR__ . "/test-db.php";

require_once "./autoLoad.php";
echo "<pre>";
$req = new Request;
echo $req->get();
echo "<br>";
echo $req->file();
echo "<br>";
echo $req->files();
echo "<br>";
echo $req->save();
echo "<br>";
echo $req->length();
echo "<br>";
echo $req->type();
// $student = new Student;
// print_r($student->select(["id", "name", "pocket_money"])->limit(5)->all());
// echo "<br>";
// $batch = new Batch;
// print_r($batch->select()->all());
// echo "<br>";
// $course = new Course;
// print_r($course->select()->all());
// $m = new Model;
// print_r($m);
// $m = new Mother("hello", "hi", "hola");
// print_r($m);
// echo "<br>";
// $c = new Child("hello", "hi", "hola", "choung", "mushi");
// print_r($c);
// echo "<br>";
// echo $c->d;
// echo $c->x();
// $myAccount = new BankAccount("Han Htun Aung", 2500);
// echo $myAccount->deposit(3000);
// echo "<br>";
// echo $myAccount->onlineDeposit("K pay", 5000);
// echo "<br>";
// echo $myAccount->withdraw(500);
// echo "<br>";
// echo $myAccount->transfer("moe moe", 1000);
// echo "<br>";
// echo $myAccount->getBalance();
// $db = new Db;
// $qb = new QueryBuilder("students");njfcxg

// $sql = $qb->select(["id", "name"])
//     ->where("gender_id", "=", "1")
//     ->where("pocket_money", ">", 500)
//     ->orderBy("id", "DESC")
//     ->orderBy("name")
//     ->limit(5)
//     ->sql();
// $students = $db->all($sql);
// print_r($students);
// $db = new Db;
// $student = $db->all("SELECT * FROM students LIMIT 10");
// print_r($student);

// $file = new FileWriter("example.txt");
// $write = $file->fileWrite("hello hello hello");
// echo $write;

// $me = new Person("han htun aung", "27", "male");
// print_r($me);
// echo $me->speak("thai");
// $you = new Person("yu yu", "22", "female");
// print_r($you);
// echo $you->learn("php");
// $me = new Person;
// $me->name = "han htun aung";
// $me->age = "27";
// $me->gender = "male";
// print_r($me);
// echo $me->speak("malay");
// $you = new Person;
// $you->name = "yu yo";
// $you->age = "20";
// $you->gender = "female";
// print_r($you);
// echo $you->speak();

// echo "<pre>";
// $iphone = new Phone;
// $iphone->brand = "I phone";
// $iphone->brand = "16 pro max";


// echo $iphone->makeDial();
// echo "<pre>";
// echo $iphone->textMessage();
// echo "<pre>";
