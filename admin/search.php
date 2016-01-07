<?php

  include ("connect_db.php");
  $sName = "";
  $sCategory = "";
/*
  if(empty($_POST["sName"])&&empty($_POST["sCategory"])&&empty($_POST["sAddress"])){
    echo '<script language="javascript">';
    echo 'alert("請選擇其中一種搜尋方法")';
  }
*/
  /*
  try
  {

    $stmt = $dbh->prepare("SELECT * FROM article");

    $stmt->bindparam(":aDateTime", $aDateTime);
    $stmt->bindparam(":aTitle", $aTitle);
    $stmt->bindparam(":aSecondTitle", $aSecondTitle);
    $stmt->bindparam(":aText", $aText);
    $stmt->bindparam(":aSummary", $aSummary);

    $stmt->execute();

  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }*/
  /*
  if (empty($_POST["sName"])){
    $sNameErr = "店名不得為空值";
  }

  else {
    $sName = ($_POST["sName"]);
    $catch = "SELECT * FROM `Store` where `sName` LIKE '%"."$sName"."%'";
  }

  if (empty($_POST["sCategory"])){
    $sCategoryErr = "店名不得為空值";
  } 
  else {
    $sCategory = ($_POST["sCategory"]);
    $count = 0;
    for($i = 0; $i <= 11; $i++){
      if(empty($sCategory[$i])){
        $count = $i - 1;
        break;
      }
      else{
        $count = 11;
      }
    }
  
    $str = "";
    for($i = 0; $i <= $count; $i++){
      if($i == 0){
        $str = "SELECT * FROM `Store` WHERE `sId` IN(SELECT DISTINCT `sId` FROM `Store` NATURAL JOIN `Category` WHERE `sCategory` = '$sCategory[$i]'";
        if($count == 0){
          $str = $str . ")";
        }
      }
      else if ($i == $count){
        $str = $str . " OR `sCategory` = '$sCategory[$i]')";
      }
      else{
        $str = $str . " OR `sCategory` = '$sCategory[$i]'";
      }
    }
    $catch = $str;
  }

  if (empty($_POST["sAddress"])){
    $sAddressErr = "店名不得為空值";
  }

  else {
    $sAddress = ($_POST["sAddress"]);
    $catch = "SELECT * FROM `Store` where `sAddress` LIKE '%"."$sAddress"."%'";
  }*/

?>