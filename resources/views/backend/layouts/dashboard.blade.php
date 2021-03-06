@extends('backend.layouts.master')

@section('sec_head')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">ড্যাশবোর্ড </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">হোম </a></li>
          <li class="breadcrumb-item active">ড্যাশবোর্ড</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          @php
              $incomes =App\Models\Income::all();
              foreach($incomes as $income){
                $TotalIncome = $income->sum('amount');
              }
          @endphp
          @if (@$TotalIncome)
          <h3>{{@$TotalIncome}}/-  </h3>
          @else 
          <h3>0.00/-  </h3>
          @endif

          <p>মোট আয় </p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">বিস্তারিত <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          @php
          $costs =App\Models\Cost::all();
          foreach($costs as $cost){
            $Totalcost = $cost->sum('amount');
          }
      @endphp
        @if (@$Totalcost)
            <h3>{{@$Totalcost}}/-  </h3>
        @else 
        <h3>0.00/-  </h3>
        @endif
          

          <p>মোট ব্যয় </p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">বিস্তারিত <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
   
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          @php
              @$balance = (double)$TotalIncome - (double)$Totalcost;
          @endphp
          <h3>{{@$balance}}/- </h3>

          <p>বর্তমান ব্যালেন্স</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">বিস্তারিত  <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  
    <!-- ./col -->
  </div>
@endsection
