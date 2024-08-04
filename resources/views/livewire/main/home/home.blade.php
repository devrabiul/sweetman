{{-- Featured categories --}}
@if (settings('appearance')->is_featured_categories && $categories && $categories->count())
    <div class="col-span-12 mt-6 xl:mt-6 mb-16">
        <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block">{{ __('messages.t_featured_categories') }}</span>
        <div class="flex flex-wrap justify-center items-center mt-8 -mx-2 md:-mx-5" id="featured-categories-slick" wire:ignore>



@foreach ($categories as $category)
<div class="w-72 mx-2 md:mx-5 mb-8 rounded-lg border border-transparent overflow-hidden relative">
    <a href="{{ url('categories', $category->slug) }}" class="block w-full h-72 relative overflow-hidden">
        <img src="{{ placeholder_img() }}" data-src="{{ src($category->image) }}" alt="{{ $category->name }}" class="lazy w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-800 opacity-90"></div>
        <span class="absolute inset-0 flex items-center justify-center text-center text-xl font-bold text-white">{{ $category->name }}</span>
    </a>
</div>
@endforeach


        </div>
    </div>
@endif

{{-- Bestsellers --}}
        @if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
            <div class="col-span-12 mt-6 xl:mt-6 mb-16">
                <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block">{{ __('messages.t_top_sellers') }}</span>
                <a href="{{ url('sellers') }}" class="mt-1 text-primary-600 hover:text-primary-700 text-xs font-medium uppercase tracking-widest text-center block">{{ __('messages.t_view_more') }}</a>
<ul class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="top-sellers-slick" wire:ignore>
                    @foreach ($sellers as $seller)

                        <div class="px-4 py-1"> 


                            {{-- Avatar --}}
                            <a href="{{ url('profile', $seller->username) }}" target="_blank" class="inline-block relative">








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>

        
    .card {
    width: 90%;
    padding: 110px; /* Increased padding for better spacing */
    margin: 20px auto;
    background: #333333; /* Dark background color */
    color: #ffffff; /* White text color for contrast */
    border-radius: 10px;
    position: relative; /* Ensure relative positioning for child elements */
    border: 1px solid rgba(255, 255, 255, 0.1); /* Lighter border for definition */
    overflow: hidden; /* Ensure overflow doesn't show the pseudo-element */

    /* Background image */
    background-image: url('{{ placeholder_img() }}'); /* Placeholder image */
    background-size: cover; /* Cover the entire element */
    background-position: center; /* Center the image within the element */
    background-repeat: no-repeat; /* Do not repeat the background image */
}



.card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 75px; /* Height of the overlay, adjust as needed */
    background: rgba(255, 255, 255, 0.1); /* Transparent white background */
    backdrop-filter: blur(8px) opacity(0.9); /* Blur and opacity for foggy effect */
    z-index: 1; /* Ensure it's above the content but below the text */
}





/* Media query for mobile devices */
@media (max-width: 678px) {
    .card, {
        width: 80%; /* Adjust width for smaller screens */
        max-width: 100%; /* Ensure it doesn't exceed the screen width */
    }
}

.card img {
    width: 100%; /* Image width takes up entire card width */
    height: 100%; /* Image height takes up entire card height */
    object-fit: cover; /* Scale image to cover entire card */
    object-position: top; /* Center image within card */
    display: block; /* Ensure image behaves as a block element */
}

        .verified-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 30px !important;
            height: 30px !important;
        }



/* Skills button styling */
.card .skills {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px; /* Adjust margin for spacing */
}

.card .skills span {
    background-color: #f0f0f0; /* Background color */
    color: #333; /* Text color */
    transition: background-color 0.3s ease;
}
.card-content {
    padding: 20px;
    height: 100%;
}
.card .skills span:hover {
    background-color: #e0e0e0; /* Slightly darker background on hover */

}
.buttons {
    display: flex;
    gap: 10px;
}

