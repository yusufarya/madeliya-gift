
@extends('layout.user_main')

@section('content')
<section>
    <div class="row">
        <h4 style="font-weight: 600;"><i class="mdi mdi-home menu-icon pt-1"></i> Dashboard</h4>
        <p>{{ $data->name }}</p>
    </div>
</section>
@endsection