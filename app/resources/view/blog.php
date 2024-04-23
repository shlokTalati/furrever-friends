    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        nav ul li a.active {
            font-weight: bold;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        article {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .post h3 {
            margin-bottom: 10px;
        }

        .read-more {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
        }

        .read-more:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        /* Form styles */
        form {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
        <h1>Pet Adoption Blog</h1>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Adoption Stories</a></li>
                <li><a href="#">Educational Content</a></li>
            </ul>
        </nav>
    <main>
        <section id="featured-post">
            <h2>Featured Adoption Story</h2>
            <article>
                <h3>Meet Bella: From Shelter to Forever Home</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                <a href="#" class="read-more">Read More</a>
            </article>
        </section>
        <section id="latest-posts">
            <h2>Latest Posts</h2>
            <div class="post">
                <h3>Helping Hands: Volunteer Opportunities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="post">
                <h3>The Importance of Spaying and Neutering</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </section>
        <!-- Form for adding new stories -->
        <section id="submit-story">
            <h2>Share Your Adoption Story</h2>
            <form id="story-form">
                <div>
                    <label for="story-title">Title:</label>
                    <input type="text" id="story-title" name="story-title" required>
                </div>
                <div>
                    <label for="story-content">Your Story:</label>
                    <textarea id="story-content" name="story-content" rows="6" required></textarea>
                </div>
                <div>
                    <label for="author-name">Your Name:</label>
                    <input type="text" id="author-name" name="author-name" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

