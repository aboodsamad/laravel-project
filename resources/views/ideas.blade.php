<x-layout>
    <form action="/ideas" method="POST">
        @csrf
        <div class="col-span-full">
            <label for="ideas" class="block text-sm/6 font-medium text-white">New Ideas</label>
            <div class="mt-2">
                <textarea id="ideas" name="ideas" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">have any ideas you wanna save for later?</p>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit">save</button>
        </div>
    </form>
</x-layout>

