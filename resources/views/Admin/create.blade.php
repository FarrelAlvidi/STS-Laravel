<x-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Input Jurusan Baru</h2>
            <form action="{{ route('admin2.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div >
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Jurusan</label>
                        <input type="text" name="jurusan" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Jurusan</label>
                        <input type="text" name="detail" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                    </div>
                <button type="submit" class="w-full inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-600 rounded-lg focus:ring-4 focus:ring-orange-200 hover:bg-orange-700">
                    Add product
                </button>
            </form>
        </div>
      </section>
</x-layout>