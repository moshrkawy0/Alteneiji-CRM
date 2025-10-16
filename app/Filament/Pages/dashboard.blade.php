<x-filament-panels::page>
    {{-- Main Categories Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        
        {{-- Customers Card --}}
        <a href="{{ \App\Filament\Resources\CustomerResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900 group-hover:bg-blue-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-users class="w-8 h-8 text-blue-600 dark:text-blue-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Customers</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Manage customers and leads data</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Properties Card --}}
        <a href="{{ \App\Filament\Resources\PropertyResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-green-100 dark:bg-green-900 group-hover:bg-green-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-building-office-2 class="w-8 h-8 text-green-600 dark:text-green-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Properties</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Manage projects and property units</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Deals Card --}}
        <a href="{{ \App\Filament\Resources\DealResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-purple-100 dark:bg-purple-900 group-hover:bg-purple-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-currency-dollar class="w-8 h-8 text-purple-600 dark:text-purple-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Deals</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Track sales opportunities and deals</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Contracts Card --}}
        <a href="{{ \App\Filament\Resources\ContractResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-orange-100 dark:bg-orange-900 group-hover:bg-orange-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-document-text class="w-8 h-8 text-orange-600 dark:text-orange-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Contracts</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Manage contracts and agreements</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Viewings Card --}}
        <a href="{{ \App\Filament\Resources\ViewingResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-100 dark:bg-indigo-900 group-hover:bg-indigo-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-calendar class="w-8 h-8 text-indigo-600 dark:text-indigo-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Viewings</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Schedule and track property viewings</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Payments Card --}}
        <a href="{{ \App\Filament\Resources\PaymentResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-emerald-100 dark:bg-emerald-900 group-hover:bg-emerald-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-banknotes class="w-8 h-8 text-emerald-600 dark:text-emerald-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Payments</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Track invoices and payments</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Tasks Card --}}
        <a href="{{ \App\Filament\Resources\TaskResource::getUrl('index') }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-pink-100 dark:bg-pink-900 group-hover:bg-pink-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-clipboard-document-list class="w-8 h-8 text-pink-600 dark:text-pink-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Tasks</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Manage daily tasks and activities</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
        {{-- Reports Card --}}
        <a href="{{ \App\Filament\Pages\Reports::getUrl() }}" 
           class="relative group overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-500">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-cyan-100 dark:bg-cyan-900 group-hover:bg-cyan-500 transition-colors duration-300 mb-4">
                    <x-heroicon-o-chart-bar class="w-8 h-8 text-cyan-600 dark:text-cyan-400 group-hover:text-white transition-colors duration-300"/>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Reports</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Comprehensive reports and analytics</p>
                <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 group-hover:text-primary-700">
                    <span class="text-sm font-medium">Go to module</span>
                    <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </a>
        
    </div>
    
    {{-- Quick Stats Section (Optional) --}}
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Total Customers</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">1,234</p>
                </div>
                <x-heroicon-o-users class="w-12 h-12 text-blue-500 opacity-20"/>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Available Units</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">456</p>
                </div>
                <x-heroicon-o-building-office class="w-12 h-12 text-green-500 opacity-20"/>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Active Deals</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">89</p>
                </div>
                <x-heroicon-o-currency-dollar class="w-12 h-12 text-purple-500 opacity-20"/>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Sales This Month</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">12.5M AED</p>
                </div>
                <x-heroicon-o-banknotes class="w-12 h-12 text-orange-500 opacity-20"/>
            </div>
        </div>
    </div>
</x-filament-panels::page>
