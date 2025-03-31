GeoLocation Project
📝 Introduction
This project provides a GeoLocation service that retrieves location details based on the user's IP address. It displays the IP address-related data and location on a Google Map on the frontend. Users can input an address, submit it, and see the corresponding geographical data displayed on a map.

Features:
Users input an address in the input field.

After clicking the Submit button, the system fetches the corresponding IP address data.

Location data (longitude, latitude) and other address-related details are displayed on the Google Map.

The backend is built with Laravel to handle the logic and IP address lookups, while the frontend is built with Vue.js to provide a smooth user experience.

Backend Features:
IP Address Lookup:

The backend fetches data for a given IP address using a geo-location API.

Data Processing:

Processes and returns address-related data, such as latitude, longitude, and country information.

API Integration:

The backend communicates with external services to retrieve geolocation data based on the provided IP.

📥 Prerequisites:
Laravel (for backend)


Composer (for PHP dependencies)

💻 Installation & Setup:

Clone the Backend Repository:
bash
Copy
# Clone the backend repository
git clone https://github.com/your-username/geo-location-backend.git

# Navigate to the project directory
cd geo-location-backend
Install Backend Dependencies:
bash
Copy
# Install the backend PHP dependencies using Composer
composer install
Set Up Environment Variables:
bash
Copy
# Copy the example environment file
cp .env.example .env

# Generate the application key for Laravel
php artisan key:generate
Configure the Database:
Open the .env file and configure your database settings.

Run Migrations:
bash
Copy
# Run migrations to set up the database
php artisan migrate
Start the Backend Server:
bash
Copy
# Start the backend server
php artisan serve
The backend will now be running on http://localhost:8000.

📌 Technologies Used
Frontend: Vue.js

Backend: Laravel

Google Maps API: For displaying location on the map

IPINFO API : For IP address location lookup

