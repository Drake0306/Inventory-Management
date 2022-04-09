<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">Vendor List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#createVendor">
                                <i class="mdi mdi-database-plus"></i>
                                Create Vendor
                            </button>
                        </div>
                    </h4>
                    <p class="card-description">Top - 8 <code>( Descending Order )</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Vendor Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendor as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->categoryName}}</td>
                                    <td>{{$item->subCategoryName}}</td>
                                    <td>{{$item->name}}</td>
                                    @if($item->status == true)
                                    <td><label class="badge bg-success">Active</label></td>
                                    @else
                                    <td><label class="badge bg-warning text-dark">In-Active</label></td>
                                    @endif
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateVendor{{$item->id}}"></i></td>
                                </tr>
                                
                                <!-- Modal Create-->
                                <div class="modal fade" id="updateVendor{{$item->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Vendor <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/vendor/update/'.$item->id)}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="categoryList"
                                                                    name="categoryId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->categoryID}}">{{$item->categoryName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($category as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="categoryList">Category List * </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="type"
                                                                    name="type"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->type}}">{{$item->typeName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($type as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="type">Type</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="name"
                                                                    id="name" placeholder="" value="{{$val->name}}" aria-label="name"
                                                                    required>
                                                                <label for="name">Name *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <textarea style="height: auto;" class="form-control" id="address" name="address" rows="3">{{$item->address}}</textarea>
                                                                <label for="address">Address *</label>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="phone"
                                                                    id="phone" placeholder="" value="{{$item->phone}}" aria-label="phone"
                                                                    required>
                                                                <label for="phone">Phone *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="email" class="form-control" name="email"
                                                                    id="email" placeholder="" value="{{$item->email}}" aria-label="email"
                                                                    required>
                                                                <label for="email">Email ID *</label>
                                                            </div>
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
                        {{@$vendor->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createVendor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Vendor <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/vendor/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="categoryList"
                                    name="categoryId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($category as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="categoryList">Category List * </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="type"
                                    name="type"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($type as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="type">Type</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="name"
                                    id="name" placeholder="" aria-label="name"
                                    required>
                                <label for="name">Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <textarea style="height: auto;" class="form-control" id="address" name="address" rows="3"></textarea>
                                <label for="address">Address *</label>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="phone"
                                    id="phone" placeholder="" aria-label="phone"
                                    required>
                                <label for="phone">Phone *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" name="email"
                                    id="email" placeholder="" aria-label="email"
                                    required>
                                <label for="email">Email ID *</label>
                            </div>
                        </div>
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