<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Rating System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .stars {
            display: inline-flex;
            gap: 5px;
            cursor: pointer;
        }
        .stars img {
            width: 50px;
            height: 50px;
            transition: transform 0.2s ease-in-out;
        }
        .stars img:hover,
        .stars img.selected {
            transform: scale(1.2);
        }
        #message {
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Rate Us</h1>
    <div class="stars" id="starContainer">
        <img src="images/star-empty.png" data-value="1" alt="1 Star">
        <img src="images/star-empty.png" data-value="2" alt="2 Stars">
        <img src="images/star-empty.png" data-value="3" alt="3 Stars">
        <img src="images/star-empty.png" data-value="4" alt="4 Stars">
        <img src="images/star-empty.png" data-value="5" alt="5 Stars">
    </div>
    <div id="message"></div>

    <script>
        const starContainer = document.getElementById('starContainer');
        const stars = starContainer.querySelectorAll('img');
        const message = document.getElementById('message');
        let selectedRating = 0;

        // Hover effect
        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                resetStars();
                highlightStars(star.dataset.value);
            });

            star.addEventListener('mouseout', resetStars);
        });

        // Select rating
        stars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.dataset.value;
                resetStars();
                highlightStars(selectedRating);
                star.classList.add('selected');
                submitRating(selectedRating);
            });
        });

        function resetStars() {
            stars.forEach(star => star.src = 'images/star-empty.png');
        }

        function highlightStars(rating) {
            for (let i = 0; i < rating; i++) {
                stars[i].src = 'images/star on single.jpg';
            }
        }

        async function submitRating(rating) {
            const response = await fetch('submit_rating.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ rating }),
            });
            const result = await response.json();
            message.textContent = result.message || 'Thank you for your feedback!';
        }
    </script>
</body>
</html>
