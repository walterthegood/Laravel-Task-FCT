<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="flex flex-col items-start gap-4 rounded-xl border border-neutral-200 bg-white/50 p-4 dark:border-neutral-700 dark:bg-black/50">
            
            <h1 style="font-size: 2rem; font-weight: bold;"> Bienvenido al gestor de tareas </h1>
            
            {{ Auth::user()->name }} tienes {{ Auth::user()->task->count() }} tareas.
            
            <br>
            Aqui la tienes:
            <br>
            @foreach (Auth::user()->task as $task)
                <p style="color:red ">{{ $task->title }}</p>
                <p style="color:blue "> {{ $task->description }}</p>
            @endforeach
            </div>
            
            
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app>
