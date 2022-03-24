<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">User List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#createUser">
                                <i class="mdi mdi-database-plus"></i>
                                Create User
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
                                    <th>User Type</th>
                                    <th>Company</th>
                                    <th>User Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Computer</td>
                                    <td>New</td>
                                    <td>CPU</td>
                                    <td><label class="badge bg-success">Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateUser"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Food</td>
                                    <td>Old</td>
                                    <td>Rice</td>
                                    <td><label class="badge bg-danger">In Active</label></td>
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateUser"></i></td>
                                </tr>
                                <!-- Modal Create-->
                                <div class="modal fade" id="updateUser" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update User <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/user/update/1')}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="userType"
                                                                    name="userType"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">Officer</option>
                                                                    <option value="3">Staff</option>
                                                                    <option value="3">Guard</option>
                                                                </select>
                                                                <label for="userType">User Type * </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select" id="companyId"
                                                                    name="companyId"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label for="companyId">Select Company</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="loginId"
                                                                    id="loginId" placeholder="" aria-label="loginId"
                                                                    required>
                                                                <label for="loginId">Login ID *</label>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" name="userName"
                                                                    id="userName" placeholder="" aria-label="userName"
                                                                    required>
                                                                <label for="userName">User Name *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="password" class="form-control" name="password"
                                                                    id="password" placeholder="" aria-label="password"
                                                                    required>
                                                                <label for="password">Password *</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mt-3">
                                                                <input type="password" class="form-control" name="confirmPassword"
                                                                    id="confirmPassword" placeholder="" aria-label="confirmPassword"
                                                                    required>
                                                                <label for="password">Confirm Password *</label>
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
<div class="modal fade" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create User <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/user/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="userType"
                                    name="userType"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Officer</option>
                                    <option value="3">Staff</option>
                                    <option value="3">Guard</option>
                                </select>
                                <label for="userType">User Type * </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="companyId"
                                    name="companyId"
                                    aria-label="Floating label select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="companyId">Select Company</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="loginId"
                                    id="loginId" placeholder="" aria-label="loginId"
                                    required>
                                <label for="loginId">Login ID *</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="userName"
                                    id="userName" placeholder="" aria-label="userName"
                                    required>
                                <label for="userName">User Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="password" class="form-control" name="password"
                                    id="password" placeholder="" aria-label="password"
                                    required>
                                <label for="password">Password *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3">
                                <input type="password" class="form-control" name="confirmPassword"
                                    id="confirmPassword" placeholder="" aria-label="confirmPassword"
                                    required>
                                <label for="password">Confirm Password *</label>
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