<style>
    h1{
      background: #ccc;
      color:white;
      text-align:left;
      padding: 5px;
    }
    
    table{
        border-collapse:collapse;
        border:1px solid #ccc ;
        width:60%;
        margin-left:20%;
    }
    td{
        border:1px dash #ccc ;
        padding:6px;
        font-family:arial;
        font-style:bold;
    }
    </style>
<?php
$stdid="131232";
$stdname="Mohamed abdirahmaan ";
$faculty="Engineering and computer";
$department="computer ";
$csemester="5";
$subject="php/mysql server ";
$actone=10;
$midterm=25;
$acttwo=10;
$finalresult=45;
$totalmark=$actone+$midterm+$acttwo/8;
$reportdate="06/10/2022";
echo "<h1> student board Marks </h1>";
echo "<hr>";
echo "<table >";
echo "<tr><td>student ID </td><td>  $stdid </td>";
echo "<tr><td>student name  </td><td> $stdname </td>";
echo "<tr><td>faculty </td><td> $faculty </td>";
echo "<tr><td>department </td><td> $department </td>";
echo "<tr><td>current semester </td><td> $csemester </td>";
echo "<tr><td>subject </td><td> $subject </td>";
echo "<tr><td>activity one </td><td> $actone </td>";
echo "<tr><td>midterm </td><td> $midterm </td>";
echo "<tr><td>activity two </td><td> $acttwo </td>";
echo "<tr><td>final result </td><td> $finalresult </td>";
echo "<tr><td>total marks </td><td> $totalmark </td>";
echo "<tr><td>report date </td><td> $reportdate</td>";
echo "</table";