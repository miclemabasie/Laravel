<x-guest-layout title="Signup" cssClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" />
        </div>
        <button class="btn btn-primary btn-login w-full">
            Register
        </button>

        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
            <x-google-button />
            <x-fb-button />
        </div>
        <x-guide-guest-text secondaryText="Click here to login" link="localhost/login">
            Already have an account? -
        </x-guide-guest-text>
    </form>
</x-guest-layout>