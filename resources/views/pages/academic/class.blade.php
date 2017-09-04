
<!--Class-->
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
                                       <th data-field="state" data-checkbox="true"></th>
                                       <th data-field="id" class="text-center">ID</th>
                                     <th data-field="name" data-sortable="true">Class</th>
                                     <th data-field="salary" data-sortable="true">Capacity</th>
                                     <th data-field="country" data-sortable="true">Added on</th>
                                   </thead>
                                   <tbody>
                                            @foreach($classes as $class)
                                                <tr>
                                                   <td>{{class->name}}</td>
                                                   <td>{{class->capacity}}</td>
                                                   <td>{{class->created_at}}</td>
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
