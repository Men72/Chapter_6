<div>
    @if($role == 'admin')
        <h1>Admin Panel</h1>
        <p>Welcome, Administrator. You have full access.</p>
    @else
        <h1>User Dashboard</h1>
        <p>Welcome back! Here is your personal overview.</p>
    @endif
</div>