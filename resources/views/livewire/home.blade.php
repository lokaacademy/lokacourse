<div id="home">
    <x-slot:title>
        Home
    </x-slot>
   
    <main>
        <div class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
            @include('sections.logo')
        </div>
        
      <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        @include('components.banner')
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        @include('sections.concept')
      </section>
      <section class="relative py-20">
        @include('sections.portofolio')
      </section>
      <section class="pt-20 pb-48">
        @include('sections.team')
      </section>
      <section class="pb-20 relative block bg-gray-900">
        @include('sections.benefit')
      </section>
      {{-- <section class="relative block py-24 lg:pt-0 bg-gray-900">
        @include('sections.feedback')
      </section> --}}
    </main>
</div>
