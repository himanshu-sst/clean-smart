@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right" style="display: block"> 
            <a href="{{route("$viewPath.create")}}" class="btn btn-dark btn-rounded"><span class="uil uil-plus"></span> Add Scope</a> 
          </div>
          <h4 class="page-title">Scopes</h4>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="datatable-buttons" class="table table-bordered table-centered mb-0">
                <thead>
                  <tr>
                    
                    <th>Area/Room</th>
                    <th>Cleaning Required</th>
                    <th>Frequency</th>
                      <th>Time Period</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td><a href="scope-details.html">Boardroom</a></td>
                    <td>Cobweb Removal</td>
                    <td>Weekly</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    <tr>
                    
                    <td><a href="scope-details.html">Cafeteria</a></td>
                    <td>Clean</td>
                    <td>Weekly</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    
                    <tr>
                    
                    <td><a href="scope-details.html">Music Room</a></td>
                    <td>Mop</td>
                    <td>Daily</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    
                    <tr>
                    
                    <td><a href="scope-details.html">Meeting Room</a></td>
                    <td>Spot Clean</td>
                    <td>Monthly</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    
                    <tr>
                    
                    <td><a href="scope-details.html">Stairwel</a></td>
                    <td>Change Bin Liners/Sanitise</td>
                    <td>Weekly</td>  
                      <td>8 AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    
                    <tr>
                    
                    <td><a href="scope-details.html">Toilet</a></td>
                    <td>Clean</td>
                    <td>Daily</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                    
                    <tr>
                    
                    <td><a href="scope-details.html">Storeroom</a></td>
                    <td>Dusting</td>
                    <td>Weekly</td>  
                      <td>AM</td>
                    <td class="table-action text-center"><div class="col-auto"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-danger btn-lg p-0 pr-2" data-original-title="Delete"> <i class="uil uil-multiply"></i> </a> <a href="add-staff.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0 pr-2" data-original-title="Edit"> <i class="uil uil-edit-alt"></i> </a> 
                        
                        </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection