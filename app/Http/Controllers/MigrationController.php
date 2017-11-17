<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function index($action)
    {
        switch ($action) {
            case 'home':
                return view('migration', ['output' => 'Welcome Migration page']);
                break;
            case 'code':
                $output = shell_exec("git pull origin master");
                return view('migration', ['output' => $output]);
                break;
            case 'database':
                $output = shell_exec("php ../artisan migrate");
                return view('migration', ['output' => $output]);
                break;
            default:
                return view('migration', ['output' => 'Welcome Migration page']);
                break;
        }
    }
}
