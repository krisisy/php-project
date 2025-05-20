<?php
// Odd or Even

$num = readline("Enter a number: ");
$result = "Even";

if ($num % 2 != 0){
   $result = "Odd";
 }

echo "The number is: {$result}";

// ===========================================
// Prime Numbers

function isPrime($num){
    $num = readline("Enter a number: ");
    if (!is_numeric($num)){
        return "Invalid Input";
        exit;
    }

    $num = (int)$num;
    for($ctr=0; $ctr <= $num; $ctr++){
        if ($ctr < 2){
            return "{$num} is not a prime number\n";
        }
        if ($ctr == 2){
            return "{$num} is a prime number\n";
        }
        if ($ctr % 2 == 0) {
            return"{$num} is not a prime number\n";
        }
        $sqrtNum = sqrt($num);
        for($i = 3; $i <= $sqrtNum; $i +=2 ){
            if ($num % $i == 0){
                return "{$num} is not a prime number\n";
            }
        }
        return "{$num} is a prime number\n";
    }
}

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;


$slugify = new Slugify();
echo $slugify->slugify("New title") . "\n";

$uuid = Uuid::uuid4();
echo $uuid->toString();

$faker = Faker\Factory::create();
echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->phoneNumber() . "\n";
echo $faker->text() . "\n";
