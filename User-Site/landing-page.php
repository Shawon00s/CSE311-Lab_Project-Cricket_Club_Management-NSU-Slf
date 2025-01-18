<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cricket Club Management</title>
</head>

<?php include('partials/header.php'); ?>

<div class="relative w-full h-[800px]">
    <div class="absolute inset-0 bg-[url('../resources/background.jpg')] bg-cover bg-center filter brightness-50">
        <div class="absolute inset-0 bg-gradient-to-t from-black-100 to-transparent"></div>
    </div>

    <div class="relative text-right pt-80 text-xl bg-gradient-to-t from-black-100 to-transparent">
        <div>
            <h1 class="text-5xl font-playfair text-white mb-4 shadow-inner mr-6">Welcome to the Ultimate Cricket
                Management
            </h1>
            <p
                class="font-lora ml-6 mr-6 text-teal-100 text-xl leading-relaxed shadow-2xl p-2 bg-black bg-opacity-30 rounded-lg">
                Where passion meets precision. From managing your team’s performance to tracking every boundary and
                wicket, our system brings you closer to the game you love. Stay ahead with real-time stats, insightful
                analytics, and seamless scheduling — empowering coaches, players, and fans alike to elevate their
                cricketing journey with every match.
            </p>
        </div>
    </div>
</div>

<style>
    .font-playfair {
        font-family: 'Playfair Display', serif;
    }

    .font-lora {
        font-family: 'Lora', serif;
    }

    h1 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    p {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
</style>


<div class="bg-gradient-to-r from-blue-200 to-cyan-200 grid grid-cols-4 my-6 p-3">
    <div class="card bg-base-100 image-full w-[340px] shadow-xl">
        <figure>
            <img src="../resources/card1.jpg" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Clubs!</h2>
            <p>Click add now to add your club</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-club.php'">Add Now</button>
            </div>
        </div>
    </div>


    <div class="card bg-base-100 image-full w-[340px] shadow-xl">
        <figure>
            <img src="../resources/card2.jpg" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Players!</h2>
            <p>Click add now to add your player</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-player.php'">Add Now</button>
            </div>
        </div>
    </div>

    <div class="card bg-base-100 image-full w-[340px] shadow-xl">
        <figure>
            <img src="../resources/card3.jpg" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Management Committee!</h2>
            <p>Click add now to add your committee member</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-management-committee.php'">Add
                    Now</button>
            </div>
        </div>
    </div>

    <div class="card bg-base-100 image-full w-[340px] shadow-xl">
        <figure>
            <img src="../resources/card4.png" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Venues!</h2>
            <p>Click add now to add your venues</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-venue.php'">Add Now</button>
            </div>
        </div>
    </div>

    <div class="card bg-base-100 image-full w-[340px] shadow-xl mt-3">
        <figure>
            <img src="../resources/card5.jpg" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Player Statistics!</h2>
            <p>Click add now to add your player statistics</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-player-statistics.php'">Add
                    Now</button>
            </div>
        </div>
    </div>

    <div class="card bg-base-100 image-full w-[340px] shadow-xl mt-3">
        <figure>
            <img src="../resources/card6.jpg" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Add match result!</h2>
            <p>Click add now to add your match result</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='add-match.php'">Add
                    Now</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php include('partials/footer.php'); ?>