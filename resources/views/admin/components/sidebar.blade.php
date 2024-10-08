<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="text-decoration: none;">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="HR Payroll" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HR Payroll</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar os-theme-dark">
      <!-- Sidebar user (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

            <li class="nav-item has-treeview {{ Route::is('user.addview') || Route::is('user.index')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-users"></i>
                  <p>
                      Manage Users
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('user.addview')}}" class="nav-link {{ Route::is('user.addview') ? 'active' : '' }}">
                        <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add Users</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('user.index')}}" class="nav-link {{ Route::is('user.index') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Users List</p>
                      </a>
                  </li>
                  
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('roles.create') || Route::is('role.dashboard')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                      Roles
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('roles.create')}}" class="nav-link {{ Route::is('roles.create') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Roles Create</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('role.dashboard')}}" class="nav-link {{ Route::is('role.dashboard') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Roles List</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('all.customers') || Route::is('customer.select')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                {{-- <i class="nav-icon fas fa-users"></i> --}}
                <i class="nav-icon fa-solid fa-person-military-to-person"></i>
                  <p>
                      CRM
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('all.customers')}}" class="nav-link {{ Route::is('all.customers') ? 'active' : '' }}">
                          <i class="fas fa-book nav-icon"></i>
                          <p>Customers Index</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('customer.select')}}" class="nav-link {{ Route::is('customer.select') ? 'active' : '' }}">
                          <i class="fas fa-envelope nav-icon"></i>
                          <p>Send Mail</p>
                      </a>
                  </li>
                  <!--<li class="nav-item">-->
                  <!--    <a href="{{route('role.dashboard')}}" class="nav-link">-->
                  <!--        <i class="fas fa-money-bill-wave nav-icon"></i>-->
                  <!--        <p>Leads</p>-->
                  <!--    </a>-->
                  <!--</li>-->
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('holiday.create') || Route::is('holiday.index') || Route::is('department.create') ||Route::is('designation.create') || Route::is('shiftmanagement.create') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-h"></i>
                  <p>
                      HR Setup
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('holiday.create')}}" class="nav-link {{ Route::is('holiday.create') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Add Holiday</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('holiday.index')}}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Holiday Calendar</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('department.create')}}" class="nav-link {{ Route::is('department.create') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Department</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('designation.create')}}" class="nav-link {{ Route::is('designation.create') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Designation</p>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="{{route('shiftmanagement.create')}}" class="nav-link {{ Route::is('shiftmanagement.create') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Shift Management</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('employee.create') || Route::is('employee.index')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-people-roof"></i>
                  <p>
                      Employee
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('employee.create')}}" class="nav-link {{ Route::is('employee.create') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Add Employee</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('employee.index')}}" class="nav-link {{ Route::is('employee.index') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Employee Index</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-itemb has-treeview {{ Route::is('salary.addpage') || Route::is('salary.index')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-money-bill-wave"></i>
                  <p>
                      Salary Setup
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('salary.addpage') }}" class="nav-link {{ Route::is('salary.addpage') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Add Pay Scale</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('salary.index') }}" class="nav-link {{ Route::is('salary.index') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Pay Scale List</p>
                      </a>
                  </li>
              </ul>
            </li>
          
            <li class="nav-item has-treeview {{ Route::is('leave.addpage') || Route::is('leave.index')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                      Leaves
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('leave.addpage') }}" class="nav-link {{ Route::is('leave.addpage') ? 'active' : '' }}">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Leave</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('leave.index') }}" class="nav-link {{ Route::is('leave.index') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Leave List</p>
                    </a>
                </li>
            </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('add.attendance') || Route::is('index.attendance') || Route::is('attendance.all')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  {{-- <i class="nav-icon fas fa-tasks"></i> --}}
                  <i class="nav-icon fa-solid fa-clipboard-user"></i>
                  <p>
                      Attendance
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('add.attendance')}}" class="nav-link {{ Route::is('add.attendance') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Add Attendance</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('index.attendance')}}" class="nav-link {{ Route::is('index.attendance') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Current month attendance</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('attendance.all')}}" class="nav-link {{ Route::is('attendance.all') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>All attendance</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('latemanage.add') || Route::is('latemanage.deduction')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  {{-- <i class="nav-icon fas fa-tasks"></i> --}}
                  <i class="nav-icon fa-regular fa-clock"></i>
                  <p>
                      Late Management
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('latemanage.add')}}" class="nav-link {{ Route::is('latemanage.add') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Late manage</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('latemanage.deduction')}}" class="nav-link {{ Route::is('latemanage.deduction') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Deduction</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('disbursment.payroll_process') || Route::is('disbarsement.advance.create') || Route::is('salary.advance.index') || Route::is('disbarsement.ot.create') || Route::is('payment.disbursement') || Route::is('disbarsement.incometax.create')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>
                      Disbursements
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('disbursment.payroll_process')}}" class="nav-link">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Process Payroll</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('disbarsement.advance.create')}}" class="nav-link {{ Route::is('latemanage.deduction') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Advance List</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('salary.advance.index')}}" class="nav-link {{ Route::is('salary.advance.index') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Disbursement Advance</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('disbarsement.ot.create')}}" class="nav-link {{ Route::is('disbarsement.ot.create') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Disbursement OT</p>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="{{route('payment.disbursement')}}" class="nav-link {{ Route::is('payment.disbursement') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Payment Disbursement</p>
                      </a>
                  </li>
                  <!-- <li class="nav-item">
                      <a href="{{route('disbarsement.incometax.create')}}" class="nav-link">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Disbursement Incometax</p>
                      </a>
                  </li> -->
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('allowances.add') || Route::is('disbarsement.arrear.create')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-landmark"></i>
                  <p>
                      Allowances
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('allowances.add')}}" class="nav-link {{ Route::is('allowances.add') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Allowance Types</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('disbarsement.arrear.create')}}" class="nav-link {{ Route::is('disbarsement.arrear.create') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Employee Allowences</p>
                      </a>
                  </li>
              </ul>
            </li>


            <li class="nav-item has-treeview {{ Route::is('HR.create') || Route::is('HR.index')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-landmark"></i>
                  <p>
                      HR Loan
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('HR.create')}}" class="nav-link {{ Route::is('HR.create') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Add HR Loan</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('HR.index')}}" class="nav-link {{ Route::is('HR.index') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>HR Loan Index</p>
                      </a>
                  </li>
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('increment.add') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  {{-- <i class="nav-icon fas fa-tasks"></i> --}}
                  <i class="nav-icon fa-solid fa-arrow-up-right-dots"></i>
                  <p>
                      Increment 
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('increment.add')}}" class="nav-link {{ Route::is('increment.add') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>increment add</p>
                      </a>
                  </li>
                  
              </ul>
            </li>

            <li class="nav-item has-treeview {{ Route::is('bonus.types') || Route::is('Bonus.setting') || Route::is('Bonus.out')  ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  {{-- <i class="nav-icon fas fa-tasks"></i> --}}
                  <i class="nav-icon fa-solid fa-money-bill-trend-up"></i>
                  <p>
                      Bonus 
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('bonus.types')}}" class="nav-link {{ Route::is('bonus.types') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Bonus Types</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('Bonus.setting')}}" class="nav-link {{ Route::is('Bonus.setting') ? 'active' : '' }}">
                          <i class="fas fa-plus nav-icon"></i>
                          <p>Bonus Settings</p>
                      </a>
                  </li>
                  

                  <li class="nav-item">
                      <a href="{{route('Bonus.out')}}" class="nav-link {{ Route::is('Bonus.out') ? 'active' : '' }}">
                          <i class="fas fa-list nav-icon"></i>
                          <p>Bonus Out</p>
                      </a>
                  </li>
              </ul>
            </li>


            <li class="nav-item has-treeview {{ Route::is('attendance.point') || Route::is('attendance.point.without') || Route::is('reward.types') || Route::is('otherpoint.index') || Route::is('gift.types') || Route::is('reward.reports') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                  {{-- <i class="nav-icon fas fa-tasks"></i> --}}
                  <i class="nav-icon fa-solid fa-money-bill-trend-up"></i>
                  <p>
                      Reward Points 
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('attendance.point')}}" class="nav-link {{ Route::is('attendance.point') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Attendance Points Setting</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('attendance.point.without')}}" class="nav-link {{ Route::is('attendance.point.without') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Attendance Points</p>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="{{route('reward.types')}}" class="nav-link {{ Route::is('reward.types') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Points Category</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('otherpoint.index')}}" class="nav-link {{ Route::is('otherpoint.index') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Other Points</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('gift.types')}}" class="nav-link {{ Route::is('gift.types') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Points Gift</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('reward.reports')}}" class="nav-link {{ Route::is('reward.reports') ? 'active' : ''  }}">
                        <i class="fas fa-list nav-icon"></i>
                          <p>Rewarded Reports</p>
                      </a>
                  </li>
              </ul>
            </li>

            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>
                      Payroll
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Salary Generate</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Salary Sheet</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Payment History</p>
                    </a>
                </li>
            </ul>
            </li> -->

            <li class="nav-item mb-3">
              <a href="{{ route('notice.index') }}" class="nav-link {{ Route::is('notice.index') ? 'active' : ''  }}">
                  <i class="nav-icon fas fa-gear"></i>
                  <p>
                      Notice
                  </p>
              </a>
            </li>

            <!--<li class="nav-item mb-3">-->
            <!--  <a href="#" class="nav-link">-->
            <!--      <i class="nav-icon fas fa-gear"></i>-->
            <!--      <p>-->
            <!--          Settings-->
            <!--          <i class="fas fa-angle-left right"></i>-->
            <!--      </p>-->
            <!--  </a>-->
            <!--  <ul class="nav nav-treeview">-->
            <!--      <li class="nav-item">-->
            <!--          <a href="" class="nav-link">-->
            <!--              <i class="fas fa-plus nav-icon"></i>-->
            <!--              <p></p>-->
            <!--          </a>-->
            <!--      </li>-->
            <!--      <li class="nav-item">-->
            <!--          <a href="" class="nav-link">-->
            <!--              <i class="fas fa-list nav-icon"></i>-->
            <!--              <p></p>-->
            <!--          </a>-->
            <!--      </li>-->
            <!--  </ul>-->
            <!--</li>-->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>