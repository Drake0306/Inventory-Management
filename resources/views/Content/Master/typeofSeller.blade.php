<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">Type-OF-Seller List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal" data-bs-target="#createType-OF-Seller">
                                <i class="mdi mdi-database-plus"></i>
                                Create Type-OF-Seller
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
                                    <th>Type-OF-Seller Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Computer</td>
                                    <td><label class="badge bg-success">Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal" data-bs-target="#updateType-OF-Seller"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Food</td>
                                    <td><label class="badge bg-danger">In Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal" data-bs-target="#updateType-OF-Seller"></i></td>
                                </tr>
                                <!-- Modal Create-->
                                <div class="modal fade" id="updateType-OF-Seller" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Type-OF-Seller <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/type-of-seller/update/1')}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-floating">
                                                        <input type="text" name="typeofSellerName" class="form-control" id="Type-OF-SellerName"
                                                            placeholder="" aria-label="Type-OF-SellerName" required>
                                                        <label for="Type-OF-SellerName">Type-OF-Seller Name *</label>
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
<div class="modal fade" id="createType-OF-Seller" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Type-OF-Seller <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/type-of-seller/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="typeofSellerName" id="Type-OF-SellerName" placeholder=""
                            aria-label="Type-OF-SellerName" required>
                        <label for="Type-OF-SellerName">Type-OF-Seller Name *</label>
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