<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Sidebar
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </li>

            </ul>
            <ul class="nav" role="tablist">
            <li role="presentation">
                    <a href="{{ url('/admin/permission') }}">
                        permission
                    </a>
            </li>

            </ul>
            <ul class="nav" role="tablist">
            <li role="presentation">
                    <a href="{{ url('/admin/role') }}">
                        Role
                    </a>
            </li>
            </ul>
            <ul class="nav" role="tablist">
            <li role="presentation">
                    <a href="{{ url('/admin/user') }}">
                        User
                    </a>
            </li>
            </ul>
        </div>
    </div>
</div>
