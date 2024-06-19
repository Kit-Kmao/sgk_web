@extends('admin::layouts.master');
@section('css')

@endsection
@section('content')

<!-- Row start -->
<div class="row gutters">
    <div class="col-sm-12">
        <div class="table-container">
            <div class="t-header">View User</div>
                <div class="modal fade" id="addNewDocument" tabindex="-1" role="dialog"
                aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addNewDocumentLabel">Add User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row gutters">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="docTitle">Name</label>
                                        <input type="text" class="form-control" id="docTitle" placeholder="Task Title">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Password</label>
                                        <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Phone Number</label>
                                        <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Retype Password</label>
                                        <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Email Address</label>
                                        <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Select Role</label>
                                        <select class="form-control form-control-lg">
                                            <option>Admin</option>
                                            <option>Publisher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Active?</label>
                                        <div class="form-group">
                                            <!-- Radios example -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="dovType">Photo</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer custom">
                            <div class="left-side">
                                <button type="button" class="btn btn-link danger btn-block"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <button type="button" class="btn btn-link success btn-block">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="documents-header">
                    <h4> </h4>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewDocument">Add
                        User</button>
                </div>
            <div class="table-responsive">
                <table id="highlightRowColumn" class="table custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Photo</th> -->
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <!-- Card start -->
                                <div class="avatar md">		
                                    <img src="img/user22.png" class="circle" alt="Admin Templates & Dashboards" />			
                                </div>
                                <!-- Card end -->		
                            </td>
                            <td>Kit Kmao</td>
                            <td>kmao.kit.admin@gmail.com	</td>
                            <td>Super Admin	</td>
                            <td>Active</td>
                            <td class="text-center">
                                <a href="#editpageModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deletepageModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <<td>
                                <!-- Card start -->
                                <div class="avatar md">		
                                    <img src="img/user23.jpg" class="circle" alt="Admin Templates & Dashboards" />			
                                </div>			 
                                <!-- Card end -->		
                            </td>
                            <td>Ben Sothearith</td>
                            <td>sothearith.ben.admin@gmail.com	</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td class="text-center btn-group" role="group">
                                <a href="#editpageModal" class="btn btn-primary" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deletepageModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                <a href="#viewpageModal" class="btn btn-success" data-toggle="modal"><i class="icon-eye" data-toggle="tooltip" title="View"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>





<!-- Row end -->

@endsection