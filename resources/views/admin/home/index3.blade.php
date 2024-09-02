@extends('admin.layouts.dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:lightgreen;">
          <div class="inner">
            <h3>{{$latestUpload->count()}}</h3>

            <p>Today's Attendee Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{route('attendance.count')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:cadetblue;">
          <div class="inner">
            <h3>{{$leave->count()}}</h3>

            <p>Leave Application</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('leave.count')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>BDT{{$due_loan}}</h3>

            <p>Due Loan</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('loan.count')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box text-white" style="background-color: tomato;">
          <div class="inner">
            <h3>{{$eligible_employee}}</h3>

            <p>Attendence Point Achiver</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('attendance.point.without')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-md-6">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Monthly Attendance and Late
            </h3>
          </div>
          <div class="card-body">
            <canvas id="lineChart"></canvas>
          </div>
        </div>
        <!-- /.card -->


        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">New Employee</h3>

          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>

                <tr>
                  <th>ID</th>
                  <th>Name</th>

                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employeesWithoutSalary as $item)
                <tr>
                  <td>{{$item->employee_id}}</td>
                  <td>{{$item->name}}</td>


                  <td><a class="btn btn-sm btn-primary" href="/salary/payscal/{{$item->id}}">Manage Salary</a></td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->

      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var sales = @json($attendance);
  var purchases = @json($late);
  var month = @json($months);

  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: "Attendance",
          data: sales,
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "Late",
          data: purchases,
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });
</script>
@endsection