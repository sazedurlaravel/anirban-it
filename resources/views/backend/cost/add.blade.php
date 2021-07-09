@extends('backend.layouts.master')

@section('sec_head')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">নতুন ব্যয়  </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">হোম </a></li>
          <li class="breadcrumb-item active">নতুন ব্যয়  </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
    <div class="row">
       <div class="col">
            <!-- general form elements -->
            <div class="card mt-2" style="border-top:5px solid green">
                <div class="card-header">
                    <h3 class="card-title">নতুন ব্যয়  যোগ করুন  </h3>
                    <a class="btn btn-success btn-sm float-right" href="{{route('cost.view')}}">ফিরে যান  </a>
                  </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{route('cost.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ব্যয়ের উৎস</label>
                                    <input type="text" class="form-control" name="cost_source">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">যিনি খরচ করেছেন </label>
                                  <input type="text" class="form-control" name="person">
                              </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">তারিখ </label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">টাকার পরিমাণ  </label>
                                    <input type="text" class="form-control" name="amount">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">খরচের রশিদ  </label>
                                  <input type="file" class="form-control" name="recept[]" multiple>
                              </div>
                            </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">সংরক্ষন করুন </button>
                        </div>
                        </form>
                    </div>
                </div>
               
              </div>
       </div>
    </div>
@endsection