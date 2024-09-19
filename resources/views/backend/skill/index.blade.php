@extends('layouts.app2')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
    <!-- Main content -->
  <div class="content">
    <div class="container-fluied">
      <div class="row mt-3">
       <div class="col-12">
           <div class="card py-3">
             <div class="d-flex justify-content-between align-items-center" style="padding:15px">
                <h3 class="card-title pl-3">Skillest Section</h3>
                <a data-toggle="modal" data-target="#viewModal" href="{{ route('skill.create') }}" class="btn btn-success col-2 fileinput-button dz-clickable"><i class="fas fa-plus mr-2"></i>Add Skill</a>
                <!-- modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-md modal-dialog-scrollable text-left">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h4 class="modal-title text-center" id="myModalLabel">Create Skill</h4>
                                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title_en">Name En:</label>
                                            @error('name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Write title name bangla">
                                        </div>
                                        <div class="form-group">
                                            <label for="name_bn">Name Bn:</label>
                                            @error('name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_bn" class="form-control" id="name_bn" placeholder="Write name bangla">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_en">Title En:</label>
                                            @error('title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Write title name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_bn">Title Bn:</label>
                                            @error('title_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_bn" class="form-control" id="title_bn" placeholder="Write menu name bangla">
                                        </div>

                                        <div class="form-group">
                                            <label for="skill_name_en">Skill Name(En):</label>
                                            @error('skill_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_name_en" class="form-control" id="skill_name_en">
                                         </div>
                                         <div class="form-group">
                                            <label for="skill_name_bn">Skill Name(Bn):</label>
                                            @error('skill_name_bn')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_name_bn" class="form-control" id="skill_name_bn">
                                         </div>
                                        <div class="form-group">
                                            <label for="button_name_en">Button Name(En):</label>
                                            @error('button_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_en" class="form-control" id="button_name_en" placeholder="Write button name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="button_name_bn">Button Name(Bn):</label>
                                            @error('button_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_bn" class="form-control" id="button_name_bn" placeholder="Write button name bangla">
                                        </div>
                                        <div class="form-group">
                                            <label for="skill_percen_en">Percen(en)</label>
                                            @error('skill_percen_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_percen_en" class="form-control" id="skill_percen_en" placeholder="Write skill percen en">
                                        </div>
                                        <div class="form-group">
                                            <label for="skill_percen_bn">Percen(bn)</label>
                                            @error('skill_percen_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_percen_bn" class="form-control" id="skill_percen_bn" placeholder="Write skill percen bn">
                                        </div>

                                        <div class="form-group">
				                         	<img id="skill_showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/skill/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" width="100px" height="80px;">
				                        </div>
				                        <div class="form-group">
				                         	<label for="skill_image" class="col-form-label col-md-4" style="font-weight: bold;">Skill Photo:(size:400,400)</label>
				                         	
				                            <input name="skill_image" class="form-control" type="file" id="skill_image">
				                            @error('skill_image')
		                                        <p class="text-danger">{{$message}}</p>
		                                    @enderror
				                        </div>
                                        <div class="mb-4">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1">
                                                <label class="form-check-label cursor" for="status">Status</label>
                                            </div>
                                        </div>
                                        <div class="row mb-4 justify-content-sm-end">
                                            <input type="submit" class="btn btn-success btn-rounded" value="Add Now">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                      <tr>
                        <th>Sl</th>
                        <th>skill Image</th>
                        <th>Title (En)</th>
                        <th>Title (Bn)</th>
                        <th>Btn (En)</th>
                        <th>Btn (Bn)</th>
                        <th>Percen</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($skill as $key => $service)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td><img src="{{ asset($service->skill_image) }}" width="70" height="70" alt="slider"></td>
                            <td>{{ $service->title_en ?? 'NULL' }}</td>
                            <td>{{ $service->title_bn ?? 'NULL' }}</td>
                            <td>{{ $service->button_name_en ?? 'NULL' }}</td>
                            <td>{{ $service->button_name_bn ?? 'NULL' }}</td>
                            <td>{{ $service->skill_name_en ?? 'NULL' }}</td>

                            <td>
                                @if($service->status == 1)
                                  <a href="{{ route('skill.in_active',['id'=>$service->id]) }}" class="btn btn-success btn-sm">Active</a>
                                @else
                                  <a href="{{ route('skill.active',['id'=>$service->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                                @endif
                            </td>
                            <td class="col-2">
                                <a data-toggle="modal" data-target="#skillEdit{{ $service->id }}" href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                <a data-toggle="modal" data-target="#delete-modal{{ $service->id }}" href="{{ route('skill.delete',$service->id ) }}" id="delete" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>

                                <!-- Start Delete Menu Modal -->
                                <div class="modal fade" id="delete-modal{{ $service->id }}">
                                    <div class="modal-dialog">
                                      <div class="modal-content bg-primary">
                                        <div class="modal-header">
                                          <h4 class="modal-title">skill Deleted?</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                          <p>Are you sure skill Permanently Deleted?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between bg-light">
                                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                          <a type="button" href="{{ route('skill.delete',['id'=>$service->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas  fa-trash"></i><span class="text-light">OK</span></a>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                 </div>

                                <!-- Start Service Edit Modal -->
                                <div class="modal fade" id="skillEdit{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable text-left">
                                      <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                          <h4 class="modal-title text-center" id="myModalLabel">Edit skill</h4>
                                          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        </div>
                                       <div class="modal-body">
                                            <form action="{{ route('skill.update',$service->id) }}" method="post"  enctype="multipart/form-data">
                                                @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title_en">Name En:</label>
                                            @error('name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_en" class="form-control" id="name_en" value="{{ $service->name_en }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name_bn">Name Bn:</label>
                                            @error('name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_bn" class="form-control" id="name_bn" value="{{ $service->name_bn }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_en">Title En:</label>
                                            @error('title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_en" class="form-control" id="title_en" value="{{ $service->title_en }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_bn">Title Bn:</label>
                                            @error('title_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_bn" class="form-control" id="title_bn" value="{{ $service->title_bn }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="skill_name_en">Skill Name(En):</label>
                                            @error('skill_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_name_en" class="form-control" id="skill_name_en" value="{{ $service->skill_name_en }}">
                                         </div>
                                         <div class="form-group">
                                            <label for="skill_name_bn">Skill Name(Bn):</label>
                                            @error('skill_name_bn')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_name_bn" class="form-control" id="skill_name_bn" value="{{ $service->skill_name_bn }}">
                                         </div>
                                        <div class="form-group">
                                            <label for="button_name_en">Button Name(En):</label>
                                            @error('button_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_en" class="form-control" id="button_name_en" value="{{ $service->button_name_en }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="button_name_bn">Button Name(Bn):</label>
                                            @error('button_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_bn" class="form-control" id="button_name_bn" value="{{ $service->button_name_bn }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="skill_percen_en">Percen(en)</label>
                                            @error('skill_percen_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_percen_en" class="form-control" id="skill_percen_en" value="{{ $service->skill_percen_en }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="skill_percen_bn">Percen(bn)</label>
                                            @error('skill_percen_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="skill_percen_bn" class="form-control" id="skill_percen_bn" value="{{ $service->skill_percen_bn }}">
                                        </div>
                                                  <div class="form-group">
                                                        <img id="skill_showImage" class="rounded avatar-lg" src="{{ asset($service->skill_image) }}" alt="skill image" width="100px" height="80px;">
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="skill_image" class="col-form-label col-md-4" style="font-weight: bold;">Skill Photo:(size:400,400)</label>
                                                       <input name="skill_image" class="form-control" type="file" id="skill_image">
                                                       @error('skill_image')
                                                           <p class="text-danger">{{$message}}</p>
                                                       @enderror
                                                   </div>
                                                    <div class="mb-4">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status_edit" value="1" {{ $service->status == 1 ? 'checked': '' }}>
                                                            <label class="form-check-label cursor" for="status_edit">Status</label>
                                                         </div>
                                                    </div>

			                                        <div class="row mb-4 justify-content-sm-end">
			                                            <div class="col-lg-3 col-md-4 col-sm-5 col-6">
			                                                <input type="submit" class="btn btn-success btn-rounded" value="Update Now">
			                                            </div>
			                                        </div>
			                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                        </tr>
                    @endforeach
                  </tfoot>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>

<!-- skill Image Show -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#skill_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#skill_showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
