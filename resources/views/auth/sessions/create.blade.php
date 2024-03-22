<x-layout.main-wrap title="Login">

        <x-form action="{{ route('auth.sessions.store') }}">
            <div class='mb-2'>
                <x-form-input name='email' label="Your email "/>
            </div>
            <div class='mb-2'>
                <x-form-input name='password' type="password" label="Your password"/>
            </div>
            <div class='mb-2'>
                <x-form-checkbox name='remember' label="Remember me"/>
            </div>
            <div class='mb-2'>
                <button type="submit" class="bg-blue-500 text-white rounded p-2">Login</button>
            </div>
        </x-form>
</x-layout.main-wrap >