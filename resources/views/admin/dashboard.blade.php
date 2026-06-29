<h1>Admin Dashboard</h1>

<p>
    Welcome {{ auth('admin')->user()->email }}
</p>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <button>
        Logout
    </button>
</form>