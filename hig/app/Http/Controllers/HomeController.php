<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExlData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('welcome');
    }


    function csvToArray(Request $request)
    {
        //get file
        $upload   = $request->file('upload_file');

        //get path
        $filePath = $upload->getRealPath();

        //open and read
        $file     = fopen($filePath, 'r');

        //get file data
        $header   = fgetcsv($file);

        $sgsgg    = count($header);

        $data     = \DB::getSchemaBuilder()->getColumnListing('student_info');

        $sdata    = count($data);

        if ($sgsgg !=  $sdata-3){

            echo "You columns should be match!";

        }else{

            $escapedHeader=[];

            //validate
            foreach ($header as $key => $value) {

                $lheader     = strtolower($value);

                $escapedItem = $lheader;

                array_push($escapedHeader, $escapedItem);
            }

            //looping through othe columns
            while($columns=fgetcsv($file))
            {
                if($columns[0]=="")
                {
                    continue;
                }
                //trim data

                foreach ($columns as $key => &$value) {

                    $value = $value;
                }

               $data = array_combine($escapedHeader, $columns);

               $dup  = ExlData::all();

               if($dup){

                $data = ExlData::create($data);

               }
            }
            return redirect('/');
        }
    }
}
