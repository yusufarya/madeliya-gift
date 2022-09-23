
@extends('layout.user_main') 
@section('content')
<section>
    <div class="row"> 
        <h4 style="font-weight: 600;"><a href="{{url()->previous()}}"><i class="bi bi-backspace"></i></a> &nbsp; <i class="bi bi-person-circle"></i> {{ $title }}</h4> 
    </div>
</section>

<div class="row">
    {{$cust[0]->firstname}}
</div>
 
@endsection