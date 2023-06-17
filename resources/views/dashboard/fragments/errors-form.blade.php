@if($errors-> any())
     @foreach ($errors->all() as $error)
         <div class="error">
             <p>{{$error}}</p>
         </div>
        @endforeach
        @endif