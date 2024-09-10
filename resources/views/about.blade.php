<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-2xl tracking-tight text-gray-900">
    About me
  </h3>
  <div class="mt-4 bg-gray-50 border rounded-lg p-8 w-fit">
    <table>
      <tr>
        <td class="text-lg font-semibold text-gray-700 w-24">Nama:</td>
        <td class="text-lg text-gray-900">{{ $nama }}</td>
      </tr>
      <tr>
        <td class="text-lg font-semibold text-gray-700 w-24">NRP:</td>
        <td class="text-lg text-gray-900">{{ $nrp }}</td>
      </tr>
      <tr>
        <td class="text-lg font-semibold text-gray-700 w-24">Kelas:</td>
        <td class="text-lg text-gray-900">{{ $kelas }}</td>
      </tr>
    </table>
  </div>
</x-layout>