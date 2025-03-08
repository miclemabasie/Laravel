<x-guest-layout title="Login" cssClass="page-login">
    <h1 class="auth-page-title">Login</h1>

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>

        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
            <x-google-button></x-google-button>
            <x-fb-button />
        </div>
        <x-guide-guest-text secondaryText="Click here to create one" link="localhost/signup">
            Don't have an account? -
        </x-guide-guest-text>
    </form>
</x-guest-layout>