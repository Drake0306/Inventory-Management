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
                                <tr>
                                    <td>1</td>
                                    <td>Computer</td>
                                    <td>CPU</td>
                                    <td>JSR</td>
                                    <td>Pcs</td>
                                    <td>Rate</td>
                                    <td>50</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><label class="badge bg-success">Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateMaterial"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Food</td>
                                    <td>Rice</td>
                                    <td>JSR</td>
                                    <td>Pcs</td>
                                    <td>Rate</td>
                                    <td>50</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><label class="badge bg-danger">In Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateMaterial"></i></td>
                                </tr>
                                <!-- Modal Create-->
                                <div class="modal fade" id="updateMaterial" data-bs-backdrop="static"
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
                                                action="{{url('/master/material/update/1')}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="categoryList"
                                                                    name="categoryId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label for="categoryList">Category List * </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="subCategoryId"
                                                                    name="subCategoryId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
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
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
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
                                                                <select class="form-select" id="unit"
                                                                    name="unit"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label for="unit">Unit</label>
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
                                                    <button type="button" class="btn close-btn text-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warn add-btn">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Model End --}}
                            </tbody>
                        </table>
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
                                <select class="form-select" id="categoryList"
                                    name="categoryId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="categoryList">Category List * </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="subCategoryId"
                                    name="subCategoryId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                                <select class="form-select" id="unit"
                                    name="unit"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="unit">Unit</label>
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