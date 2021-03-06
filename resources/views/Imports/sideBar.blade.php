<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="{{url('/dashboard')}}"><i
                    class="mdi mdi-grid-large menu-icon"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class="nav-item nav-category">Master</li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"
                aria-expanded="false" aria-controls="ui-basic"><i
                    class="menu-icon mdi mdi-floor-plan"></i><span class="menu-title">List</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/category')}}">Catagory</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/sub-category')}}">Sub Catagory</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/material')}}">Material</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/vendor')}}">Vendor</a></li>
                    <hr class="text-light" style="width: 10vh">
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/units')}}">Unit's</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/type-of-seller')}}">Type of Seller</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/master/work-spots')}}">Work Spot's</a></li>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Admin</li>
        <li class="nav-item"><a class="nav-link" href="{{url('/master/user')}}"><i
            class="menu-icon mdi mdi-account-circle-outline"></i><span class="menu-title">User</span></a></li>

        <li class="nav-item"><a class="nav-link" href="{{url('/master/company')}}"><i
            class="menu-icon mdi mdi-chart-line"></i><span class="menu-title">Company</span></a></li>


        <li class="nav-item nav-category">Forms and Datas</li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#form-elements"
                aria-expanded="false" aria-controls="form-elements"><i
                    class="menu-icon mdi mdi-card-text-outline"></i><span class="menu-title">Form
                    elements</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic
                            Elements</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#charts"
                aria-expanded="false" aria-controls="charts"><i class="menu-icon mdi mdi-chart-line"></i><span
                    class="menu-title">Charts</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#tables"
                aria-expanded="false" aria-controls="tables"><i class="menu-icon mdi mdi-table"></i><span
                    class="menu-title">Tables</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic
                            table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                aria-controls="icons"><i class="menu-icon mdi mdi-layers-outline"></i><span
                    class="menu-title">Icons</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item nav-category">help</li>
        <li class="nav-item"><a class="nav-link"
                href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html"><i
                    class="menu-icon mdi mdi-file-document"></i><span
                    class="menu-title">Documentation</span></a></li> --}}
    </ul>
</nav>