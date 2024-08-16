# Blood Alcohol Calculator

## Overview
The Blood Alcohol Calculator is a web application designed to estimate a person's Blood Alcohol Concentration (BAC) based on their alcohol consumption, weight, gender, and the time elapsed since drinking. This project requires students to complete the backend functionality using PHP.

## Features
- Calculate BAC based on user inputs.
- Display the estimated BAC and whether it exceeds the legal limit for driving.
- Provide a user-friendly form for input.

## Form Fields
The application includes the following input fields:
1. **Weight**: The weight of the user in kilograms or pounds.
2. **Weight Unit**: The unit for weight measurement (Kilograms or Pounds).
3. **Gender**: The gender of the user (Male or Female).
4. **Number of Drinks**: The total number of standard drinks consumed.
5. **Alcohol Content per Drink**: The amount of alcohol in grams per drink.
6. **Time Elapsed**: The time since the user started drinking (in hours).

## BAC Calculation Formula
The BAC is calculated using the Widmark formula:

BAC = (Alcohol Consumed (grams) * 5.14) / (Weight (lbs) * Gender Constant) - 0.015 * Time Elapsed (hours)
Where:
- **Alcohol Consumed** is the total amount of alcohol consumed in grams.
- **Gender Constant** is 0.73 for males and 0.66 for females.



## Legal BAC Limit
- The legal BAC limit for driving is **0.08%**. If the calculated BAC exceeds this limit, it is illegal to drive in most jurisdictions.

## HTML/CSS Files
- **HTML Form**: The provided HTML form collects user input.
- **CSS Styling**: Basic CSS is provided to style the form and improve the user interface.

## PHP Development Tasks
Students are required to:
1. **Process Form Data**: Implement PHP code to handle form submissions.
2. **Calculate BAC**: Use the provided formula to calculate BAC based on user input.
3. **Display Results**: Show the calculated BAC and indicate whether it is above or below the legal limit.
4. **Handle Edge Cases**: Validate input data and handle any potential errors or invalid inputs.

## Setup Instructions
1. **Save HTML and CSS Files**: Ensure the provided HTML and CSS files are saved in the appropriate directories.
2. **Create PHP File**: Develop a PHP script (e.g., `calculate_bac.php`) to process the form data and perform calculations.
3. **Run the Application**: Set up a local development environment to test the application.