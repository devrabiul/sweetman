<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Card</title>
<style>
    .card-container {
        width: 95%;
        margin: 20px auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(135deg, #000000, #ff0000); /* Glossy black and red gradient background */
        border: 1px solid #e0e0e0; /* Light border color */
        position: relative; /* Make the container a positioning context */
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5); /* Add red glow effect */
    }

    .card-container:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(255, 0, 0, 0.8), 0 0 25px rgba(255, 0, 0, 0.8); /* Enhance red glow effect on hover */
        background: linear-gradient(135deg, #000000, #ff0000); /* Glossy black and red gradient background on hover */
    }

    .card-image {
        transition: transform 0.3s ease;
    }

    .card-image:hover {
        transform: scale(1.1);
    }

    .card-title {
        color: #333333; /* Dark text color */
        position: relative; /* Make the title a positioning context */
        padding: 10px;
        background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
        backdrop-filter: blur(10px); /* Glass effect */
        -webkit-backdrop-filter: blur(10px); /* For Safari */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
    }

    .card-title:hover {
        color: #ff6600; /* Highlight text color on hover */
    }

    .card-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #ff6600;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
    }

    .card-button:hover {
        background-color: #ff4500;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }

    .button {
        flex: 1;
        margin: 0 5px;
        padding: 5px 8px; /* Smaller padding */
        font-size: 12px; /* Smaller font size */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
    }

    .button-blue {
        background-color: #007bff;
        color: white;
    }

    .button-blue:hover {
        background-color: #0056b3;
    }

    .button-red {
        background-color: #dc3545;
        color: white;
    }

    .button-red:hover {
        background-color: #c82333;
    }

    /* Media query for mobile view */
    @media (max-width: 250px) {
        .card-container {
            margin-right: 100px; /* Adjust this value as needed */
        }
    }
</style>

</head>
<body>
    <div class="gig-card" x-data="window._{{ $gig->uid }}" dir="{{ config()->get('direction') }}" style="width: 300px;">
        <div class="card-container bg-white dark:bg-zinc-800 rounded-md shadow-sm ring-1 ring-gray-200 dark:ring-zinc-800 overflow-hidden" style="border-radius: 15px;">
            {{-- Preview --}}
            <a href="{{ url('service', $gig->slug) }}" class="flex items-center justify-center overflow-hidden w-full h-52 bg-gray-100 dark:bg-zinc-700" style="border-radius: 15px 15px 0 0;">
                <img class="card-image object-cover w-full h-full lazy" src="{{ placeholder_img() }}" data-src="{{ src($gig->thumbnail) }}" alt="{{ $gig->title }}" style="border-radius: 15px 15px 0 0; object-position: top;">
            </a>
            <div class="button-container">
                <button class="button button-blue">USERNAME</button>
                <button class="button button-red">OFFER INFO</button>
            </div>
        </div>
    </div>
</body>
</html>








      