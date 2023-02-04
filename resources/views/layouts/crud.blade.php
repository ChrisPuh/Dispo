<x-app-layout>

    <div class="relative flex flex-col h-screen">
        <!-- nav  -->
        <div class="h-16 z-50 ">
            <x-navigation.navigation/>
        </div>
        <!-- content -->
        <div class="absolute pt-16  bottom-0   h-full w-full bg-slate-100">
            <div class="flex flex-nowrap h-full">
                <div class="w-2/12  px-2 py-4 border-r border-slate-100 dark:border-slate-700">
                    <x-navigation.sidebar/>
                </div>
                <div class="w-10/12 p-4 flex flex-col h-full gap-y-1.5 overscroll-none">
                    <header class="flex items-center justify-between px-6 py-5 bg-slate-700 rounded-md text-white">
                        <div class="flex items-center">
                            <h1 class="font-bold text-xl">{{strtoupper(__($title))}}</h1>
                        </div>
                        <div class="flex items-center">
                            {{$actionbuttons?? ''}}
                        </div>
                    </header>
                    <main class="px-6 py-5 bg-slate-700 rounded-md text-white h-full overflow-y-auto ">
                        {{$slot}}
                    </main>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
