<?php

if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $gol=$_POST['golongan'];
  $bil1=$_POST['bil1'];
  $A= $bil1*4000;

  $B= $bil1*5000;

  $C= $bil1*6000;

  $D= $bil1*7500;

  $lembur=($bil1-48)*3000;

  $A1= 192000+$lembur;

  $B1= 240000+$lembur;

  $C1= 288000+$lembur;

  $D1= 360000+$lembur;

  echo "<P>NAMA KARYAWAN  = $nama ";

  echo "<P>GOLONGAN   = $gol ";

  echo "<P>JAM KERJA =$bil1";

  if ($gol=='A'&& $bil1<=48)
  {
      echo "<P>GAJI =Rp.$A ";
  }
  else if($gol=='B'&& $bil1<=48)
  {
      echo "<P>GAJI =Rp.$B ";
  }
  else if ($gol=='C'&& $bil1<=48)
  {
      echo "<P>GAJI =Rp.$C ";
  }
  else if ($gol=='D'&& $bil1<=48)
  {
      echo "<P>GAJI =Rp.$D";
  }
  else if ($gol=='A'&& $bil1>48)
  {
      echo "<P>GAJI =Rp.$A1 ";
  }
  else if($gol=='B'&& $bil1>48)
  {
      echo "<P>GAJI =Rp.$B1";
  }
  else if ($gol=='C'&& $bil1>48)
  {
      echo "<P>GAJI =Rp.$C1";
  }
  else if ($gol=='D'&& $bil1>48)
  {
      echo "<P>GAJI =Rp.$D1";
  }
  }
  
 ?>
