@if (session()->has('error'))
     <li class="bg-danger text-center">{{session()->get('error')}}</li>
@endif

@if (count($errors))
   @foreach ($errors->all() as $error)
     <li class="bg-danger text-center">{{$error}}</li>
   @endforeach 
@endif