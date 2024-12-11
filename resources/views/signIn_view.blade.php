<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <form action="{{ route('signIn_post') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Sign In</button>
    </form>

    @if (isset($message))
        <div>{{ $message }}</div>
    
    @endif


</div>
