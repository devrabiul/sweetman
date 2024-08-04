<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Changed to min-height for full page content */
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px; /* Adjust padding as needed */
            min-height: 100vh; /* Ensures content area is tall */
        }

        .btn-red {
            background-color: red;
            animation: pulse 2s infinite;
            transition: transform 0.3s, background-color 0.3s;
        }

        .btn-red:hover {
            background-color: darkred;
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="w-full">
            <div>
                {{-- Check if user authenticated --}}
                @auth
                <div class="flex items-center justify-center">
                    <x-forms.button action="start" :text="__('messages.t_lets_get_started')" :block="false" />
                </div>
                @endauth

                {{-- Join us --}}
                @guest
                <div class="text-center">
                    <a href="{{ url('auth/register') }}"
                        class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse border font-semibold focus:outline-none px-6 py-4 leading-6 rounded border-primary-700 text-white hover:text-white hover:bg-primary-1 hover:border-primary-800 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700 btn-red">

                        {{-- LTR --}}
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            class="opacity-50 hi-solid hi-arrow-right hidden ltr:inline-block w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>

                        {{-- RTL --}}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="opacity-50 hi-solid hi-arrow-right hidden rtl:inline-block w-5 h-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>

                        <span>@lang('messages.t_lets_get_started')</span>
                    </a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</body>
</html>
