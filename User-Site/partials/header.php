<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="navbar bg-white sticky top-0 z-50 shadow-lg">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-white rounded-box z-[1] mt-3 w-52 p-2 shadow-lg">
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
            <a class="text-2xl font-playfair text-gray-800 tracking-wide" href="landing-page.php">Cricket Club Management</a>
        </div>
        <div class="navbar-end">

        </div>
    </div>
</body>

</html>