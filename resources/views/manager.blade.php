<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf
    <button type="submit" class="dropdown-link">
        {{ __('Log Out') }}
    </button>
</form>

<h1>ESPACE MANAGER</h1>
