<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
    <div class="navbar bg-[#38bdf8]">
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
                    class="menu menu-sm dropdown-content rounded-box z-[1] mt-3 w-52 p-2 shadow bg-gradient-to-r from-indigo-400 to-cyan-400 text-black">
                    <li><a class="hover:bg-gray-200" href="admin-display-club.php">Clubs</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-player.php">Players</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-player-statistics.php">Player Statistics</a>
                    </li>
                    <li><a class="hover:bg-gray-200" href="admin-display-club-captain.php">Club Captains</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-club-coach.php">Club Coaches</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-match.php">Match</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-venue.php">Venue</a></li>
                    <li><a class="hover:bg-gray-200" href="admin-display-club-achievement.php">Club Achievements</a>
                    <li><a class="hover:bg-gray-200" href="admin-display-playing-style.php">Playing Style</a>
                    <li><a class="hover:bg-gray-200" href="admin-display-management-committee.php">Management
                            Committee</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a class="text-2xl font-bold" href="main.php">Admin Panel</a>
        </div>
        <div class="navbar-end">
            <div class="flex justify-start">
                <ul class="menu menu-horizontal px-1 ">
                    <li>
                        <details>
                            <summary><i class="fa-solid fa-gear"></i></summary>
                            <ul class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-xl bg-white shadow-lg ring-1 ring-black/5 focus:outline-none bg-gradient-to-r from-indigo-400 to-cyan-400 text-black"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <li><a class="hover:bg-gray-200" href="admin-add-transfer.php">Add Transfer</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-captain.php">Add Captain</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-coach.php">Add Coach</a></li>
                                <li><a class="hover:bg-gray-200" href="admin-add-club-achievement.php">Add Club
                                        Achievement</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

</html>