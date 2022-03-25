<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">Material List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#createMaterial">
                                <i class="mdi mdi-database-plus"></i>
                                Create Material
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
                                    <th>Sub-Category Name</th>
                                    <th>Work Spot</th>
                                    <th>Unit</th>
                                    <th>Rate</th>
                                    <th>Quantity</th>
                                    <th>Rack No</th>
                                    <th>In Use QTY</th>
                                    <th>Critical QTY</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($material as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>Computer</td>
                                    <td>{{$item->categoryName}}</td>
                                    <td>{{$item->subCategoryName}}</td>
                                    <td>{{$item->workSpotName}}</td>
                                    <td>{{$item->unitsName}}</td>
                                    <td>{{$item->rate}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->rackNo}}</td>
                                    <td>{{$item->qtyInUse}}</td>
                                    <td>{{$item->criticalQty}}</td>
                                    
                                    @if($item->status == true)
                                    <td><label class="badge bg-success">Active</label></td>
                                    @else
                                    <td><label class="badge bg-warning text-dark">In-Active</label></td>
                                    @endif
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateMaterial{{$item->id}}"></i></td>
                                </tr>

                                <!-- Modal Create-->
                                <div class="modal fade" id="updateMaterial{{$item->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Material <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/material/update/'.$item->id)}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="categoryId"
                                                                    name="categoryId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->categoryID}}">{{$item->categoryName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($category as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="categoryId">Category List * </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="subCategoryId"
                                                                    name="subCategoryId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->subCategoryID}}">{{$item->subCategoryName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($subCategory as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="subCategoryId">Sub-Category List * </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <select class="form-select" id="workSpotId"
                                                                    name="workSpotId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->workSpotID}}">{{$item->workSpotName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($workSpot as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="workSpotId">Work Spot's</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <textarea style="height: auto;" class="form-control" id="description" name="description" rows="3">{{$item->description}}</textarea>
                                                                <label for="description">Description *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <select class="form-select" id="unitId"
                                                                    name="unitId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected value="{{$item->unitID}}">{{$item->unitsName}}</option>
                                                                    <option disabled></option>
                                                                    @foreach($units as $val)
                                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="unitId">Unit</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="rate"
                                                                    id="rate" placeholder="" aria-label="rate" value="{{$item->rate}}"
                                                                    required>
                                                                <label for="rate">Rate *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="quantity"
                                                                    id="quantity" placeholder="" aria-label="quantity" value="{{$item->qty}}"
                                                                    required>
                                                                <label for="quantity">Quantity *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="rackNo"
                                                                    id="rackNo" placeholder="" aria-label="rackNo" value="{{$item->rackNo}}"
                                                                    required>
                                                                <label for="rackNo">Rack Number *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="inUseQuantity" value="{{$item->qtyInUse}}"
                                                                    id="inUseQuantity" placeholder="" aria-label="inUseQuantity"
                                                                    required>
                                                                <label for="inUseQuantity">In Use Quantity *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="criticalQuantity" value="{{$item->criticalQty}}"
                                                                    id="criticalQuantity" placeholder="" aria-label="criticalQuantity"
                                                                    required>
                                                                <label for="criticalQuantity">Critical Quantity *</label>
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
                        {{@$material->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createMaterial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Material <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/material/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="categoryId"
                                    name="categoryId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($category as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="categoryId">Category List * </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="subCategoryId"
                                    name="subCategoryId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($subCategory as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="subCategoryId">Sub-Category List * </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <select class="form-select" id="workSpotId"
                                    name="workSpotId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($workSpot as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="workSpotId">Work Spot's</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <textarea style="height: auto;" class="form-control" id="description" name="description" rows="3"></textarea>
                                <label for="description">Description *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <select class="form-select" id="unitId"
                                    name="unitId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    @foreach($units as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <label for="unitId">Unit</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="rate"
                                    id="rate" placeholder="" aria-label="rate"
                                    required>
                                <label for="rate">Rate *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="quantity"
                                    id="quantity" placeholder="" aria-label="quantity"
                                    required>
                                <label for="quantity">Quantity *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="rackNo"
                                    id="rackNo" placeholder="" aria-label="rackNo"
                                    required>
                                <label for="rackNo">Rack Number *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="inUseQuantity"
                                    id="inUseQuantity" placeholder="" aria-label="inUseQuantity"
                                    required>
                                <label for="inUseQuantity">In Use Quantity *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="criticalQuantity"
                                    id="criticalQuantity" placeholder="" aria-label="criticalQuantity"
                                    required>
                                <label for="criticalQuantity">Critical Quantity *</label>
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