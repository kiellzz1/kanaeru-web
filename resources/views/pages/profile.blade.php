<x-app-layout>
    <div class="max-w-2xl mx-auto bg-gray-800 p-6 rounded-xl shadow-lg mt-6">
        <h2 class="text-2xl font-semibold mb-4 text-blue-400">Profil Pengguna</h2>

        <div class="space-y-4">
            <div>
                <label class="block font-medium text-gray-300">Nama</label>
                <p class="text-white">{{ $user->name }}</p>
            </div>

            <div>
                <label class="block font-medium text-gray-300">Email</label>
                <p class="text-white">{{ $user->email }}</p>
            </div>

            <div class="pt-4 flex items-center gap-4">
                <a href="{{ route('profile.edit') }}"
                   class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600 transition">
                    Ubah Email / Password
                </a>

                <!-- Tombol Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-red-500 px-4 py-2 rounded hover:bg-red-600 transition text-white">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
