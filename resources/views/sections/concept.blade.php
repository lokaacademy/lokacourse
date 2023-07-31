<div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
              <i class="fas fa-code"></i>
            </div>
            <h6 class="text-xl font-semibold">{{ $concepts[0]->title }}</h6>
            <p class="mt-2 mb-4 text-gray-600">
              {{ $concepts[0]->description }}
            </p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <h6 class="text-xl font-semibold">{{ $concepts[1]->title }}</h6>
            <p class="mt-2 mb-4 text-gray-600">
              {{ $concepts[1]->description }}
            </p>
          </div>
        </div>
      </div>
      <div class="pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
              <i class="fas fa-users"></i>
            </div>
            <h6 class="text-xl font-semibold">{{ $concepts[2]->title }}</h6>
            <p class="mt-2 mb-4 text-gray-600">
              {{ $concepts[2]->description }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center mt-32">
      <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
        <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
          <i class="fas fa-user-friends text-xl"></i>
        </div>
        <h3 class="text-3xl mb-2 font-semibold leading-normal">
          Belajar bersama Loka Academy menyenangkan
        </h3>
        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
        Di sini, kamu akan bertemu dengan komunitas seru yang seumur denganmu. 
        Jadi, kamu bisa belajar dan berkembang bersama-sama. 
        Kenalan, jalin pertemanan baru, dan raih mimpi IT-mu bersama teman-teman se-ITer
        </p>
      </div>
      <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
          <img alt="..." src="assets/images/bootcamp-1.jpeg" class="w-full align-middle rounded-t-lg"/>
          <blockquote class="relative p-8 mb-4">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 583 95"
              class="absolute left-0 w-full block"
              style="height: 95px; top: -94px;">
              <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
            </svg>
            <h4 class="text-xl font-bold text-black">
                Bootcamp Batch 1
            </h4>
            <p class="text-md font-light mt-2 text-gray">
                Kegiatan belajar meliputi : Agile Product Management, UI/UX, Frontend Programming, Backend Programming dan Soft Skill.
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>