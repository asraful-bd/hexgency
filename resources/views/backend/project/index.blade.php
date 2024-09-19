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
                <h3 class="card-title pl-3">Project 
                    <span class="badge rounded-pill alert-danger"> {{ count($projects) }} </span>
                </h3>
                <a data-toggle="modal" data-target="#viewModal" href="{{ route('project.create') }}" class="btn btn-success col-2 fileinput-button dz-clickable"><i class="fas fa-plus mr-2"></i>Add Project</a>
                <!-- modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-md modal-dialog-scrollable text-left">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h4 class="modal-title text-center" id="myModalLabel">Create Project</h4>
                                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name_en">Name (En):</label>
                                            @error('name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Write name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="name_bn">Name (Bn):</label>
                                            @error('name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="name_bn" class="form-control" id="name_bn" placeholder="Write name bangla">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_en">Title (En):</label>
                                            @error('title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Write title name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="title_bn">Title (Bn):</label>
                                            @error('title_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="title_bn" class="form-control" id="title_bn" placeholder="Write title name bangla">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="short_title_en">Short Title(En):</label>
                                            @error('short_title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="short_title_en" class="form-control" id="short_title_en" placeholder="Write short title english">
                                        </div>
                                        <div class="form-group">
                                            <label for="short_title_bn">Short Title(Bn):</label>
                                            @error('short_title_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="short_title_bn" class="form-control" id="short_title_bn" placeholder="Write short title bnglish">
                                        </div>
                                        <div class="form-group">
                                            <label for="client_name">Client Name:</label>
                                            @error('client_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Write client name">
                                        </div>
                                        <div class="form-group">
                                            <label for="duration">Duration:</label>
                                            @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="duration" class="form-control" id="duration" placeholder="Write duration name">
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Client Location/Address:</label>
                                            @error('location')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="location" class="form-control" id="location" placeholder="Write location name">
                                        </div>
                                        
                                        
                                       
                                      
                                        <div class="form-group">
                                            <label for="menu_id">Menu Name:</label>
                                            @error('menu_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <select name="menu_id" class="form-control" aria-label="Default select example">
                                                <option value="">--Select Menu--</option>
                                                @foreach ($menus as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu->name_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="submenu_id">SubMenu Name:</label>
                                            @error('submenu_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <select name="submenu_id" class="form-control" aria-label="Default select example">
                                                <option value="">--Select SubMenu--</option>
                                                @foreach ($submenus as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu->name_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="project_name_en">Project Name (En):</label>
                                            @error('project_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="project_name_en" class="form-control" id="project_name_en" placeholder="Write project name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="project_name_bn">Project Name (Bn):</label>
                                            @error('project_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="project_name_bn" class="form-control" id="project_name_bn" placeholder="Write project name bangla">
                                        </div>
                                        <div class="form-group">
                                            <label for="project_description_en">Project Description (En):</label>
                                            @error('project_description_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <textarea name="project_description_en" class="description" class="form-control" id="project_description_en" rows="3" cols="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="project_description_bn">Project Description (Bn):</label>
                                            @error('project_description_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <textarea name="project_description_bn" class="description" class="form-control" id="project_description_bn" rows="3" cols="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="button_name_en">Project Button Name(En):</label>
                                            @error('button_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_en" class="form-control" id="button_name_en" placeholder="Write button name english">
                                        </div>
                                        <div class="form-group">
                                            <label for="button_name_bn">Project Button Name(Bn):</label>
                                            @error('button_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="button_name_bn" class="form-control" id="button_name_bn" placeholder="Write button name bangla">
                                        </div>
                                        <div class="form-group">
				                         	<img id="project_showImage" class="rounded avatar-lg project_showImage" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" width="100px" height="80px;">
        				                </div>
				                        <div class="form-group">
				                         	<label for="project_image" class="col-form-label col-md-4" style="font-weight: bold;">Project Photo (Size:603,466):</label>
				                            <input name="project_image" class="form-control project_image" type="file" id="project_image">
				                            @error('project_image')
		                                        <p class="text-danger">{{$message}}</p>
		                                    @enderror
				                        </div>
                                        <div class="mb-4">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1">
                                                <label class="form-check-label cursor" for="status">Status</label>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                         <label for="name">Select Date Time <span class="text-danger">*</span></label>
                                         <input type="datetime-local" name="date_time" class="form-control"/>
                                         </div>
                                        <div class="form-group">
                                        <label for="author">Switch<span class="text-danger">*</span></label>
                                        <select class="form-control" name="switch">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                         </select>
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
                        <th>Image</th>
                        <th>Project Name (En)</th>
                        <th>Project Name (Bn)</th>
                        <th>Menu Name</th>
                        <th>Submenu Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($projects as $key => $project)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>
                                <img src="{{ asset($project->project_image) }}" width="70" height="70" alt="slider">
                            </td>
                            <td>{{ $project->project_name_en ?? 'NULL' }}</td>
                            <td>{{ $project->project_name_bn ?? 'NULL' }}</td>
                            <td>{{ $project->menu->name_en ?? 'NULL' }}</td>
                            <td>{{ $project->submenu->name_en ?? 'NULL' }}</td>
                            <td>
                                @if($project->status == 1)
                                  <a href="{{ route('project.in_active',['id'=>$project->id]) }}" class="btn btn-success btn-sm">Active</a>
                                @else
                                  <a href="{{ route('project.active',['id'=>$project->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                                @endif
                            </td>
                            <td class="col-2">
                                <a data-toggle="modal" data-target="#projectEdit{{ $project->id }}" href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                <a data-toggle="modal" data-target="#delete-modal{{ $project->id }}" href="{{ route('project.delete',$project->id ) }}" id="delete" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>

                                <!-- Start Delete Menu Modal -->
                                <div class="modal fade" id="delete-modal{{ $project->id }}">
                                    <div class="modal-dialog">
                                      <div class="modal-content bg-primary">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Projects Deleted?</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                          <p>Are you sure Projects Permanently Deleted?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between bg-light">
                                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                          <a type="button" href="{{ route('project.delete',['id'=>$project->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas  fa-trash"></i><span class="text-light">OK</span></a>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                 </div>

                                <!-- Start Service Edit Modal -->
                                <div class="modal fade" id="projectEdit{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable text-left">
                                      <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                          <h4 class="modal-title text-center" id="myModalLabel">Edit Projects</h4>
                                          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        </div>
                                       <div class="modal-body">
                                            <form action="{{ route('project.update',$project->id) }}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                 <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name_en">Name (En):</label>
                                                        @error('name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Write name english" value="{{ $project->name_en }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name_bn">Name (Bn):</label>
                                                        @error('name_bn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="name_bn" class="form-control" id="name_bn" placeholder="Write name bangla" value="{{ $project->name_bn }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title_en">Title (En):</label>
                                                        @error('title_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Write title name english" value="{{ $project->title_en }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title_bn">Title (Bn):</label>
                                                        @error('title_bn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="title_bn" class="form-control" id="title_bn" placeholder="Write menu name bangla" value="{{ $project->title_bn }}">
                                                    </div>
                                                <div class="form-group">
                                            <label for="short_title_en">Short Title(En):</label>
                                            @error('short_title_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="short_title_en" class="form-control" id="short_title_en" value="{{ $project->short_title_en }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="short_title_bn">Short Title(Bn):</label>
                                            @error('short_title_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="short_title_bn" class="form-control" id="short_title_bn" value="{{ $project->short_title_bn }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="client_name">Client Name:</label>
                                            @error('client_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="client_name" class="form-control" id="client_name" value="{{ $project->client_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="duration">Duration:</label>
                                            @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="duration" class="form-control" id="duration"value="{{ $project->duration }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Client Location/Address:</label>
                                            @error('location')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="text" name="location" class="form-control" id="location" value="{{ $project->location }}">
                                        </div>
                                        
                                                    <div class="form-group">
                                                        <label for="menu_id">Menu Name:</label>
                                                        @error('menu_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select name="menu_id" class="form-control" aria-label="Default select example">
                                                            <option value="">--Select Menu--</option>
                                                            @foreach ($menus as $menu)
                                                                <option value="{{ $menu->id }}" {{ $menu->id == $project->menu_id ? 'selected' : '' }}>{{ $menu->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="submenu_id">SubMenu Name:</label>
                                                        @error('submenu_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <select name="submenu_id" class="form-control" aria-label="Default select example">
                                                            <option value="">--Select SubMenu--</option>
                                                            @foreach ($submenus as $menu)
                                                                <option value="{{ $menu->id }}" {{ $menu->id == $project->menu_id ? 'selected' : '' }}>{{ $menu->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="project_name_en">Project Name (En):</label>
                                                        @error('project_name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="project_name_en" class="form-control" id="project_name_en" placeholder="Write project name english" value="{{ $project->project_name_en }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="project_name_bn">Project Name (Bn):</label>
                                                        @error('project_name_bn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="project_name_bn" class="form-control" id="project_name_bn" placeholder="Write project name bangla" value="{{ $project->project_name_bn }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="project_description_en">Project Description (En):</label>
                                                        @error('project_description_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <textarea name="project_description_en" class="description" class="form-control" id="project_description_en" rows="3" cols="5">{{ $project->project_description_en }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="project_description_bn">Project Description (Bn):</label>
                                                        @error('project_description_bn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <textarea name="project_description_bn" class="description" class="form-control" id="project_description_bn" rows="3" cols="5">{{ $project->project_description_bn }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="button_name_en">Project Button Name(En):</label>
                                                        @error('button_name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="button_name_en" class="form-control" id="button_name_en" placeholder="Write button name english" value="{{ $project->button_name_en }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="button_name_bn">Project Button Name(Bn):</label>
                                                        @error('button_name_bn')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="text" name="button_name_bn" class="form-control" id="button_name_bn" placeholder="Write button name bangla" value="{{ $project->button_name_bn }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <img id="project_showImage" class="rounded avatar-lg project_showImage" src="{{ asset($project->project_image) }}" alt="Card image cap" width="100px" height="80px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="project_image" class="col-form-label col-md-4" style="font-weight: bold;">Project Photo (Size:603,466):</label>
                                                        <input name="project_image" class="form-control project_image" type="file" id="project_image">
                                                        @error('project_image')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1" {{ $project->status == 1 ? 'checked': '' }}>
                                                            <label class="form-check-label cursor" for="status">Status</label>
                                                        </div>
                                                    </div>
                                                  
        
                                                     <div class="form-group">
                                                        <label for="name">Select Date Time <span class="text-danger">*</span></label>
                                                        <input type="datetime-local" name="date_time" class="form-control"  value="{{ date('Y-m-d\TH:i', strtotime($project->launch_date)) }}" />
                                                     </div>
                                                     <div class="form-group">
                                                       <label for="author">Switch<span class="text-danger">*</span></label>
                                                       <select class="form-control" name="switch">
                                                           
                                                            @if ($project->switch == 1)
                                                             <option value="1" selected>Active</option>
                                                             <option value="0">Inactive</option>
                                                            @else
                                                           
                                                           @endif
                                                       
                                                          @if ($project->switch == 0)
                                                             <option value="1" >Active</option>
                                                             <option value="0" selected>Inactive</option>
                                                            @else
                                                           
                                                           @endif
                                                       
                                                    
                                                       </select>
                                                       </div>
                                                    <div class="row mb-4 justify-content-sm-end">
                                                        <input type="submit" class="btn btn-success btn-rounded" value="Update Now">
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

<!-- Services Image Show -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.project_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.project_showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection