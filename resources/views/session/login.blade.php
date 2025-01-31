<x-header>Login</x-header>
<x-nav></x-nav>

<script src="https://accounts.google.com/gsi/client" async defer></script>

<body class="bg-gray-50" x-data="{ showPassword: false, loading: false }">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white rounded-xl shadow-lg p-10">
            <!-- Logo -->
            <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Welcome to TaskFlow
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Streamline your team's workflow
                </p>
            </div>

            <!-- Error Message -->
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-4 py-3 border border-gray-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                   placeholder-gray-500 text-gray-900 transition-all"
                            value="{{ old('email') }}">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-purple-600 hover:text-purple-500">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <input id="password" name="password" :type="showPassword ? 'text' : 'password'"
                                autocomplete="current-password" required
                                class="appearance-none relative block w-full px-4 py-3 border border-gray-300 rounded-lg
                                          focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                          placeholder-gray-500 text-gray-900 transition-all pr-12">
                            <button type="button" @click="showPassword = !showPassword"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-purple-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" :disabled="loading"
                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-lg
                           font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2
                           focus:ring-offset-2 focus:ring-purple-500 transition-all">
                    <span x-show="!loading">Sign in</span>
                    <span x-show="loading">Processing...</span>
                </button>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-3">
                    <button type="button" @click="googleLogin"
                        class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg
                               bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2
                               focus:ring-offset-2 focus:ring-blue-500 transition-all">
                    </button>

                    <div class="grid grid-cols-2 gap-3">
                    </div>
                </div>

                <!-- Registration Link -->
                <p class="text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('signup') }}" class="font-medium text-purple-600 hover:text-purple-500">
                        Get started
                    </a>
                </p>
            </form>
        </div>
    </div>

    <script>
        function googleLogin() {
            google.accounts.id.initialize({
                client_id: 'YOUR_GOOGLE_CLIENT_ID',
                callback: handleCredentialResponse
            });

            google.accounts.id.prompt();
        }

        function handleCredentialResponse(response) {
            console.log('Google auth response:', response);
        }

        function handleLogin() {
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
            }, 1500);
        }
    </script>

    <x-footer />
