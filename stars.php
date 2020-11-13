<?php 
// 2. Read existing users from a file (if it exists; else initialize
  //    to empty array):
  $answers = [];
  if (file_exists("answers.txt"))
  {
    $string = file_get_contents("answers.txt");
    $answers  = json_decode($string, true);
  }

if (isset($_GET['count'])) 
{ 
  $count = $_GET['count'];
  $svarid = $_GET['svar'];
$answers[$svarid]['upvotes']+=$count;
  // 4. 
  $string = json_encode($answers);
  file_put_contents("answers.txt", $string);
  echo $answers[$svarid]['upvotes'];
} 
else if (file_exists('count.txt')) 
{
  echo file_get_contents('count.txt');
} 
else
{
  echo 1;
}

?>

