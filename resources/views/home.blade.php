@extends('layouts.app')

@section('content')

<section class="w-full h-[1025px] bg-white overflow-hidden flex justify-center items-center">
  <img src="{{ asset('images/dodol-hero.png') }}"
       alt="Dodol PICNIC"
       class="w-[1440px] h-[1025px] object-contain">
</section>






<section class="py-16 px-6 max-w-4xl mx-auto" id="about">
  <h3 class="text-2xl mb-4">Our History</h3>
  <p class="text-gray-700 leading-relaxed">
    Since 1970, PICNIC has been creating dodol with love from Garut city...
  </p>
</section>

<section class="py-16 bg-gray-50 px-6" id="products">
  <h3 class="text-2xl font-bold text-center mb-8">Our Products</h3>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    @foreach ($products as $product)
    <div class="bg-white shadow p-4 rounded-lg">
      <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover rounded">
      <h4 class="text-lg font-semibold mt-4">{{ $product->name }}</h4>
      <p class="text-sm text-gray-600 mt-2">{{ $product->description }}</p>
    </div>
    @endforeach
  </div>
  
</section>

@endsection
