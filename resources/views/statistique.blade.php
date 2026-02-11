<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Statistique Dashboard</title>

<style>

/* ====== COLORS (leaf / earth theme) ====== */
:root{
    --leaf-dark:#14532d;
    --leaf:#16a34a;
    --leaf-light:#dcfce7;
    --earth:#92400e;
    --earth-light:#fef3c7;
    --danger:#dc2626;
    --gray:#6b7280;
}

/* ====== GLOBAL ====== */
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f9fafb;
    margin:0;
    padding:40px;
}

h1{
    color:var(--leaf-dark);
    margin-bottom:10px;
}

p{
    color:var(--gray);
    margin-bottom:30px;
}

/* ====== CARDS ====== */
.stats{
    display:flex;
    gap:20px;
    margin-bottom:40px;
}

.card{
    flex:1;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    color:var(--gray);
    margin-bottom:10px;
}

.card span{
    font-size:35px;
    font-weight:bold;
    color:var(--leaf);
}

/* ====== TABLE ====== */
.section{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

.section h2{
    margin-bottom:20px;
    color:var(--leaf-dark);
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:var(--leaf-light);
}

th, td{
    padding:12px;
    text-align:left;
}

tr{
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#f0fdf4;
}

/* ====== BUTTONS ====== */
.btn{
    padding:6px 14px;
    border-radius:12px;
    border:none;
    cursor:pointer;
    font-size:14px;
    transition:0.3s;
}

.btn-edit{
    background:var(--earth);
    color:white;
}

.btn-edit:hover{
    opacity:0.85;
}

.btn-delete{
    background:var(--danger);
    color:white;
}

.btn-delete:hover{
    opacity:0.85;
}

.badge{
    background:var(--leaf);
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

.no-role{
    color:var(--danger);
    font-weight:bold;
}

.btn-add{
    background:var(--leaf-dark);
    color:white;
}

.btn-add:hover{
    opacity:0.85;
}

</style>
</head>
<body>

<h1>📊 Statistique Dashboard</h1>
<p>Gestion des rôles et utilisateurs</p>

<!-- STATS CARDS -->
<div class="stats">
    <div class="card">
        <h3>Total Users</h3>
        <span>15</span>
    </div>
    <div class="card">
        <h3>Total Roles</h3>
        <span>4</span>
    </div>
</div>

<!-- ROLES SECTION -->
<div class="section">
    <h2>Roles</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>
                    <button class="btn btn-edit">Modifier</button>
                    <button class="btn btn-delete">Supprimer</button>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

<!-- USERS SECTION -->
<div class="section">
    <h2>Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->role)
                <td><span class="badge">{{$user->role}}</span></td>
                @else
                <td>
                    <span class="no-role">No Role</span>
                    <button class="btn btn-add">Add Role</button>
                </td>
                @endif
            </tr>
            <!-- <tr>
                <td>2</td>
                <td>Sara</td>
                <td>sara@mail.com</td>
                <td>
                    <span class="no-role">No Role</span>
                    <button class="btn btn-add">Add Role</button>
                </td>
            </tr> -->
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
