<nav x-data="{ isMobileMenuOpen: false }" class="sticky top-0 bg-white border-b border-gray-100 z-50 shadow-sm">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <a href="#" class="text-xl font-bold tracking-tight">
                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                        TaskFlow
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-8 md:flex-1 md:justify-center">
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors relative group">
                    Features
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors relative group">
                    Solutions
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors relative group">
                    Pricing
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors relative group">
                    Docs
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Right Section -->
            <div class="flex items-center gap-4">
                <div class="hidden md:flex md:items-center md:gap-4">
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-purple-600 transition-colors">
                        Sign in
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-md hover:bg-purple-700 transition-colors shadow-sm">
                        Get started
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="p-2 md:hidden text-gray-600 hover:text-purple-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <svg x-show="!isMobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="isMobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isMobileMenuOpen" x-cloak class="md:hidden bg-white border-t border-gray-100">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-purple-600 rounded-md">
                Features
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-purple-600 rounded-md">
                Solutions
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-purple-600 rounded-md">
                Pricing
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-purple-600 rounded-md">
                Docs
            </a>
        </div>
        <div class="px-4 pt-4 pb-6 border-t border-gray-100 space-y-4">
            <a href="#" class="block w-full px-4 py-2 text-center text-sm font-medium text-gray-700 hover:text-purple-600">
                Sign in
            </a>
            <a href="#" class="block w-full px-4 py-2 text-center text-sm font-medium text-white bg-purple-600 rounded-md hover:bg-purple-700 transition-colors">
                Get started
            </a>
        </div>
    </div>
</nav>
