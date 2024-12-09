<x-layout>
    <section class="w-full">
        <div class="container flex flex-col gap-8 pb-24 px-4">
            <h2 class="text-center font-bold text-4xl">Latest Courses</h2>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($courses as $course)
                <a href="/" class="rounded-md bg-gray-100 hover:bg-gray-200">
                    <article class="flex flex-col p-4 h-full">
                        <header>
                            <h3 class="font-semibold text-xl">Title</h3>
                        </header>
                        <p class="font-normal mb-8 mt-2">description</p>
                        <footer class="flex gap-2 justify-between mt-auto">
                            <div class="flex items-center gap-2">
                                <x-icon name="film" class="size-4" />
                                <span class="text-sm font-semibold">11 lessons</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <x-icon name="clock" class="size-4" />
                                <span class="text-sm font-semibold">2</span>
                            </div>
                        </footer>
                    </article>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>