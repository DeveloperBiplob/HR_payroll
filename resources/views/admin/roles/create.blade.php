@extends('admin.layouts.dashboard')
@section('titel')
Create Roles
@endsection
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Roles</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Create Roles</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- <div class="row"> -->
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 id="tlabel" class="card-title">Create Rules</h3>


    </div>
    <!-- /.card-header -->


    <div class="card-body">


      <!-- basic form start -->
      <div class="col-12 mt-0">

        <div class="card-body">
          <form method="post" action="{{route('role.store')}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Role name</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Role Name">

            </div>
            <label class="form-check-label" for="none">Permission</label>
            <hr>


            <div class="form-check">
              <input type="checkbox" value="1" class="form-check-input" id="checkall">
              <label class="form-check-label" for="checkall">All</label>
            </div>
            <hr>
            @php
            $i=1;
            @endphp
            @foreach ($permissionsGroup as $pg )

            <div class="row">
              <div class="col-3">
                <div class="form-check">
                  <input type="checkbox" id="{{$i}}Managent" value="{{$pg->name}}" onclick="checkPermissionByGroup('role-{{$i}}-management-checkbox',this)" class="form-check-input">
                  <label class="form-check-label" for="{{$i}}Managent">{{$pg->name}}</label>
                </div>
              </div>
              <div class="col-9 role-{{$i}}-management-checkbox">
                @php
                $permission =
                App\Models\User::getpermissionsByGroupName($pg->name);
                $j=1;

                @endphp
                @foreach ($permission as $p )

                <div class="form-check">
                  <input type="checkbox" name="permissions[]" value="{{$p->name}}" class="form-check-input" id="exampleCheck{{$p->id}}">
                  <label class="form-check-label" for="exampleCheck{{$p->id}}">{{$p->name}}</label>
                </div>

                @php
                $j++;
                @endphp
                @endforeach
                <hr>
              </div>

            </div>
            @php
            $i++;
            @endphp
            @endforeach


            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Create</button>
          </form>
        </div>

      </div>
      <!-- basic form end -->
    </div>


    <!-- /.card -->
  </div>
  <!-- </div> -->
  <script src="/admin/plugins/jquery/jquery.min.js"></script>
  <script>
    function checkPermissionByGroup(className, checkThis) {
      const groupIdName = $('#' + checkThis.id);
      const classCheckBox = $('.' + className + ' input');
      if (groupIdName.is(':checked')) {
        classCheckBox.prop('checked', true);
      } else {
        classCheckBox.prop('checked', false);
      }
      checkAllCheckBoxes();
    }

    function checkSinglePermission(permissionCheckboxClass, roleCheckbox, checkboxCount) {
      const permissionInput = $('.' + permissionCheckboxClass + ' input');
      const roleCheckboxId = $("#" + roleCheckbox);
      if ($('.' + permissionCheckboxClass + ' input:checked').length == checkboxCount) {
        roleCheckboxId.prop('checked', true);
      } else {
        roleCheckboxId.prop('checked', false);
      }
      checkAllCheckBoxes();
    }

    function checkAllCheckBoxes() {
      let checkAll = $('#checkall').prop('checked');
      $('input[type="checkbox"]').prop('checked', checkAll);
    }

    // Attach click event listener to the "All" checkbox
    $(document).ready(function() {
      $('#checkall').on('click', function() {
        checkAllCheckBoxes();
      });
    });

    // Function to check/uncheck permissions within a group
    function checkPermissionByGroup(className, checkbox) {
      $('.' + className + ' input[type="checkbox"]').prop('checked', checkbox.checked);
    }
  </script>
  @endsection