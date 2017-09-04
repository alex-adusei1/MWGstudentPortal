
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
                                       <th data-field="state" data-checkbox="true"></th>
                                       <th data-field="id" class="text-center">ID</th>
                                     <th data-field="name" data-sortable="true">Fullname</th>
                                     <th data-field="salary" data-sortable="true">Class</th>
                                     <th data-field="country" data-sortable="true">Class Teacher</th>
                                     <th data-field="country" data-sortable="true">Guardian</th>

                                     <th data-field="city">Admission Date</th>
                                     <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td></td>
                                         <td>1</td>
                                         <td>Dakota Rice</td>
                                         <td>$36,738</td>
                                         <td>Niger</td>
                                         <td>Oud-Turnhout</td>
                                         <td></td>
                                       </tr>
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
