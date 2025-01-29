<x-header />
<x-nav />

<!-- Hero Section -->
<section class="relative pt-24 pb-20 bg-white md:pt-32">
    <!-- Gradient background for "modern teams" -->
    <div class="absolute inset-0 bg-gradient-to-b from-purple-50/40 to-white/50" aria-hidden="true"></div>

    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 md:text-6xl">
                The product OS for
                <span class="relative inline-block px-4 py-2 bg-gradient-to-r from-purple-200 to-pink-200 rounded-lg">
                    <span class="relative">modern teams</span>
                </span>
            </h1>

            <p class="mt-6 text-xl leading-8 text-gray-600 max-w-2xl mx-auto">
                Collaborative task management with AI-powered insights for teams that ship fast.
            </p>

            <div class="flex flex-col items-center justify-center gap-4 mt-10 sm:flex-row">
                <a href="#" class="px-6 py-3.5 text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg shadow-lg hover:shadow-purple-500/20 transition-all duration-300">
                    Get started free
                </a>
                <a href="#" class="flex items-center px-6 py-3.5 text-gray-900 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors duration-200 shadow-sm">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                    </svg>
                    Watch demo
                </a>
            </div>
        </div>

        <!-- Improved Product Preview -->
        <div class="mt-16 rounded-2xl bg-gradient-to-r from-purple-600/10 to-pink-600/10 p-1 ring-1 ring-purple-600 lg:mt-24 lg:rounded-3xl">
            <div class="relative aspect-[16/10] overflow-hidden rounded-lg bg-white shadow-2xl lg:rounded-2xl p-8">
                <!-- Dashboard Mockup -->
                <div class="grid grid-cols-3 gap-6 h-full">
                    <!-- Task Progress Column -->
                    <div class="col-span-2 space-y-6">
                        <div class="bg-white p-6 rounded-xl border border-purple-50 shadow-lg">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-lg font-semibold text-gray-900">Project Timeline</h3>
                                <span class="text-sm text-purple-600">Q3 2023</span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Design System</span>
                                    <div class="w-48 h-2 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-purple-600 to-pink-500" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Mobile App</span>
                                    <div class="w-48 h-2 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-pink-500 to-purple-600" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Activity -->
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-xl border border-purple-50 shadow-lg">
                                <div class="text-2xl font-bold text-gray-900">84%</div>
                                <div class="text-sm text-gray-600 mt-2">Tasks completed</div>
                                <div class="mt-4 h-1 bg-gray-100 rounded-full">
                                    <div class="h-full bg-gradient-to-r from-green-400 to-cyan-400 rounded-full w-4/5"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-xl border border-purple-50 shadow-lg">
                                <div class="text-2xl font-bold text-gray-900">23</div>
                                <div class="text-sm text-gray-600 mt-2">Active projects</div>
                                <div class="mt-4 space-y-2">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <div class="w-2 h-2 bg-purple-600 rounded-full mr-2"></div>
                                        12 On track
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <div class="w-2 h-2 bg-pink-500 rounded-full mr-2"></div>
                                        5 Behind
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl border border-purple-50 shadow-lg">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4">Recent Activity</h4>
                            <div class="space-y-4">
                                <div class="flex items-start group">
                                    <div class="w-8 h-8 bg-gradient-to-r from-purple-100 to-pink-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-900 group-hover:text-purple-600 transition-colors">Sarah completed "Onboarding flow"</p>
                                        <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Add more activity items -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Collaboration Section -->
