<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use \Badcow\LorumIpsum\Generator;

class LoremIpsumGeneratorFormPageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//need logic for generating get for requests

public function LoremIpsumForm(){

  return View('LoremIpsumGenerator');
  //create view and pass in cats
}

//Need function for post results

public function GenerateLoremIpsum(){


//return $_POST['numberOfParagraphs'];

$generator = new \Badcow\LoremIpsum\Generator();
//$paragraphs = $generator->getParagraphs($_POST['numberOfParagraphs']);
//dd($paragraphs);
//$cats = implode ('<p>',$paragraphs);
//return $cats;

return implode ('<p>',$generator->getParagraphs($_POST['numberOfParagraphs']));

return View('LoremIpsumGenerator');


  }


  }
