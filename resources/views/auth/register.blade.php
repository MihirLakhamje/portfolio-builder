<x-layout>

    <form method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <input type="email" name="email" placeholder="Email" />
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" />
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="Password Confirmation" />
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</x-layout>