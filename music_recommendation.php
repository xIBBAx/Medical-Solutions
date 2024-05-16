<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Music Recommendation System</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
.form-container {
    text-align: center; /* Center-align the form elements */
    margin-bottom: 20px; /* Add space below the form container */
}

/* Adjustments for input fields and button */
.form-container label,
.form-container input,
.form-container button {
    display: block; /* Treat each element as a block */
    font-size: 1.2rem;
    margin: 10px auto; /* Center each element */
}

/* Adjustments for input fields */
.form-container input {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    
}
/* Adjust input field width in the form container */
.form-container input[type="text"] {
    width: 200px; /* Set the desired width for the input fields */
    padding: 5px; /* Optional: Add padding for spacing inside the input fields */
    margin: 10px auto; /* Center the input fields and add spacing around them */
    border: 1px solid #ccc; /* Optional: Add a border */
    border-radius: 4px; /* Optional: Add a border radius for rounded corners */
    display: block; /* Treat input fields as block elements */
}

        /* General Styling */
        body {
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('assets/img/stacked-zen-stones-sand-background-art-balance-concept.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #f2f2f2;
            text-align: center;
            padding: 20px;
            opacity: 0; /* Start with zero opacity for fade-in effect */
            transition: opacity 1.5s ease-in-out; /* Transition for smooth fade-in and fade-out */
        }

        body.fade-in {
            opacity: 1; /* Full opacity when faded in */
        }

        h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    color: #f2f2f2;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    background: linear-gradient(to bottom right, gold, white);
    padding: 10px;
    border-radius: 100px;
    
    /* Add border with a gradient color */
    border: 2px solid gold; /* Use gold to match the gradient color */
}


        label, input, button {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        label {
    font-size: 1.9rem;
    color: #28282B;
    font-weight: bold;
    margin-bottom: 10px;

    /* Add gold outline and white glossy shadow */
    -webkit-text-stroke: 0.1px silver; /* Gold outline */
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black glossy shadow */
}

        #cdContainer {
            width: 150px;
            height: 150px;
            margin: 20px auto;
            position: relative;
        }

        #cdImage {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            animation: spin 2s linear infinite;
            animation-play-state: paused;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Styling for the timeline */
        input[type="range"] {
            width: 300px;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Style play, pause, and stop buttons */
        button {
            font-size: 1.1rem;
            padding: 8px 16px;
            background-color: #FFD700; /* Gold color */
            color: #f2f2f2;
            border: 1px solid #FFA500; /* Orange border */
            border-radius: 5px;
            cursor: pointer;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            outline: none;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            background-color: #FFA500; /* Orange color */
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Album container styling */
        .albumContainer {
            margin: 20px auto;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        /* Album images styling */
        .albumContainer img {
            width: 150px;
            height: 150px;
            margin: 10px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .albumContainer img:hover {
            transform: scale(1.1);
        }

        /* Track container styling */
        .trackContainer {
            margin-top: 20px;
            text-align: left;
        }

        .trackTitle {
            font-weight: 600;
            cursor: pointer;
            color: #f2f2f2;
        }

        /* Adjustments for small screens */
        @media (max-width: 768px) {
            input[type="range"] {
                width: 100%;
            }

            button, input {
                font-size: 1rem;
            }
        }
        input[type="text"] {
            font-size: 1rem;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
       /* Container for the logo */
#logoContainer {
    margin-bottom: 20px; /* Adjust spacing below the logo */
    text-align: center; /* Center the logo on the page */
}

/* Styling for the logo image */
/* Styling for the logo image */
#logo {
    width: 350px; /* Set the desired width for the logo */
    height: auto; /* Maintain aspect ratio automatically */
    text-shadow: 100px 100px 100px rgba(0, 0, 0, 0.4); /* Add text shadow effect */
}


        /* Add this CSS class for the expanded state of the images */
.expanded {
    width: 300px; /* Set the width of the expanded image */
    height: auto; /* Maintain aspect ratio */
    z-index: 1000; /* Ensure the image is on top of other elements */
}
div#recommendations {
    color: black;
}

    
    </style>
</head>

<body onload="fadeInBody()">
<div id="logoContainer">
    <a href="music_recommendation.php">
        <img id="logo" src="assets/img/sound it out.png" alt="SounditOUT Logo">
    </a>
</div>

<h1>Suggestions from SounditOUT</h1>
<div class="form-container">
    <label for="patientId">Enter your Doctor ID:</label>
    <input type="text" id="patientId">
    <br>
    <label for="icnumber">Enter your IC Number:</label>
    <input type="text" id="icnumber">
    <br>
    <button onclick="recommendMusic()">Get Recommendations</button>
</div>




    <div id="recommendations"></div>
    <div id="cdContainer">
    <!-- The anchor element wraps around the image -->
    <a href="https://open.spotify.com/album/38Ct3Tb4yHG8UjIyi1wdwG" target="_blank">
        <img id="cdImage" src="assets/img/pngegg.png" alt="CD Image">
    </a>
</div>

    <script>
        // Sample data: Music recommendations for each patient ID
        const musicRecommendations = {
            'ibrahim': {
                'ONE OF MY FINEST!': {
                    'poster': 'assets/img/ONE OF MY FINEST EP.jpeg',
                    'backCover': 'assets/img/OOMF EP BACK COVER.png',
                    'tracks': [
                        {
                            'title': 'OOMF',
                            'path': 'assets/img/OOMF.mp3'
                        },
                        {
                            'title': 'Ghost Orchid',
                            'path': 'assets/img/ghost orchid.mp3'
                        },
                        {
                            'title': 'Family hai Fake',
                            'path': 'assets/img/family hai fake.mp3'
                        },
                        {
                            'title': 'WAQT THA',
                            'path': 'assets/img/waqt tha.mp3'
                        },
                        {
                            'title': 'CIGAR',
                            'path': 'assets/img/cigar.mp3'
                        }
                    ]
                }
            },
            'ayush': {
                'Last HOPE': {
                    'poster': 'assets/img/last hope.jpg',
                    'backCover': 'assets/img/last hope 2.0.png',
                    'tracks': [
                        {
                            'title': 'Birds Singing Peace Meditation',
                            'path': 'assets/img/2 Minutes of Calm  Nature Sounds 2 Mins  RelaxRelaxation  Birds Singing PeaceMeditation.mp3'
                        },
                        {
                            'title': 'Heart of the Musician',
                            'path': 'assets/img/Can You Hear The Music.mp3'
                        },
                        {
                            'title': 'Interstellar',
                            'path': 'assets/img/Interstellar Official Soundtrack  Cornfield Chase  Hans Zimmer  WaterTower.mp3'
                        },
                        {
                            'title': 'Meditation',
                            'path': 'assets/img/A 2-MINUTE MEDITATION with the sound of the jungle and forest.mp3'
                        },
                        {
                            'title': 'Sunshine',
                            'path': 'assets/img/Sunshine cute baby remix.mp3'
                        }
                    ]
                }
            },
            'mehul': {
                'Viruses': {
                    'poster': 'assets/img/viruses.jpg',
                    'backCover': 'assets/img/viruses back cover.jpg',
                    'tracks': [
                        {
                            'title': 'LOCK-DOWN',
                            'path': 'assets/img/Chill Piano Music LoFi style.mp3'
                        },
                        {
                            'title': 'OMEN',
                            'path': 'assets/img/THE BATMAN Theme  Michael Giacchino (Main Trailer Music).mp3'
                        },
                        {
                            'title': 'Hear Out',
                            'path': 'assets/img/2 Minute Timer - Relaxing Music on the Beach.mp3'
                        }
                    ]
                }
            },
            'sahil': {
                'Green Lines - Medical Solutions': {
                    'poster': 'assets/img/green lines.jpg',
                    'backCover': 'assets/img/green lines back cover.jpg',
                    'tracks': [
                        {
                            'title': 'Green Meditation',
                            'path': 'assets/img/2 minutes of relaxing music,2 minute meditation music,2 minutes meditation,music 2 minute.mp3'
                        },
                        {
                            'title': "God's Grace",
                            'path': 'assets/img/2 minutes with God  Inner peace  Piano prayer music.mp3'
                        },
                        {
                            'title': 'Inner Truth',
                            'path': 'assets/img/Amazing Grace.mp3'
                        },
                        {
                            'title': 'WHO AM I? (Bonus Therapeutic)',
                            'path': 'assets/img/animal.mp3'
                        }
                    ]
                }
            },
            'rahul': {
                'Frozen': {
                    'poster': 'assets/img/frozen.jpg',
                    'backCover': 'assets/img/frozen back cover.jpg',
                    'tracks': [
                        {
                            'title': 'Chill',
                            'path': 'assets/img/2 Minute Timer Relaxing Music Lofi Fish Background.mp3'
                        },
                        {
                            'title': 'Feathers',
                            'path': 'assets/img/Autumn 2 Minute Fall Timer with Calming Music  and Alarm at End.mp3'
                        },
                        {
                            'title': 'FRZ',
                            'path': 'assets/img/Short Meditation Music - 3 Minute Relaxation, Calming.mp3'
                        }
                    ]
                }
            }
        };
 // Function to apply fade-in effect when the page loads
 function fadeInBody() {
            document.body.classList.add('fade-in');
        }
// Function to recommend music
function recommendMusic() {
    // Get the values of patient ID and IC number from the input fields
    const patientId = document.getElementById('patientId').value.trim();
    const icNumber = document.getElementById('icnumber').value.trim();

    // Check if either patient ID or IC number is empty
    if (patientId === '' || icNumber === '') {
        // Display an alert if either field is empty
        alert('Please enter both your Patient ID and IC Number.');
        return; // Exit the function if either field is empty
    }

    // Get the recommendations for the patient ID
    const recommendations = musicRecommendations[patientId];

    // Get the recommendations div element
    const recommendationsDiv = document.getElementById('recommendations');

    // Clear any previous recommendations
    recommendationsDiv.innerHTML = '';

    if (recommendations) {
        // Display the album titles, posters, back covers, and tracks
        for (const album in recommendations) {
            const albumInfo = recommendations[album];

            // Create a container for the album
            const albumContainer = document.createElement('div');
            albumContainer.className = 'albumContainer';

            // Create an image element for the album poster
            const albumPoster = document.createElement('img');
            albumPoster.src = albumInfo.poster;
            albumPoster.alt = album + ' poster';

            // Create an image element for the album back cover
            const backCover = document.createElement('img');
            backCover.src = albumInfo.backCover;
            backCover.alt = album + ' back cover';

            // Create an album title element
            const albumTitle = document.createElement('h2');
            albumTitle.textContent = album;

            // Append the poster, back cover, and title to the album container
            albumContainer.appendChild(albumPoster);
            albumContainer.appendChild(backCover);
            albumContainer.appendChild(albumTitle);

            // Get the tracks for the album
            const tracks = albumInfo.tracks;

            // Display the tracks and their controls
            tracks.forEach(track => {
                // Create a container for the track
                const trackContainer = document.createElement('div');
                trackContainer.className = 'trackContainer';

                // Create a clickable element for the track title
                const trackTitle = document.createElement('p');
                trackTitle.className = 'trackTitle';
                trackTitle.textContent = track.title;

                // Create an audio element
                const audioElement = document.createElement('audio');
                audioElement.src = track.path; // Use the provided path for the audio file
                audioElement.id = `audio-${patientId}-${album}-${track.title}`;

                // Create play, pause, and stop buttons with Font Awesome icons
                const playButton = document.createElement('button');
                playButton.innerHTML = '<i class="fa fa-play"></i>';
                playButton.addEventListener('click', function() {
                    // Pause any other playing audio
                    document.querySelectorAll('audio').forEach(audio => {
                        if (!audio.paused) {
                            audio.pause();
                            audio.currentTime = 0;
                        }
                    });

                    // Play the current audio
                    audioElement.play();
                    startCDAnimation();
                });

                const pauseButton = document.createElement('button');
                pauseButton.innerHTML = '<i class="fa fa-pause"></i>';
                pauseButton.addEventListener('click', function() {
                    audioElement.pause();
                    stopCDAnimation();
                });

                const stopButton = document.createElement('button');
                stopButton.innerHTML = '<i class="fa fa-stop"></i>';
                stopButton.addEventListener('click', function() {
                    audioElement.pause();
                    audioElement.currentTime = 0;
                    stopCDAnimation();
                });

                // Create a timeline slider for the track
                const timelineSlider = document.createElement('input');
                timelineSlider.type = 'range';
                timelineSlider.min = 0;
                timelineSlider.max = 0; // Initially set to 0; will be updated later
                timelineSlider.value = 0; // Initial value
                timelineSlider.step = 0.1;
                timelineSlider.style.width = '200px';

                // Update the timeline slider when audio duration changes
                audioElement.addEventListener('loadedmetadata', function() {
                    timelineSlider.max = audioElement.duration;
                });

                // Update the audio current time when timeline slider changes
                timelineSlider.addEventListener('input', function() {
                    audioElement.currentTime = timelineSlider.value;
                });

                // Update the timeline slider value based on the audio's current time
                audioElement.addEventListener('timeupdate', function() {
                    timelineSlider.value = audioElement.currentTime;
                });

                // Add a download button
                const downloadButton = document.createElement('a');
                downloadButton.innerHTML = '<i class="fa fa-download"></i>'; // Use an icon for the button
                downloadButton.href = track.path;
                downloadButton.setAttribute('download', track.title);
                downloadButton.style.marginLeft = '10px';
                downloadButton.style.color = '#FFD700'; // Set the color to golden

                // Add hover effect (optional)
                downloadButton.onmouseover = function() {
                    downloadButton.style.color = '#FFAA00'; // Darker shade of gold on hover
                };

                downloadButton.onmouseout = function() {
                    downloadButton.style.color = '#FFD700'; // Reset color back to golden
                };

                // Create a share button
                const shareButton = document.createElement('button');
                shareButton.innerHTML = '<i class="fas fa-share"></i>'; // Use the share icon from Font Awesome
                shareButton.style.marginLeft = '10px';

                // Add click event listener to handle sharing
                shareButton.addEventListener('click', function() {
                    // Use the navigator.share API if supported by the browser
                    if (navigator.share) {
                        navigator.share({
                            title: track.title,
                            text: `Check out this track: ${track.title}`,
                            url: track.path // Share the track URL
                        }).catch((error) => {
                            console.error('Error sharing:', error);
                        });
                    } else {
                        // Fallback: You can show the track URL to the user for manual sharing
                        alert(`Share this link: ${track.path}`);
                    }
                });

                // Key to use in localStorage to save favorites
                const FAVORITES_KEY = 'userFavorites';

                // Load favorites from localStorage
                function loadFavorites() {
                    const favoritesJson = localStorage.getItem(FAVORITES_KEY);
                    if (favoritesJson) {
                        return JSON.parse(favoritesJson);
                    }
                    return [];
                }

                // Save favorites to localStorage
                function saveFavorites(favorites) {
                    const favoritesJson = JSON.stringify(favorites);
                    localStorage.setItem(FAVORITES_KEY, favoritesJson);
                }

                // Create a favorite button
                const favoriteButton = document.createElement('button');
                favoriteButton.innerHTML = '<i class="fa fa-heart-o"></i>';

                // Load the current favorites from localStorage
                const favorites = loadFavorites();

                // Check if the current track is favorited
                const isFavorited = favorites.some(favorite => favorite.track === track.title && favorite.album === album);
                if (isFavorited) {
                    // If favorited, set the icon to filled heart and color to red
                    favoriteButton.innerHTML = '<i class="fa fa-heart"></i>';
                    favoriteButton.style.color = 'red';
                }

                // Add a click event listener to handle favoriting
                favoriteButton.addEventListener('click', function() {
                    // Toggle the favorite status of the track
                    favoriteButton.classList.toggle('favorited');

                    if (favoriteButton.classList.contains('favorited')) {
                        // Favorited: Use filled heart icon and set color to red
                        favoriteButton.innerHTML = '<i class="fa fa-heart"></i>';
                        favoriteButton.style.color = 'red';

                        // Add the track to favorites
                        favorites.push({ album, track: track.title });
                    } else {
                        // Not favorited: Use outlined heart icon and reset color
                        favoriteButton.innerHTML = '<i class="fa fa-heart-o"></i>';
                        favoriteButton.style.color = '';

                        // Remove the track from favorites
                        const index = favorites.findIndex(favorite => favorite.track === track.title && favorite.album === album);
                        if (index !== -1) {
                            favorites.splice(index, 1);
                        }
                    }

                    // Save the updated favorites to localStorage
                    saveFavorites(favorites);
                });

                // Append the track title, audio element, play, pause, stop buttons, timeline slider, download, share, and favorite buttons to the track container
                trackContainer.appendChild(trackTitle);
                trackContainer.appendChild(audioElement);
                trackContainer.appendChild(playButton);
                trackContainer.appendChild(pauseButton);
                trackContainer.appendChild(stopButton);
                trackContainer.appendChild(timelineSlider);
                trackContainer.appendChild(downloadButton);
                trackContainer.appendChild(shareButton);
                trackContainer.appendChild(favoriteButton);

                // Append the track container to the album container
                albumContainer.appendChild(trackContainer);
            });

            // Append the album container to the recommendations div
            recommendationsDiv.appendChild(albumContainer);

            // Add click event listener to expand albumPoster and backCover
            albumPoster.addEventListener('click', function() {
                albumPoster.classList.toggle('expanded');
            });

            backCover.addEventListener('click', function() {
                backCover.classList.toggle('expanded');
            });
        }
    } else {
        // Display a message if no recommendations found for this patient ID
        recommendationsDiv.textContent = 'No recommendations found for this patient ID.';
    }
}

// Function to start the CD animation
function startCDAnimation() {
    document.getElementById('cdImage').style.animationPlayState = 'running';
}

// Function to stop the CD animation
function stopCDAnimation() {
    document.getElementById('cdImage').style.animationPlayState = 'paused';
}

</script>
</body>

</html>
