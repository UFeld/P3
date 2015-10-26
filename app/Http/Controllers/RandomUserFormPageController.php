<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RandomUserFormPageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//functon for processing user form

public function RandomUserForm(){

  return View('RandomUserGenerator');

}

  //function for processing post from form

  public function GenerateRandomUser(){

    $ageList = array(
        1 => "20",
        2 => "21",
        3 => "22",
        4 => "23",
        5 => "24",
        6 => "25",
        7 => "26",
        8 => "27",
        9 => "28",
        10 => "29",
        11 => "30",
        12 => "31",
        13 => "32",
        14 => "33",
        15 => "34",
        16 => "35",
        17 => "36",
        18 => "37",
        19 => "38",
        20 => "39",
        21 => "40",
        22 => "41",
        23 => "42",
        24 => "43",
        25 => "44",
        26 => "45",
        27 => "46",
        28 => "47",
        29 => "48",
        30 => "49",
        31 => "50",
        32 => "51",
        33 => "52",
        34 => "53",
        35 => "54",
        36 => "55",
        37 => "56",
        38 => "57",
        39 => "58",
        40 => "59",
        41 => "60",
        42 => "61",
        43 => "62",
        44 => "63",
        45 => "64",
        46 => "65"
    );

    $fNameList = array(
      1 => "Uri",
      2 => "Sam",
      3 => "David",
      4 => "Will",
      5 => "Cat",
      6 => "Bridget",
      7 => "Brent",
      8 => "Nathan",
      9 => "Corie",
      10 => "Philip",
      11 => "Ferne",
      12 => "Bill",
      13 => "Sanjib",
      14 => "Lisa",
      15 => "Edward",
      16 => "Merle",
      17 => "Brad",
      18 => "Angelina",
      19 => "Matt",
      20 => "Drew",
      21 => "Felice",
      22 => "Sandra",
      23 => "Sandy",
      24 => "Tom",
      25 => "Stan",
      26 => "Fran",
      27 => "Greg",
      28 => "Jerry",
      29 => "Larry",
      30 => "Marge",
      31 => "Mary",
      32 => "Nancy",
      33 => "Percy",
      34 => "Robert",
      35 => "Beatrice"
    );

    $lNameList = array(
      1 => "Feld",
      2 => "Rosenthal",
      3 => "Kahn",
      4 => "Cohen",
      5 => "Stein",
      6 => "Sand",
      7 => "Snow",
      8 => "Hodor",
      9 => "Stark",
      10 => "Baratheon",
      11 => "Bolton",
      12 => "Lanister",
      13 => "Greyjoy",
      14 => "Gardner",
      15 => "Tyrel",
      16 => "Flower",
      17 => "Tully",
      18 => "White",
      19 => "Black",
      20 => "Grey",
    );

//    $passwordWords = ''; <--Need similar info for creating objects

    $wordCount = 0;

    //set $wordCount = User Specified

    If (isset($_POST['numberOfUsers'])){

      $userCount = (int)$_POST['numberOfUsers'];

    };

    //select words = wordCount

    If (isset($_POST['numberOfUsers'])){

    while ($userCount>0) {

       //$selectWord = rand(0,99);  <--User for creating user objects after class

       $userCount--;

     };
    };

  //  $_POST['numberOfUsers'];

    return View('RandomUserGenerator');

  }

}
