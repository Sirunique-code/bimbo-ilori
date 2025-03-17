<x-app-layout>
    <h1>Welcome to the Admin Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    
</x-app-layout>
