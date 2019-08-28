<?php

namespace App\Http\Controllers;

use DB;
// come back to set to default
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

//remove this later on
use\App\Http\Controllers\Controller;
use App\Account;

class AccountController extends Controller
{
    //
    public function index()
    {
        $accounts = Account::all();
        // dd($accounts);
        // $acc = DB::table('accounts')->get();

        // function to add a colum to the table
        // $query = DB::table('accounts')
        // ->insert(['is_active' => '1','total_balance'  => '1000', 'id' => '2', 'account_no' => '2500', 'name'=>'Dhikrullah']);
        // ->insert(['uid' => '']);

        // loop through the table account

        // foreach ($acc as $account) {
        //     // echo $account->name;
        // }
        return view('accounts', ['accounts' =>$accounts]);
    }


    //this is to query the db and add something to it

    public function add_colum()
    {

        // dd('hello');
        //this queries d db and get the whole tables
        $db_tables = DB::select('show Tables');
        // dd($db_tables);
        //loop through the db tables to get eah of the tables

        foreach ($db_tables as $key => $value) {
            // dd($value->Tables_in_ajay);
            
            //alter each of the looped tables
            DB::SELECT("ALTER TABLE $value->Tables_in_ajay
            ADD COLUMN test VARCHAR(250) not null");
            // return 'Success';
        }
    }
}
