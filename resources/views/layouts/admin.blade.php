<div class="min-h-screen bg-gray-100">
    @include('layouts.admin-navigation')

    <div class="flex space-x-4">
        <sidebar/>

        <!-- Page Content -->
        <div class="flex-1">
            <div class="max-w-6xl mx-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
