<!-- resources/views/users.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>Users</h1>
    <ul id="userList"></ul>

    <script>
        fetch('http://127.0.0.1:8000/api/index')
            .then(response => response.json())
            .then(data => {
                let list = document.getElementById('userList');
                data.forEach(user => {
                    let li = document.createElement('li');
                    li.textContent = `${user.name} - ${user.email}`;
                    list.appendChild(li);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
