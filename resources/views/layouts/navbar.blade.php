<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
    <div class="container">
        <a class="navbar-brand" href="/">TuyenPHP</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav2">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('student.index')}}">All Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('student.create')}}">Add Student</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('customer.index')}}">All Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customer.create')}}">Add Customer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>