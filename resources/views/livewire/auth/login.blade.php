<div>
    <h2>Login</h2>

    @if (session()->has('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="login">
        <div>
            <label>Email:</label>
            <input type="email" wire:model="email">
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Password:</label>
            <input type="password" wire:model="password">
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Login</button>
    </form>
</div>