<section class="py-24 bg-gradient-to-b from-white via-gray-100 to-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="inline-block px-4 py-2 text-purple-600 bg-purple-100 rounded-full text-sm font-medium">Team Collaboration</span>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Work together seamlessly
                </h2>
                <p class="text-lg text-gray-600">
                    Real-time collaboration features built for distributed teams. Comment, assign, and track progress without leaving your workflow.
                </p>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        Real-time document editing
                    </li>
                    <!-- Add more features -->
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-purple-50">
                <div class="aspect-video bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl overflow-hidden">
                    <div class="p-4 border-b border-purple-100 flex items-center justify-between">
                        <div class="flex -space-x-2">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-600 to-pink-500"></div>
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-pink-500 to-purple-600"></div>
                        </div>
                        <span class="text-sm text-purple-600">Live collaboration</span>
                    </div>
                    <div class="p-4 space-y-4">
                        <div class="h-4 bg-purple-100 rounded-full w-3/4"></div>
                        <div class="h-4 bg-purple-100 rounded-full w-1/2"></div>
                        <div class="flex gap-2">
                            <div class="w-16 h-2 bg-pink-100 rounded-full"></div>
                            <div class="w-8 h-2 bg-purple-100 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-24 bg-gradient-to-b from-white via-purple-50 to-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Simple, transparent pricing
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Start free and upgrade when you're ready
            </p>
        </div>

        <div class="grid gap-8 mt-16 md:grid-cols-3">
            <!-- Starter Plan -->
            <div class="bg-white p-8 rounded-2xl border-2 border-purple-50 shadow-lg hover:shadow-xl hover:border-purple-100 transition-all duration-300">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-purple-900">Starter</h3>
                    <p class="mt-2 text-gray-600">For small teams & startups</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-bold text-gray-900">$0</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Free forever</p>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Up to 5 team members
                    </li>
                    <!-- Add more features -->
                </ul>

                <button class="w-full mt-8 px-6 py-3 text-purple-600 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    Get Started
                </button>
            </div>

            <!-- Professional Plan (Featured) -->
            <div class="bg-white p-8 rounded-2xl border-2 border-purple-200 shadow-xl hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 px-4 py-1 bg-purple-600 text-white text-sm rounded-bl-lg">
                    Most Popular
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-purple-900">Professional</h3>
                    <p class="mt-2 text-gray-600">For growing teams</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-bold text-gray-900">$29</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Billed annually</p>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Up to 20 team members
                    </li>
                    <!-- Add more features -->
                </ul>

                <button class="w-full mt-8 px-6 py-3 text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg hover:opacity-90 transition-opacity">
                    Upgrade Now
                </button>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white p-8 rounded-2xl border-2 border-purple-50 shadow-lg hover:shadow-xl hover:border-purple-100 transition-all duration-300">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-purple-900">Enterprise</h3>
                    <p class="mt-2 text-gray-600">For large organizations</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-bold text-gray-900">$99</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Custom billing</p>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Unlimited team members
                    </li>
                    <!-- Add more features -->
                </ul>

                <button class="w-full mt-8 px-6 py-3 text-purple-600 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    Contact Sales
                </button>
            </div>
        </div>

        <!-- Comparison Note -->
        <div class="mt-12 text-center text-gray-600 text-sm">
            <p>All plans include 14-day free trial • Cancel anytime</p>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-24 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Everything your team needs to succeed
            </h2>
            <p class="mt-4 text-lg leading-8 text-gray-600">
                Powerful features designed for modern collaboration
            </p>
        </div>

        <div class="grid gap-8 mt-20 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Analytics Card -->
            <div class="p-6 transition-all duration-300 bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl hover:shadow-xl border-2 border-purple-100 group relative">
                <!-- Content Container -->
                <div class="relative z-10">
                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-lg shadow-sm mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold leading-7 text-gray-900">Smart Analytics</h3>
                    <p class="mt-2 text-gray-600">AI-powered insights and real-time metrics</p>
                </div>

                <!-- Safe Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
            </div>

            <!-- Automation Card -->
            <div class="p-6 transition-all duration-300 bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl hover:shadow-xl border-2 border-pink-100 hover:border-pink-200 group">
                <div class="flex items-center justify-center w-12 h-12 bg-white rounded-lg shadow-sm mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold leading-7 text-gray-900">Workflow Automation</h3>
                <p class="mt-2 text-gray-600">Automate repetitive tasks with custom rules</p>
                <div class=""></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 bg-gradient-to-b from-white to-purple-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Transform your team's workflow
            </h2>
            <p class="mt-4 text-lg leading-8 text-gray-600">
                Join thousands of teams already shipping faster with TaskFlow
            </p>
        </div>

        <div class="max-w-md mx-auto mt-12">
            <form class="flex flex-col gap-4">
                <input type="email" placeholder="Enter your email"
                       class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-0">
                <button type="submit"
                        class="px-6 py-3 text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg hover:opacity-90 transition-opacity shadow-lg">
                    Start free trial
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Newsletter -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-semibold text-white">Stay updated</h3>
                <p class="mt-2 text-gray-400">Subscribe to our newsletter for product updates</p>
                <form class="mt-4 flex gap-2">
                    <input type="email" placeholder="Email address" class="flex-1 px-4 py-2 outline-none rounded-lg bg-gray-800 border border-gray-700 text-white focus:border-purple-500 focus:ring-0">
                    <button class="px-4 py-2 text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg hover:opacity-90 transition-opacity">
                        Subscribe
                    </button>
                </form>
            </div>

            <!-- Social -->
            <div class="flex gap-4 mt-4 items-right">
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="pt-8 mt-12 border-t border-gray-800">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div>
                    <h4 class="text-sm font-semibold text-white">Product</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Integrations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Changelog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-white">Company</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-white">Resources</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">API Reference</a></li>
                    </ul>
                </div>
            </div>
            <p class="mt-8 text-sm text-gray-400">&copy; 2023 TaskFlow. All rights reserved.</p>
        </div>
    </div>
</footer>
