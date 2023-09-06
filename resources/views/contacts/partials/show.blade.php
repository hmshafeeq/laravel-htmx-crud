
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3 p-5">
  <h2 class="text-2xl font-bold">{{ $contact->first_name }} {{ $contact->last_name }}</h2>
  <p class="text-gray-600">Email: {{ $contact->email }}</p>
  <p class="text-gray-600">Mobile: {{ $contact->mobile }}</p>           
</div>