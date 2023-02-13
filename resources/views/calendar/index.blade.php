<x-crud-layout title="2020 July">

    <x-slot:actionbuttons>
        <div class="px-4 flex items-center justify-between">
            <span
                tabindex="0"
                class="
                focus:outline-none
                text-base
                font-bold
                dark:text-slate-100
                text-slate-50
              "
            >{{$today->format('M Y')}}</span
            >
            <div class="flex items-center">
                <button
                    aria-label="calendar backward"
                    class="
                  focus:text-slate-400
                  hover:text-slate-400
                  text-slate-50
                  dark:text-slate-100
                "
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-chevron-left"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="15 6 9 12 15 18"/>
                    </svg>
                </button>
                <button
                    aria-label="calendar forward"
                    class="
                  focus:text-slate-400
                  hover:text-slate-400
                  ml-3
                  text-slate-50
                  dark:text-slate-100
                "
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-chevron-right"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="9 6 15 12 9 18"/>
                    </svg>
                </button>
            </div>
        </div>

    </x-slot:actionbuttons>
    <!--Calendar -->

        <div class="overflow-auto w-full grid grid-cols-7 justify-center">
            @foreach($days as $day)
                <p
                    class="
                          text-base
                          font-medium
                          text-center text-slate-50
                          dark:text-slate-100
                        "
                >
                    {{$day}}
                </p>

            @endforeach

            @foreach ($calendar as $week)
                <div
                    class="
                        px-2
                        py-2
                        col-span-7
                        gap-1
                        cursor-pointer
                        flex
                        w-full
                      "
                >
                    @foreach ($week as $day)
                        <div
                            class="border @if($day['isToday']) bg-slate-500 @endif rounded p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-x-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                            <div
                                class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 my-1 w-full">
                                    <span
                                        class="
                                        {{ ! $day['withinMonth'] ? 'text-slate-500' : 'text-slate-50' }}
                                        {{ $day['selected'] ? 'bg-red-500 p-1 rounded-full' : '' }}
                                        ">
                                        {{ $day['day']->day }}

                                    </span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                    <div
                                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                                    >
                    <span class="event-name">
                      Meeting
                    </span>
                                        <span class="time">
                      12:00~14:00
                    </span>
                                    </div>
                                    <div
                                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                                    >
                    <span class="event-name">
                      Meeting
                    </span>
                                        <span class="time">
                      18:00~20:00
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            @endforeach
        </div>
    </div>


    <!-- events -->
    <div
        class="
        hidden
            md:py-8
            py-5
            md:px-16
            px-5
            dark:bg-slate-700
            bg-slate-50
            rounded-b
          "
    >
        <div class="px-4">
            <div class="border-b pb-4 border-slate-400 border-dashed">
                <p
                    class="
                  text-xs
                  font-light
                  leading-3
                  text-slate-500
                  dark:text-slate-300
                "
                >
                    9:00 AM
                </p>
                <a
                    tabindex="0"
                    class="
                  focus:outline-none
                  text-lg
                  font-medium
                  leading-5
                  text-slate-800
                  dark:text-slate-100
                  mt-2
                "
                >Zoom call with design team</a
                >
                <p
                    class="
                  text-sm
                  pt-2
                  leading-4 leading-none
                  text-slate-600
                  dark:text-slate-300
                "
                >
                    Discussion on UX sprint and Wireframe review
                </p>
            </div>
            <div class="border-b pb-4 border-slate-400 border-dashed pt-5">
                <p
                    class="
                  text-xs
                  font-light
                  leading-3
                  text-slate-500
                  dark:text-slate-300
                "
                >
                    10:00 AM
                </p>
                <a
                    tabindex="0"
                    class="
                  focus:outline-none
                  text-lg
                  font-medium
                  leading-5
                  text-slate-800
                  dark:text-slate-100
                  mt-2
                "
                >Orientation session with new hires</a
                >
            </div>
            <div class="border-b pb-4 border-slate-400 border-dashed pt-5">
                <p
                    class="
                  text-xs
                  font-light
                  leading-3
                  text-slate-500
                  dark:text-slate-300
                "
                >
                    9:00 AM
                </p>
                <a
                    tabindex="0"
                    class="
                  focus:outline-none
                  text-lg
                  font-medium
                  leading-5
                  text-slate-800
                  dark:text-slate-100
                  mt-2
                "
                >Zoom call with design team</a
                >
                <p
                    class="
                  text-sm
                  pt-2
                  leading-4 leading-none
                  text-slate-600
                  dark:text-slate-300
                "
                >
                    Discussion on UX sprint and Wireframe review
                </p>
            </div>
        </div>
    </div>



</x-crud-layout>

