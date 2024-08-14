@extends('layouts.app111')

@section('content')




  <div class="container mt-3">
  <h2>Student-Data</h2>
  <p>The table contains both data from old databse and current sign ups</p>
  <div class="student-data">           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>License No.</th>
        <th>License State</th>
        <th>Zipcode</th>
        <th>Paid</th>
        <th>Certificate</th>
      </tr>
    </thead>
    <tbody>
    @if($students->isNotEmpty())
     @foreach($students as $student)
      <tr>
        <td>{{ $student->user_fname }}</td>
        <td>{{ $student->user_lname }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->user_address }}</td>
        <td>{{ $student->user_city }}</td>
        <td>{{ $student->user_state }}</td>
        <td>{{ $student->license_number }}</td>
        <td>{{ $student->license_state }}</td>
        <td>{{ $student->user_zipcode }}</td>
        <td>{{ $student->paid }}</td>
        <td>{{ $student->get_class_completion_certificate }}</td>
      </tr>

      @endforeach

      @else
                <tr>
                    <td colspan="6">Record Not Found</td>
                </tr>

                @endif
     
    </tbody>
  </table>

  

  <div class="mt-3 mb-3">
        {{$students->links()}}
    </div>

    </div>

</div>




@endsection 