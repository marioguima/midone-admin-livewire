@extends('../layout/' . $layout)

@section('subhead')
    <title>Eventos - WeEvent</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: Weekly Top Products -->

            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Events</h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Event</button>
                        {{-- <button class="button box flex items-center text-gray-700 dark:text-gray-300">
                            <i data-feather="corner-right-up" class="hidden sm:block w-4 h-4 mr-2"></i> Export
                        </button>
                        <button class="ml-2 button box flex items-center text-gray-700 dark:text-gray-300 mr-2">
                            <i data-feather="corner-left-down" class="hidden sm:block w-4 h-4 mr-2"></i> Import
                        </button>
                        <div class="dropdown">
                            <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4" data-feather="menu"></i>
                                </span>
                            </button>
                            <div class="dropdown-box w-40">
                                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                                    </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">PRESENTERS</th>
                                <th class="whitespace-no-wrap">TITLE</th>
                                <th class="text-center whitespace-no-wrap">DESCRIPTION</th>
                                <th class="text-center whitespace-no-wrap">SCHEDULED</th>
                                <th class="text-center whitespace-no-wrap">STATUS</th>
                                <th class="text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($fakers, 0, 10) as $faker)
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['events'][0]['image']) }}" title="Created at {{ $faker['dates'][0] }}">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['events'][0]['image']) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                            </div>
                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['events'][0]['image']) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $faker['events'][0]['title'] }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $faker['events'][0]['short_description'] }}</div>
                                    </td>
                                    <td class="text-center">{{ $faker['events'][0]['long_description'] }}</td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($faker['events'][0]['scheduled'])->format('d/m/Y') }}
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ \Carbon\Carbon::parse($faker['events'][0]['scheduled'])->format('H:i') }}</div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center {{ now() < $faker['events'][0]['scheduled'] ? 'text-theme-9' : 'text-theme-6' }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ now() < $faker['events'][0]['scheduled'] ? 'Open' : 'Closed' }}
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-theme-6" href="">
                                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    <ul class="pagination">
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">1</a>
                        </li>
                        <li>
                            <a class="pagination__link pagination__link--active" href="">2</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">3</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                    <select class="w-20 input box mt-3 sm:mt-0">
                        <option>05</option>
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>

    </div>
@endsection
