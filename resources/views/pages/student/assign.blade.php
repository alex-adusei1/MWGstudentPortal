@extends('layouts.default')

@section('content')
<div class="container-fluid">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content">
                                <form style="padding:10px;" action="{{url('students/add-student')}}" method="post">
                                    {{ csrf_field() }}
                                    <br />
                                    <div class="row">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Enter First Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Other Name" name="other_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select name="gender" class="form-control">
                                                   <option value="male">Male</option>
                                                   <option value="female">Female</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date Of Birth</label>
                                                <input type="date" class="form-control border-input" placeholder="Home Address" name="dob">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Nationality" name="nationality">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default btn-fill btn-wd">Add Student</button>
                                    </div>
                                    <br />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
</div>
@endsection
