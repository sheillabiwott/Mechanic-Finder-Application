# Mechanic Finder Application

The Mechanic Finder Application is a web-based platform designed to assist individuals who encounter car breakdowns in unfamiliar locations. With this application, users can easily search for mechanics in their vicinity, view their contact information, and even provide feedback on their service experience.

## Features

- **Mechanic Search:** Users can search for mechanics based on their current location or a specified area.
- **Mechanic Details:** Detailed information about each mechanic, including contact details, location, and services offered.
- **Feedback System:** Users can provide feedback on their experience with a particular mechanic, helping others make informed decisions.
- **Responsive Design:** The application is optimized for use on various devices, including desktops, tablets, and smartphones.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Setup Instructions

1. **Clone the Repository:** Clone this repository to your local machine using the following command:
    ```bash
    git clone https://github.com/yourusername/mechanic-finder.git
    ```

2. **Database Setup:** Import the provided SQL dump (`mechanic_finder.sql`) into your MySQL database to create the necessary tables and populate initial data.

3. **Configuration:** Update the database connection settings in the `config.php` file located in the `includes` directory to match your MySQL database credentials.

4. **Web Server:** Deploy the application on a web server such as Apache or Nginx.

5. **Access:** Access the application through a web browser by navigating to its URL.

## Usage

1. **Search for Mechanics:** Enter your location or specify an area to search for nearby mechanics.

2. **View Details:** Click on a mechanic's listing to view their contact information, location on a map, and the services they offer.

3. **Provide Feedback:** After receiving service from a mechanic, you can provide feedback through the application to help others in the community.
