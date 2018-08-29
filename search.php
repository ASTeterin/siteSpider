<?php
  $requered_text = $_POST['find_text'];
  $site_name = $_POST['site'];
  $begin_date = $_POST['begin_date'];
  $end_date = $_POST['end_date'];
  session_start();
 
  function printArray($array) {
    echo $array['date'], " ", $array['title'], "<br/>";
  }


  $t = $_SESSION['records'];
  $count_elements = count($t);
  
  for ($i = 0; $i < $count_elements; $i++)
  {
    echo $t[$i]['date'], " ",  $begin_date, "<br/>";
    
    if (($t[$i]['date'] >= $begin_date) && ($t[$i]['date'] <= $end_date))
    {
      //echo $t[$i]['date'], "<br/>";
      $result_table[] = $t[$i];
    }
  }
  if (!empty($result_table))
  {  
    $_SESSION['siteCopies'] = $result_table;
    $_SESSION['beginDate'] = $begin_date;
    $_SESSION['endDate'] = $end_date;
  }
  header("location: index.php");
  
  
  
?>