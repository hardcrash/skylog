    <x-layout>

    @if($drones->isEmpty())
    <div class="text-center py-10 border border-gray-200 rounded-lg bg-white shadow-sm">
    <p class="text-lg text-gray-500">You haven't added any drones yet.</p>
    <p class="mt-2 text-sm text-gray-400">Click the 'Add New Drone' button to get started.</p>
    </div>
    @else
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
    Registration No.
    </th>
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
    Serial No.
    </th>
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
    Make / Model
    </th>
    <th scope="col" class="relative px-6 py-3">
    <span class="sr-only">Actions</span>
    </th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
    @foreach($drones as $drone)
    <tr class="hover:bg-gray-50 transition duration-100 ease-in-out">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
    {{ $drone->registration_num }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
    {{ $drone->serial_num }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
    {{ $drone->make ?? 'N/A' }} / {{ $drone->model ?? 'N/A' }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <a href="{{ url('drones/' . $drone->id . '/edit') }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>

    <form action="{{ url('drones/' . $drone->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this drone?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    @endif
    </div>
</x-layout>
