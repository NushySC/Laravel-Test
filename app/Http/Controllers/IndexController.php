<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class IndexController extends Controller
{
    public function index()
    {
        // the logic of your page will be here
 
        $nav_links = [
            '/' => 'Home'
        ];

        // as response we will return/include the contents of the file /resources/views/index.php
        $view_object = view('common/navigation', [
            'variable_a' => $nav_links // creates a variable $nav_links
        ]);
        $view_object->variable_b = [
            '/' => 'Home'
        ];
        $view_object->variable_c = $nav_links;

        echo $view_object;

        return $view_object;
        // return view('index');
    }
}