.username-button {
    z-index: 2;
    font-size: 10px;
    position: absolute;
    left: 10px;
    bottom: 40px;
    background-color: RED; /* Green background */
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.username-button:hover {
    background-color: RED; /* Darker green on hover */
    transform: scale(1.05); /* Slightly enlarge on hover */
}

.card .buttons .profile-button {
    position: absolute;
    right: 10px;
    bottom: 40px; /* Adjust distance from the bottom */
    background-color: #f0f0f0; /* Background color */
    color: #333; /* Text color */
    padding: 5px 5px; /* Adjust padding for button */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 10px; /* Adjust font size as needed */
    text-decoration: none; /* Remove default underline */
    transition: background-color 0.3s ease; /* Smooth transition */
    z-index: 2; /* Ensure button is above the overlay */
}

.card .buttons .profile-button:hover {
    background-color: #e0e0e0; /* Lighter background color on hover */
}
      
.reviews-section {
    position: absolute;
    bottom: 10px; /* Adjust to position vertically */
    right: 10px; /* Adjust to position horizontally */
    background-color: green; /* Background color */
    color: #ffffff; /* Text color */
    transition: background-color 0.3s ease;
    z-index: 2; /* Ensure button is above the overlay */
    padding: 5px 5px; /* Padding for button */
    border: none; /* Red border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 10px; /* Adjust font size as needed */
}


    .card .buttons .reviews-section:hover {
    background-color: #e0e0e0; /* Lighter background color on hover */
}


.card .buttons .contact-button {
    position: absolute;
    bottom: 10px; /* Adjust distance from the bottom */
    left: 10px; /* Adjust distance from the left */
    background-color: blue; /* Transparent white background */
    color: #ffffff; /* Text color */
    transition: background-color 0.3s ease;
    z-index: 2; /* Ensure button is above the overlay */
    padding: 5px 5px; /* Adjusted padding for button */
    border: none; /* Remove default button border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 10px; /* Adjust font size as needed */
}

.card .buttons .contact-button:hover {
    background-color: #e0e0e0; /* Slightly darker background on hover */
}



/* Hover effects */
.card .buttons button:hover,
.card .buttons a:hover {
    opacity: 0.8; /* Slightly reduce opacity on hover */
}


    </style>
</head>
<body> 

<div class="card" style="background-image: url('{{ src($seller->avatar) }}');">
    <div class="card-content">
        <a href="{{ url('profile', $seller->username) }}" target="_blank" class="mt-4 text-gray-900 dark:text-gray-200 text-sm font-bold">
            @if ($seller->status === 'verified')
                <img class="verified-badge" src="{{ url('public/img/auth/verified-badge.svg') }}" alt="{{ __('messages.t_account_verified') }}">
            @endif
        </a>


        <div class="buttons">
            <div class="buttons">
    <a href="{{ url('profile', $seller->username) }}" class="username-button">{{ $seller->username }}</a>
</div>

            <a href="{{ url('profile', $seller->username) }}" class="profile-button">View My Profile</a>
            <a href="{{ url('messages/new', $seller->username) }}" class="contact-button">Contact</a>
        </div>
        <div class="skills">
            @if ($seller->skills()->count())
                @foreach ($seller->skills()->inRandomOrder()->limit(3)->get() as $skill)
                    <span>{{ $skill->name }}</span>
                @endforeach
            @endif
        </div>
        <button class="reviews-section">
            Reviews ({{ number_format($seller->reviews()->count()) }})
        </button>
    </div>
</div>






         



                                
        

            
       


                                         <!-â GIG CARDS CENTER SIDES -â>
                                    <div class="flex items-center justify-center mb-5" wire:ignore>
      {{-- Actions --}} 
                                @guest

                                @endguest
        
                            </div>
                        </div>
        
                    </li>
                    @endforeach
                </ul>

            </div>
        @endif

        {{-- Random gigs --}}
        @if ($gigs && !$gigs->isEmpty())
            <div class="col-span-12 mb-16">

                {{-- Section title --}}
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block">
                                
                                @lang('messages.t_selected_gigs_for_u')    
                            </span>
                        </div>

                        <div>
                            <a href="{{ url('search') }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                    @foreach ($gigs as $gig)
                              <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                      
                            @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $gig->uid))
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- List of categories in home --}}
        @foreach ($categories as $category)
            @if ($category->gigs()->active()->count())
                
                {{-- Section title --}}
                <div class="col-span-12">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">{{ $category->name }}</span>
                        </div>

                        <div>
                            <a href="{{ url('categories', $category->slug) }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- List of gigs --}}
                <div class="col-span-12 mb-16">
                    <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                        @foreach ($category->gigs()->active()->inRandomOrder()->take(4)->get() as $gig)
                            <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 xl:col-span-3">
                                @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $category->id . '-' . $gig->uid))
                            </div>
                        @endforeach
                    </div>
                </div>

            @endif
        @endforeach

        {{-- Latest projects --}}
        @if (settings('projects')->is_enabled && !is_null($projects) && !$projects->isEmpty())
            <div class="col-span-12 mb-16">
            
                {{-- Section title --}}
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">
                                @lang('messages.t_latest_projects')    
                            </span>
                        </div>

                        <div>
                            <a href="{{ url('explore/projects') }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Projects --}}
                <div class="space-y-6">
                    @foreach ($projects as $project)

                        @livewire('main.cards.project', [ 'id' => $project->uid ], key('project-card-id-' . $project->uid))
                        
                    @endforeach
                </div>

            </div>
        @endif

        {{-- Newsletter --}}
        @if (settings('newsletter')->is_enabled)
            <div class="col-span-12">
                <div class="bg-gray-100 dark:bg-zinc-800 rounded-md p-6 flex items-center sm:p-10">
                    <div class="max-w-lg mx-auto">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">{{ __('messages.t_sign_up_for_newsletter') }}</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">{{__('messages.t_sign_up_for_newsletter_subtitle')}}</p>
                        <div class="mt-4 sm:mt-6 sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input wire:model.defer="email" id="email-address" type="text" autocomplete="email" required="" placeholder="{{ __('messages.t_enter_email_address') }}" class="h-14 appearance-none min-w-0 w-full bg-white dark:bg-zinc-700 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm py-2 px-4 text-sm text-gray-900 dark:text-gray-300 placeholder-gray-500 focus:outline-none focus:border-primary-600 focus:ring-1 focus:ring-primary-600" readonly onfocus="this.removeAttribute('readonly');">
                            <div class="mt-3 sm:flex-shrink-0 sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4">
                                <button wire:click="newsletter" wire:loading.attr="disabled" wire:target="newsletter" type="button" class="dark:disabled:bg-zinc-500 dark:disabled:text-zinc-400 disabled:cursor-not-allowed disabled:!bg-gray-400 disabled:text-gray-500 h-14 w-full bg-primary-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-sm font-bold tracking-wider text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600">
                                    {{ __('messages.t_signup') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>

@push('scripts')

    {{-- Slick script --}}
    @if (settings('appearance')->is_featured_categories || settings('appearance')->is_best_sellers)
        <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @endif

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories && $categories && $categories->count())
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#featured-categories-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 6,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#featured-categories-slick').removeClass('hidden');
            });
        </script>
    @endif

    {{-- Bestsellers --}}
    @if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#top-sellers-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 5,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#top-sellers-slick').removeClass('hidden');
            });
        </script>
    @endif
    
@endpush

@push('styles')

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories || settings('appearance')->is_best_sellers)
        <link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';"/>
    @endif
        
@endpush