<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function index($action, Request $request)
    {
        //Get git branches
        $result = shell_exec("git branch");
        $branches = array_filter(explode("\n",$result));

        //Migration controller
        $output = "";
        switch ($action) {
            case 'home':
                return view('migration', ['output' => 'Welcome Migration page','branches' => $branches]);
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
            case 'branch':
                $output = shell_exec('git checkout '.$request->branch);
                //Update branch
                $result = shell_exec("git branch");
                $branches = array_filter(explode("\n",$result));
                break;
            default:
                return view('migration', ['output' => 'Welcome Migration page','branches' => $branches]);
                break;
        }

        //Send message to Chatwork
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL,"https://api.chatwork.com/v2/rooms/{room-id}/messages");
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 'body='.urlencode($output);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-ChatWorkToken: {Access-token}'));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_exec ($ch);
        // curl_close ($ch);
        return view('migration', ['output' => $output,'branches' => $branches]);
    }
}
