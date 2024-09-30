<x-layout>

    <section class="bg-white dark:bg-gray-900 flex max-w-2xl mx-auto">
        <div class="py-8 px-4 mx-auto  lg:py-16">
            <img src="{{ Storage::url('storage/'.$siswa['foto']) }}" alt="Image">
            <img src="{{ Storage::url('storage/'.$siswa['scanKk']) }}" alt="Image">
        </div>
        <div class="py-8 px-4 mx-auto  lg:py-16">
            <h2 class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">{{$siswa['namaLengkap']}}</h2>
            <p class="mb-4 text-xl font-extrabold leading-none text-gray-900 md:text-2xl dark:text-white">{{$siswa['asalSekolah']}}</p>
            <dl>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">{{$siswa['alamat']}}</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{$siswa['tempatLahir']}}</dd>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{$siswa['tanggalLahir']}}</dd>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{$siswa['email']}}</dd>
            </dl>
            
        </div>
      </section>
</x-layout>