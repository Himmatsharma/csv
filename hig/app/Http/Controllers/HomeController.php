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

        $filePath = $upload->getRealPath();

        //open and read
        $file     = fopen($filePath, 'r');

        //get file data
        $header   = fgetcsv($file);

        $dup      = ExlData::all();
        
        $data     = \DB::getSchemaBuilder()->getColumnListing('student_info');

        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
        // $string = implode(",", $data);

        // echo $string;
        
        // $array  = explode(",",$string);

        // echo "<pre>";
        // print_r($array);
        // echo "</pre>";
        
        // // dd($array);

        // $string = implode(",", $header);

        // echo "<pre>";
        // print_r($string);
        // echo "</pre>";
        
        // $array1  = explode(",",$string);

        // // dd($array1);

        // echo "<pre>";
        // print_r($array1);
        // echo "</pre>";

        // $data    = array_diff($array1, $array);
        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;


        // $result=array_diff($header,$data);
        
        // echo $result;
        // die;

        // $sub_key = '1';
        // $new_array = [];
        // foreach ($header as $value) {
        //   $new_array[] = [$sub_key => $value];
        // }

        // $sub_key1 = '2';
        // $new_array1 = [];
        // foreach ($data as $value1) {
        //   $new_array1[] = [$sub_key => $value1];
        // }
        
        // $arar = array_diff($new_array, $new_array1);
        // dd($arar);

        if (count($header) > 3){

            echo "You can't insert undefined column!";

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

               return redirect('/');
            }
        }
    }
}
