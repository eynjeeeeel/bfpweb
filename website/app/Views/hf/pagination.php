<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
            cursor: pointer;
        }

        .active {
            font-weight: bold;
        }
        
        .num{
           text-align: center ;
        }
    </style>
    
</head>
<body>
    <div class="num" id="content">
        <!-- Your data goes here -->
        <ul>
            1 2 3 4
            <!-- Add more data items as needed -->
        </ul>
    </div>

    <ul class="pagination" id="pagination"></ul>

    <script>
        const itemsPerPage = 3; // Set the number of items per page
        const content = document.getElementById('content');
        const pagination = document.getElementById('pagination');

        const totalItems = content.children.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage);

        function showPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            for (let i = 0; i < totalItems; i++) {
                content.children[i].style.display = (i >= start && i < end) ? 'block' : 'none';
            }
        }

        function createPagination() {
            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.textContent = i;
                li.addEventListener('click', () => {
                    showPage(i);
                    updateActivePage(i);
                });
                pagination.appendChild(li);
            }
        }

        function updateActivePage(page) {
            const paginationItems = pagination.children;

            for (let i = 0; i < totalPages; i++) {
                paginationItems[i].classList.toggle('active', i + 1 === page);
            }
        }

        
    </script>
</body>
</html>
