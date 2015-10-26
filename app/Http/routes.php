<?php

//Lorem Ipsum Generator Form and Results Page

Route::get('LoremIpsumGenerator', 'LoremIpsumGeneratorFormPageController@LoremIpsumForm');
Route::post('LoremIpsumGenerator', 'LoremIpsumGeneratorFormPageController@GenerateLoremIpsum');

//Random User Generator Form and Results Page

Route::get('RandomUserGenerator', 'RandomUserFormPageController@RandomUserForm');
Route::post('RandomUserGenerator', 'RandomUserFormPageController@GenerateRandomUser');

Route::get('/', function() {
  echo "Starting Page!";

});
