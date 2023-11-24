<!-- edit_books.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Book</title>
  <!-- Tambahkan stylesheet atau link ke Bootstrap jika diperlukan -->
  <<style>
    body {
    font-family: 'Inter', sans-serif;
    }

    h2 {
    text-align: center;
    }

    #editForm {
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

  <h2>Edit Book</h2>

  <form id="editForm">
    <!-- Tambahkan formulir untuk mengedit data buku -->
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required>

    <label for="genre">Genre:</label>
    <select id="genre" name="genre" required>
      <option value="fiction">Fiction</option>
      <option value="mistery">Mistery</option>
      <option value="biographic">Biographic</option>
    </select>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>

    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" required>

    <button type="button" onclick="saveChanges()">Save Changes</button>
  </form>

  <script>
    const apiUrl = 'https://api.sheety.co/72fd33f2649a4fd0f5082c032f82dcc8/dbbookstore/dbbookstore';
    const urlParams = new URLSearchParams(window.location.search);
    const bookId = urlParams.get('id');
    const editForm = document.getElementById('editForm');

    // Fetch existing book data and populate the form
    async function fetchBookData() {
      try {
        const response = await fetch(`${apiUrl}/${bookId}`);
        const data = await response.json();

        // Populate the form with existing data
        document.getElementById('title').value = data.title;
        document.getElementById('author').value = data.author;
        document.getElementById('genre').value = data.genre;
        document.getElementById('price').value = data.price;
        document.getElementById('rating').value = data.rating;
      } catch (error) {
        console.error('Error fetching book data:', error);
      }
    }

    // Save changes to the API
    async function saveChanges() {
      const formData = new FormData(editForm);

      const body = {
        dbbookstore: {
          title: formData.get('title'),
          author: formData.get('author'),
          genre: formData.get('genre'),
          price: formData.get('price'),
          rating: formData.get('rating'),
        }
      };

      const response = await fetch(`${apiUrl}/${bookId}`, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(body),
      });

      if (response.ok) {
        alert('Book updated successfully');
        // Redirect back to admin_books or perform any other necessary action
        window.location.href = '<?= base_url('./admin_books') ?>';
      } else {
        alert('Failed to update book');
      }
    }

    // Fetch existing book data on page load
    fetchBookData();
  </script>

</body>

</html>