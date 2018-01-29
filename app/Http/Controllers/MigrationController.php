<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function index($action)
    {
        //Migration controller
        $output = "";
        switch ($action) {
            case 'home':
                return view('migration', ['output' => 'Welcome Migration page']);
                break;
            case 'code':
                $output = shell_exec("git pull origin master");
                break;
            case 'database-migrate':
                $output = shell_exec("php ../artisan migrate");
                break;
            case 'database-fresh':
                $output = shell_exec("php ../artisan migrate:fresh");
                $output .= shell_exec("/usr/local/bin/composer dump-autoload");
                $output .= shell_exec("php ../artisan db:seed");
                break;
            default:
                return view('migration', ['output' => 'Welcome Migration page']);
                break;
        }
        return view('migration', ['output' => $output]);
    }
}
