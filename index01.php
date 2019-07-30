<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/7/30
 * Time: 14:06
 */
    $url ="http://www.17k.com/top/refactor/top100/06_vipclick/06_vipclick_cnl_man_top_100_pc.html";

    $curlObj = curl_init();
    curl_setopt($curlObj,CURLOPT_URL ,$url);
    curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curlObj,CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($curlObj,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($curlObj,CURLOPT_SSL_VERIFYPEER,false);

    $returnData = curl_exec($curlObj);
    $res ="#.*<div class=\"content TABBOX\">.*<tr>.*<td width=\"60\">.*<a href=\".*\" target=\"_blank\">(.*)</a>.*</td>.*<td><a class=\"red\" href=\"(.*)\" title=\".*\" target=\".*\">(.*)</a>.*</td>.*</tr>.*</div>.*#isU";
    preg_match_all($res,$returnData,$array);
   var_dump($array);


// try {
//     $dbh = new PDO('mysql:host=127.0.0.1;dbname=1704phpa', 'root', 'root');
//     $dbh->exec("set names utf8");
//      foreach($array as $key =>$value){
//          $sql
//      }
//      $sql="insert into `book`(`name`,`url`,'type') VALUE ('','','')";
//     var_dump($sql);
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }


