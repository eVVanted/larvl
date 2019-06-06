<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 06.06.2019
 * Time: 15:19
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FirstController extends Controller
{
    public function show(){
        echo __METHOD__;
    }
    public function show1($id){
            echo $id;
        }

}