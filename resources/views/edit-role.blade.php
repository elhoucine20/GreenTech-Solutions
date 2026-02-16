<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Role</title>
    <style>


        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            padding: 25px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-color: #2c7be5;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2c7be5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #1a68d1;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Create Role</h2>

    <form method="POST" action="{{route('update-role',$role->id)}}">
        @csrf 
         @method('PUT')
        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" value="{{$role->name}}" id="name" name="role_id" placeholder="par-exemple: admin" required>
        </div>

        <button type="submit">Create</button>
    </form>
</div>

</body>
</html>
