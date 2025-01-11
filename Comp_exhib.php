<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\smthg2.css">
    <link rel="stylesheet" href="css\main.css">
    <title>Exhib_main</title>
</head>
<body>
<div class="heading">
    <h1>COMPUTER PROJECT <br> 
        EXHIBITION 2025</h1>
</div>
    <div class="dashboard">
        <button id="toggleButton">☰</button>
        <a href="index.php"><button>HOME</button></a>
        <a href="UI.html"><button>CHAT BOT</button></a>
        <a href="patreon2.html"><button>OUR PATREONS</button></a>
        <a href="tictactoepvp.php"><button>TICTACTOE PVP</button></a>
        <a href="tictactoepve.php"><button>TICTACTOE PVE</button></a>
        <a href="rate_us.php"><button>RATE US</button></a>
        <button id="musicButton">Music On</button>
        <script>
            document.getElementById('toggleButton').addEventListener('click', function() {
                var dashboard = document.querySelector('.dashboard');
                if (dashboard.style.transform === 'translateY(-50%) translateX(-100%)') {
                    dashboard.style.transform = 'translateY(-50%)';
                } else {
                    dashboard.style.transform = 'translateY(-50%) translateX(-100%)';
                }
                
            });
            
        </script>
        </div>
        <div id="popup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:80%; height:100%; background-color:white; border:2px solid #4CAF50; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1001;">
            <iframe src="UI.html" style="width:100%; height:100%; border:none;"></iframe>
            <button onclick="document.getElementById('popup').style.display='none'" style="position:absolute; top:10px; right:20px; background-color: rgba(0, 0, 0, 0.5); color:white; border:none; padding:10px; cursor:pointer;">X</button>
        </div>
    
        <script>
            document.querySelector('.dashboard a[href="UI.html"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popup').style.display = 'block';
            });



        </script>

        <div id="popup2" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:80%; height:80%; background-color:white; border:2px solid #4CAF50; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1001;">
            <iframe src="rate_us.php" style="width:100%; height:100%; border:none;"></iframe>
            <button onclick="document.getElementById('popup2').style.display='none'" style="position:absolute; top:10px; right:20px; background-color: rgba(255, 255, 255, 0.2); color:black; border:none; padding:10px; cursor:pointer;">X</button>
        </div>
    
        <script>
            document.querySelector('.dashboard a[href="rate_us.php"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popup2').style.display = 'block';
            });
        </script>

<div id="popup3" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:100%; height:100%; background-color:white; border:2px solid #4CAF50; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1001;">
            <iframe src="patreon2.html" style="width:100%; height:100%; border:none;"></iframe>
            <button onclick="document.getElementById('popup3').style.display='none'" style="position:absolute; top:10px; right:20px; background-color: rgba(255, 255, 255, 0.2); color:white; border:none; padding:10px; cursor:pointer;">X</button>
        </div>
    
        <script>
            document.querySelector('.dashboard a[href="patreon2.html"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popup3').style.display = 'block';
            });
        </script>

<div id="popup4" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:80%; height:80%; background-color:white; border:2px solid #4CAF50; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1001;">
            <iframe src="tictactoepvp.html" style="width:100%; height:100%; border:none;"></iframe>
            <button onclick="document.getElementById('popup4').style.display='none'" style="position:absolute; top:10px; right:20px; background-color: rgba(255, 255, 255, 0.2); color:white; border:none; padding:10px; cursor:pointer;">X</button>
        </div>
    
        <script>
            document.querySelector('.dashboard a[href="tictactoepvp.html"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popup4').style.display = 'block';
            });
        </script>

<div id="popup5" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:80%; height:80%; background-color:white; border:2px solid #4CAF50; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1001;">
            <iframe src="tictactoepve.html" style="width:100%; height:100%; border:none;"></iframe>
            <button onclick="document.getElementById('popup5').style.display='none'" style="position:absolute; top:10px; right:20px; background-color: rgba(255, 255, 255, 0.2); color:white; border:none; padding:10px; cursor:pointer;">X</button>
        </div>
    
        <script>
            document.querySelector('.dashboard a[href="tictactoepve.html"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popup5').style.display = 'block';
            });
        </script>

        <div class="music">
        <audio id="musicPlayer" autoplay></audio>

    <script>
        const musicButton = document.getElementById('musicButton');
        const musicPlayer = document.getElementById('musicPlayer');
        const musicTracks = [
            'music/1-03. Subwoofer Lullaby.mp3',
            'music/1-05. Living Mice.mp3',
            'music/1-06. Moog City.mp3',
            'music/1-07. Haggstrom.mp3',
            'music/1-08. Minecraft.mp3',
            'music/1-11. Mice on Venus.mp3',
            'music/1-12. Dry Hands.mp3',
            'music/1-13. Wet Hands.mp3',
            'music/1-14. Clark.mp3',
            'music/1-18. Sweden.mp3',
            'music/Sadness and Sorrow.mp3'

        ];


        function playRandomAudio() {
            const randomIndex = Math.floor(Math.random() * musicTracks.length);
            musicPlayer.src = musicTracks[randomIndex];
            musicPlayer.play();
        }

        function toggleMusic() {
            if (musicPlayer.paused) {
                musicPlayer.play();
                musicButton.textContent = 'Music Off';
            } else {
                musicPlayer.pause();
                musicButton.textContent = 'Music On';
            }
        }

        musicPlayer.addEventListener('ended', playRandomAudio)
        musicButton.addEventListener('click', toggleMusic);

        // Load a random track and play it as soon as the page loads
        window.onload = () => {
            playRandomAudio();
            musicButton.textContent = 'Music Off';
            
        };
        </script>
    </div>
    <div class="txt">
    <div class="new">
        <p><h2>Welcome to the World of Innovation and Creativity!</h2></p>
    </div>
        <div class="para_1">
        <p>Our Project is an AI powered conversation assistant to make <br> 
            interactions seamless, engaging and informative.</p>
    </div>
    <div class="para_2">
        <h3>This ChatBot Can</h3>
        <ul>
            <li><p>Understand and respond like human with accurate and context <br>
                aware replies</p></li>
            <li><p>It assists and solves any type of quantative problem or queries<br>
                Converses adaptive replies to user's need.</p></li>
        </ul>
    </div>
    <div class="para_3">
        <h3>Features</h3>
        <ul>
            <li><p>It can solve any type of mathematical problems</p></li>
            <li><p>It can provide information about any topic</p></li>
        </ul>
    </div>
    <div class="para_4">
        <h3>How to use</h3>
        <ul>
            <li><p>Just type your query in the chat box and press enter</p></li>
            <li><p>It will provide you with the answer</p></li>
        </ul>
    </div>
    <div class="para_5">
        <h3>Future Scope</h3>
        <ul>
            <li><p>It can be used in various fields like education, healthcare, <br>
                customer service, etc.</p></li>
            <li><p>It can be used to provide information to the users</p></li>
        </ul>
    </div>
    <div class="para_6">
        <h3>Conclusion</h3>
        <p>Our project is a step towards the future of AI powered <br>
            conversation assistants. It can be used in various fields <br>
            to provide information and solve queries.</p>
    </div>
    <div class="para_7">
        <h2>Let's Chat, Connect and Explore</h2>
    </div>
    <div class="para_8">
        <h2>Thank You!</h2>
    </div>
</div>

    
</body>
</html>