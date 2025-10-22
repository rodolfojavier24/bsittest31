
@extends("layout")


@section("sitecontent")

 @foreach($students as $liststud)
   <label style="font-size: 50px;color: red;display: block;"> {{ $liststud->first_name }} </label>
 @endforeach

 <label style="font-size: 100px;"> THIS IS ADMIN </label>

@endsection