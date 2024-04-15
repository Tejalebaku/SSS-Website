<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgba(218, 218, 218, 0.15); /* DADADA with 15% opacity */
        }

        header {
            background-color: rgba(221, 154, 23, 1); /* Header background color */
            padding: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
            position: relative;
            text-align: center; /* Center the text */
        }

        .logo {
            position: absolute;
            top: 15px;
            left: 15px;
            max-width: 200px; /* Adjust the size as needed */
        }

        .header-text {
            font-size: 24px;
            font-weight: bold;
            font-family: 'Inter', sans-serif;
        }

        main {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Full viewport height */
        }

        .container {
            display: flex;
            justify-content: space between; /* Place containers side by side with space */
            align-items: flex-start; /* Align containers to the top */
            padding: 50px 30px; /* Adjust padding for better alignment */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            background-color: #ffffff; /* Container background color */
            border-radius: 10px; /* Rounded corners */
        }

        .square-container {
            display: flex;
            flex-direction: column;
            width: 400px;
            height: 400px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            border: 2px dashed rgba(69, 182, 254, 0.68);
            padding: 10px;
        }

        .square-frame {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
            border: 6px solid #ccc; /* Add gray border with 6px width */
        }

        .image-input {
            display: none;
        }

        .image-label {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background: url('placeholder-image.jpg') center center no-repeat;
            background-size: cover;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
        }

        .image-label:hover {
            opacity: 0.8;
        }

        button {
            background-color: #000; /* Black background */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .details {
            padding: 20px;
        }

        .contact-details {
            font-size: 18px;
            padding: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #category {
            width: 100%; /* Set the width to 100% to match other form inputs */
        }
    </style>
    <title>My Webpage</title>
</head>
<body>
    <header>
        <img src="SSS.png" alt="Logo" class="logo">
        <div class="header-text">ADD SERVICES</div>
    </header>
    <main>
        <form action="addservicebk.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="square-container">
                    <div class="square-frame">
                    <input type="file" name="image" placeholder="image" >
                         <!-- <input type="file" name="image_name"  " class="image-input" onchange="displayImage(this, 'frame')">
                        <label for="image" class="image-label" id="frame"></label>  -->
                    </div>
                    <div class="rectangle-container">
                    <input type="text" name="image_name" placeholder="image_name" required>
                    </div>
                </div>

                <div class="rectangle-container">
                    <div class="details">
                        <h2>Service Details</h2>
                        <input class="form-input" type="text" placeholder="Main Service Name" name="service_details">
                        <input class="form-input" type="text" placeholder="sub_service " name="sub_service">
                        <input class="form-input" type="text" name="category" placeholder="category">
                        <!-- <label for="category">Category:</label>
                        <select class="form-input" id="category" name="category">
                            <option value="Laptops">Select Category</option>
                            <option value="Home Services">Home Services</option>
                            <option value="Electric Services">Electric Services</option>
                            <option value="Automobile Services">Automobile Services</option>
                            <option value="Plumber Services">Plumber Services</option>
                            <option value="Laptop Technician">Laptop Technician</option>
                        </select> -->
                        <input class="form-input" type="text" placeholder="Experience" name="experience">
                        <input class="form-input" type="text" placeholder="Price" name="price">
                        <input class="form-input" type="text" placeholder="Description" name="description">
                    </div>
                    <div class="contact_details">
                        <h2>Contact Details</h2>
                        <input class="form-input" type="text" placeholder="Name" name="name">
                        <input class="form-input" type="text" placeholder="Email" name="email">
                        <input class="form-input" type="text" placeholder="Phone Number" name="phone_number">
                        <input class="form-input" type="text" placeholder="Contact Way" name="contact_way">
                        <input class="form-input" type="text" placeholder="Location" name="location">
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" id="submit-button">Submit</button>
            </div>
        </form>
    </main>
    <script>
        // Function to display the selected image in the frame
        function displayImage(input, frameId) {
            const frame = document.getElementById(frameId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const image = document.createElement("img");
                    image.src = e.target.result;
                    image.style.width = "100%"; // Set the image width to 100% of the frame
                    image.style.height = "100%"; // Set the image height to 100% of the frame
                    image.alt = ""; // Remove the alt attribute
                    frame.textContent = ""; // Clear any existing content (including "Image" text)
                    frame.appendChild(image);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
