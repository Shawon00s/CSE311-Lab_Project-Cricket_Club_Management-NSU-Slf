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
<div class="navbar bg-white sticky top-0 z-50 shadow-lg">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-white rounded-box z-[1] mt-3 w-52 p-2 shadow-lg">
                <li><a class="hover:bg-gray-200" href="landing-page.php">Homepage</a></li>
                <li><a class="hover:bg-gray-200" href="display-club.php">Clubs</a></li>
                <li><a class="hover:bg-gray-200" href="display-player.php">Players</a></li>
                <li><a class="hover:bg-gray-200" href="display-match.php">Match Results</a></li>
                <li><a class="hover:bg-gray-200" href="display-player-statistics.php">Player Statistics</a></li>
                <li><a class="hover:bg-gray-200" href="display-venue.php">Venues</a></li>
                <li><a class="hover:bg-gray-200" href="display-management-committee.php">Management Committee</a>
                </li>
                <li><a class="hover:bg-gray-200" href="display-club-captain.php">Captains List</a></li>
                <li><a class="hover:bg-gray-200" href="display-club-coach.php">Coaches List</a></li>
                <li><a class="hover:bg-gray-200" href="display-club-achievement.php">Club Achievements</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center flex items-center">
        <img src="../resources/wicket.png" alt="Logo" class="h-10 w-10 mr-2">
        <a class="text-2xl font-playfair text-gray-800 tracking-wide" href="index.php">Cricket Club Management</a>
    </div>
    <div class="navbar-end">
        <div>
            <a href="user-signup.php"><i class="fa-solid fa-user-plus"></i></a>
        </div>
        <div>
            <a href="login.php"><i class="fa-solid fa-right-to-bracket ml-3"></i></a>

        </div>
        </button>
    </div>
</div>

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

</div>

</body>

</html>

<?php include('partials/footer.php'); ?>