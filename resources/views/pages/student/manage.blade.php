
<!--Students-->
@extends('layouts.default')

@section('content')

<div class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="card-content">
                               <div class="toolbar">
                                   <!--Here you can write extra buttons/actions for the toolbar-->
                                  
                               </div>
                               <table id="bootstrap-table" class="table">
                                   <thead>
                                       {{--  <th data-field="state" data-checkbox="true"></th>  --}}
                                       <th data-field="id" class="text-center">ID</th>
                                     <th data-field="fullName" data-sortable="true">Fullname</th>
                                     <th data-field="salary" data-sortable="true">Gender</th>
                                     <th data-field="country" data-sortable="true">Nationality</th>
                                     <th data-field="city">Date Of Birth</th>
                                     <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                   </thead>
                                   <tbody>
                                   <?php 
                                    $c= 1;
                                   ?>
                                   @foreach($students as $stud)
                                       <tr>
                                        <td><?php echo $c++ ?></td>
                                         <td>{{$stud->first_name . " " .$stud->last_name }}</td>
                                         <td>{{$stud->nationality}}</td>
                                         <td>{{$stud->gender}}</td>
                                         <td>{{$stud->dob}}</td>
                                         {{--  <td>{{$stud->other_name}}</td>  --}}
                                         <td>
                                         </td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div><!--  end card  -->
                   </div> <!-- end col-md-12 -->
               </div> <!-- end row -->
           </div>
       </div>
      </div>
  </div>
</div>
</div>

@endsection
