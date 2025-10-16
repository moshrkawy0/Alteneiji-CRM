@push('styles')
<style>
    .grid { display: grid; }
    .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
    .gap-4 { gap: 1rem; }
    .gap-6 { gap: 1.5rem; }
    .mb-2 { margin-bottom: 0.5rem; }
    .mb-3 { margin-bottom: 0.75rem; }
    .mb-4 { margin-bottom: 1rem; }
    .mb-6 { margin-bottom: 1.5rem; }
    .mb-8 { margin-bottom: 2rem; }
    .p-5 { padding: 1.25rem; }
    .rounded-xl { border-radius: 0.75rem; }
    .rounded-lg { border-radius: 0.5rem; }
    .shadow-sm { box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); }
    .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
    .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
    .text-base { font-size: 1rem; line-height: 1.5rem; }
    .text-sm { font-size: 0.875rem; line-height: 1.25rem; }
    .text-xs { font-size: 0.75rem; line-height: 1rem; }
    .font-bold { font-weight: 700; }
    .font-semibold { font-weight: 600; }
    .font-medium { font-weight: 500; }
    .bg-white { background-color: rgb(255 255 255); }
    .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
    .from-blue-500 { --tw-gradient-from: #3b82f6; --tw-gradient-to: rgb(59 130 246 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
    .to-blue-600 { --tw-gradient-to: #2563eb; }
    .from-green-500 { --tw-gradient-from: #22c55e; --tw-gradient-to: rgb(34 197 94 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
    .to-green-600 { --tw-gradient-to: #16a34a; }
    .from-purple-500 { --tw-gradient-from: #a855f7; --tw-gradient-to: rgb(168 85 247 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
    .to-purple-600 { --tw-gradient-to: #9333ea; }
    .from-orange-500 { --tw-gradient-from: #f97316; --tw-gradient-to: rgb(249 115 22 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
    .to-orange-600 { --tw-gradient-to: #ea580c; }
    .text-white { color: rgb(255 255 255); }
    .text-gray-900 { color: rgb(17 24 39); }
    .text-gray-600 { color: rgb(75 85 99); }
    .text-gray-500 { color: rgb(107 114 128); }
    .text-gray-400 { color: rgb(156 163 175); }
    .border { border-width: 1px; }
    .border-gray-200 { border-color: rgb(229 231 235); }
    .hover\:shadow-md:hover { box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1); }
    .hover\:border-blue-500:hover { border-color: #3b82f6; }
    .hover\:border-green-500:hover { border-color: #22c55e; }
    .hover\:border-purple-500:hover { border-color: #a855f7; }
    .hover\:border-orange-500:hover { border-color: #f97316; }
    .hover\:border-indigo-500:hover { border-color: #6366f1; }
    .hover\:border-cyan-500:hover { border-color: #06b6d4; }
    .hover\:border-pink-500:hover { border-color: #ec4899; }
    .hover\:border-amber-500:hover { border-color: #f59e0b; }
    .bg-blue-50 { background-color: rgb(239 246 255); }
    .bg-green-50 { background-color: rgb(240 253 244); }
    .bg-purple-50 { background-color: rgb(250 245 255); }
    .bg-orange-50 { background-color: rgb(255 247 237); }
    .bg-indigo-50 { background-color: rgb(238 242 255); }
    .bg-cyan-50 { background-color: rgb(236 254 255); }
    .bg-pink-50 { background-color: rgb(253 242 248); }
    .bg-amber-50 { background-color: rgb(255 251 235); }
    .text-blue-600 { color: rgb(37 99 235); }
    .text-green-600 { color: rgb(22 163 74); }
    .text-purple-600 { color: rgb(147 51 234); }
    .text-orange-600 { color: rgb(234 88 12); }
    .text-indigo-600 { color: rgb(79 70 229); }
    .text-cyan-600 { color: rgb(8 145 178); }
    .text-pink-600 { color: rgb(219 39 119); }
    .text-amber-600 { color: rgb(217 119 6); }
    .flex { display: flex; }
    .items-center { align-items: center; }
    .items-start { align-items: flex-start; }
    .justify-between { justify-content: space-between; }
    .w-5 { width: 1.25rem; }
    .h-5 { height: 1.25rem; }
    .w-6 { width: 1.5rem; }
    .h-6 { height: 1.5rem; }
    .bg-white\/20 { background-color: rgb(255 255 255 / 0.2); }
    .p-2\.5 { padding: 0.625rem; }
    .p-3 { padding: 0.75rem; }
    .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
    .leading-relaxed { line-height: 1.625; }
    
    @media (min-width: 768px) {
        .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (min-width: 1024px) {
        .lg\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    }
</style>
@endpush

<x-filament-panels::page>
    {{-- Welcome Section --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Welcome back! 👋</h1>
        <p class="text-gray-600">Here's what's happening with your real estate business today.</p>
    </div>

    {{-- Quick Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-sm p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium mb-2" style="color: rgba(255,255,255,0.8)">Total Customers</p>
                    <p class="text-3xl font-bold">1,234</p>
                    <p class="text-xs" style="color: rgba(255,255,255,0.8)">↑ 12% from last month</p>
                </div>
                <div class="bg-white/20 rounded-lg p-3">
                    <x-heroicon-o-users class="w-6 h-6"/>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-sm p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium mb-2" style="color: rgba(255,255,255,0.8)">Available Units</p>
                    <p class="text-3xl font-bold">456</p>
                    <p class="text-xs" style="color: rgba(255,255,255,0.8)">↓ 3% from last month</p>
                </div>
                <div class="bg-white/20 rounded-lg p-3">
                    <x-heroicon-o-building-office class="w-6 h-6"/>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-sm p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium mb-2" style="color: rgba(255,255,255,0.8)">Active Deals</p>
                    <p class="text-3xl font-bold">89</p>
                    <p class="text-xs" style="color: rgba(255,255,255,0.8)">↑ 8% from last month</p>
                </div>
                <div class="bg-white/20 rounded-lg p-3">
                    <x-heroicon-o-currency-dollar class="w-6 h-6"/>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-sm p-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium mb-2" style="color: rgba(255,255,255,0.8)">Monthly Revenue</p>
                    <p class="text-3xl font-bold">12.5M</p>
                    <p class="text-xs" style="color: rgba(255,255,255,0.8)">↑ 23% from last month</p>
                </div>
                <div class="bg-white/20 rounded-lg p-3">
                    <x-heroicon-o-banknotes class="w-6 h-6"/>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Modules Section --}}
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">System Modules</h2>
    </div>

    {{-- Modules Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        
        {{-- Customers Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-blue-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-blue-50 rounded-lg p-2.5">
                    <x-heroicon-o-users class="w-5 h-5 text-blue-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Customers</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Manage customers and leads</p>
        </a>
        
        {{-- Properties Module --}}
        <a href="{{ \App\Filament\Resources\PropertyResource::getUrl('index') }}" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-green-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-green-50 rounded-lg p-2.5">
                    <x-heroicon-o-building-office-2 class="w-5 h-5 text-green-600"/>
                </div>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Properties</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Manage projects and units</p>
        </a>
        
        {{-- Bookings Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-purple-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-purple-50 rounded-lg p-2.5">
                    <x-heroicon-o-clipboard-document-check class="w-5 h-5 text-purple-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Bookings</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Track reservations and deals</p>
        </a>
        
        {{-- Contracts Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-orange-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-orange-50 rounded-lg p-2.5">
                    <x-heroicon-o-document-text class="w-5 h-5 text-orange-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Contracts</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Manage agreements</p>
        </a>
        
        {{-- Viewings Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-indigo-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-indigo-50 rounded-lg p-2.5">
                    <x-heroicon-o-calendar class="w-5 h-5 text-indigo-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Viewings</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Schedule property tours</p>
        </a>
        
        {{-- Documents Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-cyan-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-cyan-50 rounded-lg p-2.5">
                    <x-heroicon-o-folder class="w-5 h-5 text-cyan-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Documents</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Manage files and documents</p>
        </a>
        
        {{-- Tasks Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-pink-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-pink-50 rounded-lg p-2.5">
                    <x-heroicon-o-clipboard-document-list class="w-5 h-5 text-pink-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Tasks</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Manage daily activities</p>
        </a>
        
        {{-- Reports Module --}}
        <a href="#" class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-200 hover:border-amber-500 p-5">
            <div class="flex items-start justify-between mb-3">
                <div class="bg-amber-50 rounded-lg p-2.5">
                    <x-heroicon-o-chart-bar class="w-5 h-5 text-amber-600"/>
                </div>
                <span class="text-xs font-medium text-gray-400">Coming Soon</span>
            </div>
            <h3 class="text-base font-semibold text-gray-900 mb-2">Reports</h3>
            <p class="text-sm text-gray-500 leading-relaxed">Analytics and insights</p>
        </a>
        
    </div>
</x-filament-panels::page>
