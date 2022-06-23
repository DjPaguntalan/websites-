@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
   
<form class="form bg-black p-6 border-1" methods="POST" action="">
 <div>
    <label class="text-sm" for="broom-name">Broom Name</label>
    <input class="text-lg border-1" type="text" id="broom-name" name="broom-name">
 </div>
 <div> 
    <label class="text-sm" for="brand">Brand</label>
    <input class="text-lg border-1" type="text" id="brand" name="brand">
 </div>
 <div>
    <label class="text-sm" for="year">Year Manufactured</label>
    <input class="text-lg border-1" type="text" id="year_made" name="year_made">
 </div>
 <div>
    <button class="border-1" type="submit">Submit</button>
 </div>
</form>
</div>
@endsection 