<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="title-tab-left">Company List</div>
                        <div class="title-tab-right">
                            <button type="button" class="btn btn-warning me-2 title-btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#createCompany">
                                <i class="mdi mdi-database-plus"></i>
                                Create Company
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
                                    <th>Company Name</th>
                                    <th>Location Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Company as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->location}}</td>

                                    @if($item->status == true)
                                    <td><label class="badge bg-success">Active</label></td>
                                    @else
                                    <td><label class="badge bg-warning text-dark">In-Active</label></td>
                                    @endif
                                    <td><i class="mdi mdi-border-color" data-bs-toggle="modal"
                                            data-bs-target="#updateCompany{{$item->id}}"></i></td>
                                </tr>
                                <!-- Modal Create-->
                                <div class="modal fade" id="updateCompany{{$item->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Company <i
                                                        class="mdi mdi-database-plus"></i>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" id="subForm"
                                                action="{{url('/master/company/update/'.$item->id)}}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control"
                                                                    name="companyName" id="companyName" placeholder=""
                                                                    value="{{$item->name}}" aria-label="companyName"
                                                                    required>
                                                                <label for="companyName">Company Name *</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control"
                                                                    name="locationName" id="locationName" placeholder=""
                                                                    value="{{$item->location}}"
                                                                    aria-label="locationName" required>
                                                                <label for="locationName">Location Name *</label>
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
                        {{@$Company->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create-->
<div class="modal fade" id="createCompany" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Company <i class="mdi mdi-database-plus"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="subForm" action="{{url('/master/company/create')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="companyName" id="companyName"
                                    placeholder="" aria-label="companyName" required>
                                <label for="companyName">Company Name *</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="locationName" id="locationName"
                                    placeholder="" aria-label="locationName" required>
                                <label for="locationName">Location Name *</label>
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