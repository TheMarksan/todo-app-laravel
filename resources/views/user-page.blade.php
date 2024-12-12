<h1>
    User Page<br>
    <form action="{{ route('logout') }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">
            logout
        </button>
    </form>

</h1>
