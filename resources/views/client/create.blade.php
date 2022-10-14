@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right" style="display: block"> 
            <a href="{{route("$viewPath.index")}}" class="btn btn-outline-secondary btn-rounded"><span class="uil uil-users-alt"></span> All Clients</a> 
          </div>
          <h4 class="page-title">Add Client</h4>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-body  pb-5">
            
            <form  method="POST" action="{{ route("$viewPath.store") }}" enctype="multipart/form-data" id="addForm">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >First Name*</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ old('first_name') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Last Name*</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('last_name') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Industry*</label>
                            <select name="industry_id" class="form-control select2" data-toggle="select2" value="{{ old('industry_id') }}" required>
                                <option value="">Select...</option>
                                <option value="1">Liverpool</option>
                                <option value="2">Bondi</option>
                                <option value="3">CBD</option>
                                <option value="4">Chatswood</option>
                            </select>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Mobile Number*</label>
                            <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="{{ old('mobile') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Alternate Number</label>
                            <input type="tel" name="mobile_1" class="form-control" placeholder="Enter Number" value="{{ old('mobile_1') }}">
                            <span class="error-message"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Email Address*</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" value="{{ old('email') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Set Password*</label>
                            <input type="password" name="password" class="form-control" placeholder="Set User Password" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Confirm Password*</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Set User Password" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="avtar" accept="image/*" class="custom-file-input" id="avtar">
                                    <label class="custom-file-label" for="avtar">Choose picture</label>
                                </div>
                            </div>
                            <span class="error-message"></span>
                        </div>
                    </div>
                        
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="example-textarea">Short Bio</label>
                            <textarea class="form-control" name="bio" id="example-textarea" rows="2" placeholder="Enter Little Bio" value="{{ old('bio') }}"></textarea>
                            <span class="error-message"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="mt-1">
                    </div>
                    <div class="col-md-4  ms-mt-3">
                        <label>User Status</label>
                        <input type="checkbox" name="status" id="switch2" value="1" checked data-switch="success"/>
                        <label for="switch2" data-on-label="Active" data-off-label="Inactive" class="mb-0 d-block"></label>
                    </div>
                    <div class="col-md-8">
                        <div class=" ms-float-right"> 
                            <button type="submit" class="btn btn-info ms-mt-2 ms-block">Save</button> 
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@section('script') 
<script>
    $("#addForm").submit(function(e) {
       e.preventDefault(); // avoid to execute the actual submit of the form.
       $("#preloader").show();
       var form = $(this);
       var formData = new FormData($('#addForm')[0]);
       var actionUrl = form.attr('action');
       $(".form-group").removeClass('error');
       $.ajax({
          type: "POST",
          url: actionUrl,
          dataType: 'json',
          data: formData, 
          cache : false,
          processData: false,
          contentType: false,
          success: function(r) {
            $("#preloader").hide();
            if(r.success){
                Toast.fire({
                   icon: 'success',
                   title: r.message
                })
                window.location.href="{{route("$viewPath.index")}}";
            }else{
                Swal.close()
                $.each(r.errors, function(field_name,error) {
                   $('[name='+field_name+']').parent('.form-group').addClass('error');
                   $('[name='+field_name+']').next('.error-message').text(error);
                });
            }
          },
          error: function (request, status, error) {
            $("#preloader").hide();
            if(request.status == 422){
                Swal.close()
                $.each(request.responseJSON, function(field_name,error) {
                   $('[name='+field_name+']').parent('.form-group').addClass('error');
                   $('[name='+field_name+']').next('.error-message').text(error);
                });
            }else{
                alert(request.responseText);
            }
            //alert(request.responseText);
            //console.log(request);
          }
       });
       
    });
 </script>
@endsection