
@extends('layout.user_main')
<?php 
$dataUser = $customers;
?>
@section('content')
<section>
    <div class="row">
        <h4 style="font-weight: 600;"><i class="mdi mdi-face menu-icon pt-1"></i> Customers List</h4> 
    </div>
</section>

<section>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Username</th>
                <th>Status</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            @if(count($customers) > 0) 
                @foreach($customers as $cust)
                    <?php
                        $gender = $cust->gender;
                        $status = $cust->status;
                        if($gender == 'M'){
                            $gender = 'Laki - laki';
                        } else if ($gender == 'F') {
                            $gender = 'Perempuan';
                        }
                        if($status == 'Y') {
                            $stat = 'Aktif';
                        } else {
                            $stat = '-';
                        }
                    ?>
                    <tr>
                        <td><a style="cursor: pointer;" class="text-decoration-none" onclick="popInfo('{{ $cust->username }}')">{{ $cust->firstname . ' ' . $cust->lastname }}</a></td>
                        <td>{{ $gender }}</td>
                        <td>{{ $cust->phone }}</td>
                        <td>{{ $cust->address }}</td>
                        <td>{{ $cust->username }}</td>
                        <td>{{ $stat }}</td>
                        <td>
                            <a href="customList/{{$cust->username}}/edit" class="text-success"><i class="bi bi-pencil-square"></i></a> &nbsp;
                            <a href="" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</section>

<div class="modal fade" id="cust-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="" alt="" id="img-profile">
                </div>
            </div>
            <div class="col-md-8" id="detail">
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
@endsection
