<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h3 class="text-3xl font-bold tracking-tight text-gray-900 mb-4">Ini adalah halaman contact</h3>
    <ul class="space-y-2">
      <li class="flex flex-col sm:flex-row sm:items-center">
        <span class="font-medium text-gray-700">Website:</span>
        <a href="{{ $website }}" class="sm:ml-2 text-blue-500 hover:underline break-words">{{ $website }}</a>
      </li>
      <li class="flex flex-col sm:flex-row sm:items-center">
        <span class="font-medium text-gray-700">LinkedIn:</span>
        <a href="{{ $linkedin }}" class="sm:ml-2 text-blue-500 hover:underline break-words">{{ $linkedin }}</a>
      </li>
      <li class="flex flex-col sm:flex-row sm:items-center">
        <span class="font-medium text-gray-700">Instagram:</span>
        <a href="{{ $instagram }}" class="sm:ml-2 text-blue-500 hover:underline break-words">{{ $instagram }}</a>
      </li>
    </ul>
  </div>
</x-layout>