  <?php
   function getRandomProblem($min = 1, $max = 10) {
     $randomNumber = rand($min, $max);
     switch ($randomNumber) {
       case 1:
         return 'What is the sum of 2 + 2?';
         break;
       case 2:
         return 'What is the product of 3 x 4?';
         break;
       case 3:
         return 'What is the difference of 5 - 2?';
         break;
       case 4:
         return 'What is the quotient of 10 / 2?';
         break;
       case 5:
         return 'What is the product of 6 x 7?';
         break;
       case 6:
         return 'What is the sum of 4 + 8?';
         break;
       case 7:
         return 'What is the difference of 9 - 3?';
         break;
       case 8:
         return 'What is the product of 2 x 10?';
         break;
       case 9:
         return 'What is the quotient of 15 / 3?';
         break;
       case 10:
         return 'What is the sum of 7 + 9?';
         break;
       default:
         return 'Something went wrong! Please try again.';
     }
   }
?>