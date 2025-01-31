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
            <div x-show="errorMessage" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                <p x-text="errorMessage"></p>
            </div>

            <form class="mt-8 space-y-6" @submit.prevent="handleLogin">
                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-4 py-3 border border-gray-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500
                                   placeholder-gray-500 text-gray-900 transition-all">
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
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
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
            <a href="/password-reset" class="mt-4 text-sm text-purple-600 hover:text-purple-500">Forgot password?</a>


                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <!-- Social Login Buttons -->
                <div class="grid grid-cols-1 gap-3">
                    <!-- Google Login -->
                    <button type="button" @click="googleLogin"
                        class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg
                               bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2
                               focus:ring-offset-2 focus:ring-blue-500 transition-all">
                        <svg class="h-5 w-5 mr-2" viewBox="0 0 21 20" fill="none">
                            <path
                                d="M20.3081 10.2303C20.3081 9.55056 20.253 8.86711 20.1354 8.19836H10.7031V12.0492H16.1046C15.8804 13.2911 15.1602 14.3898 14.1057 15.0879V17.5866H17.3282C19.2205 15.8449 20.3081 13.2728 20.3081 10.2303Z"
                                fill="#4285F4" />
                            <path
                                d="M10.7019 20.0006C13.3989 20.0006 15.6734 19.1151 17.3306 17.5865L14.1081 15.0879C13.2115 15.6979 12.0541 16.0433 10.7056 16.0433C8.09669 16.0433 5.88468 14.2832 5.091 11.9169H1.76562V14.4927C3.46022 17.8695 6.86287 20.0006 10.7019 20.0006Z"
                                fill="#34A853" />
                            <path
                                d="M5.08857 11.9169C4.66969 10.6749 4.66969 9.33008 5.08857 8.08811V5.51233H1.76688C0.348541 8.33798 0.348541 11.667 1.76688 14.4927L5.08857 11.9169Z"
                                fill="#FBBC04" />
                            <path
                                d="M10.7019 3.95805C12.1276 3.936 13.5055 4.47247 14.538 5.45722L17.393 2.60218C15.5852 0.904587 13.1858 -0.0287217 10.7019 0.000673888C6.86287 0.000673888 3.46022 2.13185 1.76562 5.51234L5.08732 8.08813C5.87733 5.71811 8.09302 3.95805 10.7019 3.95805Z"
                                fill="#EA4335" />
                        </svg>
                        Continue with Google
                    </button>

                    <!-- Optional: Other Login Methods -->
                    <div class="grid grid-cols-2 gap-3">
                        <button type="button"
                        class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg
                               bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2
                               focus:ring-offset-2 focus:ring-gray-500 transition-all">
                        <svg class="h-5 w-5 mr-2" viewBox="0 0 16 16" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                        GitHub
                    </button>
                        <button type="button"
                            class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg
                                   bg-white text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2
                                   focus:ring-offset-2 focus:ring-blue-500 transition-all">
                            <svg class="h-5 w-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM9 16.5v-9l7.5 4.5-7.5 4.5z" />
                            </svg>
                            SSO
                        </button>
                    </div>
                </div>

                <!-- Registration Link -->
                <p class="text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="#" class="font-medium text-purple-600 hover:text-purple-500">
                        Get started
                    </a>
                </p>


            </form>
        </div>
    </div>

    <script>
        function googleLogin() {
            // Initialize Google authentication flow
            google.accounts.id.initialize({
                client_id: 'YOUR_GOOGLE_CLIENT_ID',
                callback: handleCredentialResponse
            });

            google.accounts.id.prompt();
        }

        function handleCredentialResponse(response) {
            // Handle Google authentication response
            console.log('Google auth response:', response);
            // Add your authentication logic here
        }

        function handleLogin() {
            // Add your regular login logic here
            this.loading = true;
            // Simulate API call
            setTimeout(() => {
                this.loading = false;
                // Handle login success/error
            }, 1500);
        }
    </script>

    <x-footer />
