<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">Type List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal" data-bs-target="#createType">
                                <i class="mdi mdi-database-plus"></i>
                                Create Type
                            </button>
                        </div>
                    </h4>
                    <p class="card-description">Top - 8<code>( Descending Order )</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Type Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($type as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    @if($item->status == true)
                                    <td><label class="badge bg-success">Active</label></td>
                                    @else
                                    <td><label class="badge bg-warning text-dark">In-Active</label></td>
                                    @endif
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal" data-bs-target="#updatetype{{$item->id}}"></i></td>
                                </tr>
                                
                                <!-- Modal Create-->
                                <div class="modal fade" id="updatetype{{$item->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Type <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/type/update/'.$item->id)}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-floating">
                                                        <input type="text" name="typeName" class="form-control" id="typeName"
                                                            placeholder="" aria-label="typeName" value="{{$item->name}}" required>
                                                        <label for="typeName">Type Name *</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="status" value="{{$item->status}}" id="flexCheckDefault" @if($item->status == 1) checked @endif>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                              Status
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn close-btn text-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warn add-btn">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Model End --}}
                                @endforeach
                            </tbody>
                        </table>
                        {{@$type->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createType" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Type <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/type/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="typeName" id="typeName" placeholder=""
                            aria-label="typeName" required>
                        <label for="typeName">Type Name *</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn close-btn text-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warn add-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>