@extends('backend.layouts.master')


@section('sec_head')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">দাতাদের তালিকা</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">হোম </a></li>
          <li class="breadcrumb-item active">দাতাদের তালিকা  </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">সকল দাতাদের হিসাব </h3>
          <a class="btn btn-success btn-sm float-right" href="{{route('investor.add')}}">নতুন দাতা যোগ করুন </a>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ক্রমিক নং </th>
              <th>দাতার নাম </th>
              <th>ঠিকানা</th>
              <th>তারিখ</th>
              <th>টাকার পরিমাণ</th>
              <th>অ্যাকশন </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($allData as $data)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->amount}}/-</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                      <a class="btn btn-info btn-sm" href="#"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
          
            
            </tbody>
            <tfoot>
            <tr>
              <th>ক্রমিক নং </th>
              <th>দাতার নাম </th>
              <th>ঠিকানা</th>
              <th>তারিখ</th>
              <th>টাকার পরিমাণ</th>
              <th>অ্যাকশন </th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

     
    </div>
    <!-- /.col -->
  </div>
@endsection

