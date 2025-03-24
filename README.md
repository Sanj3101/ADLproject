# Ghibliesque

## Overview
Ghibliesque is a web application that allows users to browse through all Studio Ghibli films, view detailed information about each film, rate and review them, and explore top-rated lists and recommendations based on user ratings.

## Features
- **Browse Films**: Explore all Studio Ghibli films with details such as synopsis, director, release year, and rating.
- **User Ratings & Reviews**: Users can rate movies and leave reviews.
- **Overall Ratings**: View aggregated ratings based on user feedback.
- **Recommendations**: Get film recommendations based on user ratings and reviews.
- **Top-Rated Lists**: Discover the highest-rated Studio Ghibli films as per user reviews.

## Tech Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: SQL

## Installation & Setup
1. Clone the repository:
   ```bash
   https://github.com/prishi003/ADLproject.git
   ```
2. Download the provided SQL file and import it into MySQL using phpMyAdmin:
   - Open XAMPP and start **Apache** and **MySQL**.
   - Go to `http://localhost/phpmyadmin/`.
   - Create a new database (e.g., `mpviedb`).
   - Import the SQL file (`mpviedb.sql`) into the created database.
3. Move the project folder to the `htdocs` directory inside the XAMPP installation.
4. Open the browser and visit:
   ```
   http://localhost/directory-name/index.php
   ```

## Usage
- Visit the homepage to browse films.
- Click on a film to view details, ratings, and reviews.
- Sign in to leave your own rating and review.
- Check the "Top Rated" section for highly-rated films.
- Get recommendations based on your watched and rated movies.

## Future Enhancements
- **User Profiles**: Track personal reviews and rated films.
- **Watchlist Feature**: Save films for later viewing.
- **Dark Mode**: UI customization for a better experience.

## Contributing
Contributions are welcome! Feel free to fork this repository, create a new branch, and submit a pull request.

