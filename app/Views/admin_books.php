<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: Inter, sans-serif;
        }

        /* Navbar styling */
        .navbar {
            background-color: #ffff;
            /* Replace with your desired background color */
            padding: 10px;
        }

        .navbar-brand {
            font-family: 'Abhaya Libre', sans-serif;
            font-weight: 800;
            /* Set font weight to ExtraBold */
            margin-right: 100px;
        }

        .navbar-nav .nav-item {
            margin-right: 50px;
            /* Adjusted margin for each navigation item */
        }

        .navbar-nav .nav-item a {
            font-family: 'Inter', sans-serif;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown img {
            border-radius: 50%;
            /* Make the user image circular */
            margin-right: 10px;
            width: 30px;
            /* Set the desired width */
            height: 30px;
            /* Set the desired height */
            object-fit: cover;
            /* Ensure the image covers the circular container */
        }

        .dropdown button {
            border: none;
            background-color: transparent;
            padding: 0;
            cursor: pointer;
            color: #000;
            /* Set the desired text color */
            font-family: 'Inter', sans-serif;
            /* Set the Inter font */
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            text-align: left;
            list-style: none;
            background-color: #fff;
            /* Set the background color */
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .175);
            font-family: 'Inter', sans-serif;
            /* Set the Inter font */
        }

        .dropdown-menu a {
            display: block;
            padding: .5rem 1rem;
            text-decoration: none;
            color: #000;
            /* Set the text color */
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            /* Set the background color on hover */
        }

        .container img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            /* Center the image */
        }

        .desktop-1-Mss {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .auto-group-39fb-PpZ {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .vector-zxm {
            width: 50px;
            height: auto;
        }

        .navbar-43-WRK {
            display: flex;
            align-items: center;
        }

        .auto-group-zq2d-y41 {
            display: flex;
            align-items: center;
        }

        .frame-63-hVo {
            display: flex;
            align-items: center;
        }

        .frame-64-3Zf {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .raphael-books-XNM {
            width: 30px;
            height: auto;
            margin-right: 10px;
        }

        .media-ilmu-pcM,
        .catalog-JGd,
        .delivery-R6M,
        .delivery-LUD {
            margin: 0;
            padding: 0;
            margin-right: 20px;
            color: #fff;
            text-decoration: none;
        }

        .frame-65-5Au {
            display: flex;
            align-items: center;
        }

        .ellipse-1-Nvh {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            margin-right: 10px;
        }

        .delivery-1Ts {
            margin: 0;
            padding: 0;
            margin-right: 10px;
            color: #fff;
        }

        .iconamoon-arrow-up-2-light-jem {
            width: 20px;
            height: auto;
        }

        #bookList {
            margin-top: 20px;
        }

        #bookList table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #bookList table,
        #bookList th,
        #bookList td {
            border: 1px solid #ddd;
        }

        #bookList th,
        #bookList td {
            padding: 10px;
            text-align: left;
        }

        #bookList img {
            max-width: 100px;
            max-height: 150px;
        }

        #addForm {
            margin-top: 20px;
        }

        /* Added styles for the genre text box */
        .genre-box {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: #2D2E2E;
            /* Set text color to white */
        }

        /* Added styles for genre colors */
        .fiction {
            background-color: #DDFEDF;
            /* Green for Fiction */
        }

        .mistery {
            background-color: #FDEFD7;
            /* Yellow for Mystery */
        }

        .biographic {
            background-color: #E7DEFB;
            /* Purple for Biography */
        }

        /* Added styles for buttons */
        .action-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        /* Edit button styles */
        .edit-button {
            background-color: #32CA4D;
            /* Green */
            color: #fff;
            /* White text */
        }

        /* Delete button styles */
        .delete-button {
            background-color: #E75C62;
            /* Red */
            color: #fff;
            /* White text */
        }

        /* Add book button styles */
        .add-book-button {
            background-color: #1E6BFE;
            /* Blue */
            color: #fff;
            /* White text */
            border-radius: 100px;
        }

        .rounded {
            border-radius: 100px;
            /* Sesuaikan nilai dengan keinginan Anda */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./assets/raphael-books-rfw.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Media Ilmu
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('./') ?>">Dashboard</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <img src="./assets/ellipse-1-bg-eyb.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownDemosButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Melanie Refman
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownDemosButton">
                        <li><a class="dropdown-item" href="<?= base_url('./welcome') ?>">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-3 d-flex justify-content-between">
        <form class="form-inline w-75">
            <input class="form-control mr-sm-2 w-75 rounded" type="search" placeholder="Search" id="searchInput" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="searchBooks()">Search</button>
        </form>

        <button class="action-button add-book-button" onclick="goToAddBookPage()">Add New Book +</button>
    </div>

    <div id="bookList">
        <h2>Book List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="bookTableBody"></tbody>
        </table>
    </div>

    <script>
        const apiUrl = 'https://api.sheety.co/72fd33f2649a4fd0f5082c032f82dcc8/dbbookstore/dbbookstore';
        const bookTableBody = document.getElementById('bookTableBody');

        // Function to filter books based on search term
        function filterBooks(books, searchTerm) {
            searchTerm = searchTerm.toLowerCase();
            return books.filter(book =>
                book.title.toLowerCase().includes(searchTerm) ||
                book.author.toLowerCase().includes(searchTerm) ||
                (book.genre && book.genre.toLowerCase().includes(searchTerm))
            );
        }

        window.searchBooks = function() {
            const searchTerm = document.getElementById("searchInput").value;
            fetch(apiUrl)
                .then(response => response.json())
                .then(function(data) {
                    const filteredBooks = filterBooks(data.dbbookstore, searchTerm);
                    renderFilteredBooks(filteredBooks);
                })
                .catch(error => {
                    alert("Terjadi kesalahan dalam mengambil data");
                });
        };

        // Function to render filtered books
        function renderFilteredBooks(books) {
            // Clear existing table rows
            bookTableBody.innerHTML = '';

            // Add new rows based on the filtered data
            books.forEach(book => {
                const row = document.createElement('tr');
                // Check if book.genre is defined before calling toLowerCase
                const genreClass = getGenreClass(book.genre && book.genre.toLowerCase());
                row.innerHTML = `
                    <td>${book.id}</td>
                    <td>${book.title}</td>
                    <td>${book.author}</td>
                    <td><span class="genre-box ${genreClass}">${book.genre}</span></td>
                    <td>${book.price}</td>
                    <td>${book.rating}</td>
                    <td>
                        <button class="action-button edit-button" onclick="editBook(${book.id})">Edit</button>    
                        <button class="action-button delete-button" onclick="deleteBook(${book.id})">Delete</button>
                    </td>
                `;
                bookTableBody.appendChild(row);
            });
        }

        // Function to fetch and display books
        async function fetchBooks() {
            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                // Clear existing table rows
                bookTableBody.innerHTML = '';

                // Add new rows based on the fetched data
                data.dbbookstore.forEach(book => {
                    const row = document.createElement('tr');
                    // Check if book.genre is defined before calling toLowerCase
                    const genreClass = getGenreClass(book.genre && book.genre.toLowerCase());
                    row.innerHTML = `
                        <td>${book.id}</td>
                        <td>${book.title}</td>
                        <td>${book.author}</td>
                        <td><span class="genre-box ${genreClass}">${book.genre}</span></td>
                        <td>${book.price}</td>
                        <td>${book.rating}</td>
                        <td>
                            <button class="action-button edit-button" onclick="editBook(${book.id})">Edit</button>    
                            <button class="action-button delete-button" onclick="deleteBook(${book.id})">Delete</button>
                        </td>
                    `;
                    bookTableBody.appendChild(row);
                });
            } catch (error) {
                console.error('Error fetching books:', error);
            }
        }


        // Function to navigate to the add book page
        function goToAddBookPage() {
            window.location.href = '<?= base_url('./add_books') ?>';
        }

        function editBook(bookId) {
            window.location.href = `<?= base_url('./edit_books') ?>?id=${bookId}`;
        }

        // Function to get genre class based on genre name
        function getGenreClass(genre) {
            switch (genre) {
                case 'fiction':
                    return 'fiction';
                case 'mistery':
                    return 'mistery';
                case 'biographic':
                    return 'biographic';
                default:
                    return '';
            }
        }

        // Function to delete a book
        async function deleteBook(bookId) {
            const response = await fetch(`${apiUrl}/${bookId}`, {
                method: 'DELETE',
            });

            if (response.ok) {
                // Fetch and display the updated book list
                fetchBooks();
            } else {
                alert('Failed to delete book');
            }
        }

        // Initial fetch and display of books
        fetchBooks();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>