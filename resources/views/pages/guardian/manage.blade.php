
<!--Guardian-->
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
                                     <th data-field="salary" data-sortable="true">Ward</th>
                                     <th data-field="country" data-sortable="true">Email</th>
                                     <th data-field="" data-sortable="true">Telephone</th>
                                     
                                     <th data-field="city">Nationality</th>
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
                                       <tr>
                                           <td></td>
                                         <td>2</td>
                                         <td>Minerva Hooper</td>
                                         <td>$23,789</td>
                                         <td>Curaçao</td>
                                         <td>Sinaai-Waas</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>3</td>
                                         <td>Sage Rodriguez</td>
                                         <td>$56,142</td>
                                         <td>Netherlands</td>
                                         <td>Baileux</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>4</td>
                                         <td>Philip Chaney</td>
                                         <td>$38,735</td>
                                         <td>Korea, South</td>
                                         <td>Overland Park</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>5</td>
                                         <td>Doris Greene</td>
                                         <td>$63,542</td>
                                         <td>Malawi</td>
                                         <td>Feldkirchen in Kärnten</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>6</td>
                                         <td>Mason Porter</td>
                                         <td>$78,615</td>
                                         <td>Chile</td>
                                         <td>Gloucester</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>7</td>
                                         <td>Alden Chen</td>
                                         <td>$63,929</td>
                                         <td>Finland</td>
                                         <td>Gary</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>8</td>
                                         <td>Colton Hodges</td>
                                         <td>$93,961</td>
                                         <td>Nicaragua</td>
                                         <td>Delft</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>9</td>
                                         <td>Illana Nelson</td>
                                         <td>$56,142</td>
                                         <td>Heard Island</td>
                                         <td>Montone</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>10</td>
                                         <td>Nicole Lane</td>
                                         <td>$93,148</td>
                                         <td>Cayman Islands</td>
                                         <td>Cottbus</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>11</td>
                                         <td>Chaim Saunders</td>
                                         <td>$5,502</td>
                                         <td>Romania</td>
                                         <td>New Quay</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>12</td>
                                         <td>Josiah Simon</td>
                                         <td>$50,265</td>
                                         <td>Christmas Island</td>
                                         <td>Sint-Jans-Molenbeek</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>13</td>
                                         <td>Ila Poole</td>
                                         <td>$67,413</td>
                                         <td>Montenegro</td>
                                         <td>Pontevedra</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>14</td>
                                         <td>Shana Mejia</td>
                                         <td>$58,566</td>
                                         <td>Afghanistan</td>
                                         <td>Ballarat</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>15</td>
                                         <td>Lana Ryan</td>
                                         <td>$64,151</td>
                                         <td>Martinique</td>
                                         <td>Portobuffolè</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>16</td>
                                         <td>Daquan Bender</td>
                                         <td>$91,906</td>
                                         <td>Sao Tome and Principe</td>
                                         <td>Walhain-Saint-Paul</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>17</td>
                                         <td>Connor Wagner</td>
                                         <td>$86,537</td>
                                         <td>Germany</td>
                                         <td>Solihull</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>18</td>
                                         <td>Boris Horton</td>
                                         <td>$35,094</td>
                                         <td>Laos</td>
                                         <td>Saint-Mard</td>
                                         <td></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                         <td>19</td>
                                         <td>Winifred Ryan</td>
                                         <td>$64,436</td>
                                         <td>Ireland</td>
                                         <td>Ronciglione</td>
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
