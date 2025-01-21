# Cricket Club Management System

## Overview

The **Cricket Club Management System** is a comprehensive platform designed to streamline the management of cricket clubs in Bangladesh. It facilitates club administration, player statistics tracking, match scheduling, venue management, and historical record-keeping.

This system modernizes cricket club operations by replacing manual methods with a digital solution that is efficient, user-friendly, and reliable.


## Directory structure

```
CSE311-Lab_Project-Cricket_Club_Management-Slf
                                            └── README.md
                                            ├── connect.php
                                            ├── Admin/
                                            │   ├── admin-add-club-achievement.php
                                            │   ├── admin-add-club-captain.php
                                            │   ├── admin-add-club-coach.php
                                            │   ├── admin-add-player-statistics.php
                                            │   ├── admin-add-transfer.php
                                            │   ├── admin-display-club-achievement.php
                                            │   ├── admin-display-club-captain.php
                                            │   ├── admin-display-club-coach.php
                                            │   ├── admin-display-club.php
                                            │   ├── admin-display-management-committee.php
                                            │   ├── admin-display-match.php
                                            │   ├── admin-display-player-statistics.php
                                            │   ├── admin-display-player.php
                                            │   ├── admin-display-playing-style.php
                                            │   ├── admin-display-venue.php
                                            │   ├── delete-club-captain.php
                                            │   ├── delete-club-coach.php
                                            │   ├── delete-management-committee.php
                                            │   ├── delete-match.php
                                            │   ├── delete-player-statistics.php
                                            │   ├── delete-player.php
                                            │   ├── delete-venue.php
                                            │   ├── main.php
                                            │   ├── update-allrounder.php
                                            │   ├── update-batsman.php
                                            │   ├── update-bowler.php
                                            │   ├── update-club-captain.php
                                            │   ├── update-club-coach.php
                                            │   ├── update-club.php
                                            │   ├── update-management-committee.php
                                            │   ├── update-match.php
                                            │   ├── update-player-statistics.php
                                            │   ├── update-player.php
                                            │   ├── update-playing-style.php
                                            │   ├── update-venue.php
                                            │   ├── update-wicketkeeper.php
                                            │   └── partials/
                                            │       ├── footer.php
                                            │       ├── header-dark.php
                                            │       └── header.php
                                            ├── User-Site/
                                            │   ├── add-club.php
                                            │   ├── add-management-committee.php
                                            │   ├── add-match.php
                                            │   ├── add-player-statistics.php
                                            │   ├── add-player.php
                                            │   ├── add-venue.php
                                            │   ├── display-batsman.php
                                            │   ├── display-bowler.php
                                            │   ├── display-club-achievement.php
                                            │   ├── display-club-captain.php
                                            │   ├── display-club-coach.php
                                            │   ├── display-club.php
                                            │   ├── display-management-committee.php
                                            │   ├── display-match.php
                                            │   ├── display-player-statistics.php
                                            │   ├── display-player.php
                                            │   ├── display-venue.php
                                            │   ├── index.php
                                            │   ├── landing-page.php
                                            │   ├── login.php
                                            │   ├── user-signup.php
                                            │   └── partials/
                                            │       ├── footer.php
                                            │       └── header.php
                                            └── resources/

```

## Features

### Core Modules
1. **Admin Panel**:
   - Add, update, and delete club, player, and venue data.
   - Manage player transfers and match results.

2. **Club Management**:
   - Maintain club details, including history, contact information, and management committee records.
   - Assign captains and coaches with defined timelines.

3. **Match Module**:
   - Schedule matches with venue details.
   - Record match results and update player statistics.

4. **Player Statistics**:
   - Track player performance metrics (e.g., runs scored, wickets taken, catches).
   - Manage specific player roles such as batsman, bowler, wicketkeeper, and all-rounder.

5. **Achievements and History**:
   - Display milestones and achievements of cricket clubs.

6. **User Registration**:
   - Allow users to register and view club and player data with restricted access.

### Database Structure
The system is powered by a MySQL database, featuring tables such as:
- `admin`
- `user`
- `club` (with related tables for contact, captains, and coaches)
- `player` (categorized by roles like batsman, bowler, and all-rounder)
- `match` and `venue`
- `player_statistics`
- `club_achievements`

Detailed SQL scripts are provided in the repository to set up the database schema.

### Technology Stack
- **Frontend**: HTML, CSS, Tailwind CSS
- **Backend**: PHP
- **Database**: MySQL
- **Development Tools**: Visual Studio Code, Visual Paradigm (for ERD design)

## Installation and Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/Shawon00s/CSE311-Lab_Project-Cricket_Club_Management-Slf.git
   ```
2. Set up a local server using tools like XAMPP or WAMP.
3. Import the provided SQL scripts to create the database schema.
4. Configure the `config.php` file with your database credentials.
5. Launch the application in your local server environment.

## Usage

- Admins can manage clubs, players, and match schedules through the admin panel.
- Users can register to access club and player details.
- Detailed reports on matches and player performance are available in the dashboard.

## Contributors

- **Sudipto Roy** (ID: 2222756042)  
- **Aqib Ahmed** (ID: 2211335042)  

## Conclusion

This project provides a unified platform for managing cricket clubs in Bangladesh, offering tools to track players, matches, venues, and achievements efficiently. It supports the growth of cricket clubs while preserving their historical records and improving organizational management.

## License

This project is licensed under the [MIT License](LICENSE).

