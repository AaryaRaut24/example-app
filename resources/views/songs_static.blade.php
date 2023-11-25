<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-gap: 20px;
            padding: 20px;
        }

        aside {
            background-color: #f4f4f4;
            padding: 10px;
        }

        section {
            width: 100%;
        }

        section div {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
        }

        section div:nth-child(odd) {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Spotify Clone</h1>
        <p>"Where Melodies Unite: Explore, Discover, and Dive into the World of Music."</p>
    </header>

    <main>
        <aside>
            <h2>Saved Playlists</h2>
            <ul>
                <li>Chaleya (From "Jawan")</li>
                <li>Apna Bana Le</li>
                <li> Dil Jhoom</li>
                <li> Raataan Lambiyan</li>
                <li>Heeriye </li>
                <li>Tu hai Kahan</li>
                <li>Bawariya </li>
            </ul>
        </aside>

        <section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            <div>
                <div>1</div>
                <div>Tu Hai Kahan </div>
                <div>AUR</div>
                <div>AUR</div>
                <div>4:23</div>
            </div>
            <div>
                <div>2</div>
                <div>Song 2</div>
                <div>Artist 2</div>
                <div>Album 2</div>
                <div>4:15</div>
            </div>
           
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>