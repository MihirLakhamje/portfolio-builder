<x-layout>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name"/>
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="email" name="email" placeholder="Email" />
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" />
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="Password Confirmation" />
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</x-layout>