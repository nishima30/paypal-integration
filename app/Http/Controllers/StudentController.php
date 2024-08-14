<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCompletion;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;


class StudentController extends Controller
{



    public function index()
    {
        return view('complete-course');
    }




  public function importStudentsFromDocx(Request $request)
    {
   // $realPath =  public_path('docx/111.docx');

   $request->validate([
    'csv_file' => 'required|file|mimes:csv,txt',
   ]);

   $csvFile = $request->file('csv_file')->getPathname();

   $csv = Reader::createFromPath($csvFile, 'r');

   //$header = $csv->fetchOne();
   $header = $csv->getHeader();
   $csv->setHeaderOffset(0);

   try {
    foreach ($csv as $row) {
        $rowData = [
            'fname' => $row['fname'],
            'mname' => $row['mname'],
            'lname' => $row['lname'],
            'DOB' => $row['DOB'],
            'license_number' => $row['license_number'],
            'complete_time' => $row['complete_time'],
            'address' => $row['address'],
            'state' => $row['state'],
            'zipcode' => $row['zipcode'],
        ];

        DB::table('student_completions')->insert($rowData);
    }

    // return response()->json(['message' => 'CSV file imported successfully']);
    return redirect()->back()->with('success', 'CSV file imported successfully');
} catch (\Exception $e) {
    return response()->json(['error' => 'Error importing CSV file: ' . $e->getMessage()], 500);
}
   

       }




       public function show()
       {
           return view('old-students');
       }




       public function importStudentsFromCsv(Request $request)
       {

        set_time_limit(240);


        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
           ]);
        
         //  dd('test');


         $csvFile = $request->file('csv_file')->getPathname();
         $csv = Reader::createFromPath($csvFile, 'r');
         $csv->setHeaderOffset(0);
         $records = $csv->getRecords();

        
    
    
        
       
        
           try {
            foreach ($records as $row) {
                $rowData = [
                    'email' => $row['user_email'],
                    'password' => $row['user_password'],
                    'user_fname' => $row['user_fname'],
                    'user_lname' => $row['user_lname'],
                    'user_gender' => $row['user_gender'],
                    'user_address' => $row['user_address'],
                    'user_city' => $row['user_city'],
                    'user_state' => $row['user_state'],
                    'user_zipcode' => $row['user_zipcode'],
                    'user_phone' => $row['user_phone'],
                    'user_birthday' => $row['user_birthday'],
                    'user_ssn' => $row['user_ssn'],
                    'license_number' => $row['license_number'],
                    'license_state' => $row['license_state'],
                    'ticket_state' => $row['ticket_state'],
                    'ticket_county' => $row['ticket_county'],
                    'ticket_court' => $row['ticket_court'],
                    'ticket_number' => $row['ticket_number'],
                    'ticket_due_date' => $row['ticket_due_date'],
                    'register_time' => $row['register_time'],
                    'complete_time' => $row['complete_time'],
                    'is_confirmed' => $row['is_confirmed'],
                    'is_completed' => $row['is_completed'],
                    'is_admin' => $row['is_admin'],
                    'paid' => $row['paid'],
                    'payment_method' => $row['paid_paymentmethod'],
                    'get_class_completion_certificate' => $row['paid_get_class_completion_certificate'],
                    'source' => $row['source'],
                ];

                $existingStudent = DB::table('students')
                    ->where('email', $row['user_email'])
                    ->where('license_number', $row['license_number'])
                    ->first();
        
                if (!$existingStudent) {
                DB::table('students')->insert($rowData);
                }
            }
        
            // return response()->json(['message' => 'CSV file imported successfully']);
            return redirect()->back()->with('success', 'CSV file imported successfully');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error importing CSV file: ' . $e->getMessage()], 500);
        }




       }




}
