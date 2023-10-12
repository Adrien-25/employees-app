<x-admin-layout>
    <h1 class="text-2xl font-semibold p-4">Users Index</h1>
    <x-splade-table  :for="$users" >
        @cell('action',$user)
            <Link href="{{ route('admin.users.edit',$user)}}" 
            class="px-3 py-2 text-green-400 hover:text-green-700 font-semibold rounded-md">Edit</Link>
        @endcell
    </x-splade-table >
</x-app-layout>
