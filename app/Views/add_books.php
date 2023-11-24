<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h2 {
            text-align: center;
        }

        #addBookForm {
            width: 50%;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #3498db;
            /* Blue */
            color: #fff;
            /* White text */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h2>Add a Book</h2>
    <form id="addBookForm">
        <label for="title">Title:</label>
        <input type="text" id="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" required>

        <label for="price">Price:</label>
        <input type="text" id="price" required>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" required>

        <button type="button" onclick="addBook()">Add Book</button>
    </form>

    <script>
        const apiUrl = 'https://api.sheety.co/72fd33f2649a4fd0f5082c032f82dcc8/dbbookstore/dbbookstore';

        // Function to add a new book
        async function addBook() {
            const title = document.getElementById('title').value;
            const author = document.getElementById('author').value;
            const genre = document.getElementById('genre').value;
            const price = document.getElementById('price').value;
            const rating = document.getElementById('rating').value;

            console.log("Adding book:", {
                title,
                author,
                genre,
                price,
                rating
            });

            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    dbbookstore: {
                        title,
                        author,
                        genre,
                        price,
                        rating,
                    },
                }),
            });

            if (response.ok) {
                console.log("Book added successfully!");
                // Redirect back to the main page after adding the book
                window.location.href = '<?= base_url('./admin_books') ?>';
            } else {
                console.error('Failed to add book');
            }
        }
    </script>

</body>

</html>