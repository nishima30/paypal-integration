<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\StudentCompletion;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompletionNotifyEmail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;

class DashboardController extends Controller
{

   public function index()
    {
        return view('dashboard');
    }

    public function show()
    {
        return view('dashboard11');
    }


    public function registration_info()
    {
        $email = Auth::user()->email;

     $student = DB::table('students')->where('email', $email)->first();
        return view('registration-info' , ['student'=>$student]);
    }


    public function registration_admin()
    {
        $email = Auth::user()->email;

     $student = DB::table('students')->where('email', $email)->first();
        return view('registration-info11' , ['student'=>$student]);
    }


    public function student_table()
    {
        return view('student-table');
    }

    public function student_table_admin()
    {
        return view('student-table11');
    }


    public function getCertificate(Request $request)
    {

        set_time_limit(120);
        
        $completionData = StudentCompletion::where('email', Auth::guard('student')->user()->email)->first();

        
        if ($completionData) {
            $formData = [
                'firstname' => $completionData->fname,
                'lastname' => $completionData->lname,
                'dob' => $completionData->DOB,
                'email' => $completionData->email,
                'license_number' => $completionData->license_number,
                'complete_time' => $completionData->complete_time,
                'address' => $completionData->address,
                'state' => $completionData->state,
                'zipcode' => $completionData->zipcode,
                'mailSubject' => 'Your class completion certificate'
            ];

            $user = Student::where('email', Auth::guard('student')->user()->email)->first();

            $studentData =[
                'get_class_completion_certificate' => 1,
               ];

            $user->update($studentData);

            
          //  Mail::to($completionData->email)->send(new CompletionNotifyEmail($formData));

          $pdf = Pdf::loadView('email.completion-pdf', ['formData' => $formData]);

          

          $pdfPath = storage_path('app/public/invoice-completion.pdf');
          
           $pdf->save($pdfPath);

           $mail = new CompletionNotifyEmail($formData);

            $mail->attach($pdfPath);

            Mail::to([$completionData->email, 'companyuiux@gmail.com'] )->send($mail);

        
            return redirect()->back()->with('success', 'Certificate sent successfully!');
        } else {
            
            return redirect()->back()->with('error', 'No completion data found.');
        }
    }



    public function studentData()
    
    {

        $students = Student::orderBy('id' ,'DESC')->paginate(30);
        
        return view('student-data', ['students'=>$students]);

   }

   


}
