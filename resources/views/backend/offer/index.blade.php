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
                     <h3 class="card-title pl-3">Pricing 
                        <span class="badge rounded-pill alert-danger"> {{ count($offers) }} </span>
                     </h3>
                     <a data-toggle="modal" data-target="#viewModal" href="{{ route('project.create') }}" class="btn btn-success col-2 fileinput-button dz-clickable"><i class="fas fa-plus mr-2"></i>Add Pricing</a>
                     <!-- modal -->
                     <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-md modal-dialog-scrollable text-left">
                           <div class="modal-content">
                              <div class="modal-header bg-success">
                                 <h4 class="modal-title text-center" id="myModalLabel">Create Pricing</h4>
                                 <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                              </div>
                              <div class="modal-body">
                                 <form action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                       <div class="form-group">
                                          <label for="name_en"> Package Name</label>
                                          @error('name_en')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                          <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Write name in English">
                                       </div>
                                       <div class="form-group">
                                          <label for="title_en">Package Plan</label>
                                          @error('title_en')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                          <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Write title in English">
                                       </div>
                                       <div class="form-group">
                                          <label for="regular_price">Regular Price:</label>
                                          @error('regular_price')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                          <input type="number" name="regular_price" class="form-control" id="regular_price" placeholder="Write regular price">
                                       </div>
                                       <div class="form-group">
                                          <label for="facilities">Facilities:</label>
                                          <div id="name_wrapper">
                                             <div class="input-group mb-2">
                                                <input type="text" name="name[]" class="form-control" placeholder="Enter name">
                                                <div class="input-group-append">
                                                   <button class="btn btn-success add-name" type="button">+</button>
                                                </div>
                                             </div>
                                          </div>
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
                              <th>Package Name</th>
                              <th>Package Plan</th>
                              <th>Regular Price</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($offers as $key => $offer)
                           <tr>
                              <td>{{ $key+1}}</td>
                              <td>{{ $offer->name_en ?? 'NULL' }}</td>
                              <td>{{ $offer->title_en ?? 'NULL' }}</td>
                              <td>{{ $offer->regular_price ?? 'NULL' }}</td>
                              <td>
                                 @if($offer->status == 1)
                                 <a href="{{ route('offer.in_active',['id'=>$offer->id]) }}" class="btn btn-success btn-sm">Active</a>
                                 @else
                                 <a href="{{ route('offer.active',['id'=>$offer->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                                 @endif
                              </td>
                              <td class="col-2">
                                 <a data-toggle="modal" data-target="#projectEdit{{ $offer->id }}" href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                 <a data-toggle="modal" data-target="#delete-modal{{ $offer->id }}" href="{{ route('offer.delete',$offer->id ) }}" id="delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                 <!-- Start Delete Menu Modal -->
                                 <div class="modal fade" id="delete-modal{{ $offer->id }}">
                                    <div class="modal-dialog">
                                       <div class="modal-content bg-primary">
                                          <div class="modal-header">
                                             <h4 class="modal-title">Offer Deleted?</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body bg-light">
                                             <p>Are you sure Offer Permanently Deleted?</p>
                                          </div>
                                          <div class="modal-footer justify-content-between bg-light">
                                             <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                             <a type="button" href="{{ route('offer.delete',['id'=>$offer->id]) }}" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas fa-trash"></i><span class="text-light">OK</span></a>
                                          </div>
                                       </div>
                                       <!-- /.modal-content -->
                                    </div>
                                 </div>
                                 <!-- Start Offer Edit Modal -->
                                 <div class="modal fade" id="projectEdit{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable text-left">
                                       <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                             <h4 class="modal-title text-center" id="myModalLabel">Edit Pricing</h4>
                                             <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                          </div>
                                          <div class="modal-body">
                                             <form action="{{ route('offer.update',$offer->id) }}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                   <div class="form-group">
                                                      <label for="name_en">Package Name:</label>
                                                      @error('name_en')
                                                      <span class="text-danger">{{ $message }}</span>
                                                      @enderror
                                                      <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Write name in English" value="{{ $offer->name_en }}">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="title_en">Package Plan:</label>
                                                      @error('title_en')
                                                      <span class="text-danger">{{ $message }}</span>
                                                      @enderror
                                                      <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Write title in English" value="{{ $offer->title_en }}">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="regular_price">Regular Price:</label>
                                                      @error('regular_price')
                                                      <span class="text-danger">{{ $message }}</span>
                                                      @enderror
                                                      <input type="number" name="regular_price" class="form-control" id="regular_price" placeholder="Write regular price" value="{{ $offer->regular_price }}">
                                                   </div>
                                                   <!-- Facilities Input Fields -->
                                                   <div class="form-group">
                                                      <label for="facilities">Facilities:</label>
                                                      <div id="name_wrapper">
                                                         @php
                                                         $facilities = App\Models\PricingFacility::where('offer_id', $offer->id)->get();
                                                         @endphp
                                                         @foreach($facilities as $facility)
                                                         <div class="input-group mb-2">
                                                            <input type="text" name="name[]" class="form-control" value="{{ $facility->name }}">
                                                            <div class="input-group-append">
                                                               <button class="btn btn-danger remove-name" type="button">-</button>
                                                            </div>
                                                         </div>
                                                         @endforeach
                                                         <div class="input-group mb-2">
                                                            <input type="text" name="name[]" class="form-control" placeholder="Enter name">
                                                            <div class="input-group-append">
                                                               <button class="btn btn-success add-name" type="button">+</button>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="mb-4">
                                                      <div class="icheck-primary d-inline">
                                                         <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" {{ $offer->status == 1 ? 'checked' : '' }} value="1">
                                                         <label class="form-check-label cursor" for="status">Status</label>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4 justify-content-sm-end">
                                                      <input type="submit" class="btn btn-primary btn-rounded" value="Update Now">
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.modal -->
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
       // Add new input field
       $(document).on('click', '.add-name', function() {
           var html = '<div class="input-group mb-2">' +
                          '<input type="text" name="name[]" class="form-control" placeholder="Enter name">' +
                          '<div class="input-group-append">' +
                              '<button class="btn btn-danger remove-name" type="button">-</button>' +
                          '</div>' +
                      '</div>';
           $(this).closest('.modal-body').find('#name_wrapper').append(html);
       });
   
       // Remove input field
       $(document).on('click', '.remove-name', function() {
           $(this).closest('.input-group').remove();
       });
   });
   
   
</script>
@endsection